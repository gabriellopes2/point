@extends('admin.master')

@section('breadcrumb', 'Solicitações')

@section('title', 'Principal')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="table-responsive no-padding">
            <div class="dataTables_wrapper no-footer">
                <table id="register_table" class="table table-hover table-bordered table-datatable table-striped" role="grid">
                    <thead class="thead-dark">
                        <tr>
                            <th>Usuário</th>
                            <th>Hora de registro</th>
                            <th>Tipo</th>
                            <th>Situação</th>
                            <th>Opções</th>
                        </tr>
                    </thead>
                    <tbody>
                        @each('admin.registros.registro', $solicitacoes, 'registro')
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection