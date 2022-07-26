<x-guest-layout>
    <x-auth-card>
        <link href="{{ asset('/build/assets/styles/password-reset.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />

        <x-slot name="logo">
            <a href="/">
{{--                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />--}}
                <img src="{{ asset('build/assets/img/icons/segaran-icon.png') }}" width="50rem" height="50rem"/>
            </a>
        </x-slot>
        <div class="container2">
{{--            <p class="a text-center">Dashboard Segaran</p>--}}
            <h1 class="c text-center">Atur Ulang Kata Sandi</h1>
        </div>
        <div class="mb-4 text-sm text-gray-600" style="text-align: center">
{{--            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}--}}
            {{ __('Masukkan Email di bawah ini') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-center mt-4">
                <x-button style="background-color: #2489f4;">
                    {{ __('KONFIRMASI') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
