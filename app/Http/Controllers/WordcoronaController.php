<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WordcoronaController extends Controller
{
    public function index()
    {
        $response = Http::get('https://api.kawalcorona.com/');
        $response1 = Http::get('https://api.kawalcorona.com/positif');
        $response2 = Http::get('https://api.kawalcorona.com/sembuh');
        $response3 = Http::get('https://api.kawalcorona.com/meninggal');

        $data = $response->json() ;
        $data1 = $response1->json() ;
        $data2 = $response2->json() ;
        $data3 = $response3->json() ;

        return view('word.index', ['data' => $data])
        -> with('data1', $data1)
        -> with('data2', $data2)
        -> with('data3', $data3) ;

        // dd($data1);

    }

}
