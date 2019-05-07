	<?php 
		$mess = $_GET['state'] ?? '';
	 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Demo oop</title>
</head>
<body>
	<h1>Checking number</h1>
	<form action="server/checking.php" method="POST">
		<label for="number"> Number</label>
		<input type="number" name="number" id="number">
		<br><br>
		<button type="submit" name="btnCheck"> Check</button>
	</form>
	<?php if($mess === 'even'): ?>
	<h3 style="color: red">Đây là số chẵn</h3>
	<?php endif; ?>
	<?php if($mess === 'odd'): ?>
		<h3 style="color:red">Đây là số lẻ</h3>
	<?php endif; ?>
</body>
</html>