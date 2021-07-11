<html>
    <head>
        <title>Magic Level</title>
        <meta charset="UTF-8">
        <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
        <script>

            var funcMoverPersonagem;
            var loop;
            var utilizarIten;
            var dialogo;
            var pressKey;

            var moverPersonagem = [0,0];
            var nivelDeSolo = 1;
            var outfit = "M";

            var inativo = false;
            var datainicioinatividade = new Date();
            
            var identificadorDoChat = 0;
            var mensagensDoChatDefault = "Bem Vindo!";
            var mensagensDoChatServerLog = "";
            var mensagensDoChatNpc = "";
            var nivelDeConversaNpc = 0;

            var mensagensDoChatHistoria1 = "";
            //mensagensDoChatHistoria1 += "Servidor em Manutenção!\n\n";
            mensagensDoChatHistoria1 += "História:\n\nEste mundo foi criado após muitos acontecimentos, e os dados coletados até hoje são que a sacola ao lado nos fornece uma poção de vida infinita, uma corda para sairmos desta escuridão e uma pá que ainda não sabemos onde utiliza-la, mas com certeza será útil... Segundo rumores ela será útil ao sairmos destas cavernas, mas viajantes disseram que há perigos pelo caminho e como recompensa no topo existe um NPC mestre em magias com tarefas que dão muita experiencia, e ele reinicia uma quest misteriosa... (por esta poção de vida infinita acredito que teremos muitos desafios pela frente)";
            var mensagensDoChatHistoriaNovidades1 = "";
            //mensagensDoChatHistoriaNovidades1 += "Servidor em Manutenção!\n\n";
            mensagensDoChatHistoriaNovidades1 += "Novidades:\n\n-A magia exura é a base de uma longa jornada;\n\n-A magia exura gran é para os mais experientes;\n\n-A magia exori é a nova sensação;\n\n-O historiador está em busca de novos dados...\n\n-Quest pricipal adicionada! Procure por ela a direita do mapa, mas tome cuidado!\n\n-A magia exori gran chegou para ajudar nas suas tasks;\n\n-A regeneração natural está a todo vapor, ela melhora de acordo ao seu level.";

        </script>
    </head>
    <body onload="setInterval('loop()', 1000); setInterval('funcMoverPersonagem()', 10);" onKeyPress="pressKey(event)">
        <div id='mapa1'style='position:fixed; top: -60; left: -60;'>
            <div id='m1r1'style='top: 0'>
                <div id='m1r1c1' style='width: 60; height: 60; float: left'>
                    <img id='campo00' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [-4,-5];"></img>
                    <div id='nomeCampo00' style='position:fixed; top: -55; left: -55; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo00' title='hp' style='position:fixed; top: -59; left: -55; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo00' title='hp' style='position:fixed; top: -59; left: -55; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                    <div id='mensagemDivCampo00' style='position:fixed; top: -45; left: -55; width: 250; text-align: left; color: yellow; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
                    </div>
                </div>
                <div id='m1r1c1' style='width: 60; height: 60; float: left'>
                    <img id='campo01' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [-4,-4];"></img>
                    <div id='nomeCampo01' style='position:fixed; top: -55; left: 5; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo01' title='hp' style='position:fixed; top: -59; left: 5; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo01' title='hp' style='position:fixed; top: -59; left: 5; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                    <div id='mensagemDivCampo01' style='position:fixed; top: -45; left: 5; width: 250; text-align: left; color: yellow; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
                    </div>
                </div>
                <div id='m1r1c2' style='width: 60; height: 60; float: left'>
                    <img id='campo02' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [-4,-3];"></img>
                    <div id='nomeCampo02' style='position:fixed; top: -55; left: 65; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo02' title='hp' style='position:fixed; top: -59; left: 65; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo02' title='hp' style='position:fixed; top: -59; left: 65; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                    <div id='mensagemDivCampo02' style='position:fixed; top: -45; left: 65; width: 250; text-align: left; color: yellow; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
                    </div>
                </div>
                <div id='m1r1c3' style='width: 60; height: 60; float: left'>
                    <img id='campo03' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [-4,-2];"></img>
                    <div id='nomeCampo03' style='position:fixed; top: -55; left: 125; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo03' title='hp' style='position:fixed; top: -59; left: 125; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo03' title='hp' style='position:fixed; top: -59; left: 125; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                    <div id='mensagemDivCampo03' style='position:fixed; top: -45; left: 125; width: 250; text-align: left; color: yellow; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
                    </div>
                </div>
                <div id='m1r1c4' style='width: 60; height: 60; float: left'>
                    <img id='campo04' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [-4,-1];"></img>
                    <div id='nomeCampo04' style='position:fixed; top: -55; left: 185; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo04' title='hp' style='position:fixed; top: -59; left: 185; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo04' title='hp' style='position:fixed; top: -59; left: 185; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                    <div id='mensagemDivCampo04' style='position:fixed; top: -45; left: 185; width: 250; text-align: left; color: yellow; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
                    </div>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo05' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [-4,0];"></img>
                    <div id='nomeCampo05' style='position:fixed; top: -55; left: 245; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo05' title='hp' style='position:fixed; top: -59; left: 245; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo05' title='hp' style='position:fixed; top: -59; left: 245; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                    <div id='mensagemDivCampo05' style='position:fixed; top: -45; left: 245; width: 250; text-align: left; color: yellow; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
                    </div>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo06' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [-4,1];"></img>
                    <div id='nomeCampo06' style='position:fixed; top: -55; left: 305; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo06' title='hp' style='position:fixed; top: -59; left: 305; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo06' title='hp' style='position:fixed; top: -59; left: 305; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                    <div id='mensagemDivCampo06' style='position:fixed; top: -45; left: 305; width: 250; text-align: left; color: yellow; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
                    </div>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo07' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [-4,2];"></img>
                    <div id='nomeCampo07' style='position:fixed; top: -55; left: 365; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo07' title='hp' style='position:fixed; top: -59; left: 365; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo07' title='hp' style='position:fixed; top: -59; left: 365; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                    <div id='mensagemDivCampo07' style='position:fixed; top: -45; left: 365; width: 250; text-align: left; color: yellow; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
                    </div>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo08' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [-4,3];"></img>
                    <div id='nomeCampo08' style='position:fixed; top: -55; left: 425; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo08' title='hp' style='position:fixed; top: -59; left: 425; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo08' title='hp' style='position:fixed; top: -59; left: 425; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                    <div id='mensagemDivCampo08' style='position:fixed; top: -45; left: 425; width: 250; text-align: left; color: yellow; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
                    </div>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo09' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [-4,4];"></img>
                    <div id='nomeCampo09' style='position:fixed; top: -55; left: 485; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo09' title='hp' style='position:fixed; top: -59; left: 485; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo09' title='hp' style='position:fixed; top: -59; left: 485; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                    <div id='mensagemDivCampo09' style='position:fixed; top: -45; left: 485; width: 250; text-align: left; color: yellow; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
                    </div>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo010' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [-4,5];"></img>
                    <div id='nomeCampo010' style='position:fixed; top: -55; left: 545; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo010' title='hp' style='position:fixed; top: -59; left: 545; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo010' title='hp' style='position:fixed; top: 59; left: 545; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                    <div id='mensagemDivCampo010' style='position:fixed; top: -45; left: 545; width: 250; text-align: left; color: yellow; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
                    </div>
                </div>
            </div>
            <div id='m1r1'style='top: 0'>
                <div id='m1r1c1' style='width: 60; height: 60; float: left'>
                    <img id='campo001' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [-3,-5];"></img>
                    <div id='nomeCampo001' style='position:fixed; top: 5; left: -55; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo001' title='hp' style='position:fixed; top: 1; left: -55; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo001' title='hp' style='position:fixed; top: 1; left: -55; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                    <div id='mensagemDivCampo001' style='position:fixed; top: 15; left: -55; width: 250; text-align: left; color: yellow; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
                    </div>
                </div>
                <div id='m1r1c1' style='width: 60; height: 60; float: left'>
                    <img id='campo1' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [-3,-4];"></img>
                    <div id='nomeCampo1' style='position:fixed; top: 5; left: 5; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo1' title='hp' style='position:fixed; top: 1; left: 5; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo1' title='hp' style='position:fixed; top: 1; left: 5; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                    <div id='mensagemDivCampo1' style='position:fixed; top: 15; left: 5; width: 250; text-align: left; color: yellow; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
                    </div>
                </div>
                <div id='m1r1c2' style='width: 60; height: 60; float: left'>
                    <img id='campo2' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [-3,-3];"></img>
                    <div id='nomeCampo2' style='position:fixed; top: 5; left: 65; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo2' title='hp' style='position:fixed; top: 1; left: 65; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo2' title='hp' style='position:fixed; top: 1; left: 65; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                    <div id='mensagemDivCampo2' style='position:fixed; top: 15; left: 65; width: 250; text-align: left; color: yellow; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
                    </div>
                </div>
                <div id='m1r1c3' style='width: 60; height: 60; float: left'>
                    <img id='campo3' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [-3,-2];"></img>
                    <div id='nomeCampo3' style='position:fixed; top: 5; left: 125; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo3' title='hp' style='position:fixed; top: 1; left: 125; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo3' title='hp' style='position:fixed; top: 1; left: 125; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                    <div id='mensagemDivCampo3' style='position:fixed; top: 15; left: 125; width: 250; text-align: left; color: yellow; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
                    </div>
                </div>
                <div id='m1r1c4' style='width: 60; height: 60; float: left'>
                    <img id='campo4' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [-3,-1];"></img>
                    <div id='nomeCampo4' style='position:fixed; top: 5; left: 185; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo4' title='hp' style='position:fixed; top: 1; left: 185; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo4' title='hp' style='position:fixed; top: 1; left: 185; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                    <div id='mensagemDivCampo4' style='position:fixed; top: 15; left: 185; width: 250; text-align: left; color: yellow; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
                    </div>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo5' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [-3,0];"></img>
                    <div id='nomeCampo5' style='position:fixed; top: 5; left: 245; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo5' title='hp' style='position:fixed; top: 1; left: 245; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo5' title='hp' style='position:fixed; top: 1; left: 245; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                    <div id='mensagemDivCampo5' style='position:fixed; top: 15; left: 245; width: 250; text-align: left; color: yellow; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
                    </div>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo6' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [-3,1];"></img>
                    <div id='nomeCampo6' style='position:fixed; top: 5; left: 305; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo6' title='hp' style='position:fixed; top: 1; left: 305; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo6' title='hp' style='position:fixed; top: 1; left: 305; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                    <div id='mensagemDivCampo6' style='position:fixed; top: 15; left: 305; width: 250; text-align: left; color: yellow; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
                    </div>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo7' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [-3,2];"></img>
                    <div id='nomeCampo7' style='position:fixed; top: 5; left: 365; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo7' title='hp' style='position:fixed; top: 1; left: 365; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo7' title='hp' style='position:fixed; top: 1; left: 365; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                    <div id='mensagemDivCampo7' style='position:fixed; top: 15; left: 365; width: 250; text-align: left; color: yellow; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
                    </div>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo8' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [-3,3];"></img>
                    <div id='nomeCampo8' style='position:fixed; top: 5; left: 425; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo8' title='hp' style='position:fixed; top: 1; left: 425; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo8' title='hp' style='position:fixed; top: 1; left: 425; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                    <div id='mensagemDivCampo8' style='position:fixed; top: 15; left: 425; width: 250; text-align: left; color: yellow; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
                    </div>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo9' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [-3,4];"></img>
                    <div id='nomeCampo9' style='position:fixed; top: 5; left: 485; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo9' title='hp' style='position:fixed; top: 1; left: 485; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo9' title='hp' style='position:fixed; top: 1; left: 485; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                    <div id='mensagemDivCampo9' style='position:fixed; top: 15; left: 485; width: 250; text-align: left; color: yellow; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
                    </div>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo110' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [-3,5];"></img>
                    <div id='nomeCampo110' style='position:fixed; top: 5; left: 545; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo110' title='hp' style='position:fixed; top: 1; left: 545; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo110' title='hp' style='position:fixed; top: 1; left: 545; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                    <div id='mensagemDivCampo110' style='position:fixed; top: 15; left: 545; width: 250; text-align: left; color: yellow; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
                    </div>
                </div>
            </div>
            <div id='m1r1'style='top: 0'>
                <div id='m1r1c1' style='width: 60; height: 60; float: left'>
                    <img id='campo002' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [-2,-5];"></img>
                    <div id='nomeCampo002' style='position:fixed; top: 65; left: -55; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo002' title='hp' style='position:fixed; top: 61; left: -55; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo002' title='hp' style='position:fixed; top: 61; left: -55; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                    <div id='mensagemDivCampo002' style='position:fixed; top: 75; left: -55; width: 250; text-align: left; color: yellow; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
                    </div>
                </div>
                <div id='m1r1c1' style='width: 60; height: 60; float: left'>
                    <img id='campo10' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [-2,-4];"></img>
                    <div id='nomeCampo10' style='position:fixed; top: 65; left: 5; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo10' title='hp' style='position:fixed; top: 61; left: 5; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo10' title='hp' style='position:fixed; top: 61; left: 5; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                    <div id='mensagemDivCampo10' style='position:fixed; top: 75; left: 5; width: 250; text-align: left; color: yellow; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
                    </div>
                </div>
                <div id='m1r1c2' style='width: 60; height: 60; float: left'>
                    <img id='campo11' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [-2,-3];"></img>
                    <div id='nomeCampo11' style='position:fixed; top: 65; left: 65; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo11' title='hp' style='position:fixed; top: 61; left: 65; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo11' title='hp' style='position:fixed; top: 61; left: 65; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                    <div id='mensagemDivCampo11' style='position:fixed; top: 75; left: 65; width: 250; text-align: left; color: yellow; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
                    </div>
                </div>
                <div id='m1r1c3' style='width: 60; height: 60; float: left'>
                    <img id='campo12' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [-2,-2];"></img>
                    <div id='nomeCampo12' style='position:fixed; top: 65; left: 125; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo12' title='hp' style='position:fixed; top: 61; left: 125; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo12' title='hp' style='position:fixed; top: 61; left: 125; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                    <div id='mensagemDivCampo12' style='position:fixed; top: 75; left: 125; width: 250; text-align: left; color: yellow; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
                    </div>
                </div>
                <div id='m1r1c4' style='width: 60; height: 60; float: left'>
                    <img id='campo13' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [-2,-1];"></img>
                    <div id='nomeCampo13' style='position:fixed; top: 65; left: 185; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo13' title='hp' style='position:fixed; top: 61; left: 185; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo13' title='hp' style='position:fixed; top: 61; left: 185; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                    <div id='mensagemDivCampo13' style='position:fixed; top: 75; left: 185; width: 250; text-align: left; color: yellow; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
                    </div>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo14' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [-2,0];"></img>
                    <div id='nomeCampo14' style='position:fixed; top: 65; left: 245; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo14' title='hp' style='position:fixed; top: 61; left: 245; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo14' title='hp' style='position:fixed; top: 61; left: 245; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                    <div id='mensagemDivCampo14' style='position:fixed; top: 75; left: 245; width: 250; text-align: left; color: yellow; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
                    </div>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo15' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [-2,1];"></img>
                    <div id='nomeCampo15' style='position:fixed; top: 65; left: 305; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo15' title='hp' style='position:fixed; top: 61; left: 305; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo15' title='hp' style='position:fixed; top: 61; left: 305; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                    <div id='mensagemDivCampo15' style='position:fixed; top: 75; left: 305; width: 250; text-align: left; color: yellow; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
                    </div>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo16' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [-2,2];"></img>
                    <div id='nomeCampo16' style='position:fixed; top: 65; left: 365; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo16' title='hp' style='position:fixed; top: 61; left: 365; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo16' title='hp' style='position:fixed; top: 61; left: 365; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                    <div id='mensagemDivCampo16' style='position:fixed; top: 75; left: 365; width: 250; text-align: left; color: yellow; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
                    </div>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo17' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [-2,3];"></img>
                    <div id='nomeCampo17' style='position:fixed; top: 65; left: 425; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo17' title='hp' style='position:fixed; top: 61; left: 425; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo17' title='hp' style='position:fixed; top: 61; left: 425; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                    <div id='mensagemDivCampo17' style='position:fixed; top: 75; left: 425; width: 250; text-align: left; color: yellow; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
                    </div>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo18' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [-2,4];"></img>
                    <div id='nomeCampo18' style='position:fixed; top: 65; left: 485; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo18' title='hp' style='position:fixed; top: 61; left: 485; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo18' title='hp' style='position:fixed; top: 61; left: 485; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                    <div id='mensagemDivCampo18' style='position:fixed; top: 75; left: 485; width: 250; text-align: left; color: yellow; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
                    </div>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo210' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [-2,5];"></img>
                    <div id='nomeCampo210' style='position:fixed; top: 65; left: 545; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo210' title='hp' style='position:fixed; top: 61; left: 545; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo210' title='hp' style='position:fixed; top: 61; left: 545; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                    <div id='mensagemDivCampo210' style='position:fixed; top: 75; left: 545; width: 250; text-align: left; color: yellow; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
                    </div>
                </div>
            </div>
            <div id='m1r1'style='top: 0'>
                <div id='m1r1c1' style='width: 60; height: 60; float: left'>
                    <img id='campo003' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [-1,-5];"></img>
                    <div id='nomeCampo003' style='position:fixed; top: 125; left: -55; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo003' title='hp' style='position:fixed; top: 121; left: -55; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo003' title='hp' style='position:fixed; top: 121; left: -55; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                    <div id='mensagemDivCampo003' style='position:fixed; top: 135; left: -55; width: 250; text-align: left; color: yellow; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
                    </div>
                </div>
                <div id='m1r1c1' style='width: 60; height: 60; float: left'>
                    <img id='campo19' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [-1,-4];"></img>
                    <div id='nomeCampo19' style='position:fixed; top: 125; left: 5; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo19' title='hp' style='position:fixed; top: 121; left: 5; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo19' title='hp' style='position:fixed; top: 121; left: 5; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                    <div id='mensagemDivCampo19' style='position:fixed; top: 135; left: 5; width: 250; text-align: left; color: yellow; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
                    </div>
                </div>
                <div id='m1r1c2' style='width: 60; height: 60; float: left'>
                    <img id='campo20' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [-1,-3];"></img>
                    <div id='nomeCampo20' style='position:fixed; top: 125; left: 65; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo20' title='hp' style='position:fixed; top: 121; left: 65; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo20' title='hp' style='position:fixed; top: 121; left: 65; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                    <div id='mensagemDivCampo20' style='position:fixed; top: 135; left: 65; width: 250; text-align: left; color: yellow; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
                    </div>
                </div>
                <div id='m1r1c3' style='width: 60; height: 60; float: left'>
                    <img id='campo21' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [-1,-2];"></img>
                    <div id='nomeCampo21' style='position:fixed; top: 125; left: 125; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo21' title='hp' style='position:fixed; top: 121; left: 125; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo21' title='hp' style='position:fixed; top: 121; left: 125; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                    <div id='mensagemDivCampo21' style='position:fixed; top: 135; left: 125; width: 250; text-align: left; color: yellow; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
                    </div>
                </div>
                <div id='m1r1c4' style='width: 60; height: 60; float: left'>
                    <img id='campo22' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [-1,-1];"></img>
                    <div id='nomeCampo22' style='position:fixed; top: 125; left: 185; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo22' title='hp' style='position:fixed; top: 121; left: 185; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo22' title='hp' style='position:fixed; top: 121; left: 185; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                    <div id='mensagemDivCampo22' style='position:fixed; top: 135; left: 185; width: 250; text-align: left; color: yellow; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
                    </div>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo23' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [-1,0];"></img>
                    <div id='nomeCampo23' style='position:fixed; top: 125; left: 245; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo23' title='hp' style='position:fixed; top: 121; left: 245; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo23' title='hp' style='position:fixed; top: 121; left: 245; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                    <div id='mensagemDivCampo23' style='position:fixed; top: 135; left: 245; width: 250; text-align: left; color: yellow; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
                    </div>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo24' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [-1,1];"></img>
                    <div id='nomeCampo24' style='position:fixed; top: 125; left: 305; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo24' title='hp' style='position:fixed; top: 121; left: 305; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo24' title='hp' style='position:fixed; top: 121; left: 305; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                    <div id='mensagemDivCampo24' style='position:fixed; top: 135; left: 305; width: 250; text-align: left; color: yellow; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
                    </div>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo25' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [-1,2];"></img>
                    <div id='nomeCampo25' style='position:fixed; top: 125; left: 365; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo25' title='hp' style='position:fixed; top: 121; left: 365; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo25' title='hp' style='position:fixed; top: 121; left: 365; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                    <div id='mensagemDivCampo25' style='position:fixed; top: 135; left: 365; width: 250; text-align: left; color: yellow; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
                    </div>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo26' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [-1,3];"></img>
                    <div id='nomeCampo26' style='position:fixed; top: 125; left: 425; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo26' title='hp' style='position:fixed; top: 121; left: 425; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo26' title='hp' style='position:fixed; top: 121; left: 425; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                    <div id='mensagemDivCampo26' style='position:fixed; top: 135; left: 425; width: 250; text-align: left; color: yellow; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
                    </div>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo27' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [-1,4];"></img>
                    <div id='nomeCampo27' style='position:fixed; top: 125; left: 485; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo27' title='hp' style='position:fixed; top: 121; left: 485; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo27' title='hp' style='position:fixed; top: 121; left: 485; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                    <div id='mensagemDivCampo27' style='position:fixed; top: 135; left: 485; width: 250; text-align: left; color: yellow; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
                    </div>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo310' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [-1,5];"></img>
                    <div id='nomeCampo310' style='position:fixed; top: 125; left: 545; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo310' title='hp' style='position:fixed; top: 121; left: 545; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo310' title='hp' style='position:fixed; top: 121; left: 545; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                    <div id='mensagemDivCampo310' style='position:fixed; top: 135; left: 545; width: 250; text-align: left; color: yellow; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
                    </div>
                </div>
            </div>
            <div id='m1r1'style='top: 0'>
                <div id='m1r1c1' style='width: 60; height: 60; float: left'>
                    <img id='campo004' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [0,-5];"></img>
                    <div id='nomeCampo004' style='position:fixed; top: 185; left: -55; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo004' title='hp' style='position:fixed; top: 181; left: -55; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo004' title='hp' style='position:fixed; top: 181; left: -55; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                    <div id='mensagemDivCampo004' style='position:fixed; top: 195; left: -55; width: 250; text-align: left; color: yellow; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
                    </div>
                </div>
                <div id='m1r1c1' style='width: 60; height: 60; float: left'>
                    <img id='campo28' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [0,-4];"></img>
                    <div id='nomeCampo28' style='position:fixed; top: 185; left: 5; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo28' title='hp' style='position:fixed; top: 181; left: 5; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo28' title='hp' style='position:fixed; top: 181; left: 5; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                    <div id='mensagemDivCampo28' style='position:fixed; top: 195; left: 5; width: 250; text-align: left; color: yellow; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
                    </div>
                </div>
                <div id='m1r1c2' style='width: 60; height: 60; float: left'>
                    <img id='campo29' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [0,-3];"></img>
                    <div id='nomeCampo29' style='position:fixed; top: 185; left: 65; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo29' title='hp' style='position:fixed; top: 181; left: 65; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo29' title='hp' style='position:fixed; top: 181; left: 65; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                    <div id='mensagemDivCampo29' style='position:fixed; top: 195; left: 65; width: 250; text-align: left; color: yellow; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
                    </div>
                </div>
                <div id='m1r1c3' style='width: 60; height: 60; float: left'>
                    <img id='campo30' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [0,-2];"></img>
                    <div id='nomeCampo30' style='position:fixed; top: 185; left: 125; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo30' title='hp' style='position:fixed; top: 181; left: 125; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo30' title='hp' style='position:fixed; top: 181; left: 125; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                    <div id='mensagemDivCampo30' style='position:fixed; top: 195; left: 125; width: 250; text-align: left; color: yellow; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
                    </div>
                </div>
                <div id='m1r1c4' style='width: 60; height: 60; float: left'>
                    <img id='campo31' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [0,-1];"></img>
                    <div id='nomeCampo31' style='position:fixed; top: 185; left: 185; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo31' title='hp' style='position:fixed; top: 181; left: 185; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo31' title='hp' style='position:fixed; top: 181; left: 185; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                    <div id='mensagemDivCampo31' style='position:fixed; top: 195; left: 185; width: 250; text-align: left; color: yellow; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
                    </div>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo32' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%'></img>
                    <div id='nomeCampo32' style='position:fixed; top: 185; left: 245; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo32' title='hp' style='position:fixed; top: 181; left: 245; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo32' title='hp' style='position:fixed; top: 181; left: 245; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                    <div id='mensagemDivCampo32' style='position:fixed; top: 195; left: 245; width: 250; text-align: left; color: yellow; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
                    </div>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo33' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [0,1];"></img>
                    <div id='nomeCampo33' style='position:fixed; top: 185; left: 305; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo33' title='hp' style='position:fixed; top: 181; left: 305; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo33' title='hp' style='position:fixed; top: 181; left: 305; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                    <div id='mensagemDivCampo33' style='position:fixed; top: 195; left: 305; width: 250; text-align: left; color: yellow; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
                    </div>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo34' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [0,2];"></img>
                    <div id='nomeCampo34' style='position:fixed; top: 185; left: 365; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo34' title='hp' style='position:fixed; top: 181; left: 365; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo34' title='hp' style='position:fixed; top: 181; left: 365; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                    <div id='mensagemDivCampo34' style='position:fixed; top: 195; left: 365; width: 250; text-align: left; color: yellow; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
                    </div>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo35' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [0,3];"></img>
                    <div id='nomeCampo35' style='position:fixed; top: 185; left: 425; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo35' title='hp' style='position:fixed; top: 181; left: 425; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo35' title='hp' style='position:fixed; top: 181; left: 425; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                    <div id='mensagemDivCampo35' style='position:fixed; top: 195; left: 425; width: 250; text-align: left; color: yellow; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
                    </div>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo36' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [0,4];"></img>
                    <div id='nomeCampo36' style='position:fixed; top: 185; left: 485; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo36' title='hp' style='position:fixed; top: 181; left: 485; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo36' title='hp' style='position:fixed; top: 181; left: 485; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                    <div id='mensagemDivCampo36' style='position:fixed; top: 195; left: 485; width: 250; text-align: left; color: yellow; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
                    </div>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo410' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [0,5];"></img>
                    <div id='nomeCampo410' style='position:fixed; top: 185; left: 545; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo410' title='hp' style='position:fixed; top: 181; left: 545; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo410' title='hp' style='position:fixed; top: 181; left: 545; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                    <div id='mensagemDivCampo410' style='position:fixed; top: 195; left: 545; width: 250; text-align: left; color: yellow; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
                    </div>
                </div>
            </div>
            <div id='m1r1'style='top: 0'>
                <div id='m1r1c1' style='width: 60; height: 60; float: left'>
                    <img id='campo005' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [1,-5];"></img>
                    <div id='nomeCampo005' style='position:fixed; top: 245; left: -55; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo005' title='hp' style='position:fixed; top: 241; left: -55; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo005' title='hp' style='position:fixed; top: 241; left: -55; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                    <div id='mensagemDivCampo005' style='position:fixed; top: 255; left: -55; width: 250; text-align: left; color: yellow; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
                    </div>
                </div>
                <div id='m1r1c1' style='width: 60; height: 60; float: left'>
                    <img id='campo37' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [1,-4];"></img>
                    <div id='nomeCampo37' style='position:fixed; top: 245; left: 5; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo37' title='hp' style='position:fixed; top: 241; left: 5; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo37' title='hp' style='position:fixed; top: 241; left: 5; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                    <div id='mensagemDivCampo37' style='position:fixed; top: 255; left: 5; width: 250; text-align: left; color: yellow; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
                    </div>
                </div>
                <div id='m1r1c2' style='width: 60; height: 60; float: left'>
                    <img id='campo38' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [1,-3];"></img>
                    <div id='nomeCampo38' style='position:fixed; top: 245; left: 65; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo38' title='hp' style='position:fixed; top: 241; left: 65; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo38' title='hp' style='position:fixed; top: 241; left: 65; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                    <div id='mensagemDivCampo38' style='position:fixed; top: 255; left: 65; width: 250; text-align: left; color: yellow; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
                    </div>
                </div>
                <div id='m1r1c3' style='width: 60; height: 60; float: left'>
                    <img id='campo39' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [1,-2];"></img>
                    <div id='nomeCampo39' style='position:fixed; top: 245; left: 125; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo39' title='hp' style='position:fixed; top: 241; left: 125; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo39' title='hp' style='position:fixed; top: 241; left: 125; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                    <div id='mensagemDivCampo39' style='position:fixed; top: 255; left: 125; width: 250; text-align: left; color: yellow; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
                    </div>
                </div>
                <div id='m1r1c4' style='width: 60; height: 60; float: left'>
                    <img id='campo40' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [1,-1];"></img>
                    <div id='nomeCampo40' style='position:fixed; top: 245; left: 185; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo40' title='hp' style='position:fixed; top: 241; left: 185; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo40' title='hp' style='position:fixed; top: 241; left: 185; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                    <div id='mensagemDivCampo40' style='position:fixed; top: 255; left: 185; width: 250; text-align: left; color: yellow; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
                    </div>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo41' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [1,0];"></img>
                    <div id='nomeCampo41' style='position:fixed; top: 245; left: 245; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo41' title='hp' style='position:fixed; top: 241; left: 245; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo41' title='hp' style='position:fixed; top: 241; left: 245; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                    <div id='mensagemDivCampo41' style='position:fixed; top: 255; left: 245; width: 250; text-align: left; color: yellow; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
                    </div>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo42' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [1,1];"></img>
                    <div id='nomeCampo42' style='position:fixed; top: 245; left: 305; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo42' title='hp' style='position:fixed; top: 241; left: 305; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo42' title='hp' style='position:fixed; top: 241; left: 305; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                    <div id='mensagemDivCampo42' style='position:fixed; top: 255; left: 305; width: 250; text-align: left; color: yellow; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
                    </div>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo43' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [1,2];"></img>
                    <div id='nomeCampo43' style='position:fixed; top: 245; left: 365; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo43' title='hp' style='position:fixed; top: 241; left: 365; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo43' title='hp' style='position:fixed; top: 241; left: 365; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                    <div id='mensagemDivCampo43' style='position:fixed; top: 255; left: 365; width: 250; text-align: left; color: yellow; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
                    </div>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo44' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [1,3];"></img>
                    <div id='nomeCampo44' style='position:fixed; top: 245; left: 425; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo44' title='hp' style='position:fixed; top: 241; left: 425; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo44' title='hp' style='position:fixed; top: 241; left: 425; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                    <div id='mensagemDivCampo44' style='position:fixed; top: 255; left: 425; width: 250; text-align: left; color: yellow; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
                    </div>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo45' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [1,4];"></img>
                    <div id='nomeCampo45' style='position:fixed; top: 245; left: 485; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo45' title='hp' style='position:fixed; top: 241; left: 485; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo45' title='hp' style='position:fixed; top: 241; left: 485; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                    <div id='mensagemDivCampo45' style='position:fixed; top: 255; left: 485; width: 250; text-align: left; color: yellow; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
                    </div>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo510' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [1,5];"></img>
                    <div id='nomeCampo510' style='position:fixed; top: 245; left: 545; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo510' title='hp' style='position:fixed; top: 241; left: 545; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo510' title='hp' style='position:fixed; top: 241; left: 545; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                    <div id='mensagemDivCampo510' style='position:fixed; top: 255; left: 545; width: 250; text-align: left; color: yellow; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
                    </div>
                </div>
            </div>
            <div id='m1r1'style='top: 0'>
                <div id='m1r1c1' style='width: 60; height: 60; float: left'>
                    <img id='campo006' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [2,-5];"></img>
                    <div id='nomeCampo006' style='position:fixed; top: 305; left: -55; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo006' title='hp' style='position:fixed; top: 301; left: -55; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo006' title='hp' style='position:fixed; top: 301; left: -55; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                    <div id='mensagemDivCampo006' style='position:fixed; top: 315; left: -55; width: 250; text-align: left; color: yellow; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
                    </div>
                </div>
                <div id='m1r1c1' style='width: 60; height: 60; float: left'>
                    <img id='campo46' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [2,-4];"></img>
                    <div id='nomeCampo46' style='position:fixed; top: 305; left: 5; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo46' title='hp' style='position:fixed; top: 301; left: 5; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo46' title='hp' style='position:fixed; top: 301; left: 5; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                    <div id='mensagemDivCampo46' style='position:fixed; top: 315; left: 5; width: 250; text-align: left; color: yellow; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
                    </div>
                </div>
                <div id='m1r1c2' style='width: 60; height: 60; float: left'>
                    <img id='campo47' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [2,-3];"></img>
                    <div id='nomeCampo47' style='position:fixed; top: 305; left: 65; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo47' title='hp' style='position:fixed; top: 301; left: 65; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo47' title='hp' style='position:fixed; top: 301; left: 65; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                    <div id='mensagemDivCampo47' style='position:fixed; top: 315; left: 65; width: 250; text-align: left; color: yellow; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
                    </div>
                </div>
                <div id='m1r1c3' style='width: 60; height: 60; float: left'>
                    <img id='campo48' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [2,-2];"></img>
                    <div id='nomeCampo48' style='position:fixed; top: 305; left: 125; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo48' title='hp' style='position:fixed; top: 301; left: 125; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo48' title='hp' style='position:fixed; top: 301; left: 125; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                    <div id='mensagemDivCampo48' style='position:fixed; top: 315; left: 125; width: 250; text-align: left; color: yellow; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
                    </div>
                </div>
                <div id='m1r1c4' style='width: 60; height: 60; float: left'>
                    <img id='campo49' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [2,-1];"></img>
                    <div id='nomeCampo49' style='position:fixed; top: 305; left: 185; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo49' title='hp' style='position:fixed; top: 301; left: 185; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo49' title='hp' style='position:fixed; top: 301; left: 185; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                    <div id='mensagemDivCampo49' style='position:fixed; top: 315; left: 185; width: 250; text-align: left; color: yellow; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
                    </div>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo50' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [2,0];"></img>
                    <div id='nomeCampo50' style='position:fixed; top: 305; left: 245; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo50' title='hp' style='position:fixed; top: 301; left: 245; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo50' title='hp' style='position:fixed; top: 301; left: 245; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                    <div id='mensagemDivCampo50' style='position:fixed; top: 315; left: 245; width: 250; text-align: left; color: yellow; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
                    </div>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo51' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [2,1];"></img>
                    <div id='nomeCampo51' style='position:fixed; top: 305; left: 305; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo51' title='hp' style='position:fixed; top: 301; left: 305; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo51' title='hp' style='position:fixed; top: 301; left: 305; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                    <div id='mensagemDivCampo51' style='position:fixed; top: 315; left: 305; width: 250; text-align: left; color: yellow; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
                    </div>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo52' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [2,2];"></img>
                    <div id='nomeCampo52' style='position:fixed; top: 305; left: 365; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo52' title='hp' style='position:fixed; top: 301; left: 365; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo52' title='hp' style='position:fixed; top: 301; left: 365; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                    <div id='mensagemDivCampo52' style='position:fixed; top: 315; left: 365; width: 250; text-align: left; color: yellow; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
                    </div>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo53' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [2,3];"></img>
                    <div id='nomeCampo53' style='position:fixed; top: 305; left: 425; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo53' title='hp' style='position:fixed; top: 301; left: 425; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo53' title='hp' style='position:fixed; top: 301; left: 425; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                    <div id='mensagemDivCampo53' style='position:fixed; top: 315; left: 425; width: 250; text-align: left; color: yellow; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
                    </div>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo54' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [2,4];"></img>
                    <div id='nomeCampo54' style='position:fixed; top: 305; left: 485; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo54' title='hp' style='position:fixed; top: 301; left: 485; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo54' title='hp' style='position:fixed; top: 301; left: 485; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                    <div id='mensagemDivCampo54' style='position:fixed; top: 315; left: 485; width: 250; text-align: left; color: yellow; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
                    </div>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo610' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [2,5];"></img>
                    <div id='nomeCampo610' style='position:fixed; top: 305; left: 545; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo610' title='hp' style='position:fixed; top: 301; left: 545; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo610' title='hp' style='position:fixed; top: 301; left: 545; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                    <div id='mensagemDivCampo610' style='position:fixed; top: 315; left: 545; width: 250; text-align: left; color: yellow; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
                    </div>
                </div>
            </div>
            <div id='m1r1'style='top: 0'>
                <div id='m1r1c1' style='width: 60; height: 60; float: left'>
                    <img id='campo007' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [3,-5];"></img>
                    <div id='nomeCampo007' style='position:fixed; top: 365; left: -55; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo007' title='hp' style='position:fixed; top: 361; left: -55; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo007' title='hp' style='position:fixed; top: 361; left: -55; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                    <div id='mensagemDivCampo007' style='position:fixed; top: 375; left: -55; width: 250; text-align: left; color: yellow; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
                    </div>
                </div>
                <div id='m1r1c1' style='width: 60; height: 60; float: left'>
                    <img id='campo55' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [3,-4];"></img>
                    <div id='nomeCampo55' style='position:fixed; top: 365; left: 5; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo55' title='hp' style='position:fixed; top: 361; left: 5; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo55' title='hp' style='position:fixed; top: 361; left: 5; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                    <div id='mensagemDivCampo55' style='position:fixed; top: 375; left: 5; width: 250; text-align: left; color: yellow; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
                    </div>
                </div>
                <div id='m1r1c2' style='width: 60; height: 60; float: left'>
                    <img id='campo56' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [3,-3];"></img>
                    <div id='nomeCampo56' style='position:fixed; top: 365; left: 65; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo56' title='hp' style='position:fixed; top: 361; left: 65; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo56' title='hp' style='position:fixed; top: 361; left: 65; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                    <div id='mensagemDivCampo56' style='position:fixed; top: 375; left: 65; width: 250; text-align: left; color: yellow; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
                    </div>
                </div>
                <div id='m1r1c3' style='width: 60; height: 60; float: left'>
                    <img id='campo57' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [3,-2];"></img>
                    <div id='nomeCampo57' style='position:fixed; top: 365; left: 125; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo57' title='hp' style='position:fixed; top: 361; left: 125; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo57' title='hp' style='position:fixed; top: 361; left: 125; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                    <div id='mensagemDivCampo57' style='position:fixed; top: 375; left: 125; width: 250; text-align: left; color: yellow; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
                    </div>
                </div>
                <div id='m1r1c4' style='width: 60; height: 60; float: left'>
                    <img id='campo58' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [3,-1];"></img>
                    <div id='nomeCampo58' style='position:fixed; top: 365; left: 185; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo58' title='hp' style='position:fixed; top: 361; left: 185; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo58' title='hp' style='position:fixed; top: 361; left: 185; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                    <div id='mensagemDivCampo58' style='position:fixed; top: 375; left: 185; width: 250; text-align: left; color: yellow; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
                    </div>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo59' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [3,0];"></img>
                    <div id='nomeCampo59' style='position:fixed; top: 365; left: 245; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo59' title='hp' style='position:fixed; top: 361; left: 245; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo59' title='hp' style='position:fixed; top: 361; left: 245; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                    <div id='mensagemDivCampo59' style='position:fixed; top: 375; left: 245; width: 250; text-align: left; color: yellow; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
                    </div>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo60' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [3,1];"></img>
                    <div id='nomeCampo60' style='position:fixed; top: 365; left: 305; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo60' title='hp' style='position:fixed; top: 361; left: 305; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo60' title='hp' style='position:fixed; top: 361; left: 305; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                    <div id='mensagemDivCampo60' style='position:fixed; top: 375; left: 305; width: 250; text-align: left; color: yellow; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
                    </div>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo61' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [3,2];"></img>
                    <div id='nomeCampo61' style='position:fixed; top: 365; left: 365; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo61' title='hp' style='position:fixed; top: 361; left: 365; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo61' title='hp' style='position:fixed; top: 361; left: 365; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                    <div id='mensagemDivCampo61' style='position:fixed; top: 375; left: 365; width: 250; text-align: left; color: yellow; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
                    </div>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo62' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [3,3];"></img>
                    <div id='nomeCampo62' style='position:fixed; top: 365; left: 425; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo62' title='hp' style='position:fixed; top: 361; left: 425; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo62' title='hp' style='position:fixed; top: 361; left: 425; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                    <div id='mensagemDivCampo62' style='position:fixed; top: 375; left: 425; width: 250; text-align: left; color: yellow; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
                    </div>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo63' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [3,4];"></img>
                    <div id='nomeCampo63' style='position:fixed; top: 365; left: 485; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo63' title='hp' style='position:fixed; top: 361; left: 485; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo63' title='hp' style='position:fixed; top: 361; left: 485; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                    <div id='mensagemDivCampo63' style='position:fixed; top: 375; left: 485; width: 250; text-align: left; color: yellow; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
                    </div>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo710' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [3,5];"></img>
                    <div id='nomeCampo710' style='position:fixed; top: 365; left: 545; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo710' title='hp' style='position:fixed; top: 361; left: 545; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo710' title='hp' style='position:fixed; top: 361; left: 545; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                    <div id='mensagemDivCampo710' style='position:fixed; top: 375; left: 545; width: 250; text-align: left; color: yellow; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
                    </div>
                </div>
            </div>
            <div id='m1r1'style='top: 0'>
                <div id='m1r1c1' style='width: 60; height: 60; float: left'>
                    <img id='campo008' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [4,-5];"></img>
                    <div id='nomeCampo008' style='position:fixed; top: 425; left: -55; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo008' title='hp' style='position:fixed; top: 421; left: -55; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo008' title='hp' style='position:fixed; top: 421; left: -55; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                    <div id='mensagemDivCampo008' style='position:fixed; top: 435; left: -55; width: 250; text-align: left; color: yellow; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
                    </div>
                </div>
                <div id='m1r1c1' style='width: 60; height: 60; float: left'>
                    <img id='campo81' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [4,-4];"></img>
                    <div id='nomeCampo81' style='position:fixed; top: 425; left: 5; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo81' title='hp' style='position:fixed; top: 421; left: 5; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo81' title='hp' style='position:fixed; top: 421; left: 5; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                    <div id='mensagemDivCampo81' style='position:fixed; top: 435; left: 5; width: 250; text-align: left; color: yellow; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
                    </div>
                </div>
                <div id='m1r1c2' style='width: 60; height: 60; float: left'>
                    <img id='campo82' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [4,-3];"></img>
                    <div id='nomeCampo82' style='position:fixed; top: 425; left: 65; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo82' title='hp' style='position:fixed; top: 421; left: 65; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo82' title='hp' style='position:fixed; top: 421; left: 65; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                    <div id='mensagemDivCampo82' style='position:fixed; top: 435; left: 65; width: 250; text-align: left; color: yellow; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
                    </div>
                </div>
                <div id='m1r1c3' style='width: 60; height: 60; float: left'>
                    <img id='campo83' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [4,-2];"></img>
                    <div id='nomeCampo83' style='position:fixed; top: 425; left: 125; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo83' title='hp' style='position:fixed; top: 421; left: 125; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo83' title='hp' style='position:fixed; top: 421; left: 125; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                    <div id='mensagemDivCampo83' style='position:fixed; top: 435; left: 125; width: 250; text-align: left; color: yellow; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
                    </div>
                </div>
                <div id='m1r1c4' style='width: 60; height: 60; float: left'>
                    <img id='campo84' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [4,-1];"></img>
                    <div id='nomeCampo84' style='position:fixed; top: 425; left: 185; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo84' title='hp' style='position:fixed; top: 421; left: 185; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo84' title='hp' style='position:fixed; top: 421; left: 185; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                    <div id='mensagemDivCampo84' style='position:fixed; top: 435; left: 185; width: 250; text-align: left; color: yellow; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
                    </div>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo85' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [4,0];"></img>
                    <div id='nomeCampo85' style='position:fixed; top: 425; left: 245; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo85' title='hp' style='position:fixed; top: 421; left: 245; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo85' title='hp' style='position:fixed; top: 421; left: 245; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                    <div id='mensagemDivCampo85' style='position:fixed; top: 435; left: 245; width: 250; text-align: left; color: yellow; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
                    </div>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo86' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [4,1];"></img>
                    <div id='nomeCampo86' style='position:fixed; top: 425; left: 305; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo86' title='hp' style='position:fixed; top: 421; left: 305; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo86' title='hp' style='position:fixed; top: 421; left: 305; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                    <div id='mensagemDivCampo86' style='position:fixed; top: 435; left: 305; width: 250; text-align: left; color: yellow; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
                    </div>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo87' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [4,2];"></img>
                    <div id='nomeCampo87' style='position:fixed; top: 425; left: 365; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo87' title='hp' style='position:fixed; top: 421; left: 365; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo87' title='hp' style='position:fixed; top: 421; left: 365; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                    <div id='mensagemDivCampo87' style='position:fixed; top: 435; left: 365; width: 250; text-align: left; color: yellow; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
                    </div>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo88' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [4,3];"></img>
                    <div id='nomeCampo88' style='position:fixed; top: 425; left: 425; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo88' title='hp' style='position:fixed; top: 421; left: 425; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo88' title='hp' style='position:fixed; top: 421; left: 425; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                    <div id='mensagemDivCampo88' style='position:fixed; top: 435; left: 425; width: 250; text-align: left; color: yellow; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
                    </div>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo89' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [4,4];"></img>
                    <div id='nomeCampo89' style='position:fixed; top: 425; left: 485; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo89' title='hp' style='position:fixed; top: 421; left: 485; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo89' title='hp' style='position:fixed; top: 421; left: 485; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                    <div id='mensagemDivCampo89' style='position:fixed; top: 435; left: 485; width: 250; text-align: left; color: yellow; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
                    </div>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo810' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [4,5];"></img>
                    <div id='nomeCampo810' style='position:fixed; top: 425; left: 545; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo810' title='hp' style='position:fixed; top: 421; left: 545; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo810' title='hp' style='position:fixed; top: 421; left: 545; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                    <div id='mensagemDivCampo810' style='position:fixed; top: 435; left: 545; width: 250; text-align: left; color: yellow; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
                    </div>
                </div>
            </div>
        </div>

        <div id='chathistoria' title='historia' style='position: fixed; top: 0; left: 0; width: 178; height:414; background-color: lightgray; opacity: 1; visibility: visible;'>
            <div id='campoDoChatHistoria' title='historia' style='float: left; top: 0; left: 0; margin: 1; width: 174; height: 390; background-color: #ccffff;'>
                <textarea id="textareaChatHistoria" name="textareaChatHistoria" title='historia' rows="24" cols="22" style="resize: none;" disabled></textarea>
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

        <div id='conversa' title='conversa' style='position: fixed; top: 160; left: 360; width: 178; background-color: lightgray; border-style: solid; border-color: gray; visibility: hidden;'>
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
        
        <img id='personagem1' src='imagens/imagemPersonagemDeFrente.png' alt='personagem' title='personagem' style='position:fixed; top: 185; left: 245; width: 50; height: 50;' onclick="document.getElementById('menuopcoes').style.visibility = 'visible';"></img>
        <div id='nomePersonagem1' style='position:fixed; top: 185; left: 245; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
        </div>
        <div id='barraHpVaziaPersonagem1' title='hp' style='position:fixed; top: 181; left: 245; width: 50; height: 3; background-color: black;'>
                
        </div>
        <div id='barraHpPersonagem1' title='hp' style='position:fixed; top: 181; left: 245; width: 50; height: 3; background-color: mediumseagreen;'>
    
        </div>
        <img id='fala1' src='imagens/imagemFalaVazia.png' alt='fala' style='position:fixed; top: 185; left: 245;'></img>
        <div id='mensagemDiv3' style='position:fixed; top: 195; left: 245; width: 250; text-align: left; color: yellow; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
        </div>
        <div id='mensagemDiv2' style='position:fixed; top: 400; left: 150; text-align: center; color: white; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
        </div>
        <div id='mensagemDiv1' style='position:fixed; top: 100; left: 150; width: 300; text-align: center; color: white; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
        </div>
        <div id='menuopcoes' style='position:fixed; top: 210; left: 270; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
            <div style='margin: 1; background-color: #4CAF50; color: white; border-radius: 15px 50px; border: none;' onclick="outfit = 'M'; document.getElementById('menuopcoes').style.visibility = 'hidden'; document.getElementById('personagem1').src = 'imagens/imagemPersonagemDeFrente.png';">
                Addon 1
            </div>
            <div style='margin: 1; background-color: #4CAF50; color: white; border-radius: 15px 50px; border: none;' onclick="outfit = 'F'; document.getElementById('menuopcoes').style.visibility = 'hidden'; document.getElementById('personagem1').src = 'imagens/imagemPersonagemDeFrenteF.png';">
                Addon 2
            </div>
        </div>
        <img id='mensagem1' src='imagens/imagemMensagemPersonagemInativo.png' alt='mensagem' title='mensagem' style='position:fixed; top: 185; left: 245; visibility: hidden;'></img>
        <div id='ok' alt='ok' title='ok' style='position:fixed; top: 302; left: 448; width: 35; height: 16;' onclick="if(document.getElementById('mensagem1').style.visibility == 'visible'){document.getElementById('mensagem1').style.visibility = 'hidden'; if(!inativo){ hp++; if(nivelDeSolo == 2){ nivelDeSolo--; document.getElementById('personagem1').style.top = parseInt(document.getElementById('personagem1').style.top.split('p')[0]) + 10; document.getElementById('personagem1').style.left = parseInt(document.getElementById('personagem1').style.left.split('p')[0]) + 10;}} document.getElementById('fala1').src = 'imagens/imagemFalaVoceJaTemBless.png'; setTimeout(function(){document.getElementById('fala1').src = 'imagens/imagemFalaVazia.png';}, 2000); if(outfit == 'M'){ document.getElementById('personagem1').src = 'imagens/imagemPersonagemDeFrente.png'; }else if(outfit == 'F'){ document.getElementById('personagem1').src = 'imagens/imagemPersonagemDeFrenteF.png'; } document.getElementById('conversa').style.visibility = 'hidden'; document.getElementById('opcao1').style.visibility = 'hidden'; document.getElementById('opcao2').style.visibility = 'hidden'; document.getElementById('opcao3').style.visibility = 'hidden'; document.getElementById('opcao4').style.visibility = 'hidden'; document.getElementById('opcao5').style.visibility = 'hidden'; nivelDeConversaNpc = 0; datainicioinatividade = new Date();}">
        
        </div>
        <div id='cancel' alt='cancel' title='cancel' style='position:fixed; top: 302; left: 495; width: 35; height: 16;' onclick="if(document.getElementById('mensagem1').style.visibility == 'visible'){document.getElementById('mensagem1').style.visibility = 'hidden'; if(!inativo){ hp++; if(nivelDeSolo == 2){ nivelDeSolo--; document.getElementById('personagem1').style.top = parseInt(document.getElementById('personagem1').style.top.split('p')[0]) + 10; document.getElementById('personagem1').style.left = parseInt(document.getElementById('personagem1').style.left.split('p')[0]) + 10;}} document.getElementById('fala1').src = 'imagens/imagemFalaVoceJaTemBless.png'; setTimeout(function(){document.getElementById('fala1').src = 'imagens/imagemFalaVazia.png';}, 2000); if(outfit == 'M'){ document.getElementById('personagem1').src = 'imagens/imagemPersonagemDeFrente.png'; }else if(outfit == 'F'){ document.getElementById('personagem1').src = 'imagens/imagemPersonagemDeFrenteF.png'; } document.getElementById('conversa').style.visibility = 'hidden'; document.getElementById('opcao1').style.visibility = 'hidden'; document.getElementById('opcao2').style.visibility = 'hidden'; document.getElementById('opcao3').style.visibility = 'hidden'; document.getElementById('opcao4').style.visibility = 'hidden'; document.getElementById('opcao5').style.visibility = 'hidden'; nivelDeConversaNpc = 0; datainicioinatividade = new Date();}">
        
        </div>

        <!--
        <div id='painelEsquerda1' title='painel' style='position:fixed; top: 0; left: 0; width: 60; height:100%; background-color: gray;'></div>
        <div id='painelCima1' title='painel' style='position:fixed; top: 0; left: 0; width: 100%; height:60; background-color: gray;'></div>
        -->
        <div id='painelBaixo1' title='painel' style='position:fixed; top: 420; left: 0; width: 100%; height:100%; background-color: #ccffff;'></div>
        <div id='painelDireita1' title='painel' style='position:fixed; top: 0; left: 540; width: 100%; height:100%; background-color: #ccffff;'></div>

        <div id='conversaLogout' title='logout' style='position: fixed; top: 0; left: 360; width: 178; background-color: lightgray; border-style: solid; border-color: gray; visibility: hidden;'>
            <div id='logoutPergunta1' title='logout' style='top: 0; left: 0; margin: 1; width: 174; height: 44; color: white; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                Voce tem certeza que deseja sair?
            </div>
            <form action="http://magiclevel.ml">
                <button type="submit" id='logoutOpcao1' title='Sim' style='top: 0; left: 0; margin: 1; width: 174; height: 44; background-color: #4CAF50; color: white; border-radius: 15px 50px; border: none; visibility: hidden;'>
                    Sim
                </button>
            </form>
            <button type="submit" id='logoutOpcao2' title='Nao' style='top: 0; left: 0; margin: 1; width: 174; height: 44; background-color: #4CAF50; color: white; border-radius: 15px 50px; border: none; visibility: hidden;' onclick="if(document.getElementById('logoutOpcao2').style.visibility == 'visible'){ document.getElementById('logoutPergunta1').style.visibility = 'hidden'; document.getElementById('logoutOpcao1').style.visibility = 'hidden'; document.getElementById('logoutOpcao2').style.visibility = 'hidden'; datainicioinatividade = new Date();}">
                Nao
            </button>
        </div>

        <div id='inventario' title='inventario' style='position: fixed; top: 0; left: 540; width: 178; height:414; background-color: #ccffff; border-style: solid; border-color: gray;'>
            <div id='hp' title='hp' style='position: absolute; top: 0; left: 0; margin: 1; width: 44; height: 20; background-color: tomato;'>
                
            </div>
            <div id='hpvalor' title='hp' style='position: fixed; top: 9; left: 540; width: 178; height: 20; text-align: center; color: white; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
                
            </div>
            <div id='skills' title='skills' style='position: absolute; top: 20; left: 0; margin: 1; width: 176; height: 74; background-color: lightgray;'>
                <div id='nomeDasSkills' title='skills' style='top: 0; left: 10; margin: 1; padding: 2; width: 170; height: 10; background-color: gray; color: white; font-family: "Lucida Console", "Courier New", monospace; font-size: x-small;'>
                    Skills
                </div>
                <div id='campoDasSkills1' title='skills' style='float: left; top: 0; left: 0; margin: 1; width: 174; height: 62; background-color: gray;'>
                    <div id='level' title='level' style='position: fixed; top: 50; left: 550; width: 178; height: 20; text-align: left; color: white; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>

                    </div>
                    <div id='levelvalor' title='level' style='position: fixed; top: 50; left: 540; width: 178; height: 20; text-align: right; color: white; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>

                    </div>
                    <div id='barraxp' title='xp' style='position: fixed; top: 65; left: 551; width: 100; height: 2; background-color: red;'>
                
                    </div>
                    <div id='barraxpvazia' title='xp' style='position: fixed; top: 64; left: 550; width: 165; height: 2; background-color: red; border: 1px solid white; opacity: 0.3;'>
                
                    </div>
                    <div id='nivel' title='xp' style='position: fixed; top: 70; left: 550; width: 178; height: 20; text-align: left; color: white; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>

                    </div>
                    <div id='nivelvalor' title='xp' style='position: fixed; top: 70; left: 540; width: 178; height: 20; text-align: right; color: white; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>

                    </div>
                    <div id='speed' title='speed' style='position: fixed; top: 85; left: 550; width: 178; height: 20; text-align: left; color: white; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>

                    </div>
                    <div id='speedvalor' title='speed' style='position: fixed; top: 85; left: 540; width: 178; height: 20; text-align: right; color: white; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>

                    </div>
                    <img id='itemCampoDasSkills1' src='imagens/imagemCampoItem.png' alt='item' title='item' style='width: 100%; height: 100%' onclick=""></img>
                </div>
            </div>
            <div id='mochila' title='mochila' style='position: absolute; top: 100; left: 0; margin: 1; width: 176; height: 44; background-color: lightgray;'>
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
            <div id='magias' title='magias' style='position: absolute; top: 160; left: 0; margin: 1; width: 176; height: 44; background-color: lightgray;'>
                <div id='nomeDoLivroDeMagias1' title='magias' style='top: 0; left: 10; margin: 1; padding: 2; width: 170; height: 10; background-color: gray; color: white; font-family: "Lucida Console", "Courier New", monospace; font-size: x-small;'>
                    Magias
                </div>
                <div id='campoDaMagia1' title='magia' style='float: left; top: 0; left: 0; margin: 1; width: 42; height: 42; background-color: gray;'>
                    <img id='magiaExura' src='imagens/imagemCampoItem.png' alt='magia' title='magia' style='width: 100%; height: 100%' onclick="
                    if(document.getElementById('mensagem1').style.visibility == 'hidden'){
                        datainicioinatividade = new Date();

                        document.getElementById('campoDeEscritaInput').value = 'exura';
                        dialogo();
                        document.getElementById('campoDeEscritaInput').value = '';
                    }"></img>
                </div>
                <div id='campoDaMagia2' title='magia' style='float: left; top: 0; left: 0; margin: 1; width: 42; height: 42; background-color: gray;'>
                    <img id='magiaExuraGran' src='imagens/imagemCampoItem.png' alt='magia' title='magia' style='width: 100%; height: 100%' onclick="
                    if(document.getElementById('mensagem1').style.visibility == 'hidden'){
                        datainicioinatividade = new Date();
                        
                        document.getElementById('campoDeEscritaInput').value = 'exura gran';
                        dialogo();
                        document.getElementById('campoDeEscritaInput').value = '';
                    }"></img>
                </div>
                <div id='campoDaMagia3' title='magia' style='float: left; top: 0; left: 0; margin: 1; width: 42; height: 42; background-color: gray;'>
                    <img id='magiaExori' src='imagens/imagemCampoItem.png' alt='magia' title='magia' style='width: 100%; height: 100%' onclick="
                    if(document.getElementById('mensagem1').style.visibility == 'hidden'){
                        datainicioinatividade = new Date();

                        document.getElementById('campoDeEscritaInput').value = 'exori';
                        dialogo();
                        document.getElementById('campoDeEscritaInput').value = '';
                    }"></img>
                </div>
                <div id='campoDaMagia4' title='magia' style='float: left; top: 0; left: 0; margin: 1; width: 42; height: 42; background-color: gray;'>
                    <img id='magiaExoriGran' src='imagens/imagemCampoItem.png' alt='magia' title='magia' style='width: 100%; height: 100%' onclick="
                    if(document.getElementById('mensagem1').style.visibility == 'hidden'){
                        datainicioinatividade = new Date();

                        document.getElementById('campoDeEscritaInput').value = 'exori gran';
                        dialogo();
                        document.getElementById('campoDeEscritaInput').value = '';
                    }"></img>
                </div>
            </div>
            <div id='parcel' title='parcel' style='position: absolute; top: 220; left: 0; margin: 1; width: 176; height: 44; background-color: lightgray; visibility: hidden;'>
                <div id='nomeDoParcel1' title='parcel' style='top: 0; left: 10; margin: 1; padding: 2; width: 170; height: 10; background-color: gray; color: white; font-family: "Lucida Console", "Courier New", monospace; font-size: x-small;'>
                    Parcel
                </div>
                <div id='campoDoParcel1' title='parcel' style='float: left; top: 0; left: 0; margin: 1; width: 42; height: 42; background-color: gray;'>
                    <img id='itemCampoDoParcel1' src='imagens/imagemPocaoHP.png' alt='item' title='item' style='width: 100%; height: 100%' onclick="document.getElementById('itemCampoDoParcel1').src = 'imagens/imagemCampoItem.png'; mochila[0] = 'PocaoHP'; document.getElementById('itemCampoDaMochila1').src = 'imagens/imagemPocaoHP.png';"></img>
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
            <div id='campoDasTasks1' title='tasks' style='position: absolute; top: 220; left: 0; margin: 1; width: 176; height: 44; background-color: #ccffff;'>
                <div id='tasks' title='tasks' style='position: fixed; top: 230; left: 550; width: 178; height: 20; text-align: left; color: black; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>

                </div>
                <div id='task' title='task' style='position: fixed; top: 245; left: 550; width: 178; height: 20; text-align: left; color: black; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>

                </div>
                <div id='taskvalor' title='task' style='position: fixed; top: 245; left: 540; width: 178; height: 20; text-align: right; color: black; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>

                </div>
            </div>
            <button type="submit" id='logout' title='sair' style='position: absolute; bottom: 45; left: 0; margin: 1; width: 174; height: 44; background-color: #4CAF50; color: white; border-radius: 4px; border: none; visibility: visible;' onclick="if(document.getElementById('chathistoria').style.visibility == 'hidden'){document.getElementById('chathistoria').style.visibility = 'visible';}else{document.getElementById('chathistoria').style.visibility = 'hidden';} datainicioinatividade = new Date();">
                História
            </button>
            <button type="submit" id='logout' title='sair' style='position: absolute; bottom: 0; left: 0; margin: 1; width: 174; height: 44; background-color: #4CAF50; color: white; border-radius: 4px; border: none; visibility: visible;' onclick="if(document.getElementById('logoutPergunta1').style.visibility == 'hidden'){document.getElementById('logoutPergunta1').style.visibility = 'visible'; document.getElementById('logoutOpcao1').style.visibility = 'visible'; document.getElementById('logoutOpcao2').style.visibility = 'visible';}else{document.getElementById('logoutPergunta1').style.visibility = 'hidden'; document.getElementById('logoutOpcao1').style.visibility = 'hidden'; document.getElementById('logoutOpcao2').style.visibility = 'hidden';} datainicioinatividade = new Date();">
                Sair
            </button>
        </div>

        <div id='chat' title='chat' style='position: fixed; top: 0; left: 720; width: 178; height:414; background-color: lightgray; border-style: solid; border-color: gray;'>
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
                <div id='campoDoChat' title='default' style='float: left; top: 0; left: 0; margin: 1; width: 174; height: 365; background-color: #ccffff;'>
                    <textarea id="textareaChat" name="textareaChat" title='default' rows="23" cols="22" style="resize: none;" disabled></textarea>
                </div>
                <div id='campoDeEscrita' title='chat' style='float: left; bottom: 0; left: 0; margin: 1; width: 176; height: 22; background-color: #ccffff;'>
                    <input type="text" id="campoDeEscritaInput" name="campoDeEscritaInput" title='chat' maxlength="100" style="opacity: 0.6;" autofocus></input>
                </div>
            </div>
        </div>

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
            var verificacaoDistanciamentoNPC;
            var verificacaoAproximacaoNPC;
            var verificarPosicaoValida;
            var recompensaSacola;
            var regeneracao;
            var calculaLevel;

            var posicaoDoPersonagemNaMatriz = [5,6];
            var direcaoDoPersonagem = 2;
            var nivel = 0;
            var personagemMorto = false;

            var flagAjax = true;
            var dataAjax = new Date();
            var dataLoop = new Date();
            var dataMove = new Date();

            var hpmax = 176;
            var hp = 176;
            var mochila = ["","","",""];

            var exura = false;
            var exuraGran = false;
            var exori = false;
            var exoriGran = false;

            var taskvalor = 0;

            var questFerramentas = false;
            var quest1 = true;
            var quest2 = true;
            var quest3 = true;

            var username = "";
            var password = "";

