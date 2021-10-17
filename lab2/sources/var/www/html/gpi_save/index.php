<?php
    $PAGE_TITLE = "gpi_save";
    include '../_html/gpi_head.php';
    include '../_sql/gpi_connect.php';
    
    $gpi_student = isset($_GET["Student"] ) ? $_GET["Student"] : "S";
    $gpi_faculty = isset($_GET["Faculty"] ) ? $_GET["Faculty"] : "F";
    $gpi_course  = isset($_GET["Course"]  ) ? $_GET["Course"]  : "0";
    $gpi_group   = isset($_GET["Group"]   ) ? $_GET["Group"]   : "-";

    $gpi_sql = "INSERT INTO `wt_lab2_students` (`Student`, `Faculty`, `Course`, `Group`) VALUES ('$gpi_student', '$gpi_faculty', '$gpi_course', '$gpi_group');";
    $gpi_result = mysqli_query($connect, $gpi_sql);

    if ($gpi_result == true) {
        echo "<script>alert('Добавлен элемент в базу данных');</script>";
    }
    else {
        echo "<script>alert('Элемент в базу данных не добавлен');</script>";
        echo "<p>sql = $gpi_sql</p>";
    }
?>

<p>Галанин П. И. =gpi_save=</p>

<table>
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
