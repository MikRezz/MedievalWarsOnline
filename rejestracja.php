<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rejestracja</title>
</head>
<body>
    <div>
        <?php
         require_once "connect.php";
        
         $nick = $_POST["nick"];
         $haslo = $_POST["haslo1"];
         $mail = $_POST["email"];
         $data = date("Y-m-d");
         $czas=date("H:i:s");

         $query = mysqli_query($con,"SELECT * FROM Uzytkownicy WHERE nick ='$nick';");
         $lcount = mysqli_num_rows($query);
         $query2 = mysqli_query($con,"SELECT * FROM Uzytkownicy WHERE email ='$mail';");
         $lcount2 = mysqli_num_rows($query2);

        

         if($lcount == 1){
           echo 'Przepraszamy, ale podany użytkownik już istnieje w bazie.';
           header('Refresh: 5; url=main.php');
         } 
         else {
            if($lcount2 == 1){
                echo 'Przepraszamy, ale podany email został już wykorzystany.';
                header('Refresh: 5; url=main.php');
              } 
              else {
                $sql = "INSERT INTO Uzytkownicy (id,nick,haslo,email,data,czas) VALUES (' ','$nick','$haslo','$mail','$data','$czas')";
                $res = mysqli_query($con,$sql);
                if ($res) {
                 echo 'Prawidłowo dodano do bazy danych!<br> Witaj '.$nick.' na stronce!<br> Zostaniesz automatycznie przekierowany do strony logowania!';
                header('Refresh: 3; url=main.php');
                $zapytanie2 = "SELECT id FROM Uzytkownicy WHERE nick='$nick'";
         $wynik2 = mysqli_query($con,$zapytanie2);
         while($row = mysqli_fetch_assoc($wynik2)){
            $userid = $row["id"];}
            $sql = "INSERT INTO surowce (user_id, drewno, kamien, glina, zboze, zelazo) VALUES ('$userid',100,100,100,300,100)";
            $dodajsur = mysqli_query($con,$sql);
                }
                else{
                    echo " nie dziala";
                    }
           }
         }
      
         
        mysqli_close($con);	
        ?>
        
        <?
exit;

/* 
*/
            ?>
</div>
</body>
</html>