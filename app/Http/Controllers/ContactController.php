<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use RealRashid\SweetAlert\Facades\Alert;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
            'send_copy' => 'nullable|boolean',
        ]);

        try {
            // Kirim email ke admin
            Mail::to('fajarnf77@gmail.com')->send(new ContactFormMail($validatedData));

            // Kirim salinan ke pengirim jika dicentang
            if (!empty($validatedData['send_copy'])) {
                Mail::to($validatedData['email'])->send(new ContactFormMail($validatedData, true));
            }

            Alert::success('Berhasil!', 'Pesan Anda telah berhasil dikirim.');
            return redirect()->back();

        } catch (\Exception $e) {
            // Anda bisa log errornya untuk debugging lebih lanjut jika terjadi
            // \Log::error('Email send failed: ' . $e->getMessage()); // Pastikan pakai \Log::error jika belum ada use statement
            Alert::error('Gagal!', 'Terjadi kesalahan saat mengirim pesan. Silakan coba lagi nanti.');
            return redirect()->back()->withInput();
        }
    }
}