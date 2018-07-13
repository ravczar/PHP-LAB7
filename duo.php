<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title> Formularz dodawania wpisu </title>
</head>
<body>
<form method="POST" action="duo.php">
	
<br>
</br>
<fieldset> 
	<legend>Dodawanie wpisu do księgi:</legend><br />
                    <label>Imie: 	 	</label> <input type="text" name="imie" /><br />
                    <label>Nazwisko: 	</label> <input type="text" name="nazwisko" /><br />
                    <label>E-mail:  	</label> <input type="text" name="mail" /><br />
                    <label>Miasto:      </label> <input type="text" name="miasto" /><br />
                    <label>Komentarz:   </label> <textarea name="opinie" cols="60" rows="7" maxlength="300">Dodaj jakiś komentarz! max 300 znaków</textarea></br>
                    <input name= "submit" type="submit" value="Prześlij"  
					       onmouseover="this.style.backgroundColor='red';return true;"
						   onmouseout="this.style.backgroundColor='bisque';return true;" />
					<input name= "reset"  type="reset"  value="Czyść"
					       onmouseover="this.style.backgroundColor='red';return true;"
					       onmouseout="this.style.backgroundColor='bisque';return true;" />
					<input name= "button" type= "button" value="Zobacz Wpisy" onClick="location.href = 'zero.php'"
					       onmouseover="this.style.backgroundColor='red';return true;"
					       onmouseout="this.style.backgroundColor='bisque';return true;" />
</fieldset>
<br>
<br>

<!-- ########  1) start sesji 2) Jeśli wszystki pola formy uzupełnione, to przekazanie danych do ciastek 3) przejscie do strony TRIO.PHP ########## -->
<?php
session_start();
if (isset($_POST['imie']) && ($_POST['nazwisko']) && ($_POST['mail']) && ($_POST['miasto']) && ($_POST['opinie']) ){
$_SESSION['imie'] = $_POST['imie'];
$_SESSION['nazwisko'] = $_POST['nazwisko'];
$_SESSION['mail'] = $_POST['mail'];
$_SESSION['miasto'] = $_POST['miasto'];
$_SESSION['opinie'] = $_POST['opinie'];
header("Location:trio.php", true);
}
?>
<!-- ########  Koniec i przejście do TRIO.PHP ########## -->
</form>
</body>
</html>
