<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>gpi_savepersonal.cfm</title>
</head>

<body>
    <p><a href="/">Меню</a></p>
    <p>Галанин П. И. =gpi_savepersonal.cfm=</p>
    <table>
        <tr>
            <td>Имя:</td>
            <td><?php echo $_GET["Name"]; ?></td>
        </tr>
        <tr>
            <td>Должность:</td>
            <td><?php echo $_GET["Position"]; ?></td>
        </tr>
        <tr>
            <td>Отдел:</td>
            <td><?php echo $_GET["Department"]; ?></td>
        </tr>
        <tr>
            <td>Телефон:</td>
            <td><?php echo $_GET["Phone"]; ?></td>
        </tr>
        <tr>
            <td>Пол:</td>
            <td><?php echo $_GET["Gender"]; ?></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><?php echo $_GET["Email"]; ?></td>
        </tr>
        <tr>
            <td>Комментарий:</td>
            <td><?php echo $_GET["Comment"]; ?></td>
        </tr>
    </table>
</body>

</html>