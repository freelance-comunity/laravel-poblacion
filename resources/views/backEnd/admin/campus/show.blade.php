@extends('backLayout.app')
@section('title')
Campus
@stop

@section('content')

    <h1>Campus</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Name</th><th>Address</th><th>Postal Code</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $campus->id }}</td> <td> {{ $campus->name }} </td><td> {{ $campus->address }} </td><td> {{ $campus->postal_code }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection