<?php

namespace App\Http\Controllers;

use App\Models\Island;
use App\Models\Plant;
use Illuminate\Http\Request;

class IslandPlantController extends Controller
{
    public function index()
    {
        $islands = Island::all();
        return view('welcome', compact('islands'));
    }

    public function showIsland($id)
    {
        $island = Island::findOrFail($id);
        $plants = Plant::where('island_id', $id)->get();
        return view('islands.show', compact('island', 'plants'));
    }
}