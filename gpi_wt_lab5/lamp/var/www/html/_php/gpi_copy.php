<?php
    function gpi_copy($gpi_path1, $gpi_path2)
    {
        $gpi_is_dir = file_exists($gpi_path1); // существует ли такой путь?
        if ($gpi_is_dir == 0)
        {
            echo "<p style='color: red;'>Каталог\\файл \"$gpi_path1\" не существует! Что копировать то?</p>";
            return;
        }

        $gpi_copy = copy($gpi_path1, $gpi_path2);
        if ($gpi_copy)
        {
            echo "<p style='color: green;'>Каталог\\файл \"$gpi_path1\" скопирован в \"$gpi_path2\" успешно</p>";
        }
        else
        {
            echo "<p style='color: red;'>Каталог\\файл \"$gpi_path1\" не скопирован в \"$gpi_path2\"!</p>";
        }
    }
