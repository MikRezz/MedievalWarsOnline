<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tworzenie konta</title>
</head>
<body>

    <div id="wszystko" style="border: 3px solid black;float: left;margin: 15% 30% 20% 35%;">
<div id="rejestracja" style="float: left;padding: 10px;">
    <h2>Rejestracja</h2>
        <form method="POST" action="rejestracja.php">
                <b>Login:</b><br> <input type="text" name="nick"><br>
                <b>Hasło:</b> <br><input type="password" name="haslo1"><br>
                <b>Powtórz hasło:</b><br> <input type="password" name="haslo2"><br>
                <b>Email:</b><br> <input type="text" name="email"><br>
                <input type="submit" value="Utwórz konto" name="rejestruj">
                </form>
</div>
<div id="logowanie" style="float: left;padding: 10px 10px 10px 80px;">
    <h2>Logowanie</h2>
        <form method="POST" action="logowanie.php">
                <b>Login:</b> <br><input type="text" name="login"><br>
                <b>Hasło:</b> <br><input type="password" name="haslo"><br>
                <input type="submit" value="Zaloguj" name="loguj">
                </form>
</div>
    </div>
</body>
</html>