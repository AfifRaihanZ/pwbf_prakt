@extends('layouts.home')

@section('container')
<div class="content">
    <div class="card card-info card-outline">
        <div class="card-header">
            <div class="card-tools">
                <h1 class="mt-4">Edit Types of Items</h1>
            </div>
        

        <div class="card-body">
            <form action="{{ url('/updatejenisbarang/{id}') }}" method="post">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                    <div class="form-group">
                        <div class="form-group">
                            <label>Types of Items</label>
                            <input name="jenis_barang" type="text" class="form-control" value="{{ $jenisbarang->jenis_barang }}">
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