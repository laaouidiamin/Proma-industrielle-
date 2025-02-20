<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?><!DOCTYPE html><html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROMA INDUSTRIE - Gestion de Maintenance</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="navbar">
        <img src="logo.png" alt="PROMA INDUSTRIE Logo" class="logo">
        <h1>Gestion des Interventions</h1>
        <a href="logout.php" class="logout"><i class="fas fa-sign-out-alt"></i> Déconnexion</a>
    </div>
    <div class="container">
        <h2>Bienvenue, <?php echo $_SESSION['user']; ?> !</h2>
        <form id="interventionForm">
            <label for="technicien">Technicien:</label>
            <select id="technicien" required>
                <option value="Amine Laaouidi">Amine Laaouidi</option>
                <option value="Abdrahim Khouma">Abdrahim Khouma</option>
                <option value="Youness Rina">Youness Rina</option>
                <option value="Monsif Hajam">Monsif Hajam</option>
                <option value="Mohesin Lotefi">Mohesin Lotefi</option>
                <option value="Ayoube">Ayoube</option>
            </select>
            <label for="description">Description:</label>
            <textarea id="description" required></textarea>
            <label for="heure_debut">Heure de Début:</label>
            <input type="time" id="heure_debut" required>
            <label for="temps_intervention">Temps d'Intervention (minutes):</label>
            <input type="number" id="temps_intervention" required>
            <label for="temps_arret">Temps d'Arrêt (minutes):</label>
            <input type="number" id="temps_arret" required>
            <button type="submit">Enregistrer</button>
        </form>
    </div>
</body>
</html><style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }
    .navbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 20px;
        background: #003366;
        color: white;
    }
    .logo {
        height: 50px;
    }
    .logout {
        color: white;
        text-decoration: none;
        font-size: 18px;
    }
    .container {
        width: 80%;
        margin: auto;
        padding: 20px;
        background: white;
        box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
    }
    form {
        display: flex;
        flex-direction: column;
    }
    label, input, select, textarea, button {
        margin: 10px 0;
        padding: 10px;
    }
    button {
        background-color: #28a745;
        color: white;
        border: none;
        cursor: pointer;
    }
    button:hover {
        background-color: #218838;
    }
</style>
