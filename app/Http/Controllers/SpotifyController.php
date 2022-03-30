<?php

namespace App\Http\Controllers;

use App\Models\spotify;
use Illuminate\Http\Request;

class SpotifyController extends Controller
{
    public function index(){
        $data = spotify::all();
        return view('dashboard',compact('data'));
    }

    public function tambah(){
        return view('layouts/tambah');
    }
    public function insert(Request $request)
    {
        $request->validate([
            'lagu' => 'required',
            'lagu.*' => 'lagu|mimes:mp3'
        ]);

        $audioName = time().'.'.$request->lagu->extension();
        $request->lagu->move(public_path().'/image/', $audioName);
        $audio = spotify::create($request->all(),[
            'lagu'=>$request['lagu'],
            'lagu'=>$audioName
        ]);

        return redirect()->route('dashboard')->with('success ',' Data Berhasi di Tambahkan. ');
    }
    public function show($id){
        $data = spotify::find($id);

        return view('layouts/edit', compact('data'));
    }
    public function Update(Request $request, $id){
        $request->validate([
            'lagu' => 'required',
            'lagu.*' => 'lagu|mimes:mp3'
        ]);

        $data = spotify::find($id);
        $data->update($request->all(),[
            'lagu'=>$request['lagu'],
            'lagu'=>$audioName
        ]);

        $audioName = time().'.'.$request->lagu->extension();
        $request->lagu->move(public_path().'/image/', $audioName);

        return redirect()->route('dashboard')->with('success ',' Data Berhasil Di Update . ');
    }
    public function delete($id){
        $data = spotify::find($id);
        $data->delete();

        return redirect()->route('dashboard')->with('success ',' Data Berhasil Di Hapus . ');
    }
    public function detailData($id){
        $data = spotify::find($id);
        return view('layouts/detail', compact('data'));

    }
}
