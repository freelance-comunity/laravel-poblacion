<div class="modal fade excel" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">TIPOS DE BAJAS CANCÚN</h4>
            </div>
            <div class="modal-body">
            <b>ESCOLARIZADO</b>
                <div class="table-responsive">
                    <table class="table table-striped jambo_table bulk_action">
                        <thead>
                            <tr>
                                <th>DEFINITIVA</th>
                                <th>TEMPORAL</th>
                                <th>ADMINISTRATIVA</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$lowsDefinitiveEsco}}</td>
                                <td>{{$lowsTemporaryEsco}}</td>
                                <td>{{$lowsAdministrativeEsco}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <b>SEMI ESCOLARIZADO</b>
                  <div class="table-responsive">
                    <table class="table table-striped jambo_table bulk_action">
                        <thead>
                            <tr>
                                <th>DEFINITIVA</th>
                                <th>TEMPORAL</th>
                                <th>ADMINISTRATIVA</th>
                                <th>SÁBADO</th>
                                <th>DOMINGO</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$lowsDefinitiveSemi}}</td>
                                <td>{{$lowsTemporarySemi}}</td>
                                <td>{{$lowsAdministrativeSemi}}</td>
                                <td>{{$lowsSaturday}}</td>
                                <td>{{$lowsSunday}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>