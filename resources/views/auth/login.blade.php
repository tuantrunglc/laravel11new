@extends('adminlte::auth.login')

@section('auth_body')
<form action="{{ route('login') }}" method="post">
    @csrf

    <!-- Email Input -->
    <div class="input-group mb-3">
        <input type="email" name="email" class="form-control" placeholder="{{ __('adminlte::adminlte.email') }}" required autofocus>
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-envelope"></span>
            </div>
        </div>
    </div>

    <!-- Password Input -->
    <div class="input-group mb-3">
        <input type="password" name="password" class="form-control" placeholder="{{ __('adminlte::adminlte.password') }}" required>
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-lock"></span>
            </div>
        </div>
    </div>

    <!-- Submit Button -->
    <button type="submit" class="btn btn-primary btn-block">{{ __('adminlte::adminlte.sign_in') }}</button>
</form>
@endsection