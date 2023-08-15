<!DOCTYPE html>
<html>
<head>
<title>Hospital Mangement system</title>
<link rel="stylesheet" type="text/css" a href="style.css">
<link rel="stylesheet" type="text/css" a href="fork-awesome.min.css">

</head>
<body>
<div class="container">
<img src="depositphotos_9746995-stock-illustration-child-care-hospital-logo.jpg">
<form action="home.php" method="post">
<?php if (isset($_GET[`error`]))
{
	?>
	<p class="error"><?php echo $_GET['error'];?></p>
	<?php


}
?>

<div class="form-input">
<input type="text" name="uname" placeholder="enter the username"/>
</div>
<div class="form-input">
<input type="password" name="password" placeholder="password">
</div>
<button type="submit">Login</button>
<footer>
  <p>Copyright by@Rushhan</p>
</footer>
</form>
</div>
</body>
</html>

