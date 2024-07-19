<?php

namespace App\Http\Controllers\user;

use App\Models\Artikel;
use App\Models\Kategori;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $artikel = Artikel::latest()->limit(1)->get();
        $list = Artikel::latest()->limit(3)->get();
        $category = Artikel::latest()->limit(4)->get();
        return view('user.user', compact('artikel', 'list', 'category'));
    }
}
