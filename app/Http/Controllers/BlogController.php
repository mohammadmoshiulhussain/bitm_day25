<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    protected $blog;
    public  function index()
    {
        return view('add-blog');
    }

    public function store(Request $request)
    {
        $this->blog = new Blog();
        $this->blog->title = $request->title;
        $this->blog->description = $request->description;
        $this->blog->author = $request->author;
        $this->blog->save();

        return redirect()->back()->with('message','Blog info save successfully');

    }
}
