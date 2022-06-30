@extends('layouts.admin')

@section('content')

<!--======================================
        START HERO AREA
======================================-->
<section class="hero-area pt-80px pb-80px hero-bg-1">
    <div class="overlay"></div>
    <span class="stroke-shape stroke-shape-1"></span>
    <span class="stroke-shape stroke-shape-2"></span>
    <span class="stroke-shape stroke-shape-3"></span>
    <span class="stroke-shape stroke-shape-4"></span>
    <span class="stroke-shape stroke-shape-5"></span>
    <span class="stroke-shape stroke-shape-6"></span>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-9">
                <div class="hero-content">
                    <h2 class="section-title pb-3 text-white">Partagez et développez vos connaissances avec nous !</h2>
                    <p class="section-desc text-white">Une plate-forme axée sur les technologies qui permet aux gens de répondre et de poser des questions
                        <br> afin de croitre ses connaissances
                    </p>
                    <div class="hero-btn-box py-4">
                        <a href="{{route('askQuestion')}}" class="btn theme-btn theme-btn-white">Poser une question <i class="la la-arrow-right icon ml-1"></i></a>
                    </div>
                </div><!-- end hero-content -->
            </div><!-- end col-lg-9 -->
            <div class="col-lg-3">
                <div class="hero-list hero-list-bg">
                    <div class="d-flex align-items-center pb-30px">
                        <img src="/admins/images/anonymousHeroQuestions.svg" alt="question icon" class="mr-3">
                        <p class="fs-15 text-white lh-20">N'importe qui peut poser une question</p>
                    </div>
                    <div class="d-flex align-items-center pb-30px">
                        <img src="/admins/images/anonymousHeroAnswers.svg" alt="question answer icon" class="mr-3">
                        <p class="fs-15 text-white lh-20">N'importe qui peut répondre</p>
                    </div>
                    <div class="d-flex align-items-center">
                        <img src="/admins/images/anonymousHeroUpvote.svg" alt="vote icon" class="mr-3">
                        <p class="fs-15 text-white lh-20">Les meilleures réponses sont votées</p>
                    </div>
                </div>
            </div>
        </div><!-- end row -->
    </div><!-- end container -->
</section>
<!--======================================
        END HERO AREA
======================================-->


<!-- ================================
         START QUESTION AREA
