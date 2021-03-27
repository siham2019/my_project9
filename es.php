<div>
  <?php
  require_once 'model.php';
  $q=$bd->query("select * from niveau_de_formation");
  ?>

 <div class="tab"> 
<form method="POST" action="q.php">
  
  niveau de formation
 <select name="n">
  	<?php
  while ($t=$q->fetch()){
    ?>
    <option style="width: 50%;" value=<?php echo $t['id_n'];?>>

    	<?php echo $t['nom_n']."-". $t['specialité'];?>
    	
    </option>
  <?php }
  ?>
</select>
<input type="submit">
</form>

</div>