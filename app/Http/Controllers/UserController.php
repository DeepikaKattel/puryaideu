<?php

namespace App\Http\Controllers;

use App\Rider;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function unapproved()
    {
        $users = User::whereNull('approved_at')->get();
        $usersCount = count($users);

        return view('admin.unapproved', compact('users','usersCount'));
    }

    public function approve($user_id)
    {
        $user = User::findOrFail($user_id);
        $user->update(['approved_at' => now()]);

        return redirect()->route('admin.unapproved')->withMessage('User approved successfully');
    }

    public function index(){
        $users = User::with('roles')->get();
        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        return view('admin.users.create');
    }


    public function store(Request $request)
    {
        $error = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'gender' => ['required'],
            'role' => ['required'],
            'dob'=> ['required'],
            'contact1' => ['required'],
            'contact2' => ['required'],
            'city' => ['required'],
            'area' => ['required']

        ]);
        $user = new User();
        $user->name = request('name');
        $user->email = request('email');
        $user->role = request('role');
        $user->password = Hash::make($request['password']);
        $user->gender = request('gender');
        $user->dob = request('dob');
        $user->contact1 = request('contact1');
        $user->contact2 = request('contact2');
        $user->city = request('city');
        $user->area = request('area');
        $user->approved_at = now();
        $user->save();

        if ($user->role == '2'){
            $rider = new Rider();
            $rider->user_id = $user->id;
            $rider->license = request('license');
            $rider->experience = request('experience');
            $rider->save();
        }



        $usersave = $user->save();




        if ($usersave) {
            return redirect('/users')->with("status", "The record has been stored");
        } else {
            return redirect('/users')->with("error", "There is an error");
        }
    }

    public function destroy($id)
    {
        $user = User::find($id)->delete();
        return redirect()->back()->with('status', 'Deleted Successfully');
    }
}
