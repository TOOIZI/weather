
<?php
$url = 'http://samples.openweathermap.org/data/2.5/weather?q=' . $_GET['city'] . ',uk&appid=e7db724b2a0aa4f279964d1b4c40c282';
$json = file_get_contents($url);

$weatherObj = json_decode($json);
?>
<table class="table table-striped">
    <tr>
        <td>Видимость</td>
        <td><?= $weatherObj->visibility; ?></td>
    </tr>
    <tr>
        <td>Скорость ветра</td>
        <td><?= $weatherObj->wind->speed; ?></td>
    </tr>
    <tr>
        <td>Направление ветра</td>
        <td><?= $weatherObj->wind->deg; ?><br><img src="arrow.png" style="-webkit-transform: rotate(<?= $weatherObj->wind->deg; ?>deg); -ms-transform: rotate(<?= $weatherObj->wind->deg; ?>deg); transform: rotate(<?= $weatherObj->wind->deg; ?>deg);" height="70%F" width="50%"</td>

    </tr>
    <tr>
        <td>Облачность</td>
        
        <td><?= $weatherObj->clouds->all; ?>% </td>
        <?php $clouds = $weatherObj->clouds->all;
        if($clouds <=20) {$image = sunny;}
        else if($clouds >20 && $clouds <40) {$image = partly_cloudy;}
        else if($clouds >40 && $clouds <60) {$image = quite_cloudy;}
        else {$image = cloudy;}
        ?>
    <img src="<?=$image?>.png">
    </tr>
</table>
