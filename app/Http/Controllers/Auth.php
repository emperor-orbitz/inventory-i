<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class Auth extends Controller
{
 
    private function validateRegistration(Request $request)
    {
        $this->validate($request, [
            'password' => 'required|same:password_confirmation',
            'name' => 'required|max:100',
            'email' => 'required|unique:users|max:255',

        ], [
            'required' => ':attribute is required',
            'max' => ':attribute is above the max'
        ]);
    }


    private function validateLogin(Request $request)
    {
        $this->validate($request, [
            'password' => 'required',
            'email' => 'required|max:255',

        ]);
    }


    public function createNewUser(Request $request)
    {

        $this->validateRegistration($request);
        try {

            $user = $request->input();
            User::saveUser($user);
            return redirect('register');
        } catch (\Throwable $th) {
            abort(500);
        }
    }

    public function loginUser(Request $request)
    {
        $this->validateLogin($request);
        try {

            $check = FacadesAuth::attempt($request->only('email', 'password'), true);
            return $check === true ? redirect('dashboard') : back()->withErrors(['message' => 'Incorrect Email or Password']);
        } catch (\Throwable $th) {
            dd($th);
        }
    }

    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function logout()
    {
        FacadesAuth::logout();
        return redirect('/login');
    }
}
