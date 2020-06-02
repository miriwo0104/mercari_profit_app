<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content;

class ContentController extends Controller
{
    public function index()
    {
        $contents = Content::all();
        return view('contents.index', ['contents' => $contents]);
    }
}
