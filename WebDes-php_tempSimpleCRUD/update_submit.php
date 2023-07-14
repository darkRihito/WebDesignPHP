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

   //display all varibel
   //print_r($_POST);

   //cek submit
   if (!$_SERVER["REQUEST_METHOD"] == "POST") {
      header("location: index.php");
      exit();
   } elseif (isset($_POST['cancel'])){
      header("location: index.php");
      exit();
   }

   //koneksi ke db
   $con = mysqli_connect("localhost","root","","contoh_db");

   //tampung semua var form
   $key = $_POST['key'];
   $nama = $_POST['nama'];
   $alamat = $_POST['alamat'];
   $telp = $_POST['telp'];
   $email = $_POST['email'];
   $catatan = $_POST['catatan'];

   //buat query
   $query_str = "update t_contact
                  set nama = '$nama',
                     alamat = '$alamat',
                     telp = '$telp',
                     email = '$email',
                     catatan = '$catatan'
                  where id_contact = '$key'";

   //eksekusi
   $query = mysqli_query($con, $query_str);

   echo "Sukses ... <br>" ;

   echo "<a href='index.php'> Kembali ke beranda </a>";

   ?>
</body>
</html>
