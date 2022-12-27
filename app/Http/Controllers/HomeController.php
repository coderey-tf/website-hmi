<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\About;
use App\Models\Activity;
use App\Models\Article;
use App\Models\Category;
use App\Models\Slider;
use App\Models\Structure;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        $articles = Article::latest()->get();

        return view('index', [
            "title" => "Home",
        ], compact('sliders', 'articles'));
    }

    public function about()
    {
        $abouts = About::all();

        return view('about', [
            "title" => "About"
        ], compact('abouts'));
    }

    public function kepengurusan()
    {
        $structures = Structure::all();

        return view('kepengurusan', [
            "title" => "Kepengurusan"
        ], compact('structures'));
    }

    public function artikel()
    {

        $articles = Article::latest()->get();
        return view('artikel', [
            "title" => "Artikel"
        ], compact('articles'));
    }

    public function detail($slug)
    {
        $articles = Article::where('slug', $slug)->first();
        return view('detail-artikel', [
            "title" => "Artikel"
        ], compact('articles'));
    }

    public function opini()
    {
        return view('opini', [
            "title" => "Opini Kader"
        ]);
    }

    public function kegiatan()
    {
        return view('kegiatan', [
            "title" => "Kegiatan"
        ]);
    }

    public function dokumen()
    {
        return view('dokumen', [
            "title" => "Dokumen Penting"
        ]);
    }

    public function galeri()
    {
        return view('galeri', [
            "title" => "Galeri"
        ]);
    }

    public function kontak()
    {
        return view('kontak', [
            "title" => "Kontak"
        ]);
    }

    public function joinus()
    {
        return view('joinus', [
            "title" => "Join Us"
        ]);
    }

    // public function activities()
    // {
    //     return view('activities', [
    //         "title" => "activities"
    //     ]);
    // }
}
