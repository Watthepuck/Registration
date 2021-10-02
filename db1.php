<?php

class db{


public $connection;

public function __construct(){
    $this->connection = mysqli_connect('localhost', 'root', '', 'registration'); //four parameters ('host', username, password, database)
    if(mysqli_connect_error()){
        die("failed to connect to the database");
    }
}
public function save_data($fname,$lname,$email,$password){//four parameters or parameters based on given 
    
    $phash=password_hash('$email',PASSWORD_DEFAULT);
    $sql = "INSERT INTO registered(FirstName,LastName,Email,Password) VALUES('$fname','$lname','$email','$phash')";
    $query = mysqli_query($this->connection, $sql) or die(mysqli_error($this->connection));
    
    if($query){
        return true;
    }else{
        return false;
    }

}



}
