<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function login()
    {
        return view("user.login");
    }

    public function register()
    {
        return view("user.register");
    }

    public function logout(Request $request){
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('login');
    }

    public function process(Request $request)
    {
        $validated = $request->validate([
            "email"=>['required', 'email'],
            'password'=>'required'
        ]);

        if(auth()->attempt($validated)){
            $request->session()->regenerate();
            return redirect("/");
        }
    }

    public function store(Request $request){
        $validated=$request->validate([
            "name"=>['required','min:4'],
            "email"=>['required','email', Rule::unique('users','email'),],
            "password"=>'required|confirmed|min:4'
        ]);

        $validated['password']=Hash::make($validated['password']);
        $user=User::create($validated);

        return redirect("/")->with('success', 'User');

    }

}
