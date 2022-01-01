@extends('layouts.home')

@section('container')

<div class="content">
    <div class="card card-info card-outline">
        <div class="card-header">
            <div class="card-tools">
                <h1 class="mt-4">Edit City</h1>
            </div>
        

        <div class="card-body">
            <form action="{{ url('/updatekota/{id}') }}" method="post">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                <div class="form-group">
                    <div class="form-group">
                        <label>User ID</label>
                        <input name="id_user" type="number" class="form-control" value="{{ $kota->id_user }}">
                    </div>
                    <div class="form-group">
                        <label>City</label>
                        <input name="kota" type="text" class="form-control" value="{{ $kota->kota }}">
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