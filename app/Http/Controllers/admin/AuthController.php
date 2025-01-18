<?php

namespace App\Http\Controllers\admin;

use App\Enums\UserType;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        if ($request->isMethod('GET')) {
            return view('admin.auth.login');
        }

        // return $request->all();

        $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|string|min:6',
        ]);

        $user = User::where('email', $request->email)->first();

        $allowedUserTypes = [
            UserType::ADMIN,
            UserType::MODERATOR,
            UserType::SUPER_ADMIN,
        ];

        if (!$user || !in_array($user->user_type, $allowedUserTypes)) {
            return redirect()->back()->with('error', 'Access denied for this account!');
        }

        if (!Auth::attempt($request->only('email', 'password'))) {
            return redirect()->back()->with('error', 'Invalid email or password!');
        }

        session()->flash('success', 'Login successful');

        switch ($user->user_type) {
            case UserType::ADMIN:
                return redirect()->route('admin.dashboard');
            case UserType::MODERATOR:
                return redirect()->route('moderator.dashboard');
            case UserType::SUPER_ADMIN:
                return redirect()->route('super_admin.dashboard');
            default:
                return redirect()->back()->with('error', 'Unauthorized access!');
        }
    }

}
