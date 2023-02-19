@extends('layouts.app.app')
@section('main-content')
<div class="container">
    @php
        $tours = App\Models\Tour::all();
    @endphp
    <div class="row">

        @foreach ($tours as $tour)
        @php
            $images = json_decode($tour->images);
            $first_image = $images[0];
        @endphp
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{ asset('/storage/' . $first_image) }}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">{{$tour->destination}}</h5>
              <p class="card-text">{{$tour->description}}</p>
              <a href="{{route('tour.single',['id'=>$tour->id])}}" class="btn btn-primary">Check it out</a>
            </div>
          </div>
        @endforeach

    </div>
</div>
@endsection;
