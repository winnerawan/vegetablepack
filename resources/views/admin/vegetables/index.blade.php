@extends('admin.layout.template')

@section('content')

    <!-- Main Content -->
    <div class="page-wrapper">
        <div class="container-fluid">
            <!-- Title -->
            <div class="row heading-bg">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h5 class="txt-dark">sayuran</h5>
                </div>
                <!-- Breadcrumb -->
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <ol class="breadcrumb">
                        <li><a href="index.html">Dashboard</a></li>
                        <li><a href="#"><span>sayur</span></a></li>
                        <li class="active"><span>data</span></li>
                    </ol>
                </div>
                <!-- /Breadcrumb -->
            </div>
            <!-- /Title -->

            <!-- Product Row One -->
            <div class="row">

                @foreach($vegetables as $vegetable)
                <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                    <div class="panel panel-default card-view pa-0">
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body pa-0">
                                <article class="col-item">
                                    <div class="photo">
                                        <div class="options">
                                            <a href="{{ url('admin/vegetables/' . $vegetable->id .'/edit') }}" class="font-18 txt-grey mr-10 pull-left"><i class="zmdi zmdi-edit"></i></a>
                                            <a href="javascript:void(0);" class="font-18 txt-grey pull-left sa-warning"><i class="zmdi zmdi-close"></i></a>
                                        </div>

                                        <a href="{{ url('admin/vegetables/' . $vegetable->id) }}"> <img src="{{ asset('images/' . $vegetable->image) }}" width="285px" height="200px" alt="Foto Sayur" /> </a>
                                    </div>
                                    <div class="info">
                                        <h6>{{$vegetable->name}}</h6>
                                        <div class="product-rating inline-block">
                                            <a href="javascript:void(0);" class="font-12 txt-success zmdi zmdi-star mr-0"></a><a href="javascript:void(0);" class="font-12 txt-success zmdi zmdi-star mr-0"></a><a href="javascript:void(0);" class="font-12 txt-success zmdi zmdi-star mr-0"></a><a href="javascript:void(0);" class="font-12 txt-success zmdi zmdi-star mr-0"></a><a href="javascript:void(0);" class="font-12 txt-success zmdi zmdi-star mr-0"></a>
                                        </div>
                                        <span class="head-font block text-warning font-16">{{$vegetable->price}}</span>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
            <!-- /Product Row Four -->

        </div>
    @include('admin.layout.footer')

@endsection