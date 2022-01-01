@extends('layouts.home')

@section('container')
<div class="content">
    <div class="card card-info card-outline">
        <div class="card-header">
            <div class="card-tools">
                <h1 class="mt-4">Edit User</h1>
            </div>
        

        <div class="card-body">
            <form action="{{ url('/updateuser/{id}') }}" method="POST">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                    <div class="form-group">
                        <div class="form-group">
                            <label>Name</label>
                            <input name="nama_user" type="text" class="form-control" value="{{ $user->nama_user }}">
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <input name="alamat_user" type="text" class="form-control" value="{{ $user->alamat_user }}">
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input name="telp_user" type="text" class="form-control" value="{{ $user->telp_user }}">
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input name="username" type="text" class="form-control" value="{{ $user->username }}">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input name="password" type="text" class="form-control" value="{{ $user->password }}">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection