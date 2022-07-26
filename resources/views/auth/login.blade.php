<x-guest-layout>
    <x-auth-card>
{{--        @push('styles')--}}
        <link href="{{ asset('/build/assets/styles/login.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
{{--        @endpush--}}

        <x-slot name="logo">
            <a href="/">
{{--                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />--}}
                <img src="{{ asset('/build/assets/img/icons/segaran-icon.png') }}" width="50rem" height="50rem"/>
            </a>
        </x-slot>

        <div class="container2">
            <p class="a text-center">Dashboard Segaran</p>
            <h1 class="c text-center">Login to Dashboard Segaran</h1>
            <p class="b text-center">Masukkan Email dan Password di bawah</p>
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('EMAIL')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('PASSWORD')" />

                <div>
                    <x-input id="password" class="block mt-1 w-full"
                             type="password"
                             name="password"
                             required autocomplete="current-password" />
                </div>
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <label class="switch">
                        <input id="remember_me" type="checkbox" name="remember"/>
                        <span class="slider round"></span>
                    </label>
{{--                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">--}}
                    <span class="ml-2 text-sm text-gray-600">{{ __('Ingat saya') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Lupa password?') }}
                    </a>
                @endif
            </div>

            <div class="flex items-center justify-center mt-4">
                <x-button class="ml-3" style="background-color: #2489f4;">
                    {{ __('MASUK') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>

{{--    <!DOCTYPE html>--}}
{{--<html lang="en">--}}

{{--<head>--}}
{{--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />--}}
{{--    <link rel="stylesheet" href="/assets/styles/login.css" />--}}
{{--    <link href="{{ asset('/build/assets/styles/login.css') }}" rel="stylesheet">--}}

{{--    <meta charset="utf-8" />--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1" />--}}
{{--    <title>Segaran App | Login</title>--}}
{{--</head>--}}

{{--<body>--}}
{{--<div class="container">--}}
{{--    <div class="container2">--}}
{{--        <img src="../assets/img/icons/segaran-icon.png" alt="logo" width="36rem" height="36rem" />--}}
{{--    </div>--}}
{{--    <p class="a">Dashboard Segaran</p>--}}
{{--    <h1>Login to Dashboard Segaran</h1>--}}
{{--    <p class="b">Masukkan Email dan Password di bawah</p>--}}
{{--    <div class="container3">--}}
{{--        <form action="" class="form">--}}
{{--            <div>--}}
{{--                <label for="email">EMAIL</label>--}}
{{--            </div>--}}

{{--            <div>--}}
{{--                <input type="text" name="email" id="email" placeholder="E-mail" class="form-control form-control-sm" method="POST" />--}}
{{--            </div>--}}

{{--            <div>--}}
{{--                <label for="password">PASSWORD</label>--}}
{{--            </div>--}}

{{--            <div>--}}
{{--                <input id="password-field" type="password" class="form-control form-control-sm" name="password" placeholder="Password" method="POST" />--}}

{{--                <i class="bi bi-eye-slash" id="togglePassword" onclick="showpass()"></i>--}}
{{--            </div>--}}
{{--            <div class="fmn">--}}
{{--                <label class="switch">--}}
{{--                    <input type="checkbox" />--}}
{{--                    <span class="slider round"></span>--}}
{{--                </label>--}}
{{--                <label for="" style="font-size: 0.6rem">ingat saya</label>--}}
{{--                <a style="color: #2489f4; margin-left: 30%; font-size: 0.7rem" href="..//password-reset/">lupa password?</a>--}}
{{--            </div>--}}
{{--            <div>--}}
{{--                <input type="submit" value="MASUK" style="font-family: 'Poppins'; width: 7.5rem; height: 1.5rem; margin-top: 10%; margin-left: 23%; color: white; border-radius: 5px; border-width: 0px; background-color: #2489f4; cursor: pointer" />--}}
{{--            </div>--}}
{{--        </form>--}}
{{--    </div>--}}
{{--</div>--}}
{{--</body>--}}
{{--<script>--}}
{{--    function showpass() {--}}
{{--        var x = document.getElementById("password-field");--}}
{{--        if (x.type === "password") {--}}
{{--            x.type = "text";--}}
{{--            document.getElementById("togglePassword").className = "bi bi-eye";--}}
{{--        } else {--}}
{{--            x.type = "password";--}}
{{--            document.getElementById("togglePassword").className = "bi bi-eye-slash";--}}
{{--        }--}}
{{--    }--}}
{{--</script>--}}

{{--</html>--}}
