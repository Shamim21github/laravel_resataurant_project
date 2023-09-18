<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
    {
        return view("pages.erp.login");
    }
    function home(){
        return view("pages.erp.dashboard.dashboard");
    }
    function dashboard(){
        return view("pages.erp.dashboard.dashboard");
    }
    function contact()
    {
        return view("pages.erp.site.contact");
    }
    function help()
    {
        return view("pages.erp.site.help");
    }
}
