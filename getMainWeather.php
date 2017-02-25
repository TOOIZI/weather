<?php
echo $_GET['city'];

$url = 'http://samples.openweathermap.org/data/2.5/weather?q='.$_GET['city'].',uk&appid=b1b15e88fa797225412429c1c50c122a1';
$json = file_get_contents($url);

$weatherObj = json_decode($json);
?>
<table class="table table-striped">
  <tr>
        <td>Температура</td>
        <td><?= $weatherObj->main->temp; ?></td>
  </tr>
  <tr>
            <td>Давление</td>
        <td><?= $weatherObj->main->pressure; ?></td>
            
  </tr>
  <tr>
        <td>Влага</td>
        <td><?= $weatherObj->main->humidity; ?></td>
  </tr>
</table>