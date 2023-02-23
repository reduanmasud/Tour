@extends('layouts.app.app')
@section('main-content')
<div class="container marketing">
    @php
        $tours = App\Models\Tour::where('seat_number','>', 0)->get();
        $i = 0;
    @endphp

    @if ($tours->count() == 0)
        No Tour Available.
    @else
    @foreach ($tours as $tour)
    <div class="row ">
        <div class="col-md-6 @if ($i%2 != 0) order-md-2 @endif">
            <h3 class="">Tour Destination: <span class="text-muted">{{$tour->destination}}</span></h3>
            <div class="mb-3" style="height: 350px">
                <p clsss="">Details:</p>
                {{$tour->description}}
            </div>
            <div class="row p-3" style="">
                <div class="col-md-6">
                    Available Seat: {{$tour->available_seat()}}
                </div>
                <div class="col-md-6">
                    Total Seat : {{$tour->seat_number}}
                </div>
            </div>
        <div class="d-grid gap-2 ">
            <a class="btn btn-primary me-md-2" href="{{route('tour.single',['id'=>$tour->id])}}" type="button">View Details</a>
        </div>
        </div>
        <div class="col-md-6">
            @php
            $tourImages = json_decode($tour->images);
        @endphp
        <div id="carouselExampleIndicators{{$i}}" class="carousel slide" style="height:500px; margin-bottom: 0px" data-bs-ride="true">

            <div class="carousel-inner">

                @php
                    $active = true;
                @endphp
                @foreach ($tourImages as $image)
                    <div class="carousel-item @if ($active) {{ $active = false }}active @endif">
                        <img src="{{ asset('/storage/' . $image) }}" class="d-block w-100" height="500px" alt="...">
                    </div>
                @endforeach

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators{{$i}}"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators{{$i}}"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
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
