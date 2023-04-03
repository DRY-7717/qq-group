<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\User;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    //
    public function index()
    {
        return view('news.index',[
            'title' => 'QQ Group | QQ Games',
        ]);
    }

    public function detail(News $news)
    {
        return view('news.detail', [
            'title' => 'QQ Group | Detail News',
            'news' => $news,
            'allnews' => News::latest()->get()
        ]);
    }
}
