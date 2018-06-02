@extends('layouts.app')
@section('css')
{{-- Custom CSS --}}
@endsection
@section('content')
<div class="container">
    <form action="/todos/{{$todo->id}}" method="POST">
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
                <h4 class="form-text">Todo</h4>
                <small class="form-text">You can edit this todo as you wish.</small>
            </div>
            <div class="col-md-9">
                <div class="form-group">
                    <label for="help-text-input" class="form-control-label">Title</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                        </div>
                        <input id="help-text-input" class="form-control" placeholder="Digite seu nome" value="{{$todo->title}}" name="title">
                    </div>
                </div>
                <div class="form-group">
                    <label for="help-text-input" class="form-control-label">Body message</label>
                    <textarea id="help-text-input" class="form-control" placeholder="Enter your message" name="body">{{$todo->body}}</textarea>
                </div>
            </div>
            <div class="col-md-3">
            </div>
            <div class="col-md-9"><button class="btn btn-primary">Update</button></div>
        </div>
    </form>
</div>
@endsection
@section('scripts')
{{-- Custom JS --}}
@endsection

