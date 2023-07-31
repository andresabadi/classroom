<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        // Validar los datos del formulario de registro
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:5|confirmed',
        ]);

        // Crear un nuevo usuario en la base de datos
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        // Console log para verificar el registro exitoso
        \Illuminate\Support\Facades\Log::info('Registro exitoso. Usuario: ' . $user->email);

        // Iniciar sesión automáticamente después del registro
        Auth::login($user);

        // Redirigir al usuario a la página de inicio o a donde desees
        return redirect('/home')->with('success', 'Registro exitoso. Inicia sesión para continuar.');
    }

    public function login(Request $request)
    {
        // Validar los datos del formulario de inicio de sesión
        $credentials = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        // Intentar autenticar al usuario
        if (Auth::attempt($credentials)) {
            // Autenticación exitosa, redirigir al usuario a la página de inicio o a donde desees
            return redirect('/home');
        } else {
            // Autenticación fallida, redirigir de vuelta al formulario de inicio de sesión con un mensaje de error
            return redirect()->back()->withErrors([
                'email' => 'Las credenciales ingresadas no son válidas.',
            ]);
        }
    }
}
