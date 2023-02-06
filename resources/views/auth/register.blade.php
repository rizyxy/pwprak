@extends('layout.auth')

@section('auth-content')
<form class="mx-auto" method="post" action="{{ url('store-user') }}">
    @csrf
    <p class="fs-3 fw-semibold mb-4" >Sign up</p>
    <div class="mb-3">
        <label for="name" class="form-label">Full Name</label>
        <input type="text" name="name" id="name" class="form-control">
        @if ($errors->has('name'))
        <span class="text-danger">{{ $errors->first('name') }}</span>
        @endif
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email Address</label>
        <input type="email" name="email" id="email" class="form-control">
        @if ($errors->has('email'))
        <span class="text-danger">{{ $errors->first('email') }}</span>
        @endif
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" id="password" class="form-control">
        @if ($errors->has('password'))
        <span class="text-danger">{{ $errors->first('password') }}</span>
        @endif
    </div>
    <button type="submit" class="btn bg-black text-white px-4">Register</button>
</form>
@endsection