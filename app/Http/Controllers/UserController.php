<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class UserController extends Controller
{
    public function index() {
    	return view('frontend.index');
    }

  
    public function dashboard() {
        return view('backend.index');     

    }

    public function login() {
    	return view('frontend.login');
      }

    public function register() { 
        return view('frontend.register');
    }

    public function logout() { 
        Auth::logout();
        return redirect()->route('home')->with('success','Successfully logout');
    }


public function registerPost(Request $request) { 
    	$request->validate([
    		'name' => 'required',
    		'email' => 'required|email|unique:users',
    		'ic' => 'required|unique:users',
    		'password' => 'required',
    	],[

    		'name.required' => 'Sila Masukkan Nama',
            'email.required' => 'Sila Masukkan Email',
    		'email.email' => 'Email Tidak Sah',
    		'email.unique' => 'Email Sudah Wujud',
    	]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;        
        $user->ic = $request->ic;
        $user->password = bcrypt($request->password);
        $user->save();

        return back()->with('success','Successfully Register');
    } 

public function loginPost(Request $request) {
    $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
    $credentials = $request->only('email','password');
    if (Auth::attempt($credentials)) {
        // Authencation passed...
        return redirect()->route('user.dashboard');
    } else {
        return back()->withError('Login failed.');
    }
}
}


