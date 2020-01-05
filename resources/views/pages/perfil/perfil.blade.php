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
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="circulo">
                <div><img src="../assets/img/sidebar-1.jpg" alt=""></div>
            </div>

            <div class="col-md-9">

            <div class="row formulario">
                <div class="col-md-12 titulo_perfil">
                    <strong>Informações Pessoais</strong>
                </div>

                <div class="col-md-2">
                    <label>Nome:</label>
                </div>
                <div class="col-md-9">
                    <input type="text" class="form-control" id="nome" placeholder="NOME">
                </div>

                <div class="col-md-2">
                <label>CPF:</label>
            </div>
            <div class="col-md-9">
                <input type="text" class="form-control" id="cpf" placeholder="CPF">
            </div>
            <div class="col-md-2">
                <label>CPF:</label>
            </div>
            <div class="col-md-9">
                <input type="text" class="form-control" id="cpf" placeholder="CPF">
            </div>
            <div class="col-md-2">
                <label>CPF:</label>
            </div>
            <div class="col-md-9">
                <input type="text" class="form-control" id="cpf" placeholder="CPF">
            </div>
            <div class="col-md-2">
                <label>CPF:</label>
            </div>
            <div class="col-md-9">
                <input type="text" class="form-control" id="cpf" placeholder="CPF">
            </div>
            </div>

            </div>
        
        


        <!--<div class="row formulario">
            <div class="col-md-12 titulo_perfil">
                <strong>Informações Pessoais</strong>
            </div>
        </div>

        <br>
        <div class="row formulario">
            <div class="col-md-2">
                <label>Nome:</label>
            </div>
            <div class="col-md-9">
                <input type="text" class="form-control" id="nome" placeholder="NOME">
            </div>
        </div>

        <div class="row formulario">
            <div class="col-md-2">
                <label>CPF:</label>
            </div>
            <div class="col-md-9">
                <input type="text" class="form-control" id="cpf" placeholder="CPF">
            </div>
        </div>

        <div class="row formulario">
            <div class="col-md-2">
                <label>E-mail:</label>
            </div>
            <div class="col-md-9">
                <input type="email" class="form-control" id="email" placeholder="E-MAIL">
            </div>
        </div>

        <div class="row formulario">
            <div class="col-md-2">
                <label>Celular:</label>
            </div>
            <div class="col-md-9">
                <input type="text" class="form-control" id="celular" placeholder="CELULAR">
            </div>
        </div>

        <div class="row formulario">
            <div class="col-md-2">
                <label>Rua:</label>
            </div>
            <div class="col-md-9">
                <input type="text" class="form-control" id="cidade" placeholder="RUA">
            </div>
        </div>

        <div class="row formulario">
            <div class="col-md-2">
                <label>Complemento:</label>
            </div>
            <div class="col-md-9">
                <input type="text" class="form-control" id="cidade" placeholder="COMPLEMENTO">
            </div>
        </div>

        <div class="row formulario">
            <div class="col-md-2">
                <label>Cidade / Estado:</label>
            </div>
            <div class="col-md-9">
                <input type="text" class="form-control" id="cidade" placeholder="CIDADE / ESTADO">
            </div>
        </div>

        <br>

        <div class="row formulario">
            <div class="col-md-12 titulo_perfil">
                <strong>Endereço Profissional</strong>
            </div>
        </div>

        <br>

        <div class="row formulario">
            <div class="col-md-2">
                <label>Rua:</label>
            </div>
            <div class="col-md-9">
                <input type="text" class="form-control" id="cidade" placeholder="RUA">
            </div>
        </div>
        <div class="row formulario">
            <div class="col-md-2">
                <label>Complemento:</label>
            </div>
            <div class="col-md-9">
                <input type="text" class="form-control" id="cidade" placeholder="COMPLEMENTO">
            </div>
        </div>
        <div class="row formulario">
            <div class="col-md-2">
                <label>Cidade / Estado:</label>
            </div>
            <div class="col-md-9">
                <input type="text" class="form-control" id="cidade" placeholder="CIDADE / ESTADO">
            </div>
        </div>
        <div class="row formulario">
            <div class="col-md-2">
                <label>CEP:</label>
            </div>
            <div class="col-md-9">
                <input type="text" class="form-control" id="cidade" placeholder="CEP">
            </div>
        </div>-->
        

        </div>   
    </div>
</div>
@endsection