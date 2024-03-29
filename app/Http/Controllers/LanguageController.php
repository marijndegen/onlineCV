<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\App;

define('UTEL', '0031643404909');
define('TEL', '+31643404909');
define('EMAIL', 'marijndegen96@hotmail.com');

class LanguageController extends Controller
{
    private static $data = ['utel' => UTEL, 'tel' => TEL, 'email' => EMAIL];

    function select()
    {
        $ip = $_SERVER['REMOTE_ADDR'];
        $dataArray = json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip));
        $array = json_decode(json_encode($dataArray), true);

        $locale = $array["geoplugin_countryCode"];

        if (!$locale) {
            return view('index', self::$data);
        }

        switch ($locale) {
            case "NL":
                App::setLocale("nl");
                break;
            default;
                App::setLocale("en");
                break;
        }
        return view('index', self::$data);
    }

    static function show()
    {
        return view('index', self::$data);
    }

    public function pdfGenerator($page)
    {
        /*
        header
        career
        features
        skills
        footer
        */

        return view('pdf-adapter', array_merge(self::$data, ['page' => $page]));
    }
}
