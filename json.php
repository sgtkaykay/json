<?php
  include 'config.php';
  include 'class.music.php';

  header('Content-Type: application/json');

  $music = new Music();
  $list=$music->get_Music();

  echo "{\"Music\":";
  echo json_encode($list);
  echo "}";
?>
