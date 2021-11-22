<?php
    $gpi_title = "Task2";
    include "../_html/head.html";

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
?>

<div class="container">
    <?php printf("<h2><pre>%-32s %32s</pre></h2>", "=Галанин П. И.=", "=task1="); ?>
    <?php gpi_mkdir("/var/www/html/task2/someFolder"); ?>
</div>
