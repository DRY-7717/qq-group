<?php

namespace App\Http\Controllers;

use App\Models\Categorynews;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class DashboardNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('dashboard.news.index', [
            'title' => 'QQ Group | Dashboard News',
            'news' => News::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('dashboard.news.create', [
            'title' => 'QQ Group | Dashboard News Create',
            'categories' => Categorynews::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'title' => 'required',
            'categorynews_id' => 'required',
            'body' => 'required',
            'image' => 'image|file|max:2048'
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('news-img');
        }

        $validatedData['slug'] = Str::of($request->title)->slug('-');
        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 20);

        News::create($validatedData);

        return redirect('/dashboard/news')->with('message', '<div class="alert alert-light-success color-success"><i class="bi bi-check-circle"></i> News has been added
        !</div>');
    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        //

        return view('dashboard.news.detail', [
            'news' => $news,
            'title' => 'QQ Group | Dashboard Detail News'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        //
        return view('dashboard.news.edit', [
            'title' => 'QQ Group | Dashboard Edit News',
            'news' => $news,
            'categories' => Categorynews::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, News $news)
    {
        //
        $rules = [
            'title' => 'required',
            'image' => 'image|file|max:2048',
            'categorynews_id' => 'required',
            'body' => 'required'
        ];
        
        $validatedData = $request->validate($rules);
        $slug = Str::of($request->title)->slug('-');

        if ($news->slug != $slug) {
            $validatedData['slug'] = $slug;
        }

        // return $validatedData;

        if ($request->file('image')) {
            if ($news->image) {
                Storage::delete($news->image);
            }
            $validatedData['image'] = $request->file('image')->store('news-img');
        }
        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 20);

        News::where('id', $news->id)->update($validatedData);
        return redirect('/dashboard/news')->with('message', '<div class="alert alert-light-success color-success"><i class="bi bi-check-circle"></i> News has been updated
        !</div>');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        //
        News::destroy($news->id);

        return redirect('/dashboard/news')->with('message', '<div class="alert alert-light-success color-success"><i class="bi bi-check-circle"></i> News has been deleted
        !</div>');;
    }
}
