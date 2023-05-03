
@section('title', __('Unauthorized'))
@section('code', '401')
@section('message', __('Unauthorized'))

@extends('layouts.master-without-nav')

@section('title')
    @lang('translation.404-cover')
@endsection

@section('body')

    <body>
    @endsection
    @section('content')
        <!-- auth-page wrapper -->
        <div class="auth-page-wrapper py-5 d-flex justify-content-center align-items-center min-vh-100">

            <!-- auth-page content -->
            <div class="auth-page-content overflow-hidden p-0">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-7 col-lg-8">
                            <div class="text-center">
                                <img src="{{ URL::asset('build/images/error401-cover.png') }}" alt="error img" class="img-fluid">
                                <div class="mt-3">
                                    <h3 class="text-uppercase">{{__("errors.unauthorized")}}</h3>
                                    <p class="text-muted mb-4">{{__("errors.must_login")}}</p>
                                    <a href="{{(route('login'))}}" class="btn btn-success"><i class="mdi mdi-home me-1"></i>{{__("auth.back_to_login")}}</a>
                                </div>
                            </div>
                        </div><!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </div>
            <!-- end auth-page content -->
            <!-- footer -->
            @extends('layouts.footer')
        </div>
        <!-- end auth-page-wrapper -->
@endsection

