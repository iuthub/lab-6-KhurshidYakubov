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
			<dd><textarea name="text"  cols="30" rows="10"><?= $text ?></textarea></dd>
			<dt>String ( Example: /sometext/ )</dt>
			<dd><input type="text" name="pattern" value="<?= $pattern ?>"></dd>

			
			<dt>&nbsp;</dt>
			<dd><input type="submit" value="Check"></dd>
		</dl>
        <?php echo $contain ;?> <br>  <br>
		After removing whitespaces of the text: <?php echo preg_replace('/\s+/', '', $text)."\n";?> <br> <br><!--for removing whitespace-->
		After removing non-numeric characters of the text: <?php echo preg_replace("/[^0-9,.]/", "", $text)."\n"; ?> <br> <br><!--for removing non-numeric characters-->
            <!--  <?php echo preg_replace('/\n/', '' , $text) ?> <br> <br> -->
	</form>
</body>
</html>
