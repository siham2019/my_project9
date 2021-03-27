<!DOCTYPE html>
<html>
<head>
	<title>gestion d'examen-page d'acceuil</title>
		<link rel="stylesheet" href="o.css">
	<link rel="stylesheet" type="text/css" href="h.css">
	<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@700&display=swap" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<style >
.modal{
	color: black;
}
.menu a,.menu button{
  color: white;
  text-decoration: none;
}
.menu a:hover{
text-decoration: underline;
cursor: pointer;
}
</style>
</head>
<body>
<div class="head">

	  <div class="logo">
			<div class="G">
	   <h1>G</h1>
	 </div>
       <?php require 'login.php';
          if (isset($_GET['d'])) {
						if ($_GET['d']==1) {

	      ?>
	            <script>
                    alert("mot de passe ou identifiant incorrect ");
                   showP();

	             </script>
	 <?php
       }
             if ($_GET['d']==2) {
							 ?>
							 <script>
										 alert("veuillez s'authentifier ");
										showP();

								</script>
             <?php   }
			}
      ?>
	 <div class="rest">
		 <h2>estion </h2>
		 <h2 id="samat">des examens</h2>
	 </div>
   </div>

	 <div class="menu">
		 <ul>
			 <li class="actual"> <i class="fa fa-home"></i> Acceuil </li>
			 <li>
<div class="dropdown" style="text-align:center;">
	<a ><i class="fa fa-eye"></i> Consulter planning <i class="fa fa-sort-down"></i></a>
	<div class="dropdown-content" style="background-color:white;color:black;">
		 <a href="cons_e.php" style="color:black;">emploi du temp</a>
		 <a href="salle.php" style="color:black;">salle d'etudiant</a>
		 <a href="surv.php" style="color:black;">surveillance</a>

 </div>
</div>
</li>


			 <li><a href="proposer.php"><i class="fa fa-calendar"></i>  Proposer emploi</a></li>
			 <li style="padding:0px;margin:5px;"> <button class="ty" onclick="showP()"><i class="fa fa-user" ></i> S'authentifier</li></button>
		 </ul>
	 </div>


</div>

<div class="karch">

	<div id="t">

			<div id="i"></div>
    <div id="b">
	     <h1 id="r">Departement Informatique</h1>
	      <h1 id="f">FSEI UHBC</h1>
      </div>

  </div>
<div id="cont">

<h3>A travers cet espace vous pouvez :</h3>

<div id="img">

	<h4>connaitre emploi et salle d'examen</h4>
	<ul id="et">
		<li>planning  d'examen </li>
		<li>les salles des etudiants </li>
		<li>planning de surveillance </li>
	</ul>

	<ul id="dff" style="display:none;">
		<li>proposer emploi <span>  </span></li>
	</ul>


</div>
<div id="ms">
   <button class="m" style="background-color: white;" onclick="show(1)"></button>
   <button  class="m" onclick="show(2)"></button>


</div>
</div>
<script type="text/javascript" src="j.js"></script>

</body>
</html>
