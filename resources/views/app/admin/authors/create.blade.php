@extends('adminlte::page')

@section('title', 'Users -> Create a new blog')

@section('content_header')
    <h1> Add new authors</h1>
@stop

@section('content')
    <div class="card">
        <form method="post" action="{{route('admin.authors.store')}}">
            @csrf 
            @method('post')
            <div class="card-body">
                <div class="form-group">
                    <label for="Authors">Authors</label>
                    <input type="text" name="Authors" class="form-control @error('Authors') is-invalid @enderror" id="Authors" value="{{old('Authors')}}" placeholder="Enter Authors">
                    @error('authors')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="Affiliations">Affiliations</label>
                    <textarea name="Affiliations" class="form-control @error('Affiliations') is-invalid @enderror" id="Affiliations" rows="10" placeholder="Enter Affiliations">{{old('Affiliations')}}</textarea>
                    @error('affiliation')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="leader">Leader</label>
                    <textarea name="leader" class="form-control @error('leader') is-invalid @enderror" id="leader" rows="10" placeholder="Enter leader">{{old('leader')}}</textarea>
                    @error('leader')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Save</button>
                <a href="{{route('admin.authors.index')}}" type="button" class="btn btn-default float-right">Cancel</a>
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