@extends('layouts.home')

@section('container')
<div class="content">
    <div class="card card-info card-outline">
        <div class="card-header">
            <div class="card-tools">
                <h1 class="mt-4">Input Barang Baru</h1>
            </div>
        

        <div class="card-body">
            <form action="{{ url('/create_barang') }}" method="post">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                    <div class="form-group">
                        <div class="form-group">
                            <label>ID Jenis Barang</label>
                            <input name="id_jb" type="text" class="form-control" id="" placeholder="Masukkan ID Jenis Barang">
                        </div>
                        <div class="form-group">
                            <label>Nama Barang</label>
                            <input name="nama_bar" type="text" class="form-control" id="" placeholder="Masukkan Nama Barang">
                        </div>
                        <div class="form-group">
                            <label>Stock Barang</label>
                            <input name="stock_bar" type="text" class="form-control" id="" placeholder="Masukkan Stock Barang">
                        </div>
                        <div class="form-group">
                            <label>Harga Beli Barang</label>
                            <input name="harga_beli_bar" type="number" class="form-control" id="" placeholder="Masukkan Harga Beli Barang">
                        </div>
                        <div class="form-group">
                            <label>Harga Jual Barang</label>
                            <input name="harga_jual_bar" type="number" class="form-control" id="" placeholder="Masukkan Harga Jual Barang">
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