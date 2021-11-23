<?php
    function gpi_read_file($gpi_path)
    {
        $gpi_is_dir = file_exists($gpi_path); // существует ли такой путь?
        if ($gpi_is_dir == 0)
        {
            echo "<p style='color: red;'>Файл \"$gpi_path\" не существует! Что читать?</p>";
            return;
        }

        $gpi_fd = fopen($gpi_path, 'r') or die("Не удалось открыть файл");
        while (!feof($gpi_fd))
        {
            $gpi_str = htmlentities(fgets($gpi_fd));
            echo "$gpi_str";
        }
        fclose($gpi_fd);
    }
