<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ContactController extends Controller
{
    /**
     * Show the main landing page.
     */
    public function show(): View
    {
        return view('pages.home');
    }

    /**
     * Handle the contact form submission.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name'    => ['required', 'string', 'max:100'],
            'email'   => ['required', 'email'],
            'subject' => ['required', 'string', 'max:150'],
            'message' => ['required', 'string', 'min:10'],
        ], [
            'name.required'    => 'Nama lengkap wajib diisi.',
            'name.max'         => 'Nama tidak boleh lebih dari 100 karakter.',
            'email.required'   => 'Alamat email wajib diisi.',
            'email.email'      => 'Format email tidak valid.',
            'subject.required' => 'Subjek pesan wajib diisi.',
            'subject.max'      => 'Subjek tidak boleh lebih dari 150 karakter.',
            'message.required' => 'Pesan wajib diisi.',
            'message.min'      => 'Pesan minimal 10 karakter.',
        ]);

        // Here you can save to DB or send email.
        // Example: Mail::to('info@dexpedisyen.id')->send(new ContactMail($validated));

        return redirect()->route('contact.success')
            ->with('success', 'Pesan Anda telah berhasil dikirim! Tim kami akan segera menghubungi Anda.');
    }
}
