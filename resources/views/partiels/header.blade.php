<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>mes Garages</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <h1>Mon Super Site</h1>
        <nav>
            <ul>
                <li><a href=" {{ Route('dashboard') }} ">Dashboard</a></li>
                <li><a href=" {{ Route('garages.index') }} ">Garages</a></li>
                <li><a href=" {{ Route('clients.index') }} ">Clients</a></li>
                <li><a href=" {{ Route('contrats.index') }} ">Contrats</a></li>
                <li><a href=" {{ Route('model_contrats.index') }} ">Model Contrats</a></li>
            </ul>
        </nav>
    </header>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/editorjs@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/header@latest"></script>
