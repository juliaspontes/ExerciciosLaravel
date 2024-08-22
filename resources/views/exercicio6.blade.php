<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" context="width=device-width, inicial-scale-10">
    <title>Exercício 6</title>
</head>

<body>
    <h1>Exercício 6</h1>
    <form action="/resposta_exercicio6" method="POST">
        @csrf
        <input type="number" name="Valor1"
        placeholder="Valor 1"/>

        <button type="submit">Calcular</button>
    </form>
</body>
