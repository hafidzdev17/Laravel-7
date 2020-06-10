<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CovidController extends Controller
{
    public function index()
    {
        $response = Http::get('https://api.kawalcorona.com/indonesia/provinsi');
        $data = $response->json();
        return view('index', compact('data'));
    }
}
