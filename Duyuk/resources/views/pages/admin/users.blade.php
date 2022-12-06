@extends('layouts.defaults2')

@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Add Something else</a>
    </div>
    <div class="row">
        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">All Users</h6>
                    <div class="dropdown no-arrow">

                    </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-area">

                    @can('isAdmin')

                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>User Name</th>
                                        <th>Email</th>
                                        <th>About</th>
                                        <th>From</th>
                                        <th>Role</th>
                                        <th>Create Date</th>
                                        <th>Durum</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>User Name</th>
                                        <th>Email</th>
                                        <th>About</th>
                                        <th>From</th>
                                        <th>Role</th>
                                        <th>Create Date</th>
                                        <th>Durum</th>
                                        <th>Durum</th>

                                        <th></th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach ($yaz as $a)
                                    <tr>
                                        <td>{{$a->name}}</td>
                                        <td>{{$a->email}}</td>
                                        <td>{{$a->about}}</td>
                                        <td>{{$a->from}}</td>
                                        <td><i>*{{$a->role}}</i></td>
                                        <td>{{$a->created_at}}</td>
                                        <td>{{$a->ban}}</td>
                                        <td>{{$a->userImage}}</td>
                                        <td>
                                           <a class="btn btn-danger"  href="{{url('usersDelete',[$a->id])}}" >Delete</a>
                                           <a class="btn btn-success" href="{{url('usersGetEdit',[$a->id])}}">Edit</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endcan


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection
