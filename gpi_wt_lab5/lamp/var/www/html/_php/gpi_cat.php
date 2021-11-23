<?php
    function gpi_cat($gpi_path)
    {
        $gpi_is_dir = file_exists($gpi_path); // существует ли такой путь?
        if ($gpi_is_dir == 0)
        {
            echo "gpi_cat: $gpi_path: No such file or directory \n";
            return;
        }

        $gpi_fd = fopen($gpi_path, 'r');
        while (!feof($gpi_fd))
        {
            $gpi_str = htmlentities(fgets($gpi_fd));
            echo "$gpi_str";
        }
        fclose($gpi_fd);
    }
