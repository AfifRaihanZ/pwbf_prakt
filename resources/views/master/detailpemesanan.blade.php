@extends('layouts.home')

@section('container')
<div class="container-fluid">
    <div class="col-6">
        <h1>Data Detail Pemesanan</h1>
    </div>
    <p><a href="/insert_detail_pemesanan"<button type="button" class="btn btn-primary float-right">
        Tambah Data Detail Pemesanan</button></a></p>
    <br>

    <div class="col-6">
    </div>

    <!-- DATABASE -->                    
    <br>
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">Kode Barang</th>
            <th scope="col">ID Pemesanan</th>
            <th scope="col">Jumlah Up</th>
            <th scope="col">Harga Up</th>
            <th scope="col">Aksi</th>
        </tr>
        </thead>

        @foreach ($detail_pemesanan as $item)
            <tbody>
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->id }}</td>
                <td>{{ $item->jumlah_up }}</td>
                <td>{{ $item->harga_up }}</td>
                <form action="{{ url('/edit_detail_pemesanan',$item->id) }}" method="POST">
                    <td><button type="submit" class="btn btn-info btn-sm")>Edit</button></td>
                </form>

                <form action="{{ url('/destroy_detail_pemesanan',$item->id) }}" method="POST">
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