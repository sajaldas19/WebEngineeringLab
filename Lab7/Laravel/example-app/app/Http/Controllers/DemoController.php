<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    function myName($NameValue){
        return $NameValue;
    }
    function myFullName($f_name,$m_name,$l_name){
        return "First name: ".$f_name." Middle Name: ".$m_name." Last Name: ".$l_name;
    }
}