================================= -->
<section class="question-area pt-80px pb-40px">
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <div class="sidebar pb-45px position-sticky top-0 mt-2">
                    <ul class="generic-list-item generic-list-item-highlight fs-15">
                        <li class="lh-26 active"><a href="{{route('questions')}}"><i class="la la-home mr-1 text-black"></i> Home</a></li>
                        @foreach($centres as $item)
                        <li class="lh-26"><a href="{{route('questionsTemplate', ['id' => $item->id] )}}"><i class="la la-laptop mr-1 text-black"></i> {{$item->label}}</a></li>
                        @endforeach
                    </ul>
                </div><!-- end sidebar -->
            </div><!-- end col-lg-2 -->
            <div class="col-lg-7">
                <div class="question-tabs mb-50px">
                    <ul class="nav nav-tabs generic-tabs justify-content-center" id="myTab" role="tablist">
                        <li class="nav-item">
                            <div class="anim-bar"></div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" id="questions-tab" data-toggle="tab" href="#questions" role="tab" aria-controls="questions" aria-selected="true">Questions</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="tags-tab" data-toggle="tab" href="#tags" role="tab" aria-controls="tags" aria-selected="false">Tags</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="users-tab" data-toggle="tab" href="#users" role="tab" aria-controls="users" aria-selected="false">Utilisateurs</a>
                        </li>
                    </ul>
                    <div class="tab-content pt-40px" id="myTabContent">
                        <div class="tab-pane fade show active" id="questions" role="tabpanel" aria-labelledby="questions-tab">
                            <div class="filters d-flex align-items-center justify-content-between pb-4">
                                <h3 class="fs-17 fw-medium">Toutes les Questions</h3>
                                <div class="filter-option-box">
                                    <a class="btn theme-btn theme-btn-outline theme-btn-outline-gray" data-toggle="collapse" href="#collapseSearchAdvanced" role="button" aria-expanded="false" aria-controls="collapseSearchAdvanced">
                                        <i class="la la-gear mr-1"></i> Filtre
                                    </a>
                                </div>
                            </div><!-- end filters -->
                            <div class="collapse pt-3" id="collapseSearchAdvanced">
                                <div class="card card-item mb-0">
                                    <form method="post" class="search-advanced card-body pb-1">
                                        <div class="search-advanced-item mb-10px row align-items-center">
                                            <div class="col-lg-6">
                                                <h4 class="fs-16">Filters</h4>
                                            </div><!-- end col-lg-6 -->
                                            <div class="col-lg-6">
                                                <div class="search-filter-btn-box text-right">
                                                    <button type="submit" class="btn theme-btn theme-btn-sm">Search <i class="la la-search ml-1"></i></button>
                                                </div>
                                            </div><!-- end col-lg-6 -->
                                        </div><!-- end search-advanced-item -->
                                        <div class="search-advanced-item mb-10px">
                                            <h4 class="fs-14 pb-2 text-gray text-uppercase">Location</h4>
                                            <div class="divider"><span></span></div>
                                            <div class="row pt-3">
                                                <div class="input-box col-lg-6">
                                                    <label class="fs-13 text-black lh-20">Distance</label>
                                                    <div class="form-group">
                                                        <select class="select-container">
                                                            <option value="5">within 5 km</option>
                                                            <option value="10">within 10 km</option>
                                                            <option selected="selected" value="20">within 20 km</option>
                                                            <option value="50">within 50 km</option>
                                                            <option value="100">within 100 km</option>
                                                        </select>
                                                    </div>
                                                </div><!-- end col-lg-6 -->
                                                <div class="input-box col-lg-6">
                                                    <label class="fs-13 text-black lh-20">City</label>
                                                    <div class="form-group">
                                                        <select class="select-container">
                                                            <option selected="selected" value="1">New york</option>
                                                            <option value="2">Austin</option>
                                                            <option value="3">Chicago</option>
                                                            <option value="4">Boston</option>
                                                            <option value="5">Denver</option>
                                                            <option value="6">Berlin</option>
                                                            <option value="7">Munich</option>
                                                            <option value="8">Hamburg</option>
                                                            <option value="9">Cologne</option>
                                                            <option value="10">Rome</option>
                                                            <option value="11">Turin</option>
                                                            <option value="12">Milan</option>
                                                            <option value="13">Florence</option>
                                                            <option value="14">Bologna</option>
                                                            <option value="15">Marylebone</option>
                                                            <option value="16">Southwark</option>
                                                            <option value="16">Westminster</option>
                                                        </select>
                                                    </div>
                                                </div><!-- end col-lg-6 -->
                                            </div><!-- end row -->
                                        </div><!-- end search-advanced-item -->
                                        <div class="search-advanced-item mb-10px">
                                            <h4 class="fs-14 pb-2 text-gray text-uppercase">Tech</h4>
                                            <div class="divider"><span></span></div>
                                            <div class="row pt-3">
                                                <div class="input-box col-lg-6">
                                                    <label class="fs-13 text-black lh-20">Tech You Like</label>
                                                    <div class="form-group">
                                                        <input class="form-control form--control form-control-sm" type="text" name="text" placeholder="e.g. javascript">
                                                    </div>
                                                </div><!-- end col-lg-6 -->
                                                <div class="input-box col-lg-6">
                                                    <label class="fs-13 text-black lh-20">Tech You Dislike</label>
                                                    <div class="form-group">
                                                        <input class="form-control form--control form-control-sm" type="text" name="text" placeholder="e.g. java">
                                                    </div>
                                                </div><!-- end col-lg-6 -->
                                            </div><!-- end row -->
                                        </div><!-- end search-advanced-item -->
                                        <div class="search-advanced-item mb-10px">
                                            <h4 class="fs-14 pb-2 text-gray text-uppercase">Compensation</h4>
                                            <div class="divider"><span></span></div>
                                            <div class="row pt-3">
                                                <div class="input-box col-lg-6">
                                                    <label class="fs-13 text-black lh-20">Minimum Annual Salary</label>
                                                    <div class="form-group">
                                                        <input class="form-control form--control form-control-sm" type="text" name="text" placeholder="e.g. 35">
                                                    </div>
                                                </div><!-- end col-lg-6 -->
                                                <div class="input-box col-lg-6">
                                                    <label class="fs-13 text-black lh-20">Currency</label>
                                                    <div class="form-group">
                                                        <select class="select-container">
                                                            <option selected="selected" value="BDT">BDT</option>
                                                            <option value="USD">USD ($)</option>
                                                            <option value="EUR">EUR (€)</option>
                                                            <option value="GBP">GBP (£)</option>
                                                            <option value="CAD">CAD (C$)</option>
                                                            <option value="AUD">AUD (A$)</option>
                                                            <option value="INR">INR (₹)</option>
                                                            <option value="SEK">SEK (kr)</option>
                                                            <option value="PLN">PLN (zł)</option>
                                                            <option value="CHF">CHF</option>
                                                            <option value="DKK">DKK</option>
                                                            <option value="NZD">NZD</option>
                                                        </select>
                                                    </div>
                                                </div><!-- end col-lg-6 -->
                                                <div class="form-group col-lg-12">
                                                    <div class="custom-control custom-checkbox fs-13">
                                                        <input type="checkbox" class="custom-control-input" id="offersEquity">
                                                        <label class="custom-control-label custom--control-label" for="offersEquity">Offers Equity</label>
                                                    </div>
                                                </div><!-- end col-lg-12 -->
                                            </div><!-- end row -->
                                        </div><!-- end search-advanced-item -->
                                        <div class="search-advanced-item mb-10px">
                                            <h4 class="fs-14 pb-2 text-gray text-uppercase">Perks</h4>
                                            <div class="divider"><span></span></div>
                                            <div class="row pt-3">
                                                <div class="input-box col-lg-6">
                                                    <label class="fs-13 text-black lh-20">Location options</label>
                                                    <div class="form-group">
                                                        <div class="custom-control custom-checkbox fs-13">
                                                            <input type="checkbox" class="custom-control-input" id="allowsRemote">
                                                            <label class="custom-control-label custom--control-label" for="allowsRemote">Allows remote</label>
                                                        </div>
                                                        <div class="custom-control custom-checkbox fs-13">
                                                            <input type="checkbox" class="custom-control-input" id="offersRelocation">
                                                            <label class="custom-control-label custom--control-label" for="offersRelocation">Offers relocation</label>
                                                        </div>
                                                        <div class="custom-control custom-checkbox fs-13">
                                                            <input type="checkbox" class="custom-control-input" id="offersVisaSponsorship">
                                                            <label class="custom-control-label custom--control-label" for="offersVisaSponsorship">Offers visa sponsorship</label>
                                                        </div>
                                                    </div>
                                                </div><!-- end col-lg-6 -->
                                                <div class="input-box col-lg-6">
                                                    <label class="fs-13 text-black lh-20">Perks</label>
                                                    <div class="form-group">
                                                        <div class="custom-control custom-checkbox fs-13">
                                                            <input type="checkbox" class="custom-control-input" id="educationAndTuitionBenefits">
                                                            <label class="custom-control-label custom--control-label" for="educationAndTuitionBenefits">Education and tuition benefits</label>
                                                        </div>
                                                        <div class="custom-control custom-checkbox fs-13">
                                                            <input type="checkbox" class="custom-control-input" id="vacationDays10Plus">
                                                            <label class="custom-control-label custom--control-label" for="vacationDays10Plus">10+ vacation days</label>
                                                        </div>
                                                        <div class="custom-control custom-checkbox fs-13">
                                                            <input type="checkbox" class="custom-control-input" id="gymAndFitnessPerks">
                                                            <label class="custom-control-label custom--control-label" for="gymAndFitnessPerks">Gym and fitness perks</label>
                                                        </div>
                                                    </div>
                                                </div><!-- end col-lg-6 -->
                                            </div><!-- end row -->
                                        </div><!-- end search-advanced-item -->
                                        <div class="search-advanced-item mb-10px">
                                            <h4 class="fs-14 pb-2 text-gray text-uppercase">Background</h4>
                                            <div class="divider"><span></span></div>
                                            <div class="row pt-3">
                                                <div class="input-box col-lg-6">
                                                    <label class="fs-13 text-black lh-20">Experience Level Min</label>
                                                    <div class="form-group">
                                                        <select class="select-container">
                                                            <option selected="selected" value="">Select min. experience</option>
                                                            <option value="Student">Student</option>
                                                            <option value="Junior">Junior</option>
                                                            <option value="MidLevel">Mid-Level</option>
                                                            <option value="Senior">Senior</option>
                                                            <option value="Lead">Lead</option>
                                                            <option value="Manager">Manager</option>
                                                        </select>
                                                    </div>
                                                </div><!-- end col-lg-6 -->
                                                <div class="input-box col-lg-6">
                                                    <label class="fs-13 text-black lh-20">Experience Level Max</label>
                                                    <div class="form-group">
                                                        <select class="select-container">
                                                            <option selected="selected" value="">Select max. experience</option>
                                                            <option value="Student">Student</option>
                                                            <option value="Junior">Junior</option>
                                                            <option value="MidLevel">Mid-Level</option>
                                                            <option value="Senior">Senior</option>
                                                            <option value="Lead">Lead</option>
                                                            <option value="Manager">Manager</option>
                                                        </select>
                                                    </div>
                                                </div><!-- end col-lg-6 -->
                                                <div class="input-box col-lg-6">
                                                    <label class="fs-13 text-black lh-20">Role</label>
                                                    <div class="form-group">
                                                        <div class="custom-control custom-checkbox fs-13">
                                                            <input type="checkbox" class="custom-control-input" id="backendDeveloper">
                                                            <label class="custom-control-label custom--control-label" for="backendDeveloper">Backend Developer</label>
                                                        </div>
                                                        <div class="custom-control custom-checkbox fs-13">
                                                            <input type="checkbox" class="custom-control-input" id="dataScientist">
                                                            <label class="custom-control-label custom--control-label" for="dataScientist">Data Scientist</label>
                                                        </div>
                                                        <div class="custom-control custom-checkbox fs-13">
                                                            <input type="checkbox" class="custom-control-input" id="databaseAdministrator">
                                                            <label class="custom-control-label custom--control-label" for="databaseAdministrator">Database Administrator</label>
                                                        </div>
                                                        <div class="collapse" id="collapseMore">
                                                            <div class="custom-control custom-checkbox fs-13">
                                                                <input type="checkbox" class="custom-control-input" id="Designer">
                                                                <label class="custom-control-label custom--control-label" for="Designer">Designer</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox fs-13">
                                                                <input type="checkbox" class="custom-control-input" id="DesktopDeveloper">
                                                                <label class="custom-control-label custom--control-label" for="DesktopDeveloper">Desktop Developer</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox fs-13">
                                                                <input type="checkbox" class="custom-control-input" id="DevOps">
                                                                <label class="custom-control-label custom--control-label" for="DevOps">DevOps</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox fs-13">
                                                                <input type="checkbox" class="custom-control-input" id="EmbeddedDeveloper">
                                                                <label class="custom-control-label custom--control-label" for="EmbeddedDeveloper">Embedded Developer</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox fs-13">
                                                                <input type="checkbox" class="custom-control-input" id="FrontendDeveloper">
                                                                <label class="custom-control-label custom--control-label" for="FrontendDeveloper">Frontend Developer</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox fs-13">
                                                                <input type="checkbox" class="custom-control-input" id="FullStackDeveloper">
                                                                <label class="custom-control-label custom--control-label" for="FullStackDeveloper">Full Stack Developer</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox fs-13">
                                                                <input type="checkbox" class="custom-control-input" id="GraphicsGameDeveloper">
                                                                <label class="custom-control-label custom--control-label" for="GraphicsGameDeveloper">Graphics/Game Developer</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox fs-13">
                                                                <input type="checkbox" class="custom-control-input" id="MobileDeveloper">
                                                                <label class="custom-control-label custom--control-label" for="MobileDeveloper">Mobile Developer</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox fs-13">
                                                                <input type="checkbox" class="custom-control-input" id="ProductManager">
                                                                <label class="custom-control-label custom--control-label" for="ProductManager">Product Manager</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox fs-13">
                                                                <input type="checkbox" class="custom-control-input" id="QATestDeveloper">
                                                                <label class="custom-control-label custom--control-label" for="QATestDeveloper">QA/Test Developer</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox fs-13">
                                                                <input type="checkbox" class="custom-control-input" id="SystemAdministrator">
                                                                <label class="custom-control-label custom--control-label" for="SystemAdministrator"> System Administrator</label>
                                                            </div>
                                                        </div><!-- end collapse -->
                                                        <a class="collapse-btn fs-13" data-toggle="collapse" href="#collapseMore" role="button" aria-expanded="false" aria-controls="collapseMore">
                                                            <span class="collapse-btn-hide">Show more<i class="la la-angle-down ml-1 fs-11"></i></span>
                                                            <span class="collapse-btn-show">Show less<i class="la la-angle-up ml-1 fs-11"></i></span>
                                                        </a>
                                                    </div>
                                                </div><!-- end col-lg-6 -->
                                                <div class="input-box col-lg-6">
                                                    <label class="fs-13 text-black lh-20">Job Type</label>
                                                    <div class="form-group">
                                                        <div class="custom-control custom-checkbox fs-13">
                                                            <input type="checkbox" class="custom-control-input" id="FullTime">
                                                            <label class="custom-control-label custom--control-label" for="FullTime">Full-time</label>
                                                        </div>
                                                        <div class="custom-control custom-checkbox fs-13">
                                                            <input type="checkbox" class="custom-control-input" id="PartTime">
                                                            <label class="custom-control-label custom--control-label" for="PartTime">Part-time</label>
                                                        </div>
                                                        <div class="custom-control custom-checkbox fs-13">
                                                            <input type="checkbox" class="custom-control-input" id="Contract">
                                                            <label class="custom-control-label custom--control-label" for="Contract">Contract</label>
                                                        </div>
                                                        <div class="custom-control custom-checkbox fs-13">
                                                            <input type="checkbox" class="custom-control-input" id="Internship">
                                                            <label class="custom-control-label custom--control-label" for="Internship">Internship</label>
                                                        </div>
                                                    </div>
                                                </div><!-- end col-lg-6 -->
                                            </div><!-- end row -->
                                        </div><!-- end search-advanced-item -->
                                        <div class="search-advanced-item mb-10px">
                                            <h4 class="fs-14 pb-2 text-gray text-uppercase">Companies</h4>
                                            <div class="divider"><span></span></div>
                                            <div class="row pt-3">
                                                <div class="input-box col-lg-6">
                                                    <label class="fs-13 text-black lh-20">Companies to Include</label>
                                                    <div class="form-group">
                                                        <input class="input-tags" type="text" name="text" placeholder="Add up to 5 (e.g. Initrode)">
                                                    </div>
                                                </div><!-- end col-lg-6 -->
                                                <div class="input-box col-lg-6">
                                                    <label class="fs-13 text-black lh-20">Companies to Exclude</label>
                                                    <div class="form-group">
                                                        <input class="input-tags" type="text" name="text" placeholder="Add up to 5 (e.g. Initech)">
                                                    </div>
                                                </div><!-- end col-lg-6 -->
                                                <div class="input-box col-lg-12">
                                                    <label class="fs-13 text-black lh-20">Industries</label>
                                                    <div class="form-group row">
                                                        <div class="col-lg-4">
                                                            <div class="custom-control custom-checkbox fs-13">
                                                                <input type="checkbox" class="custom-control-input" id="Accounting">
                                                                <label class="custom-control-label custom--control-label" for="Accounting">Accounting</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox fs-13">
                                                                <input type="checkbox" class="custom-control-input" id="Advertising">
                                                                <label class="custom-control-label custom--control-label" for="Advertising">Advertising</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox fs-13">
                                                                <input type="checkbox" class="custom-control-input" id="Aerospace">
                                                                <label class="custom-control-label custom--control-label" for="Aerospace">Aerospace</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox fs-13">
                                                                <input type="checkbox" class="custom-control-input" id="Agriculture">
                                                                <label class="custom-control-label custom--control-label" for="Agriculture">Agriculture</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox fs-13">
                                                                <input type="checkbox" class="custom-control-input" id="Architecture">
                                                                <label class="custom-control-label custom--control-label" for="Architecture">Architecture</label>
                                                            </div>
                                                        </div><!-- end col-lg-4 -->
                                                        <div class="col-lg-4">
                                                            <div class="custom-control custom-checkbox fs-13">
                                                                <input type="checkbox" class="custom-control-input" id="Arts">
                                                                <label class="custom-control-label custom--control-label" for="Arts">Arts</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox fs-13">
                                                                <input type="checkbox" class="custom-control-input" id="Automotive">
                                                                <label class="custom-control-label custom--control-label" for="Automotive">Automotive</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox fs-13">
                                                                <input type="checkbox" class="custom-control-input" id="CustomerService">
                                                                <label class="custom-control-label custom--control-label" for="CustomerService">Customer Service</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox fs-13">
                                                                <input type="checkbox" class="custom-control-input" id="Data&Analytics">
                                                                <label class="custom-control-label custom--control-label" for="Data&Analytics">Data & Analytics</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox fs-13">
                                                                <input type="checkbox" class="custom-control-input" id="Finance">
                                                                <label class="custom-control-label custom--control-label" for="Finance">Finance</label>
                                                            </div>
                                                        </div><!-- end col-lg-4 -->
                                                        <div class="col-lg-4">
                                                            <div class="custom-control custom-checkbox fs-13">
                                                                <input type="checkbox" class="custom-control-input" id="Food&Beverage">
                                                                <label class="custom-control-label custom--control-label" for="Food&Beverage">Food & Beverage</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox fs-13">
                                                                <input type="checkbox" class="custom-control-input" id="Gaming">
                                                                <label class="custom-control-label custom--control-label" for="Gaming">Gaming</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox fs-13">
                                                                <input type="checkbox" class="custom-control-input" id="Government">
                                                                <label class="custom-control-label custom--control-label" for="Government">Government</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox fs-13">
                                                                <input type="checkbox" class="custom-control-input" id="Hardware">
                                                                <label class="custom-control-label custom--control-label" for="Hardware">Hardware</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox fs-13">
                                                                <input type="checkbox" class="custom-control-input" id="Health&Fitness">
                                                                <label class="custom-control-label custom--control-label" for="Health&Fitness">Health & Fitness</label>
                                                            </div>
                                                        </div><!-- end col-lg-4 -->
                                                        <div class="col-lg-12">
                                                            <div class="collapse" id="collapseMoreTwo">
                                                                <div class="row">
                                                                    <div class="col-lg-4">
                                                                        <div class="custom-control custom-checkbox fs-13">
                                                                            <input type="checkbox" class="custom-control-input" id="HealthCare">
                                                                            <label class="custom-control-label custom--control-label" for="HealthCare">Health Care</label>
                                                                        </div>
                                                                        <div class="custom-control custom-checkbox fs-13">
                                                                            <input type="checkbox" class="custom-control-input" id="HomeAndGarden">
                                                                            <label class="custom-control-label custom--control-label" for="HomeAndGarden">Home and Garden</label>
                                                                        </div>
                                                                        <div class="custom-control custom-checkbox fs-13">
                                                                            <input type="checkbox" class="custom-control-input" id="Hospitality">
                                                                            <label class="custom-control-label custom--control-label" for="Hospitality">Hospitality</label>
                                                                        </div>
                                                                        <div class="custom-control custom-checkbox fs-13">
                                                                            <input type="checkbox" class="custom-control-input" id="InformationTechnology">
                                                                            <label class="custom-control-label custom--control-label" for="InformationTechnology">Information Technology</label>
                                                                        </div>
                                                                        <div class="custom-control custom-checkbox fs-13">
                                                                            <input type="checkbox" class="custom-control-input" id="Insurance">
                                                                            <label class="custom-control-label custom--control-label" for="Insurance">Insurance</label>
                                                                        </div>
                                                                    </div><!-- end col-lg-4 -->
                                                                    <div class="col-lg-4">
                                                                        <div class="custom-control custom-checkbox fs-13">
                                                                            <input type="checkbox" class="custom-control-input" id="LanguageServices">
                                                                            <label class="custom-control-label custom--control-label" for="LanguageServices">Language Services</label>
                                                                        </div>
                                                                        <div class="custom-control custom-checkbox fs-13">
                                                                            <input type="checkbox" class="custom-control-input" id="Legal">
                                                                            <label class="custom-control-label custom--control-label" for="Legal">Legal</label>
                                                                        </div>
                                                                        <div class="custom-control custom-checkbox fs-13">
                                                                            <input type="checkbox" class="custom-control-input" id="LifeSciences">
                                                                            <label class="custom-control-label custom--control-label" for="LifeSciences">Life Sciences</label>
                                                                        </div>
                                                                        <div class="custom-control custom-checkbox fs-13">
                                                                            <input type="checkbox" class="custom-control-input" id="LocationServices">
                                                                            <label class="custom-control-label custom--control-label" for="LocationServices">Location Services</label>
                                                                        </div>
                                                                        <div class="custom-control custom-checkbox fs-13">
                                                                            <input type="checkbox" class="custom-control-input" id="Logistics&Distribution">
                                                                            <label class="custom-control-label custom--control-label" for="Logistics&Distribution">Logistics & Distribution</label>
                                                                        </div>
                                                                    </div><!-- end col-lg-4 -->
                                                                    <div class="col-lg-4">
                                                                        <div class="custom-control custom-checkbox fs-13">
                                                                            <input type="checkbox" class="custom-control-input" id="Manufacturing">
                                                                            <label class="custom-control-label custom--control-label" for="Manufacturing">Manufacturing</label>
                                                                        </div>
                                                                        <div class="custom-control custom-checkbox fs-13">
                                                                            <input type="checkbox" class="custom-control-input" id="Marketing">
                                                                            <label class="custom-control-label custom--control-label" for="Marketing">Marketing</label>
                                                                        </div>
                                                                        <div class="custom-control custom-checkbox fs-13">
                                                                            <input type="checkbox" class="custom-control-input" id="Media">
                                                                            <label class="custom-control-label custom--control-label" for="Media">Media</label>
                                                                        </div>
                                                                        <div class="custom-control custom-checkbox fs-13">
                                                                            <input type="checkbox" class="custom-control-input" id="Meteorology">
                                                                            <label class="custom-control-label custom--control-label" for="Meteorology">Meteorology</label>
                                                                        </div>
                                                                        <div class="custom-control custom-checkbox fs-13">
                                                                            <input type="checkbox" class="custom-control-input" id="Mobile">
                                                                            <label class="custom-control-label custom--control-label" for="Mobile">Mobile</label>
                                                                        </div>
                                                                    </div><!-- end col-lg-4 -->
                                                                </div><!-- end row -->
                                                            </div><!-- end collapse -->
                                                            <a class="collapse-btn fs-13" data-toggle="collapse" href="#collapseMoreTwo" role="button" aria-expanded="false" aria-controls="collapseMoreTwo">
                                                                <span class="collapse-btn-hide">Show more<i class="la la-angle-down ml-1 fs-11"></i></span>
                                                                <span class="collapse-btn-show">Show less<i class="la la-angle-up ml-1 fs-11"></i></span>
                                                            </a>
                                                        </div><!-- end col-lg-12 -->
                                                    </div>
                                                </div><!-- end col-lg-12 -->
                                            </div><!-- end row -->
                                        </div><!-- end search-advanced-item -->
                                        <div class="search-advanced-item">
                                            <h4 class="fs-14 pb-2 text-gray text-uppercase">More</h4>
                                            <div class="divider"><span></span></div>
                                            <div class="row pt-3">
                                                <div class="input-box col-lg-6">
                                                    <label class="fs-13 text-black lh-20">Applications</label>
                                                    <div class="form-group">
                                                        <div class="custom-control custom-checkbox fs-13">
                                                            <input type="checkbox" class="custom-control-input" id="BeOneOfTheFirstApplicants">
                                                            <label class="custom-control-label custom--control-label" for="BeOneOfTheFirstApplicants">Be one of the first applicants</label>
                                                        </div>
                                                    </div>
                                                </div><!-- end col-lg-6 -->
                                                <div class="input-box col-lg-6">
                                                    <label class="fs-13 text-black lh-20">Responses</label>
                                                    <div class="form-group">
                                                        <div class="custom-control custom-checkbox fs-13">
                                                            <input type="checkbox" class="custom-control-input" id="HighResponseRate">
                                                            <label class="custom-control-label custom--control-label" for="HighResponseRate">High response rate</label>
                                                        </div>
                                                    </div>
                                                </div><!-- end col-lg-6 -->
                                            </div><!-- end row -->
                                        </div><!-- end search-advanced-item -->
                                    </form>
                                </div><!-- end card -->
                            </div><!-- end collapse -->
                            <div class="question-main-bar">
                                <div class="questions-snippet">
                                    @foreach($questions as $item)
                                    <div class="media media-card media--card align-items-center">
                                        <div class="votes">
                                            <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                <span class="vote-counts">{{ $item->reponses_count }}</span>
                                                <span class="answer-icon"></span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h5><a href="{{ route('showQuestion', ['id' => $item->id]) }}">{{$item->titre}}</a></h5>
                                            <small class="meta">
                                                <span class="pr-1">{{$item->created_at->format('j F Y, H:i')}}</span>
                                                <a href="{{ route('userProfile', [ 'id' => $item->user_id ]) }}" class="author">{{$item->users->name}}</a>
                                            </small>
                                            <div class="tags">
                                                <a href="#" class="tag-link">{{$item->tags->title}}</a>
                                            </div>
                                        </div>
                                    </div><!-- end media -->
                                    @endforeach
                                </div><!-- end questions-snippet -->
                                <div class="pager d-flex flex-wrap align-items-center justify-content-between pt-30px">
                                    <div>
                                        <nav aria-label="Page navigation example">
                                            {{ $questions->links() }}
                                        </nav>
                                    </div>
                                </div>
                            </div><!-- end question-main-bar -->
                        </div><!-- end tab-pane -->
                        <div class="tab-pane fade" id="tags" role="tabpanel" aria-labelledby="tags-tab">
                            <div class="filters pb-4">
                                <h3 class="fs-17 fw-medium pb-2">Tags</h3>
                                <p class="fs-15 lh-24 pb-4">Une étiquette est un mot-clé ou une étiquette qui catégorise votre question avec d'autres questions similaires.
                                    L'utilisation des bonnes balises permet aux autres de trouver et de répondre plus facilement à votre question.
                                </p>
                            </div><!-- end filters -->
                            <div class="tags-main-bar">
                                <div class="tags-snippet">
                                    <div class="row">
                                        @foreach($tags as $item)
                                        <div class="col-lg-6">
                                            <div class="card card-item">
                                                <div class="card-body">
                                                    <div class="tags pb-1">
                                                        <a href="" class="tag-link tag-link-md tag-link-blue">{{$item->title}}</a>
                                                    </div>
                                                    <p class="card-text fs-14 truncate-4 lh-24 text-black-50">
                                                        {{$item->detail}}
                                                    </p>
                                                    <div class="d-flex tags-info fs-14 pt-3 border-top border-top-gray mt-3">
                                                        <p class="pr-1 lh-18"> {{$item->questions_count}} questions </p>
                                                    </div>
                                                </div><!-- end card-body -->
                                            </div><!-- end card -->
                                        </div><!-- end col-lg-6 -->
                                        @endforeach
                                    </div><!-- end row -->
                                </div><!-- end tags-snippet -->
                                {{ $tags->links() }}
                            </div><!-- end tags-main-bar -->
                        </div><!-- end tab-pane -->
                        <div class="tab-pane fade" id="users" role="tabpanel" aria-labelledby="users-tab">
                            <div class="filters pb-4">
                                <h3 class="fs-17 fw-medium pb-4">Utilisateurs</h3>
                                <div class="d-flex flex-wrap align-items-center justify-content-between">
                                    <form method="get" action="{{route('searchUser')}}" class="flex-grow-1 mr-3">
                                        <div class="form-group mb-0">
                                            <input class="form-control form--control form-control-sm h-auto lh-34" type="text" name="search" placeholder="Rechercher un utilisateur...">
                                            <button class="form-btn" type="submit"><i class="la la-search"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div><!-- end filters -->
                            <div class="users-main-bar">
                                <div class="users-snippet">
                                    <div class="row">
                                        @foreach($users as $item)
                                        <div class="col-lg-6">
                                            <div class="media media-card p-3">
                                                <a href="#" class="media-img d-inline-block">
                                                    <img src="{{ Storage::url($item->image) }}" alt="company logo">
                                                </a>
                                                <div class="media-body">
                                                    <h5 class="fs-16 fw-medium"><a href="{{ route('userProfile', [ 'id' => $item->id ]) }}">{{$item->name}}</a></h5>
                                                    <small class="meta d-block lh-24 pb-1"><span>{{$item->location}}</span></small>
                                                    <p class="fw-medium fs-15 text-black-50 lh-18">{{$item->reponses_count}}</p>
                                                </div><!-- end media-body -->
                                            </div><!-- end media -->
                                        </div><!-- end col-lg-6 -->
                                        @endforeach
                                    </div><!-- end row -->
                                </div><!-- end users-snippet -->
                                {{ $users->links() }}
                            </div><!-- end users-main-bar -->
                        </div><!-- end tab-pane -->
                    </div><!-- end tab-content -->
                </div><!-- end question-tabs -->
            </div><!-- end col-lg-7 -->
            <div class="col-lg-3">
                <div class="sidebar">
                    <div class="card card-item">
                        <div class="card-body">
                            <h3 class="fs-17 pb-3">Réalisation en nombre</h3>
                            <div class="divider"><span></span></div>
                            <div class="row no-gutters text-center">
                                <div class="col-lg-6 responsive-column-half">
                                    <div class="icon-box pt-3">
                                        <span class="fs-20 fw-bold text-color">{{$questions_counts}}</span>
                                        <p class="fs-14">Questions</p>
                                    </div><!-- end icon-box -->
                                </div><!-- end col-lg-6 -->
                                <div class="col-lg-6 responsive-column-half">
                                    <div class="icon-box pt-3">
                                        <span class="fs-20 fw-bold text-color-2">{{$reponses_counts}}</span>
                                        <p class="fs-14">Reponses</p>
                                    </div><!-- end icon-box -->
                                </div><!-- end col-lg-6 -->
                                <div class="col-lg-6 responsive-column-half">
                                    <div class="icon-box pt-3">
                                        <span class="fs-20 fw-bold text-color-4">{{$users_counts}}</span>
                                        <p class="fs-14">Utilisateurs</p>
                                    </div><!-- end icon-box -->
                                </div><!-- end col-lg-6 -->
                                <div class="col-lg-12 pt-3">
                                    <p class="fs-14">Pour obtenir la réponse à la question <a href="{{route('login')}}" class="text-color hover-underline">Rejoindre<i class="la la-arrow-right ml-1"></i></a></p>
                                </div>
                            </div><!-- end row -->
                        </div>
                    </div><!-- end card -->
                    <div class="card card-item">
                        <div class="card-body">
                            <h3 class="fs-17 pb-3">Questions tendance</h3>
                            <div class="divider"><span></span></div>
                            <div class="sidebar-questions pt-3">
                                @foreach($questions_tend as $item)
                                <div class="media media-card media--card media--card-2">
                                    <div class="media-body">
                                        <h5><a href="question-details.html">{{$item->titre}}</a></h5>
                                        <small class="meta">
                                            <span class="pr-1">{{$item->created_at->format('j F Y, H:i')}}</span>
                                            <span class="pr-1">. par</span>
                                            <a href="#" class="author">{{$item->users->name}}</a>
                                        </small>
                                    </div>
                                </div><!-- end media -->
                                @endforeach
                            </div><!-- end sidebar-questions -->
                        </div>
                    </div><!-- end card -->
                </div><!-- end sidebar -->
            </div><!-- end col-lg-3 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end question-area -->
