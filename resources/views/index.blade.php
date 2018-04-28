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
                            <h1 data-animation="animated flipInX">Not Aramaya Son</h1>
                            <p data-animation="animated lightSpeedIn">Lorem Ipsum is simply dummy text of the printing</p>
                            <div class="col-sm-12 col-xs-12">
                              <form class="" action="index.html" method="post">
                                <input type="text" name="ara" value="" placeholder="örnek:pamukkale üniversitesi matematik-2" style="width:350px">
                                <button type="submit" class="btn btn-warning" name="button"><i class="fa fa-search" aria-hidden="true"></i>Not Ara</button>
                              </form>
                              <a  href="#" class="btn btn-primary">Tüm Notlar </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="item"> <img src="images/banner/banner-large-6.jpg" alt="" class="slide-image" />
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
