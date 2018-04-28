<!-- ========== Left Sidebar Start ========== -->
<div class="left side-menu">

    <div class="slimscroll-menu" id="remove-scroll">

        <!-- LOGO -->
        <div class="topbar-left">
            <a href="{{route('home')}}" class="logo">
                <span>
                    <img src="admin/assets/images/logo.png" alt="" height="22">
                </span>
                <i>
                    <img src="admin/assets/images/logo_sm.png" alt="" height="28">
                </i>
            </a>
        </div>

        <!-- User box -->
        <div class="user-box">
            <div class="user-img">
                <img src="admin/assets/images/users/avatar-1.jpg" alt="user-img" title="Mat Helme" class="rounded-circle img-fluid">
            </div>
            <h5><a href="#">{{ Auth::user()->name }}</a> </h5>
            <p class="text-muted">Admin Head</p>
          </div>


        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul class="metismenu" id="side-menu">

                <!--<li class="menu-title">Navigation</li>-->

                <li>
                    <a href="{{route('hesabim')}}">
                        <i class="fi-air-play"></i><span class="badge badge-danger badge-pill pull-right">7</span> <span> Hesabım </span>
                    </a>
                </li>

                <li>
                  <a href="#">
                    <i class="fi-command"></i> <span> Mesajlar </span>
                  </a>
                </li>

                <li>
                    <a href="javascript: void(0);"><i class="fi-mail"></i><span> Notlar </span> <span class="menu-arrow"></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                      <li><a href="{{route('satin-aldiklarim')}}"><span> Satın Aldıklarım </span> <span class="menu-arrow"></span></a></li>
                      <li><a href="{{route('yuklediklerim')}}"><span> Yüklediklerim </span> <span class="menu-arrow"></span></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);"><i class="fi-layout"></i><span> Yorumlar & Puanlar </span> <span class="menu-arrow"></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="#">Yorum Yap & Paun Ver</a></li>
                        <li><a href="#">Aldığım Yorumlar</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);"><i class="fi-briefcase"></i> <span> Ayarlar & Bilgiler </span> <span class="menu-arrow"></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="{{route('kisisel')}}">Kişisel Bilgiler</a></li>
                        <li><a href="{{route('egitim')}}">Eğitim Bilgileri</a></li>
                        <li><a href="{{route('iletisim')}}">İletişim Bilgileri</a></li>
                        <li><a href="{{route('banka')}}">Banka Bilgileri</a></li>
                        <li><a href="#">Bildirim Ayarları</a></li>
                    </ul>
                </li>


                <!-- <li>
                    <a href="javascript: void(0);"><i class="fi-bar-graph-2"></i><span> Charts </span> <span class="menu-arrow"></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="chart-flot.html">Flot Chart</a></li>
                        <li><a href="chart-morris.html">Morris Chart</a></li>
                        <li><a href="chart-google.html">Google Chart</a></li>
                        <li><a href="chart-chartist.html">Chartist Chart</a></li>
                        <li><a href="chart-chartjs.html">Chartjs Chart</a></li>
                        <li><a href="chart-sparkline.html">Sparkline Chart</a></li>
                        <li><a href="chart-knob.html">Jquery Knob</a></li>
                    </ul>
                </li> -->

                <!-- <li>
                    <a href="javascript: void(0);"><i class="fi-disc"></i><span class="badge badge-info pull-right">10</span> <span> Forms </span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="form-elements.html">Form Elements</a></li>
                        <li><a href="form-advanced.html">Form Advanced</a></li>
                        <li><a href="form-validation.html">Form Validation</a></li>
                        <li><a href="form-pickers.html">Form Pickers</a></li>
                        <li><a href="form-wizard.html">Form Wizard</a></li>
                        <li><a href="form-mask.html">Form Masks</a></li>
                        <li><a href="form-summernote.html">Summernote</a></li>
                        <li><a href="form-wysiwig.html">Wysiwig Editors</a></li>
                        <li><a href="form-x-editable.html">X Editable</a></li>
                        <li><a href="form-uploads.html">Multiple File Upload</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);"><i class="fi-box"></i><span> Icons </span> <span class="menu-arrow"></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="icons-materialdesign.html">Material Design</a></li>
                        <li><a href="icons-dripicons.html">Dripicons</a></li>
                        <li><a href="icons-fontawesome.html">Font awesome</a></li>
                        <li><a href="icons-feather.html">Feather Icons</a></li>
                        <li><a href="icons-simpleline.html">Simple Line Icons</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);"><i class="fi-paper"></i> <span> Tables </span> <span class="menu-arrow"></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="tables-basic.html">Basic Tables</a></li>
                        <li><a href="tables-datatable.html">Data Tables</a></li>
                        <li><a href="tables-responsive.html">Responsive Table</a></li>
                        <li><a href="tables-tablesaw.html">Tablesaw Tables</a></li>
                        <li><a href="tables-foo.html">Foo Tables</a></li>
                    </ul>
                </li>

                <li class="menu-title">More</li>

                <li>
                    <a href="javascript: void(0);"><i class="fi-location-2"></i> <span> Maps </span> <span class="menu-arrow"></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="maps-google.html">Google Maps</a></li>
                        <li><a href="maps-vector.html">Vector Maps</a></li>
                        <li><a href="maps-mapael.html">Mapael Maps</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);"><i class="fi-paper-stack"></i><span> Pages </span> <span class="menu-arrow"></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="page-starter.html">Starter Page</a></li>
                        <li><a href="page-login.html">Login</a></li>
                        <li><a href="page-register.html">Register</a></li>
                        <li><a href="page-logout.html">Logout</a></li>
                        <li><a href="page-recoverpw.html">Recover Password</a></li>
                        <li><a href="page-lock-screen.html">Lock Screen</a></li>
                        <li><a href="page-confirm-mail.html">Confirm Mail</a></li>
                        <li><a href="page-404.html">Error 404</a></li>
                        <li><a href="page-404-alt.html">Error 404-alt</a></li>
                        <li><a href="page-500.html">Error 500</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript:void(0);"><i class="fi-marquee-plus"></i><span class="badge badge-success pull-right">Hot</span> <span> Extra Pages </span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="extras-timeline.html">Timeline</a></li>
                        <li><a href="extras-profile.html">Profile</a></li>
                        <li><a href="extras-invoice.html">Invoice</a></li>
                        <li><a href="extras-faq.html">FAQ</a></li>
                        <li><a href="extras-pricing.html">Pricing</a></li>
                        <li><a href="extras-email-template.html">Email Templates</a></li>
                        <li><a href="extras-ratings.html">Ratings</a></li>
                        <li><a href="extras-search-results.html">Search Results</a></li>
                        <li><a href="extras-gallery.html">Gallery</a></li>
                        <li><a href="extras-maintenance.html">Maintenance</a></li>
                        <li><a href="extras-coming-soon.html">Coming Soon</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);"><i class="fi-share"></i> <span> Multi Level </span> <span class="menu-arrow"></span></a>
                    <ul class="nav-second-level nav" aria-expanded="false">
                        <li><a href="javascript: void(0);">Level 1.1</a></li>
                        <li><a href="javascript: void(0);" aria-expanded="false">Level 1.2 <span class="menu-arrow"></span></a>
                            <ul class="nav-third-level nav" aria-expanded="false">
                                <li><a href="javascript: void(0);">Level 2.1</a></li>
                                <li><a href="javascript: void(0);">Level 2.2</a></li>
                            </ul>
                        </li>
                    </ul>
                </li> -->

            </ul>

        </div>
        <!-- Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->
