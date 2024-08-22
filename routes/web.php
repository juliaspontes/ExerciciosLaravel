<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExerciciosController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inicial/{nome}', function ($nome) {
    return "Olá Mundo!".$nome;
});

Route::get('/exercicio1', [ExerciciosController:: class,
                     'mostrarFormulario1']);

Route::post('/resposta_exercicio1', [ExerciciosController:: class,
                    'calcularFormulario1']);

Route::get('/exercicio2', [ExerciciosController:: class,
                    'mostrarFormulario2']);

Route::post('/resposta_exercicio2', [ExerciciosController:: class,
                   'calcularFormulario2']);          
                   
Route::get('/exercicio3', [ExerciciosController:: class,
                   'mostrarFormulario3']);

Route::post('/resposta_exercicio3', [ExerciciosController:: class,
                  'calcularFormulario3']);   
                  
Route::get('/exercicio4', [ExerciciosController:: class,
                  'mostrarFormulario4']);

Route::post('/resposta_exercicio4', [ExerciciosController:: class,
                 'calcularFormulario4']);  

Route::get('/exercicio5', [ExerciciosController:: class,
                 'mostrarFormulario5']);

Route::post('/resposta_exercicio5', [ExerciciosController:: class,
                'calcularFormulario5']);  

Route::get('/exercicio6', [ExerciciosController:: class,
                'mostrarFormulario6']);

Route::post('/resposta_exercicio6', [ExerciciosController:: class,
               'calcularFormulario6']);  

Route::get('/exercicio7', [ExerciciosController:: class,
               'mostrarFormulario7']);

Route::post('/resposta_exercicio7', [ExerciciosController:: class,
              'calcularFormulario7']);  

Route::get('/exercicio8', [ExerciciosController:: class,
              'mostrarFormulario8']);

Route::post('/resposta_exercicio8', [ExerciciosController:: class,
             'calcularFormulario8']);  

Route::get('/exercicio9', [ExerciciosController:: class,
             'mostrarFormulario9']);

Route::post('/resposta_exercicio9', [ExerciciosController:: class,
            'calcularFormulario9']);  

Route::get('/exercicio10', [ExerciciosController:: class,
            'mostrarFormulario10']);

Route::post('/resposta_exercicio10', [ExerciciosController:: class,
           'calcularFormulario10']);  

Route::get('/exercicio11', [ExerciciosController:: class,
           'mostrarFormulario11']);

Route::post('/resposta_exercicio11', [ExerciciosController:: class,
          'calcularFormulario11']);  