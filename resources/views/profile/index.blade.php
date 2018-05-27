@extends('layouts.app') @section('content')
<div class="container">

<form action="/user/{{Auth::user()->id}}" method="POST">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
        @if($errors->all())
            @include('responses.error')
        @endif
        @if (Session::has('msg'))
            @include('responses.success')
        @endif
        <div class="row">
            <div class="col-md-3">
                <h4 class="form-text">Conta</h4>
                <small class="form-text">Configurações gerais da sua conta</small>
            </div>
            <div class="col-md-9">
                <div class="form-group">
                    <label for="help-text-input" class="form-control-label">Nome</label>
                    <input id="help-text-input" class="form-control" placeholder="Digite seu nome" value="{{Auth::user()->name}}" name="name">
                </div>
                <div class="form-group">
                    <label for="help-text-input" class="form-control-label">Email</label>
                    <input id="help-text-input" class="form-control" placeholder="Enter email" value="{{Auth::user()->email}}" name="email">
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-3">
                <h4 class="form-text">Senha</h4>
                <small class="form-text">Altere sua senha</small>
            </div>
            <div class="col-md-9">
                <div class="form-group">
                    <label for="help-text-input" class="form-control-label">Nova Senha</label>
                    <input id="help-text-input" class="form-control" placeholder="Informe sua nova senha" name="password" type="password">
                    <small class="form-text">Caso nenhuma senha for informada, ela não será alterada.</small>
                </div>
                <div class="form-group">
                    <label for="help-text-input" class="form-control-label">Confirme sua senha</label>
                    <input id="help-text-input" class="form-control" placeholder="Informe sua senha novamente" name="password_confirmation" type="password">
                </div>
            </div>
            <button class="btn btn-primary">Atualizar dados</button>
        </div>
    </form>

</div>
@endsection