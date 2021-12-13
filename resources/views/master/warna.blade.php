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
            <h1>Data Warna</h1>
        </div>

            <!-- Button trigger modal -->
            {{-- <p><a href="warna/create"<button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
                Tambah Data Warna
            </button></a></p>
            <br> --}}

            <p><a href="/insert_warna"<button type="button" class="btn btn-primary float-right">
                Tambah Data Warna</button></a></p>
            <br>

            {{-- <form action  = "{{ url('/warna/tambah') }}" method="post">
                <input type = "hidden" name = "_token" value ="<?php echo csrf_token(); ?>"> --}}

                {{-- <p><a href="/warna/create"<button type="button" claas="btn btn-primary">
                    Tambah Data Warna</button></a></p> --}}
        <div class="col-6">
        </div>

        <!-- DATABASE -->                    
        <br>
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">ID Warna</th>
                <th scope="col">Warna</th>
                <th scope="col">Aksi</th>
            </tr>
            </thead>

            @foreach ($warna as $item)
                <tbody>
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->warna }}</td>
                    <form action="{{ url('/edit_warna',$item->id) }}" method="GET">
                        <td><button type="submit" class="btn btn-info btn-sm")>Edit</button></td>
                    </form>

                    <form action="{{ url('/destroy_warna',$item->id) }}" method="POST">
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