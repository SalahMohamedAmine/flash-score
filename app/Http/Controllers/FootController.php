<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FootController extends Controller
{
    public function res()
    {

        $key="90b383c1777c74ef4f008308c61b7b64e8ff39d8cbf5bef253b5b6bfd54b84c6";
        $uri="https://apifootball.com/api/?action=get_events&from=2018-01-19&to=2018-01-19&APIkey=".$key;
        $json = file_get_contents($uri);
        $obj = json_decode($json);
        

        $arr=array("res"=>$obj);

        return view ("foot",$arr);
    }

    public function res2()
    {
        $key="90b383c1777c74ef4f008308c61b7b64e8ff39d8cbf5bef253b5b6bfd54b84c6";
        $uri="https://apifootball.com/api/?action=get_events&from=2018-01-19&to=2018-01-19&APIkey=".$key;
        $json = file_get_contents($uri);
        $obj = json_decode($json);
        

        $arr=array("res"=>$obj);

        return view ("foot2",$arr);
    }
}
