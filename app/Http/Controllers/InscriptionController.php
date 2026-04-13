<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class InscriptionController extends Controller
{
    public function send(Request $request)
    {
        $data = $request->validate([
            'enfant' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'adresse' => 'nullable|string|max:255',
            'telephone' => 'nullable|string|max:255',
            'naissance' => 'nullable|date',
            'parents' => 'nullable|string|max:255',
            'avs' => 'nullable|string|max:255',
            'classe' => 'nullable|string|max:255',
            'message_parent' => 'nullable|string',
            'file' => 'nullable|file|max:5120',
            'check1' => 'required',
            'check2' => 'required',
        ]);

        Mail::send('emails.inscription', $data, function ($mail) use ($request) {
            $mail->to('ton@email.com')
                ->subject('Nouvelle inscription');

            if ($request->hasFile('file')) {
                $file = $request->file('file');

                $mail->attach($file->getRealPath(), [
                    'as' => $file->getClientOriginalName(),
                    'mime' => $file->getMimeType(),
                ]);
            }
        });

        return back()->with('success', 'Formulaire envoyé avec succès !');
    }
}