<?php
$access_token = 'aExLAT9uGTusXVaSY2Xb4zyl67mMj+LBQdQC3g18nBQaAgruxVGRlhTczGN+aH7buK+vQtH/WrfTLBwXT3O9B2VgLyTrl4029402weZKOeqiDAKNH9z/t8d541jhFjXZ5d2cNmrsD3zMO21us0RgFgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
