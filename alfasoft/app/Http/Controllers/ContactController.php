<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
class ContactController extends Controller

{
    public function index()
    {
        $contacts = Contact::all();
        return view('welcome', ['contact' => $contacts]);
    }

    public function create()
    {
        return view('contacts.create');
    }

    public function store(Request $request)
    {
        $contact = new Contact;

        $contact->name = $request->name;
        $contact->contact = $request->contact;
        $contact->email = $request->email;

        $contact->save();

        return redirect('/')->with('msg', 'Contact created.');
    }

    public function show($id)
    {
        $contact = Contact::findOrFail($id);
        return view('contacts.show', ['contact' => $contact]);
    }

    public function edit($id)
    {
        $contact = Contact::findOrFail($id);
        return view('contacts.edit', ['contact' => $contact]);
    }

    public function update(Request $request, $id)
    {
        $contact = Contact::findOrFail($id);
        $contact->update([
            'name' => $request->name,
            'contact' => $request->contact,
            'email' => $request->email,
        ]);
        return redirect('/')->with('msg', 'Contact Edited!');

    }

    public function destroy($id)
    {

        Contact::findOrFail($id)->delete();
        return redirect('/')->with('msg', 'Contact Deleted!');

    }

}
