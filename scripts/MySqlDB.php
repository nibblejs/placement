<?php

class MySqlDB {

    protected $_mysql;
    protected $_query;

    public function __construct($host, $username, $password, $db)
    {
        $this->_mysql = new mysqli($host, $username, $password, $db) or die('Could not connect to database');
    }

    public function query($query)
    {
        $this->_query = filter_var($query, FILTER_SANITIZE_STRING);

        $stmt = $this->_mysql->prepare($query) or die('Could not execute query');
        $stmt->execute();
    }

}