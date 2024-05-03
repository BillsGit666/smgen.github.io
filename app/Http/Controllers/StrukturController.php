<?php

namespace App\Http\Controllers;

use App\Models\Kantorwilayah;
use App\Models\Position;
use App\Models\Struktur_kanwil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StrukturController extends Controller
{
    public function struktur_kanwil($kantorwilayah_id, Request $request)
    {
        $keyword = $request->keyword;

        $get_data = Struktur_kanwil::where('kantorwilayah_id', $kantorwilayah_id)
        ->where(function ($query) use ($keyword) {
        $query->where('name_struktur', 'LIKE', '%' . $keyword . '%'); 
        })->paginate(10);

        $get_kanwil = Kantorwilayah::find($kantorwilayah_id);

        $name_kantorwilayah = $get_kanwil->name_kantorwilayah;

        $get_position = Position::select('*')->get();


        $card = [
            'get_kanwil' => $get_kanwil,
            'name_kantorwilayah' => $name_kantorwilayah,
            'get_data' => $get_data,
            'get_position' => $get_position,
            'keyword' => $keyword
        ];

        return view('Dashboard.pages.struktur_kantorwilayah', ['card' => $card]);
    }
    public function addstruktur($id){
        $kanwil = Kantorwilayah::find($id);
        $position = Position::all();
        
        $card = [
            'position' => $position
        ];

        return view('Dashboard.pages.struktur_kantorwilayah.add', ['kanwil' => $kanwil, 'card' => $card]);
    }
    public function poststruktur (Request $request, $id){
        $kanwil = Kantorwilayah::find($id);
        $get_data = Struktur_kanwil::where('kantorwilayah_id', $id)->get();
        $position = Position::all();

        $data = $request->validate([
            'thumbnail_struktur' => 'required|image|mimes:jpeg,png,jpg,gif',
            'name_struktur' => 'required|string',
            'position_id' => 'required|string',
        ]);

        $fileName = $request->file('thumbnail_struktur')->getClientOriginalName();

        $Struktur_kanwil = new Struktur_kanwil();
        $Struktur_kanwil->kantorwilayah_id = $request->kantorwilayah_id;
        $Struktur_kanwil->thumbnail_struktur = $request->file('thumbnail_struktur')->storeAs('struktur_kanwil', $fileName);
        $Struktur_kanwil->name_struktur = $request->name_struktur;
        $Struktur_kanwil->position_id = $request->position_id;

        $Struktur_kanwil->save();

        $card = [
            'position' => $position
        ];

        session()->flash('success', 'Data berhasil disimpan.');

        return view('Dashboard.pages.struktur_kantorwilayah.add', ['kanwil' => $kanwil, 'get_data' => $get_data, 'id' => $id, 'card' => $card]);

    }
    public function editstruktur($kantorwilayah_id, $id)
    {
        $data = struktur_kanwil::find($id);
        $kanwil = Kantorwilayah::find($kantorwilayah_id);

        $position = Position::all();
        
        $card = [
            'position' => $position
        ];

        return view('Dashboard.pages.struktur_kantorwilayah.edit', ['data' => $data, 'kanwil' => $kanwil, 'card' => $card]);
    }
    public function updatestruktur($kantorwilayah_id, $id, Request $request)
    {
        $data = Struktur_kanwil::find($id);
    
        $data->kantorwilayah_id = $request->input('kantorwilayah_id');
        $data->name_struktur = $request->name_struktur;
        $data->position_id = $request->position_id;

        if ($thumbnail_struktur = $request->file('thumbnail_struktur')) {
            Storage::delete($data->thumbnail_struktur);
    
            $thumbnailPath = $thumbnail_struktur->store('struktur_kanwil');
            $data->thumbnail_struktur = $thumbnailPath;
        }else{
            unset($input['thumbnail_struktur']);
        }
    
        $data->save();
    
        return redirect()->route('struktur', ['kantorwilayah_id' => $kantorwilayah_id]);
    }
    public function destroystruktur ($kantorwilayah_id, $id){
        $data = Struktur_kanwil::find($id);
        
        $data->delete();
    
        return redirect()->route('struktur', ['kantorwilayah_id' => $kantorwilayah_id]);
    }
}
