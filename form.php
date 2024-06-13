<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            box-sizing: border-box;

        }

        body {
            background-image: url('—Pngtree—pair of headphones on the_3416263.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            color: #fff;
        }

        .container {
            border-radius: 15px;
            background-color: rgba(0, 0, 0, 0.614);
            padding-top: 50px;
            width: 50%;
            height: 400px;

            text-align: center;
        }

        input {
            width: 100%;
            height: 45px;
            border-radius: 15px;
            border: none;
            outline: none;
            margin-top: 20px;
            padding-left: 20px;
        }
        input::placeholder{
            color: red;
        }
        button {
            width: 50%;
            height: 45px;
            border-radius: 15px;
            border: none;
            outline: none;
            margin-top: 50px;
            background-color:hotpink;
            color: #fff;
            cursor: pointer;
        }
        span{
            transition: 2s;
        }
        span:hover{
            transform: scale(1.05);
            transition: 1s;
            color: red;
            cursor: pointer;
        }
        button:hover{
            background-color:#1993d4;
            color:  #000;
        }
    </style>
</head>

<body>
    <img src="img/3357685.webp" alt="" width="50px" height="50px">
    <div class="container">
        <h1 class="text-center">Welcome to <span>kp</span> Music </h1>
        <form  method="post">
            <input type="text " placeholder="Enter user name" id="uname">
            <input type="email" name="email" id="" placeholder="Enter your email">
            <button type="submit" name="sub" onclick="sub()">submit</button>
        </form>

    </div>
</body>
<script>
    function sub(){
        Headers("location:inser.php");
    }
</script>
</html>
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