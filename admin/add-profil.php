<!DOCTYPE html>
  <html lang="en">
  <head>
    <link rel="shortcut icon" href="images/profile.png">
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title>SIM PEG | Create Data Dokumen</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link type="text/css" href='datatabel/jquery.dataTables.min.css' rel='stylesheet'>
    <link type="text/css" href='datatabel/responsive.dataTables.min.css' rel='stylesheet'>
    <link type="text/css" href='datatabel/buttons.dataTables.min.css' rel='stylesheet'>
</head>

<script>
	$(document).ready(function() {
		var table = $('#example').DataTable();
		var tt = new $.fn.dataTable.TableTools( table );
		
		$( tt.fnContainer() ).insertBefore('div.dataTables_wrapper');
	} );
	
</script>

<body>
	<body class="app sidebar-mini rtl">
    <!-- Navbar-->
    <?php include('include/header.php');?>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <?php include('include/sidebar.php');?>
    <main class="app-content">
      <div class="app-title">
        <div>
        	<div>
          <h1><i class="fa fa-pencil"></i> Create Profil Pegawai</h1>
        </div>
        <br>
	<p>
		<a href ="create.php" button class="btn btn-success">Create</button></a>
		<a href ="dashbord.php" button class="btn btn-danger">Back</button></a>
		
	</p>
	<br>
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<td>ID</td>
				<td>NIP</td>
				<td>Nama</td>
				<td>Jabatan</td>
				<td>Status Perkawinan</td>
				<td>Agama</td>
				<td>Tempat Lahir</td>
				<td>Tanggal Lahir</td>
				<td>Status Pegawai</td>
				<td>Alamat</td>
				<td>Telepon</td>
				<td>Aksi</td>
			</tr>
		</thead>
		<tbody>
			<?php
			include 'database.php';
			$pdo = Database::connect();
			$sql = 'SELECT * FROM tbpegawai ORDER BY id DESC';
			foreach($pdo->query($sql) as $row){
				echo '<tr>';
				echo '<td>'. $row['nip'] . '</td>';
				echo '<td>'. $row['nama'] . '</td>';
				echo '<td>'. $row['jeniskelamin'] . '</td>';
				echo '<td>'. $row['jabatan'] . '</td>';
				echo '<td>'. $row['statusperkawinan'] . '</td>';
				echo '<td>'. $row['agama'] . '</td>';
				echo '<td>'. $row['tempatlahir'] . '</td>';
				echo '<td>'. $row['tanggallahir'] . '</td>';
				echo '<td>'. $row['statuspegawai'] . '</td>';
				echo '<td>'. $row['alamat'] . '</td>';
				echo '<td>'. $row['telepon'] . '</td>';
				echo '<td width=250>';
				echo '<a class="btn" href="read.php?id='.$row['id'].'">Info</a>';
				echo '  ';
				echo '<a class="btn btn-success" href="update.php?id='.$row['id'].'">Update</a>';
				echo '  ';
				echo '<a class="btn btn-danger" href="delete.php?id='.$row['id'].'">Delete</a>';
				echo '</td>';
			}
			Database::disconnect();
			?>

		</main>
      <!-- Essential javascripts for application to work-->
      <script src="js/jquery-3.2.1.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/main.js"></script>
      <!-- The javascript plugin to display page loading on top-->
      <script src="js/plugins/pace.min.js"></script>
      <!-- Page specific javascripts-->
      <!-- Google analytics script-->
      <script src="datatabel/jquery.dataTables.min.js"></script>
      <script src="datatabel/dataTables.responsive.min.js"></script>
      <script src="datatabel/dataTables.buttons.min.js"></script>
      <script src="datatabel/buttons.colVis.min.js"></script>

      <script>
       $(document).ready(function() {
        $('#example').DataTable( {
          dom: 'Bfrtip',
          buttons: [
          'colvis'
          ]
        } );
      } );
    </script>

		</tbody>
	</table>
</div>
</body>
</html>