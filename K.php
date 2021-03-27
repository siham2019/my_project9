      <?php      require_once 'model.php';
      if (isset($_POST['submit'])) {
   

$nom_l=$_POST['nom_l'];
$type=$_POST['type'];
$nombre=$_POST['nombre'];
$q=$bd->query("UPDATE locaux SET nom_l='".$nom_l."',type_l='".$type."',capacité='".$nombre."' where id_l=".$_GET['id']);
if ($q) {
header('Location: crud3s.php');
}else{
	echo "error";
}
}
      ?>