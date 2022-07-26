{{--<x-app-layout>--}}
{{--    <x-slot name="header">--}}
{{--        <h2 class="font-semibold text-xl text-gray-800 leading-tight">--}}
{{--            {{ __('Dashboard') }}--}}
{{--        </h2>--}}
{{--    </x-slot>--}}

{{--    <div class="py-12">--}}
{{--        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">--}}
{{--            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">--}}
{{--                <div class="p-6 bg-white border-b border-gray-200">--}}
{{--                    You're logged in!--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</x-app-layout>--}}

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="{{ asset('/build/assets/styles/main.css') }}" rel="stylesheet">
    <link href="{{ asset('/build/assets/styles/dashboard.css') }}" rel="stylesheet">

    <script src="{{ asset('/build/assets/scripts/style.js') }}" async></script>

    <title>Dashboard | Segaran App</title>
</head>
<body>
<aside state="open">
    <div id="title">
            <span id="logo">
                <img src="{{ asset('/build/assets/img/icons/segaran-icon.png') }}" alt="" width="50" height="50" navHide="">
                <span navHide="">
                    <h1>Segaran</h1>
                    <p>Dashboard</p>
                </span>

            </span>
        <img src="{{ asset('/build/assets/img/icons/menu-toggle.png') }}" alt="" width="50" id="menu-toggle" class="button">
    </div>

    <div id="nav">
    </div>

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type=submit id="keluar" name="Keluar" class="button" navHide="" style="margin-left:-3.5rem">Keluar</button>
    </form>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <input type="image" src="{{ asset('/build/assets/img/icons/log-out.png') }}" alt="log out" width="50" class="button" hidden id="logout"/>
    </form>
</aside>

<main>
    <header>
        <div id="title">
            Dashboard
        </div>
        <span id="top-right">
                <img src="{{ asset('build/assets/img/icons/notif.png') }}" alt="notification" width="30" height="30" class="button">
                <div id="divider">|</div>

                <div class="profile button">
                    <p id="name" value="Kepala Desa">Kepala Desa</p>

                    <div id="profile-circle">
                        <img src="{{ asset('build/assets/img/avatar-man.png') }}" alt="profile" width="50" height="50">
                    </div>
                </div>
            </span>
    </header>

    <section>
        <div class="card-container">
            <div class="card">
                <h2>Jumlah Dusun</h2>
                <h1>60</h1>
            </div>
            <div class="card"></div>
            <div class="card"></div>
            <div class="card"></div>
        </div>
        <div class="table">
            <head>Data Warga Desa  Segaran</head>
            <div class="sort"></div>
            <div class="data"></div>
            <table class="table table-hover">
                <tr>
                    <th style="color: grey;">No</th>
                    <th style="color: grey;">Nomor KK</th>
                    <th style="color: grey;">Validasi</th>
                    <th style="color: grey;">Nama</th>
                    <th style="color: grey;">NIK</th>
                    <th style="color: grey;">RT</th>
                    <th style="color: grey;">RW</th>
                    <th style="color: grey;">Dusun</th>
                    <th style="color: grey;"></th>
                </tr>
                @forelse($wargas as $warga)
                    <tr>
                        <td>
                            <span>{{ $warga->id }}</span>
                        </td>
                        <td>
                            <span>{{ $warga->nomor_kk }}</span>
                        </td>
                        <td>
                            <span>{{ $warga->validasi }}</span>
                        </td>
                        <td>
                            <span>{{ $warga->nama }}</span>
                        </td>
                        <td>
                            <span>{{ $warga->nik }}</span>
                        </td>
                        <td>
                            <span>{{ $warga->rt }}</span>
                        </td>
                        <td>
                            <span>{{ $warga->rw }}</span>
                        </td>
                        <td>
                            <span>{{ $warga->dusun }}</span>
                        </td>
                        <td>
                            <button class="btn btn-sm btn-primary btn-detail" id="btn-detail" t-att-data-warga-number="w.nik">Detail</button>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td>No Data</td>
                    </tr>
                @endforelse
            </table>
        </div>
    </section>
</main>
</body>
</html>

