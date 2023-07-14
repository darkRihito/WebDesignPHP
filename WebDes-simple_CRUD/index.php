<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form DB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- CSS -->
    <style>
        #myc {
            margin-top: 30px;
            margin-bottom: 30px;
        }
        #gc {
            max-width: 900px;
        }
    </style>
</head>
<body>
    
    <div class="container" id="gc">
        <div class="container border" id="myc">
            <h1 class="text-center mt-4 mb-5">FORM DATABASE</h1>
            <!-- Form -->
            <form class="m-4" action="insert.php" method="POST" name="myform">
                <!-- Nama -->
                <div class="row">
                    <div class="col">
                    <label class="form-label">Nama Depan</label>
                      <input required type="text" id="nama_depan" name="nama_depan" class="form-control" placeholder="Nama Depan">
                    </div>
                    <div class="col">
                    <label class="form-label">Nama Belakang</label>
                      <input required type="text"  id="nama_belakang" name="nama_belakang" class="form-control" placeholder="Nama Belakang">
                    </div>
                  </div>
                <!-- Jenis Kelamin -->
                <div class="mt-2">
                    <label class="form-label">Jenis Kelamin</label>
                </div>
                <div class="form-check form-check-inline" id="jeniskelamin">
                    <input class="form-check-input" type="radio" name="ojk" id="jk1" value="Laki-laki">
                    <label class="form-check-label" for="jk1">Laki-laki</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="ojk" id="jk2" value="Perempuan">
                    <label class="form-check-label" for="jk2">Perempuan</label>
                  </div>
                <!-- Tempat Lahir -->
                <div class="mt-2">
                    <label class="form-label">Tempat Lahir</label>
                    <input required type="text" id="tempatlahir" class="form-control"  name="tempat_lahir">
                </div>
                <!-- Tanggal Lahir -->
                <div class="mt-2">
                    <label required class="form-label">Tanggal Lahir</label>
                </div>
                <div class="form-group">
                    <input type="date" class="form-control" id="tanggallahir" aria-describedby="emailHelp" name="tanggal_lahir" >
                </div>
                <!-- Agama -->
                  <div class="mt-2">
                    <label class="form-label">Agama</label>
                    </div>
                  <select placeholder="Disabled input" class="form-select" id="agama" aria-label="Default select example"  name="agama">
                    <option value="" selected>Open this select menu</option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                    <option value="Kanghucu">Konghucu</option>
                  </select>
                  <!-- Tinggi Badan -->
                  <div class="row mt-2">
                      <div class="col">
                        <div class="">
                            <label class="form-label">Tinggi Badan</label>
                            <input required type="text" id="tinggibadan" class="form-control" name="tinggi_badan">
                        </div>
                      </div>
                      <div class="col">
                        <div class="">
                            <label class="form-label">Berat Badan</label>
                            <input required type="text" id="beratbadan" class="form-control" name="berat_badan">
                        </div>
                      </div>
                  </div>
                <!-- Golongan Darah -->
                <div class="mt-2">
                    <label class="form-label">Golongan Darah</label>
                </div>
                <div class="form-check form-check-inline" id="golongandarah">
                    <input class="form-check-input" type="radio" name="ogol" id="gol1" value="A">
                    <label class="form-check-label" for="gol1">A</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="ogol" id="gol2" value="B">
                    <label class="form-check-label" for="gol2">B</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="ogol" id="gol3" value="AB">
                    <label class="form-check-label" for="gol3">AB</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="ogol" id="gol4" value="O">
                    <label class="form-check-label" for="gol4">O</label>
                </div>
                <!-- Pekerjaan -->
                <div class="mt-2">
                    <label class="form-label">Pekerjaan</label>
                    <input required type="text" id="pekerjaan" class="form-control" name="pekerjaan">
                </div>
                <!-- Pendidikan -->
                <div class="mt-2">
                    <label class="form-label">Pendidikan</label>
                    </div>
                  <select required class="form-select" id="pendidikan" aria-label="Default select example" name="pendidikan">
                    <option value="" selected>Open this select menu</option>
                    <option value="SD">SD</option>
                    <option value="SMP">SMP</option>
                    <option value="SMA">SMA</option>
                    <option value="S1">S1</option>
                    <option value="S2">S2</option>
                    <option value="S3">S3</option>
                  </select>
                <!-- Status Menikah -->
                <div class="mt-2">
                    <label class="form-label">Status Menikah</label>
                    </div>
                  <select required class="form-select" id="statusmenikah" aria-label="Default select example" name="status_menikah">
                    <option value="" selected>Open this select menu</option>
                    <option value="Menikah">Menikah</option>
                    <option value="Belum Menikah">Belum Menikah</option>
                  </select>
                <!-- Alamat Rumah -->
                <div class="mt-2">
                    <label class="form-label">Alamat Rumah</label>
                    <input required type="text" id="alamatrumah" class="form-control" name="alamat_rumah">
                </div>
                <!-- Kota -->
                <div class="mt-2">
                    <label class="form-label">Kota</label>
                    <input required type="text" id="kota" class="form-control"  name="kota">
                </div>
                <!-- Provinsi -->
                <div class="mt-2">
                    <label class="form-label">Provinsi</label>
                    <input required type="text" id="provinsi" class="form-control" name="provinsi">
                </div>
                <!-- Hobi -->
                <div class="mt-2">
                    <label class="form-label">Hobi</label>
                </div>
                <div class="form-check form-check-inline" id="hobi">
                    <input class="form-check-input" type="checkbox" id="hob1" value="Olahraga" name="hobi[]">
                    <label class="form-check-label" for="hob1">Olahraga</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="hob2" value="Seni" name="hobi[]">
                    <label class="form-check-label" for="hob2">Seni</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="hob3" value="Bermain" name="hobi[]">
                    <label class="form-check-label" for="hob3">Bermain</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="hob4" value="Membaca" name="hobi[]">
                    <label class="form-check-label" for="hob4">Membaca</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="hob5" value="Menonton" name="hobi[]">
                    <label class="form-check-label" for="hob5">Menonton</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="hob6" value="Mendengarkan Musik" name="hobi[]">
                    <label class="form-check-label" for="hob6">Mendengarkan Musik</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="hob7" value="Other" name="hobi[]">
                    <label class="form-check-label" for="hob7">Other</label>
                  </div>
                  <!-- Email -->
                    <div class="mt-2">
                        <label class="form-label">Email</label>
                        <input required type="text" id="email" class="form-control"  name="email">
                    </div>
                    <!-- Nomor Telepon -->
                    <div class="mt-2">
                        <label class="form-label">Nomor telepon</label>
                        <input required type="text" id="nomortelepon" class="form-control" name="nomor_telepon">
                    </div>
                  <!-- Pesan -->
                  <div class="mt-2">
                    <label class="form-label">Catatan</label>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" id="catatan" rows="3" name="catatan"></textarea>
                      </div>
                  <!-- Submit -->
                  <button type="submit" class="btn btn-primary mt-5 me-2" id="button">Submit</button>
                  <!-- Cek DB -->
                  <a href="table.php">
                      <button type="button" class="btn btn-success mt-5" id="button">Lihat Database</button>
                  </a>
              </form>
        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>