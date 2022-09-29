<?php
error_reporting(0);
//array scalar (1 dimensi)
$m1 = ['nama'=>'andi','nim'=>'112190','nilai'=>22];
$m2 = ['nama'=>'febri','nim'=>'112191','nilai'=>43];
$m3 = ['nama'=>'yudo','nim'=>'112192','nilai'=>95];
$m4 = ['nama'=>'ucup','nim'=>'112193','nilai'=>79];
$m5 = ['nama'=>'dani','nim'=>'112194','nilai'=>87];
$m6 = ['nama'=>'tawheed','nim'=>'112195','nilai'=>73];
$m7 = ['nama'=>'ryan','nim'=>'112196','nilai'=>64];
$m8 = ['nama'=>'syamil','nim'=>'112197','nilai'=>77];
$m9 = ['nama'=>'azam','nim'=>'112198','nilai'=>95];
$m10 = ['nama'=>'ganjar','nim'=>'112199','nilai'=>38];
//array judul
$ar_judul = ['No','NIM','Nama','Nilai','Keterangan','Grade','Predikat'];
//array associative
$mahasiswa = [$m1,$m2,$m3,$m4,$m5,$m6,$m7,$m8,$m9,$m10];
//agregate
$jml_nilai = array_column($mahasiswa,'nilai');
$total_nilai = array_sum($jml_nilai);
$max_nilai = max($jml_nilai);
$min_nilai = min($jml_nilai);
$jumlah_maha = count($mahasiswa);
$rata2 = $total_nilai / $jumlah_maha;
//keterangan
$hasil = [
    'Nilai Tertinggi'=>$max_nilai,
    'Jml Kg Terendah'=>$min_nilai,
    'Rata2'=>$rata2,
    'Jml Siswa'=>$jumlah_maha
];
?>
<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Nilai Mahasiswa</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    </head>
    <body>
    <style>
    .card {
    box-shadow: 0 19px 21px 0 rgba(0, 0, 0, 0.2);
    border-radius: 10px;
    padding: 20px;
    background-color:crimson;
    }
    .jumbotron {
    padding: 30px;
    background-color: darkkhaki;
    border-radius:40px;
    text-align: center;
    font-size: 20px;
    color: white;
    }
    </style>
    <article class="card">
        <div class="jumbotron">
            <h3 class="text-center">Daftar Mahasiswa</h3>
        </div>
        <table class="table table-striped" style="color:cornsilk;">
            <thead>
                <tr>
                    <?php
                    foreach($ar_judul as $jdl){
                    ?>
                    <th><?= $jdl ?></th>
                    <?php } ?>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach($mahasiswa as $maha){
                $nilai = $maha['nilai'];
                //rumus2
                //ternary nilai lulus
                $keterangan = ($nilai >= 60)?"Lulus":"Gagal";
                //tentukan grade nilai
                if($nilai >= 85 && $nilai <= 100) $grade = 'A';
                else if($nilai >= 75 && $nilai < 85) $grade = 'B';
                else if($nilai >= 60 && $nilai < 75) $grade = 'C';
                else if($nilai >= 30 && $nilai < 60) $grade = 'D';
                else if($nilai >= 0 && $nilai < 30) $grade = 'E';
                else $grade = '';
                //tentukan predikat
                switch ($grade) {
                    case 'A': $predikat = 'Memuaskan'; break;
                    case 'B': $predikat = 'Bagus'; break;
                    case 'C': $predikat = 'Cukup'; break;
                    case 'D': $predikat = 'Kurang'; break;
                    case 'E': $predikat = 'Buruk'; break;
                    default: $predikat = '';
                }
                ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $maha['nim'] ?></td>
                    <td><?= $maha['nama'] ?></td>
                    <td><?= $maha['nilai'] ?></td>
                    <td><?= $keterangan ?></td>
                    <td><?= $grade?></td>
                    <td><?= $predikat ?></td>
                </tr>
                <?php } ?>
            </tbody>
            <tfoot>
                <?php
                foreach ($hasil as $h => $final) {
                ?>
                <tr>
                    <th colspan="6"><?= $h ?></th>
                    <th><?= $final ?></th>
                </tr>
                <?php } ?>
            </tfoot>
        </table>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
        </script>
    </article>
    </body>

</html>



