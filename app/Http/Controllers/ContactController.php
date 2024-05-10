<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Arr;

class ContactController extends Controller

{
    public function index()
    {
        return view('contact-list' , [
            'contacts' => Contact::withTrashed()->get(),


        ]);

    }



    public function show($id)
    {
      $contact=  Arr::first(Contact::all() , fn($contact) => $contact['id'] == $id);

    $contact = Contact::find($id);

    return view('contact' , ['contact' => $contact , contact::class => $contact]);
    }

    public function create(){

    }



   public function store(Request $request)
    {
        $contact = new contact;
        $contact->name = $request->name;
        $contact->Phone = $request->Phone;
        $contact->save();
        return redirect('contact-list');
    }

    public function edit($id)
    {

    $contact = Contact::find($id);

    return view('edit' , ['contact' => $contact]);
    }



    public function update($id)
    {

        request()->validate([
            'name'=> ['required','min:3'],
            'Phone' =>['required']
        ]);
        $contact = Contact::findOrFail($id);
        $contact-> update([
            'name' => request('name'),
            'Phone' => request('Phone'),
        ]);

         return to_route('contact-list');
    }



    public function softDelete($id)
    {
        Contact::findOrFail($id)->Delete();

        return redirect(route('contact-list'));
    }


    public function restore($id)
    {
        Contact::whereId($id)->withTrashed()->restore();

        return back();
    }


    public function forceDelete($id)
    {
        Contact::whereId($id)->withTrashed()->forceDelete();

        return back();
    }


    public function search(Request $request){
        // Get the search value from the request
        $search = $request->input('search');

        // Search in the title and body columns from the posts table
        $contacts = Contact::query()
            ->where('name', 'LIKE', "%{$search}%")
            ->orWhere('Phone', 'LIKE', "%{$search}%")
            ->get();

        // Return the search view with the resluts compacted
        return view('contact-list', compact('contacts'));
    }
}
