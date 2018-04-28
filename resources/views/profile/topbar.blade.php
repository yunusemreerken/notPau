<!-- Top Bar Start -->
<div class="topbar">

    <nav class="navbar-custom">

        <ul class="list-unstyled topbar-right-menu float-right mb-0">




            <li class="notification-list">
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

                  <a href="{{ route('login') }}" class="btn btn-primary" aria-hidden="true"><i class="fa fa-sign-in">Not Yükle</i></a>
                  <a href="{{ route('register') }}" class="btn btn-warning" aria-hidden="true"><i class="fa fa-user-plus">Davet et</i></a>
                  <a href="{{ route('sepetim') }}" class="btn btn-primary" aria-hidden="true"><i class="fa fa-shopping-basket"></i></a>
                  <a href="{{ route('sepetim') }}" class="btn btn-primary" aria-hidden="true"><i class="fa fa-envelope" ></i></a>
                  <div class="dropdown">
                    <button class="dropbtn">{{ Auth::user()->name }}<span class="caret"></span></button>
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
            </li>

        </ul>

        <!-- <ul class="list-inline menu-left mb-0">
            <li class="float-left">
                <button class="button-menu-mobile open-left disable-btn">
                    <i class="dripicons-menu"></i>
                </button>
            </li>
            <li>
                <div class="page-title-box">
                    <h4 class="page-title">Profile </h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Highdmin</a></li>
                        <li class="breadcrumb-item"><a href="#">Extras</a></li>
                        <li class="breadcrumb-item active">Profile</li>
                    </ol>
                </div>
            </li>

        </ul> -->

    </nav>

</div>
<!-- Top Bar End -->
