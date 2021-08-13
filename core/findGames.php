<?php 

$conn = Config::connect();
$stmt = $conn->prepare('SELECT * FROM game ORDER BY id LIMIT 30');
$stmt->execute();
$games = $stmt->fetchAll(PDO::FETCH_ASSOC);

$conn = Config::connect();
$stmt = $conn->prepare('SELECT * FROM game WHERE id > 30 ORDER BY id ASC LIMIT 4');
$stmt->execute();
$gameshome = $stmt->fetchAll(PDO::FETCH_ASSOC);

$stmt = $conn->prepare('SELECT * FROM game WHERE id > 34 ORDER BY id ASC LIMIT 6');
$stmt->execute();
$gamespre = $stmt->fetchAll(PDO::FETCH_ASSOC);

$stmt = $conn->prepare('SELECT * FROM game WHERE id > 40 ORDER BY id ASC LIMIT 6');
$stmt->execute();
$gamesnew = $stmt->fetchAll(PDO::FETCH_ASSOC);