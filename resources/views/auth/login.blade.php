@extends('layout.auth')

@section('auth-content')
<form class="mx-auto" method="POST" action="{{ url('login-user') }}">
    @csrf
    <p class="fs-3 fw-semibold mb-4" >Sign in</p>
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
    <button type="submit" class="btn bg-black text-white px-4">Login</button>
</form>
@endsection