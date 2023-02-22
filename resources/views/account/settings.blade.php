@extends('layouts.profile')
@section('content')
<div class="col-8 bg-white border p-3 rounded">
    <form action="{{ route('update.image') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Site Image</label>
            <div class="input-group">
                <input type="file" name="site_logo" id="" class="form-control">
                <button type="submit" class="btn btn-primary">UPDATE IMAGE</button>
            </div>
        </div>
    </form>

    <form action="{{ route('update.title') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Site Title</label>
            <div class="input-group">
                <input type="text" name="site_title" id="" value="@if($site_settings->site_title != null) {{$site_settings->site_title}} @endif" class="form-control">
                <button type="submit" class="btn btn-primary">UPDATE TITLE</button>
            </div>
        </div>
    </form>

    <form action="{{ route('update.bkash') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Site Bkash Number</label>
            <div class="input-group">
                <input type="text" name="site_bkash" id="" value="@if($site_settings->site_bkash != null) {{$site_settings->site_bkash}} @endif" class="form-control">
                <button type="submit" class="btn btn-primary">UPDATE BKASH</button>
            </div>
        </div>
    </form>
</div>
@endsection
