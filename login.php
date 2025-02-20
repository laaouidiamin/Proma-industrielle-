<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username === 'admin' && $password === 'Proma2025MN') {
        $_SESSION['user'] = $username;
        header("Location: index.php");
        exit();
    } else {
        echo "Nom d'utilisateur ou mot de passe incorrect";
    }
}
?>
<form method="POST">
    <label>Nom d'utilisateur:</label>
    <input type="text" name="username" required>
    <label>Mot de passe:</label>
    <input type="password" name="password" required>
    <button type="submit">Connexion</button>
</form>