@extends('layouts.home')

@section('container')
<div class="content">
    <div class="card card-info card-outline">
        <div class="card-header">
            <div class="card-tools">
                <h1 class="mt-4">Edit Warna Baru</h1>
            </div>
        

        <div class="card-body">
            <form action="{{ url('/update_warna/{id}') }}" method="GET">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                <div class="form-group">
                    <div class="form-group">
                        <label>Warna</label>
                        <input name="warna" type="text" class="form-control" value="{{ $warna->warna }}">
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