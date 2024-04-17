<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\contact;

class ContactController extends Controller
{
    public function index()
    {
        // Récupérer tous les contacts depuis la base de données
        $contacts = Contact::all();

        // Passer les contacts à la vue pour l'affichage
        return view('admin.contacts.index', compact('contacts'));
    }
}
