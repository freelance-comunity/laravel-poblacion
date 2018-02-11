@extends('layouts.blank') 
@section('title')
Población escolar
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
    <h1>Población estudiantil @can('agregar_poblacion')
        <button type="button" class="btn btn-warning pull-right btn-sm" data-toggle="modal" data-target=".excel">Subir Excel</button>
        <a href="{{ url('control/population/create') }}" class="btn btn-primary pull-right btn-sm">Agregar Nuevo Registro</a>@endcan
    </h1>
    <div class="table table-responsive">
        <table class="table table-striped jambo_table bulk_action" id="population">
            <thead class="heading">
                <tr>
                    <th>ID</th>
                    <th>Mes</th>
                    <th>Fecha</th>
                    <th>Estatus</th>
                    <th>Plantel</th>
                    <th>Matricula</th>
                    <th>Carrera</th>
                    <th>Nombre</th>
                    <th>Turno</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($population as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>
                        <a href="{{ url('control/population', $item->id) }}">{{ $item->month }}</a>
                    </td>
                    <td>{{ $item->date }}</td>
                    <td>{{ $item->status }}</td>
                    <td>{{ $item->campus }}</td>
                    <td>{{ $item->enrollment }}</td>
                    <td>{{ $item->career }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->turn }}</td>
                    <td>
                        <a href="{{ url('control/population/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">Actualizar</a> 
                        {!! Form::open([ 'method'=>'DELETE', 'url' => ['control/population',$item->id], 'style' => 'display:inline' ]) !!} {!! Form::submit('Eliminar', ['class' => 'btn btn-danger btn-xs']) !!} {!! Form::close() !!}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@include('backEnd.control.population.excel')
<!-- /page content -->
@endsection @push('scripts')
<script type="text/javascript">
    $(document).ready(function () {
        $('#population').DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
            },
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