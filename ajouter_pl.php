<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>gerer planning-ajouter planning</title>
    <link rel="stylesheet" type="text/css" href="pA.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="ze1.css">
  <style>
  .op {
    color: black;
  }
  .io {
    color: black;
  }
  </style>
  </head>
  <body>
     <?php require_once 'dash.php'; ?>
    <?php
 require_once 'model.php';
 $q=$bd->query("select * from niveau_de_formation inner join module on module.id_n = niveau_de_formation.id_n and module.id_h = 0 group by niveau_de_formation.id_n");

 ?>
 <?php
 if (isset($_POST['s'])) {

   $t=array('id_n' => $_POST['id_n']);

 }


  if (isset($_GET['d'])) {
   if ($_GET['d']==0) {
 ?>
 <div class="op">
   <a href="emploi.php"><i class="fa fa-long-arrow-left"></i> précédent : emploi de temp </a>

     <div class="w">
 <form class="" action="ajouter_pl.php?d=1" method="post">
   <label>niveau de formation</label>
      <select class="" name="id_n">

            <?php
             while ($z=$q->fetch()){
                 ?>
        <option value= <?php echo $z['id_n'];?>>

        <?php echo $z['nom_n']."-". $z['specialité']; ?>

        </option>
                 <?php } ?>
      </select>
      <input type="submit" name="s" >
 </form>

   </div>
   </div>
<?php } ?>


<?php
     if ($_GET['d']==1) {
       ?>
       <div class="io">
         <a style="color:blue;" href="ajouter_pl.php?d=0"><i class="fa fa-long-arrow-left"></i> precedent</a>
         <h3>voici planning proposé par les etudiants</h3>
       <?php
  require_once 'kjh.php';
if ($q->rowCount()!=0) {

  ?>

<form class="" action="ajouter.php?idn=<?php echo $t['id_n'];?>" method="post">
<br>
<br>
<div style="display:flex;justify-content:flex-end;overflow:auto;">
  <label style="padding-top:5px;">voulez vous metter comme planning d'examen ?</label>
  <input style="margin-left:15px;" type="submit" name="s1" value="oui">
  <input style="margin-left:15px;background-color:red;" type="submit" name="s2" value="non">

</div>

</form>


</div>
<?php    }
else {

  header('Location: ajouter_ho.php?d='.$t['id_n']);
}


}


  } ?>



  </body>
</html>
