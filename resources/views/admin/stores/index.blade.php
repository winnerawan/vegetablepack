@extends('admin.layout.template')

@section('content')
    <!-- Main Content -->
    <div class="page-wrapper">
        <div class="container-fluid">
            <!-- Title -->
            <div class="row heading-bg">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h5 class="txt-dark">Toko</h5>
                </div>
                <!-- Breadcrumb -->
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <ol class="breadcrumb">
                        <li><a href="index.html">Dashboard</a></li>
                        <li><a href="#"><span>table</span></a></li>
                        <li class="active"><span>Toko</span></li>
                    </ol>
                </div>
                <!-- /Breadcrumb -->
            </div>
            <!-- /Title -->

            <!-- Row -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-default card-view">
                        <div class="panel-heading">
                            {{--<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">--}}

                                {{--<button class="btn  btn-primary">Primary</button>--}}

                            {{--</div>--}}
                            <div class="clearfix"></div>
                        </div>
                        <div class="panel-wrapper collapse in">
                            <a href="{{ url('admin/stores/create') }}" class="btn  btn-success">Buat Toko Baru</a>

                            <div class="panel-body">
                                <div class="table-wrap">
                                    <div id="jsgrid_1">

                                        <table id="example" class="table table-hover display  pb-30" >
                                            <thead>
                                            <tr>
                                                <th>Nama Toko</th>
                                                <th>Nama Mitra</th>
                                                <th>Wilayah</th>
                                                <th>Lokasi</th>
                                                <th>Alamat</th>
                                                <th>Kontak</th>
                                            </tr>
                                            </thead>
                                            <tfoot>

                                            </tfoot>
                                            <tbody>
                                            @foreach ($stores as $store)
                                                <tr>
                                                    <td><a href="{{ url('/admin/stores/'.$store->id) }}">{{ $store->name }}</a></td>
                                                    <td>{{ $store->merchant->name }}</td>
                                                    <td>{{ $store->village->district->zone->name }}</td>
                                                    <td>{{ $store->village->name }}</td>
                                                    <td>{{ $store->street }}</td>
                                                    <td>{{ $store->contact }}</td>
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
