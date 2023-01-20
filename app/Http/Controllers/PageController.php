<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){

        $comics = Comic::Paginate(12);


        return view('home', compact('comics'));
    }
}
