<?php include("configuration.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Supermarket</title>
    <link rel="stylesheet" href="./stylesheet.css">
    <title>Supermarket</title>
    <div class="header">
        <h1> Supermarket Database </h1>
    </div>
</head>

<body>
    
    <div class = "return">
        <a href="index.php"><button type="button" class="home-button">Back to Home</button></a>
    </div>

    <br>
    <div class = "table">
    <table border = "1">    
    <thead>
        <tr>
            <th>CustomerID</th>
            <th>CustomerName</th>
            <th>CustomerPhone</th>
            <th>CustomerAddress</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM customer";
        $query = mysqli_query($conf, $sql);

        while($customer = mysqli_fetch_array($query)){
            echo "<tr>";
            echo "<td>".$customer['CustomerID']."</td>";
            echo "<td>".$customer['CustomerName']."</td>";
            echo "<td>".$customer['CustomerPhone']."</td>";
            echo "<td>".$customer['CustomerAddress']."</td>";

            // echo "<td>";
            // echo "<a href='Update.php?id=".$customer['CustomerID']."'>Update</a> | ";
            // // echo "<a href='hapus.php?id=".$siswa['id']."'>Hapus</a>";
            // echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>
    </div>


    </body>
</html>