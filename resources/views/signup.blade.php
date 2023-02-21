@extends('layouts.auth')
@section('content')

    <div class="container vh-100 d-flex align-items-center justify-content-center">

        <div class="card m-3">

            <div class="card-body">
                <h3>Signup</h3>
                <form action="" method="post">
                    @csrf
                    @if ( request()->get('h') )
                        <input type="hidden" name="user_type" value="1">
                    @endif
                    <div class="mb-3">
                        <label class="form-label">Full Name</label>
                        <input type="text" name="name" value="{{ old('name') }}" class="form-control @error('full_name') is-invalid @enderror" required  id="">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="text" name="email" value="{{ old('email') }}"  class="form-control @error('email') is-invalid @enderror" required id="">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Mobile</label>
                        <input type="text" name="mobile" value="{{ old('mobile') }}"  class="form-control @error('mobile') is-invalid @enderror" required id="">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" required id="">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Re-enter Password</label>
                        <input type="password" name="password_confirmation" class="form-control @error('password') is-invalid @enderror" required id="">
                    </div>
                    <div class="d-grid gap-2">
                        <button class="btn btn-danger" type="submit">Signup</button>
                        <a class="btn btn-success" href="{{ route('user.login') }}">Login</a>
                      </div>
                </form>
            </div>
        </div>

    </div>

@endsection
