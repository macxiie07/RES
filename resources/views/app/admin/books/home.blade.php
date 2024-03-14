@extends('adminlte::page')

@section('title', 'Archives')

@section('content_header')
    <h1>Archives</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Archived list</h3>
            <div class="card-tools">
                <a href="{{route('admin.books.create')}}" class="btn btn-primary form-control float-right">Add new</a>
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
                        <th>Keywords</th>
                        <th>Title</th>
                        <th>Abstract</th>
                        <th>File-URL</th>
                        <th>Category ID</th>
                        <th style="width: 250px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($book as $book)
                        <tr>
                            <td>{{$book->id}}</td>
                            <td>{{$book->keywords}}</td>
                            <td>{{$book->title}}</td>
                            <td>{{$book->abstract}}</td>
                            <td><a href="{{$book->file_url}}" target="_blank">{{$book->file_url}}</a></td>
                            <td>{{$book->category->research_type}},{{$book->category->strand}}</td>
                            <td>     
                                <a href="{{ route('admin.books.show', ['book' =>$book->id])}}" class="btn btn-warning"><i class="fas fa-eye"></i></a>&nbsp;
                                <a href="{{route('admin.books.index')}}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
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