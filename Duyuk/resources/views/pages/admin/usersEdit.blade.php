@extends('layouts.defaults2')

@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">User Edit </h1>
    </div>
    <div class="row">
        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">User : {{$yaz->name}}</h6>
                    <div class="dropdown no-arrow">

                    </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">

                    @can('isAdmin')

                    <form class="user" action="{{url('/userEditPost/'.$yaz->id)}}" method="POST" enctype="multipart/form-data">
                        {{csrf_field() }}
                        @method('PUT')

                        <div class="form-group">
                            <h6>Name</h6>
                            <input type="text" name="name" class="form-control form-control-user"
                                id="exampleInputEmail" aria-describedby="emailHelp" required
                               value="{{$yaz->name}}">
                        </div>

                        <div class="form-group">
                            <h6>Email</h6>
                            <input type="text" name="email" class="form-control form-control-user"
                                id="exampleInputEmail" aria-describedby="emailHelp" required
                               value="{{$yaz->email}}">
                        </div>

                        <div class="form-group">
                            <h6>About</h6>
                            <input type="text" name="about" class="form-control form-control-user"
                                id="exampleInputEmail" aria-describedby="emailHelp" required
                               value="{{$yaz->about}}">
                        </div>

                        <div class="form-group">
                            <h6>From</h6>
                            <input type="text" name="from" class="form-control form-control-user"
                                id="exampleInputEmail" aria-describedby="emailHelp" required
                               value="{{$yaz->from}}">
                        </div>

                        <div class="form-group">
                            <h6>Create Time</h6>
                            <h6>{{$yaz->created_at}}</h6>
                        </div>

                         <div class="form-group">
                            <h6>Drumu</h6>
                            <select name="ban" class="form-select" required>
                                <option selected>Status: {{$yaz->ban}}</option>
                                <option value="1">Free / 1</option>
                                <option value="0">Ban / 0</option>
                            </select>
                        </div>

                        <div class="form-floating">
                            <label for="name">Select File</label><br>
                            <input class="form-control" name="userImage" id="name" type="file" required />
                        </div>


                        <div class="form-group">
                            <td>
                                <img src="/images/{{$yaz->userImage}}" alt="Generic placeholder image"
                                class="img-fluid img-thumbnail mt-4 mb-2" style="width: 350px; z-index: 1">
                            </td>
                        </div>

                        <input type="submit" class="btn btn-primary" value="Send">

                    </form>

                    @endcan

                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection
