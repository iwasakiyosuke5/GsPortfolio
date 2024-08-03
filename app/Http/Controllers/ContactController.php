<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ContactRequest $request)
    {
    //     $validatedData = $request->validate([
    //         'name' => 'required|max:255',
    //         'email' => 'required|email|max:255',
    //         'text' => 'required|max:255',
    //     ]);
    //     if ($validatedData) {
        

            $contact = new Contact();
            $contact->name = $request->name;
            $contact->email = $request->email;
            $contact->text = $request->text;
            $contact->save();
            return redirect()->route('top')->with('success', 'お問い合わせを送信しました。');
        // }

    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
