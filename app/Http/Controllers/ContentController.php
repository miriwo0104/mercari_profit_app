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

    public function new()
    {
        return view('contents.new');
    }

    public function create(Request $request)
    {
        $new_content = new Content();
        $new_content->title = $request['title'];
        $new_content->memo = $request['memo'];
        $new_content->save();
        return redirect(route('contents.index'));
    }
}
