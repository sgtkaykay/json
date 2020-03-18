<?php
  include 'config.php';
  include 'class.music.php';

  header('Content-Type: application/json');

  $music = new Music();
  $list=$music->get_music();

  echo "{\"Music\":";
  echo json_encode($list);
  echo "}";
?>
