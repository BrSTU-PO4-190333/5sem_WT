<?php
    $gpi_title = "Task8";
    include "../_html/head.html";
    include "../_php/gpi_rm.php";
?>

<div class="container">
    <?php printf("<h2><pre>%-32s %32s</pre></h2>", "=Галанин П. И.=", "=task8="); ?>
    <p><a href="/">На главную страницу</a></p>
    <?php
        gpi_rm("someFile.txt");
    ?>
</div>
