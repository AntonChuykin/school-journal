<?php

function addTimetable (){
    require_once 'dbConnection.php';

    $dayOfWeek = $_POST['day_of_week'];
    $subject = $_POST['subject'];
    $lessonBegin = $_POST['lesson_begin'];

    $sql = 'INSERT INTO timetable (`subject`, `lesson_begin`, `day_of_week`) 
            VALUES ("'.$subject.'", "'.$lessonBegin.'", "'.$dayOfWeek.'")';
    if (mysqli_query($connection, $sql)){
        echo 'Новая запись добавлена в БД';
    } else {
        echo 'Error' . $sql . '<br>' . mysqli_error($connection);
    }

    mysqli_close($connection);
}

addTimetable();