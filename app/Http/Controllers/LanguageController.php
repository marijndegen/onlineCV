<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

//TODO controleren of de juiste dingen worden weergegeven.

class LanguageController extends Controller
{
    function select(){
        $ip = $_SERVER['REMOTE_ADDR'];
        $dataArray = json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip));
        $array = json_decode(json_encode($dataArray), true);

        $locale = $array["geoplugin_countryCode"];

        if(!$locale){
            return view('index');
        }

        switch($locale){
            case "NL":
                App::setLocale("nl");
            break;

            case "CH":
            case "DE":
            case "AT":
                App::setLocale("de");
            break;

            default;
                App::setLocale("en");
            break;
        }
        return view('index');
    }
}