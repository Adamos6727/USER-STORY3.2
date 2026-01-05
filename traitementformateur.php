<?php
require_once "connectionbd.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $nom = htmlspecialchars($_POST["nom"]);
    $prenom = htmlspecialchars($_POST["prenom"]);
    $email = htmlspecialchars($_POST["email"]);
    $specialite = htmlspecialchars($_POST["specialite"]);
    $telephone = htmlspecialchars($_POST["telephone"]);

    if (!empty($nom) && !empty($prenom) && !empty($email)) {

        $sql = "INSERT INTO formateurs 
                (nom, prenom, email, specialite, telephone) 
                VALUES (:nom, :prenom, :email, :specialite, :telephone)";

        $stmt = $pdo->prepare($sql);

        try {
            $stmt->execute([
                ":nom" => $nom,
                ":prenom" => $prenom,
                ":email" => $email,
                ":specialite" => $specialite,
                ":telephone" => $telephone
            ]);

            echo "✅ Formateur ajouté avec succès";
        } catch (PDOException $e) {
            echo "❌ Erreur : " . $e->getMessage();
        }

    } else {
        echo "⚠️ Tous les champs obligatoires doivent être remplis";
    }
}
