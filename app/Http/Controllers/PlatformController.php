<?php

namespace App\Http\Controllers;

use App\Models\Platform;
use App\Models\Platform_children;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PlatformController extends Controller
{
    public function detail_platform($platform_id, Request $request)
    {
        $keyword = $request->keyword;

        $get_platform = Platform::find($platform_id);

        $name_socmed = $get_platform->name_socmed;

        $get_data = Platform_children::where('platform_id', $platform_id)
                    ->where(function ($query) use ($keyword) {
                    $query->where('username_platform', 'LIKE', '%' . $keyword . '%')
                    ->orWhere('link_platform', 'LIKE', '%' . $keyword . '%'); 
                    })->paginate(10);


        $card = [
            'get_platform' => $get_platform,
            'name_socmed' => $name_socmed,
            'get_data' => $get_data,
            'keyword' => $keyword
        ];

        return view('Dashboard.pages.detail_platform', ['card' => $card]);
    }
    public function add_detail_platform($id){
        $platform = Platform::find($id);

        return view('Dashboard.pages.detail_platform.add', ['platform' => $platform]);
    }
    public function post_detail_platform (Request $request, $id){
        $platform = Platform::find($id);
        $get_data = Platform_children::where('platform_id', $id)->get();

        $data = $request->validate([
            'profile_platform' => 'required|image|mimes:jpeg,png,jpg,gif',
            'username_platform' => 'required|string',
            'link_platform' => 'required|string',
            'followers' => 'required|numeric',
        ]);

        $fileName = $request->file('profile_platform')->getClientOriginalName();

        $platform_children = new Platform_children();
        $platform_children->platform_id = $request->platform_id;
        $platform_children->profile_platform = $request->file('profile_platform')->storeAs('profile_platform', $fileName);
        $platform_children->username_platform = $request->username_platform;
        $platform_children->link_platform = $request->link_platform;
        $platform_children->followers = $request->followers;

        $platform_children->save();

        session()->flash('success', 'Data berhasil disimpan.');

        return view('Dashboard.pages.detail_platform.add', ['platform' => $platform, 'get_data' => $get_data, 'id' => $id]);

    }
    public function destroy_detail_platform ($platform_id, $id){
        $data = Platform_children::find($id);
        
        $data->delete();
    
        return redirect()->route('detail_platform', ['platform_id' => $platform_id]);
    }
    public function edit_detail_platform ($platform_id, $id){
        $data = Platform_children::find($id);
        $platform = Platform::find($platform_id);
    
        return view('Dashboard.pages.detail_platform.edit', ['data' => $data, 'platform' => $platform]);
    }
    public function update_detail_platform($platform_id, $id, Request $request)
    {
        $data = Platform_children::find($id);
    
        $data->platform_id = $request->input('platform_id');
        $data->username_platform = $request->input('username_platform');
        $data->link_platform = $request->input('link_platform');
        $data->followers = $request->input('followers');

        if ($request->hasFile('profile_platform')) {
            Storage::delete($data->profile_platform);
        
            $profile_platform = $request->file('profile_platform');
            $thumbnailPath = $profile_platform->store('profile_platform');
            $data->profile_platform = $thumbnailPath;
        }
    
        $data->save();
    
        return redirect()->route('detail_platform', ['platform_id' => $platform_id]);
    }
    
}
