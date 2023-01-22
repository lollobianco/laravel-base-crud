<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(){

        $search_text = $_GET['query'];
        $comics = Comic::where('title', 'LIKE', '%'.$search_text.'%')->get();

        return view('/search', compact('comics'));
    }
}
