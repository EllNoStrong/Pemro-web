@extends('layouts.app')

@section('content')
<h3>Dashboard Admin</h3>

<div class="row mt-3">
  <div class="col-md-4"><div class="card p-3">Total Karyawan: <strong>{{ $totalKaryawan }}</strong></div></div>
  <div class="col-md-4"><div class="card p-3">Masuk Hari Ini: <strong>{{ $masukHari }}</strong></div></div>
  <div class="col-md-4"><div class="card p-3">Pulang Hari Ini: <strong>{{ $pulangHari }}</strong></div></div>
</div>

<div class="row mt-4">
  <div class="col-md-6">
    <div class="card p-3">
      <h6>Presensi 30 Hari Terakhir</h6>
      <canvas id="chartHarian"></canvas>
    </div>
  </div>

  <div class="col-md-6">
    <div class="card p-3">
      <h6>Rekap Bulanan ({{ date('Y') }})</h6>
      <canvas id="chartBulanan"></canvas>
    </div>
  </div>
</div>

<a href="{{ route('admin.rekap') }}" class="btn btn-primary mt-3">Lihat Rekap Lengkap</a>

@push('scripts')
<script>
const harianLabels = {!! json_encode($harian->pluck('tanggal')) !!};
const harianData = {!! json_encode($harian->pluck('total')) !!};

new Chart(document.getElementById('chartHarian'), {
  type: 'line',
  data: { labels: harianLabels, datasets: [{ label: 'Jumlah Presensi', data: harianData, fill:false, tension:0.2 }] },
});

const bulLabels = {!! json_encode($bulanan->pluck('bulan')) !!};
const bulData = {!! json_encode($bulanan->pluck('total')) !!};

new Chart(document.getElementById('chartBulanan'), {
  type: 'bar',
  data: { labels: bulLabels, datasets: [{ label: 'Total', data: bulData }] },
});
</script>
@endpush

@endsection
