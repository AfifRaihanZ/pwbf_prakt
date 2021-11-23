@extends('layouts.home')

@section('container')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <div class="col-6">
            <h1>Data User</h1>
        </div>
        <p><a href="/insert_user"<button type="button" class="btn btn-primary float-right">
            Tambah Data User</button></a></p>
        <br>

        <div class="col-6">
        </div>

        <!-- DATABASE -->                    
        <br>
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">ID User</th>
                <th scope="col">Nama User</th>
                <th scope="col">Alamat User</th>
                <th scope="col">Telp User</th>
                <th scope="col">Username</th>
                <th scope="col">Password</th>
                <th scope="col">Aksi</th>
            </tr>
            </thead>

            @foreach ($user as $item)
                <tbody>
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->nama_user }}</td>
                    <td>{{ $item->alamat_user }}</td>
                    <td>{{ $item->telp_user }}</td>
                    <td>{{ $item->username }}</td>
                    <td>{{ $item->password }}</td>
                    <form action="{{ url('/edit_pengguna',$item->id) }}" method="POST">
                        <td><button type="submit" class="btn btn-info btn-sm")>Edit</button></td>
                    </form>

                    <form action="{{ url('/destroy_pengguna',$item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <td><button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin menghapus?')")>Delete</button></td>
                    </form>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
@endsection