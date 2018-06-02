@extends('layouts.app')
@section('css')
{{-- Custom CSS --}}
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12"><a href="/todos/create" class="btn btn-primary">Create</a></div>
    </div>
    <br/>
    <div class="row">
        @foreach ($todos as $todo)
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-light">
                        <a href="/todos/{{$todo->id}}">{{$todo->title}}</a>
                        <div class="card-actions">
                            <a href="/todos/{{$todo->id}}" class="btn">
                                <i class="fa fa-pencil-alt"></i>
                            </a>
                            <a href="#" class="btn">
                            <input type="checkbox" name="is_checked" {{!$todo->is_checked ?: 'checked'}}>
                            </a>
                        </div>
                    </div>

                    <div class="card-body">
                            {{$todo->body}}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
@section('scripts')
{{-- Custom JS --}}
@endsection

