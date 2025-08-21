<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/loginadm/loginadm.css">
    <link rel="shortcut icon" href="../../../imagens/android-icon-192x192.png" type="image/x-icon">
    <title> ADM - Login </title>
</head>
<body>


<div class="main-login">

     <div class="left-login">
         <h1>Insira os dados ao lado para logar</h1> 
         <img src="../../grandma-animate (1).svg" class="imagem-direita">
    <?php
        ini_set('display_errors', 0 );
        error_reporting(0);
        include 'loginC.php';

        if(!isset($login) || !isset($senha)){
            $login = "admin";
            $senha = "123";
        }

        if(@$login != "admin" || @$senha != "123"){
            echo $mens;
        }
    
        ?> 
    </div> 

    <form action="loginC.php" method="POST"> 
    <div class="right-login">
            <div class="card-login">
                <h1>LOGIN</h1>
                <div class="textfield">
                    <label for="usário">Usuário</label>
                    <input type="text" name="login" autocomplete="off" required    placeholder="usuário"> 
            </div> 

                <div class="textfield">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" autocomplete="off" required placeholder="senha"> 
                </div>
                <input type="submit" value="Logar" class="btn-login">
            </div>
    </div>
</div>
</form>

</body>
</html>
