@extends('layouts.profile')
@section('content')
    <div class="col-8 bg-white border rounded p-0">



        <div class="container p-3">

            <div class="row">
                <div class="col-md-6">
                    <h2 >Destination: {{ $tour->destination }}</h2>
                    <div class="mb-3">
                        <b>Description:</b>
                        <div>
                            {{$tour->description}}
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="list-group">
                        <li class="list-group-item list-group-item-action active">
                            <span><b>Total Seat Number:</b> {{ $tour->seat_number }}</span>
                        </li>
                        <li class="list-group-item list-group-item-action">
                            <span><b>Number of Booked:</b> {{ $totalBookings }} <span >(Pending: {{$totalBookingPending}})</span></span>
                        </li>
                        <li class="list-group-item list-group-item-action">
                            <span><b>Total Paid:</b> {{ $totalPaid }} TAKA <span >(Pending: {{$totalPending}})</span></span>
                        </li>
                        <li class="list-group-item list-group-item-action">
                            <span><b>Cost (per person): </b> {{ $tour->cost_per_person }} TAKA </span>
                        </li>
                        <button type="button" class="list-group-item list-group-item-action active" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Send msg to everyone.
                        </button>
                        <button type="button" class="text-center list-group-item list-group-item-action text-white bg-success" data-bs-toggle="modal" data-bs-target="#updateModal">
                            UPDATE
                        </button>
                        <button type="button" class="text-center list-group-item list-group-item-action text-white bg-danger" data-bs-toggle="modal" data-bs-target="#deleteModel">
                            DELETE
                        </button>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <center><h3>Registrations</h3></center>
                <div class="col-md-12">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Mobile</th>
                            <th scope="col">Paid</th>
                            <th scope="col"># Persons</th>
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

    {{-- Modal --}}

  <!-- Modal For Sending MSG-->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Message Send</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="mb-3">
                <label for="" class="input-label">Message</label>
                <textarea name="" class="form-control" id="" cols="30" rows="10"></textarea>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Send</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal For UPDATE MSG-->
  <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <form method="POST" action="{{route('account.tour.update')}}" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="tour_id" value="{{$tour->id}}">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">UPDATE</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Destination</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="destination" value="{{$tour->destination}}" id="inputEmail3">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Cost</label>
                <div class="col-sm-10">
                <input type="number" name="cost_per_person" value="{{$tour->cost_per_person}}" class="form-control" id="inputEmail3">
                <small>Cost is per head count</small>
                </div>

            </div>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Seat Number</label>
                <div class="col-sm-10">
                <input type="number" name="seat_number" value="{{$tour->seat_number}}" class="form-control" id="inputEmail3">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10">
                <textarea type="text" name="description" class="form-control" id="inputEmail3">{{$tour->description}}</textarea>
                </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Update Tour</button>
        </div>
      </div>
    </div>
    </form>
  </div>


  <!-- Modal For DELETE-->
  <div class="modal fade" id="deleteModel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Delete</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            Are you Sure?
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <form action="{{route('account.tour.delete')}}" method="post">
                @csrf
                <input type="hidden" name="tour_id" value="{{$tour->id}}">
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>


        </div>
      </div>
    </div>
  </div>
@endsection
