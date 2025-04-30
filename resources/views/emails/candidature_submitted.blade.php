<!DOCTYPE html>
<html>
<head>
    <title>Nouvelle candidature</title>
</head>
<body>
    <h2>Nouvelle candidature reçue</h2>
    
    <p><strong>Poste:</strong> {{ $candidature->poste }}</p>
    <p><strong>Nom:</strong> {{ $candidature->prenom }} {{ $candidature->nom }}</p>
    <p><strong>Email:</strong> {{ $candidature->email }}</p>
    <p><strong>Téléphone:</strong> {{ $candidature->telephone }}</p>
    
    <p>CV attaché à cet email.</p>
</body>
</html>