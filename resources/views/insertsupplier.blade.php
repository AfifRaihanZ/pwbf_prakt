@extends('layouts.home')

@section('container')
<div class="content">
    <div class="card card-info card-outline">
        <div class="card-header">
            <div class="card-tools">
                <h1 class="mt-4">Input Supplier Baru</h1>
            </div>
        

        <div class="card-body">
            <form action="{{ url('/create_supplier') }}" method="post">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                    <div class="form-group">
                        <div class="form-group">
                            <label>ID Kota</label>
                            <input name="id_kota" type="text" class="form-control" id="" placeholder="Masukkan ID Kota">
                        </div>
                        <div class="form-group">
                            <label>Nama Supplier</label>
                            <input name="nama_sup" type="text" class="form-control" id="" placeholder="Masukkan Nama Sup">
                        </div>
                        <div class="form-group">
                            <label>Alamat Supplier</label>
                            <input name="alamat_sup" type="text" class="form-control" id="" placeholder="Masukkan Alamat Sup">
                        </div>
                        <div class="form-group">
                            <label>Telp Supplier</label>
                            <input name="telp_sup" type="text" class="form-control" id="" placeholder="Masukkan Telp Sup">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
        </div>
    </div>
</div>
@endsection