var matrizDoMapa = 
[
[27,27,27,27,27,27,27,27,27,27,27,27,27],
[27,27,27,27,27,27,27,27,27,27,27,27,27],
[27,27,27,27,27,27,27,27,27,27,27,27,27],
[27,27,27,27,32,30,30,30,27,27,27,27,27],
[27,27,27,27,31, 0, 0, 0,29,27,27,27,27],
[27,27,27,27,31, 0, 0, 2,29,27,27,27,27],
[27,27,27,27,31, 4, 0, 0,29,27,27,27,27],
[27,27,27,27,27,28,28,28,27,27,27,27,27],
[27,27,27,27,27,27,27,27,27,27,27,27,27],
[27,27,27,27,27,27,27,27,27,27,27,27,27],
[27,27,27,27,27,27,27,27,27,27,27,27,27],
[27,27,27,27,27,27,27,27,27,27,27,27,27],
[27,27,27,27,27,27,27,27,27,27,27,27,27],
[27,27,27,27,32,30,30,30,27,27,27,27,27],
[27,27,27,27,31, 0, 1, 1,29,27,27,27,27],
[27,27,27,27,31, 0, 7, 8,29,27,27,27,27],
[27,27,27,27,31, 5, 4, 1,29,27,27,27,27],
[27,27,27,27,27,28,28,28,27,27,27,27,27],
[27,27,27,27,27,27,27,27,27,27,27,27,27],
[27,27,27,27,27,27,27,27,27,27,27,27,27],
[27,27,27,27,27,27,27,27,27,27,27,27,27],
[27,27,27,27,27,27,27,27,27,27,27,27,27],
[27,27,27,27,27,27,27,27,27,27,27,27,27],
[27,27,27,27,32,30,30,30,27,27,27,27,27],
[27,27,27,27,31, 8, 7, 8,29,27,27,27,27],
[27,27,27,27,31, 1, 0, 7,29,27,27,27,27],
[27,27,27,27,31, 1, 5, 4,29,27,27,27,27],
[27,27,27,27,27,28,28,28,27,27,27,27,27],
[27,27,27,27,27,27,27,27,27,27,27,27,27],
[27,27,27,27,27,27,27,27,27,27,27,27,27],
[27,27,27,27,27,27,27,27,27,27,27,27,27],
[27,27,27,27,27,27,27,27,27,27,27,27,27],
[27,27,27,27,27,27,27,27,27,27,27,27,27],
[27,27,27,27,32,30,30,30,27,27,27,27,27],
[27,27,27,27,31, 1, 8, 1,29,27,27,27,27],
[27,27,27,27,31, 8, 7, 4,29,27,27,27,27],
[27,27,27,27,31, 1, 8, 5,29,27,27,27,27],
[27,27,27,27,27,28,28,28,27,27,27,27,27],
[27,27,27,27,27,27,27,27,27,27,27,27,27],
[27,27,27,27,27,27,27,27,27,27,27,27,27],
[26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26],
[26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26],
[26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26],
[26,26,26,26,33,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,35,26,33,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,35,26,26,26,26],
[26,26,26,26,40, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,36,26,40, 7, 7, 7, 7, 7,16, 1, 7, 7, 7, 7, 7, 8, 1, 7, 7, 7, 7,19, 1, 7, 1,36,26,26,26,26],
[26,26,26,26,40,11, 0, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,36,26,40, 7, 7,16, 7, 7, 7,19, 7, 7, 7, 8, 7, 7,16, 7, 7,19, 7, 7,19, 7, 2,36,26,26,26,26],
[26,26,26,26,40, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,38,38,38, 0, 0,36,26,40, 7, 8, 1, 7, 7,16, 1, 7, 7,19, 1, 7, 8, 1, 7,16, 1, 7,19, 1, 7, 1,36,26,26,26,26],
[26,26,26,26,40, 1, 1, 0, 0, 0, 0, 0, 0, 0, 1, 1,36,26,40, 0, 0,36,26,40, 7, 7,16, 7, 7, 7,19, 7, 7, 7, 8, 7, 7,16, 7, 7,19, 7, 7,19, 7, 0,36,26,26,26,26],
[26,26,26,26,40,19, 7, 0, 0, 0, 0, 0, 0, 0, 7,16,36,26,40, 0, 0,36,26,40, 7, 8, 1, 7, 7,16, 1, 7, 7,19, 1, 7, 8, 1, 7,16, 1, 7,19, 1, 7, 1,36,26,26,26,26],
[26,26,26,26,40, 1, 1, 0, 0, 0, 0, 0, 0, 0, 1, 1,36,26,40, 0, 0,36,26,40, 7, 7,16, 7, 7, 7,19, 7, 7, 7, 8, 7, 7,16, 7, 7,19, 7, 7,16, 7, 2,36,26,26,26,26],
[26,26,26,26,40, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,36,26,40, 0, 0,36,26,40, 7, 8, 1, 7, 7,16, 1, 7, 7,19, 1, 7, 8, 1, 7,16, 1, 7,19, 1, 7, 1,36,26,26,26,26],
[26,26,26,26,40, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,36,26,40, 0, 0,36,26,40, 7, 7,16, 7, 7, 7,19, 7, 7, 7, 8, 7, 7,16, 7, 7,19, 7, 7,19, 7, 0,36,26,26,26,26],
[26,26,26,26,40, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0, 1,36,26,40, 0, 0,34,34,34, 7, 8, 1, 7, 7,16, 1, 7, 7,19, 1, 7, 8, 1, 7,16, 1, 7,19, 1, 7, 1,36,26,26,26,26],
[26,26,26,26,40,19, 7,19, 7,19, 7,16, 7,16, 7,16,36,26,40, 0, 0, 0, 0, 7, 7, 7,16, 7, 7, 7,19, 7, 7, 7, 8, 7, 7,16, 7, 7,19, 7, 7, 8, 7, 2,36,26,26,26,26],
[26,26,26,26,40, 1,19, 1, 1, 1,19, 1, 1, 1,16, 1,36,26,40, 0, 0, 0, 0, 7, 7, 8, 1, 7, 7, 7, 7, 7, 7,19, 1, 7, 7, 7, 7,16, 1, 7, 7, 7, 7, 1,36,26,26,26,26],
[26,26,26,26,39,38,38,38,38,38,38,38,38,38,38,38,37,26,40, 0, 0, 0, 0,36,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,37,26,26,26,26],
[26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,40, 0, 0, 0, 0,36,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26],
[26,26,26,26,33,34,34,34,34,34,34,34,34,34,34,34,34,34,34, 0, 0, 0, 0,36,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,35,26,26,26,26],
[26,26,26,26,40, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,36,26,26,26,26],
[26,26,26,26,40, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,36,26,26,26,26],
[26,26,26,26,39,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,37,26,26,26,26],
[26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26],
[26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26],
[26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26]
];

