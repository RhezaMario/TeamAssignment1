<?php

include("configuration.php");

if(isset($_POST['insert'])){

    // ambil data dari formulir
    $ID = $_POST['CustomerID'];
    $Name = $_POST['CustomerName'];
    $Phone = $_POST['CustomerPhone'];
    $Address = $_POST['CustomerAddress'];

    // buat query
    $sql = "INSERT INTO customer  VALUES ('$ID', '$Name', '$Phone', '$Address')";
    $query = mysqli_query($conf, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        echo "success";
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>