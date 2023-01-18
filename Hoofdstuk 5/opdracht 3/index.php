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
	<input type="submit" id = "button" name="knop" value="verstuur">
	<br>

</form>
<?php
$mail = $_POST['mail'];
$password = $_POST['password'];

if (inlog($mail,$password)) {
    echo "Welcome!" . ["login"];
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
	?>
</form>
</body>

<?php
$dbh = new PDO('mysql:host=localhost;dbname=phpschool;port=3306', 'root', 'konijn007blue');
if(!$dbh){
    echo
        'Connection error: ' . mysqli_connect_error();
}
else{
    echo 'Database Connected!';
}
?>