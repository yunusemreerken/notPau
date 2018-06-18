<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class AdminController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
      $this->middleware('AdminCheck');
  }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::user()->id;
        $users=DB::SELECT('SELECT users.name as name FROM users WHERE users.id=?',[$id]);
        return view('layouts.admin',compact('users'));
    }
    public function uyeler()
    {
        $users = DB::SELECT('SELECT users.name as name,
                                    users.email as email,
                                    users.cinsiyet as cinsiyet,
                                    users.tel as tel,
                                    users.id as id,
                                    users.is_admin as is_admin

                                    FROM users');
                                    return view('admin.uyeler.index',compact('users'));
    }
    public function user_durum(Request $request)
    {
      $id = $request->user_id;
      $is_admin = $request->is_admin;
      $query = DB::SELECT("UPDATE users
                           SET is_admin = ?
                           WHERE users.id = ?",[$is_admin,$id]);
                           return back();
    }
    public function kullanici_ara(Request $request)
    {
      $kullanici = $request->kullanici;
      $users = DB::SELECT("SELECT users.name as name,
                                  users.email as email,
                                  users.cinsiyet as cinsiyet,
                                  users.tel as tel,
                                  users.id as id,
                                  users.is_admin as is_admin
        FROM users WHERE users.name LIKE '%$kullanici%' OR users.email LIKE '%$kullanici%' OR users.tel LIKE '%$kullanici%'");
      return view('admin.uyeler.index',compact('users'));
    }

    public function notlar()
    {
        $notlar = DB::SELECT('SELECT not_images.ders_adi as ders_adi,
                                    not_images.sayfa_sayisi as sayfa_sayisi,
                                    not_images.universite as universite,
                                    not_images.fakulte as fakulte,
                                    not_images.bolum as bolum,
                                    not_images.donem as donem,
                                    not_images.fiyat as fiyat,
                                    not_images.durum as durum,
                                    not_images.id as id

                                    FROM not_images');
                                    return view('admin.notlar.index',compact('notlar'));
    }
    public function not_durum(Request $request)
    {
      $id = $request->not_id;
      $durum = $request->durum;
      $query = DB::SELECT("UPDATE not_images
                           SET durum = ?
                           WHERE not_images.id = ? ",[$durum,$id]);
                           return back();
    }


}
