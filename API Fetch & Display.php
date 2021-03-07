<?php

$url = "https://api.nasa.gov/planetary/apod?api_key=DEMO_KEY";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$resp = curl_exec($curl);
curl_close($curl);

$data = json_decode(file_get_contents($url), true);

echo var_dump($data);

// Example display from json
echo $data['explanation'];

?>