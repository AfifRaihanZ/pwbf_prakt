@extends('layouts.home')

@section('container')
<div class="content">
    <div class="card card-info card-outline">
        <div class="card-header">
            <div class="card-tools">
                <h1 class="mt-4">Input Detail Pemesanan Baru</h1>
            </div>
        

        <div class="card-body">
            <form action="{{ url('/create_detail_pemesanan') }}" method="post">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                    <div class="form-group">
                        <div class="form-group">
                            <label>Kode Barang</label>
                            <input name="id_bar" type="text" class="form-control" id="" placeholder="Masukkan Kode Barang">
                        </div>
                        <div class="form-group">
                            <label>ID Pemesanan</label>
                            <input name="id_pesan" type="text" class="form-control" id="" placeholder="Masukkan ID Pemesanan">
                        </div>
                        <div class="form-group">
                            <label>Jumlah Up</label>
                            <input name="jumlah_up" type="integer" class="form-control" id="" placeholder="Masukkan Jumlah Up">
                        </div>
                        <div class="form-group">
                            <label>Harga Up</label>
                            <input name="harga_up" type="text" class="form-control" id="" placeholder="Masukkan Harga Up">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
        </div>
    </div>
</div>
@endsection