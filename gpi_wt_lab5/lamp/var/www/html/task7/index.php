<?php
    $gpi_title = "Task7";
    include "../_html/head.html";
    include "../_php/gpi_copy.php";
?>

<div class="container">
    <?php printf("<h2><pre>%-32s %32s</pre></h2>", "=Галанин П. И.=", "=task7="); ?>
    <p><a href="/">На главную страницу</a></p>
    <?php
        gpi_copy("someFile.txt", "someFile2.txt");
        gpi_copy("nonFoundFile.txt", "nonFoundFile2.txt");
    ?>
</div>
