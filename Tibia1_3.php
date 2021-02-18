<html>
    <head>
        <title>Tibia</title>
        <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
        <script>
            var username = "";
            var password = "";
            var matrizDoMapa = 
            [
                [1,1,1,1,1,1,1,1,1,1,1,1,1],
                [1,0,0,0,0,0,0,0,0,0,0,0,1],
                [1,0,0,0,0,0,0,0,0,0,0,0,1],
                [1,0,0,0,1,1,1,1,1,0,0,0,1],
                [1,0,0,0,1,0,0,0,1,0,0,0,1],
                [1,0,0,0,1,0,0,2,1,0,0,0,1],
                [1,0,0,0,1,4,0,0,1,0,0,0,1],
                [1,0,0,0,1,1,1,1,1,0,0,0,1],
                [1,0,0,0,0,0,0,0,0,0,0,0,1],
                [1,0,0,0,0,0,0,0,0,0,0,0,1],
                [1,1,1,1,1,1,1,1,1,1,1,1,1],
                [1,0,0,0,0,0,0,0,0,0,0,0,1],
                [1,0,0,0,0,0,0,0,0,0,0,0,1],
                [1,0,0,0,1,1,1,1,1,0,0,0,1],
                [1,0,0,0,1,0,1,1,1,0,0,0,1],
                [1,0,0,0,1,0,7,8,1,0,0,0,1],
                [1,0,0,0,1,5,4,1,1,0,0,0,1],
                [1,0,0,0,1,1,1,1,1,0,0,0,1],
                [1,0,0,0,0,0,0,0,0,0,0,0,1],
                [1,0,0,0,0,0,0,0,0,0,0,0,1],
                [1,1,1,1,1,1,1,1,1,1,1,1,1],
                [1,0,0,0,0,0,0,0,0,0,0,0,1],
                [1,0,0,0,0,0,0,0,0,0,0,0,1],
                [1,0,0,0,1,1,1,1,1,0,0,0,1],
                [1,0,0,0,1,8,7,8,1,0,0,0,1],
                [1,0,0,0,1,1,0,7,1,0,0,0,1],
                [1,0,0,0,1,1,5,4,1,0,0,0,1],
                [1,0,0,0,1,1,1,1,1,0,0,0,1],
                [1,0,0,0,0,0,0,0,0,0,0,0,1],
                [1,0,0,0,0,0,0,0,0,0,0,0,1],
                [1,1,1,1,1,1,1,1,1,1,1,1,1],
                [1,0,0,0,0,0,0,0,0,0,0,0,1],
                [1,0,0,0,0,0,0,0,0,0,0,0,1],
                [1,0,0,0,1,1,1,1,1,0,0,0,1],
                [1,0,0,0,1,1,8,1,1,0,0,0,1],
                [1,0,0,0,1,8,7,4,1,0,0,0,1],
                [1,0,0,0,1,1,8,5,1,0,0,0,1],
                [1,0,0,0,1,1,1,1,1,0,0,0,1],
                [1,0,0,0,0,0,0,0,0,0,0,0,1],
                [1,0,0,0,0,0,0,0,0,0,0,0,1],
                [ 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1],
                [ 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1],
                [ 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1],
                [ 1, 0, 0, 0, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 1],
                [ 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 1, 0, 0, 0, 1],
                [ 1, 0, 0, 0, 1,11, 0, 6, 0, 0, 1, 0, 0, 0, 1],
                [ 1, 0, 0, 0, 1, 1, 0, 1, 0, 1, 1, 0, 0, 0, 1],
                [ 1, 0, 0, 0, 1, 8, 7, 8, 7, 8, 1, 0, 0, 0, 1],
                [ 1, 0, 0, 0, 1, 1, 8, 1, 8, 1, 1, 0, 0, 0, 1],
                [ 1, 0, 0, 0, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 1],
                [ 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1],
                [ 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1],
                [ 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1]
            ];
            var posicaoDoPersonagemNaMatriz = [5,6];
            var direcaoDoPersonagem = 2;
            var nivelDeSolo = 1;
            var nivel = 1;
            var hpmax = 176;
            var hp = 44;
            var mochila = ["","","",""];
            var exura = false;

            var identificadorDoChat = 0;
            var mensagensDoChatDefault = "Bem Vindo!";
            var mensagensDoChatNpc = "";
            var nivelDeConversaNpc = 0;

            var mover = 60;
            var quadrosDeAnimacao = 10;
            var esperaPorQuadro = 50;

            // [INICIO] AJAX
        
            var dados = new FormData();

            // [FIM] AJAX

            function preencherImagens(){
                var caminhoImagem = "";

                run_ajax();

                for(var i = posicaoDoPersonagemNaMatriz[0]-3; i < posicaoDoPersonagemNaMatriz[0]+4; i++){
                    for(var j = posicaoDoPersonagemNaMatriz[1]-4; j < posicaoDoPersonagemNaMatriz[1]+5; j++){

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
                        }
                        
                        if(i == posicaoDoPersonagemNaMatriz[0]-3 && j == posicaoDoPersonagemNaMatriz[1]-4)
                            document.getElementById('campo1').src = caminhoImagem;
                        if(i == posicaoDoPersonagemNaMatriz[0]-3 && j == posicaoDoPersonagemNaMatriz[1]-3)
                            document.getElementById('campo2').src = caminhoImagem;
                        if(i == posicaoDoPersonagemNaMatriz[0]-3 && j == posicaoDoPersonagemNaMatriz[1]-2)
                            document.getElementById('campo3').src = caminhoImagem;
                        if(i == posicaoDoPersonagemNaMatriz[0]-3 && j == posicaoDoPersonagemNaMatriz[1]-1)
                            document.getElementById('campo4').src = caminhoImagem;
                        if(i == posicaoDoPersonagemNaMatriz[0]-3 && j == posicaoDoPersonagemNaMatriz[1])
                            document.getElementById('campo5').src = caminhoImagem;
                        if(i == posicaoDoPersonagemNaMatriz[0]-3 && j == posicaoDoPersonagemNaMatriz[1]+1)
                            document.getElementById('campo6').src = caminhoImagem;
                        if(i == posicaoDoPersonagemNaMatriz[0]-3 && j == posicaoDoPersonagemNaMatriz[1]+2)
                            document.getElementById('campo7').src = caminhoImagem;
                        if(i == posicaoDoPersonagemNaMatriz[0]-3 && j == posicaoDoPersonagemNaMatriz[1]+3)
                            document.getElementById('campo8').src = caminhoImagem;
                        if(i == posicaoDoPersonagemNaMatriz[0]-3 && j == posicaoDoPersonagemNaMatriz[1]+4)
                            document.getElementById('campo9').src = caminhoImagem;
                        if(i == posicaoDoPersonagemNaMatriz[0]-2 && j == posicaoDoPersonagemNaMatriz[1]-4)
                            document.getElementById('campo10').src = caminhoImagem;
                        if(i == posicaoDoPersonagemNaMatriz[0]-2 && j == posicaoDoPersonagemNaMatriz[1]-3)
                            document.getElementById('campo11').src = caminhoImagem;
                        if(i == posicaoDoPersonagemNaMatriz[0]-2 && j == posicaoDoPersonagemNaMatriz[1]-2)
                            document.getElementById('campo12').src = caminhoImagem;
                        if(i == posicaoDoPersonagemNaMatriz[0]-2 && j == posicaoDoPersonagemNaMatriz[1]-1)
                            document.getElementById('campo13').src = caminhoImagem;
                        if(i == posicaoDoPersonagemNaMatriz[0]-2 && j == posicaoDoPersonagemNaMatriz[1])
                            document.getElementById('campo14').src = caminhoImagem;
                        if(i == posicaoDoPersonagemNaMatriz[0]-2 && j == posicaoDoPersonagemNaMatriz[1]+1)
                            document.getElementById('campo15').src = caminhoImagem;
                        if(i == posicaoDoPersonagemNaMatriz[0]-2 && j == posicaoDoPersonagemNaMatriz[1]+2)
                            document.getElementById('campo16').src = caminhoImagem;
                        if(i == posicaoDoPersonagemNaMatriz[0]-2 && j == posicaoDoPersonagemNaMatriz[1]+3)
                            document.getElementById('campo17').src = caminhoImagem;
                        if(i == posicaoDoPersonagemNaMatriz[0]-2 && j == posicaoDoPersonagemNaMatriz[1]+4)
                            document.getElementById('campo18').src = caminhoImagem;
                        if(i == posicaoDoPersonagemNaMatriz[0]-1 && j == posicaoDoPersonagemNaMatriz[1]-4)
                            document.getElementById('campo19').src = caminhoImagem;
                        if(i == posicaoDoPersonagemNaMatriz[0]-1 && j == posicaoDoPersonagemNaMatriz[1]-3)
                            document.getElementById('campo20').src = caminhoImagem;
                        if(i == posicaoDoPersonagemNaMatriz[0]-1 && j == posicaoDoPersonagemNaMatriz[1]-2)
                            document.getElementById('campo21').src = caminhoImagem;
                        if(i == posicaoDoPersonagemNaMatriz[0]-1 && j == posicaoDoPersonagemNaMatriz[1]-1)
                            document.getElementById('campo22').src = caminhoImagem;
                        if(i == posicaoDoPersonagemNaMatriz[0]-1 && j == posicaoDoPersonagemNaMatriz[1])
                            document.getElementById('campo23').src = caminhoImagem;
                        if(i == posicaoDoPersonagemNaMatriz[0]-1 && j == posicaoDoPersonagemNaMatriz[1]+1)
                            document.getElementById('campo24').src = caminhoImagem;
                        if(i == posicaoDoPersonagemNaMatriz[0]-1 && j == posicaoDoPersonagemNaMatriz[1]+2)
                            document.getElementById('campo25').src = caminhoImagem;
                        if(i == posicaoDoPersonagemNaMatriz[0]-1 && j == posicaoDoPersonagemNaMatriz[1]+3)
                            document.getElementById('campo26').src = caminhoImagem;
                        if(i == posicaoDoPersonagemNaMatriz[0]-1 && j == posicaoDoPersonagemNaMatriz[1]+4)
                            document.getElementById('campo27').src = caminhoImagem;
                        if(i == posicaoDoPersonagemNaMatriz[0] && j == posicaoDoPersonagemNaMatriz[1]-4)
                            document.getElementById('campo28').src = caminhoImagem;
                        if(i == posicaoDoPersonagemNaMatriz[0] && j == posicaoDoPersonagemNaMatriz[1]-3)
                            document.getElementById('campo29').src = caminhoImagem;
                        if(i == posicaoDoPersonagemNaMatriz[0] && j == posicaoDoPersonagemNaMatriz[1]-2)
                            document.getElementById('campo30').src = caminhoImagem;
                        if(i == posicaoDoPersonagemNaMatriz[0] && j == posicaoDoPersonagemNaMatriz[1]-1)
                            document.getElementById('campo31').src = caminhoImagem;
                        if(i == posicaoDoPersonagemNaMatriz[0] && j == posicaoDoPersonagemNaMatriz[1])
                            document.getElementById('campo32').src = caminhoImagem;
                        if(i == posicaoDoPersonagemNaMatriz[0] && j == posicaoDoPersonagemNaMatriz[1]+1)
                            document.getElementById('campo33').src = caminhoImagem;
                        if(i == posicaoDoPersonagemNaMatriz[0] && j == posicaoDoPersonagemNaMatriz[1]+2)
                            document.getElementById('campo34').src = caminhoImagem;
                        if(i == posicaoDoPersonagemNaMatriz[0] && j == posicaoDoPersonagemNaMatriz[1]+3)
                            document.getElementById('campo35').src = caminhoImagem;
                        if(i == posicaoDoPersonagemNaMatriz[0] && j == posicaoDoPersonagemNaMatriz[1]+4)
                            document.getElementById('campo36').src = caminhoImagem;
                        if(i == posicaoDoPersonagemNaMatriz[0]+1 && j == posicaoDoPersonagemNaMatriz[1]-4)
                            document.getElementById('campo37').src = caminhoImagem;
                        if(i == posicaoDoPersonagemNaMatriz[0]+1 && j == posicaoDoPersonagemNaMatriz[1]-3)
                            document.getElementById('campo38').src = caminhoImagem;
                        if(i == posicaoDoPersonagemNaMatriz[0]+1 && j == posicaoDoPersonagemNaMatriz[1]-2)
                            document.getElementById('campo39').src = caminhoImagem;
                        if(i == posicaoDoPersonagemNaMatriz[0]+1 && j == posicaoDoPersonagemNaMatriz[1]-1)
                            document.getElementById('campo40').src = caminhoImagem;
                        if(i == posicaoDoPersonagemNaMatriz[0]+1 && j == posicaoDoPersonagemNaMatriz[1])
                            document.getElementById('campo41').src = caminhoImagem;
                        if(i == posicaoDoPersonagemNaMatriz[0]+1 && j == posicaoDoPersonagemNaMatriz[1]+1)
                            document.getElementById('campo42').src = caminhoImagem;
                        if(i == posicaoDoPersonagemNaMatriz[0]+1 && j == posicaoDoPersonagemNaMatriz[1]+2)
                            document.getElementById('campo43').src = caminhoImagem;
                        if(i == posicaoDoPersonagemNaMatriz[0]+1 && j == posicaoDoPersonagemNaMatriz[1]+3)
                            document.getElementById('campo44').src = caminhoImagem;
                        if(i == posicaoDoPersonagemNaMatriz[0]+1 && j == posicaoDoPersonagemNaMatriz[1]+4)
                            document.getElementById('campo45').src = caminhoImagem;
                        if(i == posicaoDoPersonagemNaMatriz[0]+2 && j == posicaoDoPersonagemNaMatriz[1]-4)
                            document.getElementById('campo46').src = caminhoImagem;
                        if(i == posicaoDoPersonagemNaMatriz[0]+2 && j == posicaoDoPersonagemNaMatriz[1]-3)
                            document.getElementById('campo47').src = caminhoImagem;
                        if(i == posicaoDoPersonagemNaMatriz[0]+2 && j == posicaoDoPersonagemNaMatriz[1]-2)
                            document.getElementById('campo48').src = caminhoImagem;
                        if(i == posicaoDoPersonagemNaMatriz[0]+2 && j == posicaoDoPersonagemNaMatriz[1]-1)
                            document.getElementById('campo49').src = caminhoImagem;
                        if(i == posicaoDoPersonagemNaMatriz[0]+2 && j == posicaoDoPersonagemNaMatriz[1])
                            document.getElementById('campo50').src = caminhoImagem;
                        if(i == posicaoDoPersonagemNaMatriz[0]+2 && j == posicaoDoPersonagemNaMatriz[1]+1)
                            document.getElementById('campo51').src = caminhoImagem;
                        if(i == posicaoDoPersonagemNaMatriz[0]+2 && j == posicaoDoPersonagemNaMatriz[1]+2)
                            document.getElementById('campo52').src = caminhoImagem;
                        if(i == posicaoDoPersonagemNaMatriz[0]+2 && j == posicaoDoPersonagemNaMatriz[1]+3)
                            document.getElementById('campo53').src = caminhoImagem;
                        if(i == posicaoDoPersonagemNaMatriz[0]+2 && j == posicaoDoPersonagemNaMatriz[1]+4)
                            document.getElementById('campo54').src = caminhoImagem;
                        if(i == posicaoDoPersonagemNaMatriz[0]+3 && j == posicaoDoPersonagemNaMatriz[1]-4)
                            document.getElementById('campo55').src = caminhoImagem;
                        if(i == posicaoDoPersonagemNaMatriz[0]+3 && j == posicaoDoPersonagemNaMatriz[1]-3)
                            document.getElementById('campo56').src = caminhoImagem;
                        if(i == posicaoDoPersonagemNaMatriz[0]+3 && j == posicaoDoPersonagemNaMatriz[1]-2)
                            document.getElementById('campo57').src = caminhoImagem;
                        if(i == posicaoDoPersonagemNaMatriz[0]+3 && j == posicaoDoPersonagemNaMatriz[1]-1)
                            document.getElementById('campo58').src = caminhoImagem;
                        if(i == posicaoDoPersonagemNaMatriz[0]+3 && j == posicaoDoPersonagemNaMatriz[1])
                            document.getElementById('campo59').src = caminhoImagem;
                        if(i == posicaoDoPersonagemNaMatriz[0]+3 && j == posicaoDoPersonagemNaMatriz[1]+1)
                            document.getElementById('campo60').src = caminhoImagem;
                        if(i == posicaoDoPersonagemNaMatriz[0]+3 && j == posicaoDoPersonagemNaMatriz[1]+2)
                            document.getElementById('campo61').src = caminhoImagem;
                        if(i == posicaoDoPersonagemNaMatriz[0]+3 && j == posicaoDoPersonagemNaMatriz[1]+3)
                            document.getElementById('campo62').src = caminhoImagem;
                        if(i == posicaoDoPersonagemNaMatriz[0]+3 && j == posicaoDoPersonagemNaMatriz[1]+4)
                            document.getElementById('campo63').src = caminhoImagem;
                    }
                }
            }

            function esquerda(){
                var quadrosDeAnimacaoInterno = quadrosDeAnimacao;
                var esperaPorQuadroInterno = esperaPorQuadro;

                while(quadrosDeAnimacaoInterno > 0){

                    setTimeout(function(){ document.getElementById('mapa1').style.left = (parseInt(document.getElementById('mapa1').style.left.split('p')[0]) + (mover/quadrosDeAnimacao)); }, esperaPorQuadroInterno);

                    quadrosDeAnimacaoInterno--;
                    esperaPorQuadroInterno = esperaPorQuadroInterno + esperaPorQuadro;
                }
            }

            function cima(){
                var quadrosDeAnimacaoInterno = quadrosDeAnimacao;
                var esperaPorQuadroInterno = esperaPorQuadro;

                while(quadrosDeAnimacaoInterno > 0){

                    setTimeout(function(){ document.getElementById('mapa1').style.top = (parseInt(document.getElementById('mapa1').style.top.split('p')[0]) + (mover/quadrosDeAnimacao)); }, esperaPorQuadroInterno);

                    quadrosDeAnimacaoInterno--;
                    esperaPorQuadroInterno = esperaPorQuadroInterno + esperaPorQuadro;
                }
            }

            function baixo(){
                var quadrosDeAnimacaoInterno = quadrosDeAnimacao;
                var esperaPorQuadroInterno = esperaPorQuadro;

                while(quadrosDeAnimacaoInterno > 0){

                    setTimeout(function(){ document.getElementById('mapa1').style.top = (parseInt(document.getElementById('mapa1').style.top.split('p')[0]) - (mover/quadrosDeAnimacao)); }, esperaPorQuadroInterno);

                    quadrosDeAnimacaoInterno--;
                    esperaPorQuadroInterno = esperaPorQuadroInterno + esperaPorQuadro;
                }
            }

            function direita(){
                var quadrosDeAnimacaoInterno = quadrosDeAnimacao;
                var esperaPorQuadroInterno = esperaPorQuadro;

                while(quadrosDeAnimacaoInterno > 0){

                    setTimeout(function(){ document.getElementById('mapa1').style.left = (parseInt(document.getElementById('mapa1').style.left.split('p')[0]) - (mover/quadrosDeAnimacao)); }, esperaPorQuadroInterno);

                    quadrosDeAnimacaoInterno--;
                    esperaPorQuadroInterno = esperaPorQuadroInterno + esperaPorQuadro;
                }
            }

            function pressKey(key){
                var conjurarExura = false;
                var tecla = key.which;
                if(tecla != 13){
                    tecla = String.fromCharCode(tecla);
                } else {
                    if(document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'exura' && exura){
                        conjurarExura = true; 
                    }
                    if(document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'hi' || 
                    document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'oi' || 
                    document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'yes' || 
                    document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'sim' ||
                    document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'exura' || 
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
                                identificadorDoChat = 1;
                            }
                            if((document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'hi' && nivelDeConversaNpc == 0) || 
                            (document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'oi' && nivelDeConversaNpc == 0)){
                                nivelDeConversaNpc = 1;
                            }
                            if((document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'yes' && nivelDeConversaNpc == 1) || 
                            (document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'sim' && nivelDeConversaNpc == 1)){
                                nivelDeConversaNpc = 2;
                            }
                            if(document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'exura' && nivelDeConversaNpc == 2){
                                nivelDeConversaNpc = 3;
                            }
                            if((document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'no' && (nivelDeConversaNpc == 1 || nivelDeConversaNpc == 2)) || 
                            (document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'nao' && (nivelDeConversaNpc == 1 || nivelDeConversaNpc == 2))){
                                nivelDeConversaNpc = 4;
                            }
                        }
                    }
                    if(identificadorDoChat == 0){
                        if(document.getElementById('campoDeEscritaInput').value.toLowerCase() == "exura" && !exura){
                            mensagensDoChatDefault += "\nSistema: Voce ainda nao sabe esta magia.";
                        }else{
                            mensagensDoChatDefault += "\n" + document.getElementById('campoDeEscritaInput').value;
                        }
                        document.getElementById('campoDeEscritaInput').value = "";
                        document.getElementById('textareaChat').value = mensagensDoChatDefault;
                        document.getElementById('textareaChat').scrollTop = document.getElementById('textareaChat').scrollHeight;
                    } else if(identificadorDoChat == 1){
                        if(document.getElementById('campoDeEscritaInput').value.toLowerCase() == "exura" && !exura && nivelDeConversaNpc != 3){
                            mensagensDoChatNpc += "\nSistema: Voce ainda nao sabe esta magia.";
                        } else{
                            mensagensDoChatNpc += "\n" + document.getElementById('campoDeEscritaInput').value;
                        }
                        switch(nivelDeConversaNpc){
                            case 1:
                                if(!exura){
                                    mensagensDoChatNpc += "\nNpc: Oi aventureiro, voce quer aprender uma magia?";
                                } else {
                                    mensagensDoChatNpc += "\nNpc: Oi aventureiro, nao temos nenhuma magia para ensinar.";
                                    nivelDeConversaNpc = 0;
                                }
                                break;
                            case 2:
                                mensagensDoChatNpc += "\nNpc: Temos a(s) seguinte(s) magia(s): 'exura'. Digite o nome da magia para aprender...";
                                break;
                            case 3:
                                mensagensDoChatNpc += "\nNpc: Parabens, voce ja pode utilizar a magia 'exura'. Tchau!";
                                exura = true;
                                nivelDeConversaNpc = 0;
                                break;
                            case 4:
                                mensagensDoChatNpc += "\nNpc: Ate mais!";
                                nivelDeConversaNpc = 0;
                                break;
                        }
                        document.getElementById('campoDeEscritaInput').value = "";
                        document.getElementById('textareaChat').value = mensagensDoChatNpc;
                        document.getElementById('textareaChat').scrollTop = document.getElementById('textareaChat').scrollHeight;
                        document.getElementById('campoDeEscritaInput').focus();
                        document.getElementById('nomeDoChatDefault').style.color = 'black';
                        document.getElementById('nomeDoChatNpc').style.color = 'white';
                    }
                    if(conjurarExura){
                        document.getElementById('fala1').src = 'imagens/imagemFalaExura.png';
                        setTimeout(function(){ document.getElementById('fala1').src = 'imagens/imagemFalaVazia.png';}, 1000);
                    }
                    if(conjurarExura && hp < hpmax){
                        if(hp + 1000 < hpmax){
                            hp = hp + 1000;
                            document.getElementById('hpvalor').innerHTML = hp;
                            document.getElementById('hp').style.width = (176 * hp) / hpmax;
                        } else {
                            hp = hpmax;
                            document.getElementById('hpvalor').innerHTML = hp;
                            document.getElementById('hp').style.width = 176;
                        }
                        if(parseInt(document.getElementById('hp').style.width.split('p')[0]) <= 44){ 
                            document.getElementById('hp').style.background = 'tomato';
                        } else if(parseInt(document.getElementById('hp').style.width.split('p')[0]) <= 88){ 
                            document.getElementById('hp').style.background = 'orange';
                        } else if(parseInt(document.getElementById('hp').style.width.split('p')[0]) > 88){ 
                            document.getElementById('hp').style.background = 'mediumseagreen';
                        }
                    }
                }
            }

            function run_ajax(){

                // [INICIO] AJAX

                dados.append('username', username);
                dados.append('password', password);
                dados.append('nivel', nivel);
                dados.append('hp', hp);

                $.ajax({
                    url: 'Tibia1_3.php',
                    method: 'POST',
                    data: dados,
                    processData: false,
                    contentType: false
                }).done(function(){
                    //}).done(function(resposta){
                        //window.alert(resposta);
                    //})
                })
                
                // [FIM] AJAX
            }

        </script>
    </head>
    <body onKeyPress="pressKey(event)">
        <div id='mapa1'style='position:fixed; top: 0; left: 0'>
            <div id='m1r1'style='top: 0'>
                <div id='m1r1c1' style='width: 60; height: 60; float: left'>
                    <img id='campo1' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%'></img>
                </div>
                <div id='m1r1c2' style='width: 60; height: 60; float: left'>
                    <img id='campo2' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%'></img>
                </div>
                <div id='m1r1c3' style='width: 60; height: 60; float: left'>
                    <img id='campo3' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%'></img>
                </div>
                <div id='m1r1c4' style='width: 60; height: 60; float: left'>
                    <img id='campo4' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%'></img>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo5' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%'></img>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo6' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%'></img>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo7' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%'></img>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo8' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%'></img>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo9' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%'></img>
                </div>
            </div>
            <div id='m1r1'style='top: 0'>
                <div id='m1r1c1' style='width: 60; height: 60; float: left'>
                    <img id='campo10' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%'></img>
                </div>
                <div id='m1r1c2' style='width: 60; height: 60; float: left'>
                    <img id='campo11' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%'></img>
                </div>
                <div id='m1r1c3' style='width: 60; height: 60; float: left'>
                    <img id='campo12' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%'></img>
                </div>
                <div id='m1r1c4' style='width: 60; height: 60; float: left'>
                    <img id='campo13' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%'></img>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo14' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%'></img>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo15' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%'></img>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo16' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%'></img>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo17' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%'></img>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo18' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%'></img>
                </div>
            </div>
            <div id='m1r1'style='top: 0'>
                <div id='m1r1c1' style='width: 60; height: 60; float: left'>
                    <img id='campo19' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%'></img>
                </div>
                <div id='m1r1c2' style='width: 60; height: 60; float: left'>
                    <img id='campo20' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%'></img>
                </div>
                <div id='m1r1c3' style='width: 60; height: 60; float: left'>
                    <img id='campo21' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%'></img>
                </div>
                <div id='m1r1c4' style='width: 60; height: 60; float: left'>
                    <img id='campo22' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%'></img>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo23' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 0 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 4 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 6 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 7){ posicaoDoPersonagemNaMatriz[0] = posicaoDoPersonagemNaMatriz[0] - 1; preencherImagens(); if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]] == 7){nivelDeSolo++; document.getElementById('personagem1').style.top = parseInt(document.getElementById('personagem1').style.top.split('p')[0]) - 10; document.getElementById('personagem1').style.left = parseInt(document.getElementById('personagem1').style.left.split('p')[0]) - 10;} if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 7){nivelDeSolo--; document.getElementById('personagem1').style.top = parseInt(document.getElementById('personagem1').style.top.split('p')[0]) + 10; document.getElementById('personagem1').style.left = parseInt(document.getElementById('personagem1').style.left.split('p')[0]) + 10;}}else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 2){ mochila[0] = 'PocaoHP'; document.getElementById('itemCampoDaMochila1').src = 'imagens/imagemPocaoHP.png'; mochila[1] = 'Corda'; document.getElementById('itemCampoDaMochila2').src = 'imagens/imagemCorda.png'; mochila[2] = 'Pa'; document.getElementById('itemCampoDaMochila3').src = 'imagens/imagemPa.png'; document.getElementById('fala1').src = 'imagens/imagemFalaDeposit.png'; setTimeout(function(){ document.getElementById('fala1').src = 'imagens/imagemFalaVazia.png';}, 1000); matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] = 3;}else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 3){document.getElementById('fala1').src = 'imagens/imagemFalaItemVazio.png'; setTimeout(function(){ document.getElementById('fala1').src = 'imagens/imagemFalaVazia.png';}, 1000);}else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 5){posicaoDoPersonagemNaMatriz[0] = posicaoDoPersonagemNaMatriz[0]-11; posicaoDoPersonagemNaMatriz[1] = posicaoDoPersonagemNaMatriz[1]; preencherImagens();}else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 8 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 9){matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] = 10; if(nivel <= 100){ nivel += 10;}else if(nivel <= 200){nivel += 9;}else if(nivel <= 300){nivel += 8;}else if(nivel <= 400){nivel += 7;}else if(nivel <= 500){nivel += 6;}else if(nivel <= 600){nivel += 5;}else if(nivel <= 700){nivel += 4;}else if(nivel <= 800){nivel += 3;}else if(nivel <= 1000){nivel += 2;}else if(nivel > 1000){nivel += 1;} hpmax = ((nivel-1) * 30) + 176; preencherImagens();} direcaoDoPersonagem = 0; document.getElementById('personagem1').src = 'imagens/imagemPersonagemDeCostas.png'; run_ajax();"></img>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo24' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%'></img>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo25' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%'></img>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo26' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%'></img>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo27' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%'></img>
                </div>
            </div>
            <div id='m1r1'style='top: 0'>
                <div id='m1r1c1' style='width: 60; height: 60; float: left'>
                    <img id='campo28' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%'></img>
                </div>
                <div id='m1r1c2' style='width: 60; height: 60; float: left'>
                    <img id='campo29' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%'></img>
                </div>
                <div id='m1r1c3' style='width: 60; height: 60; float: left'>
                    <img id='campo30' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%'></img>
                </div>
                <div id='m1r1c4' style='width: 60; height: 60; float: left'>
                    <img id='campo31' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 0 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 4 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 6 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 7){ posicaoDoPersonagemNaMatriz[1] = posicaoDoPersonagemNaMatriz[1] - 1; preencherImagens(); if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]] == 7){nivelDeSolo++; document.getElementById('personagem1').style.top = parseInt(document.getElementById('personagem1').style.top.split('p')[0]) - 10; document.getElementById('personagem1').style.left = parseInt(document.getElementById('personagem1').style.left.split('p')[0]) - 10;} if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 7){nivelDeSolo--; document.getElementById('personagem1').style.top = parseInt(document.getElementById('personagem1').style.top.split('p')[0]) + 10; document.getElementById('personagem1').style.left = parseInt(document.getElementById('personagem1').style.left.split('p')[0]) + 10;}}else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 2){ mochila[0] = 'PocaoHP'; document.getElementById('itemCampoDaMochila1').src = 'imagens/imagemPocaoHP.png'; mochila[1] = 'Corda'; document.getElementById('itemCampoDaMochila2').src = 'imagens/imagemCorda.png'; mochila[2] = 'Pa'; document.getElementById('itemCampoDaMochila3').src = 'imagens/imagemPa.png'; document.getElementById('fala1').src = 'imagens/imagemFalaDeposit.png'; setTimeout(function(){ document.getElementById('fala1').src = 'imagens/imagemFalaVazia.png';}, 1000); matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] = 3;}else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 3){document.getElementById('fala1').src = 'imagens/imagemFalaItemVazio.png'; setTimeout(function(){ document.getElementById('fala1').src = 'imagens/imagemFalaVazia.png';}, 1000);}else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 5){ posicaoDoPersonagemNaMatriz[0] = posicaoDoPersonagemNaMatriz[0]-10; posicaoDoPersonagemNaMatriz[1] = posicaoDoPersonagemNaMatriz[1]-1; preencherImagens();}else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 8 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 9){matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] = 10; if(nivel <= 100){ nivel += 10;}else if(nivel <= 200){nivel += 9;}else if(nivel <= 300){nivel += 8;}else if(nivel <= 400){nivel += 7;}else if(nivel <= 500){nivel += 6;}else if(nivel <= 600){nivel += 5;}else if(nivel <= 700){nivel += 4;}else if(nivel <= 800){nivel += 3;}else if(nivel <= 1000){nivel += 2;}else if(nivel > 1000){nivel += 1;} hpmax = ((nivel-1) * 30) + 176; preencherImagens();} direcaoDoPersonagem = 2; document.getElementById('personagem1').src = 'imagens/imagemPersonagemDeEsquerda.png'; run_ajax();"></img>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo32' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%'></img>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo33' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 0 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 4 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 6 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 7){ posicaoDoPersonagemNaMatriz[1] = posicaoDoPersonagemNaMatriz[1] + 1; preencherImagens(); if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]] == 7){nivelDeSolo++; document.getElementById('personagem1').style.top = parseInt(document.getElementById('personagem1').style.top.split('p')[0]) - 10; document.getElementById('personagem1').style.left = parseInt(document.getElementById('personagem1').style.left.split('p')[0]) - 10;} if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 7){nivelDeSolo--; document.getElementById('personagem1').style.top = parseInt(document.getElementById('personagem1').style.top.split('p')[0]) + 10; document.getElementById('personagem1').style.left = parseInt(document.getElementById('personagem1').style.left.split('p')[0]) + 10;}}else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 2){ mochila[0] = 'PocaoHP'; document.getElementById('itemCampoDaMochila1').src = 'imagens/imagemPocaoHP.png'; mochila[1] = 'Corda'; document.getElementById('itemCampoDaMochila2').src = 'imagens/imagemCorda.png'; mochila[2] = 'Pa'; document.getElementById('itemCampoDaMochila3').src = 'imagens/imagemPa.png'; document.getElementById('fala1').src = 'imagens/imagemFalaDeposit.png'; setTimeout(function(){ document.getElementById('fala1').src = 'imagens/imagemFalaVazia.png';}, 1000); matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] = 3;}else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 3){document.getElementById('fala1').src = 'imagens/imagemFalaItemVazio.png'; setTimeout(function(){ document.getElementById('fala1').src = 'imagens/imagemFalaVazia.png';}, 1000);}else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 5){ posicaoDoPersonagemNaMatriz[0] = posicaoDoPersonagemNaMatriz[0]-10; posicaoDoPersonagemNaMatriz[1] = posicaoDoPersonagemNaMatriz[1]+1; preencherImagens();}else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 8 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 9){matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] = 10; if(nivel <= 100){ nivel += 10;}else if(nivel <= 200){nivel += 9;}else if(nivel <= 300){nivel += 8;}else if(nivel <= 400){nivel += 7;}else if(nivel <= 500){nivel += 6;}else if(nivel <= 600){nivel += 5;}else if(nivel <= 700){nivel += 4;}else if(nivel <= 800){nivel += 3;}else if(nivel <= 1000){nivel += 2;}else if(nivel > 1000){nivel += 1;} hpmax = ((nivel-1) * 30) + 176; preencherImagens();} direcaoDoPersonagem = 2; document.getElementById('personagem1').src = 'imagens/imagemPersonagemDeDireita.png'; run_ajax();"></img>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo34' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%'></img>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo35' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%'></img>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo36' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%'></img>
                </div>
            </div>
            <div id='m1r1'style='top: 0'>
                <div id='m1r1c1' style='width: 60; height: 60; float: left'>
                    <img id='campo37' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%'></img>
                </div>
                <div id='m1r1c2' style='width: 60; height: 60; float: left'>
                    <img id='campo38' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%'></img>
                </div>
                <div id='m1r1c3' style='width: 60; height: 60; float: left'>
                    <img id='campo39' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%'></img>
                </div>
                <div id='m1r1c4' style='width: 60; height: 60; float: left'>
                    <img id='campo40' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%'></img>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo41' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 0 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 4 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 6 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 7){ posicaoDoPersonagemNaMatriz[0] = posicaoDoPersonagemNaMatriz[0] + 1; preencherImagens(); if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]] == 7){nivelDeSolo++; document.getElementById('personagem1').style.top = parseInt(document.getElementById('personagem1').style.top.split('p')[0]) - 10; document.getElementById('personagem1').style.left = parseInt(document.getElementById('personagem1').style.left.split('p')[0]) - 10;} if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 7){nivelDeSolo--; document.getElementById('personagem1').style.top = parseInt(document.getElementById('personagem1').style.top.split('p')[0]) + 10; document.getElementById('personagem1').style.left = parseInt(document.getElementById('personagem1').style.left.split('p')[0]) + 10;}}else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 2){ mochila[0] = 'PocaoHP'; document.getElementById('itemCampoDaMochila1').src = 'imagens/imagemPocaoHP.png'; mochila[1] = 'Corda'; document.getElementById('itemCampoDaMochila2').src = 'imagens/imagemCorda.png'; mochila[2] = 'Pa'; document.getElementById('itemCampoDaMochila3').src = 'imagens/imagemPa.png'; document.getElementById('fala1').src = 'imagens/imagemFalaDeposit.png'; setTimeout(function(){ document.getElementById('fala1').src = 'imagens/imagemFalaVazia.png';}, 1000); matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] = 3;}else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 3){document.getElementById('fala1').src = 'imagens/imagemFalaItemVazio.png'; setTimeout(function(){ document.getElementById('fala1').src = 'imagens/imagemFalaVazia.png';}, 1000);}else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 5){posicaoDoPersonagemNaMatriz[0] = posicaoDoPersonagemNaMatriz[0]-9; posicaoDoPersonagemNaMatriz[1] = posicaoDoPersonagemNaMatriz[1]; preencherImagens();}else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 8 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 9){matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] = 10; if(nivel <= 100){ nivel += 10;}else if(nivel <= 200){nivel += 9;}else if(nivel <= 300){nivel += 8;}else if(nivel <= 400){nivel += 7;}else if(nivel <= 500){nivel += 6;}else if(nivel <= 600){nivel += 5;}else if(nivel <= 700){nivel += 4;}else if(nivel <= 800){nivel += 3;}else if(nivel <= 1000){nivel += 2;}else if(nivel > 1000){nivel += 1;} hpmax = ((nivel-1) * 30) + 176; preencherImagens();} direcaoDoPersonagem = 2; document.getElementById('personagem1').src = 'imagens/imagemPersonagemDeFrente.png'; run_ajax();"></img>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo42' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%'></img>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo43' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%'></img>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo44' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%'></img>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo45' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%'></img>
                </div>
            </div>
            <div id='m1r1'style='top: 0'>
                <div id='m1r1c1' style='width: 60; height: 60; float: left'>
                    <img id='campo46' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%'></img>
                </div>
                <div id='m1r1c2' style='width: 60; height: 60; float: left'>
                    <img id='campo47' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%'></img>
                </div>
                <div id='m1r1c3' style='width: 60; height: 60; float: left'>
                    <img id='campo48' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%'></img>
                </div>
                <div id='m1r1c4' style='width: 60; height: 60; float: left'>
                    <img id='campo49' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%'></img>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo50' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%'></img>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo51' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%'></img>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo52' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%'></img>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo53' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%'></img>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo54' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%'></img>
                </div>
            </div>
            <div id='m1r1'style='top: 0'>
                <div id='m1r1c1' style='width: 60; height: 60; float: left'>
                    <img id='campo55' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%'></img>
                </div>
                <div id='m1r1c2' style='width: 60; height: 60; float: left'>
                    <img id='campo56' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%'></img>
                </div>
                <div id='m1r1c3' style='width: 60; height: 60; float: left'>
                    <img id='campo57' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%'></img>
                </div>
                <div id='m1r1c4' style='width: 60; height: 60; float: left'>
                    <img id='campo58' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%'></img>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo59' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%'></img>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo60' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%'></img>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo61' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%'></img>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo62' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%'></img>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo63' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%'></img>
                </div>
            </div>
        </div>

        <img id='personagem1' src='imagens/imagemPersonagemDeFrente.png' alt='personagem' title='personagem' style='position:fixed; top: 185; left: 245; width: 50; height: 50;'></img>
        <img id='fala1' src='imagens/imagemFalaVazia.png' alt='fala' title='fala' style='position:fixed; top: 185; left: 245;'></img>
        <img id='mensagem1' src='imagens/imagemMensagemPersonagemMorto.png' alt='mensagem' title='mensagem' style='position:fixed; top: 185; left: 245; visibility: hidden;'></img>
        <div id='ok' style='position:fixed; top: 302; left: 448; width: 35; height: 16;' onclick="document.getElementById('mensagem1').style.visibility = 'hidden'; posicaoDoPersonagemNaMatriz = [5,6]; hp++; if(nivel - 1 > 0) nivel--; if(nivelDeSolo == 2){ nivelDeSolo--; document.getElementById('personagem1').style.top = parseInt(document.getElementById('personagem1').style.top.split('p')[0]) + 10; document.getElementById('personagem1').style.left = parseInt(document.getElementById('personagem1').style.left.split('p')[0]) + 10;} document.getElementById('fala1').src = 'imagens/imagemFalaVoceJaTemBless.png'; setTimeout(function(){document.getElementById('fala1').src = 'imagens/imagemFalaVazia.png';}, 2000); direcaoDoPersonagem = 2; document.getElementById('personagem1').src = 'imagens/imagemPersonagemDeFrente.png';">
        
        </div>
        <div id='cancel' style='position:fixed; top: 302; left: 495; width: 35; height: 16;' onclick="document.getElementById('mensagem1').style.visibility = 'hidden'; posicaoDoPersonagemNaMatriz = [5,6]; hp++; if(nivel - 1 > 0) nivel--; if(nivelDeSolo == 2){ nivelDeSolo--; document.getElementById('personagem1').style.top = parseInt(document.getElementById('personagem1').style.top.split('p')[0]) + 10; document.getElementById('personagem1').style.left = parseInt(document.getElementById('personagem1').style.left.split('p')[0]) + 10;} document.getElementById('fala1').src = 'imagens/imagemFalaVoceJaTemBless.png'; setTimeout(function(){document.getElementById('fala1').src = 'imagens/imagemFalaVazia.png';}, 2000); direcaoDoPersonagem = 2; document.getElementById('personagem1').src = 'imagens/imagemPersonagemDeFrente.png';">
        
        </div>

        <!--
        <div id='painelEsquerda1' title='painel' style='position:fixed; top: 0; left: 0; width: 60; height:100%; background-color: gray;'></div>
        <div id='painelCima1' title='painel' style='position:fixed; top: 0; left: 0; width: 100%; height:60; background-color: gray;'></div>
        -->
        <div id='painelBaixo1' title='painel' style='position:fixed; top: 420; left: 0; width: 100%; height:100%; background-color: lightgray;'></div>
        <div id='painelDireita1' title='painel' style='position:fixed; top: 0; left: 540; width: 100%; height:100%; background-color: lightgray;'></div>

        <div id='inventario' title='inventario' style='position: fixed; top: 0; left: 540; width: 178; height:414; background-color: lightgray; border-style: solid; border-color: gray;'>
            <div id='hp' title='hp' style='position: absolute; top: 0; left: 0; margin: 1; width: 44; height: 20; background-color: tomato;'>
                
            </div>
            <div id='hpvalor' title='hp' style='position: fixed; top: 9; left: 540; width: 178; height: 20; text-align: center; color: white; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
                
            </div>
            <div id='skills' title='skills' style='position: absolute; top: 20; left: 0; margin: 1; width: 176; height: 44; background-color: lightgray;'>
                <div id='nomeDasSkills' title='skills' style='top: 0; left: 10; margin: 1; padding: 2; width: 170; height: 10; background-color: gray; color: white; font-family: "Lucida Console", "Courier New", monospace; font-size: x-small;'>
                    Skills
                </div>
                <div id='campoDasSkills1' title='skills' style='float: left; top: 0; left: 0; margin: 1; width: 174; height: 42; background-color: gray;'>
                    <div id='nivel' title='nivel' style='position: fixed; top: 49; left: 550; width: 178; height: 20; text-align: left; color: white; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>

                    </div>
                    <div id='nivelvalor' title='nivel' style='position: fixed; top: 49; left: 540; width: 178; height: 20; text-align: right; color: white; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>

                    </div>
                    <img id='itemCampoDasSkills1' src='imagens/imagemCampoItem.png' alt='item' title='item' style='width: 100%; height: 100%' onclick=""></img>
                </div>
            </div>
            <div id='mochila' title='mochila' style='position: absolute; top: 80; left: 0; margin: 1; width: 176; height: 44; background-color: lightgray;'>
                <div id='nomeDaMochila1' title='mochila' style='top: 0; left: 10; margin: 1; padding: 2; width: 170; height: 10; background-color: gray; color: white; font-family: "Lucida Console", "Courier New", monospace; font-size: x-small;'>
                    Mochila
                </div>
                <div id='campoDaMochila1' title='mochila' style='float: left; top: 0; left: 0; margin: 1; width: 42; height: 42; background-color: gray;'>
                    <img id='itemCampoDaMochila1' src='imagens/imagemCampoItem.png' alt='item' title='item' style='width: 100%; height: 100%' onclick="if(mochila[0] == 'PocaoHP'){document.getElementById('fala1').src = 'imagens/imagemFalaPocaoHP.png'; if(hp < hpmax){if(hp + 40 < hpmax){hp = hp + 40; document.getElementById('hp').style.width = (176 * hp) / hpmax;}else{hp = hpmax; document.getElementById('hp').style.width = 176;}} if(parseInt(document.getElementById('hp').style.width.split('p')[0]) <= 44){ document.getElementById('hp').style.background = 'tomato';}else if(parseInt(document.getElementById('hp').style.width.split('p')[0]) <= 88){ document.getElementById('hp').style.background = 'orange';}else if(parseInt(document.getElementById('hp').style.width.split('p')[0]) > 88){ document.getElementById('hp').style.background = 'mediumseagreen';} document.getElementById('hpvalor').innerHTML = hp; setTimeout(function(){document.getElementById('fala1').src = 'imagens/imagemFalaVazia.png';}, 1000);}"></img>
                </div>
                <div id='campoDaMochila2' title='mochila' style='float: left; top: 0; left: 0; margin: 1; width: 42; height: 42; background-color: gray;'>
                    <img id='itemCampoDaMochila2' src='imagens/imagemCampoItem.png' alt='item' title='item' style='width: 100%; height: 100%' onclick="if(mochila[1] == 'Corda' && matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]] == 4){posicaoDoPersonagemNaMatriz[0] = posicaoDoPersonagemNaMatriz[0]+9; posicaoDoPersonagemNaMatriz[1] = posicaoDoPersonagemNaMatriz[1]; preencherImagens();}"></img>
                </div>
                <div id='campoDaMochila3' title='mochila' style='float: left; top: 0; left: 0; margin: 1; width: 42; height: 42; background-color: gray;'>
                    <img id='itemCampoDaMochila3' src='imagens/imagemCampoItem.png' alt='item' title='item' style='width: 100%; height: 100%' onclick="if(mochila[2] == 'Pa' && matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]] == 6){posicaoDoPersonagemNaMatriz[0] = posicaoDoPersonagemNaMatriz[0]-10; posicaoDoPersonagemNaMatriz[1] = posicaoDoPersonagemNaMatriz[1]; preencherImagens();}"></img>
                </div>
                <div id='campoDaMochila4' title='mochila' style='float: left; top: 0; left: 0; margin: 1; width: 42; height: 42; background-color: gray;'>
                    <img id='itemCampoDaMochila4' src='imagens/imagemCampoItem.png' alt='item' title='item' style='width: 100%; height: 100%'></img>
                </div>
            </div>
            <div id='parcel' title='parcel' style='position: absolute; top: 120; left: 0; margin: 1; width: 176; height: 44; background-color: lightgray; visibility: hidden;'>
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
        </div>
        <div id='chat' title='chat' style='position: fixed; top: 0; left: 718; width: 178; height:414; background-color: lightgray; border-style: solid; border-color: gray;'>
            <div id='default' title='default' style='position: absolute; top: 0; left: 0; margin: 1; width: 176; height: 44; background-color: lightgray;'>
                <div id='nomeDoChatDefault' title='default' style='float: left; top: 0; left: 10; margin: 1; padding: 2; width: 45; height: 10; background-color: gray; color: white; font-family: "Lucida Console", "Courier New", monospace; font-size: x-small;' onclick="identificadorDoChat = 0; document.getElementById('textareaChat').value = mensagensDoChatDefault; document.getElementById('textareaChat').scrollTop = document.getElementById('textareaChat').scrollHeight; document.getElementById('campoDeEscritaInput').focus(); document.getElementById('nomeDoChatNpc').style.color = 'black'; document.getElementById('nomeDoChatDefault').style.color = 'white';">
                    Default
                </div>
                <div id='nomeDoChatNpc' title='npc' style='float: left; top: 0; left: 10; margin: 1; padding: 2; width: 20; height: 10; background-color: gray; color: black; font-family: "Lucida Console", "Courier New", monospace; font-size: x-small;' onclick="identificadorDoChat = 1; document.getElementById('textareaChat').value = mensagensDoChatNpc; document.getElementById('textareaChat').scrollTop = document.getElementById('textareaChat').scrollHeight; document.getElementById('campoDeEscritaInput').focus(); document.getElementById('nomeDoChatDefault').style.color = 'black'; document.getElementById('nomeDoChatNpc').style.color = 'white';">
                    Npc
                </div>
                <div id='campoDoChat' title='default' style='float: left; top: 0; left: 0; margin: 1; width: 174; height: 370; background-color: gray;'>
                    <textarea id="textareaChat" name="textareaChat" title='default' rows="24" cols="22" style="resize: none;" disabled></textarea>
                </div>
                <div id='campoDeEscrita' title='chat' style='float: left; top: 0; left: 0; margin: 1; width: 174; height: 22; background-color: gray;'>
                    <input type="text" id="campoDeEscritaInput" name="campoDeEscritaInput" title='chat' style="opacity: 0.6;" autofocus></input>
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
            //Variaveis Animacao Snake Atacando
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
            
            var i = 0;
            var j = 100000;

            while(i < j){

                setTimeout(function(){

                    //Animacao Snake Atacando de Cima
                    if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 8 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 10){
                        posicaoLinhaCima = posicaoDoPersonagemNaMatriz[0]-1;
                        posicaoColunaCima = posicaoDoPersonagemNaMatriz[1];
                        flagCima = true;
                        if(matrizDoMapa[posicaoLinhaCima][posicaoColunaCima] == 8){
                            matrizDoMapa[posicaoLinhaCima][posicaoColunaCima] = 9;
                        }else if(matrizDoMapa[posicaoLinhaCima][posicaoColunaCima] == 10 && esperaRessCima == esperaRessCimaContador){
                            matrizDoMapa[posicaoLinhaCima][posicaoColunaCima] = 9;
                            esperaRessCimaContador = 0;
                        }else if(matrizDoMapa[posicaoLinhaCima][posicaoColunaCima] == 10 && esperaRessCima > esperaRessCimaContador){
                            esperaRessCimaContador++;
                        }
                        if(hp - 1 >= 0 && matrizDoMapa[posicaoLinhaCima][posicaoColunaCima] == 9){
                            hp -= 1;
                        }else if(hp - 1 < 0){
                            document.getElementById('mensagem1').style.visibility = 'visible';
                        }
                    } else if((matrizDoMapa[posicaoLinhaCima][posicaoColunaCima] == 9 || matrizDoMapa[posicaoLinhaCima][posicaoColunaCima] == 10) && flagCima){
                        matrizDoMapa[posicaoLinhaCima][posicaoColunaCima] = 8;
                        flagCima = false;
                    }

                    //Animacao Snake Atacando da Esquerda
                    if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 8 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 10){
                        posicaoLinhaEsquerda = posicaoDoPersonagemNaMatriz[0];
                        posicaoColunaEsquerda = posicaoDoPersonagemNaMatriz[1]-1;
                        flagEsquerda = true;
                        if(matrizDoMapa[posicaoLinhaEsquerda][posicaoColunaEsquerda] == 8){
                            matrizDoMapa[posicaoLinhaEsquerda][posicaoColunaEsquerda] = 9;
                        }else if(matrizDoMapa[posicaoLinhaEsquerda][posicaoColunaEsquerda] == 10 && esperaRessEsquerda == esperaRessEsquerdaContador){
                            matrizDoMapa[posicaoLinhaEsquerda][posicaoColunaEsquerda] = 9;
                            esperaRessEsquerdaContador = 0;
                        }else if(matrizDoMapa[posicaoLinhaEsquerda][posicaoColunaEsquerda] == 10 && esperaRessEsquerda > esperaRessEsquerdaContador){
                            esperaRessEsquerdaContador++;
                        }
                        if(hp - 1 >= 0 && matrizDoMapa[posicaoLinhaEsquerda][posicaoColunaEsquerda] == 9){
                            hp -= 1;
                        }else if(hp - 1 < 0){
                            document.getElementById('mensagem1').style.visibility = 'visible';
                        }
                    } else if((matrizDoMapa[posicaoLinhaEsquerda][posicaoColunaEsquerda] == 9 || matrizDoMapa[posicaoLinhaEsquerda][posicaoColunaEsquerda] == 10) && flagEsquerda){
                        matrizDoMapa[posicaoLinhaEsquerda][posicaoColunaEsquerda] = 8;
                        flagEsquerda = false;
                    }

                    //Animacao Snake Atacando da Direita
                    if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 8 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 10){
                        posicaoLinhaDireita = posicaoDoPersonagemNaMatriz[0];
                        posicaoColunaDireita = posicaoDoPersonagemNaMatriz[1]+1;
                        flagDireita = true;
                        if(matrizDoMapa[posicaoLinhaDireita][posicaoColunaDireita] == 8){
                            matrizDoMapa[posicaoLinhaDireita][posicaoColunaDireita] = 9;
                        }else if(matrizDoMapa[posicaoLinhaDireita][posicaoColunaDireita] == 10 && esperaRessDireita == esperaRessDireitaContador){
                            matrizDoMapa[posicaoLinhaDireita][posicaoColunaDireita] = 9;
                            esperaRessDireitaContador = 0;
                        }else if(matrizDoMapa[posicaoLinhaDireita][posicaoColunaDireita] == 10 && esperaRessDireita > esperaRessDireitaContador){
                            esperaRessDireitaContador++;
                        }
                        if(hp - 1 >= 0 && matrizDoMapa[posicaoLinhaDireita][posicaoColunaDireita] == 9){
                            hp -= 1;
                        }else if(hp - 1 < 0){
                            document.getElementById('mensagem1').style.visibility = 'visible';
                        }
                    } else if((matrizDoMapa[posicaoLinhaDireita][posicaoColunaDireita] == 9 || matrizDoMapa[posicaoLinhaDireita][posicaoColunaDireita] == 10) && flagDireita){
                        matrizDoMapa[posicaoLinhaDireita][posicaoColunaDireita] = 8;
                        flagDireita = false;
                    }

                    //Animacao Snake Atacando de Baixo
                    if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 8 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 10){
                        posicaoLinhaBaixo = posicaoDoPersonagemNaMatriz[0]+1;
                        posicaoColunaBaixo = posicaoDoPersonagemNaMatriz[1];
                        flagBaixo = true;
                        if(matrizDoMapa[posicaoLinhaBaixo][posicaoColunaBaixo] == 8){
                            matrizDoMapa[posicaoLinhaBaixo][posicaoColunaBaixo] = 9;
                        }else if(matrizDoMapa[posicaoLinhaBaixo][posicaoColunaBaixo] == 10 && esperaRessBaixo == esperaRessBaixoContador){
                            matrizDoMapa[posicaoLinhaBaixo][posicaoColunaBaixo] = 9;
                            esperaRessBaixoContador = 0;
                        }else if(matrizDoMapa[posicaoLinhaBaixo][posicaoColunaBaixo] == 10 && esperaRessBaixo > esperaRessBaixoContador){
                            esperaRessBaixoContador++;
                        }
                        if(hp - 1 >= 0 && matrizDoMapa[posicaoLinhaBaixo][posicaoColunaBaixo] == 9){
                            hp -= 1;
                        }else if(hp - 1 < 0){
                            document.getElementById('mensagem1').style.visibility = 'visible';
                        }
                    } else if((matrizDoMapa[posicaoLinhaBaixo][posicaoColunaBaixo] == 9 || matrizDoMapa[posicaoLinhaBaixo][posicaoColunaBaixo] == 10) && flagBaixo){
                        matrizDoMapa[posicaoLinhaBaixo][posicaoColunaBaixo] = 8;
                        flagBaixo = false;
                    }

                    document.getElementById('nivelvalor').innerHTML = nivel;
                    document.getElementById('hpvalor').innerHTML = hp;
                    document.getElementById('hp').style.width = (176 * hp) / hpmax;
                    if(parseInt(document.getElementById('hp').style.width.split('p')[0]) <= 44){ document.getElementById('hp').style.background = 'tomato';}else if(parseInt(document.getElementById('hp').style.width.split('p')[0]) <= 88){ document.getElementById('hp').style.background = 'orange';}else if(parseInt(document.getElementById('hp').style.width.split('p')[0]) > 88){ document.getElementById('hp').style.background = 'mediumseagreen';}

                    if(identificadorDoChat == 0){
                        document.getElementById('textareaChat').value = mensagensDoChatDefault;
                    } else if(identificadorDoChat == 1){
                        document.getElementById('textareaChat').value = mensagensDoChatNpc;
                    }

                    preencherImagens();
                }, i*1000);

                i++;
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
                
                echo "run_ajax();";

                $username = $_POST['username'];
                $password = $_POST['password'];
                $logado = false;

                $sql = "SELECT `username`, `password` ,`nivel`, `hp` FROM `ottibia` WHERE `username`='" . $username . "' AND `password`='" . $password . "'";
                
                $result = $conn->query($sql);

                while($obj = $result->fetch_object()){

                    echo "username = '" . $obj->username . "';";
                    echo "password = '" . $obj->password . "';";
                    echo "nivel = " . $obj->nivel . ";";
                    echo "hp = " . $obj->hp . ";";

                    $logado = true;
                }

                if(!$logado){
                    echo "alert('Conta inexistente, os seus dados nao serao salvos. Acesse login.php para se registrar.');";
                }

                $result->close();

                $sql = "UPDATE `ottibia` SET `nivel`=" . $_POST['nivel'] . ", `hp`=" . $_POST['hp'] . " WHERE `username`='" . $username . "' AND `password`='" . $password . "'";

                $conn->query($sql);
                
                $conn->close();
                
            ?>

            hpmax = ((nivel-1) * 30) + 176;
            document.getElementById('hpvalor').innerHTML = hp;
            document.getElementById('nivel').innerHTML = 'Nivel';
            document.getElementById('nivelvalor').innerHTML = nivel;
            document.getElementById('fala1').src = 'imagens/imagemFalaVoceJaTemBless.png';
            setTimeout(function(){document.getElementById('fala1').src = 'imagens/imagemFalaVazia.png';}, 2000);

        </script>

    </body>
</html>
