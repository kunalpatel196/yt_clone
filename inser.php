<?php
$conn=new mysqli("localhost","root","","MUSIC");
if($conn->connect_error){
    die("❌".$conn->connect_error);
}
else{
    echo "✔️";
}
if(isset($_POST["sub"])){
    $usname=$_POST['uname'];
    $email=$_POST['email'];

    $inn="INSERT INTO form(
        uname,
        email ) 
        VALUE('$usname','$email')";
    if($conn->query($inn)===TRUE){
        echo "ok done";
    }
    else{
        echo"some issues in ".$conn->query($insert);
    }
}
else{
    echo "<script>alert('sorray you input is proper')</script>";
}
if (isset($_POST["sub"])){
    $_SESSION["username"]=$uname;
    $_SESSION["email"]= $email;
    header("location:index.html");
}
?>