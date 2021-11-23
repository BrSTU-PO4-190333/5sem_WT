<?php
    function gpi_rm($gpi_path)
    {
        $gpi_is_dir = file_exists($gpi_path); // существует ли такой путь?
        if ($gpi_is_dir == 0)
        {
            echo "rm: cannot remove '$gpi_path': No such file or directory\n";
            return;
        }

        unlink($gpi_path);
        echo "removed '$gpi_path'\n";
    }
