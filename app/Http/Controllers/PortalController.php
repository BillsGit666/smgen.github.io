<?php

namespace App\Http\Controllers;

use App\Mail\sendEmail;
use App\Models\Contact;
use App\Models\Kantorwilayah;
use App\Models\Platform;
use App\Models\Platform_children;
use App\Models\Portofolio;
use App\Models\Service;
use App\Models\Smgen_team;
use App\Models\Struktur_kanwil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PortalController extends Controller
{
    public function index()
    {
        $user = session()->get('user');

        // dd($user);
        return view('Portal.pages.index');
    }
    public function contact()
    {
        $service = Service::all();
        $kantorwilayah = Kantorwilayah::all();
        $user = session()->get('user');


        $card = [
            'service' => $service,
            'kantorwilayah' => $kantorwilayah,
            'user' => $user,

        ];
        
        return view('Portal.pages.contact', ['card' => $card]);
    }
    public function postcontact(Request $request)
    {
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

        $service = Service::all();
        $kantorwilayah = Kantorwilayah::all();



        $card = [
            'service' => $service,
            'kantorwilayah' => $kantorwilayah

        ];

        // Mail::to("suaramerdekageneration@gmail.com")->send(new sendEmail($contact));

        

        session()->flash('success', 'Data berhasil disimpan.');

        return view('Portal.pages.contact', ['card' => $card]);
    }
    public function platform()
    {
        $get_platform = Platform::select('*')->get();
        $user = session()->get('user');


        $data = [
            'get_platform' => $get_platform,
            'user' => $user,

        ];

        return view('Portal.pages.platform', ['data' => $data]);
    }
    public function platform1()
    {
        return view('Portal.pages.platform1');
    }
    public function detailplatform($platform_name)
    {
        $user = session()->get('user');

        $platform = Platform::where('name_socmed', $platform_name)->firstOrFail();
    
        $get_data = Platform_children::where('platform_id', $platform->id)->get();

        $total_children = Platform_children::whereHas('platform', function ($query) use ($platform_name) {
            $query->where('name_socmed', $platform_name);
        })->count();
    
    
        $data = [
            'get_data' => $get_data,
            'platform' => $platform,
            'total_children' => $total_children,
            'user' => $user,
        ];

    
        return view('Portal.pages.detailplatform', ['data' => $data]);
    }
    
    
    public function about()
    {
        $user = session()->get('user');

        $data = [
            'user' => $user
        ];

        return view('Portal.pages.about', ['data' => $data]);
    }
    public function service()
    {
        $get_service = Service::select('*')->get();
        $user = session()->get('user');
        

        
        $data = [
            'get_service' => $get_service,
            'user' => $user,
        ];

        return view('Portal.pages.service', ['data'=> $data]);
    }
    public function portofolio()
    {
        $get_portofolio = Portofolio::select('*')->get();
        $user = session()->get('user');

        
        $data = [
            'get_portofolio' => $get_portofolio,
            'user' => $user,

        ];

        return view('Portal.pages.portofolio', ['data' => $data]);
    }
    public function ourteam()
    {
        $get_ceo = Smgen_team::where('position_id', 12)
                    ->whereHas('position', function($query) {
                        $query->where('name', 'CEO Suara Merdeka Network');
                    })
                    ->first();
        // $get_smgen = Smgen_team::select('*')->get();
        $get_smgen = Smgen_team::whereNotIn('position_id', [12])->get();
        $get_kanwil = Kantorwilayah::select('*')->get();
        $user = session()->get('user');


        $data = [
            'get_kanwil' => $get_kanwil,
            'get_ceo' => $get_ceo,
            'get_smgen' => $get_smgen,
            'user' => $user,

        ];

        return view('Portal.pages.ourteam', ['data' => $data]);
    }
    public function detailourteam($team_name)
    {
        $kantorwilayah = Kantorwilayah::where('name_kantorwilayah', $team_name)->firstOrFail();
        $user = session()->get('user');

    
        $get_data = Struktur_kanwil::where('kantorwilayah_id', $kantorwilayah->id)->get();

        $kantorwilayah_jumlah = Struktur_kanwil::whereHas('kantorwilayah', function ($query) use ($team_name) {
            $query->where('name_kantorwilayah', $team_name);
        })->count();
    
    
        $data = [
            'get_data' => $get_data,
            'kantorwilayah_jumlah' => $kantorwilayah_jumlah,
            'kantorwilayah' => $kantorwilayah,
            'user' => $user,
        ];  
        // dd($data);
           
        return view('Portal.pages.detailourteam', ['data' => $data]);
    }
    public function aboutnet()
    {
        $user = session()->get('user');

        $get_service = Service::take(4)->get();
        $get_smgen = Smgen_team::select('*')->get();


        $data = [
            'user' => $user,
            'get_service' => $get_service,
            'get_smgen' => $get_smgen
        ]; 
        return view('Portal.pages.aboutnet', ['data' => $data]);
    }
    public function aboutgen()
    {
        $user = session()->get('user');

        $get_service = Service::take(4)->get();
        $get_smgen = Smgen_team::select('*')->get();


        $data = [
            'user' => $user,
            'get_service' => $get_service,
            'get_smgen' => $get_smgen
        ]; 

        return view('Portal.pages.aboutgen', ['data' => $data]);
    }
    public function test()
    {
        return view('Portal.pages.test');
    }
    public function view_test()
    {
        $user = session()->get('user');

        $get_service = Service::take(2)->get();
        $get_portofolio = Portofolio::select('*')->get();


        $data = [
            'user' => $user,
            'get_service' => $get_service,
            'get_portofolio' => $get_portofolio
        ]; 
        return view('Portal.pages.view', ['data' => $data]);
    }
}
