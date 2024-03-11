@extends('adminlte::page')

@section('title', 'Category -> Modify category')

@section('content_header')
    <h1>Category -> Modify category</h1>
@stop

@section('content')
    <div class="card">
        <form method="post" action="{{route('admin.category.update', $category)}}">
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
                    <label for="strand">Strand</label>
                    <input type="text" name="strand" class="form-control @error('strand') is-invalid @enderror" id="strand" value="{{$category->strand}}" placeholder="Enter strand">
                    @error('strand')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="level">Level</label>
                    <textarea name="level" class="form-control @error('level') is-invalid @enderror" id="level" rows="10" placeholder="Enter level">{{$category->level}}</textarea>
                    @error('level')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="research_type">Research_type</label>
                    <textarea name="research_type" class="form-control @error('research_type') is-invalid @enderror" id="research_type" rows="10" placeholder="Enter research_type">{{$category->research_type}}</textarea>
                    @error('research_type')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{route('admin.category.index')}}" type="button" class="btn btn-default float-right">Cancel</a>
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