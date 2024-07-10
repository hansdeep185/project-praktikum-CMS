<?php

namespace App\Http\Controllers\Private;
use App\Models\Home;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function index()
    {
        $homes = Home::all();
        return view('admin.home.index', compact('homes'));
    }
    
    public function create()
    {
        return view('admin.home.create');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'title_1' => 'required',
            'title_2' => 'required',
            'title_3' => 'required',
            'button_left' => 'required',
            'button_right' => 'required',
            'about_me_title' => 'required',
            'about_me_description' => 'required',
            'image_path' => 'nullable|image|max:2048'
       ]);
       $home = new Home();
       $home->tittle_1 = $request->title_1;
       $home->tittle_2 = $request->title_2;
       $home->tittle_3 = $request->title_3;
       $home->button_left = $request->button_left;
       $home->button_right = $request->button_right;
       $home->about_me_tittle = $request->about_me_title;
       $home->about_me_description = $request->about_me_description;
       
       if ($request->hasFile('image_path')){
        $home->image_path = $request->file('image_path')->store('images', 'public');
    
       }
    
       $home->save();
    
       return redirect()->route('home.index')->with('success', 'Home create successfully.');
    }

    public function destroy($id){
        $detail =  Home::find($id);
        if ($detail) {
            if ($detail->image_path) {
                Storage::disk('local')->delete('public/images/'.$detail->image_path);
            }
            $detail->delete();
        }
        return redirect()->route('home.index')->with('success', 'Home delete successfully.');
    }
}

