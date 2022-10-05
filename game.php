<html>
    <head>
        <link rel="shortcut icon" href="imagens/magic.ico" type="image/x-icon">
        <title>Magic Level</title>
        <meta charset="UTF-8">
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2702297921966374"
     crossorigin="anonymous"></script>
        <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/dompurify/2.3.4/purify.min.js" integrity="sha512-jGh38w63cHRzfBHtyKgEMMkJswUFXDA3YXrDjaE8ptzxV5DDkLDUDjtGUy5tmDkOXHWsItKfFjocaEtj1WuVnQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <style>
            *::-webkit-scrollbar {
                width: 14px;               /* width of the entire scrollbar */
            }

            *::-webkit-scrollbar-track {
                //background: #ccffff;        /* background | color of the tracking area */
            }

            *::-webkit-scrollbar-thumb {
                background-color: #3CB371;    /* color of the scroll thumb */
                border-radius: 20px;       /* roundness of the scroll thumb */
                border: 1px solid #ccffff;  /* creates padding around scroll thumb */
            }

            *::-webkit-scrollbar-thumb:hover {
                background-color: #8FBC8F;    /* color of the scroll thumb */
                border-radius: 20px;       /* roundness of the scroll thumb */
                border: 1px solid #ccffff;  /* creates padding around scroll thumb */
            }

            .alertRed {
                padding: 20px;
                background-color: #f44336;
                color: white;
                border-radius: 15px 50px;
            }
            .alertYellow {
                padding: 20px;
                background-color: #FFCC00;
                color: white;
                border-radius: 15px 50px;
            }
            .closebtn {
                margin-left: 15px;
                color: white;
                font-weight: bold;
                float: right;
                font-size: 22px;
                line-height: 20px;
                cursor: pointer;
                transition: 0.3s;
            }
            .closebtn:hover {
                color: black;
            }

            .context-menu {
                position: absolute;
                text-align: center;
                background: #3CB371;
                border-radius: 15px 50px;
                font-family: "Lucida Console", "Courier New", monospace; 
                font-size: x-small;
            }
    
            .context-menu ul {
                padding: 0px;
                margin: 0px;
                min-width: 150px;
                list-style: none;
            }
    
            .context-menu ul li {
                
            }
    
            .context-menu ul li div {
                padding-bottom: 7px;
                padding-top: 7px;
                text-decoration: none;
                color: white;
            }
    
            .context-menu ul li:hover {
                background: #8FBC8F;
                border-radius: 15px 50px;
            }

            #fs-toggle:not(:fullscreen) {
                background-color: #ccffff;
                padding: 7px;
                border-radius: 15px 50px;
                font-family: "Lucida Console", "Courier New", monospace; 
                font-size: x-small;
                opacity: 0.5;
            }

            #fs-toggle:fullscreen {
                background-color: #ccffff;
                padding: 7px;
                border-radius: 15px 50px;
                font-family: "Lucida Console", "Courier New", monospace; 
                font-size: x-small;
                opacity: 0.5;
            }
        </style>
        <script>
        </script>
    </head>
    <!-- load, keypress -->
    <body>
        <!--
        <div id='painelEsquerda1' title='painel' style='position:fixed; top: 0; left: 0; width: 60; height:100%; background-color: gray;'></div>
        <div id='painelCima1' title='painel' style='position:fixed; top: 0; left: 0; width: 100%; height:60; background-color: gray;'></div>
        -->
        <div id='painelBaixo1' title='painel' style='position:fixed; top: 0; left: 0; width: 100%; height:100%; background-color: #ccffff; font-family: "Lucida Console", "Courier New", monospace; font-size: small; padding: 50; z-index: 2;'>Carregando...</div>
        <div id='painelDireita1' title='painel' style='position:fixed; top: 0; left: 0; width: 100%; height:100%; background-color: #ccffff; font-family: "Lucida Console", "Courier New", monospace; font-size: small; padding: 50; z-index: 1;'></div>

        <div id='map' style="position: fixed; top: 0; left: 0;">
            
        </div>

        <!-- click -->
        <div id="fs-toggle" style='position: fixed; top: 40; left: 300;'>Fullscreen</div>

        <div id='chathistoria' title='historia' style='position: fixed; top:100; left: 50; width: 178; height:414; opacity: 1; visibility: hidden;'>
            <div id='campoDoChatHistoria' title='historia' style='float: left; top: 0; left: 0; margin: 1; width: 174; height: 390;'>
                <textarea id="textareaChatHistoria" name="textareaChatHistoria" title='historia' rows="24" cols="21" style="resize: none;" disabled></textarea>
            </div>
            <div id='opcoesHistoria' title='opcoes historia' style='position: absolute; bottom: 0; left: 0; margin: 1; width: 176; height: 20;'>
                <!-- click -->
                <button id='opcaoPular' title='pular' style='float: left; bottom: 0; left: 10; margin: 1; padding: 2; width: 40; height: 20; background-color: gray; color: black; font-family: "Lucida Console", "Courier New", monospace; font-size: x-small;'>
                    Pular
                </button>
                <!-- click -->
                <button id='opcaoProxima' title='história' style='float: left; bottom: 0; left: 10; margin: 1; padding: 2; width: 55; height: 20; background-color: gray; color: white; font-family: "Lucida Console", "Courier New", monospace; font-size: x-small;'>
                    Historia
                </button>
                <!-- click -->
                <button id='opcaoNovidades' title='novidades' style='float: left; bottom: 0; left: 10; margin: 1; padding: 2; width: 75; height: 20; background-color: gray; color: black; font-family: "Lucida Console", "Courier New", monospace; font-size: x-small;'>
                    Novidades
                </button>
            </div>
        </div>

        <div id='conversa' title='conversa' style='position: fixed; top: 300; left: 600; width: 178; background-color: lightgray; border-style: solid; border-color: gray; visibility: hidden;'>
            <!-- click -->
            <button type="submit" id='opcao1' title='opcao1' style='top: 0; left: 0; margin: 1; width: 174; height: 44; background-color: #4CAF50; color: white; border-radius: 15px 50px; border: none; visibility: hidden;'>
                Opcao 1
            </button>
            <!-- click -->
            <button type="submit" id='opcao2' title='opcao2' style='top: 0; left: 0; margin: 1; width: 174; height: 44; background-color: #4CAF50; color: white; border-radius: 15px 50px; border: none; visibility: hidden;'>
                Opcao 2
            </button>
            <!-- click -->
            <button type="submit" id='opcao3' title='opcao3' style='top: 0; left: 0; margin: 1; width: 174; height: 44; background-color: #4CAF50; color: white; border-radius: 15px 50px; border: none; visibility: hidden;'>
                Opcao 3
            </button>
            <!-- click -->
            <button type="submit" id='opcao4' title='opcao4' style='top: 0; left: 0; margin: 1; width: 174; height: 44; background-color: #4CAF50; color: white; border-radius: 15px 50px; border: none; visibility: hidden;'>
                Opcao 4
            </button>
            <!-- click -->
            <button type="submit" id='opcao5' title='opcao5' style='top: 0; left: 0; margin: 1; width: 174; height: 44; background-color: #4CAF50; color: white; border-radius: 15px 50px; border: none; visibility: hidden;'>
                Opcao 5
            </button>
        </div>
        
        <!-- click -->
        <img id='personagem1' src='imagens/person1.png' alt='personagem' title='personagem' style='position:fixed; top: 305; left: 365; width: 50; height: 50;'></img>
        <div id='nomePersonagem1' style='position:fixed; top: 305; left: 365; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
        </div>
        <div id='barraHpVaziaPersonagem1' title='hp' style='position:fixed; top: 301; left: 365; width: 50; height: 3; background-color: black;'>
                
        </div>
        <div id='barraHpPersonagem1' title='hp' style='position:fixed; top: 301; left: 365; width: 50; height: 3; background-color: mediumseagreen;'>
    
        </div>
        <img id='fala1' src='imagens/imagemFalaVazia.png' alt='fala' style='position:fixed; top: 305; left: 365;'></img>
        <div id='mensagemDiv3' style='position:fixed; top: 315; left: 365; width: 250; text-align: left; color: red; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
        </div>
        <div id='mensagemDiv2' style='position:fixed; top: 640; left: 270; text-align: center; color: white; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
        </div>
        <div id='mensagemDiv1' style='position:fixed; top: 220; left: 270; width: 300; text-align: center; color: white; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
        </div>
        <div id='menuopcoes' style='position:fixed; top: 330; left: 390; visibility: hidden;'>
            <!-- click -->
            <button id='outfit1' style='margin: 1; background-color: #4CAF50; color: white; border-radius: 15px 50px; border: none; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
                Outfit 1
            </button>
            <!-- click -->
            <button id='outfit2' style='margin: 1; background-color: #4CAF50; color: white; border-radius: 15px 50px; border: none; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
                Outfit 2
            </button>
            <!-- click -->
            <button id='outfit3' style='margin: 1; background-color: #4CAF50; color: white; border-radius: 15px 50px; border: none; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
                Outfit 3
            </button>
            <!-- click -->
            <button id='outfit4' style='margin: 1; background-color: #4CAF50; color: white; border-radius: 15px 50px; border: none; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
                Outfit 4
            </button>
        </div>
        <div id='alertYellowId' class="alertYellow" alt='mensagem' title='mensagem' style="position:fixed; top: 530; left: 30; width: 600; font-family: 'Lucida Console', 'Courier New', monospace; font-size: x-small; visibility: hidden;">
            <!-- click -->
            <span id='closeAlertYellow' class="closebtn">&times;</span>
            <h3>You are inactive</h3>
            <p>Você ficou inativo por muito tempo no jogo.</p>
            <p>Basta clicar no "X" para retornar as suas aventuras no Magic Level!</p>
        </div>
        <div id='alertRedId' class="alertRed" alt='mensagem' title='mensagem' style="position:fixed; top: 530; left: 30; width: 600; font-family: 'Lucida Console', 'Courier New', monospace; font-size: x-small; visibility: hidden;">
            <!-- click -->
            <span id='closeAlertRed' class="closebtn">&times;</span>
            <h3>You are dead</h3>
            <p>Ai de mim! Bravo aventureiro, você se encontrou com um triste destino. Mas não se desespere, pois os deuses lhe trará de volta ao mundo em troca de pequenos sacrifícios.</p>
            <p>Basta clicar no "X" para retornar as suas aventuras no Magic Level!</p>
        </div>
        <img id='mensagem1' src='imagens/imagemEquipamentos.png' alt='mensagem' title='mensagem' style='position:fixed; top: 305; left: 365; visibility: hidden; opacity: 0.7;'></img>

        <div id="contextMenu" class="context-menu" 
            style="display:none">
            <ul>
                <li>
                    <!-- click -->
                    <div type="submit" id='equipment' title='equipamentos' style=''>
                        Equipamentos
                    </div>
                </li>
                <li>
                    <!-- click -->
                    <div type="submit" id='story' title='história' style=''>
                        História
                    </div>
                </li>
                <li>
                    <!-- click -->
                    <div type="submit" id='logout' title='sair' style=''>
                        Sair
                    </div>
                </li>
                <li>
                    <!-- click -->
                    <div type="submit" id='fullscreen' title='tela cheia' style=''>
                        Tela Cheia
                    </div>
                </li>
            </ul>
        </div>

        <div id='conversaLogout' title='logout' style='position: fixed; top: 0; left: 600; width: 178; background-color: lightgray; border-style: solid; border-color: gray; visibility: hidden;'>
            <div id='logoutPergunta1' title='logout' style='top: 0; left: 0; margin: 1; width: 174; height: 44; color: white; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                Você tem certeza que deseja sair?
            </div>
            <form action="https://magiclevel.ml">
                <button type="submit" id='logoutOpcao1' title='Sim' style='top: 0; left: 0; margin: 1; width: 174; height: 44; background-color: #4CAF50; color: white; border-radius: 15px 50px; border: none; visibility: hidden;'>
                    Sim
                </button>
            </form>
            <!-- click -->
            <button type="submit" id='logoutOpcao2' title='Não' style='top: 0; left: 0; margin: 1; width: 174; height: 44; background-color: #4CAF50; color: white; border-radius: 15px 50px; border: none; visibility: hidden;'>
                Não
            </button>
        </div>

        <div id='inventario' title='inventario' style='position: fixed; top: 30; right: 60; width: 178;'>
            <div id='hp' title='hp' style='position: absolute; top: 0; left: 0; margin: 1; width: 44; height: 20; background-color: tomato;'>
                
            </div>
            <div id='hpvalor' title='hp' style='position: fixed; top: 37; right: 60; width: 178; height: 20; text-align: center; color: white; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
                
            </div>
            <div id='skills' title='skills' style='position: absolute; top: 20; left: 0; margin: 1; width: 176; height: 74;'>
                <div id='nomeDasSkills' title='skills' style='top: 0; left: 0; margin: 1; padding: 2; width: 170; height: 10; background-color: gray; color: white; font-family: "Lucida Console", "Courier New", monospace; font-size: x-small;'>
                    Skills
                </div>
                <div id='campoDasSkills1' title='skills' style='float: left; top: 0; left: 0; margin: 1; width: 174; height: 62; background-color: gray; opacity: 0.9;'>
                    <div id='level' title='level' style='position: fixed; top: 80; right: 60; width: 168; height: 20; text-align: left; color: white; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>

                    </div>
                    <div id='levelvalor' title='level' style='position: fixed; top: 80; right: 67; width: 178; height: 20; text-align: right; color: white; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>

                    </div>
                    <div id='barraxp' title='xp' style='position: fixed; top: 95; right: 67; width: 100; height: 2; background-color: red;'>
                
                    </div>
                    <div id='barraxpvazia' title='xp' style='position: fixed; top: 94; right: 67; width: 165; height: 2; background-color: red; border: 1px solid white; opacity: 0.3;'>
                
                    </div>
                    <div id='nivel' title='xp' style='position: fixed; top: 100; right: 60; width: 168; height: 20; text-align: left; color: white; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>

                    </div>
                    <div id='nivelvalor' title='xp' style='position: fixed; top: 100; right: 67; width: 178; height: 20; text-align: right; color: white; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>

                    </div>
                    <div id='speed' title='speed' style='position: fixed; top: 115; right: 60; width: 168; height: 20; text-align: left; color: white; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>

                    </div>
                    <div id='speedvalor' title='speed' style='position: fixed; top: 115; right: 67; width: 178; height: 20; text-align: right; color: white; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>

                    </div>
                    <!--<img id='itemCampoDasSkills1' src='imagens/imagemCampoItem.png' alt='item' title='item' style='width: 100%; height: 100%'></img>-->
                </div>
            </div>
            <div id='mochila' title='mochila' style='position: absolute; top: 100; left: 0; margin: 1; width: 176; height: 44; visibility: visible;'>
                <div id='nomeDaMochila1' title='mochila' style='top: 0; left: 10; margin: 1; padding: 2; width: 170; height: 10; background-color: gray; color: white; font-family: "Lucida Console", "Courier New", monospace; font-size: x-small;'>
                    Mochila
                </div>
                <div id='campoDaMochila1' title='mochila' style='float: left; top: 0; left: 0; margin: 1; width: 42; height: 42; background-color: gray;'>
                    <!-- click -->
                    <img id='itemCampoDaMochila1' src='imagens/imagemCampoItem.png' alt='item' title='item' style='width: 100%; height: 100%'></img>
                </div>
                <div id='campoDaMochila2' title='mochila' style='float: left; top: 0; left: 0; margin: 1; width: 42; height: 42; background-color: gray;'>
                    <!-- click -->
                    <img id='itemCampoDaMochila2' src='imagens/imagemCampoItem.png' alt='item' title='item' style='width: 100%; height: 100%'></img>
                </div>
                <div id='campoDaMochila3' title='mochila' style='float: left; top: 0; left: 0; margin: 1; width: 42; height: 42; background-color: gray;'>
                    <!-- click -->
                    <img id='itemCampoDaMochila3' src='imagens/imagemCampoItem.png' alt='item' title='item' style='width: 100%; height: 100%'></img>
                </div>
                <div id='campoDaMochila4' title='mochila' style='float: left; top: 0; left: 0; margin: 1; width: 42; height: 42; background-color: gray;'>
                    <!-- click -->
                    <img id='itemCampoDaMochila4' src='imagens/imagemCampoItem.png' alt='item' title='item' style='width: 100%; height: 100%'></img>
                </div>
            </div>
            <div id='magias' title='magias' style='position: absolute; top: 160; left: 0; margin: 1; width: 176; height: 44; visibility: visible;'>
                <div id='nomeDoLivroDeMagias1' title='magias' style='top: 0; left: 10; margin: 1; padding: 2; width: 170; height: 10; background-color: gray; color: white; font-family: "Lucida Console", "Courier New", monospace; font-size: x-small;'>
                    Magias
                </div>
                <div id='campoDaMagia1' title='magia' style='float: left; top: 0; left: 0; margin: 1; width: 42; height: 42; background-color: gray;'>
                    <!-- click -->
                    <img id='magiaExura' src='imagens/imagemCampoItem.png' alt='magia' title='magia' style='width: 100%; height: 100%'></img>
                </div>
                <div id='campoDaMagia2' title='magia' style='float: left; top: 0; left: 0; margin: 1; width: 42; height: 42; background-color: gray;'>
                    <!-- click -->
                    <img id='magiaExuraGran' src='imagens/imagemCampoItem.png' alt='magia' title='magia' style='width: 100%; height: 100%'></img>
                </div>
                <div id='campoDaMagia3' title='magia' style='float: left; top: 0; left: 0; margin: 1; width: 42; height: 42; background-color: gray;'>
                    <!-- click -->
                    <img id='magiaExori' src='imagens/imagemCampoItem.png' alt='magia' title='magia' style='width: 100%; height: 100%'></img>
                </div>
                <div id='campoDaMagia4' title='magia' style='float: left; top: 0; left: 0; margin: 1; width: 42; height: 42; background-color: gray;'>
                    <!-- click -->
                    <img id='magiaExoriGran' src='imagens/imagemCampoItem.png' alt='magia' title='magia' style='width: 100%; height: 100%'></img>
                </div>
            </div>
            <div id='parcel' title='parcel' style='position: absolute; top: 160; left: 0; margin: 1; width: 176; height: 44; visibility: hidden;'>
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
            <div id='campoDasTasks1' title='tasks' style='position: absolute; top: 10; left: 50; margin: 1; width: 176; height: 44;'>
                <div id='tasks' title='tasks' style='position: fixed; top: 50; left: 50; width: 178; height: 20; text-align: left; color: white; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>

                </div>
                <div id='task' title='task' style='position: fixed; top: 65; left: 50; width: 178; height: 20; text-align: left; color: white; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>

                </div>
                <div id='taskvalor' title='task' style='position: fixed; top: 65; left: 57; width: 178; height: 20; text-align: right; color: white; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>

                </div>
            </div>
            <!-- click -->
            <div id='equipamentoMenos' alt='menos' title='menos' style='position:fixed; top: 313; left: 372; width: 10; height: 10; visibility: hidden;'>
        
            </div>
            <!-- click -->
            <div id='equipamentoParcel' alt='caixa' title='caixa' style='position:fixed; top: 313; left: 445; width: 30; height: 10; visibility: hidden;'>
        
            </div>
            <!-- click -->
            <div id='equipamentoMochila' alt='mochila' title='mochila' style='position:fixed; top: 328; left: 445; width: 30; height: 30; visibility: hidden;'>
        
            </div>
            <!-- click -->
            <img id='equipamentoMaoDireita' alt='' title='equipamentos' style='position:fixed; top: 364; left: 373; width: 30; height: 30; visibility: hidden;'>
        
            </img>
            <!-- click -->
            <img id='equipamentoMaoEsquerda' alt='' title='equipamentos' style='position:fixed; top: 364; left: 445; width: 30; height: 30; visibility: hidden;'>
        
            </img>
            <!-- click -->
            <!--<button type="submit" id='equipment' title='equipamentos' style='position: absolute; bottom: 90; left: 0; margin: 1; width: 174; height: 44; background-color: #4CAF50; color: white; border-radius: 4px; border: none; visibility: visible;'>
                Equipamentos
            </button>-->
            <!-- click -->
            <!--<button type="submit" id='story' title='história' style='position: absolute; bottom: 45; left: 0; margin: 1; width: 174; height: 44; background-color: #4CAF50; color: white; border-radius: 4px; border: none; visibility: visible;'>
                História
            </button>-->
            <!-- click -->
            <!--<button type="submit" id='logout' title='sair' style='position: absolute; bottom: 0; left: 0; margin: 1; width: 174; height: 44; background-color: #4CAF50; color: white; border-radius: 4px; border: none; visibility: visible;'>
                Sair
            </button>-->
        </div>

        <div id='chat' title='chat' style='position: fixed; top: 600; right: 70; width: 278; height:243;'>
            <div id='default' title='chat' style='position: absolute; top: 0; left: 0; margin: 1; width: 276; height: 44;'>
                <div id='campoDoChat' title='default' style='float: left; top: 0; left: 0; margin: 1; width: 274; height: 100;'>
                    <textarea id="textareaChat" name="textareaChat" title='default' rows="6" cols="33" style="resize: none;" disabled>Carregando...</textarea>
                </div>
                <div id='campoDeEscrita' title='chat' style='float: left; bottom: 0; left: 0; margin: 1; width: 276; height: 22;'>
                    <input type="text" id="campoDeEscritaInput" name="campoDeEscritaInput" title='chat' maxlength="100"  size="31" placeholder="Digite aqui..." style="opacity: 0.6;"></input>
                </div>
                <!-- click -->
                <button id='nomeDoChatDefault' title='default' style='float: left; top: 0; left: 10; margin: 1; padding: 2; width: 50; height: 20; background-color: gray; color: white; font-family: "Lucida Console", "Courier New", monospace; font-size: x-small;'>
                    Default
                </button>
                <!-- click -->
                <button id='nomeDoChatServerLog' title='server log' style='float: left; top: 0; left: 10; margin: 1; padding: 2; width: 75; height: 20; background-color: gray; color: black; font-family: "Lucida Console", "Courier New", monospace; font-size: x-small;'>
                    Server Log
                </button>
                <!-- click -->
                <button id='nomeDoChatNpc' title='npc' style='float: left; top: 0; left: 10; margin: 1; padding: 2; width: 25; height: 20; background-color: gray; color: black; font-family: "Lucida Console", "Courier New", monospace; font-size: x-small;'>
                    Npc
                </button>
                <!-- click -->
                <button id='send' title='send' style='float: left; top: 0; left: 10; margin: 1; padding: 2; width: 30; height: 20; background-color: #4CAF50; color: white; font-family: "Lucida Console", "Courier New", monospace; font-size: x-small;'>
                    Send
                </button>
            </div>
        </div>

        <div id='tablet' title='tablete' style='position: fixed; top: 417; right: 200; width: 178; height:243; background-color: blue; border-style: solid; border-color: white; border-radius: 3px; visibility: hidden;'>
            <textarea id="cmd" name="tablete" title='default' rows="16" cols="21" style="resize: none; opacity: 0.6;" disabled>C:\Acesso negado!</textarea>
        </div>

        <audio id="myAudio" src="" type="audio/mpeg" preload autoplay loop>
            <!--<source id="myAudioSrc" src="musicas/ToPTrack02.mp3" type="audio/mpeg">-->
            <!--Your browser does not support the audio tag.-->
        </audio>

        <script>

        function main(){

            var audio = document.getElementById("myAudio");
            audio.volume = 0.02;

            var openFullscreen;
            var funcMoverPersonagem;
            var loop;
            var utilizarIten;
            var utilizarMagia;
            var dialogo;
            var pressKey;
            var visibilityEquipamentos;
            var esconderComponentes;
            var preloadContentImages;
            var newColumn;
            var newMap;
            var moveMap;
            var moverCriaturas;
            var auxPreencherImagensCriaturas;
            var preencherJogadores;
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
            var verificacaoDistanciamentoTablete;
            var verificacaoDistanciamento;
            var verificacaoIdCima;
            var verificacaoIdDireita;
            var verificacaoIdBaixo;
            var verificacaoIdEsquerda;
            var verificacaoIdNasProximidades;
            var verificacaoIdTeleporte;
            var verificacaoIdPorta;
            var preencherOpcoes;
            var mensagemNivelNecessario;
            var mensagemTaskNaoTerminada;
            var mensagemGanhouExperiencia;
            var verificarPosicaoValida;
            var verificarPosicaoValidaXY;
            var verificarPosicaoValidaBot;
            var verificarJogoHabilitado;
            var verificarJogadorNaTela;
            var recompensaSacola;
            var mensagemDoSistema;
            var posicaoInicial;
            var entradaPvp;
            var saidaPvp;
            var entrarNoPvp;
            var setAndar;
            var usarCampo;
            var usarTeleporte;
            var moverCimaBot;
            var moverDireitaBot;
            var moverBaixoBot;
            var moverEsquerdaBot;
            var moverJangada;
            var jangadaPosicaoInicial;
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
            var addEventos;
            var hideMenu;
            var rightClick;
            var resolucao;
            var alterarTeleport;
            var desativarEfeitos;
            const sanitize = string => DOMPurify.sanitize(string);

            var moverPersonagem = [0,0];
            var flagMoverPersonagem = true;
            var nivelDeSolo = 1;
            var nivelDeAndar = -4;
            var outfit = "P";

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
            mensagensDoChatHistoriaNovidades1 += "Novidades:\n\n- A magia exura é a base de uma longa jornada;\n\n- A magia exura gran é para os mais experientes;\n\n- A magia exori é a nova sensação;\n\n- O historiador está em busca de novos dados...\n\n- Quest pricipal adicionada! Procure por ela a direita do mapa, mas tome cuidado!\n\n- A magia exori gran chegou para ajudar nas suas tasks;\n\n- A regeneração natural está a todo vapor, ela melhora de acordo ao seu level;\n\n- Hotkeys números de 1-4, sem estar escrevendo algo;\n\n- Um boss observando toda essa magia acontecendo, veio para mostrar o que é magia!\n\n- Sistema de jogador versus jogador adicionado!\n\n- Equipamentos disponíveis, procure pelo mapa, uma jangada pode te ajudar.";

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
            var inativo = false;
            var datainicioinatividade = new Date();
            var inativoAnterior = false;

            var chatScrollHeight;

            var flagMove = [false,false,false,false];
            var numOpcao = 0;

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

var matrizDoMapaSubsolo4 = 
[
[32,30,30,30,27,27,32,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,27],
[31, 0, 0,41,29,27,31, 0,41, 0, 0, 0, 0, 0, 0,45, 0, 0,45, 0,45, 0, 0, 0, 0,29],
[31, 0, 0, 2,29,27,31, 0, 0, 0, 0, 0,45, 0, 0, 0, 0,45, 0, 0, 0,45, 0, 0, 0,29],
[31, 4, 0, 0,29,27,31, 4, 0, 0, 0, 0, 0, 0, 0,45, 0, 0,45, 0,45, 0, 0, 0, 0,29],
[27,28,28,28,27,27,27,28,28,28,28,28,28,28,28,28,28,28,28,28,28,28,28,28,28,27]
];
var matrizDoMapaSubsolo3 = 
[
[32,30,30,30,27,27,32,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,27],
[31, 0, 1, 1,29,27,31, 0, 0, 0, 0, 0, 0, 0, 0,19, 0, 0,19, 0,19, 0, 0, 0, 0,29],
[31, 0, 7, 8,29,27,31, 4, 0, 0, 0, 0,19, 0, 0, 0, 0,19, 0, 0, 0,19, 0, 0, 0,29],
[31, 5, 4, 1,29,27,31, 5, 0, 0, 0, 0, 0, 0, 0,19, 0, 0,19, 0,19, 0, 0, 0, 0,29],
[27,27,28,28,28,27,27,27,28,28,28,28,28,28,28,28,28,28,28,28,28,28,28,28,28,28],
];
var matrizDoMapaSubsolo2 = 
[
[32,30,30,30,27,27,32,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,27],
[31, 8, 7, 8,29,27,31, 0, 0, 0, 0, 0, 0, 0, 0,16, 0, 0,16, 0,16, 0, 0, 0, 0,29],
[31, 1, 0, 7,29,27,31, 5, 0, 0, 0, 0,16, 0, 0, 0, 0,16, 0, 0, 0,16, 0, 0, 0,29],
[31, 1, 5, 4,29,27,31, 4, 0, 0, 0, 0, 0, 0, 0,16, 0, 0,16, 0,16, 0, 0, 0, 0,29],
[27,28,28,28,27,27,27,28,28,28,28,28,28,28,28,28,28,28,28,28,28,28,28,28,28,27],
];
var matrizDoMapaSubsolo1 = 
[
[32,30,30,30,27,27,32,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,27],
[31, 1, 8, 1,29,27,31, 0, 0, 0, 0, 0, 0, 0, 0, 8, 0, 0, 8, 0, 8, 0, 0, 0, 0,29],
[31, 8, 7, 4,29,27,31, 0, 4, 0, 0, 0, 8, 0, 0, 0, 0, 8, 0, 0, 0, 8, 0, 0, 0,29],
[31, 1, 8, 5,29,27,31, 5, 0, 0, 0, 0, 0, 0, 0, 8, 0, 0, 8, 0, 8, 0, 0, 0, 0,29],
[27,28,28,28,27,27,27,28,28,28,28,28,28,28,28,28,28,28,28,28,28,28,28,28,28,27]
];

var matrizDoMapaTerreo = 
[
[33,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,35,33,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,35],
[40, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,41,36,40, 2, 7, 7, 7, 7,16, 1, 2, 7, 7, 7, 7, 8, 1, 2, 7, 7, 7,19, 1, 7, 1,36],
[40,11, 0, 6, 0, 0, 0, 0, 6, 0, 0, 0, 0, 0, 0, 0, 0,41,36,40, 7, 7,16, 7, 7, 7,19, 7, 7, 7, 8, 7, 7,16, 7, 7,19, 7, 7,19, 7, 2,36],
[40, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,80,38,83, 0, 0,80,37,40, 7, 8, 1, 7, 7,16, 1, 7, 7,19, 1, 7, 8, 1, 7,16, 1, 7,19, 1, 7, 1,36],
[40, 1, 1, 0, 0, 0, 0, 0, 0, 0, 1, 1,36,26,40, 0, 0,36,26,40, 7, 7,16, 7, 7, 7,19, 7, 7, 7, 8, 7, 7,16, 7, 7,19, 7, 7,19, 7, 0,36],
[40,19, 7, 0, 0, 0, 0, 0, 0, 0, 7,16,36,26,40, 0, 0,36,26,40, 7, 8, 1, 7, 7,16, 1, 7, 7,19, 1, 7, 8, 1, 7,16, 1, 7,19, 1, 7, 1,36],
[40, 1, 1, 0, 0, 0, 0, 0, 0, 0, 1, 1,36,26,40, 0, 0,36,26,40, 7, 7,16, 7, 7, 7,19, 7, 7, 7, 8, 7, 7,16, 7, 7,19, 7, 7,16, 7, 2,36],
[40, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,36,26,40, 0, 0,36,26,40, 7, 8, 1, 7, 7,16, 1, 7, 7,19, 1, 7, 8, 1, 7,16, 1, 7,19, 1, 7, 1,36],
[40, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0, 1,36,26,40, 0, 0,36,26,40, 7, 7,16, 7, 7, 7,19, 7, 7, 7, 8, 7, 7,16, 7, 7,19, 7, 7,19, 7, 0,36],
[40,19, 7,19, 7,45, 7,45, 7,16, 7,16,36,26,40, 7, 7,82,34,81, 7, 8, 1, 7, 7,16, 1, 7, 7,19, 1, 7, 8, 1, 7,16, 1, 7,19, 1, 7, 1,36],
[40,19, 7,19, 7,45, 7,45, 7,16, 7,16,36,26,40, 0, 0, 0, 0, 7, 7, 7,16, 7, 7, 7,19, 7, 7, 7, 8, 7, 7,16, 7, 7,19, 7, 7, 8, 7, 2,36],
[40,19,19,19, 1,45,45,45, 1,16,16,16,36,26,40, 0, 0, 0, 0, 7, 7, 8, 1, 2, 7, 7, 7, 7, 7,19, 1, 2, 7, 7, 7,16, 1, 2, 7, 7, 7, 1,36],
[39,38,38,38,38,38,38,38,38,38,38,38,37,26,40, 0, 0, 0, 0,80,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,37],
[26,26,26,26,26,26,26,26,26,26,26,26,26,26,40, 0, 0, 0, 0,36,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26],
[33,34,34,34,34,34,34,34,34,34,34,34,34,34,81, 0, 0, 0, 0,82,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,35],
[40, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,45, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2,36],
[40, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,45, 0, 0, 0, 0,45, 0, 0, 0, 0,36],
[40, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,45, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,45, 0, 0,36],
[40, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,45, 0, 0, 0, 0, 0, 0, 0, 0,36],
[39,83, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,45, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,36],
[26,39,83, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,80,83, 0, 0,80,83, 0, 0, 0, 0, 0, 0, 0, 0,45, 0, 0, 0, 0,45, 0,36],
[26,26,40, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,36,53,52,52,54,40, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,36],
[26,26,39,83, 0, 0,48, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,36,53,52,52,54,40, 0,45, 0, 0, 0, 0, 0, 0, 0,45, 0, 0,45, 0,80,37],
[26,26,26,39,83, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,80,37,26,26,26,26,40, 0, 0, 0, 0, 0,45, 0, 0, 0, 0, 0, 0, 0, 0,36,26],
[26,26,26,26,40, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,36,26,26,26,26,26,40, 2, 0,45, 0, 0, 0, 0, 0, 0, 0,45, 0, 0, 2,36,26],
[26,26,26,26,39,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,37,26,26,26,26,26,39,38,38,38,38,38,38,38,38,38,38,38,38,38,38,37,26],
[26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26],
[26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26],
[26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26],
[33,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,35,26,33,35,26,33,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,35],
[40, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,58,59,59,60,66, 0, 0, 0, 0, 0, 0,58,59,60,66, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,36],
[40, 0, 0, 0, 0, 0, 0, 0,19, 0, 0, 0, 0, 0, 0, 0, 0,65,57,57,61,67, 0, 0, 0, 0, 0, 0,65,57,61,67, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,36],
[40,48, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 8, 0, 0,65,57,57,61,71, 0, 0, 0, 0, 0, 0,65,57,61,71, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,36],
[40, 0, 0, 0, 0,45, 0, 0, 0, 0, 0,16, 0, 0, 0, 0, 0,64,63,63,62,72, 0, 0, 0, 0, 0, 0,65,57,61,72, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,36],
[40, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,70,69,69,69,68, 0, 0,55,56, 0, 0,64,63,62,67, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,36],
[39,38,38,38,38,38,38,38,38,38,38,38,38,38,38,83, 0, 0, 0, 7, 0, 0, 0,80,38,38,83, 0,70,69,69,68, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,36],
[26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,39,38,38,38,38,38,38,38,37,26,26,40, 0, 0, 0, 0, 0, 0,80,38,38,38,38,38,38,38,38,37],
[26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,39,38,38,38,38,38,38,37,26,26,26,26,26,26,26,26,26]
];

var matrizDoMapaPvp = 
[
[33,41,35,26,33,41,35,26,33,41,35],
[40, 0,36,26,40, 0,36,26,40, 0,36],
[40, 0,36,26,40, 0,36,26,40, 0,36],
[39,41,37,26,39,41,37,26,39,41,37],
];

var telaAreaMax = [8, 15];

var matrizDoMapa = [];

let linhaPreenchimentoDeTela = [];
for(let i = 0; i < matrizDoMapaSubsolo4[0].length; i++){
    linhaPreenchimentoDeTela.push(27);
}
for(let i = 0; i < telaAreaMax[0]; i++){
    matrizDoMapaSubsolo4.unshift(linhaPreenchimentoDeTela.slice());
    matrizDoMapaSubsolo4.push(linhaPreenchimentoDeTela.slice());
}
for(let i = 0; i < matrizDoMapaSubsolo4.length; i++){
    matrizDoMapa.push(matrizDoMapaSubsolo4[i].slice());
    for(let j = 0; j < telaAreaMax[1]; j++){
        matrizDoMapa[matrizDoMapa.length - 1].unshift(27);
        matrizDoMapa[matrizDoMapa.length - 1].push(27);
    }
}
linhaPreenchimentoDeTela = [];
for(let i = 0; i < matrizDoMapaSubsolo3[0].length; i++){
    linhaPreenchimentoDeTela.push(27);
}
for(let i = 0; i < telaAreaMax[0]; i++){
    matrizDoMapaSubsolo3.unshift(linhaPreenchimentoDeTela.slice());
    matrizDoMapaSubsolo3.push(linhaPreenchimentoDeTela.slice());
}
for(let i = 0; i < matrizDoMapaSubsolo3.length; i++){
    matrizDoMapa.push(matrizDoMapaSubsolo3[i].slice());
    for(let j = 0; j < telaAreaMax[1]; j++){
        matrizDoMapa[matrizDoMapa.length - 1].unshift(27);
        matrizDoMapa[matrizDoMapa.length - 1].push(27);
    }
}
linhaPreenchimentoDeTela = [];
for(let i = 0; i < matrizDoMapaSubsolo2[0].length; i++){
    linhaPreenchimentoDeTela.push(27);
}
for(let i = 0; i < telaAreaMax[0]; i++){
    matrizDoMapaSubsolo2.unshift(linhaPreenchimentoDeTela.slice());
    matrizDoMapaSubsolo2.push(linhaPreenchimentoDeTela.slice());
}
for(let i = 0; i < matrizDoMapaSubsolo2.length; i++){
    matrizDoMapa.push(matrizDoMapaSubsolo2[i].slice());
    for(let j = 0; j < telaAreaMax[1]; j++){
        matrizDoMapa[matrizDoMapa.length - 1].unshift(27);
        matrizDoMapa[matrizDoMapa.length - 1].push(27);
    }
}
linhaPreenchimentoDeTela = [];
for(let i = 0; i < matrizDoMapaSubsolo1[0].length; i++){
    linhaPreenchimentoDeTela.push(27);
}
for(let i = 0; i < telaAreaMax[0]; i++){
    matrizDoMapaSubsolo1.unshift(linhaPreenchimentoDeTela.slice());
    matrizDoMapaSubsolo1.push(linhaPreenchimentoDeTela.slice());
}
for(let i = 0; i < matrizDoMapaSubsolo1.length; i++){
    matrizDoMapa.push(matrizDoMapaSubsolo1[i].slice());
    for(let j = 0; j < telaAreaMax[1]; j++){
        matrizDoMapa[matrizDoMapa.length - 1].unshift(27);
        matrizDoMapa[matrizDoMapa.length - 1].push(27);
    }
}

linhaPreenchimentoDeTela = [];
for(let i = 0; i < matrizDoMapaTerreo[0].length; i++){
    linhaPreenchimentoDeTela.push(26);
}
for(let i = 0; i < telaAreaMax[0]; i++){
    matrizDoMapaTerreo.unshift(linhaPreenchimentoDeTela.slice());
    matrizDoMapaTerreo.push(linhaPreenchimentoDeTela.slice());
}
for(let i = 0; i < matrizDoMapaTerreo.length; i++){
    matrizDoMapa.push(matrizDoMapaTerreo[i].slice());
    for(let j = 0; j < telaAreaMax[1]; j++){
        matrizDoMapa[matrizDoMapa.length - 1].unshift(26);
        matrizDoMapa[matrizDoMapa.length - 1].push(26);
    }
}

linhaPreenchimentoDeTela = [];
for(let i = 0; i < matrizDoMapaPvp[0].length; i++){
    linhaPreenchimentoDeTela.push(26);
}
for(let i = 0; i < telaAreaMax[0]; i++){
    matrizDoMapaPvp.push(linhaPreenchimentoDeTela.slice());
}
for(let i = 0; i < matrizDoMapaPvp.length; i++){
    matrizDoMapa.push(matrizDoMapaPvp[i].slice());
    for(let j = 0; j < telaAreaMax[1]; j++){
        matrizDoMapa[matrizDoMapa.length - 1].unshift(26);
        matrizDoMapa[matrizDoMapa.length - 1].push(26);
    }
}

//Indices Mapa 
var colunaInicio = telaAreaMax[1];
var linhaInicioSubsolo4 = (0 + telaAreaMax[0]); //Mapa subsolo 4
var linhaInicioSubsolo3 = (matrizDoMapaSubsolo4.length + telaAreaMax[0]); //Mapa subsolo 3
var linhaInicioSubsolo2 = (matrizDoMapaSubsolo4.length + matrizDoMapaSubsolo3.length + telaAreaMax[0]); //Mapa subsolo 2
var linhaInicioSubsolo1 = (matrizDoMapaSubsolo4.length + matrizDoMapaSubsolo3.length + matrizDoMapaSubsolo2.length + telaAreaMax[0]); //Mapa subsolo 1
var linhaInicioTerreo = (matrizDoMapaSubsolo4.length + matrizDoMapaSubsolo3.length + matrizDoMapaSubsolo2.length + matrizDoMapaSubsolo1.length + telaAreaMax[0]); //Mapa terreo
var linhaInicioPvp = (matrizDoMapaSubsolo4.length + matrizDoMapaSubsolo3.length + matrizDoMapaSubsolo2.length + matrizDoMapaSubsolo1.length + matrizDoMapaTerreo.length); //Mapa pvp

var matrizDoMapaLength = (
    matrizDoMapaSubsolo4.length + 
    matrizDoMapaSubsolo3.length + 
    matrizDoMapaSubsolo2.length + 
    matrizDoMapaSubsolo1.length + 
    matrizDoMapaTerreo.length +
    matrizDoMapaPvp.length
    );

var matrizDoMapaOriginal = [];

for(let i = 0; i < matrizDoMapa.length; i++){
    matrizDoMapaOriginal.push(matrizDoMapa[i].slice());
}

matrizDoMapaOriginal[(linhaInicioTerreo + 31)][(colunaInicio + 19)] = 92;

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
            if(i < (linhaInicioTerreo + 29) ){
                matrizCriaturasVida[i][j] = 50;
            }else{
                matrizCriaturasVida[i][j] = 5;
            }
    }
}

            var posicaoDoPersonagemNaMatriz = [(linhaInicioSubsolo4 + 2),(colunaInicio + 2)];
            var resolucaoLarguraAltura = [0, 0];

            if(window.innerWidth >= 1900){
                resolucaoLarguraAltura = [19, 33];
                document.getElementById("chat").style.top = 850;
                document.getElementById("conversa").style.left = 450;
            }else if(window.innerWidth >= 1200 && window.innerWidth < 1900)
                resolucaoLarguraAltura = [15, 23];
            else
                resolucaoLarguraAltura = [15, 19];

            var posicaoDoPersonagemNaTela = [Math.trunc(resolucaoLarguraAltura[0]/2), Math.trunc(resolucaoLarguraAltura[1]/2)];
            var direcaoDoPersonagem = 2;
            var nivel = 0;
            var personagemMorto = false;

            var posicaoJangada = [(linhaInicioTerreo + 21),(colunaInicio + 22)];

            var lvlatual = 0;
            var lvlantigo = 0;
            var lvlalternativo = 500;
            var mensagem = "";
            var ultimamensagem = "vazio";
            var alertaBoss = false;
            var alertaPvp = false;
            var audio1 = false;
            var audio2 = false;
            var audio3 = false;
            
            var mover = 60;
            var quadrosDeAnimacao = 10;
            var esperaPorQuadro = 1;

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
            var posicaoBot = [(linhaInicioTerreo + 5),(colunaInicio + 6)];
            var botFree = false;

            //Variaveis JSON
            var dadosResposta = "vazio";

            //Variaveis Map
            //let campo = [0,0];
            let columnLeft = -60;
            //let intoLeft = -55;
            var arrayColunasElementos = [];
            var arrayColunasTela = [];
            var arrayLinhasTela;
            var listaEfeitos = [];

            //screen
            var flagFullScreen = false;
            var elem = document.body;

            //mouse
            var mouseX;
            var mouseY;

            //carregamento
            var flagCarregamento = true;

            //conexao
            var run_ajax;
            var desconectar;
            var conectar;

            openFullscreen = function () {
                if(!flagFullScreen){
                    if (elem.requestFullscreen) {
                        elem.requestFullscreen();
                    } else if (elem.webkitRequestFullscreen) { /* Safari */
                        elem.webkitRequestFullscreen();
                    } else if (elem.msRequestFullscreen) { /* IE11 */
                        elem.msRequestFullscreen();
                    }
                    flagFullScreen = true;
                } else {
                    document.exitFullscreen();
                    flagFullScreen = false;
                }
            }

            moveMap = function(param, direcao){
                
                switch(direcao){
                    case 0:
                        document.getElementById("map").style.top = document.getElementById("map").style.top.split('p')[0] - (-param);
                        break;
                    case 1:
                        document.getElementById("map").style.left = document.getElementById("map").style.left.split('p')[0] - param;
                        break;
                    case 2:
                        document.getElementById("map").style.top = document.getElementById("map").style.top.split('p')[0] - param;
                        break;
                    case 3:
                        document.getElementById("map").style.left = document.getElementById("map").style.left.split('p')[0] - (-param);
                        break;
                }
            }

            preloadContentImages = function(){
                    
                var preloadContent = 0;
                var imagesPreload = new Array(
                    "imagens/person1.png", "imagens/person2.png", "imagens/person3.png", "imagens/person4.png",
                    "imagens/person1andar.gif", "imagens/person2andar.gif", "imagens/person3andar.gif", "imagens/person4andar.gif",
                    "imagens/personF1.png", "imagens/personF2.png", "imagens/personF3.png", "imagens/personF4.png",
                    "imagens/personF1andar.gif", "imagens/personF2andar.gif", "imagens/personF3andar.gif", "imagens/personF4andar.gif",
                    "imagens/imagemPersonagemDeCostas.png", "imagens/imagemPersonagemDeDireita.png", "imagens/imagemPersonagemDeFrente.png", "imagens/imagemPersonagemDeEsquerda.png",
                    "imagens/imagemPersonagemDeCostasF.png", "imagens/imagemPersonagemDeDireitaF.png", "imagens/imagemPersonagemDeFrenteF.png", "imagens/imagemPersonagemDeEsquerdaF.png",
                    "imagens/imagemEquipamentos.png", "imagens/imagemMensagemPersonagemInativo.png","imagens/imagemMensagemPersonagemMorto.png",
                    "imagens/imagemPocaoHP.png", "imagens/imagemCorda.png", "imagens/imagemPa.png",
                    "imagens/Ultimate_Healing.png", "imagens/Restoration.png", "imagens/Berserk.png", "imagens/Fierce_Berserk.png",
                    "imagens/Sword.png", "imagens/Shield.png",
                    "imagens/imagemFalaVazia.png", "imagens/imagemFalaItemVazio.png", "imagens/imagemFalaDeposit.png",
                    /*"imagens/imagemCampo.png", "imagens/imagemLixeira.png", "imagens/imagemSacola.png", "imagens/imagemSacola.png",
                    "imagens/imagemFundoBuraco.png", "imagens/imagemBuracoAberto.png", "imagens/imagemBuracoFechado.png", "imagens/imagemParcel.png",
                    "imagens/imagemSnake.png", "imagens/imagemSnakeAtacando.png", "imagens/imagemSnakeMorta.png", "imagens/imagemNpcDeDireitaCampo.png",
                    "imagens/imagemPersonagemDeCostasComPiso.png", "imagens/imagemPersonagemDeDireitaComPiso.png",
                    "imagens/imagemPersonagemDeFrenteComPiso.png", "imagens/imagemPersonagemDeEsquerdaComPiso.png", "imagens/imagemDragon.png",
                    "imagens/imagemDragonAtacando.png", "imagens/imagemCaveira.png", "imagens/imagemMammoth.png", "imagens/imagemMammothAtacando.png",
                    "imagens/imagemCaveira.png", "imagens/imagemPersonagemDeCostasFComPiso.png", "imagens/imagemPersonagemDeDireitaFComPiso.png",
                    "imagens/imagemPersonagemDeFrenteFComPiso.png", "imagens/imagemPersonagemDeEsquerdaFComPiso.png", "imagens/imagemAgua.png",
                    "imagens/imagemTetoCaverna.png", "imagens/imagemTetoCavernaBaixo.png", "imagens/imagemTetoCavernaDireita.png",
                    "imagens/imagemTetoCavernaCima.png", "imagens/imagemTetoCavernaEsquerda.png", "imagens/imagemTetoCavernaCimaEsquerda.png",
                    "imagens/imagemAguaCimaEsquerda.png", "imagens/imagemAguaCima.png", "imagens/imagemAguaCimaDireita.png", "imagens/imagemAguaDireita.png",
                    "imagens/imagemAguaBaixoDireita.png", "imagens/imagemAguaBaixo.png", "imagens/imagemAguaBaixoEsquerda.png",
                    "imagens/imagemAguaEsquerda.png", "imagens/imagemTeleport1.png", "imagens/imagemTeleport2.png", "imagens/imagemTeleport3.png",
                    "imagens/imagemTeleport2.png", "imagens/imagemSpider.png", "imagens/imagemSpiderAtacando.png", "imagens/imagemCaveira.png",
                    "imagens/imagemOrcShaman.gif", "imagens/imagemOrcShamanAtacando.png", "imagens/imagemCaveira.png", "imagens/imagemBot.png",
                    "imagens/imagemJangada.png", "imagens/imagemRemo.png", "imagens/imagemRemo2.png", "imagens/Spike_Sword_Field.png",
                    "imagens/Crown_Shield_Field.png", "imagens/TetoCasa.png", "imagens/TetoCasaUpLeft.png", "imagens/TetoCasaUp.png",
                    "imagens/TetoCasaUpRight.png", "imagens/TetoCasaRight.png", "imagens/TetoCasaDownRight.png", "imagens/TetoCasaDown.png",
                    "imagens/TetoCasaDownLeft.png", "imagens/TetoCasaLeft.png", "imagens/CasaUpRight.png", "imagens/CasaRight.png",
                    "imagens/CasaDownRight.png", "imagens/CasaDown.png", "imagens/CasaDownLeft.png", "imagens/PortaUp.png", "imagens/PortaDown.png",
                    "imagens/PortaOpenUp.png", "imagens/PortaOpenDown.png", "imagens/CasaIntoUpLeft.png", "imagens/CasaIntoUp.png",
                    "imagens/CasaIntoUpRight.png", "imagens/CasaIntoDownLeft.png", "imagens/CasaIntoLeft.png", "imagens/imagemAguaBaixoDireita2.png",
                    "imagens/imagemAguaCimaEsquerda2.png", "imagens/imagemAguaCimaDireita2.png", "imagens/imagemAguaBaixoEsquerda2.png",
                    "imagens/person2piso.png", "imagens/person4piso.png", "imagens/person1piso.png", "imagens/person3piso.png", "imagens/personF2piso.png",
                    "imagens/personF4piso.png", "imagens/personF1piso.png", "imagens/personF3piso.png", "imagens/tablet.png",*/
                    );

                function preLoader(e){
                    for(var i = 0; i < imagesPreload.length; i++){
                        var tempImage = new Image();

                        tempImage.addEventListener("load", progress, true);
                        tempImage.src = imagesPreload[i];
                    }
                }

                function progress(){
                    preloadContent++;

                    if(preloadContent == imagesPreload.length){
                        //console.log("carregou todas as imagens necessárias");
                    }
                }

                this.addEventListener("DOMContentLoaded", preLoader, true);

            }

            newMap = function(){
                
				for(let i = 0; i < resolucaoLarguraAltura[1]; i++){
					newColumn();
				}
			}

            newColumn = function(){

				const column = document.createElement("div");
                arrayColunasElementos.push(column);
				//column.setAttribute("id", "column" + arrayColunasElementos.indexOf(column));
				column.style.position = "absolute";
				//column.style.top = "-60";
				column.style.left = columnLeft;
				//column.style.width = "60";
				//column.style.height = "60";

				document.getElementById("map").appendChild(column);
	
				//campo[0] = 0;
				//let nameTop = -55;
				//let barraHpTop = -59;
				//let messageTop = -45;
                let rowTop = -60;
                arrayLinhasTela = new Array();
                arrayColunasTela.push(arrayLinhasTela);
				for(let i = 0; i < resolucaoLarguraAltura[0]; i++){

                    let field = document.createElement("div");
                    column.appendChild(field);
                    arrayLinhasTela.push(field);
                    field.style.position = "absolute";
                    //field.setAttribute("id", "field" + "-" + arrayLinhasTela.indexOf(field) + "-" + arrayColunasElementos.indexOf(column));
                    field.style.width = "60";
				    field.style.height = "60";
                    field.style.top = rowTop;
                    field.addEventListener("click", function(){ 
                        let linhaTela;
                        let colunaTela;

                        linhaTela = Math.ceil(mouseY / mover);
                        colunaTela = Math.ceil(mouseX / mover);

                        moverPersonagem = [(linhaTela-posicaoDoPersonagemNaTela[0]),(colunaTela-posicaoDoPersonagemNaTela[1])]; 
                    });
                    field.addEventListener("dragover", function(){ 
                        let linhaTela;
                        let colunaTela;

                        linhaTela = Math.ceil(mouseY / mover);
                        colunaTela = Math.ceil(mouseX / mover);

                        moverPersonagem = [(linhaTela-posicaoDoPersonagemNaTela[0]),(colunaTela-posicaoDoPersonagemNaTela[1])]; 
                    });

					let image = document.createElement("img");
                    field.appendChild(image);
                    //arrayLinhasTela.push(image);
				    //image.setAttribute("id", "campo" + "-" + arrayLinhasTela.indexOf(field) + "-" + arrayColunasElementos.indexOf(column));
					image.src = "/imagens/imagemCampo.png";
					image.alt = "campo";
					image.title = "campo";
					image.style.width = "100%"; 
					image.style.height = "100%";
					//image.onclick = function(){ moverPersonagem = [(parseInt(this.id.split('-', 3)[1])-posicaoDoPersonagemNaTela[0]),(parseInt(this.id.split('-', 3)[2])-posicaoDoPersonagemNaTela[1])]; };
                    /*image.onclick = function(){ 
                        let linhaTela;
                        let colunaTela;
                        for(let i = 0; i < arrayColunasTela.length; i++){
                            if(arrayColunasTela[i].indexOf(this) != -1){
                                linhaTela = arrayColunasTela[i].indexOf(this);
                                colunaTela = i;
                                break;
                            }
                        }
                        //console.log(linhaTela + " " + colunaTela);
                        moverPersonagem = [(linhaTela-posicaoDoPersonagemNaTela[0]),(colunaTela-posicaoDoPersonagemNaTela[1])]; 
                    };*/

					//arrayColunasElementos[arrayColunasElementos.length-1].appendChild(image);

                    let image1 = document.createElement("img");
                    field.appendChild(image1);
                    //arrayLinhasTela.push(image);
				    //image2.setAttribute("id", "imagem1" + "-" + arrayLinhasTela.indexOf(field) + "-" + arrayColunasElementos.indexOf(column));
					image1.style.position = "absolute";
                    image1.src = "/imagens/imagemFalaVazia.png";
					image1.alt = "campo";
					image1.title = "campo";
                    image1.style.top = "5";
					image1.style.left = "5";
					image1.style.width = "50"; 
					image1.style.height = "50";
                    
                    let image2 = document.createElement("img");
                    field.appendChild(image2);
                    //arrayLinhasTela.push(image);
				    //image2.setAttribute("id", "imagem1" + "-" + arrayLinhasTela.indexOf(field) + "-" + arrayColunasElementos.indexOf(column));
					image2.style.position = "absolute";
                    image2.src = "/imagens/imagemFalaVazia.png";
					image2.alt = "campo";
					image2.title = "campo";
                    image2.style.top = "5";
					image2.style.left = "5";
					image2.style.width = "50"; 
					image2.style.height = "50";

                    let image3 = document.createElement("img");
                    field.appendChild(image3);
                    //arrayLinhasTela.push(image);
				    //image2.setAttribute("id", "imagem2" + "-" + arrayLinhasTela.indexOf(field) + "-" + arrayColunasElementos.indexOf(column));
					image3.style.position = "absolute";
                    image3.src = "/imagens/imagemFalaVazia.png";
					image3.alt = "campo";
					image3.title = "campo";
                    image3.style.top = "3";
					image3.style.left = "3";
					image3.style.width = "54"; 
					image3.style.height = "54";

					const name = document.createElement("div");
                    field.appendChild(name);
					//name.setAttribute("id", "nomeCampo" + "-" + arrayLinhasTela.indexOf(field) + "-" + arrayColunasElementos.indexOf(column));
                    name.style.position = "absolute";
					//name.style.position = "fixed";
					name.style.top = "5";
					name.style.left = "5";
					name.style.color = "mediumseagreen";
					name.style.fontFamily = "Lucida Console,Courier New,monospace";
					name.style.fontSize = "small";
					name.style.visibility = "hidden";
				
					//arrayColunasElementos[arrayColunasElementos.length-1].appendChild(name);

					const barraHpVazia = document.createElement("div");
                    field.appendChild(barraHpVazia);
					//barraHpVazia.setAttribute("id", "barraHpVaziaCampo" + "-" + arrayLinhasTela.indexOf(field) + "-" + arrayColunasElementos.indexOf(column));
                    barraHpVazia.style.position = "absolute";
					//barraHpVazia.style.position = "fixed";
					barraHpVazia.style.top = "1";
					barraHpVazia.style.left = "5";
					barraHpVazia.style.width = "50"; 
					barraHpVazia.style.height = "3";
					barraHpVazia.style.backgroundColor = "black";
					barraHpVazia.style.visibility = "hidden";
				
					//arrayColunasElementos[arrayColunasElementos.length-1].appendChild(barraHpVazia);

					const barraHp = document.createElement("div");
                    field.appendChild(barraHp);
					//barraHp.setAttribute("id", "barraHpCampo" + "-" + arrayLinhasTela.indexOf(field) + "-" + arrayColunasElementos.indexOf(column));
					barraHp.style.position = "absolute";
                    //barraHp.style.position = "fixed";
					barraHp.style.top = "1";
					barraHp.style.left = "5";
					barraHp.style.width = "50"; 
					barraHp.style.height = "3";
					barraHp.style.backgroundColor = "mediumseagreen";
					barraHp.style.visibility = "hidden";
				
					//arrayColunasElementos[arrayColunasElementos.length-1].appendChild(barraHp);

					const message = document.createElement("div");
                    field.appendChild(message);
					//message.setAttribute("id", "mensagemDivCampo" + "-" + arrayLinhasTela.indexOf(field) + "-" + arrayColunasElementos.indexOf(column));
					message.style.position = "absolute";
                    //message.style.position = "fixed";
					message.style.top = "15";
					message.style.left = "5";
					message.style.width = "250";
					message.style.textAlign = "left";
					message.style.color = "red";
					message.style.fontFamily = "Lucida Console,Courier New,monospace";
					message.style.fontSize = "small";
				
					//arrayColunasElementos[arrayColunasElementos.length-1].appendChild(message);

					//campo[0] = campo[0] + 1;
					//nameTop = nameTop + 60;
					//barraHpTop = barraHpTop + 60;
					//messageTop = messageTop + 60;
                    rowTop = rowTop + 60;
				}
				//campo[1] = campo[1] + 1;
				columnLeft = columnLeft + 60;
				//intoLeft = intoLeft + 60;
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
                    matrizDoMapa[(linhaInicioSubsolo4 + 2)][(colunaInicio + 3)] = 3;
                    matrizDoMapa[(linhaInicioTerreo + 1)][(colunaInicio + 6)] = 3;
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
                            document.getElementById("equipamentoMaoDireita").src = 'imagens/Sword.png';
                            document.getElementById('equipamentoMaoDireita').alt = 'Sword (Arm: 1)';
                            document.getElementById('equipamentoMaoDireita').title = 'Sword (Arm: 1)';
                        }
                        equipamentos[2] = parseInt(strDados[2]);
                        equipamentos[3] = parseInt(strDados[3]);
                        equipamentos[4] = parseInt(strDados[4]);
                        equipamentos[5] = parseInt(strDados[5]);
                        equipamentos[6] = parseInt(strDados[6]);
                        equipamentos[7] = parseInt(strDados[7]);
                        if(equipamentos[7] == 1){
                            document.getElementById("equipamentoMaoEsquerda").src = 'imagens/Shield.png';
                            document.getElementById('equipamentoMaoEsquerda').alt = 'Shield (Def: 1)';
                            document.getElementById('equipamentoMaoEsquerda').title = 'Shield (Def: 1)';
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
                    preencherImagens(null, posicaoBot[0], posicaoBot[1]);
                    
                    matrizDoMapa[posicaoBot[0]-1][posicaoBot[1]] = 51;
                    posicaoBot[0] = posicaoBot[0]-1;
                    preencherImagens(null, posicaoBot[0], posicaoBot[1]);
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
                    preencherImagens(null, posicaoBot[0], posicaoBot[1]);

                    matrizDoMapa[posicaoBot[0]][posicaoBot[1]+1] = 51;
                    posicaoBot[1] = posicaoBot[1]+1;
                    preencherImagens(null, posicaoBot[0], posicaoBot[1]);
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
                    preencherImagens(null, posicaoBot[0], posicaoBot[1]);

                    matrizDoMapa[posicaoBot[0]+1][posicaoBot[1]] = 51;
                    posicaoBot[0] = posicaoBot[0]+1;
                    preencherImagens(null, posicaoBot[0], posicaoBot[1]);
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
                    preencherImagens(null, posicaoBot[0], posicaoBot[1]);

                    matrizDoMapa[posicaoBot[0]][posicaoBot[1]-1] = 51;
                    posicaoBot[1] = posicaoBot[1]-1;
                    preencherImagens(null, posicaoBot[0], posicaoBot[1]);
                }
                else{
                    if(comando)
                        mensagemDoSistema('Bot: Caminho bloqueado.');
                }
            }

            jangadaPosicaoInicial = function(){
                if(posicaoDoPersonagemNaMatriz[0] > (linhaInicioTerreo+27)){
                    matrizDoMapa[posicaoJangada[0]][posicaoJangada[1]] = 39;
                    matrizDoMapa[posicaoJangada[0]][posicaoJangada[1]+1] = 38;
                    matrizDoMapa[posicaoJangada[0]][posicaoJangada[1]+2] = 38; 
                    matrizDoMapa[posicaoJangada[0]][posicaoJangada[1]+3] = 37;
                    matrizDoMapa[posicaoJangada[0]+1][posicaoJangada[1]] = 26;
                    matrizDoMapa[posicaoJangada[0]+1][posicaoJangada[1]+1] = 26;
                    matrizDoMapa[posicaoJangada[0]+1][posicaoJangada[1]+2] = 26; 
                    matrizDoMapa[posicaoJangada[0]+1][posicaoJangada[1]+3] = 26;
                    posicaoJangada[0] = (linhaInicioTerreo+28);
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

            moverJangada = function(direcao){
                switch(direcao){
                    case 0:
                        if(posicaoJangada[0] == (linhaInicioTerreo+21))
                            break;
                        if(posicaoJangada[0] == (linhaInicioTerreo+28)){
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
                        if(posicaoJangada[0] == (linhaInicioTerreo+28))
                            break;
                        if(posicaoJangada[0] == (linhaInicioTerreo+21)){
                            matrizDoMapa[posicaoJangada[0]][posicaoJangada[1]] = 39;
                            matrizDoMapa[posicaoJangada[0]][posicaoJangada[1]+1] = 38;
                            matrizDoMapa[posicaoJangada[0]][posicaoJangada[1]+2] = 38; 
                            matrizDoMapa[posicaoJangada[0]][posicaoJangada[1]+3] = 37;
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
                            if(verificacaoIdEsquerda(71)){
                                matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] = 73;
                                matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]-1] = 74;
                                preencherImagens(null, posicaoDoPersonagemNaMatriz[0], posicaoDoPersonagemNaMatriz[1]-1);
                                preencherImagens(null, posicaoDoPersonagemNaMatriz[0]+1, posicaoDoPersonagemNaMatriz[1]-1);
                                //revelarCasa(3);
                            }else if(verificacaoIdEsquerda(72)){
                                matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]-1] = 73;
                                matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] = 74;
                                revelarCasa(3);
                            }else if(verificacaoIdEsquerda(73)){
                                matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] = 71;
                                matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]-1] = 72;
                                preencherImagens(null, posicaoDoPersonagemNaMatriz[0], posicaoDoPersonagemNaMatriz[1]-1);
                                preencherImagens(null, posicaoDoPersonagemNaMatriz[0]+1, posicaoDoPersonagemNaMatriz[1]-1);
                                //esconderCasa(3);
                            }else if(verificacaoIdEsquerda(74)){
                                matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]-1] = 71;
                                matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] = 72;
                                esconderCasa(3);
                            }
                        }else if(direcaoPersonagem == 1){
                            if(verificacaoIdDireita(71)){
                                matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] = 73;
                                matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]+1] = 74;
                                preencherImagens(null, posicaoDoPersonagemNaMatriz[0], posicaoDoPersonagemNaMatriz[1]+1);
                                preencherImagens(null, posicaoDoPersonagemNaMatriz[0]+1, posicaoDoPersonagemNaMatriz[1]+1);
                            }else if(verificacaoIdDireita(72)){
                                matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]+1] = 73;
                                matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] = 74;
                                preencherImagens(null, posicaoDoPersonagemNaMatriz[0]-1, posicaoDoPersonagemNaMatriz[1]+1);
                                preencherImagens(null, posicaoDoPersonagemNaMatriz[0], posicaoDoPersonagemNaMatriz[1]+1);
                            }else if(verificacaoIdDireita(73)){
                                matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] = 71;
                                matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]+1] = 72;
                                preencherImagens(null, posicaoDoPersonagemNaMatriz[0], posicaoDoPersonagemNaMatriz[1]+1);
                                preencherImagens(null, posicaoDoPersonagemNaMatriz[0]+1, posicaoDoPersonagemNaMatriz[1]+1);
                            }else if(verificacaoIdDireita(74)){
                                matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]+1] = 71;
                                matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] = 72;
                                preencherImagens(null, posicaoDoPersonagemNaMatriz[0]-1, posicaoDoPersonagemNaMatriz[1]+1);
                                preencherImagens(null, posicaoDoPersonagemNaMatriz[0], posicaoDoPersonagemNaMatriz[1]+1);
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
                preencherImagens();
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
                preencherImagens();
            }

            escolherOutfit = function(){
                if(posicaoDoPersonagemNaMatriz[0] == linhaInicioPvp+2)
                    direcaoDoPersonagem = 0;
                else if(posicaoDoPersonagemNaMatriz[0] == linhaInicioPvp+1)
                    direcaoDoPersonagem = 2;
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
                    document.getElementById("equipamentoMaoDireita").src = 'imagens/Sword.png';
                    document.getElementById('equipamentoMaoDireita').alt = 'Sword (Arm: 1)';
                    document.getElementById('equipamentoMaoDireita').title = 'Sword (Arm: 1)';
                    visibilityEquipamentos(document.getElementById('mensagem1').style.visibility == 'hidden');
                }else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+i][posicaoDoPersonagemNaMatriz[1]+j] == 56){
                    equipamentos[7] = 1;
                    document.getElementById("equipamentoMaoEsquerda").src = 'imagens/Shield.png';
                    document.getElementById('equipamentoMaoEsquerda').alt = 'Shield (Def: 1)';
                    document.getElementById('equipamentoMaoEsquerda').title = 'Shield (Def: 1)';
                    visibilityEquipamentos(document.getElementById('mensagem1').style.visibility == 'hidden');
                }else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+i][posicaoDoPersonagemNaMatriz[1]+j] == 92){
                    if(document.getElementById("tablet").style.visibility == "hidden")
                        document.getElementById("tablet").style.visibility = "visible";
                    else if(document.getElementById("tablet").style.visibility == "visible")
                        document.getElementById("tablet").style.visibility = "hidden";
                }
            }

            corlifecampo = function(i, j){
                if(parseInt(arrayColunasTela[j][i].children[6].style.width.split('p')[0]) <= 13){ 
                    arrayColunasTela[j][i].children[4].style.color = 'tomato';
                    arrayColunasTela[j][i].children[6].style.background = 'tomato';
                } else if(parseInt(arrayColunasTela[j][i].children[6].style.width.split('p')[0]) <= 25){ 
                    arrayColunasTela[j][i].children[4].style.color = 'orange';
                    arrayColunasTela[j][i].children[6].style.background = 'orange';
                } else if(parseInt(arrayColunasTela[j][i].children[6].style.width.split('p')[0]) > 25){ 
                    arrayColunasTela[j][i].children[4].style.color = 'mediumseagreen';
                    arrayColunasTela[j][i].children[6].style.background = 'mediumseagreen';
                }
            }

            funcPersonagemMorto = function(){
                hp = 0;
                posicaoDoPersonagemNaMatriz = [(linhaInicioSubsolo4 + 2),(colunaInicio + 2)];
                personagemMorto = true;
                document.getElementById('alertRedId').style.visibility = 'visible';
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
                document.getElementById('speedvalor').innerHTML = (lvlatual < 950)?(10+(lvlatual * 0.2) | 0):'max';
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

                if(lvlatual < 50)
                    esperaPorQuadro =  20;
                else if(lvlatual < 100)
                    esperaPorQuadro =  19;
                else if(lvlatual < 150)
                    esperaPorQuadro =  18;
                else if(lvlatual < 200)
                    esperaPorQuadro =  17;
                else if(lvlatual < 250)
                    esperaPorQuadro =  16;
                else if(lvlatual < 300)
                    esperaPorQuadro =  15;
                else if(lvlatual < 350)
                    esperaPorQuadro =  14;
                else if(lvlatual < 400)
                    esperaPorQuadro =  13;
                else if(lvlatual < 450)
                    esperaPorQuadro =  12;
                else if(lvlatual < 500)
                    esperaPorQuadro =  11;
                else if(lvlatual < 550)
                    esperaPorQuadro =  10;
                else if(lvlatual < 600)
                    esperaPorQuadro =  9;
                else if(lvlatual < 650)
                    esperaPorQuadro =  8;
                else if(lvlatual < 700)
                    esperaPorQuadro =  7;
                else if(lvlatual < 750)
                    esperaPorQuadro =  6;
                else if(lvlatual < 800)
                    esperaPorQuadro =  5;
                else if(lvlatual < 850)
                    esperaPorQuadro =  4;
                else if(lvlatual < 900)
                    esperaPorQuadro =  3;
                else if(lvlatual < 950)
                    esperaPorQuadro =  2;
                else
                    esperaPorQuadro =  1;

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

                if(personagemMorto)
                    return;
                
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
                    document.getElementById('mensagemDiv3').style.color = 'SpringGreen';
                    document.getElementById('mensagemDiv3').style.textAlign = 'center';
                    document.getElementById('mensagemDiv3').style.width = 50;
                    document.getElementById('mensagemDiv3').innerHTML = cura;
                    mensagensDoChatServerLog += '\n\nVocê ' + tipoDeCura + ' ' + cura + ' pontos de vida.';
                    setTimeout(function(){ document.getElementById('mensagemDiv3').innerHTML = ''; document.getElementById('mensagemDiv3').style.width = 250; }, 500);
                    document.getElementById('hpvalor').innerHTML = hp;
                    document.getElementById('hp').style.width = (176 * hp) / hpmax;
                    document.getElementById('barraHpPersonagem1').style.width = (50 * hp) / hpmax;
                    document.getElementById('personagem1').title = username + " level: " + lvlatual.toString() + " hp: " + hp.toString();
                } else {
                    document.getElementById('mensagemDiv3').style.color = 'SpringGreen';
                    document.getElementById('mensagemDiv3').style.textAlign = 'center';
                    document.getElementById('mensagemDiv3').style.width = 50;
                    document.getElementById('mensagemDiv3').innerHTML = (hpmax - hp);
                    mensagensDoChatServerLog += '\n\nVocê ' + tipoDeCura + ' ' + (hpmax - hp) + ' pontos de vida.';
                    setTimeout(function(){ document.getElementById('mensagemDiv3').innerHTML = ''; document.getElementById('mensagemDiv3').style.width = 250; }, 500);
                    hp = hpmax;
                    document.getElementById('hpvalor').innerHTML = hp;
                    document.getElementById('hp').style.width = 176;
                    document.getElementById('barraHpPersonagem1').style.width = 50;
                    document.getElementById('personagem1').title = username + " level: " + lvlatual.toString() + " hp: " + hp.toString();
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
                            usarCampo(posicaoDoPersonagemNaMatriz[0], posicaoDoPersonagemNaMatriz[1], 4);
                        }else if(mochila[1] == 'Corda'){ 
                            mensagemDoSistema('Sistema: Aqui não é possível subir.');
                        } 
                        break;
                    case 2:
                        if(mochila[2] == 'Pa' && matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]] == 6){
                            usarCampo(posicaoDoPersonagemNaMatriz[0], posicaoDoPersonagemNaMatriz[1], 6);
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
                        ((posicaoDoPersonagemNaMatriz[0]+linha) == (linhaInicioSubsolo4+2) && (posicaoDoPersonagemNaMatriz[1]+coluna) == (colunaInicio + 3)) ||
                        ((posicaoDoPersonagemNaMatriz[0]+linha) == (linhaInicioTerreo+1) && (posicaoDoPersonagemNaMatriz[1]+coluna) == (colunaInicio + 6))
                    ) && !questFerramentas
                ){
                    id = 0;
                    questFerramentas = true;
                    matrizDoMapa[(linhaInicioSubsolo4 + 2)][(colunaInicio + 3)] = 3;
                    matrizDoMapa[(linhaInicioTerreo + 1)][(colunaInicio + 6)] = 3;
                }
                if((posicaoDoPersonagemNaMatriz[0]+linha) == (linhaInicioTerreo+1) && (posicaoDoPersonagemNaMatriz[1]+coluna) == (colunaInicio + 20)
                &&
                    (
                        quest1 == 0 ||
                        quest1 == 70 ||
                        quest1 == 10 ||
                        quest1 == 80 
                    )
                ){
                    id = 1;
                }else if((posicaoDoPersonagemNaMatriz[0]+linha) == (linhaInicioTerreo+1) && (posicaoDoPersonagemNaMatriz[1]+coluna) == (colunaInicio + 20)){
                    document.getElementById('fala1').src = 'imagens/imagemFalaItemVazio.png';
                    setTimeout(function(){ document.getElementById('fala1').src = 'imagens/imagemFalaVazia.png';}, 1000);
                }
                if((posicaoDoPersonagemNaMatriz[0]+linha) == (linhaInicioTerreo+11) && (posicaoDoPersonagemNaMatriz[1]+coluna) == (colunaInicio + 23) 
                &&
                    (
                        quest2 == 0 ||
                        quest2 == 130 ||
                        quest2 == 20 ||
                        quest2 == 150 
                    )
                ){
                    id = 2;
                }else if((posicaoDoPersonagemNaMatriz[0]+linha) == (linhaInicioTerreo+11) && (posicaoDoPersonagemNaMatriz[1]+coluna) == (colunaInicio + 23)){
                    document.getElementById('fala1').src = 'imagens/imagemFalaItemVazio.png';
                    setTimeout(function(){ document.getElementById('fala1').src = 'imagens/imagemFalaVazia.png';}, 1000);
                }
                if((posicaoDoPersonagemNaMatriz[0]+linha) == (linhaInicioTerreo+1) && (posicaoDoPersonagemNaMatriz[1]+coluna) == (colunaInicio + 27) 
                &&
                    (
                        quest3 == 0 ||
                        quest3 == 200 ||
                        quest3 == 30 ||
                        quest3 == 230 
                    )
                ){
                    id = 3;
                }else if((posicaoDoPersonagemNaMatriz[0]+linha) == (linhaInicioTerreo+1) && (posicaoDoPersonagemNaMatriz[1]+coluna) == (colunaInicio + 27)){
                    document.getElementById('fala1').src = 'imagens/imagemFalaItemVazio.png';
                    setTimeout(function(){ document.getElementById('fala1').src = 'imagens/imagemFalaVazia.png';}, 1000);
                }
                if((posicaoDoPersonagemNaMatriz[0]+linha) == (linhaInicioTerreo+11) && (posicaoDoPersonagemNaMatriz[1]+coluna) == (colunaInicio + 31) 
                &&
                    (
                        quest1 == 0 ||
                        quest1 == 30 ||
                        quest1 == 10 ||
                        quest1 == 40 
                    )
                ){
                    id = 4;
                }else if((posicaoDoPersonagemNaMatriz[0]+linha) == (linhaInicioTerreo+11) && (posicaoDoPersonagemNaMatriz[1]+coluna) == (colunaInicio + 31)){
                    document.getElementById('fala1').src = 'imagens/imagemFalaItemVazio.png';
                    setTimeout(function(){ document.getElementById('fala1').src = 'imagens/imagemFalaVazia.png';}, 1000);
                }
                if((posicaoDoPersonagemNaMatriz[0]+linha) == (linhaInicioTerreo+1) && (posicaoDoPersonagemNaMatriz[1]+coluna) == (colunaInicio + 34) 
                &&
                    ( 
                        quest2 == 0 ||
                        quest2 == 70 ||
                        quest2 == 20 ||
                        quest2 == 90 
                    )
                ){
                    id = 5;
                }else if((posicaoDoPersonagemNaMatriz[0]+linha) == (linhaInicioTerreo+1) && (posicaoDoPersonagemNaMatriz[1]+coluna) == (colunaInicio + 34)){
                    document.getElementById('fala1').src = 'imagens/imagemFalaItemVazio.png';
                    setTimeout(function(){ document.getElementById('fala1').src = 'imagens/imagemFalaVazia.png';}, 1000);
                }
                if((posicaoDoPersonagemNaMatriz[0]+linha) == (linhaInicioTerreo+11) && (posicaoDoPersonagemNaMatriz[1]+coluna) == (colunaInicio + 37)
                &&
                    ( 
                        quest3 == 0 ||
                        quest3 == 100 ||
                        quest3 == 30 ||
                        quest3 == 130
                    )
                ){
                    id = 6;
                }else if((posicaoDoPersonagemNaMatriz[0]+linha) == (linhaInicioTerreo+11) && (posicaoDoPersonagemNaMatriz[1]+coluna) == (colunaInicio + 37)){
                    document.getElementById('fala1').src = 'imagens/imagemFalaItemVazio.png';
                    setTimeout(function(){ document.getElementById('fala1').src = 'imagens/imagemFalaVazia.png';}, 1000);
                }
                if((posicaoDoPersonagemNaMatriz[0]+linha) == (linhaInicioTerreo+10) && (posicaoDoPersonagemNaMatriz[1]+coluna) == (colunaInicio + 41) 
                && 
                    (
                        quest1 == 0 ||
                        quest1 == 30 ||
                        quest1 == 70 ||
                        quest1 == 100 
                    )
                ){
                    id = 7;
                }else if((posicaoDoPersonagemNaMatriz[0]+linha) == (linhaInicioTerreo+10) && (posicaoDoPersonagemNaMatriz[1]+coluna) == (colunaInicio + 41)){
                    document.getElementById('fala1').src = 'imagens/imagemFalaItemVazio.png';
                    setTimeout(function(){ document.getElementById('fala1').src = 'imagens/imagemFalaVazia.png';}, 1000);
                }
                if((posicaoDoPersonagemNaMatriz[0]+linha) == (linhaInicioTerreo+6) && (posicaoDoPersonagemNaMatriz[1]+coluna) == (colunaInicio + 41) 
                &&
                    (
                        quest2 == 0 ||
                        quest2 == 70 ||
                        quest2 == 130 ||
                        quest2 == 200 
                    )
                ){
                    id = 8;
                }else if((posicaoDoPersonagemNaMatriz[0]+linha) == (linhaInicioTerreo+6) && (posicaoDoPersonagemNaMatriz[1]+coluna) == (colunaInicio + 41)){
                    document.getElementById('fala1').src = 'imagens/imagemFalaItemVazio.png';
                    setTimeout(function(){ document.getElementById('fala1').src = 'imagens/imagemFalaVazia.png';}, 1000);
                }
                if((posicaoDoPersonagemNaMatriz[0]+linha) == (linhaInicioTerreo+2) && (posicaoDoPersonagemNaMatriz[1]+coluna) == (colunaInicio + 41) 
                && 
                    (
                        quest3 == 0 ||
                        quest3 == 100 ||
                        quest3 == 200 ||
                        quest3 == 300 
                    )
                ){
                    id = 9;
                }else if((posicaoDoPersonagemNaMatriz[0]+linha) == (linhaInicioTerreo+2) && (posicaoDoPersonagemNaMatriz[1]+coluna) == (colunaInicio + 41)){
                    document.getElementById('fala1').src = 'imagens/imagemFalaItemVazio.png';
                    setTimeout(function(){ document.getElementById('fala1').src = 'imagens/imagemFalaVazia.png';}, 1000);
                }
                if((posicaoDoPersonagemNaMatriz[0]+linha) == (linhaInicioTerreo+24) && (posicaoDoPersonagemNaMatriz[1]+coluna) == (colunaInicio + 27) 
                && 
                    (
                        quest4 == 0 ||
                        quest4 == 130 ||
                        quest4 == 180 ||
                        quest4 == 310 
                    )
                ){
                    id = 10;
                }else if((posicaoDoPersonagemNaMatriz[0]+linha) == (linhaInicioTerreo+24) && (posicaoDoPersonagemNaMatriz[1]+coluna) == (colunaInicio + 27)){
                    document.getElementById('fala1').src = 'imagens/imagemFalaItemVazio.png';
                    setTimeout(function(){ document.getElementById('fala1').src = 'imagens/imagemFalaVazia.png';}, 1000);
                }
                if((posicaoDoPersonagemNaMatriz[0]+linha) == (linhaInicioTerreo+15) && (posicaoDoPersonagemNaMatriz[1]+coluna) == (colunaInicio + 41) 
                && 
                    (
                        quest4 == 0 ||
                        quest4 == 90 ||
                        quest4 == 180 ||
                        quest4 == 270 
                    )
                ){
                    id = 11;
                }else if((posicaoDoPersonagemNaMatriz[0]+linha) == (linhaInicioTerreo+15) && (posicaoDoPersonagemNaMatriz[1]+coluna) == (colunaInicio + 41)){
                    document.getElementById('fala1').src = 'imagens/imagemFalaItemVazio.png';
                    setTimeout(function(){ document.getElementById('fala1').src = 'imagens/imagemFalaVazia.png';}, 1000);
                }
                if((posicaoDoPersonagemNaMatriz[0]+linha) == (linhaInicioTerreo+24) && (posicaoDoPersonagemNaMatriz[1]+coluna) == (colunaInicio + 40) 
                && 
                    (
                        quest4 == 0 ||
                        quest4 == 90 ||
                        quest4 == 130 ||
                        quest4 == 220 
                    )
                ){
                    id = 12;
                }else if((posicaoDoPersonagemNaMatriz[0]+linha) == (linhaInicioTerreo+24) && (posicaoDoPersonagemNaMatriz[1]+coluna) == (colunaInicio + 40)){
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

            verificarPosicaoValidaXY = function(linha, coluna){
                return (matrizDoMapa[linha][coluna] == 10 || matrizDoMapa[linha][coluna] == 18 || matrizDoMapa[linha][coluna] == 21 || matrizDoMapa[linha][coluna] == 47 || matrizDoMapa[linha][coluna] == 50 || matrizDoMapa[linha][coluna] == 0 || matrizDoMapa[linha][coluna] == 51 || matrizDoMapa[linha][coluna] == 52 || matrizDoMapa[linha][coluna] == 4 || matrizDoMapa[linha][coluna] == 6 || matrizDoMapa[linha][coluna] == 7 || matrizDoMapa[linha][coluna] == 12 || matrizDoMapa[linha][coluna] == 13 || matrizDoMapa[linha][coluna] == 14 || matrizDoMapa[linha][coluna] == 15 || matrizDoMapa[linha][coluna] == 22 || matrizDoMapa[linha][coluna] == 23 || matrizDoMapa[linha][coluna] == 24 || matrizDoMapa[linha][coluna] == 25 || matrizDoMapa[linha][coluna] == 84 || matrizDoMapa[linha][coluna] == 85 || matrizDoMapa[linha][coluna] == 86 || matrizDoMapa[linha][coluna] == 87 || matrizDoMapa[linha][coluna] == 88 || matrizDoMapa[linha][coluna] == 89 || matrizDoMapa[linha][coluna] == 90 || matrizDoMapa[linha][coluna] == 91);
            }

            verificarPosicaoValidaBot = function(linha, coluna){
                return (matrizDoMapa[posicaoBot[0]+linha][posicaoBot[1]+coluna] == 0 || matrizDoMapa[posicaoBot[0]+linha][posicaoBot[1]+coluna] == 12 || matrizDoMapa[posicaoBot[0]+linha][posicaoBot[1]+coluna] == 13 || matrizDoMapa[posicaoBot[0]+linha][posicaoBot[1]+coluna] == 14 || matrizDoMapa[posicaoBot[0]+linha][posicaoBot[1]+coluna] == 15 || matrizDoMapa[posicaoBot[0]+linha][posicaoBot[1]+coluna] == 22 || matrizDoMapa[posicaoBot[0]+linha][posicaoBot[1]+coluna] == 23 || matrizDoMapa[posicaoBot[0]+linha][posicaoBot[1]+coluna] == 24 || matrizDoMapa[posicaoBot[0]+linha][posicaoBot[1]+coluna] == 25 || matrizDoMapa[posicaoBot[0]+linha][posicaoBot[1]+coluna] == 84 || matrizDoMapa[posicaoBot[0]+linha][posicaoBot[1]+coluna] == 85 || matrizDoMapa[posicaoBot[0]+linha][posicaoBot[1]+coluna] == 86 || matrizDoMapa[posicaoBot[0]+linha][posicaoBot[1]+coluna] == 87 || matrizDoMapa[posicaoBot[0]+linha][posicaoBot[1]+coluna] == 88 || matrizDoMapa[posicaoBot[0]+linha][posicaoBot[1]+coluna] == 89 || matrizDoMapa[posicaoBot[0]+linha][posicaoBot[1]+coluna] == 90 || matrizDoMapa[posicaoBot[0]+linha][posicaoBot[1]+coluna] == 91);
            }

            verificarJogoHabilitado = function(){
                return (document.getElementById('alertYellowId').style.visibility == 'hidden' && document.getElementById('alertRedId').style.visibility == 'hidden');
            }

            verificarJogadorNaTela = function(x, y){
                let distanciaX = Math.abs(x - posicaoDoPersonagemNaMatriz[0]);
                let distanciaY = Math.abs(y - posicaoDoPersonagemNaMatriz[1]);

                return ( distanciaX <= (resolucaoLarguraAltura[0] / 2) ) && ( distanciaY <= (resolucaoLarguraAltura[1] / 2) )
            }

            verificacaoAproximacaoNPC = function(linha, coluna){
                if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+linha][posicaoDoPersonagemNaMatriz[1]+coluna] == 11){
                    document.getElementById('campoDeEscritaInput').value = 'Oi';
                    dialogo();
                }
            }

            verificacaoDistanciamentoNPC = function(){
                let idNPC = 11;
                if(
                    nivelDeConversaNpc > 0 &&
                    !verificacaoIdNasProximidades(idNPC)
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

            verificacaoDistanciamentoTablete = function(){
                let idTablete = 92;
                if( 
                    (document.getElementById("tablet").style.visibility == "visible") &&
                    !verificacaoIdNasProximidades(idTablete)
                ){
                    document.getElementById("tablet").style.visibility = "hidden";
                }
            }

            verificacaoDistanciamento = function(){
                verificacaoDistanciamentoNPC();
                verificacaoDistanciamentoTablete();
            }

            verificacaoIdCima = function(id){
                return matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == id;
            }

            verificacaoIdDireita = function(id){
                return matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == id;
            }

            verificacaoIdBaixo = function(id){
                return matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == id;
            }

            verificacaoIdEsquerda = function(id){
                return matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == id;
            }

            verificacaoIdNasProximidades = function(id){
                return (
                        verificacaoIdCima(id) || 
                        verificacaoIdDireita(id) || 
                        verificacaoIdBaixo(id) || 
                        verificacaoIdEsquerda(id) || 
                        matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]-1] == id || 
                        matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]+1] == id || 
                        matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]-1] == id || 
                        matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]+1] == id
                    );
            }

            verificacaoIdTeleporte = function(posicao){
                switch(posicao){
                    case 0:
                        return (
                            verificacaoIdCima(41) || 
                            verificacaoIdCima(42) || 
                            verificacaoIdCima(43) || 
                            verificacaoIdCima(44)
                            );
                    case 1:
                        return (
                            verificacaoIdDireita(41) || 
                            verificacaoIdDireita(42) || 
                            verificacaoIdDireita(43) || 
                            verificacaoIdDireita(44)
                            );
                    case 2:
                        return (
                            verificacaoIdBaixo(41) || 
                            verificacaoIdBaixo(42) || 
                            verificacaoIdBaixo(43) || 
                            verificacaoIdBaixo(44)
                            );
                    case 3:
                        return (
                            verificacaoIdEsquerda(41) || 
                            verificacaoIdEsquerda(42) || 
                            verificacaoIdEsquerda(43) || 
                            verificacaoIdEsquerda(44)
                            );
                }
            }

            verificacaoIdPorta = function(posicao){
                switch(posicao){
                    case 0:
                        break;
                    case 1:
                        return (
                            verificacaoIdDireita(71) || 
                            verificacaoIdDireita(72) || 
                            verificacaoIdDireita(73) || 
                            verificacaoIdDireita(74)
                            );
                    case 2:
                        break;
                    case 3:
                        return (
                            verificacaoIdEsquerda(71) || 
                            verificacaoIdEsquerda(72) || 
                            verificacaoIdEsquerda(73) || 
                            verificacaoIdEsquerda(74)
                            );
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

            mensagemGanhouExperiencia = function(xpGanha){
                mensagensDoChatServerLog += "\n\nVocê ganhou " + xpGanha + " ponto(s) de experiência."; 
                document.getElementById('mensagemDiv3').style.color = 'white'; 
                document.getElementById('mensagemDiv3').style.textAlign = 'center'; 
                document.getElementById('mensagemDiv3').style.width = 50; 
                document.getElementById('mensagemDiv3').innerHTML = xpGanha + "Xp"; 
                setTimeout(function(){ 
                    document.getElementById('mensagemDiv3').innerHTML = ""; 
                    document.getElementById('mensagemDiv3').style.color = 'red'; 
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
                
                for(let i = (-((resolucaoLarguraAltura[0]/2) | 0)); i < (((resolucaoLarguraAltura[0]/2) | 0) + 1); i++){
                    for(let j = (-((resolucaoLarguraAltura[1]/2) | 0)); j < (((resolucaoLarguraAltura[1]/2) | 0) + 1); j++){

                        let posicaoDoCampoNaMatriz = [posicaoDoPersonagemNaMatriz[0]+i,posicaoDoPersonagemNaMatriz[1]+j];
                        let flagMoveC = false;
                        
                        for(let k = 0; k < arrayMove.length; k++){
                            if(arrayMove[k][0] == posicaoDoCampoNaMatriz[0] && arrayMove[k][1] == posicaoDoCampoNaMatriz[1]){
                                flagMoveC = true;
                                break;
                            }
                        }
                        
                        if(flagMoveC){
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
                                if(matrizDoMapa[posicaoDoCampoNaMatriz[0]-1][posicaoDoCampoNaMatriz[1]] == 0 && ((posicaoDoCampoNaMatriz[0]-1) != posicaoDoPersonagemNaMatriz[0] || posicaoDoCampoNaMatriz[1] != posicaoDoPersonagemNaMatriz[1]) && i-1 > (-((resolucaoLarguraAltura[0]/2) | 0) - 1)){
                                    matrizCriaturasVida[posicaoDoCampoNaMatriz[0]-1][posicaoDoCampoNaMatriz[1]] = matrizCriaturasVida[posicaoDoCampoNaMatriz[0]][posicaoDoCampoNaMatriz[1]];
                                    matrizDoMapa[posicaoDoCampoNaMatriz[0]-1][posicaoDoCampoNaMatriz[1]] = matrizDoMapa[posicaoDoCampoNaMatriz[0]][posicaoDoCampoNaMatriz[1]];
                                    matrizDoMapa[posicaoDoCampoNaMatriz[0]][posicaoDoCampoNaMatriz[1]] = 0;
                                    matrizCriaturasVida[posicaoDoCampoNaMatriz[0]][posicaoDoCampoNaMatriz[1]] = 0;

                                    preencherImagens(null, posicaoDoCampoNaMatriz[0], posicaoDoCampoNaMatriz[1]);

                                    posicaoDoCampoNaMatriz[0]--;

                                    preencherImagens(null, posicaoDoCampoNaMatriz[0], posicaoDoCampoNaMatriz[1]);

                                    arrayMove.push(posicaoDoCampoNaMatriz);
                                }
                                break;
                            case 1:
                                if(matrizDoMapa[posicaoDoCampoNaMatriz[0]][posicaoDoCampoNaMatriz[1]+1] == 0 && (posicaoDoCampoNaMatriz[0] != posicaoDoPersonagemNaMatriz[0] || (posicaoDoCampoNaMatriz[1]+1) != posicaoDoPersonagemNaMatriz[1]) && j+1 < (((resolucaoLarguraAltura[1]/2) | 0) + 1)){
                                    matrizCriaturasVida[posicaoDoCampoNaMatriz[0]][posicaoDoCampoNaMatriz[1]+1] = matrizCriaturasVida[posicaoDoCampoNaMatriz[0]][posicaoDoCampoNaMatriz[1]];
                                    matrizDoMapa[posicaoDoCampoNaMatriz[0]][posicaoDoCampoNaMatriz[1]+1] = matrizDoMapa[posicaoDoCampoNaMatriz[0]][posicaoDoCampoNaMatriz[1]];
                                    matrizDoMapa[posicaoDoCampoNaMatriz[0]][posicaoDoCampoNaMatriz[1]] = 0;
                                    matrizCriaturasVida[posicaoDoCampoNaMatriz[0]][posicaoDoCampoNaMatriz[1]] = 0;

                                    preencherImagens(null, posicaoDoCampoNaMatriz[0], posicaoDoCampoNaMatriz[1]);

                                    posicaoDoCampoNaMatriz[1]++;

                                    preencherImagens(null, posicaoDoCampoNaMatriz[0], posicaoDoCampoNaMatriz[1]);

                                    arrayMove.push(posicaoDoCampoNaMatriz);
                                }
                                break;
                            case 2:
                                if(matrizDoMapa[posicaoDoCampoNaMatriz[0]+1][posicaoDoCampoNaMatriz[1]] == 0 && ((posicaoDoCampoNaMatriz[0]+1) != posicaoDoPersonagemNaMatriz[0] || posicaoDoCampoNaMatriz[1] != posicaoDoPersonagemNaMatriz[1]) && i+1 < (((resolucaoLarguraAltura[0]/2) | 0) + 1)){
                                    matrizCriaturasVida[posicaoDoCampoNaMatriz[0]+1][posicaoDoCampoNaMatriz[1]] = matrizCriaturasVida[posicaoDoCampoNaMatriz[0]][posicaoDoCampoNaMatriz[1]];
                                    matrizDoMapa[posicaoDoCampoNaMatriz[0]+1][posicaoDoCampoNaMatriz[1]] = matrizDoMapa[posicaoDoCampoNaMatriz[0]][posicaoDoCampoNaMatriz[1]];
                                    matrizDoMapa[posicaoDoCampoNaMatriz[0]][posicaoDoCampoNaMatriz[1]] = 0;
                                    matrizCriaturasVida[posicaoDoCampoNaMatriz[0]][posicaoDoCampoNaMatriz[1]] = 0;

                                    preencherImagens(null, posicaoDoCampoNaMatriz[0], posicaoDoCampoNaMatriz[1]);

                                    posicaoDoCampoNaMatriz[0]++;

                                    preencherImagens(null, posicaoDoCampoNaMatriz[0], posicaoDoCampoNaMatriz[1]);

                                    arrayMove.push(posicaoDoCampoNaMatriz);
                                }
                                break;
                            case 3:
                                if(matrizDoMapa[posicaoDoCampoNaMatriz[0]][posicaoDoCampoNaMatriz[1]-1] == 0 && (posicaoDoCampoNaMatriz[0] != posicaoDoPersonagemNaMatriz[0] || (posicaoDoCampoNaMatriz[1]-1) != posicaoDoPersonagemNaMatriz[1]) && j-1 > (-((resolucaoLarguraAltura[1]/2) | 0) - 1)){
                                    matrizCriaturasVida[posicaoDoCampoNaMatriz[0]][posicaoDoCampoNaMatriz[1]-1] = matrizCriaturasVida[posicaoDoCampoNaMatriz[0]][posicaoDoCampoNaMatriz[1]];
                                    matrizDoMapa[posicaoDoCampoNaMatriz[0]][posicaoDoCampoNaMatriz[1]-1] = matrizDoMapa[posicaoDoCampoNaMatriz[0]][posicaoDoCampoNaMatriz[1]];
                                    matrizDoMapa[posicaoDoCampoNaMatriz[0]][posicaoDoCampoNaMatriz[1]] = 0;
                                    matrizCriaturasVida[posicaoDoCampoNaMatriz[0]][posicaoDoCampoNaMatriz[1]] = 0;

                                    preencherImagens(null, posicaoDoCampoNaMatriz[0], posicaoDoCampoNaMatriz[1]);

                                    posicaoDoCampoNaMatriz[1]--;

                                    preencherImagens(null, posicaoDoCampoNaMatriz[0], posicaoDoCampoNaMatriz[1]);

                                    arrayMove.push(posicaoDoCampoNaMatriz);
                                }
                                break;
                        }
                    }
                }
                
            }

            auxPreencherImagensCriaturas = function (nomeCriatura, i, j, nomeCampo, barraHpCampo, barraHpVaziaCampo, baseCampo, imageMonster){
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
                            imageMonster.src = "imagens/Snake.png";
                            break;
                        case 17:
                            matrizDoMapa[i][j] = 16;
                            imageMonster.src = "imagens/Dragon.png";
                            break;
                        case 20:
                            matrizDoMapa[i][j] = 19;
                            imageMonster.src = "imagens/Mammoth.png";
                            break;
                        case 46:
                            matrizDoMapa[i][j] = 45;
                            imageMonster.src = "imagens/Spider.png";
                            break;
                        case 49:
                            matrizDoMapa[i][j] = 48;
                            imageMonster.src = "imagens/OrcShaman.png";
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

                    baseCampo.alt = "restos de criaturas";
                    baseCampo.title = "restos de criaturas";
                    matrizCriaturasVida[i][j] = 50;
                    barraHpCampo.style.width = matrizCriaturasVida[i][j];
                    nomeCampo.style.color = 'mediumseagreen';
                    barraHpCampo.style.background = 'mediumseagreen';

                    if(esperaGeral > 0){
                        esperaGeral--;
                        return;
                    }else{
                        esperaGeral = 100;
                        
                        switch(matrizDoMapa[i][j]){
                            case 10:
                                matrizDoMapa[i][j] = 8;
                                imageMonster.src = "imagens/Snake.png";
                                break;
                            case 18:
                                matrizDoMapa[i][j] = 16;
                                imageMonster.src = "imagens/Dragon.png";
                                break;
                            case 21:
                                matrizDoMapa[i][j] = 19;
                                imageMonster.src = "imagens/Mammoth.png";
                                break;
                            case 47:
                                matrizDoMapa[i][j] = 45;
                                imageMonster.src = "imagens/Spider.png";
                                break;
                            case 50:
                                matrizDoMapa[i][j] = 48;
                                imageMonster.src = "imagens/OrcShaman.png";
                                break;
                        }
                    }
                }

                nomeCampo.innerHTML = nomeCriatura;

                barraHpCampo.style.width = matrizCriaturasVida[i][j];
                if(matrizCriaturasVida[i][j] <= 13){ 
                    nomeCampo.style.color = 'tomato';
                    barraHpCampo.style.background = 'tomato';
                } else if(matrizCriaturasVida[i][j] <= 25){ 
                    nomeCampo.style.color = 'orange';
                    barraHpCampo.style.background = 'orange';
                } else if(matrizCriaturasVida[i][j] > 25){ 
                    nomeCampo.style.color = 'mediumseagreen';
                    barraHpCampo.style.background = 'mediumseagreen';
                }

                nomeCampo.style.visibility = "visible";
                barraHpCampo.style.visibility = "visible";
                barraHpVaziaCampo.style.visibility = "visible";
                baseCampo.alt = nomeCriatura;
                baseCampo.title = nomeCriatura;
                if(imageMonster != null){
                    imageMonster.alt = nomeCriatura;
                    imageMonster.title = nomeCriatura;
                }
            }

            preencherJogadores = function(){

                for(let k = 0; ultimamensagem != "vazio" && k < ultimamensagem.players.length; k++){
                    if(
                        ultimamensagem.players[k].username == username ||
                        !verificarJogadorNaTela(ultimamensagem.players[k].x, ultimamensagem.players[k].y) ||
                        !verificarPosicaoValidaXY(ultimamensagem.players[k].x, ultimamensagem.players[k].y)
                    )
                        continue;

                    let l = (posicaoDoPersonagemNaTela[0] + (ultimamensagem.players[k].x - posicaoDoPersonagemNaMatriz[0]));
                    let m = (posicaoDoPersonagemNaTela[1] + (ultimamensagem.players[k].y - posicaoDoPersonagemNaMatriz[1]));

                    let baseCampo = arrayColunasTela[m][l].children[0];
                    let imagem2Campo = arrayColunasTela[m][l].children[2];
                    let nomeCampo = arrayColunasTela[m][l].children[4];
                    let barraHpCampo = arrayColunasTela[m][l].children[6];
                    let barraHpVaziaCampo = arrayColunasTela[m][l].children[5];
                    let mensagemDivCampo = arrayColunasTela[m][l].children[7];
                    
                    imagem2Campo.style.visibility = "hidden";
                    nomeCampo.style.visibility = "hidden";
                    barraHpCampo.style.visibility = "hidden";
                    barraHpVaziaCampo.style.visibility = "hidden";
                    
                    imagem2Campo.style.top = 5;
                    imagem2Campo.style.left = 5;
                }

                for(let k = 0; dadosResposta != "vazio" && k < dadosResposta.players.length; k++){
                    if(
                        dadosResposta.players[k].username == username ||
                        !verificarJogadorNaTela(dadosResposta.players[k].x, dadosResposta.players[k].y) ||
                        !verificarPosicaoValidaXY(dadosResposta.players[k].x, dadosResposta.players[k].y)
                    )
                        continue;

                    let l = (posicaoDoPersonagemNaTela[0] + (dadosResposta.players[k].x - posicaoDoPersonagemNaMatriz[0]));
                    let m = (posicaoDoPersonagemNaTela[1] + (dadosResposta.players[k].y - posicaoDoPersonagemNaMatriz[1]));

                    let baseCampo = arrayColunasTela[m][l].children[0];
                    let imagem2Campo = arrayColunasTela[m][l].children[2];
                    let nomeCampo = arrayColunasTela[m][l].children[4];
                    let barraHpCampo = arrayColunasTela[m][l].children[6];
                    let barraHpVaziaCampo = arrayColunasTela[m][l].children[5];
                    let mensagemDivCampo = arrayColunasTela[m][l].children[7];
                    
                    //imagem2Campo.style.visibility = "hidden";
                    //nomeCampo.style.visibility = "hidden";
                    //barraHpCampo.style.visibility = "hidden";
                    //barraHpVaziaCampo.style.visibility = "hidden";
                    
                    if(matrizDoMapa[dadosResposta.players[k].x][dadosResposta.players[k].y] == 7){
                        imagem2Campo.style.top = -5;
                        imagem2Campo.style.left = -5;
                    }else{
                        imagem2Campo.style.top = 5;
                        imagem2Campo.style.left = 5;
                    }

                    let expaux = dadosResposta.players[k].nivel;
                    let lvl=0;

                    for(lvl=1; expaux >= 0; lvl++){
                        expaux = expaux - lvl;
                    }
                    lvl--;
                    baseCampo.alt = dadosResposta.players[k].username + " level: " + lvl.toString() + " hp: " + dadosResposta.players[k].hp.toString();
                    baseCampo.title = dadosResposta.players[k].username + " level: " + lvl.toString() + " hp: " + dadosResposta.players[k].hp.toString();
                    imagem2Campo.alt = dadosResposta.players[k].username + " level: " + lvl.toString() + " hp: " + dadosResposta.players[k].hp.toString();
                    imagem2Campo.title = dadosResposta.players[k].username + " level: " + lvl.toString() + " hp: " + dadosResposta.players[k].hp.toString();
                    nomeCampo.innerHTML = dadosResposta.players[k].username;

                    let xpercent = ( dadosResposta.players[k].hp * 100 / (((lvl-1)* 15) + 176) );
                    if( xpercent <= 25){ 
                        nomeCampo.style.color = 'tomato';
                        barraHpCampo.style.background = 'tomato';
                    } else if( xpercent <= 50){ 
                        nomeCampo.style.color = 'orange';
                        barraHpCampo.style.background = 'orange';
                    } else if( xpercent > 50){ 
                        nomeCampo.style.color = 'mediumseagreen';
                        barraHpCampo.style.background = 'mediumseagreen';
                    }

                    barraHpCampo.style.width = 50 * xpercent / 100;

                    if(dadosResposta.players[k].outfit == "M"){
                        switch(dadosResposta.players[k].direcao){
                            case 0:
                                imagem2Campo.src = "imagens/imagemPersonagemDeCostas.png";
                                break;
                            case 1:
                                imagem2Campo.src = "imagens/imagemPersonagemDeDireita.png";
                                break;
                            case 2:
                                imagem2Campo.src = "imagens/imagemPersonagemDeFrente.png";
                                break;
                            case 3:
                                imagem2Campo.src = "imagens/imagemPersonagemDeEsquerda.png";
                                break;
                        }
                    }else if(dadosResposta.players[k].outfit == "F"){
                        switch(dadosResposta.players[k].direcao){
                            case 0:
                                imagem2Campo.src = "imagens/imagemPersonagemDeCostasF.png";
                                break;
                            case 1:
                                imagem2Campo.src = "imagens/imagemPersonagemDeDireitaF.png";
                                break;
                            case 2:
                                imagem2Campo.src = "imagens/imagemPersonagemDeFrenteF.png";
                                break;
                            case 3:
                                imagem2Campo.src = "imagens/imagemPersonagemDeEsquerdaF.png";
                                break;
                        }
                    }else if(dadosResposta.players[k].outfit == "P"){
                        switch(dadosResposta.players[k].direcao){
                            case 0:
                                imagem2Campo.src = "imagens/person2.png";
                                break;
                            case 1:
                                imagem2Campo.src = "imagens/person4.png";
                                break;
                            case 2:
                                imagem2Campo.src = "imagens/person1.png";
                                break;
                            case 3:
                                imagem2Campo.src = "imagens/person3.png";
                                break;
                        }
                    }else if(dadosResposta.players[k].outfit == "W"){
                        switch(dadosResposta.players[k].direcao){
                            case 0:
                                imagem2Campo.src = "imagens/personF2.png";
                                break;
                            case 1:
                                imagem2Campo.src = "imagens/personF4.png";
                                break;
                            case 2:
                                imagem2Campo.src = "imagens/personF1.png";
                                break;
                            case 3:
                                imagem2Campo.src = "imagens/personF3.png";
                                break;
                        }
                    }
                    
                    imagem2Campo.style.visibility = "visible";
                    nomeCampo.style.visibility = "visible";
                    barraHpCampo.style.visibility = "visible";
                    barraHpVaziaCampo.style.visibility = "visible";

                    if(ultimamensagem != "vazio"){
                        for(let l = 0; l < ultimamensagem.players.length; l++){
                            if(ultimamensagem.players[l].username != dadosResposta.players[k].username)
                                continue;

                            if(dadosResposta.players[k].mensagem == ultimamensagem.players[l].mensagem)
                                break;

                            if(dadosResposta.players[k].mensagem != ""){
                                let data = new Date();
                                mensagensDoChatDefault += "\n\n" + data.getHours() + ":" + data.getMinutes() + " " + dadosResposta.players[k].username + " [" + lvl.toString() + "]: " + dadosResposta.players[k].mensagem;
                                mensagemDivCampo.textContent = dadosResposta.players[k].username + " says: " + sanitize(dadosResposta.players[k].mensagem);
                                setTimeout(function(){mensagemDivCampo.innerHTML = "";}, 5000);
                                ultimamensagem.players[k].mensagem = dadosResposta.players[k].mensagem;
                            }
                        }
                    }
                }
            }

            auxPreencherImagens = function (i, j, caminhoImagem, k, l){
                let baseCampo = arrayColunasTela[l][k].children[0];
                let imagem1Campo = arrayColunasTela[l][k].children[1];
                let imagem2Campo = arrayColunasTela[l][k].children[2];
                let imagemCampo = arrayColunasTela[l][k].children[3];
                let nomeCampo = arrayColunasTela[l][k].children[4];
                let barraHpCampo = arrayColunasTela[l][k].children[6];
                let barraHpVaziaCampo = arrayColunasTela[l][k].children[5];
                let mensagemDivCampo = arrayColunasTela[l][k].children[7];
                
                baseCampo.src = caminhoImagem;
                baseCampo.title = "campo";
                imagem1Campo.style.visibility = "hidden";
                imagem2Campo.style.visibility = "hidden";
                imagemCampo.style.visibility = "hidden";
                nomeCampo.style.visibility = "hidden";
                barraHpCampo.style.visibility = "hidden";
                barraHpVaziaCampo.style.visibility = "hidden";
                
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
                    matrizDoMapa[i][j] == 91 ||
                    matrizDoMapa[i][j] == 8 ||
                    matrizDoMapa[i][j] == 16 ||
                    matrizDoMapa[i][j] == 19 ||
                    matrizDoMapa[i][j] == 45 ||
                    matrizDoMapa[i][j] == 48 ||
                    matrizDoMapa[i][j] == 9 ||
                    matrizDoMapa[i][j] == 17 ||
                    matrizDoMapa[i][j] == 20 ||
                    matrizDoMapa[i][j] == 46 ||
                    matrizDoMapa[i][j] == 49 ||
                    matrizDoMapa[i][j] == 10 ||
                    matrizDoMapa[i][j] == 18 ||
                    matrizDoMapa[i][j] == 21 ||
                    matrizDoMapa[i][j] == 47 ||
                    matrizDoMapa[i][j] == 50 ||
                    matrizDoMapa[i][j] == 4 ||
                    matrizDoMapa[i][j] == 5 ||
                    matrizDoMapa[i][j] == 6 ||
                    matrizDoMapa[i][j] == 7
                ){

                    let imagemEfeito = "";

                    if(
                        matrizDoMapa[i][j] == 8 ||
                        matrizDoMapa[i][j] == 16 ||
                        matrizDoMapa[i][j] == 19 ||
                        matrizDoMapa[i][j] == 45 ||
                        matrizDoMapa[i][j] == 48 
                    ){

                    }else if(
                        matrizDoMapa[i][j] == 9 ||
                        matrizDoMapa[i][j] == 17 ||
                        matrizDoMapa[i][j] == 20 ||
                        matrizDoMapa[i][j] == 46 ||
                        matrizDoMapa[i][j] == 49 
                    ){
                        imagemEfeito = "imagens/Ataque.png";
                    }else if(posicaoDoPersonagemNaMatriz[0] < (linhaInicioTerreo + 29) ){
                        imagemEfeito = "imagens/Atordoamento.png";
                    }else{
                        imagemEfeito = "imagens/Ninja.png";
                    }
                    if(matrizDoMapa[i][j] == 8 || matrizDoMapa[i][j] == 9 || matrizDoMapa[i][j] == 10){
                        
                        auxPreencherImagensCriaturas("Snake", i, j, nomeCampo, barraHpCampo, barraHpVaziaCampo, baseCampo, imagem1Campo);
                        imagem1Campo.src = "imagens/Snake.png";
                        imagemCampo.src = imagemEfeito;
                        imagem1Campo.style.visibility = "visible";
                        if(matrizDoMapa[i][j] != 8)
                            imagemCampo.style.visibility = "visible";
                        
                    }else if(matrizDoMapa[i][j] == 16 || matrizDoMapa[i][j] == 17 || matrizDoMapa[i][j] == 18){

                        auxPreencherImagensCriaturas("Dragon", i, j, nomeCampo, barraHpCampo, barraHpVaziaCampo, baseCampo, imagem1Campo);
                        imagem1Campo.src = "imagens/Dragon.png";
                        imagemCampo.src = imagemEfeito;
                        imagem1Campo.style.visibility = "visible";
                        if(matrizDoMapa[i][j] != 16)
                            imagemCampo.style.visibility = "visible";

                    }else if(matrizDoMapa[i][j] == 19 || matrizDoMapa[i][j] == 20 || matrizDoMapa[i][j] == 21){

                        auxPreencherImagensCriaturas("Mammoth", i, j, nomeCampo, barraHpCampo, barraHpVaziaCampo, baseCampo, imagem1Campo);
                        imagem1Campo.src = "imagens/Mammoth.png";
                        imagemCampo.src = imagemEfeito;
                        imagem1Campo.style.visibility = "visible";
                        if(matrizDoMapa[i][j] != 19)
                            imagemCampo.style.visibility = "visible";

                    }else if(matrizDoMapa[i][j] == 45 || matrizDoMapa[i][j] == 46 || matrizDoMapa[i][j] == 47){

                        auxPreencherImagensCriaturas("Spider", i, j, nomeCampo, barraHpCampo, barraHpVaziaCampo, baseCampo, imagem1Campo);
                        imagem1Campo.src = "imagens/Spider.png";
                        imagemCampo.src = imagemEfeito;
                        imagem1Campo.style.visibility = "visible";
                        if(matrizDoMapa[i][j] != 45)
                            imagemCampo.style.visibility = "visible";

                    }else if(matrizDoMapa[i][j] == 48 || matrizDoMapa[i][j] == 49 || matrizDoMapa[i][j] == 50){

                        auxPreencherImagensCriaturas("Orc Shaman", i, j, nomeCampo, barraHpCampo, barraHpVaziaCampo, baseCampo, imagem1Campo);
                        imagem1Campo.src = "imagens/OrcShaman.png";
                        imagemCampo.src = imagemEfeito;
                        imagem1Campo.style.visibility = "visible";
                        if(matrizDoMapa[i][j] != 48)
                            imagemCampo.style.visibility = "visible";

                    }else if(matrizDoMapa[i][j] == 4){
                        imagem1Campo.src = "imagens/imagemFundoBuraco.png";
                        imagem1Campo.alt = "buraco";
                        imagem1Campo.title = "buraco";
                        baseCampo.alt = "buraco";
                        baseCampo.title = "buraco";
                        imagem1Campo.style.visibility = "visible";
                    }else if(matrizDoMapa[i][j] == 5){
                        imagem1Campo.src = "imagens/imagemBuracoAberto.png";
                        imagem1Campo.alt = "buraco";
                        imagem1Campo.title = "buraco";
                        baseCampo.alt = "buraco";
                        baseCampo.title = "buraco";
                        imagem1Campo.style.visibility = "visible";
                    }else if(matrizDoMapa[i][j] == 6){
                        imagem1Campo.src = "imagens/imagemBuracoFechado.png";
                        imagem1Campo.alt = "buraco";
                        imagem1Campo.title = "buraco";
                        baseCampo.alt = "buraco";
                        baseCampo.title = "buraco";
                        imagem1Campo.style.visibility = "visible";
                    }else if(matrizDoMapa[i][j] == 7){
                        imagem1Campo.src = "imagens/Caixa.png";
                        imagem1Campo.alt = "caixa";
                        imagem1Campo.title = "caixa";
                        baseCampo.alt = "caixa";
                        baseCampo.title = "caixa";
                        imagem1Campo.style.visibility = "visible";
                    }

                }else if(matrizDoMapa[i][j] == 11){
                    nomeCampo.innerHTML = "NPC";
                    nomeCampo.style.color = 'white';
                    nomeCampo.style.visibility = "visible";
                    imagem1Campo.src = "imagens/imagemNpcDeDireitaRecortado.png";
                    imagem1Campo.alt = "npc";
                    imagem1Campo.title = "npc";
                    baseCampo.alt = "npc";
                    baseCampo.title = "npc";
                    imagem1Campo.style.visibility = "visible";
                }else if(matrizDoMapa[i][j] == 0){
                    baseCampo.alt = "piso";
                    baseCampo.title = "piso";
                }else if(matrizDoMapa[i][j] == 1){
                    imagem1Campo.src = "imagens/Arvore.png";
                    imagem1Campo.alt = "árvore";
                    imagem1Campo.title = "árvore";
                    baseCampo.alt = "árvore";
                    baseCampo.title = "árvore";
                    imagem1Campo.style.visibility = "visible";
                }else if(matrizDoMapa[i][j] == 2 || matrizDoMapa[i][j] == 3){
                    imagem1Campo.src = "imagens/imagemSacola.png";
                    imagem1Campo.alt = "sacola";
                    imagem1Campo.title = "sacola";
                    baseCampo.alt = "sacola";
                    baseCampo.title = "sacola";
                    imagem1Campo.style.visibility = "visible";
                }else if(matrizDoMapa[i][j] == 26){
                    baseCampo.alt = "água";
                    baseCampo.title = "água";
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
                    baseCampo.alt = "teto";
                    baseCampo.title = "teto";
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
                    baseCampo.alt = "parede";
                    baseCampo.title = "parede";
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
                    baseCampo.alt = "margem";
                    baseCampo.title = "margem";
                }else if(
                    matrizDoMapa[i][j] == 41 || 
                    matrizDoMapa[i][j] == 42 || 
                    matrizDoMapa[i][j] == 43 || 
                    matrizDoMapa[i][j] == 44 
                ){
                    baseCampo.alt = "teleport";
                    baseCampo.title = "teleport";
                    imagem1Campo.alt = "teleport";
                    imagem1Campo.title = "teleport";
                    imagem1Campo.src = "imagens/imagemTeleport.png";
                    imagem1Campo.style.visibility = "visible";
                }else if(
                    matrizDoMapa[i][j] == 52
                ){
                    baseCampo.alt = "jangada";
                    baseCampo.title = "jangada";
                }else if(
                    matrizDoMapa[i][j] == 53 || 
                    matrizDoMapa[i][j] == 54 
                ){
                    baseCampo.alt = "remo";
                    baseCampo.title = "remo";
                }else if(
                    matrizDoMapa[i][j] == 71 || 
                    matrizDoMapa[i][j] == 72 || 
                    matrizDoMapa[i][j] == 73 || 
                    matrizDoMapa[i][j] == 74 
                ){
                    baseCampo.alt = "porta";
                    baseCampo.title = "porta";
                }else if(
                    matrizDoMapa[i][j] == 51 
                ){
                    imagem1Campo.src = "imagens/imagemBot.png";
                    imagem1Campo.alt = "Bot";
                    imagem1Campo.title = "Bot";
                    baseCampo.alt = "Bot";
                    baseCampo.title = "Bot";
                    imagem1Campo.style.visibility = "visible";
                }else if(
                    matrizDoMapa[i][j] == 55 
                ){
                    imagem1Campo.src = "imagens/Sword.png";
                    imagem1Campo.alt = "Sword (Arm: 1)";
                    imagem1Campo.title = "Sword (Arm: 1)";
                    baseCampo.alt = "Sword (Arm: 1)";
                    baseCampo.title = "Sword (Arm: 1)";
                    imagem1Campo.style.visibility = "visible";
                }else if(
                    matrizDoMapa[i][j] == 56 
                ){
                    imagem1Campo.src = "imagens/Shield.png";
                    imagem1Campo.alt = "Shield (Def: 1)";
                    imagem1Campo.title = "Shield (Def: 1)";
                    baseCampo.alt = "Shield (Def: 1)";
                    baseCampo.title = "Shield (Def: 1)";
                    imagem1Campo.style.visibility = "visible";
                }else if(
                    matrizDoMapa[i][j] == 92 
                ){
                    baseCampo.alt = "tablete";
                    baseCampo.title = "tablete";
                    imagem1Campo.alt = "tablete";
                    imagem1Campo.title = "tablete";
                    imagem1Campo.src = "imagens/tablet.png";
                    imagem1Campo.style.visibility = "visible";
                }else{
                    barraHpCampo.style.width = 50;
                    if(mensagemDivCampo.innerHTML != ""){
                        setTimeout(function(){ mensagemDivCampo.innerHTML = ""; }, 5000);
                    }
                }
            }

            preencherImagens = function (direcao, linhaAtualizacao, colunaAtualizacao){
                var caminhoImagem = "";
                var posicaoLinhaInicio = (posicaoDoPersonagemNaMatriz[0]-(posicaoDoPersonagemNaTela[0]));
                var posicaoLinhaFim = (posicaoDoPersonagemNaMatriz[0]+(posicaoDoPersonagemNaTela[0] + 1));
                var posicaoColunaInicio = (posicaoDoPersonagemNaMatriz[1]-(posicaoDoPersonagemNaTela[1]));
                var posicaoColunaFim = (posicaoDoPersonagemNaMatriz[1]+(posicaoDoPersonagemNaTela[1] + 1));
                var posicaoLinhaTelaInicio = 0;
                var posicaoColunaTelaInicio = 0;
                var flagLinha = false;
                var flagColuna = false;


                if(direcao != null){
                    switch(direcao){
                        case 0:
                            posicaoLinhaInicio = (posicaoDoPersonagemNaMatriz[0]-(posicaoDoPersonagemNaTela[0]));
                            posicaoLinhaFim = (posicaoDoPersonagemNaMatriz[0]-(posicaoDoPersonagemNaTela[0]) + 1);
                            posicaoColunaInicio = (posicaoDoPersonagemNaMatriz[1]-(posicaoDoPersonagemNaTela[1]));
                            posicaoColunaFim = (posicaoDoPersonagemNaMatriz[1]+(posicaoDoPersonagemNaTela[1] + 1));

                            posicaoLinhaTelaInicio = 0;
                            posicaoColunaTelaInicio = 0;

                            flagLinha = true;
                            break;
                        case 1:
                            posicaoLinhaInicio = (posicaoDoPersonagemNaMatriz[0]-(posicaoDoPersonagemNaTela[0]));
                            posicaoLinhaFim = (posicaoDoPersonagemNaMatriz[0]+(posicaoDoPersonagemNaTela[0] + 1));
                            posicaoColunaInicio = (posicaoDoPersonagemNaMatriz[1]+(posicaoDoPersonagemNaTela[1]));
                            posicaoColunaFim = (posicaoDoPersonagemNaMatriz[1]+(posicaoDoPersonagemNaTela[1] + 1));

                            posicaoLinhaTelaInicio = 0;
                            posicaoColunaTelaInicio = (arrayColunasElementos.length - 1);

                            flagColuna = true;
                            break;
                        case 2:
                            posicaoLinhaInicio = (posicaoDoPersonagemNaMatriz[0]+(posicaoDoPersonagemNaTela[0]));
                            posicaoLinhaFim = (posicaoDoPersonagemNaMatriz[0]+(posicaoDoPersonagemNaTela[0] + 1));
                            posicaoColunaInicio = (posicaoDoPersonagemNaMatriz[1]-(posicaoDoPersonagemNaTela[1]));
                            posicaoColunaFim = (posicaoDoPersonagemNaMatriz[1]+(posicaoDoPersonagemNaTela[1] + 1));

                            posicaoLinhaTelaInicio = (arrayColunasTela[0].length - 1);
                            posicaoColunaTelaInicio = 0;

                            flagLinha = true;
                            break;
                        case 3:
                            posicaoLinhaInicio = (posicaoDoPersonagemNaMatriz[0]-(posicaoDoPersonagemNaTela[0]));
                            posicaoLinhaFim = (posicaoDoPersonagemNaMatriz[0]+(posicaoDoPersonagemNaTela[0]+1));
                            posicaoColunaInicio = (posicaoDoPersonagemNaMatriz[1]-(posicaoDoPersonagemNaTela[1]));
                            posicaoColunaFim = (posicaoDoPersonagemNaMatriz[1]-(posicaoDoPersonagemNaTela[1]) + 1);

                            posicaoLinhaTelaInicio = 0;
                            posicaoColunaTelaInicio = 0;

                            flagColuna = true;
                            break;
                    }
                }

                if(linhaAtualizacao != null && colunaAtualizacao != null){

                    posicaoLinhaInicio = (linhaAtualizacao);
                    posicaoLinhaFim = (linhaAtualizacao + 1);
                    posicaoColunaInicio = (colunaAtualizacao);
                    posicaoColunaFim = (colunaAtualizacao + 1);

                    posicaoLinhaTelaInicio = (posicaoDoPersonagemNaTela[0] + (linhaAtualizacao - posicaoDoPersonagemNaMatriz[0]));
                    posicaoColunaTelaInicio = (posicaoDoPersonagemNaTela[1] + (colunaAtualizacao - posicaoDoPersonagemNaMatriz[1]));

                    flagLinha = 
                    flagColuna = true;
                }
                
                /*run_ajax();*/

                for(var i = posicaoLinhaInicio, k = posicaoLinhaTelaInicio; i < posicaoLinhaFim; i++, k++){
                    for(var j = posicaoColunaInicio, l = posicaoColunaTelaInicio; j < posicaoColunaFim; j++, l++){

                        switch(matrizDoMapa[i][j]){
                            case 0:
                                caminhoImagem = "imagens/imagemCampo.png";
                                break;
                            case 1:
                                caminhoImagem = "imagens/imagemCampo.png"; //arvore
                                break;
                            case 2:
                                caminhoImagem = "imagens/imagemCampo.png"; //sacola
                                break;
                            case 3:
                                caminhoImagem = "imagens/imagemCampo.png"; //sacola
                                break;
                            case 4:
                                caminhoImagem = "imagens/imagemCampo.png";//buraco
                                break;
                            case 5:
                                caminhoImagem = "imagens/imagemCampo.png"; //buraco
                                break;
                            case 6:
                                caminhoImagem = "imagens/imagemCampo.png"; //buraco
                                break;
                            case 7:
                                caminhoImagem = "imagens/imagemCampo.png"; //caixa
                                break;
                            case 8:
                                caminhoImagem = "imagens/imagemCampo.png"; //snake
                                break;
                            case 9:
                                caminhoImagem = "imagens/imagemCampo.png"; //snake
                                break;
                            case 10:
                                caminhoImagem = "imagens/imagemCampo.png"; //snake
                                break;
                            case 11:
                                caminhoImagem = "imagens/imagemCampo.png"; //npc
                                break;
                            case 12:
                                caminhoImagem = "imagens/imagemCampo.png";
                                break;
                            case 13:
                                caminhoImagem = "imagens/imagemCampo.png";
                                break;
                            case 14:
                                caminhoImagem = "imagens/imagemCampo.png";
                                break;
                            case 15:
                                caminhoImagem = "imagens/imagemCampo.png";
                                break;
                            case 16:
                                caminhoImagem = "imagens/imagemCampo.png"; //dragon
                                break;
                            case 17:
                                caminhoImagem = "imagens/imagemCampo.png"; //dragon
                                break;
                            case 18:
                                caminhoImagem = "imagens/imagemCampo.png"; //dragon
                                break;
                            case 19:
                                caminhoImagem = "imagens/imagemCampo.png"; //mammoth
                                break;
                            case 20:
                                caminhoImagem = "imagens/imagemCampo.png"; //mammoth
                                break;
                            case 21:
                                caminhoImagem = "imagens/imagemCampo.png"; //mammoth
                                break;
                            case 22:
                                caminhoImagem = "imagens/imagemCampo.png";
                                break;
                            case 23:
                                caminhoImagem = "imagens/imagemCampo.png";
                                break;
                            case 24:
                                caminhoImagem = "imagens/imagemCampo.png";
                                break;
                            case 25:
                                caminhoImagem = "imagens/imagemCampo.png";
                                break;
                            case 26:
                                caminhoImagem = "imagens/imagemAgua.png";
                                break;
                            case 27:
                                caminhoImagem = "imagens/imagemTetoCaverna.png";
                                break;
                            case 28:
                                caminhoImagem = "imagens/imagemTetoCaverna.png"; //baixo
                                break;
                            case 29:
                                caminhoImagem = "imagens/imagemTetoCaverna.png"; //direita
                                break;
                            case 30:
                                caminhoImagem = "imagens/imagemTetoCavernaCima.png";
                                break;
                            case 31:
                                caminhoImagem = "imagens/imagemTetoCavernaEsquerda.png";
                                break;
                            case 32:
                                caminhoImagem = "imagens/imagemTetoCavernaCimaEsquerda.png";
                                break;
                            case 33:
                                caminhoImagem = "imagens/imagemAguaCimaEsquerda.png";
                                break;
                            case 34:
                                caminhoImagem = "imagens/imagemAguaCima.png";
                                break;
                            case 35:
                                caminhoImagem = "imagens/imagemAguaCimaDireita.png";
                                break;
                            case 36:
                                caminhoImagem = "imagens/imagemAguaDireita.png";
                                break;
                            case 37:
                                caminhoImagem = "imagens/imagemAguaBaixoDireita.png";
                                break;
                            case 38:
                                caminhoImagem = "imagens/imagemAguaBaixo.png";
                                break;
                            case 39:
                                caminhoImagem = "imagens/imagemAguaBaixoEsquerda.png";
                                break;
                            case 40:
                                caminhoImagem = "imagens/imagemAguaEsquerda.png";
                                break;
                            case 41:
                                caminhoImagem = "imagens/imagemCampo.png"; //teleport
                                break;
                            case 42:
                                caminhoImagem = "imagens/imagemCampo.png"; //teleport
                                break;
                            case 43:
                                caminhoImagem = "imagens/imagemCampo.png"; //teleport
                                break;
                            case 44:
                                caminhoImagem = "imagens/imagemCampo.png"; //teleport
                                break;
                            case 45:
                                caminhoImagem = "imagens/imagemCampo.png"; //spider
                                break;
                            case 46:
                                caminhoImagem = "imagens/imagemCampo.png"; //spider
                                break;
                            case 47:
                                caminhoImagem = "imagens/imagemCampo.png"; //spider
                                break;
                            case 48:
                                caminhoImagem = "imagens/imagemCampo.png"; //orcshaman
                                break;
                            case 49:
                                caminhoImagem = "imagens/imagemCampo.png"; //orcshaman
                                break;
                            case 50:
                                caminhoImagem = "imagens/imagemCampo.png"; //orcshaman
                                break;
                            case 51:
                                caminhoImagem = "imagens/imagemCampo.png"; //bot
                                break;
                            case 52:
                                caminhoImagem = "imagens/imagemJangada.png";
                                break;
                            case 53:
                                caminhoImagem = "imagens/imagemRemo.png";
                                break;
                            case 54:
                                caminhoImagem = "imagens/imagemRemo2.png";
                                break;
                            case 55:
                                caminhoImagem = "imagens/imagemCampo.png"; //sword
                                break;
                            case 56:
                                caminhoImagem = "imagens/imagemCampo.png"; //shield
                                break;
                            case 57:
                                caminhoImagem = "imagens/TetoCasa.png";
                                break;
                            case 58:
                                caminhoImagem = "imagens/TetoCasa.png";
                                break;
                            case 59:
                                caminhoImagem = "imagens/TetoCasa.png";
                                break;
                            case 60:
                                caminhoImagem = "imagens/TetoCasa.png";
                                break;
                            case 61:
                                caminhoImagem = "imagens/TetoCasa.png";
                                break;
                            case 62:
                                caminhoImagem = "imagens/TetoCasa.png";
                                break;
                            case 63:
                                caminhoImagem = "imagens/TetoCasa.png";
                                break;
                            case 64:
                                caminhoImagem = "imagens/TetoCasa.png";
                                break;
                            case 65:
                                caminhoImagem = "imagens/TetoCasa.png";
                                break;
                            case 66:
                                caminhoImagem = "imagens/CasaUpRight.png";
                                break;
                            case 67:
                                caminhoImagem = "imagens/CasaRight.png";
                                break;
                            case 68:
                                caminhoImagem = "imagens/CasaDownRight.png";
                                break;
                            case 69:
                                caminhoImagem = "imagens/CasaDown.png";
                                break;
                            case 70:
                                caminhoImagem = "imagens/CasaDownLeft.png";
                                break;
                            case 71:
                                caminhoImagem = "imagens/PortaUp.png";
                                break;
                            case 72:
                                caminhoImagem = "imagens/PortaDown.png";
                                break;
                            case 73:
                                caminhoImagem = "imagens/PortaOpenUp.png";
                                break;
                            case 74:
                                caminhoImagem = "imagens/PortaOpenDown.png";
                                break;
                            case 75:
                                caminhoImagem = "imagens/CasaIntoUpLeft.png";
                                break;
                            case 76:
                                caminhoImagem = "imagens/CasaIntoUp.png";
                                break;
                            case 77:
                                caminhoImagem = "imagens/CasaIntoUp.png";
                                break;
                            case 78:
                                caminhoImagem = "imagens/CasaIntoLeft.png";
                                break;
                            case 79:
                                caminhoImagem = "imagens/CasaIntoLeft.png";
                                break;
                            case 80:
                                caminhoImagem = "imagens/imagemAguaBaixoDireita2.png";
                                break;
                            case 81:
                                caminhoImagem = "imagens/imagemAguaCimaEsquerda2.png";
                                break;
                            case 82:
                                caminhoImagem = "imagens/imagemAguaCimaDireita2.png";
                                break;
                            case 83:
                                caminhoImagem = "imagens/imagemAguaBaixoEsquerda2.png";
                                break;
                            case 84:
                                caminhoImagem = "imagens/imagemCampo.png";
                                break;
                            case 85:
                                caminhoImagem = "imagens/imagemCampo.png";
                                break;
                            case 86:
                                caminhoImagem = "imagens/imagemCampo.png";
                                break;
                            case 87:
                                caminhoImagem = "imagens/imagemCampo.png";
                                break;
                            case 88:
                                caminhoImagem = "imagens/imagemCampo.png";
                                break;
                            case 89:
                                caminhoImagem = "imagens/imagemCampo.png";
                                break;
                            case 90:
                                caminhoImagem = "imagens/imagemCampo.png";
                                break;
                            case 91:
                                caminhoImagem = "imagens/imagemCampo.png";
                                break;
                            case 92:
                                caminhoImagem = "imagens/imagemCampo.png"; //tablete
                                break;
                        }

                        if(!flagLinha && !flagColuna)
                            auxPreencherImagens(i, j, caminhoImagem, k, l);
                        else if(flagLinha && !flagColuna)
                            auxPreencherImagens(posicaoLinhaInicio, j, caminhoImagem, posicaoLinhaTelaInicio, l);
                        else if(!flagLinha && flagColuna)
                            auxPreencherImagens(i, posicaoColunaInicio, caminhoImagem, k, posicaoColunaTelaInicio);
                        else if(flagLinha && flagColuna)
                            auxPreencherImagens(posicaoLinhaInicio, posicaoColunaInicio, caminhoImagem, posicaoLinhaTelaInicio, posicaoColunaTelaInicio);

                    }
                }
            }

            cima = function (){
                var quadrosDeAnimacaoInterno = quadrosDeAnimacao;
                var esperaPorQuadroInterno = 0;

                flagMoverPersonagem = false;

                while(quadrosDeAnimacaoInterno > 0){

                    setTimeout(function(){ moveMap( (mover/quadrosDeAnimacao), 0 ); }, esperaPorQuadroInterno);

                    quadrosDeAnimacaoInterno--;
                    esperaPorQuadroInterno = esperaPorQuadroInterno + esperaPorQuadro;
                }
                
                setTimeout(function(){
                    //document.getElementById('map').style.visibility = "hidden"; 

                    for(var i = 0; i < arrayColunasTela.length; i++){
                        arrayColunasTela[i][(arrayLinhasTela.length - 1)].style.top = parseInt(arrayColunasTela[i][0].style.top.split('p')[0]) - 60;
                        arrayColunasTela[i].unshift(arrayColunasTela[i].pop());
                    }

                    posicaoDoPersonagemNaMatriz[0] = posicaoDoPersonagemNaMatriz[0] - 1;

                    flagMoverPersonagem = true;

                    verificacaoDistanciamento();

                    desativarEfeitos();

                    if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]] == 7){nivelDeSolo++; document.getElementById('personagem1').style.top = parseInt(document.getElementById('personagem1').style.top.split('p')[0]) - 10; document.getElementById('personagem1').style.left = parseInt(document.getElementById('personagem1').style.left.split('p')[0]) - 10;} if(verificacaoIdBaixo(7)){nivelDeSolo--; document.getElementById('personagem1').style.top = parseInt(document.getElementById('personagem1').style.top.split('p')[0]) + 10; document.getElementById('personagem1').style.left = parseInt(document.getElementById('personagem1').style.left.split('p')[0]) + 10;}
                    
                    preencherImagens(0);

                    if(verificacaoIdDireita(74)){
                        revelarCasa(3,1);
                    }else if(verificacaoIdEsquerda(74)){
                        revelarCasa(3,3);
                    }

                    //document.getElementById('map').style.visibility = "visible"; 
                }, esperaPorQuadroInterno);
            }

            direita = function (){
                var quadrosDeAnimacaoInterno = quadrosDeAnimacao;
                var esperaPorQuadroInterno = 0;

                flagMoverPersonagem = false;

                while(quadrosDeAnimacaoInterno > 0){

                    setTimeout(function(){ moveMap( (mover/quadrosDeAnimacao), 1 ); }, esperaPorQuadroInterno);

                    quadrosDeAnimacaoInterno--;
                    esperaPorQuadroInterno = esperaPorQuadroInterno + esperaPorQuadro;
                }

                setTimeout(function(){ 
                    //document.getElementById('map').style.visibility = "hidden"; 

                    arrayColunasTela[0][0].parentNode.style.left = parseInt(arrayColunasTela[(arrayColunasTela.length - 1)][0].parentNode.style.left.split('p')[0]) + 60;
                    arrayColunasTela.push(arrayColunasTela.shift());

                    posicaoDoPersonagemNaMatriz[1] = posicaoDoPersonagemNaMatriz[1] + 1;

                    flagMoverPersonagem = true;

                    verificacaoDistanciamento();

                    desativarEfeitos();

                    if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]] == 7){nivelDeSolo++; document.getElementById('personagem1').style.top = parseInt(document.getElementById('personagem1').style.top.split('p')[0]) - 10; document.getElementById('personagem1').style.left = parseInt(document.getElementById('personagem1').style.left.split('p')[0]) - 10;} if(verificacaoIdEsquerda(7)){nivelDeSolo--; document.getElementById('personagem1').style.top = parseInt(document.getElementById('personagem1').style.top.split('p')[0]) + 10; document.getElementById('personagem1').style.left = parseInt(document.getElementById('personagem1').style.left.split('p')[0]) + 10;}
                    
                    preencherImagens(1); 

                    if(verificacaoIdDireita(74)){
                        revelarCasa(3,1);
                    }

                    //document.getElementById('map').style.visibility = "visible"; 
                }, esperaPorQuadroInterno);
            }

            baixo = function (){
                var quadrosDeAnimacaoInterno = quadrosDeAnimacao;
                var esperaPorQuadroInterno = 0;

                flagMoverPersonagem = false;

                while(quadrosDeAnimacaoInterno > 0){

                    setTimeout(function(){ moveMap( (mover/quadrosDeAnimacao), 2 ); }, esperaPorQuadroInterno);

                    quadrosDeAnimacaoInterno--;
                    esperaPorQuadroInterno = esperaPorQuadroInterno + esperaPorQuadro;
                }

                setTimeout(function(){ 
                    //document.getElementById('map').style.visibility = "hidden"; 

                    for(var i = 0; i < arrayColunasTela.length; i++){
                        arrayColunasTela[i][0].style.top = parseInt(arrayColunasTela[i][(arrayLinhasTela.length - 1)].style.top.split('p')[0]) + 60;
                        arrayColunasTela[i].push(arrayColunasTela[i].shift());
                    }

                    posicaoDoPersonagemNaMatriz[0] = posicaoDoPersonagemNaMatriz[0] + 1;

                    flagMoverPersonagem = true;

                    verificacaoDistanciamento();

                    desativarEfeitos();

                    if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]] == 7){nivelDeSolo++; document.getElementById('personagem1').style.top = parseInt(document.getElementById('personagem1').style.top.split('p')[0]) - 10; document.getElementById('personagem1').style.left = parseInt(document.getElementById('personagem1').style.left.split('p')[0]) - 10;} if(verificacaoIdCima(7)){nivelDeSolo--; document.getElementById('personagem1').style.top = parseInt(document.getElementById('personagem1').style.top.split('p')[0]) + 10; document.getElementById('personagem1').style.left = parseInt(document.getElementById('personagem1').style.left.split('p')[0]) + 10;}

                    preencherImagens(2); 

                    if(verificacaoIdDireita(74)){
                        revelarCasa(3,1);
                    }else if(verificacaoIdEsquerda(74)){
                        revelarCasa(3,3);
                    }

                    //document.getElementById('map').style.visibility = "visible"; 
                }, esperaPorQuadroInterno);
            }

            esquerda = function (){
                var quadrosDeAnimacaoInterno = quadrosDeAnimacao;
                var esperaPorQuadroInterno = 0;

                flagMoverPersonagem = false;

                while(quadrosDeAnimacaoInterno > 0){

                    setTimeout(function(){ moveMap( (mover/quadrosDeAnimacao), 3 ); }, esperaPorQuadroInterno);

                    quadrosDeAnimacaoInterno--;
                    esperaPorQuadroInterno = esperaPorQuadroInterno + esperaPorQuadro;
                }

                setTimeout(function(){ 
                    //document.getElementById('map').style.visibility = "hidden"; 

                    arrayColunasTela[(arrayColunasTela.length - 1)][0].parentNode.style.left = parseInt(arrayColunasTela[0][0].parentNode.style.left.split('p')[0]) - 60;
                    arrayColunasTela.unshift(arrayColunasTela.pop());

                    posicaoDoPersonagemNaMatriz[1] = posicaoDoPersonagemNaMatriz[1] - 1;

                    flagMoverPersonagem = true;

                    verificacaoDistanciamento();

                    desativarEfeitos();

                    if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]] == 7){nivelDeSolo++; document.getElementById('personagem1').style.top = parseInt(document.getElementById('personagem1').style.top.split('p')[0]) - 10; document.getElementById('personagem1').style.left = parseInt(document.getElementById('personagem1').style.left.split('p')[0]) - 10;} if(verificacaoIdDireita(7)){nivelDeSolo--; document.getElementById('personagem1').style.top = parseInt(document.getElementById('personagem1').style.top.split('p')[0]) + 10; document.getElementById('personagem1').style.left = parseInt(document.getElementById('personagem1').style.left.split('p')[0]) + 10;}

                    preencherImagens(3); 

                    if(verificacaoIdEsquerda(74)){
                        revelarCasa(3,3);
                    }

                    //document.getElementById('map').style.visibility = "visible"; 
                }, esperaPorQuadroInterno);
            }
            
            ataqueCriatura = function (distanciaDoPersonagemLinha, distanciaDoPersonagemColuna, hitDecrescimo, hitAcrescimo, morto, nomeCriatura){
                
                let ataqueLinha = (posicaoDoPersonagemNaTela[0] + distanciaDoPersonagemLinha);
                let ataqueColuna = (posicaoDoPersonagemNaTela[1] + distanciaDoPersonagemColuna);
                let hit = getRandomIntInclusive(Math.ceil(lvlatual*(equipamentos[1]+1)),Math.floor(lvlatual*2*(equipamentos[1]+1))); 
                let divMensagem = arrayColunasTela[ataqueColuna][ataqueLinha].children[7];
                
                if(posicaoDoPersonagemNaMatriz[0] < (linhaInicioTerreo + 29) ){
                    divMensagem.style.color = 'red';
                    divMensagem.style.textAlign = 'center';
                    divMensagem.style.width = 50;
                }else{
                    divMensagem.style.color = 'SpringGreen';
                    divMensagem.style.textAlign = 'center';
                    divMensagem.style.width = 50;
                }
                
                if( 
                    posicaoDoPersonagemNaMatriz[0] < (linhaInicioTerreo + 29) &&
                    (matrizCriaturasVida[posicaoDoPersonagemNaMatriz[0] + distanciaDoPersonagemLinha][posicaoDoPersonagemNaMatriz[1] + distanciaDoPersonagemColuna] - ((hit*hitDecrescimo) | 0)) > 0 )
                { 
                    matrizCriaturasVida[posicaoDoPersonagemNaMatriz[0] + distanciaDoPersonagemLinha][posicaoDoPersonagemNaMatriz[1] + distanciaDoPersonagemColuna] = matrizCriaturasVida[posicaoDoPersonagemNaMatriz[0] + distanciaDoPersonagemLinha][posicaoDoPersonagemNaMatriz[1] + distanciaDoPersonagemColuna] - ((hit*hitDecrescimo) | 0); 

                    divMensagem.innerHTML = hit; 
                    mensagensDoChatServerLog += "\n\nUm(a) " + nomeCriatura + " perdeu " + hit + " pontos de vida devido ao seu ataque."; 
                    setTimeout(function(){ 
                        divMensagem.innerHTML = ""; 
                    }, 500);
                }else if( 
                    posicaoDoPersonagemNaMatriz[0] >= (linhaInicioTerreo + 29) &&
                    (matrizCriaturasVida[posicaoDoPersonagemNaMatriz[0] + distanciaDoPersonagemLinha][posicaoDoPersonagemNaMatriz[1] + distanciaDoPersonagemColuna] + ((hit*hitDecrescimo) | 0)) < 50 )
                { 
                    matrizCriaturasVida[posicaoDoPersonagemNaMatriz[0] + distanciaDoPersonagemLinha][posicaoDoPersonagemNaMatriz[1] + distanciaDoPersonagemColuna] = matrizCriaturasVida[posicaoDoPersonagemNaMatriz[0] + distanciaDoPersonagemLinha][posicaoDoPersonagemNaMatriz[1] + distanciaDoPersonagemColuna] + ((hit*hitDecrescimo) | 0); 

                    divMensagem.innerHTML = hit; 
                    mensagensDoChatServerLog += "\n\nUm(a) " + nomeCriatura + " ganhou " + hit + " pontos de vida devido ao seu carinho."; 
                    setTimeout(function(){ 
                        divMensagem.innerHTML = ""; 
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

                    divMensagem.innerHTML = (matrizCriaturasVida[posicaoDoPersonagemNaMatriz[0] + distanciaDoPersonagemLinha][posicaoDoPersonagemNaMatriz[1] + distanciaDoPersonagemColuna] * hitAcrescimo) + 1;
                    setTimeout(function(){ 
                        divMensagem.innerHTML = ""; 
                    }, 500);
                    
                    if(posicaoDoPersonagemNaMatriz[0] < (linhaInicioTerreo + 29) ){
                        mensagensDoChatServerLog += "\n\nUm(a) " + nomeCriatura + " perdeu " + ((matrizCriaturasVida[posicaoDoPersonagemNaMatriz[0] + distanciaDoPersonagemLinha][posicaoDoPersonagemNaMatriz[1] + distanciaDoPersonagemColuna] * hitAcrescimo) + 1) + " pontos de vida devido ao seu ataque.";
                        matrizCriaturasVida[posicaoDoPersonagemNaMatriz[0] + distanciaDoPersonagemLinha][posicaoDoPersonagemNaMatriz[1] + distanciaDoPersonagemColuna] = 0; 
                    }else{
                        mensagensDoChatServerLog += "\n\nUm(a) " + nomeCriatura + " ganhou " + ((matrizCriaturasVida[posicaoDoPersonagemNaMatriz[0] + distanciaDoPersonagemLinha][posicaoDoPersonagemNaMatriz[1] + distanciaDoPersonagemColuna] * hitAcrescimo) + 1) + " pontos de vida devido ao seu carinho.";
                        matrizCriaturasVida[posicaoDoPersonagemNaMatriz[0] + distanciaDoPersonagemLinha][posicaoDoPersonagemNaMatriz[1] + distanciaDoPersonagemColuna] = 50; 
                    }

                    mensagemGanhouExperiencia(xp);
                    matrizDoMapa[posicaoDoPersonagemNaMatriz[0] + distanciaDoPersonagemLinha][posicaoDoPersonagemNaMatriz[1] + distanciaDoPersonagemColuna] = morto; 
                    nivel += xp; 

                    calculaLevel();

                    auxPreencherImagens((posicaoDoPersonagemNaMatriz[0] + distanciaDoPersonagemLinha), (posicaoDoPersonagemNaMatriz[1] + distanciaDoPersonagemColuna), "imagens/imagemCampo.png", ataqueLinha, ataqueColuna); 

                    if(nomeCriaturaTask == nomeCriatura && taskvalor < 100){
                        taskvalor++; 
                        document.getElementById('taskvalor').innerHTML = taskvalor + "/100";
                    }
                }

                arrayColunasTela[ataqueColuna][ataqueLinha].children[6].style.width = matrizCriaturasVida[posicaoDoPersonagemNaMatriz[0] + distanciaDoPersonagemLinha][posicaoDoPersonagemNaMatriz[1] + distanciaDoPersonagemColuna]; 

                corlifecampo(ataqueLinha, ataqueColuna);
            }

            ataqueCampo = function (distanciaDoPersonagemLinha, distanciaDoPersonagemColuna){
                if(
                    matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+distanciaDoPersonagemLinha][posicaoDoPersonagemNaMatriz[1]+distanciaDoPersonagemColuna] == 8 ||
                    matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+distanciaDoPersonagemLinha][posicaoDoPersonagemNaMatriz[1]+distanciaDoPersonagemColuna] == 9)
                { 
                    ataqueCriatura(distanciaDoPersonagemLinha, distanciaDoPersonagemColuna, 1, 1, 10, "Snake"); 
                }else if(
                    matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+distanciaDoPersonagemLinha][posicaoDoPersonagemNaMatriz[1]+distanciaDoPersonagemColuna] == 16 || 
                    matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+distanciaDoPersonagemLinha][posicaoDoPersonagemNaMatriz[1]+distanciaDoPersonagemColuna] == 17)
                { 
                    ataqueCriatura(distanciaDoPersonagemLinha, distanciaDoPersonagemColuna, 0.5, 2, 18, "Dragon"); 
                }else if(
                    matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+distanciaDoPersonagemLinha][posicaoDoPersonagemNaMatriz[1]+distanciaDoPersonagemColuna] == 19 || 
                    matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+distanciaDoPersonagemLinha][posicaoDoPersonagemNaMatriz[1]+distanciaDoPersonagemColuna] == 20)
                { 
                    ataqueCriatura(distanciaDoPersonagemLinha, distanciaDoPersonagemColuna, 0.25, 4, 21, "Mammoth"); 
                }else if(
                    matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+distanciaDoPersonagemLinha][posicaoDoPersonagemNaMatriz[1]+distanciaDoPersonagemColuna] == 45 || 
                    matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+distanciaDoPersonagemLinha][posicaoDoPersonagemNaMatriz[1]+distanciaDoPersonagemColuna] == 46)
                { 
                    ataqueCriatura(distanciaDoPersonagemLinha, distanciaDoPersonagemColuna, 0.13, 8, 47, "Spider"); 
                }else if(
                    matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+distanciaDoPersonagemLinha][posicaoDoPersonagemNaMatriz[1]+distanciaDoPersonagemColuna] == 48 || 
                    matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+distanciaDoPersonagemLinha][posicaoDoPersonagemNaMatriz[1]+distanciaDoPersonagemColuna] == 49)
                { 
                    ataqueCriatura(distanciaDoPersonagemLinha, distanciaDoPersonagemColuna, 0.01, 16, 50, "Orc Shaman"); 
                }
            }

            entradaPvp = function (linha, coluna){
                return (linha == (linhaInicioTerreo+1) && coluna == (colunaInicio + 17)) || (linha == (linhaInicioTerreo+2) && coluna == (colunaInicio + 17));
            }

            saidaPvp = function (linha, coluna){
                return (linha == linhaInicioPvp) || (linha == (linhaInicioPvp + 3));
            }

            posicaoInicial = function (linha, coluna){
                return (linha == (linhaInicioSubsolo4 + 1)) && (coluna == (colunaInicio + 3));
            }

            entrarNoPvp = function (){
                if(!matrizDoMapa[linhaInicioPvp+2][(colunaInicio + 5)]){
                    posicaoDoPersonagemNaMatriz[0] = (linhaInicioPvp + 2); 
                    posicaoDoPersonagemNaMatriz[1] = (colunaInicio + 5);
                }else if(!matrizDoMapa[linhaInicioPvp+1][(colunaInicio + 5)]){
                    posicaoDoPersonagemNaMatriz[0] = (linhaInicioPvp + 1); 
                    posicaoDoPersonagemNaMatriz[1] = (colunaInicio + 5);
                }else if(!matrizDoMapa[linhaInicioPvp+2][(colunaInicio + 1)]){
                    posicaoDoPersonagemNaMatriz[0] = (linhaInicioPvp + 2); 
                    posicaoDoPersonagemNaMatriz[1] = (colunaInicio + 1);
                }else if(!matrizDoMapa[linhaInicioPvp+1][(colunaInicio + 1)]){
                    posicaoDoPersonagemNaMatriz[0] = (linhaInicioPvp + 1); 
                    posicaoDoPersonagemNaMatriz[1] = (colunaInicio + 1);
                }else if(!matrizDoMapa[linhaInicioPvp+2][(colunaInicio + 9)]){
                    posicaoDoPersonagemNaMatriz[0] = (linhaInicioPvp + 2); 
                    posicaoDoPersonagemNaMatriz[1] = (colunaInicio + 9);
                }else if(!matrizDoMapa[linhaInicioPvp+1][(colunaInicio + 9)]){
                    posicaoDoPersonagemNaMatriz[0] = (linhaInicioPvp + 1); 
                    posicaoDoPersonagemNaMatriz[1] = (colunaInicio + 9);
                }else{
                    dataDiv1 = new Date();
                    dataDiv1.setMilliseconds(dataDiv1.getMilliseconds() + 10000);
                    document.getElementById('mensagemDiv1').style.color = "white";
                    document.getElementById('mensagemDiv1').innerHTML = '[Pvp Lotado Aguarde...]';
                }
            }

            setAndar = function(){
                if(posicaoDoPersonagemNaMatriz[0] > linhaInicioSubsolo4 && posicaoDoPersonagemNaMatriz[0] < linhaInicioSubsolo3){
                    nivelDeAndar = -4;
                }else if(posicaoDoPersonagemNaMatriz[0] > linhaInicioSubsolo3 && posicaoDoPersonagemNaMatriz[0] < linhaInicioSubsolo2){
                    nivelDeAndar = -3;
                }else if(posicaoDoPersonagemNaMatriz[0] > linhaInicioSubsolo2 && posicaoDoPersonagemNaMatriz[0] < linhaInicioSubsolo1){
                    nivelDeAndar = -2;
                }else if(posicaoDoPersonagemNaMatriz[0] > linhaInicioSubsolo1 && posicaoDoPersonagemNaMatriz[0] < linhaInicioTerreo){
                    nivelDeAndar = -1;
                }else if(posicaoDoPersonagemNaMatriz[0] > linhaInicioTerreo){
                    nivelDeAndar = 0;
                }
            }

            usarCampo = function(linha, coluna, campo, x, y){

                switch(campo){

                    case 4:
                        nivelDeAndar++;
                        switch(nivelDeAndar){
                            case -4:
                                break;
                            case -3:
                                linha = linha - linhaInicioSubsolo4;
                                posicaoDoPersonagemNaMatriz[0] = (linhaInicioSubsolo3 + linha - 1); 
                                posicaoDoPersonagemNaMatriz[1] = coluna; 

                                break;
                            case -2:
                                linha = linha - linhaInicioSubsolo3;
                                posicaoDoPersonagemNaMatriz[0] = (linhaInicioSubsolo2 + linha - 1); 
                                posicaoDoPersonagemNaMatriz[1] = coluna; 

                                break;
                            case -1:
                                linha = linha - linhaInicioSubsolo2;
                                posicaoDoPersonagemNaMatriz[0] = (linhaInicioSubsolo1 + linha - 1); 
                                posicaoDoPersonagemNaMatriz[1] = coluna; 

                                break;
                            case 0:
                                linha = linha - linhaInicioSubsolo1;
                                posicaoDoPersonagemNaMatriz[0] = (linhaInicioTerreo + linha - 1); 
                                posicaoDoPersonagemNaMatriz[1] = coluna; 

                                break;
                        }

                        break;

                    case 5:
                        nivelDeAndar--;
                        switch(nivelDeAndar){
                            case -4:
                                linha = linha - linhaInicioSubsolo3;
                                posicaoDoPersonagemNaMatriz[0] = (linhaInicioSubsolo4 + linha + x); 
                                posicaoDoPersonagemNaMatriz[1] = coluna + y; 

                                break;
                            case -3:
                                linha = linha - linhaInicioSubsolo2;
                                posicaoDoPersonagemNaMatriz[0] = (linhaInicioSubsolo3 + linha + x); 
                                posicaoDoPersonagemNaMatriz[1] = coluna + y; 

                                break;
                            case -2:
                                linha = linha - linhaInicioSubsolo1;
                                posicaoDoPersonagemNaMatriz[0] = (linhaInicioSubsolo2 + linha + x); 
                                posicaoDoPersonagemNaMatriz[1] = coluna + y; 

                                break;
                            case -1:
                                linha = linha - linhaInicioTerreo;
                                posicaoDoPersonagemNaMatriz[0] = (linhaInicioSubsolo1 + linha + x); 
                                posicaoDoPersonagemNaMatriz[1] = coluna + y; 

                                break;
                            case 0:
                                break;
                        }

                        break;

                    case 6:
                        nivelDeAndar--;
                        switch(nivelDeAndar){
                            case -4:
                                linha = linha - linhaInicioSubsolo3;
                                posicaoDoPersonagemNaMatriz[0] = (linhaInicioSubsolo4 + linha); 
                                posicaoDoPersonagemNaMatriz[1] = coluna; 

                                break;
                            case -3:
                                linha = linha - linhaInicioSubsolo2;
                                posicaoDoPersonagemNaMatriz[0] = (linhaInicioSubsolo3 + linha); 
                                posicaoDoPersonagemNaMatriz[1] = coluna; 

                                break;
                            case -2:
                                linha = linha - linhaInicioSubsolo1;
                                posicaoDoPersonagemNaMatriz[0] = (linhaInicioSubsolo2 + linha); 
                                posicaoDoPersonagemNaMatriz[1] = coluna; 

                                break;
                            case -1:
                                linha = linha - linhaInicioTerreo;
                                posicaoDoPersonagemNaMatriz[0] = (linhaInicioSubsolo1 + linha); 
                                posicaoDoPersonagemNaMatriz[1] = coluna; 

                                break;
                            case 0:
                                break;
                        }

                        break;

                }

                preencherImagens();
            }

            usarTeleporte = function (linha, coluna, direcao){
                if(entradaPvp(linha, coluna)){
                    nivelDeAndar = 0;
                    entrarNoPvp();
                }else if(saidaPvp(linha, coluna)){
                    nivelDeAndar = 0;
                    posicaoDoPersonagemNaMatriz[0] = (linhaInicioTerreo+2); 
                    posicaoDoPersonagemNaMatriz[1] = (colunaInicio + 16); 
                }else if(posicaoInicial(linha, coluna)){
                    nivelDeAndar = 0;
                    posicaoDoPersonagemNaMatriz[0] = (linhaInicioTerreo+32); 
                    posicaoDoPersonagemNaMatriz[1] = (colunaInicio + 39); 
                    jangadaPosicaoInicial();
                }else if((linha == (linhaInicioSubsolo4 + 1)) && (coluna == (colunaInicio + 8))){
                    nivelDeAndar = 0;
                    posicaoDoPersonagemNaMatriz[0] = (linhaInicioTerreo + 1); 
                    posicaoDoPersonagemNaMatriz[1] = (colunaInicio + 8); 
                }
                preencherImagens();
            }

            moverCima = function (){
                if((posicaoDoPersonagemNaMatriz[0] < linhaInicioPvp || saidaPvp(posicaoDoPersonagemNaMatriz[0]-1, posicaoDoPersonagemNaMatriz[1])) && verificarJogoHabilitado()){if(verificarPosicaoValida(-1, 0)){ cima(); }else if(verificacaoIdCima(2)){recompensaSacola(-1,0);}else if(verificacaoIdCima(3)){document.getElementById('fala1').src = 'imagens/imagemFalaItemVazio.png'; setTimeout(function(){ document.getElementById('fala1').src = 'imagens/imagemFalaVazia.png';}, 1000);}else if(verificacaoIdCima(5)){ usarCampo(posicaoDoPersonagemNaMatriz[0], posicaoDoPersonagemNaMatriz[1], 5, -1, 0); }else if(verificacaoIdTeleporte(0)){ usarTeleporte(posicaoDoPersonagemNaMatriz[0]-1, posicaoDoPersonagemNaMatriz[1], 0); }else{ ataqueCampo(-1, 0); } direcaoDoPersonagem = 0; }
            }

            moverDireita = function (){
                if((posicaoDoPersonagemNaMatriz[0] < linhaInicioPvp || saidaPvp(posicaoDoPersonagemNaMatriz[0], posicaoDoPersonagemNaMatriz[1]+1)) && verificarJogoHabilitado()){if(verificarPosicaoValida(0, 1)){ direita(); }else if(verificacaoIdDireita(2)){recompensaSacola(0,1);}else if(verificacaoIdDireita(3)){document.getElementById('fala1').src = 'imagens/imagemFalaItemVazio.png'; setTimeout(function(){ document.getElementById('fala1').src = 'imagens/imagemFalaVazia.png';}, 1000);}else if(verificacaoIdDireita(5)){ usarCampo(posicaoDoPersonagemNaMatriz[0], posicaoDoPersonagemNaMatriz[1], 5, 0, 1); }else if(verificacaoIdTeleporte(1)){ usarTeleporte(posicaoDoPersonagemNaMatriz[0], posicaoDoPersonagemNaMatriz[1]+1, 1); }else if(verificacaoIdDireita(54)){moverJangada(0); preencherImagens();}else if(verificacaoIdPorta(1)){ moverPorta(3,1); }else{ ataqueCampo(0, 1); } direcaoDoPersonagem = 1; }
            }

            moverBaixo = function (){
                if((posicaoDoPersonagemNaMatriz[0] < linhaInicioPvp || saidaPvp(posicaoDoPersonagemNaMatriz[0]+1, posicaoDoPersonagemNaMatriz[1])) && verificarJogoHabilitado()){if(verificarPosicaoValida(1, 0)){ baixo(); }else if(verificacaoIdBaixo(2)){recompensaSacola(1,0);}else if(verificacaoIdBaixo(3)){document.getElementById('fala1').src = 'imagens/imagemFalaItemVazio.png'; setTimeout(function(){ document.getElementById('fala1').src = 'imagens/imagemFalaVazia.png';}, 1000);}else if(verificacaoIdBaixo(5)){ usarCampo(posicaoDoPersonagemNaMatriz[0], posicaoDoPersonagemNaMatriz[1], 5, 1, 0); }else if(verificacaoIdTeleporte(2)){ usarTeleporte(posicaoDoPersonagemNaMatriz[0]+1, posicaoDoPersonagemNaMatriz[1], 2); }else{ ataqueCampo(1, 0); } direcaoDoPersonagem = 2; }
            }

            moverEsquerda = function (){
                if((posicaoDoPersonagemNaMatriz[0] < linhaInicioPvp || saidaPvp(posicaoDoPersonagemNaMatriz[0], posicaoDoPersonagemNaMatriz[1]-1)) && verificarJogoHabilitado()){if(verificarPosicaoValida(0, -1)){ esquerda(); }else if(verificacaoIdEsquerda(2)){recompensaSacola(0,-1);}else if(verificacaoIdEsquerda(3)){document.getElementById('fala1').src = 'imagens/imagemFalaItemVazio.png'; setTimeout(function(){ document.getElementById('fala1').src = 'imagens/imagemFalaVazia.png';}, 1000);}else if(verificacaoIdEsquerda(5)){ usarCampo(posicaoDoPersonagemNaMatriz[0], posicaoDoPersonagemNaMatriz[1], 5, 0, -1); }else if(verificacaoIdTeleporte(3)){ usarTeleporte(posicaoDoPersonagemNaMatriz[0], posicaoDoPersonagemNaMatriz[1]-1, 3); }else if(verificacaoIdEsquerda(53)){moverJangada(2); preencherImagens();}else if(verificacaoIdPorta(3)){ moverPorta(3,3); }else{ ataqueCampo(0, -1); } direcaoDoPersonagem = 3; }
            }

