<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">



<!-- ########   Skromny Style set - nie widze potrzeby uzywania style.css, skoro wyglad nie jest oceniany   ########## -->
<style type="text/css">
body 		{font-family: Verdana, Arial; font-size: 14px; font-weight: bold;}
h1   		{font-family: Verdana, Arial; font-size: 14px; color: red;}
h2   		{font-family: Verdana, Arial; font-size: 14px; color: gray;}
h3   		{font-family: Verdana, Arial; font-size: 14px; color: blue; font-style: italic;}
h4	 		{font-family: Verdana, Arial; font-size: 24px; text-align: center; font-weight: bold;}
fieldset  	{ background-color: #CCCCCC; }
body 		{background-color: #EEEEEE;}
</style>

<!-- ########   Koniec Style set  ########## -->

<title> Widok wpisów </title>
</head>
<body>

<form method="GET" action="zero.php">
	

	
<?php // ######## Łączenie z bazą danych. ###########  testuj contnt na http://jsfiddle.net/ufpqM/
  $db_lnk = mysqli_connect("localhost", "s16281", "Raf.Czar");
  mysqli_set_charset($db_lnk, "utf8");
  mysqli_select_db($db_lnk, 's16281');
?> <!-- ########  Koniec nawiązywania polaczenia ########## -->


<?php // ######### 1) Polskie znaki 2) wysyłania zapytania do MySQL - ORDER DESC, 3) licznik rekordow, 4) koniec polaczenia z MySQL############
mysqli_query("SET NAMES `utf8` COLLATE `utf8_polish_ci`"); 
$query1 = "SELECT * FROM ksiega ORDER BY Data DESC";
$result = mysqli_query($db_lnk, $query1);
$ile = mysqli_num_rows($result);
//// mysqli_close($db_lnk);
echo "<h4>OTO WPISY NASZYCH WSZYSTKICH GOŚCI. </br> Liczba wpisów: $ile.</h4>"; 
?>	

<!-- ########  Dwa przyciski Dodaj wpis oraz Zobacz baze ########## -->
<center>
<input type="button" value="Dodaj swoj wpis do księgi" onClick="location.href='duo.php';" 
onmouseover="this.style.backgroundColor='red';return true;"
onmouseout="this.style.backgroundColor='bisque';return true;" />

<input type="button" value="Zobacz baze w fromie tab." onClick="location.href='uno.php';" 
onmouseover="this.style.backgroundColor='red';return true;"
onmouseout="this.style.backgroundColor='bisque';return true;" />
</center>	
<!-- ########  Koniec przycisków ########## -->



<!-- ########  Wyświetlanie wpisów w pewnej uporządkowanej formie  ########## -->
<?php
		
		$na_strone = 4; //tu podajesz ile WPISÓW na stronie ma sie wyswietlic
		$stron = ceil ($ile / $na_strone);   //tutaj masz ilosc stron zaokraglanych w gore
		
					// Logika wyswietlania linków "STRONA 1, STRONA 2, STRONA 3, //
					for ($i = 0; $i < $stron; $i++) echo ' <a href="?strona='.($i+1).'">strona '.($i+1).'</a> ';  //wyswietlamy linki do stronek
							
							// Logika co ma się wyświetlić na której stronie
							if (!isset($_GET['strona'])) $strona = 1; else $strona = (int)$_GET['strona'];
									
									// Zapytanie o posortowane wpisy limitowane 1-4, 5-8  itd.
									$query2 = "SELECT * FROM ksiega ORDER BY Data DESC LIMIT ".(($strona-1)*$na_strone).','.$na_strone;
									$sql = mysqli_query($db_lnk, $query2);
											
											// Zamykanie obu połączeń
											mysqli_close($db_lnk);
												mysqli_close($sql);


while($row = mysqli_fetch_row($sql)) {
	echo "<HR>";
	echo "Kiedy: <h1> $row[6] </h1> "; // Data, godzina
	echo "Miasto: <h2> $row[4] </h2> ";
	echo "Odwiedzający: <h2> $row[1] $row[2] </h2> ";
	echo "Kontakt: <h2> $row[3] </h2> ";
	echo "<fieldset>  <legend>Twój wpis :</legend> <h3>$row[5]</h3> </fieldset><br>";
	echo "</HR> </br>";
}
?>
<!-- ########  Koniec wyświetlania ########## -->


</form>
</body>
</html>
