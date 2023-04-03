<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
    {
        return view('dashboard.index', [
            'title' => 'QQ Group | Dashboard',
            'news' => News::all(),
            'users' => User::all()
        ]);
    }
}
