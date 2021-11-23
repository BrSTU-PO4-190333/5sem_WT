<?php
    $gpi_title = "Task2";
    include "../_html/head.html";
    include "../_php/gpi_mkdir.php";
?>

<div class="container">
    <?php printf("<h2><pre>%-32s %32s</pre></h2>", "=Галанин П. И.=", "=task2="); ?>
    <p><a href="/">На главную страницу</a></p>
    <pre><?php gpi_mkdir("someFolder") ?></pre>
</div>
