@extends('layouts.profile')
@section('content')
<div class="col-8 bg-white border p-3 rounded">

    <table class="table table-striped">

        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>NID</th>
                <th>Role</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->mobile}}</td>
                <td>{{$user->nid}}</td>
                <td>
                    {{$user->role}}
                </td>
            </tr>
            @endforeach
        </tbody>

    </table>


</div>

@endsection
