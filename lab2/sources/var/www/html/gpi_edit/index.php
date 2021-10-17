<?php
    $PAGE_TITLE = "gpi_edit";
    include '../_html/gpi_head.php';
    include '../_sql/gpi_connect.php';
    
    $gpi_array = array();
    $gpi_id = isset($_GET["ID"]) ? $_GET["ID"] : "-1";
    if ($gpi_id != "-1") {
        $gpi_sql = "SELECT * FROM `wt_lab2_students` WHERE `ID`='$gpi_id';";
        $gpi_result = mysqli_query($connect, $gpi_sql);
        
        $gpi_item = mysqli_fetch_assoc($gpi_result);
        $gpi_i = 0;
        while ($gpi_item != "") {
            $gpi_array[$gpi_i] = $gpi_item;
            $gpi_item = mysqli_fetch_assoc($gpi_result);
            $gpi_i += 1;
        }
    }

    function gpi_echoStudent($gpi_array) {
        echo $gpi_array[0]["Student"];
    }

    function gpi_echoSelectedFaculty($gpi_array, $gpi_str) {
        if ($gpi_array[0]['Faculty'] == $gpi_str) {
            echo "selected";
        }
    }

    function gpi_echoSelectedCourse($gpi_array, $gpi_str) {
        if ($gpi_array[0]['Course'] == $gpi_str) {
            echo "selected";
        }
    }

    function gpi_echoGroup($gpi_array) {
        echo $gpi_array[0]["Group"];
    }
?>

<p>Галанин П. И. =gpi_edit=</p>
<form action="/gpi_update/" method="POST">
    <table>
        <tr>
            <td>ИД:</td>
            <td>
                <input
                    type="text" name="ID"
                    value="<?php echo $gpi_id; ?>"
                    readonly
                />
            </td>
        </tr>
        <tr>
            <td>Студент:</td>
            <td>
                <input
                    type="text" name="Student"
                    value="<?php gpi_echoStudent($gpi_array); ?>"
                />
            </td>
        </tr>
        <tr>
            <td>Факультет:</td>
            <td>
                <select name="Faculty">
                    <option
                        value="sf"
                        <?php gpi_echoSelectedFaculty($gpi_array, "sf"); ?>
                    >
                        Строительный факультет
                    </option>
                    <option
                        value="feis"
                        <?php gpi_echoSelectedFaculty($gpi_array, "feis"); ?>
                    >
                        Факультет электронно информационных систем
                    </option>
                    <option
                        value="fise"
                        <?php gpi_echoSelectedFaculty($gpi_array, "fise"); ?>
                    >
                        Факультет инженерных систем и экологии
                    </option>
                    <option
                        value="ef"
                        <?php gpi_echoSelectedFaculty($gpi_array, "ef"); ?>
                    >
                        Экономический факульет
                    </option>
                    <option
                        value="msf"
                        <?php gpi_echoSelectedFaculty($gpi_array, "msf"); ?>
                    >
                        Машиностроительный факультет
                    </option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Курс:</td> 
            <td>
                <select name="Course">
                    <option
                        value="1"
                        <?php gpi_echoSelectedCourse($gpi_array, "1"); ?>
                    >
                        1 курс
                    </option>
                    <option
                        value="2"
                        <?php gpi_echoSelectedCourse($gpi_array, "2"); ?>
                    >
                        2 курс
                    </option>
                    <option
                        value="3"
                        <?php gpi_echoSelectedCourse($gpi_array, "3"); ?>
                    >
                        3 курс
                    </option>
                    <option
                        value="4"
                        <?php gpi_echoSelectedCourse($gpi_array, "4"); ?>
                    >
                        4 курс
                    </option>
                    <option
                        value="5"
                        <?php gpi_echoSelectedCourse($gpi_array, "5"); ?>
                    >
                        5 курс
                    </option>
                    <option
                        value="6"
                        <?php gpi_echoSelectedCourse($gpi_array, "6"); ?>
                    >
                        6 курс
                    </option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Группа:</td>
            <td>
                <input
                    type="text" name="Group"
                    value="<?php gpi_echoGroup($gpi_array); ?>"
                />
            </td>
        </tr>
    </table>
    <input type="submit" value="submit" />
    <input type="reset" value="reset" />
</form>
