<!-- 
Задание 2
Создать шаблон personal.cfm,
передающий через переменные полей формы данные в другой шаблон savepersonal.cfm,
в котором они должны быть сохранены в БД, считаны из БД и выведены на экран.
-->
<?php
    $PAGE_TITLE = "gpi_personal.cfm";
    include '../_html/gpi_head.php';
?>
<p>Галанин П. И. =gpi_personal.cfm=</p>
<form action="/gpi_savepersonal.cfm">
    <table>
        <tr>
            <td>
                Имя:
            </td>
            <td>
                <input type="text" name="Name" value="Kelly Smith" />
            </td>
        </tr>
        <tr>
            <td>
                Должность:
            </td>
            <td>
                <input type="text" name="Position" value="Vice President" />
            </td>
        </tr>
        <tr>
            <td>
                Пол:
            </td>
            <td>
                <input type="radio" name="Gender" value="w" checked /> Woman
                <input type="radio" name="Gender" value="m" /> Man
            </td>
        </tr>
        <tr>
            <td>
                Отдел:
            </td>
            <td>
                <select name="Department">
                    <option value="mm">M&M</option>
                    <option value="-">-</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                E-mail:
            </td>
            <td>
                <input type="email" name="Email" value="Kelly@example.com" />
            </td>
        </tr>
        <tr>
            <td>
                Телефон:
            </td>
            <td>
                <input type="tel" name="Phone" value="8(0297)11-23-45" />
            </td>
        </tr>
        <tr>
            <td>
                Комментарий:
            </td>
            <td>
                <textarea name="Comment" id="" cols="30" rows="10">
I get up at 7 o'clock.
I wash my hands, my face and clean my teetch.
I air my room and make the bed.
Then I have my breakfast.</textarea>
            </td>
        </tr>
    </table>
    <input type="submit" value="submit" />
    <input type="reset" value="reset" />
</form>
