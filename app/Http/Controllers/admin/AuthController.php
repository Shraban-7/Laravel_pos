<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        if ($request->isMethod('GET')) {
            return view('admin.auth.login');
        }

        $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|string|min:6',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!Hash::check($request->password, $user->password)) {
            return redirect()->back()->with('error', 'Incorrect password!');
        }

        Auth::login($user);

        return redirect()->route('dashboard')->with('success', 'Login successful');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

}
