<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- favicon -->
    <!-- <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png"> -->
    <!-- Title -->
    <title>Not Paü</title>

    <!-- Common Stylesheets -->
    <link rel="stylesheet" href="{{URL::asset('corporate/css/bootstrap.min.css')}}">

    <!-- Fonts Stylesheets -->
    <link rel="stylesheet" href="{{url::asset('corporate/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{url::asset('corporate/css/icofont.css')}}">

    <!-- Banner Stylesheets -->
    <link rel="stylesheet" href="{{url::asset('corporate/css/banner.css')}}">

    <!-- Animate Stylesheets -->
    <link rel="stylesheet" href="{{url::asset('corporate/css/animate.css')}}">

    <!-- Slider Stylesheets -->
    <link rel="stylesheet" href="{{url::asset('corporate/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{url::asset('corporate/css/owl.theme.css')}}">

    <!-- Gallery Stylesheets -->
    <link rel="stylesheet" href="{{url::asset('corporate/css/lightbox.css')}}">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{url::asset('corporate/css/style.css')}}">
    <link rel="stylesheet" href="{{url::asset('corporate/css/homepage2-style.css')}}">

    <!-- Responsive Stylesheet -->
    <link rel="stylesheet" href="{{url::asset('corporate/css/responsive.css')}}">
    <style>
        /* .dropdown-menu .a{
          vertical-align:top;
           display: flex;
           flex-direction: column;
        } */
    </style>
    <style>
    .background {
        background-color: #3973ac;
    }
    .margintop{
        margin-top: 150px;
    }
</style>
<style>

.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 8px;
    font-size: 12px;
    width: 120px;
    border: none;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 120px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #ddd}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}
</style>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>

<body>

    <!-- Pre Loader-->
    <div id="preloader"></div>

    <!-- Header Section-->
    <header class="header-holder-1">
        <div class="main-header ">
          <!-- Top Header Section-->
          <div class="upper-header ">
              <div class="container">
                  <div class="row">
                      <div class="col-md-3 col-sm-12 col-xs-12">
                          <div class="logo-holder">
                              <a href="{{route('home')}}"><img src="images/ilk-tema.png" width="220" alt=""></a>
                          </div>
                      </div>
                      <!-- <div class="col-md-5 col-sm-12 col-xs-12">
                          <div class="upper-header-info">
                              <ul>
                                  <li><a href="tel:"><i class="fa fa-phone" aria-hidden="true"></i> &nbsp; +1-123-456-789</a></li>
                                  <li><a href="mailto:"><i class="fa fa-envelope-o" aria-hidden="true"></i> &nbsp; info@yourbuiness.com</a></li>

                              </ul>
                          </div>
                      </div> -->
                      <div class="col-md-9 col-sm-12 col-xs-12">
                          <div class="social-link">
                              <ul>
                                @if (Route::has('login'))
                                    <div class="top-right links">
                                        @auth
                                        <?php
                                        // not ara
                                        // not yükle
                                        // <!-- davet -->
                                        // sepet
                                        // mesajlar
                                        // menü
                                        // --hesabım
                                        // --mesajlar
                                        // --yapılacaklar
                                        // --yorumlarım
                                        // --aldımklarım
                                        // --yüklediklerim
                                        // --ayarlar
                                        // --çıkış
                                        ?>
                                              <!-- <input type="text" name="ara" value="" placeholder="Not Ara"> -->

                                            <a href="{{ route('not-yukle') }}" class="btn btn-primary" aria-hidden="true"><i class="fa fa-sign-in">Not Yükle</i></a>
                                            <!-- <a href="{{ route('register') }}" class="btn btn-warning" aria-hidden="true"><i class="fa fa-user-plus">Davet et</i></a> -->
                                            <a href="{{ route('sepetim') }}" class="btn btn-primary" aria-hidden="true"><i class="fa fa-shopping-bag"></i>
