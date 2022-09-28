<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form-Tugas 2 PHP|M Rafi Maulana</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body style="background-color:darkslateblue;">
    <h1 style="text-align:center;">Form Data Pegawai</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <div class="container px-5 my-5">
    <form method="POST">
        <div class="form-floating mb-3">
            <input class="form-control" id="masukanama" type="text" name="nama" placeholder="Nama Pegawai" autocomplete="off" required />
            <label for="masukanama">Nama Pegawai</label>
        </div>
        <div class="form-floating mb-3">
            <select class="form-select" id="masukanagama" name="agama" aria-label="Agama" required >
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Buddha">Buddha</option>
                <option value="Hindu">Hindu</option>
            </select>
            <label for="masukanagama">Agama</label>
        </div>
        <div class="mb-3">
            <label class="form-label d-block">Jabatan</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" id="manager" type="radio" name="jabatan" value="Manager" required />
                <label class="form-check-label" for="manager">Manager</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" id="asistenManager" type="radio" name="jabatan" value="Asisten" required />
                <label class="form-check-label" for="asistenManager">Asisten Manager</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" id="kabag" type="radio" name="jabatan" value="Kabag" required />
                <label class="form-check-label" for="kabag">Kabag</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" id="staff" type="radio" name="jabatan" value="Staff" required />
                <label class="form-check-label" for="staff">Staff</label>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label d-block">Status</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" id="menikah" type="radio" name="status" value="Menikah" required />
                <label class="form-check-label" for="menikah">Menikah</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" id="belumMenikah" type="radio" name="status" value="Belum Menikah" required />
                <label class="form-check-label" for="belumMenikah">Belum Menikah</label>
            </div>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" id="jumlahanak" type="text" name="jumlahanak" placeholder="Jumlah Anak" autocomplete="off"/>
            <label for="jumlahAnak">Jumlah Anak</label>
        </div>
        <div class="col-12">
                <button type="submit" name="proses" class="btn btn-sm btn-primary">Simpan</button>
        </div>
    </form>
    <?php
    error_reporting(0);
    //deklarasi & inisialisasi
    $nama = $_POST['nama'];
    $agama = $_POST['agama'];
    $jabatan = $_POST['jabatan'];
    $status = $_POST['status'];
    $jumlahanak = $_POST['jumlahanak'];
    $tombol = $_POST['proses'];
    //gapok dengan switch case
    switch ($jabatan) {
        case 'Manager': $gapok = 20000000; break;
        case 'Asisten Manager': $gapok = 15000000; break;
        case 'Kabag': $gapok = 10000000; break;
        case 'Staff': $gapok = 4000000; break;
        default: $gapok = '';
    }
    //if multi kondisi tunjangan keluarga
    if ($status == "Menikah" && $jumlahanak <= 2) $tunkel = $gapok * 5 / 100;
    else if ($status == "Menikah" && $jumlahanak <= 5) $tunkel = $gapok * 10 / 100;
    else if ($status == "Menikah" && $jumlahanak > 5) $tunkel = $gapok * 15 / 100;
    else $tunkel = 0;
    //tunjangan jabatan
    $tunjab = $gapok * 0.2;
    //gaji kotor
    $gator = $gapok + $tunjab;
    //ternary zakat profesi
    $zaprof = ($agama == "islam" && $gator = 6000000 )?$gator * 2.5: 0;
    //take home pay
    $thp = ($gapok >= 10000000)? 500000 :0 ;

    //execute
    if(isset($tombol)){ ?>
        <div class="card" style="width: 100%;">
            <div class="body">
                <div class=" alert alert-primary p-5" role="alert">
                    Nama Pegawai: <?= $nama ?>
                    <br />Agama: <?= $agama ?>
                    <br />Jabatan: <?= $jabatan ?>
                    <br />Status: <?=$status ?>
                    <br />Jumlah Anak: <?= $jumlahAnak ?>
                    <br />Gaji Pokok: <?= number_format($gapok, 2, ',', '.'); ?>
                    <br />Tunjangan Jabatan: <?= number_format($tunjab, 2, ',', '.'); ?>
                    <br />Tunjangan Keluarga: <?= number_format($tunkel, 2, ',', '.'); ?>
                    <br />Gaji Kotor: <?= number_format($gator, 2, ',', '.'); ?>
                    <br />Zakat Profesi: <?= number_format($zaprof, 2, ',', '.'); ?>
                    <br />Take Home Pay: <?= number_format($thp, 2, ',', '.'); ?>
                </div>
            </div>
        </div>
    <?php } ?>
</div>
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
  </body>
</html>

