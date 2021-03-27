<!DOCTYPE html>
<html>
<head>
	<title>gestion d'examen-login</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="qz.css">
</head>
<body>
	<script type="text/javascript" src="sh.js">

 </script>
<div class="modal">
	<form method="POST" action="login.php" class="rt">
		<h1>s'authentifier</h1>

		<div class="jk">

		<label><i class="fa fa-user"></i> identenfiant</label>
<input type="text" name="id" placeholder="eg.C234" required pattern="[a-zA-Z0-9 ]+">
</div>
<div class="jk">
<label> <i class="fa fa-key"></i> mot de passe</label>
<input type="password" name="p" placeholder="eg.2******" required pattern="[a-zA-Z0-9 ]+">
</div>
<div >
	<input  class="th" type="submit" name="submit">
	<button class="fh" onclick="hide()">annuler</button>
</div>

</form>
</div>

<script type="text/javascript" src="si.js">

</script>
<?php
// Start the session

require_once 'model.php';
if (isset($_POST['submit'])) {

$q=$bd->query("SELECT * FROM login where identifiant ='".$_POST['id']."' and pass ='".$_POST['p']."'");

if ($q) {

		if ( $q->rowCount()==1) {
				 $r=$q->fetch();
				 $d=$r['identifiant'];
			 if ($d[1]=="T") {

				header("Location:proposer.php?ide=".$_POST['id']);
				 }
				 if ($d[0]=="C") {
                      
					header("Location:welcome.php");
					 }
					 if ($d[1]=="N") {

					 header("Location:surv.php?idens=".$_POST['id']);
						}
		}
 else {
	 header("Location:home.php?d=1");
	 ?>
	 <script>
	
showP();

		</script>
		<?php
	}

}
else {
echo "erreur de base de donne";
}
}
?>
</body>
</html>
