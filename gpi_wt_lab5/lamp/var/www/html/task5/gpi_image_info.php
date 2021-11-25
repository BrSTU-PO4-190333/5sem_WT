<?php
    $gpi_title = "task5 gpi_image_info";
    include "../_html/head.html";

    if( isset($_POST['upload']) )
    {
        if ($_FILES['img_upload']['tmp_name'])
        {
            $gpi_tmpname = $_FILES['img_upload']['tmp_name'];
            $gpi_filesize = filesize($gpi_tmpname);
            $gpi_filesize_KiB = round($gpi_filesize / 1024, 2);
            $gpi_filesize_MiB = round($gpi_filesize_kb / 1024, 2);
            $gpi_filectime = date("F Y-m-d H:i:s", filectime($gpi_tmpname));
            $gpi_filemtime = date("F Y-m-d H:i:s", filemtime($gpi_tmpname));
            $gpi_isrewrite = ($gpi_filectime == $gpi_filemtime)
                ? "не перезаписан"
                : "перезаписан";
        
            $gpi_name = pathinfo($_FILES['img_upload']['name'])['filename'];
            $gpi_extension = pathinfo($_FILES['img_upload']['name'])['extension'];
            $gpi_src = "data:image/jpeg;base64, " . base64_encode(
                file_get_contents($gpi_tmpname)
            );
        
            if ($gpi_filesize_KiB > 100)
            {
                echo "<p class='btn-danger'>Загруженый файл превышает размер 100KiB!</p>";
            }
            else
            {
                echo "<p class='btn-success'>Загруженный файл не превышает размер 100KiB</p>";
            }
        }
        else
        {
            echo "<p class='btn-danger'>Файл не выбран!</p>";
        }
    }
?>

<style>
	.gpi_t_images__img
	{
		max-width: 128px;
		max-height: 128px;
		width: 128px;
	}
</style>

<div class="container">
    <?php printf("<h2><pre>%-32s %32s</pre></h2>", "=Галанин П. И.=", "=task5 gpi_image_info="); ?>
    <p><a href="/">На главную страницу</a></p>
    <p><a href="index.php">Загрузить картинку</a></p>

    <table class="table table-striped">
        <tbody>
            <tr>
                <td>Размер переданного файла (Байт)</td>
                <td><?= $gpi_filesize ?></td>
            </tr>
            <tr>
                <td>Размер переданного файла (КибиБайт)</td>
                <td><?= $gpi_filesize_KiB ?></td>
            </tr>
            <tr>
                <td>Размер переданного файла (МебиБайт)</td>
                <td><?= $gpi_filesize_MiB ?></td>
            </tr>
            <tr>
                <td>Файл перезаписан</td>
                <td><?= $gpi_isrewrite ?></td>
            </tr>
            <tr>
                <td>Директория до файла</td>
                <td><?= $gpi_tmpname ?></td>
            </tr>
            <tr>
                <td>Имя файла</td>
                <td><?= $gpi_name ?></td>
            </tr>
            <tr>
                <td>Расширение файла</td>
                <td><?= $gpi_extension ?></td>
            </tr>
            <tr>
                <td>Время создания</td>
                <td><?= $gpi_filectime ?></td>
            </tr>
            <tr>
                <td>Время модифицикации</td>
                <td><?= $gpi_filemtime ?></td>
            </tr>
            <tr>
                <td>Картинка</td>
                <td>
                    <img
                        src="<?= $gpi_src ?>" alt=""
                        class="gpi_t_images__img"
                    />
                </td>
            </tr>
            <tr>
                <td>_FILES</td>
                <td>
                    <pre><?= var_dump($_FILES) ?></pre>
                </td>
            </tr>
        </tbody>
    </table>
</div>
