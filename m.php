   <?php require_once 'model.php';
      if (isset($_POST['submit'])) {
      

$nomG=$_POST['numero'];
$section=$_POST['section'];

$y = $bd->query("UPDATE `groupe` SET `nomG` = '".$nomG."', `id_section` = '".$section."' WHERE `groupe`.`idG` =".$_GET['id']);
if ($y) {
  	  header('Location: crud4g.php');
  }
      }
      ?>