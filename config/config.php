<?php
// database connection
$dbh = new PDO("mysql:host=localhost;dbname=rsuite","root","");

 
$stmt = $db->prepare("SELECT id FROM tablename");
try{
    $stmt->execute();
}catch(PDOException $err){
    //some logging function
}
//loop through each row
while($result=$stmt->fetch(PDO::FETCH_ASSOC)){
    //select column by key and use
    echo $result['id'];
} 



