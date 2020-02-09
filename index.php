<?php
 $json = file_get_contents("https://jsonfaus.herokuapp.com/json.php");

 $data = json_decode($json,true);
 $list = $data['Music'];
?>

<h1>Top 5 Music 2019</h1>

<table border="1px">
  <tr class="head">
    <th>Title</th>
    <th>Artist</th>
    <th>Genre</th>
    <th>Writer</th>
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
