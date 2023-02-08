<?php
include("koneksi.php");

if(isset($_GET['id'])){
    header("Location:tampil.php");

}

$id = $_GET ['id'];
$sql =("SELECT * FROM tb_peminjam INNER JOIN tb_motor ON 
tb_peminjam.id='$id'");

$query=mysqli_query($koneksi, $sql);
$row = mysqli_fetch_assoc($query);

if(mysqli_num_row($query)<1){
    die ("data tidak ditemukan");
}
?>
<html>
<head>
</head>
<body>
    <h1>EDIT</h1>
    <form action="prosesedit.php" method="POST">
    <form>
    <fieldset>
    <input type="hidden" name="id" value="<?php echo $row['id']?>"/>
    <p>
                <label for="nama_peminjam"> Nama Peminjam : </label>
                <input type="text" name="nama_peminjam" />
            </p>
            <p>
                <label for="alamat"> Alamat : </label>
                <textarea name="alamat" row="5"></textarea>
            </p>
            <p>
                <label for="umur"> Umur : </label>
                <input type="number" name="umur" />
            </p>
            <p>
                <label for="keperluan"> Keperluan : </label>
                <input type="text" name="keperluan" />
            </p>
            <p>
                <label for="jaminan"> Jaminan : </label>
                <input type="text" name="jaminan" />
            </p>
            <p>
                <label for="nomor_rangka"> Nomor Rangka : </label>
                <input type="number" name="nomor_rangka" />
            </p>
            <p>
                <label for="merek"> Merek : </label>
                <input type="text" name="merek" />
            </p>
            <p>
                <label for="jenis_motor"> Jenis Motor : </label>
                <input type="text" name="jenis_motor" />
            </p>
            <p>
                <label for="tahun_motor"> Tahun Motor : </label>
                <input type="year" name="tahun_motor" />
            </p>
            <p>
               <label for="tanggal_pinjam"> Tanggal Pinjam : </label>
               <input type="date" name="tanggal_pinjam" /> 
            </p>
            <p>
                <label for="tanggal_kembali"> Tanggal Kembali : </label>
                <input type="date" name="tanggal_kembali" />
            </p>
            <p>
                <input type="submit" value="simpan" name="simpan" />
            </p>
</fieldset>
</form>
</body>
</html>