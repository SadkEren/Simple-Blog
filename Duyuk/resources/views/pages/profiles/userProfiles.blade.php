@extends('layouts.default')

@section('content')

@if(Auth::user())
<section class="h-100 gradient-custom-2">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-lg-9 col-xl-7">
          <div class="card">
            <div class="rounded-top text-white d-flex flex-row" style="background-color: #000; height:200px;">
              <div class="ms-4 mt-5 d-flex flex-column" style="width: 150px;">
                <img src="/images/{{$gel->userImage}}" alt="Generic placeholder image" class="img-fluid img-thumbnail mt-4 mb-2" style="width: 150px; z-index: 1">

                 {{-- @if(Auth::user()->id == $yaz3->user_id )
                    <button type="button" class="btn btn-outline-dark" data-mdb-ripple-color="dark"--
                    style="z-index: 1;">
                    Edit profile
                    </button>
                @endif --}}

              </div>
              <div class="ms-3" style="margin-top: 130px;">
                <h5>{{ $gel->name}}</h5>
                <p>{{ $gel->from}}</p>
              </div>

            </div>
            {{-- Arka plan renginide seçeyim ! --}}
            <div class="p-4 text-black" style="background-color: #f8f9fa;">
              <div class="d-flex justify-content-end text-center py-1">
                <div>
                  <p class="mb-1 h5">253</p>
                  <p class="small text-muted mb-0">Duyuks</p>
                </div>
              </div>
            </div>
            <div class="card-body p-4 text-black">
              <div class="mb-5">
                <p class="lead fw-normal mb-1">About</p>
                <div class="p-4" style="background-color: #f8f9fa;">
                  <p class="font-italic mb-1">{{ $gel->about}}</p>

                </div>
              </div>
              <div class="d-flex justify-content-between align-items-center mb-4">
                <p class="lead fw-normal mb-0"><b>Last Duyuks</b></p>
              </div>
              <div class="row g-2">
                @foreach($yaz2 as $a)
                <div class="col mb-2">
                    <h2><b>{{$a->title}}</b></h2>
                    <p>{{$a->content}}</p>
                    <p class="post-meta">
                        <i>{{ $a->created_at}}</i>
                    </p>
                </div>
                @endforeach
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endif
@endsection
