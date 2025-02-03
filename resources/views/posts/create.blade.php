@extends('layouts.app',['title'=>'new post'],['navi'=>"http://127.0.0.1:8000/posts"])
@section('content')
<div class="container">
<div class="row">
    <div class="col-md-6">
        @if(session()->has('suscces'))
            <div class="alert alert-success">
                {{session()->get('suscces')}}
            </div>
            @endif
            @if(session()->has('error'))
            <div class="alert alert-danger">
                {{session()->get('error')}}
            </div>
            @endif
       <div class="card">
            <div class="card-header">New post</div>
            <div class="card-body">
                <form action="/posts/store" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="title">title</label>
                        <input type="text" name="title" id="title" class="form-control">
                        <div class="mt2 text-danger">
                            @error('title')
                            {{$message}}
                             @enderror
                        </div>
                        </div>

                        <div class="form-group">
                            <label for="category">title</label>
                            <select type="text" name="category" id="category" class="form-control">
                                <option disabled selected>Chose one</option>
                                @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->nama}}</option>
                                    
                                @endforeach
                            </select>
                            <div class="mt2 text-danger">
                                @error('title')
                                {{$message}}
                                 @enderror
                            </div>
                            </div>

                            <div class="form-group">
                                <label for="tags">tag</label>
                                <select name="tags[]" id="tags" class="form-control select2" multiple>
                                    @foreach($tags as $tag)
                                    <option value="{{$tag->id}}">{{$tag->nama}}</option>
                                        
                                    @endforeach
                                </select>
                                <div class="mt2 text-danger">
                                    @error('title')
                                    {{$message}}
                                     @enderror
                                </div>
                                </div>
    


                    <div class="form-group">
                        <label for="body">body</label>
                        <textarea type="text" name="body" id="body" class="form-control"></textarea>
                        <div class="mt2 text-danger">
                            @error('body')
                            {{$message}}
                             @enderror

                    </div>
                    <button type="submit" class="btn btn-primary">create</button>
                </form>
                <a href="http://127.0.0.1:8000/posts">back</a>
            </div>
        </div>
    </div>
</div>
</div>

@stop