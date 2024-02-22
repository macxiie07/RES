@extends('adminlte::page')

@section('title', 'Users')

@section('content_header')
    <h1>Users</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">User list</h3>
            <div class="card-tools">
                <a href="{{route('admin.category.create')}}" class="btn btn-primary form-control float-right">Add new user</a>
            </div>
        </div>
        <div class="card-body">
            @if(session('status'))
                <div class="alert alert-success alert-dismissible auto-close">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    {{ session('status') }}
                </div>            
            @endif
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width: 10px">ID</th>
                        <th>Strand</th>
                        <th>Level</th>
                        <th>Research_type</th>
                        <th  style="width: 170px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($category as $category)
                        <tr>
                            <td>{{$category->id}}</td>
                            <td>{{$category->strand}}</td>
                            <td>{{$category->level}}</td>
                            <td>{{$category->research_type}}</td>
                            <td>
                                <a href="#" class="btn btn-warning"><i class="fas fa-edit"></i></a>&nbsp;
                                <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('footer')
    Copyright &copy 2023. <a href='/admin'>RES</a>. All rights reserved.
@endsection

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop