@extends('layouts.admin')

@section('content')

<!--======================================
        START HERO AREA
======================================-->
<section class="hero-area bg-white shadow-sm overflow-hidden pt-40px pb-40px">
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
                    <h2 class="section-title pb-2 fs-24 lh-34">Trouvez la meilleure réponse à votre question technique, <br>
                        aider les autres à répondre aux leurs
                    </h2>
                    <ul class="generic-list-item pt-3">
                        <li><span class="icon-element icon-element-xs shadow-sm d-inline-block mr-2"><svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 0 24 24" width="20px" fill="#6c727c">
                                    <path d="M0 0h24v24H0V0z" fill="none" />
                                    <path d="M11 18h2v-2h-2v2zm1-16C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm0-14c-2.21 0-4 1.79-4 4h2c0-1.1.9-2 2-2s2 .9 2 2c0 2-3 1.75-3 5h2c0-2.25 3-2.5 3-5 0-2.21-1.79-4-4-4z" />
                                </svg></span> N'importe qui peut poser une question</li>
                        <li><span class="icon-element icon-element-xs shadow-sm d-inline-block mr-2"><svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 0 24 24" width="20px" fill="#6c727c">
                                    <path d="M0 0h24v24H0V0z" fill="none" />
                                    <path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z" />
                                </svg></span> N'importe qui peut répondre</li>
                        <li><span class="icon-element icon-element-xs shadow-sm d-inline-block mr-2"><svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 0 320 512" width="20px">
                                    <path fill="#6c727c" d="M41 288h238c21.4 0 32.1 25.9 17 41L177 448c-9.4 9.4-24.6 9.4-33.9 0L24 329c-15.1-15.1-4.4-41 17-41zm255-105L177 64c-9.4-9.4-24.6-9.4-33.9 0L24 183c-15.1 15.1-4.4 41 17 41h238c21.4 0 32.1-25.9 17-41z"></path>
                                </svg></span> Les meilleures réponses sont votées et montent au sommet</li>
                    </ul>
                </div><!-- end hero-content -->
            </div><!-- end col-lg-9 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>
<!--======================================
        END HERO AREA
======================================-->



<!-- ================================
         START QUESTION AREA
