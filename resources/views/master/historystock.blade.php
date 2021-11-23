@extends('layouts.home')

@section('container')
<div class="container-fluid">
    <div class="col-6">
        <h1>Data Jenis Barang</h1>
    </div>

    <p><a href="/insert_barang"<button type="button" class="btn btn-primary float-right">
        Tambah Data Barang</button></a></p>
    <br>

    <div class="col-6">
    </div>

    <!-- DATABASE -->                    
    <br>
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">ID History Stock</th>
            <th scope="col">Kode Barang</th>
            <th scope="col">Tangga History Stock</th>
            <th scope="col">Update Stock History Stock</th>
            <th scope="col">Status History Stock</th>
            <th scope="col">Aksi</th>
        </tr>
        </thead>

        @foreach ($history_stock as $item)
            <tbody>
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->id }}</td>
                <td>{{ $item->tgl_hs }}</td>
                <td>{{ $item->update_stock_hs }}</td>
                <td>{{ $item->status_hs }}</td>
                <form action="{{ url('/edit_history_stock',$item->id) }}" method="POST">
                    <td><button type="submit" class="btn btn-info btn-sm")>Edit</button></td>
                </form>

                <form action="{{ url('/destroy_history_stock',$item->id) }}" method="POST">
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