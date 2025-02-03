@extends('layout.app')
@section('content')
<div class="container">
    @if(session()->has('sukses'))
    <div class="alert alert-success">
        {{session()->get('sukses')}}
    </div>
    @endif
    <div class="d-flex justify-content-lg-between mb-2">
        <div>
        </div>
        <div>
            <div>
                <a href="/kelas/create" class="btn btn-primary">New Kelas</a>
            </div>

            {{-- //tambah --}}
        </div>
    </div>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-10">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nama_Kelas</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col" class="pl-5">Aksi</th>
                </tr>
            </thead>

            @foreach($kelas as $kel)
            <tbody>
                <tr>
                    <td>{{$kel->id}}</td>
                    <td>{{$kel->nama_kelas}}</td>
                    <td>{{$kel->jurusan}}</td>
                    <td width="25%">
                        <a class="btn btn-danger btn-sm mr-2" type="button" data-toggle="modal" data-target="#hapus"
                            href="">
                            Delete</a>
                        <a href="" class="btn btn-success btn-sm mr-2">Update</a>
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>

    {{-- //hapus --}}
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
                    <form action="/kelas/{{$kel->id}}/delete" method="post">
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



    <div>
        {!! $kelas->links() !!}


    </div>

</div>
@stop
@section('script')
<script type="text/javascript">
    @if(count($errors) > 0)
    $('#TambahKelas').modal('show');
    @endif

</script>
@stop
