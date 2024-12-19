@extends('layouts.empty')

@section('main-content')
<section class="text-center pb-5">
    <div style="height: 500px;">
        <img src="{{ asset('img/backgroundsiswago.jpg') }}" alt="Background" style="width: 100%; height: 100%; object-fit: cover;">
    </div>

    <div class="card mx-4 mx-md-5 shadow-5-strong" style="margin-top: -100px; background: hsla(0, 0%, 100%, 0.7); backdrop-filter: blur(30px);">
        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <div class="card-body py-5 px-md-5">
            <a href="/" class="text-decoration-none text-white position-absolute top-0 start-0 m-3"><h2><i class="bi bi-arrow-left-circle text-dark"></i></h2></a>
            <h2 class="fw-bold mb-5">Sign In Now</h2>
            <form action="{{ route('login.submit') }}" method="post">
                @csrf
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="name" placeholder="Name" required>
                    <label>Name</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                    <label>Password</label>
                </div>
                <button type="submit" class="btn btn-warning btn-block mb-4">Sign in</button>
                <p>Not registered yet? <a href="{{ route('register') }}">Register now!</a></p>
            </form>
        </div>
    </div>
</section>
@endsection
