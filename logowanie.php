<?php
session_start();

require_once "connect.php";

$login = $_POST["login"];
$haslo = $_POST["haslo"];
$zapytanie = "SELECT * FROM Uzytkownicy WHERE nick='$login'";
$result = mysqli_query($con,$zapytanie);

while($row = mysqli_fetch_assoc($result)){
    $haslobaza = $row["haslo"];
    $nick = $row["nick"];
    if($haslo == $haslobaza & $login == $nick){
    

        $_SESSION['user']= $login;
    echo "Pomyślnie zalogowano !".$nick;
    header('Location: gra.php');

}
else{
    echo "Zły login lub hasło !";
    header('Refresh: 5; url=main.php');
}
}


?>

<?php  mysqli_close($con);	 ?>