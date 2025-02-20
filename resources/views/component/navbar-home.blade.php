<header>
        <!-- Header Start -->
       <div class="header-area">
            <div class="main-header ">
                <div class="header-top black-bg d-none d-md-block">
                   <div class="container">
                       <div class="col-xl-12">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="header-info-left">
                                    <ul>
                                        <li><a href="https://www.instagram.com/irhamkaraman/" target="_blank"><i class="fab fa-instagram"></i></a> irhamkaraman </li>
                                        <li><a href="https://api.whatsapp.com/send?phone=6282338520959" target="_blank"><i class="fab fa-whatsapp"></i></a> +62 823 3852 0959</li>
                                    </ul>
                                </div>
                                <div class="header-info-right">
                                    <ul class="header-social">
                                        <li><a href="https://api.whatsapp.com/send?phone=6282338502959" target="_blank" ><i style="color: #fff;" class="fab fa-whatsapp"></i></a></li>
                                        <li><a href="https://www.instagram.com/irhamkaraman/" target="_blank" ><i style="color: #fff;" class="fab fa-instagram"></i></a></li>
                                        <li><a href="https://t.me/irhamkaraman" target="_blank" ><i style="color: #fff;" class="fab fa-telegram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                       </div>
                   </div>
                </div>
                <div class="header-mid d-none d-md-block">
                   <div class="container">
                        <div class="row d-flex align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-3 col-lg-3 col-md-3">
                                <div class="logo">
                                    <a href="/"><img src="{{ asset('home/img/logo/logo-header.svg') }}" style="width: 150px;"  alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-9 col-lg-9 col-md-9">
                                <div class="header-banner f-right ">
                                    <img src="{{ asset('home/img/hero/header_card.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                   </div>
                </div>
               <div class="header-bottom header-sticky">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-10 col-lg-10 col-md-12 header-flex">
                                <!-- sticky -->
                                    <div class="sticky-logo">
                                        <a href="/"><img src="{{ asset('home/img/logo/logo-header.svg') }}" style="width: 200px;" alt=""></a>
                                    </div>
                                <!-- Main-menu -->
                                <div class="main-menu d-none d-md-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="/">Beranda</a></li>
                                            <li><a href="{{ route('about') }}">Tentang Kami</a></li>
                                            <li><a href="{{ route('categories') }}">Kategori</a></li>

                                            @auth
                                                <li>
                                                    <a href="{{ route('dashboard') }}">
                                                        <i class="fas fa-sign-in-alt"></i> Dashboard
                                                    </a>
                                                </li>
                                            @else
                                                <li>
                                                    <a href="{{ route('login') }}">
                                                        <i class="fas fa-sign-in-alt"></i> Login
                                                    </a>
                                                </li>
                                            @endauth
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-4">
                                <div class="header-right-btn f-right d-none d-lg-block">
                                    <i class="fas fa-search special-tag"></i>
                                    <div class="search-box">
                                        <form action="#">
                                            <input type="text" placeholder="Search">

                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-md-none"></div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
       </div>
        <!-- Header End -->
    </header>
