<?php

namespace App\Http\Controllers;

use App\Models\Institution;
use Illuminate\Http\Request;

class InstitutionController extends Controller
{
    /**
     * Muestra el formulario para crear una nueva institución.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('institutions.create'); // Retorna la vista del formulario
    }

    /**
     * Guarda una nueva institución en la base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $validated = $request->validate([
            'name' => 'required|string|max:255',  // Nombre es requerido, tipo string y max 255 caracteres
            'description' => 'required|string',   // Descripción es requerida
        ]);

        // Crear y guardar la institución en la base de datos
        Institution::create($validated);

        // Redirigir a la página de creación con un mensaje de éxito
        return redirect()->route('institutions.create')->with('success', 'Institución creada con éxito.');
    }
}
