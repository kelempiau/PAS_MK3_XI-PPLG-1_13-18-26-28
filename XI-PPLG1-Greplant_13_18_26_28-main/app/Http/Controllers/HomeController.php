<?php

namespace App\Http\Controllers;

use App\Models\Island;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $islands = Island::all();
        return view("index", compact("islands"));
    }
}
