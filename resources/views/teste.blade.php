@extends('layouts.app')
@section('css')
{{-- Custom CSS --}}
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <form action="" method="POST">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}
                @if($errors->all())
                @include('responses.error')
                @endif
                @if (Session::has('msg'))
                @include('responses.success')
                @endif
                <div class="form-group">
                    <label for="help-text-input" class="form-control-label">Nome</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-user"></i></span>
                        </div>
                    <input id="help-text-input" class="form-control" placeholder="Nome" name="name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="help-text-input" class="form-control-label">Email</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                        </div>
                    <input id="help-text-input" class="form-control" placeholder="Email" name="email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="help-text-input" class="form-control-label">Password</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-key"></i></span>
                        </div>
                    <input id="help-text-input" class="form-control" placeholder="Password" name="password">
                    </div>
                </div>
                <div class="form-group">
                    <label for="help-text-input" class="form-control-label">Confirm password</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-key"></i></span>
                        </div>
                    <input id="help-text-input" class="form-control" placeholder="Confirm password" name="confirm_password">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('scripts')
{{-- Custom JS --}}
@endsection
