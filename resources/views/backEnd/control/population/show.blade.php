@extends('backLayout.app')
@section('title')
Population
@stop

@section('content')

    <h1>Population</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Month</th><th>Date</th><th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $population->id }}</td> <td> {{ $population->month }} </td><td> {{ $population->date }} </td><td> {{ $population->status }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection