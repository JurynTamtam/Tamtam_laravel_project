<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminController extends Controller
{

    public function register()
    {
        return view('register');
    }

    // Handle the registration form submission
    public function store(Request $request)
    {
        // Validate the input data
        $request->validate([
            'name' => 'required|string|unique:users,name',
            'password' => 'required|string|confirmed|min:8',  // password_confirmation field is required
        ]);

        // Hash the password before storing it in the database
        $user = new User;
        $user->name = $request->name;
        $user->password = Hash::make($request->password);  // Hash the password
        $user->save();

        // Redirect to login or other page after successful registration
        return redirect()->route('/login')->with('success', 'Registration successful, please log in.');
    }

    public function login()
    {
        return view('pages.login');
    }

    public function authenticate(Request $request)
    {
        // Validate input fields
        $request->validate([
            'name' => 'required|string',
            'password' => 'required|string',
        ]);

        // Check if the user exists in the database
        $user = User::where('name', $request->name)->first();

        // If user exists and password is correct, log them in
        if ($user && Hash::check($request->password, $user->password)) {
            // Store the user session
            session(['user_id' => $user->id, 'name' => $user->name]);
        return redirect(url('/dashboard'))->with('success', 'Update Book successfully');
            
        }

        // If login fails, redirect back with an error message
        return back()->withErrors(['login' => 'Invalid credentials, please try again.']);
    }

    public function dashboard()
    {
        return view('dashboard');
    }
}
