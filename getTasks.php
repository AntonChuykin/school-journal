<?php

function getTasks(){
    require_once 'dbConnection.php';
    $sql = 'SELECT * FROM current_tasks';
    $statement = mysqli_query($connection, $sql);
    return $results = mysqli_fetch_all($statement, MYSQLI_ASSOC);
}

$tasks = getTasks();