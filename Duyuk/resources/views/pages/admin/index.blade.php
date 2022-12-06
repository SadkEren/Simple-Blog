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
                    <h6 class="m-0 font-weight-bold text-primary">All Duyuks</h6>
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
                                        <th>Entry id</th>
                                        <th>Title</th>
                                        <th>imageEntry</th>
                                        <th>Date</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>User Name</th>
                                        <th>Entry id</th>
                                        <th>Title</th>
                                        <th>imageEntry</th>
                                        <th>Date</th>
                                        <th></th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                        <td>
                                            <button class="btn btn-primary btn-sm">Düzenle</button>
                                            <button class="btn btn-primary btn-sm">Sil</button>
                                        </td>
                                    </tr>
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
