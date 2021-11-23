@extends('layouts.home')

@section('container')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <div class="col-6">
            <h1>Data Jenis Barang</h1>
        </div>

            <!-- Button trigger modal -->
            {{-- <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
                Tambah Data Jenis Barang
            </button> --}}
            <p><a href="/insert_jenis_barang"<button type="button" class="btn btn-primary float-right">
                Tambah Data Jenis Barang</button></a></p>
            <br>
            
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Input Data Jenis Barang</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                        <form action="/jenisbarang/create" method="POST">
                            <div class="form-group">
                              <label for="exampleInputIDUser">ID Jenis Barang</label>
                              <input name="id_user" type="text" class="form-control" id="exampleInputIDUser" placeholder="Masukkan ID Jenis Barang">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputNamaUser">Jenis Barang</label>
                              <input name="nama_user" type="text" class="form-control" id="exampleInputNamaUser" placeholder="Masukkan Jenis Barang">
                            </div>
                    </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
                </div>
            </div>

        <div class="col-6">
        </div>

        <!-- DATABASE -->                    
        <br>
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">ID Jenis Barang</th>
                <th scope="col">Jenis Barang</th>
                <th scope="col">Aksi</th>
            </tr>
            </thead>

            @foreach ($jenis_barang as $item)
                <tbody>
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->jenis_barang }}</td>
                    {{-- <td><a href="#" class="btn btn-warning btn-sm">Edit</a></td>
                    <td><a href="#">Delete</a></td> --}}
                    <form action="{{ url('/edit_jenis_barang',$item->id) }}" method="POST">
                        @csrf
                        <td><button type="submit" class="btn btn-info btn-sm")>Edit</button></td>
                    </form>

                    <form action="{{ url('/destroy_jenis_barang',$item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <td><button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin menghapus?')")>Delete</button></td>
                    </form>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
@endsection