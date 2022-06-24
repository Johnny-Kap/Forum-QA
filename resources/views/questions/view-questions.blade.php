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
                            <a class="nav-link" id="users-tab" data-toggle="tab" href="#users" role="tab" aria-controls="users" aria-selected="false">Users</a>
                        </li>
                    </ul>
                    <div class="tab-content pt-40px" id="myTabContent">
                        <div class="tab-pane fade show active" id="questions" role="tabpanel" aria-labelledby="questions-tab">
                            <div class="filters d-flex align-items-center justify-content-between pb-4">
                                <h3 class="fs-17 fw-medium">Toutes les Questions</h3>
                                <div class="filter-option-box w-20">
                                    <select class="select-container">
                                        <option value="newest" selected="selected">Newest </option>
                                        <option value="featured">Bountied (390)</option>
                                        <option value="frequent">Frequent </option>
                                        <option value="votes">Votes </option>
                                        <option value="active">Active </option>
                                        <option value="unanswered">Unanswered </option>
                                        <option value="Votes">Votes </option>
                                    </select>
                                </div><!-- end filter-option-box -->
                            </div><!-- end filters -->
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
                                <div class="d-flex flex-wrap align-items-center justify-content-between">
                                    <form method="post" class="flex-grow-1 mr-3">
                                        <div class="form-group mb-0">
                                            <input class="form-control form--control form-control-sm h-auto lh-34" type="text" name="search" placeholder="Filtrer par nom du Tag...">
                                            <button class="form-btn" type="button"><i class="la la-search"></i></button>
                                        </div>
                                    </form>
                                    <div class="filter-option-box w-20">
                                        <select class="select-container mt-2">
                                            <option value="popular" selected="selected">Populaire</option>
                                            <option value="name">Nom</option>
                                            <option value="new">Nouveaux</option>
                                        </select>
                                    </div>
                                </div>
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
                                <h3 class="fs-17 fw-medium pb-4">Users</h3>
                                <div class="d-flex flex-wrap align-items-center justify-content-between">
                                    <form method="post" class="flex-grow-1 mr-3">
                                        <div class="form-group mb-0">
                                            <input class="form-control form--control form-control-sm h-auto lh-34" type="text" name="search" placeholder="Filter by user...">
                                            <button class="form-btn" type="button"><i class="la la-search"></i></button>
                                        </div>
                                    </form>
                                    <div class="filter-option-box w-20 mt-2">
                                        <select class="select-container">
                                            <option value="reputation" selected="selected">Reputation</option>
                                            <option value="new-users">New users</option>
                                            <option value="voters">Voters</option>
                                            <option value="editors">Editors</option>
                                            <option value="moderators">Moderators</option>
                                        </select>
                                    </div>
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
                                                    <h5 class="fs-16 fw-medium"><a href="user-profile.html">{{$item->name}}</a></h5>
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