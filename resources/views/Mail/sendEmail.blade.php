<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact us (Project)</title>
</head>
<body>
    <p><strong>Klien :</strong> {{ $contact->klien }}</p>
    <p><strong>Email :</strong> {{ $contact->email }}</p>
    <p><strong>Telepon :</strong> {{ $contact->telepon }}</p>
    <p><strong>Service :</strong> {{ $contact->service }}</p>
    <p><strong>Detail Project :</strong> {{ $contact->detail }}</p>
    <p><strong>Deadline :</strong> {{ $contact->deadline }}</p>
    <p><strong>Status :</strong> {{ $contact->status }}</p>
</body>
</html>
