<?php
    include '../_sql/gpi_connect.php';
    
    $gpi_id = isset($_GET["ID"]) ? $_GET["ID"] : "-1";
    if ($gpi_id != "-1") {
        $gpi_sql = "DELETE FROM `wt_lab2_students` WHERE `ID`='$gpi_id';";
        $gpi_result = mysqli_query($connect, $gpi_sql);
    }
