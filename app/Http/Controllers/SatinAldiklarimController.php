<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class SatinAldiklarimController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth::user()->id;
        $notlar = DB::SELECT('SELECT not_images.ders_adi as ders_adi,
                                    not_images.id as id,
                                    not_images.universite as universite,
                                    not_images.yil as yil,
                                    not_images.fiyat as fiyat,
                                    users.name as user_name,
                                    not_images.sayfa_sayisi as sayfa_sayisi
                                     FROM satinalinans
                                     LEFT JOIN not_images ON not_images.id=satinalinans.not_id
                                     LEFT JOIN users ON users.id= not_images.user_id
                                     WHERE satinalinans.user_id=?',[$user_id]);
        return view('profile.satin-aldiklarim',compact('notlar'));
    }
}
