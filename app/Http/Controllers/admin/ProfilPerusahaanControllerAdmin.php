<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfilPerusahaanControllerAdmin extends Controller
{
    public function index()
    {
        return view('admin.profil_perusahaan.index');
    }

    public function edit(){
        return view('admin.profil_perusahaan.edit');
    }
}
