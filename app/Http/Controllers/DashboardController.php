<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //

    function index(){

      return view('Dashboard.index');
    }

    function indexv2(){

      return view('Dashboard.indexv2');
    }

    function about(){

      return view('Dashboard.aboutus');
    }

    function service(){

      return view('Dashboard.service');
    }

    function gallery(){

      return view('Dashboard.gallery');
    }

    function blog(){

      return view('Dashboard.blog');
    }

    function contact(){

      return view('Dashboard.contact');
    }
}
