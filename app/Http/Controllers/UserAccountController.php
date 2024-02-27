<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserAccountController extends Controller
{
    public function create() {
        return inertia('UserAccount/Create');
    }

    public function store(Request $request) {
        User::create($request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed'
        ]));

        return redirect()->route('listing.index')
            ->with('success', 'Account created!');
    }
}
