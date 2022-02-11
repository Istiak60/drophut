<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Blog;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all()->where('trash','0');
        return view('backend.pages.blogs.index',compact('blogs'));
    }

    public function trash_index()
    {
        $blogs = Blog::all()->where('trash','1');
        return view('backend.pages.blogs.trash-index',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $blogs = Blog::all();
        return view('backend.pages.blogs.create',compact('blogs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title'             => 'required',
            'posted_by'         => 'required',
            'short_description' => 'required',
            'description'       => 'required',
            'image'             => 'required',
           
        ]);
        
        $file =  $request->file('image');
        $uploadName = $this->fileUpload($file);

        $blog = new Blog($request->all());
        $blog->image = $uploadName;

        

        if ($blog->save()) {
            return redirect()->route('admin.blogs.index')->with('success','Item added successfully');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        return view('backend.pages.blogs.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        return view('backend.pages.blogs.edit',compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'title'             => 'required',
            'posted_by'         => 'required',
            'short_description' => 'required',
            'description'       => 'required',
            'image'             => 'required',
        ]);

        $picture = $this->fileUpload($request->file('image'));
        if(empty($picture))$picture = $blog->picture;
        $blog->fill($request->all());
        $blog->image = $picture;
        $blog->save();

        // $blog->update($request->all());
        return redirect()->route('admin.blogs.index')->with('success','Item updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
    
        return redirect()->to('blogs/trash')->with('danger','Item deleted successfully');
    }

    public function trash($id)
    {
        Blog::where('id', $id)->update(['trash' => '1']);

        return redirect()->route('admin.blogs.index')->with('danger','Item moved to trash');
    }

    public function restore($id)
    {
        Blog::where('id', $id)->update(['trash' => '0']);

        return redirect()->route('admin.blogs.index')->with('success','Item restored successfully');
    }


    private function fileUpload($file){
        $prefix='Blog_'.time().'_';
        $picture='';
        if(!empty($file)){
            $name='img.';
            $fileext = $file->getClientOriginalExtension();
            $picture = $prefix.$name.$fileext;
            $path = $file->storeAs('public/Blog_Image',$picture);
        }
        return $picture;
    }
}
