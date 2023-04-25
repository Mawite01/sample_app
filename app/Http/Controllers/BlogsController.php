<?php

namespace App\Http\Controllers;

// use App\Models\Blog;

use App\Http\Requests\BlogRequest;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('permission:blogList', ['only' => ['index']]);
        $this->middleware('permission:blogCreate',['only' => ['create','store']]);
        $this->middleware('permission:blogEdit',['only' => ['edit','update']]);
        $this->middleware('permission:blogDelete',['only' => ['destroy']]);
        $this->middleware('auth');
    } 
    
    public function index()
    {
        // $data = Blog::all();
        $data = Blog::all();
        return view('backend.blogs.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         
        return view('backend.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function store(BlogRequest $request)
    {       
            $data = $request->validated();
           if($request->hasFile('image'))
           {
            $imageName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('images'), $imageName);            
           }
           $data = array_merge($data,['image' => $imageName]);
           
            Blog::create($data);

        return redirect()->route('blogs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $result = Blog::where('id',$id)->first();

        return view('backend.blogs.show',compact('result'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {  
     
     $result = Blog::where('id',$id)->first();
     
     return view('backend.blogs.edit',compact('result'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Blog::where('id',$id)->first();

        // $data->update([
        //     'name' => $request->name,
        //     'description' => $request->description
        // ]);
        $data->update($request->all());

        return redirect()->route('blogs.index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Blog::where('id',$id)->first();
        $data->delete();
        
        return redirect()->route('blogs.index');
    }
}
