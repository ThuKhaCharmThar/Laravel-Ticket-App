<?php

namespace App\Http\Controllers;

use App\Models\Label;
use App\Http\Requests\StoreLabelRequest;
use App\Http\Requests\UpdateLabelRequest;

class LabelController extends Controller
{
    public function __construct()
{
    $this->Middleware('auth');
}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $labels=Label::all();
        return view('label.index',compact('labels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('label.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLabelRequest $request)
    {
        $label=new label();
        $label->name=$request->name;
        $label->save();
        return redirect()->route('label.create')->with('success','Label is Saving Successful');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Label $label)
    {
        return view('label.detail',compact('label'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Label $label)
    {
        return view('label.edit',compact('label'))->with('edit','label is Editing Successful');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLabelRequest $request, Label $label)
    {
        $label->name=$request->name;
        $label->update();
        return redirect()->route('label.index')->with('update','Label is Updating Successful');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Label $label)
    {
        if($label)
        $label->delete();
        return redirect()->route('label.index')->with('delete','Label is Deleting Successful');
    }
}
