<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index() {
    	return view('frontend.index');

    }

    public function login() {
    	return view('frontend.login');
      }

    public function register() { 
    	return view('frontend.register');
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

}


