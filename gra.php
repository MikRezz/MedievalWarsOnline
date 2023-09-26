<?php

session_start();

require_once "connect.php";
require_once "surowce.php";

if (!isset($_SESSION['user'])) {
    header('Location: main.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_gra.css">
    <link rel="stylesheet" href="popup.css">
    <title>Gra przeglądarkowa</title>
</head>
<body>
   
<div id="mapka">
    <div id="panel">
        
    <div class="surowiec"><?php echo "$d_img $drewno"; ?></div>
    <div class="surowiec"><?php echo "$k_img $kamien"; ?></div>
    <div class="surowiec"><?php echo "$g_img $glina"; ?></div>
    <div class="surowiec"><?php echo "$ze_img $zelazo"; ?></div>
    <div class="surowiec"><?php echo "$z_img $zboze"; ?></div>

    <div id="user">
        <?php echo "Witaj ".$_SESSION["user"]." !"; ?>  
        <br><a href="logout.php"><input type="button" value="wyloguj"></a>
    </div>
    </div>

<div id="th">TOWNHALL</div>
</div>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2>LISTA BUDOWY</h2>
    </div>
    <div class="modal-body">
        <script>
            // When the user clicks on div, open the popup
            function myFunction() {
              var popup = document.getElementById("myPopup");
              popup.classList.toggle("show");
            }
            </script></td>
      <table>
        <tr>
          <th>Nazwa</th>
          <th>Poziom</th>
          <th>drewno</th>
          <th>glina</th>
          <th>kamien</th>
          <th>zelazo</th>
          <th>ludność</th>
        </tr>
        <tr>
          <td>Ratusz</td>
          <td>POZIOM 2</td>
          <td>100</td>
          <td>80</td>
          <td>50</td>
          <td>40</td>
          <td>10</td>
          <td>   <button class="popup btn" onclick="myFunction()">BUDUJ
            <span class="popuptext" id="myPopup">Brak surowców !</span>
          </button>
        </td>
        </tr>
        <tr>
        <td>Tartak</td>
          <td>POZIOM 2</td>
          <td>30</td>
          <td>80</td>
          <td>50</td>
          <td>20</td>
          <td>5</td>
          <td><button class="popup btn" onclick="myFunction()">BUDUJ
            <span class="popuptext" id="myPopup">Brak surowców !</span>
          </button></td>
        </tr>
      </table> 
      
  
    </div>

  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("th");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>



</body>
</html>