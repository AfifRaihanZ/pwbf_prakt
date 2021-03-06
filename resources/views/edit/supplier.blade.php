@extends('layouts.home')

@section('container')
<div class="content">
    <div class="card card-info card-outline">
        <div class="card-header">
            <div class="card-tools">
                <h1 class="mt-4">Edit Supplier</h1>
            </div>
        

    <div class="card-body">
        <form action="{{ url('/updatesupplier/{id}') }}" method="post">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <div class="form-group">
                    <div class="form-group">
                    <label>City ID</label>
                    <input name="id_kota" type="text" class="form-control" value="{{ $supplier->id_kota }}">
                </div>
                <div class="form-group">
                    <label>Name</label>
                    <input name="nama_sup" type="text" class="form-control" value="{{ $supplier->nama_sup }}">
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input name="alamat_sup" type="text" class="form-control" value="{{ $supplier->alamat_sup }}">
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input name="telp_sup" type="text" class="form-control" value="{{ $supplier->telp_sup }}">
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