<?php

function addTask(){
    require 'dbConnection.php';
    $subject = $_POST['subject'];
    $subjectTextbook = $_POST['subject_textbook'];
    $textbookPage = $_POST['textbook_page'];
    $textbookTask = $_POST['textbook_task'];
    $comment = $_POST['comment'];
    $sql = 'INSERT INTO current_tasks (`subject`, `subject_textbook`, `textbook_page`, `textbook_task`, `comment`) 
        VALUES ("'.$subject.'", "'.$subjectTextbook.'", "'.$textbookPage.'", "'.$textbookTask.'", "'.$comment.'" )';
    mysqli_query($connection, $sql);
    mysqli_close($connection);
    header('Location: index.php');
}

addTask();