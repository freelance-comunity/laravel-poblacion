@extends('layouts.blank') @push('stylesheets')
<!-- Example -->
<!--<link href=" <link href="{{ asset("css/myFile.min.css") }}" rel="stylesheet">" rel="stylesheet">-->
@endpush @section('main_container')
<!-- page content -->
<div class="right_col" role="main">
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
                            <i class="fa fa-check-square-o"></i>
                        </div>
                        <div class="count">179</div>
                        <h3>New Sign ups</h3>
                        <p>Lorem ipsum psdea itgum rixt.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Población por carreras
                        <small>Graficas</small>
                    </h2>
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
                    <h2>Bajas por sistema (Semiescolarizado / Escolarizado)
                        <small>Graficas</small>
                    </h2>
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
</div>
<!-- /page content -->
{{-- Charts --}} {!! Charts::scripts() !!} {!! $chart2->script() !!} {!! $chart3->script() !!} {!! $chart4->script() !!}
{!! $chart5->script() !!} {!! $chart6->script() !!} {!! $chart7->script() !!} @endsection