<?php
require_once__DIR__ . '/config.php';
class API {
    function Select() {
        $db = new Connect;
        $users = array();
        $data = $db-> prepare(`SELECT * users ORDER BY id`);
        $data->execute();
        while($OutputData = $data->fetch(PDO::FETCH_ASSOC)){
            //associating the data from DB to the users variable
        $users[$OutputData["id"]] = array(
            "id" => $OutputData["id"],
            "name" => $OutputData["name"],
            "age" => $OutputData["age"]
        );
        }
    return json_encode($users);
    
    }
}

