<?php



$db_host = "localhost";   
$db_user = "root";    
$db_pass = "";    
$db_name = "loginpage1";   

// Create a connection
$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
$email = $_POST['email'];
$password = $_POST['password'];
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 else{
    $stmt = $conn->Prepare("SELECT * FROM sign WHERE email = '$email' AND password = '$password'") ;
     $stmt->execute();
    $stmt_result=$stmt->get_result();
        if($stmt_result->num_rows>0){
            $data=$stmt_result->fetch_assoc();
            if($data['password']===$password){
                echo "succesfully registered";
                session_start();
                $_SESSION['email']=$email;
                header("Location: ./index.php");
                 
            }
        }
 else{
    echo "invalid input";
 }
}
?>