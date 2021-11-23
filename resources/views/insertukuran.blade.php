@extends('layouts.home')

@section('container')
<div class="content">
    <div class="card card-info card-outline">
        <div class="card-header">
            <div class="card-tools">
                <h1 class="mt-4">Input Ukuran Baru</h1>
            </div>
        

        <div class="card-body">
            <form action="{{ url('/create_ukuran') }}" method="post">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                    <div class="form-group">
                        <div class="form-group">
                            <label>Ukuran</label>
                            <input name="ukuran" type="text" class="form-control" id="" placeholder="Masukkan Ukuran">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
        </div>
    </div>
</div>
@endsection