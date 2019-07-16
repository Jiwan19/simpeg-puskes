<?php
require 'database.php';

$id = null;
if ( !empty($_GET['id'])) {
    $id = $_REQUEST['id'];
}

if ( null==$id ) {
    header("Location: add-profil.php");
}

if ( !empty($_POST)) {
        // keep track validation errors
    $nipError = null;
    $namaError = null;
    $jeniskelaminError = null;
    $jabatanError = null;
    $statusperkawinanError = null;
    $agamaError = null;
    $tempatlahirError = null;
    $tanggallahirError = null;
    $statuspegawaiError = null;
    $alamatError = null;
    $teleponError = null;
    
        // keep track post values
    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
    $jeniskelamin = $_POST['jeniskelamin'];
    $jabatan = $_POST['jabatan'];
    $statusperkawinan = $_POST['statusperkawinan'];
    $agama = $_POST['agama'];
    $tempatlahir = $_POST['tempatlahir'];
    $tanggallahir = $_POST['tanggallahir'];
    $statuspegawai = $_POST['statuspegawai'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telepon'];
    
        // validate input
    $valid = true;
    if (empty($nip)) {
        $nipError = 'Please enter Name';
        $valid = false;
    }

    if (empty($nama)) {
        $namaError = 'Please enter Name';
        $valid = false;
    }

    if (empty($jeniskelamin)) {
        $jeniskelaminError = '';
        $valid = false;
    }

    if (empty($jabatan)) {
        $jabatanError = 'Please enter Name';
        $valid = false;
    }

    if (empty($statusperkawinan)) {
        $statusperkawinanError = 'Please enter Name';
        $valid = false;
    }

    if (empty($agama)) {
        $agamaError = 'Please enter Name';
        $valid = false;
    }

    if (empty($tempatlahir)) {
        $tempatlahirError = 'Please enter Mobile Number';
        $valid = false;
    }

    if (empty($tanggallahir)) {
        $tanggallahirError = 'Please enter Name';
        $valid = false;
    }

    if (empty($statuspegawai)) {
        $statuspegawaiError = 'Please enter Name';
        $valid = false;
    }

    if (empty($alamat)) {
        $alamatError = 'Please enter Name';
        $valid = false;
    }

    if (empty($telepon)) {
        $teleponError = 'Please enter Name';
        $valid = false;
    }
    
        // update data
    if ($valid) {
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "UPDATE tbpegawai  set nip = ?, nama = ?, jeniskelamin = ?, jabatan = ?, statusperkawinan = ?, agama = ?, tempatlahir = ?, tanggallahir = ?, statuspegawai = ?, alamat = ?, telepon = ? WHERE id = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($nip,$nama,$jeniskelamin,$jabatan,$statusperkawinan,$agama,$tempatlahir,$tanggallahir,$statuspegawai,$alamat,$telepon));
        Database::disconnect();
        header("location: add-profil.php");
    }
} else {
    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM tbpegawai where id = ?";
    $q = $pdo->prepare($sql);
    $q->execute(array($id));
    $data = $q->fetch(PDO::FETCH_ASSOC);
    $nip = $data['nip'];
    $nama = $data['nama'];
    $jeniskelamin = $data['jeniskelamin'];
    $jabatan = $data['jabatan'];
    $statusperkawinan = $data['statusperkawinan'];
    $agama = $data['agama'];
    $tempatlahir = $data['tempatlahir'];
    $tanggallahir = $data['tanggallahir'];
    $statuspegawai = $data['statuspegawai'];
    $alamat = $data['alamat'];
    $telepon = $data['telepon'];
    Database::disconnect();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

input[type=date], select, textarea {
  width: 50%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}


input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>
    <div class="container">

                <h3>Update Record</h3>
            </div>
            <form class="form-inline" action="update.php?id=<?php echo $id?>" method="post">

              <div class="control-group <?php echo !empty($nipError)?'error':'';?>">
                <label class="control-label">NIP</label>
                <div class="controls">
                    <input name="nip" type="text"  placeholder="NIP" value="<?php echo !empty($nip)?$nip:'';?>">
                    <?php if (!empty($nipError)): ?>
                        <span class="help-inline"><?php echo $nipError;?></span>
                    <?php endif; ?>
                </div>
            </div>
            <div class="control-group <?php echo !empty($namaError)?'error':'';?>">
                <label class="control-label">Nama</label>
                <div class="controls">
                    <input name="nama" type="text"  placeholder="Nama" value="<?php echo !empty($nama)?$nama:'';?>">
                    <?php if (!empty($namaError)): ?>
                        <span class="help-inline"><?php echo $namaError;?></span>
                    <?php endif; ?>
                </div>
            </div>
            <div class="control-group <?php echo !empty($jeniskelaminError)?'error':'';?>">
                <label class="control-label">Jenis Kelamin</label>
                <div class="controls">
                    <input name="jeniskelamin" type="radio"  placeholder="Jenis Kelamin" value="Laki-laki"<?php if ($jeniskelamin == 'Laki-laki') echo 'checked="checked"';?>>Laki-laki
                    <input name="jeniskelamin" type="radio"  placeholder="Jenis Kelamin" value="Perempuan"<?php if ($jeniskelamin == 'Perempuan') echo 'checked="checked"';?>>Perempuan
                    <?php if (!empty($jeniskelaminError)): ?>
                        <span class="help-inline"><?php echo $jeniskelaminError;?></span>
                    <?php endif; ?>
                </div>
            </div>
            <div class="control-group <?php echo !empty($jabatanError)?'error':'';?>">
                <label class="control-label">Jabatan</label>
                <div class="controls">
                    <input name="jabatan" type="text"  placeholder="Jabatan" value="<?php echo !empty($Jabatan)?$jabatan:'';?>">
                    <?php if (!empty($jabatanError)): ?>
                        <span class="help-inline"><?php echo $jabatanError;?></span>
                    <?php endif; ?>
                </div>
            </div>
            <div class="control-group <?php echo !empty($statusperkawinanError)?'error':'';?>">
                <label class="control-label">Status Perkawinan</label>
                <div class="controls">
                    <select name="statusperkawinan" type="text"  placeholder="Status Perkawinan">
                        <option value="Belum Kawin">Belum Kawin</option>
                        <option value="Kawin">Kawin</option>
                    </select>
                    <?php if (!empty($statusperkawinanError)): ?>
                        <span class="help-inline"><?php echo $statusperkawinanError;?></span>
                    <?php endif; ?>
                </div>
            </div>
            <div class="control-group <?php echo !empty($agamaError)?'error':'';?>">
                <label class="control-label">Agama</label>
                <div class="controls">
                    <select name="agama" type="text"  placeholder="Agama">
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Budha">Budha</option>
                        <option value="Kong Hu Chu">Kong Hu Chu</option>
                    </select>
                    <?php if (!empty($agamaError)): ?>
                        <span class="help-inline"><?php echo $agamaError;?></span>
                    <?php endif; ?>
                </div>
            </div>
            <div class="control-group <?php echo !empty($tempatlahirError)?'error':'';?>">
                <label class="control-label">Tempat Lahir</label>
                <div class="controls">
                    <input name="tempatlahir" type="text"  placeholder="Tempat Lahir" value="<?php echo !empty($tempatlahir)?$tempatlahir:'';?>">
                    <?php if (!empty($tempatlahirError)): ?>
                        <span class="help-inline"><?php echo $tempatlahirError;?></span>
                    <?php endif; ?>
                </div>
            </div>
            <div class="control-group <?php echo !empty($tanggallahirError)?'error':'';?>">
                <label class="control-label">Tanggal Lahir</label>
                <div class="controls">
                    <input name="tanggallahir" type="date"  placeholder="Tanggal Lahir" value="<?php echo !empty($tanggallahir)?$tanggallahir:'';?>">
                    <?php if (!empty($tanggallahirError)): ?>
                        <span class="help-inline"><?php echo $tanggallahirError;?></span>
                    <?php endif; ?>
                </div>
            </div>
            <div class="control-group <?php echo !empty($statuspegawaiError)?'error':'';?>">
                <label class="control-label">Status Pegawai</label>
                <div class="controls">
                    <select name="statuspegawai" type="text"  placeholder="Status Pegawai">
                        <option value="Kontrak">Kontrak</option>
                        <option value="Tetap">Tetap</option>
                    </select>
                    <?php if (!empty($statuspegawaiError)): ?>
                        <span class="help-inline"><?php echo $statuspegawaiError;?></span>
                    <?php endif; ?>
                </div>
            </div>
            <div class="control-group <?php echo !empty($alamatError)?'error':'';?>">
                <label class="control-label">Alamat</label>
                <div class="controls">
                    <input name="alamat" type="text"  placeholder="Alamat" value="<?php echo !empty($alamat)?$alamat:'';?>">
                    <?php if (!empty($alamatError)): ?>
                        <span class="help-inline"><?php echo $alamatError;?></span>
                    <?php endif; ?>
                </div>
            </div>
            <div class="control-group <?php echo !empty($teleponError)?'error':'';?>">
                <label class="control-label">Telepon</label>
                <div class="controls">
                    <input name="telepon" type="text"  placeholder="Telepon" value="<?php echo !empty($telepon)?$telepon:'';?>">
                    <?php if (!empty($teleponError)): ?>
                        <span class="help-inline"><?php echo $teleponError;?></span>
                    <?php endif; ?>
                </div>
            </div>
            <div class="form-actions">
              <button type="submit" class="btn btn-success">Update</button>
              <a class="btn" href="add-profil.php">Back</a>
            </div>
      </form>
  </div>
  
</div> <!-- /container -->
</body>
</html>
