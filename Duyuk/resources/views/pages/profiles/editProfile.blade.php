@extends('layouts.default')

@section('content')

@if(Auth::user())
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <form method="POST" action="{{ url('/entryEditPost/'.$yaz->id) }}" enctype="multipart/form-data">
                    {{csrf_field() }}
                    @method('PUT')

                    <div class="form-floating">
                        <input class="form-control" name="title" id="name" type="text" value="{{$yaz->title}}" required />
                        <label for="name">Title</label>
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control" name="content" id="name" type="text"  required> {{$yaz->content}}</textarea>
                        <label for="name">Content (255)</label>
                    </div>
                    <div class="form-floating">
                        <input class="form-control" name="imageEntry" id="name" value="{{$yaz->imageEntry}}" required type="file"  />
                        <label for="name">Select File</label>
                        <br>
                        <img src="/images/{{ $yaz->imageEntry }}" style="width: 100px; height:100px">
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
