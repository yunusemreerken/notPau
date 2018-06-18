<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class AdminCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
      // Öncelikle Kullanıcı giriş yapmış mı bunu kontrol ediyoruz.
      if(Auth::check()){
      //Bu kısımda giriş yapan kullanıcımızın bilgilerini alıyoruz
      $user = Auth::user();
      // Bu kısımda user modeli içerisinde oluşturduğumuz AdminCheck methodunu kontrol edip buna göre bir cevap verdiriyoruz.
      if($user->AdminCheck())
      {
      // Admin ise yoluna devam ediyor.
      return $next($request);
      }
      // Değilse geldiği sayfaya geri atıyor.
      return redirect()->back();
      }
    }
}
