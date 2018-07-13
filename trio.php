
<?php  
// ### kontynuacja sesji ### //
session_start();
// #### przekazanie danych z formularza do zmiennych ##### //
$imie = $_SESSION['imie'];
$nazwisko = $_SESSION['nazwisko'];
$mail = $_SESSION['mail'];
$miasto = $_SESSION['miasto'];
$komentarz = $_SESSION['opinie']; 

// #### Jeśli wszystki 5 ziennych ustawione to wysyłamy zapytanie do bazy SQL #### // 
if (isset($imie) && ($nazwisko) && ($mail) && ($miasto) && ($komentarz) ){

 /* Poniższe nawiązują polaczenie z baza danych, ale co wazniejsze ustalają nam polskie znaki */
 $db_lnk = mysqli_connect("localhost", "s16281", "Raf.Czar");
 mysqli_set_charset($db_lnk, "utf8");
 mysqli_select_db($db_lnk, 's16281');
 mysqli_query("SET NAMES `utf8` COLLATE `utf8_polish_ci`");
    
   $query = "INSERT INTO ksiega(Imie, Nazwisko, Email, Miasto, Komentarz, Data) VALUES (";
   $query .= " '$imie', '$nazwisko', '$mail', '$miasto', '$komentarz', NOW() ";
   $query .= ")";
	
		if (!$result = mysqli_query($db_lnk, $query)){
		mysqli_close($db_lnk);
		exit ('Błąd: zapytanie zostało odrzucone... </br />');
		}
		
 mysqli_close($db_lnk);
 
	}
	// ####### KOŃCZENIE SESJI ##### ///
	if(!isset($_SESSION['imie'])){
		header("Location: duo.php");}
	else{ // Czyszczenie ciasteczek poleceniem unset
		unset($_SESSION['imie']);
		unset($_SESSION['nazwisko']);
		unset($_SESSION['mail']);
		unset($_SESSION['miasto']);
		unset($_SESSION['opinie']);
		if (isset($cookie[session_name()])){
			setcookie(session_name(), '', time() - 360);}
			header("Location: duo.php");
		}
	// ####### KONIEC DZIALANIA, powrót do DUO.PHP ##### ///
?> 



