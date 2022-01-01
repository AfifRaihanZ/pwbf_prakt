@extends('layouts.home')

@section('container')
<div class="content">
    <div class="card card-info card-outline">
        <div class="card-header">
            <div class="card-tools">
                <h1 class="mt-4">Edit Size</h1>
            </div>
        

        <div class="card-body">
            <form action="{{ url('/updateukuran/{id}') }}" method="post">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                <div class="form-group">
                    <div class="form-group">
                        <label>Size</label>
                        <input name="ukuran" type="text" class="form-control" value="{{ $ukuran->ukuran }}">
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