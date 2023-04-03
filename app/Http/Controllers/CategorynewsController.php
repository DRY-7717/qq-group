<?php

namespace App\Http\Controllers;

use App\Models\Categorynews;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategorynewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('dashboard.categorynews.index', [
            'title' => 'QQ Group | Dashboard Category News',
            'categories' => Categorynews::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('dashboard.categorynews.create', [
            'title' => 'QQ Group | Dashboard Create Category'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'title' => 'required'
        ]);

        $validatedData['slug'] = Str::of($request->title)->slug('-');

        Categorynews::create($validatedData);
        return redirect('/dashboard/categorynews')->with('message', '<div class="alert alert-light-success color-success"><i class="bi bi-check-circle"></i> Category has been added
        !</div>');
    }

    /**
     * Display the specified resource.
     */
    public function show(Categorynews $categorynews)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categorynews $categorynews)
    {
        //
        return view('dashboard.categorynews.edit', [
            'title' => 'QQ Group | Dashboard Edit Category',
            'category' => $categorynews
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categorynews $categorynews)
    {
        //
        $validatedData = $request->validate([
            'title' => 'required'
        ]);
        $validatedData['slug'] = Str::of($request->title)->slug('-');
        Categorynews::where('id', $categorynews->id)->update($validatedData);
        return redirect('/dashboard/categorynews')->with('message', '<div class="alert alert-light-success color-success"><i class="bi bi-check-circle"></i> Category has been updated
        !</div>');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categorynews $categorynews)
    {
        //
        Categorynews::destroy($categorynews->id);

        return redirect('/dashboard/categorynews')->with('message', '<div class="alert alert-light-success color-success"><i class="bi bi-check-circle"></i> Category has been deleted
        !</div>');
    }
}
