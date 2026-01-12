<?php

namespace App\Exports;

use App\Models\Presensi;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Support\Facades\DB;

class PresensiExport implements FromCollection
{
    public function collection()
    {
        return DB::table('presensis')
            ->join('users','presensis.user_id','=','users.id')
            ->select('users.name','presensis.tanggal','presensis.jam_masuk','presensis.jam_pulang','presensis.status')
            ->orderBy('presensis.tanggal','desc')
            ->get();
    }
}
