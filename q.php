<?php
if (isset($_POST['n'])) {$n=$_POST['n'];
  require_once 'model.php';
$q=$bd->query("select * from section where id_n=".$n);
}

?>
<form method="POST" action="q.php">
  
section
 <select name="s">
  	<?php
  while ($t=$q->fetch()){
    ?>
    <option style="width: 50%;" value=<?php echo $t['id_section'];?>>

    	<?php echo $t['nom_section'];?>
    	
    </option>
  <?php }
  ?>
</select>
<input type="submit">
</form>
<?php

if(isset($_POST['s'])){	
$s=$_POST['s'];
$q=$bd->query("select * from groupe where id_section=".$s);
}
 

?>