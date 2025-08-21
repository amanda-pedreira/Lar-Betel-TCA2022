<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="#">
    <!-- lembrar de linkar o css-->
    <title> ADM - Login </title>
</head>
<body>
    <h1> Digite seu login e sua senha para logar </h1>

    <form action="Ctrl/loginC.php" method="POST"> 
        <label> Login </label> <br>
        <input type="text" name="login" autocomplete="off" required> <br><br>

        <label> Senha </label> <br>
        <input type="password" name="senha" autocomplete="off" required> <br><br>

        <input type="submit" value="Logar">
    </form>
</body>
</html>
