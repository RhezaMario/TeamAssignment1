<?php

include("configuration.php");

if(isset($_POST['Update'])){

    $ID = $_POST['CustomerID'];
    $Name = $_POST['CustomerName'];
    $Phone = $_POST['CustomerPhone'];
    $Address = $_POST['CustomerAddress'];

    $sql = "UPDATE customer SET CustomerName = '$Name', CustomerPhone ='$Phone', CustomerAddress = '$Address' WHERE CustomerID = '$ID'";
    $query = mysqli_query($conf, $sql);

    if( $query ) {
        header('Location: View.php');
    } else {
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>