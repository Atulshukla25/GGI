<?php
require_once 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{

    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirm"];
    
    if (empty($email) || empty($password) || empty($confirmPassword)) 
        {
            echo "<script>alert('All fields are required.');</script>";
        } 
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
        {
            echo "<script>alert('Invalid email format.');</script>";
            
        } 
    elseif ($password !== $confirmPassword) 
        {
            echo '<html><script>alert("Passwords don\'t match.");';
            echo 'window.location.href = "index.php";';
            echo '</script></html>';
            exit();

        } 
    else 
        {
            $sql = "SELECT * FROM users WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) 
            {
                echo '<html><script>alert("User with this email already exists. Please login.");';
                echo 'window.location.href = "index.php";';
                echo '</script></html>';
                exit();
            } 
            else 
            {
                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        
                $sql = "INSERT INTO users (email, password) VALUES ('$email', '$hashedPassword')";
        
                if (mysqli_query($conn, $sql)) 
                {
                    echo '<html><script>alert("Registered Sucessfully, you can now login.");';
                    echo 'window.location.href = "login.html";';
                    echo '</script></html>';
                exit();
                } 
                else 
                {
                    echo "Error: " . mysqli_error($conn);
                }
        
                exit();
        
            }
        } }
else 
{
    header("Location: index.php");
    exit();
}


?>
