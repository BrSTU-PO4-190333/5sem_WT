<?php
    include "../env.php";

    $gpi_connection = mysqli_connect($gpi_host, $gpi_user, $gpi_password, $gpi_database);
    if ($gpi_connection->connect_error)
    {
        die("Ошибка: не удается подключиться: " . $gpi_connection->connect_error);
    }
