@extends('layouts.app',['title'=>'Update post'])
@section('content')
<div class="container">
    {{$post->title}}
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
            <div class="card-header">Update post{{$post->title}}</div>
            <div class="card-body">
                <form action="/posts/{{$post->id}}/update" method="post">
                    @method('patch')
                    @csrf
                    <div class="form-group">
                        <label for="title">title</label>
                        <input type="text" name="title" id="title" class="form-control" value="{{old('title') ?? $post->title}}">
                        <div class="mt2 text-danger">
                            @error('title')
                            {{$message}}
                        @enderror

                        <div class="form-group">
                            <label for="category">category</label>
                            <select type="text" name="category" id="category" class="form-control">
                                <option disabled selected>Chose one</option>
                                @foreach($categories as $category)
                                <option {{$category->id == $post->category_id ?'selected' : ''}} value="{{$category->id}}">{{$category->nama}}</option>
                                    
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
                                    @foreach($post->tags as $tag)
                                    <option selected value="{{$tag->id}}">{{$tag->nama}}</option>    
                                    @endforeach
                                    @foreach($tags as $tag)
                                    <option  value="{{$tag->id}}">{{$tag->nama}}</option>
                                    @endforeach
                                </select>
                                <div class="mt2 text-danger">
                                    @error('title')
                                    {{$message}}
                                     @enderror
                                </div>
                                </div>


                        </div>
                        </div>
                    <div class="form-group">
                        <label for="body">body</label>
                        <textarea type="text" name="body" id="body" class="form-control" >{{old('body') ?? $post->body}}</textarea>
                        <div class="mt2 text-danger">
                            @error('body')
                            {{$message}}
                        @enderror

                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

@stop