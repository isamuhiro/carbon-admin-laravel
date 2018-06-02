@extends('layouts.app')
@section('css')
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped table-bordered" id="myTable">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($users as $user)
                <tr>
                    <td><a href="/users/{{$user->id}}">{{$user->name}}</a></td>
                    <td>{{$user->email}}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@section('scripts')
@endsection

