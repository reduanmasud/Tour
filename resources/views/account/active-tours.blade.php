@extends('layouts.profile')
@section('content')
<div class="col-8 bg-white shadow-lg p-3 mb-5 rounded">
    <div class="container">


        @php
            $tours = App\Models\Tour::where('user_id', Auth::user()->id)
               ->get();
        @endphp

        @if ($tours->first() != null) 
            <div class="row">

                @foreach ($tours as $tour)
                @if($tour->available_seat() > 0 )
                    @php
                        $images = json_decode($tour->images);
                        $first_image = $images[0];
                    @endphp
                    <div class="card m-2 shadow-lg  mb-5 rounded border-0" style="width: 16rem;">
                        <div class="">
                            <img class="card-img-top" src="{{ asset('/storage/' . $first_image) }}" alt="Card image cap">
                        </div>
                        <div class="card-body ">
                            <h5 class="card-title">{{ $tour->destination }}</h5>
                            <p class="card-text">{{ $tour->description }}</p>
                            <a href="{{ route('account.tour.view', ['id' => $tour->id]) }}" class="btn btn-primary">Check</a>
                        </div>
                    </div>
                    @endif
                @endforeach
            </div>
        @else
            No Active Tour
        @endif
    </div>
</div>

@endsection
