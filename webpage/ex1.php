<?php 
$pattern = "";
$text = "";
$contain = "";


if($_SERVER["REQUEST_METHOD"]=="POST"){

$pattern = $_POST["pattern"];
$text = $_POST["text"];

if(preg_match($pattern, $text)){
 $contain = '<strong>Your text contains the string: </strong>'.$pattern;

}else{
   $contain = '<strong>Your text does not contain the string: </strong>'.$pattern;
}
}




?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Valid Form</title>
</head>
<body>
	<form action="ex1.php" method="post">
		<dl>

            <dt>Text</dt>
			<dd><input type="text" name="text" value="<?= $text ?>"></dd>
			<dt>String ( Example: /sometext/ )</dt>
			<dd><input type="text" name="pattern" value="<?= $pattern ?>"></dd>

			
			<dt>&nbsp;</dt>
			<dd><input type="submit" value="Check"></dd>
		</dl>
          <?php echo $contain ;?>
	</form>
</body>
</html>
