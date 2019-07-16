<!DOCTYPE html>
<html lang="en">
    <head>

        <title>Add, Edit, Delete In PHP/MySQL Using PDO</title>

        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">
     
        <link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">
		
        <link href="modal/css1/bootstrap1.css" rel="stylesheet" type="text/css" media="screen">
     


</head>
<script src="modal/js1/jquery1.js" type="text/javascript"></script>
<script src="modal/js1/bootstrap1.js" type="text/javascript"></script>



<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/bootstrap.js" type="text/javascript"></script>

<script type="text/javascript" charset="utf-8" language="javascript" src="js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf-8" language="javascript" src="js/DT_bootstrap.js"></script>
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