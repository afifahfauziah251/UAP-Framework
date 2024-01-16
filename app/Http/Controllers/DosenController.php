<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index(){

        $data = Dosen::all();
        return view('dosen.index', compact('data'));
    }

    public function tambahdosen(){
        return view('dosen.create');
    }

    public function insertdata(Request $request){
        // dd($request->all());
        $data = Dosen::create($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotodosen/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('dosen')->with('success','Data Berhasil di Tambahkan');
    }

    public function tampilkandata($id){

        $data = Dosen::find($id);
        // dd($data);
        return view('dosen.tampildata', compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = Dosen::find($id);
        $data->update($request->all());
        return redirect()->route('dosen')->with('success','Data Berhasil di Update');
    }

    public function delete($id){
        $data = Dosen::find($id);
        $data->delete();
        return redirect()->route('dosen')->with('success','Data Berhasil di Hapus');

    }
}
