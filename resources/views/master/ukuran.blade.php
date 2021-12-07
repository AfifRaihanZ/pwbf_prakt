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
            <h1>Data Ukuran</h1>
        </div>

        <p><a href="/insert_ukuran"<button type="button" class="btn btn-primary float-right">
            Tambah Data Ukuran</button></a></p>
        <br>

        <div class="col-6">
        </div>

        <!-- DATABASE -->                    
        <br>
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">ID Ukuran</th>
                <th scope="col">Ukuran</th>
                <th scope="col">Aksi</th>
            </tr>
            </thead>

            @foreach ($ukuran as $item)
                <tbody>
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->ukuran }}</td>
                    <form action="{{ url('/edit_ukuran',$item->id) }}" method="POST">
                        <td><button type="submit" class="btn btn-info btn-sm")>Edit</button></td>
                    </form>

                    <form action="{{ url('/destroy_ukuran',$item->id) }}" method="POST">
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