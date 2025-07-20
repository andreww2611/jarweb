<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    {{-- Pastikan app.js di-load --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
{{-- Tambahkan kelas 'dark' di sini untuk mengaktifkan dark mode secara manual (untuk testing) --}}
{{-- Nanti Anda bisa menghapusnya dan menggunakan JavaScript untuk toggle --}}
<body class="bg-gray-100 dark:bg-gray-800"> {{-- Tambahkan dark mode untuk body juga --}}

<header class="bg-white dark:bg-gray-900"> {{-- Ini yang Anda inginkan --}}
  <div class="mx-auto flex h-16 max-w-screen-xl items-center gap-8 px-4 sm:px-6 lg:px-8">
    <a class="block text-teal-600 dark:text-teal-300" href="/"> {{-- Warna logo di dark mode --}}
        <span class="sr-only">Home</span>
        <img src="{{ asset('images/fontlogo.png') }}" alt="Your Company Logo" class="h-15">
    </a>

    <div class="flex flex-1 items-center justify-end md:justify-between">
      <nav aria-label="Global" class="hidden md:block">
            <ul class="flex items-center gap-6 text-xl">
            <li>
                {{-- Sesuaikan warna text untuk x-nav-link di dark mode --}}
                <x-nav-link class="text-gray-500 transition hover:text-gray-500/75 dark:text-gray-300 dark:hover:text-white" href="/"> Home </x-nav-link>
            </li>
            <li>
                <x-nav-link class="text-gray-500 transition hover:text-gray-500/75 dark:text-gray-300 dark:hover:text-white" href="/about"> About </x-nav-link>
            </li>
            <li>
                <x-nav-link class="text-gray-500 transition hover:text-gray-500/75 dark:text-gray-300 dark:hover:text-white" href="/project"> Project </x-nav-link>
            </li>

            <li>
                <x-nav-link class="text-gray-500 transition hover:text-gray-500/75 dark:text-gray-300 dark:hover:text-white" href="/graphicdesign"> Graphic Design </x-nav-link>
            </li>
            
            <li>
                <x-nav-link class="text-gray-500 transition hover:text-gray-500/75 dark:text-gray-14 dark:hover:text-white" href="#"> UI/UX Design </x-nav-link>
            </li>
            <li>
                <x-nav-link class="text-gray-500 transition hover:text-gray-500/75 dark:text-gray-300 dark:hover:text-white" href="/contact"> Contact </x-nav-link>
            </li>
            </ul>
      </nav>

      {{-- Navigasi Mobile (Sidebar) --}}
      <div
        id="mobile-menu"
        class="
          fixed top-0 right-0 h-full w-64 bg-white shadow-xl
          transform translate-x-full transition-transform duration-300 ease-in-out
          md:hidden z-50
          dark:bg-gray-800 {{-- Background sidebar di dark mode --}}
        "
      >
        <div class="flex justify-end p-4">
          <button id="close-mobile-menu" class="text-gray-600 hover:text-gray-800 dark:text-gray-300 dark:hover:text-white"> {{-- Warna ikon tutup --}}
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
        <ul class="flex flex-col items-start gap-4 text-xl p-8">
          <li>
            <x-nav-link class="text-gray-700 hover:text-gray-900 transition dark:text-gray-300 dark:hover:text-white" href="/"> Home </x-nav-link>
          </li>
          <li>
            <x-nav-link class="text-gray-700 hover:text-gray-900 transition dark:text-gray-300 dark:hover:text-white" href="/about"> About </x-nav-link>
          </li>
          <li>
            <x-nav-link class="text-gray-700 hover:text-gray-900 transition dark:text-gray-300 dark:hover:text-white" href="/project"> Project </x-nav-link>
          </li>
           <li>
            <x-nav-link class="text-gray-700 hover:text-gray-900 transition dark:text-gray-300 dark:hover:text-white" href="/graphicdesign"> Graphic Design </x-nav-link>
          </li>

            <li>
            <x-nav-link class="text-gray-700 hover:text-gray-900 transition dark:text-gray-14 dark:hover:text-white" href="#"> UI/UX Design </x-nav-link>
          </li>
          <li>
            <x-nav-link class="text-gray-700 hover:text-gray-900 transition dark:text-gray-300 dark:hover:text-white" href="/contact"> Contact </x-nav-link>
          </li>
        </ul>

        {{-- Pindahkan tombol Login/Register ke dalam sidebar mobile --}}
        <div class="flex flex-col items-center gap-4 mt-8 p-4 w-full"> {{-- Tambahkan margin atas, padding, dan lebar penuh --}}
           <ul class="flex flex-col items-start gap-4 text-xl p-8">
           <li>
            
           {{--</li>
            <x-nav-link class="block rounded-md bg-teal-600 px-5 py-2.5 text-sm font-medium text-white transition hover:bg-teal-700 dark:bg-teal-700 dark:hover:bg-teal-600 w-full text-center"
              href="#"> Login </x-nav-link>
           </li>

           </li>
            <x-nav-link class="block rounded-md bg-teal-600 px-5 py-2.5 text-sm font-medium text-white transition hover:bg-teal-700 dark:bg-teal-700 dark:hover:bg-teal-600 w-full text-center"
              href="#"> Register </x-nav-link>
           </li>--}}
        </div>

      </div>

      <div class="flex items-center gap-4">
        <div class="sm:flex sm:gap-4 hidden md:flex"> {{-- Tambahkan 'hidden md:flex' agar tombol ini hanya muncul di desktop --}}
          {{-- </li>
            <x-nav-link class="block rounded-md bg-teal-600 px-5 py-2.5 text-sm font-medium text-white transition hover:bg-teal-700 dark:bg-teal-700 dark:hover:bg-teal-600 w-full text-center"
              href="#"> Login </x-nav-link>
           </li>

           </li>
            <x-nav-link class="block rounded-md bg-teal-600 px-5 py-2.5 text-sm font-medium text-white transition hover:bg-teal-700 dark:bg-teal-700 dark:hover:bg-teal-600 w-full text-center"
              href="#"> Register </x-nav-link>
           </li>--}}

        </div>

        <button
          id="mobile-menu-button"
          class="block rounded-sm bg-gray-100 p-2.5 text-gray-600 transition hover:text-gray-600/75 md:hidden dark:bg-gray-700 dark:text-gray-50 dark:hover:text-white/75"
        >
          <span class="sr-only">Toggle menu</span>
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="size-5"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
            stroke-width="2"
          >
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>
      </div>
    </div>
  </div>
</header>
<main>
    {{ $slot }}
</main>



<footer>
    <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 lg:px-8 text-center">
        <p class="text-sm text-gray-500 dark:text-gray-400">
            &copy; {{ date('Y') }} CyberNova. All rights reserved.
        </p>
    </div>
</footer>

{{-- === TEMPATKAN BARIS SweetAlert DI SINI === --}}
@include('sweetalert::alert')

</body>
</html>