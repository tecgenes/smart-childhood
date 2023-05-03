@extends('layouts.master-without-nav')
@section('title')
    @lang('auth.forgot_password')
@endsection
@section('content')
    <div class="auth-page-wrapper pt-5">

        <!-- auth page content -->
        <div class="auth-page-content">
            <div class="container">
                @extends('components.logo')

                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card mt-4  card-bg-fill">

                            <div class="card-body p-4">
                                <div class="text-center mt-2">
                                    <h5 class="text-primary">{{__("auth.forgot_password")}}</h5>
                                    <p class="text-muted">{{__("auth.reset_password")}}</p>

                                    <lord-icon src="https://cdn.lordicon.com/rhvddzym.json" trigger="loop"
                                               colors="primary:#8c68cd" class="avatar-xl">
                                    </lord-icon>

                                </div>

                                <div class="alert alert-borderless alert-warning text-center mb-2 mx-2" role="alert">
                                    {{__("auth.enter_email")}}
                                </div>
                                <div class="p-2">
                                    <form action="{{ route('password.email') }}" method="POST">
                                        @csrf
                                        <div class="mb-4">
                                            <label class="form-label">{{__("auth.email")}}</label>
                                            <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="{{__("auth.enter_email")}}">
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="text-center mt-4">
                                            <button class="btn btn-primary w-100" type="submit">{{__("auth.send_reset_link")}}</button>
                                        </div>
                                    </form><!-- end form -->
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->

                        <div class="mt-4 text-center">
                            <p class="mb-0">{{__("auth.remember_my_password")}} <a href="{{route('login')}}"
                                                                               class="fw-semibold text-primary text-decoration-underline">{{__("auth.back_to_login")}}</a> </p>
                        </div>

                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end auth page content -->

        <!-- footer -->
        @extends('layouts.footer')
    </div>
    <!-- end auth-page-wrapper -->
@endsection
@section('script')
    <script src="{{ URL::asset('build/libs/particles.js/particles.js') }}"></script>
    <script src="{{ URL::asset('build/js/pages/particles.app.js') }}"></script>
@endsection
