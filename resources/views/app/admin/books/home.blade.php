@extends('adminlte::page')

@section('title', 'Archives')

@section('content_header')
    <h1>Archives</h1>
@stop

@section('content')
<div class="row">
        <div class="col-12">
        <div class="card">
        <div class="card-header">
        <h3 class="card-title">Responsive Hover Table</h3>
        <div class="form-inline">
<div class="input-group" data-widget="sidebar-search">
<input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
<div class="input-group-append">
<button class="btn btn-sidebar">
<i class="fas fa-search fa-fw"></i>
</button>
</div>
</div>
</div>
        </div>
        </div>
     </div>
     <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width: 10px">ID</th>
                        <th>Keywords</th>
                        <th>Title</th>
                        <th>Abstract</th>
                        <th>File-URL</th>
                        <th>Category</th>
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
                            <td>{{$book->category->research_type}},{{$book->category->strand}},{{$book->category->level}}</td>
                            <td>     
                                <a href="{{ route('admin.books.show', ['book' =>$book->id])}}" class="btn btn-warning"><i class="fas fa-eye"></i></a>&nbsp;
                                <a href="{{route('admin.books.index')}}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
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