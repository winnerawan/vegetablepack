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
                        <li><a href="#"><span>form</span></a></li>
                        <li class="active"><span>form-layout</span></li>
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
                                            {!! Form::open(['route' => 'admin.merchants.store', 'data-parsley-validate' => '', 'files' => true, 'method' => 'POST  ']) !!}
                                            {{ csrf_field() }}
                                            <div class="form-group">
                                                <label class="control-label mb-10"
                                                       for="exampleInputuname_1">Nama</label>
                                                <div class="input-group">
                                                    <div class="input-group-addon"><i class="icon-user"></i></div>
                                                    {{ Form::text('name', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label mb-10"
                                                       for="exampleInputEmail_1">Email</label>
                                                <div class="input-group">
                                                    <div class="input-group-addon"><i
                                                                class="icon-envelope-open"></i></div>
                                                    {{ Form::text('email', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label mb-10"
                                                       for="exampleInputpwd_1">Password</label>
                                                <div class="input-group">
                                                    <div class="input-group-addon"><i class="icon-lock"></i></div>
                                                    {{ Form::password('password', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                                                </div>


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