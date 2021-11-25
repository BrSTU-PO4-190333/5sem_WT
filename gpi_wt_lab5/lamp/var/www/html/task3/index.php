<?php
    $gpi_title = "Task3";
    include "../_html/head.html";
    include "../_php/gpi_rename.php";
?>

<div class="container">
    <?php printf("<h2><pre>%-32s %32s</pre></h2>", "=Галанин П. И.=", "=task3="); ?>
    <p><a href="/">На главную страницу</a></p>
    <?php
        gpi_rename("someFolder", "someFolder2");
        //gpi_rename("someFolder2", "someFolder");
    ?>
</div>
