<?php

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
    $nivel_antigo = 1;
    $first = true;

    $sql = "SELECT `username`, `x`, `y`, `direcao`, `nivel`, `hp`, `outfit` FROM `ottibia` WHERE `username`<>'" . $username . "'";
    
    $result = $conn->query($sql);

    echo "{\"players\":[";

    while($obj = $result->fetch_object()){

        if($first){
            echo "{\"username\":\"" . $obj->username . "\",\"x\":" . $obj->x . ",\"y\":" . $obj->y . ",\"direcao\":" . $obj->direcao . ",\"nivel\":" . $obj->nivel . ",\"hp\":" . $obj->hp . ",\"outfit\":\"" . $obj->outfit . "\"}";
            $first = false;
        } else {
            echo ",{\"username\":\"" . $obj->username . "\",\"x\":" . $obj->x . ",\"y\":" . $obj->y . ",\"direcao\":" . $obj->direcao . ",\"nivel\":" . $obj->nivel . ",\"hp\":" . $obj->hp . ",\"outfit\":\"" . $obj->outfit . "\"}";
        }

    }

    echo "]}";

    $result->close();

    $sql = "SELECT `nivel` FROM `ottibia` WHERE `username`='" . $username . "' AND `password`='" . $password . "'";
                
    $result = $conn->query($sql);

    while($obj = $result->fetch_object()){
        $nivel_antigo = $obj->nivel;
    }

    $result->close();

    if($nivel_atual >= $nivel_antigo){

        $sql = "UPDATE `ottibia` SET `x`=" . $_POST['x'] . ", `y`=" . $_POST['y'] . ", `direcao`=" . $_POST['direcao'] . ", `nivel`=" . $_POST['nivel'] . ", `hp`=" . $_POST['hp'] . " WHERE `username`='" . $username . "' AND `password`='" . $password . "'";

        $conn->query($sql);

    }
    
    $conn->close();
    
?>
