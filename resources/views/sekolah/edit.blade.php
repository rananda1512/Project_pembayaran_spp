@extends('layout.app')
@section('style')
<link rel="stylesheet" href="{{asset('css/form/formCreate.css')}}">
@section('content')
<div class="container">
    <div class="card col-md-5 mx-auto" style="margin-top:100px;">
    <div class="card-body">
<form action="/sekolah/{{$sekolah->id}}/update" method="post">
    @method('patch')
    @csrf
    <div class="wrapper ">
        <div class="input-data">
           <input type="text" name="nama_sekolah" class="@error('nama_sekolah') is-invalid @enderror"  value="{{old('nama_sekolah')?? $sekolah->nama_sekolah}}"> 
           <div class="underline"></div>
           <label for="">Nama Sekolah</label>
           <div class="mt2 text-danger">
            @error('nama_sekolah')
            {{$message}}
            @enderror
        </div>
        </div>
    </div>

        <div class="d-flex justify-content-lg-between">
            <div></div>
            <div>
        <button type="submit" class="btn btn-primary mt-2">Update</button>
    </div>
    </div>
    </div>
</div>  
</form>
</div>

@stop