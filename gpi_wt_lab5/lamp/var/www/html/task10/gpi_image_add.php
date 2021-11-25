<?php
    $gpi_title = "task10 gpi_image_add";
    include "../_html/head.html";
    include "gpi_connect.php";

    if(!isset($_POST['upload']))
    {
        exit();
    }

    if (!$_FILES['img_upload']['tmp_name'])
    {
        echo "<p class='btn-danger'>Файл не прикреплён!</p>";
        exit();
    }

    $gpi_type = substr($_FILES['img_upload']['type'], 0, 5);
    if ($gpi_type != "image")
    {
        echo "<p class='btn-danger'>Прикрепленный файл не картинка!</p>";
        exit();
    }

    $gpi_max_size = 100 * 1024;
    if ($_FILES['img_upload']['size'] > $gpi_max_size)
    {
        echo "<p class='btn-danger'>Загруженный файл превышает размер 100KiB</p>";
        exit();
    }


    $gpi_image_src = addslashes(file_get_contents($_FILES['img_upload']['tmp_name']));
    $gpi_image_name = $_FILES['img_upload']['name'];
    $gpi_image_size = $_FILES['img_upload']['size'];	
    $gpi_connection->query("INSERT INTO `gpi_images`
        (`gpi_image_src`, `gpi_image_name`, `gpi_image_size`)
        VALUES ('$gpi_image_src', '$gpi_image_name', '$gpi_image_size');");

    $gpi_tmpname = $_FILES['img_upload']['tmp_name'];
    $gpi_src = "data:image/jpeg;base64, " . base64_encode(
        file_get_contents($gpi_tmpname)
    );
?>

<p class='btn-success'>Картинка загружена в БД</p>

<div class="container">
    <?php printf("<h2><pre>%-32s %32s</pre></h2>", "=Галанин П. И.=", "=task10 gpi_image_add="); ?>
    <p><a href="/">На главную страницу</a></p>
    <p><a href="index.php">Просмотр таблицы картинок</a></p>

    <table class="table table-striped">
        <tbody>
            <tr>
                <td>gpi_image_src</td>
                <td>
                    <?= $gpi_image_src ?>
                </td>
            </tr>
            <tr>
                <td>gpi_image_name</td>
                <td><?= $gpi_image_size ?></td>
            </tr>
            <tr>
                <td>gpi_image_size</td>
                <td><?= $gpi_image_size ?></td>
            </tr>
            <tr>
                <td>< img /></td>
                <td>
                    <img src="<?= $gpi_src ?>" alt="" />
                </td>
            </tr>
        </tbody>
    </table>
</div>
