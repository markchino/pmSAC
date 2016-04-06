<?php

namespace pmSAC\Http\Controllers;

use Illuminate\Http\Request;

use pmSAC\Http\Requests;
use pmSAC\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Display de index page of the app
     *
     * @return Response
     */
    public function index(){
        return view('index');
    }
}
