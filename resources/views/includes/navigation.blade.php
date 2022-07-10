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
                                    <a href="#">Forum <i class="la la-angle-down fs-11"></i></a>
                                    <ul class="dropdown-menu-item">
                                        <li><a href="{{ route('questions') }}">Voir les questions</a></li>
                                        <li><a href="{{route('askQuestion')}}">Poser une question</a></li>
                                        <li><a href="{{route('chat')}}">Chat du forum</a></li>
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
                        <form method="get" action="{{route('searchQuestion')}}" class="mr-4">
                            <div class="form-group mb-0">
                                <input class="form-control form--control form--control-bg-gray" type="text" name="search" placeholder="Rechercher une question ici...">
                                <button class="form-btn" type="submit"><i class="la la-search"></i></button>
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
                        <div class="nav-right-button">
                            <ul class="user-action-wrap d-flex align-items-center">
                                <li class="dropdown">
                                    <span class="ball red ball-lg noti-dot"></span>
                                    <a class="nav-link dropdown-toggle dropdown--toggle" href="#" id="notificationDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="la la-bell"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown--menu dropdown-menu-right mt-3 keep-open" aria-labelledby="notificationDropdown">
                                        <h6 class="dropdown-header"><i class="la la-bell pr-1 fs-16"></i>Notifications</h6>
                                        <div class="dropdown-divider border-top-gray mb-0"></div>
                                        <div class="dropdown-item-list">
                                            <a class="dropdown-item" href="notifications.html">
                                                <div class="media media-card media--card shadow-none mb-0 rounded-0 align-items-center bg-transparent">
                                                    <div class="media-img media-img-sm flex-shrink-0">
                                                        <img src="images/img3.jpg" alt="avatar">
                                                    </div>
                                                    <div class="media-body p-0 border-left-0">
                                                        <h5 class="fs-14 fw-regular">John Doe following your post</h5>
                                                        <small class="meta d-block lh-24">
                                                            <span>45 secs ago</span>
                                                        </small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item" href="notifications.html">
                                                <div class="media media-card media--card shadow-none mb-0 rounded-0 align-items-center bg-transparent">
                                                    <div class="media-img media-img-sm flex-shrink-0">
                                                        <img src="images/img4.jpg" alt="avatar">
                                                    </div>
                                                    <div class="media-body p-0 border-left-0">
                                                        <h5 class="fs-14 fw-regular">Arnold Smith answered on your post</h5>
                                                        <small class="meta d-block lh-24">
                                                            <span>5 mins ago</span>
                                                        </small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item" href="notifications.html">
                                                <div class="media media-card media--card shadow-none mb-0 rounded-0 align-items-center bg-transparent">
                                                    <div class="media-img media-img-sm flex-shrink-0">
                                                        <img src="images/img4.jpg" alt="avatar">
                                                    </div>
                                                    <div class="media-body p-0 border-left-0">
                                                        <h5 class="fs-14 fw-regular">Saeed bookmarked your post</h5>
                                                        <small class="meta d-block lh-24">
                                                            <span>1 hour ago</span>
                                                        </small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <a class="dropdown-item pb-1 border-bottom-0 text-center btn-text fw-regular" href="notifications.html">View All Notifications <i class="la la-arrow-right icon ml-1"></i></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
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
                                    <a class="dropdown-item" href="{{ route('EditProfile') }}">
                                        Paramètres
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
                    <a href="{{ url('/') }}">Accueil </a>
                </li>
                <li>
                    <a href="#">Questions</a>
                    <ul class="sub-menu">
                        <li><a href="{{ route('questions') }}">Voir les questions</a></li>
                        <li><a href="{{route('askQuestion')}}">Poser une question</a></li>
                        <li><a href="{{route('chat')}}">Chat du forum</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('about') }}">A propos</a>
                </li>
                <li>
                    <a href="{{ route('contact') }}">Contact</a>
                </li>
            </ul>
            <div class="off-canvas-btn-box px-4 pt-5 text-center">
                <!-- Authentication Links -->
                @guest
                <div class="">
                    @if (Route::has('login'))
                    <a href="{{ route('login') }}" class="btn theme-btn theme-btn-outline mr-2"><i class="la la-sign-in mr-1"></i> Se connecter</a><br><br>
                    @endif

                    @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="btn theme-btn"><i class="la la-user mr-1"></i> S'enroler</a>
                    @endif
                </div>
                @else
                <div class=" flex-shrink-0 rounded-full mr-2">
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
                            <a class="dropdown-item" href="{{ route('EditProfile') }}">
                                Paramètres
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
            </div>
        </div><!-- end off-canvas-menu -->
        <div class="mobile-search-form">
            <div class="d-flex align-items-center">
                <form method="get" action="{{route('searchQuestion')}}" class="flex-grow-1 mr-3">
                    <div class="form-group mb-0">
                        <input class="form-control form--control pl-40px" type="text" name="search" placeholder="Rechercher une question ici...">
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