<?php
    function gpi_rename($gpi_path1, $gpi_path2)
    {
        $gpi_is_dir = file_exists($gpi_path1); // существует ли такой путь?
        if ($gpi_is_dir == 0)
        {
            echo "gpi_rename: cannot rename '$gpi_path1': No such file or directory \n";
            return;
        }

        $gpi_rename = rename($gpi_path1, $gpi_path2);
        echo "gpi_rename: $gpi_path1 => $gpi_path2 \n";
    }
