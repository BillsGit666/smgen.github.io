<?php

namespace App\Http\Controllers;

use App\Mail\sendEmail;
use App\Models\Contact;
use App\Models\Kantorwilayah;
use App\Models\Platform;
use App\Models\Platform_children;
use App\Models\Portofolio;
use App\Models\Position;
use App\Models\Provinces;
use App\Models\Role;
use App\Models\Service;
use App\Models\Smgen_team;
use App\Models\User;
use App\Models\Users_portal;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class DashboardController extends Controller
{
    public function home()
    {

        $role = Session::get('roles');

        $total_project = Contact::count();
        $total_services = Service::count();
        $total_portofolio = Portofolio::count();
        $total_platform = Platform_children::count();

        $card = [
            'total_project' => $total_project,
            'total_services' => $total_services,
            'total_portofolio' => $total_portofolio,
            'total_platform' => $total_platform
        ];
    
        if ($role === 'superadmin' || $role === 'developer') {
            return view('Dashboard.pages.home' , ['card' => $card]);
        } elseif ($role === 'admin') {
            return view('Dashboard.pages.home_admin');
        } else {
            return redirect('/login')->with('error', 'Anda tidak memiliki akses ke dashboard');
        }
    }
    
    public function services(Request $request)
    {
        $keyword = $request->keyword;

        $get_data = Service::where('title_services', 'LIKE', '%'.$keyword.'%')
        ->orWhere('description_services', 'LIKE', '%'.$keyword.'%')->paginate(10);

        $data = [
            'get_data' => $get_data,
            'keyword' => $keyword
        ];


        return view('Dashboard.pages.service', ['data' => $data]);
    }
    public function addservices()
    {
        return view('Dashboard.pages.services.add');
    }
    public function postservices(Request $request)
    {
        $data = $request->validate([
            'thumbnail_services' => 'required|image|mimes:jpeg,png,jpg,gif',
            'title_services' => 'required|string',
            'description_services' => 'required|string',
        ]);

        $fileName = $request->file('thumbnail_services')->getClientOriginalName();


        $services = new Service();
        $services->thumbnail_services = $request->file('thumbnail_services')->storeAs('services', $fileName);
        $services->title_services = $request->title_services;
        $services->description_services = $request->description_services;

        $services->save();

        session()->flash('success', 'Data berhasil disimpan.');

        return view('Dashboard.pages.services.add',['data'=>$data]);
    }
    public function editservices($id)
    {
        $data = Service::find($id);

        return view('Dashboard.pages.services.edit', ['data' => $data]);
    }
    public function updateservices($id, Request $request)
    {
        $data = Service::find($id);

        $input = $request->all();
    
        if ($thumbnail_services = $request->file('thumbnail_services')) {
            Storage::delete($data->thumbnail_services);
    
            $thumbnailPath = $thumbnail_services->store('services');
            $data->thumbnail_services = $thumbnailPath;
        }else{
            unset($input['thumbnail_services']);
        }
    
        $data->update($input);
    
        return redirect()->route('services');
    }
    public function destroyservices ($id)
    {
        $data = Service::find($id);
        if ($data->thumbnail_services) {
            Storage::delete($data->thumbnail_services);
        }
        $data->delete();
        return redirect()->route('services');
    }



    public function user(Request $request)
    {
        $keyword = $request->keyword;

        $get_data = User::where('name', 'LIKE', '%'.$keyword.'%')
        ->orWhere('email', 'LIKE', '%'.$keyword.'%')->paginate(10);

        $data = [
            'get_data' => $get_data,
            'keyword' => $keyword
        ];
        return view('Dashboard.pages.user', ['data' => $data]);
    }
    public function adduser()
    {
        $roles = Role::all();

        $data = [
            'roles' => $roles
        ];

        return view('Dashboard.pages.user.add', ['data' => $data]);
    }
    public function postuser(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string',
            'role_id' => 'required|string',
            'password' => 'required|string',
        ]);
    
        $hashedPassword = Hash::make($data['password']);
    
        $user = new User();
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->role_id = $data['role_id'];
        $user->password = $hashedPassword;
        $user->save();
    
        session()->flash('success', 'Data berhasil disimpan.');
    
        $roles = Role::all();
    
        $data = [
            'roles' => $roles
        ];
    
        return view('Dashboard.pages.user.add', ['data' => $data]);
    }
    
    
    public function destroyuser ($id)
    {
        $data = User::find($id);
        $data->delete();
        return redirect()->route('user_form');
    }

    public function edituser ($id)
    {
        $data = User::find($id);
        

        $roles = Role::all();

        $card = [
            'roles' => $roles
        ];

        return view('Dashboard.pages.user.edit', ['data' => $data, 'card' => $card]);
    }
    public function updateuser($id, Request $request)
    {
        $user = User::find($id);
    
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->role_id = $request->input('role_id');
    
        if ($request->has('password')) {
            $user->password = Hash::make($request->input('password'));
        }
    
        $user->save();
    
        return redirect()->route('user_form');
    }
    
    
    public function portofolio(Request $request)
    {
        $keyword = $request->keyword;

        $get_data = Portofolio::where('title_portofolio', 'LIKE', '%'.$keyword.'%')
        ->orWhere('description', 'LIKE', '%'.$keyword.'%')
        ->orWhere('link_portofolio', 'LIKE', '%'.$keyword.'%')->paginate(10);

        $data = [
            'get_data' => $get_data,
            'keyword' => $keyword
        ];

        return view('Dashboard.pages.portofolio', ['data' => $data]);
    }
    public function addportofolio()
    {
        return view('Dashboard.pages.portofolio.add');
    }
    public function postportofolio(Request $request)
    {
        $data = $request->validate([
            'thumbnail_portofolio' => 'required|image|mimes:jpeg,png,jpg,gif',
            'title_portofolio' => 'required|string',
            'description' => 'required|string',
            'link_portofolio' => 'required|string',
        ]);

        $fileName = $request->file('thumbnail_portofolio')->getClientOriginalName();


        $portofolio = new Portofolio();
        $portofolio->thumbnail_portofolio = $request->file('thumbnail_portofolio')->storeAs('portofolio', $fileName);
        $portofolio->title_portofolio = $request->title_portofolio;
        $portofolio->description = $request->description;
        $portofolio->link_portofolio = $request->link_portofolio;

        $portofolio->save();

        session()->flash('success', 'Data berhasil disimpan.');

        return view('Dashboard.pages.portofolio.add',['data'=>$data]);
    }
    public function editportofolio($id)
    {
        $data = Portofolio::find($id);

        return view('Dashboard.pages.portofolio.edit', ['data' => $data]);
    }
    public function updateportofolio($id, Request $request)
    {
        $data = Portofolio::find($id);

        $input = $request->all();
    
        if ($thumbnail_portofolio = $request->file('thumbnail_portofolio')) {
            Storage::delete($data->thumbnail_portofolio);
    
            $thumbnailPath = $thumbnail_portofolio->store('portofolio');
            $data->thumbnail_portofolio = $thumbnailPath;
        }else{
            unset($input['thumbnail_portofolio']);
        }
    
        $data->update($input);
    
        return redirect()->route('portofolio');
    }
    public function destroyportofolio ($id)
    {
        $data = Portofolio::find($id);
        if ($data->thumbnail_portofolio) {
            Storage::delete($data->thumbnail_portofolio);
        }
        $data->delete();
        return redirect()->route('portofolio');
    }


    public function platform(Request $request)
    {
        $keyword = $request->keyword;

        $get_data = Platform::where('name_socmed', 'LIKE', '%'.$keyword.'%')->paginate(10);

        $data = [
            'get_data' => $get_data,
            'keyword' => $keyword
        ];

        return view('Dashboard.pages.platform',['data' => $data] );
    }
    public function addplatform()
    {
        return view('Dashboard.pages.platform.add');
    }
    public function postplatform(Request $request)
    {
        $data = $request->validate([
            'thumbnail_platform' => 'required|image|mimes:jpeg,png,jpg,gif',
            'name_socmed' => 'required|string',
        ]);

        $fileName = $request->file('thumbnail_platform')->getClientOriginalName();


        $platform = new Platform();
        $platform->name_socmed = $request->name_socmed;
        $platform->thumbnail_platform = $request->file('thumbnail_platform')->storeAs('platform', $fileName);

        $platform->save();

        session()->flash('success', 'Data berhasil disimpan.');

        return view('Dashboard.pages.platform.add',['data'=>$data]);
    }
    public function editplatform($id)
    {
        $data = Platform::find($id);

        return view('Dashboard.pages.platform.edit', ['data' => $data]);
    }
    public function updateplatform($id, Request $request)
    {
        $data = Platform::find($id);

        $input = $request->all();
    
        if ($thumbnail_platform = $request->file('thumbnail_platform')) {
            Storage::delete($data->thumbnail_platform);
    
            $thumbnailPath = $thumbnail_platform->store('platform');
            $data->thumbnail_platform = $thumbnailPath;
        }else{
            unset($input['thumbnail_platform']);
        }
    
        $data->update($input);
    
        return redirect()->route('platform');
    }
    
    
    
    public function destroyplatform ($id)
    {
        $data = Platform::find($id);
        if ($data->thumbnail_platform) {
            Storage::delete($data->thumbnail_platform);
        }
        $data->delete();
        return redirect()->route('platform');
    }
    
    
    public function contact(Request $request)
    {
        $keyword = $request->keyword;

        $get_data = Contact::where('klien', 'LIKE', '%'.$keyword.'%')
        ->orWhere('email', 'LIKE', '%'.$keyword.'%')
        ->orWhere('telepon', 'LIKE', '%'.$keyword.'%')
        ->orWhere('service', 'LIKE', '%'.$keyword.'%')
        ->orWhere('detail', 'LIKE', '%'.$keyword.'%')
        ->orWhere('deadline', 'LIKE', '%'.$keyword.'%')
        ->orWhere('status', 'LIKE', '%'.$keyword.'%')
        ->paginate(10);
        
        $get_data->transform(function ($item) {
            $item->created_at_formatted = Carbon::parse($item->created_at)->format('d-m-Y');
            return $item;
        });

        $data = [
            'get_data' => $get_data,
            'keyword' => $keyword
        ];

        return view('Dashboard.pages.contact', ['data' => $data]);
    }
    public function addcontact()
    {
        $service = Service::all();
        $kantorwilayah = Kantorwilayah::all();

        $card = [
            'service' => $service,
            'kantorwilayah' => $kantorwilayah
        ];

        return view('Dashboard.pages.contact.add', ['card' => $card]);
    }
    public function postcontact (Request $request)
    {
        $service = Service::all();
        $kantorwilayah = Kantorwilayah::all();

        $card = [
            'service' => $service,
            'kantorwilayah' => $kantorwilayah
        ];

        $data = $request->validate([
            'klien' => 'required|string',
            'email' => 'required|string',
            'telepon' => 'required|string',
            'service' => 'required|array',
            'kantorwilayah' => 'required|array',
            'detail' => 'required|string',
            'deadline' => 'required|string',
            'status' => 'required|string',
        ]);

        $contact = new Contact();
        $contact->klien = $request->klien;
        $contact->email = $request->email;
        $contact->telepon = $request->telepon;
        $contact->service = implode(',', $data['service']);
        $contact->kantorwilayah = implode(',', $data['kantorwilayah']);
        $contact->detail = $request->detail;
        $contact->deadline = $request->deadline;
        $contact->status = $request->status;

        $contact->save();

        // Mail::to("suaramerdekageneration@gmail.com")->send(new sendEmail($contact));
        

        session()->flash('success', 'Data berhasil disimpan.');

        return view('Dashboard.pages.contact.add', ['card' => $card]);
    }
    public function editcontact ($id)
    {
        $data = Contact::find($id);
        
        
        return view('Dashboard.pages.contact.edit', ['data' => $data]);
    }
    public function updatecontact ($id, Request $request)
    {
        $contact = Contact::find($id);
        $contact->update($request->except(['_token','submit']));
        Mail::to("suaramerdekageneration@gmail.com")->send(new sendEmail($contact));
        return redirect()->route('contact');
    }
    public function destroycontact ($id)
    {
        $data = Contact::find($id);
        $data->delete();
        return redirect()->route('contact');
    }


    public function smgen_team(Request $request)
    {
        $keyword = $request->keyword;

        $get_data = Smgen_team::where('name_team', 'LIKE', '%'.$keyword.'%')->paginate(10);
        $get_position = Position::select('*')->get();

        $card = [
            'get_data' => $get_data,
            'get_position' => $get_position,
            'keyword' => $keyword
        ];

        return view('Dashboard.pages.smgen_team', ['card' => $card]);
    }
    public function addsmgen()
    {
        $position = Position::all();

        $data = [
            'position' => $position
        ];

        return view('Dashboard.pages.smgen_team.add', ['data' => $data]);
    }
    public function postsmgen(Request $request)
    {

        $data = $request->validate([
            'thumbnail_team' => 'required|image|mimes:jpeg,png,jpg,gif',
            'name_team' => 'required|string',
            'position_id' => 'required|string',
        ]);

        $fileName = $request->file('thumbnail_team')->getClientOriginalName();


        $smgen_team = new Smgen_team();
        $smgen_team->thumbnail_team = $request->file('thumbnail_team')->storeAs('smgen_team', $fileName);
        $smgen_team->name_team = $request->name_team;
        $smgen_team->position_id = $request->position_id;

        $smgen_team->save();

        $position = Position::all();
    
        $data = [
            'position' => $position
        ];

        session()->flash('success', 'Data berhasil disimpan.');

        return view('Dashboard.pages.smgen_team.add', ['data'=>$data]);
    }
    public function editsmgen($id)
    {
        $data = Smgen_team::find($id);

        $position = Position::all();

        $card = [
            'position' => $position
        ];

        return view('Dashboard.pages.smgen_team.edit', ['data' => $data, 'card' => $card]);

    }
    public function updatesmgen($id, Request $request)
    {
        $data = Smgen_team::find($id);

        $data->name_team = $request->input('name_team');
        $data->position_id = $request->input('position_id');
    
        if ($thumbnail_team = $request->file('thumbnail_team')) {
            Storage::delete($data->thumbnail_team);
    
            $thumbnailPath = $thumbnail_team->store('smgen_team');
            $data->thumbnail_team = $thumbnailPath;
        }else{
            unset($input['thumbnail_team']);
        }
    
        $data->save();
    
        return redirect()->route('smgen_team');
    }

    public function destroysmgen($id)
    {
        $data = Smgen_team::find($id);
        if ($data->thumbnail_team) {
            Storage::delete($data->thumbnail_team);
        }
        $data->delete();
        return redirect()->route('smgen_team');
    }
    public function kantorwilayah(Request $request)
    {
        $keyword = $request->keyword;

        $get_data = Kantorwilayah::where('name_kantorwilayah', 'LIKE', '%'.$keyword.'%')
        ->orWhere('description_kantorwilayah', 'LIKE', '%'.$keyword.'%')->paginate(10);

        $data = [
            'get_data' => $get_data,
            'keyword' => $keyword
        ];
        
        return view('Dashboard.pages.kantorwilayah', ['data' => $data]);
    }
    public function addkantorwilayah ()
    {
        return view('Dashboard.pages.kantorwilayah.add');
    }
    public function postkantorwilayah(Request $request)
    {
        $data = $request->validate([
            'thumbnail_kantorwilayah' => 'required|image|mimes:jpeg,png,jpg,gif',
            'name_kantorwilayah' => 'required|string',
            'description_kantorwilayah' => 'required|string',
        ]);

        $fileName = $request->file('thumbnail_kantorwilayah')->getClientOriginalName();


        $kantorwilayah = new Kantorwilayah();
        $kantorwilayah->thumbnail_kantorwilayah = $request->file('thumbnail_kantorwilayah')->storeAs('kantorwilayah', $fileName);
        $kantorwilayah->name_kantorwilayah = $request->name_kantorwilayah;
        $kantorwilayah->description_kantorwilayah = $request->description_kantorwilayah;

        $kantorwilayah->save();

        session()->flash('success', 'Data berhasil disimpan.');

        return view('Dashboard.pages.kantorwilayah.add',['data'=>$data]);
    }
    public function destroykantorwilayah($id)
    {
        $data = Kantorwilayah::find($id);
        if ($data->thumbnail_kantorwilayah) {
            Storage::delete($data->thumbnail_kantorwilayah);
        }
        $data->delete();
        return redirect()->route('kantorwilayah');
    }
    public function editkantorwilayah($id)
    {
        $data = Kantorwilayah::find($id);

        return view('Dashboard.pages.kantorwilayah.edit', ['data' => $data]);
    }
    public function updatekantorwilayah($id, Request $request)
    {
        $data = Kantorwilayah::find($id);

        $data->name_kantorwilayah = $request->input('name_kantorwilayah');
        $data->description_kantorwilayah = $request->input('description_kantorwilayah');
        
        if ($request->hasFile('thumbnail_kantorwilayah')) {
            Storage::delete($data->thumbnail_kantorwilayah);
        
            $thumbnail_kantorwilayah = $request->file('thumbnail_kantorwilayah');
            $thumbnailPath = $thumbnail_kantorwilayah->store('kantorwilayah');
            $data->thumbnail_kantorwilayah = $thumbnailPath;
        }
        
        $data->save();
        
        return redirect()->route('kantorwilayah');
        
    }

    public function position(Request $request)
    {
        $keyword = $request->keyword;

        $get_data = Position::where('name', 'LIKE', '%'.$keyword.'%')->paginate(8);
        
        $data = [
            'get_data' => $get_data,
            'keyword' => $keyword
        ];

        return view('Dashboard.pages.position', ['data' => $data]);
    }
    public function addposition()
    {
        return view('Dashboard.pages.position.add');
    }
    public function postposition(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
        ]);



        $Position = new Position();
        $Position->name = $request->name;

        $Position->save();

        session()->flash('success', 'Data berhasil disimpan.');

        return view('Dashboard.pages.position.add',['data'=>$data]);
    }
    public function editposition($id)
    {
        $data = Position::find($id);

        return view('Dashboard.pages.position.edit', ['data' => $data]);
    }
    public function updateposition($id, Request $request)
    {
        $data = Position::find($id);

        $data->name= $request->input('name');
        
        $data->save();
        
        return redirect()->route('position');
    }
    public function destroyposition($id)
    {
        $data = Position::find($id);
        $data->delete();

        return redirect()->route('position');
    }

    public function user_portal(Request $request)
    {
        $keyword = $request->keyword;

        $get_data = Users_portal::where('name', 'LIKE', '%'.$keyword.'%')
        ->orWhere('email', 'LIKE', '%'.$keyword.'%')
        ->orWhereHas('provinces', function ($query) use ($keyword) {
            $query->where('name', 'LIKE', '%'.$keyword.'%');
        })
        ->orWhereHas('regencies', function ($query) use ($keyword) {
            $query->where('name', 'LIKE', '%'.$keyword.'%');
        })
        ->orWhereHas('districts', function ($query) use ($keyword) {
            $query->where('name', 'LIKE', '%'.$keyword.'%');
        })
        ->orWhereHas('villages', function ($query) use ($keyword) {
            $query->where('name', 'LIKE', '%'.$keyword.'%');
        })
        ->paginate(15);

        $data = [
            'get_data' => $get_data,
            'keyword' => $keyword
        ];
        return view('Dashboard.pages.user_portal', ['data' => $data]);
    }
    public function adduser_portal()
    {
        $roles = Role::where('id', 4)->get();
        $get_provinsi = Provinces::select('*')->get();
        $membership = $this->generateMembership();


        $data = [
            'roles' => $roles,
            'get_provinsi' => $get_provinsi,
            'membership' => $membership
        ];

        return view('Dashboard.pages.user_portal.add', ['data' => $data]);
    }
    public function postuser_portal(Request $request)
    {
        $get_provinsi = Provinces::select('*')->get();
        $membership = $this->generateMembership();

        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string',
            'role_id' => 'required|string',
            'password' => 'required|string',
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
    
        $roles = Role::where('id', 4)->get();
    
        $data = [
            'roles' => $roles,
            'get_provinsi' => $get_provinsi,
            'membership' => $membership
        ];
    
        return view('Dashboard.pages.user_portal.add', ['data' => $data]);
    }
    
    
    public function destroyuser_portal ($id)
    {
        $data = Users_portal::find($id);
        $data->delete();
        return redirect()->route('user_portal');
    }

    public function edituser_portal ($id)
    {
        $data = Users_portal::find($id);
        $get_provinsi = Provinces::select('*')->get();
        

        $roles = Role::all();

        $card = [
            'roles' => $roles,
            'get_provinsi' => $get_provinsi
        ];

        return view('Dashboard.pages.user_portal.edit', ['data' => $data, 'card' => $card]);
    }
    public function updateuser_portal($id, Request $request)
    {
        $user = Users_portal::find($id);

        $data = $request->all();

        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->role_id = $data['role_id'];
        $user->provinces_id = $data['provinsi'];
        $user->regencies_id = $data['kota'];
        $user->districts_id = $data['kecamatan'];
        $user->villages_id = $data['kelurahan'];
    
        if ($request->has('password')) {
            $user->password = Hash::make($request->input('password'));
        }
    
        $user->save();
    
        return redirect()->route('user_portal');
    }
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
}
