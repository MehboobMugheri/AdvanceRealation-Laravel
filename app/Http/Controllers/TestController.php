<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tests = Test::get();
        return $tests;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $test = Test::create([
            'json_data' => [
                'name'    => 'Altamash',
                'email'   => 'altamash@gmail.com',
                'address' => [
                    'street' => '#No:12 asds',
                    'city' => 'Karachi',
                ]
            ]
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
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
