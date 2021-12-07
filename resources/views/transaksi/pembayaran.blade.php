@extends('layouts.home')

@section('container')
<div class="container-fluid">
    @if(session('sukses'))
        <div class="alert alert-success" role="alert">
            Data berhasil diinput!
        </div>
    @endif
    <div class="col-6">
        <h1>Data Pembayaran</h1>
    </div>

    <p><a href="/insert_pembayaran"<button type="button" class="btn btn-primary float-right">
        Tambah Data Pembayaran</button></a></p>
    <br>

    <div class="col-6">
    </div>

    <!-- DATABASE -->                    
    <br>
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">ID Pembayaran</th>
            <th scope="col">ID Penerimaan</th>
            <th scope="col">Tanggal Pembayaran</th>
            <th scope="col">Total Pembayaran</th>
            <th scope="col">Aksi</th>
        </tr>
        </thead>

        @foreach ($pembayaran as $item)
            <tbody>
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->id }}</td>
                <td>{{ $item->tgl_bayar }}</td>
                <td>{{ $item->total_bayar }}</td>
                <form action="{{ url('/edit_pembayaran',$item->id) }}" method="POST">
                    <td><button type="submit" class="btn btn-info btn-sm")>Edit</button></td>
                </form>

                <form action="{{ url('/destroy_pembayaran',$item->id) }}" method="POST">
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