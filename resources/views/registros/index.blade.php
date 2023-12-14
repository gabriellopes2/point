@extends('master')

@section('breadcrumb', 'Registros')

@section('title', 'Registros')

@section('content')
<div class="row">
    <br>
    <br>
    <div class="col-md-12 text-right"><a class="btn btn-primary" href="{{ route('register.create') }}" style="margin-bottom: 10px;"><i class="fas fa-plus"></i> Inserir registro</a></div>
        <div class="table-responsive no-padding">
            <div class="dataTables_wrapper no-footer">
                <table id="register_table" class="table table-hover table-bordered table-datatable table-striped" role="grid">
                    <thead class="thead-dark">
                        <tr>
                            <th>Nome</th>
                            <th>Hora de registro</th>
                            <th>Tipo</th>
                            <th>Situação</th>
                        </tr>
                    </thead>
                    <tbody>
                        @each('registros.registro', $registros, 'registro')
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection