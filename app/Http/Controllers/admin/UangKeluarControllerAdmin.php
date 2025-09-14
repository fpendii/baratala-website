<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UangKeluarControllerAdmin extends Controller
{
    public function create()
    {
        return view('admin.uang_keluar.create');
    }
}
