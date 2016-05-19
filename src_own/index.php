
<!-- /**
 * Created by PhpStorm.
 * User: XYZ
 * Date: 02.05.2016
 * Time: 14:09
 */ -->
<?php include("inc/dbaccess.inc.php"); ?>
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Adressdemo</title>
  <meta name="description" content="Adressdemo">
  <meta name="author" content="Demo">

  <link rel="stylesheet" href="css/styles.css?v=1.0">

</head>

<body>

<?php $db = new mysqli("","root","","adressendb"); $db->query("setnames 'utf-8'"); ?>
  <!--<script src="js/scripts.js"></script>-->
  <h1>Hallo Adressen!</h1>
  <p>Es folgen alle weiteren Annehmlichkeiten in Form einer Tabelle...</p>
  <p><a href="/src_own/edit.php">Adressen anlegen.</a></p>
  <table>
      <tr>
        <td>ID</td><td>Nachname</td>
          <td>Vorname</td>
      </tr>
      <?php
        $qu = "select * from adressen";
        $ret = $db->query($qu);
        while ($arr = $ret -> fetch_assoc()): ?>
      <tr>
          <td><?php echo $arr['Nachname'] ?></td>
      </tr>
    <?php endwhile; ?>
  </table>
/body>
</html>
