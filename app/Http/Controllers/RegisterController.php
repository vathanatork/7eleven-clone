<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades;
use App\Models\User;
use Validator;
use Illuminate\Validation\ValidationException;
class registerController extends Controller
{
    //stores
    public function store (Request $request){
       
        $acc = $request->validate([
            'name' => 'required|max:50|min:3|unique:users,name',
            'email' => 'required|max:225|email|unique:users,email',
            'password' => 'required|max:20|min:3|unique:users,password',
        ]);
        $user = User::create($acc);
        auth()->login($user);
        session()->flash('success','Your account has been registered');
        return redirect()->back();  
    }

    //logout
    public function destroy(){
        auth()->logout();
        return redirect()->back()->with('success','Successfully logged out');
    }

    //login 
    public function login(Request $request){
        $acc = $request->validate([
            'email' => 'required|max:225|email',
            'password' => 'required|max:20|min:3',
        ]);

        if(!auth()->attempt($acc)){
           throw ValidationException::withMessages([
            'email' => ['worng email']
           ]);
        }
        
        session()->regenerate();
        return redirect()->back()->with("success",'Successfully logged');
    }
}