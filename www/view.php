<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Все данные</title>
</head>
<body>
    <h2>Все сохранённые данные:</h2>
    <ul>
        <?php
        if(file_exists("data.txt")){
            $lines = file("data.txt", FILE_IGNORE_NEW_LINES);
            foreach($lines as $line){
                list($name, $number_of_ticket, $genre, $subscribe, $time) = explode(";", $line);
                echo "<li>$name, $number_of_ticket, $genre, $subscribe, $time</li>";
            }
        } else {
            echo "<li>Данных нет</li>";
        }
        ?>
    </ul>
    <a href="index.php">На главную</a>
</body>
</html>