var matrizDoMapaOriginal = 
[
[27,27,27,27,27,27,27,27,27,27,27,27,27],
[27,27,27,27,27,27,27,27,27,27,27,27,27],
[27,27,27,27,27,27,27,27,27,27,27,27,27],
[27,27,27,27,32,30,30,30,27,27,27,27,27],
[27,27,27,27,31, 0, 0, 0,29,27,27,27,27],
[27,27,27,27,31, 0, 0, 2,29,27,27,27,27],
[27,27,27,27,31, 4, 0, 0,29,27,27,27,27],
[27,27,27,27,27,28,28,28,27,27,27,27,27],
[27,27,27,27,27,27,27,27,27,27,27,27,27],
[27,27,27,27,27,27,27,27,27,27,27,27,27],
[27,27,27,27,27,27,27,27,27,27,27,27,27],
[27,27,27,27,27,27,27,27,27,27,27,27,27],
[27,27,27,27,27,27,27,27,27,27,27,27,27],
[27,27,27,27,32,30,30,30,27,27,27,27,27],
[27,27,27,27,31, 0, 1, 1,29,27,27,27,27],
[27,27,27,27,31, 0, 7, 8,29,27,27,27,27],
[27,27,27,27,31, 5, 4, 1,29,27,27,27,27],
[27,27,27,27,27,28,28,28,27,27,27,27,27],
[27,27,27,27,27,27,27,27,27,27,27,27,27],
[27,27,27,27,27,27,27,27,27,27,27,27,27],
[27,27,27,27,27,27,27,27,27,27,27,27,27],
[27,27,27,27,27,27,27,27,27,27,27,27,27],
[27,27,27,27,27,27,27,27,27,27,27,27,27],
[27,27,27,27,32,30,30,30,27,27,27,27,27],
[27,27,27,27,31, 8, 7, 8,29,27,27,27,27],
[27,27,27,27,31, 1, 0, 7,29,27,27,27,27],
[27,27,27,27,31, 1, 5, 4,29,27,27,27,27],
[27,27,27,27,27,28,28,28,27,27,27,27,27],
[27,27,27,27,27,27,27,27,27,27,27,27,27],
[27,27,27,27,27,27,27,27,27,27,27,27,27],
[27,27,27,27,27,27,27,27,27,27,27,27,27],
[27,27,27,27,27,27,27,27,27,27,27,27,27],
[27,27,27,27,27,27,27,27,27,27,27,27,27],
[27,27,27,27,32,30,30,30,27,27,27,27,27],
[27,27,27,27,31, 1, 8, 1,29,27,27,27,27],
[27,27,27,27,31, 8, 7, 4,29,27,27,27,27],
[27,27,27,27,31, 1, 8, 5,29,27,27,27,27],
[27,27,27,27,27,28,28,28,27,27,27,27,27],
[27,27,27,27,27,27,27,27,27,27,27,27,27],
[27,27,27,27,27,27,27,27,27,27,27,27,27],
[26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26],
[26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26],
[26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26],
[26,26,26,26,33,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,35,26,33,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,35,26,26,26,26],
[26,26,26,26,40, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,36,26,40, 7, 7, 7, 7, 7,16, 1, 7, 7, 7, 7, 7, 8, 1, 7, 7, 7, 7,19, 1, 7, 1,36,26,26,26,26],
[26,26,26,26,40,11, 0, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,36,26,40, 7, 7,16, 7, 7, 7,19, 7, 7, 7, 8, 7, 7,16, 7, 7,19, 7, 7,19, 7, 2,36,26,26,26,26],
[26,26,26,26,40, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,38,38,38, 0, 0,36,26,40, 7, 8, 1, 7, 7,16, 1, 7, 7,19, 1, 7, 8, 1, 7,16, 1, 7,19, 1, 7, 1,36,26,26,26,26],
[26,26,26,26,40, 1, 1, 0, 0, 0, 0, 0, 0, 0, 1, 1,36,26,40, 0, 0,36,26,40, 7, 7,16, 7, 7, 7,19, 7, 7, 7, 8, 7, 7,16, 7, 7,19, 7, 7,19, 7, 0,36,26,26,26,26],
[26,26,26,26,40,19, 7, 0, 0, 0, 0, 0, 0, 0, 7,16,36,26,40, 0, 0,36,26,40, 7, 8, 1, 7, 7,16, 1, 7, 7,19, 1, 7, 8, 1, 7,16, 1, 7,19, 1, 7, 1,36,26,26,26,26],
[26,26,26,26,40, 1, 1, 0, 0, 0, 0, 0, 0, 0, 1, 1,36,26,40, 0, 0,36,26,40, 7, 7,16, 7, 7, 7,19, 7, 7, 7, 8, 7, 7,16, 7, 7,19, 7, 7,16, 7, 2,36,26,26,26,26],
[26,26,26,26,40, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,36,26,40, 0, 0,36,26,40, 7, 8, 1, 7, 7,16, 1, 7, 7,19, 1, 7, 8, 1, 7,16, 1, 7,19, 1, 7, 1,36,26,26,26,26],
[26,26,26,26,40, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,36,26,40, 0, 0,36,26,40, 7, 7,16, 7, 7, 7,19, 7, 7, 7, 8, 7, 7,16, 7, 7,19, 7, 7,19, 7, 0,36,26,26,26,26],
[26,26,26,26,40, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0, 1,36,26,40, 0, 0,34,34,34, 7, 8, 1, 7, 7,16, 1, 7, 7,19, 1, 7, 8, 1, 7,16, 1, 7,19, 1, 7, 1,36,26,26,26,26],
[26,26,26,26,40,19, 7,19, 7,19, 7,16, 7,16, 7,16,36,26,40, 0, 0, 0, 0, 7, 7, 7,16, 7, 7, 7,19, 7, 7, 7, 8, 7, 7,16, 7, 7,19, 7, 7, 8, 7, 2,36,26,26,26,26],
[26,26,26,26,40, 1,19, 1, 1, 1,19, 1, 1, 1,16, 1,36,26,40, 0, 0, 0, 0, 7, 7, 8, 1, 7, 7, 7, 7, 7, 7,19, 1, 7, 7, 7, 7,16, 1, 7, 7, 7, 7, 1,36,26,26,26,26],
[26,26,26,26,39,38,38,38,38,38,38,38,38,38,38,38,37,26,40, 0, 0, 0, 0,36,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,37,26,26,26,26],
[26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,40, 0, 0, 0, 0,36,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26],
[26,26,26,26,33,34,34,34,34,34,34,34,34,34,34,34,34,34,34, 0, 0, 0, 0,36,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,35,26,26,26,26],
[26,26,26,26,40, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,36,26,26,26,26],
[26,26,26,26,40, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,36,26,26,26,26],
[26,26,26,26,39,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,37,26,26,26,26],
[26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26],
[26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26],
[26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26]
];

