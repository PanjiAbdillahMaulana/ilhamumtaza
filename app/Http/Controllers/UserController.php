<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('users/index',[
            "page" => "Profile",
            "user" => User::where('id', Auth::id())->first()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('users.edit',[
            'user' => User::where('id', Auth::id())->first(),
            'page' => 'Edit Profile'
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'name' => 'max:255',
            'username' => ['min:3', 'max:255'],
            'email' => 'email:dns|unique:users',
            'password' => 'min:0|max:255',
            'phone' => 'nullable|numeric|digits_between:11,13',
            'address' => 'nullable|max:500',
            'profile_image' => 'nullable|image'
        ]);
        
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::where('id', Auth::id())->first()->update($validatedData);
        return redirect('/profile')->with('success', 'Berhasil update profile!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
