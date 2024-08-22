<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExerciciosController extends Controller
{
    public function mostrarFormulario1()
    {
        return view("exercicio1");
    }

    public function mostrarFormulario2()
    {
        return view("exercicio2");
    }

    public function mostrarFormulario3()
    {
        return view("exercicio3");
    }

    public function mostrarFormulario4()
    {
        return view("exercicio4");
    }

    public function mostrarFormulario5()
    {
        return view("exercicio5");
    }

    public function mostrarFormulario6()
    {
        return view("exercicio6");
    }

    public function mostrarFormulario7()
    {
        return view("exercicio7");
    }

    public function mostrarFormulario8()
    {
        return view("exercicio8");
    }

    public function mostrarFormulario9()
    {
        return view("exercicio9");
    }

    public function mostrarFormulario10()
    {
        return view("exercicio10");
    }

    public function mostrarFormulario11()
    {
        return view("exercicio11");
    }

    public function calcularFormulario1(Request $request)
    {
        $valor1 = $request->input("Valor1");
        $valor2 = $request->input("Valor2");
        $resultado = $valor1 + $valor2;
        return view("resposta_exercicio1", compact('resultado'));
    }

    public function calcularFormulario2(Request $request)
    {
        $valor1 = $request->input("Valor1");
        $valor2 = $request->input("Valor2");
        $resultado = $valor2 - $valor1;
        return view("resposta_exercicio2", compact('resultado'));
    }

    public function calcularFormulario3(Request $request)
    {
        $valor1 = $request->input("Valor1");
        $valor2 = $request->input("Valor2");
        $resultado = $valor1 * $valor2;
        return view("resposta_exercicio3", compact('resultado'));
    }

    public function calcularFormulario4(Request $request)
    {
        $valor1 = $request->input("Valor1");
        $valor2 = $request->input("Valor2");
        if ($valor2 == 0) {
            return response()->json(['error' => 'Divisão por zero não é permitida.']);
        }
        $resultado = $valor1 / $valor2;
        return view("resposta_exercicio4", compact('resultado'));
    }

    public function calcularFormulario5(Request $request)
    {
        $valor1 = $request->input("Valor1");
        $valor2 = $request->input("Valor2");
        $valor3 = $request->input("Valor3");

        $resultado = ($valor1 + $valor2 + $valor3)/3;
        return view("resposta_exercicio5", compact('resultado'));
    }

    public function calcularFormulario6(Request $request)
    {
        $valor1 = $request->input("Valor1");

        $resultado = 5/9 * ($valor1 - 32);
        return view("resposta_exercicio6", compact('resultado'));
    }

    public function calcularFormulario7(Request $request)
    {
        $valor1 = $request->input("Valor1");

        $resultado = (9/5 * $valor1) + 32;
        return view("resposta_exercicio7", compact('resultado'));
    }

    public function calcularFormulario8(Request $request)
    {
        $altura = $request->input("Valor1");
        $largura = $request->input("Valor2");

        $resultado = (0.5) * ($largura * $altura);
        return view("resposta_exercicio8", compact('resultado'));
    }

    public function calcularFormulario9(Request $request)
    {
        $raio = $request->input("Valor1");

        $resultado = pi() * pow($raio, 2);
        return view("resposta_exercicio9", compact('resultado'));
    }

    public function calcularFormulario10(Request $request)
    {
        $altura = $request->input("Valor1");
        $largura = $request->input("Valor2");

        $resultado = 2 * ($largura + $altura);
        return view("resposta_exercicio10", compact('resultado'));
    }

    public function calcularFormulario11(Request $request)
    {
        $raio = $request->input("Valor1");

        $resultado = 2 * pi() * $raio;
        return view("resposta_exercicio11", compact('resultado'));
    }
}
