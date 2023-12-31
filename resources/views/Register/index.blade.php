@extends('main')
@section('container')
<div class="container mt-4">
<div class="row justify-content-center">
    <div class = "col-lg-5 mb-5">
        <main class="form-registration">
            <h1 class="h3 mb-3 fw-normal">Form registrasi</h1>
            <form action="/register" method="post">
                @csrf
                <div class="form-floating">
                    <input type="text" name="name" class="form-control rounded-top @error('name')
                    is-invalid @enderror" placeholder="Name" required value="{{ old('name') }}">
                    <label for="name">Name</label>
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="text" name="username" class="form-control @error('username')
                    is-invalid @enderror" placeholder="Username" required value="{{ old('username') }}
                    ">
                    <label for="Username">Username</label>
                    @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="email" name="email" class="form-control @error('email') is-invalid
                    @enderror" placeholder="name@example.com" required value="{{ old('email') }}">
                    <label for="floatingInput">Email address</label>
                    @error('email')
                         <div class="invalid-feedback">
                            {{ $message }}
                         </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="password" name="password" class="form-control rounded-bottom" placeholder="Password" required>
                    <label for="Password">Password</label>
                </div>
            <button class="w-100 btn btn-lg btn-success mt-3" type="submit">Register</button>
            </form>
            <small class="d-block text-center mt-3 mb-4">Already Registered?<a href="/login"> Login</a>
            </small>
        </main>
        </div>
    </div>
</div>
@endsection
