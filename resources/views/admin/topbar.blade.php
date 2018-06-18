<div class="topbar">

    <nav class="navbar-custom">

        <ul class="list-unstyled topbar-right-menu float-right mb-0">



            <li class="dropdown notification-list">
                <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button"
                   aria-haspopup="false" aria-expanded="false">

                    <span class="ml-1">Yunus Emre ERKEN<i class="mdi mdi-chevron-down"></i> </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown ">
                    <!-- item-->
                    <div class="dropdown-item noti-title">
                        <h6 class="text-overflow m-0">Welcome !</h6>
                    </div>

                    <!-- item-->
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();" class="dropdown-item notify-item">
                        <i class="fi-power"></i> <span>Çıkış</span>
                    </a>

                    
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>

                </div>
            </li>

        </ul>

        <ul class="list-inline menu-left mb-0">
            <li class="float-left">
                <button class="button-menu-mobile open-left disable-btn">
                    <i class="dripicons-menu"></i>
                </button>
            </li>
            <!-- <li>
                <div class="page-title-box">
                    <h4 class="page-title">Dark Menu </h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Highdmin</a></li>
                        <li class="breadcrumb-item"><a href="#">Layouts</a></li>
                        <li class="breadcrumb-item active">Dark Menu</li>
                    </ol>
                </div>
            </li> -->

        </ul>

    </nav>

</div>