<!-- ================================
         END QUESTION AREA
================================= -->


<!-- ================================
         START CTA AREA
================================= -->
<section class="get-started-area pt-80px pb-50px pattern-bg bg-gray">
    <div class="container">
        <div class="text-center">
            <h2 class="section-title">Les communautés Forum Q&A sont différentes. <br> Voici comment</h2>
        </div>
        <div class="row pt-50px">
            <div class="col-lg-4 responsive-column-half">
                <div class="card card-item hover-y text-center">
                    <div class="card-body">
                        <img src="/admins/images/bubble.png" alt="bubble">
                        <h5 class="card-title pt-4 pb-2">Communautés d'experts.</h5>
                    </div><!-- end card-body -->
                </div><!-- end card -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 responsive-column-half">
                <div class="card card-item hover-y text-center">
                    <div class="card-body">
                        <img src="/admins/images/vote.png" alt="vote">
                        <h5 class="card-title pt-4 pb-2">La bonne réponse. Tout en haut.</h5>
                    </div><!-- end card-body -->
                </div><!-- end card -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 responsive-column-half">
                <div class="card card-item hover-y text-center">
                    <div class="card-body">
                        <img src="/admins/images/check.png" alt="check">
                        <h5 class="card-title pt-4 pb-2">Partager le savoir. Gagnez la confiance.</h5>
                    </div><!-- end card-body -->
                </div><!-- end card -->
            </div><!-- end col-lg-4 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>
<!-- ================================
         END CTA AREA
================================= -->

@endsection