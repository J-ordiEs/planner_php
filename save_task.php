<?php 
include ('db.php');


if (isset($_POST['save_task'])){
    $title = $_POST['title'];
    $description = $_POST['description'];
    
    $query = "INSERT INTO task(title, description) VALUES ('$title', '$description')";
    $resutl = mysqli_query($conn, $query);
    if (!$resutl) {
        die("Query failed");
    }

    $_SESSION['message'] = 'Task Saved succesfully';
    $_SESSION['message_type'] = 'success';
    header("Location: index.php");
}



?>