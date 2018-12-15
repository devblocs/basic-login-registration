<?php
/**
 * Database connection and queries file
 * @author Venkatesh Jeyakumaresan <venkateshactive29@gmail.com>
 */

 function db_connect(){
     $host = "localhost";
     $user = "root";
     $password = "";
     $db = "practice_basic_login";

     $mysql = new mysqli($host, $user, $password, $db);

     return $mysql;
 }

 function check_db_connection(){
     $con = db_connect();

     if($con->connect_error){
         echo "Connection Failed: {$con->connect_errno} {$con->connect_error}";
     }else{
         echo "Connected successfully";
     }
 }

 function db_query($query){
    $con = db_connect();

    $con_query = $con->query($query);

    if(!$con_query){
        return "Query Failed: ({$con->errno}) ". $con->error;
    }

    return $con_query;
 }