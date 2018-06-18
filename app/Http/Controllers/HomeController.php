<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class HomeController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query = DB::SELECT('SELECT not_images.filename as filename,
          not_images.id as not_id,
          not_images.universite as universite,
          not_images.ders_adi as ders_adi,
          not_images.sayfa_sayisi as sayfa_sayisi,
          not_images.fiyat as fiyat
            FROM not_images');
        return view('index',compact('query'));
    }
}
