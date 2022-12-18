<?php 
    require('koneksidb.php');
    $nim=$_REQUEST["NIM"];
    $query = "SELECT * from mahasiswa where NIM='".$nim."'";
    $hasil = mysqli_query($con, $query) or die ( mysqli_error());
    $row = mysqli_fetch_assoc($hasil);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Update Record</title>
    <link rel="stylesheet" href="admin2105551099.css" />
</head>
<body>
<div>
        <div class="topnav">
            <a href="../index.php">Home</a>
            <a href="tambahdata.php">Tambah Data Mhs</a>
            <a href="datamhs.php">Data Mahasiswa</a>
            <a class="active" href="editdata.php">Edit Data Mahasiswa</a>
        </div>
        <div>
        <div class="container">
        <div class="bingkaijudul">
            <h1 class="judul">Edit Data Mahasiswa</h1>
        </div>
        <?php
        $status = "";
        if(isset($_POST['submit'])){
            $nim=$_REQUEST["NIM"];
            $namamhs = $_REQUEST["Namamhs"];
            $alamatmhs = $_REQUEST["Alamatmhs"];
            $kontakmhs = $_REQUEST["Kontakmhs"]; 
            $update="UPDATE mahasiswa set 
                        NIM='".$nim."', 
                        Namamhs='".$namamhs."', 
                        Alamatmhs='".$alamatmhs."', 
                        Kontakmhs='".$kontakmhs."'
                        where NIM='".$nim."'";
            mysqli_query($con, $update) or die(mysqli_error());
            if(mysqli_affected_rows($con ) && mysqli_query($con, $update) > 0 ) {
                echo "
                    <script>
                        alert ('Data Berhasil DiUbah');
                        document.location.href = 'datamhs.php';
                    </script>
                ";
            }
            $status = "Data diubah </br></br><a href='datamhs.php'>Lihat Tabel Data</a>";
            echo '<p class= "judul">'.$status.'</p>';
        }else {
        ?>
        <div class="bingkai">
        <form name="form" action="" method="post" class="form">
        <div class="bagian-form">
            <label for="NIM">NIM : </label>
            <input type="text" name="NIM" id="NIM" required value="<?php echo $row["NIM"];?>" >
            <i class="uil uil-list-ol"></i>
        </div>
        <div class="bagian-form">
            <label for="Namamhs">Nama Mahasiswa : </label>
            <input type="text" name="Namamhs" id="Namamhs" required value="<?php echo $row["Namamhs"];?>">
            <i class="uil uil-user"></i>
        </div>
        <div class="bagian-form">
            <label for="Alamatmhs">Alamat Mahasiswa :</label>
            <input type="text" name="Alamatmhs" id="Alamatmhs" required value="<?php echo $row["Alamatmhs"];?>">
            <i class="uil uil-home"></i>
        </div>
        <div class="bagian-form">
            <label for="Kontakmhs">Kontak Mahasiswa : </label>
            <input type="text" name="Kontakmhs" id="Kontakmhs" required required value="<?php echo $row["Kontakmhs"];?>">
            <i class="uil uil-phone"></i>
        </div>
        <div class="bagian-form">
            <label for="Kontakmhs">Kontak Mahasiswa : </label>
            <input type="text" name="Kontakmhs" id="Kontakmhs" required required value="<?php echo $row["Kontakmhs"];?>">
            <i class="uil uil-phone"></i>
        </div>
            <div>
        <button type="submit" name="submit" value="Update">Simpan</button>
            </div>
            </form>
        <?php } ?>
              
</div>
    <div>
        <p class="menu">
        <a href="datamhs.php">BATAL</a>  
        </p>
    </div> 
</body>
</html>
