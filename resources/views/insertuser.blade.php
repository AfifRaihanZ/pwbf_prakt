@extends('layouts.home')

@section('container')
<div class="content">
    <div class="card card-info card-outline">
        <div class="card-header">
            <div class="card-tools">
                <h1 class="mt-4">Input User Baru</h1>
            </div>
        

        <div class="card-body">
            <form action="{{ url('/create_user') }}" method="post">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                    <div class="form-group">
                        <div class="form-group">
                            <label>Nama User</label>
                            <input name="nama_user" type="text" class="form-control" id="" placeholder="Masukkan Nama User">
                        </div>
                        <div class="form-group">
                            <label>Alamat User</label>
                            <input name="alamat_user" type="text" class="form-control" id="" placeholder="Masukkan Alamat User">
                        </div>
                        <div class="form-group">
                            <label>Telp User</label>
                            <input name="telp_user" type="text" class="form-control" id="" placeholder="Masukkan Telp User">
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input name="username" type="text" class="form-control" id="" placeholder="Masukkan Username">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input name="password" type="text" class="form-control" id="" placeholder="Masukkan Password">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
        </div>
        </div>
    </div>
</div>
@endsection