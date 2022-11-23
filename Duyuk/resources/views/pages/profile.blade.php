@extends('layouts.default')

@section('content')

@if(Auth::user())
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">

                <br>
                <br>

                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Image</th>
                        <th scope="col">title</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>

                        @foreach ($yaz as $a)
                        <tr>
                            <td><img src="/images/{{ $a->imageEntry }}" style="width: 100px; height:100px"></td>
                            <td>{{$a->title}}</td>
                            <td>
                                <a class="btn btn-info" href="{{url('entryEditGet',['id'=>$a->id]) }}"> Edit</a>
                                <a class="btn btn-danger" href="{{url('entrySil',['id'=>$a->id]) }}"> Delete</a>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                  </table>

                <br>
                <br>
            </div>
        </div>
    </div>
@endif
@endsection
