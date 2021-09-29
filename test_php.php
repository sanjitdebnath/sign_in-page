<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
    margin: 0;
    padding: 0;
box-sizing: border-box;
}
body{
    width:100% ;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    background-color: blue;
}
form{
    width:300px ;
    height: 200px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    background-color: white;
    padding: 20px;
    border-radius: 5px;
    margin: auto;
}
form input{
    width: 100%;
    height: 40px;
    border-radius: 20px;
    margin-top: 10px;
    padding-left: 10px;
    outline: none;
}
.submit{
    width: 100px;
    background-color: blue;
    color: white;
    border: none;
}
    </style>
</head>
<body>
<form action="<?php $_SERVER['PHP_SELF']?>"  method='post'>
    <div class="add_box">
        <input type="text" name='username' placeholder='username'required>
        <input type="text" name='password' placeholder='password' required>
        <input class='submit' type="submit" value='submit' name='submit'>
    </div>
    </form>
</body>
</html>

<?php




if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];    

$connent = $conn = mysqli_connect("localhost","root","","apne database ka name") or  die("query not work");

$data_insert = "INSERT into database_name(username,password) 
value('{$username}','{$password}')";

$result = mysqli_query($connent,$data_insert) or die();
if($result)
{
    echo"data submit successfully";
}
else{
    echo"some error happend";
}

mysqli_close($connent);
}


?>