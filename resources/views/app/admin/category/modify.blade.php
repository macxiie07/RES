@extends('adminlte::page')

@section('title', 'Category -> Modify category')

@section('content_header')
    <h1>Category -> Modify category</h1>
@stop

@section('content')
    <div class="card">
        <form method="post" action="{{route('admin.blogs.update', $blog)}}">
            @csrf 
            @method('put')
            <div class="card-body">
                @if(session('status'))
                    <div class="alert alert-success alert-dismissible auto-close">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        {{ session('status') }}
                    </div>            
                @endif
                <div class="form-group">
                    <label for="title">Strand</label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" value="{{$blog->title}}" placeholder="Enter blog title">
                    @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="content">Level</label>
                    <textarea name="content" class="form-control @error('content') is-invalid @enderror" id="content" rows="10" placeholder="Enter blog content">{{$blog->content}}</textarea>
                    @error('content')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="content">Research_type</label>
                    <textarea name="content" class="form-control @error('content') is-invalid @enderror" id="content" rows="10" placeholder="Enter blog content">{{$blog->content}}</textarea>
                    @error('content')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{route('admin.blogs.index')}}" type="button" class="btn btn-default float-right">Cancel</a>
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