<?php
class Connect extends PDO 
//it extends PDO class
{

    public function __construct()
    //below is all the data needed for you to be able to connect to the db
    {
        parent::__construct("mysql:host=localhost;dbname=primo+api", "root", " ",
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        $this->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    //root is the username, '' is the place for password
    //$this is in case there is no such user, password or DB
    }
    }
?>