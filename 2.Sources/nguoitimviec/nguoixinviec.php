<?php
session_start();
if($_SESSION["level"]==1){
header("location:nguoitimviec/btlon1.php");
exit();
}
else{
    header("location:../btlon.php");
    exit();
}
?>