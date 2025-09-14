<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('user.index');
    }

    public function tentang()
    {
        return view('user.tentang');
    }

    public function kontak()
    {
        return view('user.kontak');
    }

    public function galeri()
    {
        return view('user.galeri');
    }

    public function berita()
    {
        return view('user.berita');
    }
}
