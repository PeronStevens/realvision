<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function index()
    {
        $showData = [];

        $ch = curl_init("https://4w5hfwgyt2.execute-api.us-east-1.amazonaws.com/production/code-test/");

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'x-api-key: ' . env('API_KEY'),
            "Accept: application/json" 
        ));        

        $data = curl_exec($ch);

        curl_close($ch);

        $someArray = json_decode($data, true);

        foreach($someArray['collection']['items'] as $key => $val) {
            $showData[$key]['id']          = $key;
            $showData[$key]['name']        = $val['data'][2]['value'];
            $showData[$key]['description'] = $val['data'][1]['value'];
            $showData[$key]['image']       = $val['links'][1]['href'];
        }

        return json_encode($showData);
    }
}
