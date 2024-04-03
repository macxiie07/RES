@extends('adminlte::page')

@section('title', 'Category')

@section('content_header')
    <h1>Category</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">User list</h3>
            <div class="card-tools">
                <a href="{{route('admin.category.create')}}" class="btn btn-primary form-control float-right">Add New</a>
            </div>
        </div>
        <div class="card-body">
        <div class="table-responsive">
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
                            <form method="post" action="{{route('app.admin.category.destroy', $category)}}"> 
                                <a href="{{route('admin.category.modify', $category)}}" class="btn btn-warning btn-sm">Modify <span class="fas fa-edit"></span></a> 
                           
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