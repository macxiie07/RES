@extends('adminlte::page')

@section('title', 'Comments -> View comments')

@section('content_header')
    <h1>Comments  ->View Comments</h1>
@stop

@section('content')
   <div class="card">
        <form method="post" action="">
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
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{$book->id}}" readonly>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    
                </div>
                <div class="form-group">
                    <label for="email">Title</label>
                    <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{$book->keywords}}" readonly>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    
                </div>
                <div class="form-group">
                    <label for="comment">Keywords</label>
                    <input type="text" name="comment" class="form-control @error('comment') is-invalid @enderror" id="comment" value="{{$book->title}}" readonly>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    
                </div>
                <div class="form-group">
                    <label for="title">Abstract</label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" value="{{$book->abstract}}" readonly>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    
                </div>
                <div class="form-group">
                <label for="title">File URL</label>
                <div class="input-group">
                    <input type="text" name="file_url" class="form-control" value="{{ $book->file_url }}" readonly>
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
                <div class="form-group">
                    <label for="title">Category</label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" value="{{$book->category->research_type}},{{$book->category->strand}},{{$book->category->level}}" readonly>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    
                </div>
            </div>
            <div class="card-footer">
                 <a href="{{route('admin.books.index')}}" type="cancel" class="btn btn-default float-right">Cancel</a>
            </div>
        </form>   
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