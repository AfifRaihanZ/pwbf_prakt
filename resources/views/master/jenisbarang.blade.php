@extends('layouts.home')

@section('container')
    <div class="container-fluid">
        @if(session('sukses'))
            <div class="alert alert-success" role="alert">
                Data berhasil diinput!
            </div>
        @endif
        
        <div class="col-6">
            <h1>Data Jenis Barang</h1>
        </div>

            <p><a href="/insert_jenis_barang"<button type="button" class="btn btn-primary float-right">
                Tambah Data Jenis Barang</button></a></p>
            <br>

        <div class="col-6"></div>

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
@endsection