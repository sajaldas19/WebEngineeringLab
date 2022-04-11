<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    function Home (){
        return view("homepage");
    }
    function About (){
        return view("aboutpage");
    }
    function Gallery (){
        return view("gallerypage");
    }
    function Contact (){
        return view("contactpage");
    }
}
