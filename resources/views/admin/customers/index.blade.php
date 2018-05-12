@extends('admin.layout.template')

@section('content')

    <!-- Main Content -->
    <div class="page-wrapper">
        <div class="container-fluid">

            <!-- Title -->
            <div class="row heading-bg">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h5 class="txt-dark">Pelanggan</h5>
                </div>
                <!-- Breadcrumb -->
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <ol class="breadcrumb">
                        <li><a href="{{ url('/admin/home') }}">Dashboard</a></li>
                        <li><a href="#"><span>data</span></a></li>
                        <li class="active"><span>Pelanggan</span></li>
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
                            <a href="{{url('admin/customers/create')}}" class="btn  btn-success">Buat Pelanggan Baru</a>
                            <div class="panel-body">
                                <div class="table-wrap">
                                    <div class="table-responsive">
                                        <table id="example" class="table table-hover display  pb-30" >
                                            <thead>
                                            <tr>
                                                <th>Email</th>
                                                <th>Nama</th>
                                                <th>Wilayah</th>
                                                <th>Lokasi</th>
                                                <th>Alamat</th>
                                                <th>Kontak</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Terdaftar Tanggal</th>
                                            </tr>
                                            </thead>
                                            <tfoot>

                                            </tfoot>
                                            <tbody>
                                            @foreach ($customers as $customer)
                                            <tr>
                                                <td>{{ $customer->email }}</td>
                                                <td>{{ $customer->name }}</td>
                                                <td>{{ $customer->village->district->zone->name }}</td>
                                                <td>{{ $customer->village->name }}</td>
                                                <td>{{ $customer->street . $customer->rt . $customer->rw }}</td>
                                                <td>{{ $customer->contact }}</td>
                                                <td>{{ $customer->gender }}</td>
                                                <td>{{ $customer->created_at }}</td>

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
