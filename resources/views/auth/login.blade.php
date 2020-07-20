@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

{{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport"--}}
{{--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
{{--    --}}{{--    <link rel="stylesheet" href="{{ asset('css/app.css') }}">--}}
{{--    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">--}}
{{--    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed&display=swap" rel="stylesheet">--}}
{{--    <title>Document</title>--}}
{{--</head>--}}
{{--<body class="h-full bg-gray-300" style="font-family: 'Source Sans Pro', 'Helvetica Neue', Arial, sans-serif;">--}}
{{--<div class="flex items-center justify-center h-full mt-12">--}}
{{--    <div class="md:flex max-w-sm md:max-w-3xl shadow-2xl rounded">--}}
{{--        <div class="bg-white md:w-1/2 p-8">--}}
{{--            <h1 class="text-gray-700 text-3xl text-center mb-4">SIGN IN</h1>--}}
{{--            <form class="text-gray-600" method="POST" action="{{ route('login') }}">--}}
{{--                <div class="my-3">--}}
{{--                    <input type="text"--}}
{{--                           placeholder="Email"--}}
{{--                           class="border rounded w-full py-2 px-4 outline-none focus:shadow-outline"--}}
{{--                           name="email"--}}
{{--                    />--}}
{{--                </div>--}}
{{--                <div class="my-3">--}}
{{--                    <input type="text"--}}
{{--                           placeholder="Password"--}}
{{--                           class="border rounded w-full py-2 px-4 outline-none focus:shadow-outline"--}}
{{--                           name="password"--}}
{{--                    />--}}
{{--                </div>--}}
{{--                <div class="my-3 flex justify-between">--}}
{{--                    <label><input type="checkbox" name="remember"> Remember me </label>--}}
{{--                    <a href="{{route('password.request')}}" class="text-blue-500"> Forgot email or password </a>--}}
{{--                </div>--}}
{{--                <div class="my-3 flex">--}}
{{--                    <button class="border rounded w-1/2 py-2 focus:outline-none">--}}
{{--                        REGISTER--}}
{{--                    </button>--}}
{{--                    <button type="submit"--}}
{{--                            class="border rounded w-1/2 py-2 border-blue-700 bg-blue-600 text-white ml-2 focus:outline-none">--}}
{{--                        SIGN IN--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--        <div class="hidden md:block w-1/2">--}}
{{--            <img src="/uploads/images/topics/1.jpg" alt="" class="w-full h-full object-cover">--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--</body>--}}
{{--</html>--}}
