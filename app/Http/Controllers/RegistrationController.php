<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Mail\Welcome;
use App\Http\Requests\RegistrationRequest;

class RegistrationController extends Controller
{
    public function create()
    {
    	return view('register.create');
    }

    public function store(RegistrationRequest $request)
    {


    	$user = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => Hash::make(request('password'))
        ]);

    	auth()->login($user);

        \Mail::to($user)->send(new Welcome);

        session()->flash('message', 'Thanks so much for signing up!)');

    	return redirect()->home();

    }
}