================================= -->
<section class="question-area pt-40px pb-40px">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="question-main-bar mb-50px">
                    <div class="question-highlight">
                        <div class="media media-card shadow-none rounded-0 mb-0 bg-transparent p-0">
                            <div class="media-body">
                                <h5 class="fs-20">{{ $questionDetails->titre }}</h5>
                                <div class="meta d-flex flex-wrap align-items-center fs-13 lh-20 py-1">
                                    <div class="pr-3">
                                        <span>A posé le</span>
                                        <span class="text-black">{{$questionDetails->created_at->format('j F Y, h:i')}}</span>
                                    </div>
                                    <div class="pr-3">
                                        <span class="pr-1">Vu</span>
                                        <span class="text-black">{{$vuesCount}} fois</span>
                                    </div>
                                </div>
                                <div class="tags">
                                    <a href="#" class="tag-link">{{$questionDetails->tags->title}}</a>
                                </div>
                            </div>
                        </div><!-- end media -->
                    </div><!-- end question-highlight -->
                    <div class="question d-flex">
                        <div class="votes votes-styled w-auto">
                            <div id="vote2" class="upvotejs">
                                <form action="" method="post"> @csrf <button type="submit" style="border: 0; background-color:transparent;"><a class="upvote upvote-on" data-toggle="tooltip" data-placement="right" title="This question is useful"></a></button></form>
                                <span class="count">2</span>
                                <form action="" method="post"> @csrf <button type="submit" style="border: 0; background-color:transparent;"><a class="downvote" data-toggle="tooltip" data-placement="right" title="This question is not useful"></a></button></form>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-star" viewBox="0 0 16 16">
                                        <path d="M7.84 4.1a.178.178 0 0 1 .32 0l.634 1.285a.178.178 0 0 0 .134.098l1.42.206c.145.021.204.2.098.303L9.42 6.993a.178.178 0 0 0-.051.158l.242 1.414a.178.178 0 0 1-.258.187l-1.27-.668a.178.178 0 0 0-.165 0l-1.27.668a.178.178 0 0 1-.257-.187l.242-1.414a.178.178 0 0 0-.05-.158l-1.03-1.001a.178.178 0 0 1 .098-.303l1.42-.206a.178.178 0 0 0 .134-.098L7.84 4.1z" />
                                        <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z" />
                                        <a class="star" data-toggle="tooltip" data-placement="right" title="Bookmark this question."></a></svg>
                            </div>
                        </div><!-- end votes -->
                        <div class="question-post-body-wrap flex-grow-1">
                            <div class="question-post-body">
                                {{$questionDetails->contenu}}
                            </div><!-- end question-post-body -->
                            <div class="question-post-user-action">
                                <div class="media media-card user-media align-items-center">
                                    <a href="user-profile.html" class="media-img d-block">
                                        <img src="/admins/images/img4.jpg" alt="avatar">
                                    </a>
                                    <div class="media-body d-flex flex-wrap align-items-center justify-content-between">
                                        <div>
                                            <h5 class="pb-1"><a href="user-profile.html">{{$questionDetails->users->name}}</a></h5>
                                        </div>
                                        <a href="revisions.html" class="meta d-block text-right fs-13 text-color">
                                            <span class="d-block lh-18">édité le</span>
                                            <span class="d-block lh-18 fs-12">{{$questionDetails->created_at->format('j F Y, h:i')}}</span>
                                        </a>
                                    </div>
                                </div><!-- end media -->
                            </div><!-- end question-post-user-action -->
                            <div class="comments-wrap">
                                <ul class="comments-list">
                                    @foreach($getComments as $item)
                                    <li>
                                        <div class="comment-actions">
                                            <span class="comment-score"></span>
                                        </div>
                                        <div class="comment-body">
                                            <span class="comment-copy"> {{$item->contenu}} </span>
                                            <span class="comment-separated">-</span><span class="comment-separated"> {{$item->website}} </span>
                                            <span class="comment-separated">-</span>
                                            <a href="user-profile.html" class="comment-user owner" title="224,110 reputation">{{$item->users->name}}</a>
                                            <span class="comment-separated">-</span>
                                            <a href="#" class="comment-date">{{$item->created_at->format('j F Y, h:i')}}</a>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                                <div class="comment-form">
                                    <div class="comment-link-wrap text-center">
                                        <a class="collapse-btn comment-link" data-toggle="collapse" href="#addCommentCollapse" role="button" aria-expanded="false" aria-controls="addCommentCollapse" title="Use comments to ask for more information or suggest improvements. Avoid answering questions in comments.">
                                            Ajouter un commentaire</a>
                                    </div>
                                    <div class="collapse border-top border-top-gray mt-2 pt-3" id="addCommentCollapse">
                                        <form method="post" action="{{ route('addCommentQuestion', [ 'id' => $questionDetails->id ]) }}" class="row pb-3">
                                            @csrf
                                            <div class="col-lg-12">
                                                <h4 class="fs-16 pb-2">Laissez un commentaire</h4>
                                                <div class="divider mb-2"><span></span></div>
                                            </div><!-- end col-lg-12 -->
                                            <div class="col-lg-12">
                                                <div class="input-box">
                                                    <label class="fs-13 text-black lh-20">Site Internet</label>
                                                    <div class="form-group">
                                                        <input class="form-control form--control form-control-sm fs-13" type="text" name="website" placeholder="Website link">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-12 -->
                                            <div class="col-lg-12">
                                                <div class="input-box">
                                                    <label class="fs-13 text-black lh-20">Message</label>
                                                    <div class="form-group">
                                                        <textarea class="form-control form--control form-control-sm fs-13" name="message" rows="5" placeholder="Your comment here..."></textarea>
                                                        <div class="d-flex flex-wrap align-items-center pt-2">
                                                            <div class="badge bg-gray border border-gray mr-3 fw-regular fs-13">
                                                                [hyperliens nommés] (https://example.com)</div>
                                                            <div class="mr-3 fw-bold fs-13">**bold**</div>
                                                            <div class="mr-3 font-italic fs-13">_italic_</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-12 -->
                                            <div class="col-lg-12">
                                                <div class="input-box d-flex flex-wrap align-items-center justify-content-between">
                                                    <button class="btn theme-btn theme-btn-sm theme-btn-outline theme-btn-outline-gray" type="submit">Poster un commentaire</button>
                                                </div>
                                            </div><!-- end col-lg-12 -->
                                        </form>
                                    </div><!-- end collapse -->
                                </div>
                            </div><!-- end comments-wrap -->
                        </div><!-- end question-post-body-wrap -->
                    </div><!-- end question -->
                    <div class="subheader d-flex align-items-center justify-content-between">
                        <div class="subheader-title">
                            <h3 class="fs-16">{{$reponses_counts_this}} réponse(s)</h3>
                        </div><!-- end subheader-title -->
                        <div class="subheader-actions d-flex align-items-center lh-1">
                            <label class="fs-13 fw-regular mr-1 mb-0">Filtré par</label>
                            <div class="w-100px">
                                <select class="select-container">
                                    <option value="active">active</option>
                                    <option value="oldest">le plus ancien</option>
                                    <option value="votes" selected="selected">votes</option>
                                </select>
                            </div>
                        </div><!-- end subheader-actions -->
                    </div><!-- end subheader -->
                    @foreach($reponses as $item)
                    <div class="answer-wrap d-flex">
                        <div class="votes votes-styled w-auto">
                            <div id="vote2" class="upvotejs">
                                <form action="{{ route('upvote', ['id' => $item->id]) }}" method="post"> @csrf <button type="submit" style="border: 0; background-color:transparent;"><a class="upvote upvote-on" data-toggle="tooltip" data-placement="right" title="This question is useful"></a></button></form>
                                <span class="count">{{ $item->votes_count }}</span>
                                <form action="{{ route('downvote', ['id' => $item->id]) }}" method="post"> @csrf <button type="submit" style="border: 0; background-color:transparent;"><a class="downvote" data-toggle="tooltip" data-placement="right" title="This question is not useful"></a></button></form>
                                <a class="star check star-on" data-toggle="tooltip" data-placement="right" title="The question owner accepted this answer"><span class="fa fa-star"></span><i class="fa fa-star"></i></a>
                            </div>
                        </div><!-- end votes -->
                        <div class="answer-body-wrap flex-grow-1">
                            <div class="answer-body">
                                {{$item->contenu}}
                            </div><!-- end answer-body -->
                            <div class="question-post-user-action">
                                <div class="media media-card user-media align-items-center">
                                    <a href="user-profile.html" class="media-img d-block">
                                        <img src="/admins/images/img4.jpg" alt="avatar">
                                    </a>
                                    <div class="media-body d-flex align-items-center justify-content-between">
                                        <div>
                                            <h5 class="pb-1"><a href="user-profile.html">{{$item->users->name}}</a></h5>
                                        </div>
                                        <small class="meta d-block text-right">
                                            <span class="text-black d-block lh-18">a répondu le</span>
                                            <span class="d-block lh-18 fs-12">{{$item->created_at->format('j F Y, h:i')}}</span>
                                        </small>
                                    </div>
                                </div><!-- end media -->
                            </div><!-- end question-post-user-action -->

                        </div><!-- end answer-body-wrap -->
                    </div><!-- end answer-wrap -->
                    @endforeach
                    <div class="subheader">
                        <div class="subheader-title">
                            <h3 class="fs-16">Les réponses</h3>
                        </div><!-- end subheader-title -->
                    </div><!-- end subheader -->
                    <div class="post-form">
                        <form method="post" action="{{ route('addReponse', [ 'id' => $questionDetails->id ]) }}" enctype="multipart/form-data" class="pt-3">
                            @csrf
                            <div class="input-box">
                                <label class="fs-14 text-black lh-20 fw-medium">Corps</label>
                                <div class="form-group">
                                    <textarea class="form-control form--control form-control-sm fs-13 user-text-editor" name="contenu" rows="6" placeholder="Votre réponse ici...">Votre réponse ici...</textarea>
                                </div>
                            </div>
                            <div class="input-box">
                                <label class="fs-14 text-black fw-medium">Image</label>
                                <div class="form-group">
                                    <div class="file-upload-wrap file-upload-layout-2">
                                        <input type="file" name="file" class="file-upload-input" multiple>
                                        <span class="file-upload-text d-flex align-items-center justify-content-center"><i class="la la-cloud-upload mr-2 fs-24"></i>Déposez les fichiers ici ou cliquez pour télécharger.</span>
                                    </div>
                                </div>
                            </div><!-- end input-box -->
                            @guest
                            @if(Route::has('login'))
                            <a href="{{route('login')}}" class="btn theme-btn ">Connectez-vous <i class="la la-sign-in mr-1"></i></a> ou <a href="{{route('register')}}" class="btn theme-btn ">Inscrivez-vous <i class="la la-user mr-1"></i></a> <span>pour repondre à la question !</span>
                            @endif
                            @else
                            <button class="btn theme-btn theme-btn-sm" type="submit">Postez votre réponse</button>
                            @endguest
                        </form>
                    </div>
                </div><!-- end question-main-bar -->
            </div><!-- end col-lg-9 -->
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
                                        <p class="fs-14">Réponses</p>
                                    </div><!-- end icon-box -->
                                </div><!-- end col-lg-6 -->
                                <div class="col-lg-6 responsive-column-half">
                                    <div class="icon-box pt-3">
                                        <span class="fs-20 fw-bold text-color-4">{{$users_counts}}</span>
                                        <p class="fs-14">Utilisateurs</p>
                                    </div><!-- end icon-box -->
                                </div><!-- end col-lg-6 -->
                                <div class="col-lg-12 pt-3">
                                    <p class="fs-14">Pour obtenir la réponse à la question <a href="{{route('register')}}" class="text-color hover-underline">Rejoindre<i class="la la-arrow-right ml-1"></i></a></p>
                                </div>
                            </div><!-- end row -->
                        </div>
                    </div><!-- end card -->
                    <div class="card card-item">
                        <div class="card-body">
                            <h3 class="fs-17 pb-3">Questions Connexes</h3>
                            <div class="divider"><span></span></div>
                            <div class="sidebar-questions pt-3">
                                @foreach($questions_tend as $item)
                                <div class="media media-card media--card media--card-2">
                                    <div class="media-body">
                                        <h5><a href="question-details.html">{{$item->titre}}</a></h5>
                                        <small class="meta">
                                            <span class="pr-1">{{$item->created_at->format('j F Y, h:i')}}</span>
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

@endsection