<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use DB;
class SepetimController extends Controller
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
    public function index(Request $request)
    {
      $not_id = $request->not_id;
      // $query = DB::SELECT('SELECT not_images.ders_adi as ders_adi,
      //                             not_images.fiyat as fiyat
      //                             FROM not_images WHERE not_images.id=?',[$not_id]);

      // Cart::destroy();

      $items = array(
      	'id' => $not_id,
      	'name' => 'ders_adi',
      	'price' => 125.00,
      	'quantity' => 1
      );

      Cart::insert($items);



      // dd(Cart::totalItems());
        return view('sepetim.index');
    }
}
