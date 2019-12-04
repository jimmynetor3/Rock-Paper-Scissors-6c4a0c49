<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<h1>steen papier schaar</h1>
<?php

if (isset($_GET['player1'])) {
  echo 'je hebt gekozen voor ' . $_GET['player1'];
}
  else {
    echo '<p>Speler 1 :</p>
      <form action="" method="get">
      <select name="player1">
      <option value="">--Please choose an option--</option>
      <option value="steen">steen</option>
      <option value="papier">papier</option>
      <option value="schaar">schaar</option>
  </select>  
  <input type="submit" name="submit">
  </form>
 '
  ;
}

if (isset($_GET['player1'])) {
  echo '<p>Speler 2 :</p>
      <form action="#" method="get">
      <select name="player2">
      <option value="">--Please choose an option--</option>
      <option value="steen">steen</option>
      <option value="papier">papier</option>
      <option value="schaar">schaar</option>
  </select>
  <input type="submit" name="submit">
  </form>';
}

if (isset($_GET['player2'])) {
   echo 'speler 2 koos voor ' . $_GET['player2'] ;
 }
 ?>
</body>
</html>