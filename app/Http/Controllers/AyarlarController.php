<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Session;
use DB;
use Auth;
use Image;

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
    public function kisisel(Request $request)// ekle post al
    {
      $user_id = Auth::user()->id;
      $this->validate($request, [
          'name' => 'required',

      ]);
      // $image = Input::get('image');
      // $filename = $image->getClientOriginalName();
      // Image::make($image->getRealPath())->resize(200, 200)->save('images/' . $filename);
      // // $post->image = $filename;
      $image = $request->image;

      $name = $request->name;
      $dogum_gunu= $request->dogum_gunu;
      $cinsiyet= $request->cinsiyet;
      $hakkimda= $request->hakkimda;
      $query = DB::SELECT('UPDATE users SET image=?, name=?,dogum_gunu=?,cinsiyet=?,hakkimda=? WHERE id=?',
      [$image,$name,$dogum_gunu,$cinsiyet,$hakkimda,$user_id]);
      if (isset($query)) {
        return back()->with('success','Başarılı bir şekilde eklendi');
      }
    }
    public function egitim()
    {
        return view('profile.ayarlar.egitim');
    }
    public function egitim_ekle(Request $request)// ekle post al
    {
      $user_id = Auth::user()->id;
      $this->validate($request, [
          'universite' => 'required',

      ]);
      $universite = $request->universite;
      $fakulte= $request->fakulte;
      $bolum= $request->bolum;
      $derece= $request->derece;
      $bas_tarihi= $request->bas_tarihi;
      $bitis_tarihi= $request->bitis_tarihi;
      $mezuniyet = 1;


      $query = DB::SELECT('UPDATE users SET universite=?,fakulte=?,bolum=?,derece=?,baslama_tarihi=?,bitis_tarihi=?,mezuniyet_durumu=? WHERE id=?',
      [$universite,$fakulte,$bolum,$derece,$bas_tarihi,$bitis_tarihi,$mezuniyet,$user_id]);
      if (isset($query)) {
        return back()->with('success','Başarılı bir şekilde eklendi');
      }
    }
    public function iletisim()
    {
        return view('profile.ayarlar.iletisim');
    }
    public function iletisim_ekle(Request $request)// ekle post al
    {
      $user_id = Auth::user()->id;
      $email = $request->email;
      $telefon = $request->telefon;
      $sehir= $request->sehir;
      $posta_kodu= $request->posta_kodu;
      $adres= $request->adres;



      $query = DB::SELECT('UPDATE users SET email=?,tel=?,sehir=?,posta_kodu=?,adres=? WHERE id=?',
      [$email,$telefon,$sehir,$posta_kodu,$adres,$user_id]);
      if (isset($query)) {
        return back()->with('success','Başarılı bir şekilde eklendi');
      }
    }
    public function banka()
    {
        return view('profile.ayarlar.banka');
    }

    public function banka_ekle(Request $request)// ekle post al
    {
      $user_id = Auth::user()->id;
      $name=$request->name;
      $tc=$request->tc;
      $iban=$request->iban;
      $query = DB::SELECT('UPDATE users SET name=?,tc=?,iban=? WHERE id=?',
      [$name,$tc,$iban,$user_id]);
      if (isset($query)) {
        return back()->with('success','Başarılı bir şekilde eklendi');
      }
    }

}
