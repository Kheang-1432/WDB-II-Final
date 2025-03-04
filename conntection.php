<!-- Create Connection to MySQL -->
 <?php
    //Declare Variables to the Connection Object
    $hostname = 'localhost';
    $username = 'mengkheang';
    $password = '123';
    $dbname ='db_kryonic';
    $port = '3306';

    //Create a new MySQL Connection
    $connection = new mysqli($hostname, $username, $password, $dbname, $port);
    if ($connection->connect_error){
        echo "failed to connect to the database";
    }else{
        echo "successfully connected to the database";
    }
 ?>