<?php

namespace App\Http\Controllers;

use App\Models\Competencia;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\User;



class CompetenciaController extends Controller
{
    use Notifiable;

    public function index()
    {
        $user = Auth::user();
    
        $competencias=Competencia::all();
        $userCompetencias = Competencia::where('user_id', $user->id)->get();
        // Retrieve competencias for the logged-in user
        // $competencias = $user->competencias;
        // If the user is a teacher, you can also retrieve other competencias
        // $otherCompetencias = $user->isTeacher() ? Competencia::all() : [];
    
        return view('home', [
            "competencias" => $competencias,
            "userCompetencias" => $userCompetencias,
            "user" => $user,
        ]);
    }

    public function create()
    {
        return view('create.competenciaNew');
    }

    public function store(Request $request)
    {
        // Validate data
        $validated = $request->validate([
            'title' => 'required',
            'zoom_url' => 'nullable|url',
            'slack_url' => 'nullable|url',
            'presentaciones_url' => 'nullable|url',
            'grabaciones_url' => 'nullable|url',
        ]);

    $slug = Str::slug($request->title, '-');
    // if already exists
    $exists = Competencia::where('slug', $slug)->first();
    if ($exists) {
        return redirect()->route('home')->withErrors(['title' => 'Ese titulo ya existe']);
    }


    // Get the ID of the authenticated user
    $userId = Auth::id();

    // dump($userId);

    // Save the data and associate it with the authenticated user
    $competencia = new Competencia([
        'title' => $request->title,
        'slug' => $slug,
        'user_id' => $userId, 
        'zoom_url' => $request->zoom_url,
        'slack_url' => $request->slack_url,
        'presentaciones_url' => $request->presentaciones_url,
        'grabaciones_url' => $request->grabaciones_url,
    ]);
    

    $competencia->save();

    // Return view in case of success
    return redirect()->route('competencia.show', [$slug]) ;
    }

    public function edit($id)
    {
        // Find the specific Competencia by its ID
        $competencia = Competencia::findOrFail($id);
    
        // Pass the $competencia variable to the view
        return view('create.competenciaEdit', compact('competencia'));
    }
    
    public function update(Request $request, $id)
    {
        // dd($request->all()); 
        // Validate data
        $validated = $request->validate([
            'title' => 'required',
            // 'image_url' => 'nullable|url',
            'zoom_url' => 'nullable|url',
            'slack_url' => 'nullable|url',
            'presentaciones_url' => 'nullable|url',
            'grabaciones_url' => 'nullable|url',

        ]);

        // Find the specific Competencia by ID
        $competencia = Competencia::findOrFail($id);

            // Update the data
            $competencia->update($validated);

            // Return view in case of success
            return redirect("/home");
        }

        public function destroy($id)
        {
            // Find the specific Competencia by its ID
            $competencia = Competencia::findOrFail($id);
            $competencia->delete(); 
        
            return redirect('/home')->with("competencias", $competencia);
        }

        //     public function show($slug, Competencia $competencia)
        // {
        //     $competencia = Competencia::with('cursos')->where('slug', $slug)->first();

        //     if (!$competencia) {
        //         return abort(404);
        //     }

        //     return view('courses', [
        //         "competencia" => $competencia,
        //     ]);
        // }


        public function show($slug, Competencia $competencia)
        {
            $competencia = Competencia::where('slug', $slug)->first();
        
            if (!$competencia) {
                return abort(404);
            }
            
            if (auth()->user()->can('view', $competencia)) {
                return view('courses', [
                    "competencia" => $competencia,
                ]);
            } else {
                abort(404);
            }

        }
        
}
