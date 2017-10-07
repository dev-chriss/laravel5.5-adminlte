<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use Validator;

class ProfileController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = User::findOrFail($id);
        return view('admin.profile', compact('item'));
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
        //Log::info('user: '. print_r( $request->all() )   );
        $this->validate($request, User::rules(true,$id));
        $item = User::findOrFail($id);
        $item->update($request->all());

        //update the auth, will needed for refresh UI
        \Auth::user()->update(['name' => $request->name]);
        \Auth::user()->update(['email' => $request->email]);

        return back()->withSuccess(trans('app.success_update'));
    }
}
