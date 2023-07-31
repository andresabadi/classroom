<?php

namespace App\Http\Controllers;

use App\Models\Competencia;
use App\Models\Curso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;

class CursoController extends Controller
{

    public function create($slug)
    {
        $competencia = Competencia::where('slug', $slug)->first();

        if (is_null($competencia)) {
            return abort(404);
        }
        return view('create.cursoNew', [
            "competencia" => $competencia,
        ]);
    }

    public function store(Request $request, $competenciaSlug)
    {
        // Validate data
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'duration' => 'required',
            'cursera_url' => 'nullable|url',
            // 'presentaciones_url' => 'nullable|url',
            // 'grabaciones_url' => 'nullable|url',
        ]);

        // Generate the slug from the title
        $moduloSlug = Str::slug($request->title, '-');
        // Check if the generated slug already exists in the database
        $exists = Curso::where('title', $request->title)->first();
        // If the slug exists, add unique number to the end of the slug
        if ($exists) {
            // $count = 1;
            // while (Curso::where('slug', "{$slug}-{$count}")->exists()) {
            //     $count++;
            // $slug = "{$slug}-{$count}";
            return redirect()->route('competencia.show', ['slug' => $competenciaSlug])->withErrors(['title' => 'Ese titulo ya existe']);
        }

        $validated['slug'] = $moduloSlug;

        // Get the logged-in user's competencias
        // $competencias = auth()->user()->competencias;
        $competencia = Competencia::where('slug', $competenciaSlug)->first();

    // Check if the competencia exists
    if (!$competencia) {
        return abort(404);
    }

    // Save the data and associate it with the curso
    $curso = $competencia->cursos()->create($validated);
        // dd($competencia); 
        return redirect()->route('competencia.show', ['slug' => $competenciaSlug]);
    }


    //     public function store(Request $request)
    // {
    //     // Validate data
    //     $validated = $request->validate([
    //         'title' => 'required',
    //         'description' => 'required',
    //         'duration' => 'required',
    //         'cursera_url' => 'nullable|url',
    //         'presentaciones_url' => 'nullable|url',
    //         'grabaciones_url' => 'nullable|url',
    //     ]);

    //     // Generate the slug from the title
    //     $slug = Str::slug($request->title, '-');

    //     // Check if the generated slug already exists in the database
    //     $exists = Curso::where('slug', $slug)->exists();

    //     // If the slug exists, append a unique number to the end of the slug
    //     if ($exists) {
    //         $count = 1;
    //         while (Curso::where('slug', "{$slug}-{$count}")->exists()) {
    //             $count++;
    //         }
    //         $slug = "{$slug}-{$count}";
    //     }

    //     // Add the 'slug' field to the validated data
    //     $validated['slug'] = $slug;

    //     // Get the logged-in user's competencia
    //     $competencia = Auth::user()->competencia->first();

    //     // dd($competencia);
    //     // Save the data and associate it with the competencia
    //     $curso = $competencia->cursos()->create($validated);

    //     // Redirect to the curso.show route with the generated slug
    //     return redirect()->route('curso.show', ['slug' => $slug]);
    // }


    public function edit($slug)
    {
        // Find the specific Curso by its slug
        $curso = Curso::findOrFail($slug);

        // Pass the $curso variable to the view
        return view('create.cursoEdit', compact('curso'));
    }

    public function update(Request $request, $slug)
    {
        // Validate data
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image_url' => 'nullable|url',
            'coursera_url' => 'nullable|url',
            'presentaciones_url' => 'nullable|url',
            'grabaciones_url' => 'nullable|url',
        ]);

        // Find the specific Competencia by ID
        $curso = Curso::findOrFail($slug);

        // Update the data
        $curso->update($validated);

        $competencia = $curso->competencia;

        // Redirect to the competencia.show route with the slug parameter
        return redirect()->route('competencia.show', ['slug' => $competencia->slug]);
    }

    public function destroy($id)
    {
        // dd($id);
        // Find the specific Curso by its ID
        $curso = Curso::findOrFail($id);
        $curso->delete();

        return back()->with("success", "Curso deleted successfully.");
    }

    public function show($slug)
    {
        $curso = Curso::where('slug', $slug)->first();

        if (!$curso) {
            return abort(404);
        }

        // load the modulos related to the curso
        $curso->load('modulos');

        if (auth()->user()->can('view', $curso)) {
            return view('course', compact('curso'));
        } else {
            abort(404);
        }
    }
}
