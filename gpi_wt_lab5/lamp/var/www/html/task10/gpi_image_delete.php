<?php
    include "gpi_connect.php";

    if( isset($_GET['gpi_id']) )
    {
        $gpi_id = $_GET['gpi_id'];
        $gpi_connection->query("DELETE from `gpi_images` WHERE `gpi_id` = '$gpi_id';");
        header('Location: index.php');
    }

    echo "Не выбрана картинка";
