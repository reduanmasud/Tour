<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;



class UserAuth extends Controller
{
    public function login_page()
    {
        return view('login');
    }


    public function login(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->route('home');
    }



    public function signup_page()
    {
        return view('signup');
    }

    public function signup(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'mobile' => ['required', 'max:14'],
            'nid' => ['required']
        ]);



        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'mobile' => $request->mobile,
            'role' => 0,
            'nid' => $request->nid,
        ]);

        if(isset($request->user_type))
        {
            $user->role = 1;
            $user->save();
        }

        event(new Registered($user));

        Auth::login($user);

        return redirect()->route('home');
        //return redirect(RouteServiceProvider::HOME);
    }
}
