<?php
include 'model.php'; //imports the Model class
$feedback='';
try{

    $con=db_connect();//connect to the database from the Model class
if (isset($_POST['Name'], $_POST['Email'],$_POST['Message'])) {//checks if the variables are not null
    # code...
//add the if statement for validation/check if the fields are not empty.
if (!empty($_POST['Name']||!empty($_POST['Email'])||!empty($_POST['Message']))) {//if this fields are not empty, insert into the table
    # code...
    $statement=$con->prepare('INSERT INTO details(Name, Email, Message) values(?,?,?)');//insert data/details into the details table
    $statement->execute([$_POST['Name'],$_POST['Email'],$_POST['Message']]);//the above statement is being executed here
    $feedback='Thank you for your message';
    header('Location:thank-you.php');
    exit();
    
}else{
    $feedback='Could not save data';
}}
}catch(Exception $e){
print "Error: $e";
}
?>