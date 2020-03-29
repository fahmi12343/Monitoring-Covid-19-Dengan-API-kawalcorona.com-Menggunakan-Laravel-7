<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class APIcoronaController extends Controller
{
    public function provinsi()
    {
        $response = Http::get('https://api.kawalcorona.com/indonesia/provinsi');
        $response1 = Http::get('https://api.kawalcorona.com/indonesia');

        $data = $response->json() ;
        $data1 = $response1->json() ;

        return view('index', ['data' => $data])
        -> with('data1', $data1) ;
    }



}
