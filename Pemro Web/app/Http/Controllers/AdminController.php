<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Presensi;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function dashboard()
    {
        $today = date('Y-m-d');

        $totalKaryawan = User::where('role','karyawan')->count();
        $masukHari = Presensi::where('tanggal', $today)->whereNotNull('jam_masuk')->count();
        $pulangHari = Presensi::where('tanggal', $today)->whereNotNull('jam_pulang')->count();

        // data chart hari (30 hari terakhir)
        $harian = Presensi::select('tanggal', DB::raw('count(*) as total'))
                  ->groupBy('tanggal')
                  ->orderBy('tanggal','asc')
                  ->limit(30)
                  ->get();

        // bulanan (tahun ini)
        $bulanan = Presensi::select(DB::raw('MONTH(tanggal) as bulan'), DB::raw('count(*) as total'))
                  ->whereYear('tanggal', date('Y'))
                  ->groupBy('bulan')
                  ->get();

        return view('admin.dashboard', compact('totalKaryawan','masukHari','pulangHari','harian','bulanan'));
    }

    public function rekap()
    {
        $rekap = DB::table('presensis')
            ->join('users','presensis.user_id','=','users.id')
            ->select('presensis.*','users.name')
            ->orderBy('presensis.tanggal','desc')
            ->get();

        return view('admin.rekap', compact('rekap'));
    }

    public function users()
    {
        $users = User::where('role','karyawan')->get();
        return view('admin.users', compact('users'));
    }
}
