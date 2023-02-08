<!DOCTYPE html>
<html>
    <head>
        <title>Data</title>
</head>
<body>
    <center>
        <header>
            <h3> DATA PEMINJAM </h3>
</header>
<table border="1">
    <tr>

    <td>Nama Peminjam</td>
    <td>Alamat</td>
    <td>Umur</td>
    <td>Keperluan</td>
    <td>Jaminan</td>
    <td>Nomer Rangka</td>
    <td>Merek</td>
    <td>Jenis Motor</td>
    <td>Tahun Motor</td>
    <td>Tanggal Pinjam</td>
    <td>Tanggal Kembali</td>
    <td>Aksi</td>
    </tr>

    <?php
    include("koneksi.php");
    $query=mysqli_query($koneksi, "SELECT * FROM tb_peminjam INNER JOIN
    tb_motor ON tb_peminjam.id_motor = tb_motor.id_motor");

    while($data=mysqli_fetch_array($query)){
        echo "<tr>";
        echo "<td>".$data['nama_peminjam']."</td>";
        echo "<td>".$data['alamat']."</td>";
        echo "<td>".$data['umur']."</td>";
        echo "<td>".$data['keperluan']."</td>";
        echo "<td>".$data['jaminan']."</td>";
        echo "<td>".$data['nomor_rangka']."</td>";
        echo "<td>".$data['merek']."</td>";
        echo "<td>".$data['jenis_motor']."</td>";
        echo "<td>".$data['tahun_motor']."</td>";
        echo "<td>".$data['tanggal_pinjam']."</td>";
        echo "<td>".$data['tanggal_kembali']."</td>";
        echo "<td>";
        echo "<a href='edit.php?id=".$data['id_peminjam']."'>Edit</a> |";
        echo "<a href='hapus.php?id=".$data['id_peminjam']."'>Hapus</a>";
        echo "</td>";

        echo "</tr>";
    }
    ?>
    <a href="tambah.php"><input type="button" value="Tambah">
</table>
</center>
</body>
</html>