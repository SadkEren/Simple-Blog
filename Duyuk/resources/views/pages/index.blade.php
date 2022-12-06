@extends('layouts.default')
@section('title')

@section('content')
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">

                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-daily" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Daily</button>
                          </li>
                          <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-Sports" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Sports</button>
                          </li>
                          {{-- <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Politics</button>
                          </li> --}}
                      </ul>

                        {{-- Daily --}}
                      <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-daily" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">

                            @foreach ($yaz as $a)
                            <div class="post-preview">
                            <a href="" >
                                <h2 class="post-title"><b>{{ $a->title}}</b></h2>
                                <h3 class="post-subtitle">{{ $a->content}}</h3>
                            </a>
                            <p class="post-meta">
                                Posted by
                                <a href="{{url('/userProfile',$a->user_id) }}">{{ $a->user_name}}</a> | {{ $a->created_at}}
                            </p>
                            </div>
                            <hr class="my-4" />
                            @endforeach

                            <div class="row">{{$yaz->links()}}</div>
                        </div>

                        {{-- Sports --}}
                        <div class="tab-pane fade" id="pills-Sports" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                            @foreach ($yaz2 as $a2)
                            <div class="post-preview">
                            <a href="" data-toggle="modal" data-target="#ModalShow2">
                                <h2 class="post-title"><b>{{ $a2->title}}</b></h2>
                                <h3 class="post-subtitle">{{ $a2->content}}</h3>
                            </a>
                            <p class="post-meta">
                                Posted by
                                <a href={{url('userProfile',$a2->user_id) }}>{{ $a2->user_name}}</a> | {{ $a2->created_at}}
                            </p>
                            </div>
                            <hr class="my-4" />
                            @endforeach
                            <div class="row">{{$yaz2->links()}}</div>

                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">...</div>
                      </div>
                    <br>
                </div>
            </div>
        </div>
@endsection

