<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\User;
use App\Komentar;
use App\Transaction;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        // Tanpa Collection
        foreach ($users as $user) {
            if ($user->name == "hafidz") {
                // dd(TRUE);
            }
        }
        // Menggunakan Collection
        // dd($users->search('hafidz'));

        $data = $users->where('id', 1);
        // return $data;

        // filter
        $filtered = $users->filter(function ($value, $key) {
            return $value->id < 5;
        });
        // return $filtered->all();

        // GroupBy
        // return $users->groupBy('createdAt');

        // map
        $lengths = $users->map(function ($value, $key) {
            return strlen($value->name);
        });

        return $lengths->take(5)->toArray();
    }

    public function komentar()
    {
        $comment = Komentar::all();
        return view('user', [
            'user_komen' => $comment
        ]);
    }

    public function transaction()
    {
        $transaction = User::with(['transaction', 'komentar'])->get();
        dd($transaction);
    }
}
