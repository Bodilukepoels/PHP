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
$mail = $_POST['mail'];
$password = $_POST['password'];

if (inlog($mail,$password)) {
    echo "Welcome!";
} else {
    echo "Access denied.";
}

function inlog($mail, $pass): bool {
    if ($mail == "piet@worldonline.nl" && $pass == "doetje123" ||
        $mail == "klaas@carpets.nl" && $pass == "snoepje777" ||
        $mail == "truushendriks@wegweg.nl" && $pass == "arkiearkie201"
    )    {return true;}
    else {return false;}
}

echo "<br>";
echo $_POST["login"] . "<br>";
echo $_POST["mail"] . "<br>";
echo $_POST["adress"] . "<br>";
echo $_POST["password"] . "<br>";

  foreach ($_POST['dieren'] as $dier) {
	echo "<img src='images/".$dier.".jpg'>";
}
	?>
</form>
</body>
