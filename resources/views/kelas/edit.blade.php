    @extends('layout.app')
    @section('style')
    <link rel="stylesheet" href="{{asset('css/form/formCreate.css')}}">
    @stop
    @section('content')
    <div class="container">
        <div class="card col-md-5 mx-auto" style="margin-top:100px;">
        <div class="card-body">
    <form action="/kelas/{{$kelas->id}}/update" method="post">
        @method('patch')
        @csrf
        <div class="wrapper ">
            <div class="input-data">
            <input type="text" name="nama_kelas" class="@error('nama_kelas') is-invalid @enderror" required value="{{old('nama_kelas') ?? $kelas->nama_kelas}}"> 
            <div class="underline"></div>
            <label for="">Nama Kelas</label>
            <div class="mt2 text-danger">
                @error('nama_kelas')
                {{$message}}
                @enderror
            </div>
            </div>
        </div>

        <div class="wrapper my-4">
            <div class="input-data">
            <input type="text" name="jurusan" class="@error('jurusan') is-invalid @enderror" required value="{{$kelas->jurusan}}"> 
            <div class="underline"></div>
            <label for="">Jurusan</label>
            <div class="mt2 text-danger">
                @error('jurusan')
                {{$message}}
                @enderror
            </div>
            </div>
        </div>
            <div class="d-flex justify-content-lg-between">
                <div>
                    <button type="reset" class="btn btn-danger mt-2 ">Reset</button>
                </div>
                <div>
            <button type="submit" class="btn btn-success mt-2">Update</button>
        </div>
        </div>
        </div>
    </div>  
    </form>
    </div>
    @stop
