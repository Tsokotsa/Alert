<?php

namespace App\Http\Controllers;

use App\Helpers\Tsokotsa\generalHelpers;
use Illuminate\Http\Request;
use App\Models\Contacts;

class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();
        $GH = new generalHelpers();

        $sites = $GH->get_all_high_sites();
        $campaigns = $GH->get_all_Active_Campaigns();
        $contacts = Contacts::all();

        return view('contacts.index', ['user' => $user, 'sites' => $sites, 'campaigns' => $campaigns, 'contacts' => $contacts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function add(Request $request)
    {
        $contact = new Contacts;

        $contact->name = $request->name;
        $contact->surname = $request->surname;
        $contact->address = $request->address;
        $contact->email = $request->email;
        $contact->enable_notification = $request->enable_notification;
        $contact->cell1 = $request->cell1;
        $contact->cell2 = $request->cell2;
        $contact->telegram_id = $request->telegram_id;
        $contact->linked_locations = json_encode($request->input('linked_location', []));
        $contact->notify_on = json_encode($request->input('notify_on', []));



        $contact->save();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
