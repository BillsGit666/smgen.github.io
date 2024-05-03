<?php

namespace App\Http\Controllers;

use App\Models\Districts;
use App\Models\Provinces;
use App\Models\Regencies;
use App\Models\Users_portal;
use App\Models\Villages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function generateMembership()
    {
        $date = now()->format('Ym');
        $lastMembership = Users_portal::latest()->first();

        if ($lastMembership) {
            $lastMonth = substr($lastMembership->membership, 6, 6); 
            if ($lastMonth == $date) {
                $lastNumber = intval(substr($lastMembership->membership, -3));
            } else {
                $lastNumber = 0; 
            }
        } else {
            $lastNumber = 0; 
        }

        $newNumber = str_pad($lastNumber + 1, 3, '0', STR_PAD_LEFT);

        if ($lastMembership && substr($lastMembership->membership, 6, 6) != $date) {
            $newNumber = '001';
        }

        $membership = "smgen-" . now()->format('Ymd') . "-$newNumber"; 

        return $membership;
    }
    public function login()
    {
        return view('auth.login');
    }
    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();
            $roleName = $user->role->name;
            session()->put('roles', $roleName);
            return redirect()->intended('/cms');
        } else {
            return back()->withErrors(['email' => 'Email atau password salah']);
        }
    }

    public function login_user()
    {
        return view('auth.login_user');
    }
    public function Check_login_user(Request $request)
    {
        $credentials = $request->only('email', 'password');

        $user = Users_portal::where('email', $credentials['email'])->first();
    
        if (!$user || !password_verify($credentials['password'], $user->password)) {
            return redirect()->route('login_user')->withErrors(['error' => 'Invalid credentials']);
        }
    
        $userData = [
            'name' => $user->name,
        ];
    
        session()->put('user', $userData);
    
        return redirect()->route('portal');
    }

    public function form_register_user()
    {
        $get_provinsi = Provinces::select('*')->get();
        $membership = $this->generateMembership();

        $card = [
            'get_provinsi' => $get_provinsi,
            'membership' => $membership
        ];

        return view('auth.register_user', ['card' => $card]);
    }

    public function getkota(Request $request)
    {
        $select = $request->get('select');
        $value = $request->get('value');
        $dependent = $request->get('dependent');
        
        $data = Regencies::where('province_id', $value)->get();
    
        $output = '<option value="">~ Pilih Asal Kota/Kabupaten ~ </option>';
        
        foreach($data as $row)
        {
            $output .= '<option value="'.$row->id.'">'.$row->name.'</option>';
        }
        
        return response()->json($output);
    }
    public function getkecamatan(Request $request)
    {
        $select = $request->get('select');
        $value = $request->get('value');
        $dependent = $request->get('dependent');
        
        $data = Districts::where('regency_id', $value)->get();
    
        $output = '<option value="">~ Pilih Asal Kecamatan ~</option>';
        
        foreach($data as $row)
        {
            $output .= '<option value="'.$row->id.'">'.$row->name.'</option>';
        }
        
        return response()->json($output);
    }
    public function getkelurahan(Request $request)
    {
        $select = $request->get('select');
        $value = $request->get('value');
        $dependent = $request->get('dependent');
        
        $data = Villages::where('district_id', $value)->get();
    
        $output = '<option value="">~ Pilih Asal Kelurahan ~ </option>';
        
        foreach($data as $row)
        {
            $output .= '<option value="'.$row->id.'">'.$row->name.'</option>';
        }
        
        return response()->json($output);
    }
    public function register_user(Request $request)
    {
        $get_provinsi = Provinces::select('*')->get();
        $membership = $this->generateMembership();
    
        $card = [
            'get_provinsi' => $get_provinsi,
            'membership' => $membership
        ];
    
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string',
            'role_id' => 'required|string',
            'password' => 'required|string|min:7|confirmed',
            'provinsi' => 'required|string',
            'kota' => 'required|string',
            'kecamatan' => 'required|string',
            'kelurahan' => 'required|string',
        ]);
    
        $data = $request->all();
    
        $hashedPassword = Hash::make($data['password']);
    
        $user = new Users_portal();
        $user->membership = $membership;
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->role_id = $data['role_id'];
        $user->provinces_id = $data['provinsi'];
        $user->regencies_id = $data['kota'];
        $user->districts_id = $data['kecamatan'];
        $user->villages_id = $data['kelurahan'];
        $user->password = $hashedPassword;
        $user->save();
    
        session()->flash('success', 'Data berhasil disimpan.');
    
        return view('auth.register_user', ['data' => $data, 'card' => $card]);
    }    
    
    
    public function logout(Request $request)
    {
        Auth::logout(); 
        $request->session()->invalidate(); 
        $request->session()->regenerateToken(); 
        return redirect('/');
    }
    public function logout_portal()
    {
        Auth::logout();
        session()->forget('user');
        return redirect('/');
    }
}
