<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/mycss.css">    
    <title>Contact</title>
</head>
<body>
    <?php
        //cek key, jika kosong kembali ke index
        if (!isset($_GET['key'])) {
            header("location:index.php");
            exit();
        }

        //ambil key
        $key = $_GET['key'];

        //koneksi ke db
        $con = mysqli_connect("localhost","root","","contoh_db");
        
        //membuat query
        $query = mysqli_query($con, "select * from t_contact 
                 where id_contact = '$key' limit 1");

        //ambil field
        $data = mysqli_fetch_array($query);
        $nama = $data['nama'];
        $alamat = $data['alamat'];
        $telp = $data['telp'];
        $email = $data['email'];
        $catatan = $data['catatan'];

    ?>

    <form action="update_submit.php" method="post">
        <h1>Update Record</h1>
        <input type="hidden" name="key" value="<?= $key; ?>?">
        <p>Nama <input type="text" name="nama" value="<?= $nama; ?>"></p>
        <p>Alamat <input type="text" name="alamat" value="<?= $alamat; ?>"></p>
        <p>Telp <input type="text" name="telp" value="<?= $telp; ?>"></p>
        <p>Email <input type="email" name="email" value="<?= $email; ?>"></p>
        <p>Catatan
            <textarea name="catatan" rows="4" cols="50"><?= $catatan?></textarea>
         </p>
        <p><input type="submit" name="save" value="Save">
        <input type="submit" name="cancel" value="Cancel"></p>
    </form>
</body>
</html>