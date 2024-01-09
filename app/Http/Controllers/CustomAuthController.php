<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Session;

class CustomAuthController extends Controller
{
    public function login()
    {
        return view("login");
    }

    public function register()
    {
        return view("register");
    }

    public function registration(Request $request)
    {
        $request->validate([
            "name" => "required",
            "email" => "required|email|unique:users",
            "password" => "required|min:4|max:14",
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password); // Use Hash::make to hash the password
        $res = $user->save();

        if ($res) {
            return back()->with("success", "Successfully registered");
        } else {
            return back()->with("fail", "Some error occurred");
        }
    }
    public function LoginUser(Request $request)
    {
        $request->validate([
            "email" => "required|email",
            "password" => "required|min:4|max:14",
        ]);
        $user = User::where("email", "=" , $request->email)->first();
        if($user)
    {
        if(hash::check($request->password, $user->password)){
            $request->session()->put("loginId", $user->id);
            return redirect("dashboard");
        }else{
            return back()->with("fail","password not matched");
        }
    }
        else{
            return back()->with("fail","This email is not recognized");
        }
    }
    public function dashboard(){
        $data = array();
        if(session::has('loginId'))
        {
            $data = User::where ('id', "=", session::get('loginId'))->first();
            return view('dashboard', compact('data'));
        }
    }
    public function logout(){
        if(Session::has('loginId'))
        {
            Session::pull('loginId');
          return  redirect('login');
        }
    }
}
