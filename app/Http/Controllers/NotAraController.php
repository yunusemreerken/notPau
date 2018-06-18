<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class NotAraController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notlar = DB::SELECT('SELECT not_images.ders_adi as ders_adi,
          not_images.id as id,
          not_images.universite as universite,
          not_images.yil as yil,
          not_images.fiyat as fiyat,
          users.name as user_name,
          not_images.sayfa_sayisi as sayfa_sayisi
          FROM not_images LEFT JOIN users ON users.id= not_images.user_id');
        return view('not-ara.index',compact('notlar'));
    }
    public function not_ara(Request $request)
    {
      $ders_adi = $request->ders_adi;
      $notlar = DB::SELECT("SELECT not_images.ders_adi as ders_adi,
        not_images.id as id,
        not_images.universite as universite,
        not_images.yil as yil,
        not_images.fiyat as fiyat,
        users.name as user_name,
        not_images.sayfa_sayisi as sayfa_sayisi
        FROM not_images LEFT JOIN users ON users.id= not_images.user_id
         WHERE not_images.ders_adi LIKE '%$ders_adi%'
          OR not_images.universite LIKE '%$ders_adi%'
           OR not_images.yil LIKE '%$ders_adi%'
            OR users.name LIKE '%$ders_adi%'");
      return view('not-ara.index',compact('notlar'));
    }
    public function not_detay($not_id)
    {
      // $not_id = $id;
      $not_info = DB::SELECT('SELECT not_images.ders_adi as ders_adi,
                                      images.filename as filename,
                                      not_images.id as id,
                                      not_images.universite as universite,
                                      not_images.yil as yil,
                                      not_images.fiyat as fiyat,
                                      users.name as user_name,
                                      not_images.sayfa_sayisi as sayfa_sayisi
                              FROM not_images LEFT JOIN users ON users.id= not_images.user_id
                              INNER JOIN images ON not_images.id=images.not_images_id
                              WHERE not_images.id = ?',
                              [$not_id]);
      return view('not-detay.index',compact('not_info'));

    }
    public function not_detay_satin($not_id)
    {
      // $not_id = $id;
      $not_info = DB::SELECT('SELECT not_images.ders_adi as ders_adi,
                                      images.filename as filename,
                                      not_images.id as id,
                                      not_images.universite as universite,
                                      not_images.yil as yil,
                                      not_images.fiyat as fiyat,
                                      users.name as user_name,
                                      not_images.sayfa_sayisi as sayfa_sayisi
                              FROM not_images LEFT JOIN users ON users.id= not_images.user_id
                              INNER JOIN images ON not_images.id=images.not_images_id
                              WHERE not_images.id = ?',
                              [$not_id]);
      return view('not_detay_satin.index',compact('not_info'));

    }
    public function not_satinal(Request $request)
    {
      $user_id = Auth::user()->id;
      $not_id= $request->not_id;
      $result = DB::SELECT('SELECT count(*) as sayac FROM satinalinans WHERE user_id=? AND not_id=?',[$user_id,$not_id]);
      foreach ($result as $res) {
          if ($res->sayac > 0) {
              return back()->with('msg','Satın alınmış');
          }
          else {
            $query = DB::SELECT('INSERT INTO satinalinans(user_id,not_id) VALUES(?,?)',[$user_id,$not_id]);
            return back()->with('msg','Satın Alma işlemi Başarılı');
          }
      }
    }
}
