<body>
<form action="" method="post">
	Inlognaam__ <input type="text" name="login" value="">
	<br>
	Email______<input type="text" name="mail" value="">
	<br>
	Adres______<input type="text" name="adress" value="">
	<br>
	Wachtwoord <input type="password" name="password" value="">
	<br>
	<form action="" method="post">
    <select name="dieren[]">
        <option value="dier1">Motje</option>
        <option value="dier2">Rups</option>
        <option value="dier3">Zeepaard</option>
        <option value="dier4">Torretje</option>
        <option value="dier5">Bidsprinkhaan</option>
    </select>
	<br>
	<input type="submit" id = "button" name="knop" value="verstuur">
	<br>

</form>
<?php
echo "<br>";
echo $_POST["login"] . "<br>";
echo $_POST["mail"] . "<br>";
echo $_POST["adress"] . "<br>";
echo $_POST["password"] . "<br>";

$error = checkFields($_POST);

if (!empty($error)) {
  echo $error;
} else {
}
function checkFields($fields){
	$error = "";
	foreach ($fields as $name => $value) {
	  if (empty($value)) {
		$error .= "The $name field is required.<br>";
	  }
	}
	return $error;
  }

  foreach ($_POST['dieren'] as $dier) {
	echo "<img src='images/".$dier.".jpg'>";

}
	?>
</form>
</body>
