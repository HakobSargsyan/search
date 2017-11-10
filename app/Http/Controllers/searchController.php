<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Contact;

class searchController extends Controller
{
    public function index(){

        /*$client = new \AlgoliaSearch\Client(env("ALGOLIA_APP_ID"), env("ALGOLIA_SECRET"));

        $index = $client->initIndex('contacts');
        dd($index->search('Sargsyan'));*/
        //dd($index);
        
        //algolia call triger
/*        $contact = Contact::find(1);
        $contact->name = 'New Name';
        $contact->save();*/
       /* $result = Contact::search('Sargsyan')->within('contacts')->get();
        dd($result,"ss");*/
        return view("search");
    }
}
