<?php 
require 'model.php';


/*$q = $bd->query("SELECT * FROM `module` inner join niveau_de_formation on niveau_de_formation.id_n = module.id_n INNER JOIN horaire_examen on horaire_examen.id_h = module.id_h where module.id_h != 0
");
if ($q->rowCount() == 0) {
	  header('Location: verif.php?e=1');

}*/
$op = $bd->query("SELECT * FROM `locaux`");
if ($op->rowCount() == 0) {
	  header('Location: verif.php?e=2');

}
$room=array();
$ens = array();

$up = $bd->query("SELECT * FROM `enseignant` where limite_horaire!=3 and id_e NOT IN('".$rs."')");
if ($up->rowCount() == 0) {
	  header('Location: verif.php?e=3');

}
while ($u = $up->fetch()) {
	array_push($ens,array($u['id_e'],$u['limite_horaire']));
}
/*echo "<br><br> enseignant : <br>";
print_r($ens);
echo "<br>";*/

while ($jl = $op->fetch()) {
	array_push($room, array($jl['id_l'],$jl['capacité'],$jl['type_l']));
}
/*echo "<br><br> salles : <br>";
print_r($room);
echo "<br>";*/
if (count($ens) && count($room) && count($course)) {
	require 'e1.php';
}
else{
	?>
	<h1>vous ne pouvez pas faire cette operation verifier ou  ajouter d'abord les ressources (les salles ,enseignants,etudiants,responsables de modules)</h1>
<?php }




?>