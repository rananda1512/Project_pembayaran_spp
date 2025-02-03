    @extends('layout.app')
    @section('content')
    <div class="container">
        <div class="d-flex justify-content-lg-between mb-2">
            <div>
            </div>
            <div>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Tambah siswa
                </button>

                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Siswa</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="siswa/create" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control" id="nama" placeholder="nama" name="nama">
                                </div>
                                <div class="form-group">
                                    <label for="kelas">Kelas</label>
                                    <input type="text" class="form-control" id="kelas" placeholder="kelas" name="kelas">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" id="email" placeholder="email" name="email">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

            </div>
        </div>
        <div class="row">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Email</th>
                        <th scope="col" class="pl-5">Aksi</th>
                    </tr>
                </thead>
                
                @foreach($siswa as $siswa)
                <tbody>
                    <tr>
                        <td>{{$siswa->id}}</td>
                        <td>{{$siswa->nama}}</td>
                        <td>{{$siswa->kelas}}</td>
                        <td>{{$siswa->email}}</td>
                        <td width="25%">
                            <a class="btn btn-success btn-sm mr-2" type="button" data-toggle="modal" data-target="#hapus" href="#hapus/{{$siswa->id}}">
                             Delete</a>
                             <a href="siswa/{{$siswa->id}}">Detail</a>
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
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
                  <div>{{$siswa->id}}</div>
                    <form action="/siswa/{{$siswa->id}}/delete" method="post">
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
