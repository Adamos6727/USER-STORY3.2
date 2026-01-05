<?php
require 'connectionbd.php';

if (isset($_POST['submit'])) {

    $check = $pdo->prepare("SELECT id_formateur FROM formateurs WHERE email = ?");
    $check->execute([$_POST['email']]);

    if ($check->rowCount() > 0) {
        die("Email déjà utilisé");
    }

    $sql = "INSERT INTO formateurs 
            (nom, prenom, email, telephone, specialite)
            VALUES (?, ?, ?, ?, ?)";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        $_POST['nom'],
        $_POST['prenom'],
        $_POST['email'],
        $_POST['telephone'],
        $_POST['specialite']
    ]);

    $id_formateur = $pdo->lastInsertId('formateurs_id_formateur_seq');

    echo "Formateur ajouté avec succès";
}
