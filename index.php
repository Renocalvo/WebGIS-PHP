<?php
include '_loader.php';
if(isset($_GET['halaman'])){
    $halaman=$_GET['$halaman'];
}
else{
    $halaman='beranda';
}
ob_start();
$file='_halaman/'.$halaman.'.php';
if(!file_exists($file)){
    include '_halaman/error.php';
}
else{
    include $file;
}
$halaman = ob_get_contents();
ob_end_clean();
?>


<!DOCTYPE html>
<html lang="en">
<?php include '_layouts/head.php'?>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
<?php
    include '_layouts/header.php';
    include '_layouts/sidebar.php';
    echo $halaman;
    include '_layouts/footer.php';
    include '_layouts/js.php';
?>
</div>
<!-- ./wrapper -->
</body>
</html>