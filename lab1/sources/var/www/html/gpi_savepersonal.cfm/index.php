<?php
    $PAGE_TITLE = "gpi_savepersonal.cfm";
    include '../_html/gpi_head.php';
    include '../_sql/gpi_connect.php';

    $gpi_name       = isset($_GET["Name"])      ? $_GET["Name"]         : "";
    $gpi_position   = isset($_GET["Position"])  ? $_GET["Position"]     : "";
    $gpi_department = isset($_GET["Department"])? $_GET["Department"]   : "";
    $gpi_phone      = isset($_GET["Phone"])     ? $_GET["Phone"]        : "";
    $gpi_gender     = isset($_GET["Gender"])    ? $_GET["Gender"]       : "";
    $gpi_email      = isset($_GET["Email"])     ? $_GET["Email"]        : "";
    $gpi_comment    = isset($_GET["Comment"])   ? $_GET["Comment"]      : "";

    $gpi_sql = "INSERT INTO `wt_lab1` 
    (`Name`, `Position`, `Department`, `Phone`, `Gender`, `Email`, `Comment`) 
    VALUES
    ('$gpi_name', '$gpi_position', '$gpi_department', '$gpi_phone', '$gpi_gender', '$gpi_email', \"$gpi_comment\");";
    $gpi_result = mysqli_query($connect, $gpi_sql);

    if ($gpi_result == true) {
        echo "<script>alert('Добавлен элемент в базу данных');</script>";
    }
    else {
        echo "<script>alert('Элемент в базу данных не добавлен');</script>";
        echo "<p>sql = $gpi_sql</p>";
    }
?>
<p>Галанин П. И. =gpi_savepersonal.cfm=</p>
<table>
    <tr>
        <td>Имя:</td>
        <td><?php echo $gpi_name; ?></td>
    </tr>
    <tr>
        <td>Должность:</td>
        <td><?php echo $gpi_position; ?></td>
    </tr>
    <tr>
        <td>Отдел:</td>
        <td><?php echo $gpi_department; ?></td>
    </tr>
    <tr>
        <td>Телефон:</td>
        <td><?php echo $gpi_phone; ?></td>
    </tr>
    <tr>
        <td>Пол:</td>
        <td><?php echo $gpi_gender; ?></td>
    </tr>
    <tr>
        <td>Email:</td>
        <td><?php echo $gpi_email; ?></td>
    </tr>
    <tr>
        <td>Комментарий:</td>
        <td><?php echo $gpi_comment; ?></td>
    </tr>
</table>
