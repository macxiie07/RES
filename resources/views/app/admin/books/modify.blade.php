@extends('adminlte::page')

@section('title', 'Authors -> Modify book')

@section('content_header')
    <h1> Modify book</h1>
@stop

@section('content')
<div class="card">
        <form method="post" action="{{route('admin.books.update', $book)}}">
             @csrf
             @method('put')
            <div class="card-body" >
            @if (session('status'))
                <div class="alert alert-success alert-dismissible auto-close">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    {{session('status')}}
                </div>
            @endif
                <div class="form-group">
                    <label for="name">ID</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{$book->id}}" >
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    
                </div>
            
                <div class="form-group">
                    <label for="email">Title</label>
                    <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{$book->title}}" >
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    
                </div>
                <div class="form-group">
                    <label for="title">Abstract</label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" value="{{$book->abstract}}" >
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    
                </div>
                <div class="form-group">
                <label for="title">File URL</label>
                <div class="input-group">
                    <input type="text" name="file_url" class="form-control" value="{{ $book->file_url }}" >
                    <div class="input-group-append">
                        <a href="{{ $book->file_url }}" class="btn btn-primary" target="_blank">open</a>
                    </div>
                </div>
                @error('file_url')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                    
                </div>
               
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{route('admin.books.index')}}" type="button" class="btn btn-default float-right">Cancel</a>
            </div>
    </form>   
</div>
@stop

@section('footer')
    Copyright &copy 2023. <a href='/admin'>Marc's Blog</a>. All rights reserved.
@endsection

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop