@extends('layouts.app')
@section('content')
<h3>Dashboard Karyawan</h3>

@if(session('success')) <div class="alert alert-success">{{ session('success') }}</div> @endif
@if(session('error')) <div class="alert alert-danger">{{ session('error') }}</div> @endif

<div class="card p-3 mt-3">
  @if(!$today)
    <form action="{{ route('karyawan.masuk') }}" method="POST">@csrf<button class="btn btn-success w-100">Presensi Masuk</button></form>
  @else
    <p><strong>Jam Masuk:</strong> {{ $today->jam_masuk }}</p>
    <p><strong>Status:</strong> {{ $today->status }}</p>
    @if(!$today->jam_pulang)
      <form action="{{ route('karyawan.pulang') }}" method="POST">@csrf<button class="btn btn-danger w-100">Presensi Pulang</button></form>
    @else
      <p><strong>Jam Pulang:</strong> {{ $today->jam_pulang }}</p>
    @endif
  @endif
</div>

<a href="{{ route('karyawan.rekap') }}" class="btn btn-primary mt-3">Lihat Rekap Bulanan</a>
@endsection
