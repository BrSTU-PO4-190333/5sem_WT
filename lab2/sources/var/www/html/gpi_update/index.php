<?php
    $PAGE_TITLE = "gpi_update";
    include '../_html/gpi_head.php';
    include '../_sql/gpi_connect.php';

    $gpi_id      = $_POST["ID"];
    $gpi_student = $_POST["Student"];
    $gpi_faculty = $_POST["Faculty"];
    $gpi_course  = $_POST["Course"] ;
    $gpi_group   = $_POST["Group"]  ;

    if ($gpi_id != "-1") {
        $gpi_sql = "UPDATE `wt_lab2_students` SET `Student`='$gpi_student', `Faculty`='$gpi_faculty', `Course`='$gpi_course', `Group`='$gpi_group' WHERE `ID`='$gpi_id';";
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
        <td>Студент</td>
        <td><?php echo $gpi_student; ?></td>
    </tr>
    <tr>
        <td>Факультет</td>
        <td><?php echo $gpi_faculty; ?></td>
    </tr>
    <tr>
        <td>Курс</td>
        <td><?php echo $gpi_course; ?></td>
    </tr>
    <tr>
        <td>Группа</td>
        <td><?php echo $gpi_group; ?></td>
    </tr>
</table>
