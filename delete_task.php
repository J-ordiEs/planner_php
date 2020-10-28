<?php 

include("db.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM task WHERE id = $id";
    $resutl = mysqli_query($conn, $query);
    if (!$resutl) {
        die("Query Faided");
    }

    $_SESSION['message'] = 'Task Removed Sucessfully';
    $_SESSION['message_type'] = 'danger';
    header("Location: index.php");
}
?>