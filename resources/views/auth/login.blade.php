@extends('layouts.app')

@section('content')
<div class="flex items-center justify-center ">

    <div class="grid bg-white rounded-lg shadow-xl w-11/12 md:w-9/12 lg:w-1/2 p-5">
        <div class="flex justify-center">
                <h1 class="w-full text-gray-600 font-bold md:text-2xl text-xl">{{ __('Login') }}</h1>
                <h2 class="grid text-gray-600 font-bold  w-11/12 text-xs"> <strong>Or <a class="text-secondary" href="{{ route('register') }}">register here</a> if you don't have an account</strong></h2>
        </div>

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <base-input required value="{{ old('email') }}" autocomplete="email" label="{{ __('E-Mail Address') }}" type="email" name="email" :placeholder="'Enter your email'"></base-input>
            @error('email')
            <base-alert-info message="{{$message}}"></base-alert-info>
            @enderror

            <base-input required value="{{ old('password') }}" autocomplete="email" label="{{ __('Password') }}" type="password" name="password" :placeholder="'Enter your email'"></base-input>
            @error('password')
            <base-alert-info message="{{$message}}"></base-alert-info>
            @enderror

            <div class="flex flex-col items-center justify-center ">
                <base-button  class=" flex-col" type="submit" label="{{ __('Login') }}"></base-button>
                @if (Route::has('password.request'))
                    <a class=" flex-col btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </div>
        </form>
    </div>
</div>
@endsection
