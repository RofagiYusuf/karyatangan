<?php

namespace App\Http\Controllers;

use App\Models\pegawai;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FreeUserController extends Controller
{
    public function index(){
        $pegawai = pegawai::all();
        return view('index', compact('pegawai'));
    }
}
