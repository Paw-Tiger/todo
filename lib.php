<?php


$errors = "";


// insert a quote if submit button is clicked
if (isset($_POST['submit'])) {

    if (empty($_POST['task'])) {
        $errors = "You must fill in the task";
    }else{
        $task = $_POST['task'];
        $query = "INSERT INTO tasks (task) VALUES ('$task')";
        mysqli_query($db, $query);
        header('location: index.php');
    }
}

// delete task
if (isset($_GET['del_task'])) {
    $id = $_GET['del_task'];

    mysqli_query($db, "DELETE FROM tasks WHERE id=".$id);
    header('location: index.php');
}

// select all tasks if page is visited or refreshed
$tasks = mysqli_query($db, "SELECT * FROM tasks");