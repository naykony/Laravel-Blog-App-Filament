<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crtpost;


class CretpostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
                Crtpost::query()->create([
                'title'=> $request->title,
                'content'=> $request->content,
        ]);
        return back()->with('success', 'ok');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
