@extends('layout.app',['navi'=>"http://127.0.0.1:8000/posts"])

@section('content')
<div class="container">
    @if(session()->has('suscces'))
    <div class="alert alert-success">
        {{session()->get('suscces')}}
    </div>
    @endif
    <div class="d-flex justify-content-lg-between">
        <div col>
            @isset($category)
                <h4>Category:{{$category->nama}}</h4>
            @endisset
            @isset($tag)
            <h4>Tag:{{$tag->nama}}</h4>
        @endisset
        @if(!isset($tag) && !isset($category))
          <h4>all post</h4>  
        @endif
        </div>
        <div>
            <a href="/posts/create" class="btn btn-primary">New Post</a>
        </div>
    </div>
    <hr>
    
    <div class="row">
        {{-- <table border="1">
            @foreach($posts as $post)
            <tr>
                <td>
                    {{$post->title}}
        </td>
        <td>
            {{$post->slug}}

            {{-- //melimit character --}}
            {{-- {{Str::limit($post->slug,100)}} --}}
            {{-- </td>
            </tr>
            @endforeach
        </table>  --}}
        @if($posts->count())
            @foreach($posts as $post)
            <div class="col-md-4">
                <div class="card mb-3">
                    <div class="card-header">
                        {{$post->slug}}
                    </div>

                    <div class="card-body">
                        {{Str::limit($post->title,100,'')}}
                        <a href="/posts/{{$post->id}}">read more</a>
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                        published On{{$post->created_at->diffForHumans()}}
                    <a href="/posts/{{$post->id}}/edit" class="btn btn-sm btn-success">edit</a>
                    </div>


                </div>
            </div>
            @endforeach
            @else
            <div class="alert alert-info">
                there not post
            </div>
            @endif
    </div>
    <div class="d-flex justify-content-xl-center">
        <div>
            {{$posts->links()}}
        </div>
    </div>
</div>
@stop
