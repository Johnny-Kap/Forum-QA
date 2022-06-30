@extends('layouts.admin')

@section('content')

<!--======================================
        START HERO AREA
======================================-->
<section class="hero-area bg-white shadow-sm overflow-hidden pt-60px">
    <span class="stroke-shape stroke-shape-1"></span>
    <span class="stroke-shape stroke-shape-2"></span>
    <span class="stroke-shape stroke-shape-3"></span>
    <span class="stroke-shape stroke-shape-4"></span>
    <span class="stroke-shape stroke-shape-5"></span>
    <span class="stroke-shape stroke-shape-6"></span>
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="hero-content">
                    <div class="media media-card align-items-center shadow-none p-0 mb-0 rounded-0 bg-transparent">
                        <div class="media-img media--img">
                            <img src="{{ Storage::url($user_items->image) }}" alt="avatar">
                        </div>
                        <div class="media-body">
                            <h5>{{$user_items->name}}</h5>
                            <small class="meta d-block lh-20 pb-2">
                                <span><i class="la la-map-marker mr-1"></i>{{$user_items->location}} <i class="la la-calendar-week mr-1"></i>membre depuis le {{$user_items->created_at->format('j F Y, H:i')}}</span>
                            </small>
                            <div class="stats fs-14 fw-medium d-flex align-items-center lh-18">
                                <span class="text-black pr-2" title="Reputation">
                                    {{$user_items->email}} |
                                    @php
                                    if($user_items->email_verified_at == NULL){
                                    echo'<span class="badge badge-warning">Non vérifié</span>';
                                    }else{
                                    echo'<span class="badge badge-success">Vérifié</span>';
                                    }
                                    @endphp
                                </span>
                            </div>
                        </div>
                    </div><!-- end media -->
                </div><!-- end hero-content -->
            </div><!-- end col-lg-8 -->
            <div class="col-lg-12">
                <ul class="nav nav-tabs generic-tabs generic--tabs generic--tabs-2 mt-4" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="user-profile-tab" data-toggle="tab" href="#user-profile" role="tab" aria-controls="user-profile" aria-selected="true">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="user-activity-tab" data-toggle="tab" href="#user-activity" role="tab" aria-controls="user-activity" aria-selected="false">Activités</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="user-activity-tab" data-toggle="tab" href="#user-favoris" role="tab" aria-controls="user-favoris" aria-selected="false">Favoris</a>
                    </li>
                </ul>
            </div><!-- end col-lg-4 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>
<!--======================================
        END HERO AREA
======================================-->


<!-- ================================
         START USER DETAILS AREA
