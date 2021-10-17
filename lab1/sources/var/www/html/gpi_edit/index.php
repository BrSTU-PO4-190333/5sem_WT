<?php
    $PAGE_TITLE = "gpi_edit";
    include '../_html/gpi_head.php';
    include '../_sql/gpi_connect.php';
    
    $gpi_array = array();
    $gpi_id = isset($_GET["ID"]) ? $_GET["ID"] : "-1";
    if ($gpi_id != "-1") {
        $gpi_sql = "SELECT * FROM `wt_lab1` WHERE `ID`='$gpi_id';";
        $gpi_result = mysqli_query($connect, $gpi_sql);
        
        $gpi_item = mysqli_fetch_assoc($gpi_result);
        $gpi_i = 0;
        while ($gpi_item != "") {
            $gpi_array[$gpi_i] = $gpi_item;
            $gpi_item = mysqli_fetch_assoc($gpi_result);
            $gpi_i += 1;
        }
    }

    

    function gpi_echoName($gpi_array) {
        echo $gpi_array[0]["Name"];
    }

    function gpi_echoPosition($gpi_array) {
        echo $gpi_array[0]["Position"];
    }

    function gpi_echoCheckedGender($gpi_array, $gpi_str) {
        if ( strcmp($gpi_array[0]["Gender"], "$gpi_str") == 0 ) {
            echo "checked";
        }
    }

    function gpi_echoSelectedDepartment($gpi_array, $gpi_str) {
        if ( strcmp($gpi_array[0]["Department"], "$gpi_str") == 0 ) {
            echo "selected";
        }
    }

    function gpi_echoEmail($gpi_array) {
        echo $gpi_array[0]["Email"];
    }

    function gpi_echoPhone($gpi_array) {
        echo $gpi_array[0]["Phone"];
    }

    function gpi_echoComment($gpi_array) {
        echo $gpi_array[0]["Comment"];
    }
?>
<p>Галанин П. И. =gpi_edit=</p>
<form action="/gpi_update/" method="POST">
    <table>
        <tr>
            <td>
                ИД:
            </td>
            <td>
                <input
                    type="text" name="ID" readonly
                    value="<?php echo $gpi_id; ?>"
                />
            </td>
        </tr>
        <tr>
            <td>
                Имя:
            </td>
            <td>
                <input
                    type="text" name="Name"
                    value="<?php gpi_echoName($gpi_array); ?>"
                />
            </td>
        </tr>
        <tr>
            <td>
                Должность:
            </td>
            <td>
                <input
                    type="text" name="Position"
                    value="<?php gpi_echoPosition($gpi_array); ?>"
                />
            </td>
        </tr>
        <tr>
            <td>
                Пол:
            </td>
            <td>
                <input
                    type="radio" name="Gender" value="w"
                    <?php gpi_echoCheckedGender($gpi_array, "w"); ?> 
                /> Woman
                <input
                    type="radio" name="Gender" value="m"
                    <?php gpi_echoCheckedGender($gpi_array, "m"); ?>
                /> Man
            </td>
        </tr>
        <tr>
            <td>
                Отдел:
            </td>
            <td>
                <select name="Department">
                    <option
                        value="mm"
                        <?php gpi_echoSelectedDepartment($gpi_array, "mm"); ?>
                    >M&M</option>
                    <option 
                        value="-"
                        <?php gpi_echoSelectedDepartment($gpi_array, "-"); ?>
                    >-</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                E-mail:
            </td>
            <td>
                <input
                    type="email" name="Email"
                    value="<?php gpi_echoEmail($gpi_array); ?>"
                />
            </td>
        </tr>
        <tr>
            <td>
                Телефон:
            </td>
            <td>
                <input
                    type="tel" name="Phone"
                    value="<?php gpi_echoPhone($gpi_array); ?>"
                />
            </td>
        </tr>
        <tr>
            <td>
                Комментарий:
            </td>
            <td>
                <textarea name="Comment" id="" cols="30" rows="10">
<?php gpi_echoComment($gpi_array); ?></textarea>
            </td>
        </tr>
    </table>
    <input type="submit" value="submit" />
    <input type="reset" value="reset" />
</form>
