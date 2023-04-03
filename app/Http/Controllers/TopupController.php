<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class TopupController extends Controller
{
    //
    public function index()
    {
        return view('topup.index',[
            'title' => 'QQ Group | Topup',
        ]);
    }
    public function store()
    {
        return view('topup.store', [
            'title' => 'QQ Group | Store',
        ]);
    }
}
