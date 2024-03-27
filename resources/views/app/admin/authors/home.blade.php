@extends('adminlte::page')

@section('title', 'Category')

@section('content_header')
    <h1>Authors</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">User list</h3>
            <div class="card-tools">
                <a href="{{route('admin.authors.create')}}" class="btn btn-primary form-control float-right">Add new user</a>
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
                        <th>Authors</th>
                        <th>Affiliation</th>
                        <th>Year</th>
                        <th  style="width: 170px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($author as $author)
                        <tr>
                            <td>{{$author->id}}</td>
                            <td>{{$author->Authors}}</td>
                            <td>{{$author->Affiliation}}</td>
                            <td>{{$author->Year}}</td>
                            <td>
                            <form method="post" action=""> 
                                <a href="" class="btn btn-warning btn-sm">Modify <span class="fas fa-edit"></span></a> 
                           
                                @csrf 
                                @method('delete')
                            <button type="submit" onclick="return confirm('This will delete the entry!\nAre you sure?')" class="btn btn-danger btn-sm">Delete <span class="fas fa-trash"></span></a>
                            </form>
                         </td>
                        </tr>
                        @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('footer')
Copyright &copy; 2024. <strong>RES Admin</strong>. All rights reserved.
@endsection

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop