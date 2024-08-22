<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" context="width=device-width, inicial-scale-10">
    <title>Exercício 8</title>
</head>

<body>
    <h1>Exercício 8</h1>
    <form action="/resposta_exercicio8" method="POST">
        @csrf
        <input type="number" name="Valor1"
        placeholder="Altura"/>
        <input type="number" name="Valor2"
        placeholder="Largura"/>

        <button type="submit">Calcular</button>
    </form>
</body>
