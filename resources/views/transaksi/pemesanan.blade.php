@extends('layouts.home')

@section('container')
    <!-- Begin Page Content -->
        <div class="container-fluid">
            @if(session('sukses'))
                <div class="alert alert-success" role="alert">
                    Data berhasil diinput!
                </div>
            @endif
            
        <div class="col-6">
            <h1>Data Pemesanan</h1>
        </div>
        <p><a href="/insert_pemesanan"<button type="button" class="btn btn-primary float-right">
            Tambah Data Pemesanan</button></a></p>
        <br>

        <div class="col-6"></div>

        <!-- DATABASE -->                    
        <br>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID Pemesanan</th>
                        <th scope="col">ID Supplier</th>
                        <th scope="col">ID User</th>
                        <th scope="col">Tanggal Pesan</th>
                        <th scope="col">Status Pesan</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>

        @foreach ($pemesanan as $item)
            <tbody>
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->tgl_pesan }}</td>
                    <td>{{ $item->status_pesan }}</td>
                    <form action="{{ url('/edit_pemesanan',$item->id) }}" method="POST">
                        <td><button type="submit" class="btn btn-info btn-sm")>Edit</button></td>
                    </form>

                    <form action="{{ url('/destroy_pemesanan',$item->id) }}" method="POST"
                        @csrf
                        @method('DELETE')
                        <td><button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin menghapus?')")>Delete</button></td>
                    </form>
                </tr>
        @endforeach
            </tbody>
            </table>
        
        </div>
@endsection