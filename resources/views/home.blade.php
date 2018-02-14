@extends('layouts.blank') @section('title') Inicio @endsection @push('stylesheets')
<!-- Example -->
<!--<link href=" <link href="{{ asset("css/myFile.min.css") }}" rel="stylesheet">" rel="stylesheet">-->
@endpush @section('main_container')
<!-- page content -->
<div class="right_col" role="main">
      @if(session()->has('message'))
    <div class="x_content bs-example-popovers">
        <div class="alert alert-danger alert-dismissible fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            <h3>
                <strong>Mensaje del sistema:</strong> {{ session()->get('message') }}</h3>
        </div>
    </div>
    @endif
    <div class="row">
        <div class="">
            <div class="row top_tiles">
                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="tile-stats">
                        <div class="icon">
                            <i class="fa fa-thumbs-up"></i>
                        </div>
                        <div class="count"> {{$actives->count()}}</div>
                        <h3>Alumnos activos</h3>
                    </div>
                </div>
                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="tile-stats">
                        <div class="icon">
                            <i class="fa fa-thumbs-down"></i>
                        </div>
                        <div class="count">{{$lows->count()}}</div>
                        <h3>Alumnos con baja</h3>
                    </div>
                </div>
                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="tile-stats">
                        <div class="icon">
                            <i class="fa fa-graduation-cap"></i>
                        </div>
                        <div class="count">{{$graduates->count()}}</div>
                        <h3>Egresados</h3>
                    </div>
                </div>
                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="tile-stats">
                        <div class="icon">
                            <i class="fa fa-users"></i>
                        </div>
                        <div class="count">{{$users->count()}}</div>
                        <h3>Usuarios registrados</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <div class="row x_title">
                        <div class="col-md-6">
                            <h3>Población por carreras
                                <small>Graficas</small>
                            </h3>
                        </div>
                        <div class="col-md-6">
                            <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                                <div class="input-prepend input-group">
                                <code>Consultar por rango de fechas</code>
                                    {!! Form::open(['url' => 'populationDate', 'class' => 'form-inline']) !!}
                                    <div class="form-group">
                                        <label for="email">Fecha inicio:</label>
                                        <input type="date" class="form-control" name="start" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="pwd">Fecha fin:</label>
                                        <input type="date" class="form-control" name="end" required>
                                    </div>
                                    {{--
                                    <div class="ln_solid"></div> --}}
                                    <div class="form-group">
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <button type="submit" class="btn btn-lg btn-success">Consultar</button>
                                        </div>
                                    </div>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        {{--
                        <div class="demo-container" style="height:280px"> --}} {!! $chart5->html() !!} {{-- </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Población por estatus
                        <small>Graficas</small>
                    </h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        {{--
                        <div class="demo-container" style="height:280px"> --}} {!! $chart2->html() !!} {{-- </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Población por modalidad
                        <small>Graficas</small>
                    </h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        {{--
                        <div class="demo-container" style="height:280px"> --}} {!! $chart3->html() !!} {{-- </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Población por planteles
                        <small>Graficas</small>
                    </h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        {{--
                        <div class="demo-container" style="height:280px"> --}} {!! $chart4->html() !!} {{-- </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <div class="col-md-6">
                        <h2>Bajas por sistema (Semiescolarizado / Escolarizado)
                            <small>Graficas</small>
                        </h2>
                    </div>
                    <div class="col-md-6">
                        <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px;">
                            <button type="button" class="btn btn-primary pull-right btn-sm" data-toggle="modal" data-target=".excel">Ver detalles</button>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        {{--
                        <div class="demo-container" style="height:280px"> --}} {!! $chart7->html() !!} {{-- </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('detailLows')
    <div class="row">
        <div class="col-md-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <div class="row x_title">
                        <div class="col-md-6">
                            <h3>Población por documentación
                                <small>Graficas</small>
                            </h3>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        {{--
                        <div class="demo-container" style="height:280px"> --}} {!! $chart6->html() !!} {{-- </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->
{{-- Charts --}} {!! Charts::scripts() !!} {!! $chart2->script() !!} {!! $chart3->script() !!} {!! $chart4->script() !!}
{!! $chart5->script() !!} {!! $chart6->script() !!} {!! $chart7->script() !!} @endsection