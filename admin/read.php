<?php
require 'database.php';
$id = null;
if ( !empty($_GET['id'])) {
    $id = $_REQUEST['id'];
}

if ( null==$id ) {
    header("Location: add-profil.php");
} else {
    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM tbpegawai where id = ?";
    $q = $pdo->prepare($sql);
    $q->execute(array($id));
    $data = $q->fetch(PDO::FETCH_ASSOC);
    Database::disconnect();
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<body>
    <div class="container">
                <h3>Read Record</h3>
            </div>
        
            <div class="table-responsive" >
            <table class="table">
                <thead>
              <div class="control-group">
            <th>
                <label class="control-label">NIP</label>
            </th>
            <div class="control-group">
            <th>
                <label class="control-label">Nama</label>
            </th>
                <div class="controls">
            <div class="control-group">
            <th>
                <label class="control-label">Jenis Kelamin</label>
            </th>
            <div class="control-group">
            <th>
                <label class="control-label">Jabatan</label>
            </th>
            <div class="control-group">
            <th>
                <label class="control-label">Status Perkawinan</label>
            </th>
            <div class="control-group">
            <th>
                <label class="control-label">Agama</label>
            </th>
            <div class="control-group">
            <th>
                <label class="control-label">Tempat Lahir</label>
            </th>
            <div class="control-group">
            <th>
                <label class="control-label">Tanggal Lahir</label>
            </th>
            <div class="control-group">
            <th>
                <label class="control-label">Status Pegawai</label>
            </th>
            <div class="control-group">
            <th>
                <label class="control-label">Alamat</label>
            </th>
            <div class="control-group">
            <th>
                <label class="control-label">Telepon</label>
            </th>
                </thead>
                <tbody>
            <td>
                <label class="checkbox">
                    <?php echo $data['nip'];?>
                </label>
            </td>
                </div>
            </div>
                <div class="controls">
            <td>
                <label class="checkbox">
                    <?php echo $data['nama'];?>
                </label>
            </td>
                </div>
            </div>
                <div class="controls">
            <td>
                <label class="checkbox">
                    <?php echo $data['jeniskelamin'];?>
                </label>
            </td>
                </div>
            </div>
                <div class="controls">
            <td>
                <label class="checkbox">
                    <?php echo $data['jabatan'];?>
                </label>
            </td>
                </div>
            </div>
                <div class="controls">
            <td>
                <label class="checkbox">
                    <?php echo $data['statusperkawinan'];?>
                </label>
            </td>
                </div>
            </div>
                <div class="controls">
            <td>
                <label class="checkbox">
                    <?php echo $data['agama'];?>
                </label>
            </td>
                </div>
            </div>
                <div class="controls">
            <td>
                <label class="checkbox">
                    <?php echo $data['tempatlahir'];?>
                </label>
            </td>
                </div>
            </div>
                <div class="controls">
            <td>
                <label class="checkbox">
                    <?php echo $data['tanggallahir'];?>
                </label>
            </td>
                </div>
            </div>
                <div class="controls">
            <td>
                <label class="checkbox">
                    <?php echo $data['statuspegawai'];?>
                </label>
            </td>
                </div>
            </div>
                <div class="controls">
            <td>
                <label class="checkbox">
                    <?php echo $data['alamat'];?>
                </label>
            </td>
                </div>
            </div>
                <div class="controls">
            <td>
                <label class="checkbox">
                    <?php echo $data['telepon'];?>
                </label>
            </td>
                </div>
            </div>
                </tbody>
            <div class="form-actions">
                <button type="submit" class="btn btn-success">Print</button>
                <a class="btn" href="add-profil.php">Back</a>
          </div>
          </table>
      </div>
  </div>
  
</div> <!-- /container -->
</body>
</html>