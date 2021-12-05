<html>
    <head>
        <link rel="shortcut icon" href="imagens/magic.ico" type="image/x-icon">
        <title>Magic Level</title>
        <meta charset="UTF-8">
        <script data-ad-client="ca-pub-2702297921966374" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <style>
            ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
                background-color: #333;
            }

            li {
                float: left;
            }

            li a {
                display: block;
                color: white;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
                font-family: "Lucida Console", "Courier New", monospace;
            }

            li a:hover:not(.active) {
                background-color: #111;
            }

            .active {
                background-color: #04AA6D;
            }

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
                margin: 10px;
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
        <script>
            function menuCheck(id){
                document.getElementById('op1').classList.remove('active');
                document.getElementById('op2').classList.remove('active');
                document.getElementById('op3').classList.remove('active');
                document.getElementById('op4').classList.remove('active');
                document.getElementById('op5').classList.remove('active');
                document.getElementById('op6').classList.remove('active');
                document.getElementById('op7').classList.remove('active');
                document.getElementById('op8').classList.remove('active');
                document.getElementById('op9').classList.remove('active');
                document.getElementById('op10').classList.remove('active');
                document.getElementById('op11').classList.remove('active');
                document.getElementById('op12').classList.remove('active');
                document.getElementById('op13').classList.remove('active');
                document.getElementById('op14').classList.remove('active');

                document.getElementById(id).classList.add('active');
            }
            function home(){
                document.getElementById("cartaoId").innerHTML = 'História:<br><br>Este mundo foi criado após muitos acontecimentos, e os dados coletados até hoje são que a sacola ao lado nos fornece uma poção de vida infinita, uma corda para sairmos desta escuridão e uma pá que ainda não sabemos onde utiliza-la, mas com certeza será útil... Segundo rumores ela será útil ao sairmos destas cavernas, mas viajantes disseram que há perigos pelo caminho e como recompensa no topo existe um NPC mestre em magias com tarefas que dão muita experiencia, e ele reinicia uma quest misteriosa... (por esta poção de vida infinita acredito que teremos muitos desafios pela frente)<br>- Ei alguém criou um teleporte para pular esta fase!<br>- «silêncio!»<img id="cartaoDeVisita" src="imagens/imagemCartaoDeVisita.png" title="game" alt="game" class="center">Novidades:<br><br>- A magia exura é a base de uma longa jornada;<br>- A magia exura gran é para os mais experientes;<br>- A magia exori é a nova sensação;<br>- O historiador está em busca de novos dados...<br>- Quest pricipal adicionada! Procure por ela a direita do mapa, mas tome cuidado!<br>- A magia exori gran chegou para ajudar nas suas tasks;<br>- A regeneração natural está a todo vapor, ela melhora de acordo ao seu level;<br>- Hotkeys números de 1-4, sem estar escrevendo algo;<br>- Um boss observando toda essa magia acontecendo, veio para mostrar o que é mágica de verdade.';
            }
            function news(){
                document.getElementById("cartaoId").innerHTML = 'Novidades:<br><br>- A magia exura é a base de uma longa jornada;<br><br>- A magia exura gran é para os mais experientes;<br><br>- A magia exori é a nova sensação;<br><br>- O historiador está em busca de novos dados...<br><br>- Quest pricipal adicionada! Procure por ela a direita do mapa, mas tome cuidado!<br><br>- A magia exori gran chegou para ajudar nas suas tasks;<br><br>- A regeneração natural está a todo vapor, ela melhora de acordo ao seu level;<br><br>- Hotkeys números de 1-4, sem estar escrevendo algo;<br><br>- Um boss observando toda essa magia acontecendo, veio para mostrar o que é mágica de verdade.';
            }
            function story(){
                document.getElementById("cartaoId").innerHTML = 'História:<br><br>Este mundo foi criado após muitos acontecimentos, e os dados coletados até hoje são que a sacola ao lado nos fornece uma poção de vida infinita, uma corda para sairmos desta escuridão e uma pá que ainda não sabemos onde utiliza-la, mas com certeza será útil... Segundo rumores ela será útil ao sairmos destas cavernas, mas viajantes disseram que há perigos pelo caminho e como recompensa no topo existe um NPC mestre em magias com tarefas que dão muita experiencia, e ele reinicia uma quest misteriosa... (por esta poção de vida infinita acredito que teremos muitos desafios pela frente)<br><br>- Ei alguém criou um teleporte para pular esta fase!<br><br>- «silêncio!»';
            }
            function photos(){
                document.getElementById("cartaoId").innerHTML = '<img id="cartaoDeVisita" src="imagens/imagemCartaoDeVisita.png" title="game" alt="game" class="center"><img id="cartaoDeVisita3" src="imagens/imagemCartaoDeVisita3.png" title="game" alt="game" class="center"><img id="cartaoDeVisita2" src="imagens/imagemCartaoDeVisita2.png" title="game" alt="game" class="center"><img id="cartaoDeVisita4" src="imagens/imagemCartaoDeVisita4.png" title="game" alt="game" class="center"><img id="cartaoDeVisita5" src="imagens/imagemCartaoDeVisita5.png" title="game" alt="game" class="center"><img id="cartaoDeVisita6" src="imagens/imagemCartaoDeVisita6.png" title="game" alt="game" class="center"><img id="cartaoDeVisita7" src="imagens/imagemCartaoDeVisita7.png" title="game" alt="game" class="center"><img id="cartaoDeVisita8" src="imagens/imagemCartaoDeVisita8.png" title="game" alt="game" class="center">';
            }
            function quests(){
                document.getElementById("cartaoId").innerHTML = 'Quests:<br><br>- Quest 1: Equipamentos Iniciais (Poção HP, Corda e Pá);<br><br>- Quest 2: Snake man (30xp, 70xp, 10xp);<br><br>- Quest 3: Dragon man (70xp, 130xp, 20xp);<br><br>- Quest 4: Mammoth man (100xp, 200xp, 30xp);<br><br>- Quest 5: Spider man (90xp, 130xp, 180xp).<img id="cartaoDeVisita3" src="imagens/imagemCartaoDeVisita3.png" title="game" alt="game" class="center"><img id="cartaoDeVisita2" src="imagens/imagemCartaoDeVisita2.png" title="game" alt="game" class="center"><img id="cartaoDeVisita6" src="imagens/imagemCartaoDeVisita6.png" title="game" alt="game" class="center">';
            }
            function tasks(){
                document.getElementById("cartaoId").innerHTML = 'Tasks:<br><br>- Task 1: Snake Task [0/100] (100xp);<br><br>- Task 2: Dragon Task [0/100] (200xp);<br><br>- Task 3: Mammoth Task [0/100] (300xp);<br><br>- Task 4: Spider Task [0/100] (400xp).';
            }
            function monsters(){
                document.getElementById("cartaoId").innerHTML = '-- Monsters --<br><br>- Snake<br><br><img id="snake" src="imagens/imagemSnake.png" title="game" alt="game" class=""><br><br>XP: 1<br>Vida: 51<br>Ataque: 1~50<br><br>- Dragon<br><br><img id="dragon" src="imagens/imagemDragon.png" title="game" alt="game" class=""><br><br>XP: 2<br>Vida: 101<br>Ataque: 50~150<br><br>- Mammoth<br><br><img id="mammoth" src="imagens/imagemMammoth.png" title="game" alt="game" class=""><br><br>XP: 3<br>Vida: 201<br>Ataque: 150~450<br><br>- Spider<br><br><img id="spider" src="imagens/imagemSpider.png" title="game" alt="game" class=""><br><br>XP: 4<br>Vida: 401<br>Ataque: 450~1350<br><br><br>-- Bosses --<br><br>- Orc Shaman<br><br><img id="orcshaman" src="imagens/imagemOrcShaman.gif" title="game" alt="game" class=""><br><br>XP: 100<br>Vida: 5000<br>Ataque: 1350~4050';
            }
            function spells(){
                document.getElementById("cartaoId").innerHTML = 'Spells:<br><br>- Exura<br>Cura: ((80)+(level*2))~((80)+(level*4))<br><br>- Exura Gran<br>Cura: ((120)+(level*3))~((120)+(level*6))<br><br>- Exori<br>Hit: Normal<br>Descrição: Ataca todos ao redor.<img id="cartaoDeVisita4" src="imagens/imagemCartaoDeVisita4.png" title="game" alt="game" class="center">- Exori Gran<br>Hit: Normal<br>Descrição: Ataca todos da tela.<img id="cartaoDeVisita5" src="imagens/imagemCartaoDeVisita5.png" title="game" alt="game" class="center">';
            }
            function items(){
                document.getElementById("cartaoId").innerHTML = 'Items:<br><br>- Poção HP<br>Cura: ((40)+(level))~((40)+(level*2))<br><br><img id="pocaohp" src="imagens/imagemPocaoHP.png" title="game" alt="game"><br><br>- Corda<br>Descrição: Utilizada para subir de um andar para o outro.<br><br><img id="corda" src="imagens/imagemCorda.png" title="game" alt="game"><br><br>- Pá<br>Descrição: Utilizada para cavar um buraco fechado para descer um andar.<br><br><img id="pa" src="imagens/imagemPa.png" title="game" alt="game">';
            }
            function fields(){
                document.getElementById("cartaoId").innerHTML = 'Fields:<br><br>- Teleport<br>Descrição: Utilizado para se mover longas distâncias.<br><br><img id="teleport" src="imagens/imagemTeleport1.png" title="game" alt="game"><br><br>- Buraco Aberto<br>Descrição: Leva para o andar de baixo ao andar sobre.<br><br><img id="buracoaberto" src="imagens/imagemBuracoAberto.png" title="game" alt="game"><br><br>- Buraco Fechado<br>Descrição: Pode ser aberto com uma pá, e leva para o andar de baixo.<br><br><img id="buracofechado" src="imagens/imagemBuracoFechado.png" title="game" alt="game"><br><br>- Chão com terra<br>Descrição: A terra vem do andar de cima, é possível usar a corda estando neste terreno para subir um andar.<br><br><img id="chaocomterra" src="imagens/imagemFundoBuraco.png" title="game" alt="game"><br><br>- Caixa<br>Descrição: Utilizada para segurar os Monstros, mas você pode subir ou descer e caminhar sobre elas.<br><br><img id="caixa" src="imagens/imagemParcel.png" title="game" alt="game">';
            }
            function mechanics(){
                document.getElementById("cartaoId").innerHTML = 'Mecânicas:<br><br>- Os personagens a cada level ganham 15 pontos de vida ou hitpoints, o seu ataque mínimo aumenta em 1(um), e o seu ataque máximo aumenta em 2(dois), os valores de regeneração natural do seu personagem são equivalentes ao do seu ataque;<br><br>- As criaturas entram em combate quando você se aproxima delas, clique sobre elas para combatê-las, você pode ganhar alguma experiência assim;<br><br>- Os ataques recebidos ou realizados aparecem sobre o personagem ou criatura na cor amarela, e as curas e regenerações na cor verde;<br><br>- As magias são conjuradas, então você pode escrevê-las e enviá-las com o enter, que as mesmas serão executadas. Também pode conjurar uma magia, usando os números de 1-4, sem estar escrevendo algo. Ou simplesmente clicar em uma das magias disponíveis na caixa de magias;<br><br>- Controle o seu bot: "bot up", "bot right", "bot down" e "bot left".';
            }
            function movies(){
                document.getElementById("cartaoId").innerHTML = '<iframe class="center" width="757" height="473" src="https://www.youtube.com/embed/zCH4438zCKU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
            }
            function downloads(){
                document.getElementById("cartaoId").innerHTML = 'Download Android:<br><br><a href="https://drive.google.com/file/d/1dijuEBdXMptRIwxZ2yalLrpwjv2PXa6b/view?usp=sharing">Magic Level v0.2.8</a><br><br><a href="https://drive.google.com/file/d/1AJLxTFEEDtUb0dgdJawerWbmcNdVvJBs/view?usp=sharing">Magic Level v0.1.8</a>';
            }
            function code(){
                document.getElementById("cartaoId").innerHTML = 'Code Web:<br><br><a href="https://github.com/adameverson/tibia-web">Magic Level v1.19.79</a><br><br>Code Android:<br><br><a href="https://github.com/adameverson/tibia-general">Magic Level v0.2.8</a>';
            }
        </script>
    </head>
    <body style="background-color: #ccffff;">

        <ul>
            <li><a id="op1" class="active" href="#home" onclick="menuCheck('op1'); home();">Home</a></li>
            <li><a id="op2" href="#news" onclick="menuCheck('op2'); news();">News</a></li>
            <li><a id="op3" href="#story" onclick="menuCheck('op3'); story();">Story</a></li>
            <li><a id="op4" href="#photos" onclick="menuCheck('op4'); photos();">Photos</a></li>
            <li><a id="op5" href="#quests" onclick="menuCheck('op5'); quests();">Quests</a></li>
            <li><a id="op6" href="#tasks" onclick="menuCheck('op6'); tasks();">Tasks</a></li>
            <li><a id="op7" href="#monsters" onclick="menuCheck('op7'); monsters();">Monsters</a></li>
            <li><a id="op8" href="#spells" onclick="menuCheck('op8'); spells();">Spells</a></li>
            <li><a id="op9" href="#items" onclick="menuCheck('op9'); items();">Items</a></li>
            <li><a id="op10" href="#fields" onclick="menuCheck('op10'); fields();">Fields</a></li>
            <li><a id="op11" href="#mechanics" onclick="menuCheck('op11'); mechanics();">Mechanics</a></li>
            <li><a id="op12" href="#movies" onclick="menuCheck('op12'); movies();">Movies</a></li>
            <li><a id="op13" href="#downloads" onclick="menuCheck('op13'); downloads();">Download</a></li>
            <li><a id="op14" href="#code" onclick="menuCheck('op14'); code();">Code</a></li>
        </ul>

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
            echo "<div style=\"text-align: center; font-family: 'Lucida Console', 'Courier New', monospace;\">Usuário ja existente. Aspas simples não é um caracter válido.</div>";
        }else{

            $sql = "INSERT INTO `ottibia`(`username`, `password`, `x`, `y`, `direcao`, `nivel`, `hp`, `outfit`, `mensagem`, `json`) VALUES ('" . $username . "', '" . $password . "', 5, 6, 2, 0, 176, '" . $outfit . "', '', '{\"json\":[{\"itens\":\"0,0,0\"},{\"magias\":\"0,0,0,0\"},{\"tasks\":\"0,0\"},{\"quests\":\"0,0,0,0,0\"}]}')";
            
            $conn->query($sql);

            echo "<div style=\"text-align: center; font-family: 'Lucida Console', 'Courier New', monospace;\">Usuário registrado com sucesso.</div>";

        }

    } else {
        echo "<div style=\"text-align: center; font-family: 'Lucida Console', 'Courier New', monospace;\">Usuário e Senha devem ser preenchidos. Aspas simples não é um caracter válido.</div>";
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

<div id="cartaoId" class="cartao" title="game" alt="game">
    História:
    <br><br>Este mundo foi criado após muitos acontecimentos, e os dados coletados até hoje são que a sacola ao lado nos fornece uma poção de vida infinita, uma corda para sairmos desta escuridão e uma pá que ainda não sabemos onde utiliza-la, mas com certeza será útil... Segundo rumores ela será útil ao sairmos destas cavernas, mas viajantes disseram que há perigos pelo caminho e como recompensa no topo existe um NPC mestre em magias com tarefas que dão muita experiencia, e ele reinicia uma quest misteriosa... (por esta poção de vida infinita acredito que teremos muitos desafios pela frente)
    <br>- Ei alguém criou um teleporte para pular esta fase!
    <br>- «silêncio!»
        <img id="cartaoDeVisita" src="imagens/imagemCartaoDeVisita.png" title="game" alt="game" class="center">
    Novidades:

    <br><br>- A magia exura é a base de uma longa jornada;

    <br>- A magia exura gran é para os mais experientes;

    <br>- A magia exori é a nova sensação;

    <br>- O historiador está em busca de novos dados...

    <br>- Quest pricipal adicionada! Procure por ela a direita do mapa, mas tome cuidado!

    <br>- A magia exori gran chegou para ajudar nas suas tasks;

    <br>- A regeneração natural está a todo vapor, ela melhora de acordo ao seu level;

    <br>- Hotkeys números de 1-4, sem estar escrevendo algo;

    <br>- Um boss observando toda essa magia acontecendo, veio para mostrar o que é mágica de verdade.
</div>

<audio id="myAudio" preload autoplay loop>
  <source src="musicas/ToPTrack01.mp3" type="audio/mpeg">
  Your browser does not support the audio tag.
</audio>

<div style="text-align: center; font-family: 'Lucida Console', 'Courier New', monospace;">
    ©2021 magiclevel.ml. All rights reserved. v1.19.79
</div>