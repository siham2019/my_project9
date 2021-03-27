<!DOCTYPE html>
<html>
<head>
	<title>specialité-modifier</title>
<!--   <script type="text/javascript"  src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'>
</script> -->
<link rel="stylesheet" href="ze1.css">
<style>
.op{
	color: black;
}
</style>
<!-- <script type="text/javascript"  src='r.js'></script>
 --></head>
<body>
	<?php require_once 'dash.php'; ?>
 <div class="op">
	 <div class="w">
<h2>modifier specialité</h2>
<form method="post" action="ses.php?id=<?php echo $_GET['ids'];?>">
	<label>nom de specialité</label>
	<input type="text" name="nom" required pattern="[A-Za-z ]+"
  value="<?php echo $_GET['se'];?>">


		<label>niveau de formation</label>
	<select name="level" id="level" required>
    <option value="">choisir niveau de formation</option>
            <option value="l2">l2</option>
              <option value="l3">l3 </option>
              <option value="M1">M1</option>
              <option value="M2">M2</option>
  </select>

   
	<input type="submit" name="submit">

</form>
</div>
</div>
<script type="text/javascript" src="qj.js">
  function_name("<?php echo $_GET['nn']; ?>","level");
</script>
</body>
</html>
