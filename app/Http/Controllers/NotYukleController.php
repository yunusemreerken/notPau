<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NotImages;
use Auth;
use DB;

class NotYukleController extends Controller
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
        return view('not-yukle.not-info');
    }
    public function not_ekle(Request $request)
    {
      $this->validate($request, [

               'ders_adi' => 'required',
               'universite' => 'required',
               'fakulte' => 'required',
               'bolum' => 'required',
               'donem' => 'required',
               'yil' => 'required',
               'ogretim_uyesi' => 'required',
               'fiyat' => 'required',
               'konu_icerik' => 'required',
               'filename' => 'required',
               'filename.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'

       ]);


        $user_id = Auth::user()->id;
        $ders_adi = $request->ders_adi;
        $universite = $request->universite;
        $fakulte = $request->fakulte;
        $bolum = $request->bolum;
        $donem = $request->donem;
        $yil = $request->yil;
        $ogretim_uyesi = $request->ogretim_uyesi;
        $fiyat = $request->fiyat;
        $konu_icerik = $request->konu_icerik;


        $not_images= new NotImages();
        $not_images->filename="dsf";//silinecek
        // $not_images->filename=json_encode($data);
        $not_images->user_id=$user_id;
        $not_images->ders_adi=$ders_adi;
        $not_images->universite=$universite;
        $not_images->fakulte=$fakulte;
        $not_images->bolum=$bolum;
        $not_images->donem=$donem;
        $not_images->yil=$yil;
        $not_images->ogretim_uyesi=$ogretim_uyesi;
        $not_images->fiyat=$fiyat;
        $not_images->konu_icerik=$konu_icerik;
        $not_images->durum=0;



       $not_images->save();
       $last_insert_id=$not_images->id;
       if($request->hasfile('filename'))
       {

         foreach($request->file('filename') as $image)
         {
           $name=$image->getClientOriginalName();
           $image->move(public_path().'/images/', $name);
           // $data[] = $name;
           $query = DB::SELECT('INSERT INTO images(not_images_id,filename) VALUES(?,?)',[$last_insert_id,$name]);
         }
       }

       return back()->with('success', 'Your images has been successfully');
    }
}
