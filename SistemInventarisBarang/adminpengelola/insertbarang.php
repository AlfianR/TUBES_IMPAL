<?php

    /* Attempt MySQL server connection. Assuming you are running MySQL
    server with default setting (user 'root' with no password) */

    $link = mysqli_connect("localhost", "root", "", "databarang");

    // Check connection

    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    // Escape user inputs for security
    $nama_barang = mysqli_real_escape_string($link, $_POST['nama_barang']);
    $status_barang = mysqli_real_escape_string($link, $_POST['status_barang']);

    // attempt insert query execution
    $sql = "INSERT INTO invenbarang (nama_barang, status_barang) VALUES ('$nama_barang', '$status_barang')";

    if(mysqli_query($link, $sql)){
        echo "Records added successfully.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }

    // close connection
    mysqli_close($link);
?>