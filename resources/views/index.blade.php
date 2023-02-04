@extends('layouts.app.app')
@section('main-content')
<div class="container marketing">
    @php
        $tours = App\Models\Tour::all();
        $i = 0;
    @endphp

    @if ($tours->count() == 0)
        No Tour Available.
    @else
    @foreach ($tours as $tour)
    <div class="row featurette">
        <div class="col-md-7 @if ($i%2 != 0) order-md-2 @endif">
            <h2 class="featurette-heading fw-normal lh-1">{{$tour->destination}}<span class="text-muted"></span></h2>
            <p class="lead">{{$tour->description}}</p>
            <div class="row">
                <div class="col-md-6">
                    Available Seat: {{$tour->seat_number}}
                </div>
                <div class="col-md-6">

                </div>
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a class="btn btn-primary me-md-2" href="{{route('tour.single',['id'=>$tour->id])}}" type="button">View Details</a>
            </div>
        </div>
        <div class="col-md-5">
            @php
                $images = json_decode($tour->images);
                $first_image = $images[0];
            @endphp
            <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="{{ asset('/storage/' . $first_image) }}" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"/>

        </div>
    </div>
    <hr class="featurette-divider">
    @php
        $i++
    @endphp
    @endforeach
    @endif
    
</div>

@endsection