@extends('layouts.profile')
@section('content')
<div class="col-8 bg-white border p-3 rounded">

    <table class="table table-striped">

        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Booking id</th>
                <th>Mobile</th>
                <th>TrxID</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($payments as $payment)
            <tr>
                <td>{{$payment->id}}</td>
                <td>{{$payment->booking->full_name}}</td>
                <td>{{$payment->booking_id}} #T{{$payment->booking->tour_id}}</td>
                <td>{{$payment->mobile}}</td>
                <td>{{$payment->trx_id}}</td>
                <td>
                    <form action="{{route('account.payment.confirm')}}" method="post">
                        @csrf
                        <input type="hidden" name="booking_id" value="{{$payment->booking_id}}">
                        <button type="submit" name="pay_id" value="{{$payment->id}}">Confirm</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>

    </table>


</div>

@endsection
