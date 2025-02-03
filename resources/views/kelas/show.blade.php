@extends('layout.app')
@section('content')
<div class="container">

<button type="button" class="btn text-danger btn-sm" data-toggle="modal" data-target="#hapus">
    Delete
  </button>


















  {{-- //modal --}}
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
          <div>{{$kelas->id}}</div>
            <form action="/kelas/{{$kelas->id}}/delete" method="post">
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
</div>
@stop