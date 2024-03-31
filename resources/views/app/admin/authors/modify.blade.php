@extends('adminlte::page')

@section('title', 'Category -> Modify category')

@section('content_header')
    <h1> Modify authors</h1>
@stop

@section('content')
    <div class="card">
        <form method="post" action="{{route('admin.authors.update', $author)}}">
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
                    <label for="Authors">Authors</label>
                    <input type="text" name="Authors" class="form-control @error('Authors') is-invalid @enderror" id="Authors" value="{{$author->Authors}}" placeholder="Enter Authors">
                    @error('Authors')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="Affiliations">Affiliations</label>
                    <textarea name="Affiliations" class="form-control @error('Affiliations') is-invalid @enderror" id="Affiliations" rows="10" placeholder="Enter Affiliations">{{$author->Affiliations}}</textarea>
                    @error('Affiliations')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="Leader">Leader</label>
                    <textarea name="Leader" class="form-control @error('Leader') is-invalid @enderror" id="Leader" rows="10" placeholder="Enter Leader">{{$author->Leader}}</textarea>
                    @error('Leader')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{route('admin.authors.index')}}" type="button" class="btn btn-default float-right">Cancel</a>
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