<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Presensi;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Exports\PresensiExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;

class ExportController extends Controller
{
    public function pdf()
    {
        $data = DB::table('presensis')
            ->join('users','presensis.user_id','=','users.id')
            ->select('presensis.*','users.name')
            ->orderBy('presensis.tanggal','desc')
            ->get();

        $pdf = Pdf::loadView('admin.export_pdf', compact('data'));
        return $pdf->download('rekap-presensi.pdf');
    }

    public function excel()
    {
        return Excel::download(new PresensiExport, 'rekap-presensi.xlsx');
    }
}
