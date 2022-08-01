<?php

// create class database name

class database{

    // connectivity perform
    // database select,insert,update,delete

    // make private because any body cannot access this private variable
    private $host;
    private $dbusername;
    private $dbpassword;
    private $dbname;
    public $con = '';
    public $query = '';
    public function __construct()
    {
        $this->connect();
    }
    //this function is protected because access by only inherited class 
    protected function connect() {

        // declar the connection variable
        $this->host='localhost';
        $this->dbusername='root';
        $this->dbpassword='123456';
        $this->dbname='crud';

        // create a object for connection
        // using connect method to using oops concept 
        $this->con = new mysqli($this->host,$this->dbusername,$this->dbpassword,$this->dbname);
        // print_r( $con);
        return $this->con; // because return all con value
        // print_r($con);
        // echo ("hello");
    }

    public function executeQuery($no_of_col,$table,$condition,$limit,$order,$orderSeq)
    {
          $this->query = "SELECT ".$no_of_col." FROM ".$table." ".$condition." "." ".$order." ".$orderSeq." ".$limit;
          
          return $this->con->query($this->query);
    }

    public function fetchObject($res)
    {
          $arr = [];
          while($ret = $res->fetch_object())
          {
                array_push($arr,$ret);
          }  
          return $arr;
    }
}

// create a new class inherit database class 
class query extends database{

    // create a function 
    public function getData(){ // this function retrive all data from the database

        // write a query to the database
        
        // for run sql query 
        $result = $this->executeQuery("*","user","","limit 1","order by id","");

        $obj = $this->fetchObject($result);
        
        // for checking the value
        print_r($obj);

    }
}


?>