var matrizCriaturasVida = 
[
[27,27,27,27,27,27,27,27,27,27,27,27,27],
[27,27,27,27,27,27,27,27,27,27,27,27,27],
[27,27,27,27,27,27,27,27,27,27,27,27,27],
[27,27,27,27,32,30,30,30,27,27,27,27,27],
[27,27,27,27,31, 0, 0, 0,29,27,27,27,27],
[27,27,27,27,31, 0, 0, 2,29,27,27,27,27],
[27,27,27,27,31, 4, 0, 0,29,27,27,27,27],
[27,27,27,27,27,28,28,28,27,27,27,27,27],
[27,27,27,27,27,27,27,27,27,27,27,27,27],
[27,27,27,27,27,27,27,27,27,27,27,27,27],
[27,27,27,27,27,27,27,27,27,27,27,27,27],
[27,27,27,27,27,27,27,27,27,27,27,27,27],
[27,27,27,27,27,27,27,27,27,27,27,27,27],
[27,27,27,27,32,30,30,30,27,27,27,27,27],
[27,27,27,27,31, 0, 1, 1,29,27,27,27,27],
[27,27,27,27,31, 0, 7,50,29,27,27,27,27],
[27,27,27,27,31, 5, 4, 1,29,27,27,27,27],
[27,27,27,27,27,28,28,28,27,27,27,27,27],
[27,27,27,27,27,27,27,27,27,27,27,27,27],
[27,27,27,27,27,27,27,27,27,27,27,27,27],
[27,27,27,27,27,27,27,27,27,27,27,27,27],
[27,27,27,27,27,27,27,27,27,27,27,27,27],
[27,27,27,27,27,27,27,27,27,27,27,27,27],
[27,27,27,27,32,30,30,30,27,27,27,27,27],
[27,27,27,27,31,50, 7,50,29,27,27,27,27],
[27,27,27,27,31, 1, 0, 7,29,27,27,27,27],
[27,27,27,27,31, 1, 5, 4,29,27,27,27,27],
[27,27,27,27,27,28,28,28,27,27,27,27,27],
[27,27,27,27,27,27,27,27,27,27,27,27,27],
[27,27,27,27,27,27,27,27,27,27,27,27,27],
[27,27,27,27,27,27,27,27,27,27,27,27,27],
[27,27,27,27,27,27,27,27,27,27,27,27,27],
[27,27,27,27,27,27,27,27,27,27,27,27,27],
[27,27,27,27,32,30,30,30,27,27,27,27,27],
[27,27,27,27,31, 1,50, 1,29,27,27,27,27],
[27,27,27,27,31,50, 7, 4,29,27,27,27,27],
[27,27,27,27,31, 1,50, 5,29,27,27,27,27],
[27,27,27,27,27,28,28,28,27,27,27,27,27],
[27,27,27,27,27,27,27,27,27,27,27,27,27],
[27,27,27,27,27,27,27,27,27,27,27,27,27],
[26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26],
[26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26],
[26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26],
[26,26,26,26,33,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,35,26,33,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,35,26,26,26,26],
[26,26,26,26,40, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,36,26,40, 7, 7, 7, 7, 7,50, 1, 7, 7, 7, 7, 7,50, 1, 7, 7, 7, 7,50, 1, 7, 1,36,26,26,26,26],
[26,26,26,26,40,11, 0, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,36,26,40, 7, 7,50, 7, 7, 7,50, 7, 7, 7,50, 7, 7,50, 7, 7,50, 7, 7,50, 7, 2,36,26,26,26,26],
[26,26,26,26,40, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,38,38,38, 0, 0,36,26,40, 7,50, 1, 7, 7,50, 1, 7, 7,50, 1, 7,50, 1, 7,50, 1, 7,50, 1, 7, 1,36,26,26,26,26],
[26,26,26,26,40, 1, 1, 0, 0, 0, 0, 0, 0, 0, 1, 1,36,26,40, 0, 0,36,26,40, 7, 7,50, 7, 7, 7,50, 7, 7, 7,50, 7, 7,50, 7, 7,50, 7, 7,50, 7, 0,36,26,26,26,26],
[26,26,26,26,40,50, 7, 0, 0, 0, 0, 0, 0, 0, 7,50,36,26,40, 0, 0,36,26,40, 7,50, 1, 7, 7,50, 1, 7, 7,50, 1, 7,50, 1, 7,50, 1, 7,50, 1, 7, 1,36,26,26,26,26],
[26,26,26,26,40, 1, 1, 0, 0, 0, 0, 0, 0, 0, 1, 1,36,26,40, 0, 0,36,26,40, 7, 7,50, 7, 7, 7,50, 7, 7, 7,50, 7, 7,50, 7, 7,50, 7, 7,50, 7, 2,36,26,26,26,26],
[26,26,26,26,40, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,36,26,40, 0, 0,36,26,40, 7,50, 1, 7, 7,50, 1, 7, 7,50, 1, 7,50, 1, 7,50, 1, 7,50, 1, 7, 1,36,26,26,26,26],
[26,26,26,26,40, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,36,26,40, 0, 0,36,26,40, 7, 7,50, 7, 7, 7,50, 7, 7, 7,50, 7, 7,50, 7, 7,50, 7, 7,50, 7, 0,36,26,26,26,26],
[26,26,26,26,40, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0, 1,36,26,40, 0, 0,34,34,34, 7,50, 1, 7, 7,50, 1, 7, 7,50, 1, 7,50, 1, 7,50, 1, 7,50, 1, 7, 1,36,26,26,26,26],
[26,26,26,26,40,50, 7,50, 7,50, 7,50, 7,50, 7,50,36,26,40, 0, 0, 0, 0, 7, 7, 7,50, 7, 7, 7,50, 7, 7, 7,50, 7, 7,50, 7, 7,50, 7, 7,50, 7, 2,36,26,26,26,26],
[26,26,26,26,40, 1,50, 1, 1, 1,50, 1, 1, 1,50, 1,36,26,40, 0, 0, 0, 0, 7, 7,50, 1, 7, 7, 7, 7, 7, 7,50, 1, 7, 7, 7, 7,50, 1, 7, 7, 7, 7, 1,36,26,26,26,26],
[26,26,26,26,39,38,38,38,38,38,38,38,38,38,38,38,37,26,40, 0, 0, 0, 0,36,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,37,26,26,26,26],
[26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,40, 0, 0, 0, 0,36,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26],
[26,26,26,26,33,34,34,34,34,34,34,34,34,34,34,34,34,34,34, 0, 0, 0, 0,36,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,34,35,26,26,26,26],
[26,26,26,26,40, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,36,26,26,26,26],
[26,26,26,26,40, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,36,26,26,26,26],
[26,26,26,26,39,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,37,26,26,26,26],
[26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26],
[26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26],
[26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26,26]
];

            var lvlatual = 0;
            var lvlantigo = 0;
            var mensagem = "";
            var ultimamensagem = "";
            
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
            var esperaRessCima = 3;
            var esperaRessEsquerda = 3;
            var esperaRessDireita = 3;
            var esperaRessBaixo = 3;
            var esperaRessCimaContador = 0;
            var esperaRessEsquerdaContador = 0;
            var esperaRessDireitaContador = 0;
            var esperaRessBaixoContador = 0;
            var flagCima = false;
            var flagEsquerda = false;
            var flagDireita = false;
            var flagBaixo = false;
            var esperaGeral = 100;

            //Variaveis JSON
            var dadosResposta = "vazio";

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
                    mensagensDoChatDefault += "\n\nYou advanced from Level " + lvlantigo + " to Level " + lvlatual;
                    document.getElementById('mensagemDiv1').innerHTML = "You advanced from Level " + lvlantigo + " to Level " + lvlatual;
                    document.getElementById('mensagemDiv1').style.color = "white";
                    setTimeout(function(){document.getElementById('mensagemDiv1').innerHTML = "";}, 10000);
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
                            document.getElementById('fala1').src = 'imagens/imagemFalaPocaoHP.png'; 
                            setTimeout(function(){
                                document.getElementById('fala1').src = 'imagens/imagemFalaVazia.png';
                            }, 1000);
                            regeneracao(1, "curou"); 
                        } 
                        break;
                    case 1:
                        if(mochila[1] == 'Corda' && matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]] == 4){
                            posicaoDoPersonagemNaMatriz[0] = posicaoDoPersonagemNaMatriz[0]+9; 
                            posicaoDoPersonagemNaMatriz[1] = posicaoDoPersonagemNaMatriz[1]; 
                            preencherImagens();
                        }else if(mochila[1] == 'Corda'){ 
                            switch(identificadorDoChat){
                                case 0:
                                    mensagensDoChatDefault += '\n\nSistema: Aqui não é possível subir.';
                                    document.getElementById('textareaChat').value = mensagensDoChatDefault;
                                    break;
                                case 1:
                                    mensagensDoChatServerLog += '\n\nSistema: Aqui não é possível subir.';
                                    document.getElementById('textareaChat').value = mensagensDoChatServerLog;
                                    break;
                                case 2:
                                    mensagensDoChatNpc += '\n\nSistema: Aqui não é possível subir.';
                                    document.getElementById('textareaChat').value = mensagensDoChatNpc;
                                    break;
                            }
                            document.getElementById('mensagemDiv2').innerHTML = 'Aqui não é possível subir.'; 
                            setTimeout(function(){
                                document.getElementById('mensagemDiv2').innerHTML = '';
                            }, 5000);
                        } 
                        break;
                    case 2:
                        if(mochila[2] == 'Pa' && matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]] == 6){
                            posicaoDoPersonagemNaMatriz[0] = posicaoDoPersonagemNaMatriz[0]-10; 
                            posicaoDoPersonagemNaMatriz[1] = posicaoDoPersonagemNaMatriz[1]; 
                            preencherImagens();
                        }else if(mochila[2] == 'Pa'){ 
                            switch(identificadorDoChat){
                                case 0:
                                    mensagensDoChatDefault += '\n\nSistema: Aqui não é possível cavar.';
                                    document.getElementById('textareaChat').value = mensagensDoChatDefault;
                                    break;
                                case 1:
                                    mensagensDoChatServerLog += '\n\nSistema: Aqui não é possível cavar.';
                                    document.getElementById('textareaChat').value = mensagensDoChatServerLog;
                                    break;
                                case 2:
                                    mensagensDoChatNpc += '\n\nSistema: Aqui não é possível cavar.';
                                    document.getElementById('textareaChat').value = mensagensDoChatNpc;
                                    break;
                            }
                            document.getElementById('mensagemDiv2').innerHTML = 'Aqui não é possível cavar.'; 
                            setTimeout(function(){
                                document.getElementById('mensagemDiv2').innerHTML = '';
                            }, 5000);
                        } 
                        break;
                }
                datainicioinatividade = new Date();
            }

            recompensaSacola = function(linha,coluna){
                let id;

                if(
                    (
                        ((posicaoDoPersonagemNaMatriz[0]+linha) == 5 && (posicaoDoPersonagemNaMatriz[1]+coluna) == 7) ||
                        ((posicaoDoPersonagemNaMatriz[0]+linha) == 44 && (posicaoDoPersonagemNaMatriz[1]+coluna) == 10)
                    ) && !questFerramentas
                ){
                    id = 0;
                    questFerramentas = true;
                    matrizDoMapa[5][7] = 3;
                    matrizDoMapa[44][10] = 3;
                }
                if((posicaoDoPersonagemNaMatriz[0]+linha) == 53 && (posicaoDoPersonagemNaMatriz[1]+coluna) == 45 && !quest1){
                    id = 1;
                    quest1 = true;
                }else if((posicaoDoPersonagemNaMatriz[0]+linha) == 53 && (posicaoDoPersonagemNaMatriz[1]+coluna) == 45){
                    document.getElementById('fala1').src = 'imagens/imagemFalaItemVazio.png';
                    setTimeout(function(){ document.getElementById('fala1').src = 'imagens/imagemFalaVazia.png';}, 1000);
                }
                if((posicaoDoPersonagemNaMatriz[0]+linha) == 49 && (posicaoDoPersonagemNaMatriz[1]+coluna) == 45 && !quest2){
                    id = 2;
                    quest2 = true;
                }else if((posicaoDoPersonagemNaMatriz[0]+linha) == 49 && (posicaoDoPersonagemNaMatriz[1]+coluna) == 45){
                    document.getElementById('fala1').src = 'imagens/imagemFalaItemVazio.png';
                    setTimeout(function(){ document.getElementById('fala1').src = 'imagens/imagemFalaVazia.png';}, 1000);
                }
                if((posicaoDoPersonagemNaMatriz[0]+linha) == 45 && (posicaoDoPersonagemNaMatriz[1]+coluna) == 45 && !quest3){
                    id = 3;
                    quest3 = true;
                }else if((posicaoDoPersonagemNaMatriz[0]+linha) == 45 && (posicaoDoPersonagemNaMatriz[1]+coluna) == 45){
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
                        nivel += 100;
                        calculaLevel();
                        mensagensDoChatServerLog += "\n\nVoce ganhou 100 pontos de experiencia.";
                        document.getElementById('textareaChat').value = mensagensDoChatNpc;
                        document.getElementById('mensagemDiv3').style.color = 'white';
                        document.getElementById('mensagemDiv3').style.textAlign = 'center';
                        document.getElementById('mensagemDiv3').style.width = 50;
                        document.getElementById('mensagemDiv3').innerHTML = 100 + "Xp";
                        setTimeout(
                            function(){ 
                                document.getElementById('mensagemDiv3').innerHTML = "";
                                document.getElementById('mensagemDiv3').style.color = 'yellow';
                                document.getElementById('mensagemDiv3').style.width = 250;
                            }, 500);
                        break;
                    case 2:
                        nivel += 200;
                        calculaLevel();
                        mensagensDoChatServerLog += "\n\nVoce ganhou 200 pontos de experiencia.";
                        document.getElementById('mensagemDiv3').style.color = 'white';
                        document.getElementById('mensagemDiv3').style.textAlign = 'center';
                        document.getElementById('mensagemDiv3').style.width = 50;
                        document.getElementById('mensagemDiv3').innerHTML = 200 + "Xp";
                        setTimeout(
                            function(){ 
                                document.getElementById('mensagemDiv3').innerHTML = "";
                                document.getElementById('mensagemDiv3').style.color = 'yellow';
                                document.getElementById('mensagemDiv3').style.width = 250;
                            }, 500);
                        break;
                    case 3:
                        nivel += 300;
                        calculaLevel();
                        mensagensDoChatServerLog += "\n\nVoce ganhou 300 pontos de experiencia.";
                        document.getElementById('mensagemDiv3').style.color = 'white';
                        document.getElementById('mensagemDiv3').style.textAlign = 'center';
                        document.getElementById('mensagemDiv3').style.width = 50;
                        document.getElementById('mensagemDiv3').innerHTML = 300 + "Xp";
                        setTimeout(
                            function(){ 
                                document.getElementById('mensagemDiv3').innerHTML = "";
                                document.getElementById('mensagemDiv3').style.color = 'yellow';
                                document.getElementById('mensagemDiv3').style.width = 250;
                            }, 500);
                        break;
                }

                document.getElementById('fala1').src = 'imagens/imagemFalaDeposit.png'; 
                setTimeout(function(){ document.getElementById('fala1').src = 'imagens/imagemFalaVazia.png';}, 1000); 
                matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+linha][posicaoDoPersonagemNaMatriz[1]+coluna] = 3;
            }

            verificarPosicaoValida = function(linha, coluna){
                return (matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+linha][posicaoDoPersonagemNaMatriz[1]+coluna] == 0 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+linha][posicaoDoPersonagemNaMatriz[1]+coluna] == 4 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+linha][posicaoDoPersonagemNaMatriz[1]+coluna] == 6 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+linha][posicaoDoPersonagemNaMatriz[1]+coluna] == 7 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+linha][posicaoDoPersonagemNaMatriz[1]+coluna] == 12 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+linha][posicaoDoPersonagemNaMatriz[1]+coluna] == 13 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+linha][posicaoDoPersonagemNaMatriz[1]+coluna] == 14 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+linha][posicaoDoPersonagemNaMatriz[1]+coluna] == 15 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+linha][posicaoDoPersonagemNaMatriz[1]+coluna] == 22 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+linha][posicaoDoPersonagemNaMatriz[1]+coluna] == 23 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+linha][posicaoDoPersonagemNaMatriz[1]+coluna] == 24 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+linha][posicaoDoPersonagemNaMatriz[1]+coluna] == 25);
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

                    document.getElementById('mensagemDiv1').style.color = '#00ccff';
                    document.getElementById('mensagemDiv1').innerHTML = "Npc: Até mais!";
                    setTimeout(function(){document.getElementById('mensagemDiv1').innerHTML = ""; document.getElementById('mensagemDiv1').style.color = "white";}, 10000);

                    nivelDeConversaNpc = 0;
                }
            }

            auxPreencherImagensCriaturas = function (nomeCriatura, i, j, nomeCampo, barraHpCampo, barraHpVaziaCampo, baseCampo){
                if(
                    matrizDoMapa[i][j] == 10 || 
                    matrizDoMapa[i][j] == 18 || 
                    matrizDoMapa[i][j] == 21
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
                    matrizDoMapa[i][j] == 25
                ){
                    for(let k = 0; k < dadosResposta.players.length; k++){
                        if(dadosResposta.players[k].x == i && dadosResposta.players[k].y == j){

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

                            if(dadosResposta.players[k].mensagem != ultimamensagem){
                                if(dadosResposta.players[k].mensagem != ""){
                                    let data = new Date();
                                    mensagensDoChatDefault += "\n\n" + data.getHours() + ":" + data.getMinutes() + " " + dadosResposta.players[k].username + " [" + lvl.toString() + "]: " + dadosResposta.players[k].mensagem;
                                    document.getElementById("mensagemDivCampo" + campo).innerHTML = dadosResposta.players[k].username + " says: " + dadosResposta.players[k].mensagem;
                                    setTimeout(function(){document.getElementById("mensagemDivCampo" + campo).innerHTML = "";}, 5000);
                                    ultimamensagem = dadosResposta.players[k].mensagem;
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
                    document.getElementById(baseCampo).alt = "terra do buraco no teto";
                    document.getElementById(baseCampo).title = "terra do buraco no teto";
                }else if(matrizDoMapa[i][j] == 5){
                    document.getElementById(baseCampo).alt = "buraco aberto";
                    document.getElementById(baseCampo).title = "buraco aberto";
                }else if(matrizDoMapa[i][j] == 6){
                    document.getElementById(baseCampo).alt = "buraco fechado";
                    document.getElementById(baseCampo).title = "buraco fechado";
                }else if(matrizDoMapa[i][j] == 7){
                    document.getElementById(baseCampo).alt = "caixa";
                    document.getElementById(baseCampo).title = "caixa";
                }else if(matrizDoMapa[i][j] == 26){
                    document.getElementById(baseCampo).alt = "água";
                    document.getElementById(baseCampo).title = "água";
                }else if(matrizDoMapa[i][j] == 27){
                    document.getElementById(baseCampo).alt = "teto";
                    document.getElementById(baseCampo).title = "teto";
                }else if(
                    matrizDoMapa[i][j] == 28 || 
                    matrizDoMapa[i][j] == 29 || 
                    matrizDoMapa[i][j] == 30 || 
                    matrizDoMapa[i][j] == 31 || 
                    matrizDoMapa[i][j] == 32
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
                    matrizDoMapa[i][j] == 40
                ){
                    document.getElementById(baseCampo).alt = "margem de água";
                    document.getElementById(baseCampo).title = "margem de água";
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

                for(var i = posicaoDoPersonagemNaMatriz[0]-4; i < posicaoDoPersonagemNaMatriz[0]+5; i++){
                    for(var j = posicaoDoPersonagemNaMatriz[1]-5; j < posicaoDoPersonagemNaMatriz[1]+6; j++){

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
                        }
                        
                        if(i == posicaoDoPersonagemNaMatriz[0]-4 && j == posicaoDoPersonagemNaMatriz[1]-5){
                            auxPreencherImagens(i, j, caminhoImagem, "00");
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]-4 && j == posicaoDoPersonagemNaMatriz[1]-4){
                            auxPreencherImagens(i, j, caminhoImagem, "01");
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]-4 && j == posicaoDoPersonagemNaMatriz[1]-3){
                            auxPreencherImagens(i, j, caminhoImagem, "02");
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]-4 && j == posicaoDoPersonagemNaMatriz[1]-2){
                            auxPreencherImagens(i, j, caminhoImagem, "03");
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]-4 && j == posicaoDoPersonagemNaMatriz[1]-1){
                            auxPreencherImagens(i, j, caminhoImagem, "04");
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]-4 && j == posicaoDoPersonagemNaMatriz[1]){
                            auxPreencherImagens(i, j, caminhoImagem, "05");
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]-4 && j == posicaoDoPersonagemNaMatriz[1]+1){
                            auxPreencherImagens(i, j, caminhoImagem, "06");
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]-4 && j == posicaoDoPersonagemNaMatriz[1]+2){
                            auxPreencherImagens(i, j, caminhoImagem, "07");
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]-4 && j == posicaoDoPersonagemNaMatriz[1]+3){
                            auxPreencherImagens(i, j, caminhoImagem, "08");
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]-4 && j == posicaoDoPersonagemNaMatriz[1]+4){
                            auxPreencherImagens(i, j, caminhoImagem, "09");
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]-4 && j == posicaoDoPersonagemNaMatriz[1]+5){
                            auxPreencherImagens(i, j, caminhoImagem, "010");
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]-3 && j == posicaoDoPersonagemNaMatriz[1]-5){
                            auxPreencherImagens(i, j, caminhoImagem, "001");
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]-3 && j == posicaoDoPersonagemNaMatriz[1]-4){
                            auxPreencherImagens(i, j, caminhoImagem, "1");
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]-3 && j == posicaoDoPersonagemNaMatriz[1]-3){
                            auxPreencherImagens(i, j, caminhoImagem, "2");
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]-3 && j == posicaoDoPersonagemNaMatriz[1]-2){
                            auxPreencherImagens(i, j, caminhoImagem, "3");
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]-3 && j == posicaoDoPersonagemNaMatriz[1]-1){
                            auxPreencherImagens(i, j, caminhoImagem, "4");
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]-3 && j == posicaoDoPersonagemNaMatriz[1]){
                            auxPreencherImagens(i, j, caminhoImagem, "5");
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]-3 && j == posicaoDoPersonagemNaMatriz[1]+1){
                            auxPreencherImagens(i, j, caminhoImagem, "6");
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]-3 && j == posicaoDoPersonagemNaMatriz[1]+2){
                            auxPreencherImagens(i, j, caminhoImagem, "7");
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]-3 && j == posicaoDoPersonagemNaMatriz[1]+3){
                            auxPreencherImagens(i, j, caminhoImagem, "8");
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]-3 && j == posicaoDoPersonagemNaMatriz[1]+4){
                            auxPreencherImagens(i, j, caminhoImagem, "9");
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]-3 && j == posicaoDoPersonagemNaMatriz[1]+5){
                            auxPreencherImagens(i, j, caminhoImagem, "110");
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]-2 && j == posicaoDoPersonagemNaMatriz[1]-5){
                            auxPreencherImagens(i, j, caminhoImagem, "002");
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]-2 && j == posicaoDoPersonagemNaMatriz[1]-4){
                            auxPreencherImagens(i, j, caminhoImagem, "10");
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]-2 && j == posicaoDoPersonagemNaMatriz[1]-3){
                            auxPreencherImagens(i, j, caminhoImagem, "11");
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]-2 && j == posicaoDoPersonagemNaMatriz[1]-2){
                            auxPreencherImagens(i, j, caminhoImagem, "12");
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]-2 && j == posicaoDoPersonagemNaMatriz[1]-1){
                            auxPreencherImagens(i, j, caminhoImagem, "13");
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]-2 && j == posicaoDoPersonagemNaMatriz[1]){
                            auxPreencherImagens(i, j, caminhoImagem, "14");
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]-2 && j == posicaoDoPersonagemNaMatriz[1]+1){
                            auxPreencherImagens(i, j, caminhoImagem, "15");
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]-2 && j == posicaoDoPersonagemNaMatriz[1]+2){
                            auxPreencherImagens(i, j, caminhoImagem, "16");
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]-2 && j == posicaoDoPersonagemNaMatriz[1]+3){
                            auxPreencherImagens(i, j, caminhoImagem, "17");
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]-2 && j == posicaoDoPersonagemNaMatriz[1]+4){
                            auxPreencherImagens(i, j, caminhoImagem, "18");
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]-2 && j == posicaoDoPersonagemNaMatriz[1]+5){
                            auxPreencherImagens(i, j, caminhoImagem, "210");
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]-1 && j == posicaoDoPersonagemNaMatriz[1]-5){
                            auxPreencherImagens(i, j, caminhoImagem, "003");
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]-1 && j == posicaoDoPersonagemNaMatriz[1]-4){
                            auxPreencherImagens(i, j, caminhoImagem, "19");
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]-1 && j == posicaoDoPersonagemNaMatriz[1]-3){
                            auxPreencherImagens(i, j, caminhoImagem, "20");
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]-1 && j == posicaoDoPersonagemNaMatriz[1]-2){
                            auxPreencherImagens(i, j, caminhoImagem, "21");
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]-1 && j == posicaoDoPersonagemNaMatriz[1]-1){
                            auxPreencherImagens(i, j, caminhoImagem, "22");
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]-1 && j == posicaoDoPersonagemNaMatriz[1]){
                            auxPreencherImagens(i, j, caminhoImagem, "23");
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]-1 && j == posicaoDoPersonagemNaMatriz[1]+1){
                            auxPreencherImagens(i, j, caminhoImagem, "24");
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]-1 && j == posicaoDoPersonagemNaMatriz[1]+2){
                            auxPreencherImagens(i, j, caminhoImagem, "25");
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]-1 && j == posicaoDoPersonagemNaMatriz[1]+3){
                            auxPreencherImagens(i, j, caminhoImagem, "26");
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]-1 && j == posicaoDoPersonagemNaMatriz[1]+4){
                            auxPreencherImagens(i, j, caminhoImagem, "27");
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]-1 && j == posicaoDoPersonagemNaMatriz[1]+5){
                            auxPreencherImagens(i, j, caminhoImagem, "310");
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0] && j == posicaoDoPersonagemNaMatriz[1]-5){
                            auxPreencherImagens(i, j, caminhoImagem, "004");
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0] && j == posicaoDoPersonagemNaMatriz[1]-4){
                            auxPreencherImagens(i, j, caminhoImagem, "28");
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0] && j == posicaoDoPersonagemNaMatriz[1]-3){
                            auxPreencherImagens(i, j, caminhoImagem, "29");
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0] && j == posicaoDoPersonagemNaMatriz[1]-2){
                            auxPreencherImagens(i, j, caminhoImagem, "30");
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0] && j == posicaoDoPersonagemNaMatriz[1]-1){
                            auxPreencherImagens(i, j, caminhoImagem, "31");
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0] && j == posicaoDoPersonagemNaMatriz[1]){
                            auxPreencherImagens(i, j, caminhoImagem, "32");
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0] && j == posicaoDoPersonagemNaMatriz[1]+1){
                            auxPreencherImagens(i, j, caminhoImagem, "33");
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0] && j == posicaoDoPersonagemNaMatriz[1]+2){
                            auxPreencherImagens(i, j, caminhoImagem, "34");
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0] && j == posicaoDoPersonagemNaMatriz[1]+3){
                            auxPreencherImagens(i, j, caminhoImagem, "35");
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0] && j == posicaoDoPersonagemNaMatriz[1]+4){
                            auxPreencherImagens(i, j, caminhoImagem, "36");
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0] && j == posicaoDoPersonagemNaMatriz[1]+5){
                            auxPreencherImagens(i, j, caminhoImagem, "410");
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]+1 && j == posicaoDoPersonagemNaMatriz[1]-5){
                            auxPreencherImagens(i, j, caminhoImagem, "005");
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]+1 && j == posicaoDoPersonagemNaMatriz[1]-4){
                            auxPreencherImagens(i, j, caminhoImagem, "37");
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]+1 && j == posicaoDoPersonagemNaMatriz[1]-3){
                            auxPreencherImagens(i, j, caminhoImagem, "38");
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]+1 && j == posicaoDoPersonagemNaMatriz[1]-2){
                            auxPreencherImagens(i, j, caminhoImagem, "39");
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]+1 && j == posicaoDoPersonagemNaMatriz[1]-1){
                            auxPreencherImagens(i, j, caminhoImagem, "40");
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]+1 && j == posicaoDoPersonagemNaMatriz[1]){
                            auxPreencherImagens(i, j, caminhoImagem, "41");
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]+1 && j == posicaoDoPersonagemNaMatriz[1]+1){
                            auxPreencherImagens(i, j, caminhoImagem, "42");
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]+1 && j == posicaoDoPersonagemNaMatriz[1]+2){
                            auxPreencherImagens(i, j, caminhoImagem, "43");
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]+1 && j == posicaoDoPersonagemNaMatriz[1]+3){
                            auxPreencherImagens(i, j, caminhoImagem, "44");
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]+1 && j == posicaoDoPersonagemNaMatriz[1]+4){
                            auxPreencherImagens(i, j, caminhoImagem, "45");
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]+1 && j == posicaoDoPersonagemNaMatriz[1]+5){
                            auxPreencherImagens(i, j, caminhoImagem, "510");
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]+2 && j == posicaoDoPersonagemNaMatriz[1]-5){
                            auxPreencherImagens(i, j, caminhoImagem, "006");
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]+2 && j == posicaoDoPersonagemNaMatriz[1]-4){
                            auxPreencherImagens(i, j, caminhoImagem, "46");
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]+2 && j == posicaoDoPersonagemNaMatriz[1]-3){
                            auxPreencherImagens(i, j, caminhoImagem, "47");
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]+2 && j == posicaoDoPersonagemNaMatriz[1]-2){
                            auxPreencherImagens(i, j, caminhoImagem, "48");
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]+2 && j == posicaoDoPersonagemNaMatriz[1]-1){
                            auxPreencherImagens(i, j, caminhoImagem, "49");
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]+2 && j == posicaoDoPersonagemNaMatriz[1]){
                            auxPreencherImagens(i, j, caminhoImagem, "50");
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]+2 && j == posicaoDoPersonagemNaMatriz[1]+1){
                            auxPreencherImagens(i, j, caminhoImagem, "51");
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]+2 && j == posicaoDoPersonagemNaMatriz[1]+2){
                            auxPreencherImagens(i, j, caminhoImagem, "52");
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]+2 && j == posicaoDoPersonagemNaMatriz[1]+3){
                            auxPreencherImagens(i, j, caminhoImagem, "53");
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]+2 && j == posicaoDoPersonagemNaMatriz[1]+4){
                            auxPreencherImagens(i, j, caminhoImagem, "54");
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]+2 && j == posicaoDoPersonagemNaMatriz[1]+5){
                            auxPreencherImagens(i, j, caminhoImagem, "610");
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]+3 && j == posicaoDoPersonagemNaMatriz[1]-5){
                            auxPreencherImagens(i, j, caminhoImagem, "007");
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]+3 && j == posicaoDoPersonagemNaMatriz[1]-4){
                            auxPreencherImagens(i, j, caminhoImagem, "55");
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]+3 && j == posicaoDoPersonagemNaMatriz[1]-3){
                            auxPreencherImagens(i, j, caminhoImagem, "56");
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]+3 && j == posicaoDoPersonagemNaMatriz[1]-2){
                            auxPreencherImagens(i, j, caminhoImagem, "57");
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]+3 && j == posicaoDoPersonagemNaMatriz[1]-1){
                            auxPreencherImagens(i, j, caminhoImagem, "58");
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]+3 && j == posicaoDoPersonagemNaMatriz[1]){
                            auxPreencherImagens(i, j, caminhoImagem, "59");
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]+3 && j == posicaoDoPersonagemNaMatriz[1]+1){
                            auxPreencherImagens(i, j, caminhoImagem, "60");
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]+3 && j == posicaoDoPersonagemNaMatriz[1]+2){
                            auxPreencherImagens(i, j, caminhoImagem, "61");
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]+3 && j == posicaoDoPersonagemNaMatriz[1]+3){
                            auxPreencherImagens(i, j, caminhoImagem, "62");
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]+3 && j == posicaoDoPersonagemNaMatriz[1]+4){
                            auxPreencherImagens(i, j, caminhoImagem, "63");
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]+3 && j == posicaoDoPersonagemNaMatriz[1]+5){
                            auxPreencherImagens(i, j, caminhoImagem, "710");
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]+4 && j == posicaoDoPersonagemNaMatriz[1]-5){
                            auxPreencherImagens(i, j, caminhoImagem, "008");
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]+4 && j == posicaoDoPersonagemNaMatriz[1]-4){
                            auxPreencherImagens(i, j, caminhoImagem, "81");
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]+4 && j == posicaoDoPersonagemNaMatriz[1]-3){
                            auxPreencherImagens(i, j, caminhoImagem, "82");
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]+4 && j == posicaoDoPersonagemNaMatriz[1]-2){
                            auxPreencherImagens(i, j, caminhoImagem, "83");
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]+4 && j == posicaoDoPersonagemNaMatriz[1]-1){
                            auxPreencherImagens(i, j, caminhoImagem, "84");
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]+4 && j == posicaoDoPersonagemNaMatriz[1]){
                            auxPreencherImagens(i, j, caminhoImagem, "85");
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]+4 && j == posicaoDoPersonagemNaMatriz[1]+1){
                            auxPreencherImagens(i, j, caminhoImagem, "86");
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]+4 && j == posicaoDoPersonagemNaMatriz[1]+2){
                            auxPreencherImagens(i, j, caminhoImagem, "87");
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]+4 && j == posicaoDoPersonagemNaMatriz[1]+3){
                            auxPreencherImagens(i, j, caminhoImagem, "88");
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]+4 && j == posicaoDoPersonagemNaMatriz[1]+4){
                            auxPreencherImagens(i, j, caminhoImagem, "89");
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]+4 && j == posicaoDoPersonagemNaMatriz[1]+5){
                            auxPreencherImagens(i, j, caminhoImagem, "810");
                        }
                    }
                }
            }

            cima = function (){
                var quadrosDeAnimacaoInterno = quadrosDeAnimacao;
                var esperaPorQuadroInterno = esperaPorQuadro;

                while(quadrosDeAnimacaoInterno > 0){

                    setTimeout(function(){ document.getElementById('mapa1').style.top = (parseInt(document.getElementById('mapa1').style.top.split('p')[0]) + (mover/quadrosDeAnimacao)); }, esperaPorQuadroInterno);

                    quadrosDeAnimacaoInterno--;
                    esperaPorQuadroInterno = esperaPorQuadroInterno + esperaPorQuadro;
                }

                setTimeout(function(){ document.getElementById('mapa1').style.visibility = "hidden"; document.getElementById('mapa1').style.top = -60; preencherImagens(); document.getElementById('mapa1').style.visibility = "visible"; }, esperaPorQuadroInterno);
            }

            direita = function (){
                var quadrosDeAnimacaoInterno = quadrosDeAnimacao;
                var esperaPorQuadroInterno = esperaPorQuadro;

                while(quadrosDeAnimacaoInterno > 0){

                    setTimeout(function(){ document.getElementById('mapa1').style.left = (parseInt(document.getElementById('mapa1').style.left.split('p')[0]) - (mover/quadrosDeAnimacao)); }, esperaPorQuadroInterno);

                    quadrosDeAnimacaoInterno--;
                    esperaPorQuadroInterno = esperaPorQuadroInterno + esperaPorQuadro;
                }

                setTimeout(function(){ document.getElementById('mapa1').style.visibility = "hidden"; document.getElementById('mapa1').style.left = -60; preencherImagens(); document.getElementById('mapa1').style.visibility = "visible"; }, esperaPorQuadroInterno);
            }

            baixo = function (){
                var quadrosDeAnimacaoInterno = quadrosDeAnimacao;
                var esperaPorQuadroInterno = esperaPorQuadro;

                while(quadrosDeAnimacaoInterno > 0){

                    setTimeout(function(){ document.getElementById('mapa1').style.top = (parseInt(document.getElementById('mapa1').style.top.split('p')[0]) - (mover/quadrosDeAnimacao)); }, esperaPorQuadroInterno);

                    quadrosDeAnimacaoInterno--;
                    esperaPorQuadroInterno = esperaPorQuadroInterno + esperaPorQuadro;
                }

                setTimeout(function(){ document.getElementById('mapa1').style.visibility = "hidden"; document.getElementById('mapa1').style.top = -60; preencherImagens(); document.getElementById('mapa1').style.visibility = "visible"; }, esperaPorQuadroInterno);
            }

            esquerda = function (){
                var quadrosDeAnimacaoInterno = quadrosDeAnimacao;
                var esperaPorQuadroInterno = esperaPorQuadro;

                while(quadrosDeAnimacaoInterno > 0){

                    setTimeout(function(){ document.getElementById('mapa1').style.left = (parseInt(document.getElementById('mapa1').style.left.split('p')[0]) + (mover/quadrosDeAnimacao)); }, esperaPorQuadroInterno);

                    quadrosDeAnimacaoInterno--;
                    esperaPorQuadroInterno = esperaPorQuadroInterno + esperaPorQuadro;
                }

                setTimeout(function(){ document.getElementById('mapa1').style.visibility = "hidden"; document.getElementById('mapa1').style.left = -60; preencherImagens(); document.getElementById('mapa1').style.visibility = "visible"; }, esperaPorQuadroInterno);
            }
            
            ataqueCriatura = function (campo, distanciaDoPersonagemLinha, distanciaDoPersonagemColuna, hitDecrescimo, hitAcrescimo, morto, nomeCriatura){
                
                let hit = getRandomIntInclusive(lvlatual,lvlatual*2); 

                if( (matrizCriaturasVida[posicaoDoPersonagemNaMatriz[0] + distanciaDoPersonagemLinha][posicaoDoPersonagemNaMatriz[1] + distanciaDoPersonagemColuna] - (hit*hitDecrescimo)) > 0 ){ 
                    matrizCriaturasVida[posicaoDoPersonagemNaMatriz[0] + distanciaDoPersonagemLinha][posicaoDoPersonagemNaMatriz[1] + distanciaDoPersonagemColuna] = matrizCriaturasVida[posicaoDoPersonagemNaMatriz[0] + distanciaDoPersonagemLinha][posicaoDoPersonagemNaMatriz[1] + distanciaDoPersonagemColuna] - (hit*hitDecrescimo); 
                    document.getElementById('barraHp' + campo).style.width = matrizCriaturasVida[posicaoDoPersonagemNaMatriz[0] + distanciaDoPersonagemLinha][posicaoDoPersonagemNaMatriz[1] + distanciaDoPersonagemColuna]; 
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
                    }

                    document.getElementById('mensagemDiv' + campo).innerHTML = (matrizCriaturasVida[posicaoDoPersonagemNaMatriz[0] + distanciaDoPersonagemLinha][posicaoDoPersonagemNaMatriz[1] + distanciaDoPersonagemColuna] * hitAcrescimo) + 1; 
                    document.getElementById('mensagemDiv3').style.color = 'white'; 
                    document.getElementById('mensagemDiv3').style.textAlign = 'center'; 
                    document.getElementById('mensagemDiv3').style.width = 50; 
                    document.getElementById('mensagemDiv3').innerHTML = xp + "Xp"; 
                    setTimeout(function(){ 
                        document.getElementById('mensagemDiv' + campo).innerHTML = ""; 
                        document.getElementById('mensagemDiv3').innerHTML = ""; 
                        document.getElementById('mensagemDiv3').style.color = 'yellow'; 
                        document.getElementById('mensagemDiv3').style.width = 250; 
                    }, 500); 
                    mensagensDoChatServerLog += "\n\nUm(a) " + nomeCriatura + " perdeu " + ((matrizCriaturasVida[posicaoDoPersonagemNaMatriz[0] + distanciaDoPersonagemLinha][posicaoDoPersonagemNaMatriz[1] + distanciaDoPersonagemColuna] * hitAcrescimo) + 1) + " pontos de vida devido ao seu ataque."; 
                    matrizCriaturasVida[posicaoDoPersonagemNaMatriz[0] + distanciaDoPersonagemLinha][posicaoDoPersonagemNaMatriz[1] + distanciaDoPersonagemColuna] = 0; 
                    mensagensDoChatServerLog += "\n\nVocê ganhou " + xp + " ponto(s) de experiência."; 
                    matrizDoMapa[posicaoDoPersonagemNaMatriz[0] + distanciaDoPersonagemLinha][posicaoDoPersonagemNaMatriz[1] + distanciaDoPersonagemColuna] = morto; 
                    nivel += xp; 

                    calculaLevel();

                    preencherImagens(); 
                    if(document.getElementById('task').innerHTML == nomeCriatura && taskvalor < 100){
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
                }
            }

            moverCima = function (){
                if(document.getElementById('mensagem1').style.visibility == 'hidden'){if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 0 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 4 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 6 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 7 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 12 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 13 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 14 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 15 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 22 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 23 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 24 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 25){ cima(); posicaoDoPersonagemNaMatriz[0] = posicaoDoPersonagemNaMatriz[0] - 1; if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]] == 7){nivelDeSolo++; document.getElementById('personagem1').style.top = parseInt(document.getElementById('personagem1').style.top.split('p')[0]) - 10; document.getElementById('personagem1').style.left = parseInt(document.getElementById('personagem1').style.left.split('p')[0]) - 10;} if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 7){nivelDeSolo--; document.getElementById('personagem1').style.top = parseInt(document.getElementById('personagem1').style.top.split('p')[0]) + 10; document.getElementById('personagem1').style.left = parseInt(document.getElementById('personagem1').style.left.split('p')[0]) + 10;}}else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 2){recompensaSacola(-1,0);}else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 3){document.getElementById('fala1').src = 'imagens/imagemFalaItemVazio.png'; setTimeout(function(){ document.getElementById('fala1').src = 'imagens/imagemFalaVazia.png';}, 1000);}else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 5){posicaoDoPersonagemNaMatriz[0] = posicaoDoPersonagemNaMatriz[0]-11; posicaoDoPersonagemNaMatriz[1] = posicaoDoPersonagemNaMatriz[1]; preencherImagens();}else{ ataqueCampo("Campo23", -1, 0); } direcaoDoPersonagem = 0; if(outfit == "M"){ document.getElementById('personagem1').src = 'imagens/imagemPersonagemDeCostas.png'; }else if(outfit == "F"){ document.getElementById('personagem1').src = 'imagens/imagemPersonagemDeCostasF.png'; } }
            }

            moverDireita = function (){
                if(document.getElementById('mensagem1').style.visibility == 'hidden'){if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 0 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 4 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 6 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 7 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 12 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 13 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 14 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 15 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 22 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 23 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 24 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 25){ direita(); posicaoDoPersonagemNaMatriz[1] = posicaoDoPersonagemNaMatriz[1] + 1; if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]] == 7){nivelDeSolo++; document.getElementById('personagem1').style.top = parseInt(document.getElementById('personagem1').style.top.split('p')[0]) - 10; document.getElementById('personagem1').style.left = parseInt(document.getElementById('personagem1').style.left.split('p')[0]) - 10;} if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 7){nivelDeSolo--; document.getElementById('personagem1').style.top = parseInt(document.getElementById('personagem1').style.top.split('p')[0]) + 10; document.getElementById('personagem1').style.left = parseInt(document.getElementById('personagem1').style.left.split('p')[0]) + 10;}}else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 2){recompensaSacola(0,1);}else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 3){document.getElementById('fala1').src = 'imagens/imagemFalaItemVazio.png'; setTimeout(function(){ document.getElementById('fala1').src = 'imagens/imagemFalaVazia.png';}, 1000);}else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 5){ posicaoDoPersonagemNaMatriz[0] = posicaoDoPersonagemNaMatriz[0]-10; posicaoDoPersonagemNaMatriz[1] = posicaoDoPersonagemNaMatriz[1]+1; preencherImagens();}else{ ataqueCampo("Campo33", 0, 1); } direcaoDoPersonagem = 1; if(outfit == "M"){ document.getElementById('personagem1').src = 'imagens/imagemPersonagemDeDireita.png'; }else if(outfit == "F"){ document.getElementById('personagem1').src = 'imagens/imagemPersonagemDeDireitaF.png'; } }
            }

            moverBaixo = function (){
                if(document.getElementById('mensagem1').style.visibility == 'hidden'){if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 0 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 4 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 6 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 7 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 12 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 13 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 14 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 15 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 22 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 23 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 24 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 25){ baixo(); posicaoDoPersonagemNaMatriz[0] = posicaoDoPersonagemNaMatriz[0] + 1; if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]] == 7){nivelDeSolo++; document.getElementById('personagem1').style.top = parseInt(document.getElementById('personagem1').style.top.split('p')[0]) - 10; document.getElementById('personagem1').style.left = parseInt(document.getElementById('personagem1').style.left.split('p')[0]) - 10;} if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 7){nivelDeSolo--; document.getElementById('personagem1').style.top = parseInt(document.getElementById('personagem1').style.top.split('p')[0]) + 10; document.getElementById('personagem1').style.left = parseInt(document.getElementById('personagem1').style.left.split('p')[0]) + 10;}}else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 2){recompensaSacola(1,0);}else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 3){document.getElementById('fala1').src = 'imagens/imagemFalaItemVazio.png'; setTimeout(function(){ document.getElementById('fala1').src = 'imagens/imagemFalaVazia.png';}, 1000);}else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 5){posicaoDoPersonagemNaMatriz[0] = posicaoDoPersonagemNaMatriz[0]-9; posicaoDoPersonagemNaMatriz[1] = posicaoDoPersonagemNaMatriz[1]; preencherImagens();}else{ ataqueCampo("Campo41", 1, 0); } direcaoDoPersonagem = 2; if(outfit == "M"){ document.getElementById('personagem1').src = 'imagens/imagemPersonagemDeFrente.png'; }else if(outfit == "F"){ document.getElementById('personagem1').src = 'imagens/imagemPersonagemDeFrenteF.png'; } }
            }

            moverEsquerda = function (){
                if(document.getElementById('mensagem1').style.visibility == 'hidden'){if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 0 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 4 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 6 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 7 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 12 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 13 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 14 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 15 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 22 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 23 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 24 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 25){ esquerda(); posicaoDoPersonagemNaMatriz[1] = posicaoDoPersonagemNaMatriz[1] - 1; if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]] == 7){nivelDeSolo++; document.getElementById('personagem1').style.top = parseInt(document.getElementById('personagem1').style.top.split('p')[0]) - 10; document.getElementById('personagem1').style.left = parseInt(document.getElementById('personagem1').style.left.split('p')[0]) - 10;} if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 7){nivelDeSolo--; document.getElementById('personagem1').style.top = parseInt(document.getElementById('personagem1').style.top.split('p')[0]) + 10; document.getElementById('personagem1').style.left = parseInt(document.getElementById('personagem1').style.left.split('p')[0]) + 10;}}else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 2){recompensaSacola(0,-1);}else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 3){document.getElementById('fala1').src = 'imagens/imagemFalaItemVazio.png'; setTimeout(function(){ document.getElementById('fala1').src = 'imagens/imagemFalaVazia.png';}, 1000);}else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 5){ posicaoDoPersonagemNaMatriz[0] = posicaoDoPersonagemNaMatriz[0]-10; posicaoDoPersonagemNaMatriz[1] = posicaoDoPersonagemNaMatriz[1]-1; preencherImagens();}else{ ataqueCampo("Campo31", 0, -1); } direcaoDoPersonagem = 3; if(outfit == "M"){ document.getElementById('personagem1').src = 'imagens/imagemPersonagemDeEsquerda.png'; }else if(outfit == "F"){ document.getElementById('personagem1').src = 'imagens/imagemPersonagemDeEsquerdaF.png'; } }
            }

            funcMoverPersonagem = function (){

                if(dataMove > new Date()){
                    return;
                }

                let velocidade = (lvlatual < 490)?(500 - lvlatual):10;

                dataMove = new Date();
                dataMove.setMilliseconds(dataMove.getMilliseconds() + velocidade);

                if(document.getElementById('mensagem1').style.visibility == 'hidden'){
                    if(moverPersonagem[0] != 0 || moverPersonagem[1] != 0 ){
                        datainicioinatividade = new Date();
                        if(moverPersonagem[1] < 0 && verificarPosicaoValida(0,-1)){
                            moverEsquerda();
                            moverPersonagem[1] = moverPersonagem[1] + 1;
                            verificacaoDistanciamentoNPC();
                        }else if(moverPersonagem[0] < 0 && verificarPosicaoValida(-1,0)){
                            moverCima();
                            moverPersonagem[0] = moverPersonagem[0] + 1;
                            verificacaoDistanciamentoNPC();
                        }else if(moverPersonagem[1] > 0 && verificarPosicaoValida(0,1)){
                            moverDireita();
                            moverPersonagem[1] = moverPersonagem[1] - 1;
                            verificacaoDistanciamentoNPC();
                        }else if(moverPersonagem[0] > 0 && verificarPosicaoValida(1,0)){
                            moverBaixo();
                            moverPersonagem[0] = moverPersonagem[0] - 1;
                            verificacaoDistanciamentoNPC();
                        }else{
                            if(moverPersonagem[0] == -1 && moverPersonagem[1] == 0){
                                moverCima();
                                if(parseInt(document.getElementById("barraHpCampo23").style.width.split('p')[0]) <= 13){ 
                                    document.getElementById("nomeCampo23").style.color = 'tomato';
                                    document.getElementById("barraHpCampo23").style.background = 'tomato';
                                } else if(parseInt(document.getElementById("barraHpCampo23").style.width.split('p')[0]) <= 25){ 
                                    document.getElementById("nomeCampo23").style.color = 'orange';
                                    document.getElementById("barraHpCampo23").style.background = 'orange';
                                } else if(parseInt(document.getElementById("barraHpCampo23").style.width.split('p')[0]) > 25){ 
                                    document.getElementById("nomeCampo23").style.color = 'mediumseagreen';
                                    document.getElementById("barraHpCampo23").style.background = 'mediumseagreen';
                                }
                                verificacaoAproximacaoNPC(-1,0);
                            }
                            if(moverPersonagem[0] == 0 && moverPersonagem[1] == 1){
                                moverDireita();
                                if(parseInt(document.getElementById("barraHpCampo33").style.width.split('p')[0]) <= 13){ 
                                    document.getElementById("nomeCampo33").style.color = 'tomato';
                                    document.getElementById("barraHpCampo33").style.background = 'tomato';
                                } else if(parseInt(document.getElementById("barraHpCampo33").style.width.split('p')[0]) <= 25){ 
                                    document.getElementById("nomeCampo33").style.color = 'orange';
                                    document.getElementById("barraHpCampo33").style.background = 'orange';
                                } else if(parseInt(document.getElementById("barraHpCampo33").style.width.split('p')[0]) > 25){ 
                                    document.getElementById("nomeCampo33").style.color = 'mediumseagreen';
                                    document.getElementById("barraHpCampo33").style.background = 'mediumseagreen';
                                }
                                verificacaoAproximacaoNPC(0,1);
                            }
                            if(moverPersonagem[0] == 1 && moverPersonagem[1] == 0){
                                moverBaixo();
                                if(parseInt(document.getElementById("barraHpCampo41").style.width.split('p')[0]) <= 13){ 
                                    document.getElementById("nomeCampo41").style.color = 'tomato';
                                    document.getElementById("barraHpCampo41").style.background = 'tomato';
                                } else if(parseInt(document.getElementById("barraHpCampo41").style.width.split('p')[0]) <= 25){ 
                                    document.getElementById("nomeCampo41").style.color = 'orange';
                                    document.getElementById("barraHpCampo41").style.background = 'orange';
                                } else if(parseInt(document.getElementById("barraHpCampo41").style.width.split('p')[0]) > 25){ 
                                    document.getElementById("nomeCampo41").style.color = 'mediumseagreen';
                                    document.getElementById("barraHpCampo41").style.background = 'mediumseagreen';
                                }
                                verificacaoAproximacaoNPC(1,0);
                            }
                            if(moverPersonagem[0] == 0 && moverPersonagem[1] == -1){
                                moverEsquerda();
                                if(parseInt(document.getElementById("barraHpCampo31").style.width.split('p')[0]) <= 13){ 
                                    document.getElementById("nomeCampo31").style.color = 'tomato';
                                    document.getElementById("barraHpCampo31").style.background = 'tomato';
                                } else if(parseInt(document.getElementById("barraHpCampo31").style.width.split('p')[0]) <= 25){ 
                                    document.getElementById("nomeCampo31").style.color = 'orange';
                                    document.getElementById("barraHpCampo31").style.background = 'orange';
                                } else if(parseInt(document.getElementById("barraHpCampo31").style.width.split('p')[0]) > 25){ 
                                    document.getElementById("nomeCampo31").style.color = 'mediumseagreen';
                                    document.getElementById("barraHpCampo31").style.background = 'mediumseagreen';
                                }
                                verificacaoAproximacaoNPC(0,-1);
                            }

                            moverPersonagem = [0,0];
                        }
                    }
                }
            }

            getRandomIntInclusive = function (min, max) {
                min = Math.ceil(min);
                max = Math.floor(max);
                return Math.floor(Math.random() * (max - min + 1)) + min;
            }

            animacaoMonster = function (normal,atacando,morto,hitmin, hitmax){

                let hitTotal = 0;
                let hit = 0;

                //Animacao Monster Atacando de Cima

                hit = getRandomIntInclusive(hitmin, hitmax);

                if(
                    (
                        matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == atacando || 
                        matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == morto
                    ) && 
                    (
                        (posicaoDoPersonagemNaMatriz[0]-1) != posicaoLinhaCima ||
                        posicaoDoPersonagemNaMatriz[1] != posicaoColunaCima
                    )
                ){
                    matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] = normal;
                }
                if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == normal || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == morto){
                    posicaoLinhaCima = posicaoDoPersonagemNaMatriz[0]-1;
                    posicaoColunaCima = posicaoDoPersonagemNaMatriz[1];
                    flagCima = true;
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
                        hp = 0;
                        hitTotal += hp;
                        personagemMorto = true;
                        posicaoDoPersonagemNaMatriz = [5,6];
                        document.getElementById('mensagem1').src = 'imagens/imagemMensagemPersonagemMorto.png';
                        document.getElementById('mensagem1').style.visibility = 'visible';
                    }
                } else if((matrizDoMapa[posicaoLinhaCima][posicaoColunaCima] == atacando || matrizDoMapa[posicaoLinhaCima][posicaoColunaCima] == morto) && flagCima){
                    matrizDoMapa[posicaoLinhaCima][posicaoColunaCima] = normal;
                    flagCima = false;
                }

                //Animacao Monster Atacando da Esquerda

                hit = getRandomIntInclusive(hitmin, hitmax);

                if(
                    (
                        matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == atacando || 
                        matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == morto
                    ) && 
                    (
                        posicaoDoPersonagemNaMatriz[0] != posicaoLinhaEsquerda ||
                        (posicaoDoPersonagemNaMatriz[1]-1) != posicaoColunaEsquerda
                    )
                ){
                    matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] = normal;
                }
                if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == normal || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == morto){
                    posicaoLinhaEsquerda = posicaoDoPersonagemNaMatriz[0];
                    posicaoColunaEsquerda = posicaoDoPersonagemNaMatriz[1]-1;
                    flagEsquerda = true;
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
                        hp = 0;
                        hitTotal += hp;
                        personagemMorto = true;
                        posicaoDoPersonagemNaMatriz = [5,6];
                        document.getElementById('mensagem1').src = 'imagens/imagemMensagemPersonagemMorto.png';
                        document.getElementById('mensagem1').style.visibility = 'visible';
                    }
                } else if((matrizDoMapa[posicaoLinhaEsquerda][posicaoColunaEsquerda] == atacando || matrizDoMapa[posicaoLinhaEsquerda][posicaoColunaEsquerda] == morto) && flagEsquerda){
                    matrizDoMapa[posicaoLinhaEsquerda][posicaoColunaEsquerda] = normal;
                    flagEsquerda = false;
                }

                //Animacao Monster Atacando da Direita

                hit = getRandomIntInclusive(hitmin, hitmax);

                if(
                    (
                        matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == atacando || 
                        matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == morto
                    ) && 
                    (
                        posicaoDoPersonagemNaMatriz[0] != posicaoLinhaDireita ||
                        (posicaoDoPersonagemNaMatriz[1]+1) != posicaoColunaDireita
                    )
                ){
                    matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] = normal;
                }
                if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == normal || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == morto){
                    posicaoLinhaDireita = posicaoDoPersonagemNaMatriz[0];
                    posicaoColunaDireita = posicaoDoPersonagemNaMatriz[1]+1;
                    flagDireita = true;
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
                        hp = 0;
                        hitTotal += hp;
                        personagemMorto = true;
                        posicaoDoPersonagemNaMatriz = [5,6];
                        document.getElementById('mensagem1').src = 'imagens/imagemMensagemPersonagemMorto.png';
                        document.getElementById('mensagem1').style.visibility = 'visible';
                    }
                } else if((matrizDoMapa[posicaoLinhaDireita][posicaoColunaDireita] == atacando || matrizDoMapa[posicaoLinhaDireita][posicaoColunaDireita] == morto) && flagDireita){
                    matrizDoMapa[posicaoLinhaDireita][posicaoColunaDireita] = normal;
                    flagDireita = false;
                }

                //Animacao Monster Atacando de Baixo

                hit = getRandomIntInclusive(hitmin, hitmax);

                if(
                    (
                        matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == atacando || 
                        matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == morto
                    ) && 
                    (
                        (posicaoDoPersonagemNaMatriz[0]+1) != posicaoLinhaBaixo ||
                        posicaoDoPersonagemNaMatriz[1] != posicaoColunaBaixo
                    )
                ){
                    matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] = normal;
                }
                if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == normal || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == morto){
                    posicaoLinhaBaixo = posicaoDoPersonagemNaMatriz[0]+1;
                    posicaoColunaBaixo = posicaoDoPersonagemNaMatriz[1];
                    flagBaixo = true;
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
                        hp = 0;
                        hitTotal += hp;
                        personagemMorto = true;
                        posicaoDoPersonagemNaMatriz = [5,6];
                        document.getElementById('mensagem1').src = 'imagens/imagemMensagemPersonagemMorto.png';
                        document.getElementById('mensagem1').style.visibility = 'visible';
                    }
                } else if((matrizDoMapa[posicaoLinhaBaixo][posicaoColunaBaixo] == atacando || matrizDoMapa[posicaoLinhaBaixo][posicaoColunaBaixo] == morto) && flagBaixo){
                    matrizDoMapa[posicaoLinhaBaixo][posicaoColunaBaixo] = normal;
                    flagBaixo = false;
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

                    dados.append('username', username);
                    dados.append('password', password);
                    dados.append('x', posicaoDoPersonagemNaMatriz[0]);
                    dados.append('y', posicaoDoPersonagemNaMatriz[1]);
                    dados.append('direcao', direcaoDoPersonagem);
                    dados.append('outfit', outfit);
                    dados.append('nivel', nivel);
                    dados.append('hp', hp);
                    dados.append('mensagem', mensagem);

                    $.ajax({
                        url: 'gameGET.php',
                        method: 'POST',
                        data: dados,
                        processData: false,
                        contentType: false
                    }).done(function(resposta){

                        if(dadosResposta != "vazio"){
                            for(let i = 0; i < dadosResposta.players.length; i++){
                                switch(matrizDoMapaOriginal[dadosResposta.players[i].x][dadosResposta.players[i].y]){
                                    case 0:
                                        matrizDoMapa[dadosResposta.players[i].x][dadosResposta.players[i].y] = 0;
                                        break;
                                    case 4:
                                        matrizDoMapa[dadosResposta.players[i].x][dadosResposta.players[i].y] = 4;
                                        break;
                                    case 5:
                                        matrizDoMapa[dadosResposta.players[i].x][dadosResposta.players[i].y] = 5;
                                        break;
                                    case 6:
                                        matrizDoMapa[dadosResposta.players[i].x][dadosResposta.players[i].y] = 6;
                                        break;
                                    case 7:
                                        matrizDoMapa[dadosResposta.players[i].x][dadosResposta.players[i].y] = 7;
                                        break;
                                }
                            }
                        }

                        dadosResposta = JSON.parse(resposta);
                        
                        for(let i = 0; i < dadosResposta.players.length; i++){
                            if(
                                matrizDoMapaOriginal[dadosResposta.players[i].x][dadosResposta.players[i].y] != 4 &&
                                matrizDoMapaOriginal[dadosResposta.players[i].x][dadosResposta.players[i].y] != 5 &&
                                matrizDoMapaOriginal[dadosResposta.players[i].x][dadosResposta.players[i].y] != 6 &&
                                matrizDoMapaOriginal[dadosResposta.players[i].x][dadosResposta.players[i].y] != 7 &&
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
                                }
                            }
                        }

                    })

                    // [FIM] AJAX

                }

                let tempoinativo = 0;
                let hitTotal = 0;
                personagemMorto = false;

                hitTotal += animacaoMonster(8,9,10,1,50); //Snake(normal,atacando,morto,hit)
                hitTotal += animacaoMonster(16,17,18,50,150); //Dragon(normal,atacando,morto,hit)
                hitTotal += animacaoMonster(19,20,21,150,450); //Mammoth(normal,atacando,morto,hit)

                if(personagemMorto){
                    let perdaDeNivel = (nivel * 0.01) | 0;
                    nivel -= perdaDeNivel;
                    calculaLevel();
                    mensagensDoChatServerLog += "\n\nVoce perdeu " + perdaDeNivel + " pontos de experiencia.";
                }

                if(hitTotal > 0){
                    mensagensDoChatServerLog += "\n\nVoce perdeu " + hitTotal + " pontos de vida.";
                }

                if(!inativo){
                    if(flagAjax){
                        run_ajax();
                        flagAjax = false;
                        regeneracao(1, "regenerou");
                    }else{
                        console.log("Ajax desnecessário");
                    }
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
                    document.getElementById('mensagem1').src = 'imagens/imagemMensagemPersonagemInativo.png';
                    document.getElementById('mensagem1').style.visibility = 'visible';
                }else{
                    inativo = false;
                }

                //document.getElementById('campoDeEscritaInput').focus();

            }

            dialogo = function (){
                var conjurarExura = false;
                var conjurarExuraGran = false;
                var conjurarExori = false;
                var conjurarExoriGran = false;
                
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
                                (quest1 || quest2 || quest3) &&
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
                                        (document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'mammoth task')
                                    ) && 
                                    (
                                        (document.getElementById('task').style.visibility == 'hidden') ||
                                        (document.getElementById('campoDeEscritaInput').value.split(' ')[0].toLowerCase() == document.getElementById('task').innerHTML.toLowerCase() && document.getElementById('task').style.visibility == 'visible' && taskvalor == 100)
                                    ) && document.getElementById('opcao1').title == "Snake Task"
                                ) ||
                                (
                                    (document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'reset task') && 
                                    (document.getElementById('task').style.visibility == 'visible') &&
                                    (document.getElementById('opcao1').title == "Snake Task")
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
                                        (document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'mammoth task')
                                    ) &&
                                    (
                                        (document.getElementById('campoDeEscritaInput').value.split(' ')[0].toLowerCase() == document.getElementById('task').innerHTML.toLowerCase() && document.getElementById('task').style.visibility == 'visible' && taskvalor < 100) ||
                                        (document.getElementById('campoDeEscritaInput').value.split(' ')[0].toLowerCase() != document.getElementById('task').innerHTML.toLowerCase() && document.getElementById('task').style.visibility == 'visible')
                                    ) && document.getElementById('opcao1').title == "Snake Task"
                                ) ||
                                (
                                    (document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'reset task') && 
                                    (document.getElementById('task').style.visibility == 'hidden') &&
                                    (document.getElementById('opcao1').title == "Snake Task")
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
                        document.getElementById('mensagemDiv2').innerHTML = "Você ainda não sabe esta magia.";
                        setTimeout(function(){document.getElementById('mensagemDiv2').innerHTML = "";}, 5000);
                    }else if(document.getElementById('campoDeEscritaInput').value.toLowerCase() != ""){
                        let data = new Date();
                        mensagensDoChatDefault += "\n\n" + data.getHours() + ":" + data.getMinutes() + " " + username + " [" + lvlatual + "]: " + document.getElementById('campoDeEscritaInput').value;

                        if(document.getElementById('campoDeEscritaInput').value.length < 32){
                            document.getElementById('mensagemDiv3').style.textAlign = 'left';
                            document.getElementById('mensagemDiv3').style.left = 245;
                        } else {
                            document.getElementById('mensagemDiv3').style.textAlign = 'center';
                            document.getElementById('mensagemDiv3').style.left = 200;
                        }
                        document.getElementById('mensagemDiv3').style.color = 'yellow';
                        document.getElementById('mensagemDiv3').style.width = 250;

                        mensagem = document.getElementById('campoDeEscritaInput').value;
                        document.getElementById('mensagemDiv3').innerHTML = username + " says: " + mensagem;
                        setTimeout(function(){mensagem = ""; document.getElementById('mensagemDiv3').innerHTML = "";}, 5000);
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
                        document.getElementById('mensagemDiv2').innerHTML = "Você ainda não sabe esta magia.";
                        setTimeout(function(){document.getElementById('mensagemDiv2').innerHTML = "";}, 5000);
                    }
                }else if(identificadorDoChat == 2){
                    if(
                        (document.getElementById('campoDeEscritaInput').value.toLowerCase() == "exura" && !exura && nivelDeConversaNpc != 3) ||
                        (document.getElementById('campoDeEscritaInput').value.toLowerCase() == "exura gran" && !exuraGran && (nivelDeConversaNpc != 3 && nivelDeConversaNpc != 5)) ||
                        (document.getElementById('campoDeEscritaInput').value.toLowerCase() == "exori" && !exori && (nivelDeConversaNpc != 3 && nivelDeConversaNpc != 5)) ||
                        (document.getElementById('campoDeEscritaInput').value.toLowerCase() == "exori gran" && !exoriGran && (nivelDeConversaNpc != 3 && nivelDeConversaNpc != 5))
                    ){
                        mensagensDoChatNpc += "\n\nSistema: Você ainda não sabe esta magia.";
                        document.getElementById('mensagemDiv2').innerHTML = "Você ainda não sabe esta magia.";
                        setTimeout(function(){document.getElementById('mensagemDiv2').innerHTML = "";}, 5000);
                    }else if(document.getElementById('campoDeEscritaInput').value.toLowerCase() != ""){
                        if(document.getElementById('campoDeEscritaInput').value.toLowerCase() == "nao"){
                            mensagensDoChatNpc += "\n\nAgora " + document.getElementById('campoDeEscritaInput').value.toLowerCase() + "!";
                        }else if(document.getElementById('campoDeEscritaInput').value.toLowerCase() == "no"){
                            mensagensDoChatNpc += "\n\n" + document.getElementById('campoDeEscritaInput').value.charAt(0).toUpperCase() + document.getElementById('campoDeEscritaInput').value.slice(1).toLowerCase() + " now!";
                        }else{
                            mensagensDoChatNpc += "\n\n" + document.getElementById('campoDeEscritaInput').value.charAt(0).toUpperCase() + document.getElementById('campoDeEscritaInput').value.slice(1).toLowerCase() + "!";
                        }
                    }
                    switch(nivelDeConversaNpc){
                        case 1:
                            if((!exura || !exuraGran || !exori || !exoriGran) && (quest1 || quest2 || quest3)){
                                mensagensDoChatNpc += "\n\nNpc: Oi aventureiro, você quer receber/finalizar uma 'task', aprender uma 'magia' ou resetar a quest principal?";

                                document.getElementById('mensagemDiv1').style.color = '#00ccff';
                                document.getElementById('mensagemDiv1').innerHTML = "Npc: Oi aventureiro, você quer receber/finalizar uma 'task' ou aprender uma 'magia'?";
                                setTimeout(function(){document.getElementById('mensagemDiv1').innerHTML = ""; document.getElementById('mensagemDiv1').style.color = "white";}, 10000);

                                document.getElementById('opcao1').innerHTML = "Task";
                                document.getElementById('opcao1').title = "Task";
                                document.getElementById('opcao1').style.height = 44;
                                document.getElementById('opcao1').style.visibility = 'visible';
                                document.getElementById('opcao2').innerHTML = "Magia";
                                document.getElementById('opcao2').title = "Magia";
                                document.getElementById('opcao2').style.height = 44;
                                document.getElementById('opcao2').style.visibility = 'visible';
                                document.getElementById('opcao3').innerHTML = "Reset Quest";
                                document.getElementById('opcao3').title = "Reset Quest";
                                document.getElementById('opcao3').style.height = 44;
                                document.getElementById('opcao3').style.visibility = 'visible';
                                document.getElementById('opcao4').innerHTML = "Agora nao";
                                document.getElementById('opcao4').title = "Nao";
                                document.getElementById('opcao4').style.height = 44;
                                document.getElementById('opcao4').style.visibility = 'visible';
                            } else if((!exura || !exuraGran || !exori || !exoriGran) && (!quest1 && !quest2 && !quest3)){
                                mensagensDoChatNpc += "\n\nNpc: Oi aventureiro, você quer receber/finalizar uma 'task' ou aprender uma 'magia'?";

                                document.getElementById('mensagemDiv1').style.color = '#00ccff';
                                document.getElementById('mensagemDiv1').innerHTML = "Npc: Oi aventureiro, você quer receber/finalizar uma 'task' ou aprender uma 'magia'?";
                                setTimeout(function(){document.getElementById('mensagemDiv1').innerHTML = ""; document.getElementById('mensagemDiv1').style.color = "white";}, 10000);

                                document.getElementById('opcao1').innerHTML = "Task";
                                document.getElementById('opcao1').title = "Task";
                                document.getElementById('opcao1').style.height = 44;
                                document.getElementById('opcao1').style.visibility = 'visible';
                                document.getElementById('opcao2').innerHTML = "Magia";
                                document.getElementById('opcao2').title = "Magia";
                                document.getElementById('opcao2').style.height = 44;
                                document.getElementById('opcao2').style.visibility = 'visible';
                                document.getElementById('opcao3').innerHTML = "Agora nao";
                                document.getElementById('opcao3').title = "Nao";
                                document.getElementById('opcao3').style.height = 44;
                                document.getElementById('opcao3').style.visibility = 'visible';
                            } else if((exura && exuraGran && exori && exoriGran) && (quest1 || quest2 || quest3)){
                                mensagensDoChatNpc += "\n\nNpc: Oi aventureiro, você quer receber/finalizar uma 'task' ou resetar a quest principal?";

                                document.getElementById('mensagemDiv1').style.color = '#00ccff';
                                document.getElementById('mensagemDiv1').innerHTML = "Npc: Oi aventureiro, você quer receber/finalizar uma 'task' ou aprender uma 'magia'?";
                                setTimeout(function(){document.getElementById('mensagemDiv1').innerHTML = ""; document.getElementById('mensagemDiv1').style.color = "white";}, 10000);

                                document.getElementById('opcao1').innerHTML = "Task";
                                document.getElementById('opcao1').title = "Task";
                                document.getElementById('opcao1').style.height = 44;
                                document.getElementById('opcao1').style.visibility = 'visible';
                                document.getElementById('opcao2').innerHTML = "Reset Quest";
                                document.getElementById('opcao2').title = "Reset Quest";
                                document.getElementById('opcao2').style.height = 44;
                                document.getElementById('opcao2').style.visibility = 'visible';
                                document.getElementById('opcao3').innerHTML = "Agora nao";
                                document.getElementById('opcao3').title = "Nao";
                                document.getElementById('opcao3').style.height = 44;
                                document.getElementById('opcao3').style.visibility = 'visible';
                            } else {
                                mensagensDoChatNpc += "\n\nNpc: Oi aventureiro, você quer receber/finalizar uma 'task'? Não temos nenhuma magia para ensinar.";

                                document.getElementById('mensagemDiv1').style.color = '#00ccff';
                                document.getElementById('mensagemDiv1').innerHTML = "Npc: Oi aventureiro, você quer receber/finalizar uma 'task'? Não temos nenhuma magia para ensinar.";
                                setTimeout(function(){document.getElementById('mensagemDiv1').innerHTML = ""; document.getElementById('mensagemDiv1').style.color = "white";}, 10000);

                                document.getElementById('opcao1').innerHTML = "Task";
                                document.getElementById('opcao1').title = "Task";
                                document.getElementById('opcao1').style.height = 44;
                                document.getElementById('opcao1').style.visibility = 'visible';
                                document.getElementById('opcao2').innerHTML = "Agora nao";
                                document.getElementById('opcao2').title = "Nao";
                                document.getElementById('opcao2').style.height = 44;
                                document.getElementById('opcao2').style.visibility = 'visible';
                            }
                            //document.getElementById('conversa').style.visibility = 'visible';
                            break;
                        case 2:
                            if( document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'task' ||
                                document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'tarefa' ||
                                document.getElementById('opcao1').title == "Snake Task"){
                                mensagensDoChatNpc += "\n\nNpc: Temos as seguintes tasks: 'Snake Task', 'Dragon Task' e 'Mammoth Task'. Digite o nome da task a receber/finalizar ou 'Reset Task' caso queira desistir da task atual...";

                                document.getElementById('mensagemDiv1').style.color = '#00ccff';
                                document.getElementById('mensagemDiv1').innerHTML = "Npc: Temos as seguintes tasks: 'Snake Task', 'Dragon Task' e 'Mammoth Task'. Digite o nome da task a receber/finalizar ou 'Reset Task' caso queira desistir da task atual...";
                                setTimeout(function(){document.getElementById('mensagemDiv1').innerHTML = ""; document.getElementById('mensagemDiv1').style.color = "white";}, 10000);

                                document.getElementById('opcao1').innerHTML = "Snake Task";
                                document.getElementById('opcao1').title = "Snake Task";
                                document.getElementById('opcao1').style.height = 44;
                                document.getElementById('opcao1').style.visibility = 'visible';
                                document.getElementById('opcao2').innerHTML = "Dragon Task";
                                document.getElementById('opcao2').title = "Dragon Task";
                                document.getElementById('opcao2').style.height = 44;
                                document.getElementById('opcao2').style.visibility = 'visible';
                                document.getElementById('opcao3').innerHTML = "Mammoth Task";
                                document.getElementById('opcao3').title = "Mammoth Task";
                                document.getElementById('opcao3').style.height = 44;
                                document.getElementById('opcao3').style.visibility = 'visible';
                                document.getElementById('opcao4').innerHTML = "Reset Task";
                                document.getElementById('opcao4').title = "Reset Task";
                                document.getElementById('opcao4').style.height = 44;
                                document.getElementById('opcao4').style.visibility = 'visible';
                                document.getElementById('opcao5').innerHTML = "Agora nao";
                                document.getElementById('opcao5').title = "Nao";
                                document.getElementById('opcao5').style.height = 44;
                                document.getElementById('opcao5').style.visibility = 'visible';
                            }else if( document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'magic' ||
                                document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'magia' ||
                                document.getElementById('opcao1').title == "Exura" ||
                                document.getElementById('opcao1').title == "Exura gran" ||
                                document.getElementById('opcao1').title == "Exori" ||
                                document.getElementById('opcao1').title == "Exori gran"){
                                mensagensDoChatNpc += "\n\nNpc: Temos a(s) seguinte(s) magia(s):";
                                let magias = "";
                                if(!exura){
                                    magias += " 'exura'";
                                }
                                if(!exuraGran){
                                    magias += " 'exura gran'";
                                }
                                if(!exori){
                                    magias += " 'exori'";
                                }
                                if(!exoriGran){
                                    magias += " 'exori gran'";
                                }

                                mensagensDoChatNpc += magias + ". Digite o nome da magia para aprender...";

                                document.getElementById('mensagemDiv1').style.color = '#00ccff';
                                document.getElementById('mensagemDiv1').innerHTML = "Npc: Temos a(s) seguinte(s) magia(s):" + magias + ". Digite o nome da magia para aprender...";
                                setTimeout(function(){document.getElementById('mensagemDiv1').innerHTML = ""; document.getElementById('mensagemDiv1').style.color = "white";}, 10000);

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

                                if(!exura){
                                    document.getElementById('opcao1').innerHTML = "Exura";
                                    document.getElementById('opcao1').title = "Exura";
                                    document.getElementById('opcao1').style.height = 44;
                                    document.getElementById('opcao1').style.visibility = 'visible';
                                }
                                if(!exura && !exuraGran){
                                    document.getElementById('opcao2').innerHTML = "Exura gran";
                                    document.getElementById('opcao2').title = "Exura gran";
                                    document.getElementById('opcao2').style.height = 44;
                                    document.getElementById('opcao2').style.visibility = 'visible';
                                }else if(exura && !exuraGran){
                                    document.getElementById('opcao1').innerHTML = "Exura gran";
                                    document.getElementById('opcao1').title = "Exura gran";
                                    document.getElementById('opcao1').style.height = 44;
                                    document.getElementById('opcao1').style.visibility = 'visible';
                                }
                                if(!exura && !exuraGran && !exori){
                                    document.getElementById('opcao3').innerHTML = "Exori";
                                    document.getElementById('opcao3').title = "Exori";
                                    document.getElementById('opcao3').style.height = 44;
                                    document.getElementById('opcao3').style.visibility = 'visible';
                                }else if(
                                    (exura && !exuraGran && !exori) ||
                                    (!exura && exuraGran && !exori)
                                    ){
                                    document.getElementById('opcao2').innerHTML = "Exori";
                                    document.getElementById('opcao2').title = "Exori";
                                    document.getElementById('opcao2').style.height = 44;
                                    document.getElementById('opcao2').style.visibility = 'visible';
                                }else if(exura && exuraGran && !exori){
                                    document.getElementById('opcao1').innerHTML = "Exori";
                                    document.getElementById('opcao1').title = "Exori";
                                    document.getElementById('opcao1').style.height = 44;
                                    document.getElementById('opcao1').style.visibility = 'visible';
                                }
                                if(!exura && !exuraGran && !exori && !exoriGran){
                                    document.getElementById('opcao4').innerHTML = "Exori gran";
                                    document.getElementById('opcao4').title = "Exori gran";
                                    document.getElementById('opcao4').style.height = 44;
                                    document.getElementById('opcao4').style.visibility = 'visible';
                                    document.getElementById('opcao5').innerHTML = "Agora nao";
                                    document.getElementById('opcao5').title = "Nao";
                                    document.getElementById('opcao5').style.height = 44;
                                    document.getElementById('opcao5').style.visibility = 'visible';
                                }else if(
                                    (exura && !exuraGran && !exori && !exoriGran) ||
                                    (!exura && exuraGran && !exori && !exoriGran) ||
                                    (!exura && !exuraGran && exori && !exoriGran)
                                    ){
                                    document.getElementById('opcao3').innerHTML = "Exori gran";
                                    document.getElementById('opcao3').title = "Exori gran";
                                    document.getElementById('opcao3').style.height = 44;
                                    document.getElementById('opcao3').style.visibility = 'visible';
                                    document.getElementById('opcao4').innerHTML = "Agora nao";
                                    document.getElementById('opcao4').title = "Nao";
                                    document.getElementById('opcao4').style.height = 44;
                                    document.getElementById('opcao4').style.visibility = 'visible';
                                }else if(
                                    (!exura && exuraGran && exori && !exoriGran) ||
                                    (exura && !exuraGran && exori && !exoriGran) ||
                                    (exura && exuraGran && !exori && !exoriGran)
                                    ){
                                    document.getElementById('opcao2').innerHTML = "Exori gran";
                                    document.getElementById('opcao2').title = "Exori gran";
                                    document.getElementById('opcao2').style.height = 44;
                                    document.getElementById('opcao2').style.visibility = 'visible';
                                    document.getElementById('opcao3').innerHTML = "Agora nao";
                                    document.getElementById('opcao3').title = "Nao";
                                    document.getElementById('opcao3').style.height = 44;
                                    document.getElementById('opcao3').style.visibility = 'visible';
                                }else if(exura && exuraGran && exori && !exoriGran){
                                    document.getElementById('opcao1').innerHTML = "Exori gran";
                                    document.getElementById('opcao1').title = "Exori gran";
                                    document.getElementById('opcao1').style.height = 44;
                                    document.getElementById('opcao1').style.visibility = 'visible';
                                    document.getElementById('opcao2').innerHTML = "Agora nao";
                                    document.getElementById('opcao2').title = "Nao";
                                    document.getElementById('opcao2').style.height = 44;
                                    document.getElementById('opcao2').style.visibility = 'visible';
                                }
                                if(!exura && !exuraGran && !exori && exoriGran){
                                    document.getElementById('opcao4').innerHTML = "Agora nao";
                                    document.getElementById('opcao4').title = "Nao";
                                    document.getElementById('opcao4').style.height = 44;
                                    document.getElementById('opcao4').style.visibility = 'visible';
                                }else if(
                                    (!exura && !exuraGran && exori && exoriGran) ||
                                    (!exura && exuraGran && !exori && exoriGran) ||
                                    (exura && !exuraGran && !exori && exoriGran)
                                    ){
                                    document.getElementById('opcao3').innerHTML = "Agora nao";
                                    document.getElementById('opcao3').title = "Nao";
                                    document.getElementById('opcao3').style.height = 44;
                                    document.getElementById('opcao3').style.visibility = 'visible';
                                }else if(
                                    (!exura && exuraGran && exori && exoriGran) ||
                                    (exura && !exuraGran && exori && exoriGran) ||
                                    (exura && exuraGran && !exori && exoriGran)
                                ){
                                    document.getElementById('opcao2').innerHTML = "Agora nao";
                                    document.getElementById('opcao2').title = "Nao";
                                    document.getElementById('opcao2').style.height = 44;
                                    document.getElementById('opcao2').style.visibility = 'visible';
                                }
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

                            document.getElementById('mensagemDiv1').style.color = '#00ccff';
                            document.getElementById('mensagemDiv1').innerHTML = "Npc: Prontinho. Tchau!";
                            setTimeout(function(){document.getElementById('mensagemDiv1').innerHTML = ""; document.getElementById('mensagemDiv1').style.color = "white";}, 10000);

                            if(document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'exura'){
                                exura = true;
                                document.getElementById('magiaExura').src = 'imagens/imagemMagiaExura.png';
                                document.getElementById('magiaExura').alt = 'exura';
                                document.getElementById('magiaExura').title = 'exura';
                            }
                            else if(document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'exura gran'){
                                exuraGran = true;
                                document.getElementById('magiaExuraGran').src = 'imagens/imagemMagiaExuraGran.png';
                                document.getElementById('magiaExuraGran').alt = 'exura gran';
                                document.getElementById('magiaExuraGran').title = 'exura gran';
                            }
                            else if(document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'exori'){
                                exori = true;
                                document.getElementById('magiaExori').src = 'imagens/imagemMagiaExori.png';
                                document.getElementById('magiaExori').alt = 'exori';
                                document.getElementById('magiaExori').title = 'exori';
                            }
                            else if(document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'exori gran'){
                                exoriGran = true;
                                document.getElementById('magiaExoriGran').src = 'imagens/imagemMagiaExoriGran.png';
                                document.getElementById('magiaExoriGran').alt = 'exori gran';
                                document.getElementById('magiaExoriGran').title = 'exori gran';
                            }
                            else if( (
                                (document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'snake task') ||
                                (document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'dragon task') ||
                                (document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'mammoth task')
                                ) && document.getElementById('task').style.visibility == 'hidden'
                            ){
                                document.getElementById('tasks').innerHTML = 'Tasks';
                                document.getElementById('task').innerHTML = document.getElementById('campoDeEscritaInput').value.toLowerCase().split(' ')[0].charAt(0).toUpperCase() + document.getElementById('campoDeEscritaInput').value.toLowerCase().split(' ')[0].slice(1);
                                taskvalor = 0;
                                document.getElementById('taskvalor').innerHTML = taskvalor + '/100';
                                document.getElementById('task').style.visibility = 'visible';
                                document.getElementById('taskvalor').style.visibility = 'visible';
                            }
                            else if((document.getElementById('campoDeEscritaInput').value.split(' ')[0].toLowerCase() == document.getElementById('task').innerHTML.toLowerCase() || document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'reset task') && document.getElementById('task').style.visibility == 'visible' && taskvalor == 100){
                                switch(document.getElementById('task').innerHTML.toLowerCase()){
                                    case 'snake':
                                        nivel += 100;
                                        calculaLevel();
                                        mensagensDoChatServerLog += "\n\nVoce ganhou 100 pontos de experiencia.";
                                        document.getElementById('mensagemDiv3').style.color = 'white'; document.getElementById('mensagemDiv3').style.textAlign = 'center'; document.getElementById('mensagemDiv3').style.width = 50; document.getElementById('mensagemDiv3').innerHTML = 100 + "Xp";
                setTimeout(function(){ document.getElementById('mensagemDiv3').innerHTML = ""; document.getElementById('mensagemDiv3').style.color = 'yellow'; document.getElementById('mensagemDiv3').style.width = 250;}, 500);
                                        break;
                                    case 'dragon':
                                        nivel += 200;
                                        calculaLevel();
                                        mensagensDoChatServerLog += "\n\nVoce ganhou 200 pontos de experiencia.";
                                        document.getElementById('mensagemDiv3').style.color = 'white'; document.getElementById('mensagemDiv3').style.textAlign = 'center'; document.getElementById('mensagemDiv3').style.width = 50; document.getElementById('mensagemDiv3').innerHTML = 200 + "Xp";
                setTimeout(function(){ document.getElementById('mensagemDiv3').innerHTML = ""; document.getElementById('mensagemDiv3').style.color = 'yellow'; document.getElementById('mensagemDiv3').style.width = 250;}, 500);
                                        break;
                                    case 'mammoth':
                                        nivel += 300;
                                        calculaLevel();
                                        mensagensDoChatServerLog += "\n\nVoce ganhou 300 pontos de experiencia.";
                                        document.getElementById('mensagemDiv3').style.color = 'white'; document.getElementById('mensagemDiv3').style.textAlign = 'center'; document.getElementById('mensagemDiv3').style.width = 50; document.getElementById('mensagemDiv3').innerHTML = 300 + "Xp";
                setTimeout(function(){ document.getElementById('mensagemDiv3').innerHTML = ""; document.getElementById('mensagemDiv3').style.color = 'yellow'; document.getElementById('mensagemDiv3').style.width = 250;}, 500);
                                        break;
                                }
                                document.getElementById('task').style.visibility = 'hidden';
                                document.getElementById('taskvalor').style.visibility = 'hidden';
                                document.getElementById('tasks').innerHTML = 'Tasks no NPC';
                                document.getElementById('task').innerHTML = "[Monster]";
                                taskvalor = 0;
                                document.getElementById('taskvalor').innerHTML = taskvalor + '/100';
                            }else if(document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'reset task' && document.getElementById('task').style.visibility == 'visible' && taskvalor < 100){
                                document.getElementById('task').style.visibility = 'hidden';
                                document.getElementById('taskvalor').style.visibility = 'hidden';
                                document.getElementById('tasks').innerHTML = 'Tasks no NPC';
                                document.getElementById('task').innerHTML = "[Monster]";
                                taskvalor = 0;
                                document.getElementById('taskvalor').innerHTML = taskvalor + '/100';
                            }else if(
                                    (document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'reset quest') && 
                                    (quest1 || quest2 || quest3)
                            ){
                                quest1 = false;
                                matrizDoMapa[45][45] = matrizDoMapaOriginal[45][45];
                                quest2 = false;
                                matrizDoMapa[49][45] = matrizDoMapaOriginal[49][45];
                                quest3 = false;
                                matrizDoMapa[53][45] = matrizDoMapaOriginal[53][45];
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

                            mensagensDoChatNpc += "\n\nNpc: Até mais!";

                            document.getElementById('mensagemDiv1').style.color = '#00ccff';
                            document.getElementById('mensagemDiv1').innerHTML = "Npc: Até mais!";
                            setTimeout(function(){document.getElementById('mensagemDiv1').innerHTML = ""; document.getElementById('mensagemDiv1').style.color = "white";}, 10000);

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
                                    mensagensDoChatNpc += "\n\nNpc: Você precisa de level 50+ para aprender esta magia!";

                                    document.getElementById('mensagemDiv1').style.color = '#00ccff';
                                    document.getElementById('mensagemDiv1').innerHTML = "Npc: Voce precisa de level 50+ para aprender esta magia!";
                                    setTimeout(function(){document.getElementById('mensagemDiv1').innerHTML = ""; document.getElementById('mensagemDiv1').style.color = "white";}, 10000);

                                    break;
                                case 'exori':
                                    mensagensDoChatNpc += "\n\nNpc: Você precisa de level 100+ para aprender esta magia!";

                                    document.getElementById('mensagemDiv1').style.color = '#00ccff';
                                    document.getElementById('mensagemDiv1').innerHTML = "Npc: Voce precisa de level 100+ para aprender esta magia!";
                                    setTimeout(function(){document.getElementById('mensagemDiv1').innerHTML = ""; document.getElementById('mensagemDiv1').style.color = "white";}, 10000);

                                    break;
                                case 'exori gran':
                                    mensagensDoChatNpc += "\n\nNpc: Você precisa de level 200+ para aprender esta magia!";

                                    document.getElementById('mensagemDiv1').style.color = '#00ccff';
                                    document.getElementById('mensagemDiv1').innerHTML = "Npc: Voce precisa de level 200+ para aprender esta magia!";
                                    setTimeout(function(){document.getElementById('mensagemDiv1').innerHTML = ""; document.getElementById('mensagemDiv1').style.color = "white";}, 10000);

                                    break;
                                case 'snake task':
                                    mensagensDoChatNpc += "\n\nNpc: Você ainda não terminou a task obtida!";
                                    
                                    document.getElementById('mensagemDiv1').style.color = '#00ccff';
                                    document.getElementById('mensagemDiv1').innerHTML = "Npc: Voce ainda nao terminou a task obtida!";
                                    setTimeout(function(){document.getElementById('mensagemDiv1').innerHTML = ""; document.getElementById('mensagemDiv1').style.color = "white";}, 10000);

                                    break;
                                case 'dragon task':
                                    mensagensDoChatNpc += "\n\nNpc: Você ainda não terminou a task obtida!";
                                    
                                    document.getElementById('mensagemDiv1').style.color = '#00ccff';
                                    document.getElementById('mensagemDiv1').innerHTML = "Npc: Voce ainda nao terminou a task obtida!";
                                    setTimeout(function(){document.getElementById('mensagemDiv1').innerHTML = ""; document.getElementById('mensagemDiv1').style.color = "white";}, 10000);

                                    break;
                                case 'mammoth task':
                                    mensagensDoChatNpc += "\n\nNpc: Você ainda não terminou a task obtida!";
                                    
                                    document.getElementById('mensagemDiv1').style.color = '#00ccff';
                                    document.getElementById('mensagemDiv1').innerHTML = "Npc: Voce ainda nao terminou a task obtida!";
                                    setTimeout(function(){document.getElementById('mensagemDiv1').innerHTML = ""; document.getElementById('mensagemDiv1').style.color = "white";}, 10000);

                                    break;
                                case 'reset task':
                                    mensagensDoChatNpc += "\n\nNpc: Você ainda não recebeu uma task!";
                                    
                                    document.getElementById('mensagemDiv1').style.color = '#00ccff';
                                    document.getElementById('mensagemDiv1').innerHTML = "Npc: Voce ainda nao recebeu uma task!";
                                    setTimeout(function(){document.getElementById('mensagemDiv1').innerHTML = ""; document.getElementById('mensagemDiv1').style.color = "white";}, 10000);

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
                    document.getElementById('fala1').src = 'imagens/imagemFalaExura.png';
                    setTimeout(function(){ document.getElementById('fala1').src = 'imagens/imagemFalaVazia.png';}, 1000);
                }
                if(conjurarExuraGran){
                    document.getElementById('fala1').src = 'imagens/imagemFalaExuraGran.png';
                    setTimeout(function(){ document.getElementById('fala1').src = 'imagens/imagemFalaVazia.png';}, 1000);
                }
                if(conjurarExori){
                    document.getElementById('fala1').src = 'imagens/imagemFalaExori.png';
                    setTimeout(function(){ document.getElementById('fala1').src = 'imagens/imagemFalaVazia.png';}, 1000);
                }
                if(conjurarExoriGran){
                    document.getElementById('fala1').src = 'imagens/imagemFalaExoriGran.png';
                    setTimeout(function(){ document.getElementById('fala1').src = 'imagens/imagemFalaVazia.png';}, 1000);
                }
                if(conjurarExura){
                    regeneracao(2, "curou");
                }
                if(conjurarExuraGran){
                    regeneracao(3, "curou");
                }
                if(conjurarExori){
                    if( 
                        matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 8 ||
                        matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 9 ||
                        matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 16 ||
                        matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 17 ||
                        matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 19 ||
                        matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 20
                    ){
                        moverCima();
                    }
                    if( 
                        matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 8 ||
                        matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 9 ||
                        matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 16 ||
                        matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 17 ||
                        matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 19 ||
                        matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 20
                    ){
                        moverDireita();
                    }
                    if( 
                        matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 8 ||
                        matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 9 ||
                        matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 16 ||
                        matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 17 ||
                        matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 19 ||
                        matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 20
                    ){
                        moverBaixo();
                    }
                    if( 
                        matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 8 ||
                        matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 9 ||
                        matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 16 ||
                        matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 17 ||
                        matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 19 ||
                        matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 20
                    ){
                        moverEsquerda();
                    }
                }
                if(conjurarExoriGran){
                    let i = 1;
                    for(let j = -3; j < 4; j++){
                        for(let k = -4; k < 5; k++){
                            ataqueCampo("Campo"+i,j,k);
                            i++;
                        }
                    }
                }
            }

            pressKey = function (key){

                var tecla = key.which;

                datainicioinatividade = new Date();

                if(tecla != 13){
                    tecla = String.fromCharCode(tecla);
                } else {
                    if(document.getElementById('mensagem1').style.visibility == 'hidden'){
                        datainicioinatividade = new Date();
                        dialogo();
                    }
                }

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

                $sql = "SELECT `username`, `password`, `x`, `y`, `direcao`, `nivel`, `hp`, `outfit` FROM `ottibia` WHERE `username`='" . $username . "' AND `password`='" . $password . "'";
                
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

                    $logado = true;
                }

                if(!$logado){
                    echo "alert('Conta inexistente, os seus dados nao serao salvos. Acesse magiclevel.ml para se registrar. Sem logar voce nao podera interagir com os outros players.');";
                }

                $result->close();
                
                $conn->close();
                
            ?>

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

            switch(direcaoDoPersonagem){
                case 0:
                    if(outfit == "M"){
                        document.getElementById('personagem1').src = 'imagens/imagemPersonagemDeCostas.png';
                    }else if(outfit == "F"){
                        document.getElementById('personagem1').src = 'imagens/imagemPersonagemDeCostasF.png';
                    }
                    break;
                case 1:
                    if(outfit == "M"){
                        document.getElementById('personagem1').src = 'imagens/imagemPersonagemDeDireita.png';
                    }else if(outfit == "F"){
                        document.getElementById('personagem1').src = 'imagens/imagemPersonagemDeDireitaF.png';
                    }
                    break;
                case 2:
                    if(outfit == "M"){
                        document.getElementById('personagem1').src = 'imagens/imagemPersonagemDeFrente.png';
                    }else if(outfit == "F"){
                        document.getElementById('personagem1').src = 'imagens/imagemPersonagemDeFrenteF.png';
                    }
                    break;
                case 3:
                    if(outfit == "M"){
                        document.getElementById('personagem1').src = 'imagens/imagemPersonagemDeEsquerda.png';
                    }else if(outfit == "F"){
                        document.getElementById('personagem1').src = 'imagens/imagemPersonagemDeEsquerdaF.png';
                    }
                    break;    
            }

            if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]] == 7){
                nivelDeSolo++;
                document.getElementById('personagem1').style.top = parseInt(document.getElementById('personagem1').style.top.split('p')[0]) - 10;
                document.getElementById('personagem1').style.left = parseInt(document.getElementById('personagem1').style.left.split('p')[0]) - 10;
            }

        }

            main();

            //alert("Servidor em Manutenção!");

        </script>

    </body>
</html>

<audio id="myAudio" preload autoplay loop>
  <source src="musicas/ToPTrack02.mp3" type="audio/mpeg">
  Your browser does not support the audio tag.
</audio>