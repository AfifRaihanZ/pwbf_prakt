@extends('layouts.home')

@section('container')
<div class="content">
    <div class="card card-info card-outline">
        <div class="card-header">
            <div class="card-tools">
                <h1 class="mt-4">Input Role Baru</h1>
            </div>
        

        <div class="card-body">
            <form action="{{ url('/create_role') }}" method="post">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                    <div class="form-group">
                        <div class="form-group">
                            <label>ID User</label>
                            <input name="id_user" type="number" class="form-control" id="" placeholder="Masukkan ID User">
                        </div>
                        <div class="form-group">
                            <label>Jenis Role</label>
                            <input name="jenis_role" type="text" class="form-control" id="" placeholder="Masukkan Jenis Role">
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