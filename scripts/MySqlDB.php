<?php

class MySqlDB {

    protected $_mysql;
    protected $_query;
    protected $_where = array();
    protected $_paramTypeList;

    public function __construct($host, $username, $password, $db)
    {
        $this->_mysql = new mysqli($host, $username, $password, $db) or die('Could not connect to database');
    }

    public function query($query)
    {
        $this->_query = filter_var($query, FILTER_SANITIZE_STRING);

        $stmt = $this->_mysql->_prepareQuery($query) or die('Problem executing query');
        $stmt->execute();

        $results = $this->_dynamicBindResults($stmt);
        return($results);
    }

    public function get($tablename, $numRows = null)
    {
        $this->_query = "Select * from $tablename";
        $this->_buildQuery($numRows);
    }

    public function insert($tablename, $insertdata)
    {

    }

    public function delete($tablename)
    {

    }

    public function where($whereProp, $whereValue)
    {
        $this->_where[$whereProp] = $whereValue;
    }

    protected function _buildQuery($numRows = null, $tableData = false)
    {
        if(gettype($tableData) === 'array')
            $hasTableData = true;

        //Did user called the where method or not
        if(!empty($this->where))
        {
            $keys = array_keys($this->_where);
            $where_prop = $keys[0];
            $where_val = $this->_where[$where_prop];

            //if user passes update data

            if($hasTableData)
            {
                foreach($tableData as $prop => $value)
                {

                }
            }
            else
                $this->_paramTypeList = $this->_determineType($where_val);
        }
    }

    protected function _prepareQuery()
    {
        if(!$stmt = $this->_mysql->prepare($this->_query))
            trigger_error('Problem preparing query',E_USER_ERROR);
        else
            return $stmt;
    }

    protected function _dynamicBindResults($stmt)
    {
        $parameters = array();
        $results = array();

        $meta = $stmt->result_metadata();

        while ($field = $meta->fetch_field())
        {
            $parameters = &$row[$field->name];
        }

        call_user_func_array(array($stmt, 'bind_results'), $parameters);

        while($stmt->fetch())
        {
            $x = array();
            foreach($row as $key => $val)
                $x[$key] = $val;
            $results = $x;
        }
        return $results;
    }

    public function __destruct()
    {
        $this->mysql->close();
    }
}