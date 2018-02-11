@extends('layouts.blank') 
@section('title')
Crear plantel
@endsection 
@section('main_container')
<!-- page content -->
<div class="right_col" role="main">
    <div class="row">
        <div class="col-md-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Crear nuevo plantel
                        <small>Control</small>
                    </h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li>
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    {!! Form::open(['url' => 'admin/campus', 'class' => 'form-horizontal']) !!}

                    <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
                        {!! Form::label('name', 'Nombre de plantel: ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::text('name', null, ['class' => 'form-control col-md-7 col-xs-12', 'required' => 'required']) !!} {!! $errors->first('name', '
                            <p
                                class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('address') ? 'has-error' : ''}}">
                        {!! Form::label('address', 'Domicilio de plantel: ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::text('address', null, ['class' => 'form-control col-md-7 col-xs-12', 'required' => 'required']) !!} {!! $errors->first('address',
                            '
                            <p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('postal_code') ? 'has-error' : ''}}">
                        {!! Form::label('postal_code', 'Código postal: ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::number('postal_code', null, ['class' => 'form-control col-md-7 col-xs-12', 'required' => 'required']) !!} {!! $errors->first('postal_code',
                            '
                            <p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                   
                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                            <button type="reset" class="btn btn-lg btn-primary">Limpiar</button>
                            <button type="submit" class="btn btn-lg btn-success">Guardar</button>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->
@endsection @if ($errors->any())
<ul class="alert alert-danger">
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@endif