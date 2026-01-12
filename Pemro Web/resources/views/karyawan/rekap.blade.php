@extends('layouts.app')
@section('content')
<h3>Rekap Presensi Saya</h3>

<table class="table table-bordered">
  <thead class="table-dark"><tr><th>No</th><th>Tanggal</th><th>Masuk</th><th>Pulang</th><th>Status</th></tr></thead>
  <tbody>
    @foreach($rekap as $r)
    <tr>
      <td>{{ $loop->iteration }}</td>
      <td>{{ $r->tanggal }}</td>
      <td>{{ $r->jam_masuk ?? '-' }}</td>
      <td>{{ $r->jam_pulang ?? '-' }}</td>
      <td>{{ $r->status ?? '-' }}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
