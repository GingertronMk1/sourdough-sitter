<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDoughRequest;
use App\Http\Requests\UpdateDoughRequest;
use App\Models\Dough;

class DoughController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('livewire.dough.index', ['doughs' => Dough::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDoughRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Dough $dough)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dough $dough)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDoughRequest $request, Dough $dough)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dough $dough)
    {
        //
    }
}
