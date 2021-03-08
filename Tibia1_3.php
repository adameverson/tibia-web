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
                [ 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1],
                [ 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1],
                [ 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1],
                [ 1, 0, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 1],
                [ 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 1],
                [ 1, 0, 0, 0, 1,11, 0, 6, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 1],
                [ 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 1],
                [ 1, 0, 0, 0, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 0, 0, 0, 1],
                [ 1, 0, 0, 0, 1,19, 7, 0, 0, 0, 0, 0, 0, 0, 7,16, 1, 0, 0, 0, 1],
                [ 1, 0, 0, 0, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 0, 0, 0, 1],
                [ 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 1],
                [ 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 1],
                [ 1, 0, 0, 0, 1, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0, 1, 1, 0, 0, 0, 1],
                [ 1, 0, 0, 0, 1,19, 7,19, 7,19, 7,16, 7,16, 7,16, 1, 0, 0, 0, 1],
                [ 1, 0, 0, 0, 1, 1,19, 1, 1, 1,19, 1, 1, 1,16, 1, 1, 0, 0, 0, 1],
                [ 1, 0, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 1],
                [ 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1],
                [ 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1],
                [ 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1]
            ];

            var matrizDoMapaOriginal = 
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
                [ 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1],
                [ 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1],
                [ 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1],
                [ 1, 0, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 1],
                [ 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 1],
                [ 1, 0, 0, 0, 1,11, 0, 6, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 1],
                [ 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 1],
                [ 1, 0, 0, 0, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 0, 0, 0, 1],
                [ 1, 0, 0, 0, 1,19, 7, 0, 0, 0, 0, 0, 0, 0, 7,16, 1, 0, 0, 0, 1],
                [ 1, 0, 0, 0, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 0, 0, 0, 1],
                [ 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 1],
                [ 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 1],
                [ 1, 0, 0, 0, 1, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0, 1, 1, 0, 0, 0, 1],
                [ 1, 0, 0, 0, 1,19, 7,19, 7,19, 7,16, 7,16, 7,16, 1, 0, 0, 0, 1],
                [ 1, 0, 0, 0, 1, 1,19, 1, 1, 1,19, 1, 1, 1,16, 1, 1, 0, 0, 0, 1],
                [ 1, 0, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 1],
                [ 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1],
                [ 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1],
                [ 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1]
            ];

            var posicaoDoPersonagemNaMatriz = [5,6];
            var moverPersonagem = [0,0];
            var direcaoDoPersonagem = 2;
            var nivelDeSolo = 1;
            var nivel = 1;
            var hpmax = 176;
            var hp = 44;
            var mochila = ["","","",""];
            var exura = false;
            var exuraGran = false;

            var identificadorDoChat = 0;
            var mensagensDoChatDefault = "Bem Vindo!";
            var mensagensDoChatNpc = "";
            var nivelDeConversaNpc = 0;

            var mover = 60;
            var quadrosDeAnimacao = 10;
            var esperaPorQuadro = 50;

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

            //Variaveis JSON
            var dadosResposta = "vazio";

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
                        }
                        
                        if(i == posicaoDoPersonagemNaMatriz[0]-3 && j == posicaoDoPersonagemNaMatriz[1]-4){
                            document.getElementById('campo1').src = caminhoImagem;
                            document.getElementById('campo1').title = "campo";
                            if(
                                matrizDoMapa[i][j] == 12 ||
                                matrizDoMapa[i][j] == 13 ||
                                matrizDoMapa[i][j] == 14 ||
                                matrizDoMapa[i][j] == 15
                            ){
                                for(let k = 0; k < dadosResposta.players.length; k++){
                                    if(dadosResposta.players[k].x == i && dadosResposta.players[k].y == j){
                                        document.getElementById('campo1').title = dadosResposta.players[k].username + " nivel: " + dadosResposta.players[k].nivel.toString() + " hp: " + dadosResposta.players[k].hp.toString();
                                    }
                                }
                            }
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]-3 && j == posicaoDoPersonagemNaMatriz[1]-3){
                            document.getElementById('campo2').src = caminhoImagem;
                            document.getElementById('campo2').title = "campo";
                            if(
                                matrizDoMapa[i][j] == 12 ||
                                matrizDoMapa[i][j] == 13 ||
                                matrizDoMapa[i][j] == 14 ||
                                matrizDoMapa[i][j] == 15
                            ){
                                for(let k = 0; k < dadosResposta.players.length; k++){
                                    if(dadosResposta.players[k].x == i && dadosResposta.players[k].y == j){
                                        document.getElementById('campo2').title = dadosResposta.players[k].username + " nivel: " + dadosResposta.players[k].nivel.toString() + " hp: " + dadosResposta.players[k].hp.toString();
                                    }
                                }
                            }
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]-3 && j == posicaoDoPersonagemNaMatriz[1]-2){
                            document.getElementById('campo3').src = caminhoImagem;
                            document.getElementById('campo3').title = "campo";
                            if(
                                matrizDoMapa[i][j] == 12 ||
                                matrizDoMapa[i][j] == 13 ||
                                matrizDoMapa[i][j] == 14 ||
                                matrizDoMapa[i][j] == 15
                            ){
                                for(let k = 0; k < dadosResposta.players.length; k++){
                                    if(dadosResposta.players[k].x == i && dadosResposta.players[k].y == j){
                                        document.getElementById('campo3').title = dadosResposta.players[k].username + " nivel: " + dadosResposta.players[k].nivel.toString() + " hp: " + dadosResposta.players[k].hp.toString();
                                    }
                                }
                            }
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]-3 && j == posicaoDoPersonagemNaMatriz[1]-1){
                            document.getElementById('campo4').src = caminhoImagem;
                            document.getElementById('campo4').title = "campo";
                            if(
                                matrizDoMapa[i][j] == 12 ||
                                matrizDoMapa[i][j] == 13 ||
                                matrizDoMapa[i][j] == 14 ||
                                matrizDoMapa[i][j] == 15
                            ){
                                for(let k = 0; k < dadosResposta.players.length; k++){
                                    if(dadosResposta.players[k].x == i && dadosResposta.players[k].y == j){
                                        document.getElementById('campo4').title = dadosResposta.players[k].username + " nivel: " + dadosResposta.players[k].nivel.toString() + " hp: " + dadosResposta.players[k].hp.toString();
                                    }
                                }
                            }
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]-3 && j == posicaoDoPersonagemNaMatriz[1]){
                            document.getElementById('campo5').src = caminhoImagem;
                            document.getElementById('campo5').title = "campo";
                            if(
                                matrizDoMapa[i][j] == 12 ||
                                matrizDoMapa[i][j] == 13 ||
                                matrizDoMapa[i][j] == 14 ||
                                matrizDoMapa[i][j] == 15
                            ){
                                for(let k = 0; k < dadosResposta.players.length; k++){
                                    if(dadosResposta.players[k].x == i && dadosResposta.players[k].y == j){
                                        document.getElementById('campo5').title = dadosResposta.players[k].username + " nivel: " + dadosResposta.players[k].nivel.toString() + " hp: " + dadosResposta.players[k].hp.toString();
                                    }
                                }
                            }
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]-3 && j == posicaoDoPersonagemNaMatriz[1]+1){
                            document.getElementById('campo6').src = caminhoImagem;
                            document.getElementById('campo6').title = "campo";
                            if(
                                matrizDoMapa[i][j] == 12 ||
                                matrizDoMapa[i][j] == 13 ||
                                matrizDoMapa[i][j] == 14 ||
                                matrizDoMapa[i][j] == 15
                            ){
                                for(let k = 0; k < dadosResposta.players.length; k++){
                                    if(dadosResposta.players[k].x == i && dadosResposta.players[k].y == j){
                                        document.getElementById('campo6').title = dadosResposta.players[k].username + " nivel: " + dadosResposta.players[k].nivel.toString() + " hp: " + dadosResposta.players[k].hp.toString();
                                    }
                                }
                            }
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]-3 && j == posicaoDoPersonagemNaMatriz[1]+2){
                            document.getElementById('campo7').src = caminhoImagem;
                            document.getElementById('campo7').title = "campo";
                            if(
                                matrizDoMapa[i][j] == 12 ||
                                matrizDoMapa[i][j] == 13 ||
                                matrizDoMapa[i][j] == 14 ||
                                matrizDoMapa[i][j] == 15
                            ){
                                for(let k = 0; k < dadosResposta.players.length; k++){
                                    if(dadosResposta.players[k].x == i && dadosResposta.players[k].y == j){
                                        document.getElementById('campo7').title = dadosResposta.players[k].username + " nivel: " + dadosResposta.players[k].nivel.toString() + " hp: " + dadosResposta.players[k].hp.toString();
                                    }
                                }
                            }
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]-3 && j == posicaoDoPersonagemNaMatriz[1]+3){
                            document.getElementById('campo8').src = caminhoImagem;
                            document.getElementById('campo8').title = "campo";
                            if(
                                matrizDoMapa[i][j] == 12 ||
                                matrizDoMapa[i][j] == 13 ||
                                matrizDoMapa[i][j] == 14 ||
                                matrizDoMapa[i][j] == 15
                            ){
                                for(let k = 0; k < dadosResposta.players.length; k++){
                                    if(dadosResposta.players[k].x == i && dadosResposta.players[k].y == j){
                                        document.getElementById('campo8').title = dadosResposta.players[k].username + " nivel: " + dadosResposta.players[k].nivel.toString() + " hp: " + dadosResposta.players[k].hp.toString();
                                    }
                                }
                            }
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]-3 && j == posicaoDoPersonagemNaMatriz[1]+4){
                            document.getElementById('campo9').src = caminhoImagem;
                            document.getElementById('campo9').title = "campo";
                            if(
                                matrizDoMapa[i][j] == 12 ||
                                matrizDoMapa[i][j] == 13 ||
                                matrizDoMapa[i][j] == 14 ||
                                matrizDoMapa[i][j] == 15
                            ){
                                for(let k = 0; k < dadosResposta.players.length; k++){
                                    if(dadosResposta.players[k].x == i && dadosResposta.players[k].y == j){
                                        document.getElementById('campo9').title = dadosResposta.players[k].username + " nivel: " + dadosResposta.players[k].nivel.toString() + " hp: " + dadosResposta.players[k].hp.toString();
                                    }
                                }
                            }
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]-2 && j == posicaoDoPersonagemNaMatriz[1]-4){
                            document.getElementById('campo10').src = caminhoImagem;
                            document.getElementById('campo10').title = "campo";
                            if(
                                matrizDoMapa[i][j] == 12 ||
                                matrizDoMapa[i][j] == 13 ||
                                matrizDoMapa[i][j] == 14 ||
                                matrizDoMapa[i][j] == 15
                            ){
                                for(let k = 0; k < dadosResposta.players.length; k++){
                                    if(dadosResposta.players[k].x == i && dadosResposta.players[k].y == j){
                                        document.getElementById('campo10').title = dadosResposta.players[k].username + " nivel: " + dadosResposta.players[k].nivel.toString() + " hp: " + dadosResposta.players[k].hp.toString();
                                    }
                                }
                            }
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]-2 && j == posicaoDoPersonagemNaMatriz[1]-3){
                            document.getElementById('campo11').src = caminhoImagem;
                            document.getElementById('campo11').title = "campo";
                            if(
                                matrizDoMapa[i][j] == 12 ||
                                matrizDoMapa[i][j] == 13 ||
                                matrizDoMapa[i][j] == 14 ||
                                matrizDoMapa[i][j] == 15
                            ){
                                for(let k = 0; k < dadosResposta.players.length; k++){
                                    if(dadosResposta.players[k].x == i && dadosResposta.players[k].y == j){
                                        document.getElementById('campo11').title = dadosResposta.players[k].username + " nivel: " + dadosResposta.players[k].nivel.toString() + " hp: " + dadosResposta.players[k].hp.toString();
                                    }
                                }
                            }
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]-2 && j == posicaoDoPersonagemNaMatriz[1]-2){
                            document.getElementById('campo12').src = caminhoImagem;
                            document.getElementById('campo12').title = "campo";
                            if(
                                matrizDoMapa[i][j] == 12 ||
                                matrizDoMapa[i][j] == 13 ||
                                matrizDoMapa[i][j] == 14 ||
                                matrizDoMapa[i][j] == 15
                            ){
                                for(let k = 0; k < dadosResposta.players.length; k++){
                                    if(dadosResposta.players[k].x == i && dadosResposta.players[k].y == j){
                                        document.getElementById('campo12').title = dadosResposta.players[k].username + " nivel: " + dadosResposta.players[k].nivel.toString() + " hp: " + dadosResposta.players[k].hp.toString();
                                    }
                                }
                            }
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]-2 && j == posicaoDoPersonagemNaMatriz[1]-1){
                            document.getElementById('campo13').src = caminhoImagem;
                            document.getElementById('campo13').title = "campo";
                            if(
                                matrizDoMapa[i][j] == 12 ||
                                matrizDoMapa[i][j] == 13 ||
                                matrizDoMapa[i][j] == 14 ||
                                matrizDoMapa[i][j] == 15
                            ){
                                for(let k = 0; k < dadosResposta.players.length; k++){
                                    if(dadosResposta.players[k].x == i && dadosResposta.players[k].y == j){
                                        document.getElementById('campo13').title = dadosResposta.players[k].username + " nivel: " + dadosResposta.players[k].nivel.toString() + " hp: " + dadosResposta.players[k].hp.toString();
                                    }
                                }
                            }
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]-2 && j == posicaoDoPersonagemNaMatriz[1]){
                            document.getElementById('campo14').src = caminhoImagem;
                            document.getElementById('campo14').title = "campo";
                            if(
                                matrizDoMapa[i][j] == 12 ||
                                matrizDoMapa[i][j] == 13 ||
                                matrizDoMapa[i][j] == 14 ||
                                matrizDoMapa[i][j] == 15
                            ){
                                for(let k = 0; k < dadosResposta.players.length; k++){
                                    if(dadosResposta.players[k].x == i && dadosResposta.players[k].y == j){
                                        document.getElementById('campo14').title = dadosResposta.players[k].username + " nivel: " + dadosResposta.players[k].nivel.toString() + " hp: " + dadosResposta.players[k].hp.toString();
                                    }
                                }
                            }
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]-2 && j == posicaoDoPersonagemNaMatriz[1]+1){
                            document.getElementById('campo15').src = caminhoImagem;
                            document.getElementById('campo15').title = "campo";
                            if(
                                matrizDoMapa[i][j] == 12 ||
                                matrizDoMapa[i][j] == 13 ||
                                matrizDoMapa[i][j] == 14 ||
                                matrizDoMapa[i][j] == 15
                            ){
                                for(let k = 0; k < dadosResposta.players.length; k++){
                                    if(dadosResposta.players[k].x == i && dadosResposta.players[k].y == j){
                                        document.getElementById('campo15').title = dadosResposta.players[k].username + " nivel: " + dadosResposta.players[k].nivel.toString() + " hp: " + dadosResposta.players[k].hp.toString();
                                    }
                                }
                            }
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]-2 && j == posicaoDoPersonagemNaMatriz[1]+2){
                            document.getElementById('campo16').src = caminhoImagem;
                            document.getElementById('campo16').title = "campo";
                            if(
                                matrizDoMapa[i][j] == 12 ||
                                matrizDoMapa[i][j] == 13 ||
                                matrizDoMapa[i][j] == 14 ||
                                matrizDoMapa[i][j] == 15
                            ){
                                for(let k = 0; k < dadosResposta.players.length; k++){
                                    if(dadosResposta.players[k].x == i && dadosResposta.players[k].y == j){
                                        document.getElementById('campo16').title = dadosResposta.players[k].username + " nivel: " + dadosResposta.players[k].nivel.toString() + " hp: " + dadosResposta.players[k].hp.toString();
                                    }
                                }
                            }
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]-2 && j == posicaoDoPersonagemNaMatriz[1]+3){
                            document.getElementById('campo17').src = caminhoImagem;
                            document.getElementById('campo17').title = "campo";
                            if(
                                matrizDoMapa[i][j] == 12 ||
                                matrizDoMapa[i][j] == 13 ||
                                matrizDoMapa[i][j] == 14 ||
                                matrizDoMapa[i][j] == 15
                            ){
                                for(let k = 0; k < dadosResposta.players.length; k++){
                                    if(dadosResposta.players[k].x == i && dadosResposta.players[k].y == j){
                                        document.getElementById('campo17').title = dadosResposta.players[k].username + " nivel: " + dadosResposta.players[k].nivel.toString() + " hp: " + dadosResposta.players[k].hp.toString();
                                    }
                                }
                            }
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]-2 && j == posicaoDoPersonagemNaMatriz[1]+4){
                            document.getElementById('campo18').src = caminhoImagem;
                            document.getElementById('campo18').title = "campo";
                            if(
                                matrizDoMapa[i][j] == 12 ||
                                matrizDoMapa[i][j] == 13 ||
                                matrizDoMapa[i][j] == 14 ||
                                matrizDoMapa[i][j] == 15
                            ){
                                for(let k = 0; k < dadosResposta.players.length; k++){
                                    if(dadosResposta.players[k].x == i && dadosResposta.players[k].y == j){
                                        document.getElementById('campo18').title = dadosResposta.players[k].username + " nivel: " + dadosResposta.players[k].nivel.toString() + " hp: " + dadosResposta.players[k].hp.toString();
                                    }
                                }
                            }
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]-1 && j == posicaoDoPersonagemNaMatriz[1]-4){
                            document.getElementById('campo19').src = caminhoImagem;
                            document.getElementById('campo19').title = "campo";
                            if(
                                matrizDoMapa[i][j] == 12 ||
                                matrizDoMapa[i][j] == 13 ||
                                matrizDoMapa[i][j] == 14 ||
                                matrizDoMapa[i][j] == 15
                            ){
                                for(let k = 0; k < dadosResposta.players.length; k++){
                                    if(dadosResposta.players[k].x == i && dadosResposta.players[k].y == j){
                                        document.getElementById('campo19').title = dadosResposta.players[k].username + " nivel: " + dadosResposta.players[k].nivel.toString() + " hp: " + dadosResposta.players[k].hp.toString();
                                    }
                                }
                            }
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]-1 && j == posicaoDoPersonagemNaMatriz[1]-3){
                            document.getElementById('campo20').src = caminhoImagem;
                            document.getElementById('campo20').title = "campo";
                            if(
                                matrizDoMapa[i][j] == 12 ||
                                matrizDoMapa[i][j] == 13 ||
                                matrizDoMapa[i][j] == 14 ||
                                matrizDoMapa[i][j] == 15
                            ){
                                for(let k = 0; k < dadosResposta.players.length; k++){
                                    if(dadosResposta.players[k].x == i && dadosResposta.players[k].y == j){
                                        document.getElementById('campo20').title = dadosResposta.players[k].username + " nivel: " + dadosResposta.players[k].nivel.toString() + " hp: " + dadosResposta.players[k].hp.toString();
                                    }
                                }
                            }
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]-1 && j == posicaoDoPersonagemNaMatriz[1]-2){
                            document.getElementById('campo21').src = caminhoImagem;
                            document.getElementById('campo21').title = "campo";
                            if(
                                matrizDoMapa[i][j] == 12 ||
                                matrizDoMapa[i][j] == 13 ||
                                matrizDoMapa[i][j] == 14 ||
                                matrizDoMapa[i][j] == 15
                            ){
                                for(let k = 0; k < dadosResposta.players.length; k++){
                                    if(dadosResposta.players[k].x == i && dadosResposta.players[k].y == j){
                                        document.getElementById('campo21').title = dadosResposta.players[k].username + " nivel: " + dadosResposta.players[k].nivel.toString() + " hp: " + dadosResposta.players[k].hp.toString();
                                    }
                                }
                            }
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]-1 && j == posicaoDoPersonagemNaMatriz[1]-1){
                            document.getElementById('campo22').src = caminhoImagem;
                            document.getElementById('campo22').title = "campo";
                            if(
                                matrizDoMapa[i][j] == 12 ||
                                matrizDoMapa[i][j] == 13 ||
                                matrizDoMapa[i][j] == 14 ||
                                matrizDoMapa[i][j] == 15
                            ){
                                for(let k = 0; k < dadosResposta.players.length; k++){
                                    if(dadosResposta.players[k].x == i && dadosResposta.players[k].y == j){
                                        document.getElementById('campo22').title = dadosResposta.players[k].username + " nivel: " + dadosResposta.players[k].nivel.toString() + " hp: " + dadosResposta.players[k].hp.toString();
                                    }
                                }
                            }
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]-1 && j == posicaoDoPersonagemNaMatriz[1]){
                            document.getElementById('campo23').src = caminhoImagem;
                            document.getElementById('campo23').title = "campo";
                            if(
                                matrizDoMapa[i][j] == 12 ||
                                matrizDoMapa[i][j] == 13 ||
                                matrizDoMapa[i][j] == 14 ||
                                matrizDoMapa[i][j] == 15
                            ){
                                for(let k = 0; k < dadosResposta.players.length; k++){
                                    if(dadosResposta.players[k].x == i && dadosResposta.players[k].y == j){
                                        document.getElementById('campo23').title = dadosResposta.players[k].username + " nivel: " + dadosResposta.players[k].nivel.toString() + " hp: " + dadosResposta.players[k].hp.toString();
                                    }
                                }
                            }
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]-1 && j == posicaoDoPersonagemNaMatriz[1]+1){
                            document.getElementById('campo24').src = caminhoImagem;
                            document.getElementById('campo24').title = "campo";
                            if(
                                matrizDoMapa[i][j] == 12 ||
                                matrizDoMapa[i][j] == 13 ||
                                matrizDoMapa[i][j] == 14 ||
                                matrizDoMapa[i][j] == 15
                            ){
                                for(let k = 0; k < dadosResposta.players.length; k++){
                                    if(dadosResposta.players[k].x == i && dadosResposta.players[k].y == j){
                                        document.getElementById('campo24').title = dadosResposta.players[k].username + " nivel: " + dadosResposta.players[k].nivel.toString() + " hp: " + dadosResposta.players[k].hp.toString();
                                    }
                                }
                            }
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]-1 && j == posicaoDoPersonagemNaMatriz[1]+2){
                            document.getElementById('campo25').src = caminhoImagem;
                            document.getElementById('campo25').title = "campo";
                            if(
                                matrizDoMapa[i][j] == 12 ||
                                matrizDoMapa[i][j] == 13 ||
                                matrizDoMapa[i][j] == 14 ||
                                matrizDoMapa[i][j] == 15
                            ){
                                for(let k = 0; k < dadosResposta.players.length; k++){
                                    if(dadosResposta.players[k].x == i && dadosResposta.players[k].y == j){
                                        document.getElementById('campo25').title = dadosResposta.players[k].username + " nivel: " + dadosResposta.players[k].nivel.toString() + " hp: " + dadosResposta.players[k].hp.toString();
                                    }
                                }
                            }
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]-1 && j == posicaoDoPersonagemNaMatriz[1]+3){
                            document.getElementById('campo26').src = caminhoImagem;
                            document.getElementById('campo26').title = "campo";
                            if(
                                matrizDoMapa[i][j] == 12 ||
                                matrizDoMapa[i][j] == 13 ||
                                matrizDoMapa[i][j] == 14 ||
                                matrizDoMapa[i][j] == 15
                            ){
                                for(let k = 0; k < dadosResposta.players.length; k++){
                                    if(dadosResposta.players[k].x == i && dadosResposta.players[k].y == j){
                                        document.getElementById('campo26').title = dadosResposta.players[k].username + " nivel: " + dadosResposta.players[k].nivel.toString() + " hp: " + dadosResposta.players[k].hp.toString();
                                    }
                                }
                            }
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]-1 && j == posicaoDoPersonagemNaMatriz[1]+4){
                            document.getElementById('campo27').src = caminhoImagem;
                            document.getElementById('campo27').title = "campo";
                            if(
                                matrizDoMapa[i][j] == 12 ||
                                matrizDoMapa[i][j] == 13 ||
                                matrizDoMapa[i][j] == 14 ||
                                matrizDoMapa[i][j] == 15
                            ){
                                for(let k = 0; k < dadosResposta.players.length; k++){
                                    if(dadosResposta.players[k].x == i && dadosResposta.players[k].y == j){
                                        document.getElementById('campo27').title = dadosResposta.players[k].username + " nivel: " + dadosResposta.players[k].nivel.toString() + " hp: " + dadosResposta.players[k].hp.toString();
                                    }
                                }
                            }
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0] && j == posicaoDoPersonagemNaMatriz[1]-4){
                            document.getElementById('campo28').src = caminhoImagem;
                            document.getElementById('campo28').title = "campo";
                            if(
                                matrizDoMapa[i][j] == 12 ||
                                matrizDoMapa[i][j] == 13 ||
                                matrizDoMapa[i][j] == 14 ||
                                matrizDoMapa[i][j] == 15
                            ){
                                for(let k = 0; k < dadosResposta.players.length; k++){
                                    if(dadosResposta.players[k].x == i && dadosResposta.players[k].y == j){
                                        document.getElementById('campo28').title = dadosResposta.players[k].username + " nivel: " + dadosResposta.players[k].nivel.toString() + " hp: " + dadosResposta.players[k].hp.toString();
                                    }
                                }
                            }
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0] && j == posicaoDoPersonagemNaMatriz[1]-3){
                            document.getElementById('campo29').src = caminhoImagem;
                            document.getElementById('campo29').title = "campo";
                            if(
                                matrizDoMapa[i][j] == 12 ||
                                matrizDoMapa[i][j] == 13 ||
                                matrizDoMapa[i][j] == 14 ||
                                matrizDoMapa[i][j] == 15
                            ){
                                for(let k = 0; k < dadosResposta.players.length; k++){
                                    if(dadosResposta.players[k].x == i && dadosResposta.players[k].y == j){
                                        document.getElementById('campo29').title = dadosResposta.players[k].username + " nivel: " + dadosResposta.players[k].nivel.toString() + " hp: " + dadosResposta.players[k].hp.toString();
                                    }
                                }
                            }
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0] && j == posicaoDoPersonagemNaMatriz[1]-2){
                            document.getElementById('campo30').src = caminhoImagem;
                            document.getElementById('campo30').title = "campo";
                            if(
                                matrizDoMapa[i][j] == 12 ||
                                matrizDoMapa[i][j] == 13 ||
                                matrizDoMapa[i][j] == 14 ||
                                matrizDoMapa[i][j] == 15
                            ){
                                for(let k = 0; k < dadosResposta.players.length; k++){
                                    if(dadosResposta.players[k].x == i && dadosResposta.players[k].y == j){
                                        document.getElementById('campo30').title = dadosResposta.players[k].username + " nivel: " + dadosResposta.players[k].nivel.toString() + " hp: " + dadosResposta.players[k].hp.toString();
                                    }
                                }
                            }
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0] && j == posicaoDoPersonagemNaMatriz[1]-1){
                            document.getElementById('campo31').src = caminhoImagem;
                            document.getElementById('campo31').title = "campo";
                            if(
                                matrizDoMapa[i][j] == 12 ||
                                matrizDoMapa[i][j] == 13 ||
                                matrizDoMapa[i][j] == 14 ||
                                matrizDoMapa[i][j] == 15
                            ){
                                for(let k = 0; k < dadosResposta.players.length; k++){
                                    if(dadosResposta.players[k].x == i && dadosResposta.players[k].y == j){
                                        document.getElementById('campo31').title = dadosResposta.players[k].username + " nivel: " + dadosResposta.players[k].nivel.toString() + " hp: " + dadosResposta.players[k].hp.toString();
                                    }
                                }
                            }
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0] && j == posicaoDoPersonagemNaMatriz[1]){
                            document.getElementById('campo32').src = caminhoImagem;
                            document.getElementById('campo32').title = "campo";
                            if(
                                matrizDoMapa[i][j] == 12 ||
                                matrizDoMapa[i][j] == 13 ||
                                matrizDoMapa[i][j] == 14 ||
                                matrizDoMapa[i][j] == 15
                            ){
                                for(let k = 0; k < dadosResposta.players.length; k++){
                                    if(dadosResposta.players[k].x == i && dadosResposta.players[k].y == j){
                                        document.getElementById('campo32').title = dadosResposta.players[k].username + " nivel: " + dadosResposta.players[k].nivel.toString() + " hp: " + dadosResposta.players[k].hp.toString();
                                    }
                                }
                            }
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0] && j == posicaoDoPersonagemNaMatriz[1]+1){
                            document.getElementById('campo33').src = caminhoImagem;
                            document.getElementById('campo33').title = "campo";
                            if(
                                matrizDoMapa[i][j] == 12 ||
                                matrizDoMapa[i][j] == 13 ||
                                matrizDoMapa[i][j] == 14 ||
                                matrizDoMapa[i][j] == 15
                            ){
                                for(let k = 0; k < dadosResposta.players.length; k++){
                                    if(dadosResposta.players[k].x == i && dadosResposta.players[k].y == j){
                                        document.getElementById('campo33').title = dadosResposta.players[k].username + " nivel: " + dadosResposta.players[k].nivel.toString() + " hp: " + dadosResposta.players[k].hp.toString();
                                    }
                                }
                            }
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0] && j == posicaoDoPersonagemNaMatriz[1]+2){
                            document.getElementById('campo34').src = caminhoImagem;
                            document.getElementById('campo34').title = "campo";
                            if(
                                matrizDoMapa[i][j] == 12 ||
                                matrizDoMapa[i][j] == 13 ||
                                matrizDoMapa[i][j] == 14 ||
                                matrizDoMapa[i][j] == 15
                            ){
                                for(let k = 0; k < dadosResposta.players.length; k++){
                                    if(dadosResposta.players[k].x == i && dadosResposta.players[k].y == j){
                                        document.getElementById('campo34').title = dadosResposta.players[k].username + " nivel: " + dadosResposta.players[k].nivel.toString() + " hp: " + dadosResposta.players[k].hp.toString();
                                    }
                                }
                            }
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0] && j == posicaoDoPersonagemNaMatriz[1]+3){
                            document.getElementById('campo35').src = caminhoImagem;
                            document.getElementById('campo35').title = "campo";
                            if(
                                matrizDoMapa[i][j] == 12 ||
                                matrizDoMapa[i][j] == 13 ||
                                matrizDoMapa[i][j] == 14 ||
                                matrizDoMapa[i][j] == 15
                            ){
                                for(let k = 0; k < dadosResposta.players.length; k++){
                                    if(dadosResposta.players[k].x == i && dadosResposta.players[k].y == j){
                                        document.getElementById('campo35').title = dadosResposta.players[k].username + " nivel: " + dadosResposta.players[k].nivel.toString() + " hp: " + dadosResposta.players[k].hp.toString();
                                    }
                                }
                            }
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0] && j == posicaoDoPersonagemNaMatriz[1]+4){
                            document.getElementById('campo36').src = caminhoImagem;
                            document.getElementById('campo36').title = "campo";
                            if(
                                matrizDoMapa[i][j] == 12 ||
                                matrizDoMapa[i][j] == 13 ||
                                matrizDoMapa[i][j] == 14 ||
                                matrizDoMapa[i][j] == 15
                            ){
                                for(let k = 0; k < dadosResposta.players.length; k++){
                                    if(dadosResposta.players[k].x == i && dadosResposta.players[k].y == j){
                                        document.getElementById('campo36').title = dadosResposta.players[k].username + " nivel: " + dadosResposta.players[k].nivel.toString() + " hp: " + dadosResposta.players[k].hp.toString();
                                    }
                                }
                            }
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]+1 && j == posicaoDoPersonagemNaMatriz[1]-4){
                            document.getElementById('campo37').src = caminhoImagem;
                            document.getElementById('campo37').title = "campo";
                            if(
                                matrizDoMapa[i][j] == 12 ||
                                matrizDoMapa[i][j] == 13 ||
                                matrizDoMapa[i][j] == 14 ||
                                matrizDoMapa[i][j] == 15
                            ){
                                for(let k = 0; k < dadosResposta.players.length; k++){
                                    if(dadosResposta.players[k].x == i && dadosResposta.players[k].y == j){
                                        document.getElementById('campo37').title = dadosResposta.players[k].username + " nivel: " + dadosResposta.players[k].nivel.toString() + " hp: " + dadosResposta.players[k].hp.toString();
                                    }
                                }
                            }
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]+1 && j == posicaoDoPersonagemNaMatriz[1]-3){
                            document.getElementById('campo38').src = caminhoImagem;
                            document.getElementById('campo38').title = "campo";
                            if(
                                matrizDoMapa[i][j] == 12 ||
                                matrizDoMapa[i][j] == 13 ||
                                matrizDoMapa[i][j] == 14 ||
                                matrizDoMapa[i][j] == 15
                            ){
                                for(let k = 0; k < dadosResposta.players.length; k++){
                                    if(dadosResposta.players[k].x == i && dadosResposta.players[k].y == j){
                                        document.getElementById('campo38').title = dadosResposta.players[k].username + " nivel: " + dadosResposta.players[k].nivel.toString() + " hp: " + dadosResposta.players[k].hp.toString();
                                    }
                                }
                            }
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]+1 && j == posicaoDoPersonagemNaMatriz[1]-2){
                            document.getElementById('campo39').src = caminhoImagem;
                            document.getElementById('campo39').title = "campo";
                            if(
                                matrizDoMapa[i][j] == 12 ||
                                matrizDoMapa[i][j] == 13 ||
                                matrizDoMapa[i][j] == 14 ||
                                matrizDoMapa[i][j] == 15
                            ){
                                for(let k = 0; k < dadosResposta.players.length; k++){
                                    if(dadosResposta.players[k].x == i && dadosResposta.players[k].y == j){
                                        document.getElementById('campo39').title = dadosResposta.players[k].username + " nivel: " + dadosResposta.players[k].nivel.toString() + " hp: " + dadosResposta.players[k].hp.toString();
                                    }
                                }
                            }
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]+1 && j == posicaoDoPersonagemNaMatriz[1]-1){
                            document.getElementById('campo40').src = caminhoImagem;
                            document.getElementById('campo40').title = "campo";
                            if(
                                matrizDoMapa[i][j] == 12 ||
                                matrizDoMapa[i][j] == 13 ||
                                matrizDoMapa[i][j] == 14 ||
                                matrizDoMapa[i][j] == 15
                            ){
                                for(let k = 0; k < dadosResposta.players.length; k++){
                                    if(dadosResposta.players[k].x == i && dadosResposta.players[k].y == j){
                                        document.getElementById('campo40').title = dadosResposta.players[k].username + " nivel: " + dadosResposta.players[k].nivel.toString() + " hp: " + dadosResposta.players[k].hp.toString();
                                    }
                                }
                            }
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]+1 && j == posicaoDoPersonagemNaMatriz[1]){
                            document.getElementById('campo41').src = caminhoImagem;
                            document.getElementById('campo41').title = "campo";
                            if(
                                matrizDoMapa[i][j] == 12 ||
                                matrizDoMapa[i][j] == 13 ||
                                matrizDoMapa[i][j] == 14 ||
                                matrizDoMapa[i][j] == 15
                            ){
                                for(let k = 0; k < dadosResposta.players.length; k++){
                                    if(dadosResposta.players[k].x == i && dadosResposta.players[k].y == j){
                                        document.getElementById('campo41').title = dadosResposta.players[k].username + " nivel: " + dadosResposta.players[k].nivel.toString() + " hp: " + dadosResposta.players[k].hp.toString();
                                    }
                                }
                            }
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]+1 && j == posicaoDoPersonagemNaMatriz[1]+1){
                            document.getElementById('campo42').src = caminhoImagem;
                            document.getElementById('campo42').title = "campo";
                            if(
                                matrizDoMapa[i][j] == 12 ||
                                matrizDoMapa[i][j] == 13 ||
                                matrizDoMapa[i][j] == 14 ||
                                matrizDoMapa[i][j] == 15
                            ){
                                for(let k = 0; k < dadosResposta.players.length; k++){
                                    if(dadosResposta.players[k].x == i && dadosResposta.players[k].y == j){
                                        document.getElementById('campo42').title = dadosResposta.players[k].username + " nivel: " + dadosResposta.players[k].nivel.toString() + " hp: " + dadosResposta.players[k].hp.toString();
                                    }
                                }
                            }
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]+1 && j == posicaoDoPersonagemNaMatriz[1]+2){
                            document.getElementById('campo43').src = caminhoImagem;
                            document.getElementById('campo43').title = "campo";
                            if(
                                matrizDoMapa[i][j] == 12 ||
                                matrizDoMapa[i][j] == 13 ||
                                matrizDoMapa[i][j] == 14 ||
                                matrizDoMapa[i][j] == 15
                            ){
                                for(let k = 0; k < dadosResposta.players.length; k++){
                                    if(dadosResposta.players[k].x == i && dadosResposta.players[k].y == j){
                                        document.getElementById('campo43').title = dadosResposta.players[k].username + " nivel: " + dadosResposta.players[k].nivel.toString() + " hp: " + dadosResposta.players[k].hp.toString();
                                    }
                                }
                            }
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]+1 && j == posicaoDoPersonagemNaMatriz[1]+3){
                            document.getElementById('campo44').src = caminhoImagem;
                            document.getElementById('campo44').title = "campo";
                            if(
                                matrizDoMapa[i][j] == 12 ||
                                matrizDoMapa[i][j] == 13 ||
                                matrizDoMapa[i][j] == 14 ||
                                matrizDoMapa[i][j] == 15
                            ){
                                for(let k = 0; k < dadosResposta.players.length; k++){
                                    if(dadosResposta.players[k].x == i && dadosResposta.players[k].y == j){
                                        document.getElementById('campo44').title = dadosResposta.players[k].username + " nivel: " + dadosResposta.players[k].nivel.toString() + " hp: " + dadosResposta.players[k].hp.toString();
                                    }
                                }
                            }
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]+1 && j == posicaoDoPersonagemNaMatriz[1]+4){
                            document.getElementById('campo45').src = caminhoImagem;
                            document.getElementById('campo45').title = "campo";
                            if(
                                matrizDoMapa[i][j] == 12 ||
                                matrizDoMapa[i][j] == 13 ||
                                matrizDoMapa[i][j] == 14 ||
                                matrizDoMapa[i][j] == 15
                            ){
                                for(let k = 0; k < dadosResposta.players.length; k++){
                                    if(dadosResposta.players[k].x == i && dadosResposta.players[k].y == j){
                                        document.getElementById('campo45').title = dadosResposta.players[k].username + " nivel: " + dadosResposta.players[k].nivel.toString() + " hp: " + dadosResposta.players[k].hp.toString();
                                    }
                                }
                            }
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]+2 && j == posicaoDoPersonagemNaMatriz[1]-4){
                            document.getElementById('campo46').src = caminhoImagem;
                            document.getElementById('campo46').title = "campo";
                            if(
                                matrizDoMapa[i][j] == 12 ||
                                matrizDoMapa[i][j] == 13 ||
                                matrizDoMapa[i][j] == 14 ||
                                matrizDoMapa[i][j] == 15
                            ){
                                for(let k = 0; k < dadosResposta.players.length; k++){
                                    if(dadosResposta.players[k].x == i && dadosResposta.players[k].y == j){
                                        document.getElementById('campo46').title = dadosResposta.players[k].username + " nivel: " + dadosResposta.players[k].nivel.toString() + " hp: " + dadosResposta.players[k].hp.toString();
                                    }
                                }
                            }
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]+2 && j == posicaoDoPersonagemNaMatriz[1]-3){
                            document.getElementById('campo47').src = caminhoImagem;
                            document.getElementById('campo47').title = "campo";
                            if(
                                matrizDoMapa[i][j] == 12 ||
                                matrizDoMapa[i][j] == 13 ||
                                matrizDoMapa[i][j] == 14 ||
                                matrizDoMapa[i][j] == 15
                            ){
                                for(let k = 0; k < dadosResposta.players.length; k++){
                                    if(dadosResposta.players[k].x == i && dadosResposta.players[k].y == j){
                                        document.getElementById('campo47').title = dadosResposta.players[k].username + " nivel: " + dadosResposta.players[k].nivel.toString() + " hp: " + dadosResposta.players[k].hp.toString();
                                    }
                                }
                            }
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]+2 && j == posicaoDoPersonagemNaMatriz[1]-2){
                            document.getElementById('campo48').src = caminhoImagem;
                            document.getElementById('campo48').title = "campo";
                            if(
                                matrizDoMapa[i][j] == 12 ||
                                matrizDoMapa[i][j] == 13 ||
                                matrizDoMapa[i][j] == 14 ||
                                matrizDoMapa[i][j] == 15
                            ){
                                for(let k = 0; k < dadosResposta.players.length; k++){
                                    if(dadosResposta.players[k].x == i && dadosResposta.players[k].y == j){
                                        document.getElementById('campo48').title = dadosResposta.players[k].username + " nivel: " + dadosResposta.players[k].nivel.toString() + " hp: " + dadosResposta.players[k].hp.toString();
                                    }
                                }
                            }
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]+2 && j == posicaoDoPersonagemNaMatriz[1]-1){
                            document.getElementById('campo49').src = caminhoImagem;
                            document.getElementById('campo49').title = "campo";
                            if(
                                matrizDoMapa[i][j] == 12 ||
                                matrizDoMapa[i][j] == 13 ||
                                matrizDoMapa[i][j] == 14 ||
                                matrizDoMapa[i][j] == 15
                            ){
                                for(let k = 0; k < dadosResposta.players.length; k++){
                                    if(dadosResposta.players[k].x == i && dadosResposta.players[k].y == j){
                                        document.getElementById('campo49').title = dadosResposta.players[k].username + " nivel: " + dadosResposta.players[k].nivel.toString() + " hp: " + dadosResposta.players[k].hp.toString();
                                    }
                                }
                            }
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]+2 && j == posicaoDoPersonagemNaMatriz[1]){
                            document.getElementById('campo50').src = caminhoImagem;
                            document.getElementById('campo50').title = "campo";
                            if(
                                matrizDoMapa[i][j] == 12 ||
                                matrizDoMapa[i][j] == 13 ||
                                matrizDoMapa[i][j] == 14 ||
                                matrizDoMapa[i][j] == 15
                            ){
                                for(let k = 0; k < dadosResposta.players.length; k++){
                                    if(dadosResposta.players[k].x == i && dadosResposta.players[k].y == j){
                                        document.getElementById('campo50').title = dadosResposta.players[k].username + " nivel: " + dadosResposta.players[k].nivel.toString() + " hp: " + dadosResposta.players[k].hp.toString();
                                    }
                                }
                            }
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]+2 && j == posicaoDoPersonagemNaMatriz[1]+1){
                            document.getElementById('campo51').src = caminhoImagem;
                            document.getElementById('campo51').title = "campo";
                            if(
                                matrizDoMapa[i][j] == 12 ||
                                matrizDoMapa[i][j] == 13 ||
                                matrizDoMapa[i][j] == 14 ||
                                matrizDoMapa[i][j] == 15
                            ){
                                for(let k = 0; k < dadosResposta.players.length; k++){
                                    if(dadosResposta.players[k].x == i && dadosResposta.players[k].y == j){
                                        document.getElementById('campo51').title = dadosResposta.players[k].username + " nivel: " + dadosResposta.players[k].nivel.toString() + " hp: " + dadosResposta.players[k].hp.toString();
                                    }
                                }
                            }
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]+2 && j == posicaoDoPersonagemNaMatriz[1]+2){
                            document.getElementById('campo52').src = caminhoImagem;
                            document.getElementById('campo52').title = "campo";
                            if(
                                matrizDoMapa[i][j] == 12 ||
                                matrizDoMapa[i][j] == 13 ||
                                matrizDoMapa[i][j] == 14 ||
                                matrizDoMapa[i][j] == 15
                            ){
                                for(let k = 0; k < dadosResposta.players.length; k++){
                                    if(dadosResposta.players[k].x == i && dadosResposta.players[k].y == j){
                                        document.getElementById('campo52').title = dadosResposta.players[k].username + " nivel: " + dadosResposta.players[k].nivel.toString() + " hp: " + dadosResposta.players[k].hp.toString();
                                    }
                                }
                            }
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]+2 && j == posicaoDoPersonagemNaMatriz[1]+3){
                            document.getElementById('campo53').src = caminhoImagem;
                            document.getElementById('campo53').title = "campo";
                            if(
                                matrizDoMapa[i][j] == 12 ||
                                matrizDoMapa[i][j] == 13 ||
                                matrizDoMapa[i][j] == 14 ||
                                matrizDoMapa[i][j] == 15
                            ){
                                for(let k = 0; k < dadosResposta.players.length; k++){
                                    if(dadosResposta.players[k].x == i && dadosResposta.players[k].y == j){
                                        document.getElementById('campo53').title = dadosResposta.players[k].username + " nivel: " + dadosResposta.players[k].nivel.toString() + " hp: " + dadosResposta.players[k].hp.toString();
                                    }
                                }
                            }
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]+2 && j == posicaoDoPersonagemNaMatriz[1]+4){
                            document.getElementById('campo54').src = caminhoImagem;
                            document.getElementById('campo54').title = "campo";
                            if(
                                matrizDoMapa[i][j] == 12 ||
                                matrizDoMapa[i][j] == 13 ||
                                matrizDoMapa[i][j] == 14 ||
                                matrizDoMapa[i][j] == 15
                            ){
                                for(let k = 0; k < dadosResposta.players.length; k++){
                                    if(dadosResposta.players[k].x == i && dadosResposta.players[k].y == j){
                                        document.getElementById('campo54').title = dadosResposta.players[k].username + " nivel: " + dadosResposta.players[k].nivel.toString() + " hp: " + dadosResposta.players[k].hp.toString();
                                    }
                                }
                            }
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]+3 && j == posicaoDoPersonagemNaMatriz[1]-4){
                            document.getElementById('campo55').src = caminhoImagem;
                            document.getElementById('campo55').title = "campo";
                            if(
                                matrizDoMapa[i][j] == 12 ||
                                matrizDoMapa[i][j] == 13 ||
                                matrizDoMapa[i][j] == 14 ||
                                matrizDoMapa[i][j] == 15
                            ){
                                for(let k = 0; k < dadosResposta.players.length; k++){
                                    if(dadosResposta.players[k].x == i && dadosResposta.players[k].y == j){
                                        document.getElementById('campo55').title = dadosResposta.players[k].username + " nivel: " + dadosResposta.players[k].nivel.toString() + " hp: " + dadosResposta.players[k].hp.toString();
                                    }
                                }
                            }
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]+3 && j == posicaoDoPersonagemNaMatriz[1]-3){
                            document.getElementById('campo56').src = caminhoImagem;
                            document.getElementById('campo56').title = "campo";
                            if(
                                matrizDoMapa[i][j] == 12 ||
                                matrizDoMapa[i][j] == 13 ||
                                matrizDoMapa[i][j] == 14 ||
                                matrizDoMapa[i][j] == 15
                            ){
                                for(let k = 0; k < dadosResposta.players.length; k++){
                                    if(dadosResposta.players[k].x == i && dadosResposta.players[k].y == j){
                                        document.getElementById('campo56').title = dadosResposta.players[k].username + " nivel: " + dadosResposta.players[k].nivel.toString() + " hp: " + dadosResposta.players[k].hp.toString();
                                    }
                                }
                            }
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]+3 && j == posicaoDoPersonagemNaMatriz[1]-2){
                            document.getElementById('campo57').src = caminhoImagem;
                            document.getElementById('campo57').title = "campo";
                            if(
                                matrizDoMapa[i][j] == 12 ||
                                matrizDoMapa[i][j] == 13 ||
                                matrizDoMapa[i][j] == 14 ||
                                matrizDoMapa[i][j] == 15
                            ){
                                for(let k = 0; k < dadosResposta.players.length; k++){
                                    if(dadosResposta.players[k].x == i && dadosResposta.players[k].y == j){
                                        document.getElementById('campo57').title = dadosResposta.players[k].username + " nivel: " + dadosResposta.players[k].nivel.toString() + " hp: " + dadosResposta.players[k].hp.toString();
                                    }
                                }
                            }
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]+3 && j == posicaoDoPersonagemNaMatriz[1]-1){
                            document.getElementById('campo58').src = caminhoImagem;
                            document.getElementById('campo58').title = "campo";
                            if(
                                matrizDoMapa[i][j] == 12 ||
                                matrizDoMapa[i][j] == 13 ||
                                matrizDoMapa[i][j] == 14 ||
                                matrizDoMapa[i][j] == 15
                            ){
                                for(let k = 0; k < dadosResposta.players.length; k++){
                                    if(dadosResposta.players[k].x == i && dadosResposta.players[k].y == j){
                                        document.getElementById('campo58').title = dadosResposta.players[k].username + " nivel: " + dadosResposta.players[k].nivel.toString() + " hp: " + dadosResposta.players[k].hp.toString();
                                    }
                                }
                            }
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]+3 && j == posicaoDoPersonagemNaMatriz[1]){
                            document.getElementById('campo59').src = caminhoImagem;
                            document.getElementById('campo59').title = "campo";
                            if(
                                matrizDoMapa[i][j] == 12 ||
                                matrizDoMapa[i][j] == 13 ||
                                matrizDoMapa[i][j] == 14 ||
                                matrizDoMapa[i][j] == 15
                            ){
                                for(let k = 0; k < dadosResposta.players.length; k++){
                                    if(dadosResposta.players[k].x == i && dadosResposta.players[k].y == j){
                                        document.getElementById('campo59').title = dadosResposta.players[k].username + " nivel: " + dadosResposta.players[k].nivel.toString() + " hp: " + dadosResposta.players[k].hp.toString();
                                    }
                                }
                            }
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]+3 && j == posicaoDoPersonagemNaMatriz[1]+1){
                            document.getElementById('campo60').src = caminhoImagem;
                            document.getElementById('campo60').title = "campo";
                            if(
                                matrizDoMapa[i][j] == 12 ||
                                matrizDoMapa[i][j] == 13 ||
                                matrizDoMapa[i][j] == 14 ||
                                matrizDoMapa[i][j] == 15
                            ){
                                for(let k = 0; k < dadosResposta.players.length; k++){
                                    if(dadosResposta.players[k].x == i && dadosResposta.players[k].y == j){
                                        document.getElementById('campo60').title = dadosResposta.players[k].username + " nivel: " + dadosResposta.players[k].nivel.toString() + " hp: " + dadosResposta.players[k].hp.toString();
                                    }
                                }
                            }
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]+3 && j == posicaoDoPersonagemNaMatriz[1]+2){
                            document.getElementById('campo61').src = caminhoImagem;
                            document.getElementById('campo61').title = "campo";
                            if(
                                matrizDoMapa[i][j] == 12 ||
                                matrizDoMapa[i][j] == 13 ||
                                matrizDoMapa[i][j] == 14 ||
                                matrizDoMapa[i][j] == 15
                            ){
                                for(let k = 0; k < dadosResposta.players.length; k++){
                                    if(dadosResposta.players[k].x == i && dadosResposta.players[k].y == j){
                                        document.getElementById('campo61').title = dadosResposta.players[k].username + " nivel: " + dadosResposta.players[k].nivel.toString() + " hp: " + dadosResposta.players[k].hp.toString();
                                    }
                                }
                            }
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]+3 && j == posicaoDoPersonagemNaMatriz[1]+3){
                            document.getElementById('campo62').src = caminhoImagem;
                            document.getElementById('campo62').title = "campo";
                            if(
                                matrizDoMapa[i][j] == 12 ||
                                matrizDoMapa[i][j] == 13 ||
                                matrizDoMapa[i][j] == 14 ||
                                matrizDoMapa[i][j] == 15
                            ){
                                for(let k = 0; k < dadosResposta.players.length; k++){
                                    if(dadosResposta.players[k].x == i && dadosResposta.players[k].y == j){
                                        document.getElementById('campo62').title = dadosResposta.players[k].username + " nivel: " + dadosResposta.players[k].nivel.toString() + " hp: " + dadosResposta.players[k].hp.toString();
                                    }
                                }
                            }
                        }
                        if(i == posicaoDoPersonagemNaMatriz[0]+3 && j == posicaoDoPersonagemNaMatriz[1]+4){
                            document.getElementById('campo63').src = caminhoImagem;
                            document.getElementById('campo63').title = "campo";
                            if(
                                matrizDoMapa[i][j] == 12 ||
                                matrizDoMapa[i][j] == 13 ||
                                matrizDoMapa[i][j] == 14 ||
                                matrizDoMapa[i][j] == 15
                            ){
                                for(let k = 0; k < dadosResposta.players.length; k++){
                                    if(dadosResposta.players[k].x == i && dadosResposta.players[k].y == j){
                                        document.getElementById('campo63').title = dadosResposta.players[k].username + " nivel: " + dadosResposta.players[k].nivel.toString() + " hp: " + dadosResposta.players[k].hp.toString();
                                    }
                                }
                            }
                        }
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

            function moverCima(){
                if(document.getElementById('mensagem1').style.visibility == 'hidden'){if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 0 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 4 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 6 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 7 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 12 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 13 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 14 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 15){ posicaoDoPersonagemNaMatriz[0] = posicaoDoPersonagemNaMatriz[0] - 1; preencherImagens(); if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]] == 7){nivelDeSolo++; document.getElementById('personagem1').style.top = parseInt(document.getElementById('personagem1').style.top.split('p')[0]) - 10; document.getElementById('personagem1').style.left = parseInt(document.getElementById('personagem1').style.left.split('p')[0]) - 10;} if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 7){nivelDeSolo--; document.getElementById('personagem1').style.top = parseInt(document.getElementById('personagem1').style.top.split('p')[0]) + 10; document.getElementById('personagem1').style.left = parseInt(document.getElementById('personagem1').style.left.split('p')[0]) + 10;}}else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 2){ mochila[0] = 'PocaoHP'; document.getElementById('itemCampoDaMochila1').src = 'imagens/imagemPocaoHP.png'; document.getElementById('itemCampoDaMochila1').alt = 'pocao hp'; document.getElementById('itemCampoDaMochila1').title = 'pocao hp'; mochila[1] = 'Corda'; document.getElementById('itemCampoDaMochila2').src = 'imagens/imagemCorda.png'; document.getElementById('itemCampoDaMochila2').alt = 'corda'; document.getElementById('itemCampoDaMochila2').title = 'corda'; mochila[2] = 'Pa'; document.getElementById('itemCampoDaMochila3').src = 'imagens/imagemPa.png'; document.getElementById('itemCampoDaMochila3').alt = 'pa'; document.getElementById('itemCampoDaMochila3').title = 'pa'; document.getElementById('fala1').src = 'imagens/imagemFalaDeposit.png'; setTimeout(function(){ document.getElementById('fala1').src = 'imagens/imagemFalaVazia.png';}, 1000); matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] = 3;}else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 3){document.getElementById('fala1').src = 'imagens/imagemFalaItemVazio.png'; setTimeout(function(){ document.getElementById('fala1').src = 'imagens/imagemFalaVazia.png';}, 1000);}else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 5){posicaoDoPersonagemNaMatriz[0] = posicaoDoPersonagemNaMatriz[0]-11; posicaoDoPersonagemNaMatriz[1] = posicaoDoPersonagemNaMatriz[1]; preencherImagens();}else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 8 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 9){matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] = 10; if(nivel <= 100){ nivel += 10;}else if(nivel <= 200){nivel += 9;}else if(nivel <= 300){nivel += 8;}else if(nivel <= 400){nivel += 7;}else if(nivel <= 500){nivel += 6;}else if(nivel <= 600){nivel += 5;}else if(nivel <= 700){nivel += 4;}else if(nivel <= 800){nivel += 3;}else if(nivel <= 900){nivel += 2;}else if(nivel <= 1000){nivel += 1;} hpmax = ((nivel-1) * 30) + 176; preencherImagens();}else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 16 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 17){matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] = 18; if(nivel <= 1100){ nivel += 10;}else if(nivel <= 1200){nivel += 9;}else if(nivel <= 1300){nivel += 8;}else if(nivel <= 1400){nivel += 7;}else if(nivel <= 1500){nivel += 6;}else if(nivel <= 1600){nivel += 5;}else if(nivel <= 1700){nivel += 4;}else if(nivel <= 1800){nivel += 3;}else if(nivel <= 2000){nivel += 2;}else if(nivel <= 10000){nivel += 1;} hpmax = ((nivel-1) * 30) + 176; preencherImagens();}else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 19 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 20){matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] = 21; if(nivel <= 2100){ nivel += 10;}else if(nivel <= 2200){nivel += 9;}else if(nivel <= 2300){nivel += 8;}else if(nivel <= 2400){nivel += 7;}else if(nivel <= 2500){nivel += 6;}else if(nivel <= 2600){nivel += 5;}else if(nivel <= 2700){nivel += 4;}else if(nivel <= 2800){nivel += 3;}else if(nivel <= 10000){nivel += 2;}else if(nivel > 10000){nivel += 1;} hpmax = ((nivel-1) * 30) + 176; preencherImagens();} direcaoDoPersonagem = 0; document.getElementById('personagem1').src = 'imagens/imagemPersonagemDeCostas.png'; run_ajax();}
            }

            function moverEsquerda(){
                if(document.getElementById('mensagem1').style.visibility == 'hidden'){if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 0 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 4 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 6 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 7 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 12 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 13 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 14 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 15){ posicaoDoPersonagemNaMatriz[1] = posicaoDoPersonagemNaMatriz[1] - 1; preencherImagens(); if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]] == 7){nivelDeSolo++; document.getElementById('personagem1').style.top = parseInt(document.getElementById('personagem1').style.top.split('p')[0]) - 10; document.getElementById('personagem1').style.left = parseInt(document.getElementById('personagem1').style.left.split('p')[0]) - 10;} if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 7){nivelDeSolo--; document.getElementById('personagem1').style.top = parseInt(document.getElementById('personagem1').style.top.split('p')[0]) + 10; document.getElementById('personagem1').style.left = parseInt(document.getElementById('personagem1').style.left.split('p')[0]) + 10;}}else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 2){ mochila[0] = 'PocaoHP'; document.getElementById('itemCampoDaMochila1').src = 'imagens/imagemPocaoHP.png'; document.getElementById('itemCampoDaMochila1').alt = 'pocao hp'; document.getElementById('itemCampoDaMochila1').title = 'pocao hp'; mochila[1] = 'Corda'; document.getElementById('itemCampoDaMochila2').src = 'imagens/imagemCorda.png'; document.getElementById('itemCampoDaMochila2').alt = 'corda'; document.getElementById('itemCampoDaMochila2').title = 'corda'; mochila[2] = 'Pa'; document.getElementById('itemCampoDaMochila3').src = 'imagens/imagemPa.png'; document.getElementById('itemCampoDaMochila3').alt = 'pa'; document.getElementById('itemCampoDaMochila3').title = 'pa'; document.getElementById('fala1').src = 'imagens/imagemFalaDeposit.png'; setTimeout(function(){ document.getElementById('fala1').src = 'imagens/imagemFalaVazia.png';}, 1000); matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] = 3;}else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 3){document.getElementById('fala1').src = 'imagens/imagemFalaItemVazio.png'; setTimeout(function(){ document.getElementById('fala1').src = 'imagens/imagemFalaVazia.png';}, 1000);}else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 5){ posicaoDoPersonagemNaMatriz[0] = posicaoDoPersonagemNaMatriz[0]-10; posicaoDoPersonagemNaMatriz[1] = posicaoDoPersonagemNaMatriz[1]-1; preencherImagens();}else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 8 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 9){matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] = 10; if(nivel <= 100){ nivel += 10;}else if(nivel <= 200){nivel += 9;}else if(nivel <= 300){nivel += 8;}else if(nivel <= 400){nivel += 7;}else if(nivel <= 500){nivel += 6;}else if(nivel <= 600){nivel += 5;}else if(nivel <= 700){nivel += 4;}else if(nivel <= 800){nivel += 3;}else if(nivel <= 900){nivel += 2;}else if(nivel <= 1000){nivel += 1;} hpmax = ((nivel-1) * 30) + 176; preencherImagens();}else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 16 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 17){matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] = 18; if(nivel <= 1100){ nivel += 10;}else if(nivel <= 1200){nivel += 9;}else if(nivel <= 1300){nivel += 8;}else if(nivel <= 1400){nivel += 7;}else if(nivel <= 1500){nivel += 6;}else if(nivel <= 1600){nivel += 5;}else if(nivel <= 1700){nivel += 4;}else if(nivel <= 1800){nivel += 3;}else if(nivel <= 2000){nivel += 2;}else if(nivel <= 10000){nivel += 1;} hpmax = ((nivel-1) * 30) + 176; preencherImagens();}else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 19 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 20){matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] = 21; if(nivel <= 2100){ nivel += 10;}else if(nivel <= 2200){nivel += 9;}else if(nivel <= 2300){nivel += 8;}else if(nivel <= 2400){nivel += 7;}else if(nivel <= 2500){nivel += 6;}else if(nivel <= 2600){nivel += 5;}else if(nivel <= 2700){nivel += 4;}else if(nivel <= 2800){nivel += 3;}else if(nivel <= 10000){nivel += 2;}else if(nivel > 10000){nivel += 1;} hpmax = ((nivel-1) * 30) + 176; preencherImagens();} direcaoDoPersonagem = 3; document.getElementById('personagem1').src = 'imagens/imagemPersonagemDeEsquerda.png'; run_ajax();}
            }

            function moverDireita(){
                if(document.getElementById('mensagem1').style.visibility == 'hidden'){if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 0 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 4 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 6 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 7 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 12 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 13 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 14 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 15){ posicaoDoPersonagemNaMatriz[1] = posicaoDoPersonagemNaMatriz[1] + 1; preencherImagens(); if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]] == 7){nivelDeSolo++; document.getElementById('personagem1').style.top = parseInt(document.getElementById('personagem1').style.top.split('p')[0]) - 10; document.getElementById('personagem1').style.left = parseInt(document.getElementById('personagem1').style.left.split('p')[0]) - 10;} if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 7){nivelDeSolo--; document.getElementById('personagem1').style.top = parseInt(document.getElementById('personagem1').style.top.split('p')[0]) + 10; document.getElementById('personagem1').style.left = parseInt(document.getElementById('personagem1').style.left.split('p')[0]) + 10;}}else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 2){ mochila[0] = 'PocaoHP'; document.getElementById('itemCampoDaMochila1').src = 'imagens/imagemPocaoHP.png'; document.getElementById('itemCampoDaMochila1').alt = 'pocao hp'; document.getElementById('itemCampoDaMochila1').title = 'pocao hp'; mochila[1] = 'Corda'; document.getElementById('itemCampoDaMochila2').src = 'imagens/imagemCorda.png'; document.getElementById('itemCampoDaMochila2').alt = 'corda'; document.getElementById('itemCampoDaMochila2').title = 'corda'; mochila[2] = 'Pa'; document.getElementById('itemCampoDaMochila3').src = 'imagens/imagemPa.png'; document.getElementById('itemCampoDaMochila3').alt = 'pa'; document.getElementById('itemCampoDaMochila3').title = 'pa'; document.getElementById('fala1').src = 'imagens/imagemFalaDeposit.png'; setTimeout(function(){ document.getElementById('fala1').src = 'imagens/imagemFalaVazia.png';}, 1000); matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] = 3;}else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 3){document.getElementById('fala1').src = 'imagens/imagemFalaItemVazio.png'; setTimeout(function(){ document.getElementById('fala1').src = 'imagens/imagemFalaVazia.png';}, 1000);}else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 5){ posicaoDoPersonagemNaMatriz[0] = posicaoDoPersonagemNaMatriz[0]-10; posicaoDoPersonagemNaMatriz[1] = posicaoDoPersonagemNaMatriz[1]+1; preencherImagens();}else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 8 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 9){matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] = 10; if(nivel <= 100){ nivel += 10;}else if(nivel <= 200){nivel += 9;}else if(nivel <= 300){nivel += 8;}else if(nivel <= 400){nivel += 7;}else if(nivel <= 500){nivel += 6;}else if(nivel <= 600){nivel += 5;}else if(nivel <= 700){nivel += 4;}else if(nivel <= 800){nivel += 3;}else if(nivel <= 900){nivel += 2;}else if(nivel <= 1000){nivel += 1;} hpmax = ((nivel-1) * 30) + 176; preencherImagens();}else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 16 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 17){matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] = 18; if(nivel <= 1100){ nivel += 10;}else if(nivel <= 1200){nivel += 9;}else if(nivel <= 1300){nivel += 8;}else if(nivel <= 1400){nivel += 7;}else if(nivel <= 1500){nivel += 6;}else if(nivel <= 1600){nivel += 5;}else if(nivel <= 1700){nivel += 4;}else if(nivel <= 1800){nivel += 3;}else if(nivel <= 2000){nivel += 2;}else if(nivel <= 10000){nivel += 1;} hpmax = ((nivel-1) * 30) + 176; preencherImagens();}else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 19 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 20){matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] = 21; if(nivel <= 2100){ nivel += 10;}else if(nivel <= 2200){nivel += 9;}else if(nivel <= 2300){nivel += 8;}else if(nivel <= 2400){nivel += 7;}else if(nivel <= 2500){nivel += 6;}else if(nivel <= 2600){nivel += 5;}else if(nivel <= 2700){nivel += 4;}else if(nivel <= 2800){nivel += 3;}else if(nivel <= 10000){nivel += 2;}else if(nivel > 10000){nivel += 1;} hpmax = ((nivel-1) * 30) + 176; preencherImagens();} direcaoDoPersonagem = 1; document.getElementById('personagem1').src = 'imagens/imagemPersonagemDeDireita.png'; run_ajax();}
            }

            function moverBaixo(){
                if(document.getElementById('mensagem1').style.visibility == 'hidden'){if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 0 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 4 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 6 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 7 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 12 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 13 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 14 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 15){ posicaoDoPersonagemNaMatriz[0] = posicaoDoPersonagemNaMatriz[0] + 1; preencherImagens(); if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]] == 7){nivelDeSolo++; document.getElementById('personagem1').style.top = parseInt(document.getElementById('personagem1').style.top.split('p')[0]) - 10; document.getElementById('personagem1').style.left = parseInt(document.getElementById('personagem1').style.left.split('p')[0]) - 10;} if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 7){nivelDeSolo--; document.getElementById('personagem1').style.top = parseInt(document.getElementById('personagem1').style.top.split('p')[0]) + 10; document.getElementById('personagem1').style.left = parseInt(document.getElementById('personagem1').style.left.split('p')[0]) + 10;}}else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 2){ mochila[0] = 'PocaoHP'; document.getElementById('itemCampoDaMochila1').src = 'imagens/imagemPocaoHP.png'; document.getElementById('itemCampoDaMochila1').alt = 'pocao hp'; document.getElementById('itemCampoDaMochila1').title = 'pocao hp'; mochila[1] = 'Corda'; document.getElementById('itemCampoDaMochila2').src = 'imagens/imagemCorda.png'; document.getElementById('itemCampoDaMochila2').alt = 'corda'; document.getElementById('itemCampoDaMochila2').title = 'corda'; mochila[2] = 'Pa'; document.getElementById('itemCampoDaMochila3').src = 'imagens/imagemPa.png'; document.getElementById('itemCampoDaMochila3').alt = 'pa'; document.getElementById('itemCampoDaMochila3').title = 'pa'; document.getElementById('fala1').src = 'imagens/imagemFalaDeposit.png'; setTimeout(function(){ document.getElementById('fala1').src = 'imagens/imagemFalaVazia.png';}, 1000); matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] = 3;}else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 3){document.getElementById('fala1').src = 'imagens/imagemFalaItemVazio.png'; setTimeout(function(){ document.getElementById('fala1').src = 'imagens/imagemFalaVazia.png';}, 1000);}else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 5){posicaoDoPersonagemNaMatriz[0] = posicaoDoPersonagemNaMatriz[0]-9; posicaoDoPersonagemNaMatriz[1] = posicaoDoPersonagemNaMatriz[1]; preencherImagens();}else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 8 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 9){matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] = 10; if(nivel <= 100){ nivel += 10;}else if(nivel <= 200){nivel += 9;}else if(nivel <= 300){nivel += 8;}else if(nivel <= 400){nivel += 7;}else if(nivel <= 500){nivel += 6;}else if(nivel <= 600){nivel += 5;}else if(nivel <= 700){nivel += 4;}else if(nivel <= 800){nivel += 3;}else if(nivel <= 900){nivel += 2;}else if(nivel <= 1000){nivel += 1;} hpmax = ((nivel-1) * 30) + 176; preencherImagens();}else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 16 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 17){matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] = 18; if(nivel <= 1100){ nivel += 10;}else if(nivel <= 1200){nivel += 9;}else if(nivel <= 1300){nivel += 8;}else if(nivel <= 1400){nivel += 7;}else if(nivel <= 1500){nivel += 6;}else if(nivel <= 1600){nivel += 5;}else if(nivel <= 1700){nivel += 4;}else if(nivel <= 1800){nivel += 3;}else if(nivel <= 2000){nivel += 2;}else if(nivel <= 10000){nivel += 1;} hpmax = ((nivel-1) * 30) + 176; preencherImagens();}else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 19 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 20){matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] = 21; if(nivel <= 2100){ nivel += 10;}else if(nivel <= 2200){nivel += 9;}else if(nivel <= 2300){nivel += 8;}else if(nivel <= 2400){nivel += 7;}else if(nivel <= 2500){nivel += 6;}else if(nivel <= 2600){nivel += 5;}else if(nivel <= 2700){nivel += 4;}else if(nivel <= 2800){nivel += 3;}else if(nivel <= 10000){nivel += 2;}else if(nivel > 10000){nivel += 1;} hpmax = ((nivel-1) * 30) + 176; preencherImagens();} direcaoDoPersonagem = 2; document.getElementById('personagem1').src = 'imagens/imagemPersonagemDeFrente.png'; run_ajax();}
            }

            function funcMoverPersonagem(){
                if(document.getElementById('mensagem1').style.visibility == 'hidden'){
                    if(moverPersonagem[0] != 0 || moverPersonagem[1] != 0 ){
                        if(moverPersonagem[1] < 0 && (matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 0 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 4 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 6 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 7 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 12 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 13 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 14 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 15)){
                            moverEsquerda();
                            moverPersonagem[1] = moverPersonagem[1] + 1;
                        }else if(moverPersonagem[0] < 0 && (matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 0 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 4 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 6 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 7 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 12 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 13 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 14 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 15)){
                            moverCima();
                            moverPersonagem[0] = moverPersonagem[0] + 1;
                        }else if(moverPersonagem[1] > 0 && (matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 0 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 4 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 6 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 7 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 12 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 13 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 14 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 15)){
                            moverDireita();
                            moverPersonagem[1] = moverPersonagem[1] - 1;
                        }else if(moverPersonagem[0] > 0 && (matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 0 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 4 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 6 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 7 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 12 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 13 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 14 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 15)){
                            moverBaixo();
                            moverPersonagem[0] = moverPersonagem[0] - 1;
                        }else{
                            if(moverPersonagem[0] == -1 && moverPersonagem[1] == 0){
                                moverCima();
                            }
                            if(moverPersonagem[0] == 0 && moverPersonagem[1] == 1){
                                moverDireita();
                            }
                            if(moverPersonagem[0] == 1 && moverPersonagem[1] == 0){
                                moverBaixo();
                            }
                            if(moverPersonagem[0] == 0 && moverPersonagem[1] == -1){
                                moverEsquerda();
                            }

                            moverPersonagem = [0,0];
                        }
                    }
                }
            }

            function animacaoMonster(normal,atacando,morto,hit){

                //Animacao Monster Atacando de Cima
                if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == normal || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == morto){
                    posicaoLinhaCima = posicaoDoPersonagemNaMatriz[0]-1;
                    posicaoColunaCima = posicaoDoPersonagemNaMatriz[1];
                    flagCima = true;
                    if(matrizDoMapa[posicaoLinhaCima][posicaoColunaCima] == normal){
                        matrizDoMapa[posicaoLinhaCima][posicaoColunaCima] = atacando;
                    }else if(matrizDoMapa[posicaoLinhaCima][posicaoColunaCima] == morto && esperaRessCima == esperaRessCimaContador){
                        matrizDoMapa[posicaoLinhaCima][posicaoColunaCima] = atacando;
                        esperaRessCimaContador = 0;
                    }else if(matrizDoMapa[posicaoLinhaCima][posicaoColunaCima] == morto && esperaRessCima > esperaRessCimaContador){
                        esperaRessCimaContador++;
                    }
                    if(hp - hit > 0 && matrizDoMapa[posicaoLinhaCima][posicaoColunaCima] == atacando){
                        hp -= hit;
                    }else if(hp - hit <= 0){
                        hp = 0;
                        document.getElementById('mensagem1').style.visibility = 'visible';
                    }
                } else if((matrizDoMapa[posicaoLinhaCima][posicaoColunaCima] == atacando || matrizDoMapa[posicaoLinhaCima][posicaoColunaCima] == morto) && flagCima){
                    matrizDoMapa[posicaoLinhaCima][posicaoColunaCima] = normal;
                    flagCima = false;
                }

                //Animacao Monster Atacando da Esquerda
                if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == normal || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == morto){
                    posicaoLinhaEsquerda = posicaoDoPersonagemNaMatriz[0];
                    posicaoColunaEsquerda = posicaoDoPersonagemNaMatriz[1]-1;
                    flagEsquerda = true;
                    if(matrizDoMapa[posicaoLinhaEsquerda][posicaoColunaEsquerda] == normal){
                        matrizDoMapa[posicaoLinhaEsquerda][posicaoColunaEsquerda] = atacando;
                    }else if(matrizDoMapa[posicaoLinhaEsquerda][posicaoColunaEsquerda] == morto && esperaRessEsquerda == esperaRessEsquerdaContador){
                        matrizDoMapa[posicaoLinhaEsquerda][posicaoColunaEsquerda] = atacando;
                        esperaRessEsquerdaContador = 0;
                    }else if(matrizDoMapa[posicaoLinhaEsquerda][posicaoColunaEsquerda] == morto && esperaRessEsquerda > esperaRessEsquerdaContador){
                        esperaRessEsquerdaContador++;
                    }
                    if(hp - hit > 0 && matrizDoMapa[posicaoLinhaEsquerda][posicaoColunaEsquerda] == atacando){
                        hp -= hit;
                    }else if(hp - hit <= 0){
                        hp = 0;
                        document.getElementById('mensagem1').style.visibility = 'visible';
                    }
                } else if((matrizDoMapa[posicaoLinhaEsquerda][posicaoColunaEsquerda] == atacando || matrizDoMapa[posicaoLinhaEsquerda][posicaoColunaEsquerda] == morto) && flagEsquerda){
                    matrizDoMapa[posicaoLinhaEsquerda][posicaoColunaEsquerda] = normal;
                    flagEsquerda = false;
                }

                //Animacao Monster Atacando da Direita
                if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == normal || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == morto){
                    posicaoLinhaDireita = posicaoDoPersonagemNaMatriz[0];
                    posicaoColunaDireita = posicaoDoPersonagemNaMatriz[1]+1;
                    flagDireita = true;
                    if(matrizDoMapa[posicaoLinhaDireita][posicaoColunaDireita] == normal){
                        matrizDoMapa[posicaoLinhaDireita][posicaoColunaDireita] = atacando;
                    }else if(matrizDoMapa[posicaoLinhaDireita][posicaoColunaDireita] == morto && esperaRessDireita == esperaRessDireitaContador){
                        matrizDoMapa[posicaoLinhaDireita][posicaoColunaDireita] = atacando;
                        esperaRessDireitaContador = 0;
                    }else if(matrizDoMapa[posicaoLinhaDireita][posicaoColunaDireita] == morto && esperaRessDireita > esperaRessDireitaContador){
                        esperaRessDireitaContador++;
                    }
                    if(hp - hit > 0 && matrizDoMapa[posicaoLinhaDireita][posicaoColunaDireita] == atacando){
                        hp -= hit;
                    }else if(hp - hit <= 0){
                        hp = 0;
                        document.getElementById('mensagem1').style.visibility = 'visible';
                    }
                } else if((matrizDoMapa[posicaoLinhaDireita][posicaoColunaDireita] == atacando || matrizDoMapa[posicaoLinhaDireita][posicaoColunaDireita] == morto) && flagDireita){
                    matrizDoMapa[posicaoLinhaDireita][posicaoColunaDireita] = normal;
                    flagDireita = false;
                }

                //Animacao Monster Atacando de Baixo
                if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == normal || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == morto){
                    posicaoLinhaBaixo = posicaoDoPersonagemNaMatriz[0]+1;
                    posicaoColunaBaixo = posicaoDoPersonagemNaMatriz[1];
                    flagBaixo = true;
                    if(matrizDoMapa[posicaoLinhaBaixo][posicaoColunaBaixo] == normal){
                        matrizDoMapa[posicaoLinhaBaixo][posicaoColunaBaixo] = atacando;
                    }else if(matrizDoMapa[posicaoLinhaBaixo][posicaoColunaBaixo] == morto && esperaRessBaixo == esperaRessBaixoContador){
                        matrizDoMapa[posicaoLinhaBaixo][posicaoColunaBaixo] = atacando;
                        esperaRessBaixoContador = 0;
                    }else if(matrizDoMapa[posicaoLinhaBaixo][posicaoColunaBaixo] == morto && esperaRessBaixo > esperaRessBaixoContador){
                        esperaRessBaixoContador++;
                    }
                    if(hp - hit > 0 && matrizDoMapa[posicaoLinhaBaixo][posicaoColunaBaixo] == atacando){
                        hp -= hit;
                    }else if(hp - hit <= 0){
                        hp = 0;
                        document.getElementById('mensagem1').style.visibility = 'visible';
                    }
                } else if((matrizDoMapa[posicaoLinhaBaixo][posicaoColunaBaixo] == atacando || matrizDoMapa[posicaoLinhaBaixo][posicaoColunaBaixo] == morto) && flagBaixo){
                    matrizDoMapa[posicaoLinhaBaixo][posicaoColunaBaixo] = normal;
                    flagBaixo = false;
                }

                document.getElementById('nivelvalor').innerHTML = nivel;
                document.getElementById('hpvalor').innerHTML = hp;
                document.getElementById('hp').style.width = (176 * hp) / hpmax;
                if(parseInt(document.getElementById('hp').style.width.split('p')[0]) <= 44){ document.getElementById('hp').style.background = 'tomato';}else if(parseInt(document.getElementById('hp').style.width.split('p')[0]) <= 88){ document.getElementById('hp').style.background = 'orange';}else if(parseInt(document.getElementById('hp').style.width.split('p')[0]) > 88){ document.getElementById('hp').style.background = 'mediumseagreen';}

            }

            function loop(){
                animacaoMonster(8,9,10,175); //Snake(normal,atacando,morto,hit)
                animacaoMonster(16,17,18,30000); //Dragon(normal,atacando,morto,hit)
                animacaoMonster(19,20,21,60000); //Mammoth(normal,atacando,morto,hit)

                preencherImagens();

                if(identificadorDoChat == 0){
                    document.getElementById('textareaChat').value = mensagensDoChatDefault;
                } else if(identificadorDoChat == 1){
                    document.getElementById('textareaChat').value = mensagensDoChatNpc;
                }

                document.getElementById('personagem1').title = username + " nivel: " + nivel.toString() + " hp: " + hp.toString();
            }

            function pressKey(key){
                var conjurarExura = false;
                var conjurarExuraGran = false;
                var tecla = key.which;
                if(tecla != 13){
                    tecla = String.fromCharCode(tecla);
                } else {
                    if(document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'exura' && exura){
                        conjurarExura = true; 
                    }
                    if(document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'exura gran' && exuraGran){
                        conjurarExuraGran = true; 
                    }
                    if(document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'hi' || 
                    document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'oi' || 
                    document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'yes' || 
                    document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'sim' ||
                    document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'exura' || 
                    document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'exura gran' || 
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
                            if(document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'exura gran' && nivelDeConversaNpc == 2 && nivel >= 1000){
                                nivelDeConversaNpc = 3;
                            }else if(document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'exura gran' && nivelDeConversaNpc == 2 && nivel < 1000){
                                nivelDeConversaNpc = 5;
                            }
                            if((document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'no' && (nivelDeConversaNpc == 1 || nivelDeConversaNpc == 2)) || 
                            (document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'nao' && (nivelDeConversaNpc == 1 || nivelDeConversaNpc == 2))){
                                nivelDeConversaNpc = 4;
                            }
                        }
                    }
                    if(identificadorDoChat == 0){
                        if(
                            (document.getElementById('campoDeEscritaInput').value.toLowerCase() == "exura" && !exura) ||
                            (document.getElementById('campoDeEscritaInput').value.toLowerCase() == "exura gran" && !exuraGran)
                        ){
                            mensagensDoChatDefault += "\nSistema: Voce ainda nao sabe esta magia.";
                        }else{
                            mensagensDoChatDefault += "\n" + document.getElementById('campoDeEscritaInput').value;
                        }
                        document.getElementById('campoDeEscritaInput').value = "";
                        document.getElementById('textareaChat').value = mensagensDoChatDefault;
                        document.getElementById('textareaChat').scrollTop = document.getElementById('textareaChat').scrollHeight;
                    } else if(identificadorDoChat == 1){
                        if(
                            (document.getElementById('campoDeEscritaInput').value.toLowerCase() == "exura" && !exura && nivelDeConversaNpc != 3) ||
                            (document.getElementById('campoDeEscritaInput').value.toLowerCase() == "exura gran" && !exuraGran && nivelDeConversaNpc != 3)
                        ){
                            mensagensDoChatNpc += "\nSistema: Voce ainda nao sabe esta magia.";
                        } else{
                            mensagensDoChatNpc += "\n" + document.getElementById('campoDeEscritaInput').value;
                        }
                        switch(nivelDeConversaNpc){
                            case 1:
                                if(!exura || !exuraGran){
                                    mensagensDoChatNpc += "\nNpc: Oi aventureiro, voce quer aprender uma magia?";
                                } else {
                                    mensagensDoChatNpc += "\nNpc: Oi aventureiro, nao temos nenhuma magia para ensinar.";
                                    nivelDeConversaNpc = 0;
                                }
                                break;
                            case 2:
                                mensagensDoChatNpc += "\nNpc: Temos a(s) seguinte(s) magia(s): 'exura' e 'exura gran'. Digite o nome da magia para aprender...";
                                break;
                            case 3:
                                mensagensDoChatNpc += "\nNpc: Parabens, voce ja pode utilizar a magia. Tchau!";
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
                                nivelDeConversaNpc = 0;
                                break;
                            case 4:
                                mensagensDoChatNpc += "\nNpc: Ate mais!";
                                nivelDeConversaNpc = 0;
                                break;
                            case 5:
                                mensagensDoChatNpc += "\nNpc: Voce precisa de nivel 1000+ para aprender esta magia!";
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
                    if(conjurarExuraGran){
                        document.getElementById('fala1').src = 'imagens/imagemFalaExuraGran.png';
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
                    if(conjurarExuraGran && hp < hpmax){
                        if(hp + 10000 < hpmax){
                            hp = hp + 10000;
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

                var dados = new FormData();

                dados.append('username', username);
                dados.append('password', password);
                dados.append('x', posicaoDoPersonagemNaMatriz[0]);
                dados.append('y', posicaoDoPersonagemNaMatriz[1]);
                dados.append('direcao', direcaoDoPersonagem);
                dados.append('nivel', nivel);
                dados.append('hp', hp);

                $.ajax({
                    url: 'TibiaGET1_3.php',
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
                            matrizDoMapaOriginal[dadosResposta.players[i].x][dadosResposta.players[i].y] != 7
                        ){
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
                        }
                    }

                })
                
                // [FIM] AJAX
            }

        </script>
    </head>
    <body onload="setInterval('loop()', 1000); setInterval('funcMoverPersonagem()', (nivel*0,01 < 490)?(500 - (nivel*0,01)):10);" onKeyPress="pressKey(event)">
        <div id='mapa1'style='position:fixed; top: 0; left: 0'>
            <div id='m1r1'style='top: 0'>
                <div id='m1r1c1' style='width: 60; height: 60; float: left'>
                    <img id='campo1' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [-3,-4];"></img>
                </div>
                <div id='m1r1c2' style='width: 60; height: 60; float: left'>
                    <img id='campo2' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [-3,-3];"></img>
                </div>
                <div id='m1r1c3' style='width: 60; height: 60; float: left'>
                    <img id='campo3' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [-3,-2];"></img>
                </div>
                <div id='m1r1c4' style='width: 60; height: 60; float: left'>
                    <img id='campo4' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [-3,-1];"></img>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo5' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [-3,0];"></img>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo6' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [-3,1];"></img>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo7' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [-3,2];"></img>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo8' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [-3,3];"></img>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo9' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [-3,4];"></img>
                </div>
            </div>
            <div id='m1r1'style='top: 0'>
                <div id='m1r1c1' style='width: 60; height: 60; float: left'>
                    <img id='campo10' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [-2,-4];"></img>
                </div>
                <div id='m1r1c2' style='width: 60; height: 60; float: left'>
                    <img id='campo11' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [-2,-3];"></img>
                </div>
                <div id='m1r1c3' style='width: 60; height: 60; float: left'>
                    <img id='campo12' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [-2,-2];"></img>
                </div>
                <div id='m1r1c4' style='width: 60; height: 60; float: left'>
                    <img id='campo13' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [-2,-1];"></img>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo14' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [-2,0];"></img>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo15' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [-2,1];"></img>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo16' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [-2,2];"></img>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo17' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [-2,3];"></img>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo18' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [-2,4];"></img>
                </div>
            </div>
            <div id='m1r1'style='top: 0'>
                <div id='m1r1c1' style='width: 60; height: 60; float: left'>
                    <img id='campo19' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [-1,-4];"></img>
                </div>
                <div id='m1r1c2' style='width: 60; height: 60; float: left'>
                    <img id='campo20' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [-1,-3];"></img>
                </div>
                <div id='m1r1c3' style='width: 60; height: 60; float: left'>
                    <img id='campo21' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [-1,-2];"></img>
                </div>
                <div id='m1r1c4' style='width: 60; height: 60; float: left'>
                    <img id='campo22' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [-1,-1];"></img>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo23' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [-1,0];"></img>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo24' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [-1,1];"></img>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo25' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [-1,2];"></img>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo26' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [-1,3];"></img>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo27' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [-1,4];"></img>
                </div>
            </div>
            <div id='m1r1'style='top: 0'>
                <div id='m1r1c1' style='width: 60; height: 60; float: left'>
                    <img id='campo28' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [0,-4];"></img>
                </div>
                <div id='m1r1c2' style='width: 60; height: 60; float: left'>
                    <img id='campo29' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [0,-3];"></img>
                </div>
                <div id='m1r1c3' style='width: 60; height: 60; float: left'>
                    <img id='campo30' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [0,-2];"></img>
                </div>
                <div id='m1r1c4' style='width: 60; height: 60; float: left'>
                    <img id='campo31' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [0,-1];"></img>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo32' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%'></img>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo33' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [0,1];"></img>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo34' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [0,2];"></img>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo35' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [0,3];"></img>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo36' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [0,4];"></img>
                </div>
            </div>
            <div id='m1r1'style='top: 0'>
                <div id='m1r1c1' style='width: 60; height: 60; float: left'>
                    <img id='campo37' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [1,-4];"></img>
                </div>
                <div id='m1r1c2' style='width: 60; height: 60; float: left'>
                    <img id='campo38' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [1,-3];"></img>
                </div>
                <div id='m1r1c3' style='width: 60; height: 60; float: left'>
                    <img id='campo39' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [1,-2];"></img>
                </div>
                <div id='m1r1c4' style='width: 60; height: 60; float: left'>
                    <img id='campo40' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [1,-1];"></img>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo41' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [1,0];"></img>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo42' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [1,1];"></img>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo43' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [1,2];"></img>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo44' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [1,3];"></img>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo45' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [1,4];"></img>
                </div>
            </div>
            <div id='m1r1'style='top: 0'>
                <div id='m1r1c1' style='width: 60; height: 60; float: left'>
                    <img id='campo46' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [2,-4];"></img>
                </div>
                <div id='m1r1c2' style='width: 60; height: 60; float: left'>
                    <img id='campo47' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [2,-3];"></img>
                </div>
                <div id='m1r1c3' style='width: 60; height: 60; float: left'>
                    <img id='campo48' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [2,-2];"></img>
                </div>
                <div id='m1r1c4' style='width: 60; height: 60; float: left'>
                    <img id='campo49' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [2,-1];"></img>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo50' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [2,0];"></img>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo51' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [2,1];"></img>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo52' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [2,2];"></img>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo53' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [2,3];"></img>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo54' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [2,4];"></img>
                </div>
            </div>
            <div id='m1r1'style='top: 0'>
                <div id='m1r1c1' style='width: 60; height: 60; float: left'>
                    <img id='campo55' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [3,-4];"></img>
                </div>
                <div id='m1r1c2' style='width: 60; height: 60; float: left'>
                    <img id='campo56' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [3,-3];"></img>
                </div>
                <div id='m1r1c3' style='width: 60; height: 60; float: left'>
                    <img id='campo57' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [3,-2];"></img>
                </div>
                <div id='m1r1c4' style='width: 60; height: 60; float: left'>
                    <img id='campo58' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [3,-1];"></img>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo59' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [3,0];"></img>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo60' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [3,1];"></img>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo61' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [3,2];"></img>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo62' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [3,3];"></img>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo63' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [3,4];"></img>
                </div>
            </div>
        </div>

        <img id='personagem1' src='imagens/imagemPersonagemDeFrente.png' alt='personagem' title='personagem' style='position:fixed; top: 185; left: 245; width: 50; height: 50;'></img>
        <img id='fala1' src='imagens/imagemFalaVazia.png' alt='fala' title='fala' style='position:fixed; top: 185; left: 245;'></img>
        <img id='mensagem1' src='imagens/imagemMensagemPersonagemMorto.png' alt='mensagem' title='mensagem' style='position:fixed; top: 185; left: 245; visibility: hidden;'></img>
        <div id='ok' style='position:fixed; top: 302; left: 448; width: 35; height: 16;' onclick="if(document.getElementById('mensagem1').style.visibility == 'visible'){document.getElementById('mensagem1').style.visibility = 'hidden'; posicaoDoPersonagemNaMatriz = [5,6]; hp++; if(nivelDeSolo == 2){ nivelDeSolo--; document.getElementById('personagem1').style.top = parseInt(document.getElementById('personagem1').style.top.split('p')[0]) + 10; document.getElementById('personagem1').style.left = parseInt(document.getElementById('personagem1').style.left.split('p')[0]) + 10;} document.getElementById('fala1').src = 'imagens/imagemFalaVoceJaTemBless.png'; setTimeout(function(){document.getElementById('fala1').src = 'imagens/imagemFalaVazia.png';}, 2000); direcaoDoPersonagem = 2; document.getElementById('personagem1').src = 'imagens/imagemPersonagemDeFrente.png'; run_ajax();}">
        
        </div>
        <div id='cancel' style='position:fixed; top: 302; left: 495; width: 35; height: 16;' onclick="if(document.getElementById('mensagem1').style.visibility == 'visible'){document.getElementById('mensagem1').style.visibility = 'hidden'; posicaoDoPersonagemNaMatriz = [5,6]; hp++; if(nivelDeSolo == 2){ nivelDeSolo--; document.getElementById('personagem1').style.top = parseInt(document.getElementById('personagem1').style.top.split('p')[0]) + 10; document.getElementById('personagem1').style.left = parseInt(document.getElementById('personagem1').style.left.split('p')[0]) + 10;} document.getElementById('fala1').src = 'imagens/imagemFalaVoceJaTemBless.png'; setTimeout(function(){document.getElementById('fala1').src = 'imagens/imagemFalaVazia.png';}, 2000); direcaoDoPersonagem = 2; document.getElementById('personagem1').src = 'imagens/imagemPersonagemDeFrente.png'; run_ajax();}">
        
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
                    <img id='itemCampoDaMochila1' src='imagens/imagemCampoItem.png' alt='item' title='item' style='width: 100%; height: 100%' onclick="if(document.getElementById('mensagem1').style.visibility == 'hidden'){if(mochila[0] == 'PocaoHP'){document.getElementById('fala1').src = 'imagens/imagemFalaPocaoHP.png'; if(hp < hpmax){if(hp + 40 < hpmax){hp = hp + 40; document.getElementById('hp').style.width = (176 * hp) / hpmax;}else{hp = hpmax; document.getElementById('hp').style.width = 176;}} if(parseInt(document.getElementById('hp').style.width.split('p')[0]) <= 44){ document.getElementById('hp').style.background = 'tomato';}else if(parseInt(document.getElementById('hp').style.width.split('p')[0]) <= 88){ document.getElementById('hp').style.background = 'orange';}else if(parseInt(document.getElementById('hp').style.width.split('p')[0]) > 88){ document.getElementById('hp').style.background = 'mediumseagreen';} document.getElementById('hpvalor').innerHTML = hp; setTimeout(function(){document.getElementById('fala1').src = 'imagens/imagemFalaVazia.png';}, 1000);}}"></img>
                </div>
                <div id='campoDaMochila2' title='mochila' style='float: left; top: 0; left: 0; margin: 1; width: 42; height: 42; background-color: gray;'>
                    <img id='itemCampoDaMochila2' src='imagens/imagemCampoItem.png' alt='item' title='item' style='width: 100%; height: 100%' onclick="if(document.getElementById('mensagem1').style.visibility == 'hidden'){if(mochila[1] == 'Corda' && matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]] == 4){posicaoDoPersonagemNaMatriz[0] = posicaoDoPersonagemNaMatriz[0]+9; posicaoDoPersonagemNaMatriz[1] = posicaoDoPersonagemNaMatriz[1]; preencherImagens();}}"></img>
                </div>
                <div id='campoDaMochila3' title='mochila' style='float: left; top: 0; left: 0; margin: 1; width: 42; height: 42; background-color: gray;'>
                    <img id='itemCampoDaMochila3' src='imagens/imagemCampoItem.png' alt='item' title='item' style='width: 100%; height: 100%' onclick="if(document.getElementById('mensagem1').style.visibility == 'hidden'){if(mochila[2] == 'Pa' && matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]] == 6){posicaoDoPersonagemNaMatriz[0] = posicaoDoPersonagemNaMatriz[0]-10; posicaoDoPersonagemNaMatriz[1] = posicaoDoPersonagemNaMatriz[1]; preencherImagens();}}"></img>
                </div>
                <div id='campoDaMochila4' title='mochila' style='float: left; top: 0; left: 0; margin: 1; width: 42; height: 42; background-color: gray;'>
                    <img id='itemCampoDaMochila4' src='imagens/imagemCampoItem.png' alt='item' title='item' style='width: 100%; height: 100%'></img>
                </div>
            </div>
            <div id='magias' title='magias' style='position: absolute; top: 140; left: 0; margin: 1; width: 176; height: 44; background-color: lightgray;'>
                <div id='nomeDoLivroDeMagias1' title='magias' style='top: 0; left: 10; margin: 1; padding: 2; width: 170; height: 10; background-color: gray; color: white; font-family: "Lucida Console", "Courier New", monospace; font-size: x-small;'>
                    Magias
                </div>
                <div id='campoDaMagia1' title='magia' style='float: left; top: 0; left: 0; margin: 1; width: 42; height: 42; background-color: gray;'>
                    <img id='magiaExura' src='imagens/imagemCampoItem.png' alt='magia' title='magia' style='width: 100%; height: 100%' onclick="
                    if(document.getElementById('mensagem1').style.visibility == 'hidden'){
                        if(exura){
                            document.getElementById('fala1').src = 'imagens/imagemFalaExura.png';
                            setTimeout(function(){document.getElementById('fala1').src = 'imagens/imagemFalaVazia.png';}, 1000);
                        }
                        if(exura && hp < hpmax){
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
                    }"></img>
                </div>
                <div id='campoDaMagia2' title='magia' style='float: left; top: 0; left: 0; margin: 1; width: 42; height: 42; background-color: gray;'>
                    <img id='magiaExuraGran' src='imagens/imagemCampoItem.png' alt='magia' title='magia' style='width: 100%; height: 100%' onclick="
                    if(document.getElementById('mensagem1').style.visibility == 'hidden'){
                        if(exuraGran){
                            document.getElementById('fala1').src = 'imagens/imagemFalaExuraGran.png';
                            setTimeout(function(){document.getElementById('fala1').src = 'imagens/imagemFalaVazia.png';}, 1000);
                        }
                        if(exuraGran && hp < hpmax){
                            if(hp + 10000 < hpmax){
                                hp = hp + 10000;
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
                    }"></img>
                </div>
                <div id='campoDaMagia3' title='magia' style='float: left; top: 0; left: 0; margin: 1; width: 42; height: 42; background-color: gray;'>
                    <img id='magia3' src='imagens/imagemCampoItem.png' alt='item' title='magia' style='width: 100%; height: 100%'></img>
                </div>
                <div id='campoDaMagia4' title='parcel' style='float: left; top: 0; left: 0; margin: 1; width: 42; height: 42; background-color: gray;'>
                    <img id='magia4' src='imagens/imagemCampoItem.png' alt='item' title='magia' style='width: 100%; height: 100%'></img>
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
            <form action="http://magiclevel.ml/SO/test/jogos/login.php">
                <button type="submit" id='logout' title='sair' style='position: absolute; top: 210; left: 0; margin: 1; width: 174; height: 44; background-color: lightgray; visibility: visible;'>
                    Logout
                </button>
            </form>
        </div>
        <div id='chat' title='chat' style='position: fixed; top: 0; left: 720; width: 178; height:414; background-color: lightgray; border-style: solid; border-color: gray;'>
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
                <div id='campoDeEscrita' title='chat' style='float: left; top: 0; left: 0; margin: 1; width: 176; height: 22; background-color: gray;'>
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
