<html>
    <head>
        <title>Login</title>
        <style>
            table, th, td {
                border: 1px solid black;
                border-collapse: collapse;
            }
            th, td {
                padding: 15px;
                text-align: left;
            }
            #t01 {
                width: 50%;    
                background-color: #f1f1c1;
                margin: 15px;
                font-family: "Lucida Console", "Courier New", monospace;
                font-weight: bold;
            }
        </style>
    </head>
    <body style="background-color: lightgray;">

        <form action="login.php" method="post">
            Usuario: <input name="usernameRegister" type='text'></input>
            Senha: <input type="password" name="passwordRegister" type='text'></input>
            <button type='submit'>Registrar</button>
        </form>
        <form action="Tibia1_3.php" method="post">
            Usuario: <input name="username" type='text'></input>
            Senha: <input type="password" name="password" type='text'></input>
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

    // Check connection
    if ($conn->connect_error) {
        die("Banco de Dados temporariamente desabilitado!");
    }

    $username = $_POST['usernameRegister'];
    $password = $_POST['passwordRegister'];
    $usuarioexistente = false;

    if($username != "" && $password != ""){

        $sql = "SELECT `username`, `password` ,`nivel`, `hp` FROM `ottibia` WHERE `username`='" . $username . "'";
        
        $result = $conn->query($sql);

        while($obj = $result->fetch_object()){

            $usuarioexistente = true;

        }

        $result->close();
        
        if($usuarioexistente){
            echo "Usuario ja existente.";
        }else{

            $sql = "INSERT INTO `ottibia`(`username`, `password`, `nivel`, `hp`) VALUES ('" . $username . "', '" . $password . "', 0, 176)";
            
            $conn->query($sql);

            echo "Usuario registrado com sucesso.";

        }

    } else {
        echo "Usuario e Senha devem ser preenchidos.";
    }

    $sql = "SET @n = 0";

    $conn->query($sql);

    $sql = "SELECT @n := @n+1 AS `ordem`, `username`, `nivel` FROM `ottibia` WHERE 1 ORDER BY `nivel` DESC LIMIT 5";
        
    $result = $conn->query($sql);

    echo "<table id=\"t01\">";

    echo "<tr>";
    echo "<th>Ranking</th>";
    echo "<th>Username</th>";
    echo "<th>Level</th>";
    echo "</tr>";

    while($obj = $result->fetch_object()){

        $expaux = $obj->nivel;
        $lvl=0;
        for($lvl=1; $expaux >= 0; $lvl++){
            $expaux = $expaux - $lvl;
        }
        $lvl--;

        echo "<tr>";
        echo "<td>" . $obj->ordem . "º</td>";
        echo "<td>" . $obj->username . "</td>";
        echo "<td>" . $lvl . "</td>";
        echo "</tr>";

    }

    echo "</table>";

    $result->close();
    
    $conn->close();
    
?>
