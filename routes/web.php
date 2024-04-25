<?php

use App\Http\Controllers\ameController; // Corregido el uso de diagonales inversas

// crear la ruta de tu preferencia
Route::get('/blog', [ameController::class, 'blog'])->name('blog');
Route::get('/Sobre-mi', [ameController::class, 'SobreMi'])->name('SobreMi');
Route::get('/Ocupacion', [ameController::class, 'Ocupacion'])->name('Ocupacion');
Route::get('/Idioma', [ameController::class, 'Idioma'])->name('Idioma');
Route::get('/cursos', [ameController::class, 'cursos'])->name('Cursos');
// La siguiente línea también parece incorrecta si no se ha mostrado la definición de 'UserController' antes
Route::get('/expresion-profesional', [ameController::class, 'ExpresionProfecional'])->name('Expresionprofesional');