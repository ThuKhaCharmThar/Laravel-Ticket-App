<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\Priority;
use Illuminate\Support\Facades\Crypt;

class UserController extends Controller
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
        $users=User::all();
        return view('user.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request)
    {
        $user=new user();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password = Crypt::encrypt($request->password); 
        // $user->password=$request->password;
        $user->role=$request->role;
        $user->save();
        return redirect()->route('user.create')->with('success','User is Saving Successful');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user=User::Find($id);
        if($user){
            $user->password = Crypt::decrypt($user->password); 
            return view('user.edit',compact('user'))->with('edit','User is Editing Successful');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, $id)
    {
        $user=User::find($id);
        if($user){
            $user->name=$request->name;
            $user->email=$request->email;
            $user->password = Crypt::encrypt($request->password); 
            // $user->password=$request->password;
            $user->role=$request->role;
            $user->update();
            return redirect()->route('user.index')->with('update','user is Updating Successful');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=User::Find($id);
       if($user){
        $user->delete();
        return redirect()->route('user.index')->with('delete','User is Deleting Successful');
       }
    }
}
