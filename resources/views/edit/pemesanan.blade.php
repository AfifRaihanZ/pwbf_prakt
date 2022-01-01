@extends('layouts.home')

@section('container')
<div class="content">
    <div class="card card-info card-outline">
        <div class="card-header">
            <div class="card-tools">
                <h1 class="mt-4">Edit Booking</h1>
            </div>
        

        <div class="card-body">
            <form action="{{ url('/updatepemesanan/{id}')}}" method="post">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                <div class="form-group">
                    <div class="form-group">
                        <label>Supplier ID</label>
                        <input name="id_sup" type="number" class="form-control" value="{{ $pemesanan->id_sup }}">
                    </div>
                    <div class="form-group">
                        <label>User ID</label>
                        <input name="id_user" type="number" class="form-control" value="{{ $pemesanan->id_user }}">
                    </div>
                    <div class="form-group">
                        <label>Order Date</label>
                        <input name="tgl_pesan" type="date" class="form-control" value="{{ $pemesanan->tgl_pesan }}">
                    </div>
                    <div class="form-group">
                        <label>Order Status</label>
                        <input name="status_pesan" type="text" class="form-control" value="{{ $pemesanan->status_pesan }}">
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