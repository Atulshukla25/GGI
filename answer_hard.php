<?php
require_once 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $question_number = $_POST["question_number"];
    $answer = $_POST["answer"];
    
    $sql = "SELECT answer FROM answers WHERE number = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $question_number);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_bind_result($stmt, $correct_answer);
    mysqli_stmt_fetch($stmt);
    mysqli_stmt_close($stmt);
    
    // Check if user's answer matches the correct answer
    if ($answer == $correct_answer) {
        echo '<html><script>alert("Correct answer, choose your next question.");';
        echo 'window.location.href = "index.php";';
        echo '</script></html>';
        
    } else {
        echo '<html><script>alert("Incorrect answer, choose your next question.");';
        echo 'window.location.href = "index.php";';
        echo '</script></html>';
    }

}



?>