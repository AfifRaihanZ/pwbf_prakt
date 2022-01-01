@extends('layouts.home')

@section('container')
<div class="content">
    <div class="card card-info card-outline">
        <div class="card-header">
            <div class="card-tools">
                <h1 class="mt-4">Edit Color</h1>
            </div>
        

        <div class="card-body">
            <form action="{{ url('/updatewarna/{id}') }}" method="GET">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                <div class="form-group">
                    <div class="form-group">
                        <label>Color</label>
                        <input name="warna" type="text" class="form-control" value="{{ $warna->warna }}">
                    </div>
                </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection