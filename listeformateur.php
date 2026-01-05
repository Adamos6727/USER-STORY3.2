<?php
require 'connectionbd.php';

$sql = "
    SELECT f.nom, f.prenom, m.libelle
    FROM formateurs f
    JOIN formateur_matiere fm ON f.id_formateur = fm.id_formateur
    JOIN matieres m ON fm.id_matiere = m.id_matiere
";

$stmt = $pdo->query($sql);
$data = $stmt->fetchAll();

foreach ($data as $row) {
    echo $row['nom'] . " " . $row['prenom'] . " - " . $row['libelle'] . "<br>";
}
