<header>
        <!-- Header Start -->
       <div class="header-area">
            <div class="main-header ">
                <div class="header-top black-bg d-none d-md-block">
                   <div class="container">
                       {{-- <div class="col-xl-12"> --}}
                            {{-- <div class="row d-flex justify-content-between align-items-center"> --}}
                                {{-- <div class="header-info-left">
                                    <ul>     
                                        <li><img src="assets/img/icon/header_icon1.png" alt="">34ºc, Sunny </li>
                                        <li><img src="assets/img/icon/header_icon1.png" alt="">Tuesday, 18th June, 2019</li>
                                    </ul>
                                </div> --}}
                                {{-- <div class="header-info-right">
                                    <ul class="header-social">    
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                       <li> <a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div> --}}
                            {{-- </div> --}}
                       {{-- </div> --}}
                   </div>
                </div>
                {{-- <div class="header-mid d-none d-md-block">
                   <div class="container">
                        <div class="row d-flex align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-3 col-lg-3 col-md-3">
                                <div class="logo">
                                    <a href="index.html"><img src="{{asset('front/assets/img/logo/logo.png')}}" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-9 col-lg-9 col-md-9">
                                <div class="header-banner f-right ">
                                    <img src="{{asset('front/assets/img/hero/header_card.jpg')}}" alt="">
                                </div>
                            </div>
                        </div>
                   </div>
                </div> --}}
               <div class="header-bottom header-sticky">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-10 col-lg-10 col-md-12 header-flex">
                                <!-- sticky -->
                                    <div class="sticky-logo">
                                        <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                                    </div>
                                <!-- Main-menu -->
                                <div class="main-menu d-none d-md-block">
                                        <ul id="navigation">    
                                            <li><a href="{{url('/')}}">Home</a></li>
                                            <li><a href="{{url('#kategori')}}">Category</a></li>
                                            <li><a href="#">About</a></li>
                                            {{-- <li><a href="latest_news.html">Comment</a></li> --}}
                                            <li style="margin-bottom: -1%; margin-left: 45%;" >
                                                <div class="col-xl-1 col-lg-1 col-md-1">
                                                    <div class="header-right-btn f-right d-none d-lg-block">
                                                        <i class="fas fa-search special-tag"></i>
                                                        <div class="search-box">
                                                            <form action="#">
                                                                <input type="text" placeholder="Search">               
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="header-user">
                                            @guest
                                                <a href="{{url('login')}}">Login</a> 
                                                @else
                                            <a href="{{route('logout')}}"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                                                        class="fill-current">
                                                        <path fill="none" d="M0 0h24v24H0z"></path>
                                                        <path
                                                            d="M20 22H4v-2a5 5 0 0 1 5-5h6a5 5 0 0 1 5 5v2zm-8-9a6 6 0 1 1 0-12 6 6 0 0 1 0 12z">
                                                        </path>
                                                    </svg>
                                                </span>
                                                Logout
                                            </a>
                                            <form action="{{route('logout')}}" method="post" id="logout-form">
                                                @csrf
                                            </form>
                                            @endguest
                                            </li>
                                        </ul>
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