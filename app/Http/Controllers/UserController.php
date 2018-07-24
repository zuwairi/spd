<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    		'email.email' => 'Email Tidak Sah',
    		'email.unique' => 'Email Sudah Wujud',
    	]);
    } 

}


