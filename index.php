<?php
 $json = file_get_contents("https://jsonfaus.herokuapp.com/json.php");

 $data = json_decode($json,true);
 $list = $data['Books'];
?>

<h1>Top 5 Music in 2020</h1>

<table border="1px">
  <tr class="head">
    <td>Title</td>
    <td>Artist</td>
    <td>Genre</td>
    <td>Writer</td>
  </tr>
<?php
  foreach($list as $value){
?>
  <tr>
    <td><?php echo $value['mus_title'];?></td>
    <td><?php echo $value['mus_artist'];?></td>
    <td><?php echo $value['mus_genre'];?></td>
    <td><?php echo $value['mus_writer'];?></td>
  </tr>
<?php
  }
?>
</table>
