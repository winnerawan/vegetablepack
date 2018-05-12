@extends('admin.layout.template')

@section('content')

    <!-- Main Content -->
    <div class="page-wrapper">
        <div class="container-fluid">

            <!-- Title -->
            <div class="row heading-bg">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h5 class="txt-dark">Mitra</h5>
                </div>
                <!-- Breadcrumb -->
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <ol class="breadcrumb">
                        <li><a href="{{ url('/admin/home') }}">Dashboard</a></li>
                        <li><a href="#"><span>table</span></a></li>
                        <li class="active"><span>Mitra</span></li>
                    </ol>
                </div>
                <!-- /Breadcrumb -->
            </div>
            <!-- /Title -->

            <!-- Row -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-default card-view">
                        <div class="panel-wrapper collapse in">
                            <a href="{{url('admin/merchants/create')}}" class="btn  btn-success">Buat Mitra Baru</a>
                            <div class="panel-body">
                                <div class="table-wrap">
                                    <div class="table-responsive">
                                        <table id="example" class="table table-hover display  pb-30" >
                                            <thead>
                                            <tr>
                                                <th>Email</th>
                                                <th>Nama</th>
                                                <th>Terdaftar Tanggal</th>
                                            </tr>
                                            </thead>
                                            <tfoot>

                                            </tfoot>
                                            <tbody>
                                            @foreach ($merchants as $merchant)
                                            <tr>
                                                <td>{{ $merchant->email }}</td>
                                                <td>{{ $merchant->name }}</td>
                                                <td>{{ $merchant->created_at }}</td>

                                            </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Row -->
        </div>


    @include('admin.layout.footer')

@endsection
