<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UangMasukControllerAdmin extends Controller
{
    public function create()
    {
        return view('admin.uang_masuk.create');
    }
}
