<?php
session_start();
error_reporting(0);
include('include/config.php');
if(strlen($_SESSION['alogin'])==0)
{ 
  header('location:index.php');
}
else{ 

  if(isset($_POST['submit']))
  {
    $vehicletitle=$_POST['vehicletitle'];
    $brand=$_POST['brandname'];
    $vehicleoverview=$_POST['vehicalorcview'];
    $priceperday=$_POST['priceperday'];
    $fueltype=$_POST['fueltype'];
    $modelyear=$_POST['modelyear'];
    $seatingcapacity=$_POST['seatingcapacity'];
    $airconditioner=$_POST['airconditioner'];
    $powerdoorlocks=$_POST['powerdoorlocks'];
    $antilockbrakingsys=$_POST['antilockbrakingsys'];
    $brakeassist=$_POST['brakeassist'];
    $powersteering=$_POST['powersteering'];
    $driverairbag=$_POST['driverairbag'];
    $passengerairbag=$_POST['passengerairbag'];
    $powerwindow=$_POST['powerwindow'];
    $cdplayer=$_POST['cdplayer'];
    $centrallocking=$_POST['centrallocking'];
    $crashcensor=$_POST['crashcensor'];
    $leatherseats=$_POST['leatherseats'];
    $id=intval($_GET['id']);

    $sql="update tblvehicles set VehiclesTitle=:vehicletitle,VehiclesBrand=:brand,VehiclesOverview=:vehicleoverview,PricePerDay=:priceperday,FuelType=:fueltype,ModelYear=:modelyear,SeatingCapacity=:seatingcapacity,AirConditioner=:airconditioner,PowerDoorLocks=:powerdoorlocks,AntiLockBrakingSystem=:antilockbrakingsys,BrakeAssist=:brakeassist,PowerSteering=:powersteering,DriverAirbag=:driverairbag,PassengerAirbag=:passengerairbag,PowerWindows=:powerwindow,CDPlayer=:cdplayer,CentralLocking=:centrallocking,CrashSensor=:crashcensor,LeatherSeats=:leatherseats where id=:id ";
    $query = $dbh->prepare($sql);
    $query->bindParam(':vehicletitle',$vehicletitle,PDO::PARAM_STR);
    $query->bindParam(':brand',$brand,PDO::PARAM_STR);
    $query->bindParam(':vehicleoverview',$vehicleoverview,PDO::PARAM_STR);
    $query->bindParam(':priceperday',$priceperday,PDO::PARAM_STR);
    $query->bindParam(':fueltype',$fueltype,PDO::PARAM_STR);
    $query->bindParam(':modelyear',$modelyear,PDO::PARAM_STR);
    $query->bindParam(':seatingcapacity',$seatingcapacity,PDO::PARAM_STR);
    $query->bindParam(':airconditioner',$airconditioner,PDO::PARAM_STR);
    $query->bindParam(':powerdoorlocks',$powerdoorlocks,PDO::PARAM_STR);
    $query->bindParam(':antilockbrakingsys',$antilockbrakingsys,PDO::PARAM_STR);
    $query->bindParam(':brakeassist',$brakeassist,PDO::PARAM_STR);
    $query->bindParam(':powersteering',$powersteering,PDO::PARAM_STR);
    $query->bindParam(':driverairbag',$driverairbag,PDO::PARAM_STR);
    $query->bindParam(':passengerairbag',$passengerairbag,PDO::PARAM_STR);
    $query->bindParam(':powerwindow',$powerwindow,PDO::PARAM_STR);
    $query->bindParam(':cdplayer',$cdplayer,PDO::PARAM_STR);
    $query->bindParam(':centrallocking',$centrallocking,PDO::PARAM_STR);
    $query->bindParam(':crashcensor',$crashcensor,PDO::PARAM_STR);
    $query->bindParam(':leatherseats',$leatherseats,PDO::PARAM_STR);
    $query->bindParam(':id',$id,PDO::PARAM_STR);
    $query->execute();

    $_SESSION['msg']="Dokumen Telah Berhasil Di Updtae";


  }


  ?>
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
    <title>Car Rental | Edit Vehicle</title>
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
    <script type="text/javascript">
    function VoucherSourcetoPrint(source) {
    return "<html><head><script>function step1(){\n" +
        "setTimeout('step2()', 10);}\n" +
        "function step2(){window.print();window.close()}\n" +
        "</scri" + "pt></head><body onload='step1()'>\n" +
        "<img src='" + source + "' /></body></html>";
    }
    function VoucherPrint(source) {
    Pagelink = "about:blank";
    var pwa = window.open(Pagelink, "_new");
    pwa.document.open();
    pwa.document.write(VoucherSourcetoPrint(source));
    pwa.document.close();
    }
</script>
<style type="text/css">
  .myButton
  {
    background-color: #77b55a;
    border: 1px solid #4b8f29;
    display: inline-block;
    cursor: pointer;
    color: #f0ebf0;
    font-family: arial;
    font-size: 13px;
    font-weight: bold;
    margin: 5px;
    padding: 7px 35px;
    text-decoration: none;
  }
</style>

  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
    <?php include('include/header.php');?>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <?php include('include/sidebar.php');?>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-pencil"></i> Edit Vehicles</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <?php if(isset($_POST['submit']))

              {?>

                <div class="alert alert-success">
                  <button type="button" id="demoNotify" class="close" data-dismiss="alert">×</button>
                  <strong>Well done!</strong> <?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?>
                </div>
              <?php } ?>
              

              <?php 
              $id=intval($_GET['id']);
              $sql ="SELECT tblvehicles.*,tblbrands.BrandName,tblbrands.id as bid from tblvehicles join tblbrands on tblbrands.id=tblvehicles.VehiclesBrand where tblvehicles.id=:id";
              $query = $dbh -> prepare($sql);
              $query-> bindParam(':id', $id, PDO::PARAM_STR);
              $query->execute();
              $results=$query->fetchAll(PDO::FETCH_OBJ);
              $cnt=1;
              if($query->rowCount() > 0)
              {
                foreach($results as $result)
                  { ?>
                    <form method="post" enctype="multipart/form-data">
                      <h3 class="tile-title">Edit Dokumen</h3>
                      <br/>
                      <div class="row">
                        <div class="col-6"><label for="avatar">NIP</label>
                          <input type="text" class="form-control" name="vehicletitle" value="<?php echo htmlentities($result->VehiclesTitle)?>" required="">
                        </div>
                        <div class="col-6"><label for="avatar">Nama</label>
                          <select name="brandname" class="form-control" required="">
                            <option value="<?php echo htmlentities($result->bid);?>"><?php echo htmlentities($bdname=$result->BrandName); ?> </option>
                            <?php $ret="select id,BrandName from tblbrands";
                            $query= $dbh -> prepare($ret);
//$query->bindParam(':id',$id, PDO::PARAM_STR);
                            $query-> execute();
                            $resultss = $query -> fetchAll(PDO::FETCH_OBJ);
                            if($query -> rowCount() > 0)
                            {
                              foreach($resultss as $results)
                              {
                                if($results->BrandName==$bdname)
                                {
                                  continue;
                                } else{
                                  ?>
                                  <option value="<?php echo htmlentities($results->id);?>"><?php echo htmlentities($results->BrandName);?></option>
                                <?php }}} ?>

                              </select>
                            </div>
                          </div>
                          <br/>
                          <!--<div class="row">
                            <div class="col-6">
                              <input type="text" class="form-control" name="priceperday" value="<?php echo htmlentities($result->PricePerDay);?>" required="">
                            </div>
                            <div class="col-6">
                              <select class="form-control" name="fueltype" required>
                                <option value="<?php echo htmlentities($results->FuelType);?>"> <?php echo htmlentities($result->FuelType);?></option>

                                <option value="Petrol">Petrol</option>
                                <option value="Diesel">Diesel</option>
                                <option value="CNG">CNG</option>
                              </select>
                            </div>
                          </div>
                          <br/>
                          <div class="row">
                            <div class="col-6">
                              <input type="text" class="form-control" name="modelyear" value="<?php echo htmlentities($result->ModelYear);?>" required="">
                            </div>
                            <div class="col-6">
                              <input type="text" class="form-control" name="seatingcapacity" value="<?php echo htmlentities($result->SeatingCapacity);?>" required="">
                            </div>
                          </div>
                          <br/>
                          <div class="row">
                            <div class="col-12">
                              <textarea class="form-control" name="vehicalorcview" rows="5" placeholder="overview" required=""><?php echo htmlentities($result->VehiclesOverview);?></textarea>
                            </div>
                          </div>-->
                          <br/>
                          <h3 class="tile-title">Uploads Image</h3>

                          <div class="row">
                            <div class="col-4">
                              FC IJAZAH <img src="img/vehicleimages/<?php echo htmlentities($result->Vimage1);?>" width="300" height="200" style="border:solid 1px #000">
                              <a href="changeimage1.php?imgid=<?php echo htmlentities($result->id)?>">Change Image 1</a>
                            <div class="col-4">
                              FC SK Kenaikan Pangkat<img src="img/vehicleimages/<?php echo htmlentities($result->Vimage2);?>" width="300" height="200" style="border:solid 1px #000">
                              <a href="changeimage2.php?imgid=<?php echo htmlentities($result->id)?>">Change Image 2</a>
                            </div>
                            <div class="col-4">
                              Image 3<img src="img/vehicleimages/<?php echo htmlentities($result->Vimage3);?>" width="300" height="200" style="border:solid 1px #000">
                              <a href="changeimage3.php?imgid=<?php echo htmlentities($result->id)?>">Change Image 3</a>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-4">
                              Image 4<img src="img/vehicleimages/<?php echo htmlentities($result->Vimage4);?>" width="300" height="200" style="border:solid 1px #000">
                              <a href="changeimage4.php?imgid=<?php echo htmlentities($result->id)?>">Change Image 4</a>
                            </div>
                            <div class="col-4">
                              Image 5<img src="img/vehicleimages/<?php echo htmlentities($result->Vimage5);?>" width="300" height="200" style="border:solid 1px #000">
                              <a href="changeimage5.php?imgid=<?php echo htmlentities($result->id)?>">Change Image 5</a>
                            </div>
                            <div class="col-4">
                              Image 6<img src="img/vehicleimages/<?php echo htmlentities($result->Vimage6);?>" width="300" height="200" style="border:solid 1px #000">
                              <a href="changeimage6.php?imgid=<?php echo htmlentities($result->id)?>">Change Image 6</a>
                            </div>
                          </div>
                            <div class="row">
                            <div class="col-4">
                              Image 7<img src="img/vehicleimages/<?php echo htmlentities($result->Vimage7);?>" width="300" height="200" style="border:solid 1px #000">
                              <a href="changeimage7.php?imgid=<?php echo htmlentities($result->id)?>">Change Image 7</a>
                            </div>
                            <div class="col-4">
                              Image 8<img src="img/vehicleimages/<?php echo htmlentities($result->Vimage8);?>" width="300" height="200" style="border:solid 1px #000">
                              <a href="changeimage8.php?imgid=<?php echo htmlentities($result->id)?>">Change Image 8</a>
                            </div>
                            <div class="col-4">
                              Image 9<img src="img/vehicleimages/<?php echo htmlentities($result->Vimage9);?>" width="300" height="200" style="border:solid 1px #000">
                              <a href="changeimage9.php?imgid=<?php echo htmlentities($result->id)?>">Change Image 9</a>
                            </div>
                          </div>
                            <div class="row">
                            <div class="col-4">
                              Image 10<img src="img/vehicleimages/<?php echo htmlentities($result->Vimage10);?>" width="300" height="200" style="border:solid 1px #000">
                              <a href="changeimage10.php?imgid=<?php echo htmlentities($result->id)?>">Change Image 10</a>
                            </div>
                            <div class="col-4">
                              Image 11<img src="img/vehicleimages/<?php echo htmlentities($result->Vimage11);?>" width="300" height="200" style="border:solid 1px #000">
                              <a href="changeimage11.php?imgid=<?php echo htmlentities($result->id)?>">Change Image 11</a>
                            </div>
                            <div class="col-4">
                              Image 12<img src="img/vehicleimages/<?php echo htmlentities($result->Vimage12);?>" width="300" height="200" style="border:solid 1px #000">
                              <a href="changeimage12.php?imgid=<?php echo htmlentities($result->id)?>">Change Image 12</a>
                            </div>
                          </div>
                            <div class="row">
                            <div class="col-4">
                              Image 13<img src="img/vehicleimages/<?php echo htmlentities($result->Vimage13);?>" width="300" height="200" style="border:solid 1px #000">
                              <a href="changeimage13.php?imgid=<?php echo htmlentities($result->id)?>">Change Image 13</a>
                            </div>
                            <div class="col-4">
                              Image 14<img src="img/vehicleimages/<?php echo htmlentities($result->Vimage14);?>" width="300" height="200" style="border:solid 1px #000">
                              <a href="changeimage14.php?imgid=<?php echo htmlentities($result->id)?>">Change Image 14</a>
                            </div>
                            <div class="col-4">
                              Image 15<img src="img/vehicleimages/<?php echo htmlentities($result->Vimage15);?>" width="300" height="200" style="border:solid 1px #000">
                              <a href="changeimage15.php?imgid=<?php echo htmlentities($result->id)?>">Change Image 15</a>
                            </div>
                          </div>
                            <div class="row">
                            <div class="col-4">
                              Image 16<img src="img/vehicleimages/<?php echo htmlentities($result->Vimage16);?>" width="300" height="200" style="border:solid 1px #000">
                              <a href="changeimage16.php?imgid=<?php echo htmlentities($result->id)?>">Change Image 16</a>
                            </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="col-4">
                              Image 17
                              <?php if($result->Vimage17=="")
                              {
                                echo htmlentities("File not available");
                              } else {?>
                                <img src="img/vehicleimages/<?php echo htmlentities($result->Vimage17);?>" width="300" height="200" style="border:solid 1px #000">
                                <a href="changeimage17.php?imgid=<?php echo htmlentities($result->id)?>">Change Image 17</a>
                              <?php } ?>
                            </div>
                          </div>
                          <br/>
                        <pre>
                        <?php }} ?>
                        <div class="form-group">
                          <button class="btn btn-primary" type="submit" name="submit"><i class="fa fa-fw fa-lg fa-check-circle" ></i> Update</button>&nbsp;&nbsp;&nbsp;
                        </div>
                        </pre>
                      </form>
                    </div>

                  </div>
                </div>

              </div>

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


          </body>
          </html>
          <?php } ?>