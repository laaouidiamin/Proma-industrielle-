<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Maintenance Dashboard</title>
</head>
<body>
    <h1>Bienvenue dans le tableau de bord de la maintenance</h1>
    <a href="logout.php">Déconnexion</a>
</body>
</html>