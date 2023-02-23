
@extends('frontend.layout.master_home')
@section('home')

<div class="page_content two-columns">
    <div class="wrap">
        <div class="wrap_float">
            <!-- <div class="section-title">Tour Classic 2 Columns</div> -->
            <div class="main">
                <div class="most_popular__section">


                @php
        $tours = App\Models\Tour::where('seat_number','>', 0)->get();
        $i = 0;
    @endphp

    @if ($tours->count() == 0)
        No Tour Available.
    @else
    @foreach ($tours as $tour)


    <!-- multi image  -->

          @php
            $tourImages = json_decode($tour->images);
          @endphp


                
    <!-- multi image  -->

                    <a href="{{route('tour.single',['id'=>$tour->id])}}" class="slider_item" style="background-image: url({{ asset('/storage/' . $tourImages[0]) }})">
                       <div class="slider_item__content">
                           
                           <div class="title">
                           {{$tour->destination}}
                           </div>
                           <div class="description">
                           {{Str::limit($tour->description, 30)}}
                           </div>
                           <div class="days">
                               <span>Available Seat: {{$tour->available_seat()}}</span> <br>
                               <span>Total Seat : {{$tour->seat_number}}</span><br>
                               
                           </div>
                       </div>
                   </a>

                  
                   @php
        $i++
    @endphp
    @endforeach
    @endif
               
                  
                 
                  
                </div>
                <!-- <div class="pagination">
                    <ul>
                        <li class="prev"><a href="#"></a></li>
                        <li class="current"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li class="next"><a href="#"></a></li>
                    </ul>
                </div> -->
            </div>
        </div>
    </div>
</div>

@endsection
