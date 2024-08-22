<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" context="width=device-width, inicial-scale-10">
    <title>Exercício 10</title>
</head>

<body>
    <h1>Exercício 10</h1>
    <form action="/resposta_exercicio10" method="POST">
        @csrf
        <input type="number" name="Valor1"
        placeholder="Altura"/>
        <input type="number" name="Valor2"
        placeholder="Largura"/>

        <button type="submit">Calcular</button>
    </form>
</body>
