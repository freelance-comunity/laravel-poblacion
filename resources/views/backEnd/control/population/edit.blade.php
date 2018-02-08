@extends('backLayout.app')
@section('title')
Edit Population
@stop

@section('content')

    <h1>Edit Population</h1>
    <hr/>

    {!! Form::model($population, [
        'method' => 'PATCH',
        'url' => ['control/population', $population->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('month') ? 'has-error' : ''}}">
                {!! Form::label('month', 'Month: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('month', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('month', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('date') ? 'has-error' : ''}}">
                {!! Form::label('date', 'Date: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::date('date', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('date', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('status') ? 'has-error' : ''}}">
                {!! Form::label('status', 'Status: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('status', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('campus') ? 'has-error' : ''}}">
                {!! Form::label('campus', 'Campus: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('campus', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('campus', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('enrollment') ? 'has-error' : ''}}">
                {!! Form::label('enrollment', 'Enrollment: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('enrollment', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('enrollment', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('career') ? 'has-error' : ''}}">
                {!! Form::label('career', 'Career: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('career', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('career', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
                {!! Form::label('name', 'Name: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('system') ? 'has-error' : ''}}">
                {!! Form::label('system', 'System: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('system', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('system', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('sex') ? 'has-error' : ''}}">
                {!! Form::label('sex', 'Sex: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('sex', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('sex', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('turn') ? 'has-error' : ''}}">
                {!! Form::label('turn', 'Turn: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('turn', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('turn', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('semi_day') ? 'has-error' : ''}}">
                {!! Form::label('semi_day', 'Semi Day: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('semi_day', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('semi_day', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('scholarship') ? 'has-error' : ''}}">
                {!! Form::label('scholarship', 'Scholarship: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('scholarship', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('scholarship', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('foreign') ? 'has-error' : ''}}">
                {!! Form::label('foreign', 'Foreign: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('foreign', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('foreign', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('agreement') ? 'has-error' : ''}}">
                {!! Form::label('agreement', 'Agreement: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('agreement', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('agreement', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('average') ? 'has-error' : ''}}">
                {!! Form::label('average', 'Average: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('average', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('average', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('five_or_more') ? 'has-error' : ''}}">
                {!! Form::label('five_or_more', 'Five Or More: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('five_or_more', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('five_or_more', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('quarter') ? 'has-error' : ''}}">
                {!! Form::label('quarter', 'Quarter: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('quarter', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('quarter', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('year_income') ? 'has-error' : ''}}">
                {!! Form::label('year_income', 'Year Income: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('year_income', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('year_income', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('year_discharge') ? 'has-error' : ''}}">
                {!! Form::label('year_discharge', 'Year Discharge: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('year_discharge', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('year_discharge', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('observation_of_changes') ? 'has-error' : ''}}">
                {!! Form::label('observation_of_changes', 'Observation Of Changes: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('observation_of_changes', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('observation_of_changes', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('modification_date') ? 'has-error' : ''}}">
                {!! Form::label('modification_date', 'Modification Date: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::date('modification_date', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('modification_date', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('low') ? 'has-error' : ''}}">
                {!! Form::label('low', 'Low: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('low', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('low', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('administrative') ? 'has-error' : ''}}">
                {!! Form::label('administrative', 'Administrative: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('administrative', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('administrative', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('temporary') ? 'has-error' : ''}}">
                {!! Form::label('temporary', 'Temporary: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('temporary', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('temporary', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('definitive') ? 'has-error' : ''}}">
                {!! Form::label('definitive', 'Definitive: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('definitive', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('definitive', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('low_date') ? 'has-error' : ''}}">
                {!! Form::label('low_date', 'Low Date: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::date('low_date', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('low_date', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('observations_low') ? 'has-error' : ''}}">
                {!! Form::label('observations_low', 'Observations Low: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('observations_low', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('observations_low', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('intern_letter') ? 'has-error' : ''}}">
                {!! Form::label('intern_letter', 'Intern Letter: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('intern_letter', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('intern_letter', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('certificate') ? 'has-error' : ''}}">
                {!! Form::label('certificate', 'Certificate: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('certificate', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('certificate', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
                {!! Form::label('title', 'Title: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('title', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Update', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    </div>
    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

@endsection