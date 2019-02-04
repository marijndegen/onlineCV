<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//TODO controleren of de juiste dingen worden weergegeven.

class LanguageController extends Controller
{
    function select(){


    $ip = $_SERVER['REMOTE_ADDR']; // This will contain the ip of the request

    // You can use a more sophisticated method to retrieve the content of a webpage with php using a library or something
    // We will retrieve quickly with the file_get_contents
    $dataArray = json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip));

    // var_dump($dataArray);

    $array = json_decode(json_encode($dataArray), true);

    print_r($array);
    // outputs something like (obviously with the data of your IP) :

    // geoplugin_countryCode => "DE",
    // geoplugin_countryName => "Germany"
    // geoplugin_continentCode => "EU"

    // echo "Hello visitor from: ".$array["geoplugin_countryCode"];
    // return view('index');
    }
}
