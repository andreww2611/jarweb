<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
// use Illuminate\Contracts\Queue\ShouldQueue; // Tidak perlu jika tidak menggunakan antrean secara eksplisit
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content; // Import ini
use Illuminate\Mail\Mailables\Envelope; // Import ini
use Illuminate\Mail\Mailables\Address; // Import ini untuk replyTo/from yang lebih baik (opsional)
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    // Properti publik akan otomatis tersedia di view
    public $name;
    public $email;
    public $messageText; // Mengubah $message menjadi $messageText untuk menghindari konflik dengan $message dari Mailable
    public $isCopy;

    /**
     * Create a new message instance.
     *
     * @param array $data Data dari formulir kontak
     * @param bool $isCopy Menunjukkan apakah ini salinan untuk pengirim
     */
    public function __construct(array $data, bool $isCopy = false)
    {
        // Pastikan kunci array ada sebelum mengaksesnya
        $this->name = $data['name'] ?? 'Guest'; // Default jika kunci tidak ada
        $this->email = $data['email'] ?? 'no-reply@example.com';
        $this->messageText = $data['message'] ?? '';
        $this->isCopy = $isCopy;
    }

    /**
     * Get the message envelope.
     * Ini mendefinisikan subjek dan pengirim/penerima email.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('noreply@yourdomain.com', 'Your Website Contact'), // Email pengirim. Ganti dengan email domain Anda
            replyTo: [
                new Address($this->email, $this->name), // Mengatur balasan ke email pengirim formulir
            ],
            subject: $this->isCopy ? 'Salinan Pesan Anda: ' . $this->name : 'Pesan Kontak Baru dari ' . $this->name,
        );
    }

    /**
     * Get the message content definition.
     * Ini mendefinisikan view Blade yang akan digunakan untuk body email.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'emails.contact-form', // Menggunakan view Blade Markdown
            with: [
                // Properti publik dari mailable (name, email, messageText, isCopy) sudah otomatis tersedia di view
                // Tapi Anda bisa secara eksplisit menyediakannya di sini jika mau
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}