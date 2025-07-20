<x-layout>
    <section class="mb-32">
        <div id="map" class="relative h-[480px] overflow-hidden bg-cover bg-[50%] bg-no-repeat">
            {{-- GANTI DENGAN URL MAP ANDA YANG VALID. URL SAAT INI TIDAK AKAN BEKERJA --}}
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.5050857317765!2d107.2917737!3d-6.1965849!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e693f9c5d0e74f1%3A0x7d2f9b8c0a2b5e2!2sWest%20Karawang%2C%20Karawang%20Regency%2C%20West%20Java!5e0!3m2!1sen!2sid!4v1700000000000!5m2!1sen!2sid"
                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
        <div class="container mx-auto px-6 md:px-12">
            <div
                class="block rounded-lg bg-white/80 px-6 py-12 shadow-lg -mt-[100px] border border-gray-300
                dark:bg-gray-800/80 dark:shadow-xl dark:border-gray-700
                backdrop-blur-sm">
                <div class="flex flex-wrap items-stretch justify-center lg:justify-between"> {{-- Menggunakan justify-between di lg ke atas --}}
                    {{-- Kolom Form --}}
                    <div class="mb-12 w-full shrink-0 grow-0 basis-auto md:px-3 lg:mb-0 lg:w-5/12 lg:px-6">
                        <h2 class="text-2xl font-bold mb-8 text-gray-800 dark:text-white text-center lg:text-left">Get in Touch</h2>
<form action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
                            @csrf
                            <div>
                                <label for="name" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-200">Name</label>
                                <input type="text"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md bg-gray-50 text-gray-900 placeholder-gray-500
                                    dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:placeholder-gray-400
                                    focus:border-sky-500 focus:ring focus:ring-sky-200 focus:ring-opacity-50 dark:focus:ring-sky-500"
                                    id="name" name="name" placeholder="Your Name" />
                            </div>
                            <div>
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-200">Email address</label>
                                <input type="email"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md bg-gray-50 text-gray-900 placeholder-gray-500
                                    dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:placeholder-gray-400
                                    focus:border-sky-500 focus:ring focus:ring-sky-200 focus:ring-opacity-50 dark:focus:ring-sky-500"
                                    id="email" name="email" placeholder="you@example.com" />
                            </div>
                            <div>
                                <label for="message" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-200">Message</label>
                                <textarea
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md bg-gray-50 text-gray-900 placeholder-gray-500
                                    dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:placeholder-gray-400
                                    focus:border-sky-500 focus:ring focus:ring-sky-200 focus:ring-opacity-50 dark:focus:ring-sky-500"
                                    id="message" name="message" rows="5" placeholder="Your Message"></textarea> {{-- Rows diganti jadi 5 --}}
                            </div>
                            <div class="mb-6 flex items-center justify-start">
                                <input
                                    class="h-4 w-4 text-sky-600 border-gray-300 rounded
                                    focus:ring-sky-500 dark:border-gray-600 dark:bg-gray-700 dark:checked:bg-sky-500 dark:checked:border-sky-500"
                                    type="checkbox" value="1" id="send-copy" name="send_copy" checked />
                                <label class="ml-2 text-sm text-gray-700 dark:text-gray-300 cursor-pointer" for="send-copy">
                                    Send me a copy of this message
                                </label>
                            </div>
                            <button type="submit"
                                class="w-full rounded bg-sky-500 text-white px-6 py-3 text-sm font-medium uppercase leading-normal hover:bg-sky-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sky-500
                                dark:bg-sky-600 dark:hover:bg-sky-500">
                                Send Message
                            </button>
                        </form>
                    </div>
                    {{-- Kolom Informasi Kontak --}}
                    <div class="w-full shrink-0 grow-0 basis-auto lg:w-6/12"> {{-- Kolom info kontak akan lebih lebar di lg --}}
                        <div class="flex flex-wrap"> {{-- Mengatur ulang flex wrap untuk item info --}}

                            <div class="mb-12 w-full shrink-0 grow-0 basis-auto md:w-6/12 md:px-3 lg:px-6">
                                <div class="flex items-start">
                                    <div class="shrink-0">
                                        <div class="inline-block rounded-md bg-sky-200 p-4 text-sky-700 dark:bg-sky-700 dark:text-sky-200">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                                stroke="currentColor" class="h-6 w-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M14.25 9.75v-4.5m0 4.5h4.5m-4.5 0l6-6m-3 18c-8.284 0-15-6.716-15-15V4.5A2.25 2.25 0 014.5 2.25h1.372c.516 0 .966.351 1.091.852l1.106 4.423c.11.44-.054.902-.417 1.173l-1.293.97a1.062 1.062 0 00-.38 1.21 12.035 12.035 0 007.143 7.143c.441.162.928-.004 1.21-.38l.97-1.293a1.125 1.125 0 011.173-.417l4.423 1.106c.5.125.852.575.852 1.091V19.5a2.25 2.25 0 01-2.25 2.25h-2.25z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="ml-6 grow">
                                        <p class="mb-2 font-bold text-gray-900 dark:text-white">
                                            Technical support
                                        </p>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            fajarnf77@gmail.com
                                        </p>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            0895806317711
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-12 w-full shrink-0 grow-0 basis-auto md:w-6/12 md:px-3 lg:px-6">
                                <div class="flex items-start">
                                    <div class="shrink-0">
                                        <div class="inline-block rounded-md bg-sky-200 p-4 text-sky-700 dark:bg-sky-700 dark:text-sky-200">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                                stroke="currentColor" class="w-7 h-7">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M15 9h3.75M15 12h3.75M15 15h3.75M4.5 19.5h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5zm6-10.125a1.875 1.875 0 11-3.75 0 1.875 1.875 0 013.75 0zm1.294 6.336a6.721 6.721 0 01-3.17.789 6.721 6.721 0 01-3.168-.789 3.376 3.376 0 016.338 0z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="ml-6 grow">
                                        <p class="mb-2 font-bold text-gray-900 dark:text-white">
                                            Address
                                        </p>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">
                                            Karawang, <br>
                                            Jawa Barat <br>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="mb-12 w-full shrink-0 grow-0 basis-auto md:mb-0 md:w-6/12 md:px-3 lg:px-6"> {{-- Hapus xl:mb-12 xl:w-6/12 --}}
                                <div class="align-start flex">
                                    <div class="shrink-0">
                                       
                    </svg>
                  </div>
                </div>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</x-layout>