================================= -->
<section class="user-details-area pt-30px pb-60px">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="user-profile" role="tabpanel" aria-labelledby="user-profile-tab">
                        <div class="user-panel-main-bar">
                            <div class="user-panel mb-30px">
                                {{$user_items->bio}}
                            </div><!-- end user-panel -->
                            <div class="user-panel mb-30px pt-30px border-top border-top-gray">
                                <ul class="generic-list-item generic-list-item-bullet">
                                    <li class="pl-3"><a href="{{$user_items->website}}" class="d-inline-block">{{$user_items->website}}</a></li>
                                    <li class="pl-3"><a href="{{$user_items->githublink}}" class="d-inline-block">Github</a></li>
                                    <li class="pl-3"><a href="{$user_items->facebooklink}}" class="d-inline-block">Facebook</a></li>
                                    <li class="pl-3"><a href="{{$user_items->twitterlink}}" class="d-inline-block">Twitter</a></li>
                                    <li class="pl-3"><a href="{{$user_items->instalink}}" class="d-inline-block">Instagram</a></li>
                                    <li class="pl-3"><a href="{{$user_items->youtubelink}}" class="d-inline-block">Youtube</a></li>
                                </ul>
                            </div><!-- end user-panel -->
                            <div class="user-panel mb-30px">
                                <div class="row">
                                    <div class="col-lg-4 responsive-column-half">
                                        <div class="media media-card align-items-center shadow-none border border-gray p-3">
                                            <div class="icon-element icon-element-sm mr-3 bg-1">
                                                <svg class="svg-icon-color-white" width="25" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="-19 0 136 136.54819">
                                                    <g id="surface1">
                                                        <path d="M 21.710938 27.703125 L 76.128906 27.703125 C 77.15625 27.703125 77.988281 26.867188 77.988281 25.839844 C 77.988281 24.808594 77.15625 23.972656 76.128906 23.972656 L 21.710938 23.972656 C 20.679688 23.972656 19.84375 24.808594 19.84375 25.839844 C 19.84375 26.867188 20.679688 27.703125 21.710938 27.703125 Z M 21.710938 27.703125 " />
                                                        <path d="M 0.273438 18.625 L 0.273438 130.699219 C 0.285156 133.925781 2.898438 136.539062 6.121094 136.546875 L 91.710938 136.546875 C 94.941406 136.539062 97.554688 133.925781 97.558594 130.699219 L 97.558594 18.625 C 97.554688 15.394531 94.941406 12.78125 91.710938 12.777344 L 63.289062 12.777344 C 62.351562 4.839844 55.160156 -0.835938 47.222656 0.101562 C 40.574219 0.882812 35.332031 6.128906 34.546875 12.777344 L 6.121094 12.777344 C 2.894531 12.78125 0.277344 15.394531 0.273438 18.625 Z M 93.816406 130.699219 C 93.816406 131.867188 92.871094 132.8125 91.703125 132.8125 L 6.121094 132.8125 C 4.953125 132.8125 4.007812 131.867188 4.007812 130.699219 L 4.007812 36.6875 L 93.832031 36.6875 Z M 48.917969 3.695312 C 54.207031 3.703125 58.695312 7.554688 59.519531 12.777344 L 38.367188 12.777344 C 39.183594 7.574219 43.648438 3.726562 48.917969 3.695312 Z M 91.710938 16.503906 C 92.882812 16.503906 93.832031 17.457031 93.832031 18.625 L 93.832031 32.953125 L 4.007812 32.953125 L 4.007812 18.625 C 4.007812 17.457031 4.953125 16.503906 6.121094 16.503906 Z M 91.710938 16.503906 " />
                                                        <path d="M 37.96875 57.25 L 82.085938 57.25 C 83.113281 57.25 83.949219 56.414062 83.949219 55.386719 C 83.949219 54.351562 83.113281 53.519531 82.085938 53.519531 L 37.96875 53.519531 C 36.9375 53.519531 36.105469 54.351562 36.105469 55.386719 C 36.105469 56.414062 36.9375 57.25 37.96875 57.25 Z M 37.96875 57.25 " />
                                                        <path d="M 37.96875 76.722656 L 82.085938 76.722656 C 83.113281 76.722656 83.949219 75.886719 83.949219 74.855469 C 83.949219 73.824219 83.113281 72.988281 82.085938 72.988281 L 37.96875 72.988281 C 36.9375 72.988281 36.105469 73.824219 36.105469 74.855469 C 36.105469 75.886719 36.9375 76.722656 37.96875 76.722656 Z M 37.96875 76.722656 " />
                                                        <path d="M 37.96875 96.179688 L 82.085938 96.179688 C 83.113281 96.179688 83.949219 95.339844 83.949219 94.3125 C 83.949219 93.28125 83.113281 92.445312 82.085938 92.445312 L 37.96875 92.445312 C 36.9375 92.445312 36.105469 93.28125 36.105469 94.3125 C 36.105469 95.339844 36.9375 96.179688 37.96875 96.179688 Z M 37.96875 96.179688 " />
                                                        <path d="M 37.96875 115.632812 L 82.085938 115.632812 C 83.113281 115.632812 83.949219 114.800781 83.949219 113.765625 C 83.949219 112.738281 83.113281 111.90625 82.085938 111.90625 L 37.96875 111.90625 C 36.9375 111.90625 36.105469 112.738281 36.105469 113.765625 C 36.105469 114.800781 36.9375 115.632812 37.96875 115.632812 Z M 37.96875 115.632812 " />
                                                        <path d="M 19.359375 58.292969 C 19.652344 58.710938 20.101562 58.988281 20.601562 59.066406 L 20.878906 59.066406 C 21.289062 59.066406 21.691406 58.925781 22.023438 58.667969 L 33.910156 49.378906 C 34.804688 48.859375 35.109375 47.71875 34.59375 46.828125 C 34.078125 45.933594 32.9375 45.628906 32.046875 46.148438 C 31.890625 46.234375 31.75 46.347656 31.625 46.476562 L 21.285156 54.566406 L 19.480469 51.992188 C 18.890625 51.148438 17.726562 50.9375 16.882812 51.53125 C 16.039062 52.121094 15.828125 53.285156 16.421875 54.128906 Z M 19.359375 58.292969 " />
                                                        <path d="M 19.359375 77.476562 C 19.652344 77.894531 20.101562 78.175781 20.601562 78.253906 L 20.878906 78.253906 C 21.289062 78.25 21.691406 78.109375 22.023438 77.851562 L 33.910156 68.558594 C 34.746094 67.949219 34.921875 66.78125 34.308594 65.949219 C 33.699219 65.121094 32.53125 64.941406 31.699219 65.558594 C 31.671875 65.578125 31.640625 65.601562 31.613281 65.625 L 21.285156 73.722656 L 19.480469 71.148438 C 19.019531 70.226562 17.898438 69.851562 16.980469 70.308594 C 16.058594 70.769531 15.683594 71.890625 16.144531 72.816406 C 16.21875 72.960938 16.308594 73.101562 16.421875 73.222656 Z M 19.359375 77.476562 " />
                                                        <path d="M 19.359375 96.714844 C 19.652344 97.128906 20.101562 97.40625 20.601562 97.484375 L 20.878906 97.484375 C 21.289062 97.484375 21.691406 97.34375 22.023438 97.085938 L 33.910156 87.792969 C 34.746094 87.179688 34.921875 86.011719 34.308594 85.183594 C 33.699219 84.351562 32.53125 84.179688 31.699219 84.789062 C 31.671875 84.8125 31.640625 84.832031 31.613281 84.855469 L 21.273438 92.929688 L 19.472656 90.355469 C 18.878906 89.511719 17.714844 89.304688 16.871094 89.894531 C 16.023438 90.488281 15.820312 91.652344 16.410156 92.496094 Z M 19.359375 96.714844 " />
                                                        <path d="M 19.359375 116.171875 C 19.652344 116.585938 20.101562 116.867188 20.601562 116.945312 L 20.878906 116.945312 C 21.289062 116.9375 21.691406 116.796875 22.023438 116.546875 L 33.910156 107.25 C 34.785156 106.703125 35.046875 105.546875 34.5 104.675781 C 33.945312 103.800781 32.792969 103.546875 31.921875 104.09375 C 31.816406 104.160156 31.714844 104.238281 31.625 104.328125 L 21.285156 112.414062 L 19.480469 109.839844 C 18.890625 108.992188 17.726562 108.789062 16.882812 109.378906 C 16.039062 109.96875 15.828125 111.132812 16.421875 111.976562 Z M 19.359375 116.171875 " />
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="media-body">
                                                <h5 class="fw-medium">{{ $reponses_users }}</h5>
                                                <p class="fs-15">Réponses</p>
                                            </div>
                                        </div>
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column-half">
                                        <div class="media media-card align-items-center shadow-none border border-gray p-3">
                                            <div class="icon-element icon-element-sm mr-3 bg-2">
                                                <svg class="svg-icon-color-white" width="25" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 512 512" xml:space="preserve">
                                                    <g>
                                                        <g>
                                                            <g>
                                                                <path d="M405.333,42.667h-44.632c-4.418-12.389-16.147-21.333-30.035-21.333h-32.229C288.417,8.042,272.667,0,256,0
                                                                    s-32.417,8.042-42.438,21.333h-32.229c-13.888,0-25.617,8.944-30.035,21.333h-44.631C83.146,42.667,64,61.802,64,85.333v384
                                                                    C64,492.865,83.146,512,106.667,512h298.667C428.854,512,448,492.865,448,469.333v-384C448,61.802,428.854,42.667,405.333,42.667
                                                                    z M170.667,53.333c0-5.885,4.792-10.667,10.667-10.667h37.917c3.792,0,7.313-2.021,9.208-5.302
                                                                    c5.854-10.042,16.146-16.031,27.542-16.031s21.688,5.99,27.542,16.031c1.896,3.281,5.417,5.302,9.208,5.302h37.917
                                                                    c5.875,0,10.667,4.781,10.667,10.667V64c0,11.76-9.563,21.333-21.333,21.333H192c-11.771,0-21.333-9.573-21.333-21.333V53.333z
                                                                     M426.667,469.333c0,11.76-9.563,21.333-21.333,21.333H106.667c-11.771,0-21.333-9.573-21.333-21.333v-384
                                                                    c0-11.76,9.563-21.333,21.333-21.333h42.667c0,23.531,19.146,42.667,42.667,42.667h128c23.521,0,42.667-19.135,42.667-42.667
                                                                    h42.667c11.771,0,21.333,9.573,21.333,21.333V469.333z" />
                                                                <path d="M160,170.667c-17.646,0-32,14.354-32,32c0,17.646,14.354,32,32,32s32-14.354,32-32
                                                                    C192,185.021,177.646,170.667,160,170.667z M160,213.333c-5.875,0-10.667-4.781-10.667-10.667
                                                                    c0-5.885,4.792-10.667,10.667-10.667s10.667,4.781,10.667,10.667C170.667,208.552,165.875,213.333,160,213.333z" />
                                                                <path d="M160,277.333c-17.646,0-32,14.354-32,32c0,17.646,14.354,32,32,32s32-14.354,32-32
                                                                    C192,291.688,177.646,277.333,160,277.333z M160,320c-5.875,0-10.667-4.781-10.667-10.667c0-5.885,4.792-10.667,10.667-10.667
                                                                    s10.667,4.781,10.667,10.667C170.667,315.219,165.875,320,160,320z" />
                                                                <path d="M160,384c-17.646,0-32,14.354-32,32c0,17.646,14.354,32,32,32s32-14.354,32-32C192,398.354,177.646,384,160,384z
                                                                     M160,426.667c-5.875,0-10.667-4.781-10.667-10.667c0-5.885,4.792-10.667,10.667-10.667s10.667,4.781,10.667,10.667
                                                                    C170.667,421.885,165.875,426.667,160,426.667z" />
                                                                <path d="M373.333,192h-128c-5.896,0-10.667,4.771-10.667,10.667c0,5.896,4.771,10.667,10.667,10.667h128
                                                                    c5.896,0,10.667-4.771,10.667-10.667C384,196.771,379.229,192,373.333,192z" />
                                                                <path d="M373.333,298.667h-128c-5.896,0-10.667,4.771-10.667,10.667c0,5.896,4.771,10.667,10.667,10.667h128
                                                                    c5.896,0,10.667-4.771,10.667-10.667C384,303.438,379.229,298.667,373.333,298.667z" />
                                                                <path d="M373.333,405.333h-128c-5.896,0-10.667,4.771-10.667,10.667c0,5.896,4.771,10.667,10.667,10.667h128
                                                                    c5.896,0,10.667-4.771,10.667-10.667C384,410.104,379.229,405.333,373.333,405.333z" />
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="media-body">
                                                <h5 class="fw-medium">{{ $questions_users }}</h5>
                                                <p class="fs-15">Questions</p>
                                            </div>
                                        </div>
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column-half">
                                        <div class="media media-card align-items-center shadow-none border border-gray p-3">
                                            <div class="icon-element icon-element-sm mr-3 bg-3">
                                                <svg class="svg-icon-color-white" viewBox="0 0 24 24" width="25" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="m11.861 19.066c-.128 0-.256-.049-.354-.146l-6.427-6.427c-.188-.188-.196-.489-.02-.687l4.817-5.396c3.367-3.939 8.85-6.488 13.631-6.407.267.006.482.221.488.488.111 4.784-2.467 10.264-6.416 13.638l-5.387 4.81c-.094.085-.214.127-.332.127zm-5.74-6.946 5.759 5.759 5.043-4.502c3.606-3.082 6.001-7.994 6.075-12.375-4.381.073-9.292 2.468-12.368 6.066z" />
                                                    <path d="m13.776 22.726c-.048 0-.097-.007-.143-.022-.18-.06-.328-.198-.354-.386l-.686-4.787c-.039-.273.151-.526.424-.566.273-.043.526.15.566.424l.536 3.74c1.752-2.095 2.726-4.751 2.726-7.459 0-.276.224-.5.5-.5s.5.224.5.5c0 3.313-1.342 6.556-3.682 8.895-.1.1-.246.161-.387.161z" />
                                                    <path d="m6.541 11.412c-.023 0-.047-.001-.071-.005l-4.787-.686c-.188-.027-.345-.158-.404-.339-.059-.18-.011-.379.124-.512 2.373-2.373 5.615-3.715 8.928-3.715.276 0 .5.224.5.5s-.224.5-.5.5c-2.721 0-5.391.983-7.464 2.725l3.745.537c.273.04.463.292.424.566-.037.249-.251.429-.495.429z" />
                                                    <path d="m17.133 9.366c-.641 0-1.281-.244-1.768-.731-.974-.975-.974-2.561 0-3.536.975-.975 2.561-.975 3.536 0 .974.975.974 2.561 0 3.536-.488.488-1.128.731-1.768.731zm0-3.998c-.384 0-.769.146-1.061.438-.584.585-.584 1.537 0 2.122.585.584 1.537.583 2.122 0 .584-.585.584-1.537 0-2.122-.293-.291-.677-.438-1.061-.438zm1.414 2.914h.01z" />
                                                    <path d="m.5 24c-.131 0-.258-.051-.354-.146-.13-.13-.178-.321-.125-.497.164-.547 1.633-5.381 2.703-6.451 1.205-1.205 3.166-1.206 4.371 0 1.205 1.205 1.205 3.166 0 4.371-1.07 1.07-5.904 2.539-6.451 2.703-.048.013-.096.02-.144.02zm4.41-6.999c-.536 0-1.071.204-1.479.611-.577.578-1.537 3.159-2.171 5.128 1.968-.634 4.55-1.594 5.127-2.171.815-.815.815-2.142 0-2.957-.407-.407-.942-.611-1.477-.611z" />
                                                </svg>
                                            </div>
                                            <div class="media-body">
                                                <h5 class="fw-medium">{{ $votes_users }}</h5>
                                                <p class="fs-15">Votes apportés</p>
                                            </div>
                                        </div>
                                    </div><!-- end col-lg-4 -->
                                </div><!-- end row -->
                            </div><!-- end user-panel -->
                        </div><!-- end user-panel-main-bar -->
                    </div><!-- end tab-pane -->
                    <div class="tab-pane fade" id="user-activity" role="tabpanel" aria-labelledby="user-activity-tab">
                        <div class="user-panel-main-bar">
                            <div class="user-panel mb-10px">
                                <div class="bg-gray p-3 rounded-rounded mb-3">
                                    <h3 class="fs-17">Impact</h3>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="media media-card align-items-center shadow-none border border-gray p-3 text-center">
                                            <div class="media-body">
                                                <h5 class="fw-medium">{{ $questions_users }}</h5>
                                                <p class="fs-15">Questions posées</p>
                                            </div>
                                        </div>
                                    </div><!-- end col-lg-3 -->
                                    <div class="col-lg-4">
                                        <div class="media media-card align-items-center shadow-none border border-gray p-3 text-center">
                                            <div class="media-body">
                                                <h5 class="fw-medium">{{ $reponses_users }}</h5>
                                                <p class="fs-15">Réponses apportées</p>
                                            </div>
                                        </div>
                                    </div><!-- end col-lg-3 -->
                                    <div class="col-lg-4">
                                        <div class="media media-card align-items-center shadow-none border border-gray p-3 text-center">
                                            <div class="media-body">
                                                <h5 class="fw-medium">{{ $votes_users }}</h5>
                                                <p class="fs-15">votes apportées</p>
                                            </div>
                                        </div>
                                    </div><!-- end col-lg-3 -->
                                </div><!-- end row -->
                            </div><!-- end user-panel -->
                            <div class="user-panel mb-40px">
                                <div class="bg-gray p-3 rounded-rounded d-flex align-items-center justify-content-between">
                                    <h3 class="fs-15 fw-regular">Réponses <span>({{ $reponses_users }})</span></h3>
                                    <div class="filter-option-box flex-grow-1 d-flex align-items-center justify-content-end lh-1">
                                        <label class="fs-14 fw-medium mr-2 mb-0">Filtrer</label>
                                        <div class="w-100px">
                                            <select class="select-container">
                                                <option selected="selected" value="Votes">Votes</option>
                                                <option value="Activity">Activity</option>
                                                <option value="Newest">Newest</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="summary-panel">
                                    <div class="vertical-list">
                                        @foreach($reponses_items as $item)
                                        <div class="item post p-0">
                                            <div class="media media-card media--card align-items-center shadow-none rounded-0 mb-0 bg-transparent">
                                                <div class="votes answered-accepted">
                                                    <div class="vote-block" title="Votes">
                                                        <span class="vote-counts">{{$item->votes_count}}</span>
                                                    </div>
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="fs-15">{{$item->contenu}}</h5>
                                                </div>
                                            </div><!-- end media -->
                                        </div><!-- end item -->
                                        @endforeach
                                        {{ $reponses_items->links() }}
                                    </div>
                                </div><!-- end summary-panel -->
                            </div><!-- end user-panel -->
                            <div class="user-panel mb-40px">
                                <div class="bg-gray p-3 rounded-rounded d-flex align-items-center justify-content-between">
                                    <h3 class="fs-17">Questions <span>({{ $questions_users }})</span></h3>
                                    <div class="filter-option-box flex-grow-1 d-flex align-items-center justify-content-end lh-1">
                                        <label class="fs-14 fw-medium mr-2 mb-0">Filtrer</label>
                                        <div class="w-100px">
                                            <select class="select-container">
                                                <option selected="selected" value="Votes">Votes</option>
                                                <option value="Activity">Activity</option>
                                                <option value="Newest">Newest</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="summary-panel">
                                    <div class="vertical-list">
                                        @foreach($questions_items as $item)
                                        <div class="item post p-0">
                                            <div class="media media-card media--card align-items-center shadow-none rounded-0 mb-0 bg-transparent">
                                                <div class="media-body">
                                                    <h5 class="fs-15"><a href="{{ route('showQuestion', ['id' => $item->id]) }}">{{$item->titre}}</a></h5>
                                                </div>
                                            </div><!-- end media -->
                                        </div><!-- end item -->
                                        @endforeach

                                        {{ $questions_items->links() }}
                                    </div>
                                </div><!-- end summary-panel -->
                            </div><!-- end user-panel -->
                            <div class="user-panel mb-40px">
                                <div class="bg-gray p-3 rounded-rounded">
                                    <h3 class="fs-17">Tags <span>(4,654)</span></h3>
                                </div>
                                <div class="summary-panel">
                                    <div class="vertical-list">
                                        <div class="item tags d-flex align-items-center">
                                            <span class="tag-stat mr-2 fs-14">244k</span>
                                            <div class="flex-grow-1">
                                                <a href="#" class="tag-link tag-link-md tag-link-blue mb-0 lh-20">c#</a>
                                            </div>
                                            <span class="item-multiplier fs-14">
                                                <span>×</span>
                                                <span>19616</span>
                                            </span>
                                        </div><!-- item -->
                                        <div class="item tags d-flex align-items-center">
                                            <span class="tag-stat mr-2 fs-14">146k</span>
                                            <div class="flex-grow-1">
                                                <a href="#" class="tag-link tag-link-md tag-link-blue mb-0 lh-20">java</a>
                                            </div>
                                            <span class="item-multiplier fs-14">
                                                <span>×</span>
                                                <span>10512</span>
                                            </span>
                                        </div><!-- item -->
                                        <div class="item tags d-flex align-items-center">
                                            <span class="tag-stat mr-2 fs-14">89k</span>
                                            <div class="flex-grow-1">
                                                <a href="#" class="tag-link tag-link-md tag-link-blue mb-0 lh-20">.net</a>
                                            </div>
                                            <span class="item-multiplier fs-14">
                                                <span>×</span>
                                                <span>5569</span>
                                            </span>
                                        </div><!-- item -->
                                        <div class="item tags d-flex align-items-center">
                                            <span class="tag-stat mr-2 fs-14">34k</span>
                                            <div class="flex-grow-1">
                                                <a href="#" class="tag-link tag-link-md tag-link-blue mb-0 lh-20">linq</a>
                                            </div>
                                            <span class="item-multiplier fs-14">
                                                <span>×</span>
                                                <span>2982</span>
                                            </span>
                                        </div><!-- item -->
                                        <div class="item tags d-flex align-items-center">
                                            <span class="tag-stat mr-2 fs-14">23k</span>
                                            <div class="flex-grow-1">
                                                <a href="#" class="tag-link tag-link-md tag-link-blue mb-0 lh-20">string</a>
                                            </div>
                                            <span class="item-multiplier fs-14">
                                                <span>×</span>
                                                <span>999</span>
                                            </span>
                                        </div><!-- item -->
                                        <div class="pager pt-30px">
                                            <nav aria-label="Page navigation example">
                                                <ul class="pagination generic-pagination generic--pagination">
                                                    <li class="page-item">
                                                        <a class="page-link" href="#" aria-label="Previous">
                                                            <span aria-hidden="true"><i class="la la-arrow-left"></i></span>
                                                            <span class="sr-only">Previous</span>
                                                        </a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#" aria-label="Next">
                                                            <span aria-hidden="true"><i class="la la-arrow-right"></i></span>
                                                            <span class="sr-only">Next</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </nav>
                                            <p class="fs-13 pt-2">Showing 1-5 of (4,654) results</p>
                                        </div>
                                    </div>
                                </div><!-- end summary-panel -->
                            </div><!-- end user-panel -->
                        </div><!-- end user-panel-main-bar -->
                    </div><!-- end tab-pane -->
                    <div class="tab-pane fade" id="user-favoris" role="tabpanel" aria-labelledby="user-favoris-tab">
                        <div class="user-panel-main-bar">
                            <div class="user-panel mb-40px">
                                <div class="bg-gray p-3 rounded-rounded d-flex align-items-center justify-content-between">
                                    <h3 class="fs-17">Mes questions favorites <span>({{ $fav_count }})</span></h3>
                                </div>
                                <div class="summary-panel">
                                    <div class="vertical-list">
                                        @foreach($questions_fav as $item)
                                        <div class="item post p-0">
                                            <div class="media media-card media--card align-items-center shadow-none rounded-0 mb-0 bg-transparent">
                                                <div class="media-body">
                                                    <h5 class="fs-15"><a href="{{ route('showQuestion', ['id' => $item->id]) }}">{{$item->questions->titre}}</a></h5>
                                                </div>
                                            </div><!-- end media -->
                                        </div><!-- end item -->
                                        @endforeach

                                        {{ $questions_fav->links() }}
                                    </div>
                                </div><!-- end summary-panel -->
                            </div><!-- end user-panel -->
                        </div><!-- end user-panel-main-bar -->
                    </div><!-- end tab-pane -->
                </div>
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
</section><!-- end user-details-area -->
<!-- ================================
         END USER DETAILS AREA
================================= -->

@endsection