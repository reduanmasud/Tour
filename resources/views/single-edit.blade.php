@extends('layouts.app.app')
@section('main-content')
<style>
    /* Image Gallery */
    .img-gallery{
        font-family: 'Homemade Apple', cursive;
        font-size:20px;
        background:url('https://images.pexels.com/photos/172277/pexels-photo-172277.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260');
        background-size:cover;
        background-repeat:repeat;
        color:#000;
        display: flow-root;
        margin-bottom: 25px;
    }

    .img-gallery ul{
        /* position:absolute;
        margin:0;
        padding:0; */
        margin-bottom: 75px;
    }

    .img-gallery ul li{
        text-align:center;
        display:inline-block;
        list-style:none;
        position:relative;
        border:solid 12px #fff;
        background:#fff;
        box-shadow:0 0 15px 0px #555;
        transition:all 1s ease;
        -o-transition:all 1s ease;
        -moz-transition:all 1s ease;
        -webkit-transition:all 1s ease;
        top:50px;
    }

    .img-gallery ul li:hover{
        top:0px;
        opacity:0.5;
    }

    .img-gallery ul li:nth-child(1){
        transform:rotate(10deg);
    }

    .img-gallery ul li:nth-child(2){
        transform:rotate(0deg);
    }

    .img-gallery ul li:nth-child(3){
        transform:rotate(-10deg);
    }

    .img-gallery ul li:nth-child(4){
        transform:rotate(20deg);
    }

    .img-gallery ul li:nth-child(5){
        transform:rotate(-20deg);
    }
    .img-gallery p{
    margin: 5px 0 0 0;
    }

    .img-gallery .light{
    border-radius:50%;
    position:absolute;
    left:0;
    right:0;
    width:700px;
    background:#fff;
    filter:blur(100px);
    opacity:0.3;
    pointer-events:none;
    }
</style>

@php
    $tourImages = $tour->images;
    $i = 1;
@endphp
<div class="container img-gallery">
    <ul>
    @foreach (json_decode($tourImages) as $image)
    <li><img src="{{ asset('/storage/' . $image) }}" width="200">
        <p>image #{{$i++}}</p></li>
    @endforeach
    </ul>
    <div class="light"></div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            {{$tour->description}}
        </div>
        <div class="col-md-6">
        <div class="row bg-primary text-white border border-1 p-3 mx-1 mb-3">
            <div class="col-md-6">Cost per Person : {{$tour->cost_per_person}}</div>
            <div class="col-md-6">Available Seat : {{$tour->seat_number}}</div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Mobile</th>
                        <th scope="col">Paid</th>
                        <th scope="col">Number of Persons</th>
                      </tr>
                    </thead>
                    <tbody>

                        @foreach ($bookings as $booking)

                        <tr>
                            <th scope="row">#</th>
                            <td>{{ $booking->full_name }}</td>
                            <td>{{ $booking->email }}</td>
                            <td>{{ $booking->mobile }}</td>
                            <td>{{ $booking->paid }}</td>
                            <td>{{ $booking->number_of_persons }}</td>
                        </tr>


                        @endforeach

                    </tbody>
                  </table>
            </div>
        </div>
        </div>
    </div>
</div>

@endsection
