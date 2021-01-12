<?php
    $conn = mysqli_connect("localhost","root","");
    $sele = mysqli_select_db($conn,"confstyle") or die(mysqli_error($conn));
    if (!$sele) {
        echo "<script>alert('not connected');</script>";
    }
?>