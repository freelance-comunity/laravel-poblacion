@extends('layouts.blank') @section('title') Tapachula @endsection @push('stylesheets')
<!-- Example -->
<!--<link href=" <link href="{{ asset("css/myFile.min.css") }}" rel="stylesheet">" rel="stylesheet">-->
@endpush @section('main_container')
<!-- page content -->
<div class="right_col" role="main">
    <div class="x_content bs-example-popovers">
        <div class="alert alert-info alert-dismissible fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            <h3>
                <strong>Detalles estadísticos del plantel </strong>Tapachula.</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <div class="row x_title">
                        <div class="col-md-6">
                            <h3>Acciones
                                <small>Graficas</small>
                            </h3>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        {!! Form::open(['url' => 'filterTapachula', 'class' => 'form-inline']) !!}
                        <div class="form-group">
                            <label for="email">Carrera:</label>
                            <select class="form-control" name="carrera">
                                <option value="ENFERMERIA">ENFERMERIA</option>
                                <option value="INGENIERIA MECANICA AUTOMOTRIZ">INGENIERIA MECANICA AUTOMOTRIZ</option>
                                <option value="DERECHO">DERECHO</option>
                                <option value="INGENIERIA CIVIL">INGENIERIA CIVIL</option>
                                <option value="INGENIERIA EN SISTEMAS">INGENIERIA EN SISTEMAS</option>
                                <option value="ADMINISTRACION DE EMPRESAS">ADMINISTRACION DE EMPRESAS</option>
                                <option value="TRABAJO SOCIAL">TRABAJO SOCIAL</option>
                                <option value="MERCADOTECNIA">MERCADOTECNIA</option>
                                <option value="CONTADURIA PUBLICA">CONTADURIA PUBLICA</option>
                                <option value="INFORMATICA ADMINISTRATIVA">INFORMATICA ADMINISTRATIVA</option>
                                <option value="DOCTORADO EN EDUCACION">DOCTORADO EN EDUCACION</option>
                                <option value="MAESTRIA EN CALIDAD">MAESTRIA EN CALIDAD</option>
                                <option value="MAESTRIA EN EDUCACION">MAESTRIA EN EDUCACION</option>
                                <option value="MAESTRIA EN DERECHO FISCAL">MAESTRIA EN DERECHO FISCAL</option>
                                <option value="MAESTRIA EN ADMINISTRACION PUBLICA">MAESTRIA EN ADMINISTRACION PUBLICA</option>
                                <option value="MAESTRIA EN COMERCIALIZACION Y VENTAS">MAESTRIA EN COMERCIALIZACION Y VENTAS</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="pwd">Estatus:</label>
                            <select name="estatus" class="form-control">
                            <option value="A">ACTIVOS</option>
                            <option value="B">BAJAS</option>
                            <option value="E">EGRESADOS</option>
                        </select>
                        </div>
                         <div class="form-group">
                            <label for="pwd">Sistema:</label>
                            <select name="sistema" class="form-control">
                            <option value="ESCOLARIZADO">ESCOLARIZADO</option>
                            <option value="SEMIESCOLARIZADO">SEMI ESCOLARIZADO</option>
                        </select>
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
        <div class="col-md-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <div class="row x_title">
                        <div class="col-md-6">
                            <h3>Población por carreras
                                <small>Graficas</small>
                            </h3>
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
</div>
<!-- /page content -->
{{-- Charts --}} {!! Charts::scripts() !!} {!! $chart5->script() !!} @endsection