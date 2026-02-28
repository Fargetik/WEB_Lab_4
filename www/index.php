<?php session_start(); ?>

<?php if(isset($_SESSION['errors'])): ?>
    <ul style="color:red;">
        <?php foreach($_SESSION['errors'] as $error): ?>
            <li><?= $error ?></li>
        <?php endforeach; ?>
    </ul>
    <?php unset($_SESSION['errors']); ?>
<?php endif; ?>


<?php if(isset($_SESSION['username'])): ?>
    <p>Данные из сессии:</p>
    <ul>
        <li>Имя: <?= $_SESSION['username'] ?></li>
        <li>Номер билета: <?= $_SESSION['number_of_ticket'] ?></li>
        <li>Жанр: <?= $_SESSION['genre'] ?></li>
        <li>Электронная версия: <?= $_SESSION['subscribe'] ?></li>
        <li>Срок аренды: <?= $_SESSION['time'] ?></li>

    </ul>
<?php else: ?>
    <p>Данных пока нет.</p>
<?php endif; ?>

<a href="form.html">Заполнить форму</a> |
<a href="view.php">Посмотреть все данные</a>
