<?php
    $gpi_title = "Task6";
    include "../_html/head.html";
    include "../_php/gpi_rename.php";
?>

<div class="container">
    <?php printf("<h2><pre>%-32s %32s</pre></h2>", "=Галанин П. И.=", "=task6="); ?>
    <p><a href="/">На главную страницу</a></p>
    <?php
        gpi_rename("someFile.txt", "someFile2.txt");
        //gpi_rename("someFile2.txt", "someFile.txt");
    ?>
</div>
