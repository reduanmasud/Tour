@extends('layouts.app.app')
@section('main-content')
<div class="container">



@php
        $tours = App\Models\Tour::all();
    @endphp




<div class="row row-cols-1 row-cols-md-3 g-4">

@foreach ($tours as $tour)
        @php
            $images = json_decode($tour->images);
            $first_image = $images[0];
        @endphp

  <div class="col">
    <div class="card h-100 shadow-lg mb-5 bg-body rounded border-0">
      <img src="{{ asset('/storage/' . $first_image) }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">{{$tour->destination}}</h5>
        <p class="card-text">{{Str::limit($tour->description, 30)}}</p>
        <a href="{{route('tour.single',['id'=>$tour->id])}}" class="btn btn-primary">Check it out</a>
      </div>
    </div>
  </div>

  @endforeach

</div>























<!-- 
    <div class="row">

        @foreach ($tours as $tour)
        @php
            $images = json_decode($tour->images);
            $first_image = $images[0];
        @endphp
        <div class="card mx-2" style="width: 18rem;">
            <img class="card-img-top mt-2" src="{{ asset('/storage/' . $first_image) }}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">{{$tour->destination}}</h5>
              <p class="card-text">{{$tour->description}}</p>
              <a href="{{route('tour.single',['id'=>$tour->id])}}" class="btn btn-primary">Check it out</a>
            </div>
          </div>
        @endforeach

    </div> -->
</div> 
@endsection
