<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AyarlarController extends Controller
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
        return view('profile.ayarlar.kisisel');
    }
    public function egitim()
    {
        return view('profile.ayarlar.egitim');
    }
    public function iletisim()
    {
        return view('profile.ayarlar.iletisim');
    }
    public function banka()
    {
        return view('profile.ayarlar.banka');
    }


}
