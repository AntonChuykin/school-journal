<!--this form adds tasks-->
<form class="addTasks" action="addTasks.php" method="post">
    <p>Введите предмет:
        <select class="subjectTask" name="subject">
            <option value="Математика">Математика</option>
            <option value="Украинский язык">Украинский язык</option>
            <option value="Английский язык">Английский язык</option>
            <option value="Я исследую мир">Я исследую мир</option>
            <option value="Русский язык">Русский язык</option>
        </select>
    </p>
    <p>Введите часть книги / тетрадь:
        <select class="subjectTextbook" name="subject_textbook">
            <option value="">Пусто</option>
            <option value="Тетрадь">Тетрадь</option>
            <option value="Часть 1">Часть 1</option>
            <option value="Часть 2">Часть 2</option>
        </select>
    </p>
    <p>
        Введите страницу книги / тетради:
        <input class="textbookPage" type="text" name="textbook_page">
    </p>
    <p>
        Введите номер задания:
        <input class="textbookTask" type="text" name="textbook_task">
    </p>
    <p>
        Введите комментарий:
        <textarea class="commentTask" name="comment" id="" cols="20" rows="5"></textarea>
    </p>
    <button class="addTask" type="submit">Отправить</button>

</form>

<!--this form adds items to timetable-->
<div style="margin-left: 900px;">
    <form class="addTimetable" action="addTimetable.php" method="post">
        <p>Введите день недели:
            <select name="day_of_week" id="">
                <option value="1">Понедельник</option>
                <option value="2">Вторник</option>
                <option value="3">Среда</option>
                <option value="4">Четверг</option>
                <option value="5">Пятница</option>
            </select>
        </p>
        <p>Введите предмет:
            <select name="subject" id="">
                <option value="Математика">Математика</option>
                <option value="Украинский язык">Украинский язык</option>
                <option value="Английский язык">Английский язык</option>
                <option value="Я исследую мир">Я исследую мир</option>
                <option value="Русский язык">Русский язык</option>
            </select>
        </p>
        <p>Введите начало урока: <input type="time" name="lesson_begin" id=""></p>
        <button type="submit">Отправить</button>
    </form>
</div>

<?php

require_once 'getTasks.php';

foreach ($tasks as $task) {
    echo implode(', ', array_slice($task, 1, 5)) . '<br>';
}

?>