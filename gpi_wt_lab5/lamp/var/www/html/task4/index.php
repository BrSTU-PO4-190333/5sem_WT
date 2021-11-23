<?php
    $gpi_title = "Task4";
    include "../_html/head.html";
    include "../_php/gpi_delete_dir.php";
?>

<div class="container">
    <?php printf("<h2><pre>%-32s %32s</pre></h2>", "=Галанин П. И.=", "=task4="); ?>
    <p><a href="/">На главную страницу</a></p>
    <pre><?php gpi_delete_dir("someDir") ?></pre>
</div>
