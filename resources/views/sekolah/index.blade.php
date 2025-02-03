@extends('layout.template')
@section('content')

<div style="position: absolute" class="content1">

  {{-- //breadcrumb-header --}}
 
  <div class="header-table">
    <h1>SEKOLAH</h1>
  </div>
  {{-- end bread-crumb --}}
  <div class="d-flex justify-content-lg-between">
    <div></div>
<div class="tambah">
  <a href="/sekolah/create/" class="btn btn-primary btn-sm">Tambah</a>
</div>
  </div>
  <table class="table table-hover " width="100%">
    <thead>
      <tr>
        <th scope="col" width="25%" class="border-top-0">ID</th>
        <th scope="col" width="33%" class="border-top-0">Nama_Sekolah</th>
        <th scope="col" width="33%" class="border-top-0 aksi">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach($sekolah as $sekolah)
      <tr>
        <th scope="row">{{$sekolah->id}}</th>
        <td>{{$sekolah->nama_sekolah}}</td>
        <td width="">   <a class="btn btn-success btn-sm mr-2" type="button"
          href="sekolah/{{$sekolah->id}}/edit">
          Update</a>
          <a class="btn btn-danger btn-sm mr-2" type="button" data-toggle="modal" data-target="#hapus"
          href="#hapus?id={{$sekolah->id}}">
          Delete</a>
        </td>

      </tr>
      @endforeach
    </tbody>
  </table>
</div>

{{-- //modal hapus --}}
<div class="modal fade" id="hapus" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Hapus</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <div class="mb-1">Yakin ingin dihapus</div>
              <form action="/sekolah/{{$sekolah->id}}/delete" method="post">
                  @csrf
                  @method('delete')
                  <div class="d-flex">
                      <button class="btn btn-danger " type="submit">Ya</button>
                      <button type="button" class="btn btn-secondary ml-2" data-dismiss="modal">Tidak</button>
                  </div>
              </form>
          </div>
          <div class="modal-footer">
          </div>
      </div>
  </div>
</div>

@stop