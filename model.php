<?php
//connect to the database here.
function db_connect(){
$host='localhost';
$uName='root';
$pass='';
$dName='art';
try {
    return new PDO('mysql:host='.$host.';dbname='.$dName.';charset=utf8',$uName,$pass);
} catch (\PDOexception $th) {
    exit ("Unable to connect to the Database: $th");
}

}
?>