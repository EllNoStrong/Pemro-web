<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Presensi;
use Illuminate\Support\Facades\Auth;

class KaryawanController extends Controller
{
    public function dashboard()
    {
        $today = Presensi::where('user_id', Auth::id())->where('tanggal', date('Y-m-d'))->first();
        return view('karyawan.dashboard', compact('today'));
    }

    public function masuk(Request $request)
    {
        $userId = Auth::id();
        $tgl = date('Y-m-d');

        $cek = Presensi::firstOrCreate(
            ['user_id'=>$userId,'tanggal'=>$tgl],
            ['tanggal'=>$tgl]
        );

        if ($cek->jam_masuk) {
            return back()->with('error', 'Sudah presensi masuk.');
        }

        $jam = date('H:i:s');
        $cek->jam_masuk = $jam;
        $cek->status = $jam <= '08:00:00' ? 'On Time' : 'Terlambat';
        $cek->save();

        return back()->with('success','Presensi masuk tercatat pada '.$jam);
    }

    public function pulang(Request $request)
    {
        $userId = Auth::id();
        $tgl = date('Y-m-d');

        $cek = Presensi::where('user_id',$userId)->where('tanggal',$tgl)->first();
        if (!$cek) return back()->with('error','Belum presensi masuk.');

        if ($cek->jam_pulang) return back()->with('error','Sudah presensi pulang.');

        $cek->jam_pulang = date('H:i:s');
        $cek->save();

        return back()->with('success','Presensi pulang tercatat.');
    }

    public function rekap()
    {
        $rekap = Presensi::where('user_id', Auth::id())->orderBy('tanggal','desc')->get();
        return view('karyawan.rekap', compact('rekap'));
    }
}
