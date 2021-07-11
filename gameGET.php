<?php

    #file_get_contents()
    #file_put_contents()

    /*
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

    $username = $_POST['username'];
    $password = $_POST['password'];
    $nivel_atual = $_POST['nivel'];
    //$nivel_antigo = 1;
    $first = true;
    $response_json = "";

    $date1  = filemtime('dados/dados1.txt') + 1;
    $date2 = time();
    $result = $date1 > $date2;

    if($result){
        echo file_get_contents('dados/dados1.txt');
    }else{

        $sql = "SELECT `username`, `x`, `y`, `direcao`, `nivel`, `hp`, `outfit`, `mensagem` FROM `ottibia`";
        //$sql = "SELECT `username`, `x`, `y`, `direcao`, `nivel`, `hp`, `outfit`, `mensagem` FROM `ottibia` WHERE `username`<>'" . $username . "'";
        
        $result = $conn->query($sql);

        $response_json = "{\"players\":[";

        while($obj = $result->fetch_object()){

            if($first){
                $response_json .= "{\"username\":\"" . $obj->username . "\",\"x\":" . $obj->x . ",\"y\":" . $obj->y . ",\"direcao\":" . $obj->direcao . ",\"nivel\":" . $obj->nivel . ",\"hp\":" . $obj->hp . ",\"outfit\":\"" . $obj->outfit . "\",\"mensagem\":\"" . $obj->mensagem . "\"}";
                $first = false;
            } else {
                $response_json .= ",{\"username\":\"" . $obj->username . "\",\"x\":" . $obj->x . ",\"y\":" . $obj->y . ",\"direcao\":" . $obj->direcao . ",\"nivel\":" . $obj->nivel . ",\"hp\":" . $obj->hp . ",\"outfit\":\"" . $obj->outfit . "\",\"mensagem\":\"" . $obj->mensagem . "\"}";
            }

        }

        $response_json .= "]}";

        $result->close();

        echo $response_json;

        file_put_contents('dados/dados1.txt', $response_json );

    }

    /* $sql = "SELECT `nivel` FROM `ottibia` WHERE `username`='" . $username . "' AND `password`='" . $password . "'";
                
    $result = $conn->query($sql);

    while($obj = $result->fetch_object()){
        $nivel_antigo = $obj->nivel;
    }

    $result->close();

    if($nivel_atual >= $nivel_antigo){ */

        $sql = "UPDATE `ottibia` SET `x`=" . $_POST['x'] . ", `y`=" . $_POST['y'] . ", `direcao`=" . $_POST['direcao'] . ", `outfit`='" . $_POST['outfit'] . "', `nivel`=" . $_POST['nivel'] . ", `hp`=" . $_POST['hp'] . ", `mensagem`='" . $_POST['mensagem'] . "' WHERE `username`='" . $username . "' AND `password`='" . $password . "'";

        $conn->query($sql);

    //}
    
    $conn->close();
    
?>