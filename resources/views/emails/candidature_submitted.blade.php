<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Nouvelle Candidature</title>
</head>
<body>
    <h1>Nouvelle candidature reçue</h1>
    <p>Prénom: {{ $candidature->prenom }}</p>
    <p>Nom: {{ $candidature->nom }}</p>
    <p>Email: {{ $candidature->email }}</p>
    <p>Téléphone: {{ $candidature->telephone }}</p>

</body>
</html>
