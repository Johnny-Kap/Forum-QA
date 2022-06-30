@extends('layouts.admin')

@section('content')

<!--======================================
        START HERO AREA
======================================-->
<section class="hero-area bg-white shadow-sm pt-60px pb-60px">
    <span class="stroke-shape stroke-shape-1"></span>
    <span class="stroke-shape stroke-shape-2"></span>
    <span class="stroke-shape stroke-shape-3"></span>
    <span class="stroke-shape stroke-shape-4"></span>
    <span class="stroke-shape stroke-shape-5"></span>
    <span class="stroke-shape stroke-shape-6"></span>
    <div class="container">
        <div class="hero-content">
            <h2 class="section-title fs-24 pb-4">Les utilisateurs recherchés</h2>
        </div><!-- end hero-content -->
    </div><!-- end container -->
</section>
<!--======================================
        END HERO AREA
======================================-->


<!-- ================================
         START JOB AREA
================================= -->
<section class="job-area pt-50px">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="filters pb-4 d-flex align-items-center">
                    <h3 class="fs-17 fw-medium mr-1">{{$user_count}} resultat(s)</h3>
                </div><!-- end filters -->
            </div><!-- end col-lg-12 -->
            <div class="col-lg-9">
                <div class="jobs-main-bar mb-50px">
                    <div class="jobs-snippet">
                        @foreach($users as $item)
                        <div class="media media-card">
                            <a href="company-details.html" class="media-img d-block">
                                <img src="{{ Storage::url($item->image) }}" alt="company logo">
                            </a>
                            <div class="media-body border-left-0">
                                <h5 class="pb-1 fs-16 fw-medium"><a href="{{ route('userProfile', [ 'id' => $item->id ]) }}">{{$item->name}}</a></h5>
                                <small class="meta d-block lh-20 pb-1">
                                    <span class="pr-1"><i class="la la-map-marker mr-1"></i>{{$item->location}}</span>
                                </small>
                                <p class="lh-20 fs-13 text-black-50 truncate">{{$item->bio}}</p>
                            </div>
                        </div><!-- end media -->
                        @endforeach
                    </div><!-- end jobs-snippet -->
                </div><!-- end jobs-main-bar -->
            </div><!-- end col-lg-9 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end job-area -->
<!-- ================================
         END JOB AREA
================================= -->

@endsection