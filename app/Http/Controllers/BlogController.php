<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\KategoriArtikel;

class BlogController extends Controller
{
    public function index()
    {
        $artikel = Artikel::with(['penulis', 'kategori'])
            ->latest('id')
            ->take(5)
            ->get();

        $kategori = KategoriArtikel::withCount('artikel')
            ->get();

        $totalArtikel = Artikel::count();

        return view('blog.index', compact(
            'artikel',
            'kategori',
            'totalArtikel'
        ));
    }

    public function kategori($id)
    {
        $artikel = Artikel::with(['penulis', 'kategori'])
            ->where('id_kategori', $id)
            ->latest('id')
            ->get();

        $kategori = KategoriArtikel::withCount('artikel')
            ->get();

        $totalArtikel = Artikel::count();

        return view('blog.index', compact(
            'artikel',
            'kategori',
            'totalArtikel'
        ));
    }

    public function detail($id)
    {
        $artikel = Artikel::with([
            'penulis',
            'kategori'
        ])->findOrFail($id);

        $terkait = Artikel::where(
                'id_kategori',
                $artikel->id_kategori
            )
            ->where('id', '!=', $artikel->id)
            ->take(5)
            ->get();

        return view(
            'blog.detail',
            compact(
                'artikel',
                'terkait'
            )
        );
    }
}