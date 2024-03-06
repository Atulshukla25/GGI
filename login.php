<?php
require_once 'connection.php';
session_start(); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    if (empty($username) || empty($password)) 
    {
        echo "All fields are required.";
    } 
    else 
    {
        $sql = "SELECT * FROM users WHERE email = '$username'";
        $result = mysqli_query($conn, $sql);
        
        if ($result && mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            
            if (password_verify($password, $row['password'])) {

                $_SESSION['user_id'] = $row['id'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['loggedIn'] = true;
                header("Location: index.php");
                exit();
            } 
            else 
            {
                echo "Incorrect password.";
            }
        } 
        else 
        {
            echo "User not found.";
        }
    }
} 
else 
{
    header("Location: profile.php");
    exit();
}
?>