<span class="cart-total cart-total-1">5</span></i></a>
                                            <a href="{{ route('mesajlar') }}" class="btn btn-primary" aria-hidden="true"><i class="fa fa-envelope" ></i></a>
                                            <div class="dropdown">
                                              <button class="dropbtn">{{ Auth::user()->name }}</button>
                                              <div class="dropdown-content">
                                                <a href="{{ route('hesabim') }}">
                                                  {{ __('Hesabım') }}
                                                </a>
                                                <a href="{{ route('mesajlar') }}">
                                                  {{ __('Mesajlar') }}
                                                </a>
                                                <a href="{{ route('yorumlar') }}">
                                                  {{ __('Yorumlarım') }}
                                                </a>
                                                <a href="{{ route('satin-aldiklarim') }}">
                                                  {{ __('Aldıklarım') }}
                                                </a>
                                                <a href="{{ route('yuklediklerim') }}">
                                                  {{ __('Yüklediklerim') }}
                                                </a>
                                                <a href="{{ route('ayarlar') }}">
                                                  {{ __('Ayarlar') }}
                                                </a>
                                                <a href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                                                    {{ __('Çıkış') }}
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                              </div>
                                            </div>
                                        @else
                                            <a href="{{ route('login') }}" class="btn btn-primary"><i class="fa fa-sign-in" aria-hidden="true">Giriş Yap</i></a>
                                            <a href="{{ route('register') }}" class="btn btn-warning"><i class="fa fa-user-plus" aria-hidden="true">Üye Ol</i></a>
                                            <a href="{{ route('sepetim') }}" class="btn btn-success"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a>
                                        @endauth
                                    </div>
                                @endif


                                  <!-- <li><a href="#" title="Facebook" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                  <li><a href="#" title="Twitter" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                  <li><a href="#" title="Google +" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                  <li><a href="#" title="Pinterest" target="_blank"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li> -->
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="clearfix"></div>

        </div>
    </header>
    <div class="clearfix"></div>


    @yield('content')

    <!-- Mobile Search Section-->
    <div class="search-small-divice">
        <div class="container">
            <div class="custom-search-input">
                <form>
                    <div class="input-group">
                        <input type="text" class="search form-control input-lg" placeholder="Not Ara" />
                        <span class="input-group-btn">
          <button class="btn btn-lg" type="button"> <i class="fa fa-search" aria-hidden="true"></i> </button>
          </span> </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Mobile Search Section-->
    <!-- <div class="search-small-divice">
        <div class="container">
            <div class="custom-search-input">
                <form>
                    <div class="input-group">
                        <input type="text" class="search form-control input-lg" placeholder="Search" />
                        <span class="input-group-btn">
          <button class="btn btn-lg" type="button"> <i class="fa fa-search" aria-hidden="true"></i> </button>
          </span> </div>
                </form>
            </div>
        </div>
    </div> -->




  <section class="feature-service">
      <div class="container">
          <div class="title title-black">
              <!-- <p>Our Team</p> -->
              <h2>Son Eklenen Notlar</h2>
          </div>
          <div class="owl-carousel owl-theme team-member-slide">

            @yield('son_eklenen')

          </div>
      </div>
      <div class="viewmore"> <a href="not-ara" class="more viewmore-3">Diğer Tüm Notlar</a> </div>
  </section>
  <div class="clearfix"></div>

    <!-- Introduction Section -->
    <section class="introduction">
        <div class="container">
            <div class="row">

                <!-- Short Introduction Section-->
                <div class="col-md-5 col-sm-12 col-xs-12">
                  <div class="team-img">
                      <img src="images/staff/staff-5.jpg" alt="" />
                  </div>
                </div>

                <div class="col-md-7 col-sm-12 col-xs-12">
                    <div class="introduction-left">
                        <div class="title">
                            <!-- <p>Introduction</p> -->
                            <h2>Not ARAMA</h2>
                        </div>
                        <p>NotPaü ile not bulmak artık çok daha kolay. Kullanıcıların yüklediği notlar arasından çok rahat bir şekilde eleme yapabilir ve notu kullanmaya başlayabilirsiniz.</p>
                        <!-- <a href="about-us.htm" class="more viewmore-3">read more</a> </div> -->
                </div>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>

    <!-- Introduction Section -->
    <section class="introduction">
        <div class="container">
            <div class="row">

              <!-- Short Introduction Section-->
              <div class="col-md-5 col-sm-12 col-xs-12">
                <div class="team-img">
                    <img src="images/staff/staff-6.jpg" alt="" />
                </div>
              </div>

                <div class="col-md-7 col-sm-12 col-xs-12">
                    <div class="introduction-left">
                        <div class="title">
                            <!-- <p>Introduction</p> -->
                            <h2>not yükle para kazan</h2>
                        </div>
                        <p>Kim derslerde aldığı notlar üzerinden para kazanmak istemez ki ? Artık NotPaü ile para kazanmak için yapmanız gereken tek şey notları sisteme yükleyip satın alınmasını beklemek.</p>
                        <!-- <a href="about-us.html" class="more viewmore-3">read more</a> </div> -->
                </div>


            </div>
        </div>
    </section>
    <div class="clearfix"></div>





    <!-- Middle Information Section -->
    <!-- <section class="middle-information">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="title title-white">
                        <h2>Why choose us ?</h2>
                    </div>
                    <div class="why-choose">
                        <div class="why-choose-link">
                            <div class="why-choose-icon"> <i class="icofont icofont-money-bag"></i> </div>
                            <div class="why-choose-content">
                                <h4><a href="#">Time and Cost Savings</a></h4>
                                <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown </p>
                            </div>
                        </div>
                        <div class="why-choose-link">
                            <div class="why-choose-icon"> <i class="icofont icofont-comment"></i> </div>
                            <div class="why-choose-content">
                                <h4><a href="#">Business Consulting</a></h4>
                                <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown </p>
                            </div>
                        </div>
                        <div class="why-choose-link">
                            <div class="why-choose-icon"> <i class="icofont icofont-cop-badge"></i> </div>
                            <div class="why-choose-content">
                                <h4><a href="#">Awesome Features</a></h4>
                                <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12 col-xs-offset-2">
                    <div class="fact-counter">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <div class="counter">
                                    <div class="counter-value" data-to="180">0</div>
                                    <h4 class="counter-title">Consultants</h4>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <div class="counter">
                                    <div class="counter-value" data-to="250">0</div>
                                    <h4 class="counter-title">Project</h4>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <div class="counter">
                                    <div class="counter-value" data-to="120">0</div>
                                    <h4 class="counter-title">Staff</h4>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <div class="counter">
                                    <div class="counter-value" data-to="70">0</div>
                                    <h4 class="counter-title">Branch</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="clearfix"></div> -->

    <!-- feature-service Section -->
    <!-- <section class="feature-service">
        <div class="container">
            <div class="title">
                <h2>Feature Services</h2>
                <p class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry </p>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="service-block">
                        <div class="service-icon"> <a href="service-details.html"><i class="icofont icofont-ui-theme"></i></a> </div>
                        <div class="service-content">
                            <h3><a href="service-details.html">Fast and Clean Design</a></h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Text of the printing there</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="service-block">
                        <div class="service-icon"> <a href="service-details.html"><i class="icofont icofont-computer"></i></a> </div>
                        <div class="service-content">
                            <h3><a href="service-details.html">Interface Design</a></h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Text of the printing there</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="service-block">
                        <div class="service-icon"> <a href="service-details.html"><i class="icofont icofont-responsive"></i></a> </div>
                        <div class="service-content">
                            <h3><a href="service-details.html">Responsive Design</a></h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Text of the printing there</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="service-block">
                        <div class="service-icon"> <a href="service-details.html"><i class="icofont icofont-document-folder"></i></a> </div>
                        <div class="service-content">
                            <h3><a href="service-details.html">Well Documented</a></h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Text of the printing there</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="service-block">
                        <div class="service-icon"> <a href="service-details.html"><i class="icofont icofont-web"></i></a> </div>
                        <div class="service-content">
                            <h3><a href="service-details.html">SEO Friendly Design</a></h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Text of the printing there</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="service-block">
                        <div class="service-icon"> <a href="service-details.html"><i class="icofont icofont-code-alt"></i></a> </div>
                        <div class="service-content">
                            <h3><a href="service-details.html">Easy Customization</a></h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Text of the printing there</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="viewmore"> <a href="service.html" class="more viewmore-3">View More</a> </div>
        </div>
    </section>
    <div class="clearfix"></div> -->

    <!-- Staff Member Section -->


    <!-- Recent Update Section -->
    <!-- <section class="recent-update">
        <div class="container">
            <div class="title">
                <p> News and Events</p>
                <h2>Recent Updates</h2>
            </div>
            <div class="owl-carousel owl-theme recent-update-slide">
                <div class="item">
                    <div class="recent-update-block">
                        <div class="recent-update-img">
                            <a href="blog-details.html"><img src="images/news/news-1.jpg" class="img-responsive" alt=""></a>
                            <div class="recent-update-date">
                                <div class="date">16 </div>
                                <div class="month">July</div>
                                <div class="year">2017</div>
                            </div>
                        </div>
                        <div class="recent-update-content">
                            <h3><a href="blog-details.html">Lorem Ipsum is simply dummy text</a></h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <a href="blog-details.html" class="more viewmore-4">read more</a> </div>
                    </div>
                </div>
                <div class="item">
                    <div class="recent-update-block">
                        <div class="recent-update-img">
                            <a href="blog-details.html"><img src="images/news/news-2.jpg" class="img-responsive" alt=""></a>
                            <div class="recent-update-date">
                                <div class="date">16 </div>
                                <div class="month">July</div>
                                <div class="year">2017</div>
                            </div>
                        </div>
                        <div class="recent-update-content">
                            <h3><a href="blog-details.html">Lorem Ipsum is simply dummy text</a></h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <a href="blog-details.html" class="more viewmore-4">read more</a> </div>
                    </div>
                </div>
                <div class="item">
                    <div class="recent-update-block">
                        <div class="recent-update-img">
                            <a href="blog-details.html"><img src="images/news/news-3.jpg" class="img-responsive" alt=""></a>
                            <div class="recent-update-date">
                                <div class="date">16 </div>
                                <div class="month">July</div>
                                <div class="year">2017</div>
                            </div>
                        </div>
                        <div class="recent-update-content">
                            <h3><a href="blog-details.html">Lorem Ipsum is simply dummy text</a></h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <a href="blog-details.html" class="more viewmore-4">read more</a> </div>
                    </div>
                </div>
                <div class="item">
                    <div class="recent-update-block">
                        <div class="recent-update-img">
                            <a href="blog-details.html"><img src="images/news/news-4.jpg" class="img-responsive" alt=""></a>
                            <div class="recent-update-date">
                                <div class="date">16 </div>
                                <div class="month">July</div>
                                <div class="year">2017</div>
                            </div>
                        </div>
                        <div class="recent-update-content">
                            <h3><a href="blog-details.html">Lorem Ipsum is simply dummy text</a></h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <a href="blog-details.html" class="more viewmore-4">read more</a> </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="clearfix"></div> -->

    <!-- Testimonials Section -->
    <!-- <section class="customer-testimonials">
        <div class="container">
            <div class="title">
                <p>Pleople Testimonials</p>
                <h2>What customer says</h2>
            </div>
            <div class="owl-carousel owl-theme testimonial-slide-1">
                <div class="item">
                    <div class="customer-testimonial-text"> <img src="images/client/client-1.jpg" class="img-circle" alt="">
                        <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
                        <h5>James <span>Director, ABC Company</span> </h5>
                    </div>
                </div>
                <div class="item">
                    <div class="customer-testimonial-text"> <img src="images/client/client-2.jpg" class="img-circle" alt="">
                        <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
                        <h5>John <span>Producer, ABC Media</span> </h5>
                    </div>
                </div>
                <div class="item">
                    <div class="customer-testimonial-text"> <img src="images/client/client-3.jpg" class="img-circle" alt="">
                        <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
                        <h5>Puran <span> Designer, ABC Software</span> </h5>
                    </div>
                </div>
                <div class="item">
                    <div class="customer-testimonial-text"> <img src="images/client/client-4.jpg" class="img-circle" alt="">
                        <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
                        <h5>Tom <span> Manager, ABC Company</span> </h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="clearfix"></div> -->

    <!-- Project Gallery Section -->
    <!-- <section class="project-gallery">
        <div class="container-fluid">
            <div class="title">
                <p> Photo Gallery</p>
                <h2>Project Gallery</h2>
            </div>
            <div class="project-showcase">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <a href="images/gallery/project-1.jpg" data-lightbox="image-1" class="gallery-effect" data-fresco-group="" data-title="Project name here" data-fresco-caption=""> <img class="gallery-img" src="images/gallery/project-1.jpg" alt=""> <span class="gallery-overlay"></span> <span class="project-gallery-text">Project Name</span> </a>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <a href="images/gallery/project-2.jpg" data-lightbox="image-1" class="gallery-effect" data-fresco-group="" data-title="Project name here" data-fresco-caption=""> <img class="gallery-img" src="images/gallery/project-2.jpg" alt=""> <span class="gallery-overlay"></span> <span class="project-gallery-text">Project Name</span> </a>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <a href="images/gallery/project-3.jpg" data-lightbox="image-1" class="gallery-effect" data-fresco-group="" data-title="Project name here" data-fresco-caption=""> <img class="gallery-img" src="images/gallery/project-3.jpg" alt=""> <span class="gallery-overlay"></span> <span class="project-gallery-text">Project Name</span> </a>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <a href="images/gallery/project-4.jpg" data-lightbox="image-1" class="gallery-effect" data-fresco-group="" data-title="Project name here" data-fresco-caption=""> <img class="gallery-img" src="images/gallery/project-4.jpg" alt=""> <span class="gallery-overlay"></span> <span class="project-gallery-text">Project Name</span> </a>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <a href="images/gallery/project-5.jpg" data-lightbox="image-1" class="gallery-effect" data-fresco-group="" data-title="Project name here" data-fresco-caption=""> <img class="gallery-img" src="images/gallery/project-5.jpg" alt=""> <span class="gallery-overlay"></span> <span class="project-gallery-text">Project Name</span> </a>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <a href="images/gallery/project-6.jpg" data-lightbox="image-1" class="gallery-effect" data-fresco-group="" data-title="Project name here" data-fresco-caption=""> <img class="gallery-img" src="images/gallery/project-6.jpg" alt=""> <span class="gallery-overlay"></span> <span class="project-gallery-text">Project Name</span> </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="clearfix"></div> -->

    <!-- Partner Logo Section -->
    <!-- <section class="partner-logo">
        <div class="container">
            <div class="owl-carousel owl-theme partner-logo-slide">
                <div class="item">
                    <div class="logo-block"> <img src="images/partner/partner-1.jpg" alt=""> </div>
                </div>
                <div class="item">
                    <div class="logo-block"> <img src="images/partner/partner-2.jpg" alt=""> </div>
                </div>
                <div class="item">
                    <div class="logo-block"> <img src="images/partner/partner-3.jpg" alt=""> </div>
                </div>
                <div class="item">
                    <div class="logo-block"> <img src="images/partner/partner-4.jpg" alt=""> </div>
                </div>
                <div class="item">
                    <div class="logo-block"> <img src="images/partner/partner-4.jpg" alt=""> </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Footer Section -->
    <footer>
        <!-- Top Footer Section -->
        <!-- <div class="top-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="footer-block footer-contact"> <img src="images/theme-logo-white.png" width="250" alt="">
                            <ul>
                                <li><i class="icofont icofont-location-pin"></i><span>35 Wooster St, New York, NY</span></li>
                                <li><i class="icofont icofont-phone"></i><span><a href="#">+01 123 34567</a></span></li>
                                <li><i class="icofont icofont-email"></i><span><a href="#">info@yourbusiness.com</a></span></li>
                                <li><i class="icofont icofont-fax"></i><span>+01 987 65432</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="footer-block blog-link">
                            <h4>Latest Blog</h4>
                            <ul>
                                <li><a href="blog-details.html">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a> <span><i class="icofont icofont-clock-time"></i> June 16, 2017</span></li>
                                <li><a href="blog-details.html">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a> <span><i class="icofont icofont-clock-time"></i> June 16, 2017</span> </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="footer-block newsletter">
                            <h4>News Letter</h4>
                            <p>Sign up for our mailing list to get latest updates and offers.</p>
                            <form action="#" method="post">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="text" id="text" placeholder="Enter your email" />
                                    <button class="btn btn-warning btn-lg">Subscribe Now!</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- Bottom Footer Section -->
        <!-- <div class="bottom-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="bottom-footer-left">
                            <p>© 2017 With Html | All Rights Reserved.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="bottom-footer-right">
                            <div class="social-link">
                                <ul>
                                    <li><a href="#" title="Facebook" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#" title="Twitter" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#" title="Google +" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                    <li><a href="#" title="Pinterest" target="_blank"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </footer>

    <!-- Go to top -->
    <i class="fa fa-arrow-up return-to-top" aria-hidden="true"></i>

    <!-- Common Jquery -->
    <script src="{{url::asset('corporate/js/jquery-3.2.0.min.js')}}"></script>
    <script src="{{url::asset('corporate/js/bootstrap.min.js')}}"></script>

    <!-- Nav Jquery -->
    <script src="{{url::asset('corporate/js/menucustom.js')}}"></script>

    <!-- Banner Jquery -->
    <script src="{{url::asset('corporate/js/banner.js')}}"></script>

    <!-- Slider Jquery -->
    <script src="{{url::asset('corporate/js/wow.min.js')}}"></script>
    <script src="{{url::asset('corporate/js/owl.carousel.min.js')}}"></script>

    <!-- Gallery Jquery -->
    <script src="{{url::asset('corporate/js/lightbox.min.js')}}"></script>
    <script src="{{url::asset('corporate/js/mixitup.min.js')}}"></script>

    <!-- Counter -->
    <script src="{{url::asset('corporate/js/jquery.appear.js')}}"></script>
    <script src="{{url::asset('corporate/js/jquery.countTo.js')}}"></script>

    <!-- Custom Jquery -->
    <script src="{{url::asset('corporate/js/custom.js')}}"></script>

    <!-- Preloader Jquery -->
    <script type="text/javascript">
        $(window).on('load', function() {
            $('#preloader').fadeOut(300);
        });
    </script>

</body>

</html>
