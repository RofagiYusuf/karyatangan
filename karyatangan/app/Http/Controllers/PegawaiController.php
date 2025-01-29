<?php

namespace App\Http\Controllers;

use App\Models\pegawai;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class PegawaiController extends Controller
{
    public function index(){

        $pegawai = pegawai::all();

        return view('owner.pegawai', compact('pegawai'));
    }

    public function create(){
        return view('owner.tambahpegawai');
    }

    public function store(Request $request){

        
        $request->validate([
            'nama_pegawai' => 'required|string',
            'jabatan' => 'required|string',
            'foto_pegawai' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
        
        $gambarpath = null;
        if($request->hasFile('foto_pegawai')){
            $gambarpath = $request->file('foto_pegawai')->store('pegawai', 'public');
        }
        
        pegawai::create([
            'nama_pegawai' => $request->nama_pegawai,
            'jabatan' => $request->jabatan,
            'foto_pegawai' => $gambarpath,
        ]);

        return redirect()->route('tampil_pegawai')->with('success', 'Data Pegawai Berhasil ditambahkan');
    }

    public function edit($id){
        $pegawai = pegawai::find($id);
        return view('owner.editpegawai', compact('pegawai'));
    }

    public function update(Request $request, $id){
        $pegawai = pegawai::find($id);

        $request->validate([
            'nama_pegawai' => 'required|string',
            'jabatan' => 'required|string',
        ]);


        if ($request->hasFile('foto_pegawai')) {
            if ($pegawai->foto_pegawai && Storage::exists('public/' . $pegawai->foto_pegawai)) {
                Storage::delete('public/' . $pegawai->foto_pegawai);
            }
            $gambarpath = $request->file('foto_pegawai')->store('pegawai', 'public');
            $pegawai->foto_pegawai = $gambarpath;
        }

        $pegawai->update($request->except('foto_pegawai'));

        return redirect()->route('tampil_pegawai')->with('success', 'Data Pegawai Berhasil diperbarui');
    }

    public function delete($id) {
        $pegawai = pegawai::find($id);

        if ($pegawai->foto_pegawai && Storage::exists('public/' . $pegawai->foto_pegawai)) {
            Storage::delete('public/' . $pegawai->foto_pegawai);
        }

        $pegawai->delete();

        return redirect()->route('tampil_pegawai')->with('success', 'Data Pegawai Berhasil dihapus');
    }
}
