<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view('home', [
            'title' => 'QQ Group | Home',
            'news' => News::latest()->get()
        ]);
    }
    public function about()
    {
        return view('about', [
            'title' => 'QQ Group | Tentang Kami',
        ]);
    }
}
