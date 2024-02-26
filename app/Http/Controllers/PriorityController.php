<?php

namespace App\Http\Controllers;

use App\Models\Priority;
use App\Http\Requests\StorePriorityRequest;
use App\Http\Requests\UpdatePriorityRequest;

class PriorityController extends Controller
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
        $priorities=Priority::all();
        return view('priority.index',compact('priorities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('priority.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePriorityRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePriorityRequest $request)
    {
        $priority=new Priority();
        $priority->name=$request->name;
        $priority->save();
        return redirect()->route('priority.create')->with('success','priority is Saving Successful');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Priority  $priority
     * @return \Illuminate\Http\Response
     */
    public function show(Priority $priority)
    {
        return view('priority.detail',compact('priority'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Priority  $priority
     * @return \Illuminate\Http\Response
     */
    public function edit(priority $priority)
    {
        return view('priority.edit',compact('priority'))->with('edit','Priority is Editing Successful');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePriorityRequest  $request
     * @param  \App\Models\Priority  $priority
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePriorityRequest $request, Priority $priority)
    {
        $priority->name=$request->name;
        $priority->update();
        return redirect()->route('priority.index')->with('update','priority is Updating Successful');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Priority  $priority
     * @return \Illuminate\Http\Response
     */
    public function destroy(Priority $priority)
    {
        if($priority)
        $priority->delete();
        return redirect()->route('priority.index')->with('delete','Priority is Deleting Successful');
    }
}
