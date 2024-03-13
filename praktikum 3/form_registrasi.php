<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<?php
 $ar_prodi = [ "SI" => "Sistem Informasi","TI" => "Teknik Informatika","BD" => "Bisnis Digital"];
 $ar_skill = [ "HTML" => 10, "CSS" => 10,"Javascript" => 20, "RWD Bootstrap" => 20, "PHP" => 30, "Python" => 30, "Java" => 50];
 $ar_domiili = ["Jakarta","Bogor","Depok","Tanggerang","Bekasi"]
?>

 <form action="form_registrasi.php" method="post">
  <div class="form-group row">
    <label for="nim" class="col-4 col-form-label">NIM</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-adn"></i>
          </div>
        </div> 
        <input id="nim" name="nim" placeholder="Masukan Nim Anda" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="nama" name="nama" placeholder="Masukan Nama Lengkap Anda" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Jenis Kelamin</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jenis_kelamin" id="jenis_kelamin_0" type="radio" class="custom-control-input" value="Laki-laki"> 
        <label for="jenis_kelamin_0" class="custom-control-label">Laki-laki</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jenis_kelamin" id="jenis_kelamin_1" type="radio" class="custom-control-input" value="Perempuan"> 
        <label for="jenis_kelamin_1" class="custom-control-label">Perempuan</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="prodi" class="col-4 col-form-label">Program Studi</label> 
    <div class="col-8">
      <select id="prodi" name="prodi" class="custom-select">
        <?php
        foreach($ar_prodi as $k => $v) {
            echo "<option value=$k>$v</option>";
        }
        ?>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Skill Web & Programing</label> 
    <div class="col-8">
        <?php $i = 0; foreach ($ar_skill as $k => $v) { ++$i ?>
          <div class="custom-control custom-checkbox custom-control-inline">
            <input name="skill[]" id="skill<?= $i ?>" type="checkbox" class="custom-control-input" value=<?= $v ?>> 
            <label for="skill<?= $i ?>" class="custom-control-label"><?= $k ?></label>
          </div>
        <?php } ?>
        </div>
    </div> 
    
  <div class="form-group row">
    <label for="Domisili" class="col-4 col-form-label">Tempat Domisili</label> 
    <div class="col-8">
      <select id="Domisili" name="Domisili" class="custom-select">
        <option value="JKT">Jakarta</option>
        <option value="BGR">Bogor</option>
        <option value="DPK">Depok</option>
        <option value="TNGRNG">Tanggerang</option>
        <option value="BKSI">Bekasi</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="masukan email anda" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-envelope"></i>
          </div>
        </div> 
        <input id="masukan email anda" name="masukan email anda" type="text" class="form-control">
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
<hr>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nama = $_POST['nama'];
  $jenis_kelamin = $_POST['jenis kelamin'];
  $prodi = $_POST['prodi'];
  $skill = $_POST['skill'];
  $domisili = $_POST['domisili'];
  $email = $_POST['email'];

  echo "Nama : $nama </br>";
  echo "Jenis Kelamin : $Jenis_Kelamin </br>";
  echo "Program Studi : $Program_Studi <br>";
  echo 'Skill : ' . implode (",", $Skill </br>) . '<br>';
   echo "Domisili : $domisili <br>";
  echo "Email : $email <br>";
}

