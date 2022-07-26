<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Warga;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $wargas = Warga::all();
        if (count($wargas) > 0) {
            return view('dashboard')->with(compact('wargas'));
        }elseif (count($wargas) == 0) {
            return view('dashboard');
        }
    }

    public function createWarga()
    {
        return view('penduduk.create', [
            'agama'                         => Agama::all(),
            'darah'                         => Darah::all(),
            'dusun'                         => Dusun::all(),
            'pekerjaan'                     => Pekerjaan::all(),
            'pendidikan'                    => Pendidikan::all(),
            'pendidikan'                    => Pendidikan::all(),
            'status_hubungan_dalam_keluarga'=> StatusHubunganDalamKeluarga::all(),
            'status_perkawinan'             => StatusPerkawinan::all(),
        ]);
    }
}
