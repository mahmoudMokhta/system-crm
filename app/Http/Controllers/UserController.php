<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function create()
    {
        return view('users.create-user');
    }

    public function createUser(Request $request)
    {

        $user = $request->validate([

            'name' => 'required|min:10',
            'email' => 'required|email',
            'address' => 'required',
            'city' => 'required',
            'contact_num_one' => 'required',
            'title' => 'required',
            'project' => 'required',
            'hiring_date' => 'required|date',
            'role' => 'required',
            'password'  => 'required|min:8',
            'profile_picture' => 'required|image'
        ]);

        $path = $request->file('profile_picture')->store('public/avatar');
        $user['profile_picture'] = $path;
        User::create($user);
        return redirect()->route('users')->with('success', 'user added successfully');
        //return $path;
    }
    public function viewUsers()
    {
        $users = User::all();
        return view('users.users', compact('users'));
    }
    public function editUser(User $user)
    {
        return view('users.edit-user', compact('user'));
    }

    public function updateUser(Request $request, $id)
    {

        $user = User::findorFail($id);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'city' => $request->city,
            'contact_num_one' => $request->contact_num_one,
            'contact_num_two' => $request->contact_num_two,
            'project' => $request->project,
            'hiring_date'  => $request->hiring_date,
            'role' => $request->role
        ]);
        return  redirect()->route('users')->with('success', 'user has been successfully updated.');
    }

    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('users')->with('failure', 'user has been Deleted.');
    }

    public function showTrashed()
    {
        $trashes = User::onlyTrashed()->get();
        return view('users.users-softdelete', compact('trashes'));
    }

    public function restore($id)
    {
        $user = User::withTrashed()->where('id', $id)->restore();

        return redirect()->back()->with('success', 'user has been successfully restored.');
    }

    public function forcedelete($id)
    {
        $user = User::find($id);
        $user->forcedelete();
        return redirect()->back()->with('failure', 'User Has Been Deleted.');
    }
}
