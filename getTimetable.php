<?php

require_once 'dbConnection.php';

$sql = 'SELECT * FROM timetable';
$statement = mysqli_query($connection, $sql);
$results = mysqli_fetch_all($statement, MYSQLI_ASSOC);


/*var_dump($i);die();

$subjects = [];
$daysOfWeek = [];

foreach ($i as $z){
    $subjects[] = $z['subject'];
    $daysOfWeek[] = $z['day_of_week'];
}

$subjectsUnique = array_unique($subjects);
$daysOfWeekUnique = array_unique($daysOfWeek);*/

function getDayRus($weekDayNumber){
    $days = array(
        'Воскресенье', 'Понедельник', 'Вторник', 'Среда',
        'Четверг', 'Пятница', 'Суббота'
    );
    return $days[$weekDayNumber];
}


?>



<h1>Вывод из БД</h1>
<?php for ($q = 1; $q < 6; $q++): ?>
    <div>
        <p><?= getDayRus($q) ?></p>
        <?php foreach ($results as $result): ?>
            <?php if ($result['day_of_week'] == $q):; ?>
                <span><?= $result['lesson_begin'] ?> </span>
                <span><?= $result['subject'] ?></span><br>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
<?php endfor; ?>
