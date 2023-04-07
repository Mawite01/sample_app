<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogRequest;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function index()
    {
        $data = Blog::all();
        return view('blog.index',compact('data'));
    }
    public function create()
    {
        return view('blog.create');
    }
    public function store(BlogRequest $request)
    {
        // $request->validate([
        //     'name' => 'required',
        //     'description' => 'required'
        // ]);
        $data = $request->validated();
        Blog::create($data);
        
        // Blog::create([
        //     'name' => $data['user_name'],
        //     'description' => $data['description']
        // ]);

        // $data = Blog::all();
        // return view('blog.index',compact('data'));

         return redirect()->route('blog.index');
    }
    public function edit(Blog $blog)
    {
        return view('blog.edit',compact('blog'));
    }

    public function update(BlogRequest $request ,Blog $blog )
    {
        $data = $request->validated();
        $blog->update($data);
        // $blog->update([
        //     'name' => $data['user_name'],
        //     'description' => $data['description']
        // ]);

        return redirect()->route('blog.index');
    }

    public function delete(Blog $blog)
    {
        $blog->delete();

        return redirect()->route('blog.index');
    }

    
}
