@extends('layouts.blank') 
@section('title')
Planteles
@endsection 
@section('main_container')
<!-- page content -->
<div class="right_col" role="main">
    @if(session()->has('message'))
    <div class="x_content bs-example-popovers">
        <div class="alert alert-success alert-dismissible fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            <h3>
                <strong>Mensaje del sistema:</strong> {{ session()->get('message') }}</h3>
        </div>
    </div>
    @endif
    <h1>Catálogo de planteles
        @can('agregar_planteles')<a href="{{ url('admin/campus/create') }}" class="btn btn-primary pull-right btn-sm">Agregar Nuevo Plantel</a>@endcan
    </h1>
    <div class="table table-responsive">
    @can('ver_planteles')
        <table class="table table-striped jambo_table bulk_action" id="campus">
            <thead>
                <tr class="headings">
                    <th>ID</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Postal Code</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($campus as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>
                        <a href="{{ url('admin/campus', $item->id) }}">{{ $item->name }}</a>
                    </td>
                    <td>{{ $item->address }}</td>
                    <td>{{ $item->postal_code }}</td>
                    <td>
                        @can('editar_planteles')<a href="{{ url('admin/campus/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">Actualizar</a>@endcan
                        @can('eliminar_planteles'){!! Form::open([ 'method'=>'DELETE', 'url' => ['admin/campus', $item->id], 'style' => 'display:inline' ]) !!} {!! Form::submit('Eliminar',
                        ['class' => 'btn btn-danger btn-xs']) !!} {!! Form::close() !!}@endcan
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endcan
    </div>
</div>

@endsection @push('scripts')
<script type="text/javascript">
    $(document).ready(function () {
        $('#campus').DataTable({
            columnDefs: [{
                targets: [0],
                visible: false,
                searchable: false
            }, ],
            order: [
                [0, "asc"]
            ],
        });
    });
</script>
@endpush