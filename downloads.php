<?php
  $file = "https://p3lican.github.io/boatcolor/downloads.json";
  $json = json_decode(file_get_contents($file), true);

  $json['redCount'] = $json['redCount'] + 1;
  $json['whiteCount'] = $json['whiteCount'] + 1;
  $json['blueCount'] = $json['blueCount'] + 1;
  file_put_contents($file, json_encode($json));
  echo 'success';
?>