<!DOCTYPE html>
<html>
<head>
	<title>vhnnn</title>
</head>
<body>
<select id="level" onchange="ajax_request(event,'section','ids','noms',false)">
		<option>selectioner niveau de formation </option>

	<?php
  require'model.php'; 
    $q=$bd->query("select * from niveau_de_formation");

while ($t=$q->fetch()) {

  ?>
  <option value="<?php echo $t['id_n']; ?>"><?php echo $t['nom_n']."-".$t['specialité']; ?></option>
  <?php
    }
  ?>
</select>
<br>
<br>
<select id="section" onchange="ajax_request(event,'groupe','idG','nomG',true)">
	<option>selectioner section </option>

</select>
<select id="groupe" >
	<option>selectioner groupe </option>

</select>
<script type="text/javascript" src="sd.js"></script>
</body>
</html>