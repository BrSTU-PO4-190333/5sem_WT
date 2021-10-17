<?php
    $MYSQL_SERVER = "db";
    $MYSQL_USERNAME = "SomeUser";
    $MYSQL_PASSWORD = "SomePassword";
    $MYSQL_DATABASE = "database";

    $connect = new mysqli($MYSQL_SERVER, $MYSQL_USERNAME, $MYSQL_PASSWORD, $MYSQL_DATABASE);
    if ($connect->connect_errno)
    {
        printf(
            "Не удалось подключиться: %s\n",
            $connect->connect_error
        );
        exit();
    }
