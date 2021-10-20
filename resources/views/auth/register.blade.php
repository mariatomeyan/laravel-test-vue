@extends('layouts.app')

@section('content')

<div class="flex items-center justify-center ">

    <div class="grid bg-white rounded-lg shadow-xl w-11/12 md:w-9/12 lg:w-1/2 p-5">
        <div class="flex justify-center">
            <div class="flex">
                <h1 class="text-gray-600 font-bold md:text-2xl text-xl">{{ __('Register') }}</h1>
            </div>
        </div>
        <form  method="POST" action="{{ route('register') }}">
            @csrf

            <base-input value="{{ old('name') }}" label="{{ __('Name') }}" name="name" :placeholder="' Enter your username'"></base-input>
            @error('name')
            <base-alert-info message="{{$message}}"></base-alert-info>
            @enderror

            <base-input value="{{ old('email') }}" label="{{ __('Email') }}" type="email" name="email" :placeholder="'Enter your email'"></base-input>
            @error('email')
            <base-alert-info message="{{$message}}"></base-alert-info>
            @enderror

            <base-input value="{{ old('password') }}"  label="{{ __('Password') }}" name="password" :placeholder="'Enter your password'" type="password"></base-input>
            @error('password')
            <base-alert-info message="{{$message}}"></base-alert-info>
            @enderror

            <base-input value="{{ old('password') }}" label="{{ __('Confirm Password') }}" name="password_confirmation" :placeholder="' Enter your password'" type="password"></base-input>
            @error('password_confirmation')
            <base-alert-info message="{{$message}}"></base-alert-info>
            @enderror

            <div class="flex justify-center">
              <base-button  type="submit" :label="'Sign Up'"></base-button>
            </div>
        </form>
    </div>
</div>
@endsection
