@extends('layouts.default')

@section('content')

@if(Auth::user())
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">


                {{-- Bunu düz yazdır. Foreach siz ! --}}
                <ul class="list-group list-group-flush">

                    Name : <li class="list-group-item">{{$b->name}}</li>
                    Email : <li class="list-group-item">{{$b->email}}</li>
                    From : <li class="list-group-item"> {{$b->from}} </li>
                    About :<li class="list-group-item">{{$b->about}}</li>
                    User Image :<li class="list-group-item"> <img src="/images/{{$b->userImage}}" alt="Generic placeholder image" class="img-fluid img-thumbnail mt-4 mb-2" style="width: 150px; z-index: 1"></li>

                </ul>
                <br>
                <a class="btn btn-info" type="submit" href="{{ url('profileGet',[$b->id]) }}">Edit Profile</a>

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
                            <td> <img src="/images/{{$a->imageEntry}}" alt="Generic placeholder image" class="img-fluid img-thumbnail mt-4 mb-2" style="width: 150px; z-index: 1"></td>
                            <td>{{$a->title}}</td>
                            <td>
                                <a class="btn btn-info" href="{{url('entryEditGet',['id'=>$a->id]) }}"> Edit</a>
                                <a class="btn btn-danger" href="{{url('entrySil',['id'=>$a->id]) }}"> Delete</a>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                  </table>

                  <div class="row">{{$yaz->links()}}</div>

                <br>
                <br>
            </div>
        </div>
    </div>
@endif
@endsection
