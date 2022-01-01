@extends('layouts.home')

@section('container')
<div class="content">
    <div class="card card-info card-outline">
        <div class="card-header">
            <div class="card-tools">
                <h1 class="mt-4">Edit Payment</h1>
            </div>
        

        <div class="card-body">
            <form action="{{ url('/updatepembayaran/{id}') }}" method="post">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                <div class="form-group">
                    <div class="form-group">
                        <label>Reception ID</label>
                        <input name="id_trima" type="number" class="form-control" value="{{ $pembayaran->id_trima }}">
                    </div>
                    <div class="form-group">
                        <label>Payment Date</label>
                        <input name="tgl_bayar" type="date" class="form-control" value="{{ $pembayaran->tgl_bayar }}">
                    </div>
                    <div class="form-group">
                        <label>Total</label>
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