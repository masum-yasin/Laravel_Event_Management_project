<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function login(){
        return view('middlewareadmin.login');
    }
    public function store(Request $request){
        $admin = $request->all();
        if(Auth::guard('admin')->attempt(['email'=>$admin['email'], 'password'=>$admin['password']])){
            return redirect()->route('admin.dashboard');
        }
        else{
            return view('middlewareadmin.login');
        }
    }
    public function adashboard(){
        return view('middlewareadmin.dashboard');
    }
}
