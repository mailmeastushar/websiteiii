@extends('front.master')
@section('container')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Payment to Tripleibusiness</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <main class="py-4">
            <div class="container">
                <div class="row">
                <div class="col-md-3"></div>
                    <div class="col-md-6 col-sm-12">
                        @if($message = Session::get('error'))
                            <div class="alert alert-danger alert-dismissible fade in" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <strong>Error!</strong> {{ $message }}
                            </div>
                        @endif
                        @if($message = Session::get('success'))
                            <div class="alert alert-success alert-dismissible fade {{ Session::has('success') ? 'show' : 'in' }}" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <strong>Success!</strong> {{ $message }}
                            </div>
                        @endif
                        <div class="card card-default">
                            <div class="card-header">
                                Payment to Tripleibusiness
                            </div>

                            <div class="card-body text-center">
                                <form action="{{ route('payment') }}" method="POST" >
                                    @csrf
                                    <script src="https://checkout.razorpay.com/v1/checkout.js"
                                            data-key="{{ env('RAZOR_KEY') }}"
                                            data-amount="{{ $amount*100 }}"
                                            data-buttontext="Pay Now"
                                            data-name="{{ $name }}"
                                            data-description="{{ $agname }}"
                                            data-image="{{ asset('public/assets/user') }}/images/newlogo.png"
                                            data-prefill.name="name"
                                            data-prefill.email="email"
                                            data-theme.color="#ff7529">
                                    </script>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
@stop