<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all()->where('trash','0');
        return view('backend.pages.categories.index',compact('categories'));
    }

    public function trash_index()
    {
        $categories = Category::all()->where('trash','1');
        return view('backend.pages.categories.trash-index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.categories.create');
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
            'title' => 'required',
            'slug' => 'required',
        ]);

        $category = new Category();

        $category->title = $data['title'];
        $category->slug = $data['slug'];

        if ($category->save()) {
            return redirect()->route('admin.categories.index')->with('success','Item added successfully');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        return view('backend.pages.categories.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('backend.pages.categories.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'required',
        ]);

        $category->update($request->all());
        return redirect()->route('admin.categories.index')->with('success','Item updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
    
        return redirect()->to('categories/trash')->with('danger','Item deleted successfully');
    }

    public function trash($id)
    {
        Category::where('id', $id)->update(['trash' => '1']);

        return redirect()->route('admin.categories.index')->with('success','Item moved to trash');
    }

    public function restore($id)
    {
        Category::where('id', $id)->update(['trash' => '0']);

        return redirect()->route('admin.categories.index')->with('success','Item restored successfully');
    }
}
