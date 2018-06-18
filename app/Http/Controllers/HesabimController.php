<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
class HesabimController extends Controller
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
    // public function index()
    // {
    //
    //     return view('profile.hesabim');
    // }
    public function index(){
      $user_id = Auth::user()->id;
    $query = DB::SELECT('SELECT
                          users.name AS name,
                          users.email AS email,
                          users.tel AS tel
                        FROM
                          users
                        WHERE
                          users.id = ?',[$user_id]);
    $notlarim = DB::SELECT('SELECT not_images.ders_adi as ders_adi,
                             not_images.yil as yil,
                             not_images.sayfa_sayisi as sayfa_sayisi,
                             not_images.fiyat as fiyat,
                             not_images.ogretim_uyesi as ogretim_uyesi,
                             not_images.durum as durum
       FROM not_images WHERE not_images.user_id = ?',[$user_id]);
       $yuklenen = DB::SELECT('SELECT count(not_images.id) as yuklu_not_sayisi FROM not_images where not_images.user_id =?',[$user_id]);
       $onaylanan = DB::SELECT('SELECT count(not_images.id) as onayli_not_sayisi FROM not_images where not_images.user_id =? AND not_images.durum=?',[$user_id,1]);




    return view('profile.hesabim')->with('users',$query)->with('notlarim',$notlarim)->with('yuklenen',$yuklenen)->with('onaylanan',$onaylanan);

    }
}
