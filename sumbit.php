<?php
// Получение отправленных данных
$clan = $_POST['clan'];
$leader = $_POST['leader'];
$status = $_POST['status'];

// Сохранение данных в базе SQLite
$db = new SQLite3('data.db'); // Замените "data.db" на путь к вашей реальной базе данных
$db->exec("CREATE TABLE IF NOT EXISTS applications (clan TEXT, leader TEXT, status TEXT)");
$stmt = $db->prepare("INSERT INTO applications (clan, leader, status) VALUES (:clan, :leader, :status)");
$stmt->bindValue(':clan', $clan, SQLITE3_TEXT);
$stmt->bindValue(':leader', $leader, SQLITE3_TEXT);
$stmt->bindValue(':status', $status, SQLITE3_TEXT);
$stmt->execute();

// Закрытие базы данных
$db->close();

// Перенаправление обратно на главную страницу
header('Location: index.html');
?>
