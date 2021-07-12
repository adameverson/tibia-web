<html>
    <head>
        <link rel="shortcut icon" href="imagens/magic.ico" type="image/x-icon">
        <title>Magic Level</title>
        <meta charset="UTF-8">
        <script data-ad-client="ca-pub-2702297921966374" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
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
            .center {
                display: block;
                margin-left: auto;
                margin-right: auto;
                margin-top: 10px; 
                margin-bottom: 10px; 
            }
            .cartao {
                border: 2px solid white;
                padding: 10px;
                border-radius: 12px;
                font-family: "Lucida Console", "Courier New", monospace;
                margin-bottom: 50px; 
            }
        </style>
    </head>
    <body style="background-color: #ccffff;">

        <form action="http://magiclevel.ml" method="post">
            Usuário: <input name="usernameRegister" type='text' maxlength="20"></input>
            Senha: <input type="password" name="passwordRegister" type='text' maxlength="20"></input>
            <input type="radio" id="male" name="gender" value="M" checked>
            <label for="male">Masculino</label>
            <input type="radio" id="female" name="gender" value="F">
            <label for="female">Feminino</label>
            <button type='submit' class="button1"><span>Registrar</span></button>
        </form>
        <form action="game.php" method="post">
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

            $sql = "INSERT INTO `ottibia`(`username`, `password`, `x`, `y`, `direcao`, `nivel`, `hp`, `outfit`, `mensagem`, `json`) VALUES ('" . $username . "', '" . $password . "', 5, 6, 2, 0, 176, '" . $outfit . "', '', '{\"json\":[{\"itens\":[0,0,0,0]},{\"magias\":[0,0,0,0]},{\"tasks\":[0,0]},{\"quests\":[0,0,0,0]}]}')";
            
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

<div title="game" alt="game" class="cartao" style="width: document.getElementById('cartaoDeVisita').style.width; height: document.getElementById('cartaoDeVisita').style.height;">
História:
<br>Este mundo foi criado após muitos acontecimentos, e os dados coletados até hoje são que a sacola ao lado nos fornece uma poção de vida infinita, uma corda para sairmos desta escuridão e uma pá que ainda não sabemos onde utiliza-la, mas com certeza será útil... Segundo rumores ela será útil ao sairmos destas cavernas, mas viajantes disseram que há perigos pelo caminho e como recompensa no topo existe um NPC mestre em magias com tarefas que dão muita experiencia, e ele reinicia uma quest misteriosa... (por esta poção de vida infinita acredito que teremos muitos desafios pela frente)
<br>- Ei alguém criou um teleporte para pular esta fase!
<br>- «silêncio!»
    <img id="cartaoDeVisita" src="imagens/imagemCartaoDeVisita.png" title="game" alt="game" class="center">
Novidades:

<br>- A magia exura é a base de uma longa jornada;

<br>- A magia exura gran é para os mais experientes;

<br>- A magia exori é a nova sensação;

<br>- O historiador está em busca de novos dados...

<br>- Quest pricipal adicionada! Procure por ela a direita do mapa, mas tome cuidado!

<br>- A magia exori gran chegou para ajudar nas suas tasks;

<br>- A regeneração natural está a todo vapor, ela melhora de acordo ao seu level.
</div>

<audio id="myAudio" preload autoplay loop>
  <source src="musicas/ToPTrack01.mp3" type="audio/mpeg">
  Your browser does not support the audio tag.
</audio>

<div style="text-align: center; font-family: 'Lucida Console', 'Courier New', monospace;">
    ©2021 magiclevel.ml. All rights reserved. v1.8.56
</div>