@extends('layouts.auth')
@section('content')
    <div class="d-flex justify-content-center">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <!-- Form starts -->
        <form action="{{ route('login.store') }}" method="post">
            @csrf
            <!-- Logo starts -->
            <a href="#" class="auth-logo mt-5 mb-3">
                <img src="" alt="" />
            </a>
            <!-- Logo ends -->

            <!-- Authbox starts -->
            <div class="auth-box">

                <h4 class="mb-4">Welcome back,</h4>

                <div class="mb-3">
                    <label class="form-label" for="email">Email <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="bi bi-envelope"></i>
                        </span>
                        <input type="email" id="email" name="email" class="form-control"
                            placeholder="Enter your email">
                    </div>
                </div>

                <div class="mb-2">
                    <label class="form-label" for="password">Password <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="bi bi-lock"></i>
                        </span>
                        <input type="password" id="password" name="password" id="password" class="form-control"
                            placeholder="Enter password">
                        <button class="btn btn-outline-secondary" type="button">
                            <i class="bi bi-eye"></i>
                        </button>
                    </div>
                </div>

                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>

            </div>
            <!-- Authbox ends -->

        </form>
        <!-- Form ends -->

    </div>
@endsection

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@if ($message = Session::get('failed'))
    <script>
        Swal.fire("{{ $message }}");
    </script>
@endif
