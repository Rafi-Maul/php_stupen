<?php
    // memanggil file pegawai dengan fungsi require
    require 'banktugas.php';

    // membuat 6 instance object pegawai
    $p1 = new Pegawai('01109150', 'LeBron', 'Manager', 'Kristen', 'Menikah');
    $p2 = new Pegawai('01109151', 'Momo', 'Kepala Bagian', 'Buddha', 'Belum Menikah');
    $p3 = new Pegawai('01109152', 'Jennie', 'Staff', 'Islam', 'Belum Menikah');
    $p4 = new Pegawai('01109153', 'Mcgrady', 'Asisten Manager', 'Islam', 'Menikah');
    $p5 = new Pegawai('01109154', 'Adesanya', 'Staff', 'Hindu', 'Menikah');

    // array associative
    $pegawai = [$p1, $p2, $p3, $p4, $p5, $p6];
?>
