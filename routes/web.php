<?php

use Illuminate\Support\Facades\Route;

/////////////////////////////////////
/// Area Home(inicio)
/////////////////////////////////////

Route::get('/', function () {
    return view('inicio');
});

/////////////////////////////////////
/// Area Login y Registro
/////////////////////////////////////

Route::get('/Registro', function () {
    return view('Registro');
});

/////////////////////////////////////
///Area Sobre Nosotros
/////////////////////////////////////

Route::get('/Sobre-Nosotros', function () {
    return view('Sobre-Nosotros');
});

Route::get('/sobrenosotros-aptitudes-A', function () {
    return view('sobrenosotros-aptitudes-A');
});

Route::get('/sobrenosotros-cursos-y-talleres-A', function () {
    return view('sobrenosotros-cursos-y-talleres-A');
});

Route::get('/sobrenosotros-experiencia-laboral-A', function () {
    return view('sobrenosotros-experiencia-laboral-A');
});

Route::get('/sobrenosotros-habilidades-A', function () {
    return view('sobrenosotros-habilidades-A');
});

Route::get('/Sobre-Nosotros-D', function () {
    return view('Sobre-Nosotros-D');
});

Route::get('/sobrenosotros-aptitudes-D', function () {
    return view('sobrenosotros-aptitudes-D');
});

Route::get('/sobrenosotros-cursos-y-talleres-D', function () {
    return view('sobrenosotros-cursos-y-talleres-D');
});

Route::get('/sobrenosotros-experiencia-laboral-D', function () {
    return view('sobrenosotros-experiencia-laboral-D');
});

Route::get('/sobrenosotros-habilidades-D', function () {
    return view('sobrenosotros-habilidades-D');
});

/////////////////////////////////////
///Area de Carteleras y Sinopsis
/////////////////////////////////////

Route::get('/carteleras', function () {
    return view('carteleras');
});

Route::get('/Sinopsis-Blade-runner-2049', function () {
    return view('Sinopsis-Blade-runner-2049');
});

Route::get('/Sinopsis-cars', function () {
    return view('Sinopsis-cars');
});

Route::get('/Sinopsis-cars-2', function () {
    return view('Sinopsis-cars-2');
});

Route::get('/Sinopsis-cars-3', function () {
    return view('Sinopsis-cars-3');
});

Route::get('/Sinopsis-Deadpool', function () {
    return view('Sinopsis-Deadpool');
});

Route::get('/Sinopsis-Deadpool-2', function () {
    return view('Sinopsis-Deadpool-2');
});

Route::get('/Sinopsis-Deadpool-3', function () {
    return view('Sinopsis-Deadpool-3');
});

Route::get('/Sinopsis-el-codigo-enigma', function () {
    return view('Sinopsis-el-codigo-enigma');
});

Route::get('/Sinopsis-el-conjuro', function () {
    return view('Sinopsis-el-conjuro');
});

Route::get('/Sinopsis-el-conjuro-2', function () {
    return view('Sinopsis-el-conjuro-2');
});

Route::get('/Sinopsis-el-conjuro-3', function () {
    return view('Sinopsis-el-conjuro-3');
});

Route::get('/Sinopsis-Gladiador', function () {
    return view('Sinopsis-Gladiador');
});

Route::get('/Sinopsis-Godzilla-x-Kong', function () {
    return view('Sinopsis-Godzilla-x-Kong');
});

Route::get('/Sinopsis-Guardianes-de-la-galaxia-2', function () {
    return view('Sinopsis-Guardianes-de-la-galaxia-2');
});

Route::get('/Sinopsis-hallowen', function () {
    return view('Sinopsis-hallowen');
});

Route::get('/Sinopsis-intensamente-2', function () {
    return view('Sinopsis-intensamente-2');
});

Route::get('/Sinopsis-Joker', function () {
    return view('Sinopsis-Joker');
});

Route::get('/Sinopsis-kunfu-panda-4', function () {
    return view('Sinopsis-kunfu-panda-4');
});

Route::get('/Sinopsis-madagascar', function () {
    return view('Sinopsis-madagascar');
});

Route::get('/Sinopsis-mi-villano-favorito-4', function () {
    return view('Sinopsis-mi-villano-favorito-4');
});

Route::get('/Sinopsis-Nerve', function () {
    return view('Sinopsis-Nerve');
});

Route::get('/Sinopsis-Ready-player-one', function () {
    return view('Sinopsis-Ready-player-one');
});

Route::get('/Sinopsis-Spiderman', function () {
    return view('Sinopsis-Spiderman');
});

Route::get('/Sinopsis-Spiderman-2', function () {
    return view('Sinopsis-Spiderman-2');
});

Route::get('/Sinopsis-Spiderman-3', function () {
    return view('Sinopsis-Spiderman-3');
});

Route::get('/Sinopsis-Toy-story', function () {
    return view('Sinopsis-Toy-story');
});

Route::get('/Sinopsis-Toy-story-2', function () {
    return view('Sinopsis-Toy-story-2');
});

Route::get('/Sinopsis-Toy-story-3', function () {
    return view('Sinopsis-Toy-story-3');
});

Route::get('/Sinopsis-Toy-story-4', function () {
    return view('Sinopsis-Toy-story-4');
});

Route::get('/Sinopsis-world-war-Z', function () {
    return view('Sinopsis-');
});



