<div class="modal fade excel" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Cargar archivo Excel de población</h4>
            </div>
            <div class="modal-body">
                <form method="post" action="{{url('import-excel')}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <label class="uk-form-label" for="form-stacked-select">Seleccionar archivo</label>
                    <input type="file" name="excel" id="excel" onchange="checkfile(this);" class="form-control" required> {!! $errors->first('excel', '
                    <p class="help-block">:message</p>') !!}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                {!! Form::submit('Subir', ['class' => 'btn btn-primary']) !!}
            </div>
            </form>
        </div>
    </div>
</div>