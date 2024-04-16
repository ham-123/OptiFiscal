<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;


class OptifiscalController extends Controller
{
        public function index(){
            return view('optifiscal.index');
        }

        public function about(){
            return view('optifiscal.about');
        }

        public function services(){
            return view('optifiscal.services');
        }

        public function contact(){
            return view('optifiscal.contact');
        }
        public function store(Request $request)
        {
            $validatedData = $request->validate([
                'full_name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'budget' => 'nullable|string|max:255',
                'subject' => 'required|string|max:255',
                'message' => 'required|string',
            ]);
    
            $contact = Contact::create($validatedData);
    
            return redirect()->back()->with('success', 'Votre message a été envoyé avec succès ! Nous vous contacterons bientôt.');
        }
}
