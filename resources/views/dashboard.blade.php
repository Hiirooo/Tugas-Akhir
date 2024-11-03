@extends('layouts.app')

@section('content')
    <main class="app-main"> <!--begin::App Content Header-->
        <div class="app-content-header"> <!--begin::Container-->
            <div class="container-fluid"> <!--begin::Row-->
                <div class="row">
                    <div class="col-sm-6">
                        <h3 class="mb-0">Dashboard</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-end">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Dashboard
                            </li>
                        </ol>
                    </div>
                </div> <!--end::Row-->
            </div> <!--end::Container-->
        </div>
        <div class="app-content"> <!--begin::Container-->
            <div class="container-fluid"> <!-- Info boxes -->
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box"> <span class="info-box-icon text-bg-primary shadow-sm"> <i
                                    class="bi bi-people-fill"></i> </span>
                            <div class="info-box-content"> <span class="info-box-text">Jumlah Guru</span> <span
                                    class="info-box-number">
                                    10
                                    <small>user</small> </span> </div> <!-- /.info-box-content -->
                        </div> <!-- /.info-box -->
                    </div> <!-- /.col -->
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box"> <span class="info-box-icon text-bg-info shadow-sm"> <i
                                    class="bi bi-building-fill"></i> </span>
                            <div class="info-box-content"> <span class="info-box-text">Kelas</span> <span
                                    class="info-box-number">12</span> </div> <!-- /.info-box-content -->
                        </div> <!-- /.info-box -->
                    </div> <!-- /.col --> <!-- fix for small devices only -->
                    <!-- <div class="clearfix hidden-md-up"></div> -->
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box"> <span class="info-box-icon text-bg-success shadow-sm"> <i
                                    class="bi bi-person-square"></i> </span>
                            <div class="info-box-content"> <span class="info-box-text">Jumlah Siswa Aktif</span> <span
                                    class="info-box-number">330</span> </div> <!-- /.info-box-content -->
                        </div> <!-- /.info-box -->
                    </div> <!-- /.col -->
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box"> <span class="info-box-icon text-bg-warning shadow-sm"> <i
                                    class="bi bi-person-video3"></i> </span>
                            <div class="info-box-content"> <span class="info-box-text">Jumlah Alumni</span> <span
                                    class="info-box-number">1200</span> </div> <!-- /.info-box-content -->
                        </div> <!-- /.info-box -->
                    </div> <!-- /.col -->
                </div> <!-- /.row --> <!--begin::Row-->
                <div class="card mb-4">
                    <div class="card-header border-0">
                        <h3 class="card-title">Data Log Aktifitas User</h3>
                        <div class="card-tools"> <a href="#" class="btn btn-tool btn-sm"> <i
                                    class="bi bi-download"></i> </a> <a href="#" class="btn btn-tool btn-sm"> <i
                                    class="bi bi-list"></i> </a> </div>
                    </div>
                    <div class="card-body table-responsive p-0">
                        <table class="table table-striped align-middle">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Role</th>
                                    <th>Keterangan</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td> <img src="{{ asset('adminlte') }}/dist/assets/img/default-150x150.png"
                                            alt="Product 1" class="rounded-circle img-size-32 me-2">
                                        Some Product
                                    </td>
                                    <td>$13 USD</td>
                                    <td> <small class="text-success me-1"> <i class="bi bi-arrow-up"></i>
                                            12%
                                        </small>
                                        12,000 Sold
                                    </td>
                                    <td> <a href="#" class="text-secondary"> <i class="bi bi-search"></i> </a> </td>
                                </tr>
                                <tr>
                                    <td> <img src="{{ asset('adminlte') }}/dist/assets/img/default-150x150.png"
                                            alt="Product 1" class="rounded-circle img-size-32 me-2">
                                        Another Product
                                    </td>
                                    <td>$29 USD</td>
                                    <td> <small class="text-info me-1"> <i class="bi bi-arrow-down"></i>
                                            0.5%
                                        </small>
                                        123,234 Sold
                                    </td>
                                    <td> <a href="#" class="text-secondary"> <i class="bi bi-search"></i> </a> </td>
                                </tr>
                                <tr>
                                    <td> <img src="{{ asset('adminlte') }}/dist/assets/img/default-150x150.png"
                                            alt="Product 1" class="rounded-circle img-size-32 me-2">
                                        Amazing Product
                                    </td>
                                    <td>$1,230 USD</td>
                                    <td> <small class="text-danger me-1"> <i class="bi bi-arrow-down"></i>
                                            3%
                                        </small>
                                        198 Sold
                                    </td>
                                    <td> <a href="#" class="text-secondary"> <i class="bi bi-search"></i> </a> </td>
                                </tr>
                                <tr>
                                    <td> <img src="{{ asset('adminlte') }}/dist/assets/img/default-150x150.png"
                                            alt="Product 1" class="rounded-circle img-size-32 me-2">
                                        Perfect Item
                                        <span class="badge text-bg-danger">NEW</span>
                                    </td>
                                    <td>$199 USD</td>
                                    <td> <small class="text-success me-1"> <i class="bi bi-arrow-up"></i>
                                            63%
                                        </small>
                                        87 Sold
                                    </td>
                                    <td> <a href="#" class="text-secondary"> <i class="bi bi-search"></i> </a> </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Bordered Table</h3>
                    </div> <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Task</th>
                                    <th>Progress</th>
                                    <th style="width: 40px">Label</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="align-middle">
                                    <td>1.</td>
                                    <td>Update software</td>
                                    <td>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                                        </div>
                                    </td>
                                    <td><span class="badge text-bg-danger">55%</span></td>
                                </tr>
                                <tr class="align-middle">
                                    <td>2.</td>
                                    <td>Clean database</td>
                                    <td>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar text-bg-warning" style="width: 70%"></div>
                                        </div>
                                    </td>
                                    <td> <span class="badge text-bg-warning">70%</span> </td>
                                </tr>
                                <tr class="align-middle">
                                    <td>3.</td>
                                    <td>Cron job running</td>
                                    <td>
                                        <div class="progress progress-xs progress-striped active">
                                            <div class="progress-bar text-bg-primary" style="width: 30%"></div>
                                        </div>
                                    </td>
                                    <td> <span class="badge text-bg-primary">30%</span> </td>
                                </tr>
                                <tr class="align-middle">
                                    <td>4.</td>
                                    <td>Fix and squish bugs</td>
                                    <td>
                                        <div class="progress progress-xs progress-striped active">
                                            <div class="progress-bar text-bg-success" style="width: 90%"></div>
                                        </div>
                                    </td>
                                    <td> <span class="badge text-bg-success">90%</span> </td>
                                </tr>
                            </tbody>
                        </table>
                    </div> <!-- /.card-body -->
                    <div class="card-footer clearfix">
                        <ul class="pagination pagination-sm m-0 float-end">
                            <li class="page-item"> <a class="page-link" href="#">«</a> </li>
                            <li class="page-item"> <a class="page-link" href="#">1</a> </li>
                            <li class="page-item"> <a class="page-link" href="#">2</a> </li>
                            <li class="page-item"> <a class="page-link" href="#">3</a> </li>
                            <li class="page-item"> <a class="page-link" href="#">»</a> </li>
                        </ul>
                    </div>
                </div>
            </div> <!--end::Container-->
        </div> <!--end::App Content-->
    </main> <!--end::App Main-->
@endsection
