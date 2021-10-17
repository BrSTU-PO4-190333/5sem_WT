<!--
Задание 1
Создать шаблон, предающий данные в другой шаблон через URL,
в котором они будут сохранены и после этого считаны из БД так,
что в браузере должны публиковаться примерно следующие данные.
-->
<?php
    $PAGE_TITLE = "gpi_url";
    include '../_html/gpi_head.php';
?>
<p>Галанин П. И. =gpi_url=</p>
<a href="/gpi_savepersonal.cfm/?Name=Kelly+Smith
&Position=Vice+President
&Gender=w
&Department=mm
&Email=Kelly%40example.com
&Phone=8(0297)11-23-45
&Comment=I+get+up+at+7+o'clock.%0D%0AI+wash+my+hands%2C+my+face+and+clean+my+teetch.
%0D%0AI+air+my+room+and+make+the+bed.%0D%0AThen+I+have+my+breakfast.">Отправить</a>
