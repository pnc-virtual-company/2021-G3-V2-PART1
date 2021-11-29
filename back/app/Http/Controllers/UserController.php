<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return User::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'min:3|max:10',
            'email' => 'min:8|max:20',
            'profile' => 'nullable|image|mimes:jpg,jpeg,png|max:1999',
            'password' => 'min:1|max:10',
            'confirm_password' => 'min:1|max:10',
            
        ]);
        $request->file('profile')->store('public/images');
        //Create User
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->profile = $request->profile;
        $user->profile = $request->file('profile')->hashName();
        $user->password = bcrypt($request->password);
      

        $user->save();
        return response()->json(['Message' =>'Register Succesfully'], 201);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function signin(Request $request)
    {
        //Chek password

        $user = User::where ('email', $request->email)->first();

        //Create 
        if(!$user || !Hash::check($request->password, $user->password)){
            return response()->json(['message' => 'Bad login'], 401);
        }
        return response()->json([
            'user' => $user
        ]);
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
}
