@extends('layouts.home')

@section('container')
<div class="content">
    <div class="card card-info card-outline">
        <div class="card-header">
            <div class="card-tools">
                <h1 class="mt-4">Edit Penerimaan</h1>
            </div>
        

        <div class="card-body">
            <form action="{{ url('/update_penerimaan/{id}') }}" method="post">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                <div class="form-group">
                    <div class="form-group">
                        <label>ID Supplier</label>
                        <input name="id_sup" type="number" class="form-control" value="{{ $penerimaan->id_sup }}">
                    </div>
                    <div class="form-group">
                        <label>ID User</label>
                        <input name="id_user" type="number" class="form-control" value="{{ $penerimaan->id_user }}">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Penerimaan</label>
                        <input name="tgl_trima" type="date" class="form-control" value="{{ $penerimaan->tgl_trima }}">
                    </div>
                    <div class="form-group">
                        <label>Total Harga</label>
                        <input name="total_harga" type="text" class="form-control" value="{{ $penerimaan->total_harga }}">
                    </div>
                    <div class="form-group">
                        <label>Status Penerimaan</label>
                        <input name="status_trima" type="text" class="form-control" value="{{ $penerimaan->status_trima }}">
                        {{-- <select name="status_trima" id="" class="form-control">
                        <option value="status_trima">- Pilih Status Penerimaan -</option>
                        <option value="sudahditerima">Sudah Diterima</option>
                        <option value="belumditerima">Belum Diterima</option>
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