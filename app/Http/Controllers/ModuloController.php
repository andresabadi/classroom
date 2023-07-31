<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Modulo;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class ModuloController extends Controller
{
    public function create($slug)
    {
        $curso = Curso::where('slug', $slug)->first();

        if (is_null($curso)) {
            return abort(404);
        }
        return view('create.moduloNew', [
            "curso" => $curso,
        ]);
    }

    public function store(Request $request, $cursoSlug)
{
    // Validate data
    $validated = $request->validate([
        'title' => 'required',
        'description' => 'required',
        'duration' => 'required',
    ]);

    $moduloSlug = Str::slug($request->title, '-');

    // Check if a modulo with the same title already exists
    $exists = Modulo::where('title', $request->title)->first();

    if ($exists) {
        return redirect()->route('curso.show', ['slug' => $cursoSlug])->withErrors(['title' => 'Ese titulo ya existe']);
    }

    $validated['slug'] = $moduloSlug;

    // Find the curso based on the slug
    $curso = Curso::where('slug', $cursoSlug)->first();

    // Check if the curso exists
    if (!$curso) {
        return abort(404);
    }

    // Save the data and associate it with the curso
    $modulo = $curso->modulos()->create($validated);

    return redirect()->route('curso.show', ['slug' => $cursoSlug]);
}

    public function edit($id)
    {
        // Find the specific Competencia by its ID
        $modulo = Modulo::findOrFail($id);

        // Pass the $competencia variable to the view
        return view('create.moduloEdit', compact('modulo'));
    }


    public function update(Request $request, $id)
    {
        // Validate data
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        // Find the specific Competencia by ID
        $modulo = Modulo::findOrFail($id);

        // Update the data
        $modulo->update($validated);

        $curso = $modulo->curso;

        // Redirect to the competencia.show route with the slug parameter
        return redirect()->route('curso.show', ['slug' => $curso->slug]);
    }

    public function destroy($id)
    {
        // Find the specific Competencia by its ID
        $modulo = Modulo::findOrFail($id);
        $modulo->delete();

        return back()->with("success", "Curso deleted successfully.");
    }
}
