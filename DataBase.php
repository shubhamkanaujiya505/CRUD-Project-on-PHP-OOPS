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

    //this function is protected because access by only inherited class 
    protected function connect() {

        // declar the connection variable
        $this->host='localhost';
        $this->dbusername='$root';
        $this->dbpassword='Bhagat@123';
        $this->dbname='crud';

        // create a object for connection
        // using connect method to using oops concept 
        $con = new mysqli($this->host,$this->dbusername,$this->dbpassword,$this->dbname);
        // print_r( $con);
        return $con; // because return all con value

    }

}

// create a new class inherit database class 
class query extends database{

    // create a function 
    public function getData(){ // this function retrive all data from the database

        // write a query to the database
        $sql = " select * from user";

        // for run sql query 
        $result = $this->connect()->query($sql);
        
        // for checking the value
        print_r($result);

    }
}


?>