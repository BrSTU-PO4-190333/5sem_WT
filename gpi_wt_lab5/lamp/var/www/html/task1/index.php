<?php
    $gpi_title = "Task1";
    include "../_html/head.html";
    include "../_php/gpi_look.php";
?>

<div class="container">
    <?php printf("<h2><pre>%-32s %32s</pre></h2>", "=Галанин П. И.=", "=task1="); ?>
    <p><a href="/">На главную страницу</a></p>
    <table class="table table-striped">
        <thead>
            <tr>
                <td>Тип</td>
                <td>Путь</td>
                <td>Байт</td>
                <td>Киби байт</td>
                <td>Меби Байт</td>
                <td>Создан</td>
                <td>Изменён</td>
            </tr>
        </thead>
        <tbody>
            <?php gpi_look("/var/www"); ?>
        </tbody>
    </table>
</div>
