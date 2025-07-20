{{-- resources/views/emails/contact-form.blade.php --}}

@component('mail::message')
# Pesan Kontak Baru

Anda menerima pesan baru dari formulir kontak di website Anda.

**Nama:** {{ $name }}  
**Email:** {{ $email }}  
**Pesan:**  
{{ $messageText }}

@if($isCopy)
---
Ini adalah salinan pesan yang Anda kirimkan kepada kami.
@endif

@endcomponent
