<?php 

    //display all varibel
    //print_r($_POST);

    //cek submit
    if (!$_SERVER["REQUEST_METHOD"] == "POST") {
      header("location: index.html");
      exit();
    } else if (isset($_POST['cancel'])){
      header("location: index.html");
      exit();
    }

    //koneksi ke db
    $con = mysqli_connect("localhost","root","","grupkoding");

    //tampung semua var form
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

    // echo "$nama_depan"."<br>";
    // echo "$nama_belakang"."<br>";
    // echo "$jenis_kelamin"."<br>";
    // echo "$tempat_lahir"."<br>";
    // echo "$tanggal_lahir"."<br>";
    // echo "$agama"."<br>";
    // echo "$tinggi_badan"."<br>";
    // echo "$berat_badan"."<br>";
    // echo "$golongan_darah"."<br>";
    // echo "$pekerjaan"."<br>";
    // echo "$pendidikan"."<br>";
    // echo "$status_menikah"."<br>";
    // echo "$alamat_rumah"."<br>";
    // echo "$kota"."<br>";
    // echo "$provinsi"."<br>";
    // echo "$hobi"."<br>";
    // echo "$email"."<br>";
    // echo "$catatan"."<br>";

    //buat query
    $query_str = "insert into datamember (nama_depan,nama_belakang,jenis_kelamin,tempat_lahir,tanggal_lahir,agama,tinggi_badan,berat_badan,golongan_darah,pekerjaan,pendidikan,status_menikah,alamat_rumah,kota,provinsi,hobi,email,nomor_telepon,status,catatan) values ('$nama_depan', '$nama_belakang','$jenis_kelamin','$tempat_lahir','$tanggal_lahir','$agama', '$tinggi_badan','$berat_badan','$golongan_darah','$pekerjaan','$pendidikan', '$status_menikah','$alamat_rumah','$kota','$provinsi','$hobi', '$email','$nomor_telepon','-','$catatan')";

    //eksekusi
    $query = mysqli_query($con, $query_str);

    // echo "Sukses ... <br>" ;
    // echo "<a href='table.php'> cek </a>";
    header("location:table.php");

?>