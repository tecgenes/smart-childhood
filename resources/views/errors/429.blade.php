@extends('layouts.master-without-nav')

@section('title')
    @lang('translation.404')
@endsection

@section('body')

    <body>
    @endsection
    @section('content')
        <div class="auth-page-wrapper pt-5">

            <!-- auth page content -->
            <div class="auth-page-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center pt-4">
                                <div class="">
                                    <img src="{{ URL::asset('build/images/error.svg') }}" alt="" class="error-basic-img move-animation">
                                </div>
                                <div class="mt-n4">
                                    <h3 class="text-muted mb-4">{{__("errors.too_many_requests")}}</h3>
                                    <p class="text-muted mb-4">{{__("errors.try_again_leter")}}</p>
                                    <a href="{{route('welcome')}}" class="btn btn-success"><i class="mdi mdi-home me-1"></i>{{__("errors.back_to_home")}}</a>
                                </div>
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
        <!-- particles js -->
        <script src="{{ URL::asset('build/libs/particles.js/particles.js') }}"></script>
        <!-- particles app js -->
        <script src="{{ URL::asset('build/js/pages/particles.app.js') }}"></script>
@endsection

