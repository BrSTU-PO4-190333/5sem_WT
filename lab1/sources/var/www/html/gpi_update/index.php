<?php
    $PAGE_TITLE = "gpi_update";
    include '../_html/gpi_head.php';
    include '../_sql/gpi_connect.php';

    $gpi_id         = $_POST["ID"];
    $gpi_name       = $_POST["Name"];
    $gpi_position   = $_POST["Position"];
    $gpi_department = $_POST["Department"];
    $gpi_phone      = $_POST["Phone"];
    $gpi_gender     = $_POST["Gender"];
    $gpi_email      = $_POST["Email"];
    $gpi_comment    = $_POST["Comment"];

    if ($gpi_id != "-1") {
        $gpi_sql = "UPDATE `wt_lab1`
        SET 
        `Name`='$gpi_name', 
        `Position`='$gpi_position',
        `Department`='$gpi_department', 
        `Phone`='$gpi_phone',
        `Gender`='$gpi_gender',
        `Email`='$gpi_email',
        `Comment`=\"$gpi_comment\"
        WHERE `ID`='$gpi_id';";
        var_dump($gpi_sql);
        $gpi_result = mysqli_query($connect, $gpi_sql);
        var_dump($gpi_result);

        if($gpi_result == true) {
            echo "<script>alert('Элемент обновлен');</script>";
        }
        else {
            echo "<script>alert('Элемент не обновлен');</script>";
        }
    }
?>
<p>Галанин П. И. =gpi_update=</p>
<table>
    <tr>
        <td>ИД</td>
        <td><?php echo $gpi_id; ?></td>
    </tr>
    <tr>
        <td>Имя</td>
        <td><?php echo $gpi_name; ?></td>
    </tr>
    <tr>
        <td>Должность</td>
        <td><?php echo $gpi_position; ?></td>
    </tr>
    <tr>
        <td>Отдел</td>
        <td><?php echo $gpi_department; ?></td>
    </tr>
    <tr>
        <td>Телефон</td>
        <td><?php echo $gpi_phone; ?></td>
    </tr>
    <tr>
        <td>Пол</td>
        <td><?php echo $gpi_gender; ?></td>
    </tr>
    <tr>
        <td>E-mail</td>
        <td><?php echo $gpi_email; ?></td>
    </tr>
    <tr>
        <td>Комментарий</td>
        <td><?php echo $gpi_comment; ?></td>
    </tr>
</table>
