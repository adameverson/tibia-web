<html>
    <head>
        <link rel="shortcut icon" href="imagens/magic.ico" type="image/x-icon">
        <title>Magic Level</title>
        <meta charset="UTF-8">
        <script data-ad-client="ca-pub-2702297921966374" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2702297921966374"
     crossorigin="anonymous"></script>
        <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
        <script>

            var funcMoverPersonagem;
            var loop;
            var utilizarIten;
            var utilizarMagia;
            var dialogo;
            var pressKey;
            var visibilityEquipamentos;

            var moverPersonagem = [0,0];
            var nivelDeSolo = 1;
            var outfit = "M";

            var inativo = false;
            var datainicioinatividade = new Date();

            var  flagEquipamento = false;
            
            var identificadorDoChat = 0;
            var mensagensDoChatDefault = "Bem Vindo!";
            var mensagensDoChatServerLog = "";
            var mensagensDoChatNpc = "";
            var nivelDeConversaNpc = 0;

            var mensagensDoChatHistoria1 = "";
            //mensagensDoChatHistoria1 += "Servidor em Manutenção!\n\n";
            mensagensDoChatHistoria1 += "História:\n\nEste mundo foi criado após muitos acontecimentos, e os dados coletados até hoje são que a sacola ao lado nos fornece uma poção de vida infinita, uma corda para sairmos desta escuridão e uma pá que ainda não sabemos onde utiliza-la, mas com certeza será útil... Segundo rumores ela será útil ao sairmos destas cavernas, mas viajantes disseram que há perigos pelo caminho e como recompensa no topo existe um NPC mestre em magias com tarefas que dão muita experiencia, e ele reinicia uma quest misteriosa... (por esta poção de vida infinita acredito que teremos muitos desafios pela frente)\n\n- Ei alguém criou um teleporte para pular esta fase!\n\n- «silêncio!»";
            var mensagensDoChatHistoriaNovidades1 = "";
            //mensagensDoChatHistoriaNovidades1 += "Servidor em Manutenção!\n\n";
            mensagensDoChatHistoriaNovidades1 += "Novidades:\n\n- A magia exura é a base de uma longa jornada;\n\n- A magia exura gran é para os mais experientes;\n\n- A magia exori é a nova sensação;\n\n- O historiador está em busca de novos dados...\n\n- Quest pricipal adicionada! Procure por ela a direita do mapa, mas tome cuidado!\n\n- A magia exori gran chegou para ajudar nas suas tasks;\n\n- A regeneração natural está a todo vapor, ela melhora de acordo ao seu level;\n\n- Hotkeys números de 1-4, sem estar escrevendo algo;\n\n- Um boss observando toda essa magia acontecendo, veio para mostrar o que é magia!\n\n- Equipamentos disponíveis, procure pelo mapa, uma jangada pode te ajudar.";

        </script>
    </head>
    <body onload="setInterval('loop()', 1000); setInterval('funcMoverPersonagem()', 10);" onKeyPress="pressKey(event)">
        <div id='map'>
            
        </div>

        <div id='chathistoria' title='historia' style='position: fixed; top: 0; left: 0; width: 178; height:414; background-color: lightgray; opacity: 1; visibility: hidden;'>
            <div id='campoDoChatHistoria' title='historia' style='float: left; top: 0; left: 0; margin: 1; width: 174; height: 390; background-color: #ccffff;'>
                <textarea id="textareaChatHistoria" name="textareaChatHistoria" title='historia' rows="24" cols="21" style="resize: none;" disabled></textarea>
            </div>
            <div id='opcoesHistoria' title='opcoes historia' style='position: absolute; bottom: 0; left: 0; margin: 1; width: 176; height: 20; background-color: #ccffff;'>
                <button id='opcaoPular' title='pular' style='float: left; bottom: 0; left: 10; margin: 1; padding: 2; width: 40; height: 20; background-color: gray; color: white; font-family: "Lucida Console", "Courier New", monospace; font-size: x-small;' onclick="document.getElementById('chathistoria').style.visibility = 'hidden'; datainicioinatividade = new Date();">
                    Pular
                </button>
                <button id='opcaoProxima' title='proxima' style='float: left; bottom: 0; left: 10; margin: 1; padding: 2; width: 55; height: 20; background-color: gray; color: white; font-family: "Lucida Console", "Courier New", monospace; font-size: x-small;' onclick="document.getElementById('textareaChatHistoria').scrollTop = 0; document.getElementById('textareaChatHistoria').value = mensagensDoChatHistoria1; datainicioinatividade = new Date();">
                    Historia
                </button>
                <button id='opcaoNovidades' title='novidades' style='float: left; bottom: 0; left: 10; margin: 1; padding: 2; width: 75; height: 20; background-color: gray; color: white; font-family: "Lucida Console", "Courier New", monospace; font-size: x-small;' onclick="document.getElementById('textareaChatHistoria').scrollTop = 0; document.getElementById('textareaChatHistoria').value = mensagensDoChatHistoriaNovidades1; datainicioinatividade = new Date();">
                    Novidades
                </button>
            </div>
        </div>

        <div id='conversa' title='conversa' style='position: fixed; top: 160; left: 600; width: 178; background-color: lightgray; border-style: solid; border-color: gray; visibility: hidden;'>
            <button type="submit" id='opcao1' title='opcao1' style='top: 0; left: 0; margin: 1; width: 174; height: 44; background-color: #4CAF50; color: white; border-radius: 15px 50px; border: none; visibility: hidden;' onclick="if(document.getElementById('opcao1').style.visibility == 'visible'){ document.getElementById('campoDeEscritaInput').value = document.getElementById('opcao1').title; dialogo(); datainicioinatividade = new Date();}">
                Opcao 1
            </button>
            <button type="submit" id='opcao2' title='opcao2' style='top: 0; left: 0; margin: 1; width: 174; height: 44; background-color: #4CAF50; color: white; border-radius: 15px 50px; border: none; visibility: hidden;' onclick="if(document.getElementById('opcao2').style.visibility == 'visible'){ document.getElementById('campoDeEscritaInput').value = document.getElementById('opcao2').title; dialogo(); datainicioinatividade = new Date();}">
                Opcao 2
            </button>
            <button type="submit" id='opcao3' title='opcao3' style='top: 0; left: 0; margin: 1; width: 174; height: 44; background-color: #4CAF50; color: white; border-radius: 15px 50px; border: none; visibility: hidden;' onclick="if(document.getElementById('opcao3').style.visibility == 'visible'){ document.getElementById('campoDeEscritaInput').value = document.getElementById('opcao3').title; dialogo(); datainicioinatividade = new Date();}">
                Opcao 3
            </button>
            <button type="submit" id='opcao4' title='opcao4' style='top: 0; left: 0; margin: 1; width: 174; height: 44; background-color: #4CAF50; color: white; border-radius: 15px 50px; border: none; visibility: hidden;' onclick="if(document.getElementById('opcao4').style.visibility == 'visible'){ document.getElementById('campoDeEscritaInput').value = document.getElementById('opcao4').title; dialogo(); datainicioinatividade = new Date();}">
                Opcao 4
            </button>
            <button type="submit" id='opcao5' title='opcao5' style='top: 0; left: 0; margin: 1; width: 174; height: 44; background-color: #4CAF50; color: white; border-radius: 15px 50px; border: none; visibility: hidden;' onclick="if(document.getElementById('opcao5').style.visibility == 'visible'){ document.getElementById('campoDeEscritaInput').value = document.getElementById('opcao5').title; dialogo(); datainicioinatividade = new Date();}">
                Opcao 5
            </button>
        </div>
        
        <img id='personagem1' src='imagens/person1.png' alt='personagem' title='personagem' style='position:fixed; top: 305; left: 365; width: 50; height: 50;' onclick="document.getElementById('menuopcoes').style.visibility = 'visible';"></img>
        <div id='nomePersonagem1' style='position:fixed; top: 305; left: 365; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
        </div>
        <div id='barraHpVaziaPersonagem1' title='hp' style='position:fixed; top: 301; left: 365; width: 50; height: 3; background-color: black;'>
                
        </div>
        <div id='barraHpPersonagem1' title='hp' style='position:fixed; top: 301; left: 365; width: 50; height: 3; background-color: mediumseagreen;'>
    
        </div>
        <img id='fala1' src='imagens/imagemFalaVazia.png' alt='fala' style='position:fixed; top: 305; left: 365;'></img>
        <div id='mensagemDiv3' style='position:fixed; top: 315; left: 365; width: 250; text-align: left; color: yellow; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
        </div>
        <div id='mensagemDiv2' style='position:fixed; top: 640; left: 270; text-align: center; color: white; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
        </div>
        <div id='mensagemDiv1' style='position:fixed; top: 220; left: 270; width: 300; text-align: center; color: white; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
        </div>
        <div id='menuopcoes' style='position:fixed; top: 330; left: 390; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
            <button style='margin: 1; background-color: #4CAF50; color: white; border-radius: 15px 50px; border: none;' onclick="outfit = 'P'; document.getElementById('menuopcoes').style.visibility = 'hidden';">
                Outfit 1
            </button>
            <button style='margin: 1; background-color: #4CAF50; color: white; border-radius: 15px 50px; border: none;' onclick="outfit = 'W'; document.getElementById('menuopcoes').style.visibility = 'hidden';">
                Outfit 2
            </button>
            <button style='margin: 1; background-color: #4CAF50; color: white; border-radius: 15px 50px; border: none;' onclick="outfit = 'M'; document.getElementById('menuopcoes').style.visibility = 'hidden';">
                Outfit 3
            </button>
            <button style='margin: 1; background-color: #4CAF50; color: white; border-radius: 15px 50px; border: none;' onclick="outfit = 'F'; document.getElementById('menuopcoes').style.visibility = 'hidden';">
                Outfit 4
            </button>
        </div>
        <img id='mensagem1' src='imagens/imagemEquipamentos.png' alt='mensagem' title='mensagem' style='position:fixed; top: 305; left: 365; visibility: hidden;'></img>
        <div id='ok' alt='ok' title='ok' style='position:fixed; top: 422; left: 568; width: 35; height: 16; visibility: hidden;' onclick="if(document.getElementById('mensagem1').style.visibility == 'visible'){document.getElementById('mensagem1').style.visibility = 'hidden'; document.getElementById('ok').style.visibility = 'hidden'; document.getElementById('cancel').style.visibility = 'hidden'; if(!inativo){ hp++; if(nivelDeSolo == 2){ nivelDeSolo--; document.getElementById('personagem1').style.top = parseInt(document.getElementById('personagem1').style.top.split('p')[0]) + 10; document.getElementById('personagem1').style.left = parseInt(document.getElementById('personagem1').style.left.split('p')[0]) + 10;}} document.getElementById('fala1').src = 'imagens/imagemFalaVoceJaTemBless.png'; setTimeout(function(){document.getElementById('fala1').src = 'imagens/imagemFalaVazia.png';}, 2000); document.getElementById('conversa').style.visibility = 'hidden'; document.getElementById('opcao1').style.visibility = 'hidden'; document.getElementById('opcao2').style.visibility = 'hidden'; document.getElementById('opcao3').style.visibility = 'hidden'; document.getElementById('opcao4').style.visibility = 'hidden'; document.getElementById('opcao5').style.visibility = 'hidden'; nivelDeConversaNpc = 0; datainicioinatividade = new Date();}">
        
        </div>
        <div id='cancel' alt='cancel' title='cancel' style='position:fixed; top: 422; left: 615; width: 35; height: 16; visibility: hidden;' onclick="if(document.getElementById('mensagem1').style.visibility == 'visible'){document.getElementById('mensagem1').style.visibility = 'hidden'; document.getElementById('ok').style.visibility = 'hidden'; document.getElementById('cancel').style.visibility = 'hidden'; if(!inativo){ hp++; if(nivelDeSolo == 2){ nivelDeSolo--; document.getElementById('personagem1').style.top = parseInt(document.getElementById('personagem1').style.top.split('p')[0]) + 10; document.getElementById('personagem1').style.left = parseInt(document.getElementById('personagem1').style.left.split('p')[0]) + 10;}} document.getElementById('fala1').src = 'imagens/imagemFalaVoceJaTemBless.png'; setTimeout(function(){document.getElementById('fala1').src = 'imagens/imagemFalaVazia.png';}, 2000); document.getElementById('conversa').style.visibility = 'hidden'; document.getElementById('opcao1').style.visibility = 'hidden'; document.getElementById('opcao2').style.visibility = 'hidden'; document.getElementById('opcao3').style.visibility = 'hidden'; document.getElementById('opcao4').style.visibility = 'hidden'; document.getElementById('opcao5').style.visibility = 'hidden'; nivelDeConversaNpc = 0; datainicioinatividade = new Date();}">
        
        </div>

        <!--
        <div id='painelEsquerda1' title='painel' style='position:fixed; top: 0; left: 0; width: 60; height:100%; background-color: gray;'></div>
        <div id='painelCima1' title='painel' style='position:fixed; top: 0; left: 0; width: 100%; height:60; background-color: gray;'></div>
        -->
        <div id='painelBaixo1' title='painel' style='position:fixed; top: 660; left: 0; width: 100%; height:100%; background-color: #ccffff;'></div>
        <div id='painelDireita1' title='painel' style='position:fixed; top: 0; left: 780; width: 100%; height:100%; background-color: #ccffff;'></div>

        <div id='conversaLogout' title='logout' style='position: fixed; top: 0; left: 600; width: 178; background-color: lightgray; border-style: solid; border-color: gray; visibility: hidden;'>
            <div id='logoutPergunta1' title='logout' style='top: 0; left: 0; margin: 1; width: 174; height: 44; color: white; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                Você tem certeza que deseja sair?
            </div>
            <form action="https://magiclevel.ml">
                <button type="submit" id='logoutOpcao1' title='Sim' style='top: 0; left: 0; margin: 1; width: 174; height: 44; background-color: #4CAF50; color: white; border-radius: 15px 50px; border: none; visibility: hidden;'>
                    Sim
                </button>
            </form>
            <button type="submit" id='logoutOpcao2' title='Não' style='top: 0; left: 0; margin: 1; width: 174; height: 44; background-color: #4CAF50; color: white; border-radius: 15px 50px; border: none; visibility: hidden;' onclick="if(document.getElementById('logoutOpcao2').style.visibility == 'visible'){ document.getElementById('logoutPergunta1').style.visibility = 'hidden'; document.getElementById('logoutOpcao1').style.visibility = 'hidden'; document.getElementById('logoutOpcao2').style.visibility = 'hidden'; datainicioinatividade = new Date();}">
                Não
            </button>
        </div>

        <div id='inventario' title='inventario' style='position: fixed; top: 0; right: 0; width: 178; height:414; background-color: #ccffff; border-style: solid; border-color: gray;'>
            <div id='hp' title='hp' style='position: absolute; top: 0; left: 0; margin: 1; width: 44; height: 20; background-color: tomato;'>
                
            </div>
            <div id='hpvalor' title='hp' style='position: fixed; top: 9; right: 0; width: 178; height: 20; text-align: center; color: white; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
                
            </div>
            <div id='skills' title='skills' style='position: absolute; top: 20; left: 0; margin: 1; width: 176; height: 74; background-color: lightgray;'>
                <div id='nomeDasSkills' title='skills' style='top: 0; left: 10; margin: 1; padding: 2; width: 170; height: 10; background-color: gray; color: white; font-family: "Lucida Console", "Courier New", monospace; font-size: x-small;'>
                    Skills
                </div>
                <div id='campoDasSkills1' title='skills' style='float: left; top: 0; left: 0; margin: 1; width: 174; height: 62; background-color: gray;'>
                    <div id='level' title='level' style='position: fixed; top: 50; right: 0; width: 178; height: 20; text-align: left; color: white; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>

                    </div>
                    <div id='levelvalor' title='level' style='position: fixed; top: 50; right: 7; width: 178; height: 20; text-align: right; color: white; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>

                    </div>
                    <div id='barraxp' title='xp' style='position: fixed; top: 65; right: 9; width: 100; height: 2; background-color: red;'>
                
                    </div>
                    <div id='barraxpvazia' title='xp' style='position: fixed; top: 64; right: 9; width: 165; height: 2; background-color: red; border: 1px solid white; opacity: 0.3;'>
                
                    </div>
                    <div id='nivel' title='xp' style='position: fixed; top: 70; right: 0; width: 178; height: 20; text-align: left; color: white; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>

                    </div>
                    <div id='nivelvalor' title='xp' style='position: fixed; top: 70; right: 7; width: 178; height: 20; text-align: right; color: white; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>

                    </div>
                    <div id='speed' title='speed' style='position: fixed; top: 85; right: 0; width: 178; height: 20; text-align: left; color: white; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>

                    </div>
                    <div id='speedvalor' title='speed' style='position: fixed; top: 85; right: 7; width: 178; height: 20; text-align: right; color: white; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>

                    </div>
                    <img id='itemCampoDasSkills1' src='imagens/imagemCampoItem.png' alt='item' title='item' style='width: 100%; height: 100%' onclick=""></img>
                </div>
            </div>
            <div id='mochila' title='mochila' style='position: absolute; top: 100; left: 0; margin: 1; width: 176; height: 44; background-color: lightgray; visibility: visible;'>
                <div id='nomeDaMochila1' title='mochila' style='top: 0; left: 10; margin: 1; padding: 2; width: 170; height: 10; background-color: gray; color: white; font-family: "Lucida Console", "Courier New", monospace; font-size: x-small;'>
                    Mochila
                </div>
                <div id='campoDaMochila1' title='mochila' style='float: left; top: 0; left: 0; margin: 1; width: 42; height: 42; background-color: gray;'>
                    <img id='itemCampoDaMochila1' src='imagens/imagemCampoItem.png' alt='item' title='item' style='width: 100%; height: 100%' onclick="if(document.getElementById('mensagem1').style.visibility == 'hidden'){ utilizarIten(0); }"></img>
                </div>
                <div id='campoDaMochila2' title='mochila' style='float: left; top: 0; left: 0; margin: 1; width: 42; height: 42; background-color: gray;'>
                    <img id='itemCampoDaMochila2' src='imagens/imagemCampoItem.png' alt='item' title='item' style='width: 100%; height: 100%' onclick="if(document.getElementById('mensagem1').style.visibility == 'hidden'){ utilizarIten(1); }"></img>
                </div>
                <div id='campoDaMochila3' title='mochila' style='float: left; top: 0; left: 0; margin: 1; width: 42; height: 42; background-color: gray;'>
                    <img id='itemCampoDaMochila3' src='imagens/imagemCampoItem.png' alt='item' title='item' style='width: 100%; height: 100%' onclick="if(document.getElementById('mensagem1').style.visibility == 'hidden'){ utilizarIten(2); }"></img>
                </div>
                <div id='campoDaMochila4' title='mochila' style='float: left; top: 0; left: 0; margin: 1; width: 42; height: 42; background-color: gray;'>
                    <img id='itemCampoDaMochila4' src='imagens/imagemCampoItem.png' alt='item' title='item' style='width: 100%; height: 100%'></img>
                </div>
            </div>
            <div id='magias' title='magias' style='position: absolute; top: 160; left: 0; margin: 1; width: 176; height: 44; background-color: lightgray; visibility: visible;'>
                <div id='nomeDoLivroDeMagias1' title='magias' style='top: 0; left: 10; margin: 1; padding: 2; width: 170; height: 10; background-color: gray; color: white; font-family: "Lucida Console", "Courier New", monospace; font-size: x-small;'>
                    Magias
                </div>
                <div id='campoDaMagia1' title='magia' style='float: left; top: 0; left: 0; margin: 1; width: 42; height: 42; background-color: gray;'>
                    <img id='magiaExura' src='imagens/imagemCampoItem.png' alt='magia' title='magia' style='width: 100%; height: 100%' onclick="if(document.getElementById('mensagem1').style.visibility == 'hidden'){ utilizarMagia(0); }"></img>
                </div>
                <div id='campoDaMagia2' title='magia' style='float: left; top: 0; left: 0; margin: 1; width: 42; height: 42; background-color: gray;'>
                    <img id='magiaExuraGran' src='imagens/imagemCampoItem.png' alt='magia' title='magia' style='width: 100%; height: 100%' onclick="if(document.getElementById('mensagem1').style.visibility == 'hidden'){ utilizarMagia(1); }"></img>
                </div>
                <div id='campoDaMagia3' title='magia' style='float: left; top: 0; left: 0; margin: 1; width: 42; height: 42; background-color: gray;'>
                    <img id='magiaExori' src='imagens/imagemCampoItem.png' alt='magia' title='magia' style='width: 100%; height: 100%' onclick="if(document.getElementById('mensagem1').style.visibility == 'hidden'){ utilizarMagia(2); }"></img>
                </div>
                <div id='campoDaMagia4' title='magia' style='float: left; top: 0; left: 0; margin: 1; width: 42; height: 42; background-color: gray;'>
                    <img id='magiaExoriGran' src='imagens/imagemCampoItem.png' alt='magia' title='magia' style='width: 100%; height: 100%' onclick="if(document.getElementById('mensagem1').style.visibility == 'hidden'){ utilizarMagia(3); }"></img>
                </div>
            </div>
            <div id='parcel' title='parcel' style='position: absolute; top: 160; left: 0; margin: 1; width: 176; height: 44; background-color: lightgray; visibility: hidden;'>
                <div id='nomeDoParcel1' title='parcel' style='top: 0; left: 10; margin: 1; padding: 2; width: 170; height: 10; background-color: gray; color: white; font-family: "Lucida Console", "Courier New", monospace; font-size: x-small;'>
                    Caixa
                </div>
                <div id='campoDoParcel1' title='parcel' style='float: left; top: 0; left: 0; margin: 1; width: 42; height: 42; background-color: gray;'>
                    <img id='itemCampoDoParcel1' src='imagens/imagemCampoItem.png' alt='item' title='item' style='width: 100%; height: 100%'></img>
                </div>
                <div id='campoDoParcel2' title='parcel' style='float: left; top: 0; left: 0; margin: 1; width: 42; height: 42; background-color: gray;'>
                    <img id='itemCampoDoParcel2' src='imagens/imagemCampoItem.png' alt='item' title='item' style='width: 100%; height: 100%'></img>
                </div>
                <div id='campoDoParcel3' title='parcel' style='float: left; top: 0; left: 0; margin: 1; width: 42; height: 42; background-color: gray;'>
                    <img id='itemCampoDoParcel3' src='imagens/imagemCampoItem.png' alt='item' title='item' style='width: 100%; height: 100%'></img>
                </div>
                <div id='campoDoParcel4' title='parcel' style='float: left; top: 0; left: 0; margin: 1; width: 42; height: 42; background-color: gray;'>
                    <img id='itemCampoDoParcel4' src='imagens/imagemCampoItem.png' alt='item' title='item' style='width: 100%; height: 100%'></img>
                </div>
            </div>
            <div id='campoDasTasks1' title='tasks' style='position: absolute; top: 230; left: 0; margin: 1; width: 176; height: 44; background-color: #ccffff;'>
                <div id='tasks' title='tasks' style='position: fixed; top: 240; right: 0; width: 178; height: 20; text-align: left; color: black; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>

                </div>
                <div id='task' title='task' style='position: fixed; top: 255; right: 0; width: 178; height: 20; text-align: left; color: black; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>

                </div>
                <div id='taskvalor' title='task' style='position: fixed; top: 255; right: 7; width: 178; height: 20; text-align: right; color: black; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>

                </div>
            </div>
            <div id='equipamentoMenos' alt='menos' title='menos' style='position:fixed; top: 313; left: 372; width: 10; height: 10; visibility: hidden;' onclick="visibilityEquipamentos(false);">
        
            </div>
            <div id='equipamentoParcel' alt='caixa' title='caixa' style='position:fixed; top: 313; left: 445; width: 30; height: 10; visibility: hidden;' onclick="if(flagEquipamento){if(document.getElementById('parcel').style.visibility == 'hidden'){document.getElementById('parcel').style.visibility = 'visible'; document.getElementById('nomeDoParcel1').style.visibility = 'visible'; document.getElementById('campoDoParcel1').style.visibility = 'visible'; document.getElementById('itemCampoDoParcel1').style.visibility = 'visible'; document.getElementById('campoDoParcel2').style.visibility = 'visible'; document.getElementById('itemCampoDoParcel2').style.visibility = 'visible'; document.getElementById('campoDoParcel3').style.visibility = 'visible'; document.getElementById('itemCampoDoParcel3').style.visibility = 'visible'; document.getElementById('campoDoParcel4').style.visibility = 'visible'; document.getElementById('itemCampoDoParcel4').style.visibility = 'visible';}else{document.getElementById('parcel').style.visibility = 'hidden'; document.getElementById('nomeDoParcel1').style.visibility = 'hidden'; document.getElementById('campoDoParcel1').style.visibility = 'hidden'; document.getElementById('itemCampoDoParcel1').style.visibility = 'hidden'; document.getElementById('campoDoParcel2').style.visibility = 'hidden'; document.getElementById('itemCampoDoParcel2').style.visibility = 'hidden'; document.getElementById('campoDoParcel3').style.visibility = 'hidden'; document.getElementById('itemCampoDoParcel3').style.visibility = 'hidden'; document.getElementById('campoDoParcel4').style.visibility = 'hidden'; document.getElementById('itemCampoDoParcel4').style.visibility = 'hidden';} datainicioinatividade = new Date();}">
        
            </div>
            <div id='equipamentoMochila' alt='mochila' title='mochila' style='position:fixed; top: 328; left: 445; width: 30; height: 30; visibility: hidden;' onclick="if(flagEquipamento){if(document.getElementById('mochila').style.visibility == 'hidden'){document.getElementById('mochila').style.visibility = 'visible'; document.getElementById('nomeDaMochila1').style.visibility = 'visible'; document.getElementById('campoDaMochila1').style.visibility = 'visible'; document.getElementById('itemCampoDaMochila1').style.visibility = 'visible'; document.getElementById('campoDaMochila2').style.visibility = 'visible'; document.getElementById('itemCampoDaMochila2').style.visibility = 'visible'; document.getElementById('campoDaMochila3').style.visibility = 'visible'; document.getElementById('itemCampoDaMochila3').style.visibility = 'visible'; document.getElementById('campoDaMochila4').style.visibility = 'visible'; document.getElementById('itemCampoDaMochila4').style.visibility = 'visible'; document.getElementById('magias').style.top = 160;}else{document.getElementById('mochila').style.visibility = 'hidden'; document.getElementById('nomeDaMochila1').style.visibility = 'hidden'; document.getElementById('campoDaMochila1').style.visibility = 'hidden'; document.getElementById('itemCampoDaMochila1').style.visibility = 'hidden'; document.getElementById('campoDaMochila2').style.visibility = 'hidden'; document.getElementById('itemCampoDaMochila2').style.visibility = 'hidden'; document.getElementById('campoDaMochila3').style.visibility = 'hidden'; document.getElementById('itemCampoDaMochila3').style.visibility = 'hidden'; document.getElementById('campoDaMochila4').style.visibility = 'hidden'; document.getElementById('itemCampoDaMochila4').style.visibility = 'hidden'; document.getElementById('magias').style.top = 100;} datainicioinatividade = new Date();}">
        
            </div>
            <div id='equipamentoMaoDireita' alt='' title='' style='position:fixed; top: 364; left: 373; width: 30; height: 30; visibility: hidden;' onclick="">
        
            </div>
            <div id='equipamentoMaoEsquerda' alt='' title='' style='position:fixed; top: 364; left: 445; width: 30; height: 30; visibility: hidden;' onclick="">
        
            </div>
            <button type="submit" id='equipment' title='equipamentos' style='position: absolute; bottom: 90; left: 0; margin: 1; width: 174; height: 44; background-color: #4CAF50; color: white; border-radius: 4px; border: none; visibility: visible;' onclick="visibilityEquipamentos(document.getElementById('mensagem1').style.visibility == 'hidden');">
                Equipamentos
            </button>
            <button type="submit" id='story' title='história' style='position: absolute; bottom: 45; left: 0; margin: 1; width: 174; height: 44; background-color: #4CAF50; color: white; border-radius: 4px; border: none; visibility: visible;' onclick="if(document.getElementById('chathistoria').style.visibility == 'hidden'){document.getElementById('chathistoria').style.visibility = 'visible';}else{document.getElementById('chathistoria').style.visibility = 'hidden';} datainicioinatividade = new Date();">
                História
            </button>
            <button type="submit" id='logout' title='sair' style='position: absolute; bottom: 0; left: 0; margin: 1; width: 174; height: 44; background-color: #4CAF50; color: white; border-radius: 4px; border: none; visibility: visible;' onclick="if(document.getElementById('logoutPergunta1').style.visibility == 'hidden'){document.getElementById('logoutPergunta1').style.visibility = 'visible'; document.getElementById('logoutOpcao1').style.visibility = 'visible'; document.getElementById('logoutOpcao2').style.visibility = 'visible';}else{document.getElementById('logoutPergunta1').style.visibility = 'hidden'; document.getElementById('logoutOpcao1').style.visibility = 'hidden'; document.getElementById('logoutOpcao2').style.visibility = 'hidden';} datainicioinatividade = new Date();">
                Sair
            </button>
        </div>

        <div id='chat' title='chat' style='position: fixed; top: 417; right: 0; width: 178; height:243; background-color: lightgray; border-style: solid; border-color: gray;'>
            <div id='default' title='chat' style='position: absolute; top: 0; left: 0; margin: 1; width: 176; height: 44; background-color: #ccffff;'>
                <button id='nomeDoChatDefault' title='default' style='float: left; top: 0; left: 10; margin: 1; padding: 2; width: 50; height: 20; background-color: gray; color: white; font-family: "Lucida Console", "Courier New", monospace; font-size: x-small;' onclick="identificadorDoChat = 0; document.getElementById('textareaChat').value = mensagensDoChatDefault; document.getElementById('textareaChat').scrollTop = document.getElementById('textareaChat').scrollHeight; /*document.getElementById('campoDeEscritaInput').focus();*/ document.getElementById('nomeDoChatServerLog').style.color = 'black'; document.getElementById('nomeDoChatNpc').style.color = 'black'; document.getElementById('nomeDoChatDefault').style.color = 'white'; document.getElementById('campoDoChat').title ='default'; document.getElementById('textareaChat').title ='default'; datainicioinatividade = new Date();">
                    Default
                </button>
                <button id='nomeDoChatServerLog' title='server log' style='float: left; top: 0; left: 10; margin: 1; padding: 2; width: 75; height: 20; background-color: gray; color: black; font-family: "Lucida Console", "Courier New", monospace; font-size: x-small;' onclick="identificadorDoChat = 1; document.getElementById('textareaChat').value = mensagensDoChatServerLog; document.getElementById('textareaChat').scrollTop = document.getElementById('textareaChat').scrollHeight; document.getElementById('nomeDoChatDefault').style.color = 'black'; document.getElementById('nomeDoChatNpc').style.color = 'black'; document.getElementById('nomeDoChatServerLog').style.color = 'white'; document.getElementById('campoDoChat').title ='server log'; document.getElementById('textareaChat').title ='server log'; datainicioinatividade = new Date();">
                    Server Log
                </button>
                <button id='nomeDoChatNpc' title='npc' style='float: left; top: 0; left: 10; margin: 1; padding: 2; width: 25; height: 20; background-color: gray; color: black; font-family: "Lucida Console", "Courier New", monospace; font-size: x-small;' onclick="identificadorDoChat = 2; document.getElementById('textareaChat').value = mensagensDoChatNpc; document.getElementById('textareaChat').scrollTop = document.getElementById('textareaChat').scrollHeight; /*document.getElementById('campoDeEscritaInput').focus();*/ document.getElementById('nomeDoChatDefault').style.color = 'black'; document.getElementById('nomeDoChatServerLog').style.color = 'black'; document.getElementById('nomeDoChatNpc').style.color = 'white'; document.getElementById('campoDoChat').title ='npc'; document.getElementById('textareaChat').title ='npc'; datainicioinatividade = new Date();">
                    Npc
                </button>
                <div id='campoDoChat' title='default' style='float: left; top: 0; left: 0; margin: 1; width: 174; height: 195; background-color: #ccffff;'>
                    <textarea id="textareaChat" name="textareaChat" title='default' rows="12" cols="21" style="resize: none;" disabled></textarea>
                </div>
                <div id='campoDeEscrita' title='chat' style='float: left; bottom: 0; left: 0; margin: 1; width: 176; height: 22; background-color: #ccffff;'>
                    <input type="text" id="campoDeEscritaInput" name="campoDeEscritaInput" title='chat' maxlength="100" style="opacity: 0;"></input>
                </div>
            </div>
        </div>

        <div id='tablet' title='tablete' style='position: fixed; top: 417; right: 200; width: 178; height:243; background-color: black; border-style: solid; border-color: gray; visibility: hidden;'>
            <textarea id="cmd" name="tablete" title='default' rows="16" cols="21" style="resize: none;" disabled>C:\Acesso negado!</textarea>
        </div>

        <audio id="myAudio" src="" type="audio/mpeg" preload autoplay loop>
            <!--<source id="myAudioSrc" src="musicas/ToPTrack02.mp3" type="audio/mpeg">-->
            <!--Your browser does not support the audio tag.-->
        </audio>

        <!--
        <div style="position: fixed; top: 240; left: 60; width: 180;">
            <div style="position: fixed; left: 140; width: 180;">
                <button id='botaoCima' onclick='if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 0){ posicaoDoPersonagemNaMatriz[0] = posicaoDoPersonagemNaMatriz[0] - 1; preencherImagens();}'>^</button>
            </div>
            <div style="position: fixed; top: 260; left: 125; width: 180;">
                <button id='botaoEsquerda' onclick='if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 0){ posicaoDoPersonagemNaMatriz[1] = posicaoDoPersonagemNaMatriz[1] - 1; preencherImagens();}'><</button>
                <button id='botaoDireita' onclick='if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 0){ posicaoDoPersonagemNaMatriz[1] = posicaoDoPersonagemNaMatriz[1] + 1; preencherImagens();}' style='left: 150;'>></button>
            </div>
            <div style="position: fixed; top: 280; left: 140; width: 180;">
                <button id='botaoBaixo' onclick='if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 0){ posicaoDoPersonagemNaMatriz[0] = posicaoDoPersonagemNaMatriz[0] + 1; preencherImagens();}'>v</button>
            </div>
        </div>
        -->

        <script>

        function main(){

            var newColumn;
            var newMap;
            var moveMap;
            var moverCriaturas;
            var auxPreencherImagensCriaturas;
            var auxPreencherImagens;
            var preencherImagens;
            var cima;
            var direita;
            var baixo;
            var esquerda;
            var ataqueCriatura;
            var ataqueCampo;
            var moverCima;
            var moverDireita;
            var moverBaixo;
            var moverEsquerda;
            var getRandomIntInclusive;
            var animacaoMonster;
            var verificacaoAproximacaoNPC;
            var verificacaoDistanciamentoNPC;
            var preencherOpcoes;
            var mensagemNivelNecessario;
            var mensagemTaskNaoTerminada;
            var mensagemGanhouExperiencia;
            var verificarPosicaoValida;
            var verificarPosicaoValidaBot;
            var recompensaSacola;
            var mensagemDoSistema;
            var moverCimaBot;
            var moverDireitaBot;
            var moverBaixoBot;
            var moverEsquerdaBot;
            var moverJangada;
            var moverPorta;
            var revelarCasa;
            var esconderCasa;
            var escolherOutfit;
            var obterEquipamento;
            var corlifecampo;
            var funcPersonagemMorto;
            var calculaLevel;
            var regeneracao;
            var updateDadosJson;
            var readDadosJson;

            var ultim_x;
            var ultim_y;
            var ultim_direcao;
            var ultim_outfit;
            var ultim_nivel;
            var ultim_hp;
            var ultim_mensgem;
            var ultim_json;
            var online = 1;
            var wakeup = true;

            var flagMove = [false,false,false,false];
            var numOpcao = 0;

            var posicaoDoPersonagemNaMatriz = [7,8];
            var direcaoDoPersonagem = 2;
            var nivel = 0;
            var personagemMorto = false;

            var posicaoJangada = [82,28];

            var flagAjax = true;
            var dataAjax = new Date();
            var dataLoop = new Date();
            var dataMove = new Date();
            var dataMagia = new Date();
            var dataMoverCriaturas = new Date();
            var dataDiv1 = new Date();
            var dataDiv2 = new Date();

            var hpmax = 176;
            var hp = 176;

            var dadosJson;

            var mochila = ["","","",""];
            var equipamentos = [0,0,0,0,0,0,0,0,0];

            var exura = false;
            var exuraGran = false;
            var exori = false;
            var exoriGran = false;

            var nomeCriaturaTask = "[Monster]";
            var tasknumber = 0;
            var taskvalor = 0;

            var questFerramentas = false;
            var quest1 = 0;
            var quest2 = 0;
            var quest3 = 0;
            var quest4 = 0;

            var username = "";
            var password = "";

var matrizDoMapa = 
[
[27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27],
[27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27],
[27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27],
[27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27],
[27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27],
[27,27,27,27,27,27,32,30,30,30,27,27,32,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,27,27,27,27,27,27,27],
[27,27,27,27,27,27,31, 0, 0,41,29,27,31, 0,41, 0, 0, 0, 0, 0, 0,45, 0, 0,45, 0,45, 0, 0, 0, 0,29,27,27,27,27,27,27],
[27,27,27,27,27,27,31, 0, 0, 2,29,27,31, 0, 0, 0, 0, 0,45, 0, 0, 0, 0,45, 0, 0, 0,45, 0, 0, 0,29,27,27,27,27,27,27],
[27,27,27,27,27,27,31, 4, 0, 0,29,27,31, 4, 0, 0, 0, 0, 0, 0, 0,45, 0, 0,45, 0,45, 0, 0, 0, 0,29,27,27,27,27,27,27],
[27,27,27,27,27,27,27,28,28,28,27,27,27,28,28,28,28,28,28,28,28,28,28,28,28,28,28,28,28,28,28,27,27,27,27,27,27,27],
[27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27],
[27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27],
[27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27],
[27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27],
[27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27],
[27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27],
[27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27],
[27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27],
[27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27],
[27,27,27,27,27,27,32,30,30,30,27,27,32,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,27,27,27,27,27,27,27],
[27,27,27,27,27,27,31, 0, 1, 1,29,27,31, 0, 0, 0, 0, 0, 0, 0, 0,19, 0, 0,19, 0,19, 0, 0, 0, 0,29,27,27,27,27,27,27],
[27,27,27,27,27,27,31, 0, 7, 8,29,27,31, 4, 0, 0, 0, 0,19, 0, 0, 0, 0,19, 0, 0, 0,19, 0, 0, 0,29,27,27,27,27,27,27],
[27,27,27,27,27,27,31, 5, 4, 1,29,27,31, 5, 0, 0, 0, 0, 0, 0, 0,19, 0, 0,19, 0,19, 0, 0, 0, 0,29,27,27,27,27,27,27],
[27,27,27,27,27,27,27,28,28,28,27,27,27,28,28,28,28,28,28,28,28,28,28,28,28,28,28,28,28,28,28,27,27,27,27,27,27,27],
[27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27],
[27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27],
[27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27],
[27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27],
[27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27],
[27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27],
[27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27],
[27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27],
[27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27],
[27,27,27,27,27,27,32,30,30,30,27,27,32,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,27,27,27,27,27,27,27],
[27,27,27,27,27,27,31, 8, 7, 8,29,27,31, 0, 0, 0, 0, 0, 0, 0, 0,16, 0, 0,16, 0,16, 0, 0, 0, 0,29,27,27,27,27,27,27],
[27,27,27,27,27,27,31, 1, 0, 7,29,27,31, 5, 0, 0, 0, 0,16, 0, 0, 0, 0,16, 0, 0, 0,16, 0, 0, 0,29,27,27,27,27,27,27],
[27,27,27,27,27,27,31, 1, 5, 4,29,27,31, 4, 0, 0, 0, 0, 0, 0, 0,16, 0, 0,16, 0,16, 0, 0, 0, 0,29,27,27,27,27,27,27],
[27,27,27,27,27,27,27,28,28,28,27,27,27,28,28,28,28,28,28,28,28,28,28,28,28,28,28,28,28,28,28,27,27,27,27,27,27,27],
[27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27],
[27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27],
[27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27],
[27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27],
[27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27],
[27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27],
[27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27],
[27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27],
[27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27],
[27,27,27,27,27,27,32,30,30,30,27,27,32,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,27,27,27,27,27,27,27],
[27,27,27,27,27,27,31, 1, 8, 1,29,27,31, 0, 0, 0, 0, 0, 0, 0, 0, 8, 0, 0, 8, 0, 8, 0, 0, 0, 0,29,27,27,27,27,27,27],
[27,27,27,27,27,27,31, 8, 7, 4,29,27,31, 0, 4, 0, 0, 0, 8, 0, 0, 0, 0, 8, 0, 0, 0, 8, 0, 0, 0,29,27,27,27,27,27,27],
[27,27,27,27,27,27,31, 1, 8, 5,29,27,31, 5, 0, 0, 0, 0, 0, 0, 0, 8, 0, 0, 8, 0, 8, 0, 0, 0, 0,29,27,27,27,27,27,27],
[27,27,27,27,27,27,27,28,28,28,27,27,27,28,28,28,28,28,28,28,28,28,28,28,28,28,28,28,28,28,28,27,27,27,27,27,27,27],
[27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27],
[27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27],
[27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27],
[27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27,27],
[26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26],
[26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26],
[26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26],
[26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26],
[26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26],
[26,26,26,26,26,26,33,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,35,33,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,35,26,26,26,26,26,26],
[26,26,26,26,26,26,40, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,36,40, 2, 7, 7, 7, 7,16, 1, 2, 7, 7, 7, 7, 8, 1, 2, 7, 7, 7,19, 1, 7, 1,36,26,26,26,26,26,26],
[26,26,26,26,26,26,40,11, 0, 6, 0, 0, 0, 0, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0,36,40, 7, 7,16, 7, 7, 7,19, 7, 7, 7, 8, 7, 7,16, 7, 7,19, 7, 7,19, 7, 2,36,26,26,26,26,26,26],
[26,26,26,26,26,26,40, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,80,38,83, 0, 0,80,37,40, 7, 8, 1, 7, 7,16, 1, 7, 7,19, 1, 7, 8, 1, 7,16, 1, 7,19, 1, 7, 1,36,26,26,26,26,26,26],
[26,26,26,26,26,26,40, 1, 1, 0, 0, 0, 0, 0, 0, 0, 1, 1,36,26,40, 0, 0,36,26,40, 7, 7,16, 7, 7, 7,19, 7, 7, 7, 8, 7, 7,16, 7, 7,19, 7, 7,19, 7, 0,36,26,26,26,26,26,26],
[26,26,26,26,26,26,40,19, 7, 0, 0, 0, 0, 0, 0, 0, 7,16,36,26,40, 0, 0,36,26,40, 7, 8, 1, 7, 7,16, 1, 7, 7,19, 1, 7, 8, 1, 7,16, 1, 7,19, 1, 7, 1,36,26,26,26,26,26,26],
[26,26,26,26,26,26,40, 1, 1, 0, 0, 0, 0, 0, 0, 0, 1, 1,36,26,40, 0, 0,36,26,40, 7, 7,16, 7, 7, 7,19, 7, 7, 7, 8, 7, 7,16, 7, 7,19, 7, 7,16, 7, 2,36,26,26,26,26,26,26],
[26,26,26,26,26,26,40, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,36,26,40, 0, 0,36,26,40, 7, 8, 1, 7, 7,16, 1, 7, 7,19, 1, 7, 8, 1, 7,16, 1, 7,19, 1, 7, 1,36,26,26,26,26,26,26],
[26,26,26,26,26,26,40, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0, 1,36,26,40, 0, 0,36,26,40, 7, 7,16, 7, 7, 7,19, 7, 7, 7, 8, 7, 7,16, 7, 7,19, 7, 7,19, 7, 0,36,26,26,26,26,26,26],
[26,26,26,26,26,26,40,19, 7,19, 7,45, 7,45, 7,16, 7,16,36,26,40, 7, 7,82,34,81, 7, 8, 1, 7, 7,16, 1, 7, 7,19, 1, 7, 8, 1, 7,16, 1, 7,19, 1, 7, 1,36,26,26,26,26,26,26],
[26,26,26,26,26,26,40,19, 7,19, 7,45, 7,45, 7,16, 7,16,36,26,40, 0, 0, 0, 0, 7, 7, 7,16, 7, 7, 7,19, 7, 7, 7, 8, 7, 7,16, 7, 7,19, 7, 7, 8, 7, 2,36,26,26,26,26,26,26],
[26,26,26,26,26,26,40,19,19,19, 1,45,45,45, 1,16,16,16,36,26,40, 0, 0, 0, 0, 7, 7, 8, 1, 2, 7, 7, 7, 7, 7,19, 1, 2, 7, 7, 7,16, 1, 2, 7, 7, 7, 1,36,26,26,26,26,26,26],
[26,26,26,26,26,26,39,38,38,38,38,38,38,38,38,38,38,38,37,26,40, 0, 0, 0, 0,80,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,37,26,26,26,26,26,26],
[26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,40, 0, 0, 0, 0,36,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26],
[26,26,26,26,26,26,33,34,34,34,34,34,34,34,34,34,34,34,34,34,81, 0, 0, 0, 0,82,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,35,26,26,26,26,26,26],
[26,26,26,26,26,26,40, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,45, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2,36,26,26,26,26,26,26],
[26,26,26,26,26,26,40, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,45, 0, 0, 0, 0,45, 0, 0, 0, 0,36,26,26,26,26,26,26],
[26,26,26,26,26,26,40, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,45, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,45, 0, 0,36,26,26,26,26,26,26],
[26,26,26,26,26,26,40, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,45, 0, 0, 0, 0, 0, 0, 0, 0,36,26,26,26,26,26,26],
[26,26,26,26,26,26,39,38, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,45, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,36,26,26,26,26,26,26],
[26,26,26,26,26,26,26,26,38, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,38,38, 0, 0,38, 0, 0, 0, 0, 0, 0, 0, 0, 0,45, 0, 0, 0, 0,45, 0,36,26,26,26,26,26,26],
[26,26,26,26,26,26,26,26,26, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,26,53,52,52,54, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,36,26,26,26,26,26,26],
[26,26,26,26,26,26,26,26,26,38, 0, 0,48, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,26,53,52,52,54, 0, 0,45, 0, 0, 0, 0, 0, 0, 0,45, 0, 0,45, 0,80,37,26,26,26,26,26,26],
[26,26,26,26,26,26,26,26,26,26,38, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,38,26,26,26,26,26, 2, 0, 0, 0, 0, 0,45, 0, 0, 0, 0, 0, 0, 0, 0,36,26,26,26,26,26,26,26],
[26,26,26,26,26,26,26,26,26,26,26, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,26,26,26,26,26,26,38, 0, 0,45, 0, 0, 0, 0, 0, 0, 0,45, 0, 0, 2,36,26,26,26,26,26,26,26],
[26,26,26,26,26,26,26,26,26,26,26,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,26,26,26,26,26,26,26,38,38,38,38,38,38,38,38,38,38,38,38,38,38,37,26,26,26,26,26,26,26],
[26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26],
[26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26],
[26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26],
[26,26,26,26,26,26,33,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,35,26,33,35,26,33,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,35,26,26,26,26,26,26],
[26,26,26,26,26,26,40, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,58,59,59,60,66, 0, 0, 0, 0, 0, 0,58,59,60,66, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,36,26,26,26,26,26,26],
[26,26,26,26,26,26,40, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,65,57,57,61,67, 0, 0, 0, 0, 0, 0,65,57,61,67, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,36,26,26,26,26,26,26],
[26,26,26,26,26,26,40, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,65,57,57,61,71, 0, 0, 0, 0, 0, 0,65,57,61,71, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,36,26,26,26,26,26,26],
[26,26,26,26,26,26,40, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,64,63,63,62,72, 0, 0, 0, 0, 0, 0,65,57,61,72, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,36,26,26,26,26,26,26],
[26,26,26,26,26,26,40, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,70,69,69,69,68, 0, 0,55,56, 0, 0,64,63,62,67, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,36,26,26,26,26,26,26],
[26,26,26,26,26,26,39,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38, 0,70,69,69,68, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,36,26,26,26,26,26,26],
[26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,37,26,26,26,26,26,26],
[26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26],
[26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26],
[26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26],
[26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26],
[26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26]
];

var matrizDoMapaOriginal = [];

for(let i = 0; i < matrizDoMapa.length; i++){
    matrizDoMapaOriginal.push(matrizDoMapa[i].slice());
}

matrizDoMapaOriginal[92][25] = 92;

var matrizCriaturasVida = [];

for(let i = 0; i < matrizDoMapa.length; i++){
    matrizCriaturasVida.push(matrizDoMapa[i].slice());
}

for(let i = 0; i < matrizCriaturasVida.length; i++){
    for(let j = 0; j < matrizCriaturasVida.length; j++){
        if(
            matrizCriaturasVida[i][j] == 8 || matrizCriaturasVida[i][j] == 9 || matrizCriaturasVida[i][j] == 10 ||
            matrizCriaturasVida[i][j] == 16 || matrizCriaturasVida[i][j] == 17 || matrizCriaturasVida[i][j] == 18 ||
            matrizCriaturasVida[i][j] == 19 || matrizCriaturasVida[i][j] == 20 || matrizCriaturasVida[i][j] == 21 ||
            matrizCriaturasVida[i][j] == 45 || matrizCriaturasVida[i][j] == 46 || matrizCriaturasVida[i][j] == 47 ||
            matrizCriaturasVida[i][j] == 48 || matrizCriaturasVida[i][j] == 49 || matrizCriaturasVida[i][j] == 50
            )
            matrizCriaturasVida[i][j] = 50;
    }
}

            var lvlatual = 0;
            var lvlantigo = 0;
            var mensagem = "";
            var ultimamensagem = "vazio";
            var alertaBoss = false;
            var audio1 = false;
            var audio2 = false;
            var audio3 = false;
            
            var mover = 60;
            var quadrosDeAnimacao = 9;
            var esperaPorQuadro = 5;

            //Variaveis Animacao Monster Atacando
            var posicaoLinhaCima = 0;
            var posicaoColunaCima = 0;
            var posicaoLinhaEsquerda = 0;
            var posicaoColunaEsquerda = 0;
            var posicaoLinhaDireita = 0;
            var posicaoColunaDireita = 0;
            var posicaoLinhaBaixo = 0;
            var posicaoColunaBaixo = 0;
            var posicaoLinhaCimaEsquerda = 0;
            var posicaoColunaCimaEsquerda = 0;
            var posicaoLinhaCimaDireita = 0;
            var posicaoColunaCimaDireita = 0;
            var posicaoLinhaBaixoDireita = 0;
            var posicaoColunaBaixoDireita = 0;
            var posicaoLinhaBaixoEsquerda = 0;
            var posicaoColunaBaixoEsquerda = 0;
            var esperaRessCima = 3;
            var esperaRessEsquerda = 3;
            var esperaRessDireita = 3;
            var esperaRessBaixo = 3;
            var esperaRessCimaEsquerda = 3;
            var esperaRessCimaDireita = 3;
            var esperaRessBaixoDireita = 3;
            var esperaRessBaixoEsquerda = 3;
            var esperaRessCimaContador = 0;
            var esperaRessEsquerdaContador = 0;
            var esperaRessDireitaContador = 0;
            var esperaRessBaixoContador = 0;
            var esperaRessCimaEsquerdaContador = 0;
            var esperaRessCimaDireitaContador = 0;
            var esperaRessBaixoDireitaContador = 0;
            var esperaRessBaixoEsquerdaContador = 0;
            var flagCima = false;
            var flagEsquerda = false;
            var flagDireita = false;
            var flagBaixo = false;
            var flagCimaEsquerda = false;
            var flagCimaDireita = false;
            var flagBaixoDireita = false;
            var flagBaixoEsquerda = false;
            var esperaGeral = 100;

            //Variaveis BOT
            var posicaoBot = [66,12];
            var botFree = false;

            //Variaveis JSON
            var dadosResposta = "vazio";

            //Variaveis Map
            let campo = [0,0];
            let columnLeft = -60;
            let intoLeft = -55;

            moveMap = function(param, direcao){
                
                switch(direcao){
                    case 0:
                        for(let i = 0; i < 15; i++){
					        document.getElementById("column" + i).style.top = document.getElementById("column" + i).style.top.split('p')[0] - (-param);
				        }
                        break;
                    case 1:
                        for(let i = 0; i < 15; i++){
					        document.getElementById("column" + i).style.left = document.getElementById("column" + i).style.left.split('p')[0] - param;
				        }
                        break;
                    case 2:
                        for(let i = 0; i < 15; i++){
					        document.getElementById("column" + i).style.top = document.getElementById("column" + i).style.top.split('p')[0] - param;
				        }
                        break;
                    case 3:
                        for(let i = 0; i < 15; i++){
					        document.getElementById("column" + i).style.left = document.getElementById("column" + i).style.left.split('p')[0] - (-param);
				        }
                        break;
                }
            }

            newMap = function(){
                
				for(let i = 0; i < 15; i++){
					newColumn();
				}
			}

            newColumn = function(){

				const column = document.createElement("div");
				column.setAttribute("id", "column" + campo[1]);
				column.style.position = "fixed";
				column.style.top = "-60";
				column.style.left = columnLeft;
				column.style.width = "60";
				column.style.height = "60";

				document.getElementById("map").appendChild(column);
	
				campo[0] = 0;
				let nameTop = -55;
				let barraHpTop = -59;
				let messageTop = -45;
				for(let i = 0; i < 13; i++){
					const image = document.createElement("img");
					image.setAttribute("id", "campo" + "-" + campo[0] + "-" + campo[1]);
					image.src = "/imagens/imagemCampo.png";
					image.alt = "campo";
					image.title = "campo";
					image.style.width = "100%"; 
					image.style.height = "100%";
					image.onclick = function(){ moverPersonagem = [(parseInt(this.id.split('-', 3)[1])-6),(parseInt(this.id.split('-', 3)[2])-7)]; };
				
					document.getElementById("column" + campo[1]).appendChild(image);

					const name = document.createElement("div");
					name.setAttribute("id", "nomeCampo" + "-" + campo[0] + "-" + campo[1]);
					name.style.position = "fixed";
					name.style.top = nameTop;
					name.style.left = intoLeft;
					name.style.color = "mediumseagreen";
					name.style.fontFamily = "Lucida Console,Courier New,monospace";
					name.style.fontSize = "small";
					name.style.visibility = "hidden";
				
					document.getElementById("column" + campo[1]).appendChild(name);

					const barraHpVazia = document.createElement("div");
					barraHpVazia.setAttribute("id", "barraHpVaziaCampo" + "-" + campo[0] + "-" + campo[1]);
					barraHpVazia.style.position = "fixed";
					barraHpVazia.style.top = barraHpTop;
					barraHpVazia.style.left = intoLeft;
					barraHpVazia.style.width = "50"; 
					barraHpVazia.style.height = "3";
					barraHpVazia.style.backgroundColor = "black";
					barraHpVazia.style.visibility = "hidden";
				
					document.getElementById("column" + campo[1]).appendChild(barraHpVazia);

					const barraHp = document.createElement("div");
					barraHp.setAttribute("id", "barraHpCampo" + "-" + campo[0] + "-" + campo[1]);
					barraHp.style.position = "fixed";
					barraHp.style.top = barraHpTop;
					barraHp.style.left = intoLeft;
					barraHp.style.width = "50"; 
					barraHp.style.height = "3";
					barraHp.style.backgroundColor = "mediumseagreen";
					barraHp.style.visibility = "hidden";
				
					document.getElementById("column" + campo[1]).appendChild(barraHp);

					const message = document.createElement("div");
					message.setAttribute("id", "mensagemDivCampo" + "-" + campo[0] + "-" + campo[1]);
					message.style.position = "fixed";
					message.style.top = messageTop;
					message.style.left = intoLeft;
					message.style.width = "250";
					message.style.textAlign = "left";
					message.style.color = "yellow";
					message.style.fontFamily = "Lucida Console,Courier New,monospace";
					message.style.fontSize = "small";
				
					document.getElementById("column" + campo[1]).appendChild(message);

					campo[0] = campo[0] + 1;
					nameTop = nameTop + 60;
					barraHpTop = barraHpTop + 60;
					messageTop = messageTop + 60;
				}
				campo[1] = campo[1] + 1;
				columnLeft = columnLeft + 60;
				intoLeft = intoLeft + 60;
			}

            updateDadosJson = function(){
                
                dadosJson.json[0].itens = "";
                if(mochila[0] == 'PocaoHP'){
                    dadosJson.json[0].itens += "1";
                }else{
                    dadosJson.json[0].itens += "0";
                }
                if(mochila[1] == 'Corda'){
                    dadosJson.json[0].itens += ",1";
                }else{
                    dadosJson.json[0].itens += ",0";
                }
                if(mochila[2] == 'Pa'){
                    dadosJson.json[0].itens += ",1";
                }else{
                    dadosJson.json[0].itens += ",0";
                }
                dadosJson.json[1].magias = "";
                if(exura){
                    dadosJson.json[1].magias += "1";
                }else{
                    dadosJson.json[1].magias += "0";
                }
                if(exuraGran){
                    dadosJson.json[1].magias += ",1";
                }else{
                    dadosJson.json[1].magias += ",0";
                }
                if(exori){
                    dadosJson.json[1].magias += ",1";
                }else{
                    dadosJson.json[1].magias += ",0";
                }
                if(exoriGran){
                    dadosJson.json[1].magias += ",1";
                }else{
                    dadosJson.json[1].magias += ",0";
                }
                dadosJson.json[2].tasks = "";
                dadosJson.json[2].tasks += tasknumber.toString() + "," + taskvalor.toString();
                dadosJson.json[3].quests = "";
                if(questFerramentas){
                    dadosJson.json[3].quests += "1";
                }else{
                    dadosJson.json[3].quests += "0";
                }
                dadosJson.json[3].quests += "," + quest1.toString() + "," + quest2.toString() + "," + quest3.toString() + "," + quest4.toString();
                if(dadosJson.json.length < 5){
                    dadosJson.json.push({"equipamentos":(equipamentos[0].toString() + "," + equipamentos[1].toString() + "," + equipamentos[2].toString() + "," + equipamentos[3].toString() + "," + equipamentos[4].toString() + "," + equipamentos[5].toString() + "," + equipamentos[6].toString() + "," + equipamentos[7].toString() + "," + equipamentos[8].toString())})
                }else{
                    dadosJson.json[4].equipamentos = "";
                    dadosJson.json[4].equipamentos += equipamentos[0].toString() + "," + equipamentos[1].toString() + "," + equipamentos[2].toString() + "," + equipamentos[3].toString() + "," + equipamentos[4].toString() + "," + equipamentos[5].toString() + "," + equipamentos[6].toString() + "," + equipamentos[7].toString() + "," + equipamentos[8].toString();
                }

            }

            readDadosJson = function(){

                let strDados = "";
                
                strDados = dadosJson.json[0].itens.split(',');
                if(strDados.length > 0 && parseInt(strDados[0])){
                    mochila[0] = 'PocaoHP';
                    document.getElementById('itemCampoDaMochila1').src = 'imagens/imagemPocaoHP.png';
                    document.getElementById('itemCampoDaMochila1').alt = 'poção hp';
                    document.getElementById('itemCampoDaMochila1').title = 'poção hp';
                }
                if(strDados.length > 1 && parseInt(strDados[1])){
                    mochila[1] = 'Corda';
                    document.getElementById('itemCampoDaMochila2').src = 'imagens/imagemCorda.png';
                    document.getElementById('itemCampoDaMochila2').alt = 'corda';
                    document.getElementById('itemCampoDaMochila2').title = 'corda';
                }
                if(strDados.length > 2 && parseInt(strDados[2])){
                    mochila[2] = 'Pa';
                    document.getElementById('itemCampoDaMochila3').src = 'imagens/imagemPa.png';
                    document.getElementById('itemCampoDaMochila3').alt = 'pá';
                    document.getElementById('itemCampoDaMochila3').title = 'pá';
                }
                strDados = dadosJson.json[1].magias.split(',');
                if(strDados.length > 0 && parseInt(strDados[0])){
                    exura = true;
                    document.getElementById('magiaExura').src = 'imagens/Ultimate_Healing.png';
                    document.getElementById('magiaExura').alt = 'exura';
                    document.getElementById('magiaExura').title = 'exura';
                }
                if(strDados.length > 1 && parseInt(strDados[1])){
                    exuraGran = true;
                    document.getElementById('magiaExuraGran').src = 'imagens/Restoration.png';
                    document.getElementById('magiaExuraGran').alt = 'exura gran';
                    document.getElementById('magiaExuraGran').title = 'exura gran';
                }
                if(strDados.length > 2 && parseInt(strDados[2])){
                    exori = true;
                    document.getElementById('magiaExori').src = 'imagens/Berserk.png';
                    document.getElementById('magiaExori').alt = 'exori';
                    document.getElementById('magiaExori').title = 'exori';
                }
                if(strDados.length > 3 && parseInt(strDados[3])){
                    exoriGran = true;
                    document.getElementById('magiaExoriGran').src = 'imagens/Fierce_Berserk.png';
                    document.getElementById('magiaExoriGran').alt = 'exori gran';
                    document.getElementById('magiaExoriGran').title = 'exori gran';
                }
                strDados = dadosJson.json[2].tasks.split(',');
                if(strDados.length > 0 && parseInt(strDados[0])){
                    switch(parseInt(strDados[0])){
                        case 1:
                            document.getElementById('task').innerHTML = "Snake";
                            nomeCriaturaTask = "Snake";
                            tasknumber = 1;
                            break;
                        case 2:
                            document.getElementById('task').innerHTML = "Dragon";
                            nomeCriaturaTask = "Dragon";
                            tasknumber = 2;
                            break;
                        case 3:
                            document.getElementById('task').innerHTML = "Mammoth";
                            nomeCriaturaTask = "Mammoth";
                            tasknumber = 3;
                            break;
                        case 4:
                            document.getElementById('task').innerHTML = "Spider";
                            nomeCriaturaTask = "Spider";
                            tasknumber = 4;
                            break;
                    }
                    document.getElementById('tasks').innerHTML = 'Tasks';
                    if(strDados.length > 1){
                        taskvalor = parseInt(strDados[1]);
                    }
                    document.getElementById('taskvalor').innerHTML = taskvalor + '/100';
                    document.getElementById('task').style.visibility = 'visible';
                    document.getElementById('taskvalor').style.visibility = 'visible';
                }
                strDados = dadosJson.json[3].quests.split(',');
                if(strDados.length > 0 && parseInt(strDados[0])){
                    questFerramentas = true;
                    matrizDoMapa[7][9] = 3;
                    matrizDoMapa[62][12] = 3;
                }
                if(strDados.length > 1){
                    quest1 = parseInt(strDados[1]);
                }
                if(strDados.length > 2){
                    quest2 = parseInt(strDados[2]);
                }
                if(strDados.length > 3){
                    quest3 = parseInt(strDados[3]);
                }
                if(strDados.length > 4){
                    quest4 = parseInt(strDados[4]);
                }

                if(dadosJson.json.length > 4){
                    strDados = dadosJson.json[4].equipamentos.split(',');
                    if(strDados.length > 8){
                        equipamentos[0] = parseInt(strDados[0]);
                        equipamentos[1] = parseInt(strDados[1]);
                        if(equipamentos[1] == 1){
                            document.getElementById("equipamentoMaoDireita").style.backgroundImage = "url('imagens/Spike_Sword_Equip.png')";
                            document.getElementById('equipamentoMaoDireita').alt = 'Spike Sword (Arm: 1)';
                            document.getElementById('equipamentoMaoDireita').title = 'Spike Sword (Arm: 1)';
                        }
                        equipamentos[2] = parseInt(strDados[2]);
                        equipamentos[3] = parseInt(strDados[3]);
                        equipamentos[4] = parseInt(strDados[4]);
                        equipamentos[5] = parseInt(strDados[5]);
                        equipamentos[6] = parseInt(strDados[6]);
                        equipamentos[7] = parseInt(strDados[7]);
                        if(equipamentos[7] == 1){
                            document.getElementById("equipamentoMaoEsquerda").style.backgroundImage = "url('imagens/Crown_Shield_Equip.png')";
                            document.getElementById('equipamentoMaoEsquerda').alt = 'Crown Shield (Def: 1)';
                            document.getElementById('equipamentoMaoEsquerda').title = 'Crown Shield (Def: 1)';
                        }
                        equipamentos[8] = parseInt(strDados[8]);
                    }
                }

            }

            mensagemDoSistema = function(mensagem){
                switch(identificadorDoChat){
                    case 0:
                        mensagensDoChatDefault += '\n\n' + mensagem;
                        document.getElementById('textareaChat').value = mensagensDoChatDefault;
                        break;
                    case 1:
                        mensagensDoChatServerLog += '\n\n' + mensagem;
                        document.getElementById('textareaChat').value = mensagensDoChatServerLog;
                        break;
                    case 2:
                        mensagensDoChatNpc += '\n\n' + mensagem;
                        document.getElementById('textareaChat').value = mensagensDoChatNpc;
                        break;
                }
                dataDiv2 = new Date();
                dataDiv2.setMilliseconds(dataDiv2.getMilliseconds() + 1000);
                document.getElementById('mensagemDiv2').innerHTML = mensagem;
            }

            moverCimaBot = function(comando){
                if(comando)
                    botFree = false;
                if(verificarPosicaoValidaBot(-1, 0)){
                    matrizDoMapa[posicaoBot[0]][posicaoBot[1]] = 0;
                    matrizDoMapa[posicaoBot[0]-1][posicaoBot[1]] = 51;
                    posicaoBot[0] = posicaoBot[0]-1;
                } 
                else{
                    if(comando)
                        mensagemDoSistema('Bot: Caminho bloqueado.');
                }
            }

            moverDireitaBot = function(comando){
                if(comando)
                    botFree = false;
                if(verificarPosicaoValidaBot(0, 1)){
                    matrizDoMapa[posicaoBot[0]][posicaoBot[1]] = 0;
                    matrizDoMapa[posicaoBot[0]][posicaoBot[1]+1] = 51;
                    posicaoBot[1] = posicaoBot[1]+1;
                }
                else{
                    if(comando)
                        mensagemDoSistema('Bot: Caminho bloqueado.');
                }
            }

            moverBaixoBot = function(comando){
                if(comando)
                    botFree = false;
                if(verificarPosicaoValidaBot(1, 0)){
                    matrizDoMapa[posicaoBot[0]][posicaoBot[1]] = 0;
                    matrizDoMapa[posicaoBot[0]+1][posicaoBot[1]] = 51;
                    posicaoBot[0] = posicaoBot[0]+1;
                }
                else{
                    if(comando)
                        mensagemDoSistema('Bot: Caminho bloqueado.');
                }
            }

            moverEsquerdaBot = function(comando){
                if(comando)
                    botFree = false;
                if(verificarPosicaoValidaBot(0, -1)){
                    matrizDoMapa[posicaoBot[0]][posicaoBot[1]] = 0;
                    matrizDoMapa[posicaoBot[0]][posicaoBot[1]-1] = 51;
                    posicaoBot[1] = posicaoBot[1]-1;
                }
                else{
                    if(comando)
                        mensagemDoSistema('Bot: Caminho bloqueado.');
                }
            }

            moverJangada = function(direcao){
                switch(direcao){
                    case 0:
                        if(posicaoJangada[0] == 82)
                            break;
                        if(posicaoJangada[0] == 89){
                            matrizDoMapa[posicaoJangada[0]+1][posicaoJangada[1]] = 26;
                            matrizDoMapa[posicaoJangada[0]+1][posicaoJangada[1]+1] = 33;
                            matrizDoMapa[posicaoJangada[0]+1][posicaoJangada[1]+2] = 35; 
                            matrizDoMapa[posicaoJangada[0]+1][posicaoJangada[1]+3] = 26;
                        } else{
                            matrizDoMapa[posicaoJangada[0]+1][posicaoJangada[1]] = 26;
                            matrizDoMapa[posicaoJangada[0]+1][posicaoJangada[1]+1] = 26;
                            matrizDoMapa[posicaoJangada[0]+1][posicaoJangada[1]+2] = 26; 
                            matrizDoMapa[posicaoJangada[0]+1][posicaoJangada[1]+3] = 26;
                        }
                        matrizDoMapa[posicaoJangada[0]-1][posicaoJangada[1]] = 53;
                        matrizDoMapa[posicaoJangada[0]-1][posicaoJangada[1]+1] = 52;
                        matrizDoMapa[posicaoJangada[0]-1][posicaoJangada[1]+2] = 52; 
                        matrizDoMapa[posicaoJangada[0]-1][posicaoJangada[1]+3] = 54;
                        posicaoJangada[0]--;
                        posicaoDoPersonagemNaMatriz[0]--;
                        break;
                    case 2:
                        if(posicaoJangada[0] == 89)
                            break;
                        if(posicaoJangada[0] == 82){
                            matrizDoMapa[posicaoJangada[0]][posicaoJangada[1]] = 26;
                            matrizDoMapa[posicaoJangada[0]][posicaoJangada[1]+1] = 38;
                            matrizDoMapa[posicaoJangada[0]][posicaoJangada[1]+2] = 38; 
                            matrizDoMapa[posicaoJangada[0]][posicaoJangada[1]+3] = 26;
                        } else{
                            matrizDoMapa[posicaoJangada[0]][posicaoJangada[1]] = 26;
                            matrizDoMapa[posicaoJangada[0]][posicaoJangada[1]+1] = 26;
                            matrizDoMapa[posicaoJangada[0]][posicaoJangada[1]+2] = 26; 
                            matrizDoMapa[posicaoJangada[0]][posicaoJangada[1]+3] = 26;
                        }
                        matrizDoMapa[posicaoJangada[0]+2][posicaoJangada[1]] = 53;
                        matrizDoMapa[posicaoJangada[0]+2][posicaoJangada[1]+1] = 52;
                        matrizDoMapa[posicaoJangada[0]+2][posicaoJangada[1]+2] = 52; 
                        matrizDoMapa[posicaoJangada[0]+2][posicaoJangada[1]+3] = 54;
                        posicaoJangada[0]++;
                        posicaoDoPersonagemNaMatriz[0]++;
                        break;
                }
            }

            moverPorta = function(direcao, direcaoPersonagem){
                switch(direcao){
                    case 0:
                        break;
                    case 1:
                        break;
                    case 2:
                        break;
                    case 3:
                        if(direcaoPersonagem == 3){
                            if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 71){
                                matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] = 73;
                                matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]-1] = 74;
                                revelarCasa(3);
                            }else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 72){
                                matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]-1] = 73;
                                matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] = 74;
                                revelarCasa(3);
                            }else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 73){
                                matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] = 71;
                                matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]-1] = 72;
                                esconderCasa(3);
                            }else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 74){
                                matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]-1] = 71;
                                matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] = 72;
                                esconderCasa(3);
                            }
                        }else if(direcaoPersonagem == 1){
                            if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 71){
                                matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] = 73;
                                matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]+1] = 74;
                            }else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 72){
                                matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]+1] = 73;
                                matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] = 74;
                            }else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 73){
                                matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] = 71;
                                matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]+1] = 72;
                            }else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 74){
                                matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]+1] = 71;
                                matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] = 72;
                            }
                        }
                        break;
                }
            }

            revelarCasa = function(direcao){
                let linhaInicial = posicaoDoPersonagemNaMatriz[0], colunaInicial = posicaoDoPersonagemNaMatriz[1], linha = 0, coluna = 0;
                switch(direcao){
                    case 0:
                        break;
                    case 1:
                        break;
                    case 2:
                        break;
                    case 3:
                        if(
                            matrizDoMapa[linhaInicial][colunaInicial-2] != 61 &&
                            matrizDoMapa[linhaInicial][colunaInicial-2] != 62
                        ){
                            break;
                        }
                        coluna-=2;
                        while(matrizDoMapa[linhaInicial+linha][colunaInicial+coluna] != 58){
                            if(matrizDoMapa[linhaInicial+linha][colunaInicial+coluna] == 60){
                                matrizDoMapa[linhaInicial+linha][colunaInicial+coluna] = 77;
                                linha++;
                                while(matrizDoMapa[linhaInicial+linha][colunaInicial+coluna] != 62){
                                    if(matrizDoMapaOriginal[linhaInicial+linha][colunaInicial+coluna] != 92)
                                        matrizDoMapa[linhaInicial+linha][colunaInicial+coluna] = 0;
                                    else
                                        matrizDoMapa[linhaInicial+linha][colunaInicial+coluna] = matrizDoMapaOriginal[linhaInicial+linha][colunaInicial+coluna];
                                    linha++;
                                }
                                if(matrizDoMapaOriginal[linhaInicial+linha][colunaInicial+coluna] != 92)
                                    matrizDoMapa[linhaInicial+linha][colunaInicial+coluna] = 0;
                                else
                                    matrizDoMapa[linhaInicial+linha][colunaInicial+coluna] = matrizDoMapaOriginal[linhaInicial+linha][colunaInicial+coluna];
                                coluna--;
                                continue;
                            }else if(matrizDoMapa[linhaInicial+linha][colunaInicial+coluna] == 59){
                                matrizDoMapa[linhaInicial+linha][colunaInicial+coluna] = 76;
                                linha++;
                                while(matrizDoMapa[linhaInicial+linha][colunaInicial+coluna] != 63){
                                    if(matrizDoMapaOriginal[linhaInicial+linha][colunaInicial+coluna] != 92)
                                        matrizDoMapa[linhaInicial+linha][colunaInicial+coluna] = 0;
                                    else
                                        matrizDoMapa[linhaInicial+linha][colunaInicial+coluna] = matrizDoMapaOriginal[linhaInicial+linha][colunaInicial+coluna];
                                    linha++;
                                }
                                if(matrizDoMapaOriginal[linhaInicial+linha][colunaInicial+coluna] != 92)
                                    matrizDoMapa[linhaInicial+linha][colunaInicial+coluna] = 0;
                                else
                                    matrizDoMapa[linhaInicial+linha][colunaInicial+coluna] = matrizDoMapaOriginal[linhaInicial+linha][colunaInicial+coluna];
                                coluna--;
                                continue;
                            }else if(matrizDoMapa[linhaInicial+linha][colunaInicial+coluna] == 64){
                                matrizDoMapa[linhaInicial+linha][colunaInicial+coluna] = 78;
                                linha--;
                                while(matrizDoMapa[linhaInicial+linha][colunaInicial+coluna] != 58){
                                    matrizDoMapa[linhaInicial+linha][colunaInicial+coluna] = 79;
                                    linha--;
                                }
                                continue;
                            }else{
                                linha--;
                                continue;
                            }
                        }
                        matrizDoMapa[linhaInicial+linha][colunaInicial+coluna] = 75;
                        break;
                    case 4:
                        if(
                            matrizDoMapa[linhaInicial][colunaInicial] != 57 &&
                            matrizDoMapa[linhaInicial][colunaInicial] != 61 &&
                            matrizDoMapa[linhaInicial][colunaInicial] != 62 &&
                            matrizDoMapa[linhaInicial][colunaInicial] != 63
                        ){
                            break;
                        }
                        while(
                            matrizDoMapa[linhaInicial+linha][colunaInicial+coluna] != 61 && 
                            matrizDoMapa[linhaInicial+linha][colunaInicial+coluna] != 62
                        ){
                            coluna++;
                        }
                        while(matrizDoMapa[linhaInicial+linha][colunaInicial+coluna] != 58){
                            if(matrizDoMapa[linhaInicial+linha][colunaInicial+coluna] == 60){
                                matrizDoMapa[linhaInicial+linha][colunaInicial+coluna] = 77;
                                linha++;
                                while(matrizDoMapa[linhaInicial+linha][colunaInicial+coluna] != 62){
                                    if(matrizDoMapaOriginal[linhaInicial+linha][colunaInicial+coluna] != 92)
                                        matrizDoMapa[linhaInicial+linha][colunaInicial+coluna] = 0;
                                    else
                                        matrizDoMapa[linhaInicial+linha][colunaInicial+coluna] = matrizDoMapaOriginal[linhaInicial+linha][colunaInicial+coluna];
                                    linha++;
                                }
                                if(matrizDoMapaOriginal[linhaInicial+linha][colunaInicial+coluna] != 92)
                                    matrizDoMapa[linhaInicial+linha][colunaInicial+coluna] = 0;
                                else
                                    matrizDoMapa[linhaInicial+linha][colunaInicial+coluna] = matrizDoMapaOriginal[linhaInicial+linha][colunaInicial+coluna];
                                coluna--;
                                continue;
                            }else if(matrizDoMapa[linhaInicial+linha][colunaInicial+coluna] == 59){
                                matrizDoMapa[linhaInicial+linha][colunaInicial+coluna] = 76;
                                linha++;
                                while(matrizDoMapa[linhaInicial+linha][colunaInicial+coluna] != 63){
                                    if(matrizDoMapaOriginal[linhaInicial+linha][colunaInicial+coluna] != 92)
                                        matrizDoMapa[linhaInicial+linha][colunaInicial+coluna] = 0;
                                    else
                                        matrizDoMapa[linhaInicial+linha][colunaInicial+coluna] = matrizDoMapaOriginal[linhaInicial+linha][colunaInicial+coluna];
                                    linha++;
                                }
                                if(matrizDoMapaOriginal[linhaInicial+linha][colunaInicial+coluna] != 92)
                                    matrizDoMapa[linhaInicial+linha][colunaInicial+coluna] = 0;
                                else
                                    matrizDoMapa[linhaInicial+linha][colunaInicial+coluna] = matrizDoMapaOriginal[linhaInicial+linha][colunaInicial+coluna];
                                coluna--;
                                continue;
                            }else if(matrizDoMapa[linhaInicial+linha][colunaInicial+coluna] == 64){
                                matrizDoMapa[linhaInicial+linha][colunaInicial+coluna] = 78;
                                linha--;
                                while(matrizDoMapa[linhaInicial+linha][colunaInicial+coluna] != 58){
                                    matrizDoMapa[linhaInicial+linha][colunaInicial+coluna] = 79;
                                    linha--;
                                }
                                continue;
                            }else{
                                linha--;
                                continue;
                            }
                        }
                        matrizDoMapa[linhaInicial+linha][colunaInicial+coluna] = 75;
                        break;
                }
            }

            esconderCasa = function(direcao){
                let linhaInicial = posicaoDoPersonagemNaMatriz[0], colunaInicial = posicaoDoPersonagemNaMatriz[1], linha = 0, coluna = 0;
                switch(direcao){
                    case 0:
                        break;
                    case 1:
                        break;
                    case 2:
                        break;
                    case 3:
                        coluna-=2;
                        while(matrizDoMapa[linhaInicial+linha][colunaInicial+coluna] != 75){
                            if(matrizDoMapa[linhaInicial+linha][colunaInicial+coluna] == 77){
                                matrizDoMapa[linhaInicial+linha][colunaInicial+coluna] = 60;
                                linha++;
                                while(matrizDoMapa[linhaInicial+linha][colunaInicial+coluna] != 69){
                                    matrizDoMapa[linhaInicial+linha][colunaInicial+coluna] = 61;
                                    linha++;
                                }
                                matrizDoMapa[linhaInicial+linha-1][colunaInicial+coluna] = 62;
                                coluna--;
                                continue;
                            }else if(matrizDoMapa[linhaInicial+linha][colunaInicial+coluna] == 76){
                                matrizDoMapa[linhaInicial+linha][colunaInicial+coluna] = 59;
                                linha++;
                                while(matrizDoMapa[linhaInicial+linha][colunaInicial+coluna] != 69){
                                    matrizDoMapa[linhaInicial+linha][colunaInicial+coluna] = 57;
                                    linha++;
                                }
                                matrizDoMapa[linhaInicial+linha-1][colunaInicial+coluna] = 63;
                                coluna--;
                                continue;
                            }else if(matrizDoMapa[linhaInicial+linha][colunaInicial+coluna] == 70){
                                matrizDoMapa[linhaInicial+(--linha)][colunaInicial+coluna] = 64;
                                linha--;
                                while(matrizDoMapa[linhaInicial+linha][colunaInicial+coluna] != 75){
                                    matrizDoMapa[linhaInicial+linha][colunaInicial+coluna] = 65;
                                    linha--;
                                }
                                continue;
                            }else{
                                linha--;
                                continue;
                            }
                        }
                        matrizDoMapa[linhaInicial+linha][colunaInicial+coluna] = 58;
                        break;
                }
            }

            escolherOutfit = function(){
                switch(direcaoDoPersonagem){
                    case 0:
                        if(outfit == "M"){
                            document.getElementById('personagem1').src = 'imagens/imagemPersonagemDeCostas.png';
                        }else if(outfit == "F"){
                            document.getElementById('personagem1').src = 'imagens/imagemPersonagemDeCostasF.png';
                        }else if(outfit == "P"){
                            document.getElementById('personagem1').src = 'imagens/person2.png';
                        }else if(outfit == "W"){
                            document.getElementById('personagem1').src = 'imagens/personF2.png';
                        }
                        break;
                    case 1:
                        if(outfit == "M"){
                            document.getElementById('personagem1').src = 'imagens/imagemPersonagemDeDireita.png';
                        }else if(outfit == "F"){
                            document.getElementById('personagem1').src = 'imagens/imagemPersonagemDeDireitaF.png';
                        }else if(outfit == "P"){
                            document.getElementById('personagem1').src = 'imagens/person4.png';
                        }else if(outfit == "W"){
                            document.getElementById('personagem1').src = 'imagens/personF4.png';
                        }
                        break;
                    case 2:
                        if(outfit == "M"){
                            document.getElementById('personagem1').src = 'imagens/imagemPersonagemDeFrente.png';
                        }else if(outfit == "F"){
                            document.getElementById('personagem1').src = 'imagens/imagemPersonagemDeFrenteF.png';
                        }else if(outfit == "P"){
                            document.getElementById('personagem1').src = 'imagens/person1.png';
                        }else if(outfit == "W"){
                            document.getElementById('personagem1').src = 'imagens/personF1.png';
                        }
                        break;
                    case 3:
                        if(outfit == "M"){
                            document.getElementById('personagem1').src = 'imagens/imagemPersonagemDeEsquerda.png';
                        }else if(outfit == "F"){
                            document.getElementById('personagem1').src = 'imagens/imagemPersonagemDeEsquerdaF.png';
                        }else if(outfit == "P"){
                            document.getElementById('personagem1').src = 'imagens/person3.png';
                        }else if(outfit == "W"){
                            document.getElementById('personagem1').src = 'imagens/personF3.png';
                        }
                        break;    
                }
            }

            obterEquipamento = function(i, j){
                if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+i][posicaoDoPersonagemNaMatriz[1]+j] == 55){
                    equipamentos[1] = 1;
                    document.getElementById("equipamentoMaoDireita").style.backgroundImage = "url('imagens/Spike_Sword_Equip.png')";
                    document.getElementById('equipamentoMaoDireita').alt = 'Spike Sword (Arm: 1)';
                    document.getElementById('equipamentoMaoDireita').title = 'Spike Sword (Arm: 1)';
                    visibilityEquipamentos(document.getElementById('mensagem1').style.visibility == 'hidden');
                }else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+i][posicaoDoPersonagemNaMatriz[1]+j] == 56){
                    equipamentos[7] = 1;
                    document.getElementById("equipamentoMaoEsquerda").style.backgroundImage = "url('imagens/Crown_Shield_Equip.png')";
                    document.getElementById('equipamentoMaoEsquerda').alt = 'Crown Shield (Def: 1)';
                    document.getElementById('equipamentoMaoEsquerda').title = 'Crown Shield (Def: 1)';
                    visibilityEquipamentos(document.getElementById('mensagem1').style.visibility == 'hidden');
                }else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+i][posicaoDoPersonagemNaMatriz[1]+j] == 92){
                    if(document.getElementById("tablet").style.visibility == "hidden")
                        document.getElementById("tablet").style.visibility = "visible";
                    else if(document.getElementById("tablet").style.visibility == "visible")
                        document.getElementById("tablet").style.visibility = "hidden";
                }
            }

            corlifecampo = function(i, j){
                if(parseInt(document.getElementById("barraHpCampo-" + i + "-" + j).style.width.split('p')[0]) <= 13){ 
                    document.getElementById("nomeCampo-" + i + "-" + j).style.color = 'tomato';
                    document.getElementById("barraHpCampo-" + i + "-" + j).style.background = 'tomato';
                } else if(parseInt(document.getElementById("barraHpCampo-" + i + "-" + j).style.width.split('p')[0]) <= 25){ 
                    document.getElementById("nomeCampo-" + i + "-" + j).style.color = 'orange';
                    document.getElementById("barraHpCampo-" + i + "-" + j).style.background = 'orange';
                } else if(parseInt(document.getElementById("barraHpCampo-" + i + "-" + j).style.width.split('p')[0]) > 25){ 
                    document.getElementById("nomeCampo-" + i + "-" + j).style.color = 'mediumseagreen';
                    document.getElementById("barraHpCampo-" + i + "-" + j).style.background = 'mediumseagreen';
                }
            }

            funcPersonagemMorto = function(){
                hp = 0;
                personagemMorto = true;
                posicaoDoPersonagemNaMatriz = [7,8];
                visibilityEquipamentos(false);
                document.getElementById('mensagem1').src = 'imagens/imagemMensagemPersonagemMorto.png';
                document.getElementById('mensagem1').alt = 'mensagem';
                document.getElementById('mensagem1').title = 'mensagem';
                document.getElementById('mensagem1').style.visibility = 'visible';
                document.getElementById('ok').style.visibility = 'visible'; 
                document.getElementById('cancel').style.visibility = 'visible';
            }
            
            calculaLevel = function(){
                let expaux = nivel;
                lvlatual=0;
                for(lvlatual=1; expaux >= 0; lvlatual++){
                    expaux = expaux - lvlatual;
                }
                lvlatual--;
                
                let expmin = nivel - (lvlatual + expaux);
                let expmax = nivel - expaux -1;
                let exptotal = 0;
                (expmax - expmin)?exptotal = (expmax - expmin):exptotal = 1;

                document.getElementById('levelvalor').innerHTML = lvlatual;

                document.getElementById('nivelvalor').innerHTML = nivel;
                document.getElementById('barraxp').style.width = (165 * (nivel - expmin)) / exptotal;
                document.getElementById('speedvalor').innerHTML = (lvlatual < 490)?(109+lvlatual):'max';
                document.getElementById('hpvalor').innerHTML = hp;
                hpmax = ((lvlatual-1) * 15) + 176;
                document.getElementById('hp').style.width = (176 * hp) / hpmax;
                
                if(parseInt(document.getElementById('hp').style.width.split('p')[0]) <= 44){ 
                    document.getElementById('hp').style.background = 'tomato';
                    document.getElementById('nomePersonagem1').style.color = 'tomato';
                    document.getElementById('barraHpPersonagem1').style.background = 'tomato';
                } else if(parseInt(document.getElementById('hp').style.width.split('p')[0]) <= 88){ 
                    document.getElementById('hp').style.background = 'orange';
                    document.getElementById('nomePersonagem1').style.color = 'orange';
                    document.getElementById('barraHpPersonagem1').style.background = 'orange';
                } else if(parseInt(document.getElementById('hp').style.width.split('p')[0]) > 88){ 
                    document.getElementById('hp').style.background = 'mediumseagreen';
                    document.getElementById('nomePersonagem1').style.color = 'mediumseagreen';
                    document.getElementById('barraHpPersonagem1').style.background = 'mediumseagreen';
                }

                document.getElementById('barraHpPersonagem1').style.width = (50 * hp) / hpmax;

                document.getElementById('personagem1').title = username + " level: " + lvlatual.toString() + " hp: " + hp.toString();

                (lvlatual < 490)?( esperaPorQuadro = 5 - (lvlatual*0.01) ):(esperaPorQuadro = 0.1);

                if(lvlantigo && lvlantigo < lvlatual){
                    mensagensDoChatDefault += "\n\nVocê avançou do Level " + lvlantigo + " para o Level " + lvlatual;
                    dataDiv1 = new Date();
                    dataDiv1.setMilliseconds(dataDiv1.getMilliseconds() + 10000);
                    document.getElementById('mensagemDiv1').style.color = "white";
                    document.getElementById('mensagemDiv1').innerHTML = "Você avançou do Level " + lvlantigo + " para o Level " + lvlatual;
                }

                lvlantigo = lvlatual;

            }

            regeneracao = function(curaPadrao, tipoDeCura){
                let cura;
                
                if(tipoDeCura == "curou"){
                    cura = getRandomIntInclusive(((40*curaPadrao)+(lvlatual*curaPadrao)),((40*curaPadrao)+(lvlatual*curaPadrao*2))); 
                }else if(tipoDeCura == "regenerou"){
                    cura = getRandomIntInclusive((lvlatual*curaPadrao),(lvlatual*curaPadrao*2)); 
                }
                if(hp == hpmax){
                    return;
                }
                if(hp + cura < hpmax){
                    hp = hp + cura;
                    document.getElementById('mensagemDiv3').style.color = '#ccffcc';
                    document.getElementById('mensagemDiv3').style.textAlign = 'center';
                    document.getElementById('mensagemDiv3').style.width = 50;
                    document.getElementById('mensagemDiv3').innerHTML = cura;
                    mensagensDoChatServerLog += '\n\nVocê ' + tipoDeCura + ' ' + cura + ' pontos de vida.';
                    setTimeout(function(){ document.getElementById('mensagemDiv3').innerHTML = ''; document.getElementById('mensagemDiv3').style.width = 250; }, 500);
                    document.getElementById('hpvalor').innerHTML = hp;
                    document.getElementById('hp').style.width = (176 * hp) / hpmax;
                    document.getElementById('barraHpPersonagem1').style.width = (50 * hp) / hpmax;
                } else {
                    document.getElementById('mensagemDiv3').style.color = '#ccffcc';
                    document.getElementById('mensagemDiv3').style.textAlign = 'center';
                    document.getElementById('mensagemDiv3').style.width = 50;
                    document.getElementById('mensagemDiv3').innerHTML = (hpmax - hp);
                    mensagensDoChatServerLog += '\n\nVocê ' + tipoDeCura + ' ' + (hpmax - hp) + ' pontos de vida.';
                    setTimeout(function(){ document.getElementById('mensagemDiv3').innerHTML = ''; document.getElementById('mensagemDiv3').style.width = 250; }, 500);
                    hp = hpmax;
                    document.getElementById('hpvalor').innerHTML = hp;
                    document.getElementById('hp').style.width = 176;
                    document.getElementById('barraHpPersonagem1').style.width = 50;
                }
                if(parseInt(document.getElementById('hp').style.width.split('p')[0]) <= 44){ 
                    document.getElementById('hp').style.background = 'tomato';
                    document.getElementById('nomePersonagem1').style.color = 'tomato';
                    document.getElementById('barraHpPersonagem1').style.background = 'tomato';
                } else if(parseInt(document.getElementById('hp').style.width.split('p')[0]) <= 88){ 
                    document.getElementById('hp').style.background = 'orange';
                    document.getElementById('nomePersonagem1').style.color = 'orange';
                    document.getElementById('barraHpPersonagem1').style.background = 'orange';
                } else if(parseInt(document.getElementById('hp').style.width.split('p')[0]) > 88){ 
                    document.getElementById('hp').style.background = 'mediumseagreen';
                    document.getElementById('nomePersonagem1').style.color = 'mediumseagreen';
                    document.getElementById('barraHpPersonagem1').style.background = 'mediumseagreen';
                }
            }

            utilizarIten = function(id){
                switch(id){
                    case 0:
                        if(mochila[0] == 'PocaoHP'){
                            if(dataMagia <= new Date()){
                                dataMagia = new Date();
                                dataMagia.setMilliseconds(dataMagia.getMilliseconds() + 1000);

                                document.getElementById('fala1').src = 'imagens/imagemFalaPocaoHP.png'; 
                                setTimeout(function(){
                                    document.getElementById('fala1').src = 'imagens/imagemFalaVazia.png';
                                }, 1000);

                                regeneracao(1, "curou"); 

                            }else{
                                dataDiv2 = new Date();
                                dataDiv2.setMilliseconds(dataDiv2.getMilliseconds() + 1000);
                                document.getElementById('mensagemDiv2').innerHTML = 'Você está exausto.'; 
                            }
                        } 
                        break;
                    case 1:
                        if(mochila[1] == 'Corda' && matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]] == 4){
                            posicaoDoPersonagemNaMatriz[0] = posicaoDoPersonagemNaMatriz[0]+13; 
                            posicaoDoPersonagemNaMatriz[1] = posicaoDoPersonagemNaMatriz[1]; 
                            preencherImagens();
                        }else if(mochila[1] == 'Corda'){ 
                            mensagemDoSistema('Sistema: Aqui não é possível subir.');
                        } 
                        break;
                    case 2:
                        if(mochila[2] == 'Pa' && matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]] == 6){
                            posicaoDoPersonagemNaMatriz[0] = posicaoDoPersonagemNaMatriz[0]-14; 
                            posicaoDoPersonagemNaMatriz[1] = posicaoDoPersonagemNaMatriz[1]; 
                            preencherImagens();
                        }else if(mochila[2] == 'Pa'){ 
                            mensagemDoSistema('Sistema: Aqui não é possível cavar.');
                        } 
                        break;
                }
                datainicioinatividade = new Date();
            }

            utilizarMagia = function(id){
                switch(id){
                    case 0:
                        if(exura){
                            document.getElementById('campoDeEscritaInput').value = 'exura';
                            dialogo();
                            document.getElementById('campoDeEscritaInput').value = '';
                        } 
                        break;
                    case 1:
                        if(exuraGran){
                            document.getElementById('campoDeEscritaInput').value = 'exura gran';
                            dialogo();
                            document.getElementById('campoDeEscritaInput').value = '';
                        } 
                        break;
                    case 2:
                        if(exori){
                            document.getElementById('campoDeEscritaInput').value = 'exori';
                            dialogo();
                            document.getElementById('campoDeEscritaInput').value = '';
                        } 
                        break;
                    case 3:
                        if(exoriGran){
                            document.getElementById('campoDeEscritaInput').value = 'exori gran';
                            dialogo();
                            document.getElementById('campoDeEscritaInput').value = '';
                        } 
                        break;
                }
                datainicioinatividade = new Date();
            }

            recompensaSacola = function(linha,coluna){
                let id;

                if(
                    (
                        ((posicaoDoPersonagemNaMatriz[0]+linha) == 7 && (posicaoDoPersonagemNaMatriz[1]+coluna) == 9) ||
                        ((posicaoDoPersonagemNaMatriz[0]+linha) == 62 && (posicaoDoPersonagemNaMatriz[1]+coluna) == 12)
                    ) && !questFerramentas
                ){
                    id = 0;
                    questFerramentas = true;
                }
                if((posicaoDoPersonagemNaMatriz[0]+linha) == 62 && (posicaoDoPersonagemNaMatriz[1]+coluna) == 26
                &&
                    (
                        quest1 == 0 ||
                        quest1 == 70 ||
                        quest1 == 10 ||
                        quest1 == 80 
                    )
                ){
                    id = 1;
                }else if((posicaoDoPersonagemNaMatriz[0]+linha) == 62 && (posicaoDoPersonagemNaMatriz[1]+coluna) == 26){
                    document.getElementById('fala1').src = 'imagens/imagemFalaItemVazio.png';
                    setTimeout(function(){ document.getElementById('fala1').src = 'imagens/imagemFalaVazia.png';}, 1000);
                }
                if((posicaoDoPersonagemNaMatriz[0]+linha) == 72 && (posicaoDoPersonagemNaMatriz[1]+coluna) == 29 
                &&
                    (
                        quest2 == 0 ||
                        quest2 == 130 ||
                        quest2 == 20 ||
                        quest2 == 150 
                    )
                ){
                    id = 2;
                }else if((posicaoDoPersonagemNaMatriz[0]+linha) == 72 && (posicaoDoPersonagemNaMatriz[1]+coluna) == 29){
                    document.getElementById('fala1').src = 'imagens/imagemFalaItemVazio.png';
                    setTimeout(function(){ document.getElementById('fala1').src = 'imagens/imagemFalaVazia.png';}, 1000);
                }
                if((posicaoDoPersonagemNaMatriz[0]+linha) == 62 && (posicaoDoPersonagemNaMatriz[1]+coluna) == 33 
                &&
                    (
                        quest3 == 0 ||
                        quest3 == 200 ||
                        quest3 == 30 ||
                        quest3 == 230 
                    )
                ){
                    id = 3;
                }else if((posicaoDoPersonagemNaMatriz[0]+linha) == 62 && (posicaoDoPersonagemNaMatriz[1]+coluna) == 33){
                    document.getElementById('fala1').src = 'imagens/imagemFalaItemVazio.png';
                    setTimeout(function(){ document.getElementById('fala1').src = 'imagens/imagemFalaVazia.png';}, 1000);
                }
                if((posicaoDoPersonagemNaMatriz[0]+linha) == 72 && (posicaoDoPersonagemNaMatriz[1]+coluna) == 37 
                &&
                    (
                        quest1 == 0 ||
                        quest1 == 30 ||
                        quest1 == 10 ||
                        quest1 == 40 
                    )
                ){
                    id = 4;
                }else if((posicaoDoPersonagemNaMatriz[0]+linha) == 72 && (posicaoDoPersonagemNaMatriz[1]+coluna) == 37){
                    document.getElementById('fala1').src = 'imagens/imagemFalaItemVazio.png';
                    setTimeout(function(){ document.getElementById('fala1').src = 'imagens/imagemFalaVazia.png';}, 1000);
                }
                if((posicaoDoPersonagemNaMatriz[0]+linha) == 62 && (posicaoDoPersonagemNaMatriz[1]+coluna) == 40 
                &&
                    ( 
                        quest2 == 0 ||
                        quest2 == 70 ||
                        quest2 == 20 ||
                        quest2 == 90 
                    )
                ){
                    id = 5;
                }else if((posicaoDoPersonagemNaMatriz[0]+linha) == 62 && (posicaoDoPersonagemNaMatriz[1]+coluna) == 40){
                    document.getElementById('fala1').src = 'imagens/imagemFalaItemVazio.png';
                    setTimeout(function(){ document.getElementById('fala1').src = 'imagens/imagemFalaVazia.png';}, 1000);
                }
                if((posicaoDoPersonagemNaMatriz[0]+linha) == 72 && (posicaoDoPersonagemNaMatriz[1]+coluna) == 43
                &&
                    ( 
                        quest3 == 0 ||
                        quest3 == 100 ||
                        quest3 == 30 ||
                        quest3 == 130
                    )
                ){
                    id = 6;
                }else if((posicaoDoPersonagemNaMatriz[0]+linha) == 72 && (posicaoDoPersonagemNaMatriz[1]+coluna) == 43){
                    document.getElementById('fala1').src = 'imagens/imagemFalaItemVazio.png';
                    setTimeout(function(){ document.getElementById('fala1').src = 'imagens/imagemFalaVazia.png';}, 1000);
                }
                if((posicaoDoPersonagemNaMatriz[0]+linha) == 71 && (posicaoDoPersonagemNaMatriz[1]+coluna) == 47 
                && 
                    (
                        quest1 == 0 ||
                        quest1 == 30 ||
                        quest1 == 70 ||
                        quest1 == 100 
                    )
                ){
                    id = 7;
                }else if((posicaoDoPersonagemNaMatriz[0]+linha) == 71 && (posicaoDoPersonagemNaMatriz[1]+coluna) == 47){
                    document.getElementById('fala1').src = 'imagens/imagemFalaItemVazio.png';
                    setTimeout(function(){ document.getElementById('fala1').src = 'imagens/imagemFalaVazia.png';}, 1000);
                }
                if((posicaoDoPersonagemNaMatriz[0]+linha) == 67 && (posicaoDoPersonagemNaMatriz[1]+coluna) == 47 
                &&
                    (
                        quest2 == 0 ||
                        quest2 == 70 ||
                        quest2 == 130 ||
                        quest2 == 200 
                    )
                ){
                    id = 8;
                }else if((posicaoDoPersonagemNaMatriz[0]+linha) == 67 && (posicaoDoPersonagemNaMatriz[1]+coluna) == 47){
                    document.getElementById('fala1').src = 'imagens/imagemFalaItemVazio.png';
                    setTimeout(function(){ document.getElementById('fala1').src = 'imagens/imagemFalaVazia.png';}, 1000);
                }
                if((posicaoDoPersonagemNaMatriz[0]+linha) == 63 && (posicaoDoPersonagemNaMatriz[1]+coluna) == 47 
                && 
                    (
                        quest3 == 0 ||
                        quest3 == 100 ||
                        quest3 == 200 ||
                        quest3 == 300 
                    )
                ){
                    id = 9;
                }else if((posicaoDoPersonagemNaMatriz[0]+linha) == 63 && (posicaoDoPersonagemNaMatriz[1]+coluna) == 47){
                    document.getElementById('fala1').src = 'imagens/imagemFalaItemVazio.png';
                    setTimeout(function(){ document.getElementById('fala1').src = 'imagens/imagemFalaVazia.png';}, 1000);
                }
                if((posicaoDoPersonagemNaMatriz[0]+linha) == 84 && (posicaoDoPersonagemNaMatriz[1]+coluna) == 32 
                && 
                    (
                        quest4 == 0 ||
                        quest4 == 130 ||
                        quest4 == 180 ||
                        quest4 == 310 
                    )
                ){
                    id = 10;
                }else if((posicaoDoPersonagemNaMatriz[0]+linha) == 84 && (posicaoDoPersonagemNaMatriz[1]+coluna) == 32){
                    document.getElementById('fala1').src = 'imagens/imagemFalaItemVazio.png';
                    setTimeout(function(){ document.getElementById('fala1').src = 'imagens/imagemFalaVazia.png';}, 1000);
                }
                if((posicaoDoPersonagemNaMatriz[0]+linha) == 76 && (posicaoDoPersonagemNaMatriz[1]+coluna) == 47 
                && 
                    (
                        quest4 == 0 ||
                        quest4 == 90 ||
                        quest4 == 180 ||
                        quest4 == 270 
                    )
                ){
                    id = 11;
                }else if((posicaoDoPersonagemNaMatriz[0]+linha) == 76 && (posicaoDoPersonagemNaMatriz[1]+coluna) == 47){
                    document.getElementById('fala1').src = 'imagens/imagemFalaItemVazio.png';
                    setTimeout(function(){ document.getElementById('fala1').src = 'imagens/imagemFalaVazia.png';}, 1000);
                }
                if((posicaoDoPersonagemNaMatriz[0]+linha) == 85 && (posicaoDoPersonagemNaMatriz[1]+coluna) == 46 
                && 
                    (
                        quest4 == 0 ||
                        quest4 == 90 ||
                        quest4 == 130 ||
                        quest4 == 220 
                    )
                ){
                    id = 12;
                }else if((posicaoDoPersonagemNaMatriz[0]+linha) == 85 && (posicaoDoPersonagemNaMatriz[1]+coluna) == 46){
                    document.getElementById('fala1').src = 'imagens/imagemFalaItemVazio.png';
                    setTimeout(function(){ document.getElementById('fala1').src = 'imagens/imagemFalaVazia.png';}, 1000);
                }

                if(id == null){
                    return;
                }

                switch(id){
                    case 0:
                        mochila[0] = 'PocaoHP';
                        document.getElementById('itemCampoDaMochila1').src = 'imagens/imagemPocaoHP.png';
                        document.getElementById('itemCampoDaMochila1').alt = 'pocao hp';
                        document.getElementById('itemCampoDaMochila1').title = 'pocao hp';
                        mochila[1] = 'Corda';
                        document.getElementById('itemCampoDaMochila2').src = 'imagens/imagemCorda.png';
                        document.getElementById('itemCampoDaMochila2').alt = 'corda';
                        document.getElementById('itemCampoDaMochila2').title = 'corda';
                        mochila[2] = 'Pa';
                        document.getElementById('itemCampoDaMochila3').src = 'imagens/imagemPa.png';
                        document.getElementById('itemCampoDaMochila3').alt = 'pa';
                        document.getElementById('itemCampoDaMochila3').title = 'pa';
                        break;
                    case 1:
                        quest1 += 30;
                        nivel += 30;
                        calculaLevel();
                        mensagemGanhouExperiencia(30);
                        break;
                    case 2:
                        quest2 += 70;
                        nivel += 70;
                        calculaLevel();
                        mensagemGanhouExperiencia(70);
                        break;
                    case 3:
                        quest3 += 100;
                        nivel += 100;
                        calculaLevel();
                        mensagemGanhouExperiencia(100);
                        break;
                    case 4:
                        quest1 += 70;
                        nivel += 70;
                        calculaLevel();
                        mensagemGanhouExperiencia(70);
                        break;
                    case 5:
                        quest2 += 130;
                        nivel += 130;
                        calculaLevel();
                        mensagemGanhouExperiencia(130);
                        break;
                    case 6:
                        quest3 += 200;
                        nivel += 200;
                        calculaLevel();
                        mensagemGanhouExperiencia(200);
                        break;
                    case 7:
                        quest1 += 10;
                        nivel += 10;
                        calculaLevel();
                        mensagemGanhouExperiencia(10);
                        break;
                    case 8:
                        quest2 += 20;
                        nivel += 20;
                        calculaLevel();
                        mensagemGanhouExperiencia(20);
                        break;
                    case 9:
                        quest3 += 30;
                        nivel += 30;
                        calculaLevel();
                        mensagemGanhouExperiencia(30);
                        break;
                    case 10:
                        quest4 += 90;
                        nivel += 90;
                        calculaLevel();
                        mensagemGanhouExperiencia(90);
                        break;
                    case 11:
                        quest4 += 130;
                        nivel += 130;
                        calculaLevel();
                        mensagemGanhouExperiencia(130);
                        break;
                    case 12:
                        quest4 += 180;
                        nivel += 180;
                        calculaLevel();
                        mensagemGanhouExperiencia(180);
                        break;
                }

                document.getElementById('fala1').src = 'imagens/imagemFalaDeposit.png'; 
                setTimeout(function(){ document.getElementById('fala1').src = 'imagens/imagemFalaVazia.png';}, 1000); 
                matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+linha][posicaoDoPersonagemNaMatriz[1]+coluna] = 3;
            }

            verificarPosicaoValida = function(linha, coluna){
                return (matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+linha][posicaoDoPersonagemNaMatriz[1]+coluna] == 10 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+linha][posicaoDoPersonagemNaMatriz[1]+coluna] == 18 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+linha][posicaoDoPersonagemNaMatriz[1]+coluna] == 21 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+linha][posicaoDoPersonagemNaMatriz[1]+coluna] == 47 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+linha][posicaoDoPersonagemNaMatriz[1]+coluna] == 50 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+linha][posicaoDoPersonagemNaMatriz[1]+coluna] == 0 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+linha][posicaoDoPersonagemNaMatriz[1]+coluna] == 51 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+linha][posicaoDoPersonagemNaMatriz[1]+coluna] == 52 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+linha][posicaoDoPersonagemNaMatriz[1]+coluna] == 4 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+linha][posicaoDoPersonagemNaMatriz[1]+coluna] == 6 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+linha][posicaoDoPersonagemNaMatriz[1]+coluna] == 7 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+linha][posicaoDoPersonagemNaMatriz[1]+coluna] == 12 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+linha][posicaoDoPersonagemNaMatriz[1]+coluna] == 13 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+linha][posicaoDoPersonagemNaMatriz[1]+coluna] == 14 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+linha][posicaoDoPersonagemNaMatriz[1]+coluna] == 15 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+linha][posicaoDoPersonagemNaMatriz[1]+coluna] == 22 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+linha][posicaoDoPersonagemNaMatriz[1]+coluna] == 23 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+linha][posicaoDoPersonagemNaMatriz[1]+coluna] == 24 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+linha][posicaoDoPersonagemNaMatriz[1]+coluna] == 25 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+linha][posicaoDoPersonagemNaMatriz[1]+coluna] == 84 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+linha][posicaoDoPersonagemNaMatriz[1]+coluna] == 85 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+linha][posicaoDoPersonagemNaMatriz[1]+coluna] == 86 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+linha][posicaoDoPersonagemNaMatriz[1]+coluna] == 87 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+linha][posicaoDoPersonagemNaMatriz[1]+coluna] == 88 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+linha][posicaoDoPersonagemNaMatriz[1]+coluna] == 89 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+linha][posicaoDoPersonagemNaMatriz[1]+coluna] == 90 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+linha][posicaoDoPersonagemNaMatriz[1]+coluna] == 91);
            }

            verificarPosicaoValidaBot = function(linha, coluna){
                return (matrizDoMapa[posicaoBot[0]+linha][posicaoBot[1]+coluna] == 0 || matrizDoMapa[posicaoBot[0]+linha][posicaoBot[1]+coluna] == 12 || matrizDoMapa[posicaoBot[0]+linha][posicaoBot[1]+coluna] == 13 || matrizDoMapa[posicaoBot[0]+linha][posicaoBot[1]+coluna] == 14 || matrizDoMapa[posicaoBot[0]+linha][posicaoBot[1]+coluna] == 15 || matrizDoMapa[posicaoBot[0]+linha][posicaoBot[1]+coluna] == 22 || matrizDoMapa[posicaoBot[0]+linha][posicaoBot[1]+coluna] == 23 || matrizDoMapa[posicaoBot[0]+linha][posicaoBot[1]+coluna] == 24 || matrizDoMapa[posicaoBot[0]+linha][posicaoBot[1]+coluna] == 25 || matrizDoMapa[posicaoBot[0]+linha][posicaoBot[1]+coluna] == 84 || matrizDoMapa[posicaoBot[0]+linha][posicaoBot[1]+coluna] == 85 || matrizDoMapa[posicaoBot[0]+linha][posicaoBot[1]+coluna] == 86 || matrizDoMapa[posicaoBot[0]+linha][posicaoBot[1]+coluna] == 87 || matrizDoMapa[posicaoBot[0]+linha][posicaoBot[1]+coluna] == 88 || matrizDoMapa[posicaoBot[0]+linha][posicaoBot[1]+coluna] == 89 || matrizDoMapa[posicaoBot[0]+linha][posicaoBot[1]+coluna] == 90 || matrizDoMapa[posicaoBot[0]+linha][posicaoBot[1]+coluna] == 91);
            }

            verificacaoAproximacaoNPC = function(linha, coluna){
                if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+linha][posicaoDoPersonagemNaMatriz[1]+coluna] == 11){
                    document.getElementById('campoDeEscritaInput').value = 'Oi';
                    dialogo();
                }
            }

            verificacaoDistanciamentoNPC = function(){
                if(nivelDeConversaNpc > 0 &&
                    !(
                        matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 11 || 
                        matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 11 || 
                        matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 11 || 
                        matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 11 || 
                        matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]-1] == 11 || 
                        matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]+1] == 11 || 
                        matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]-1] == 11 || 
                        matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]+1] == 11
                    )
                ){
                    document.getElementById('conversa').style.visibility = 'hidden';
                    document.getElementById('opcao1').style.visibility = 'hidden';
                    document.getElementById('opcao2').style.visibility = 'hidden';
                    document.getElementById('opcao3').style.visibility = 'hidden';
                    document.getElementById('opcao4').style.visibility = 'hidden';
                    document.getElementById('opcao5').style.visibility = 'hidden';
                    document.getElementById('opcao1').innerHTML = "Opcao 1";
                    document.getElementById('opcao1').title = "opcao1";
                    document.getElementById('opcao2').innerHTML = "Opcao 2";
                    document.getElementById('opcao2').title = "opcao2";
                    document.getElementById('opcao3').innerHTML = "Opcao 3";
                    document.getElementById('opcao3').title = "opcao3";
                    document.getElementById('opcao4').innerHTML = "Opcao 4";
                    document.getElementById('opcao4').title = "opcao4";
                    document.getElementById('opcao5').innerHTML = "Opcao 5";
                    document.getElementById('opcao5').title = "opcao5";
                    document.getElementById('opcao1').style.height = 0;
                    document.getElementById('opcao2').style.height = 0;
                    document.getElementById('opcao3').style.height = 0;
                    document.getElementById('opcao4').style.height = 0;
                    document.getElementById('opcao5').style.height = 0;
                    
                    mensagensDoChatNpc += "\n\nNpc: Até mais!";

                    dataDiv1 = new Date();
                    dataDiv1.setMilliseconds(dataDiv1.getMilliseconds() + 5000);
                    //document.getElementById('mensagemDiv1').style.color = '#00ccff';
                    document.getElementById('mensagemDiv1').style.color = 'white';
                    document.getElementById('mensagemDiv1').innerHTML = "Npc: Até mais!";

                    nivelDeConversaNpc = 0;
                }
            }

            preencherOpcoes = function(opHTML,opTitle){
                
                switch(numOpcao){
                    case 0:
                        document.getElementById('opcao1').innerHTML = opHTML;
                        document.getElementById('opcao1').title = opTitle;
                        document.getElementById('opcao1').style.height = 44;
                        document.getElementById('opcao1').style.visibility = 'visible';
                        numOpcao++;
                        break;
                    case 1:
                        document.getElementById('opcao2').innerHTML = opHTML;
                        document.getElementById('opcao2').title = opTitle;
                        document.getElementById('opcao2').style.height = 44;
                        document.getElementById('opcao2').style.visibility = 'visible';
                        numOpcao++;
                        break;
                    case 2:
                        document.getElementById('opcao3').innerHTML = opHTML;
                        document.getElementById('opcao3').title = opTitle;
                        document.getElementById('opcao3').style.height = 44;
                        document.getElementById('opcao3').style.visibility = 'visible';
                        numOpcao++;
                        break;
                    case 3:
                        document.getElementById('opcao4').innerHTML = opHTML;
                        document.getElementById('opcao4').title = opTitle;
                        document.getElementById('opcao4').style.height = 44;
                        document.getElementById('opcao4').style.visibility = 'visible';
                        numOpcao++;
                        break;
                    case 4:
                        document.getElementById('opcao5').innerHTML = opHTML;
                        document.getElementById('opcao5').title = opTitle;
                        document.getElementById('opcao5').style.height = 44;
                        document.getElementById('opcao5').style.visibility = 'visible';
                        numOpcao++;
                        break;
                }
            }

            mensagemNivelNecessario = function(textLevel){
                let auxText = "Npc: Você precisa de level " + textLevel + " para aprender esta magia!";

                mensagensDoChatNpc += "\n\n" + auxText;

                //document.getElementById('mensagemDiv1').style.color = '#00ccff';
                document.getElementById('mensagemDiv1').style.color = 'white';
                document.getElementById('mensagemDiv1').innerHTML = auxText;
            }

            mensagemTaskNaoTerminada = function(){
                let auxText = "Npc: Você ainda não terminou a task obtida!";

                mensagensDoChatNpc += "\n\n" + auxText;
                
                //document.getElementById('mensagemDiv1').style.color = '#00ccff';
                document.getElementById('mensagemDiv1').style.color = 'white';
                document.getElementById('mensagemDiv1').innerHTML = auxText;
            }

            mensagemGanhouExperiencia = function(xpGanha,auxCampo){
                mensagensDoChatServerLog += "\n\nVocê ganhou " + xpGanha + " ponto(s) de experiência."; 
                document.getElementById('mensagemDiv3').style.color = 'white'; 
                document.getElementById('mensagemDiv3').style.textAlign = 'center'; 
                document.getElementById('mensagemDiv3').style.width = 50; 
                document.getElementById('mensagemDiv3').innerHTML = xpGanha + "Xp"; 
                setTimeout(function(){ 
                    if(auxCampo != null)
                        document.getElementById('mensagemDiv' + auxCampo).innerHTML = ""; 
                    document.getElementById('mensagemDiv3').innerHTML = ""; 
                    document.getElementById('mensagemDiv3').style.color = 'yellow'; 
                    document.getElementById('mensagemDiv3').style.width = 250; 
                }, 500); 
            }

            moverCriaturas = function(){
                
                if(dataMoverCriaturas > new Date()){
                    return;
                }else{
                    dataMoverCriaturas = new Date();
                    dataMoverCriaturas.setMilliseconds(dataMoverCriaturas.getMilliseconds() + 2000);
                }

                let arrayMove = [];
                
                for(let i = -5; i < 6; i++){
                    for(let j = -6; j < 7; j++){

                        let posicaoDoCampoNaMatriz = [posicaoDoPersonagemNaMatriz[0]+i,posicaoDoPersonagemNaMatriz[1]+j];
                        let flagMove = false;
                        
                        for(let k = 0; k < arrayMove.length; k++){
                            if(arrayMove[k] == posicaoDoCampoNaMatriz){
                                flagMove = true;
                                break;
                            }
                        }
                        
                        if(flagMove){
                            continue;
                        }

                        if(
                            (
                                matrizDoMapa[posicaoDoCampoNaMatriz[0]][posicaoDoCampoNaMatriz[1]] == 10 || 
                                matrizDoMapa[posicaoDoCampoNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+j] == 18 || 
                                matrizDoMapa[posicaoDoCampoNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+j] == 21 ||
                                matrizDoMapa[posicaoDoCampoNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+j] == 47 ||
                                matrizDoMapa[posicaoDoCampoNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+j] == 50
                            ) ||
                            (
                                matrizDoMapa[posicaoDoCampoNaMatriz[0]][posicaoDoCampoNaMatriz[1]] != 8 &&
                                matrizDoMapa[posicaoDoCampoNaMatriz[0]][posicaoDoCampoNaMatriz[1]] != 16 &&
                                matrizDoMapa[posicaoDoCampoNaMatriz[0]][posicaoDoCampoNaMatriz[1]] != 19 &&
                                matrizDoMapa[posicaoDoCampoNaMatriz[0]][posicaoDoCampoNaMatriz[1]] != 45 &&
                                matrizDoMapa[posicaoDoCampoNaMatriz[0]][posicaoDoCampoNaMatriz[1]] != 48 &&
                                matrizDoMapa[posicaoDoCampoNaMatriz[0]][posicaoDoCampoNaMatriz[1]] != 9 &&
                                matrizDoMapa[posicaoDoCampoNaMatriz[0]][posicaoDoCampoNaMatriz[1]] != 17 &&
                                matrizDoMapa[posicaoDoCampoNaMatriz[0]][posicaoDoCampoNaMatriz[1]] != 20 &&
                                matrizDoMapa[posicaoDoCampoNaMatriz[0]][posicaoDoCampoNaMatriz[1]] != 46 &&
                                matrizDoMapa[posicaoDoCampoNaMatriz[0]][posicaoDoCampoNaMatriz[1]] != 49 
                            )
                            // ||
                            //(i == 0 && j == 0)
                        ){
                            continue;
                        }

                        let randomDirecao = getRandomIntInclusive(0,3);
                        
                        switch(randomDirecao){
                            case 0:
                                if(matrizDoMapa[posicaoDoCampoNaMatriz[0]-1][posicaoDoCampoNaMatriz[1]] == 0 && ((posicaoDoCampoNaMatriz[0]-1) != posicaoDoPersonagemNaMatriz[0] || posicaoDoCampoNaMatriz[1] != posicaoDoPersonagemNaMatriz[1]) && i-1 > -4){
                                    matrizCriaturasVida[posicaoDoCampoNaMatriz[0]-1][posicaoDoCampoNaMatriz[1]] = matrizCriaturasVida[posicaoDoCampoNaMatriz[0]][posicaoDoCampoNaMatriz[1]];
                                    matrizDoMapa[posicaoDoCampoNaMatriz[0]-1][posicaoDoCampoNaMatriz[1]] = matrizDoMapa[posicaoDoCampoNaMatriz[0]][posicaoDoCampoNaMatriz[1]];
                                    matrizDoMapa[posicaoDoCampoNaMatriz[0]][posicaoDoCampoNaMatriz[1]] = 0;
                                    matrizCriaturasVida[posicaoDoCampoNaMatriz[0]][posicaoDoCampoNaMatriz[1]] = 0;
                                    

                                    posicaoDoCampoNaMatriz[0]--;

                                    arrayMove.push(posicaoDoCampoNaMatriz);
                                }
                                break;
                            case 1:
                                if(matrizDoMapa[posicaoDoCampoNaMatriz[0]][posicaoDoCampoNaMatriz[1]+1] == 0 && (posicaoDoCampoNaMatriz[0] != posicaoDoPersonagemNaMatriz[0] || (posicaoDoCampoNaMatriz[1]+1) != posicaoDoPersonagemNaMatriz[1]) && j+1 < 5){
                                    matrizCriaturasVida[posicaoDoCampoNaMatriz[0]][posicaoDoCampoNaMatriz[1]+1] = matrizCriaturasVida[posicaoDoCampoNaMatriz[0]][posicaoDoCampoNaMatriz[1]];
                                    matrizDoMapa[posicaoDoCampoNaMatriz[0]][posicaoDoCampoNaMatriz[1]+1] = matrizDoMapa[posicaoDoCampoNaMatriz[0]][posicaoDoCampoNaMatriz[1]];
                                    matrizDoMapa[posicaoDoCampoNaMatriz[0]][posicaoDoCampoNaMatriz[1]] = 0;
                                    matrizCriaturasVida[posicaoDoCampoNaMatriz[0]][posicaoDoCampoNaMatriz[1]] = 0;

                                    posicaoDoCampoNaMatriz[1]++;

                                    arrayMove.push(posicaoDoCampoNaMatriz);
                                }
                                break;
                            case 2:
                                if(matrizDoMapa[posicaoDoCampoNaMatriz[0]+1][posicaoDoCampoNaMatriz[1]] == 0 && ((posicaoDoCampoNaMatriz[0]+1) != posicaoDoPersonagemNaMatriz[0] || posicaoDoCampoNaMatriz[1] != posicaoDoPersonagemNaMatriz[1]) && i+1 < 4){
                                    matrizCriaturasVida[posicaoDoCampoNaMatriz[0]+1][posicaoDoCampoNaMatriz[1]] = matrizCriaturasVida[posicaoDoCampoNaMatriz[0]][posicaoDoCampoNaMatriz[1]];
                                    matrizDoMapa[posicaoDoCampoNaMatriz[0]+1][posicaoDoCampoNaMatriz[1]] = matrizDoMapa[posicaoDoCampoNaMatriz[0]][posicaoDoCampoNaMatriz[1]];
                                    matrizDoMapa[posicaoDoCampoNaMatriz[0]][posicaoDoCampoNaMatriz[1]] = 0;
                                    matrizCriaturasVida[posicaoDoCampoNaMatriz[0]][posicaoDoCampoNaMatriz[1]] = 0;

                                    posicaoDoCampoNaMatriz[0]++;

                                    arrayMove.push(posicaoDoCampoNaMatriz);
                                }
                                break;
                            case 3:
                                if(matrizDoMapa[posicaoDoCampoNaMatriz[0]][posicaoDoCampoNaMatriz[1]-1] == 0 && (posicaoDoCampoNaMatriz[0] != posicaoDoPersonagemNaMatriz[0] || (posicaoDoCampoNaMatriz[1]-1) != posicaoDoPersonagemNaMatriz[1]) && j-1 > -5){
                                    matrizCriaturasVida[posicaoDoCampoNaMatriz[0]][posicaoDoCampoNaMatriz[1]-1] = matrizCriaturasVida[posicaoDoCampoNaMatriz[0]][posicaoDoCampoNaMatriz[1]];
                                    matrizDoMapa[posicaoDoCampoNaMatriz[0]][posicaoDoCampoNaMatriz[1]-1] = matrizDoMapa[posicaoDoCampoNaMatriz[0]][posicaoDoCampoNaMatriz[1]];
                                    matrizDoMapa[posicaoDoCampoNaMatriz[0]][posicaoDoCampoNaMatriz[1]] = 0;
                                    matrizCriaturasVida[posicaoDoCampoNaMatriz[0]][posicaoDoCampoNaMatriz[1]] = 0;

                                    posicaoDoCampoNaMatriz[1]--;

                                    arrayMove.push(posicaoDoCampoNaMatriz);
                                }
                                break;
                        }
                    }
                }
                
            }

            auxPreencherImagensCriaturas = function (nomeCriatura, i, j, nomeCampo, barraHpCampo, barraHpVaziaCampo, baseCampo){
                if(
                    (
                        matrizDoMapa[i][j] == 9 || 
                        matrizDoMapa[i][j] == 17 || 
                        matrizDoMapa[i][j] == 20 ||
                        matrizDoMapa[i][j] == 46 ||
                        matrizDoMapa[i][j] == 49
                    ) &&
                    (
                        ((i < posicaoDoPersonagemNaMatriz[0]-1 || i > posicaoDoPersonagemNaMatriz[0]+1 || 
                        j < posicaoDoPersonagemNaMatriz[1]-1 || j > posicaoDoPersonagemNaMatriz[1]+1) && matrizDoMapa[i][j] != 49) ||
                        (i < posicaoDoPersonagemNaMatriz[0]-3 || i > posicaoDoPersonagemNaMatriz[0]+3 || 
                        j < posicaoDoPersonagemNaMatriz[1]-4 || j > posicaoDoPersonagemNaMatriz[1]+4)
                    )
                ){
                    switch(matrizDoMapa[i][j]){
                        case 9:
                            matrizDoMapa[i][j] = 8;
                            document.getElementById(baseCampo).src = "imagens/imagemSnake.png";
                            break;
                        case 17:
                            matrizDoMapa[i][j] = 16;
                            document.getElementById(baseCampo).src = "imagens/imagemDragon.png";
                            break;
                        case 20:
                            matrizDoMapa[i][j] = 19;
                            document.getElementById(baseCampo).src = "imagens/imagemMammoth.png";
                            break;
                        case 46:
                            matrizDoMapa[i][j] = 45;
                            document.getElementById(baseCampo).src = "imagens/imagemSpider.png";
                            break;
                        case 49:
                            matrizDoMapa[i][j] = 48;
                            document.getElementById(baseCampo).src = "imagens/imagemOrcShaman.gif";
                            break;
                    }
                }

                if(
                    matrizDoMapa[i][j] == 10 || 
                    matrizDoMapa[i][j] == 18 || 
                    matrizDoMapa[i][j] == 21 ||
                    matrizDoMapa[i][j] == 47 ||
                    matrizDoMapa[i][j] == 50
                ){

                    document.getElementById(baseCampo).alt = "restos de criaturas";
                    document.getElementById(baseCampo).title = "restos de criaturas";
                    matrizCriaturasVida[i][j] = 50;
                    document.getElementById(barraHpCampo).style.width = matrizCriaturasVida[i][j];
                    document.getElementById(nomeCampo).style.color = 'mediumseagreen';
                    document.getElementById(barraHpCampo).style.background = 'mediumseagreen';

                    if(esperaGeral > 0){
                        esperaGeral--;
                        return;
                    }else{
                        esperaGeral = 100;
                        
                        switch(matrizDoMapa[i][j]){
                            case 10:
                                matrizDoMapa[i][j] = 8;
                                document.getElementById(baseCampo).src = "imagens/imagemSnake.png";
                                break;
                            case 18:
                                matrizDoMapa[i][j] = 16;
                                document.getElementById(baseCampo).src = "imagens/imagemDragon.png";
                                break;
                            case 21:
                                matrizDoMapa[i][j] = 19;
                                document.getElementById(baseCampo).src = "imagens/imagemMammoth.png";
                                break;
                            case 47:
                                matrizDoMapa[i][j] = 45;
                                document.getElementById(baseCampo).src = "imagens/imagemSpider.png";
                                break;
                            case 50:
                                matrizDoMapa[i][j] = 48;
                                document.getElementById(baseCampo).src = "imagens/imagemOrcShaman.gif";
                                break;
                        }
                    }
                }

                document.getElementById(nomeCampo).innerHTML = nomeCriatura;

                document.getElementById(barraHpCampo).style.width = matrizCriaturasVida[i][j];
                if(matrizCriaturasVida[i][j] <= 13){ 
                    document.getElementById(nomeCampo).style.color = 'tomato';
                    document.getElementById(barraHpCampo).style.background = 'tomato';
                } else if(matrizCriaturasVida[i][j] <= 25){ 
                    document.getElementById(nomeCampo).style.color = 'orange';
                    document.getElementById(barraHpCampo).style.background = 'orange';
                } else if(matrizCriaturasVida[i][j] > 25){ 
                    document.getElementById(nomeCampo).style.color = 'mediumseagreen';
                    document.getElementById(barraHpCampo).style.background = 'mediumseagreen';
                }

                document.getElementById(nomeCampo).style.visibility = "visible";
                document.getElementById(barraHpCampo).style.visibility = "visible";
                document.getElementById(barraHpVaziaCampo).style.visibility = "visible";
                document.getElementById(baseCampo).alt = nomeCriatura;
                document.getElementById(baseCampo).title = nomeCriatura;
            }

            auxPreencherImagens = function (i, j, caminhoImagem, campo){
                let baseCampo = "campo" + campo;
                let nomeCampo = "nomeCampo" + campo;
                let barraHpCampo = "barraHpCampo" + campo;
                let barraHpVaziaCampo = "barraHpVaziaCampo" + campo;
                
                document.getElementById(baseCampo).src = caminhoImagem;
                document.getElementById(baseCampo).title = "campo";
                document.getElementById(nomeCampo).style.visibility = "hidden";
                document.getElementById(barraHpCampo).style.visibility = "hidden";
                document.getElementById(barraHpVaziaCampo).style.visibility = "hidden";
                if(
                    matrizDoMapa[i][j] == 12 ||
                    matrizDoMapa[i][j] == 13 ||
                    matrizDoMapa[i][j] == 14 ||
                    matrizDoMapa[i][j] == 15 ||
                    matrizDoMapa[i][j] == 22 ||
                    matrizDoMapa[i][j] == 23 ||
                    matrizDoMapa[i][j] == 24 ||
                    matrizDoMapa[i][j] == 25 ||
                    matrizDoMapa[i][j] == 84 ||
                    matrizDoMapa[i][j] == 85 ||
                    matrizDoMapa[i][j] == 86 ||
                    matrizDoMapa[i][j] == 87 ||
                    matrizDoMapa[i][j] == 88 ||
                    matrizDoMapa[i][j] == 89 ||
                    matrizDoMapa[i][j] == 90 ||
                    matrizDoMapa[i][j] == 91
                ){
                    for(let k = 0; k < dadosResposta.players.length; k++){
                        if(dadosResposta.players[k].username != username && dadosResposta.players[k].x == i && dadosResposta.players[k].y == j){

                            let expaux = dadosResposta.players[k].nivel;
                            let lvl=0;

                            for(lvl=1; expaux >= 0; lvl++){
                                expaux = expaux - lvl;
                            }
                            lvl--;
                            document.getElementById(baseCampo).alt = dadosResposta.players[k].username + " level: " + lvl.toString() + " hp: " + dadosResposta.players[k].hp.toString();
                            document.getElementById(baseCampo).title = dadosResposta.players[k].username + " level: " + lvl.toString() + " hp: " + dadosResposta.players[k].hp.toString();
                            document.getElementById(nomeCampo).innerHTML = dadosResposta.players[k].username;

                            let xpercent = ( dadosResposta.players[k].hp * 100 / (((lvl-1)* 15) + 176) );
                            if( xpercent <= 25){ 
                                document.getElementById(nomeCampo).style.color = 'tomato';
                                document.getElementById(barraHpCampo).style.background = 'tomato';
                            } else if( xpercent <= 50){ 
                                document.getElementById(nomeCampo).style.color = 'orange';
                                document.getElementById(barraHpCampo).style.background = 'orange';
                            } else if( xpercent > 50){ 
                                document.getElementById(nomeCampo).style.color = 'mediumseagreen';
                                document.getElementById(barraHpCampo).style.background = 'mediumseagreen';
                            }

                            document.getElementById(barraHpCampo).style.width = 50 * xpercent / 100;

                            document.getElementById(nomeCampo).style.visibility = "visible";
                            document.getElementById(barraHpCampo).style.visibility = "visible";
                            document.getElementById(barraHpVaziaCampo).style.visibility = "visible";

                            if(ultimamensagem != "vazio"){
                                for(let l = 0; l < ultimamensagem.players.length; l++){
                                    if(ultimamensagem.players[l].username != dadosResposta.players[k].username)
                                        continue;
                                    else if(dadosResposta.players[k].mensagem == ultimamensagem.players[l].mensagem)
                                        break;

                                    if(dadosResposta.players[k].mensagem != ""){
                                        let data = new Date();
                                        mensagensDoChatDefault += "\n\n" + data.getHours() + ":" + data.getMinutes() + " " + dadosResposta.players[k].username + " [" + lvl.toString() + "]: " + dadosResposta.players[k].mensagem;
                                        document.getElementById("mensagemDivCampo" + campo).innerHTML = dadosResposta.players[k].username + " says: " + dadosResposta.players[k].mensagem;
                                        setTimeout(function(){document.getElementById("mensagemDivCampo" + campo).innerHTML = "";}, 5000);
                                        ultimamensagem.players[k].mensagem = dadosResposta.players[k].mensagem;
                                    }
                                }
                            }
                        }
                    }
                }else if(matrizDoMapa[i][j] == 8 || matrizDoMapa[i][j] == 9 || matrizDoMapa[i][j] == 10){

                    auxPreencherImagensCriaturas("Snake", i, j, nomeCampo, barraHpCampo, barraHpVaziaCampo, baseCampo);
                    
                }else if(matrizDoMapa[i][j] == 16 || matrizDoMapa[i][j] == 17 || matrizDoMapa[i][j] == 18){

                    auxPreencherImagensCriaturas("Dragon", i, j, nomeCampo, barraHpCampo, barraHpVaziaCampo, baseCampo);

                }else if(matrizDoMapa[i][j] == 19 || matrizDoMapa[i][j] == 20 || matrizDoMapa[i][j] == 21){

                    auxPreencherImagensCriaturas("Mammoth", i, j, nomeCampo, barraHpCampo, barraHpVaziaCampo, baseCampo);

                }else if(matrizDoMapa[i][j] == 45 || matrizDoMapa[i][j] == 46 || matrizDoMapa[i][j] == 47){

                    auxPreencherImagensCriaturas("Spider", i, j, nomeCampo, barraHpCampo, barraHpVaziaCampo, baseCampo);

                }else if(matrizDoMapa[i][j] == 48 || matrizDoMapa[i][j] == 49 || matrizDoMapa[i][j] == 50){

                    auxPreencherImagensCriaturas("Orc Shaman", i, j, nomeCampo, barraHpCampo, barraHpVaziaCampo, baseCampo);

                }else if(matrizDoMapa[i][j] == 11){
                    document.getElementById(nomeCampo).innerHTML = "NPC";
                    document.getElementById(nomeCampo).style.color = 'white';
                    document.getElementById(nomeCampo).style.visibility = "visible";
                    document.getElementById(baseCampo).alt = "NPC";
                    document.getElementById(baseCampo).title = "NPC";
                }else if(matrizDoMapa[i][j] == 0){
                    document.getElementById(baseCampo).alt = "piso";
                    document.getElementById(baseCampo).title = "piso";
                }else if(matrizDoMapa[i][j] == 1){
                    document.getElementById(baseCampo).alt = "barreira";
                    document.getElementById(baseCampo).title = "barreira";
                }else if(matrizDoMapa[i][j] == 2 || matrizDoMapa[i][j] == 3){
                    document.getElementById(baseCampo).alt = "sacola";
                    document.getElementById(baseCampo).title = "sacola";
                }else if(matrizDoMapa[i][j] == 4){
                    document.getElementById(baseCampo).alt = "terra";
                    document.getElementById(baseCampo).title = "terra";
                }else if(matrizDoMapa[i][j] == 5){
                    document.getElementById(baseCampo).alt = "buraco";
                    document.getElementById(baseCampo).title = "buraco";
                }else if(matrizDoMapa[i][j] == 6){
                    document.getElementById(baseCampo).alt = "buraco";
                    document.getElementById(baseCampo).title = "buraco";
                }else if(matrizDoMapa[i][j] == 7){
                    document.getElementById(baseCampo).alt = "caixa";
                    document.getElementById(baseCampo).title = "caixa";
                }else if(matrizDoMapa[i][j] == 26){
                    document.getElementById(baseCampo).alt = "água";
                    document.getElementById(baseCampo).title = "água";
                }else if(
                    matrizDoMapa[i][j] == 27 ||
                    matrizDoMapa[i][j] == 57 ||
                    matrizDoMapa[i][j] == 58 ||
                    matrizDoMapa[i][j] == 59 ||
                    matrizDoMapa[i][j] == 60 ||
                    matrizDoMapa[i][j] == 61 ||
                    matrizDoMapa[i][j] == 62 ||
                    matrizDoMapa[i][j] == 63 ||
                    matrizDoMapa[i][j] == 64 ||
                    matrizDoMapa[i][j] == 65
                    ){
                    document.getElementById(baseCampo).alt = "teto";
                    document.getElementById(baseCampo).title = "teto";
                }else if(
                    matrizDoMapa[i][j] == 28 || 
                    matrizDoMapa[i][j] == 29 || 
                    matrizDoMapa[i][j] == 30 || 
                    matrizDoMapa[i][j] == 31 || 
                    matrizDoMapa[i][j] == 32 || 
                    matrizDoMapa[i][j] == 66 || 
                    matrizDoMapa[i][j] == 67 || 
                    matrizDoMapa[i][j] == 68 || 
                    matrizDoMapa[i][j] == 69 || 
                    matrizDoMapa[i][j] == 70 || 
                    matrizDoMapa[i][j] == 75 || 
                    matrizDoMapa[i][j] == 76 || 
                    matrizDoMapa[i][j] == 77 || 
                    matrizDoMapa[i][j] == 78 || 
                    matrizDoMapa[i][j] == 79
                ){
                    document.getElementById(baseCampo).alt = "parede";
                    document.getElementById(baseCampo).title = "parede";
                }else if(
                    matrizDoMapa[i][j] == 33 || 
                    matrizDoMapa[i][j] == 34 || 
                    matrizDoMapa[i][j] == 35 || 
                    matrizDoMapa[i][j] == 36 || 
                    matrizDoMapa[i][j] == 37 || 
                    matrizDoMapa[i][j] == 38 || 
                    matrizDoMapa[i][j] == 39 || 
                    matrizDoMapa[i][j] == 40 ||
                    matrizDoMapa[i][j] == 80 ||
                    matrizDoMapa[i][j] == 81 ||
                    matrizDoMapa[i][j] == 82 ||
                    matrizDoMapa[i][j] == 83
                ){
                    document.getElementById(baseCampo).alt = "margem";
                    document.getElementById(baseCampo).title = "margem";
                }else if(
                    matrizDoMapa[i][j] == 41 || 
                    matrizDoMapa[i][j] == 42 || 
                    matrizDoMapa[i][j] == 43 || 
                    matrizDoMapa[i][j] == 44 
                ){
                    document.getElementById(baseCampo).alt = "teleport";
                    document.getElementById(baseCampo).title = "teleport";
                }else if(
                    matrizDoMapa[i][j] == 52
                ){
                    document.getElementById(baseCampo).alt = "jangada";
                    document.getElementById(baseCampo).title = "jangada";
                }else if(
                    matrizDoMapa[i][j] == 53 || 
                    matrizDoMapa[i][j] == 54 
                ){
                    document.getElementById(baseCampo).alt = "remo";
                    document.getElementById(baseCampo).title = "remo";
                }else if(
                    matrizDoMapa[i][j] == 71 || 
                    matrizDoMapa[i][j] == 72 || 
                    matrizDoMapa[i][j] == 73 || 
                    matrizDoMapa[i][j] == 74 
                ){
                    document.getElementById(baseCampo).alt = "porta";
                    document.getElementById(baseCampo).title = "porta";
                }else if(
                    matrizDoMapa[i][j] == 51 
                ){
                    document.getElementById(baseCampo).alt = "Bot";
                    document.getElementById(baseCampo).title = "Bot";
                }else if(
                    matrizDoMapa[i][j] == 55 
                ){
                    document.getElementById(baseCampo).alt = "Spike Sword (Arm: 1)";
                    document.getElementById(baseCampo).title = "Spike Sword (Arm: 1)";
                }else if(
                    matrizDoMapa[i][j] == 56 
                ){
                    document.getElementById(baseCampo).alt = "Crown Shield (Def: 1)";
                    document.getElementById(baseCampo).title = "Crown Shield (Def: 1)";
                }else if(
                    matrizDoMapa[i][j] == 92 
                ){
                    document.getElementById(baseCampo).alt = "tablete";
                    document.getElementById(baseCampo).title = "tablete";
                }else{
                    document.getElementById(barraHpCampo).style.width = 50;
                    if(document.getElementById("mensagemDivCampo" + campo).innerHTML != ""){
                        setTimeout(function(){ document.getElementById("mensagemDivCampo" + campo).innerHTML = ""; }, 5000);
                    }
                }
            }

            preencherImagens = function (){
                var caminhoImagem = "";

                /*run_ajax();*/

                for(var i = posicaoDoPersonagemNaMatriz[0]-6, k = 0; i < posicaoDoPersonagemNaMatriz[0]+7; i++, k++){
                    for(var j = posicaoDoPersonagemNaMatriz[1]-7, l = 0; j < posicaoDoPersonagemNaMatriz[1]+8; j++, l++){

                        if(matrizDoMapa[i][j] == 0){
                            caminhoImagem = "imagens/imagemCampo.png";
                        }else if(matrizDoMapa[i][j] == 1){
                            caminhoImagem = "imagens/imagemLixeira.png";
                        }else if(matrizDoMapa[i][j] == 2){
                            caminhoImagem = "imagens/imagemSacola.png";
                        }else if(matrizDoMapa[i][j] == 3){
                            caminhoImagem = "imagens/imagemSacola.png";
                        }else if(matrizDoMapa[i][j] == 4){
                            caminhoImagem = "imagens/imagemFundoBuraco.png";
                        }else if(matrizDoMapa[i][j] == 5){
                            caminhoImagem = "imagens/imagemBuracoAberto.png";
                        }else if(matrizDoMapa[i][j] == 6){
                            caminhoImagem = "imagens/imagemBuracoFechado.png";
                        }else if(matrizDoMapa[i][j] == 7){
                            caminhoImagem = "imagens/imagemParcel.png";
                        }else if(matrizDoMapa[i][j] == 8){
                            caminhoImagem = "imagens/imagemSnake.png";
                        }else if(matrizDoMapa[i][j] == 9){
                            caminhoImagem = "imagens/imagemSnakeAtacando.png";
                        }else if(matrizDoMapa[i][j] == 10){
                            caminhoImagem = "imagens/imagemSnakeMorta.png";
                        }else if(matrizDoMapa[i][j] == 11){
                            caminhoImagem = "imagens/imagemNpcDeDireitaCampo.png";
                        }else if(matrizDoMapa[i][j] == 12){
                            caminhoImagem = "imagens/imagemPersonagemDeCostasComPiso.png";
                        }else if(matrizDoMapa[i][j] == 13){
                            caminhoImagem = "imagens/imagemPersonagemDeDireitaComPiso.png";
                        }else if(matrizDoMapa[i][j] == 14){
                            caminhoImagem = "imagens/imagemPersonagemDeFrenteComPiso.png";
                        }else if(matrizDoMapa[i][j] == 15){
                            caminhoImagem = "imagens/imagemPersonagemDeEsquerdaComPiso.png";
                        }else if(matrizDoMapa[i][j] == 16){
                            caminhoImagem = "imagens/imagemDragon.png";
                        }else if(matrizDoMapa[i][j] == 17){
                            caminhoImagem = "imagens/imagemDragonAtacando.png";
                        }else if(matrizDoMapa[i][j] == 18){
                            caminhoImagem = "imagens/imagemCaveira.png";
                        }else if(matrizDoMapa[i][j] == 19){
                            caminhoImagem = "imagens/imagemMammoth.png";
                        }else if(matrizDoMapa[i][j] == 20){
                            caminhoImagem = "imagens/imagemMammothAtacando.png";
                        }else if(matrizDoMapa[i][j] == 21){
                            caminhoImagem = "imagens/imagemCaveira.png";
                        }else if(matrizDoMapa[i][j] == 22){
                            caminhoImagem = "imagens/imagemPersonagemDeCostasFComPiso.png";
                        }else if(matrizDoMapa[i][j] == 23){
                            caminhoImagem = "imagens/imagemPersonagemDeDireitaFComPiso.png";
                        }else if(matrizDoMapa[i][j] == 24){
                            caminhoImagem = "imagens/imagemPersonagemDeFrenteFComPiso.png";
                        }else if(matrizDoMapa[i][j] == 25){
                            caminhoImagem = "imagens/imagemPersonagemDeEsquerdaFComPiso.png";
                        }else if(matrizDoMapa[i][j] == 26){
                            caminhoImagem = "imagens/imagemAgua.png";
                        }else if(matrizDoMapa[i][j] == 27){
                            caminhoImagem = "imagens/imagemTetoCaverna.png";
                        }else if(matrizDoMapa[i][j] == 28){
                            caminhoImagem = "imagens/imagemTetoCavernaBaixo.png";
                        }else if(matrizDoMapa[i][j] == 29){
                            caminhoImagem = "imagens/imagemTetoCavernaDireita.png";
                        }else if(matrizDoMapa[i][j] == 30){
                            caminhoImagem = "imagens/imagemTetoCavernaCima.png";
                        }else if(matrizDoMapa[i][j] == 31){
                            caminhoImagem = "imagens/imagemTetoCavernaEsquerda.png";
                        }else if(matrizDoMapa[i][j] == 32){
                            caminhoImagem = "imagens/imagemTetoCavernaCimaEsquerda.png";
                        }else if(matrizDoMapa[i][j] == 33){
                            caminhoImagem = "imagens/imagemAguaCimaEsquerda.png";
                        }else if(matrizDoMapa[i][j] == 34){
                            caminhoImagem = "imagens/imagemAguaCima.png";
                        }else if(matrizDoMapa[i][j] == 35){
                            caminhoImagem = "imagens/imagemAguaCimaDireita.png";
                        }else if(matrizDoMapa[i][j] == 36){
                            caminhoImagem = "imagens/imagemAguaDireita.png";
                        }else if(matrizDoMapa[i][j] == 37){
                            caminhoImagem = "imagens/imagemAguaBaixoDireita.png";
                        }else if(matrizDoMapa[i][j] == 38){
                            caminhoImagem = "imagens/imagemAguaBaixo.png";
                        }else if(matrizDoMapa[i][j] == 39){
                            caminhoImagem = "imagens/imagemAguaBaixoEsquerda.png";
                        }else if(matrizDoMapa[i][j] == 40){
                            caminhoImagem = "imagens/imagemAguaEsquerda.png";
                        }else if(matrizDoMapa[i][j] == 41){
                            caminhoImagem = "imagens/imagemTeleport1.png";
                        }else if(matrizDoMapa[i][j] == 42){
                            caminhoImagem = "imagens/imagemTeleport2.png";
                        }else if(matrizDoMapa[i][j] == 43){
                            caminhoImagem = "imagens/imagemTeleport3.png";
                        }else if(matrizDoMapa[i][j] == 44){
                            caminhoImagem = "imagens/imagemTeleport2.png";
                        }else if(matrizDoMapa[i][j] == 45){
                            caminhoImagem = "imagens/imagemSpider.png";
                        }else if(matrizDoMapa[i][j] == 46){
                            caminhoImagem = "imagens/imagemSpiderAtacando.png";
                        }else if(matrizDoMapa[i][j] == 47){
                            caminhoImagem = "imagens/imagemCaveira.png";
                        }else if(matrizDoMapa[i][j] == 48){
                            caminhoImagem = "imagens/imagemOrcShaman.gif";
                        }else if(matrizDoMapa[i][j] == 49){
                            caminhoImagem = "imagens/imagemOrcShamanAtacando.png";
                        }else if(matrizDoMapa[i][j] == 50){
                            caminhoImagem = "imagens/imagemCaveira.png";
                        }else if(matrizDoMapa[i][j] == 51){
                            caminhoImagem = "imagens/imagemBot.png";
                        }else if(matrizDoMapa[i][j] == 52){
                            caminhoImagem = "imagens/imagemJangada.png";
                        }else if(matrizDoMapa[i][j] == 53){
                            caminhoImagem = "imagens/imagemRemo.png";
                        }else if(matrizDoMapa[i][j] == 54){
                            caminhoImagem = "imagens/imagemRemo2.png";
                        }else if(matrizDoMapa[i][j] == 55){
                            caminhoImagem = "imagens/Spike_Sword_Field.png";
                        }else if(matrizDoMapa[i][j] == 56){
                            caminhoImagem = "imagens/Crown_Shield_Field.png";
                        }else if(matrizDoMapa[i][j] == 57){
                            caminhoImagem = "imagens/TetoCasa.png";
                        }else if(matrizDoMapa[i][j] == 58){
                            caminhoImagem = "imagens/TetoCasaUpLeft.png";
                        }else if(matrizDoMapa[i][j] == 59){
                            caminhoImagem = "imagens/TetoCasaUp.png";
                        }else if(matrizDoMapa[i][j] == 60){
                            caminhoImagem = "imagens/TetoCasaUpRight.png";
                        }else if(matrizDoMapa[i][j] == 61){
                            caminhoImagem = "imagens/TetoCasaRight.png";
                        }else if(matrizDoMapa[i][j] == 62){
                            caminhoImagem = "imagens/TetoCasaDownRight.png";
                        }else if(matrizDoMapa[i][j] == 63){
                            caminhoImagem = "imagens/TetoCasaDown.png";
                        }else if(matrizDoMapa[i][j] == 64){
                            caminhoImagem = "imagens/TetoCasaDownLeft.png";
                        }else if(matrizDoMapa[i][j] == 65){
                            caminhoImagem = "imagens/TetoCasaLeft.png";
                        }else if(matrizDoMapa[i][j] == 66){
                            caminhoImagem = "imagens/CasaUpRight.png";
                        }else if(matrizDoMapa[i][j] == 67){
                            caminhoImagem = "imagens/CasaRight.png";
                        }else if(matrizDoMapa[i][j] == 68){
                            caminhoImagem = "imagens/CasaDownRight.png";
                        }else if(matrizDoMapa[i][j] == 69){
                            caminhoImagem = "imagens/CasaDown.png";
                        }else if(matrizDoMapa[i][j] == 70){
                            caminhoImagem = "imagens/CasaDownLeft.png";
                        }else if(matrizDoMapa[i][j] == 71){
                            caminhoImagem = "imagens/PortaUp.png";
                        }else if(matrizDoMapa[i][j] == 72){
                            caminhoImagem = "imagens/PortaDown.png";
                        }else if(matrizDoMapa[i][j] == 73){
                            caminhoImagem = "imagens/PortaOpenUp.png";
                        }else if(matrizDoMapa[i][j] == 74){
                            caminhoImagem = "imagens/PortaOpenDown.png";
                        }else if(matrizDoMapa[i][j] == 75){
                            caminhoImagem = "imagens/CasaIntoUpLeft.png";
                        }else if(matrizDoMapa[i][j] == 76){
                            caminhoImagem = "imagens/CasaIntoUp.png";
                        }else if(matrizDoMapa[i][j] == 77){
                            caminhoImagem = "imagens/CasaIntoUpRight.png";
                        }else if(matrizDoMapa[i][j] == 78){
                            caminhoImagem = "imagens/CasaIntoDownLeft.png";
                        }else if(matrizDoMapa[i][j] == 79){
                            caminhoImagem = "imagens/CasaIntoLeft.png";
                        }else if(matrizDoMapa[i][j] == 80){
                            caminhoImagem = "imagens/imagemAguaBaixoDireita2.png";
                        }else if(matrizDoMapa[i][j] == 81){
                            caminhoImagem = "imagens/imagemAguaCimaEsquerda2.png";
                        }else if(matrizDoMapa[i][j] == 82){
                            caminhoImagem = "imagens/imagemAguaCimaDireita2.png";
                        }else if(matrizDoMapa[i][j] == 83){
                            caminhoImagem = "imagens/imagemAguaBaixoEsquerda2.png";
                        }else if(matrizDoMapa[i][j] == 84){
                            caminhoImagem = "imagens/person2piso.png";
                        }else if(matrizDoMapa[i][j] == 85){
                            caminhoImagem = "imagens/person4piso.png";
                        }else if(matrizDoMapa[i][j] == 86){
                            caminhoImagem = "imagens/person1piso.png";
                        }else if(matrizDoMapa[i][j] == 87){
                            caminhoImagem = "imagens/person3piso.png";
                        }else if(matrizDoMapa[i][j] == 88){
                            caminhoImagem = "imagens/personF2piso.png";
                        }else if(matrizDoMapa[i][j] == 89){
                            caminhoImagem = "imagens/personF4piso.png";
                        }else if(matrizDoMapa[i][j] == 90){
                            caminhoImagem = "imagens/personF1piso.png";
                        }else if(matrizDoMapa[i][j] == 91){
                            caminhoImagem = "imagens/personF3piso.png";
                        }else if(matrizDoMapa[i][j] == 92){
                            caminhoImagem = "imagens/tablet.png";
                        }
                        auxPreencherImagens(i, j, caminhoImagem, "-" + k + "-" + l);

                    }
                }
            }

            cima = function (){
                var quadrosDeAnimacaoInterno = quadrosDeAnimacao;
                var esperaPorQuadroInterno = esperaPorQuadro;

                while(quadrosDeAnimacaoInterno > 0){

                    setTimeout(function(){ moveMap( (mover/quadrosDeAnimacao), 0 ); }, esperaPorQuadroInterno);

                    quadrosDeAnimacaoInterno--;
                    esperaPorQuadroInterno = esperaPorQuadroInterno + esperaPorQuadro;
                }

                setTimeout(function(){ document.getElementById('map').style.visibility = "hidden"; moveMap(-60, 0); preencherImagens(); document.getElementById('map').style.visibility = "visible"; }, esperaPorQuadroInterno);
            }

            direita = function (){
                var quadrosDeAnimacaoInterno = quadrosDeAnimacao;
                var esperaPorQuadroInterno = esperaPorQuadro;

                while(quadrosDeAnimacaoInterno > 0){

                    setTimeout(function(){ moveMap( (mover/quadrosDeAnimacao), 1 ); }, esperaPorQuadroInterno);

                    quadrosDeAnimacaoInterno--;
                    esperaPorQuadroInterno = esperaPorQuadroInterno + esperaPorQuadro;
                }

                setTimeout(function(){ document.getElementById('map').style.visibility = "hidden"; moveMap(-60, 1); preencherImagens(); document.getElementById('map').style.visibility = "visible"; }, esperaPorQuadroInterno);
            }

            baixo = function (){
                var quadrosDeAnimacaoInterno = quadrosDeAnimacao;
                var esperaPorQuadroInterno = esperaPorQuadro;

                while(quadrosDeAnimacaoInterno > 0){

                    setTimeout(function(){ moveMap( (mover/quadrosDeAnimacao), 2 ); }, esperaPorQuadroInterno);

                    quadrosDeAnimacaoInterno--;
                    esperaPorQuadroInterno = esperaPorQuadroInterno + esperaPorQuadro;
                }

                setTimeout(function(){ document.getElementById('map').style.visibility = "hidden"; moveMap(-60, 2); preencherImagens(); document.getElementById('map').style.visibility = "visible"; }, esperaPorQuadroInterno);
            }

            esquerda = function (){
                var quadrosDeAnimacaoInterno = quadrosDeAnimacao;
                var esperaPorQuadroInterno = esperaPorQuadro;

                while(quadrosDeAnimacaoInterno > 0){

                    setTimeout(function(){ moveMap( (mover/quadrosDeAnimacao), 3 ); }, esperaPorQuadroInterno);

                    quadrosDeAnimacaoInterno--;
                    esperaPorQuadroInterno = esperaPorQuadroInterno + esperaPorQuadro;
                }

                setTimeout(function(){ document.getElementById('map').style.visibility = "hidden"; moveMap(-60, 3); preencherImagens(); document.getElementById('map').style.visibility = "visible"; }, esperaPorQuadroInterno);
            }
            
            ataqueCriatura = function (campo, distanciaDoPersonagemLinha, distanciaDoPersonagemColuna, hitDecrescimo, hitAcrescimo, morto, nomeCriatura){
                
                let hit = getRandomIntInclusive(Math.ceil(lvlatual*(equipamentos[1]+1)),Math.floor(lvlatual*2*(equipamentos[1]+1))); 
                
                if( (matrizCriaturasVida[posicaoDoPersonagemNaMatriz[0] + distanciaDoPersonagemLinha][posicaoDoPersonagemNaMatriz[1] + distanciaDoPersonagemColuna] - ((hit*hitDecrescimo) | 0)) > 0 ){ 
                    matrizCriaturasVida[posicaoDoPersonagemNaMatriz[0] + distanciaDoPersonagemLinha][posicaoDoPersonagemNaMatriz[1] + distanciaDoPersonagemColuna] = matrizCriaturasVida[posicaoDoPersonagemNaMatriz[0] + distanciaDoPersonagemLinha][posicaoDoPersonagemNaMatriz[1] + distanciaDoPersonagemColuna] - ((hit*hitDecrescimo) | 0); 

                    document.getElementById('barraHp' + campo).style.width = matrizCriaturasVida[posicaoDoPersonagemNaMatriz[0] + distanciaDoPersonagemLinha][posicaoDoPersonagemNaMatriz[1] + distanciaDoPersonagemColuna]; 
                    if(matrizCriaturasVida[posicaoDoPersonagemNaMatriz[0] + distanciaDoPersonagemLinha][posicaoDoPersonagemNaMatriz[1] + distanciaDoPersonagemColuna] <= 13){ 
                        document.getElementById('nome' + campo).style.color = 'tomato';
                        document.getElementById('barraHp' + campo).style.background = 'tomato';
                    } else if(matrizCriaturasVida[posicaoDoPersonagemNaMatriz[0] + distanciaDoPersonagemLinha][posicaoDoPersonagemNaMatriz[1] + distanciaDoPersonagemColuna] <= 25){ 
                        document.getElementById('nome' + campo).style.color = 'orange';
                        document.getElementById('barraHp' + campo).style.background = 'orange';
                    } else if(matrizCriaturasVida[posicaoDoPersonagemNaMatriz[0] + distanciaDoPersonagemLinha][posicaoDoPersonagemNaMatriz[1] + distanciaDoPersonagemColuna] > 25){ 
                        document.getElementById('nome' + campo).style.color = 'mediumseagreen';
                        document.getElementById('barraHp' + campo).style.background = 'mediumseagreen';
                    }

                    document.getElementById('mensagemDiv' + campo).innerHTML = hit; 
                    mensagensDoChatServerLog += "\n\nUm(a) " + nomeCriatura + " perdeu " + hit + " pontos de vida devido ao seu ataque."; 
                    setTimeout(function(){ 
                        document.getElementById('mensagemDiv' + campo).innerHTML = ""; 
                    }, 500);
                }else{ 

                    let xp = 0;

                    switch(nomeCriatura){
                        case "Snake":
                            xp = 1;
                            break;
                        case "Dragon":
                            xp = 2;
                            break;
                        case "Mammoth":
                            xp = 3;
                            break;
                        case "Spider":
                            xp = 4;
                            break;
                        case "Orc Shaman":
                            xp = 100;
                            break;
                    }

                    document.getElementById('mensagemDiv' + campo).innerHTML = (matrizCriaturasVida[posicaoDoPersonagemNaMatriz[0] + distanciaDoPersonagemLinha][posicaoDoPersonagemNaMatriz[1] + distanciaDoPersonagemColuna] * hitAcrescimo) + 1; 
                    mensagensDoChatServerLog += "\n\nUm(a) " + nomeCriatura + " perdeu " + ((matrizCriaturasVida[posicaoDoPersonagemNaMatriz[0] + distanciaDoPersonagemLinha][posicaoDoPersonagemNaMatriz[1] + distanciaDoPersonagemColuna] * hitAcrescimo) + 1) + " pontos de vida devido ao seu ataque."; 
                    matrizCriaturasVida[posicaoDoPersonagemNaMatriz[0] + distanciaDoPersonagemLinha][posicaoDoPersonagemNaMatriz[1] + distanciaDoPersonagemColuna] = 0; 
                    mensagemGanhouExperiencia(xp,campo);
                    matrizDoMapa[posicaoDoPersonagemNaMatriz[0] + distanciaDoPersonagemLinha][posicaoDoPersonagemNaMatriz[1] + distanciaDoPersonagemColuna] = morto; 
                    nivel += xp; 

                    calculaLevel();

                    preencherImagens(); 

                    if(nomeCriaturaTask == nomeCriatura && taskvalor < 100){
                        taskvalor++; 
                        document.getElementById('taskvalor').innerHTML = taskvalor + "/100";
                    }
                }
            }

            ataqueCampo = function (campo, distanciaDoPersonagemLinha, distanciaDoPersonagemColuna){
                if(
                    matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+distanciaDoPersonagemLinha][posicaoDoPersonagemNaMatriz[1]+distanciaDoPersonagemColuna] == 8 ||
                    matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+distanciaDoPersonagemLinha][posicaoDoPersonagemNaMatriz[1]+distanciaDoPersonagemColuna] == 9)
                { 
                    ataqueCriatura(campo, distanciaDoPersonagemLinha, distanciaDoPersonagemColuna, 1, 1, 10, "Snake"); 
                }else if(
                    matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+distanciaDoPersonagemLinha][posicaoDoPersonagemNaMatriz[1]+distanciaDoPersonagemColuna] == 16 || 
                    matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+distanciaDoPersonagemLinha][posicaoDoPersonagemNaMatriz[1]+distanciaDoPersonagemColuna] == 17)
                { 
                    ataqueCriatura(campo, distanciaDoPersonagemLinha, distanciaDoPersonagemColuna, 0.5, 2, 18, "Dragon"); 
                }else if(
                    matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+distanciaDoPersonagemLinha][posicaoDoPersonagemNaMatriz[1]+distanciaDoPersonagemColuna] == 19 || 
                    matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+distanciaDoPersonagemLinha][posicaoDoPersonagemNaMatriz[1]+distanciaDoPersonagemColuna] == 20)
                { 
                    ataqueCriatura(campo, distanciaDoPersonagemLinha, distanciaDoPersonagemColuna, 0.25, 4, 21, "Mammoth"); 
                }else if(
                    matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+distanciaDoPersonagemLinha][posicaoDoPersonagemNaMatriz[1]+distanciaDoPersonagemColuna] == 45 || 
                    matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+distanciaDoPersonagemLinha][posicaoDoPersonagemNaMatriz[1]+distanciaDoPersonagemColuna] == 46)
                { 
                    ataqueCriatura(campo, distanciaDoPersonagemLinha, distanciaDoPersonagemColuna, 0.13, 8, 47, "Spider"); 
                }else if(
                    matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+distanciaDoPersonagemLinha][posicaoDoPersonagemNaMatriz[1]+distanciaDoPersonagemColuna] == 48 || 
                    matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+distanciaDoPersonagemLinha][posicaoDoPersonagemNaMatriz[1]+distanciaDoPersonagemColuna] == 49)
                { 
                    ataqueCriatura(campo, distanciaDoPersonagemLinha, distanciaDoPersonagemColuna, 0.01, 16, 50, "Orc Shaman"); 
                }
            }

            moverCima = function (){
                if(document.getElementById('mensagem1').style.visibility == 'hidden'){if(verificarPosicaoValida(-1, 0)){ cima(); posicaoDoPersonagemNaMatriz[0] = posicaoDoPersonagemNaMatriz[0] - 1; if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]] == 7){nivelDeSolo++; document.getElementById('personagem1').style.top = parseInt(document.getElementById('personagem1').style.top.split('p')[0]) - 10; document.getElementById('personagem1').style.left = parseInt(document.getElementById('personagem1').style.left.split('p')[0]) - 10;} if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 7){nivelDeSolo--; document.getElementById('personagem1').style.top = parseInt(document.getElementById('personagem1').style.top.split('p')[0]) + 10; document.getElementById('personagem1').style.left = parseInt(document.getElementById('personagem1').style.left.split('p')[0]) + 10;}}else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 2){recompensaSacola(-1,0);}else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 3){document.getElementById('fala1').src = 'imagens/imagemFalaItemVazio.png'; setTimeout(function(){ document.getElementById('fala1').src = 'imagens/imagemFalaVazia.png';}, 1000);}else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 5){posicaoDoPersonagemNaMatriz[0] = posicaoDoPersonagemNaMatriz[0]-15; posicaoDoPersonagemNaMatriz[1] = posicaoDoPersonagemNaMatriz[1]; preencherImagens();}else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 41 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 42 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 43 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 44){posicaoDoPersonagemNaMatriz[0] = posicaoDoPersonagemNaMatriz[0]+55; posicaoDoPersonagemNaMatriz[1] = posicaoDoPersonagemNaMatriz[1]; preencherImagens();}else{ ataqueCampo("Campo-5-7", -1, 0); } direcaoDoPersonagem = 0; }
            }

            moverDireita = function (){
                if(document.getElementById('mensagem1').style.visibility == 'hidden'){if(verificarPosicaoValida(0, 1)){ direita(); posicaoDoPersonagemNaMatriz[1] = posicaoDoPersonagemNaMatriz[1] + 1; if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]] == 7){nivelDeSolo++; document.getElementById('personagem1').style.top = parseInt(document.getElementById('personagem1').style.top.split('p')[0]) - 10; document.getElementById('personagem1').style.left = parseInt(document.getElementById('personagem1').style.left.split('p')[0]) - 10;} if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 7){nivelDeSolo--; document.getElementById('personagem1').style.top = parseInt(document.getElementById('personagem1').style.top.split('p')[0]) + 10; document.getElementById('personagem1').style.left = parseInt(document.getElementById('personagem1').style.left.split('p')[0]) + 10;}}else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 2){recompensaSacola(0,1);}else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 3){document.getElementById('fala1').src = 'imagens/imagemFalaItemVazio.png'; setTimeout(function(){ document.getElementById('fala1').src = 'imagens/imagemFalaVazia.png';}, 1000);}else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 5){ posicaoDoPersonagemNaMatriz[0] = posicaoDoPersonagemNaMatriz[0]-14; posicaoDoPersonagemNaMatriz[1] = posicaoDoPersonagemNaMatriz[1]+1; preencherImagens();}else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 41 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 42 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 43 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 44){posicaoDoPersonagemNaMatriz[0] = posicaoDoPersonagemNaMatriz[0]+56; posicaoDoPersonagemNaMatriz[1] = posicaoDoPersonagemNaMatriz[1]+1; preencherImagens();}else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 54){moverJangada(0); preencherImagens();}else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 71 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 72 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 73 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 74){ moverPorta(3,1); preencherImagens();}else{ ataqueCampo("Campo-6-8", 0, 1); } direcaoDoPersonagem = 1; }
            }

            moverBaixo = function (){
                if(document.getElementById('mensagem1').style.visibility == 'hidden'){if(verificarPosicaoValida(1, 0)){ baixo(); posicaoDoPersonagemNaMatriz[0] = posicaoDoPersonagemNaMatriz[0] + 1; if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]] == 7){nivelDeSolo++; document.getElementById('personagem1').style.top = parseInt(document.getElementById('personagem1').style.top.split('p')[0]) - 10; document.getElementById('personagem1').style.left = parseInt(document.getElementById('personagem1').style.left.split('p')[0]) - 10;} if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 7){nivelDeSolo--; document.getElementById('personagem1').style.top = parseInt(document.getElementById('personagem1').style.top.split('p')[0]) + 10; document.getElementById('personagem1').style.left = parseInt(document.getElementById('personagem1').style.left.split('p')[0]) + 10;}}else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 2){recompensaSacola(1,0);}else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 3){document.getElementById('fala1').src = 'imagens/imagemFalaItemVazio.png'; setTimeout(function(){ document.getElementById('fala1').src = 'imagens/imagemFalaVazia.png';}, 1000);}else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 5){posicaoDoPersonagemNaMatriz[0] = posicaoDoPersonagemNaMatriz[0]-13; posicaoDoPersonagemNaMatriz[1] = posicaoDoPersonagemNaMatriz[1]; preencherImagens();}else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 41 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 42 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 43 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 44){posicaoDoPersonagemNaMatriz[0] = posicaoDoPersonagemNaMatriz[0]+57; posicaoDoPersonagemNaMatriz[1] = posicaoDoPersonagemNaMatriz[1]; preencherImagens();}else{ ataqueCampo("Campo-7-7", 1, 0); } direcaoDoPersonagem = 2; }
            }

            moverEsquerda = function (){
                if(document.getElementById('mensagem1').style.visibility == 'hidden'){if(verificarPosicaoValida(0, -1)){ esquerda(); posicaoDoPersonagemNaMatriz[1] = posicaoDoPersonagemNaMatriz[1] - 1; if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]] == 7){nivelDeSolo++; document.getElementById('personagem1').style.top = parseInt(document.getElementById('personagem1').style.top.split('p')[0]) - 10; document.getElementById('personagem1').style.left = parseInt(document.getElementById('personagem1').style.left.split('p')[0]) - 10;} if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 7){nivelDeSolo--; document.getElementById('personagem1').style.top = parseInt(document.getElementById('personagem1').style.top.split('p')[0]) + 10; document.getElementById('personagem1').style.left = parseInt(document.getElementById('personagem1').style.left.split('p')[0]) + 10;}}else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 2){recompensaSacola(0,-1);}else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 3){document.getElementById('fala1').src = 'imagens/imagemFalaItemVazio.png'; setTimeout(function(){ document.getElementById('fala1').src = 'imagens/imagemFalaVazia.png';}, 1000);}else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 5){ posicaoDoPersonagemNaMatriz[0] = posicaoDoPersonagemNaMatriz[0]-14; posicaoDoPersonagemNaMatriz[1] = posicaoDoPersonagemNaMatriz[1]-1; preencherImagens();}else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 41 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 42 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 43 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 44){posicaoDoPersonagemNaMatriz[0] = posicaoDoPersonagemNaMatriz[0]+56; posicaoDoPersonagemNaMatriz[1] = posicaoDoPersonagemNaMatriz[1]-1; preencherImagens();}else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 53){moverJangada(2); preencherImagens();}else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 71 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 72 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 73 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 74){ moverPorta(3,3); preencherImagens();}else{ ataqueCampo("Campo-6-6", 0, -1); } direcaoDoPersonagem = 3; }
            }

            funcMoverPersonagem = function (){

                if(dataMove > new Date()){
                    return;
                }

                let velocidade = (lvlatual < 490)?(500 - lvlatual):10;

                dataMove = new Date();
                dataMove.setMilliseconds(dataMove.getMilliseconds() + velocidade);

                if(document.getElementById('mensagem1').style.visibility == 'hidden'){
                    if(moverPersonagem[0] != 0 || moverPersonagem[1] != 0){
                        datainicioinatividade = new Date();
                        if(moverPersonagem[1] < 0 && verificarPosicaoValida(0, -1)){
                            if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 74){
                                esconderCasa(3);
                            }
                            if(!flagMove[3]){
                                if(outfit == "P")
                                    document.getElementById('personagem1').src = 'imagens/person3andar.gif';
                                else if(outfit == "W")
                                    document.getElementById('personagem1').src = 'imagens/personF3andar.gif';
                                else if(outfit == "M")
                                    document.getElementById('personagem1').src = 'imagens/imagemPersonagemDeEsquerda.png';
                                else if(outfit == "F")
                                    document.getElementById('personagem1').src = 'imagens/imagemPersonagemDeEsquerdaF.png';
                                flagMove = [false,false,false,true];
                            }
                            moverEsquerda();
                            if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 74){
                                revelarCasa(3,3);
                            }
                            moverPersonagem[1]++;
                            verificacaoDistanciamentoNPC();
                        }else if(moverPersonagem[0] < 0 && verificarPosicaoValida(-1, 0)){
                            if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 74){
                                esconderCasa(3);
                            }
                            if(!flagMove[0]){
                                if(outfit == "P")
                                    document.getElementById('personagem1').src = 'imagens/person2andar.gif';
                                else if(outfit == "W")
                                    document.getElementById('personagem1').src = 'imagens/personF2andar.gif';
                                else if(outfit == "M")
                                    document.getElementById('personagem1').src = 'imagens/imagemPersonagemDeCostas.png';
                                else if(outfit == "F")
                                    document.getElementById('personagem1').src = 'imagens/imagemPersonagemDeCostasF.png';
                                flagMove = [true,false,false,false];
                            }
                            moverCima();
                            if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 74){
                                revelarCasa(3,1);
                            }else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 74){
                                revelarCasa(3,3);
                            }
                            moverPersonagem[0]++;
                            verificacaoDistanciamentoNPC();
                        }else if(moverPersonagem[1] > 0 && verificarPosicaoValida(0, 1)){
                            if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 74){
                                esconderCasa(3);
                            }
                            if(!flagMove[1]){
                                if(outfit == "P")
                                    document.getElementById('personagem1').src = 'imagens/person4andar.gif';
                                else if(outfit == "W")
                                    document.getElementById('personagem1').src = 'imagens/personF4andar.gif';
                                else if(outfit == "M")
                                    document.getElementById('personagem1').src = 'imagens/imagemPersonagemDeDireita.png';
                                else if(outfit == "F")
                                    document.getElementById('personagem1').src = 'imagens/imagemPersonagemDeDireitaF.png';
                                flagMove = [false,true,false,false];
                            }
                            moverDireita();
                            if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 74){
                                revelarCasa(3,1);
                            }
                            moverPersonagem[1]--;
                            verificacaoDistanciamentoNPC();
                        }else if(moverPersonagem[0] > 0 && verificarPosicaoValida(1, 0)){
                            if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 74){
                                esconderCasa(3);
                            }
                            if(!flagMove[2]){
                                if(outfit == "P")
                                    document.getElementById('personagem1').src = 'imagens/person1andar.gif';
                                else if(outfit == "W")
                                    document.getElementById('personagem1').src = 'imagens/personF1andar.gif';
                                else if(outfit == "M")
                                    document.getElementById('personagem1').src = 'imagens/imagemPersonagemDeFrente.png';
                                else if(outfit == "F")
                                    document.getElementById('personagem1').src = 'imagens/imagemPersonagemDeFrenteF.png';
                                flagMove = [false,false,true,false];
                            }
                            moverBaixo();
                            if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 74){
                                revelarCasa(3,1);
                            }else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 74){
                                revelarCasa(3,3);
                            }
                            moverPersonagem[0]--;
                            verificacaoDistanciamentoNPC();
                        }else if(
                            matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 74 && 
                            moverPersonagem[1] < -1 && 
                            verificarPosicaoValida(0, -2)
                            ){
                            direcaoDoPersonagem = 3;
                            if(outfit == "P"){
                                document.getElementById('personagem1').src = 'imagens/person3.png';
                            }else if(outfit == "W"){ 
                                document.getElementById('personagem1').src = 'imagens/personF3.png'; 
                            }else if(outfit == "M"){ 
                                document.getElementById('personagem1').src = 'imagens/imagemPersonagemDeEsquerda.png'; 
                            }else if(outfit == "F"){ 
                                document.getElementById('personagem1').src = 'imagens/imagemPersonagemDeEsquerdaF.png'; 
                            }
                            posicaoDoPersonagemNaMatriz[1] -= 2;
                            moverPersonagem[1] += 2;
                            verificacaoDistanciamentoNPC();
                        }else if(
                            matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 74 && 
                            moverPersonagem[1] > 1 && 
                            verificarPosicaoValida(0, 2)
                            ){
                            direcaoDoPersonagem = 1;
                            if(outfit == "P"){
                                document.getElementById('personagem1').src = 'imagens/person4.png';
                            }else if(outfit == "W"){
                                document.getElementById('personagem1').src = 'imagens/personF4.png';
                            }else if(outfit == "M"){ 
                                document.getElementById('personagem1').src = 'imagens/imagemPersonagemDeDireita.png'; 
                            }else if(outfit == "F"){ 
                                document.getElementById('personagem1').src = 'imagens/imagemPersonagemDeDireitaF.png'; 
                            }
                            posicaoDoPersonagemNaMatriz[1] += 2;
                            moverPersonagem[1] -= 2;
                            verificacaoDistanciamentoNPC();
                        }else{
                            if(moverPersonagem[0] == -1 && moverPersonagem[1] == 0){
                                moverCima();
                                corlifecampo(3, 5);
                                verificacaoAproximacaoNPC(-1, 0);
                                obterEquipamento(-1, 0);
                            }
                            if(moverPersonagem[0] == 0 && moverPersonagem[1] == 1){
                                moverDireita();
                                corlifecampo(4, 6);
                                verificacaoAproximacaoNPC(0, 1);
                                obterEquipamento(0, 1);
                            }
                            if(moverPersonagem[0] == 1 && moverPersonagem[1] == 0){
                                moverBaixo();
                                corlifecampo(5, 5);
                                verificacaoAproximacaoNPC(1, 0);
                                obterEquipamento(1, 0);
                            }
                            if(moverPersonagem[0] == 0 && moverPersonagem[1] == -1){
                                moverEsquerda();
                                corlifecampo(4, 4);
                                verificacaoAproximacaoNPC(0, -1);
                                obterEquipamento(0, -1);
                            }

                            moverPersonagem = [0,0];
                        }
                    }
                    if(moverPersonagem[0] == 0 && moverPersonagem[1] == 0){
                        escolherOutfit();
                        flagMove = [false,false,false,false];
                    }
                }
            }

            getRandomIntInclusive = function (min, max) {
                min = Math.ceil(min);
                max = Math.floor(max);
                return Math.floor(Math.random() * (max - min + 1)) + min;
            }

            animacaoMonster = function (normal,atacando,morto,hitmin, hitmax,ataqueADistancia){

                let hitTotal = 0;
                let hit = 0;

                if(!ataqueADistancia ){

                //Animacao Monster Atacando de Cima

                if(
                    matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == normal || 
                    matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == atacando ||
                    matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == morto 
                ){
                    posicaoLinhaCima = posicaoDoPersonagemNaMatriz[0]-1;
                    posicaoColunaCima = posicaoDoPersonagemNaMatriz[1];

                    if(matrizDoMapa[posicaoLinhaCima][posicaoColunaCima] == normal || matrizDoMapa[posicaoLinhaCima][posicaoColunaCima] == morto){

                        hit = getRandomIntInclusive(hitmin, hitmax);

                        if(matrizDoMapa[posicaoLinhaCima][posicaoColunaCima] == normal && hp > 0){
                            matrizDoMapa[posicaoLinhaCima][posicaoColunaCima] = atacando;
                        }else if(matrizDoMapa[posicaoLinhaCima][posicaoColunaCima] == morto && esperaRessCima == esperaRessCimaContador && hp > 0){
                            matrizDoMapa[posicaoLinhaCima][posicaoColunaCima] = atacando;
                            esperaRessCimaContador = 0;
                        }else if(matrizDoMapa[posicaoLinhaCima][posicaoColunaCima] == morto && esperaRessCima > esperaRessCimaContador){
                            esperaRessCimaContador++;
                        }
                        if(hp - hit > 0 && matrizDoMapa[posicaoLinhaCima][posicaoColunaCima] == atacando){
                            hp -= hit;
                            hitTotal += hit;
                        }else if(hp - hit <= 0 && matrizDoMapa[posicaoLinhaCima][posicaoColunaCima] == atacando){
                            hitTotal += hp;
                            funcPersonagemMorto();
                            return hitTotal;
                        }
                    } else if(matrizDoMapa[posicaoLinhaCima][posicaoColunaCima] == atacando){
                        matrizDoMapa[posicaoLinhaCima][posicaoColunaCima] = normal;
                    }

                }

                //Animacao Monster Atacando da Esquerda

                if(
                    matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == normal || 
                    matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == atacando ||
                    matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == morto 
                ){
                    posicaoLinhaEsquerda = posicaoDoPersonagemNaMatriz[0];
                    posicaoColunaEsquerda = posicaoDoPersonagemNaMatriz[1]-1;

                    if(matrizDoMapa[posicaoLinhaEsquerda][posicaoColunaEsquerda] == normal || matrizDoMapa[posicaoLinhaEsquerda][posicaoColunaEsquerda] == morto){

                        hit = getRandomIntInclusive(hitmin, hitmax);

                        if(matrizDoMapa[posicaoLinhaEsquerda][posicaoColunaEsquerda] == normal && hp > 0){
                            matrizDoMapa[posicaoLinhaEsquerda][posicaoColunaEsquerda] = atacando;
                        }else if(matrizDoMapa[posicaoLinhaEsquerda][posicaoColunaEsquerda] == morto && esperaRessEsquerda == esperaRessEsquerdaContador && hp > 0){
                            matrizDoMapa[posicaoLinhaEsquerda][posicaoColunaEsquerda] = atacando;
                            esperaRessEsquerdaContador = 0;
                        }else if(matrizDoMapa[posicaoLinhaEsquerda][posicaoColunaEsquerda] == morto && esperaRessEsquerda > esperaRessEsquerdaContador){
                            esperaRessEsquerdaContador++;
                        }
                        if(hp - hit > 0 && matrizDoMapa[posicaoLinhaEsquerda][posicaoColunaEsquerda] == atacando){
                            hp -= hit;
                            hitTotal += hit;
                        }else if(hp - hit <= 0 && matrizDoMapa[posicaoLinhaEsquerda][posicaoColunaEsquerda] == atacando){
                            hitTotal += hp;
                            funcPersonagemMorto();
                            return hitTotal;
                        }
                    } else if(matrizDoMapa[posicaoLinhaEsquerda][posicaoColunaEsquerda] == atacando){
                        matrizDoMapa[posicaoLinhaEsquerda][posicaoColunaEsquerda] = normal;
                    }

                }

                //Animacao Monster Atacando da Direita

                if(
                    matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == normal || 
                    matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == atacando ||
                    matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == morto 
                ){
                    posicaoLinhaDireita = posicaoDoPersonagemNaMatriz[0];
                    posicaoColunaDireita = posicaoDoPersonagemNaMatriz[1]+1;

                    if(matrizDoMapa[posicaoLinhaDireita][posicaoColunaDireita] == normal || matrizDoMapa[posicaoLinhaDireita][posicaoColunaDireita] == morto){
                        
                        hit = getRandomIntInclusive(hitmin, hitmax);

                        if(matrizDoMapa[posicaoLinhaDireita][posicaoColunaDireita] == normal && hp > 0){
                            matrizDoMapa[posicaoLinhaDireita][posicaoColunaDireita] = atacando;
                        }else if(matrizDoMapa[posicaoLinhaDireita][posicaoColunaDireita] == morto && esperaRessDireita == esperaRessDireitaContador && hp > 0){
                            matrizDoMapa[posicaoLinhaDireita][posicaoColunaDireita] = atacando;
                            esperaRessDireitaContador = 0;
                        }else if(matrizDoMapa[posicaoLinhaDireita][posicaoColunaDireita] == morto && esperaRessDireita > esperaRessDireitaContador){
                            esperaRessDireitaContador++;
                        }
                        if(hp - hit > 0 && matrizDoMapa[posicaoLinhaDireita][posicaoColunaDireita] == atacando){
                            hp -= hit;
                            hitTotal += hit;
                        }else if(hp - hit <= 0 && matrizDoMapa[posicaoLinhaDireita][posicaoColunaDireita] == atacando){
                            hitTotal += hp;
                            funcPersonagemMorto();
                            return hitTotal;
                        }
                    } else if(matrizDoMapa[posicaoLinhaDireita][posicaoColunaDireita] == atacando){
                        matrizDoMapa[posicaoLinhaDireita][posicaoColunaDireita] = normal;
                    }

                }

                //Animacao Monster Atacando de Baixo

                if(
                    matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == normal || 
                    matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == atacando ||
                    matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == morto 
                ){
                    posicaoLinhaBaixo = posicaoDoPersonagemNaMatriz[0]+1;
                    posicaoColunaBaixo = posicaoDoPersonagemNaMatriz[1];

                    if(matrizDoMapa[posicaoLinhaBaixo][posicaoColunaBaixo] == normal || matrizDoMapa[posicaoLinhaBaixo][posicaoColunaBaixo] == morto){

                        hit = getRandomIntInclusive(hitmin, hitmax);

                        if(matrizDoMapa[posicaoLinhaBaixo][posicaoColunaBaixo] == normal && hp > 0){
                            matrizDoMapa[posicaoLinhaBaixo][posicaoColunaBaixo] = atacando;
                        }else if(matrizDoMapa[posicaoLinhaBaixo][posicaoColunaBaixo] == morto && esperaRessBaixo == esperaRessBaixoContador && hp > 0){
                            matrizDoMapa[posicaoLinhaBaixo][posicaoColunaBaixo] = atacando;
                            esperaRessBaixoContador = 0;
                        }else if(matrizDoMapa[posicaoLinhaBaixo][posicaoColunaBaixo] == morto && esperaRessBaixo > esperaRessBaixoContador){
                            esperaRessBaixoContador++;
                        }
                        if(hp - hit > 0 && matrizDoMapa[posicaoLinhaBaixo][posicaoColunaBaixo] == atacando){
                            hp -= hit;
                            hitTotal += hit;
                        }else if(hp - hit <= 0 && matrizDoMapa[posicaoLinhaBaixo][posicaoColunaBaixo] == atacando){
                            hitTotal += hp;
                            funcPersonagemMorto();
                            return hitTotal;
                        }
                    } else if(matrizDoMapa[posicaoLinhaBaixo][posicaoColunaBaixo] == atacando){
                        matrizDoMapa[posicaoLinhaBaixo][posicaoColunaBaixo] = normal;
                    }

                }

                //Animacao Monster Atacando de Cima Esquerda

                if(
                    matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]-1] == normal || 
                    matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]-1] == atacando ||
                    matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]-1] == morto 
                ){
                    posicaoLinhaCimaEsquerda = posicaoDoPersonagemNaMatriz[0]-1;
                    posicaoColunaCimaEsquerda = posicaoDoPersonagemNaMatriz[1]-1;

                    if(matrizDoMapa[posicaoLinhaCimaEsquerda][posicaoColunaCimaEsquerda] == normal || matrizDoMapa[posicaoLinhaCimaEsquerda][posicaoColunaCimaEsquerda] == morto){

                        hit = getRandomIntInclusive(hitmin, hitmax);

                        if(matrizDoMapa[posicaoLinhaCimaEsquerda][posicaoColunaCimaEsquerda] == normal && hp > 0){
                            matrizDoMapa[posicaoLinhaCimaEsquerda][posicaoColunaCimaEsquerda] = atacando;
                        }else if(matrizDoMapa[posicaoLinhaCimaEsquerda][posicaoColunaCimaEsquerda] == morto && esperaRessCimaEsquerda == esperaRessCimaEsquerdaContador && hp > 0){
                            matrizDoMapa[posicaoLinhaCimaEsquerda][posicaoColunaCimaEsquerda] = atacando;
                            esperaRessCimaEsquerdaContador = 0;
                        }else if(matrizDoMapa[posicaoLinhaCimaEsquerda][posicaoColunaCimaEsquerda] == morto && esperaRessCimaEsquerda > esperaRessCimaEsquerdaContador){
                            esperaRessCimaEsquerdaContador++;
                        }
                        if(hp - hit > 0 && matrizDoMapa[posicaoLinhaCimaEsquerda][posicaoColunaCimaEsquerda] == atacando){
                            hp -= hit;
                            hitTotal += hit;
                        }else if(hp - hit <= 0 && matrizDoMapa[posicaoLinhaCimaEsquerda][posicaoColunaCimaEsquerda] == atacando){
                            hitTotal += hp;
                            funcPersonagemMorto();
                            return hitTotal;
                        }
                    } else if(matrizDoMapa[posicaoLinhaCimaEsquerda][posicaoColunaCimaEsquerda] == atacando){
                        matrizDoMapa[posicaoLinhaCimaEsquerda][posicaoColunaCimaEsquerda] = normal;
                    }

                }

                //Animacao Monster Atacando de Cima Direita

                if(
                    matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]+1] == normal || 
                    matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]+1] == atacando ||
                    matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]+1] == morto 
                ){
                    posicaoLinhaCimaDireita = posicaoDoPersonagemNaMatriz[0]-1;
                    posicaoColunaCimaDireita = posicaoDoPersonagemNaMatriz[1]+1;

                    if(matrizDoMapa[posicaoLinhaCimaDireita][posicaoColunaCimaDireita] == normal || matrizDoMapa[posicaoLinhaCimaDireita][posicaoColunaCimaDireita] == morto){

                        hit = getRandomIntInclusive(hitmin, hitmax);

                        if(matrizDoMapa[posicaoLinhaCimaDireita][posicaoColunaCimaDireita] == normal && hp > 0){
                            matrizDoMapa[posicaoLinhaCimaDireita][posicaoColunaCimaDireita] = atacando;
                        }else if(matrizDoMapa[posicaoLinhaCimaDireita][posicaoColunaCimaDireita] == morto && esperaRessCimaDireita == esperaRessCimaDireitaContador && hp > 0){
                            matrizDoMapa[posicaoLinhaCimaDireita][posicaoColunaCimaDireita] = atacando;
                            esperaRessCimaDireitaContador = 0;
                        }else if(matrizDoMapa[posicaoLinhaCimaDireita][posicaoColunaCimaDireita] == morto && esperaRessCimaDireita > esperaRessCimaDireitaContador){
                            esperaRessCimaDireitaContador++;
                        }
                        if(hp - hit > 0 && matrizDoMapa[posicaoLinhaCimaDireita][posicaoColunaCimaDireita] == atacando){
                            hp -= hit;
                            hitTotal += hit;
                        }else if(hp - hit <= 0 && matrizDoMapa[posicaoLinhaCimaDireita][posicaoColunaCimaDireita] == atacando){
                            hitTotal += hp;
                            funcPersonagemMorto();
                            return hitTotal;
                        }
                    } else if(matrizDoMapa[posicaoLinhaCimaDireita][posicaoColunaCimaDireita] == atacando){
                        matrizDoMapa[posicaoLinhaCimaDireita][posicaoColunaCimaDireita] = normal;
                    }

                }

                //Animacao Monster Atacando de Baixo Direita

                if(
                    matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]+1] == normal || 
                    matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]+1] == atacando ||
                    matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]+1] == morto 
                ){
                    posicaoLinhaBaixoDireita = posicaoDoPersonagemNaMatriz[0]+1;
                    posicaoColunaBaixoDireita = posicaoDoPersonagemNaMatriz[1]+1;

                    if(matrizDoMapa[posicaoLinhaBaixoDireita][posicaoColunaBaixoDireita] == normal || matrizDoMapa[posicaoLinhaBaixoDireita][posicaoColunaBaixoDireita] == morto){

                        hit = getRandomIntInclusive(hitmin, hitmax);

                        if(matrizDoMapa[posicaoLinhaBaixoDireita][posicaoColunaBaixoDireita] == normal && hp > 0){
                            matrizDoMapa[posicaoLinhaBaixoDireita][posicaoColunaBaixoDireita] = atacando;
                        }else if(matrizDoMapa[posicaoLinhaBaixoDireita][posicaoColunaBaixoDireita] == morto && esperaRessBaixoDireita == esperaRessBaixoDireitaContador && hp > 0){
                            matrizDoMapa[posicaoLinhaBaixoDireita][posicaoColunaBaixoDireita] = atacando;
                            esperaRessBaixoDireitaContador = 0;
                        }else if(matrizDoMapa[posicaoLinhaBaixoDireita][posicaoColunaBaixoDireita] == morto && esperaRessBaixoDireita > esperaRessBaixoDireitaContador){
                            esperaRessBaixoDireitaContador++;
                        }
                        if(hp - hit > 0 && matrizDoMapa[posicaoLinhaBaixoDireita][posicaoColunaBaixoDireita] == atacando){
                            hp -= hit;
                            hitTotal += hit;
                        }else if(hp - hit <= 0 && matrizDoMapa[posicaoLinhaBaixoDireita][posicaoColunaBaixoDireita] == atacando){
                            hitTotal += hp;
                            funcPersonagemMorto();
                            return hitTotal;
                        }
                    } else if(matrizDoMapa[posicaoLinhaBaixoDireita][posicaoColunaBaixoDireita] == atacando){
                        matrizDoMapa[posicaoLinhaBaixoDireita][posicaoColunaBaixoDireita] = normal;
                    }

                }

                //Animacao Monster Atacando de Baixo Esquerda

                if(
                    matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]-1] == normal || 
                    matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]-1] == atacando ||
                    matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]-1] == morto 
                ){
                    posicaoLinhaBaixoEsquerda = posicaoDoPersonagemNaMatriz[0]+1;
                    posicaoColunaBaixoEsquerda = posicaoDoPersonagemNaMatriz[1]-1;

                    if(matrizDoMapa[posicaoLinhaBaixoEsquerda][posicaoColunaBaixoEsquerda] == normal || matrizDoMapa[posicaoLinhaBaixoEsquerda][posicaoColunaBaixoEsquerda] == morto){

                        hit = getRandomIntInclusive(hitmin, hitmax);

                        if(matrizDoMapa[posicaoLinhaBaixoEsquerda][posicaoColunaBaixoEsquerda] == normal && hp > 0){
                            matrizDoMapa[posicaoLinhaBaixoEsquerda][posicaoColunaBaixoEsquerda] = atacando;
                        }else if(matrizDoMapa[posicaoLinhaBaixoEsquerda][posicaoColunaBaixoEsquerda] == morto && esperaRessBaixoEsquerda == esperaRessBaixoEsquerdaContador && hp > 0){
                            matrizDoMapa[posicaoLinhaBaixoEsquerda][posicaoColunaBaixoEsquerda] = atacando;
                            esperaRessBaixoEsquerdaContador = 0;
                        }else if(matrizDoMapa[posicaoLinhaBaixoEsquerda][posicaoColunaBaixoEsquerda] == morto && esperaRessBaixoEsquerda > esperaRessBaixoEsquerdaContador){
                            esperaRessBaixoEsquerdaContador++;
                        }
                        if(hp - hit > 0 && matrizDoMapa[posicaoLinhaBaixoEsquerda][posicaoColunaBaixoEsquerda] == atacando){
                            hp -= hit;
                            hitTotal += hit;
                        }else if(hp - hit <= 0 && matrizDoMapa[posicaoLinhaBaixoEsquerda][posicaoColunaBaixoEsquerda] == atacando){
                            hitTotal += hp;
                            funcPersonagemMorto();
                            return hitTotal;
                        }
                    } else if(matrizDoMapa[posicaoLinhaBaixoEsquerda][posicaoColunaBaixoEsquerda] == atacando){
                        matrizDoMapa[posicaoLinhaBaixoEsquerda][posicaoColunaBaixoEsquerda] = normal;
                    }

                }

                }else{

                //Animacao Monster Atacando a distancia

                for(let i = -3; i < 4; i++){
                    for(let j = -4; j < 5; j++){

                        if(
                            matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+i][posicaoDoPersonagemNaMatriz[1]+j] != normal &&
                            matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+i][posicaoDoPersonagemNaMatriz[1]+j] != atacando &&
                            matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+i][posicaoDoPersonagemNaMatriz[1]+j] != morto 
                        ){
                            continue;
                        }
                            
                        hit = getRandomIntInclusive(hitmin, hitmax);

                        if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+i][posicaoDoPersonagemNaMatriz[1]+j] == normal){
                            if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+i][posicaoDoPersonagemNaMatriz[1]+j] == normal && hp > 0){
                                matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+i][posicaoDoPersonagemNaMatriz[1]+j] = atacando;
                            }
                            if(hp - hit > 0 && matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+i][posicaoDoPersonagemNaMatriz[1]+j] == atacando){
                                hp -= hit;
                                hitTotal += hit;
                            }else if(hp - hit <= 0 && matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+i][posicaoDoPersonagemNaMatriz[1]+j] == atacando){
                                hitTotal += hp;
                                funcPersonagemMorto();
                                return hitTotal;
                            }
                        }else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+i][posicaoDoPersonagemNaMatriz[1]+j] == atacando || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+i][posicaoDoPersonagemNaMatriz[1]+j] == morto){
                            matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+i][posicaoDoPersonagemNaMatriz[1]+j] = normal;
                        }
                    
                    }
                }

                }

                return hitTotal;

            }

            loop = function (){

                dataLoop = new Date();

                if(dataAjax <= dataLoop){
                    flagAjax = true;
                    dataAjax = new Date();
                    dataAjax.setMilliseconds(dataAjax.getMilliseconds() + 950);
                }

                var run_ajax = function(){

                    // [INICIO] AJAX

                    var dados = new FormData();

                    if(dadosJson){
                        updateDadosJson();
                    }

                    dados.append('x', posicaoDoPersonagemNaMatriz[0]);
                    dados.append('y', posicaoDoPersonagemNaMatriz[1]);

                    if(
                        ultim_x != posicaoDoPersonagemNaMatriz[0] ||
                        ultim_y != posicaoDoPersonagemNaMatriz[1] ||
                        ultim_direcao != direcaoDoPersonagem ||
                        ultim_outfit != outfit ||
                        ultim_nivel != nivel ||
                        ultim_hp != hp ||
                        ultim_mensgem != mensagem ||
                        ultim_json != JSON.stringify(dadosJson) ||
                        (online == 0 || wakeup)
                    ){
                        dados.append('username', username);
                        dados.append('password', password);

                        if(online == 0 || wakeup){
                            dados.append('online', online);
                            if(wakeup)
                                wakeup = false;
                        }
                        if(ultim_x != posicaoDoPersonagemNaMatriz[0]){
                            dados.append('x', posicaoDoPersonagemNaMatriz[0]);
                            ultim_x = posicaoDoPersonagemNaMatriz[0];
                        }
                        if(ultim_y != posicaoDoPersonagemNaMatriz[1]){
                            dados.append('y', posicaoDoPersonagemNaMatriz[1]);
                            ultim_y = posicaoDoPersonagemNaMatriz[1];
                        }
                        if(ultim_direcao != direcaoDoPersonagem){
                            dados.append('direcao', direcaoDoPersonagem);
                            ultim_direcao = direcaoDoPersonagem;
                        }
                        if(ultim_outfit != outfit){
                            dados.append('outfit', outfit);
                            ultim_outfit = outfit;
                        }
                        if(ultim_nivel != nivel){
                            dados.append('nivel', nivel);
                            ultim_nivel = nivel;
                        }
                        if(ultim_hp != hp){
                            dados.append('hp', hp);
                            ultim_hp = hp;
                        }
                        if(ultim_mensgem != mensagem){
                            dados.append('mensagem', mensagem);
                            ultim_mensgem = mensagem;
                        }
                        if(ultim_json != JSON.stringify(dadosJson)){
                            dados.append('json', JSON.stringify(dadosJson));
                            ultim_json = JSON.stringify(dadosJson);
                        }
                    }

                    $.ajax({
                        url: 'gameGET.php',
                        method: 'POST',
                        data: dados,
                        processData: false,
                        contentType: false
                    }).done(function(resposta){

                        if(dadosResposta != "vazio"){
                            for(let i = 0; i < dadosResposta.players.length; i++){

                                if(
                                    matrizDoMapa[dadosResposta.players[i].x][dadosResposta.players[i].y] == 8 ||
                                    matrizDoMapa[dadosResposta.players[i].x][dadosResposta.players[i].y] == 16 ||
                                    matrizDoMapa[dadosResposta.players[i].x][dadosResposta.players[i].y] == 19 ||
                                    matrizDoMapa[dadosResposta.players[i].x][dadosResposta.players[i].y] == 45 ||
                                    matrizDoMapa[dadosResposta.players[i].x][dadosResposta.players[i].y] == 48 ||
                                    matrizDoMapa[dadosResposta.players[i].x][dadosResposta.players[i].y] == 9 ||
                                    matrizDoMapa[dadosResposta.players[i].x][dadosResposta.players[i].y] == 17 ||
                                    matrizDoMapa[dadosResposta.players[i].x][dadosResposta.players[i].y] == 20 ||
                                    matrizDoMapa[dadosResposta.players[i].x][dadosResposta.players[i].y] == 46 ||
                                    matrizDoMapa[dadosResposta.players[i].x][dadosResposta.players[i].y] == 49 ||
                                    matrizDoMapa[dadosResposta.players[i].x][dadosResposta.players[i].y] == 10 ||
                                    matrizDoMapa[dadosResposta.players[i].x][dadosResposta.players[i].y] == 18 ||
                                    matrizDoMapa[dadosResposta.players[i].x][dadosResposta.players[i].y] == 21 ||
                                    matrizDoMapa[dadosResposta.players[i].x][dadosResposta.players[i].y] == 47 ||
                                    matrizDoMapa[dadosResposta.players[i].x][dadosResposta.players[i].y] == 50 ||
                                    matrizDoMapa[dadosResposta.players[i].x][dadosResposta.players[i].y] == 51 ||
                                    matrizDoMapa[dadosResposta.players[i].x][dadosResposta.players[i].y] == 52 ||
                                    matrizDoMapa[dadosResposta.players[i].x][dadosResposta.players[i].y] == 57 ||
                                    matrizDoMapa[dadosResposta.players[i].x][dadosResposta.players[i].y] == 61 ||
                                    matrizDoMapa[dadosResposta.players[i].x][dadosResposta.players[i].y] == 62 ||
                                    matrizDoMapa[dadosResposta.players[i].x][dadosResposta.players[i].y] == 63 ||
                                    dadosResposta.players[i].username == username
                                ){
                                    continue;
                                }

                                if(
                                    matrizDoMapa[dadosResposta.players[i].x][dadosResposta.players[i].y] == 12 ||
                                    matrizDoMapa[dadosResposta.players[i].x][dadosResposta.players[i].y] == 13 ||
                                    matrizDoMapa[dadosResposta.players[i].x][dadosResposta.players[i].y] == 14 ||
                                    matrizDoMapa[dadosResposta.players[i].x][dadosResposta.players[i].y] == 15 ||
                                    matrizDoMapa[dadosResposta.players[i].x][dadosResposta.players[i].y] == 22 ||
                                    matrizDoMapa[dadosResposta.players[i].x][dadosResposta.players[i].y] == 23 ||
                                    matrizDoMapa[dadosResposta.players[i].x][dadosResposta.players[i].y] == 24 ||
                                    matrizDoMapa[dadosResposta.players[i].x][dadosResposta.players[i].y] == 25 ||
                                    matrizDoMapa[dadosResposta.players[i].x][dadosResposta.players[i].y] == 84 ||
                                    matrizDoMapa[dadosResposta.players[i].x][dadosResposta.players[i].y] == 85 ||
                                    matrizDoMapa[dadosResposta.players[i].x][dadosResposta.players[i].y] == 86 ||
                                    matrizDoMapa[dadosResposta.players[i].x][dadosResposta.players[i].y] == 87 ||
                                    matrizDoMapa[dadosResposta.players[i].x][dadosResposta.players[i].y] == 88 ||
                                    matrizDoMapa[dadosResposta.players[i].x][dadosResposta.players[i].y] == 89 ||
                                    matrizDoMapa[dadosResposta.players[i].x][dadosResposta.players[i].y] == 90 ||
                                    matrizDoMapa[dadosResposta.players[i].x][dadosResposta.players[i].y] == 91
                                ){
                                    matrizDoMapa[dadosResposta.players[i].x][dadosResposta.players[i].y] = 0;
                                }
                            }
                            ultimamensagem = dadosResposta;
                        }

                        dadosResposta = JSON.parse(resposta);
                        
                        for(let i = 0; i < dadosResposta.players.length; i++){
                            if(
                                matrizDoMapa[dadosResposta.players[i].x][dadosResposta.players[i].y] == 0 &&
                                dadosResposta.players[i].username != username
                            ){
                                if(dadosResposta.players[i].outfit == "M"){
                                    switch(dadosResposta.players[i].direcao){
                                        case 0:
                                            matrizDoMapa[dadosResposta.players[i].x][dadosResposta.players[i].y] = 12;
                                            break;
                                        case 1:
                                            matrizDoMapa[dadosResposta.players[i].x][dadosResposta.players[i].y] = 13;
                                            break;
                                        case 2:
                                            matrizDoMapa[dadosResposta.players[i].x][dadosResposta.players[i].y] = 14;
                                            break;
                                        case 3:
                                            matrizDoMapa[dadosResposta.players[i].x][dadosResposta.players[i].y] = 15;
                                            break;
                                    }
                                }else if(dadosResposta.players[i].outfit == "F"){
                                    switch(dadosResposta.players[i].direcao){
                                        case 0:
                                            matrizDoMapa[dadosResposta.players[i].x][dadosResposta.players[i].y] = 22;
                                            break;
                                        case 1:
                                            matrizDoMapa[dadosResposta.players[i].x][dadosResposta.players[i].y] = 23;
                                            break;
                                        case 2:
                                            matrizDoMapa[dadosResposta.players[i].x][dadosResposta.players[i].y] = 24;
                                            break;
                                        case 3:
                                            matrizDoMapa[dadosResposta.players[i].x][dadosResposta.players[i].y] = 25;
                                            break;
                                    }
                                }else if(dadosResposta.players[i].outfit == "P"){
                                    switch(dadosResposta.players[i].direcao){
                                        case 0:
                                            matrizDoMapa[dadosResposta.players[i].x][dadosResposta.players[i].y] = 84;
                                            break;
                                        case 1:
                                            matrizDoMapa[dadosResposta.players[i].x][dadosResposta.players[i].y] = 85;
                                            break;
                                        case 2:
                                            matrizDoMapa[dadosResposta.players[i].x][dadosResposta.players[i].y] = 86;
                                            break;
                                        case 3:
                                            matrizDoMapa[dadosResposta.players[i].x][dadosResposta.players[i].y] = 87;
                                            break;
                                    }
                                }else if(dadosResposta.players[i].outfit == "W"){
                                    switch(dadosResposta.players[i].direcao){
                                        case 0:
                                            matrizDoMapa[dadosResposta.players[i].x][dadosResposta.players[i].y] = 88;
                                            break;
                                        case 1:
                                            matrizDoMapa[dadosResposta.players[i].x][dadosResposta.players[i].y] = 89;
                                            break;
                                        case 2:
                                            matrizDoMapa[dadosResposta.players[i].x][dadosResposta.players[i].y] = 90;
                                            break;
                                        case 3:
                                            matrizDoMapa[dadosResposta.players[i].x][dadosResposta.players[i].y] = 91;
                                            break;
                                    }
                                }
                            }
                        }

                    })

                    // [FIM] AJAX

                }

                window.onunload = window.onbeforeunload = function() {
                    online = 0;
                    run_ajax();
                };

                let tempoinativo = 0;
                let hitTotal = 0;
                personagemMorto = false;

                hitTotal += animacaoMonster(8,9,10,Math.ceil(1/(equipamentos[7]+1)),Math.floor(50/(equipamentos[7]+1)),false); //Snake(normal,atacando,morto,hitmin,hitmax)
                hitTotal += animacaoMonster(16,17,18,Math.ceil(50/(equipamentos[7]+1)),Math.floor(150/(equipamentos[7]+1)),false); //Dragon(normal,atacando,morto,hitmin,hitmax)
                hitTotal += animacaoMonster(19,20,21,Math.ceil(150/(equipamentos[7]+1)),Math.floor(450/(equipamentos[7]+1)),false); //Mammoth(normal,atacando,morto,hitmin,hitmax)
                hitTotal += animacaoMonster(45,46,47,Math.ceil(450/(equipamentos[7]+1)),Math.floor(1350/(equipamentos[7]+1)),false); //Spider(normal,atacando,morto,hitmin,hitmax)
                hitTotal += animacaoMonster(48,49,50,Math.ceil(1350/(equipamentos[7]+1)),Math.floor(4050/(equipamentos[7]+1)),true); //Orc Shaman(normal,atacando,morto,hitmin,hitmax)

                if(personagemMorto){
                    let perdaDeNivel = (nivel * 0.01) | 0;
                    nivel -= perdaDeNivel;
                    calculaLevel();
                    mensagensDoChatServerLog += "\n\nVocê perdeu " + perdaDeNivel + " pontos de experiencia.";
                }

                if(hitTotal > 0){
                    mensagensDoChatServerLog += "\n\nVocê perdeu " + hitTotal + " pontos de vida.";
                }

                if(!inativo){
                    if(flagAjax){
                        run_ajax();
                        flagAjax = false;
                        regeneracao(1, "regenerou");
                    }else{
                        console.log("Ajax desnecessário");
                    }
                    if(matrizDoMapa[6][9] == 41){
                        matrizDoMapa[6][9] = 42;
                        matrizDoMapa[6][14] = 42;
                    }else if(matrizDoMapa[6][9] == 42){
                        matrizDoMapa[6][9] = 43;
                        matrizDoMapa[6][14] = 43;
                    }else if(matrizDoMapa[6][9] == 43){
                        matrizDoMapa[6][9] = 44;
                        matrizDoMapa[6][14] = 44;
                    }else if(matrizDoMapa[6][9] == 44){
                        matrizDoMapa[6][9] = 41;
                        matrizDoMapa[6][14] = 41;
                    }
                    moverCriaturas();
                    preencherImagens();
                }

                if(hitTotal > 0){
                    document.getElementById('mensagemDiv3').style.color = 'yellow';
                    document.getElementById('mensagemDiv3').style.textAlign = 'center';
                    document.getElementById('mensagemDiv3').style.width = 50;
                    document.getElementById('mensagemDiv3').innerHTML = hitTotal;
                    setTimeout(function(){ document.getElementById('mensagemDiv3').innerHTML = ""; document.getElementById('mensagemDiv3').style.width = 250; }, 500);
                }

                switch(identificadorDoChat){
                    case 0:
                        document.getElementById('textareaChat').value = mensagensDoChatDefault;
                        break;
                    case 1:
                        document.getElementById('textareaChat').value = mensagensDoChatServerLog;
                        break;
                    case 2:
                        document.getElementById('textareaChat').value = mensagensDoChatNpc;
                        break;
                }
                document.getElementById('textareaChat').scrollTop = document.getElementById('textareaChat').scrollHeight;
                
                if((dataLoop.getMinutes() - datainicioinatividade.getMinutes()) > 0){
                    tempoinativo = dataLoop.getMinutes() - datainicioinatividade.getMinutes();
                }else if((dataLoop.getMinutes() - datainicioinatividade.getMinutes()) < 0){
                    tempoinativo = 60 - datainicioinatividade.getMinutes();
                    tempoinativo += dataLoop.getMinutes();
                }
                if(tempoinativo > 3){
                    inativo = true;
                    visibilityEquipamentos(false);
                    document.getElementById('mensagem1').src = 'imagens/imagemMensagemPersonagemInativo.png';
                    document.getElementById('mensagem1').style.visibility = 'visible';
                    document.getElementById('ok').style.visibility = 'visible'; 
                    document.getElementById('cancel').style.visibility = 'visible';
                }else{
                    inativo = false;
                }

                if(dataDiv1 <= new Date()){
                    document.getElementById('mensagemDiv1').innerHTML = '';
                    document.getElementById('mensagemDiv1').style.color = "white";
                }
                if(dataDiv2 <= new Date()){
                    document.getElementById('mensagemDiv2').innerHTML = '';
                }

                //codigo de alerta do boss
                if(!alertaBoss && posicaoDoPersonagemNaMatriz[0] > 76 && posicaoDoPersonagemNaMatriz[1] < 20){
                    dataDiv1 = new Date();
                    dataDiv1.setMilliseconds(dataDiv1.getMilliseconds() + 10000);
                    document.getElementById('mensagemDiv1').style.color = "white";
                    document.getElementById('mensagemDiv1').innerHTML = 'Um boss está nas redondezas!';
                    alertaBoss = true;
                }else if(posicaoDoPersonagemNaMatriz[0] <= 76 || posicaoDoPersonagemNaMatriz[1] >= 20){
                    alertaBoss = false;
                    if(document.getElementById('mensagemDiv1').innerHTML == 'Um boss está nas redondezas!'){
                        document.getElementById('mensagemDiv1').innerHTML = '';
                    }
                }

                //codigo troca de musica
                if(!audio1 && posicaoDoPersonagemNaMatriz[0] <= 72 && posicaoDoPersonagemNaMatriz[0] > 56){
                    document.getElementById("myAudio").src = "musicas/ToPTrack02.mp3";
                    audio1 = true;
                    audio2 = false;
                    audio3 = false;
                }else if(!audio2 && posicaoDoPersonagemNaMatriz[0] > 72){
                    document.getElementById("myAudio").src = "musicas/ToPTrack11.mp3";
                    audio1 = false;
                    audio2 = true;
                    audio3 = false;
                }else if(!audio3 && posicaoDoPersonagemNaMatriz[0] < 57){
                    document.getElementById("myAudio").src = "musicas/ToPTrack05.mp3";
                    audio1 = false;
                    audio2 = false;
                    audio3 = true;
                }

                //bot free
                if(botFree){
                    let direcaoBot = getRandomIntInclusive(0,3); 
                    switch(direcaoBot){
                        case 0:
                            moverCimaBot(false);
                            break;
                        case 1:
                            moverDireitaBot(false);
                            break;
                        case 2:
                            moverBaixoBot(false);
                            break;
                        case 3:
                            moverEsquerdaBot(false);
                            break;
                    }
                }

                //document.getElementById('campoDeEscritaInput').focus();

            }

            dialogo = function (){
                var conjurarExura = false;
                var conjurarExuraGran = false;
                var conjurarExori = false;
                var conjurarExoriGran = false;

                if(document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'bot up'){
                    moverCimaBot(true);
                }
                if(document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'bot right'){
                    moverDireitaBot(true);
                }
                if(document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'bot down'){
                    moverBaixoBot(true);
                }
                if(document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'bot left'){
                    moverEsquerdaBot(true);
                }
                if(document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'bot free'){
                    botFree = true;
                }
                if(document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'bot stop'){
                    botFree = false;
                }
                
                if(document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'exura' && exura){
                    conjurarExura = true; 
                }
                if(document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'exura gran' && exuraGran){
                    conjurarExuraGran = true; 
                }
                if(document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'exori' && exori){
                    conjurarExori = true; 
                }
                if(document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'exori gran' && exoriGran){
                    conjurarExoriGran = true; 
                }

                if(document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'hi' || 
                document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'oi' || 
                document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'task' || 
                document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'tarefa' ||
                document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'magic' || 
                document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'magia' ||
                document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'snake task' || 
                document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'dragon task' || 
                document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'mammoth task' ||
                document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'spider task' || 
                document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'reset task' || 
                document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'reset quest' || 
                document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'exura' || 
                document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'exura gran' || 
                document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'exori' || 
                document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'exori gran' || 
                document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'no' || 
                document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'nao'){
                    if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 11 || 
                    matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 11 || 
                    matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 11 || 
                    matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 11 || 
                    matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]-1] == 11 || 
                    matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]+1] == 11 || 
                    matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]-1] == 11 || 
                    matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]+1] == 11){
                        if(document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'hi' || 
                        document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'oi'){
                            identificadorDoChat = 2;
                            document.getElementById('campoDoChat').title ='npc';
                            document.getElementById('textareaChat').title ='npc';
                        }
                        if((document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'hi' && nivelDeConversaNpc == 0) || 
                        (document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'oi' && nivelDeConversaNpc == 0)){
                            nivelDeConversaNpc = 1;
                        }
                        if( (document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'task' && nivelDeConversaNpc == 1) || 
                            (document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'tarefa' && nivelDeConversaNpc == 1) ||
                            (document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'magic' && nivelDeConversaNpc == 1) || 
                            (document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'magia' && nivelDeConversaNpc == 1)){
                            nivelDeConversaNpc = 2;
                        }else if(
                            (
                                (document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'reset quest') && 
                                (quest1 || quest2 || quest3 || quest4) &&
                                (document.getElementById('opcao1').title == "Task")
                            ) && nivelDeConversaNpc == 1
                        ){
                            nivelDeConversaNpc = 3;
                        }
                        if( (
                                (
                                    (
                                        (document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'exura') ||
                                        (document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'exura gran' && lvlatual >= 50) ||
                                        (document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'exori' && lvlatual >= 100) ||
                                        (document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'exori gran' && lvlatual >= 200)
                                    ) && (
                                        (document.getElementById('opcao1').title == "Exura") ||
                                        (document.getElementById('opcao1').title == "Exura gran") ||
                                        (document.getElementById('opcao1').title == "Exori") ||
                                        (document.getElementById('opcao1').title == "Exori gran")
                                    )
                                ) ||
                                (   
                                    (
                                        (document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'snake task') ||
                                        (document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'dragon task') ||
                                        (document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'mammoth task') ||
                                        (document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'spider task')
                                    ) && 
                                    (
                                        (document.getElementById('task').style.visibility == 'hidden') ||
                                        (document.getElementById('campoDeEscritaInput').value.split(' ')[0].toLowerCase() == document.getElementById('task').innerHTML.toLowerCase() && document.getElementById('task').style.visibility == 'visible' && taskvalor == 100)
                                    ) && 
                                    (
                                        document.getElementById('opcao1').title == "Snake Task" ||
                                        document.getElementById('opcao1').title == "Spider Task"
                                    )
                                ) ||
                                (
                                    (document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'reset task') && 
                                    (document.getElementById('task').style.visibility == 'visible') &&
                                    (
                                        document.getElementById('opcao1').title == "Snake Task" ||
                                        document.getElementById('opcao1').title == "Spider Task"
                                    )
                                )
                            ) && nivelDeConversaNpc == 2
                        ){
                            nivelDeConversaNpc = 3;
                        }else if( 
                            (
                                (
                                    (
                                        (document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'exura gran' && lvlatual < 50) ||
                                        (document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'exori' && lvlatual < 100) ||
                                        (document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'exori gran' && lvlatual < 200)
                                    ) && (
                                        (document.getElementById('opcao1').title == "Exura") ||
                                        (document.getElementById('opcao1').title == "Exura gran") ||
                                        (document.getElementById('opcao1').title == "Exori") ||
                                        (document.getElementById('opcao1').title == "Exori gran")
                                    )
                                ) ||
                                (
                                    (
                                        (document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'snake task') ||
                                        (document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'dragon task') ||
                                        (document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'mammoth task') ||
                                        (document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'spider task')
                                    ) &&
                                    (
                                        (document.getElementById('campoDeEscritaInput').value.split(' ')[0].toLowerCase() == document.getElementById('task').innerHTML.toLowerCase() && document.getElementById('task').style.visibility == 'visible' && taskvalor < 100) ||
                                        (document.getElementById('campoDeEscritaInput').value.split(' ')[0].toLowerCase() != document.getElementById('task').innerHTML.toLowerCase() && document.getElementById('task').style.visibility == 'visible')
                                    ) && 
                                    (
                                        document.getElementById('opcao1').title == "Snake Task" ||
                                        document.getElementById('opcao1').title == "Spider Task"
                                    )
                                ) ||
                                (
                                    (document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'reset task') && 
                                    (document.getElementById('task').style.visibility == 'hidden') &&
                                    (
                                        document.getElementById('opcao1').title == "Snake Task" ||
                                        document.getElementById('opcao1').title == "Spider Task"
                                    )
                                )
                            ) && nivelDeConversaNpc == 2
                        ){
                            nivelDeConversaNpc = 5;
                        }
                        if((document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'no' && (nivelDeConversaNpc == 1 || nivelDeConversaNpc == 2)) || 
                        (document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'nao' && (nivelDeConversaNpc == 1 || nivelDeConversaNpc == 2))){
                            nivelDeConversaNpc = 4;
                        }
                    }
                }
                if(
                    (conjurarExura) ||
                    (conjurarExuraGran) ||
                    (conjurarExori) ||
                    (conjurarExoriGran)
                ){
                    //Atualmente ao conjurar nenhuma escrita aparece nos chats default e npc
                } else if(identificadorDoChat == 0){
                    if(
                        (document.getElementById('campoDeEscritaInput').value.toLowerCase() == "exura" && !exura) ||
                        (document.getElementById('campoDeEscritaInput').value.toLowerCase() == "exura gran" && !exuraGran) ||
                        (document.getElementById('campoDeEscritaInput').value.toLowerCase() == "exori" && !exori) ||
                        (document.getElementById('campoDeEscritaInput').value.toLowerCase() == "exori gran" && !exoriGran)
                    ){
                        mensagensDoChatDefault += "\n\nSistema: Você ainda não sabe esta magia.";
                        dataDiv2 = new Date();
                        dataDiv2.setMilliseconds(dataDiv2.getMilliseconds() + 1000);
                        document.getElementById('mensagemDiv2').innerHTML = "Você ainda não sabe esta magia.";
                    }else if(document.getElementById('campoDeEscritaInput').value.toLowerCase() != ""){
                        let data = new Date();
                        mensagensDoChatDefault += "\n\n" + data.getHours() + ":" + data.getMinutes() + " " + username + " [" + lvlatual + "]: " + document.getElementById('campoDeEscritaInput').value;

                        if(document.getElementById('campoDeEscritaInput').value.length < 32){
                            document.getElementById('mensagemDiv3').style.textAlign = 'left';
                            document.getElementById('mensagemDiv3').style.left = 365;
                        } else {
                            document.getElementById('mensagemDiv3').style.textAlign = 'center';
                            document.getElementById('mensagemDiv3').style.left = 320;
                        }
                        document.getElementById('mensagemDiv3').style.color = 'yellow';
                        document.getElementById('mensagemDiv3').style.width = 250;

                        mensagem = document.getElementById('campoDeEscritaInput').value;
                        document.getElementById('mensagemDiv3').innerHTML = username + " says: " + mensagem;
                        setTimeout(function(){
                            mensagem = ""; document.getElementById('mensagemDiv3').innerHTML = "";
                            document.getElementById('mensagemDiv3').style.textAlign = 'left';
                            document.getElementById('mensagemDiv3').style.left = 245;
                        }, 5000);
                    }
                    document.getElementById('campoDeEscritaInput').value = "";
                    document.getElementById('textareaChat').value = mensagensDoChatDefault;
                    document.getElementById('textareaChat').scrollTop = document.getElementById('textareaChat').scrollHeight;
                }else if(identificadorDoChat == 1){
                    if(
                        (document.getElementById('campoDeEscritaInput').value.toLowerCase() == "exura" && !exura) ||
                        (document.getElementById('campoDeEscritaInput').value.toLowerCase() == "exura gran" && !exuraGran) ||
                        (document.getElementById('campoDeEscritaInput').value.toLowerCase() == "exori" && !exori) ||
                        (document.getElementById('campoDeEscritaInput').value.toLowerCase() == "exori gran" && !exoriGran)
                    ){
                        mensagensDoChatServerLog += "\n\nSistema: Você ainda não sabe esta magia.";
                        dataDiv2 = new Date();
                        dataDiv2.setMilliseconds(dataDiv2.getMilliseconds() + 1000);
                        document.getElementById('mensagemDiv2').innerHTML = "Você ainda não sabe esta magia.";
                    }
                }else if(identificadorDoChat == 2){
                    if(
                        (document.getElementById('campoDeEscritaInput').value.toLowerCase() == "exura" && !exura && nivelDeConversaNpc != 3) ||
                        (document.getElementById('campoDeEscritaInput').value.toLowerCase() == "exura gran" && !exuraGran && (nivelDeConversaNpc != 3 && nivelDeConversaNpc != 5)) ||
                        (document.getElementById('campoDeEscritaInput').value.toLowerCase() == "exori" && !exori && (nivelDeConversaNpc != 3 && nivelDeConversaNpc != 5)) ||
                        (document.getElementById('campoDeEscritaInput').value.toLowerCase() == "exori gran" && !exoriGran && (nivelDeConversaNpc != 3 && nivelDeConversaNpc != 5))
                    ){
                        mensagensDoChatNpc += "\n\nSistema: Você ainda não sabe esta magia.";
                        dataDiv2 = new Date();
                        dataDiv2.setMilliseconds(dataDiv2.getMilliseconds() + 1000);
                        document.getElementById('mensagemDiv2').innerHTML = "Você ainda não sabe esta magia.";
                    }else if(document.getElementById('campoDeEscritaInput').value.toLowerCase() != ""){
                        if(document.getElementById('campoDeEscritaInput').value.toLowerCase() == "nao"){
                            mensagensDoChatNpc += "\n\nAgora não!";
                        }else if(document.getElementById('campoDeEscritaInput').value.toLowerCase() == "no"){
                            mensagensDoChatNpc += "\n\n" + document.getElementById('campoDeEscritaInput').value.charAt(0).toUpperCase() + document.getElementById('campoDeEscritaInput').value.slice(1).toLowerCase() + " now!";
                        }else{
                            mensagensDoChatNpc += "\n\n" + document.getElementById('campoDeEscritaInput').value.charAt(0).toUpperCase() + document.getElementById('campoDeEscritaInput').value.slice(1).toLowerCase() + "!";
                        }
                    }

                    dataDiv1 = new Date();
                    dataDiv1.setMilliseconds(dataDiv1.getMilliseconds() + 10000);

                    numOpcao = 0;
                    var auxText = "";

                    switch(nivelDeConversaNpc){
                        case 1:
                            auxText += "Npc: Oi aventureiro, você quer receber/finalizar uma 'task'";
                            preencherOpcoes("Task","Task");
                            if(!exura || !exuraGran || !exori || !exoriGran){
                                auxText += ", aprender uma 'magia'";
                                preencherOpcoes("Magia","Magia");
                            }
                            if(quest1 || quest2 || quest3 || quest4){
                                auxText += ", resetar a quest principal";
                                preencherOpcoes("Reset Quest","Reset Quest");
                            }
                            auxText += " ou agora não?";
                            preencherOpcoes("Agora não","Nao");
                            if(exura && exuraGran && exori && exoriGran){
                                auxText += " Não temos nenhuma magia para ensinar.";
                            }
                            
                            mensagensDoChatNpc += "\n\n" + auxText;

                            document.getElementById('mensagemDiv1').style.color = 'white';
                            document.getElementById('mensagemDiv1').innerHTML = auxText;
                            
                            break;
                        case 2:
                            if( document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'task' ||
                                document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'tarefa'){

                                let taskopcao1 = ""; 

                                if(lvlatual < 100){
                                    taskopcao1 = "Snake Task";
                                }else{
                                    taskopcao1 = "Spider Task";
                                }

                                auxText += "Npc: Temos as seguintes tasks: " + taskopcao1 + ", 'Dragon Task' e 'Mammoth Task'. Digite o nome da task a receber/finalizar ou 'Reset Task' caso queira desistir da task atual...";

                                mensagensDoChatNpc += "\n\n" + auxText;

                                //document.getElementById('mensagemDiv1').style.color = '#00ccff';
                                document.getElementById('mensagemDiv1').style.color = 'white';
                                document.getElementById('mensagemDiv1').innerHTML = auxText;

                                preencherOpcoes(taskopcao1,taskopcao1);
                                preencherOpcoes("Dragon Task","Dragon Task");
                                preencherOpcoes("Mammoth Task","Mammoth Task");
                                preencherOpcoes("Reset Task","Reset Task");
                                preencherOpcoes("Agora não","Nao");
                            }else if( document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'magic' ||
                                document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'magia'){

                                document.getElementById('opcao1').style.visibility = 'hidden';
                                document.getElementById('opcao2').style.visibility = 'hidden';
                                document.getElementById('opcao3').style.visibility = 'hidden';
                                document.getElementById('opcao4').style.visibility = 'hidden';
                                document.getElementById('opcao5').style.visibility = 'hidden';
                                document.getElementById('opcao1').innerHTML = "Opcao 1";
                                document.getElementById('opcao1').title = "opcao1";
                                document.getElementById('opcao2').innerHTML = "Opcao 2";
                                document.getElementById('opcao2').title = "opcao2";
                                document.getElementById('opcao3').innerHTML = "Opcao 3";
                                document.getElementById('opcao3').title = "opcao3";
                                document.getElementById('opcao4').innerHTML = "Opcao 4";
                                document.getElementById('opcao4').title = "opcao4";
                                document.getElementById('opcao5').innerHTML = "Opcao 5";
                                document.getElementById('opcao5').title = "opcao5";
                                document.getElementById('opcao1').style.height = 0;
                                document.getElementById('opcao2').style.height = 0;
                                document.getElementById('opcao3').style.height = 0;
                                document.getElementById('opcao4').style.height = 0;
                                document.getElementById('opcao5').style.height = 0;

                                auxText += "Npc: Temos a(s) seguinte(s) magia(s):";
                                let magias = "";
                                if(!exura){
                                    magias += " 'exura'";
                                    preencherOpcoes("Exura","Exura");
                                }
                                if(!exuraGran){
                                    magias += " 'exura gran'";
                                    preencherOpcoes("Exura gran","Exura gran");
                                }
                                if(!exori){
                                    magias += " 'exori'";
                                    preencherOpcoes("Exori","Exori");
                                }
                                if(!exoriGran){
                                    magias += " 'exori gran'";
                                    preencherOpcoes("Exori gran","Exori gran");
                                }
                                preencherOpcoes("Agora não","Nao");

                                auxText += magias + ". Digite o nome da magia para aprender...";

                                mensagensDoChatNpc += "\n\n" + auxText;

                                //document.getElementById('mensagemDiv1').style.color = '#00ccff';
                                document.getElementById('mensagemDiv1').style.color = 'white';
                                document.getElementById('mensagemDiv1').innerHTML = auxText;
                            }
                            //document.getElementById('conversa').style.visibility = 'visible';
                            break;
                        case 3:
                            document.getElementById('conversa').style.visibility = 'hidden';
                            document.getElementById('opcao1').style.visibility = 'hidden';
                            document.getElementById('opcao2').style.visibility = 'hidden';
                            document.getElementById('opcao3').style.visibility = 'hidden';
                            document.getElementById('opcao4').style.visibility = 'hidden';
                            document.getElementById('opcao5').style.visibility = 'hidden';
                            document.getElementById('opcao1').innerHTML = "Opcao 1";
                            document.getElementById('opcao1').title = "opcao1";
                            document.getElementById('opcao2').innerHTML = "Opcao 2";
                            document.getElementById('opcao2').title = "opcao2";
                            document.getElementById('opcao3').innerHTML = "Opcao 3";
                            document.getElementById('opcao3').title = "opcao3";
                            document.getElementById('opcao4').innerHTML = "Opcao 4";
                            document.getElementById('opcao4').title = "opcao4";
                            document.getElementById('opcao5').innerHTML = "Opcao 5";
                            document.getElementById('opcao5').title = "opcao5";
                            document.getElementById('opcao1').style.height = 0;
                            document.getElementById('opcao2').style.height = 0;
                            document.getElementById('opcao3').style.height = 0;
                            document.getElementById('opcao4').style.height = 0;
                            document.getElementById('opcao5').style.height = 0;

                            mensagensDoChatNpc += "\n\nNpc: Prontinho. Tchau!";

                            //document.getElementById('mensagemDiv1').style.color = '#00ccff';
                            document.getElementById('mensagemDiv1').style.color = 'white';
                            document.getElementById('mensagemDiv1').innerHTML = "Npc: Prontinho. Tchau!";

                            if(document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'exura'){
                                exura = true;
                                document.getElementById('magiaExura').src = 'imagens/Ultimate_Healing.png';
                                document.getElementById('magiaExura').alt = 'exura';
                                document.getElementById('magiaExura').title = 'exura';
                            }
                            else if(document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'exura gran'){
                                exuraGran = true;
                                document.getElementById('magiaExuraGran').src = 'imagens/Restoration.png';
                                document.getElementById('magiaExuraGran').alt = 'exura gran';
                                document.getElementById('magiaExuraGran').title = 'exura gran';
                            }
                            else if(document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'exori'){
                                exori = true;
                                document.getElementById('magiaExori').src = 'imagens/Berserk.png';
                                document.getElementById('magiaExori').alt = 'exori';
                                document.getElementById('magiaExori').title = 'exori';
                            }
                            else if(document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'exori gran'){
                                exoriGran = true;
                                document.getElementById('magiaExoriGran').src = 'imagens/Fierce_Berserk.png';
                                document.getElementById('magiaExoriGran').alt = 'exori gran';
                                document.getElementById('magiaExoriGran').title = 'exori gran';
                            }
                            else if( (
                                (document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'snake task') ||
                                (document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'dragon task') ||
                                (document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'mammoth task') ||
                                (document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'spider task')
                                ) && document.getElementById('task').style.visibility == 'hidden'
                            ){
                                document.getElementById('tasks').innerHTML = 'Tasks';
                                document.getElementById('task').innerHTML = document.getElementById('campoDeEscritaInput').value.toLowerCase().split(' ')[0].charAt(0).toUpperCase() + document.getElementById('campoDeEscritaInput').value.toLowerCase().split(' ')[0].slice(1);
                                switch(document.getElementById('campoDeEscritaInput').value.toLowerCase().split(' ')[0].charAt(0).toUpperCase() + document.getElementById('campoDeEscritaInput').value.toLowerCase().split(' ')[0].slice(1)){
                                    case "Snake":
                                        nomeCriaturaTask = "Snake";
                                        tasknumber = 1;
                                        break;
                                    case "Dragon":
                                        nomeCriaturaTask = "Dragon";
                                        tasknumber = 2;
                                        break;
                                    case "Mammoth":
                                        nomeCriaturaTask = "Mammoth";
                                        tasknumber = 3;
                                        break;
                                    case "Spider":
                                        nomeCriaturaTask = "Spider";
                                        tasknumber = 4;
                                        break;
                                }
                                taskvalor = 0;
                                document.getElementById('taskvalor').innerHTML = taskvalor + '/100';
                                document.getElementById('task').style.visibility = 'visible';
                                document.getElementById('taskvalor').style.visibility = 'visible';
                            }
                            else if((document.getElementById('campoDeEscritaInput').value.split(' ')[0].toLowerCase() == document.getElementById('task').innerHTML.toLowerCase() || document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'reset task') && document.getElementById('task').style.visibility == 'visible' && taskvalor == 100){
                                switch(tasknumber){
                                    case 1: //Snake
                                        nivel += 100;
                                        calculaLevel();
                                        mensagemGanhouExperiencia(100);
                                        break;
                                    case 2: //Dragon
                                        nivel += 200;
                                        calculaLevel();
                                        mensagemGanhouExperiencia(200);
                                        break;
                                    case 3: //Mammoth
                                        nivel += 300;
                                        calculaLevel();
                                        mensagemGanhouExperiencia(300);
                                        break;
                                    case 4: //Spider
                                        nivel += 400;
                                        calculaLevel();
                                        mensagemGanhouExperiencia(400);
                                        break;
                                }
                                document.getElementById('task').style.visibility = 'hidden';
                                document.getElementById('taskvalor').style.visibility = 'hidden';
                                document.getElementById('tasks').innerHTML = 'Tasks no NPC';
                                document.getElementById('task').innerHTML = "[Monster]";
                                nomeCriaturaTask = "[Monster]";
                                tasknumber = 0;
                                taskvalor = 0;
                                document.getElementById('taskvalor').innerHTML = taskvalor + '/100';
                            }else if(document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'reset task' && document.getElementById('task').style.visibility == 'visible' && taskvalor < 100){
                                document.getElementById('task').style.visibility = 'hidden';
                                document.getElementById('taskvalor').style.visibility = 'hidden';
                                document.getElementById('tasks').innerHTML = 'Tasks no NPC';
                                document.getElementById('task').innerHTML = "[Monster]";
                                nomeCriaturaTask = "[Monster]";
                                tasknumber = 0;
                                taskvalor = 0;
                                document.getElementById('taskvalor').innerHTML = taskvalor + '/100';
                            }else if(
                                    (document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'reset quest') && 
                                    (quest1 || quest2 || quest3 || quest4)
                            ){
                                quest1 = 0;
                                matrizDoMapa[44][24] = matrizDoMapaOriginal[44][24];
                                matrizDoMapa[54][35] = matrizDoMapaOriginal[54][35];
                                matrizDoMapa[45][45] = matrizDoMapaOriginal[45][45];
                                quest2 = 0;
                                matrizDoMapa[54][27] = matrizDoMapaOriginal[54][27];
                                matrizDoMapa[44][38] = matrizDoMapaOriginal[44][38];
                                matrizDoMapa[49][45] = matrizDoMapaOriginal[49][45];
                                quest3 = 0;
                                matrizDoMapa[44][31] = matrizDoMapaOriginal[44][31];
                                matrizDoMapa[54][41] = matrizDoMapaOriginal[54][41];
                                matrizDoMapa[53][45] = matrizDoMapaOriginal[53][45];
                                quest4 = 0;
                                matrizDoMapa[66][30] = matrizDoMapaOriginal[66][30];
                                matrizDoMapa[58][45] = matrizDoMapaOriginal[58][45];
                                matrizDoMapa[67][44] = matrizDoMapaOriginal[67][44];
                            }
                            nivelDeConversaNpc = 0;
                            break;
                        case 4:
                            document.getElementById('conversa').style.visibility = 'hidden';
                            document.getElementById('opcao1').style.visibility = 'hidden';
                            document.getElementById('opcao2').style.visibility = 'hidden';
                            document.getElementById('opcao3').style.visibility = 'hidden';
                            document.getElementById('opcao4').style.visibility = 'hidden';
                            document.getElementById('opcao5').style.visibility = 'hidden';
                            document.getElementById('opcao1').innerHTML = "Opcao 1";
                            document.getElementById('opcao1').title = "opcao1";
                            document.getElementById('opcao2').innerHTML = "Opcao 2";
                            document.getElementById('opcao2').title = "opcao2";
                            document.getElementById('opcao3').innerHTML = "Opcao 3";
                            document.getElementById('opcao3').title = "opcao3";
                            document.getElementById('opcao4').innerHTML = "Opcao 4";
                            document.getElementById('opcao4').title = "opcao4";
                            document.getElementById('opcao5').innerHTML = "Opcao 5";
                            document.getElementById('opcao5').title = "opcao5";
                            document.getElementById('opcao1').style.height = 0;
                            document.getElementById('opcao2').style.height = 0;
                            document.getElementById('opcao3').style.height = 0;
                            document.getElementById('opcao4').style.height = 0;
                            document.getElementById('opcao5').style.height = 0;

                            auxText += "Npc: Até mais!";

                            mensagensDoChatNpc += "\n\n" + auxText;

                            //document.getElementById('mensagemDiv1').style.color = '#00ccff';
                            document.getElementById('mensagemDiv1').style.color = 'white';
                            document.getElementById('mensagemDiv1').innerHTML = auxText;

                            nivelDeConversaNpc = 0;
                            break;
                        case 5:
                            document.getElementById('conversa').style.visibility = 'hidden';
                            document.getElementById('opcao1').style.visibility = 'hidden';
                            document.getElementById('opcao2').style.visibility = 'hidden';
                            document.getElementById('opcao3').style.visibility = 'hidden';
                            document.getElementById('opcao4').style.visibility = 'hidden';
                            document.getElementById('opcao5').style.visibility = 'hidden';
                            document.getElementById('opcao1').innerHTML = "Opcao 1";
                            document.getElementById('opcao1').title = "opcao1";
                            document.getElementById('opcao2').innerHTML = "Opcao 2";
                            document.getElementById('opcao2').title = "opcao2";
                            document.getElementById('opcao3').innerHTML = "Opcao 3";
                            document.getElementById('opcao3').title = "opcao3";
                            document.getElementById('opcao4').innerHTML = "Opcao 4";
                            document.getElementById('opcao4').title = "opcao4";
                            document.getElementById('opcao5').innerHTML = "Opcao 5";
                            document.getElementById('opcao5').title = "opcao5";
                            document.getElementById('opcao1').style.height = 0;
                            document.getElementById('opcao2').style.height = 0;
                            document.getElementById('opcao3').style.height = 0;
                            document.getElementById('opcao4').style.height = 0;
                            document.getElementById('opcao5').style.height = 0;

                            switch(document.getElementById('campoDeEscritaInput').value.toLowerCase()){
                                case 'exura gran':
                                    mensagemNivelNecessario("50+");
                                    break;
                                case 'exori':
                                    mensagemNivelNecessario("100+");
                                    break;
                                case 'exori gran':
                                    mensagemNivelNecessario("200+");
                                    break;
                                case 'snake task':
                                    mensagemTaskNaoTerminada();
                                    break;
                                case 'dragon task':
                                    mensagemTaskNaoTerminada();
                                    break;
                                case 'mammoth task':
                                    mensagemTaskNaoTerminada();
                                    break;
                                case 'spider task':
                                    mensagemTaskNaoTerminada();
                                    break;
                                case 'reset task':
                                    auxText += "Npc: Você ainda não recebeu uma task!";

                                    mensagensDoChatNpc += "\n\n" + auxText;
                                    
                                    //document.getElementById('mensagemDiv1').style.color = '#00ccff';
                                    document.getElementById('mensagemDiv1').style.color = 'white';
                                    document.getElementById('mensagemDiv1').innerHTML = auxText;

                                    break;
                            }
                            nivelDeConversaNpc = 0;
                            break;
                    }
                    document.getElementById('campoDeEscritaInput').value = "";
                    document.getElementById('textareaChat').value = mensagensDoChatNpc;
                    document.getElementById('textareaChat').scrollTop = document.getElementById('textareaChat').scrollHeight;
                    //document.getElementById('campoDeEscritaInput').focus();
                    document.getElementById('nomeDoChatDefault').style.color = 'black';
                    document.getElementById('nomeDoChatServerLog').style.color = 'black';
                    document.getElementById('nomeDoChatNpc').style.color = 'white';
                }
                if(conjurarExura){

                    if(dataMagia <= new Date()){
                        dataMagia = new Date();
                        dataMagia.setMilliseconds(dataMagia.getMilliseconds() + 1000);

                        document.getElementById('fala1').src = 'imagens/imagemFalaExura.png';
                        setTimeout(function(){ document.getElementById('fala1').src = 'imagens/imagemFalaVazia.png';}, 1000);

                        regeneracao(2, "curou");

                    }else{
                        dataDiv2 = new Date();
                        dataDiv2.setMilliseconds(dataDiv2.getMilliseconds() + 1000);
                        document.getElementById('mensagemDiv2').innerHTML = 'Você está exausto.'; 
                    }
                    
                }
                if(conjurarExuraGran){

                    if(dataMagia <= new Date()){
                        dataMagia = new Date();
                        dataMagia.setMilliseconds(dataMagia.getMilliseconds() + 1000);

                        document.getElementById('fala1').src = 'imagens/imagemFalaExuraGran.png';
                        setTimeout(function(){ document.getElementById('fala1').src = 'imagens/imagemFalaVazia.png';}, 1000);

                        regeneracao(3, "curou");

                    }else{
                        dataDiv2 = new Date();
                        dataDiv2.setMilliseconds(dataDiv2.getMilliseconds() + 1000);
                        document.getElementById('mensagemDiv2').innerHTML = 'Você está exausto.'; 
                    }

                }
                if(conjurarExori){

                    if(dataMagia <= new Date()){
                        dataMagia = new Date();
                        dataMagia.setMilliseconds(dataMagia.getMilliseconds() + 1000);

                        document.getElementById('fala1').src = 'imagens/imagemFalaExori.png';
                        setTimeout(function(){ document.getElementById('fala1').src = 'imagens/imagemFalaVazia.png';}, 1000);

                        ataqueCampo("Campo-3-4",-1,-1);
                        ataqueCampo("Campo-3-5",-1,0);
                        ataqueCampo("Campo-3-6",-1,1);
                        ataqueCampo("Campo-4-6",0,1);
                        ataqueCampo("Campo-5-6",1,1);
                        ataqueCampo("Campo-5-5",1,0);
                        ataqueCampo("Campo-5-4",1,-1);
                        ataqueCampo("Campo-4-4",0,-1);

                    }else{
                        dataDiv2 = new Date();
                        dataDiv2.setMilliseconds(dataDiv2.getMilliseconds() + 1000);
                        document.getElementById('mensagemDiv2').innerHTML = 'Você está exausto.'; 
                    }

                }
                if(conjurarExoriGran){
                    let i = 1;

                    if(dataMagia <= new Date()){
                        dataMagia = new Date();
                        dataMagia.setMilliseconds(dataMagia.getMilliseconds() + 1000);

                        document.getElementById('fala1').src = 'imagens/imagemFalaExoriGran.png';
                        setTimeout(function(){ document.getElementById('fala1').src = 'imagens/imagemFalaVazia.png';}, 1000);

                        for(let j = -3; j < 4; j++){
                            for(let k = -4; k < 5; k++){
                                ataqueCampo("Campo" + "-" + (j + 6) + "-" + (k + 7),j,k);
                                i++;
                            }
                        }
                        
                    }else{
                        dataDiv2 = new Date();
                        dataDiv2.setMilliseconds(dataDiv2.getMilliseconds() + 1000);
                        document.getElementById('mensagemDiv2').innerHTML = 'Você está exausto.'; 
                    }

                }
            }

            pressKey = function (key){

                var tecla = key.which;

                datainicioinatividade = new Date();

                if(tecla != 13){
                    //tecla = String.fromCharCode(tecla);
                    if(tecla == 49 && exura && document.getElementById('campoDeEscritaInput').value == ''){
                        document.getElementById('campoDeEscritaInput').value = 'exura';
                        dialogo();
                        document.getElementById('campoDeEscritaInput').value = '';
                    }
                    if(tecla == 50 && exuraGran && document.getElementById('campoDeEscritaInput').value == ''){
                        document.getElementById('campoDeEscritaInput').value = 'exura gran';
                        dialogo();
                        document.getElementById('campoDeEscritaInput').value = '';
                    }
                    if(tecla == 51 && exori && document.getElementById('campoDeEscritaInput').value == ''){
                        document.getElementById('campoDeEscritaInput').value = 'exori';
                        dialogo();
                        document.getElementById('campoDeEscritaInput').value = '';
                    }
                    if(tecla == 52 && exoriGran && document.getElementById('campoDeEscritaInput').value == ''){
                        document.getElementById('campoDeEscritaInput').value = 'exori gran';
                        dialogo();
                        document.getElementById('campoDeEscritaInput').value = '';
                    }
                } else {
                    if(document.getElementById('mensagem1').style.visibility == 'hidden'){
                        dialogo();
                    }
                }

            }

            visibilityEquipamentos = function (condicao){
                document.getElementById('mensagem1').src = 'imagens/imagemEquipamentos.png'; 
                document.getElementById('mensagem1').alt = 'equipamentos'; 
                document.getElementById('mensagem1').title = 'equipamentos'; 
                if(condicao){
                    document.getElementById('mensagem1').style.visibility = 'visible'; 
                    document.getElementById('equipamentoMochila').style.visibility = 'visible'; 
                    document.getElementById('equipamentoParcel').style.visibility = 'visible'; 
                    document.getElementById('equipamentoMenos').style.visibility = 'visible'; 
                    document.getElementById('equipamentoMaoDireita').style.visibility = 'visible'; 
                    document.getElementById('equipamentoMaoEsquerda').style.visibility = 'visible'; 
                    flagEquipamento = true;
                }else{
                    document.getElementById('mensagem1').style.visibility = 'hidden'; 
                    document.getElementById('equipamentoMochila').style.visibility = 'hidden'; 
                    document.getElementById('equipamentoParcel').style.visibility = 'hidden'; 
                    document.getElementById('equipamentoMenos').style.visibility = 'hidden'; 
                    document.getElementById('equipamentoMaoDireita').style.visibility = 'hidden'; 
                    document.getElementById('equipamentoMaoEsquerda').style.visibility = 'hidden'; 
                    flagEquipamento = false;
                }
                if(!inativo)
                    datainicioinatividade = new Date();
            }

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

                //echo "run_ajax();";

                $username = $_POST['username'];
                $password = $_POST['password'];
                $logado = false;

                $sql = "SELECT `username`, `password`, `x`, `y`, `direcao`, `nivel`, `hp`, `outfit`, `mensagem`, `json` FROM `ottibia` WHERE `username`='" . $username . "' AND `password`='" . $password . "'";
                
                $result = $conn->query($sql);

                while($obj = $result->fetch_object()){

                    echo "username = '" . $obj->username . "';";
                    echo "password = '" . $obj->password . "';";
                    echo "posicaoDoPersonagemNaMatriz[0] = " . $obj->x . ";";
                    echo "posicaoDoPersonagemNaMatriz[1] = " . $obj->y . ";";
                    echo "direcaoDoPersonagem = " . $obj->direcao . ";";
                    echo "nivel = " . $obj->nivel . ";";
                    echo "hp = " . $obj->hp . ";";
                    echo "if(hp == 0){
                        hp++;
                    }";
                    echo "outfit = '" . $obj->outfit . "';";
                    //echo "mensagem = '" . $obj->mensagem . "';";
                    echo "mensagem = '';";
                    echo "dadosJson = '" . $obj->json . "';";

                    $logado = true;
                }

                if(!$logado){
                    echo "alert('Conta inexistente. Acesse magiclevel.ml para se registrar.');";
                    echo "window.location.replace('https://magiclevel.ml');";
                }

                $result->close();
                
                $conn->close();
                
            ?>

            document.body.style.userSelect = "none";

            newMap();

            matrizDoMapa[posicaoBot[0]][posicaoBot[1]] = 51;

            ultim_x = posicaoDoPersonagemNaMatriz[0];
            ultim_y = posicaoDoPersonagemNaMatriz[1];
            ultim_direcao = direcaoDoPersonagem;
            ultim_outfit = outfit;
            ultim_nivel = nivel;
            ultim_hp = hp;
            ultim_mensgem = mensagem;
            if(dadosJson){
                dadosJson = JSON.parse(dadosJson);
                ultim_json = JSON.stringify(dadosJson);
            }

            document.getElementById('nomePersonagem1').innerHTML = username;

            document.getElementById('level').innerHTML = 'Level';
            document.getElementById('nivel').innerHTML = 'Xp';
            document.getElementById('speed').innerHTML = 'Speed';
            document.getElementById('tasks').innerHTML = 'Tasks no NPC';
            document.getElementById('task').innerHTML = '[Monster]';
            taskvalor = 0;
            document.getElementById('taskvalor').innerHTML = taskvalor + "/100";

            document.getElementById('fala1').src = 'imagens/imagemFalaVoceJaTemBless.png';
            setTimeout(function(){document.getElementById('fala1').src = 'imagens/imagemFalaVazia.png';}, 2000);

            calculaLevel();

            document.getElementById('textareaChatHistoria').value = mensagensDoChatHistoria1;

            escolherOutfit();

            if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]] == 7){
                nivelDeSolo++;
                document.getElementById('personagem1').style.top = parseInt(document.getElementById('personagem1').style.top.split('p')[0]) - 10;
                document.getElementById('personagem1').style.left = parseInt(document.getElementById('personagem1').style.left.split('p')[0]) - 10;
            }

            if(posicaoDoPersonagemNaMatriz[0] > 88){
                matrizDoMapa[posicaoJangada[0]][posicaoJangada[1]] = 26;
                matrizDoMapa[posicaoJangada[0]][posicaoJangada[1]+1] = 38;
                matrizDoMapa[posicaoJangada[0]][posicaoJangada[1]+2] = 38; 
                matrizDoMapa[posicaoJangada[0]][posicaoJangada[1]+3] = 26;
                matrizDoMapa[posicaoJangada[0]+1][posicaoJangada[1]] = 26;
                matrizDoMapa[posicaoJangada[0]+1][posicaoJangada[1]+1] = 26;
                matrizDoMapa[posicaoJangada[0]+1][posicaoJangada[1]+2] = 26; 
                matrizDoMapa[posicaoJangada[0]+1][posicaoJangada[1]+3] = 26;
                posicaoJangada[0] = 89;
                matrizDoMapa[posicaoJangada[0]][posicaoJangada[1]] = 53;
                matrizDoMapa[posicaoJangada[0]][posicaoJangada[1]+1] = 52;
                matrizDoMapa[posicaoJangada[0]][posicaoJangada[1]+2] = 52; 
                matrizDoMapa[posicaoJangada[0]][posicaoJangada[1]+3] = 54;
                matrizDoMapa[posicaoJangada[0]+1][posicaoJangada[1]] = 53;
                matrizDoMapa[posicaoJangada[0]+1][posicaoJangada[1]+1] = 52;
                matrizDoMapa[posicaoJangada[0]+1][posicaoJangada[1]+2] = 52; 
                matrizDoMapa[posicaoJangada[0]+1][posicaoJangada[1]+3] = 54;
            }

            if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]] == 57 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]] == 61 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]] == 62 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]] == 63){
                revelarCasa(4);
            }

            if(!verificarPosicaoValida(0, 0)){
                posicaoDoPersonagemNaMatriz = [7,8];

                if(posicaoJangada[0] == 89){
                    matrizDoMapa[posicaoJangada[0]][posicaoJangada[1]] = 26;
                    matrizDoMapa[posicaoJangada[0]][posicaoJangada[1]+1] = 26;
                    matrizDoMapa[posicaoJangada[0]][posicaoJangada[1]+2] = 26; 
                    matrizDoMapa[posicaoJangada[0]][posicaoJangada[1]+3] = 26;
                    matrizDoMapa[posicaoJangada[0]+1][posicaoJangada[1]] = 26;
                    matrizDoMapa[posicaoJangada[0]+1][posicaoJangada[1]+1] = 34;
                    matrizDoMapa[posicaoJangada[0]+1][posicaoJangada[1]+2] = 34; 
                    matrizDoMapa[posicaoJangada[0]+1][posicaoJangada[1]+3] = 26;
                    posicaoJangada[0] = 82;
                    matrizDoMapa[posicaoJangada[0]][posicaoJangada[1]] = 53;
                    matrizDoMapa[posicaoJangada[0]][posicaoJangada[1]+1] = 52;
                    matrizDoMapa[posicaoJangada[0]][posicaoJangada[1]+2] = 52; 
                    matrizDoMapa[posicaoJangada[0]][posicaoJangada[1]+3] = 54;
                    matrizDoMapa[posicaoJangada[0]+1][posicaoJangada[1]] = 53;
                    matrizDoMapa[posicaoJangada[0]+1][posicaoJangada[1]+1] = 52;
                    matrizDoMapa[posicaoJangada[0]+1][posicaoJangada[1]+2] = 52; 
                    matrizDoMapa[posicaoJangada[0]+1][posicaoJangada[1]+3] = 54;
                }
            }

            if(dadosJson){
                readDadosJson();
            }

        }

            main();

            //alert("Servidor em Manutenção!");

        </script>

    </body>
</html>