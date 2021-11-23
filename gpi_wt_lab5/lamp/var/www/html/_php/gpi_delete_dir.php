<?php
    function gpi_delete_dir($dir)
    {
        $gpi_is_dir = file_exists($dir); // существует ли такой путь?
        if ($gpi_is_dir == 0)
        {
            echo "<p style='color: red;'>Файл \"$dir\" не существует! Что удалять?</p>";
            return;
        }

        $files = array_diff(scandir($dir), array('.','..'));
        foreach ($files as $file) {
            if (is_dir("$dir/$file"))
            {
                gpi_delete_dir("$dir/$file");
            }
            else
            {
                unlink("$dir/$file");
                echo "removed '$dir/$file'\n";
            }
        }
        rmdir($dir);
        echo "removed directory '$dir'\n";
    }
