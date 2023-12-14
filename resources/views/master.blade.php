@extends('adminlte::page')

@section('content_header')
<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>@yield('title')</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
          <li class="breadcrumb-item active"><strong>@yield('breadcrumb')</strong></li>
        </ol>
      </div>
    </div>
  </div>
@endsection

@section('footer')
<div class="float-right d-none d-sm-block">
    <b>Version</b> 1.0.1
  </div>
  <strong>Copyright &copy; 2023 - <a>Univates Project</a>.</strong> All rights reserved.
@endsection