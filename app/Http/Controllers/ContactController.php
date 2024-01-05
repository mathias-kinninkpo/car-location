<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }

    public function submitForm(Request $request)
    {
        // Validez les données du formulaire
        $validatedData = $request->validate([
            'email' => 'required|email|max:50',
            'name' => 'required|string|max:50',
            'Phone' => 'required|string|max:50',
            'message' => 'required|string',
            'g-recaptcha-response' => 'required|recaptcha',
        ]);

        // Traitement des données du formulaire (envoi d'e-mail, sauvegarde en base de données, etc.)

        // Redirigez l'utilisateur après soumission du formulaire
        return redirect()->route('contact.form')->with('success', 'Votre message a été envoyé avec succès.');
    }
}
