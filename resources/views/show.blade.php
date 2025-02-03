@extends('layouts.app')
@section('content')
    <div  class="container">

        {{-- "!! !!"  digunakan agar tag html tidak terbace == htmlspecialchar  --}}
        <p>{{$post->title}}</p>
        <div class="text-secondary">
       <a href="/category/{{$post->category->id}}">{{$post->category->nama}}</a> &middot;{{$post->created_at->format("D F, Y")}}

       &middot;
       @foreach($post->tags as $tag)
        <a href="/tags/{{$tag->id}}/">{{$tag->nama}}</a>
         
        @endforeach
        <div class="text-secondary">
        {{$post->author->name}}
        </div>
        @if(auth()->user()->is($post->author))
          
      </div>
      <!-- Button trigger modal -->
      <button type="button" class="btn text-danger btn-sm" data-toggle="modal" data-target="#exampleModal">
        Delete
      </button>
      @endif
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Hapus</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div>{{$post->title}}</div>
          <small>{{$post->created_at->format("D F,Y")}}</small>
            <form action="/posts/{{$post->id}}/delete" method="post">
                @csrf
                    @method('delete')
                    <div class="d-flex">
                      <button class="btn btn-danger " type="submit">Ya</button>
                      <button type="button" class="btn btn-secondary ml-2" data-dismiss="modal">Tidak</button>

                    </div>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary">Hapus</button>
        </div>
      </div>
    </div>
  </div>

        
    </div>
@endsection