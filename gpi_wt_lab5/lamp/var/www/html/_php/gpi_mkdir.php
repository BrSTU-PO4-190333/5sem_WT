<?php
    function gpi_mkdir($gpi_path)
    {
        $gpi_is_dir = is_dir($gpi_path); // существует ли такой путь?
        if ($gpi_is_dir == 1)
        {
            echo "<p style='color: red;'>Каталог \"$gpi_path\" существует! Пересоздать нельзя!</p>";
            return;
        }

        $gpi_mkdir = mkdir($gpi_path);
        if ($gpi_mkdir)
        {
            echo "<p style='color: green;'>Каталог \"$gpi_path\" создан успешно</p>";
        }
        else
        {
            echo "<p style='color: red;'>Каталог \"$gpi_path\" не создан!</p>";
        }
    }
