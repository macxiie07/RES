@extends('adminlte::page')

@section('title', 'Users -> Create a new blog')

@section('content_header')
    <h1>Users -> Create a new blog</h1>
@stop

@section('content')
    <div class="card">
        <form method="post" action="">
            @csrf 
            @method('post')
            <div class="card-body">
                <div class="form-group">
                    <label for="strand">Keywords</label>
                    <input type="text" name="strand" class="form-control @error('strand') is-invalid @enderror" id="strand" value="{{old('strand')}}" placeholder="Enter Strand">
                    @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="level">Title</label>
                    <textarea name="level" class="form-control @error('level') is-invalid @enderror" id="level" rows="10" placeholder="Enter level">{{old('level')}}</textarea>
                    @error('content')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="research_type">Abstract</label>
                    <textarea name="research_type" class="form-control @error('research_type') is-invalid @enderror" id="research_type" rows="10" placeholder="Enter research_type">{{old('research_type')}}</textarea>
                    @error('content')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="research_type">File-URL</label>
                    <textarea name="research_type" class="form-control @error('research_type') is-invalid @enderror" id="research_type" rows="10" placeholder="Enter research_type">{{old('research_type')}}</textarea>
                    @error('content')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="research_type">Category_id</label>
                    <textarea name="research_type" class="form-control @error('research_type') is-invalid @enderror" id="research_type" rows="10" placeholder="Enter research_type">{{old('research_type')}}</textarea>
                    @error('content')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Save</button>
                <a href="{{route('admin.category.index')}}" type="button" class="btn btn-default float-right">Cancel</a>
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