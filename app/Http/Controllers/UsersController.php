<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::orderBy('updated_at', 'DESC')->get();
        return view('users.index')->with('users', $users);
        
    }

    public function edit()
    {
        
        return view('users.edit')->with('user', auth()->user());
        
    }

    public function update(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'about' => 'required'
        ]);

        $user = auth()->user();

        $user->update([
            'name' => $request->name,
            'about' => $request->about
        ]);

        session()->flash('success', 'Profile updated successfully');
        return redirect()->back();
        
    }

    public function makeAdmin(User $user) 
    {
        $user->role = 'admin';

        $user->save();

        session()->flash('success', 'Admin added successfully');
        return redirect(route('users.index'));
    }
}
