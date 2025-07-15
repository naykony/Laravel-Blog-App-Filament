<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;


class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contact');
    }
    public function store(ContactRequest $request)
    {
        contact::query()->create([
                'name'=> $request->name,
                'email'=> $request->email,
                'dec'=> $request->dec,
        ]);
        return back()->with('success', 'ok');
    }
}
