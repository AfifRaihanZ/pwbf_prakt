@extends('layouts.home')

@section('container')
<div class="container-fluid">
    @if(session('sukses'))
        <div class="alert alert-success" role="alert">
            Data berhasil diinput!
        </div>
    @endif
    <div class="col-6">
        <h1>Data Role</h1>
    </div>
    <p><a href="/insert_role"<button type="button" class="btn btn-primary float-right">
        Tambah Data Role</button></a></p>
    <br>

    <div class="col-6">
    </div>

    <!-- DATABASE -->                    
    <br>
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">ID Role</th>
            <th scope="col">ID User</th>
            <th scope="col">Jenis Role</th>
            <th scope="col">Aksi</th>
        </tr>
        </thead>

        @foreach ($role as $item)
            <tbody>
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->id }}</td>
                <td>{{ $item->jenis_role }}</td>
                <form action="{{ url('/edit_role',$item->id) }}" method="POST">
                    <td><button type="submit" class="btn btn-info btn-sm")>Edit</button></td>
                </form>

                <form action="{{ url('/destroy_role',$item->id) }}" method="POST">
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