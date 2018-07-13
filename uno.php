<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title> Widok bazy </title>
</head>
<body>
<form method="POST" action="uno.php">
	

	
<?php // ######## Łączenie z bazą danych. ###########  testuj contnt na http://jsfiddle.net/ufpqM/
  $db_lnk = mysqli_connect("localhost", "s16281", "Raf.Czar");
  mysqli_set_charset($db_lnk, "utf8");
  mysqli_select_db($db_lnk, 's16281');
?> <!-- ########  Połączenie nawiązano ########## -->
 
 <!-- ########   Powstanie nagłówków   ########## -->
<table border="5">
<tr>
<td> Id </td>
<td> Imie </td>
<td> Nazwisko </td>
<td> Adres Email </td>
<td> Miasto </td>
<td> Wpis użytkownika </td>
<td> Data </td>
</tr>
<!-- ########   Koniec nagłówków   ########## -->


<?php // ####### 1)Polskie znaki 2)Zapytanie do bazy danych, 3) Zapisanie danych do zmiennej 4) policzenie liczb rekordow bazy #########///
mysqli_query("SET NAMES `utf8` COLLATE `utf8_polish_ci`"); 
$query1 = "SELECT * FROM ksiega";
$result = mysqli_query($db_lnk, $query1);
$ile = mysqli_num_rows($result);
mysqli_close($db_lnk);
?> <!-- ########   Koniec polacznia z baza   ########## -->

<!-- ########   Nagłówek, licznik rekordów, przycisk powrotu do srony ZERO.php   ########## -->
<center>
	<?php echo "<b><center>Widok naszej bazy danych. </br> Liczba rekordów: $ile.</center></b>"; ?>
	<input type="button" value="Powrót do widoku wpisów" onClick="location.href='zero.php';" 
	onmouseover="this.style.backgroundColor='red';return true;"
	onmouseout="this.style.backgroundColor='bisque';return true;" />
	<br></br>
</center>
<!-- ########   Koniec   ########## -->


<!-- ########   Wyswietlenie Bazy w formie tabeli, wszystkie kolumny   ########## -->
<?php
while($row = mysqli_fetch_row($result)) {
	echo "<tr>";
	echo "<td>$row[0]</td>";
	echo "<td>$row[1]</td>";
	echo "<td>$row[2]</td>";
	echo "<td>$row[3]</td>";
	echo "<td>$row[4]</td>";
	echo "<td>$row[5]</td>";
	echo "<td>$row[6]</td>";
	echo "</tr>";
}
?>
<!-- ########   Koniec wyswietlania bazy danych   ########## -->

</table>
</form>
</body>
</html>
