<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('website.user.index',[
            'title' => 'Todos los usuarios',
            'users' => $users
        ]);
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
        $logued = \ Auth :: user();
        if(auth()->user()->type = 'Redactor'){
            return view('redactor.profile.show', [
                'user' => $logued,
             ]);
        }else{
            return view('lector.profile.show', [
                'user' => $logued,
            ]);
        }
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
        $this->validate ($request,
        [
        'first_name' => 'required',
        'last_name' => 'required',
        'avatar' => 'nullable',
        'email' => 'required',
        'password' => 'required',
        'user_type_id' =>'required',
        ]);
        $user = User::find($id);
        $user->update($request->all());
        $user->save();
        return redirect('/');
      }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);

      $user->delete();

      return redirect('/');
    }
}
