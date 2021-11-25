<?php
    function gpi_mkdir($gpi_path)
    {
        $gpi_is_dir = is_dir($gpi_path); // существует ли такой путь?
        if ($gpi_is_dir == 1)
        {
            echo "gpi_mkdir: cannot create directory '$gpi_path': File exists \n";
            return;
        }

        mkdir($gpi_path);
        echo "gpi_mkdir: created directory '$gpi_path' \n";
    }
