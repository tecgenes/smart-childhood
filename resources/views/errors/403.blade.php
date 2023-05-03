@extends('layouts.master-without-nav')

@section('title')
    @lang('errors.no_access')
@endsection

@section('body')
    <body>
    @endsection
    @section('content')
        <!-- auth-page wrapper -->
        <div class="auth-page-wrapper py-5 d-flex justify-content-center align-items-center min-vh-100">

            <!-- auth-page content -->
            <div class="auth-page-content overflow-hidden p-0">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-xl-4 text-center">
                            <div class="error-500 position-relative">
                                <img src="{{ URL::asset('build/images/lock.png') }}" width="200" alt="" />
                            </div>
                            <br>
                            <div>
                                <h4>{{__("errors.no_access")}}</h4>
                                <p class="text-muted w-75 mx-auto">{{__("errors.contact_authorized_persons")}}</p>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-success"><i class="mdi mdi-logout me-1"></i>{{__("auth.logout")}}</button>
                                </form>
                            </div>
                        </div><!-- end col-->
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
