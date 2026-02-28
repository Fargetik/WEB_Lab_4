<?php
session_start();


$username = htmlspecialchars($_POST['username'] ?? NULL);
$number_of_ticket = htmlspecialchars($_POST['number_of_ticket'] ?? -1);
$genre = htmlspecialchars($_POST['genre'] ?? '');
$subscribe = htmlspecialchars($_POST['subscribe'] ?? FALSE);
$time = htmlspecialchars($_POST['time'] ?? '');

# добавление ошибок
$errors = [];
if(empty($username)) $errors[] = "Имя не может быть пустым";
if(!is_numeric($number_of_ticket) or $number_of_ticket < 1) $errors[] = "Некорректный номер билета";
if(empty($time)) $errors[] = "Укажите срок аренды";

if(!empty($errors)) {
    $_SESSION['errors'] = $errors;
    header("Location: index.php");
    exit();
}


$_SESSION['username'] = $username;
$_SESSION['number_of_ticket'] = $number_of_ticket;
$_SESSION['genre'] = $genre;
$_SESSION['subscribe'] = $subscribe;
$_SESSION['time'] = $time;


$line = $username . ";" . $number_of_ticket . ";" . $genre . ";" . $subscribe . ";" . $time . "\n";
file_put_contents("data.txt", $line, FILE_APPEND);


header("Location: index.php");
exit();

