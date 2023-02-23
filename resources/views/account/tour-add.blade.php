@extends('layouts.profile')
@section('content')
<div class="col-8 bg-white  rounded p-3 shadow-lg p-3 mb-5  rounded">

    <form method="POST" action="" enctype="multipart/form-data" class='p-4'>
        @csrf
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Destination</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" name="destination" id="inputEmail3">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Cost</label>
            <div class="col-sm-10">
            <input type="number" name="cost_per_person" class="form-control" id="inputEmail3">
            <small>Cost is per head count</small>
            </div>

        </div>
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Seat Number</label>
            <div class="col-sm-10">
            <input type="number" name="seat_number" class="form-control" id="inputEmail3">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Description</label>
            <div class="col-sm-10">
            <textarea type="text" name="description" class="form-control" id="inputEmail3"> </textarea>
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Add Images</label>
            <div class="col-sm-10">
                <input class="form-control" name='images[]' type="file" id="formFileMultiple" multiple>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Add Tour</button>
    </form>

</div>
@endsection
