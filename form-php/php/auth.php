<?php
        $host = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "function";
if (isset($_POST['username']) and isset($_POST['password'])) {
$username = filter_input(INPUT_POST,'username');
$password = filter_input(INPUT_POST,'password');
if(!empty($username)){
    if(!empty($password)){
        
        
//        create connection
        
        $conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
        if(mysqli_connect_error()){
            die('connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
        }
        else{
            $sql = "INSERT INTO list (username,password) 
            Values ('$username','$password')";
            if($conn->query($sql)){
                echo "<h1 style='color:red'>New record is inserted successfully</h1>";
            }
            else{
                echo "Error:".$sql."<br>".$conn->error; 
            }
            $conn->close();
        }
    }
    else{
        echo "password should not empty";
        die();
    }
}
else{
    echo "UserName should not empty";
    die();
}
}  

   //  delete button

if (isset($_POST['delname'])){
    $delname = $_POST['delname'];
    
      $conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
        if(mysqli_connect_error()){
            die('connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
        }
        else{
            $sql = "DELETE FROM `account` WHERE `username` = '".$delname."'";
            if($conn->query($sql)){
                echo "<h1 style='color:hotpink'>deleted record is successfully</h1>";
            }
            else{
                echo "Error:".$sql."<br>".$conn->error; 
            }
            $conn->close();
        }
    
}

?>