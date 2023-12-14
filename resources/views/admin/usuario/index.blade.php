@extends('admin.master')

@section('breadcrumb', 'Usuário')

@section('title', 'Principal')

@section('content')
<div class="row">
    <div class="col-md-12 text-right"><a class="btn btn-primary" href="{{ url('admin/users/create/') }}" style="margin-bottom: 10px;"><i class="fas fa-plus"></i> Cadastrar Usuário</a></div>
    <div class="col-md-12">
        <div class="table-responsive no-padding">
            <div class="dataTables_wrapper no-footer">
                <table id="user_table" class="table table-hover table-bordered table-datatable table-striped" role="grid">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Usuário</th>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Código</th>
                            <th>Data de Criação</th>
                            <th>Admin</th>
                            <th>Opções</th>
                        </tr>
                    </thead>
                    <tbody>
                        @each('admin.usuario.usuario', $usuarios, 'usuario')
                    </tbody>
                    
                </table>
            </div>
        </div>
    </div>
</div>
@endsection