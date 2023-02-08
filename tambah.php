<html>
    <head>
</head>
<body>
    <h1> Tambah </h1>
    <form action="prosestambah.php" method="POST">
        <fieldset>
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
                <label for="jenis_motor"> Jenis Motor </label>
                <input type="text" name="jenis_motor" />
            </p>
            <p>
                <label for="tahun_motor"> Tahun Motor </label>
                <input type="year" name="tahun_motor" />
            </p>
            <p>
                <label for="tanggal_pinjam"> Tanggal Pinjam </label>
                <input type="date" name="tanggal_pinjam" />
            </p>
            <p>
                <label for="tanggal_kembali"> Tanggal Kembali </label>
                <input type="date" name="tanggal_kembali"/>
            </p>
            <p>
                <input type="submit" value="KIRIM" name="tambah"/>
            </p>
</fieldset>
</form>
<center>

</body>
</html>