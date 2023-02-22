@extends('layouts.app.app')
@section('main-content')

<div class="container">
    <div class="row fs-4">
        To book seat you have to send the total ammount to this ({{ $site_settings->site_bkash }}) bkash number.
        Then from your mobile number just write the or pest the TrxID at the below input.
        Within 1 or 2 hour you will get mobile sms of confirmation.
    </div>
    <div class="row mt-3">
        <div class="col-md-7">
            <h3>Your total cost</h3>
            <table class="table">
                <tr>
                    <th>Number of Members:</th>
                    <td>{{$data->number_of_persons}}</td>
                </tr>
                <tr>
                    <th>Cost Per Person:</th>
                    <td>{{$data->cost_per_persons}}</td>
                </tr>
                <tr>
                    <th rowspan="2">Total Cost: </th>
                    <td> = {{$data->number_of_persons}}x{{$data->cost_per_persons}}</td>
                </tr>
                <tr>
                    <td> = {{$data->sub_total}}</td>
                </tr>
            </table>
            <p class="text-danger">Now send {{$data->sub_total}} taka to {{ $site_settings->site_bkash }} bkash number, counter no {{$data->tour_id}} and submit the TrxID number her and confirm bookings </p>
        </div>
        <div class="col-md-5">
            <div>
                <form action="{{route('tour.payment')}}" method="post">
                    @csrf
                    <input type="hidden" name="tour_id" value="{{$data->tour_id}}">
                    <input type="hidden" name="booking_id" value="{{$data->booking_id}}">
                    <input type="hidden" name="total_amount" value="{{$data->sub_total}}">
                    <input type="hidden" name="mobile" value="{{$data->mobile}}">
                    <div class="mb-3">
                        <label class="form-label" for="">TrxID</label>
                        <input class="form-control" type="text" name="trx_id" id="">
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Confirm Bookings</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
