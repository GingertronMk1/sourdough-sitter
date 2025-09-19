<?php

namespace App\Http\Controllers;

use App\Models\Dough;
use App\Models\Sitting;
use Illuminate\Http\Request;

class DoughSittingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Dough $dough)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Dough $dough)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Dough $dough)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Dough $dough, Sitting $sitting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dough $dough, Sitting $sitting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dough $dough, Sitting $sitting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dough $dough, Sitting $sitting)
    {
        //
    }
}
