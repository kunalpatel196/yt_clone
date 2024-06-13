<?php

$conn=new mysqli("localhost","root","","MUSIC");
if($conn->connect_error){
    die("❌".$conn->connect_error);
}
else{
    echo "✔️";
}
$sql="CREATE TABLE form(
    id INT(6) AUTO_INCREMENT PRIMARY KEY,
    uname VARCHAR(30) NOT NULL,
    email varchar(30) not null,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP

)";
if($conn->query($sql)===TRUE){
    echo "table created";
    header("location:form.html");
}
else{
    echo "by error this is not be done";
}
$conn->close();
?>