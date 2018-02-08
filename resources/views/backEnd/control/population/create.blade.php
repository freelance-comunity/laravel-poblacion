@extends('layouts.blank') @section('main_container')
<!-- page content -->
<div class="right_col" role="main">
    <div class="row">
        <div class="col-md-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Crear registro de población
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
                    {!! Form::open(['url' => 'control/population', 'class' => 'form-horizontal']) !!}

                    <div class="form-group {{ $errors->has('month') ? 'has-error' : ''}}">
                        {!! Form::label('month', 'Mes: ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::select('month', ['ENERO'=>'ENERO', 'FEBRERO'=>'FEBRERO', 'MARZO'=>'MARZO', 'ABRIL'=>'ABRIL', 'MAYO'=>'MAYO', 'JUNIO'=>'JUNIO', 'JULIO'=>'JULIO', 'AGOSTO'=>'AGOSTO', 'SEPTIMBRE'=>'SEPTIEMBRE', 'OCTUBRE'=>'OCTUBRE', 'NOVIEMBRE'=>'NOVIEMBRE', 'DICEIMBRE'=>'DICIEMBRE'],null, ['class' => 'form-control col-md-7 col-xs-12']) !!} {!! $errors->first('month', '
                            <p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('date') ? 'has-error' : ''}}">
                        {!! Form::label('date', 'Fecha: ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::date('date', null, ['class' => 'form-control col-md-7 col-xs-12']) !!} {!! $errors->first('date', '
                            <p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('status') ? 'has-error' : ''}}">
                        {!! Form::label('status', 'Estatus: ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::select('status', ['A'=>'ACTIVO', 'B'=>'BAJA', 'E'=>'EGRESADO'],null, ['class' => 'form-control col-md-7 col-xs-12']) !!} {!! $errors->first('status', '
                            <p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('campus') ? 'has-error' : ''}}">
                        {!! Form::label('campus', 'Plantel: ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::select('campus', ['TUXTLA'=>'TUXTLA','CANCUN'=>'CANCUN','TAPACHULA'=>'TAPACHULA'],null, ['class' => 'form-control col-md-7 col-xs-12']) !!} {!! $errors->first('campus', '
                            <p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('enrollment') ? 'has-error' : ''}}">
                        {!! Form::label('enrollment', 'Matricula: ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::text('enrollment', null, ['class' => 'form-control col-md-7 col-xs-12']) !!} {!! $errors->first('enrollment', '
                            <p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('career') ? 'has-error' : ''}}">
                        {!! Form::label('career', 'Carrera: ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::text('career', null, ['class' => 'form-control col-md-7 col-xs-12']) !!} {!! $errors->first('career', '
                            <p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
                        {!! Form::label('name', 'Nombre: ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::text('name', null, ['class' => 'form-control col-md-7 col-xs-12']) !!} {!! $errors->first('name', '
                            <p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('system') ? 'has-error' : ''}}">
                        {!! Form::label('system', 'Sistema: ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::select('system', ['ESCOLARIZADO'=>'ESCOLARIZADO', 'SEMIESCOLARIZADO'=>'SEMIESCOLARIZADO'],null, ['class' => 'form-control col-md-7 col-xs-12']) !!} {!! $errors->first('system', '
                            <p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('sex') ? 'has-error' : ''}}">
                        {!! Form::label('sex', 'Sexo: ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::select('sex', ['FEMENINO'=>'FEMENINO','MASCULINO'=>'MASCULINO'],null, ['class' => 'form-control col-md-7 col-xs-12']) !!} {!! $errors->first('sex', '
                            <p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('turn') ? 'has-error' : ''}}">
                        {!! Form::label('turn', 'Turno: ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::select('turn', ['MATUTINO'=>'MATUTINO', 'VESPERTINO'=>'VESPERTINO', 'MIXTO'=>'MIXTO'],null, ['class' => 'form-control col-md-7 col-xs-12']) !!} {!! $errors->first('turn', '
                            <p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('semi_day') ? 'has-error' : ''}}">
                        {!! Form::label('semi_day', 'Día semiescolarizado: ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::text('semi_day', null, ['class' => 'form-control col-md-7 col-xs-12']) !!} {!! $errors->first('semi_day', '
                            <p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('scholarship') ? 'has-error' : ''}}">
                        {!! Form::label('scholarship', 'Beca: ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::text('scholarship', null, ['class' => 'form-control col-md-7 col-xs-12']) !!} {!! $errors->first('scholarship',
                            '
                            <p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('foreign') ? 'has-error' : ''}}">
                        {!! Form::label('foreign', 'Foranea: ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::text('foreign', null, ['class' => 'form-control col-md-7 col-xs-12']) !!} {!! $errors->first('foreign', '
                            <p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('agreement') ? 'has-error' : ''}}">
                        {!! Form::label('agreement', 'Agreement: ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::text('agreement', null, ['class' => 'form-control col-md-7 col-xs-12']) !!} {!! $errors->first('agreement', '
                            <p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('average') ? 'has-error' : ''}}">
                        {!! Form::label('average', 'Promedio: ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::text('average', null, ['class' => 'form-control col-md-7 col-xs-12']) !!} {!! $errors->first('average', '
                            <p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('five_or_more') ? 'has-error' : ''}}">
                        {!! Form::label('five_or_more', 'Cinco o más: ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::text('five_or_more', null, ['class' => 'form-control col-md-7 col-xs-12']) !!} {!! $errors->first('five_or_more',
                            '
                            <p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('quarter') ? 'has-error' : ''}}">
                        {!! Form::label('quarter', 'Cuatrimestre: ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::text('quarter', null, ['class' => 'form-control col-md-7 col-xs-12']) !!} {!! $errors->first('quarter', '
                            <p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('year_income') ? 'has-error' : ''}}">
                        {!! Form::label('year_income', 'Año ingreso: ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::text('year_income', null, ['class' => 'form-control col-md-7 col-xs-12']) !!} {!! $errors->first('year_income',
                            '
                            <p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('year_discharge') ? 'has-error' : ''}}">
                        {!! Form::label('year_discharge', 'Año egreso: ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::text('year_discharge', null, ['class' => 'form-control col-md-7 col-xs-12']) !!} {!! $errors->first('year_discharge',
                            '
                            <p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('observation_of_changes') ? 'has-error' : ''}}">
                        {!! Form::label('observation_of_changes', 'Observaciones de cambios: ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12'])
                        !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::textarea('observation_of_changes', null, ['class' => 'form-control col-md-7 col-xs-12']) !!} {!! $errors->first('observation_of_changes',
                            '
                            <p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('modification_date') ? 'has-error' : ''}}">
                        {!! Form::label('modification_date', 'Fecha de modificación: ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::date('modification_date', null, ['class' => 'form-control col-md-7 col-xs-12']) !!} {!! $errors->first('modification_date',
                            '
                            <p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('low') ? 'has-error' : ''}}">
                        {!! Form::label('low', 'Baja: ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::text('low', null, ['class' => 'form-control col-md-7 col-xs-12']) !!} {!! $errors->first('low', '
                            <p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('administrative') ? 'has-error' : ''}}">
                        {!! Form::label('administrative', 'Administrativa: ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::text('administrative', null, ['class' => 'form-control col-md-7 col-xs-12']) !!} {!! $errors->first('administrative',
                            '
                            <p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('temporary') ? 'has-error' : ''}}">
                        {!! Form::label('temporary', 'Temporal: ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::text('temporary', null, ['class' => 'form-control col-md-7 col-xs-12']) !!} {!! $errors->first('temporary', '
                            <p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('definitive') ? 'has-error' : ''}}">
                        {!! Form::label('definitive', 'Definitiva: ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::text('definitive', null, ['class' => 'form-control col-md-7 col-xs-12']) !!} {!! $errors->first('definitive', '
                            <p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('low_date') ? 'has-error' : ''}}">
                        {!! Form::label('low_date', 'Fecha de baja: ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::date('low_date', null, ['class' => 'form-control col-md-7 col-xs-12']) !!} {!! $errors->first('low_date', '
                            <p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('observations_low') ? 'has-error' : ''}}">
                        {!! Form::label('observations_low', 'Observaciones de baja: ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::textarea('observations_low', null, ['class' => 'form-control col-md-7 col-xs-12']) !!} {!! $errors->first('observations_low',
                            '
                            <p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('intern_letter') ? 'has-error' : ''}}">
                        {!! Form::label('intern_letter', 'Carta de pasante: ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::text('intern_letter', null, ['class' => 'form-control col-md-7 col-xs-12']) !!} {!! $errors->first('intern_letter',
                            '
                            <p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('certificate') ? 'has-error' : ''}}">
                        {!! Form::label('certificate', 'Certificado: ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::text('certificate', null, ['class' => 'form-control col-md-7 col-xs-12']) !!} {!! $errors->first('certificate',
                            '
                            <p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
                        {!! Form::label('title', 'Título: ', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {!! Form::text('title', null, ['class' => 'form-control col-md-7 col-xs-12']) !!} {!! $errors->first('title', '
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