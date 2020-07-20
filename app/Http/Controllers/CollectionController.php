<?php

namespace App\Http\Controllers;

use App\User;

class CollectionController extends Controller
{
    public function index()
    {
        $arr = [
            'apel', 'melon', 'leci', 'blewah', 'anggur'
        ];

        foreach ($arr as $row) {
            echo $row . "\n";
        }

        echo "<br>";
        collect($arr)->filter(function ($item) {
            return $item == "apel" || $item == "anggur";
        })
            ->each(function ($item) {
                echo $item . "<br>";
            });
    }

    public function latihan()
    {
        $user = User::all();

        echo "<br>";
        collect($user)
            ->filter(function ($item) {
                return $item->status == "aktif" && $item->email == "do.crazy192@gmail.com";
            })
            ->each(function ($item) {
                echo $item;
            });
    }
}
