<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function index()
    {
        $ch = curl_init("https://4w5hfwgyt2.execute-api.us-east-1.amazonaws.com/production/code-test/");
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'x-api-key: ' . env('API_KEY')
        ));        

        return curl_exec($ch);
    }
}
