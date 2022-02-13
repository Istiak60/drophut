<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Models\Category;
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
        $categories = Category::all()->where('trash','0');

        return view('backend.pages.products.create',compact('categories'));
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
            'price'             => 'required|numeric',
            'old_price'         => 'required|numeric',
            'short_description' => 'required',
            'description'       => 'required',
            'image'             => 'required|mimes:jpg,jpeg,png',
            'category_id'       => 'required'
        ]);
        
        $file =  $request->file('image');
        $uploadName = $this->fileUpload($file);

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
    public function edit(Product $product)
    {
        $categories = Category::all()->where('trash','0');

        return view('backend.pages.products.edit',compact('product','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $data = $request->validate([
            'title'             => 'required',
            'price'             => 'required|numeric',
            'old_price'         => 'required|numeric',
            'short_description' => 'required',
            'description'       => 'required',
            'image'             => 'required',
            'category_id'       => 'required'
        ]);

        $picture = $this->fileUpload($request->file('image'));
        if(empty($picture))$picture = $product->picture;
        $product->fill($request->all());
        $product->image = $picture;
        $product->save();
        return redirect()->route('admin.products.index')->with('success','Item updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
    
        return redirect()->to('products/trash')->with('danger','Item deleted successfully');
    }

    public function trash($id)
    {
        Product::where('id', $id)->update(['trash' => '1']);

        return redirect()->route('admin.products.index')->with('danger','Item moved to trash');
    }

    public function restore($id)
    {
        Product::where('id', $id)->update(['trash' => '0']);

        return redirect()->route('admin.products.index')->with('success','Item restored successfully');
    }

    private function fileUpload($file){
        $prefix='Product_'.time().'_';
        $picture='';
        if(!empty($file)){
            $name='img.';
            $fileext = $file->getClientOriginalExtension();
            $picture = $prefix.$name.$fileext;
            $path = $file->storeAs('public/Product_Image',$picture);
        }
        return $picture;
    }
}
