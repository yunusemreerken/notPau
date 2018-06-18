@extends('layouts.master')

@section('content')
<!-- Banner Section-->
<div class="banner">
    <div id="bootstrap-touch-slider" class="carousel bs-slider fade  control-round indicators-line" data-ride="carousel" data-pause="" data-interval="7000">
        <div class="carousel-inner" role="listbox">
            <div class="item active"> <img src="{{URL::asset('images/banner/banner-large-5.jpg')}}" class="slide-image" alt="" />
                <div class="bs-slider-overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="slide-text slide_style_center">
                            <h1 data-animation="animated flipInX">Not İstemeye Son</h1>
                            <!-- <p data-animation="animated lightSpeedIn">Lorem Ipsum is simply dummy text of the printing</p> -->
                            <div class="col-sm-12 col-xs-12">
                              <form class="" action="not-ara-giris" method="post">
                                @csrf
                                <input type="text" name="ders_adi" value="" placeholder="örnek:pamukkale üniversitesi,paü,mat matematik-2" style="width:350px">
                                <button type="submit" class="btn btn-warning" name="button"><i class="fa fa-search" aria-hidden="true"></i>Not Ara</button>
                              </form>
                              <a  href="{{route('not-ara')}}" class="btn btn-primary">Tüm Notlar </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item"> <img src="{{URL::asset('images/banner/banner-large-6.jpg')}}" class="slide-image" alt="" />
                <div class="bs-slider-overlay"></div>
                <div class="container">
                    <div class="row">
                        <!-- <div class="slide-text slide_style_center">
                            <h1>Not İstemeye Son</h1>
                            <p data-animation="animated lightSpeedIn">Lorem Ipsum is simply dummy text of the printing</p>
                            <div class="col-sm-12 col-xs-12">
                              <form class="" action="not-ara-giris" method="post">
                                @csrf
                                <input type="text" name="ders_adi" value="" placeholder="örnek:pamukkale üniversitesi,paü,mat matematik-2" style="width:350px">
                                <button type="submit" class="btn btn-warning" name="button"><i class="fa fa-search" aria-hidden="true"></i>Not Ara</button>
                              </form>
                              <a  href="{{route('not-ara')}}" class="btn btn-primary">Tüm Notlar </a>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
            <!-- <div class="item"> <img src="images/banner/banner-large-2.jpg" class="slide-image" alt="" />
                <div class="bs-slider-overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="slide-text slide_style_center">
                            <h1 data-animation="animated flipInX">Corporate plus theme</h1>
                            <p data-animation="animated lightSpeedIn">Lorem Ipsum is simply dummy text of the printing</p>
                            <a href="service.html" class="btn btn-primary" data-animation="animated fadeInUp">View Services</a> <a href="contact.html" class="btn btn-danger" data-animation="animated fadeInDown">Quick Contact</a> </div>
                    </div>
                </div>
            </div>

            <div class="item"> <img src="images/banner/banner-large-4.jpg" alt="" class="slide-image" />
                <div class="bs-slider-overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="slide-text slide_style_center">
                            <h1 data-animation="animated flipInX">Corporate plus theme</h1>
                            <p data-animation="animated lightSpeedIn">Lorem Ipsum is simply dummy text of the printing</p>
                            <a href="service.html" class="btn btn-primary" data-animation="animated fadeInUp">View Services</a> <a href="contact.html" class="btn btn-danger" data-animation="animated fadeInDown">Quick Contact</a> </div>
                    </div>
                </div>
            </div> -->
        </div>
        <a class="left carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="prev"> <span class="fa fa-angle-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
        <a class="right carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="next"> <span class="fa fa-angle-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
    </div>
</div>
@endsection

@section('son_eklenen')


<?php if (isset($query)): ?>
  <?php foreach ($query as $notes ): ?>
    <div class="item">
        <div class="team-block">
          <div class="team-info">
              <h4>{{$notes->ders_adi}}</h4>
              <p>{{$notes->sayfa_sayisi}} SAYFA</p>

          </div>
            <div class="team-img">
                <a href="not-detay/{{$notes->not_id}}"> <img src="images/{{$notes->filename}}" alt="" /> </a>
            </div>
            <div class="team-info">
                <h4>{{$notes->universite}}</h4>
                <p>{{$notes->fiyat}} TL</p>
                <!-- <ul>
                    <li><a href="#" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                </ul> -->
            </div>
        </div>
    </div>
  <?php endforeach; ?>
<?php endif; ?>

@endsection
