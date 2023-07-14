
    <?php 
        //cek key, jika kosong kembali ke index
        if (!isset($_GET['key'])) { //mengambil semua variabel yan ada di adress bar
            header("location:index.html");
            exit();
        }

        //ambil key
        $key = $_GET['key'];

        //koneksi ke db
        $con = mysqli_connect("localhost","root","","grupkoding");
        
        //membuat query
        $query = mysqli_query($con, "delete from datamember where id_member = '$key'");

        // echo "Record telah dihapus!<br>";
        // echo "$key";
        // echo "<a href='table.php'>Kembali ke beranda</a>";
        header("location:table.php");
        //awal loop
    ?>