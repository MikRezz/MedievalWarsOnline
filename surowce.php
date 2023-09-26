<?php

if (!isset($_SESSION['user'])) {
    header('Location: main.php');
    exit();
}
$nazwa = $_SESSION['user'];

// DREWNO
$drewno_ask = "SELECT `drewno` FROM surowce as s, uzytkownicy as u WHERE u.id=s.user_id AND u.nick = '$nazwa' ";
$drewno_value = mysqli_query($con,$drewno_ask);
while($d1 = mysqli_fetch_assoc($drewno_value)){
    $drewno = $d1["drewno"];
}
$d_img = "<img src='wood.png' width='60' height='40' style='float:left;'>" ;

// KAMIEN
$kamien_ask = "SELECT `kamien` FROM surowce as s, uzytkownicy as u WHERE u.id=s.user_id AND u.nick = '$nazwa' ";
$kamien_value = mysqli_query($con,$kamien_ask);
while($k1 = mysqli_fetch_assoc($kamien_value)){
    $kamien = $k1["kamien"];
}
$k_img = "<img src='stone.png' width='60' height='40' style='float:left;'>";

// Glina
$glina_ask = "SELECT `glina` FROM surowce as s, uzytkownicy as u WHERE u.id=s.user_id AND u.nick = '$nazwa' ";
$glina_value = mysqli_query($con,$glina_ask);
while($g1 = mysqli_fetch_assoc($glina_value)){
    $glina = $g1["glina"];
}
$g_img = "<img src='clay.png' width='60' height='40' style='float:left;'>";

// ZBOZE
$zboze_ask = "SELECT `zboze` FROM surowce as s, uzytkownicy as u WHERE u.id=s.user_id AND u.nick = '$nazwa' ";
$zboze_value = mysqli_query($con,$zboze_ask);
while($z1 = mysqli_fetch_assoc($zboze_value)){
    $zboze = $z1["zboze"];
}
$z_img = "<img src='sheaf.png' width='60' height='40' style='float:left;'>";

//ZELAZO
$zelazo_ask = "SELECT `zelazo` FROM surowce as s, uzytkownicy as u WHERE u.id=s.user_id AND u.nick = '$nazwa' ";
$zelazo_value = mysqli_query($con,$zelazo_ask);
while($ze1 = mysqli_fetch_assoc($zelazo_value)){
    $zelazo = $ze1["zelazo"];
}
$ze_img = "<img src='iron.png' width='60' height='40' style='float:left;'>";
?>