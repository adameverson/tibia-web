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
            var nivel = 0;
            var hpmax = 176;
            var hp = 176;
            var mochila = ["","","",""];
            var exura = false;
            var exuraGran = false;
            var outfit = "M";

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

            function auxPreencherImagens(i, j, caminhoImagem, campo){
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
                        }
                    }
                }else if(matrizDoMapa[i][j] == 8 || matrizDoMapa[i][j] == 9){
                    document.getElementById(nomeCampo).innerHTML = "Snake";
                    if( 
                        ( (i-1) != posicaoDoPersonagemNaMatriz[0] && j != posicaoDoPersonagemNaMatriz[1] ) &&
                        ( i != posicaoDoPersonagemNaMatriz[0] && (j-1) != posicaoDoPersonagemNaMatriz[1] ) &&
                        ( (i+1) != posicaoDoPersonagemNaMatriz[0] && j != posicaoDoPersonagemNaMatriz[1] ) &&
                        ( i != posicaoDoPersonagemNaMatriz[0] && (j+1) != posicaoDoPersonagemNaMatriz[1] )
                    ){
                        document.getElementById(barraHpCampo).style.width = 50;
                    }
                    if(parseInt(document.getElementById(barraHpCampo).style.width.split('p')[0]) <= 13){ 
                        document.getElementById(nomeCampo).style.color = 'tomato';
                        document.getElementById(barraHpCampo).style.background = 'tomato';
                    } else if(parseInt(document.getElementById(barraHpCampo).style.width.split('p')[0]) <= 25){ 
                        document.getElementById(nomeCampo).style.color = 'orange';
                        document.getElementById(barraHpCampo).style.background = 'orange';
                    } else if(parseInt(document.getElementById(barraHpCampo).style.width.split('p')[0]) > 25){ 
                        document.getElementById(nomeCampo).style.color = 'mediumseagreen';
                        document.getElementById(barraHpCampo).style.background = 'mediumseagreen';
                    }
                    document.getElementById(nomeCampo).style.visibility = "visible";
                    document.getElementById(barraHpCampo).style.visibility = "visible";
                    document.getElementById(barraHpVaziaCampo).style.visibility = "visible";
                    document.getElementById(baseCampo).title = "snake";
                    
                }else if(matrizDoMapa[i][j] == 11){
                    document.getElementById(nomeCampo).innerHTML = "NPC";
                    document.getElementById(nomeCampo).style.color = 'white';
                    document.getElementById(nomeCampo).style.visibility = "visible";
                    document.getElementById(baseCampo).title = "npc";
                }else if(matrizDoMapa[i][j] == 16 || matrizDoMapa[i][j] == 17){
                    document.getElementById(nomeCampo).innerHTML = "Dragon";
                    if( 
                        ( (i-1) != posicaoDoPersonagemNaMatriz[0] && j != posicaoDoPersonagemNaMatriz[1] ) &&
                        ( i != posicaoDoPersonagemNaMatriz[0] && (j-1) != posicaoDoPersonagemNaMatriz[1] ) &&
                        ( (i+1) != posicaoDoPersonagemNaMatriz[0] && j != posicaoDoPersonagemNaMatriz[1] ) &&
                        ( i != posicaoDoPersonagemNaMatriz[0] && (j+1) != posicaoDoPersonagemNaMatriz[1] )
                    ){
                        document.getElementById(barraHpCampo).style.width = 50;
                    }
                    if(parseInt(document.getElementById(barraHpCampo).style.width.split('p')[0]) <= 13){ 
                        document.getElementById(nomeCampo).style.color = 'tomato';
                        document.getElementById(barraHpCampo).style.background = 'tomato';
                    } else if(parseInt(document.getElementById(barraHpCampo).style.width.split('p')[0]) <= 25){ 
                        document.getElementById(nomeCampo).style.color = 'orange';
                        document.getElementById(barraHpCampo).style.background = 'orange';
                    } else if(parseInt(document.getElementById(barraHpCampo).style.width.split('p')[0]) > 25){ 
                        document.getElementById(nomeCampo).style.color = 'mediumseagreen';
                        document.getElementById(barraHpCampo).style.background = 'mediumseagreen';
                    }
                    document.getElementById(nomeCampo).style.visibility = "visible";
                    document.getElementById(barraHpCampo).style.visibility = "visible";
                    document.getElementById(barraHpVaziaCampo).style.visibility = "visible";
                    document.getElementById(baseCampo).title = "dragon";
                }else if(matrizDoMapa[i][j] == 19 || matrizDoMapa[i][j] == 20){
                    document.getElementById(nomeCampo).innerHTML = "Mammoth";
                    if( 
                        ( (i-1) != posicaoDoPersonagemNaMatriz[0] && j != posicaoDoPersonagemNaMatriz[1] ) &&
                        ( i != posicaoDoPersonagemNaMatriz[0] && (j-1) != posicaoDoPersonagemNaMatriz[1] ) &&
                        ( (i+1) != posicaoDoPersonagemNaMatriz[0] && j != posicaoDoPersonagemNaMatriz[1] ) &&
                        ( i != posicaoDoPersonagemNaMatriz[0] && (j+1) != posicaoDoPersonagemNaMatriz[1] )
                    ){
                        document.getElementById(barraHpCampo).style.width = 50;
                    }
                    if(parseInt(document.getElementById(barraHpCampo).style.width.split('p')[0]) <= 13){ 
                        document.getElementById(nomeCampo).style.color = 'tomato';
                        document.getElementById(barraHpCampo).style.background = 'tomato';
                    } else if(parseInt(document.getElementById(barraHpCampo).style.width.split('p')[0]) <= 25){ 
                        document.getElementById(nomeCampo).style.color = 'orange';
                        document.getElementById(barraHpCampo).style.background = 'orange';
                    } else if(parseInt(document.getElementById(barraHpCampo).style.width.split('p')[0]) > 25){ 
                        document.getElementById(nomeCampo).style.color = 'mediumseagreen';
                        document.getElementById(barraHpCampo).style.background = 'mediumseagreen';
                    }
                    document.getElementById(nomeCampo).style.visibility = "visible";
                    document.getElementById(barraHpCampo).style.visibility = "visible";
                    document.getElementById(barraHpVaziaCampo).style.visibility = "visible";
                    document.getElementById(baseCampo).title = "mammoth";
                }else{
                    document.getElementById(barraHpCampo).style.width = 50;
                }
            }

            function preencherImagens(){
                var caminhoImagem = "";

                /*run_ajax();*/

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
                        }else if(matrizDoMapa[i][j] == 22){
                            caminhoImagem = "imagens/imagemPersonagemDeCostasFComPiso.png";
                        }else if(matrizDoMapa[i][j] == 23){
                            caminhoImagem = "imagens/imagemPersonagemDeDireitaFComPiso.png";
                        }else if(matrizDoMapa[i][j] == 24){
                            caminhoImagem = "imagens/imagemPersonagemDeFrenteFComPiso.png";
                        }else if(matrizDoMapa[i][j] == 25){
                            caminhoImagem = "imagens/imagemPersonagemDeEsquerdaFComPiso.png";
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
                if(document.getElementById('mensagem1').style.visibility == 'hidden'){if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 0 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 4 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 6 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 7 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 12 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 13 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 14 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 15 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 22 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 23 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 24 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 25){ posicaoDoPersonagemNaMatriz[0] = posicaoDoPersonagemNaMatriz[0] - 1; preencherImagens(); if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]] == 7){nivelDeSolo++; document.getElementById('personagem1').style.top = parseInt(document.getElementById('personagem1').style.top.split('p')[0]) - 10; document.getElementById('personagem1').style.left = parseInt(document.getElementById('personagem1').style.left.split('p')[0]) - 10;} if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 7){nivelDeSolo--; document.getElementById('personagem1').style.top = parseInt(document.getElementById('personagem1').style.top.split('p')[0]) + 10; document.getElementById('personagem1').style.left = parseInt(document.getElementById('personagem1').style.left.split('p')[0]) + 10;}}else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 2){ mochila[0] = 'PocaoHP'; document.getElementById('itemCampoDaMochila1').src = 'imagens/imagemPocaoHP.png'; document.getElementById('itemCampoDaMochila1').alt = 'pocao hp'; document.getElementById('itemCampoDaMochila1').title = 'pocao hp'; mochila[1] = 'Corda'; document.getElementById('itemCampoDaMochila2').src = 'imagens/imagemCorda.png'; document.getElementById('itemCampoDaMochila2').alt = 'corda'; document.getElementById('itemCampoDaMochila2').title = 'corda'; mochila[2] = 'Pa'; document.getElementById('itemCampoDaMochila3').src = 'imagens/imagemPa.png'; document.getElementById('itemCampoDaMochila3').alt = 'pa'; document.getElementById('itemCampoDaMochila3').title = 'pa'; document.getElementById('fala1').src = 'imagens/imagemFalaDeposit.png'; setTimeout(function(){ document.getElementById('fala1').src = 'imagens/imagemFalaVazia.png';}, 1000); matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] = 3;}else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 3){document.getElementById('fala1').src = 'imagens/imagemFalaItemVazio.png'; setTimeout(function(){ document.getElementById('fala1').src = 'imagens/imagemFalaVazia.png';}, 1000);}else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 5){posicaoDoPersonagemNaMatriz[0] = posicaoDoPersonagemNaMatriz[0]-11; posicaoDoPersonagemNaMatriz[1] = posicaoDoPersonagemNaMatriz[1]; preencherImagens();}else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 8 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 9){let expaux = nivel; let lvl=0; for(lvl=1; expaux >= 0; lvl++){ expaux = expaux - lvl;} lvl--; if( (parseInt(document.getElementById('barraHpCampo23').style.width.split('p')[0]) - (lvl*1.0)) > 0 ){ document.getElementById('barraHpCampo23').style.width = parseInt(document.getElementById('barraHpCampo23').style.width.split('p')[0]) - (lvl*1.0);}else{matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] = 10; nivel += 1; expaux = nivel; lvl=0; for(lvl=1; expaux >= 0; lvl++){ expaux = expaux - lvl;} lvl--; let expmin = nivel - (lvl + expaux); let expmax = nivel - expaux -1; let exptotal = 0; (expmax - expmin)?exptotal = (expmax - expmin):exptotal = 1; document.getElementById('barraxp').style.width = (165 * (nivel - expmin)) / exptotal; document.getElementById('nivelvalor').innerHTML = nivel; document.getElementById('levelvalor').innerHTML = lvl; hpmax = ((lvl-1) * 15) + 176; preencherImagens(); document.getElementById('barraHpCampo23').style.width = 50;}}else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 16 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 17){let expaux = nivel; let lvl=0; for(lvl=1; expaux >= 0; lvl++){ expaux = expaux - lvl;} lvl--; if( (parseInt(document.getElementById('barraHpCampo23').style.width.split('p')[0]) - (lvl*0.5)) > 0 ){ document.getElementById('barraHpCampo23').style.width = parseInt(document.getElementById('barraHpCampo23').style.width.split('p')[0]) - (lvl*0.5);}else{matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] = 18; nivel += 2; expaux = nivel; lvl=0; for(lvl=1; expaux >= 0; lvl++){ expaux = expaux - lvl;} lvl--; let expmin = nivel - (lvl + expaux); let expmax = nivel - expaux -1; let exptotal = 0; (expmax - expmin)?exptotal = (expmax - expmin):exptotal = 1; document.getElementById('barraxp').style.width = (165 * (nivel - expmin)) / exptotal; document.getElementById('nivelvalor').innerHTML = nivel; document.getElementById('levelvalor').innerHTML = lvl; hpmax = ((lvl-1) * 15) + 176; preencherImagens(); document.getElementById('barraHpCampo23').style.width = 50;}}else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 19 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 20){let expaux = nivel; let lvl=0; for(lvl=1; expaux >= 0; lvl++){ expaux = expaux - lvl;} lvl--; if( (parseInt(document.getElementById('barraHpCampo23').style.width.split('p')[0]) - (lvl*0.1)) > 0 ){ document.getElementById('barraHpCampo23').style.width = parseInt(document.getElementById('barraHpCampo23').style.width.split('p')[0]) - (lvl*0.1);}else{matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] = 21; nivel += 3; expaux = nivel; lvl=0; for(lvl=1; expaux >= 0; lvl++){ expaux = expaux - lvl;} lvl--; let expmin = nivel - (lvl + expaux); let expmax = nivel - expaux -1; let exptotal = 0; (expmax - expmin)?exptotal = (expmax - expmin):exptotal = 1; document.getElementById('barraxp').style.width = (165 * (nivel - expmin)) / exptotal; document.getElementById('nivelvalor').innerHTML = nivel; document.getElementById('levelvalor').innerHTML = lvl; hpmax = ((lvl-1) * 15) + 176; preencherImagens(); document.getElementById('barraHpCampo23').style.width = 50;}} direcaoDoPersonagem = 0; if(outfit == "M"){ document.getElementById('personagem1').src = 'imagens/imagemPersonagemDeCostas.png'; }else if(outfit == "F"){ document.getElementById('personagem1').src = 'imagens/imagemPersonagemDeCostasF.png'; } run_ajax();}
            }

            function moverEsquerda(){
                if(document.getElementById('mensagem1').style.visibility == 'hidden'){if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 0 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 4 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 6 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 7 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 12 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 13 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 14 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 15 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 22 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 23 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 24 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 25){ posicaoDoPersonagemNaMatriz[1] = posicaoDoPersonagemNaMatriz[1] - 1; preencherImagens(); if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]] == 7){nivelDeSolo++; document.getElementById('personagem1').style.top = parseInt(document.getElementById('personagem1').style.top.split('p')[0]) - 10; document.getElementById('personagem1').style.left = parseInt(document.getElementById('personagem1').style.left.split('p')[0]) - 10;} if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 7){nivelDeSolo--; document.getElementById('personagem1').style.top = parseInt(document.getElementById('personagem1').style.top.split('p')[0]) + 10; document.getElementById('personagem1').style.left = parseInt(document.getElementById('personagem1').style.left.split('p')[0]) + 10;}}else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 2){ mochila[0] = 'PocaoHP'; document.getElementById('itemCampoDaMochila1').src = 'imagens/imagemPocaoHP.png'; document.getElementById('itemCampoDaMochila1').alt = 'pocao hp'; document.getElementById('itemCampoDaMochila1').title = 'pocao hp'; mochila[1] = 'Corda'; document.getElementById('itemCampoDaMochila2').src = 'imagens/imagemCorda.png'; document.getElementById('itemCampoDaMochila2').alt = 'corda'; document.getElementById('itemCampoDaMochila2').title = 'corda'; mochila[2] = 'Pa'; document.getElementById('itemCampoDaMochila3').src = 'imagens/imagemPa.png'; document.getElementById('itemCampoDaMochila3').alt = 'pa'; document.getElementById('itemCampoDaMochila3').title = 'pa'; document.getElementById('fala1').src = 'imagens/imagemFalaDeposit.png'; setTimeout(function(){ document.getElementById('fala1').src = 'imagens/imagemFalaVazia.png';}, 1000); matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] = 3;}else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 3){document.getElementById('fala1').src = 'imagens/imagemFalaItemVazio.png'; setTimeout(function(){ document.getElementById('fala1').src = 'imagens/imagemFalaVazia.png';}, 1000);}else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 5){ posicaoDoPersonagemNaMatriz[0] = posicaoDoPersonagemNaMatriz[0]-10; posicaoDoPersonagemNaMatriz[1] = posicaoDoPersonagemNaMatriz[1]-1; preencherImagens();}else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 8 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 9){let expaux = nivel; let lvl=0; for(lvl=1; expaux >= 0; lvl++){ expaux = expaux - lvl;} lvl--; if( (parseInt(document.getElementById('barraHpCampo31').style.width.split('p')[0]) - (lvl*1.0)) > 0 ){ document.getElementById('barraHpCampo31').style.width = parseInt(document.getElementById('barraHpCampo31').style.width.split('p')[0]) - (lvl*1.0);}else{matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] = 10; nivel += 1; expaux = nivel; lvl=0; for(lvl=1; expaux >= 0; lvl++){ expaux = expaux - lvl;} lvl--; let expmin = nivel - (lvl + expaux); let expmax = nivel - expaux -1; let exptotal = 0; (expmax - expmin)?exptotal = (expmax - expmin):exptotal = 1; document.getElementById('barraxp').style.width = (165 * (nivel - expmin)) / exptotal; document.getElementById('nivelvalor').innerHTML = nivel; document.getElementById('levelvalor').innerHTML = lvl; hpmax = ((lvl-1) * 15) + 176; preencherImagens(); document.getElementById('barraHpCampo31').style.width = 50;}}else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 16 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 17){let expaux = nivel; let lvl=0; for(lvl=1; expaux >= 0; lvl++){ expaux = expaux - lvl;} lvl--; if( (parseInt(document.getElementById('barraHpCampo31').style.width.split('p')[0]) - (lvl*0.5)) > 0 ){ document.getElementById('barraHpCampo31').style.width = parseInt(document.getElementById('barraHpCampo31').style.width.split('p')[0]) - (lvl*0.5);}else{matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] = 18; nivel += 2; expaux = nivel; lvl=0; for(lvl=1; expaux >= 0; lvl++){ expaux = expaux - lvl;} lvl--; let expmin = nivel - (lvl + expaux); let expmax = nivel - expaux -1; let exptotal = 0; (expmax - expmin)?exptotal = (expmax - expmin):exptotal = 1; document.getElementById('barraxp').style.width = (165 * (nivel - expmin)) / exptotal; document.getElementById('nivelvalor').innerHTML = nivel; document.getElementById('levelvalor').innerHTML = lvl; hpmax = ((lvl-1) * 15) + 176; preencherImagens(); document.getElementById('barraHpCampo31').style.width = 50;}}else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 19 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 20){let expaux = nivel; let lvl=0; for(lvl=1; expaux >= 0; lvl++){ expaux = expaux - lvl;} lvl--; if( (parseInt(document.getElementById('barraHpCampo31').style.width.split('p')[0]) - (lvl*0.1)) > 0 ){ document.getElementById('barraHpCampo31').style.width = parseInt(document.getElementById('barraHpCampo31').style.width.split('p')[0]) - (lvl*0.1);}else{matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] = 21; nivel += 3; expaux = nivel; lvl=0; for(lvl=1; expaux >= 0; lvl++){ expaux = expaux - lvl;} lvl--; let expmin = nivel - (lvl + expaux); let expmax = nivel - expaux -1; let exptotal = 0; (expmax - expmin)?exptotal = (expmax - expmin):exptotal = 1; document.getElementById('barraxp').style.width = (165 * (nivel - expmin)) / exptotal; document.getElementById('nivelvalor').innerHTML = nivel; document.getElementById('levelvalor').innerHTML = lvl; hpmax = ((lvl-1) * 15) + 176; preencherImagens(); document.getElementById('barraHpCampo31').style.width = 50;}} direcaoDoPersonagem = 3; if(outfit == "M"){ document.getElementById('personagem1').src = 'imagens/imagemPersonagemDeEsquerda.png'; }else if(outfit == "F"){ document.getElementById('personagem1').src = 'imagens/imagemPersonagemDeEsquerdaF.png'; } run_ajax();}
            }

            function moverDireita(){
                if(document.getElementById('mensagem1').style.visibility == 'hidden'){if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 0 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 4 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 6 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 7 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 12 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 13 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 14 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 15 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 22 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 23 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 24 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 25){ posicaoDoPersonagemNaMatriz[1] = posicaoDoPersonagemNaMatriz[1] + 1; preencherImagens(); if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]] == 7){nivelDeSolo++; document.getElementById('personagem1').style.top = parseInt(document.getElementById('personagem1').style.top.split('p')[0]) - 10; document.getElementById('personagem1').style.left = parseInt(document.getElementById('personagem1').style.left.split('p')[0]) - 10;} if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 7){nivelDeSolo--; document.getElementById('personagem1').style.top = parseInt(document.getElementById('personagem1').style.top.split('p')[0]) + 10; document.getElementById('personagem1').style.left = parseInt(document.getElementById('personagem1').style.left.split('p')[0]) + 10;}}else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 2){ mochila[0] = 'PocaoHP'; document.getElementById('itemCampoDaMochila1').src = 'imagens/imagemPocaoHP.png'; document.getElementById('itemCampoDaMochila1').alt = 'pocao hp'; document.getElementById('itemCampoDaMochila1').title = 'pocao hp'; mochila[1] = 'Corda'; document.getElementById('itemCampoDaMochila2').src = 'imagens/imagemCorda.png'; document.getElementById('itemCampoDaMochila2').alt = 'corda'; document.getElementById('itemCampoDaMochila2').title = 'corda'; mochila[2] = 'Pa'; document.getElementById('itemCampoDaMochila3').src = 'imagens/imagemPa.png'; document.getElementById('itemCampoDaMochila3').alt = 'pa'; document.getElementById('itemCampoDaMochila3').title = 'pa'; document.getElementById('fala1').src = 'imagens/imagemFalaDeposit.png'; setTimeout(function(){ document.getElementById('fala1').src = 'imagens/imagemFalaVazia.png';}, 1000); matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] = 3;}else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 3){document.getElementById('fala1').src = 'imagens/imagemFalaItemVazio.png'; setTimeout(function(){ document.getElementById('fala1').src = 'imagens/imagemFalaVazia.png';}, 1000);}else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 5){ posicaoDoPersonagemNaMatriz[0] = posicaoDoPersonagemNaMatriz[0]-10; posicaoDoPersonagemNaMatriz[1] = posicaoDoPersonagemNaMatriz[1]+1; preencherImagens();}else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 8 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 9){let expaux = nivel; let lvl=0; for(lvl=1; expaux >= 0; lvl++){ expaux = expaux - lvl;} lvl--; if( (parseInt(document.getElementById('barraHpCampo33').style.width.split('p')[0]) - (lvl*1.0)) > 0 ){ document.getElementById('barraHpCampo33').style.width = parseInt(document.getElementById('barraHpCampo33').style.width.split('p')[0]) - (lvl*1.0);}else{matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] = 10; nivel += 1; expaux = nivel; lvl=0; for(lvl=1; expaux >= 0; lvl++){ expaux = expaux - lvl;} lvl--; let expmin = nivel - (lvl + expaux); let expmax = nivel - expaux -1; let exptotal = 0; (expmax - expmin)?exptotal = (expmax - expmin):exptotal = 1; document.getElementById('barraxp').style.width = (165 * (nivel - expmin)) / exptotal; document.getElementById('nivelvalor').innerHTML = nivel; document.getElementById('levelvalor').innerHTML = lvl; hpmax = ((lvl-1) * 15) + 176; preencherImagens(); document.getElementById('barraHpCampo33').style.width = 50;}}else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 16 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 17){let expaux = nivel; let lvl=0; for(lvl=1; expaux >= 0; lvl++){ expaux = expaux - lvl;} lvl--; if( (parseInt(document.getElementById('barraHpCampo33').style.width.split('p')[0]) - (lvl*0.5)) > 0 ){ document.getElementById('barraHpCampo33').style.width = parseInt(document.getElementById('barraHpCampo33').style.width.split('p')[0]) - (lvl*0.5);}else{matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] = 18; nivel += 2; expaux = nivel; lvl=0; for(lvl=1; expaux >= 0; lvl++){ expaux = expaux - lvl;} lvl--; let expmin = nivel - (lvl + expaux); let expmax = nivel - expaux -1; let exptotal = 0; (expmax - expmin)?exptotal = (expmax - expmin):exptotal = 1; document.getElementById('barraxp').style.width = (165 * (nivel - expmin)) / exptotal; document.getElementById('nivelvalor').innerHTML = nivel; document.getElementById('levelvalor').innerHTML = lvl; hpmax = ((lvl-1) * 15) + 176; preencherImagens(); document.getElementById('barraHpCampo33').style.width = 50;}}else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 19 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 20){let expaux = nivel; let lvl=0; for(lvl=1; expaux >= 0; lvl++){ expaux = expaux - lvl;} lvl--; if( (parseInt(document.getElementById('barraHpCampo33').style.width.split('p')[0]) - (lvl*0.1)) > 0 ){ document.getElementById('barraHpCampo33').style.width = parseInt(document.getElementById('barraHpCampo33').style.width.split('p')[0]) - (lvl*0.1);}else{matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] = 21; nivel += 3; expaux = nivel; lvl=0; for(lvl=1; expaux >= 0; lvl++){ expaux = expaux - lvl;} lvl--; let expmin = nivel - (lvl + expaux); let expmax = nivel - expaux -1; let exptotal = 0; (expmax - expmin)?exptotal = (expmax - expmin):exptotal = 1; document.getElementById('barraxp').style.width = (165 * (nivel - expmin)) / exptotal; document.getElementById('nivelvalor').innerHTML = nivel; document.getElementById('levelvalor').innerHTML = lvl; hpmax = ((lvl-1) * 15) + 176; preencherImagens(); document.getElementById('barraHpCampo33').style.width = 50;}} direcaoDoPersonagem = 1; if(outfit == "M"){ document.getElementById('personagem1').src = 'imagens/imagemPersonagemDeDireita.png'; }else if(outfit == "F"){ document.getElementById('personagem1').src = 'imagens/imagemPersonagemDeDireitaF.png'; } run_ajax();}
            }

            function moverBaixo(){
                if(document.getElementById('mensagem1').style.visibility == 'hidden'){if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 0 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 4 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 6 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 7 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 12 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 13 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 14 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 15 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 22 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 23 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 24 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 25){ posicaoDoPersonagemNaMatriz[0] = posicaoDoPersonagemNaMatriz[0] + 1; preencherImagens(); if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]] == 7){nivelDeSolo++; document.getElementById('personagem1').style.top = parseInt(document.getElementById('personagem1').style.top.split('p')[0]) - 10; document.getElementById('personagem1').style.left = parseInt(document.getElementById('personagem1').style.left.split('p')[0]) - 10;} if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 7){nivelDeSolo--; document.getElementById('personagem1').style.top = parseInt(document.getElementById('personagem1').style.top.split('p')[0]) + 10; document.getElementById('personagem1').style.left = parseInt(document.getElementById('personagem1').style.left.split('p')[0]) + 10;}}else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 2){ mochila[0] = 'PocaoHP'; document.getElementById('itemCampoDaMochila1').src = 'imagens/imagemPocaoHP.png'; document.getElementById('itemCampoDaMochila1').alt = 'pocao hp'; document.getElementById('itemCampoDaMochila1').title = 'pocao hp'; mochila[1] = 'Corda'; document.getElementById('itemCampoDaMochila2').src = 'imagens/imagemCorda.png'; document.getElementById('itemCampoDaMochila2').alt = 'corda'; document.getElementById('itemCampoDaMochila2').title = 'corda'; mochila[2] = 'Pa'; document.getElementById('itemCampoDaMochila3').src = 'imagens/imagemPa.png'; document.getElementById('itemCampoDaMochila3').alt = 'pa'; document.getElementById('itemCampoDaMochila3').title = 'pa'; document.getElementById('fala1').src = 'imagens/imagemFalaDeposit.png'; setTimeout(function(){ document.getElementById('fala1').src = 'imagens/imagemFalaVazia.png';}, 1000); matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] = 3;}else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 3){document.getElementById('fala1').src = 'imagens/imagemFalaItemVazio.png'; setTimeout(function(){ document.getElementById('fala1').src = 'imagens/imagemFalaVazia.png';}, 1000);}else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 5){posicaoDoPersonagemNaMatriz[0] = posicaoDoPersonagemNaMatriz[0]-9; posicaoDoPersonagemNaMatriz[1] = posicaoDoPersonagemNaMatriz[1]; preencherImagens();}else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 8 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 9){let expaux = nivel; let lvl=0; for(lvl=1; expaux >= 0; lvl++){ expaux = expaux - lvl;} lvl--; if( (parseInt(document.getElementById('barraHpCampo41').style.width.split('p')[0]) - (lvl*1.0)) > 0 ){ document.getElementById('barraHpCampo41').style.width = parseInt(document.getElementById('barraHpCampo41').style.width.split('p')[0]) - (lvl*1.0);}else{matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] = 10; nivel += 1; expaux = nivel; lvl=0; for(lvl=1; expaux >= 0; lvl++){ expaux = expaux - lvl;} lvl--; let expmin = nivel - (lvl + expaux); let expmax = nivel - expaux -1; let exptotal = 0; (expmax - expmin)?exptotal = (expmax - expmin):exptotal = 1; document.getElementById('barraxp').style.width = (165 * (nivel - expmin)) / exptotal; document.getElementById('nivelvalor').innerHTML = nivel; document.getElementById('levelvalor').innerHTML = lvl; hpmax = ((lvl-1) * 15) + 176; preencherImagens(); document.getElementById('barraHpCampo41').style.width = 50;}}else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 16 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 17){let expaux = nivel; let lvl=0; for(lvl=1; expaux >= 0; lvl++){ expaux = expaux - lvl;} lvl--; if( (parseInt(document.getElementById('barraHpCampo41').style.width.split('p')[0]) - (lvl*0.5)) > 0 ){ document.getElementById('barraHpCampo41').style.width = parseInt(document.getElementById('barraHpCampo41').style.width.split('p')[0]) - (lvl*0.5);}else{matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] = 18; nivel += 2; expaux = nivel; lvl=0; for(lvl=1; expaux >= 0; lvl++){ expaux = expaux - lvl;} lvl--; let expmin = nivel - (lvl + expaux); let expmax = nivel - expaux -1; let exptotal = 0; (expmax - expmin)?exptotal = (expmax - expmin):exptotal = 1; document.getElementById('barraxp').style.width = (165 * (nivel - expmin)) / exptotal; document.getElementById('nivelvalor').innerHTML = nivel; document.getElementById('levelvalor').innerHTML = lvl; hpmax = ((lvl-1) * 15) + 176; preencherImagens(); document.getElementById('barraHpCampo41').style.width = 50;}}else if(matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 19 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 20){let expaux = nivel; let lvl=0; for(lvl=1; expaux >= 0; lvl++){ expaux = expaux - lvl;} lvl--; if( (parseInt(document.getElementById('barraHpCampo41').style.width.split('p')[0]) - (lvl*0.1)) > 0 ){ document.getElementById('barraHpCampo41').style.width = parseInt(document.getElementById('barraHpCampo41').style.width.split('p')[0]) - (lvl*0.1);}else{matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] = 21; nivel += 3; expaux = nivel; lvl=0; for(lvl=1; expaux >= 0; lvl++){ expaux = expaux - lvl;} lvl--; let expmin = nivel - (lvl + expaux); let expmax = nivel - expaux -1; let exptotal = 0; (expmax - expmin)?exptotal = (expmax - expmin):exptotal = 1; document.getElementById('barraxp').style.width = (165 * (nivel - expmin)) / exptotal; document.getElementById('nivelvalor').innerHTML = nivel; document.getElementById('levelvalor').innerHTML = lvl; hpmax = ((lvl-1) * 15) + 176; preencherImagens(); document.getElementById('barraHpCampo41').style.width = 50;}} direcaoDoPersonagem = 2; if(outfit == "M"){ document.getElementById('personagem1').src = 'imagens/imagemPersonagemDeFrente.png'; }else if(outfit == "F"){ document.getElementById('personagem1').src = 'imagens/imagemPersonagemDeFrenteF.png'; } run_ajax();}
            }

            function funcMoverPersonagem(){
                if(document.getElementById('mensagem1').style.visibility == 'hidden'){
                    if(moverPersonagem[0] != 0 || moverPersonagem[1] != 0 ){
                        if(moverPersonagem[1] < 0 && (matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 0 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 4 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 6 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 7 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 12 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 13 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 14 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 15 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 22 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 23 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 24 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]-1] == 25)){
                            moverEsquerda();
                            moverPersonagem[1] = moverPersonagem[1] + 1;
                        }else if(moverPersonagem[0] < 0 && (matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 0 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 4 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 6 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 7 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 12 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 13 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 14 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 15 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 22 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 23 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 24 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]-1][posicaoDoPersonagemNaMatriz[1]] == 25)){
                            moverCima();
                            moverPersonagem[0] = moverPersonagem[0] + 1;
                        }else if(moverPersonagem[1] > 0 && (matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 0 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 4 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 6 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 7 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 12 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 13 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 14 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 15 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 22 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 23 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 24 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]][posicaoDoPersonagemNaMatriz[1]+1] == 25)){
                            moverDireita();
                            moverPersonagem[1] = moverPersonagem[1] - 1;
                        }else if(moverPersonagem[0] > 0 && (matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 0 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 4 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 6 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 7 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 12 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 13 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 14 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 15 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 22 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 23 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 24 || matrizDoMapa[posicaoDoPersonagemNaMatriz[0]+1][posicaoDoPersonagemNaMatriz[1]] == 25)){
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

            }

            function loop(){
                animacaoMonster(8,9,10,50); //Snake(normal,atacando,morto,hit)
                animacaoMonster(16,17,18,150); //Dragon(normal,atacando,morto,hit)
                animacaoMonster(19,20,21,450); //Mammoth(normal,atacando,morto,hit)

                let expaux = nivel;
                let lvl=0;
                for(lvl=1; expaux >= 0; lvl++){
                    expaux = expaux - lvl;
                }
                lvl--;
                let expmin = nivel - (lvl + expaux);
                let expmax = nivel - expaux -1;
                let exptotal = 0;
                (expmax - expmin)?exptotal = (expmax - expmin):exptotal = 1;

                document.getElementById('levelvalor').innerHTML = lvl;

                document.getElementById('nivelvalor').innerHTML = nivel;
                document.getElementById('barraxp').style.width = (165 * (nivel - expmin)) / exptotal;
                document.getElementById('speedvalor').innerHTML = (lvl < 490)?(109+lvl):'max';
                document.getElementById('hpvalor').innerHTML = hp;
                hpmax = ((lvl-1) * 15) + 176;
                document.getElementById('hp').style.width = (176 * hp) / hpmax;
                if(parseInt(document.getElementById('hp').style.width.split('p')[0]) <= 44){ document.getElementById('hp').style.background = 'tomato'; document.getElementById('nomePersonagem1').style.color = 'tomato'; document.getElementById('barraHpPersonagem1').style.background = 'tomato'; }else if(parseInt(document.getElementById('hp').style.width.split('p')[0]) <= 88){ document.getElementById('hp').style.background = 'orange'; document.getElementById('nomePersonagem1').style.color = 'orange'; document.getElementById('barraHpPersonagem1').style.background = 'orange'; }else if(parseInt(document.getElementById('hp').style.width.split('p')[0]) > 88){ document.getElementById('hp').style.background = 'mediumseagreen';  document.getElementById('nomePersonagem1').style.color = 'mediumseagreen'; document.getElementById('barraHpPersonagem1').style.background = 'mediumseagreen'; }

                document.getElementById('barraHpPersonagem1').style.width = (50 * hp) / hpmax;

                run_ajax();
                preencherImagens();

                if(identificadorDoChat == 0){
                    document.getElementById('textareaChat').value = mensagensDoChatDefault;
                } else if(identificadorDoChat == 1){
                    document.getElementById('textareaChat').value = mensagensDoChatNpc;
                }

                document.getElementById('personagem1').title = username + " level: " + lvl.toString() + " hp: " + hp.toString();
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
                            let expaux = nivel;
                            let lvl=0;
                            for(lvl=1; expaux >= 0; lvl++){
                                expaux = expaux - lvl;
                            }
                            if(document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'exura gran' && nivelDeConversaNpc == 2 && lvl >= 50){
                                nivelDeConversaNpc = 3;
                            }else if(document.getElementById('campoDeEscritaInput').value.toLowerCase() == 'exura gran' && nivelDeConversaNpc == 2 && lvl < 50){
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
                                mensagensDoChatNpc += "\nNpc: Voce precisa de level 50+ para aprender esta magia!";
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
                        if(hp + 60 < hpmax){
                            hp = hp + 60;
                            document.getElementById('hpvalor').innerHTML = hp;
                            document.getElementById('hp').style.width = (176 * hp) / hpmax;
                            document.getElementById('barraHpPersonagem1').style.width = (50 * hp) / hpmax;
                        } else {
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
                    if(conjurarExuraGran && hp < hpmax){
                        if(hp + 120 < hpmax){
                            hp = hp + 120;
                            document.getElementById('hpvalor').innerHTML = hp;
                            document.getElementById('hp').style.width = (176 * hp) / hpmax;
                            document.getElementById('barraHpPersonagem1').style.width = (50 * hp) / hpmax;
                        } else {
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

        </script>
    </head>
    <body onload="setInterval('loop()', 1000);" onKeyPress="pressKey(event)">
        <div id='mapa1'style='position:fixed; top: 0; left: 0'>
            <div id='m1r1'style='top: 0'>
                <div id='m1r1c1' style='width: 60; height: 60; float: left'>
                    <img id='campo1' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [-3,-4];"></img>
                    <div id='nomeCampo1' style='position:fixed; top: 5; left: 5; width: 50; text-align: center; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo1' title='hp' style='position:fixed; top: 1; left: 5; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo1' title='hp' style='position:fixed; top: 1; left: 5; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                </div>
                <div id='m1r1c2' style='width: 60; height: 60; float: left'>
                    <img id='campo2' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [-3,-3];"></img>
                    <div id='nomeCampo2' style='position:fixed; top: 5; left: 65; width: 50; text-align: center; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo2' title='hp' style='position:fixed; top: 1; left: 65; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo2' title='hp' style='position:fixed; top: 1; left: 65; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                </div>
                <div id='m1r1c3' style='width: 60; height: 60; float: left'>
                    <img id='campo3' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [-3,-2];"></img>
                    <div id='nomeCampo3' style='position:fixed; top: 5; left: 125; width: 50; text-align: center; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo3' title='hp' style='position:fixed; top: 1; left: 125; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo3' title='hp' style='position:fixed; top: 1; left: 125; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                </div>
                <div id='m1r1c4' style='width: 60; height: 60; float: left'>
                    <img id='campo4' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [-3,-1];"></img>
                    <div id='nomeCampo4' style='position:fixed; top: 5; left: 185; width: 50; text-align: center; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo4' title='hp' style='position:fixed; top: 1; left: 185; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo4' title='hp' style='position:fixed; top: 1; left: 185; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo5' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [-3,0];"></img>
                    <div id='nomeCampo5' style='position:fixed; top: 5; left: 245; width: 50; text-align: center; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo5' title='hp' style='position:fixed; top: 1; left: 245; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo5' title='hp' style='position:fixed; top: 1; left: 245; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo6' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [-3,1];"></img>
                    <div id='nomeCampo6' style='position:fixed; top: 5; left: 305; width: 50; text-align: center; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo6' title='hp' style='position:fixed; top: 1; left: 305; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo6' title='hp' style='position:fixed; top: 1; left: 305; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo7' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [-3,2];"></img>
                    <div id='nomeCampo7' style='position:fixed; top: 5; left: 365; width: 50; text-align: center; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo7' title='hp' style='position:fixed; top: 1; left: 365; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo7' title='hp' style='position:fixed; top: 1; left: 365; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo8' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [-3,3];"></img>
                    <div id='nomeCampo8' style='position:fixed; top: 5; left: 425; width: 50; text-align: center; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo8' title='hp' style='position:fixed; top: 1; left: 425; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo8' title='hp' style='position:fixed; top: 1; left: 425; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo9' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [-3,4];"></img>
                    <div id='nomeCampo9' style='position:fixed; top: 5; left: 485; width: 50; text-align: center; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo9' title='hp' style='position:fixed; top: 1; left: 485; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo9' title='hp' style='position:fixed; top: 1; left: 485; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                </div>
            </div>
            <div id='m1r1'style='top: 0'>
                <div id='m1r1c1' style='width: 60; height: 60; float: left'>
                    <img id='campo10' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [-2,-4];"></img>
                    <div id='nomeCampo10' style='position:fixed; top: 65; left: 5; width: 50; text-align: center; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo10' title='hp' style='position:fixed; top: 61; left: 5; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo10' title='hp' style='position:fixed; top: 61; left: 5; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                </div>
                <div id='m1r1c2' style='width: 60; height: 60; float: left'>
                    <img id='campo11' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [-2,-3];"></img>
                    <div id='nomeCampo11' style='position:fixed; top: 65; left: 65; width: 50; text-align: center; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo11' title='hp' style='position:fixed; top: 61; left: 65; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo11' title='hp' style='position:fixed; top: 61; left: 65; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                </div>
                <div id='m1r1c3' style='width: 60; height: 60; float: left'>
                    <img id='campo12' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [-2,-2];"></img>
                    <div id='nomeCampo12' style='position:fixed; top: 65; left: 125; width: 50; text-align: center; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo12' title='hp' style='position:fixed; top: 61; left: 125; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo12' title='hp' style='position:fixed; top: 61; left: 125; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                </div>
                <div id='m1r1c4' style='width: 60; height: 60; float: left'>
                    <img id='campo13' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [-2,-1];"></img>
                    <div id='nomeCampo13' style='position:fixed; top: 65; left: 185; width: 50; text-align: center; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo13' title='hp' style='position:fixed; top: 61; left: 185; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo13' title='hp' style='position:fixed; top: 61; left: 185; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo14' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [-2,0];"></img>
                    <div id='nomeCampo14' style='position:fixed; top: 65; left: 245; width: 50; text-align: center; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo14' title='hp' style='position:fixed; top: 61; left: 245; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo14' title='hp' style='position:fixed; top: 61; left: 245; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo15' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [-2,1];"></img>
                    <div id='nomeCampo15' style='position:fixed; top: 65; left: 305; width: 50; text-align: center; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo15' title='hp' style='position:fixed; top: 61; left: 305; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo15' title='hp' style='position:fixed; top: 61; left: 305; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo16' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [-2,2];"></img>
                    <div id='nomeCampo16' style='position:fixed; top: 65; left: 365; width: 50; text-align: center; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo16' title='hp' style='position:fixed; top: 61; left: 365; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo16' title='hp' style='position:fixed; top: 61; left: 365; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo17' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [-2,3];"></img>
                    <div id='nomeCampo17' style='position:fixed; top: 65; left: 425; width: 50; text-align: center; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo17' title='hp' style='position:fixed; top: 61; left: 425; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo17' title='hp' style='position:fixed; top: 61; left: 425; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo18' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [-2,4];"></img>
                    <div id='nomeCampo18' style='position:fixed; top: 65; left: 485; width: 50; text-align: center; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo18' title='hp' style='position:fixed; top: 61; left: 485; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo18' title='hp' style='position:fixed; top: 61; left: 485; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                </div>
            </div>
            <div id='m1r1'style='top: 0'>
                <div id='m1r1c1' style='width: 60; height: 60; float: left'>
                    <img id='campo19' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [-1,-4];"></img>
                    <div id='nomeCampo19' style='position:fixed; top: 125; left: 5; width: 50; text-align: center; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo19' title='hp' style='position:fixed; top: 121; left: 5; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo19' title='hp' style='position:fixed; top: 121; left: 5; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                </div>
                <div id='m1r1c2' style='width: 60; height: 60; float: left'>
                    <img id='campo20' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [-1,-3];"></img>
                    <div id='nomeCampo20' style='position:fixed; top: 125; left: 65; width: 50; text-align: center; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo20' title='hp' style='position:fixed; top: 121; left: 65; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo20' title='hp' style='position:fixed; top: 121; left: 65; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                </div>
                <div id='m1r1c3' style='width: 60; height: 60; float: left'>
                    <img id='campo21' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [-1,-2];"></img>
                    <div id='nomeCampo21' style='position:fixed; top: 125; left: 125; width: 50; text-align: center; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo21' title='hp' style='position:fixed; top: 121; left: 125; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo21' title='hp' style='position:fixed; top: 121; left: 125; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                </div>
                <div id='m1r1c4' style='width: 60; height: 60; float: left'>
                    <img id='campo22' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [-1,-1];"></img>
                    <div id='nomeCampo22' style='position:fixed; top: 125; left: 185; width: 50; text-align: center; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo22' title='hp' style='position:fixed; top: 121; left: 185; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo22' title='hp' style='position:fixed; top: 121; left: 185; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo23' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [-1,0];"></img>
                    <div id='nomeCampo23' style='position:fixed; top: 125; left: 245; width: 50; text-align: center; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo23' title='hp' style='position:fixed; top: 121; left: 245; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo23' title='hp' style='position:fixed; top: 121; left: 245; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo24' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [-1,1];"></img>
                    <div id='nomeCampo24' style='position:fixed; top: 125; left: 305; width: 50; text-align: center; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo24' title='hp' style='position:fixed; top: 121; left: 305; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo24' title='hp' style='position:fixed; top: 121; left: 305; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo25' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [-1,2];"></img>
                    <div id='nomeCampo25' style='position:fixed; top: 125; left: 365; width: 50; text-align: center; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo25' title='hp' style='position:fixed; top: 121; left: 365; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo25' title='hp' style='position:fixed; top: 121; left: 365; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo26' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [-1,3];"></img>
                    <div id='nomeCampo26' style='position:fixed; top: 125; left: 425; width: 50; text-align: center; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo26' title='hp' style='position:fixed; top: 121; left: 425; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo26' title='hp' style='position:fixed; top: 121; left: 425; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo27' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [-1,4];"></img>
                    <div id='nomeCampo27' style='position:fixed; top: 125; left: 485; width: 50; text-align: center; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo27' title='hp' style='position:fixed; top: 121; left: 485; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo27' title='hp' style='position:fixed; top: 121; left: 485; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                </div>
            </div>
            <div id='m1r1'style='top: 0'>
                <div id='m1r1c1' style='width: 60; height: 60; float: left'>
                    <img id='campo28' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [0,-4];"></img>
                    <div id='nomeCampo28' style='position:fixed; top: 185; left: 5; width: 50; text-align: center; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo28' title='hp' style='position:fixed; top: 181; left: 5; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo28' title='hp' style='position:fixed; top: 181; left: 5; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                </div>
                <div id='m1r1c2' style='width: 60; height: 60; float: left'>
                    <img id='campo29' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [0,-3];"></img>
                    <div id='nomeCampo29' style='position:fixed; top: 185; left: 65; width: 50; text-align: center; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo29' title='hp' style='position:fixed; top: 181; left: 65; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo29' title='hp' style='position:fixed; top: 181; left: 65; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                </div>
                <div id='m1r1c3' style='width: 60; height: 60; float: left'>
                    <img id='campo30' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [0,-2];"></img>
                    <div id='nomeCampo30' style='position:fixed; top: 185; left: 125; width: 50; text-align: center; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo30' title='hp' style='position:fixed; top: 181; left: 125; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo30' title='hp' style='position:fixed; top: 181; left: 125; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                </div>
                <div id='m1r1c4' style='width: 60; height: 60; float: left'>
                    <img id='campo31' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [0,-1];"></img>
                    <div id='nomeCampo31' style='position:fixed; top: 185; left: 185; width: 50; text-align: center; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo31' title='hp' style='position:fixed; top: 181; left: 185; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo31' title='hp' style='position:fixed; top: 181; left: 185; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo32' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%'></img>
                    <div id='nomeCampo32' style='position:fixed; top: 185; left: 245; width: 50; text-align: center; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo32' title='hp' style='position:fixed; top: 181; left: 245; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo32' title='hp' style='position:fixed; top: 181; left: 245; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo33' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [0,1];"></img>
                    <div id='nomeCampo33' style='position:fixed; top: 185; left: 305; width: 50; text-align: center; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo33' title='hp' style='position:fixed; top: 181; left: 305; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo33' title='hp' style='position:fixed; top: 181; left: 305; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo34' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [0,2];"></img>
                    <div id='nomeCampo34' style='position:fixed; top: 185; left: 365; width: 50; text-align: center; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo34' title='hp' style='position:fixed; top: 181; left: 365; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo34' title='hp' style='position:fixed; top: 181; left: 365; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo35' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [0,3];"></img>
                    <div id='nomeCampo35' style='position:fixed; top: 185; left: 425; width: 50; text-align: center; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo35' title='hp' style='position:fixed; top: 181; left: 425; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo35' title='hp' style='position:fixed; top: 181; left: 425; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo36' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [0,4];"></img>
                    <div id='nomeCampo36' style='position:fixed; top: 185; left: 485; width: 50; text-align: center; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo36' title='hp' style='position:fixed; top: 181; left: 485; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo36' title='hp' style='position:fixed; top: 181; left: 485; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                </div>
            </div>
            <div id='m1r1'style='top: 0'>
                <div id='m1r1c1' style='width: 60; height: 60; float: left'>
                    <img id='campo37' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [1,-4];"></img>
                    <div id='nomeCampo37' style='position:fixed; top: 245; left: 5; width: 50; text-align: center; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo37' title='hp' style='position:fixed; top: 241; left: 5; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo37' title='hp' style='position:fixed; top: 241; left: 5; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                </div>
                <div id='m1r1c2' style='width: 60; height: 60; float: left'>
                    <img id='campo38' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [1,-3];"></img>
                    <div id='nomeCampo38' style='position:fixed; top: 245; left: 65; width: 50; text-align: center; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo38' title='hp' style='position:fixed; top: 241; left: 65; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo38' title='hp' style='position:fixed; top: 241; left: 65; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                </div>
                <div id='m1r1c3' style='width: 60; height: 60; float: left'>
                    <img id='campo39' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [1,-2];"></img>
                    <div id='nomeCampo39' style='position:fixed; top: 245; left: 125; width: 50; text-align: center; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo39' title='hp' style='position:fixed; top: 241; left: 125; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo39' title='hp' style='position:fixed; top: 241; left: 125; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                </div>
                <div id='m1r1c4' style='width: 60; height: 60; float: left'>
                    <img id='campo40' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [1,-1];"></img>
                    <div id='nomeCampo40' style='position:fixed; top: 245; left: 185; width: 50; text-align: center; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo40' title='hp' style='position:fixed; top: 241; left: 185; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo40' title='hp' style='position:fixed; top: 241; left: 185; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo41' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [1,0];"></img>
                    <div id='nomeCampo41' style='position:fixed; top: 245; left: 245; width: 50; text-align: center; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo41' title='hp' style='position:fixed; top: 241; left: 245; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo41' title='hp' style='position:fixed; top: 241; left: 245; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo42' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [1,1];"></img>
                    <div id='nomeCampo42' style='position:fixed; top: 245; left: 305; width: 50; text-align: center; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo42' title='hp' style='position:fixed; top: 241; left: 305; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo42' title='hp' style='position:fixed; top: 241; left: 305; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo43' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [1,2];"></img>
                    <div id='nomeCampo43' style='position:fixed; top: 245; left: 365; width: 50; text-align: center; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo43' title='hp' style='position:fixed; top: 241; left: 365; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo43' title='hp' style='position:fixed; top: 241; left: 365; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo44' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [1,3];"></img>
                    <div id='nomeCampo44' style='position:fixed; top: 245; left: 425; width: 50; text-align: center; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo44' title='hp' style='position:fixed; top: 241; left: 425; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo44' title='hp' style='position:fixed; top: 241; left: 425; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo45' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [1,4];"></img>
                    <div id='nomeCampo45' style='position:fixed; top: 245; left: 485; width: 50; text-align: center; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo45' title='hp' style='position:fixed; top: 241; left: 485; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo45' title='hp' style='position:fixed; top: 241; left: 485; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                </div>
            </div>
            <div id='m1r1'style='top: 0'>
                <div id='m1r1c1' style='width: 60; height: 60; float: left'>
                    <img id='campo46' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [2,-4];"></img>
                    <div id='nomeCampo46' style='position:fixed; top: 305; left: 5; width: 50; text-align: center; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo46' title='hp' style='position:fixed; top: 301; left: 5; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo46' title='hp' style='position:fixed; top: 301; left: 5; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                </div>
                <div id='m1r1c2' style='width: 60; height: 60; float: left'>
                    <img id='campo47' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [2,-3];"></img>
                    <div id='nomeCampo47' style='position:fixed; top: 305; left: 65; width: 50; text-align: center; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo47' title='hp' style='position:fixed; top: 301; left: 65; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo47' title='hp' style='position:fixed; top: 301; left: 65; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                </div>
                <div id='m1r1c3' style='width: 60; height: 60; float: left'>
                    <img id='campo48' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [2,-2];"></img>
                    <div id='nomeCampo48' style='position:fixed; top: 305; left: 125; width: 50; text-align: center; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo48' title='hp' style='position:fixed; top: 301; left: 125; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo48' title='hp' style='position:fixed; top: 301; left: 125; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                </div>
                <div id='m1r1c4' style='width: 60; height: 60; float: left'>
                    <img id='campo49' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [2,-1];"></img>
                    <div id='nomeCampo49' style='position:fixed; top: 305; left: 185; width: 50; text-align: center; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo49' title='hp' style='position:fixed; top: 301; left: 185; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo49' title='hp' style='position:fixed; top: 301; left: 185; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo50' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [2,0];"></img>
                    <div id='nomeCampo50' style='position:fixed; top: 305; left: 245; width: 50; text-align: center; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo50' title='hp' style='position:fixed; top: 301; left: 245; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo50' title='hp' style='position:fixed; top: 301; left: 245; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo51' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [2,1];"></img>
                    <div id='nomeCampo51' style='position:fixed; top: 305; left: 305; width: 50; text-align: center; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo51' title='hp' style='position:fixed; top: 301; left: 305; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo51' title='hp' style='position:fixed; top: 301; left: 305; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo52' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [2,2];"></img>
                    <div id='nomeCampo52' style='position:fixed; top: 305; left: 365; width: 50; text-align: center; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo52' title='hp' style='position:fixed; top: 301; left: 365; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo52' title='hp' style='position:fixed; top: 301; left: 365; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo53' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [2,3];"></img>
                    <div id='nomeCampo53' style='position:fixed; top: 305; left: 425; width: 50; text-align: center; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo53' title='hp' style='position:fixed; top: 301; left: 425; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo53' title='hp' style='position:fixed; top: 301; left: 425; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo54' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [2,4];"></img>
                    <div id='nomeCampo54' style='position:fixed; top: 305; left: 485; width: 50; text-align: center; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo54' title='hp' style='position:fixed; top: 301; left: 485; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo54' title='hp' style='position:fixed; top: 301; left: 485; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                </div>
            </div>
            <div id='m1r1'style='top: 0'>
                <div id='m1r1c1' style='width: 60; height: 60; float: left'>
                    <img id='campo55' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [3,-4];"></img>
                    <div id='nomeCampo55' style='position:fixed; top: 365; left: 5; width: 50; text-align: center; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo55' title='hp' style='position:fixed; top: 361; left: 5; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo55' title='hp' style='position:fixed; top: 361; left: 5; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                </div>
                <div id='m1r1c2' style='width: 60; height: 60; float: left'>
                    <img id='campo56' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [3,-3];"></img>
                    <div id='nomeCampo56' style='position:fixed; top: 365; left: 65; width: 50; text-align: center; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo56' title='hp' style='position:fixed; top: 361; left: 65; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo56' title='hp' style='position:fixed; top: 361; left: 65; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                </div>
                <div id='m1r1c3' style='width: 60; height: 60; float: left'>
                    <img id='campo57' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [3,-2];"></img>
                    <div id='nomeCampo57' style='position:fixed; top: 365; left: 125; width: 50; text-align: center; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo57' title='hp' style='position:fixed; top: 361; left: 125; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo57' title='hp' style='position:fixed; top: 361; left: 125; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                </div>
                <div id='m1r1c4' style='width: 60; height: 60; float: left'>
                    <img id='campo58' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [3,-1];"></img>
                    <div id='nomeCampo58' style='position:fixed; top: 365; left: 185; width: 50; text-align: center; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo58' title='hp' style='position:fixed; top: 361; left: 185; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo58' title='hp' style='position:fixed; top: 361; left: 185; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo59' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [3,0];"></img>
                    <div id='nomeCampo59' style='position:fixed; top: 365; left: 245; width: 50; text-align: center; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo59' title='hp' style='position:fixed; top: 361; left: 245; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo59' title='hp' style='position:fixed; top: 361; left: 245; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo60' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [3,1];"></img>
                    <div id='nomeCampo60' style='position:fixed; top: 365; left: 305; width: 50; text-align: center; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo60' title='hp' style='position:fixed; top: 361; left: 305; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo60' title='hp' style='position:fixed; top: 361; left: 305; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo61' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [3,2];"></img>
                    <div id='nomeCampo61' style='position:fixed; top: 365; left: 365; width: 50; text-align: center; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo61' title='hp' style='position:fixed; top: 361; left: 365; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo61' title='hp' style='position:fixed; top: 361; left: 365; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo62' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [3,3];"></img>
                    <div id='nomeCampo62' style='position:fixed; top: 365; left: 425; width: 50; text-align: center; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo62' title='hp' style='position:fixed; top: 361; left: 425; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo62' title='hp' style='position:fixed; top: 361; left: 425; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                </div>
                <div id='m1r1c5' style='width: 60; height: 60; float: left'>
                    <img id='campo63' src='imagens/imagemCampo.png' alt='campo' title='campo' style='width: 100%; height: 100%' onclick="moverPersonagem = [3,4];"></img>
                    <div id='nomeCampo63' style='position:fixed; top: 365; left: 485; width: 50; text-align: center; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small; visibility: hidden;'>
                    
                    </div>
                    <div id='barraHpVaziaCampo63' title='hp' style='position:fixed; top: 361; left: 485; width: 50; height: 3; background-color: black; visibility: hidden;'>
                
                    </div>
                    <div id='barraHpCampo63' title='hp' style='position:fixed; top: 361; left: 485; width: 50; height: 3; background-color: mediumseagreen; visibility: hidden;'>
                
                    </div>
                </div>
            </div>
        </div>
        
        <img id='personagem1' src='imagens/imagemPersonagemDeFrente.png' alt='personagem' title='personagem' style='position:fixed; top: 185; left: 245; width: 50; height: 50;'></img>
        <div id='nomePersonagem1' style='position:fixed; top: 185; left: 245; width: 50; text-align: center; color: mediumseagreen; font-family: "Lucida Console", "Courier New", monospace; font-size: small;'>
        
        </div>
        <div id='barraHpVaziaPersonagem1' title='hp' style='position:fixed; top: 181; left: 245; width: 50; height: 3; background-color: black;'>
                
        </div>
        <div id='barraHpPersonagem1' title='hp' style='position:fixed; top: 181; left: 245; width: 50; height: 3; background-color: mediumseagreen;'>
    
        </div>
        <img id='fala1' src='imagens/imagemFalaVazia.png' alt='fala' style='position:fixed; top: 185; left: 245;'></img>
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
                    <img id='itemCampoDaMochila1' src='imagens/imagemCampoItem.png' alt='item' title='item' style='width: 100%; height: 100%' onclick="if(document.getElementById('mensagem1').style.visibility == 'hidden'){if(mochila[0] == 'PocaoHP'){document.getElementById('fala1').src = 'imagens/imagemFalaPocaoHP.png'; if(hp < hpmax){if(hp + 40 < hpmax){hp = hp + 40; document.getElementById('hp').style.width = (176 * hp) / hpmax; document.getElementById('barraHpPersonagem1').style.width = (50 * hp) / hpmax;}else{hp = hpmax; document.getElementById('hp').style.width = 176; document.getElementById('barraHpPersonagem1').style.width = 50;}} if(parseInt(document.getElementById('hp').style.width.split('p')[0]) <= 44){ document.getElementById('hp').style.background = 'tomato'; document.getElementById('nomePersonagem1').style.color = 'tomato'; document.getElementById('barraHpPersonagem1').style.background = 'tomato';}else if(parseInt(document.getElementById('hp').style.width.split('p')[0]) <= 88){ document.getElementById('hp').style.background = 'orange'; document.getElementById('nomePersonagem1').style.color = 'orange'; document.getElementById('barraHpPersonagem1').style.background = 'orange';}else if(parseInt(document.getElementById('hp').style.width.split('p')[0]) > 88){ document.getElementById('hp').style.background = 'mediumseagreen'; document.getElementById('nomePersonagem1').style.color = 'mediumseagreen'; document.getElementById('barraHpPersonagem1').style.background = 'mediumseagreen';} document.getElementById('hpvalor').innerHTML = hp; setTimeout(function(){document.getElementById('fala1').src = 'imagens/imagemFalaVazia.png';}, 1000);}}"></img>
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
            <div id='magias' title='magias' style='position: absolute; top: 160; left: 0; margin: 1; width: 176; height: 44; background-color: lightgray;'>
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
                            if(hp + 60 < hpmax){
                                hp = hp + 60;
                                document.getElementById('hpvalor').innerHTML = hp;
                                document.getElementById('hp').style.width = (176 * hp) / hpmax;
                                document.getElementById('barraHpPersonagem1').style.width = (50 * hp) / hpmax;
                            } else {
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
                            if(hp + 120 < hpmax){
                                hp = hp + 120;
                                document.getElementById('hpvalor').innerHTML = hp;
                                document.getElementById('hp').style.width = (176 * hp) / hpmax;
                                document.getElementById('barraHpPersonagem1').style.width = (50 * hp) / hpmax;
                            } else {
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
                <button type="submit" id='logout' title='sair' style='position: absolute; top: 230; left: 0; margin: 1; width: 174; height: 44; background-color: lightgray; visibility: visible;'>
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

                $sql = "SELECT `username`, `password` ,`nivel`, `hp`, `outfit` FROM `ottibia` WHERE `username`='" . $username . "' AND `password`='" . $password . "'";
                
                $result = $conn->query($sql);

                while($obj = $result->fetch_object()){

                    echo "username = '" . $obj->username . "';";
                    echo "password = '" . $obj->password . "';";
                    echo "nivel = " . $obj->nivel . ";";
                    echo "hp = " . $obj->hp . ";";
                    echo "outfit = '" . $obj->outfit . "';";

                    $logado = true;
                }

                if(!$logado){
                    echo "alert('Conta inexistente, os seus dados nao serao salvos. Acesse login.php para se registrar.');";
                }

                $result->close();
                
                $conn->close();
                
            ?>

            document.getElementById('nomePersonagem1').innerHTML = username;

            document.getElementById('level').innerHTML = 'Level';
            let expaux = nivel;
            let lvl=0;
            for(lvl=1; expaux >= 0; lvl++){
                expaux = expaux - lvl;
            }
            lvl--;
            document.getElementById('levelvalor').innerHTML = lvl;

            setInterval('funcMoverPersonagem()', (lvl < 490)?(500 - lvl):10);

            hpmax = ((lvl-1) * 15) + 176;
            document.getElementById('hp').style.width = (176 * hp) / hpmax;
            document.getElementById('hpvalor').innerHTML = hp;
            document.getElementById('nivel').innerHTML = 'Xp';
            document.getElementById('nivelvalor').innerHTML = nivel;
            document.getElementById('speed').innerHTML = 'Speed';
            document.getElementById('speedvalor').innerHTML = (lvl < 490)?(109+lvl):'max';

            document.getElementById('fala1').src = 'imagens/imagemFalaVoceJaTemBless.png';
            setTimeout(function(){document.getElementById('fala1').src = 'imagens/imagemFalaVazia.png';}, 2000);

            if(outfit == "M"){
                document.getElementById('personagem1').src = 'imagens/imagemPersonagemDeFrente.png';
            }else if(outfit == "F"){
                document.getElementById('personagem1').src = 'imagens/imagemPersonagemDeFrenteF.png';
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

            document.getElementById('barraHpPersonagem1').style.width = (50 * hp) / hpmax;
            
        </script>

    </body>
</html>
