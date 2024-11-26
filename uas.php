<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penggajian Karyawan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f4f4;
        }
        .container {
            margin-top: 50px;
        }
        .form-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="form-container">
                    <center>
                <img src="logo-custom.jpg" alt="3" width="30% ">
                </center>
                    <h3 class="text-center mb-4">SOAL UAS PRAKTIK RPL <br> penggajihan <br> guru/karyawan yayasan assalaam</h3>
                      
                    <form action="" method="POST">
                        <div class="mb-3">
                            <label for="no" class="form-label">Nomor Karyawan</label>
                            <input type="number" class="form-control" id="no" name="no" required>
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" required>
                        </div>
                        <div class="mb-3">
                            <label for="unit" class="form-label">Unit Pendidikan</label>
                            <select class="form-select" id="unit" name="unit" required>
                                <option value="SMK">SMK</option>
                                <option value="SMA">SMA</option>
                                <option value="SMP">SMP</option>
                                <option value="SD">SD</option>
                                <option value="TK">TK</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="tanggal" class="form-label">Tanggal Gaji</label>
                            <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                        </div>
                        <div class="mb-3">
                            <label for="jabatan" class="form-label">Jabatan</label>
                            <select class="form-select" id="jabatan" name="jabatan" required>
                                <option value="kepsek">Kepala Sekola</option>
                                <option value="guru">Guru</option>
                                <option value="karyawan">Karyawan</option>
                        </div>
                        <div class="mb-3">
                            <label for="lama" class="form-label">Lama Kerja (Tahun)</label>
                            <input type="number" class="form-control" id="lama" name="lama" required>
                        </div>
                        <div class="mb-3">
                            <label for="status" class="form-label">Status Kerja</label>
                            <select class="form-select" id="status" name="status" required>
                                <option value="Tetap">Tetap</option>
                                <option value="Kontrak">Kontrak</option>
                                <option value="Freelance">Freelance</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="bpjs" class="form-label">BPJS</label>
                            <input type="number" class="form-control" id="bpjs" name="bpjs" required>
                        </div>
                        <div class="mb-3">
                            <label for="pinjaman" class="form-label">Pinjaman</label>
                            <input type="number" class="form-control" id="pinjaman" name="pinjaman" required>
                        </div>
                        <div class="mb-3">
                            <label for="cicilan" class="form-label">Cicilan</label>
                            <input type="number" class="form-control" id="cicilan" name="cicilan" required>
                        </div>
                        <div class="mb-3">
                            <label for="infaq" class="form-label">Infaq</label>
                            <input type="number" class="form-control" id="infaq" name="infaq" required>
                        </div>
                        
                        
                        <button type="submit" class="btn btn-primary w-100">Proses Penggajian</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $no = $_POST['no'];
    $nama = $_POST['nama'];
    $unit = $_POST['unit'];
    $tanggal_gaji = $_POST['tanggal'];
    $jabatan = $_POST['jabatan'];
    $lama_kerja = $_POST['lama'];
    $status_kerja = $_POST['status'];
    $bpjs = $_POST['bpjs'];
    $pinjaman = $_POST['pinjaman'];
    $cicilan = $_POST['cicilan'];
    $infaq = $_POST['infaq'];

    class penggajihan{
        public function gajih($no,$nama,$unit,$tanggal_gaji,$jabatan,$lama_kerja,$status_kerja,$bpjs,$pinjaman,$cicilan,$infaq){
            echo"no : $no <br>";
            echo "nama : $nama <br>";
            echo "unit : $unit <br>";
            echo "tanggal gaji : $tanggal_gaji <br>";
            echo "jabatan : $jabatan <br>";
            echo "lama kerja : $lama_kerja <br>";
            echo "status : $status_kerja <br>";
            echo "jabatan : $bpjs <br>";
            echo "jabatan : $pinjaman <br>";
            echo "jabatan : $cicilan <br>";
            echo "jabatan : $infaq <br>";
        
        }
    }
    // Perhitungan gaji (misal gaji pokok berdasarkan jabatan dan lama kerja)
   $tunjangan = 0;
    if ($jabatan == "kepsek") {
        $tunjangan = 3000000;
    } elseif ($jabatan == "guru") {
        $tunjangan = 1500000;
    } elseif ($jabatan == "karyawan") {
        $tunjangan = 1000000;
    }

    if ($status_kerja == "Tetap") {
    $bonus = 1000000;
} elseif ($status_kerja == "Kontrak") {
    $bonus = 0;
} elseif ($status_kerja == "Freelance") {
    $bonus = 0;
}


$gaji_bersih = ($tunjangan + $bonus) - ($bpjs - $pinjaman - $cicilan - $infaq);




    // Tampilkan hasil
    echo "
    <div class='container mt-5'>
        <h2 class='text-center'>Rincian Gaji Karyawan</h2>
        <table class='table table-bordered mt-3'>
            <tr><th>Nomor</th><td>$no</td></tr>
            <tr><th>Nama</th><td>$nama</td></tr>
            <tr><th>Unit Pendidikan</th><td>$unit</td></tr>
            <tr><th>Tanggal Gaji</th><td>$tanggal_gaji</td></tr>
            <tr><th>Jabatan</th><td>$jabatan</td></tr>
            <tr><th>Lama Kerja</th><td>$lama_kerja tahun</td></tr>
            <tr><th>Status Kerja</th><td>$status_kerja</td></tr>
            <tr><th>bonus</th><td>$bonus</td></tr>
            <tr><th>BPJS</th><td>Rp " . number_format($bpjs, 0, ',', '.') . "</td></tr>
            <tr><th>Pinjaman</th><td>Rp " . number_format($pinjaman, 0, ',', '.') . "</td></tr>
            <tr><th>Cicilan</th><td>Rp " . number_format($cicilan, 0, ',', '.') . "</td></tr>
            <tr><th>Infaq</th><td>Rp " . number_format($infaq, 0, ',', '.') . "</td></tr>
            <tr><th>Gaji Bersih</th><td>Rp " . number_format($gaji_bersih, 0, ',', '.') . "</td></tr>
        </table>
        <a href='uas.php' class='btn btn-primary'>Kembali</a>
    </div>";
}