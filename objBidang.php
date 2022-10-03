<?php
//array scalar
$ar_judul = ['No','Nama Bidang','Luas Bidang','Keliling Bidang'];
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
    <style>
    .card {
    box-shadow: 0 39px 21px 0 rgba(0, 0, 0, 0.2);
    border-radius: 10px;
    padding: 30px;
    background-color:darkmagenta;
    }
    .jumbotron {
    padding: 40px;
    background-color: darkseagreen;
    border-radius:20px;
    text-align: center;
    font-size: 20px;
    color: white;
    }
    </style
    <body>
    <article class="card">
        <div class="jumbotron">
            <h3 class="text-center">Bidang</h3>
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
                require_once 'Lingkaran.php';
                require_once 'PersegiPanjang.php';
                require_once 'Segitiga.php';
                
                $lingkaran = new Lingkaran('8');
                $persegi_panjang = new PersegiPanjang('12', '18');
                $segitiga = new Segitiga('14', '7', '4', '8', '6');
                
                $bidang = [$lingkaran, $persegi_panjang, $segitiga];
                    foreach ($bidang as $bd){
                ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $bd->namaBidang() ?></td>
                    <td><?= $bd->luasBidang() ?></td>
                    <td><?= $bd->kelilingBidang() ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
        </script>
    </article>
    </body>
</html>
    
