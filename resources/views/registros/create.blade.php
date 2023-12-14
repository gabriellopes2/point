@extends('admin.master')

@section('breadcrumb', 'Registro')

@section('title', 'Registro')

@section('content')
<h1>Inserir registro</h1>
<hr>

<div class="col-md-12 text-right">
    <a class="btn btn-primary" href="{{route('resgistros')}}"><i class="fas fa-undo-alt"></i> Voltar</a>
</div>
<div class="col-md-12">
    <form class="m-t" role="form" method="POST" action="{{ route('register.store') }}">
        @csrf

        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="register_time">Data e Hora</label>
                    <input type="text" class="form-control" id="register_time" name="register_time" placeholder="data" value="{{$agora}}" readonly>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="form-group {{ $errors->has('code') ? 'has-error' : ''}}">
                    <label for="code">code</label>
                    <input type="text" class="form-control" name="code" placeholder="code">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <button type="submit" class="btn btn-success block m-b">Salvar</button>
            </div>
        </div>
    </form>
</div>
@endsection
