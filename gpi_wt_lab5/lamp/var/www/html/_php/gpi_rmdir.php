<?php
    function gpi_rmdir($gpi_dir)
    {
        $gpi_is_dir = file_exists($gpi_dir); // существует ли такой путь?
        if ($gpi_is_dir == 0)
        {
            echo "gpi_rmdir: failed to remove '$gpi_dir': No such file or directory \n";
            return;
        }

        $gpi_files = array_diff(scandir($gpi_dir), array('.','..'));
        foreach ($gpi_files as $gpi_file) {
            if (is_dir("$gpi_dir/$gpi_file"))
            {
                gpi_rmdir("$gpi_dir/$gpi_file");
            }
            else
            {
                unlink("$gpi_dir/$gpi_file");
                echo "removed '$gpi_dir/$gpi_file' \n";
            }
        }
        rmdir($gpi_dir);
        echo "removed directory '$gpi_dir' \n";
    }
