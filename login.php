<html>
    <head>
        <title>Login</title>
    </head>
    <body style="background-color: lightgray;">

        <form action="login.php" method="post">
            Usuario: <input name="usernameRegister" type='text'></input>
            Senha: <input name="passwordRegister" type='text'></input>
            <button type='submit'>Registrar</button>
        </form>
        <form action="Tibia1_3.php" method="post">
            Usuario: <input name="username" type='text'></input>
            Senha: <input name="password" type='text'></input>
            <button type='submit'>Entrar</button>
        </form>

    </body>
</html>

<?php

    /*
    #file_get_contents()
    #file_put_contents()

    $dados = file_get_contents('dados/dados1.txt');
    $dados_decode = json_decode($dados);

    echo "nivel = " . $dados_decode->{'nivel'} . ";";
    echo "hp = " . $dados_decode->{'hp'} . ";";
    
    echo "run_ajax();";

    file_put_contents('dados/dados1.txt', json_encode(array( 'nivel' => intval($_POST['nivel']), 'hp' => intval($_POST['hp']) )) );
    */
    
    require_once("dados/config.php");

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    $username = $_POST['usernameRegister'];
    $password = $_POST['passwordRegister'];
    $usuarioexistente = false;

    if($username != "" && $password != ""){

        $sql = "SELECT `username`, `password` ,`nivel`, `hp` FROM `ottibia` WHERE `username`='" . $username . "' AND `password`='" . $password . "'";
        
        $result = $conn->query($sql);

        while($obj = $result->fetch_object()){

            $usuarioexistente = true;

        }

        $result->close();
        
        if($usuarioexistente){
            echo "Usuario ja existente.";
        }else{

            $sql = "INSERT INTO `ottibia`(`username`, `password`, `nivel`, `hp`) VALUES ('" . $username . "', '" . $password . "', 1, 44)";
            
            $conn->query($sql);

            echo "Usuario registrado com sucesso.";

        }

    } else {
        echo "Usuario e Senha devem ser preenchidos.";
    }
    
    $conn->close();
    
?>