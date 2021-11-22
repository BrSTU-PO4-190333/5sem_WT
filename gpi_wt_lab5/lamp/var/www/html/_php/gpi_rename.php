<?php
    function gpi_rename($gpi_path1, $gpi_path2)
    {
        $gpi_is_dir = file_exists($gpi_path1); // существует ли такой путь?
        if ($gpi_is_dir == 0)
        {
            echo "<p style='color: red;'>Каталог\\файл \"$gpi_path1\" не существует! Что переименовывать?</p>";
            return;
        }

        $gpi_rename = rename($gpi_path1, $gpi_path2);
        if ($gpi_rename)
        {
            echo "<p style='color: green;'>Каталог\\файл \"$gpi_path1\" на каталог\\файл \"$gpi_path2\" переименован успешно</p>";
        }
        else
        {
            echo "<p style='color: red;'>Каталог\\файл \"$gpi_path1\" на каталог\\файл \"$gpi_path2\" не переименован!</p>";
        }
    }
