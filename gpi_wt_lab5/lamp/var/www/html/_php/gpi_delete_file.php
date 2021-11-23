<?php
    function gpi_delete_file($gpi_path)
    {
        $gpi_is_dir = file_exists($gpi_path); // существует ли такой путь?
        if ($gpi_is_dir == 0)
        {
            echo "<p style='color: red;'>Файл \"$gpi_path\" не существует! Что удалять то?</p>";
            return;
        }

        $gpi_unlink = unlink($gpi_path);
        if ($gpi_unlink)
        {
            echo "<p style='color: green;'>Файл \"$gpi_path\" удалён успешно</p>";
        }
        else
        {
            echo "<p style='color: red;'>Файл \"$gpi_path\" не удалён!</p>";
        }
    }
