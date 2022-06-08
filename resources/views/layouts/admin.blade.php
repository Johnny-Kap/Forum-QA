@include('includes.head')

@include('includes.styles')

@yield('styles')

</head>

<body>

    <!-- start cssload-loader -->
    <div id="preloader">
        <div class="loader">
            <svg class="spinner" viewBox="0 0 50 50">
                <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
            </svg>
        </div>
    </div>
    <!-- end cssload-loader -->

    @include('includes.navigation')

    @include('includes.flash-message')

    @yield('content')

    @include('includes.footer')

    @include('includes.scripts')

    @yield('scripts')

</body>

<!-- Mirrored from techydevs.com/demos/themes/html/disilab-demo/disilab/home-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Nov 2021 10:51:06 GMT -->

</html>