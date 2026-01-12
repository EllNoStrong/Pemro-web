<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard Barang</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Poppins", sans-serif;
    }

    body {
      min-height: 100vh;
      background: linear-gradient(135deg, #667eea, #764ba2, #a855f7);
      display: flex;
      justify-content: center;
      align-items: flex-start;
      padding: 40px 0;
    }

    .home-container {
      background: #fff;
      width: 90%;
      max-width: 800px;
      border-radius: 15px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
      padding: 30px;
    }

    h2 {
      font-size: 26px;
      color: #333;
      text-align: center;
      margin-bottom: 10px;
    }

    p {
      text-align: center;
      color: #777;
      font-size: 14px;
      margin-bottom: 25px;
    }

    .stats {
      display: flex;
      justify-content: space-around;
      margin-bottom: 30px;
      flex-wrap: wrap;
      gap: 15px;
    }

    .stat-box {
      background: #f8f8f8;
      border-radius: 10px;
      padding: 15px 20px;
      width: 30%;
      min-width: 120px;
      text-align: center;
      box-shadow: 0 3px 6px rgba(0,0,0,0.05);
      transition: 0.3s;
    }

    .stat-box:hover {
      background: #f0f0f0;
    }

    .stat-title {
      font-size: 14px;
      color: #666;
      margin-bottom: 8px;
    }

    .stat-value {
      font-size: 22px;
      font-weight: bold;
      color: #764ba2;
    }

    .btn-container {
      display: flex;
      justify-content: center;
      gap: 15px;
      flex-wrap: wrap;
      margin-bottom: 25px;
    }

    .btn {
      background: linear-gradient(to right, #56ccf2, #8e2de2);
      color: white;
      border: none;
      padding: 10px 18px;
      border-radius: 25px;
      cursor: pointer;
      font-size: 14px;
      font-weight: bold;
      transition: 0.3s;
    }

    .btn:hover {
      opacity: 0.9;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 10px;
    }

    th, td {
      padding: 10px 12px;
      border-bottom: 1px solid #eee;
      text-align: left;
      font-size: 14px;
    }

    th {
      background: #f6f6f6;
      color: #555;
      font-weight: 600;
    }

    tr:hover {
      background: #fafafa;
    }

    .logout {
      text-align: center;
      margin-top: 25px;
      font-size: 13px;
    }

    .logout a {
      color: #764ba2;
      text-decoration: none;
      font-weight: 600;
    }

    .logout a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="home-container">
    <h2>Dashboard Barang</h2>
    <p>Ringkasan data barang Anda</p>

    <div class="stats">
      <div class="stat-box">
        <div class="stat-title">Total Barang</div>
        <div class="stat-value" id="totalBarang">120</div>
      </div>
      <div class="stat-box">
        <div class="stat-title">Jenis Barang</div>
        <div class="stat-value" id="jenisBarang">8</div>
      </div>
      <div class="stat-box">
        <div class="stat-title">Satuan Barang</div>
        <div class="stat-value" id="satuanBarang">4</div>
      </div>
    </div>

    <div class="btn-container">
      <button class="btn">+ Tambah Jenis Barang</button>
      <button class="btn">+ Tambah Satuan Barang</button>
    </div>

    <h3 style="margin-bottom: 10px; color:#444;">Daftar Barang</h3>
    <table>
      <thead>
        <tr>
          <th>No</th>
          <th>Nama Barang</th>
          <th>Jenis</th>
          <th>Satuan</th>
          <th>Stok</th>
        </tr>
      </thead>
      <tbody id="barangList">
        <tr>
          <td>1</td>
          <td>Buku Tulis</td>
          <td>Alat Tulis</td>
          <td>Pcs</td>
          <td>35</td>
        </tr>
        <tr>
          <td>2</td>
          <td>Bolpoin</td>
          <td>Alat Tulis</td>
          <td>Pcs</td>
          <td>50</td>
        </tr>
        <tr>
          <td>3</td>
          <td>Penghapus</td>
          <td>Perlengkapan</td>
          <td>Pcs</td>
          <td>20</td>
        </tr>
        <tr>
          <td>4</td>
          <td>Kertas A4</td>
          <td>Perlengkapan</td>
          <td>Rim</td>
          <td>10</td>
        </tr>
      </tbody>
    </table>

    <div class="logout">
      <a href="#">Logout</a>
    </div>
  </div>

  <script>
    // Hanya contoh: menghitung total otomatis dari list di tabel
    const total = document.querySelectorAll("#barangList tr").length;
    document.getElementById("totalBarang").textContent = total;
  </script>
</body>
</html>
