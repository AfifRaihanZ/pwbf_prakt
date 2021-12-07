@extends('layouts.home')

@section('container')
    <div class="container-fluid">
        @if(session('sukses'))
            <div class="alert alert-success" role="alert">
                Data berhasil diinput!
            </div>
        @endif

    <div class="col-6">
        <h1>Data Barang</h1>
    </div>

    <p><a href="/insert_barang"<button type="button" class="btn btn-primary float-right">
        Tambah Data Barang</button></a></p>
    <br>

    <div class="col-6"></div>

    <!-- DATABASE -->                    
    <br>
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">Kode Barang</th>
            <th scope="col">ID Jenis Barang</th>
            <th scope="col">Nama Barang</th>
            <th scope="col">Stock Barang</th>
            <th scope="col">Harga Beli Barang</th>
            <th scope="col">Harga Jual Barang</th>
            <th scope="col">Aksi</th>
        </tr>
        </thead>

        @foreach ($barang as $item)
            <tbody>
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->id }}</td>
                <td>{{ $item->nama_bar }}</td>
                <td>{{ $item->stock_bar }}</td>
                <td>{{ $item->harga_beli_bar }}</td>
                <td>{{ $item->harga_jual_bar }}</td>
                <form action="{{ url('/edit_barang',$item->id) }}" method="POST">
                    <td><button type="submit" class="btn btn-info btn-sm")>Edit</button></td>
                </form>

                <form action="{{ url('/destroy_barang',$item->id) }}" method="POST">
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