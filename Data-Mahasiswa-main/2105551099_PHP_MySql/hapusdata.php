<?php
    require('koneksidb.php');
    $nim= $_REQUEST["NIM"];
    $query = "DELETE FROM mahasiswa WHERE NIM = $nim"; 
    $hasil = mysqli_query($con, $query) or die ( mysqli_error());
    header("Location: datamhs.php");
?>