<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Video;
use App\Post;
use TutaComp, Redirect, DB;


class HomeController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $videos = Video::all();
        return view('beranda.beranda', compact('video'));
    }

   
   

    

}
