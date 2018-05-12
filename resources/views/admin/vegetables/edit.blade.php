@extends('admin.layout.template')

@section('content')

    <!-- Main Content -->
    <div class="page-wrapper">
        <div class="container-fluid">
            <!-- Title -->
            <div class="row heading-bg">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h5 class="txt-dark">Edit Sayur</h5>
                </div>
                <!-- Breadcrumb -->
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <ol class="breadcrumb">
                        <li><a href="index.html">Dashboard</a></li>
                        <li><a href="#"><span>sayur</span></a></li>
                        <li class="active"><span>edit</span></li>
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
                            <div class="panel-body">
                                <div class="form-wrap">
                                    {!! Form::model($vegetable, ['route' => ['admin.vegetables.update', $vegetable->id], 'data-parsley-validate' => '', 'files' => true, 'method' => 'PUT  ']) !!}
                                    {{ csrf_field() }}
                                    <h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-info-outline mr-10"></i>Detail Sayur</h6>
                                    <hr class="light-grey-hr"/>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label mb-10">Nama Sayuran</label>
                                                {{ Form::text('name', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                                            </div>
                                        </div>
                                        <!--/span-->
                                    {{--<div class="col-md-6">--}}
                                    {{--<div class="form-group">--}}
                                    {{--<label class="control-label mb-10">Sub text</label>--}}
                                    {{--<input type="text" id="lastName" class="form-control" placeholder="globe type chair for rest">--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    <!--/span-->
                                    </div>
                                    <!-- Row -->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label mb-10">Toko</label>
                                                <select name="store_id" class="form-control" data-placeholder="Toko">
                                                    @foreach($stores as $store)
                                                        <option value='{{ $store->id }}'>{{ $store->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label mb-10">Status</label>
                                                <div class="radio-list">
                                                    <div class="radio-inline pl-0">
                                                        <div class="radio radio-info">
                                                            <input type="radio" name="is_available" id="is_available" value="1">
                                                            <label for="radio1">Tersedia</label>
                                                        </div>
                                                    </div>
                                                    <div class="radio-inline">
                                                        <div class="radio radio-info">
                                                            <input type="radio" name="is_available" id="is_available" value="0">
                                                            <label for="radio2">Tidak Tersedia</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/span-->
                                    </div>
                                    <!--/row-->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label mb-10">Harga</label>
                                                <div class="input-group">
                                                    <div class="input-group-addon"><i class="ti-money"></i></div>
                                                    {{ Form::text('price', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                                                </div>
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label mb-10">Berat</label>
                                                <div class="input-group">
                                                    <div class="input-group-addon"><i class="ti-ruler"></i></div>
                                                    {{ Form::text('weight', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                                                </div>
                                            </div>
                                        </div>
                                        <!--/span-->
                                    </div>
                                    <h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-comment-text mr-10"></i>Product Description</h6>
                                    <hr class="light-grey-hr"/>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                {{ Form::textarea('description', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                                            </div>
                                        </div>
                                    </div>

                                    <h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-collection-image mr-10"></i>upload foto</h6>
                                    <hr class="light-grey-hr"/>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            {{ Form::file('image', array('style' => 'margin-bottom: 20px;')) }}
                                        </div>
                                    </div>

                                    <div class="form-actions">
                                        <div class="clearfix"></div>
                                        {{ Form::submit('Create', array('class' => 'btn btn-success left-icon mr-10 pull-left')) }}
                                        {{--<button class="btn btn-success btn-icon left-icon mr-10 pull-left"> <i class="fa fa-check"></i> <span>save</span></button>--}}
                                        <button type="button" class="btn btn-warning pull-left">Cancel</button>
                                        <div class="clearfix"></div>
                                    </div>
                                    {!! Form::close() !!}
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