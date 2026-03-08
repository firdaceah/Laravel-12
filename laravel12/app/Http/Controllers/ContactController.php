<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'isi_pesan' => 'required',
        ]);

        Message::create($request->all());

        return back()->with('success', 'Pesan kamu berhasil terkirim, Firda akan segera membalas!');
    }
}
