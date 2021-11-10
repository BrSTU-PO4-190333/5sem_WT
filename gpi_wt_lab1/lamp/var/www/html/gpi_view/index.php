<?php
    $PAGE_TITLE = "gpi_view";
    include '../_html/gpi_head.php';
    include '../_sql/gpi_connect.php';
    include '../_sql/gpi_delete.php';
    
    $gpi_sql = "SELECT * FROM `$MYSQL_DATABASE`.`wt_lab1`;";
    $gpi_result = mysqli_query($connect, $gpi_sql);

    $gpi_array = array();
    $gpi_item = mysqli_fetch_assoc($gpi_result);
    $gpi_i = 0;
    while ($gpi_item != "") {
        $gpi_array[$gpi_i] = $gpi_item;
        $gpi_item = mysqli_fetch_assoc($gpi_result);
        $gpi_i += 1;
    }
?>
<p>Галанин П. И. =gpi_view=</p>
<table>
    <?php
        $gpi_array_length = count($gpi_array);

        if ($gpi_array_length == 0) {
            echo "<p>База данных пуста</p>";
        }
        else {
    ?>
    <tr>
        <td>ИД</td>
        <td>Имя</td>
        <td>Должность</td>
        <td>Пол</td>
        <td>Отдел</td>
        <td>E-mail</td>
        <td>Телефон</td>
        <td>Комментарий</td>
        <td>Удалить</td>
        <td>Изменить</td>
    </tr>
    <?php
            $gpi_i = 0;
            while($gpi_i < $gpi_array_length) {
    ?>
    <tr>
        <td><?php echo $gpi_array[$gpi_i]["ID"]; ?></td>
        <td><?php echo $gpi_array[$gpi_i]["Name"]; ?></td>
        <td><?php echo $gpi_array[$gpi_i]["Position"]; ?></td>
        <td><?php echo $gpi_array[$gpi_i]["Gender"]; ?></td>
        <td><?php echo $gpi_array[$gpi_i]["Department"]; ?></td>
        <td><?php echo $gpi_array[$gpi_i]["Email"]; ?></td>
        <td><?php echo $gpi_array[$gpi_i]["Phone"]; ?></td>
        <td><?php echo $gpi_array[$gpi_i]["Comment"]; ?></td>
        <td><a href="?ID=<?php echo $gpi_array[$gpi_i]["ID"]; ?>">delete</a></td>
        <td><a href="/gpi_edit/?ID=<?php echo $gpi_array[$gpi_i]["ID"]; ?>">edit</a></td>
    </tr>
    <?php
                $gpi_i += 1;
            } // end while
        } // end if
    ?>
</table>
