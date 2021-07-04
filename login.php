<html>
    <head>
        <title>Magic Level</title>
        <meta charset="UTF-8">
        <style>
            table, th, td {
                border: 1px solid white;
                border-collapse: collapse;
            }
            th, td {
                padding: 15px;
                text-align: left;
            }
            #t01 {
                width: 50%;    
                background-color: #4CAF50;
                color: White;
                margin: 15px;
                font-family: "Lucida Console", "Courier New", monospace;
                font-weight: bold;
                margin-left: auto;
                margin-right: auto;
            }

            .button1 {
                position: relative;
                background-color: #4CAF50;
                border: none;
                font-size: 28px;
                color: #FFFFFF;
                padding: 10px;
                width: 200px;
                text-align: center;
                transition-duration: 0.4s;
                text-decoration: none;
                overflow: hidden;
                cursor: pointer;
                margin: 5px;
                border-radius: 4px;
            }

            .button2 {
                display: inline-block;
                border-radius: 4px;
                background-color: #4CAF50; /* Green */
                border: none;
                color: #FFFFFF;
                text-align: center;
                font-size: 28px;
                padding: 10px;
                width: 200px;
                transition: all 0.5s;
                cursor: pointer;
                margin: 5px;
            }

            .button1:after {
                content: "";
                background: #f1f1f1;
                display: block;
                position: absolute;
                padding-top: 300%;
                padding-left: 350%;
                margin-left: -20px !important;
                margin-top: -120%;
                opacity: 0;
                transition: all 0.8s
            }

            .button1:active:after {
                padding: 0;
                margin: 0;
                opacity: 1;
                transition: 0s
            }

            .button2 span {
                cursor: pointer;
                display: inline-block;
                position: relative;
                transition: 0.5s;
            }

            .button2 span:after {
                content: '\00bb';
                position: absolute;
                opacity: 0;
                top: 0;
                right: -20px;
                transition: 0.5s;
            }

            .button2:hover span {
                padding-right: 25px;
            }

            .button2:hover span:after {
                opacity: 1;
                right: 0;
            }
            form {
                border: 2px solid white;
                padding: 10px;
                border-radius: 12px;
                font-family: "Lucida Console", "Courier New", monospace;
            }
        </style>
    </head>
    <body style="background-color: #ccffff;">

        <form action="login.php" method="post">
            Usuário: <input name="usernameRegister" type='text' maxlength="20"></input>
            Senha: <input type="password" name="passwordRegister" type='text' maxlength="20"></input>
            <input type="radio" id="male" name="gender" value="M" checked>
            <label for="male">Masculino</label>
            <input type="radio" id="female" name="gender" value="F">
            <label for="female">Feminino</label>
            <button type='submit' class="button1"><span>Registrar</span></button>
        </form>
        <form action="Tibia1_3.php" method="post">
            Usuário: <input name="username" type='text' maxlength="20"></input>
            Senha: <input type="password" name="password" type='text' maxlength="20"></input>
            <button type='submit' class="button2"><span>Entrar</span></button>
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
    $outfit = $_POST['gender'];
    $usuarioexistente = false;

    if($username != "" && $password != ""){

        $sql = "SELECT `username`, `password` ,`nivel`, `hp` FROM `ottibia` WHERE `username`='" . $username . "'";
        
        $result = $conn->query($sql);

        while($obj = $result->fetch_object()){

            $usuarioexistente = true;

        }

        $result->close();
        
        if($usuarioexistente){
            echo "<div style=\"text-align: center; font-family: 'Lucida Console', 'Courier New', monospace;\">Usuário ja existente.</div>";
        }else{

            $sql = "INSERT INTO `ottibia`(`username`, `password`, `nivel`, `hp`, `outfit`) VALUES ('" . $username . "', '" . $password . "', 0, 176, '" . $outfit . "')";
            
            $conn->query($sql);

            echo "<div style=\"text-align: center; font-family: 'Lucida Console', 'Courier New', monospace;\">Usuário registrado com sucesso.</div>";

        }

    } else {
        echo "<div style=\"text-align: center; font-family: 'Lucida Console', 'Courier New', monospace;\">Usuário e Senha devem ser preenchidos.</div>";
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

<audio id="myAudio" preload autoplay loop>
  <source src="musicas/ToPTrack01.mp3" type="audio/mpeg">
  Your browser does not support the audio tag.
</audio>

<div style="text-align: center; font-family: 'Lucida Console', 'Courier New', monospace;">
    ©2021 magiclevel.ml. All rights reserved. v1.5.45
</div>
