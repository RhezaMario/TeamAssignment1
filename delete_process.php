<?php

include("configuration.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['Delete'])){

    // ambil data dari formulir
    $ID = $_POST['CustomerID'];

    // buat query update
    $sql = "DELETE FROM customer WHERE CustomerID = '$ID'";
    $query = mysqli_query($conf, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: View.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>