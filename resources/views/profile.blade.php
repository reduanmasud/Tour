@extends('layouts.app.app')
@section('main-content')
<div class="container">
    <div class="row">
         @if ($errors->any())
            <div class="alert alert-danger alert-close">
            <button class="alert-btn-close">
                <i class="fad fa-times"></i>
            </button>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <strong>{{ $message }}</strong>
            </div>
        @endif
        <div class="col-4">
            <div class="list-group" id="list-tab" role="tablist">
                <a class="list-group-item list-group-item-action active" id="list-home-list" data-bs-toggle="list" href="#list-home" role="tab" aria-controls="list-home">Home</a>
                <a class="list-group-item list-group-item-action" id="list-tour-add-list" data-bs-toggle="list" href="#list-add-tour" role="tab" aria-controls="list-add-tour">Add Tour</a>
                <a class="list-group-item list-group-item-action" id="list-messages-list" data-bs-toggle="list" href="#list-messages" role="tab" aria-controls="list-messages">Messages</a>
                <a class="list-group-item list-group-item-action" id="list-settings-list" data-bs-toggle="list" href="#list-settings" role="tab" aria-controls="list-settings">Settings</a>
            </div>
        </div>
        <div class="col-8 bg-white border rounded">
            <div class="tab-content" id="nav-tabContent">


                <div class="tab-pane fade show active p-3" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="" class="form-label">Site Image</label>
                            <div class="input-group">
                                <input type="file" name="site_logo" id="" class="form-control">
                                <button type="submit" class="btn btn-primary">UPDATE IMAGE</button>
                            </div>
                        </div>
                    </form>

                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="" class="form-label">Site Title</label>
                            <div class="input-group">
                                <input type="text" name="site_title" id="" class="form-control">
                                <button type="submit" class="btn btn-primary">UPDATE TITLE</button>
                            </div>
                        </div>
                    </form>


                </div>


                <div class="tab-pane fade p-3" id="list-add-tour" role="tabpanel" aria-labelledby="list-profile-list">

                    <form method="POST" action="{{route('tour.add')}}" enctype="multipart/form-data">
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

                <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">...B</div>
                <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">.C..</div>
                <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">D...</div>
            </div>
        </div>
    </div>
</div>

@endsection
