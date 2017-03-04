<?php
echo $_GET['city'];

$url = 'http://samples.openweathermap.org/data/2.5/weather?q=' . $_GET['city'] . ',uk&appid=e7db724b2a0aa4f279964d1b4c40c282';
$json = file_get_contents($url);

$weatherObj = json_decode($json);
?>
<table class="table table-striped">
    <tr>
        <td>Температура</td>
        <td><?= $weatherObj->main->temp; ?></td>
        <td>Min:<?= $weatherObj->main->temp_min; ?></td>
        <td>Max:<?= $weatherObj->main->temp_max; ?></td>
    </tr>
    <tr>
        <td>Давление</td>
        <td><?= $weatherObj->main->pressure; ?></td>

    </tr>
    <tr>
        <td>Влага</td>
        <td><?= $weatherObj->main->humidity; ?></td>
        <?php if ($weatherObj === Kyiv) {
            echo ('<img src="http://dontimes.com.ua/wp-content/uploads/2015/06/d17fe8712b6a17538f2c8d6051961d20_i750x501x530.jpg">');
        } ?>
    </tr>
</table>