funcMoverPersonagem = function() {
    setInterval(
            function (){

                if(dataMove > new Date()){
                    return;
                }

                let velocidade;

                if(lvlatual < 50)
                    velocidade =  200;
                else if(lvlatual < 100)
                    velocidade =  190;
                else if(lvlatual < 150)
                    velocidade =  180;
                else if(lvlatual < 200)
                    velocidade =  170;
                else if(lvlatual < 250)
                    velocidade =  160;
                else if(lvlatual < 300)
                    velocidade =  150;
                else if(lvlatual < 350)
                    velocidade =  140;
                else if(lvlatual < 400)
                    velocidade =  130;
                else if(lvlatual < 450)
                    velocidade =  120;
                else if(lvlatual < 500)
                    velocidade =  110;
                else if(lvlatual < 550)
                    velocidade =  100;
                else if(lvlatual < 600)
                    velocidade =  90;
                else if(lvlatual < 650)
                    velocidade =  80;
                else if(lvlatual < 700)
                    velocidade =  70;
                else if(lvlatual < 750)
                    velocidade =  60;
                else if(lvlatual < 800)
                    velocidade =  50;
                else if(lvlatual < 850)
                    velocidade =  40;
                else if(lvlatual < 900)
                    velocidade =  30;
                else if(lvlatual < 950)
                    velocidade =  20;
                else
                    velocidade =  10;

                dataMove = new Date();
                dataMove.setMilliseconds(dataMove.getMilliseconds() + velocidade);

                if(
                    verificarJogoHabilitado() &&
                    flagMoverPersonagem 
                ){
                    if(moverPersonagem[0] != 0 || moverPersonagem[1] != 0){
                        datainicioinatividade = new Date();
                        if(moverPersonagem[1] < 0 && verificarPosicaoValida(0, -1)){
                            if(verificacaoIdEsquerda(74)){
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
                            moverPersonagem[1]++;
                        }else if(moverPersonagem[0] < 0 && verificarPosicaoValida(-1, 0)){
                            if(verificacaoIdEsquerda(74)){
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
                            moverPersonagem[0]++;
                        }else if(moverPersonagem[1] > 0 && verificarPosicaoValida(0, 1)){
                            if(verificacaoIdEsquerda(74)){
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
                            moverPersonagem[1]--;
                        }else if(moverPersonagem[0] > 0 && verificarPosicaoValida(1, 0)){
                            if(verificacaoIdEsquerda(74)){
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
                            moverPersonagem[0]--;
                        }else if(
                            verificacaoIdEsquerda(74) && 
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
                            verificacaoDistanciamento();
                            preencherImagens();
                        }else if(
                            verificacaoIdDireita(74) && 
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
                            verificacaoDistanciamento();
                            preencherImagens();
                        }else{
                            if(moverPersonagem[0] == -1 && moverPersonagem[1] == 0){
                                moverCima();
                                corlifecampo((posicaoDoPersonagemNaTela[0] + moverPersonagem[0]), (posicaoDoPersonagemNaTela[1] + moverPersonagem[1]));
                                verificacaoAproximacaoNPC(moverPersonagem[0], moverPersonagem[1]);
                                obterEquipamento(moverPersonagem[0], moverPersonagem[1]);
                            }
                            if(moverPersonagem[0] == 0 && moverPersonagem[1] == 1){
                                moverDireita();
                                corlifecampo((posicaoDoPersonagemNaTela[0] + moverPersonagem[0]), (posicaoDoPersonagemNaTela[1] + moverPersonagem[1]));
                                verificacaoAproximacaoNPC(moverPersonagem[0], moverPersonagem[1]);
                                obterEquipamento(moverPersonagem[0], moverPersonagem[1]);
                            }
                            if(moverPersonagem[0] == 1 && moverPersonagem[1] == 0){
                                moverBaixo();
                                corlifecampo((posicaoDoPersonagemNaTela[0] + moverPersonagem[0]), (posicaoDoPersonagemNaTela[1] + moverPersonagem[1]));
                                verificacaoAproximacaoNPC(moverPersonagem[0], moverPersonagem[1]);
                                obterEquipamento(moverPersonagem[0], moverPersonagem[1]);
                            }
                            if(moverPersonagem[0] == 0 && moverPersonagem[1] == -1){
                                moverEsquerda();
                                corlifecampo((posicaoDoPersonagemNaTela[0] + moverPersonagem[0]), (posicaoDoPersonagemNaTela[1] + moverPersonagem[1]));
                                verificacaoAproximacaoNPC(moverPersonagem[0], moverPersonagem[1]);
                                obterEquipamento(moverPersonagem[0], moverPersonagem[1]);
                            }

                            moverPersonagem = [0,0];
                        }
                    }
                    if(moverPersonagem[0] == 0 && moverPersonagem[1] == 0){
                        escolherOutfit();
                        flagMove = [false,false,false,false];
                    }
                }
            },
        10
    );
}

            getRandomIntInclusive = function (min, max) {
                min = Math.ceil(min);
                max = Math.floor(max);
                return Math.floor(Math.random() * (max - min + 1)) + min;
            }

            animacaoMonster = function (normal,atacando,morto,hitmin, hitmax,ataqueADistancia){

                let hitTotal = 0;
                let hit = 0;
                let flagEfeito;

                if(!ataqueADistancia ){

                //Animacao Monster Atacando de Cima

                if(
                    verificacaoIdCima(normal) || 
                    verificacaoIdCima(atacando) ||
                    verificacaoIdCima(morto) 
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

                    preencherImagens(null, posicaoLinhaCima, posicaoColunaCima);

                    flagEfeito = false;
                    for(let i = 0; i < listaEfeitos.length; i++){
                        if(
                            posicaoLinhaCima == listaEfeitos[i][0] &&
                            posicaoColunaCima == listaEfeitos[i][1]
                        )
                            flagEfeito = true;
                    }
                    if(!flagEfeito)
                        listaEfeitos.push([posicaoLinhaCima, posicaoColunaCima]);

                }

                //Animacao Monster Atacando da Esquerda

                if(
                    verificacaoIdEsquerda(normal) || 
                    verificacaoIdEsquerda(atacando) ||
                    verificacaoIdEsquerda(morto) 
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

                    preencherImagens(null, posicaoLinhaEsquerda, posicaoColunaEsquerda);

                    flagEfeito = false;
                    for(let i = 0; i < listaEfeitos.length; i++){
                        if(
                            posicaoLinhaEsquerda == listaEfeitos[i][0] &&
                            posicaoColunaEsquerda == listaEfeitos[i][1]
                        )
                            flagEfeito = true;
                    }
                    if(!flagEfeito)
                        listaEfeitos.push([posicaoLinhaEsquerda, posicaoColunaEsquerda]);

                }

                //Animacao Monster Atacando da Direita

                if(
                    verificacaoIdDireita(normal) || 
                    verificacaoIdDireita(atacando) ||
                    verificacaoIdDireita(morto) 
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

                    preencherImagens(null, posicaoLinhaDireita, posicaoColunaDireita);

                    flagEfeito = false;
                    for(let i = 0; i < listaEfeitos.length; i++){
                        if(
                            posicaoLinhaDireita == listaEfeitos[i][0] &&
                            posicaoColunaDireita == listaEfeitos[i][1]
                        )
                            flagEfeito = true;
                    }
                    if(!flagEfeito)
                        listaEfeitos.push([posicaoLinhaDireita, posicaoColunaDireita]);

                }

                //Animacao Monster Atacando de Baixo

                if(
                    verificacaoIdBaixo(normal) || 
                    verificacaoIdBaixo(atacando) ||
                    verificacaoIdBaixo(morto) 
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

                    preencherImagens(null, posicaoLinhaBaixo, posicaoColunaBaixo);

                    flagEfeito = false;
                    for(let i = 0; i < listaEfeitos.length; i++){
                        if(
                            posicaoLinhaBaixo == listaEfeitos[i][0] &&
                            posicaoColunaBaixo == listaEfeitos[i][1]
                        )
                            flagEfeito = true;
                    }
                    if(!flagEfeito)
                        listaEfeitos.push([posicaoLinhaBaixo, posicaoColunaBaixo]);

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

                    preencherImagens(null, posicaoLinhaCimaEsquerda, posicaoColunaCimaEsquerda);

                    flagEfeito = false;
                    for(let i = 0; i < listaEfeitos.length; i++){
                        if(
                            posicaoLinhaCimaEsquerda == listaEfeitos[i][0] &&
                            posicaoColunaCimaEsquerda == listaEfeitos[i][1]
                        )
                            flagEfeito = true;
                    }
                    if(!flagEfeito)
                        listaEfeitos.push([posicaoLinhaCimaEsquerda, posicaoColunaCimaEsquerda]);

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

                    preencherImagens(null, posicaoLinhaCimaDireita, posicaoColunaCimaDireita);

                    flagEfeito = false;
                    for(let i = 0; i < listaEfeitos.length; i++){
                        if(
                            posicaoLinhaCimaDireita == listaEfeitos[i][0] &&
                            posicaoColunaCimaDireita == listaEfeitos[i][1]
                        )
                            flagEfeito = true;
                    }
                    if(!flagEfeito)
                        listaEfeitos.push([posicaoLinhaCimaDireita, posicaoColunaCimaDireita]);

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
                    
                    preencherImagens(null, posicaoLinhaBaixoDireita, posicaoColunaBaixoDireita);

                    flagEfeito = false;
                    for(let i = 0; i < listaEfeitos.length; i++){
                        if(
                            posicaoLinhaBaixoDireita == listaEfeitos[i][0] &&
                            posicaoColunaBaixoDireita == listaEfeitos[i][1]
                        )
                            flagEfeito = true;
                    }
                    if(!flagEfeito)
                        listaEfeitos.push([posicaoLinhaBaixoDireita, posicaoColunaBaixoDireita]);

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

                    preencherImagens(null, posicaoLinhaBaixoEsquerda, posicaoColunaBaixoEsquerda);

                    flagEfeito = false;
                    for(let i = 0; i < listaEfeitos.length; i++){
                        if(
                            posicaoLinhaBaixoEsquerda == listaEfeitos[i][0] &&
                            posicaoColunaBaixoEsquerda == listaEfeitos[i][1]
                        )
                            flagEfeito = true;
                    }
                    if(!flagEfeito)
                        listaEfeitos.push([posicaoLinhaBaixoEsquerda, posicaoColunaBaixoEsquerda]);

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

                        preencherImagens(null, posicaoDoPersonagemNaMatriz[0]+i, posicaoDoPersonagemNaMatriz[1]+j);

                        flagEfeito = false;
                        for(let i = 0; i < listaEfeitos.length; i++){
                            if(
                                (posicaoDoPersonagemNaMatriz[0]+i) == listaEfeitos[i][0] &&
                                (posicaoDoPersonagemNaMatriz[1]+j) == listaEfeitos[i][1]
                            )
                                flagEfeito = true;
                        }
                        if(!flagEfeito)
                            listaEfeitos.push([(posicaoDoPersonagemNaMatriz[0]+i), (posicaoDoPersonagemNaMatriz[1]+j)]);
                    
                    }
                }

                }

                return hitTotal;

            }

loop = function() {
    setInterval(
            function() {

                dataLoop = new Date();

                if(dataAjax <= dataLoop){
                    flagAjax = true;
                    dataAjax = new Date();
                    dataAjax.setMilliseconds(dataAjax.getMilliseconds() + 950);
                }

                let tempoinativo = 0;
                let hitTotal = 0;

                if(posicaoDoPersonagemNaMatriz[0] < (linhaInicioTerreo + 29) )
                {
                    hitTotal += animacaoMonster(8,9,10,Math.ceil(1/(equipamentos[7]+1)),Math.floor(50/(equipamentos[7]+1)),false); //Snake(normal,atacando,morto,hitmin,hitmax)
                    hitTotal += animacaoMonster(16,17,18,Math.ceil(50/(equipamentos[7]+1)),Math.floor(150/(equipamentos[7]+1)),false); //Dragon(normal,atacando,morto,hitmin,hitmax)
                    hitTotal += animacaoMonster(19,20,21,Math.ceil(150/(equipamentos[7]+1)),Math.floor(450/(equipamentos[7]+1)),false); //Mammoth(normal,atacando,morto,hitmin,hitmax)
                    hitTotal += animacaoMonster(45,46,47,Math.ceil(450/(equipamentos[7]+1)),Math.floor(1350/(equipamentos[7]+1)),false); //Spider(normal,atacando,morto,hitmin,hitmax)
                    hitTotal += animacaoMonster(48,49,50,Math.ceil(1350/(equipamentos[7]+1)),Math.floor(4050/(equipamentos[7]+1)),true); //Orc Shaman(normal,atacando,morto,hitmin,hitmax)
                }

                if(posicaoDoPersonagemNaMatriz[0] >= linhaInicioPvp)
                {
                    if(posicaoDoPersonagemNaMatriz[0] == (linhaInicioPvp+1) && 
                    arrayColunasTela[posicaoDoPersonagemNaTela[1]][(posicaoDoPersonagemNaTela[0] + 1)].children[0].title.split(' ')[1] == "level:"){
                        let lvlAdversario = parseInt(arrayColunasTela[posicaoDoPersonagemNaTela[1]][(posicaoDoPersonagemNaTela[0] + 1)].children[0].title.split(' ')[2]);
                        let hitAdversario = getRandomIntInclusive(Math.ceil(lvlAdversario),Math.floor(lvlAdversario*2)); 
                        
                        hitTotal += animacaoMonster(12,12,18,Math.ceil(hitAdversario/(equipamentos[7]+1)),Math.floor(hitAdversario/(equipamentos[7]+1)),true); //M (normal,atacando,morto,hitmin,hitmax)
                        hitTotal += animacaoMonster(22,22,18,Math.ceil(hitAdversario/(equipamentos[7]+1)),Math.floor(hitAdversario/(equipamentos[7]+1)),true); //F (normal,atacando,morto,hitmin,hitmax)
                        hitTotal += animacaoMonster(84,84,18,Math.ceil(hitAdversario/(equipamentos[7]+1)),Math.floor(hitAdversario/(equipamentos[7]+1)),true); //P (normal,atacando,morto,hitmin,hitmax)
                        hitTotal += animacaoMonster(88,88,18,Math.ceil(hitAdversario/(equipamentos[7]+1)),Math.floor(hitAdversario/(equipamentos[7]+1)),true); //W (normal,atacando,morto,hitmin,hitmax)
                    }else if(posicaoDoPersonagemNaMatriz[0] == (linhaInicioPvp+2) && 
                    arrayColunasTela[posicaoDoPersonagemNaTela[1]][(posicaoDoPersonagemNaTela[0] - 1)].children[0].title.split(' ')[1] == "level:"){
                        let lvlAdversario = parseInt(arrayColunasTela[posicaoDoPersonagemNaTela[1]][(posicaoDoPersonagemNaTela[0] - 1)].children[0].title.split(' ')[2]);
                        let hitAdversario = getRandomIntInclusive(Math.ceil(lvlAdversario),Math.floor(lvlAdversario*2)); 
                        
                        hitTotal += animacaoMonster(14,14,18,Math.ceil(hitAdversario/(equipamentos[7]+1)),Math.floor(hitAdversario/(equipamentos[7]+1)),true); //M (normal,atacando,morto,hitmin,hitmax)
                        hitTotal += animacaoMonster(24,24,18,Math.ceil(hitAdversario/(equipamentos[7]+1)),Math.floor(hitAdversario/(equipamentos[7]+1)),true); //F (normal,atacando,morto,hitmin,hitmax)
                        hitTotal += animacaoMonster(86,86,18,Math.ceil(hitAdversario/(equipamentos[7]+1)),Math.floor(hitAdversario/(equipamentos[7]+1)),true); //P (normal,atacando,morto,hitmin,hitmax)
                        hitTotal += animacaoMonster(90,90,18,Math.ceil(hitAdversario/(equipamentos[7]+1)),Math.floor(hitAdversario/(equipamentos[7]+1)),true); //W (normal,atacando,morto,hitmin,hitmax)
                    }
                }

                if(personagemMorto){
                    let perdaDeNivel = (nivel * 0.01) | 0;
                    nivel -= perdaDeNivel;
                    calculaLevel();
                    mensagensDoChatServerLog += "\n\nVocê perdeu " + perdaDeNivel + " pontos de experiencia.";
                }

                if(hitTotal > 0){
                    mensagensDoChatServerLog += "\n\nVocê perdeu " + hitTotal + " pontos de vida.";
                }

                if(!inativo && online){
                    if(flagAjax){
                        run_ajax();
                        flagAjax = false;
                        regeneracao(1, "regenerou");
                    }else{
                        //console.log("Ajax desnecessário");
                    }
                    switch(matrizDoMapa[(linhaInicioSubsolo4+1)][(colunaInicio + 3)]){
                        case 41:
                            alterarTeleport(42);
                            break;
                        case 42:
                            alterarTeleport(43);
                            break;
                        case 43:
                            alterarTeleport(44);
                            break;
                        case 44:
                            alterarTeleport(41);
                            break;
                        default:
                            break;
                    }
                    moverCriaturas();
                }else if(inativo && online){
                    desconectar();
                }else if(inativoAnterior && !inativo && !online){
                    inativoAnterior = inativo;
                    conectar();
                }

                if(hitTotal > 0){
                    document.getElementById('mensagemDiv3').style.color = 'red';
                    document.getElementById('mensagemDiv3').style.textAlign = 'center';
                    document.getElementById('mensagemDiv3').style.width = 50;
                    document.getElementById('mensagemDiv3').innerHTML = hitTotal;
                    setTimeout(function(){ 
                        document.getElementById('mensagemDiv3').innerHTML = ""; 
                        document.getElementById('mensagemDiv3').style.width = 250;
                        }, 500);
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

                if(chatScrollHeight != document.getElementById('textareaChat').scrollHeight){
                    document.getElementById('textareaChat').scrollTop = document.getElementById('textareaChat').scrollHeight;
                    chatScrollHeight = document.getElementById('textareaChat').scrollHeight;
                }
                
                if((dataLoop.getMinutes() - datainicioinatividade.getMinutes()) > 0){
                    tempoinativo = dataLoop.getMinutes() - datainicioinatividade.getMinutes();
                }else if((dataLoop.getMinutes() - datainicioinatividade.getMinutes()) < 0){
                    tempoinativo = 60 - datainicioinatividade.getMinutes();
                    tempoinativo += dataLoop.getMinutes();
                }
                if(tempoinativo > 3){
                    inativo = 
                    inativoAnterior = true;
                    visibilityEquipamentos(false);
                    document.getElementById('mensagem1').src = 'imagens/imagemFalaVazia.png';
                    document.getElementById('mensagem1').alt = 'mensagem';
                    document.getElementById('mensagem1').title = 'mensagem';
                    document.getElementById('mensagem1').style.visibility = 'visible';
                    if(document.getElementById('alertRedId').style.visibility == 'hidden')
                        document.getElementById('alertYellowId').style.visibility = 'visible';
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
                if(!alertaBoss && posicaoDoPersonagemNaMatriz[0] > (linhaInicioTerreo+11) && posicaoDoPersonagemNaMatriz[1] < (colunaInicio + 21) && posicaoDoPersonagemNaMatriz[0] < (linhaInicioTerreo+25)){
                    dataDiv1 = new Date();
                    dataDiv1.setMilliseconds(dataDiv1.getMilliseconds() + 10000);
                    document.getElementById('mensagemDiv1').style.color = "white";
                    document.getElementById('mensagemDiv1').innerHTML = 'Um boss está nas redondezas!';
                    alertaBoss = true;
                }else if(posicaoDoPersonagemNaMatriz[0] <= (linhaInicioTerreo+11) || posicaoDoPersonagemNaMatriz[1] >= (colunaInicio + 21)  || posicaoDoPersonagemNaMatriz[0] >= (linhaInicioTerreo+25)){
                    alertaBoss = false;
                    if(document.getElementById('mensagemDiv1').innerHTML == 'Um boss está nas redondezas!'){
                        document.getElementById('mensagemDiv1').innerHTML = '';
                    }
                }
                
                //codigo de alerta pvp
                if(!alertaPvp && posicaoDoPersonagemNaMatriz[0] >= linhaInicioPvp){
                    dataDiv1 = new Date();
                    dataDiv1.setMilliseconds(dataDiv1.getMilliseconds() + 10000);
                    document.getElementById('mensagemDiv1').style.color = "white";
                    document.getElementById('mensagemDiv1').innerHTML = '[Pvp Ativado!] Para desistir saia pelo teleport.';
                    alertaPvp = true;
                }else if(posicaoDoPersonagemNaMatriz[0] < linhaInicioPvp){
                    alertaPvp = false;
                    if(document.getElementById('mensagemDiv1').innerHTML == '[Pvp Ativado!] Para desistir saia pelo teleport.'){
                        document.getElementById('mensagemDiv1').innerHTML = '';
                    }
                }

                //codigo troca de musica
                if(!audio1 && posicaoDoPersonagemNaMatriz[0] <= (linhaInicioTerreo+11) && posicaoDoPersonagemNaMatriz[0] > (linhaInicioTerreo)){
                    document.getElementById("myAudio").src = "musicas/ToPTrack02.mp3";
                    audio1 = true;
                    audio2 = false;
                    audio3 = false;
                }else if(!audio2 && posicaoDoPersonagemNaMatriz[0] > (linhaInicioTerreo+11)){
                    document.getElementById("myAudio").src = "musicas/ToPTrack11.mp3";
                    audio1 = false;
                    audio2 = true;
                    audio3 = false;
                }else if(!audio3 && posicaoDoPersonagemNaMatriz[0] < (linhaInicioTerreo)){
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

                if(flagCarregamento){

                    document.getElementById('painelBaixo1').innerHTML = "";

                    document.getElementById('painelBaixo1').style.top = ((resolucaoLarguraAltura[0]-2) * 60);
                    document.getElementById('painelDireita1').style.left = ((resolucaoLarguraAltura[1]-2) * 60);

                    document.getElementById('fala1').src = 'imagens/imagemFalaVoceJaTemBless.png';
                    setTimeout(function(){document.getElementById('fala1').src = 'imagens/imagemFalaVazia.png';}, 2000);

                    flagCarregamento = false;

                }

            },
        1000
    );
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
                    let idNPC = 11;
                    if(verificacaoIdNasProximidades(idNPC)){
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
                        mensagensDoChatDefault += "\n\n" + data.getHours() + ":" + data.getMinutes() + " " + username + " [" + lvlatual + "]: " + sanitize(document.getElementById('campoDeEscritaInput').value);

                        if(document.getElementById('campoDeEscritaInput').value.length < 32){
                            document.getElementById('mensagemDiv3').style.textAlign = 'left';
                            //document.getElementById('mensagemDiv3').style.left = 365;
                        } else {
                            document.getElementById('mensagemDiv3').style.textAlign = 'center';
                            //document.getElementById('mensagemDiv3').style.left = 320;
                        }
                        document.getElementById('mensagemDiv3').style.color = 'red';
                        document.getElementById('mensagemDiv3').style.width = 250;

                        mensagem = sanitize(document.getElementById('campoDeEscritaInput').value);
                        document.getElementById('mensagemDiv3').textContent = username + " says: " + sanitize(mensagem);
                        setTimeout(function(){
                            mensagem = ""; document.getElementById('mensagemDiv3').innerHTML = "";
                            document.getElementById('mensagemDiv3').style.textAlign = 'left';
                            //document.getElementById('mensagemDiv3').style.left = 365;
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
                                matrizDoMapa[(linhaInicioTerreo+1)][colunaInicio+20] = matrizDoMapaOriginal[(linhaInicioTerreo+1)][colunaInicio+20];
                                matrizDoMapa[(linhaInicioTerreo+11)][colunaInicio+31] = matrizDoMapaOriginal[(linhaInicioTerreo+11)][colunaInicio+31];
                                matrizDoMapa[(linhaInicioTerreo+2)][colunaInicio+41] = matrizDoMapaOriginal[(linhaInicioTerreo+2)][colunaInicio+41];
                                quest2 = 0;
                                matrizDoMapa[(linhaInicioTerreo+11)][colunaInicio+23] = matrizDoMapaOriginal[(linhaInicioTerreo+11)][colunaInicio+23];
                                matrizDoMapa[(linhaInicioTerreo+1)][colunaInicio+34] = matrizDoMapaOriginal[(linhaInicioTerreo+1)][colunaInicio+34];
                                matrizDoMapa[(linhaInicioTerreo+6)][colunaInicio+41] = matrizDoMapaOriginal[(linhaInicioTerreo+6)][colunaInicio+41];
                                quest3 = 0;
                                matrizDoMapa[(linhaInicioTerreo+1)][colunaInicio+27] = matrizDoMapaOriginal[(linhaInicioTerreo+1)][colunaInicio+27];
                                matrizDoMapa[(linhaInicioTerreo+11)][colunaInicio+37] = matrizDoMapaOriginal[(linhaInicioTerreo+11)][colunaInicio+37];
                                matrizDoMapa[(linhaInicioTerreo+10)][colunaInicio+41] = matrizDoMapaOriginal[(linhaInicioTerreo+10)][colunaInicio+41];
                                quest4 = 0;
                                matrizDoMapa[(linhaInicioTerreo+24)][colunaInicio+27] = matrizDoMapaOriginal[(linhaInicioTerreo+24)][colunaInicio+27];
                                matrizDoMapa[(linhaInicioTerreo+15)][colunaInicio+41] = matrizDoMapaOriginal[(linhaInicioTerreo+15)][colunaInicio+41];
                                matrizDoMapa[(linhaInicioTerreo+24)][colunaInicio+40] = matrizDoMapaOriginal[(linhaInicioTerreo+24)][colunaInicio+40];
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

                        ataqueCampo(-1,-1);
                        ataqueCampo(-1,0);
                        ataqueCampo(-1,1);
                        ataqueCampo(0,1);
                        ataqueCampo(1,1);
                        ataqueCampo(1,0);
                        ataqueCampo(1,-1);
                        ataqueCampo(0,-1);

                    }else{
                        dataDiv2 = new Date();
                        dataDiv2.setMilliseconds(dataDiv2.getMilliseconds() + 1000);
                        document.getElementById('mensagemDiv2').innerHTML = 'Você está exausto.'; 
                    }

                }
                if(conjurarExoriGran){

                    if(dataMagia <= new Date()){
                        dataMagia = new Date();
                        dataMagia.setMilliseconds(dataMagia.getMilliseconds() + 1000);

                        document.getElementById('fala1').src = 'imagens/imagemFalaExoriGran.png';
                        setTimeout(function(){ document.getElementById('fala1').src = 'imagens/imagemFalaVazia.png';}, 1000);

                        for(let j = -3; j < 4; j++){
                            for(let k = -4; k < 5; k++){
                                ataqueCampo(j,k);
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
                    if(verificarJogoHabilitado()){
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

            esconderComponentes = function(){
                if(!verificarJogoHabilitado()){
                    document.getElementById('mensagem1').style.visibility = 'hidden'; 
                    document.getElementById('conversa').style.visibility = 'hidden'; 
                    document.getElementById('opcao1').style.visibility = 'hidden'; 
                    document.getElementById('opcao2').style.visibility = 'hidden'; 
                    document.getElementById('opcao3').style.visibility = 'hidden'; 
                    document.getElementById('opcao4').style.visibility = 'hidden'; 
                    document.getElementById('opcao5').style.visibility = 'hidden'; 
                    nivelDeConversaNpc = 0; 
                    datainicioinatividade = new Date();
                    inativo = false;
                }
            }

            addEventos = function(){
                loop();
                funcMoverPersonagem();

                window.addEventListener("focus", () => {
                    if(!inativo && !online){
                        conectar();
                    }else if(inativo && document.getElementById('alertRedId').style.visibility == 'hidden'){
                        document.getElementById('alertYellowId').style.visibility = 'visible';
                    }
                });
                window.addEventListener("focusin", () => {
                    if(!inativo && !online){
                        conectar();
                    }else if(inativo && document.getElementById('alertRedId').style.visibility == 'hidden'){
                        document.getElementById('alertYellowId').style.visibility = 'visible';
                    }
                });

                window.addEventListener("blur", desconectar);
                window.addEventListener("focusout", desconectar);

                window.addEventListener("unload", desconectar);
                window.addEventListener("beforeunload", desconectar);

                document.addEventListener("click", hideMenu);
                document.addEventListener("contextmenu", rightClick);

                document.addEventListener("mousemove", (event) => {
                    mouseX = event.clientX;
                    mouseY = event.clientY;
                });

                document.addEventListener("dragover", (event) => {
                    event.dataTransfer.dropEffect = "move";
                    event.preventDefault();

                    mouseX = event.clientX;
                    mouseY = event.clientY;
                });
                document.addEventListener("dragenter", (event) => {
                    event.dataTransfer.dropEffect = "move";
                    event.preventDefault();

                    mouseX = event.clientX;
                    mouseY = event.clientY;
                });
                
                document.body.addEventListener("keypress", function(){
                    pressKey(event);
                });
                document.getElementById('opcaoPular').addEventListener("click", function(){
                    document.getElementById('chathistoria').style.visibility = 'hidden'; 
                    datainicioinatividade = new Date();
                });
                document.getElementById('opcaoProxima').addEventListener("click", function(){
                    document.getElementById('textareaChatHistoria').scrollTop = 0; 
                    document.getElementById('textareaChatHistoria').value = mensagensDoChatHistoria1; 
                    document.getElementById('opcaoProxima').style.color = 'white';
                    document.getElementById('opcaoNovidades').style.color = 'black';
                    datainicioinatividade = new Date();
                });
                document.getElementById('opcaoNovidades').addEventListener("click", function(){
                    document.getElementById('textareaChatHistoria').scrollTop = 0; 
                    document.getElementById('textareaChatHistoria').value = mensagensDoChatHistoriaNovidades1; 
                    document.getElementById('opcaoProxima').style.color = 'black';
                    document.getElementById('opcaoNovidades').style.color = 'white';
                    datainicioinatividade = new Date();
                });
                document.getElementById('opcao1').addEventListener("click", function(){
                    if(document.getElementById('opcao1').style.visibility == 'visible'){ 
                        document.getElementById('campoDeEscritaInput').value = document.getElementById('opcao1').title; 
                        dialogo(); 
                        datainicioinatividade = new Date();
                    }
                });
                document.getElementById('opcao2').addEventListener("click", function(){
                    if(document.getElementById('opcao2').style.visibility == 'visible'){ 
                        document.getElementById('campoDeEscritaInput').value = document.getElementById('opcao2').title; 
                        dialogo(); 
                        datainicioinatividade = new Date();
                    }
                });
                document.getElementById('opcao3').addEventListener("click", function(){
                    if(document.getElementById('opcao3').style.visibility == 'visible'){ 
                        document.getElementById('campoDeEscritaInput').value = document.getElementById('opcao3').title; 
                        dialogo(); 
                        datainicioinatividade = new Date();
                    }
                });
                document.getElementById('opcao4').addEventListener("click", function(){
                    if(document.getElementById('opcao4').style.visibility == 'visible'){ 
                        document.getElementById('campoDeEscritaInput').value = document.getElementById('opcao4').title; 
                        dialogo(); 
                        datainicioinatividade = new Date();
                    }
                });
                document.getElementById('opcao5').addEventListener("click", function(){
                    if(document.getElementById('opcao5').style.visibility == 'visible'){ 
                        document.getElementById('campoDeEscritaInput').value = document.getElementById('opcao5').title; 
                        dialogo(); 
                        datainicioinatividade = new Date();
                    }
                });
                document.getElementById('personagem1').addEventListener("click", function(){
                    if(document.getElementById('menuopcoes').style.visibility == 'hidden')
                        document.getElementById('menuopcoes').style.visibility = 'visible';
                    else
                        document.getElementById('menuopcoes').style.visibility = 'hidden';
                });
                document.getElementById('outfit1').addEventListener("click", function(){
                    outfit = 'P'; document.getElementById('menuopcoes').style.visibility = 'hidden';
                });
                document.getElementById('outfit2').addEventListener("click", function(){
                    outfit = 'W'; document.getElementById('menuopcoes').style.visibility = 'hidden';
                });
                document.getElementById('outfit3').addEventListener("click", function(){
                    outfit = 'M'; document.getElementById('menuopcoes').style.visibility = 'hidden';
                });
                document.getElementById('outfit4').addEventListener("click", function(){
                    outfit = 'F'; document.getElementById('menuopcoes').style.visibility = 'hidden';
                });
                document.getElementById('closeAlertYellow').addEventListener("click", function(){
                    esconderComponentes();
                    document.getElementById('alertYellowId').style.visibility = 'hidden'; 
                });
                document.getElementById('closeAlertRed').addEventListener("click", function(){
                    esconderComponentes();
                    document.getElementById('alertRedId').style.visibility = 'hidden';
                    
                    personagemMorto = false;

                    preencherImagens();

                    hp++; 
                    if(nivelDeSolo == 2){ 
                        nivelDeSolo--; 
                        document.getElementById('personagem1').style.top = parseInt(document.getElementById('personagem1').style.top.split('p')[0]) + 10;
                        document.getElementById('personagem1').style.left = parseInt(document.getElementById('personagem1').style.left.split('p')[0]) + 10;
                    }
                    visibilityEquipamentos(false);
                    document.getElementById('fala1').src = 'imagens/imagemFalaVoceJaTemBless.png';
                    setTimeout(function(){document.getElementById('fala1').src = 'imagens/imagemFalaVazia.png';}, 2000);
                });
                document.getElementById('logoutOpcao2').addEventListener("click", function(){
                    if(document.getElementById('logoutOpcao2').style.visibility == 'visible'){ 
                        document.getElementById('logoutPergunta1').style.visibility = 'hidden'; 
                        document.getElementById('logoutOpcao1').style.visibility = 'hidden'; 
                        document.getElementById('logoutOpcao2').style.visibility = 'hidden'; 
                        datainicioinatividade = new Date();
                    }
                });
                document.getElementById('campoDaMochila1').addEventListener("click", function(){
                    if(verificarJogoHabilitado()){ 
                        utilizarIten(0); 
                    }
                });
                document.getElementById('campoDaMochila2').addEventListener("click", function(){
                    if(verificarJogoHabilitado()){ 
                        utilizarIten(1); 
                    }
                });
                document.getElementById('campoDaMochila3').addEventListener("click", function(){
                    if(verificarJogoHabilitado()){ 
                        utilizarIten(2); 
                    }
                });
                document.getElementById('campoDaMochila4').addEventListener("click", function(){
                    
                });
                document.getElementById('campoDaMagia1').addEventListener("click", function(){
                    if(verificarJogoHabilitado()){ 
                        utilizarMagia(0); 
                    }
                });
                document.getElementById('campoDaMagia2').addEventListener("click", function(){
                    if(verificarJogoHabilitado()){ 
                        utilizarMagia(1); 
                    }
                });
                document.getElementById('campoDaMagia3').addEventListener("click", function(){
                    if(verificarJogoHabilitado()){ 
                        utilizarMagia(2); 
                    }
                });
                document.getElementById('campoDaMagia4').addEventListener("click", function(){
                    if(verificarJogoHabilitado()){ 
                        utilizarMagia(3); 
                    }
                });
                document.getElementById('equipamentoMenos').addEventListener("click", function(){
                    visibilityEquipamentos(false);
                });
                document.getElementById('equipamentoParcel').addEventListener("click", function(){
                    if(flagEquipamento){
                        if(document.getElementById('parcel').style.visibility == 'hidden'){
                            document.getElementById('parcel').style.visibility = 'visible'; 
                            document.getElementById('nomeDoParcel1').style.visibility = 'visible'; 
                            document.getElementById('campoDoParcel1').style.visibility = 'visible'; 
                            document.getElementById('itemCampoDoParcel1').style.visibility = 'visible'; 
                            document.getElementById('campoDoParcel2').style.visibility = 'visible'; 
                            document.getElementById('itemCampoDoParcel2').style.visibility = 'visible'; 
                            document.getElementById('campoDoParcel3').style.visibility = 'visible'; 
                            document.getElementById('itemCampoDoParcel3').style.visibility = 'visible'; 
                            document.getElementById('campoDoParcel4').style.visibility = 'visible'; 
                            document.getElementById('itemCampoDoParcel4').style.visibility = 'visible';
                        }else{
                            document.getElementById('parcel').style.visibility = 'hidden'; 
                            document.getElementById('nomeDoParcel1').style.visibility = 'hidden'; 
                            document.getElementById('campoDoParcel1').style.visibility = 'hidden'; 
                            document.getElementById('itemCampoDoParcel1').style.visibility = 'hidden'; 
                            document.getElementById('campoDoParcel2').style.visibility = 'hidden'; 
                            document.getElementById('itemCampoDoParcel2').style.visibility = 'hidden'; 
                            document.getElementById('campoDoParcel3').style.visibility = 'hidden'; 
                            document.getElementById('itemCampoDoParcel3').style.visibility = 'hidden'; 
                            document.getElementById('campoDoParcel4').style.visibility = 'hidden'; 
                            document.getElementById('itemCampoDoParcel4').style.visibility = 'hidden';
                        } 
                        datainicioinatividade = new Date();
                    }
                });
                document.getElementById('equipamentoMochila').addEventListener("click", function(){
                    if(flagEquipamento){
                        if(document.getElementById('mochila').style.visibility == 'hidden'){
                            document.getElementById('mochila').style.visibility = 'visible'; 
                            document.getElementById('nomeDaMochila1').style.visibility = 'visible'; 
                            document.getElementById('campoDaMochila1').style.visibility = 'visible'; 
                            document.getElementById('itemCampoDaMochila1').style.visibility = 'visible'; 
                            document.getElementById('campoDaMochila2').style.visibility = 'visible'; 
                            document.getElementById('itemCampoDaMochila2').style.visibility = 'visible'; 
                            document.getElementById('campoDaMochila3').style.visibility = 'visible'; 
                            document.getElementById('itemCampoDaMochila3').style.visibility = 'visible'; 
                            document.getElementById('campoDaMochila4').style.visibility = 'visible'; 
                            document.getElementById('itemCampoDaMochila4').style.visibility = 'visible'; 
                            document.getElementById('magias').style.top = 160;
                        }else{
                            document.getElementById('mochila').style.visibility = 'hidden'; 
                            document.getElementById('nomeDaMochila1').style.visibility = 'hidden'; 
                            document.getElementById('campoDaMochila1').style.visibility = 'hidden'; 
                            document.getElementById('itemCampoDaMochila1').style.visibility = 'hidden'; 
                            document.getElementById('campoDaMochila2').style.visibility = 'hidden'; 
                            document.getElementById('itemCampoDaMochila2').style.visibility = 'hidden'; 
                            document.getElementById('campoDaMochila3').style.visibility = 'hidden'; 
                            document.getElementById('itemCampoDaMochila3').style.visibility = 'hidden'; 
                            document.getElementById('campoDaMochila4').style.visibility = 'hidden'; 
                            document.getElementById('itemCampoDaMochila4').style.visibility = 'hidden'; 
                            document.getElementById('magias').style.top = 100;
                        } 
                        datainicioinatividade = new Date();
                    }
                });
                document.getElementById('equipamentoMaoDireita').addEventListener("click", function(){
                    
                });
                document.getElementById('equipamentoMaoEsquerda').addEventListener("click", function(){
                    
                });
                document.getElementById('equipment').addEventListener("click", function(){
                    if(
                        document.getElementById('alertRedId').style.visibility == 'hidden' && 
                        document.getElementById('alertYellowId').style.visibility == 'hidden'
                        )
                        visibilityEquipamentos(document.getElementById('mensagem1').style.visibility == 'hidden');
                });
                document.getElementById('story').addEventListener("click", function(){
                    if(document.getElementById('chathistoria').style.visibility == 'hidden'){
                        document.getElementById('chathistoria').style.visibility = 'visible';
                    }else{
                        document.getElementById('chathistoria').style.visibility = 'hidden';
                    } 
                    datainicioinatividade = new Date();
                });
                document.getElementById('logout').addEventListener("click", function(){
                    if(document.getElementById('logoutPergunta1').style.visibility == 'hidden'){
                        document.getElementById('logoutPergunta1').style.visibility = 'visible'; 
                        document.getElementById('logoutOpcao1').style.visibility = 'visible'; 
                        document.getElementById('logoutOpcao2').style.visibility = 'visible';
                    }else{
                        document.getElementById('logoutPergunta1').style.visibility = 'hidden'; 
                        document.getElementById('logoutOpcao1').style.visibility = 'hidden'; 
                        document.getElementById('logoutOpcao2').style.visibility = 'hidden';
                    } 
                    datainicioinatividade = new Date();
                });
                document.getElementById('fullscreen').addEventListener("click", function(){
                    openFullscreen();
                });
                document.getElementById('fs-toggle').addEventListener("click", function(){
                    openFullscreen();
                });
                document.getElementById('nomeDoChatDefault').addEventListener("click", function(){
                    identificadorDoChat = 0; 
                    document.getElementById('textareaChat').value = mensagensDoChatDefault; 
                    document.getElementById('textareaChat').scrollTop = document.getElementById('textareaChat').scrollHeight; 
                    /*document.getElementById('campoDeEscritaInput').focus();*/ 
                    document.getElementById('nomeDoChatServerLog').style.color = 'black'; 
                    document.getElementById('nomeDoChatNpc').style.color = 'black'; 
                    document.getElementById('nomeDoChatDefault').style.color = 'white'; 
                    document.getElementById('campoDoChat').title ='default'; 
                    document.getElementById('textareaChat').title ='default'; 
                    datainicioinatividade = new Date();
                });
                document.getElementById('nomeDoChatServerLog').addEventListener("click", function(){
                    identificadorDoChat = 1; 
                    document.getElementById('textareaChat').value = mensagensDoChatServerLog; 
                    document.getElementById('textareaChat').scrollTop = document.getElementById('textareaChat').scrollHeight; 
                    document.getElementById('nomeDoChatDefault').style.color = 'black'; 
                    document.getElementById('nomeDoChatNpc').style.color = 'black'; 
                    document.getElementById('nomeDoChatServerLog').style.color = 'white'; 
                    document.getElementById('campoDoChat').title ='server log'; 
                    document.getElementById('textareaChat').title ='server log'; 
                    datainicioinatividade = new Date();
                });
                document.getElementById('nomeDoChatNpc').addEventListener("click", function(){
                    identificadorDoChat = 2; 
                    document.getElementById('textareaChat').value = mensagensDoChatNpc; 
                    document.getElementById('textareaChat').scrollTop = document.getElementById('textareaChat').scrollHeight; 
                    /*document.getElementById('campoDeEscritaInput').focus();*/ 
                    document.getElementById('nomeDoChatDefault').style.color = 'black'; 
                    document.getElementById('nomeDoChatServerLog').style.color = 'black'; 
                    document.getElementById('nomeDoChatNpc').style.color = 'white'; 
                    document.getElementById('campoDoChat').title ='npc'; 
                    document.getElementById('textareaChat').title ='npc'; 
                    datainicioinatividade = new Date();
                });
                document.getElementById('send').addEventListener("click", function(){
                    dialogo();
                    datainicioinatividade = new Date();
                });
            }
    
            hideMenu = function () {
                document.getElementById(
                    "contextMenu").style.display = "none"
            }
    
            rightClick = function (e) {
                e.preventDefault();

                var menu = document
                    .getElementById("contextMenu")
                    
                menu.style.display = 'block';
                menu.style.left = e.pageX + "px";
                menu.style.top = e.pageY + "px";
            }

            resolucao = function() {
                posicaoDoPersonagemNaTela[0] = Math.trunc(resolucaoLarguraAltura[0] / 2);
                posicaoDoPersonagemNaTela[1] = Math.trunc(resolucaoLarguraAltura[1] / 2);

                newMap();

                document.getElementById('menuopcoes').style.top = (((posicaoDoPersonagemNaTela[0]) * 60) + 5);
                document.getElementById('menuopcoes').style.left = (((posicaoDoPersonagemNaTela[1]) * 60) + 5);
                document.getElementById('personagem1').style.top = (((posicaoDoPersonagemNaTela[0]-1) * 60) + 5);
                document.getElementById('personagem1').style.left = (((posicaoDoPersonagemNaTela[1]-1) * 60) + 5);
                document.getElementById('nomePersonagem1').style.top = (((posicaoDoPersonagemNaTela[0]-1) * 60) + 5);
                document.getElementById('nomePersonagem1').style.left = (((posicaoDoPersonagemNaTela[1]-1) * 60) + 5);
                document.getElementById('barraHpVaziaPersonagem1').style.top = (((posicaoDoPersonagemNaTela[0]-1) * 60) + 1);
                document.getElementById('barraHpVaziaPersonagem1').style.left = (((posicaoDoPersonagemNaTela[1]-1) * 60) + 1);
                document.getElementById('barraHpPersonagem1').style.top = (((posicaoDoPersonagemNaTela[0]-1) * 60) + 1);
                document.getElementById('barraHpPersonagem1').style.left = (((posicaoDoPersonagemNaTela[1]-1) * 60) + 1);
                document.getElementById('fala1').style.top = (((posicaoDoPersonagemNaTela[0]-1) * 60) + 5);
                document.getElementById('fala1').style.left = (((posicaoDoPersonagemNaTela[1]-1) * 60) + 5);
                document.getElementById('mensagemDiv3').style.top = (((posicaoDoPersonagemNaTela[0]-1) * 60) + 15);
                document.getElementById('mensagemDiv3').style.left = (((posicaoDoPersonagemNaTela[1]-1) * 60) + 5);
                document.getElementById('mensagemDiv2').style.top = (((resolucaoLarguraAltura[0] - 2) * 60) - 30);
                document.getElementById('mensagemDiv2').style.left = ((Math.trunc(resolucaoLarguraAltura[1] / 3)) * 60);
                document.getElementById('mensagemDiv1').style.top = ((Math.trunc(resolucaoLarguraAltura[0] / 3) - 1) * 60);
                document.getElementById('mensagemDiv1').style.left = ((Math.trunc(resolucaoLarguraAltura[1] / 3)) * 60);
            }

            alterarTeleport = function(id) {
                matrizDoMapa[(linhaInicioSubsolo4+1)][(colunaInicio + 3)] = id;
                matrizDoMapa[(linhaInicioSubsolo4+1)][(colunaInicio + 8)] = id;
                matrizDoMapa[(linhaInicioTerreo+1)][(colunaInicio + 17)] = id;
                matrizDoMapa[(linhaInicioTerreo+2)][(colunaInicio + 17)] = id;
                matrizDoMapa[linhaInicioPvp][(colunaInicio + 1)] = id;
                matrizDoMapa[linhaInicioPvp + 3][(colunaInicio + 1)] = id;
                matrizDoMapa[linhaInicioPvp][(colunaInicio + 5)] = id;
                matrizDoMapa[linhaInicioPvp + 3][(colunaInicio + 5)] = id;
                matrizDoMapa[linhaInicioPvp][(colunaInicio + 9)] = id;
                matrizDoMapa[linhaInicioPvp + 3][(colunaInicio + 9)] = id;
            }

            desativarEfeitos = function(){
                while(listaEfeitos != null && listaEfeitos.length > 0){
                    let itemEfeito = listaEfeitos.shift();

                    if(!verificarJogadorNaTela(itemEfeito[0], itemEfeito[1]))
                        continue;

                    switch(matrizDoMapa[itemEfeito[0]][itemEfeito[1]]){
                        case 9:
                            matrizDoMapa[itemEfeito[0]][itemEfeito[1]] = 8;
                            break;
                        case 17:
                            matrizDoMapa[itemEfeito[0]][itemEfeito[1]] = 16;
                            break;
                        case 20:
                            matrizDoMapa[itemEfeito[0]][itemEfeito[1]] = 19;
                            break;
                        case 46:
                            matrizDoMapa[itemEfeito[0]][itemEfeito[1]] = 45;
                            break;
                        case 49:
                            matrizDoMapa[itemEfeito[0]][itemEfeito[1]] = 48;
                            break;
                    }

                    preencherImagens(null, itemEfeito[0], itemEfeito[1]);
                }
            }

            run_ajax = function(){

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
                    (!online || wakeup)
                ){
                    dados.append('username', username);
                    dados.append('password', password);

                    if(!online || wakeup){
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
                        dados.append('mensagem', sanitize(mensagem));
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

                    preencherJogadores();

                })

                // [FIM] AJAX

            }

            desconectar = function() {
                online = 0;
                if(posicaoDoPersonagemNaMatriz[0] >= linhaInicioPvp){
                    posicaoDoPersonagemNaMatriz[0] = (linhaInicioTerreo+2); 
                    posicaoDoPersonagemNaMatriz[1] = (colunaInicio + 16); 
                }
                run_ajax();
                //console.log("desconectado!"); 
            }

            conectar = function() {
                online =
                wakeup = 1;
                if(posicaoDoPersonagemNaMatriz[0] >= linhaInicioPvp){
                    posicaoDoPersonagemNaMatriz[0] = (linhaInicioTerreo+2); 
                    posicaoDoPersonagemNaMatriz[1] = (colunaInicio + 16); 
                }
                run_ajax();
                //console.log("conectado!"); 
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

            resolucao();

            document.body.style.userSelect = "none";

            preloadContentImages();

            window.addEventListener("load", addEventos);

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

            calculaLevel();

            document.getElementById('textareaChatHistoria').value = mensagensDoChatHistoria1;

            escolherOutfit();

            if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]] == 7){
                nivelDeSolo++;
                document.getElementById('personagem1').style.top = parseInt(document.getElementById('personagem1').style.top.split('p')[0]) - 10;
                document.getElementById('personagem1').style.left = parseInt(document.getElementById('personagem1').style.left.split('p')[0]) - 10;
            }

            jangadaPosicaoInicial();

            if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]] == 57 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]] == 61 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]] == 62 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]] == 63){
                revelarCasa(4);
            }

            if(!verificarPosicaoValida(0, 0)){
                posicaoDoPersonagemNaMatriz = [(linhaInicioSubsolo4+2),(colunaInicio + 2)];

                if(posicaoJangada[0] == (linhaInicioTerreo+28)){
                    matrizDoMapa[posicaoJangada[0]][posicaoJangada[1]] = 26;
                    matrizDoMapa[posicaoJangada[0]][posicaoJangada[1]+1] = 26;
                    matrizDoMapa[posicaoJangada[0]][posicaoJangada[1]+2] = 26; 
                    matrizDoMapa[posicaoJangada[0]][posicaoJangada[1]+3] = 26;
                    matrizDoMapa[posicaoJangada[0]+1][posicaoJangada[1]] = 26;
                    matrizDoMapa[posicaoJangada[0]+1][posicaoJangada[1]+1] = 34;
                    matrizDoMapa[posicaoJangada[0]+1][posicaoJangada[1]+2] = 34; 
                    matrizDoMapa[posicaoJangada[0]+1][posicaoJangada[1]+3] = 26;
                    posicaoJangada[0] = (linhaInicioTerreo+21);
                    matrizDoMapa[posicaoJangada[0]][posicaoJangada[1]] = 53;
                    matrizDoMapa[posicaoJangada[0]][posicaoJangada[1]+1] = 52;
                    matrizDoMapa[posicaoJangada[0]][posicaoJangada[1]+2] = 52; 
                    matrizDoMapa[posicaoJangada[0]][posicaoJangada[1]+3] = 54;
                    matrizDoMapa[posicaoJangada[0]+1][posicaoJangada[1]] = 53;
                    matrizDoMapa[posicaoJangada[0]+1][posicaoJangada[1]+1] = 52;
                    matrizDoMapa[posicaoJangada[0]+1][posicaoJangada[1]+2] = 52; 
                    matrizDoMapa[posicaoJangada[0]+1][posicaoJangada[1]+3] = 54;
                }
            }else if(posicaoDoPersonagemNaMatriz[0] >= linhaInicioPvp){
                posicaoDoPersonagemNaMatriz[0] = (linhaInicioTerreo+2); 
                posicaoDoPersonagemNaMatriz[1] = (colunaInicio + 16); 
            }

            if(dadosJson){
                readDadosJson();
            }

            setAndar();

            preencherImagens();

        }

            main();
            
            //alert("Servidor em Manutenção!");
            //alert(window.innerWidth + " x " + window.innerHeight);
            
        </script>

    </body>
</html>