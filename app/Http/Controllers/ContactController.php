<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Message\Request as Client;


class ContactController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function create()
    {
        return view('contact.create');
    }

    public function store(Request $request)
    {
        //$client = new Client();
        $client = new \GuzzleHttp\Client();
        $request_guzzle = $client->createRequest('POST', 'http://127.0.0.1:8000/oauth/token', [
            'form_params' => [
                'grant_type' => 'client_credentials',
                'client_id' => '1',
                'client_secret' => 'o69UeWgc0dTA9eoD5LwLeq4M32C2RkIt9sPx0GKA'
            ]
        ]);
        
        $response = $client->send($request_guzzle);
        dd($response->getBody());
        /*$request_guzzle = new Client('POST', 'http://127.0.0.1:8000/oauth/token', [
            'form_params' => [
                'grant_type' => 'client_credentials',
                'client_id' => '1',
                'client_secret' => 'o69UeWgc0dTA9eoD5LwLeq4M32C2RkIt9sPx0GKA'
            ]
        ]);*/
        
        //dd($request_guzzle->getBody());
        //dd($request);
        return view('home');
    }
}
