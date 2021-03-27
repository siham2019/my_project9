   <?php require_once 'model.php';
      if (isset($_POST['submit'])) {
      

$nom=$_POST['nom'];
$level=$_POST['level'];

$y = $bd->query("UPDATE `niveau_de_formation` SET `nom_n` = '".$level."', `specialité` = '".$nom."' WHERE `niveau_de_formation`.`id_n` =".$_GET['id']);
if ($y) {
  	  header('Location: crud5se.php');
  }
      }
      ?>