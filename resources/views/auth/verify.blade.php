@extends('layouts.master-without-nav')
@section('title')
@lang('auth.verify_your_email')
@endsection
@section('content')

        <div class="auth-page-wrapper pt-5">

            <!-- auth page content -->
            <div class="auth-page-content">
                <div class="container">
                    @extends('components.logo')

                    <div class="row justify-content-center">
                        <div class="col-md-8 col-lg-6 col-xl-5">
                            <div class="card mt-4 card-bg-fill">

                                <div class="card-body p-4">
                                    <div class="mb-4">
                                        <div class="avatar-lg mx-auto">
                                            <div class="avatar-title bg-light text-primary display-5 rounded-circle">
                                                <i class="ri-mail-line"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="p-2 mt-4">
                                        <div class="text-muted text-center mb-4 mx-lg-3">
                                            <h4 class="">{{__("auth.verify_your_email")}}</h4>
                                            <p>{{__("auth.check_your_email")}}</p>
                                        </div>
                                        <div class="mt-3">
                                            <a href="{{route('welcome')}}" class="btn btn-primary w-100">{{__("auth.confirm")}}</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->

                            <div class="mt-4 text-center">
                                <p class="mb-0">{{__("auth.not_receive_email")}}
                                    <a href="javascript:void();" onclick="event.preventDefault(); document.getElementById('resend-email').submit();" class="fw-semibold text-primary text-decoration-underline">{{__("auth.resend")}}</a>
                                    <form id="resend-email" action="{{ route('verification.resend') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </p>
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
    <script src="{{ URL::asset('build/js/pages/two-step-verification.init.js') }}"></script>
@endsection
