@extends('layouts.master-without-nav')
@section('title') @lang('translation.starter')  @endsection
@section('content')
    <div class="container">
        <div class="col-12 p-lg-5">
            <h1>Initialization Setup ⚙️</h1>
            <br>
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Master Admin</h4>
                </div><!-- end card header -->
                <div class="card-body">
                    <div class="live-preview">
                        <form method="POST" action="{{ route('init-store') }}">
                            @csrf
                            <div class="row gy-4">
                                <div class="col-6 col-md-6">
                                    <div>
                                        <label for="basiInput" class="form-label">Name</label>
                                        <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="basiInput">
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-6 col-md-6">
                                    <div>
                                        <label for="basiInput" class="form-label">Email</label>
                                        <input name="email" type="text" class="form-control @error('email') is-invalid @enderror" id="basiInput">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                        @enderror
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                            <br>
                            <div class="row gy-4">
                                <div class="col-6 col-md-6">
                                    <div>
                                        <label for="basiInput" class="form-label">Password</label>
                                        <div class="position-relative auth-pass-inputgroup mb-3">
                                            <input name="password" type="password" class="form-control pe-5 password-input @error('password') is-invalid @enderror"
                                                   placeholder="Enter password" id="password-input">
                                            <button
                                                class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon"
                                                type="button" id="password-addon"><i
                                                    class="ri-eye-fill align-middle"></i></button>
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="col-6 col-md-6">
                                    <div>
                                        <label for="basiInput" class="form-label">Confirm Password</label>
                                        <div class="position-relative auth-pass-inputgroup mb-3">
                                            <input name="password_confirmation" type="password" class="form-control pe-5 password-input @error('password_confirmation') is-invalid @enderror"
                                                   placeholder="Enter password" id="password-input">
                                            <button
                                                class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon"
                                                type="button" id="password-addon"><i
                                                    class="ri-eye-fill align-middle"></i></button>
                                            @error('password_confirmation')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <button type="submit" class="btn btn-primary w-lg waves-effect waves-light">Create Master Admin</button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- end card -->
        </div>

    </div>
@endsection
@section('script')
    <script src="{{ URL::asset('build/libs/particles.js/particles.js') }}"></script>
    <script src="{{ URL::asset('build/js/pages/particles.app.js') }}"></script>
    <script src="{{ URL::asset('build/js/pages/password-addon.init.js') }}"></script>
@endsection
