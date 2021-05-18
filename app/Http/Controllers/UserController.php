<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

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

    public function destroy($id)
    {
        $user = User::find($id)->delete();
        return redirect()->back()->with('status', 'Deleted Successfully');
    }
}
