<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::all()->where('trash','0');
        return view('backend.pages.sliders.index',compact('sliders'));
    }

    public function trash_index()
    {
        $sliders = Slider::all()->where('trash','1');
        return view('backend.pages.sliders.trash-index',compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sliders = Slider::all();
        return view('backend.pages.sliders.create',compact('sliders'));
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
            'subtitle' => 'required',
            'offer' => 'required',
          
            'image' => 'required',
           
        ]);
        $file =  $request->file('image');
      
        $fileName = $file->getClientOriginalName();
        $fileExtension = $file->getClientOriginalExtension();
        $uploadName = $fileName.'.'.$fileExtension;

       $file->storeAs('public/Slider_Image',$uploadName);

        $slider = new Slider($request->all());
        $slider->image = $uploadName;

        

        if ($slider->save()) {
            return redirect()->route('admin.sliders.index')->with('success','Item added successfully');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        return view('backend.pages.sliders.show', compact('slider'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $category)
    {
        return view('backend.pages.sliders.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $category)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'required',
        ]);

        $category->update($request->all());
        return redirect()->route('admin.sliders.index')->with('success','Item updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $category)
    {
        $category->delete();
    
        return redirect()->to('sliders/trash')->with('danger','Item deleted successfully');
    }

    public function trash($id)
    {
        Slider::where('id', $id)->update(['trash' => '1']);

        return redirect()->route('admin.sliders.index')->with('success','Item moved to trash');
    }

    public function restore($id)
    {
        Slider::where('id', $id)->update(['trash' => '0']);

        return redirect()->route('admin.sliders.index')->with('success','Item restored successfully');
    }
}
