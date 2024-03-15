@extends('adminlte::page')

@section('title', 'Users -> Create a new blog')

@section('content_header')
    <h1>Users -> Create a new blog</h1>
@stop

@section('content')
    <div class="card">
        <form method="post" action="{{route('admin.books.store')}}">
            @csrf 
            @method('post')
            <div class="card-body">
                <div class="form-group">
                    <label for="keywords">Keywords</label>
                    <input type="text" name="keywords" class="form-control @error('keywords') is-invalid @enderror" id="keywords" value="{{old('keywords')}}" placeholder="Enter keywords">
                    @error('keywords')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="title">Title</label>
                    <textarea name="title" class="form-control @error('title') is-invalid @enderror" id="title" rows="10" placeholder="Enter title">{{old('title')}}</textarea>
                    @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="abstract">Abstract</label>
                    <textarea name="abstract" class="form-control @error('abstract') is-invalid @enderror" id="abstract" rows="10" placeholder="Enter abstract">{{old('abstract')}}</textarea>
                    @error('abstract')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="file_url">File-URL</label>
                    <textarea name="file_url" class="form-control @error('file_url') is-invalid @enderror" id="file_url" rows="10" placeholder="Enter file_url">{{old('file_url')}}</textarea>
                    @error('file_url')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="category_id">Category</label>
                    <select name="category_id" class="form-control @error('category_id') is-invalid @enderror" id="category_id">
                        <option value="">Select Category</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->strand }},{{ $category->level }},{{ $category->research_type }}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Save</button>
                <a href="{{route('admin.books.index')}}" type="button" class="btn btn-default float-right">Cancel</a>
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