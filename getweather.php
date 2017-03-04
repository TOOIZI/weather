<?php
$url = 'http://samples.openweathermap.org/data/2.5/weather?q=Tallinn,uk&appid=e7db724b2a0aa4f279964d1b4c40c282';
$json = file_get_contents($url);
//echo($json);
$weatherObj = json_decode($json);
echo "City: Tallinn</br>";
echo "Temp: ".$weatherObj->main->temp."</br>";
echo "Humidity: ".$weatherObj->main->humidity."</br>";
echo "Visibility:".$weatherObj->main->visibility."</br>";
echo "WindSpeed:".$weatherObj->main->wind->speed."</br>";
echo "WindDeg:".$weatherObj->main->wind->deg."</br>";
?>