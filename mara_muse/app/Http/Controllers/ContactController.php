<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function index()
    {
        return view('contact');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        // Store the contact message in the database
        \App\Models\Contact::create($request->all());

        return redirect()->back()->with('success', 'Message sent successfully!');
    }
    public function show()
    {
        $contacts = \App\Models\Contact::all();
        return view('contact.show', compact('contacts'));
    }
    public function destroy($id)
    {
        $contact = \App\Models\Contact::findOrFail($id);
        $contact->delete();

        return redirect()->back()->with('success', 'Message deleted successfully!');
    }
    public function edit($id)
    {
        $contact = \App\Models\Contact::findOrFail($id);
        return view('contact.edit', compact('contact'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $contact = \App\Models\Contact::findOrFail($id);
        $contact->update($request->all());

        return redirect()->route('contact.show')->with('success', 'Message updated successfully!');
    }
    //fuction to create the contact to be save in the db
    public function create()
    {
        return view('contact.create');
    }
}
