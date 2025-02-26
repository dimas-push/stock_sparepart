<?php

//koneksi database
$conn = mysqli_connect("localhost", "root", "", "stockbarang");
session_start();

// Nambah Barang
if (isset($_POST["addnewbarang"])) {
    $tanggal = $_POST["tanggal"];
    $no_penerimaan = $_POST["no_penerimaan"];
    $namabarang = $_POST["namabarang"];
    $saldo = $_POST["saldo"];
    $quantity = $_POST["quantity"];
    $rak = $_POST["rak"];
    $nobin = $_POST["nobin"];
    $pic = $_POST["pic"];

    $addtotable = mysqli_query($conn, "INSERT INTO stock (tanggal, no_penerimaan, namabarang, saldo, quantity, rak, nobin, pic) VALUES ('$tanggal', '$no_penerimaan', '$namabarang', '$saldo', '$quantity', '$rak', '$nobin', '$pic')");

    if ($addtotable) {
        header('Location: index.php');
    } else {
        echo 'Gagal';
        header('Location: index.php');
    }

}
?>