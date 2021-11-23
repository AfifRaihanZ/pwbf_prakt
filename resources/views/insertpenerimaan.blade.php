@extends('layouts.home')

@section('container')
<div class="content">
    <div class="card card-info card-outline">
        <div class="card-header">
            <div class="card-tools">
                <h1 class="mt-4">Input Penerimaan Baru</h1>
            </div>
        

        <div class="card-body">
            <form action="{{ url('/create_penerimaan') }}" method="post">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                    <div class="form-group">
                        <div class="form-group">
                            <label>ID Supplier</label>
                            <input name="id_sup" type="text" class="form-control" id="" placeholder="Masukkan ID Supplier">
                        </div>
                        <div class="form-group">
                            <label>ID User</label>
                            <input name="id_user" type="text" class="form-control" id="" placeholder="Masukkan ID User">
                        </div>
                        <div class="form-group">
                            <label>Tanggal Penerimaan</label>
                            <input name="tgl_trima" type="date" class="form-control" id="" placeholder="Masukkan ID User">
                        </div>
                        <div class="form-group">
                            <label>Total Harga</label>
                            <input name="total_harga" type="text" class="form-control" id="" placeholder="Masukkan Total Harga">
                        </div>
                        <div class="form-group">
                            <label>Status Penerimaan</label>
                            <select name="status_trima" id="" class="form-control">
                            <option value="status_trima">- Pilih Status Penerimaan -</option>
                            <option value="diterima">Diterima</option>
                            <option value="belum_diterima">Belum Diterima</option>
                            </select>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
        </div>
    </div>
</div>
@endsection