<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un formateur</title>
</head>
<body>

<h2>Insertion d’un formateur</h2>

<form method="POST" action="traitement_formateur.php">
    <label>Nom :</label><br>
    <input type="text" name="nom" required><br><br>

    <label>Prénom :</label><br>
    <input type="text" name="prenom" required><br><br>

    <label>Email :</label><br>
    <input type="email" name="email" required><br><br>

    <label>Spécialité :</label><br>
    <input type="text" name="specialite"><br><br>

    <label>Téléphone :</label><br>
    <input type="text" name="telephone"><br><br>

    <button type="submit">Ajouter le formateur</button>
</form>

</body>
</html>
