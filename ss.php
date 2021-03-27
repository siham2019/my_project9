   <?php require_once 'model.php';
      if (isset($_POST['submit'])) {
      

$nom=$_POST['nom'];
$level=$_POST['level'];

$y = $bd->query("UPDATE `section` SET `nom_section` = '".$nom."', `id_n` = '".$level."' WHERE `section`.`id_section` =".$_GET['id']);
if ($y) {
  	  header('Location: crud4ss.php');
  }
      }
      ?>