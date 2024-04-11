<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        try {
            // Define validation rules
            $validator = Validator::make($request->all(), [
                'email' => 'required|email',
                'password' => 'required',
            ], [
                'email.required' => 'Email is required',
                'password.required' => 'Password is required',
            ]);

            //If validation fails it will redirect to the login page with error messages
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            // Put email and password into variable $credentials
            $credentials = $request->only('email', 'password');

            // Try to authenticate user with auth::attempt method
            if (Auth::attempt($credentials)) {
                // If Authenticate success, redirect to dashboard
                return redirect('/dashboard');
            } else {
                // If Authenticate fails, redirect to login page
                return redirect('/')->with('error', 'Invalid email or password')->withInput();
            }
        } catch (\Exception $e) {
            //  If there is an error, redirect to login page with error message
            return redirect('/')->with('error', $e->getMessage())->withInput();
        }
    }
}
