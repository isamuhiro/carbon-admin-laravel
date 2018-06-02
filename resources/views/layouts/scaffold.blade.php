@extends('layouts.app')
@section('css')
{{-- Custom CSS --}}
@endsection
@section('content')
<div class="form-group">
    <label for="help-text-input" class="form-control-label">Nome</label>
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="fa fa-user"></i></span>
        </div>
    <input id="help-text-input" class="form-control" placeholder="Nome" name="name">
    </div>
</div>
@endsection
@section('scripts')
{{-- Custom JS --}}
@endsection
