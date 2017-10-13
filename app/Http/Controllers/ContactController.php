<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showForm(Request $request, $id = null) {
        if(!empty($id)) {
            $contactPerson = Contact::find($id);
        } else {
            $contactPerson = new Contact();
        }
        return view('contact', compact('contactPerson'));
    }

    public function save(Request $request) {
        $this->validate($request, [
            'full_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
        ]);

        $id = $request->get('id');

        if(!empty($id)) {
            $contact = Contact::find($id);
        } else {
            $contact = new Contact();
        }

        $contact->fill($request->all());
        $contact->save();

        if(!empty($id)) {
            return redirect()->to('/home')->with('message', 'Contact has been updated');
        } else {
            return redirect()->to('/home')->with('message', 'New contact added to address book.');
        }

    }

    public function delete($id, Request $request) {
        $contactPerson = Contact::find($id);
        return view('contact-delete-confirmation', compact('contactPerson'));
    }

    public function deleteConfirmed($id) {
        $contact = Contact::find($id);
        $contact->delete();
        return redirect()->to('/home')->with('message', 'Contact has been deleted');
    }
}
