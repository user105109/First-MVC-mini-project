<?php
function connectionDB() {
    $dsn = "mysql:host=localhost;dbname=ecole;charset=utf8mb4";
    $user = "root";
    $pass = "ZouhairDev2026";
    $pdo = new PDO($dsn, $user, $pass);

    return $pdo;
}

function listeStagiaires() {
    $pdo = connectionDB();
    $stagiaires = $pdo->query('SELECT * FROM stagiaire')->fetchAll((PDO::FETCH_ASSOC));

    return $stagiaires;
}

function ajouteStagiaire() {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $age = $_POST['age'];
    $login = $_POST['login'];
    $password = $_POST['password'];

    $pdo = connectionDB();
    $sql = 'INSERT INTO stagiaire VALUES (null, ?, ?, ?, ?, ?)';
    $stmt = $pdo->prepare ($sql);
    $stmt->execute([$nom, $prenom, $age, $login, $password]);
}

function supprimeStagiaire($userId) {
    $pdo = connectionDB();
    $sql = 'DELETE FROM stagiaire WHERE id = ?';
    $stmt = $pdo->prepare ($sql);
    $stmt->execute([$userId]);
}

function editStagiaireInfo($userId) {
    $newNom = $_POST['nom'];
    $newPrenom = $_POST['prenom'];
    $newAge = $_POST['age'];
    $newLogin = $_POST['login'];
    $newPassword = $_POST['password'];

    $pdo = connectionDB();
    $sql = 'UPDATE stagiaire
            SET nom = ?,
                prenom = ?,
                age = ?,
                login = ?,
                password = ?
            WHERE id = ?';
    $stmt = $pdo->prepare ($sql);
    $stmt->execute([$newNom, $newPrenom, $newAge, $newLogin, $newPassword, $userId]);
}