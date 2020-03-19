<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $nama_lengkap = $request->input('nama_lengkap');
        $email = $request->input('email');
        $password = $request->input('password');

        $user = User::create([
            'name' => $nama_lengkap,
            'email' => $email,
            'password' => Hash::make($password),
        ]);

        if ($user) {
            return response()->json([
                'success' => true,
                'message' => 'Register Berhasil'
            ], 201);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Register Gagal'
            ], 400);
        }
    }
}
