<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeminjamController extends Controller
{
    public function lihat_data_peminjam()
    {
        $peminjam = ['Ardhilla',
                    'Vivi',
                    'Jisooyaa'
                ];
        return view('peminjams/lihat_data_peminjam', compact('peminjam'));
    }
}
