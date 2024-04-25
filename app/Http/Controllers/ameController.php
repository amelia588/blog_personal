<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ameController extends Controller
{
    public function blog()
    {
        // Devolver la vista del blog
        // Asegúrate de que la vista 'blog' exista en resources/views/blog.blade.php
        return view('blog');
    }

    // Método para la página Expresión Profesional
    public function ExpresionProfecional()
    {
        // Devolver la vista de Expresión Profesional con los datos necesarios
        // Asegúrate de que la vista 'expresionprofesional' exista en resources/views/expresionprofesional.blade.php
        return view('expresionprofesional', ['experiencia' => '5 años', 'especialidad' => 'Desarrollo Backend']);
    }
    // Método para la página Sobre Mi
    public function SobreMi()
    {
        // Aquí puedes agregar la lógica para obtener los datos necesarios
        // Por ejemplo, enviar una vista con datos del usuario
        return view('sobremi', ['nombre' => 'Amelia', 'edad' => 23]);
    }

    // Método para la página Ocupacion
    public function Ocupacion()
    {
        // Similar a SobreMi, puedes devolver una vista o datos específicos
        return view('ocupacion', ['ocupacion' => 'Desarrollador Web']);
    }

    // Método para la página Idioma
    public function Idioma()
    {
        // Devolver información sobre idiomas que habla el usuario
        return view('idioma', ['idiomas' => ['Español', 'Inglés', 'Francés']]);
    }

    // Método para la página Cursos
    public function cursos()
    {
        // Supongamos que tienes una lista de cursos a devolver
        return view('cursos', ['cursos' => ['Laravel', 'VueJS', 'React']]);
    }
}
