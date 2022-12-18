<?php
require('koneksidb.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>DATA INPUTAN</title>
    <link rel="stylesheet" href="admin2105551099.css" />
</head>

<body>
    <div>
        <div class="topnav">
            <a href="../index.php">Home</a>
            <a href="tambahdata.php">Tambah Data Mhs</a>
            <a class="active" href="datamhs.php">Data Mahasiswa</a>
        </div>
        <div class="containerdata">
            <div class="bingkaijudul">
                <h1 class="judul">Data Mahasiswa</h1>
            </div>
            <div class="bingkaijudul">
                <table id="data">
                    <thead>
                        <tr>
                            <th>
                                <strong>No</strong>
                            </th>
                            <th>
                                <strong>NIM</strong>
                            </th>
                            <th>
                                <strong>Nama</strong>
                            </th>
                            <th>
                                <strong>Alamat</strong>
                            </th>
                            <th>
                                <strong>Kontak</strong>
                            </th>
                            <th>
                                <strong>Edit</strong>
                            </th>
                            <th>
                                <strong>Delete</strong>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $count = 1;
                        $sel_query = "SELECT * from mahasiswa ORDER BY NIM asc;";
                        $hasil = mysqli_query($con, $sel_query);
                        while ($row = mysqli_fetch_assoc($hasil)) { ?>
                            <tr>
                                <td>
                                    <?php echo $count; ?>
                                </td>
                                <td>
                                    <?php echo $row["NIM"]; ?>
                                </td>
                                <td>
                                    <?php echo $row["Namamhs"]; ?>
                                </td>
                                <td>
                                    <?php echo $row["Alamatmhs"]; ?>
                                </td>
                                <td>
                                    <?php echo $row["Kontakmhs"]; ?>
                                </td>
                         
                                <td>
                                    <a href="editdata.php? NIM=<?php echo $row["NIM"]; ?>">Edit</a>
                                </td>
                                <td>
                                    <a href="hapusdata.php?NIM=<?php echo $row["NIM"]; ?>">Delete</a>
                                </td>
                            </tr>
                        <?php $count++;
                        } ?>
                    </tbody>
                </table>
            </div>
            <div class="bingkaijudul">
                <div>
                    <p class="menu">
                        <a href="tambahdata.php">Tambah Data Mahasiswa</a>
                    </p>
                </div>
            </div>

        </div>
    </div>
    </div>
</body>

</html>
