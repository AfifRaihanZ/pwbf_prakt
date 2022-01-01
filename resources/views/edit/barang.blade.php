@extends('layouts.home')

@section('container')
<div class="content">
    <div class="card card-info card-outline">
        <div class="card-header">
            <div class="card-tools">
                <h1 class="mt-4">Edit Item</h1>
            </div>
        

        <div class="card-body">
            <form action="{{ url('/updatebarang/{id}') }}" method="POST">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                    <div class="form-group">
                        <div class="form-group">
                            <label>Item Type ID</label>
                            <input name="id_jb" type="text" class="form-control" value="{{ $barang->id_jb }}">
                        </div>
                        <div class="form-group">
                            <label>Name</label>
                            <input name="nama_bar" type="text" class="form-control" value="{{ $barang->nama_bar }}">
                        </div>
                        <div class="form-group">
                            <label>Stock</label>
                            <input name="stock_bar" type="text" class="form-control" value="{{ $barang->stock_bar }}">
                        </div>
                        <div class="form-group">
                            <label>Purchase Price</label>
                            <input name="harga_beli_bar" type="number" class="form-control" value="{{ $barang->harga_beli_bar }}">
                        </div>
                        <div class="form-group">
                            <label>Selling Price</label>
                            <input name="harga_jual_bar" type="number" class="form-control" value="{{ $barang->harga_jual_bar }}">
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