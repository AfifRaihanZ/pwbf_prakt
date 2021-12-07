@extends('layouts.home')

@section('container')
<div class="content">
    <div class="card card-info card-outline">
        <div class="card-header">
            <div class="card-tools">
                <h1 class="mt-4">Input Pemesanan Baru</h1>
            </div>
        

        <div class="card-body">
            <form action="{{ url('/create_pemesanan') }}" method="post">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                <div class="form-group">
                    <div class="form-group">
                        <label>ID Supplier</label>
                        <input name="id_sup" type="number" class="form-control" id="" placeholder="Masukkan ID Supplier">
                    </div>
                    <div class="form-group">
                        <label>ID User</label>
                        <input name="id_user" type="number" class="form-control" id="" placeholder="Masukkan ID User">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Pemesanan</label>
                        <input name="tgl_pesan" type="date" class="form-control" id="" placeholder="Masukkan Tanggal Pemesanan">
                    </div>
                    <div class="form-group">
                        <label>Status Pemesanan</label>
                        <input name="status_pesan" type="text" class="form-control" id="" placeholder="Masukkan Status Pemesanan">
                        {{-- <select name="status_trima" id="" class="form-control">
                            <option value="status_trima">- Pilih Status Pembayaran -</option>
                            <option value="belumbayar">Belum Bayar</option>
                            <option value="dikemas">Dikemas</option>
                            <option value="dikirim">Dikirim</option>
                            <option value="selesai">Selesai</option>
                            <option value="dibatalkan">Dibatalkan</option>   
                        </select> --}}
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