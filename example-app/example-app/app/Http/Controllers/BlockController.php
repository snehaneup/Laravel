<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Block;

class BlockController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Block::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'content'=> 'required'
        ]);
        return Block::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Block::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $block = Block::find($id);
        $block -> update($request -> all());
        return $block;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return Block::destroy($id);
    }
}
