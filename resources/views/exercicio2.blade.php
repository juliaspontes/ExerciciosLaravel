<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" context="width=device-width, inicial-scale-10">
    <title>Exercício 2</title>
</head>

<body>
    <h1>Exercício 2</h1>
    <form action="/resposta_exercicio2" method="POST">
        @csrf
        <input type="number" name="Valor1"
        placeholder="Valor 1"/>
        <input type="number" name="Valor2"
        placeholder="Valor 2"/>

        <button type="submit">Calcular</button>
    </form>
</body>
