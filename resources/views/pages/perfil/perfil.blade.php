@extends('templates.master')
@section('conteudo')
<div class="main-panel">
<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="#pablo">Perfil</a>
          </div>
@include('templates.navbar')
{{$pagina = 'perfil'}}
<!--colocar conteudo -->
@endsection