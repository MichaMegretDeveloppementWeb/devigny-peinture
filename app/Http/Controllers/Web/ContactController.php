<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('web.contact.index');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'service' => 'required|string',
            'message' => 'required|string|max:5000',
        ]);

        // TODO: Envoyer l'email / sauvegarder en base
        // Mail::to('contact@devigny-peinture.fr')->send(new ContactFormMail($validated));

        return back()->with('success', 'Votre demande a bien été envoyée. Nous vous répondrons sous 48h.');
    }
}
