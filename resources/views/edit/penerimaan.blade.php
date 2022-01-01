@extends('layouts.home')

@section('container')
<div class="content">
    <div class="card card-info card-outline">
        <div class="card-header">
            <div class="card-tools">
                <h1 class="mt-4">Edit Reception</h1>
            </div>
        

        <div class="card-body">
            <form action="{{ url('/updatepenerimaan/{id}') }}" method="post">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                <div class="form-group">
                    <div class="form-group">
                        <label>Supplier ID</label>
                        <input name="id_sup" type="number" class="form-control" value="{{ $penerimaan->id_sup }}">
                    </div>
                    <div class="form-group">
                        <label>User ID</label>
                        <input name="id_user" type="number" class="form-control" value="{{ $penerimaan->id_user }}">
                    </div>
                    <div class="form-group">
                        <label>Receipt Date</label>
                        <input name="tgl_trima" type="date" class="form-control" value="{{ $penerimaan->tgl_trima }}">
                    </div>
                    <div class="form-group">
                        <label>Total</label>
                        <input name="total_harga" type="text" class="form-control" value="{{ $penerimaan->total_harga }}">
                    </div>
                    <div class="form-group">
                        <label>Acceptance Status</label>
                        <input name="status_trima" type="text" class="form-control" value="{{ $penerimaan->status_trima }}">
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