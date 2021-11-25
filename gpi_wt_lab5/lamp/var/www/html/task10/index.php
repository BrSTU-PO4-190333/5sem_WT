<?php
	$gpi_title = "task10";
    include "../_html/head.html";
	include "gpi_connect.php";
?>

<style>
	.gpi_t_images__img
	{
		max-width: 64px;
		max-height: 64px;
		width: 64px;
	}
</style>

<div class="container">
	<?php printf("<h2><pre>%-32s %32s</pre></h2>", "=Галанин П. И.=", "=task10="); ?>
    <p><a href="/">На главную страницу</a></p>
	<p><a href="form.php">Добавить картинку</a></p>

	<h2>Таблица картинок</h2>
	<table class="table">
		<thead>
			<tr>
				<td>ИД</td>
				<td>Сама картинка</td>
				<td>Имя картинки</td>
				<td>Байт</td>
				<td>КибиБайт</td>
				<td>МебиБайт</td>
				<td>Удалить</td>
			</tr>
		</thead>
		<tbody>
			<?php
				$gpi_query = $gpi_connection->query("SELECT * FROM gpi_images;");
				while($gpi_row = $gpi_query->fetch_assoc()):
					$gpi_id = $gpi_row['gpi_id'];
					$gpi_image_src = "data:image/jpeg;base64, " . base64_encode($gpi_row['gpi_image_src']);
					$gpi_image_name = $gpi_row['gpi_image_name'];
					$gpi_image_size = $gpi_row['gpi_image_size'];
					$gpi_image_size_kb = round($gpi_row['gpi_image_size'] / 1024, 2);
					$gpi_image_size_mb = round($gpi_row['gpi_image_size'] / 1024 / 1024, 2);
			?>
			<tr>
				<td><?= $gpi_id ?></td>
				<td>
					<img
						src="<?= $gpi_image_src ?>" alt="" 
						class="gpi_t_images__img"
					/>
				</td>
				<td><?= $gpi_image_name ?></td>
				<td><?= $gpi_image_size ?></td>
				<td><?= $gpi_image_size_kb ?></td>
				<td><?= $gpi_image_size_mb ?></td>
				<td><a href="gpi_image_delete.php?gpi_id=<?= $gpi_id ?>">удалить</a></td>
			</tr>
			<?php
				endwhile;
			?>
		</tbody>
	</table>
</div>
