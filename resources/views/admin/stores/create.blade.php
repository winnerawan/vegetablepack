@extends('admin.layout.template')

@section('content')
    <!-- Main Content -->
    <div class="page-wrapper">
        <div class="container-fluid">

            <!-- Title -->
            <div class="row heading-bg">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h5 class="txt-dark">akun mitra baru</h5>
                </div>

                <!-- Breadcrumb -->
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <ol class="breadcrumb">
                        <li><a href="index.html">Dashboard</a></li>
                        <li><a href="#"><span>Toko</span></a></li>
                        <li class="active"><span>Baru</span></li>
                    </ol>
                </div>
                <!-- /Breadcrumb -->

            </div>
            <!-- /Title -->

            <!-- Row -->
            <div class="row">
                <div class="col-md-10">
                    <div class="panel panel-default card-view">
                        <div class="panel-heading">

                            {{--<div class="clearfix"></div>--}}
                        </div>
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-12 col-xs-12">
                                        <div class="form-wrap">
                                            {!! Form::open(['route' => 'admin.stores.store', 'data-parsley-validate' => '', 'files' => true, 'method' => 'POST  ']) !!}
                                            {{ csrf_field() }}
                                            <div class="form-group">
                                                <label class="control-label mb-10">Nama Mitra</label>
                                                <div class="input-group">
                                                    <div class="input-group-addon"><i class="zmdi zmdi-face"></i></div>
                                                    <select class="form-control" name="merchant_id">
                                                        @foreach($merchants as $merchant)
                                                            <option value='{{ $merchant->id }}'>{{ $merchant->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            {{--<div class="col-md-6">--}}
                                                {{--<div class="form-group">--}}
                                                    {{--<label class="control-label mb-10">Wilayah</label>--}}
                                                    {{--<div class="radio-list">--}}
                                                        {{--<div class="radio-inline pl-0">--}}
                                                        {{--{{ Form::radio('Kota Madiun', 0) }}--}}
                                                        {{--</div>--}}
                                                        {{--<div class="radio-inline pl-0">--}}
                                                        {{--{{ Form::radio('Kabupaten Madiun', 1) }}--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}

                                            <div class="form-group">
                                                <label class="control-label mb-10">Lokasi</label>
                                                {{--<div>--}}
                                                    <div class="input-group">
                                                        <div class="input-group-addon"><i class="icon-location-pin"></i></div>
                                                    <select class="form-control" name="village_id">
                                                        @foreach($villages as $village)
                                                            <option value='{{ $village->id }}'>{{ $village->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            {{--<div class="form-group">--}}
                                                {{--<label class="control-label mb-10">Lokasi</label>--}}
                                                {{--<div>--}}
                                                {{--<div class="input-group">--}}
                                                    {{--<div class="input-group-addon"><i class="icon-location-pin"></i></div>--}}
                                                    {{--<select class="form-control" name="village_id">--}}
                                                        {{--$i = array('0', '1', '2', '3', '4' , '5', '6', '7' , '8'. '9');--}}
                                                        {{--$j = array('0, 1, 2, 3, 4 , 5, 6, 7 , 8. 9');--}}
                                                            {{--@foreach($i as $k)--}}
                                                            {{--<option>$i</option>--}}
                                                            {{--@endforeach--}}
                                                    {{--</select>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            <div class="form-group">
                                                <label class="control-label mb-10"
                                                       for="exampleInputuname_1">Nama Toko</label>
                                                <div class="input-group">
                                                    <div class="input-group-addon"><i class="zmdi zmdi-store"></i></div>
                                                    {{ Form::text('name', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label mb-10"
                                                       for="exampleInputEmail_1">Deskripsi</label>
                                                <div class="input-group">
                                                    {{ Form::textarea('description', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label mb-10"
                                                       for="exampleInputuname_1">Kontak</label>
                                                <div class="input-group">
                                                    <div class="input-group-addon"><i class="icon-phone"></i></div>
                                                    {{ Form::text('contact', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label mb-10"
                                                       for="exampleInputuname_1">Nama Jalan</label>
                                                <div class="input-group">
                                                    <div class="input-group-addon"><i class="icon-map"></i></div>
                                                    {{ Form::text('street', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label mb-10"
                                                       for="exampleInputuname_1">Jam Buka</label>
                                                <div class="input-group">
                                                    <div class="input-group-addon"><i class="icon-clock"></i></div>
                                                    {{ Form::time('open', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label mb-10"
                                                       for="exampleInputuname_1">Jam Tutup</label>
                                                <div class="input-group">
                                                    <div class="input-group-addon"><i class="icon-clock"></i></div>
                                                    {{ Form::time('close', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label mb-10">Apakah Aktif?</label>
                                                <div>
                                                    {{ Form::select('is_active', ['1' => 'Aktif', '0' => 'Tidak Aktif'], '1') }}
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label mb-10">Foto Toko</label>
                                                <div>
                                                    {{ Form::file('image') }}
                                                </div>
                                            </div>

                                            <div class="form-group">


                                                {{ Form::submit('Create', array('class' => 'btn btn-success mr-10', 'style' => 'margin-top: 20px;')) }}
                                                <a href="{{ url('admin/merchants') }}"
                                                   class="btn btn-default" style="margin-top: 20px;">Batal</a>
                                                {!! Form::close() !!}
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