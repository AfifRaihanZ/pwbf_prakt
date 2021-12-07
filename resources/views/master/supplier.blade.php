@extends('layouts.home')

@section('container')
<div class="container-fluid">
    @if(session('sukses'))
        <div class="alert alert-success" role="alert">
            Data berhasil diinput!
        </div>
    @endif
    <div class="col-6">
        <h1>Data Supplier</h1>
    </div>
    <p><a href="/insert_supplier"<button type="button" class="btn btn-primary float-right">
        Tambah Data Supplier</button></a></p>
    <br>

    <div class="col-6">
    </div>

    <!-- DATABASE -->                    
    <br>
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">ID Supplier</th>
            <th scope="col">ID Kota</th>
            <th scope="col">Nama Supplier</th>
            <th scope="col">Alamat Supplier</th>
            <th scope="col">Telp Supplier</th>
            <th scope="col">Aksi</th>
        </tr>
        </thead>

        @foreach ($supplier as $item)
            <tbody>
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->id }}</td>
                <td>{{ $item->nama_sup }}</td>
                <td>{{ $item->alamat_sup }}</td>
                <td>{{ $item->telp_sup }}</td>
                <form action="{{ url('/edit_supplier',$item->id) }}" method="POST">
                    <td><button type="submit" class="btn btn-info btn-sm")>Edit</button></td>
                </form>

                <form action="{{ url('/destroy_supplier',$item->id) }}" method="POST">
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