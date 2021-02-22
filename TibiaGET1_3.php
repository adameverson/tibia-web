<?php

    require_once("dados/config.php");

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    $username = $_POST['username'];
    $password = $_POST['password'];
    $first = true;

    $sql = "SELECT `username`, `x`, `y`, `direcao`, `nivel`, `hp` FROM `ottibia` WHERE `username`<>'" . $username . "'";
    
    $result = $conn->query($sql);

    echo "{\"players\":[";

    while($obj = $result->fetch_object()){

        if($first){
            echo "{\"username\":\"" . $obj->username . "\",\"x\":" . $obj->x . ",\"y\":" . $obj->y . ",\"direcao\":" . $obj->direcao . ",\"nivel\":" . $obj->nivel . ",\"hp\":" . $obj->hp . "}";
            $first = false;
        } else {
            echo ",{\"username\":\"" . $obj->username . "\",\"x\":" . $obj->x . ",\"y\":" . $obj->y . ",\"direcao\":" . $obj->direcao . ",\"nivel\":" . $obj->nivel . ",\"hp\":" . $obj->hp . "}";
        }

    }

    echo "]}";

    $result->close();

    $sql = "UPDATE `ottibia` SET `x`=" . $_POST['x'] . ", `y`=" . $_POST['y'] . ", `direcao`=" . $_POST['direcao'] . ", `nivel`=" . $_POST['nivel'] . ", `hp`=" . $_POST['hp'] . " WHERE `username`='" . $username . "' AND `password`='" . $password . "'";

    $conn->query($sql);
    
    $conn->close();
    
?>