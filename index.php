<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Mahasiswa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
      <a class="navbar-brand" href="#">Data Mahasiswa</a>
    </div>
  </nav>

  <!-- Konten -->
  <div class="container my-5">
    <h2 class="mb-4 text-center">Daftar Mahasiswa</h2>
    <table class="table table-bordered table-striped">
      <thead class="table-dark">
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>NIM</th>
          <th>Prodi</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $mahasiswa = [
          ["nama" => "Komang Yuni", "nim" => "210101001", "prodi" => "Sistem Informasi"],
          ["nama" => "Made Putri", "nim" => "210101002", "prodi" => "Teknik Informatika"],
          ["nama" => "Nyoman Agus", "nim" => "210101003", "prodi" => "Manajemen Informatika"]
        ];
        $no = 1;
        foreach ($mahasiswa as $mhs) {
          echo "<tr>
                  <td>{$no}</td>
                  <td>{$mhs['nama']}</td>
                  <td>{$mhs['nim']}</td>
                  <td>{$mhs['prodi']}</td>
                </tr>";
          $no++;
        }
        ?>
      </tbody>
    </table>
  </div>

  <!-- Footer -->
  <footer class="bg-primary text-white text-center py-3">
    <p>&copy; 2025 KSI Project - Komang Yuni</p>
  </footer>
</body>
</html>
