<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DB Table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        #table th {
            text-align: center;
        }
        #table td {
            padding-left: 8px;
        }
        .tsm {
            width: 40px;
        }
        .tmid {
            width: 130px;
        }
        .tlarge {
            width: 200px;
        }
    </style>
</head>
<body>

    <div class="container-fluid">
      <h1 class="text-center mt-4">Database</h1>
      <div class="d-flex justify-content-center">
        <form action="table.php" method="post" name="myform2" class="d-flex">
          <input id="filter" type="text" name='filter' placeholder="Cari Nama" class="form-control">
          <button class="btn btn-success ms-2" type="submit" name='submit'>Filter!</button>
        </form>
      </div>
        <div class="container mt-4 border" style="overflow-x: auto; overflow-y: auto; height: 480px;">
            <table class="table-responsive table table-bordered table-striped table-hover" style="width: max-content;" id="table">
                <thead>
                  <tr>
                    <th class="tsm" scope="col">ID</th>
                    <th scope="col">Option</th>
                    <!-- <th class="tmid" scope="col">Kode</th> -->
                    <th class="tlarge" scope="col">Nama Depan</th>
                    <th class="tlarge" scope="col">Nama Belakang</th>
                    <th class="tmid" scope="col">Jenis Kelamin</th>
                    <th class="tmid" scope="col">Tempat Lahir</th>
                    <th class="tmid" scope="col">Tangal Lahir</th>
                    <th class="tmid" scope="col">Agama</th>
                    <th class="tmid" scope="col">Berat Badan</th>
                    <th class="tmid" scope="col">Tinggi Badan</th>
                    <th class="tmid" scope="col">Gol Darah</th>
                    <th class="tlarge" scope="col">Pekerjaan</th>
                    <th class="tmid" scope="col">Pendidikan</th>
                    <th class="tlarge" scope="col">Status Menikah</th>
                    <th class="tlarge" scope="col">Alamat Rumah</th>
                    <th class="tmid" scope="col">Kota</th>
                    <th class="tmid" scope="col">Provinsi</th>
                    <th class="tmid" scope="col">Hobi</th>
                    <th class="tmid" scope="col">Email</th>
                    <th class="tmid" scope="col">Nomor Telp</th>
                    <th class="tmid" scope="col">Status</th>
                    <th class="tmid" scope="col">Catatan</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $con = mysqli_connect("localhost","root","","grupkoding");
                  if (isset($_POST['filter'])) {
                      $filter_key ="%".$_POST['filter']."%";
                    } else {
                      $filter_key="%%";
                    }
                    $sql = "select * from datamember where nama_depan like '$filter_key' or nama_belakang like '$filter_key'";
                    $query = mysqli_query($con, $sql);

                    $nomor =1;
                    
                    // $sql = "select * from datamember";
                    // $query = mysqli_query($con, $sql);
                    while ($data = mysqli_fetch_array($query)) {
                      $key = $data['id_member'];

                      echo '<tr>';
                      echo '<th scope="row">' . $nomor . '</th>';
                      echo '<td><a href="update.php?key='. $key. '"><button type="button" class="btn btn-success btn-sm me-2">Update</button></a><a href="delete.php?key='. $key. '"><button type="button" class="btn btn-danger btn-sm me-2">Delete</button></a></td>';
                      // echo '<td>'. $data["id_member"] .'</td>';
                      echo '<td>'. $data["nama_depan"] .'</td>';
                      echo '<td>'. $data["nama_belakang"] .'</td>';
                      echo '<td>'. $data["jenis_kelamin"] .'</td>';
                      echo '<td>'. $data["tempat_lahir"] .'</td>';
                      echo '<td>'. $data["tanggal_lahir"] .'</td>';
                      echo '<td>'. $data["agama"] .'</td>';
                      echo '<td>'. $data["berat_badan"] .'</td>';
                      echo '<td>'. $data["tinggi_badan"] .'</td>';
                      echo '<td>'. $data["golongan_darah"] .'</td>';
                      echo '<td>'. $data["pekerjaan"] .'</td>';
                      echo '<td>'. $data["pendidikan"] .'</td>';
                      echo '<td>'. $data["status_menikah"] .'</td>';
                      echo '<td>'. $data["alamat_rumah"] .'</td>';
                      echo '<td>'. $data["kota"] .'</td>';
                      echo '<td>'. $data["provinsi"] .'</td>';
                      echo '<td>'. $data["hobi"] .'</td>';
                      echo '<td>'. $data["email"] .'</td>';
                      echo '<td>'. $data["nomor_telepon"] .'</td>';
                      echo '<td>'. $data["status"] .'</td>';
                      echo '<td>'. $data["catatan"] .'</td>';
                      echo '</tr>';
              
                      // $key = $data['id_contact']; // = md5($data['id_contact'])
                      // echo "<a href='update.php?key=$key'>Update </a>&nbsp;";
                      // echo "<a href='delete.php?key=$key'>Delete </a><br>";
              
                      $nomor++;
                    } 
                  ?>
                </tbody>
              </table>
        </div>
        <div class="d-flex justify-content-center">
          <a href="index.php">
              <button type="button" class="btn btn-success mt-4" id="button">Kembali</button>
          </a>
        </div>
        
    </div>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>