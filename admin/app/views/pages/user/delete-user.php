
<?php
ob_start();
 require_once "./app/views/layouts/header.php";

?>
<?php

$uri =  $_SERVER["REQUEST_URI"];
$uriArray = explode('/', $uri);
$idc = explode('?', $uriArray[4]); 
$id = explode('=', $idc[1]);
 echo $id[1];
 $data = $UserM->deleteUser($id[1]);
 echo "<script>alert('Done ! Đã xoá thành công thành viên '); </script> ";
 header('location: ./index');



 ?>
    <?php
 require_once "./app/views/layouts/footer.php";
 ob_flush();
?>
