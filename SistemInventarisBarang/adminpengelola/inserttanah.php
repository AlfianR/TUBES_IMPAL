<?php

    /* Attempt MySQL server connection. Assuming you are running MySQL
    server with default setting (user 'root' with no password) */

    $link = mysqli_connect("localhost", "root", "", "datatanah");

    // Check connection

    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    // Escape user inputs for security
    $lokasi_tanah = mysqli_real_escape_string($link, $_POST['lokasi_tanah']);
    $luas_tanah = mysqli_real_escape_string($link, $_POST['luas_tanah']);

    // attempt insert query execution
    $sql = "INSERT INTO inventanah (lokasi_tanah, luas_tanah) VALUES ('$lokasi_tanah', '$luas_tanah')";

    if(mysqli_query($link, $sql)){
        echo "Records added successfully.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }

    // close connection
    mysqli_close($link);
?>