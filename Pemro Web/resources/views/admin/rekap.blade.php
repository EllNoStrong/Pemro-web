@extends('layouts.app')
@section('content')
<h3>Rekap Presensi Semua Karyawan</h3>

<div class="mb-3">
  <a href="{{ route('admin.export.pdf') }}" class="btn btn-danger">Export PDF</a>
  <a href="{{ route('admin.export.excel') }}" class="btn btn-success">Export Excel</a>
</div>

<table class="table table-bordered">
  <thead class="table-dark">
    <tr><th>No</th><th>Nama</th><th>Tanggal</th><th>Masuk</th><th>Pulang</th><th>Status</th></tr>
  </thead>
  <tbody>
    @foreach($rekap as $r)
    <tr>
      <td>{{ $loop->iteration }}</td>
      <td>{{ $r->name }}</td>
      <td>{{ $r->tanggal }}</td>
      <td>{{ $r->jam_masuk ?? '-' }}</td>
      <td>{{ $r->jam_pulang ?? '-' }}</td>
      <td>{{ $r->status ?? '-' }}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
