@extends('layouts.home')

@section('container')
<div class="content">
    <div class="card card-info card-outline">
        <div class="card-header">
            <div class="card-tools">
                <h1 class="mt-4">Update Data Jenis Barang</h1>
            </div>
        

        <div class="card-body">
            <form action="/jenisbarang" method="post">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                @method('get')
                @csrf
                    <div class="form-group">
                        <div class="form-group">
                            <label>Jenis Barang</label>
                            <input name="jenis_barang" type="text" class="form-control" id="" 
                            required autofocus value="{{ old('jenisbarang') }}">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection