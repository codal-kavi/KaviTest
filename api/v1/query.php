<?php

class query 
{

    private $conn;

    function __construct() {
        require_once 'dbConnect.php';
        // opening db connection
        $conDB = new dbConnect();
        $db = new dbConnect();
        $this->page = $conDB->connect();
        $this->common = $db->connect();
    }

    public function SaveTeam($postArray)
    {
    	echo "<pre>"; print_r($postArray); echo "</pre>"; die();
    }

}