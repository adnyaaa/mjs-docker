<?php 
    require('koneksidb.php');
    $status = "";
    if(isset($_POST['submit'])){
        $nim = $_REQUEST["NIM"];
        $namamhs = $_REQUEST["Namamhs"];
        $alamatmhs = $_REQUEST["Alamatmhs"];
        $kontakmhs = $_REQUEST["Kontakmhs"];     
    $ins_query= "INSERT INTO mahasiswa 
                    VALUES ('$nim' , '$namamhs' , '$alamatmhs' , '$kontakmhs')";
    mysqli_query($con, $ins_query) or die(mysql_error());
    $status = "New Record Inserted Successfully.</br></br><a href='datamhs.php'>View Inserted Record</a>";
    if(mysqli_affected_rows($con) > 0 ) {
        echo "
            <script>
                alert ('Data Berhasil Ditambahkan');
                document.location.href = 'datamhs.php';
            </script>
        ";
    }
}

   
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Tambah Data Mahasiswa Baru</title>
    <link rel="stylesheet" href="admin2105551099.css" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>
<body>
    <div>
    <div class="topnav">
        <a href="../index.php">Home</a>
        <a class="active" href="tambahdata.php">Tambah Data Mhs</a>
        <a href="datamhs.php">Data Mahasiswa</a>
    </div>
        <div class="container">
            <div class="bingkaijudul">
                <h1 class="judul">Tambah Data Mahasiswa Baru</h1>
            </div>
            <div class="bingkai">
                <form action="" method="POST" class="form">
                    <div class="bagian-form">
                        <label for="NIM">NIM : </label>
                        <input type="text" name="NIM" id="NIM" placeholder="masukan NIM" required  onkeypress="return ValidateAngka(event);">
                        <i class="uil uil-list-ol"></i>
                    </div>
                    <div class="bagian-form">
                        <label for="Namamhs">Nama Mahasiswa : </label>
                        <input type="text" name="Namamhs" id="Namamhs" placeholder="masukan nama" required  onkeypress="return ValidateNama(event);">
                        <i class="uil uil-user"></i>
                    </div>
                    <div class="bagian-form">
                        <label for="Alamatmhs">Alamat Mahasiswa :</label>
                        <input type="text" name="Alamatmhs" id="Alamatmhs"  placeholder="masukan alamat" onkeypress="return ValidateAlamat(event);">
                        <i class="uil uil-home"></i>
                    </div>
                    <div class="bagian-form">
                        <label for="Kontakmhs">Kontak Mahasiswa : </label>
                        <input type="text" name="Kontakmhs" id="Kontakmhs" placeholder="masukan kontak telepon" required  onkeypress="return ValidateNoTelp(event);">
                        <i class="uil uil-phone"></i>
                    </div>
                    <div>
                        <button type="submit" name="submit">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
       
    </div>
<script>
        //validasi    
        function ValidateAngka(username) {
                var keyCode = username.keyCode || username.which;
    
                var regex = /^\d*(\.\d+)?$/;
                var isValid = regex.test(String.fromCharCode(keyCode));
                if (!isValid) {
                    alert("Input berupa angka");
                }
    
                return isValid;
            }
            function ValidateNama(username) {
                var keyCode = username.keyCode || username.which;
                 
                var regex =  /^[a-zA-Z\s-, ]+$/;
                var isValid = regex.test(String.fromCharCode(keyCode));
                if (!isValid) {
                    alert("Input berupa huruf!");
                }
    
                return isValid;
            }
            function ValidateAlamat(username) {
                var keyCode = username.keyCode || username.which;
                var regex =  /^[\w\-\s]+$/; 
                var isValid = regex.test(String.fromCharCode(keyCode));
                if (!isValid) {
                    alert("Input berupa angka dan huruf!");
                }
                return isValid;
            }
            function ValidateNomertlp(username) {
                var keyCode = username.keyCode || username.which;
    
                var regex = /^\d*(\.\d+)?$/;
                var isValid = regex.test(String.fromCharCode(keyCode));
                if (!isValid) {
                    alert("Input berupa angka");
                }
    
                return isValid;
            }
            
            function ValidatePassword(username) {
                var keyCode = username.keyCode || username.which;
            
                var regex =  /^[\w\-\s]+$/;
                var isValid = regex.test(String.fromCharCode(keyCode));
                if (!isValid) {
                    alert("Input password tidak valid");
                }
    
                return isValid;
            }
            
        
        </script>
</body>
</html>
