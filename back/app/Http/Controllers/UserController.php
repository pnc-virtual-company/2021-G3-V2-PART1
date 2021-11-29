<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    public function index()
    {
        return User::all();
    }
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'min:5|max:20',
            'email' => 'required',
            'password' => 'required|confirmed',
            'profile' => 'required|image|max:1999',
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->profile = $request->file('profile')->hashName();
        $user->password = bcrypt($request->password);
        // $user->confirm_password = bcrypt($request->confirm_password);

        $user->save();
        $token = $user->createToken('MyToken')->plainTextToken;

        return response()->json([
            'Message' => 'Created',
            'data' => $user,
            'token' => $token
        ], 201);
    }

    public function signout(Request $request)
    {
        auth()->user()->tokens()->delete();
        return response()->json(['Message' => 'Signouted']);
    }

    public function signin(Request $request)
    {
        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json(['Message' => 'Bed signin']);
        }

        $token = $user->createToken('MyToken')->plainTextToken;

        return response()->json([
            'Message' => 'signed',
            'data' => $user,
            'token' => $token
        ]);
    }
}
