<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Kategori;

class FrontController extends Controller
{
    public function index()
    {
        $artikel = Artikel::latest()->limit(1)->get();
        $list = Artikel::latest()->limit(3)->get();
        $category = Artikel::latest()->limit(4)->get();
        return view('index', compact('artikel', 'list', 'category'));
    }

    public function detail($id)
    {
        $artikel = Artikel::findOrFail($id);
        $kategori = Kategori::all();
        return view('detail', compact('artikel', 'kategori'));
    }

    public function komentar()
    {
        Comment::create([
            'user_id' => auth()->id(),
            'komentar' => $request->comment,
        ]);

        auth()->logout();

        return redirect()->route('login');
    }
}
