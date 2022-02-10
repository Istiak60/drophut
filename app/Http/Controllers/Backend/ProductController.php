<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all()->where('trash','0');
        return view('backend.pages.products.index',compact('products'));
    }

    public function trash_index()
    {
        $products = Product::all()->where('trash','1');
        return view('backend.pages.products.trash-index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::all();
        return view('backend.pages.products.create',compact('products'));
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
            'price' => 'required',
            'short_description' => 'required',
            'description' => 'required',
            'image' => 'required',
            'category_id' => 'required',
        ]);
        $file =  $request->file('image');
      
        $fileName = $file->getClientOriginalName();
        $fileExtension = $file->getClientOriginalExtension();
        $uploadName = $fileName.'.'.$fileExtension;

       $file->storeAs('public/Product_Image',$uploadName);

        $product = new Product($request->all());
        $product->image = $uploadName;

        

        if ($product->save()) {
            return redirect()->route('admin.products.index')->with('success','Item added successfully');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('backend.pages.products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $category)
    {
        return view('backend.pages.products.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $category)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'required',
        ]);

        $category->update($request->all());
        return redirect()->route('admin.products.index')->with('success','Item updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $category)
    {
        $category->delete();
    
        return redirect()->to('products/trash')->with('danger','Item deleted successfully');
    }

    public function trash($id)
    {
        Product::where('id', $id)->update(['trash' => '1']);

        return redirect()->route('admin.products.index')->with('success','Item moved to trash');
    }

    public function restore($id)
    {
        Product::where('id', $id)->update(['trash' => '0']);

        return redirect()->route('admin.products.index')->with('success','Item restored successfully');
    }
}
