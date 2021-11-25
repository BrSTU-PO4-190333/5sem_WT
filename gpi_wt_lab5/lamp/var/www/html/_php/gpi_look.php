<?php
    function gpi_look($gpi_path)
    {
        $gpi_is_dir = is_dir($gpi_path); // существует ли такой путь?
        if ($gpi_is_dir == 0)
        {
            echo "<p style='color: red;'>Нет такого пути path!!!</p> <p>path = $gpi_path</p>";
            return;
        }
    
        if (@opendir($gpi_path) === false)
        {
            echo("<tr>");
            echo("<td></td>");
            echo("<td>$gpi_path</td>");
            echo("<td></td>");
            echo("<td></td>");
            echo("<td></td>");
            echo("<td></td>");
            echo("<td></td>");
            echo("</tr>");
            return;
        }

        $dh = @opendir($gpi_path);
        while ($file = readdir($dh))
        {
            if($file == '.' || $file == '..')
            {
                continue;
            }
            
            $element        = $gpi_path.'/'.$file;
            $gpi_size       = sprintf("%d Байт", filesize($element));
            $gpi_size_kb    = sprintf("%.2f", filesize($element) / 1024);
            $gpi_size_mb    = sprintf("%.2f", filesize($element) / 1024 / 1024);
            $gpi_created    = date("Y.m.d_H:i:s", filectime($element));
            $gpi_changed    = date("Y.m.d_H:i:s", filemtime($element));

            echo("<tr>");
            if(is_dir($element))
            {
                gpi_look($element);
                echo("<td>Папка</td>");
            }
            else
            {
                echo("<td>Файл</td>");   
            }
            echo("<td>$element</td>");
            echo("<td>$gpi_size</td>");
            echo("<td>$gpi_size_kb</td>");
            echo("<td>$gpi_size_mb</td>");
            echo("<td>$gpi_created</td>");
            echo("<td>$gpi_changed</td>");
            echo("</tr>");
        }
        closedir($dh);
    }