<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function send(Request $request)
    {
        // Validasi form
                $data = $request->validate([
                'name' => 'required',
                'email' => 'required|email',
                'message' => 'required',
            ]);

            // Kirim email
            Mail::to('ahmadshohazar2911@gmail.com')->send(new ContactMail($data));

            return back()->with('success', 'Pesan berhasil dikirim!');
}
}