<?php
    $gpi_title = "Task3";
    include "../_html/head.html";

    function gpi_rename($gpi_path1, $gpi_path2)
    {
        $gpi_is_dir = is_dir($gpi_path1); // существует ли такой путь?
        if ($gpi_is_dir == 0)
        {
            echo "<p style='color: red;'>Каталог \"$gpi_path1\" не существует! Что переименовывать?</p>";
            return;
        }

        $gpi_rename = rename($gpi_path1, $gpi_path2);
        if ($gpi_rename)
        {
            echo "<p style='color: green;'>Каталог \"$gpi_path1\" на каталог \"$gpi_path2\" переименован успешно</p>";
        }
        else
        {
            echo "<p style='color: red;'>Каталог \"$gpi_path1\" на каталог \"$gpi_path2\" не переименован!</p>";
        }
    }
?>

<div class="container">
    <?php printf("<h2><pre>%-32s %32s</pre></h2>", "=Галанин П. И.=", "=task3="); ?>
    <p><a href="/">На главную страницу</a></p>
    <?php
        gpi_rename("someFolder", "someFolder2");
        //gpi_rename("someFolder2", "someFolder");
    ?>
</div>
