<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title> Widok wpisów </title>
</head>

<body>
<form method="GET" action="">
    
<table>
<tr>
<td> Id </td>
<td> Imie </td>
<td> Nazwisko </td>
<td> Rok urodzenia </td>
<td> Miejsce urodzenia </td>
</tr>
    
    <?php  // Nawiazanie polaczenia
      $db_lnk = mysqli_connect("localhost", "s16281", "Raf.Czar");
		mysqli_set_charset($db_lnk, "utf8");
		mysqli_select_db($db_lnk, 's16281');
		mysqli_query("SET NAMES `utf8` COLLATE `utf8_polish_ci`"); 
		$query1 = "SELECT * FROM ksiega";
		$result = mysqli_query($db_lnk, $query1);
		$ile = mysqli_num_rows($result);  //ilosc wszystkich rekordow (nie stron !!)
		$na_strone = 4; //tu podajesz ile rekordow na stronie ma sie wyswietlic.
		$stron = ceil ($ile / $na_strone);   //tutaj masz ilosc stron zaokraglanych w gore
     
     // logika wyswietlania linków "STRONA 1, STRONA 2, STRONA 3, //
    for ($i = 0; $i < $stron; $i++) 
    echo ' <a href="?strona='.($i+1).'">strona '.($i+1).'</a> ';  //wyswietlamy linki do stronek
	//echo "<br>Liczba rekordów = $ile <br>";  // do sprawdania wartosci
	//echo "Liczba stron czyli liczba record/na)strone(10) = $stron <br>"; // do sprawdania wartosci
			
    if (!isset($_GET['strona'])) $strona = 1; 
    else $strona = (int)$_GET['strona'];
    
    // Wyciagamy dane! ORDER BY DESC, LIMIT 1,$na_strone!
    $query2 = "SELECT * FROM ksiega ORDER BY Data DESC LIMIT ".(($strona-1)*$na_strone).','.$na_strone;
    $sql = mysqli_query($db_lnk, $query2);

    while($row = mysqli_fetch_row($sql)) {
	echo "<tr>";
	echo "<td>$row[0]</td>";
	echo "<td>$row[1]</td>";
	echo "<td>$row[2]</td>";
	echo "<td>$row[3]</td>";
	echo "<td>$row[4]</td>";
	echo "<td>$row[5]</td>";
	echo "</tr>";
}
    ?>
</table>
</form>
</body>
</html>
