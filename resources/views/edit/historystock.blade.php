@extends('layouts.home')

@section('container')
<div class="content">
    <div class="card card-info card-outline">
        <div class="card-header">
            <div class="card-tools">
                <h1 class="mt-4">Edit History Stock</h1>
            </div>
        

        <div class="card-body">
            <form action="{{ url('/updatehistorystock/{id}') }}" method="post">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                    <div class="form-group">
                        <div class="form-group">
                            <label>Item Code</label>
                            <input name="id_barang" type="number" class="form-control" value="{{ $history_stock->id_bar }}">
                        </div>
                        <div class="form-group">
                            <label>Stock History Date</label>
                            <input name="tgl_hs" type="date" class="form-control" value="{{ $history_stock->tgl_hs }}">
                        </div>
                        <div class="form-group">
                            <label>Stock History Updates</label>
                            <input name="update_stock_hs" type="number" class="form-control" value="{{ $history_stock->update_history_stock }}">
                        </div>
                        <div class="form-group">
                            <label>Stock History Status</label>
                            <input name="status_hs" type="text" class="form-control" value="{{ $history_stock->status_hs }}">
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