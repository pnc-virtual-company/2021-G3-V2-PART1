<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return User::get();
    }

    
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    // {
    //     $user = User::findOrFail($id);
    //     $user->username = $request->username;
    //     $user->password = $request->password;
    //     $user->email = $request->email;
    //     $user->profile = $request->profile;
    //     $user->save();

    //     return response()->json(["Message" => "User Update Successfully"], 200);
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function destroy($id)
    // {
    //     return User::destroy($id);
    // }

    //......................Create User...............................
    public function register(Request $request){
        $request->validate([
            'name' => 'min:5|max:20',
            'email' => 'required',
            'password' => 'required|confirmed',
            'profile' => 'required|image|max:1999',
            
        ]);
        $request->file('profile')->store('public/images');

        //create user
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->profile = $request->file('profile')->hashName();
        $user->password = bcrypt($request->password);
        
        // $user->profileimg = $request->file('profileImg')->hashName();

        $user->save();

        //create Token

        $token = $user->createToken('mytoken')->plainTextToken;

        return response()->json([
            'user' => $user,
            'token'=> $token,
        ]);
    }   

        //............................Signin................................
        public function signin(Request $request)
        {
            //Chek email
            $user = User::where('email', $request->email)->first(); 
            
            
            //Create Token
            $token = $user->createToken('mytoken')->plainTextToken;
            return response()->json([
                'user' => $user,
                'token' => $token
            ]);  
        }

        //..............................Signup................................
        public function signout(Request $request){
            auth()->user()->tokens()->delete();
            return response()->json(['Message' => 'User Sign Out']);
        }    
}
