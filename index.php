<?php
$config = require './config.php';


require_once './lib.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>ToDo List Application PHP and MySQL</title>
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
</head>

<body>

<div class="container jumbotron">
    <div class="container h-100">
        <div class="row h-100 justify-content-center align-items-center">
        <h1>ToDo List </h1>
    </div>
    </div>


    <hr>
    <div class="container h-100">
        <div class="row h-100 justify-content-center align-items-center">
            <form method="post" action="index.php" class="form-inline">
                <input type="text" name="task" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2"
                       placeholder="Input task">
                <button type="submit" name="submit" id="add_btn" class="btn btn-primary mb-2">Add Task</button>
            </form>
        </div>
    </div>

    <table class="table table-striped">
        <thead class="thead-dark">
        <tr>
            <th scope="col" >N</th>
            <th scope="col" >Tasks</th>
            <th scope="col"  style="width: 60px;">Action</th>
        </tr>
        </thead>

        <tbody>

            <tr>
                <td> 1 </td>
                <td class="task">  Задание 1 </td>
                <td class="delete">
                    <a href="index.php?del_task=" class="close" aria-label="Delete"> <span aria-hidden="true">&times;</span></a>
                </td>
            </tr>
            <tr>
                <td> 2 </td>
                <td class="task">  Задание 2 </td>
                <td class="delete">
                    <a href="index.php?del_task=" class="close" aria-label="Delete"> <span aria-hidden="true">&times;</span></a>
                </td>
            </tr>
            <tr>
                <td> 3 </td>
                <td class="task">  Задание 3 </td>
                <td class="delete">
                    <a href="index.php?del_task=" class="close" aria-label="Delete"> <span aria-hidden="true">&times;</span></a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
</body>
</html>