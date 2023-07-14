
   <?php 

   //display all varibel
   //print_r($_POST);

   //cek submit
   if (!$_SERVER["REQUEST_METHOD"] == "POST") {
      header("location: update.php");
      exit();
   }

   //koneksi ke db
   $con = mysqli_connect("localhost","root","","grupkoding");

   //tampung semua var form
   $key = $_GET['key'];
   $nama_depan = $_POST['nama_depan'];
    $nama_belakang = $_POST['nama_belakang'];
    $jenis_kelamin = $_POST['ojk'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = date('Y-m-d', strtotime($_POST['tanggal_lahir']));
    $agama = $_POST['agama'];
    $tinggi_badan = filter_input(INPUT_POST, 'tinggi_badan', FILTER_VALIDATE_INT);
    $berat_badan = filter_input(INPUT_POST, 'berat_badan', FILTER_VALIDATE_INT);
    $golongan_darah = $_POST['ogol'];
    $pekerjaan = $_POST['pekerjaan'];
    $pendidikan = $_POST['pendidikan'];
    $status_menikah = $_POST['status_menikah'];
    $alamat_rumah = $_POST['alamat_rumah'];
    $kota = $_POST['kota'];
    $provinsi = $_POST['provinsi'];

    $temphobi=$_POST['hobi'];
    $hobi=[];
    if(!empty($temphobi)) {
      foreach($temphobi as $value){
        array_push($hobi, $value);
      }
      $hobi = implode (", ", $hobi);
    }
    
    $email = $_POST['email'];
    $nomor_telepon = $_POST['nomor_telepon'];
    $catatan = $_POST['catatan'];

   //buat query
   $query_str = "update datamember set nama_depan = '$nama_depan',nama_belakang = '$nama_belakang',jenis_kelamin = '$jenis_kelamin',tanggal_lahir = '$tanggal_lahir',agama = '$agama',tinggi_badan = '$tinggi_badan',berat_badan = '$berat_badan',golongan_darah = '$golongan_darah',pekerjaan = '$pekerjaan',pendidikan = '$pendidikan',status_menikah = '$status_menikah',alamat_rumah = '$alamat_rumah',kota = '$kota',provinsi = '$provinsi',hobi = '$hobi',email = '$email',nomor_telepon = '$nomor_telepon',catatan = '$catatan' where id_member = '$key'";

   //eksekusi
   $query = mysqli_query($con, $query_str);

   // echo "Sukses ... <br>" ;

   // echo "<a href='table.php'> Kembali ke beranda </a>";
   header("location:table.php");

   ?>
