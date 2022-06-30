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
                                <h3 class="fs-17 pb-3 fw-bold">Suivez moi sur</h3>
                                <a class="mr-1 icon-element icon-element-sm shadow-sm text-gray hover-y d-inline-block" href="http://{{$user_items->website}}" target="_blank" title="Aller sur mon site web">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-globe" viewBox="0 0 16 16">
                                        <path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855A7.97 7.97 0 0 0 5.145 4H7.5V1.077zM4.09 4a9.267 9.267 0 0 1 .64-1.539 6.7 6.7 0 0 1 .597-.933A7.025 7.025 0 0 0 2.255 4H4.09zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a6.958 6.958 0 0 0-.656 2.5h2.49zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5H4.847zM8.5 5v2.5h2.99a12.495 12.495 0 0 0-.337-2.5H8.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5H4.51zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5H8.5zM5.145 12c.138.386.295.744.468 1.068.552 1.035 1.218 1.65 1.887 1.855V12H5.145zm.182 2.472a6.696 6.696 0 0 1-.597-.933A9.268 9.268 0 0 1 4.09 12H2.255a7.024 7.024 0 0 0 3.072 2.472zM3.82 11a13.652 13.652 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5H3.82zm6.853 3.472A7.024 7.024 0 0 0 13.745 12H11.91a9.27 9.27 0 0 1-.64 1.539 6.688 6.688 0 0 1-.597.933zM8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855.173-.324.33-.682.468-1.068H8.5zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.65 13.65 0 0 1-.312 2.5zm2.802-3.5a6.959 6.959 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5h2.49zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7.024 7.024 0 0 0-3.072-2.472c.218.284.418.598.597.933zM10.855 4a7.966 7.966 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4h2.355z" />
                                    </svg>
                                </a>
                                <a class="mr-1 icon-element icon-element-sm shadow-sm text-gray hover-y d-inline-block" href="http://{{$user_items->facebooklink}}" target="_blank" title="Suivez moi sur Facebook">
                                    <svg focusable="false" class="svg-inline--fa fa-facebook-f fa-w-10" width="16px" height="16px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                        <path fill="currentColor" d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"></path>
                                    </svg>
                                </a>
                                <a class="mr-1 icon-element icon-element-sm shadow-sm text-gray hover-y d-inline-block" href="http://{{$user_items->twitterlink}}" target="_blank" title="Suivez moi sur Twitter">
                                    <svg focusable="false" class="svg-inline--fa fa-twitter fa-w-16" width="16px" height="16px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path fill="currentColor" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path>
                                    </svg>
                                </a>
                                <a class="mr-1 icon-element icon-element-sm shadow-sm text-gray hover-y d-inline-block" href="http://{{$user_items->instalink}}" target="_blank" title="Suivez moi sur Instagram">
                                    <svg focusable="false" class="svg-inline--fa fa-instagram-square fa-w-14" width="16px" height="16px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <path fill="currentColor" d="M224,202.66A53.34,53.34,0,1,0,277.36,256,53.38,53.38,0,0,0,224,202.66Zm124.71-41a54,54,0,0,0-30.41-30.41c-21-8.29-71-6.43-94.3-6.43s-73.25-1.93-94.31,6.43a54,54,0,0,0-30.41,30.41c-8.28,21-6.43,71.05-6.43,94.33S91,329.26,99.32,350.33a54,54,0,0,0,30.41,30.41c21,8.29,71,6.43,94.31,6.43s73.24,1.93,94.3-6.43a54,54,0,0,0,30.41-30.41c8.35-21,6.43-71.05,6.43-94.33S357.1,182.74,348.75,161.67ZM224,338a82,82,0,1,1,82-82A81.9,81.9,0,0,1,224,338Zm85.38-148.3a19.14,19.14,0,1,1,19.13-19.14A19.1,19.1,0,0,1,309.42,189.74ZM400,32H48A48,48,0,0,0,0,80V432a48,48,0,0,0,48,48H400a48,48,0,0,0,48-48V80A48,48,0,0,0,400,32ZM382.88,322c-1.29,25.63-7.14,48.34-25.85,67s-41.4,24.63-67,25.85c-26.41,1.49-105.59,1.49-132,0-25.63-1.29-48.26-7.15-67-25.85s-24.63-41.42-25.85-67c-1.49-26.42-1.49-105.61,0-132,1.29-25.63,7.07-48.34,25.85-67s41.47-24.56,67-25.78c26.41-1.49,105.59-1.49,132,0,25.63,1.29,48.33,7.15,67,25.85s24.63,41.42,25.85,67.05C384.37,216.44,384.37,295.56,382.88,322Z"></path>
                                    </svg>
                                </a>
                                <a class="mr-1 icon-element icon-element-sm shadow-sm text-gray hover-y d-inline-block" href="http://{{$user_items->youtubelink}}" target="_blank" title="Suivez moi sur youtube">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                                        <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
                                    </svg>
                                </a>
                                <a class="mr-1 icon-element icon-element-sm shadow-sm text-gray hover-y d-inline-block" href="http://{{$user_items->githublink}}" target="_blank" title="Visitez mon profil github">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                                        <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                                    </svg>
                                </a>
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
                                                <p class="fs-15">votes apportés</p>
                                            </div>
                                        </div>
                                    </div><!-- end col-lg-3 -->
                                </div><!-- end row -->
                            </div><!-- end user-panel -->
                            <div class="user-panel mb-40px">
                                <div class="bg-gray p-3 rounded-rounded d-flex align-items-center justify-content-between">
                                    <h3 class="fs-15 fw-regular">Réponses <span>({{ $reponses_users }})</span></h3>
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