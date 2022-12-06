@extends('layouts.default')

@section('content')

@if(Auth::user())
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <form method="POST" action="{{ url('/profilePost/'.$b->id) }}" enctype="multipart/form-data">
                    {{csrf_field() }}
                    @method('PUT')

                    <div class="form-floating">
                        <input class="form-control" name="name" id="name" type="text" value="{{$b->name}}" required />
                        <label for="name">Name</label>
                    </div>
                    <div class="form-floating">
                        <input class="form-control" name="email" id="name" type="mail"  disabled  value="{{$b->email}}">
                        <label for="name">Email</label>
                    </div>
                    <div class="form-floating">
                        <input class="form-control" name="from" id="name" type="text" value="{{$b->from}}" required />
                        <label for="name">From</label>
                    </div>
                    <div class="form-floating">
                        <input class="form-control" name="about" id="name" type="text" value="{{$b->about}}" required />
                        <label for="name">About</label>
                    </div><br>
                    <div class="form-floating"><br>
                        <input class="form-control" name="userImages" id="name" value="{{$b->userImages}}" required type="file"  />
                        <label for="name">Select File</label>
                        <br>
                        <img src="/images/{{$b->userImage}}" alt="Generic placeholder image" class="img-fluid img-thumbnail mt-4 mb-2" style="width: 150px; z-index: 1"></li>

                    </div>
                    <br>
                    <button class="btn btn-success bg-primary" type="submit">Save</button>
                </form>
                <br>
                <br>


                <br>
                <br>
            </div>
        </div>
    </div>
@endif
@endsection
