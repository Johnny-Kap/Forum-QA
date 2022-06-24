    <!--======================================
        START HEADER AREA
    ======================================-->
    <header class="header-area bg-white border-bottom border-bottom-gray">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-2">
                    <div class="logo-box">
                        <a href="{{ url('/') }}" class="logo"><img src="/admins/images/new-logo-black.png" alt="logo"></a>
                        <div class="user-action">
                            <div class="search-menu-toggle icon-element icon-element-xs shadow-sm mr-1" data-toggle="tooltip" data-placement="top" title="Search">
                                <i class="la la-search"></i>
                            </div>
                            <div class="off-canvas-menu-toggle icon-element icon-element-xs shadow-sm" data-toggle="tooltip" data-placement="top" title="Main menu">
                                <i class="la la-bars"></i>
                            </div>
                        </div>
                    </div>
                </div><!-- end col-lg-2 -->
                <div class="col-lg-10">
                    <div class="menu-wrapper border-left border-left-gray pl-4 justify-content-end">
                        <nav class="menu-bar mr-auto">
                            <ul>
                                <li>
                                    <a href="{{ url('/') }}">Accueil </a>
                                </li>

                                <li>
                                    <a href="#">Questions <i class="la la-angle-down fs-11"></i></a>
                                    <ul class="dropdown-menu-item">
                                        <li><a href="{{ route('questions') }}">Voir les questions</a></li>
                                        <li><a href="{{route('askQuestion')}}">Poser une question</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{ route('about') }}">A propos</a>
                                </li>
                                <li>
                                    <a href="{{ route('contact') }}">Contact</a>
                                </li>
                            </ul><!-- end ul -->
                        </nav><!-- end main-menu -->
                        <form method="post" class="mr-4">
                            <div class="form-group mb-0">
                                <input class="form-control form--control form--control-bg-gray" type="text" name="search" placeholder="Entrer votre recherche...">
                                <button class="form-btn" type="button"><i class="la la-search"></i></button>
                            </div>
                        </form>

                        <!-- Right Side Of Navbar -->

                        <!-- Authentication Links -->
                        @guest
                        <div class="nav-right-button">
                            @if (Route::has('login'))
                            <a href="{{ route('login') }}" class="btn theme-btn theme-btn-outline mr-2"><i class="la la-sign-in mr-1"></i> Se connecter</a>
                            @endif

                            @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn theme-btn"><i class="la la-user mr-1"></i> S'enroler</a>
                            @endif
                        </div>
                        @else
                        <div class="media-img media-img-xs flex-shrink-0 rounded-full mr-2">
                            <img src="{{ Storage::url(Auth::user()->image) }}" alt="" class="rounded-full" style="width: 30px; height: 30px;">
                        </div>
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" style="color:black;" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('MyProfile') }}">

                                        Mon profil
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">

                                        {{ __('Déconnexion') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        </ul>
                        @endguest
                        <!-- end nav-right-button -->
                    </div><!-- end menu-wrapper -->
                </div><!-- end col-lg-10 -->
            </div><!-- end row -->
        </div><!-- end container -->
        <div class="off-canvas-menu custom-scrollbar-styled">
            <div class="off-canvas-menu-close icon-element icon-element-sm shadow-sm" data-toggle="tooltip" data-placement="left" title="Close menu">
                <i class="la la-times"></i>
            </div><!-- end off-canvas-menu-close -->
            <ul class="generic-list-item off-canvas-menu-list pt-90px">
                <li>
                    <a href="#">Home</a>
                    <ul class="sub-menu">
                        <li><a href="index.html">Home - landing</a></li>
                        <li><a href="home-2.html">Home - main</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Pages</a>
                    <ul class="sub-menu">
                        <li><a href="user-profile.html">user profile</a></li>
                        <li><a href="notifications.html">Notifications</a></li>
                        <li><a href="referrals.html">Referrals</a></li>
                        <li><a href="setting.html">settings</a></li>
                        <li><a href="ask-question.html">ask question</a></li>
                        <li><a href="question-details.html">question details</a></li>
                        <li><a href="about.html">about</a></li>
                        <li><a href="revisions.html">revisions</a></li>
                        <li><a href="category.html">category</a></li>
                        <li><a href="companies.html">companies</a></li>
                        <li><a href="company-details.html">company details</a></li>
                        <li><a href="careers.html">careers</a></li>
                        <li><a href="career-details.html">career details</a></li>
                        <li><a href="contact.html">contact</a></li>
                        <li><a href="faq.html">FAQs</a></li>
                        <li><a href="pricing-table.html">pricing tables</a></li>
                        <li><a href="error.html">page 404</a></li>
                        <li><a href="terms-and-conditions.html">Terms & conditions</a></li>
                        <li><a href="privacy-policy.html">privacy policy</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">blog</a>
                    <ul class="sub-menu">
                        <li><a href="blog-grid-no-sidebar.html">grid no sidebar</a></li>
                        <li><a href="blog-left-sidebar.html">blog left sidebar</a></li>
                        <li><a href="blog-right-sidebar.html">blog right sidebar</a></li>
                        <li><a href="blog-single.html">blog detail</a></li>
                    </ul>
                </li>
            </ul>
            <div class="off-canvas-btn-box px-4 pt-5 text-center">
                <a href="#" class="btn theme-btn theme-btn-sm theme-btn-outline" data-toggle="modal" data-target="#loginModal"><i class="la la-sign-in mr-1"></i> Login</a>
                <span class="fs-15 fw-medium d-inline-block mx-2">Or</span>
                <a href="#" class="btn theme-btn theme-btn-sm" data-toggle="modal" data-target="#signUpModal"><i class="la la-plus mr-1"></i> Sign up</a>
            </div>
        </div><!-- end off-canvas-menu -->
        <div class="mobile-search-form">
            <div class="d-flex align-items-center">
                <form method="post" class="flex-grow-1 mr-3">
                    <div class="form-group mb-0">
                        <input class="form-control form--control pl-40px" type="text" name="search" placeholder="Type your search words...">
                        <span class="la la-search input-icon"></span>
                    </div>
                </form>
                <div class="search-bar-close icon-element icon-element-sm shadow-sm">
                    <i class="la la-times"></i>
                </div><!-- end off-canvas-menu-close -->
            </div>
        </div><!-- end mobile-search-form -->
        <div class="body-overlay"></div>
    </header><!-- end header-area -->
    <!--======================================
        END HEADER AREA
======================================-->