<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class FeedbacksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
            $feedbacks =  Contact::all()->where('trash','0');;
            
    
            
            return view('backend.pages.feedbacks.index', compact('feedbacks'));
       
    }
    public function trash_index()
    {
        $feedbacks = Contact::all()->where('trash','1');
        return view('backend.pages.feedbacks.trash-index',compact('feedbacks'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function trash($id)
    {
        Contact::where('id', $id)->update(['trash' => '1']);

        return redirect()->route('admin.feedbacks.index')->with('success','Feedback moved to trash');
    }

    public function restore($id)
    {
        Contact::where('id', $id)->update(['trash' => '0']);

        return redirect()->route('admin.feedbacks.index')->with('success','Feedback restored successfully');
    }
}
