<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index() 
    {
        return view('index');
    }
    public function confirm(Request $request)
    {
       $contact = $request->only(['name1','name2', 'button1','button2','button3','email','tel1',
    'tel2','tel3','address','building','content','content2']);
       return view('confirm', compact('contact'));
    }
    public function store(ContactRequest $request)
    {
        $contact = $request->only(['name1','name2', 'button1','button2','button3','email','tel1',
        'tel2','tel3','address','building','content','content2']);
        contact::create($contact);

        return view('thanks');
    }

}
