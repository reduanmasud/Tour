@extends('layouts.app.app')
@section('main-content')
    <div class="container">
        <div class="row">
            @if ($errors->any())
                <div class="alert alert-danger alert-close">
                    <button class="alert-btn-close">
                        <i class="fad fa-times"></i>
                    </button>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <strong>{{ $message }}</strong>
                </div>
            @endif


            @include('account.sidebar')

            @yield('content')


        </div>
    </div>
@endsection
