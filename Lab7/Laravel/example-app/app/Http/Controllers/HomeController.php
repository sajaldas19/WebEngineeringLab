<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function Home (){
        return "This is HomeController Home Method";

    }
    function About (){
        return "This is HomeController About Method";

    }
    function Gallery (){
        return "This is HomeController Gallery Method";

    }
    function Contact (){
        return "This is HomeController Contact Method";
    }

}



