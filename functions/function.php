<?php
include '../connection/database.php';

// Get POST values safely
if (isset($_POST['submit_judge'])) {
    $judgeId  = mysqli_real_escape_string($conn, $_POST['id']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Queries 

    $query = "INSERT INTO judges (judgeId, username, password) VALUES ('$judgeId', '$username', '$password')";

    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        // Redirect if insert is successful
        header("Location: ../index.php?message=success");
        exit();
    } else {
        // Redirect if insert failed
        header("Location: ../add_judge.php?error=insert_failed");
        exit();
    }

}

// Assign and submit scores
if (isset($_POST['submit_scores'])) {
    
    $userId = mysqli_real_escape_string($conn, $_POST['userId']);
    $score = (int) $_POST['score']; // Type cast

    if ($score >= 1 && $score <= 100) {
        // Add to existing score
        $query = "UPDATE users SET Score = Score + $score WHERE userId = '$userId'";
        $result = mysqli_query($conn, $query);

        if ($result) {
            header("Location: ../users.php?message=success");
            exit();
        } else {
            die("Query failed: " . mysqli_error($conn));
        }
    } 
}


?>
