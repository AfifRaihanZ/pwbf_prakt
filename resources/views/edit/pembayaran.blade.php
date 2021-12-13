@extends('layouts.home')

@section('container')
<div class="content">
    <div class="card card-info card-outline">
        <div class="card-header">
            <div class="card-tools">
                <h1 class="mt-4">Edit Pembayaran</h1>
            </div>
        

        <div class="card-body">
            <form action="{{ url('/update_pembayaran/{id}') }}" method="post">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                <div class="form-group">
                    <div class="form-group">
                        <label>ID Penerimaan</label>
                        <input name="id_trima" type="number" class="form-control" value="{{ $pembayaran->id_trima }}">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Pembayaran</label>
                        <input name="tgl_bayar" type="date" class="form-control" value="{{ $pembayaran->tgl_bayar }}">
                    </div>
                    <div class="form-group">
                        <label>Total Pembayaran</label>
                        <input name="total_bayar" type="text" class="form-control" value="{{ $pembayaran->total_bayar }}">
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