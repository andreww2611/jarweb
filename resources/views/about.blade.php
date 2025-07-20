<x-layout>
    <section class="relative bg-gray-50 dark:bg-gray-900 py-7 flex justify-center items-center overflow-hidden">
        <div class="absolute inset-0">
            <img src="{{ asset('images/749.jpg') }}" alt="Background" class="w-full h-full object-cover object-center opacity-30 dark:opacity-20">
        </div>

        {{-- You might want to add this overlay back for a darkening effect --}}
        {{-- <div class="absolute inset-0 bg-black bg-opacity-20 dark:bg-opacity-40"></div> --}}

        <div class="relative flex justify-center items-center">
            <img class="absolute bottom-0 w-60 sm:w-80 md:w-full" src="https://cdn.rareblocks.xyz/collection/celebration/images/team/1/blob-shape.svg" alt="" />

            <div class="absolute rounded-full"
                style="
                    width: 200px;
                    height: 200px;
                    background: radial-gradient(circle, rgba(255, 255, 255, 0.4) 0%, transparent 70%);
                    filter: blur(80px);
                    top: 50%;
                    transform: translateY(-50%);
                    z-index: 1;
                ">
            </div>

            <img class="relative z-10 w-40 sm:w-56 md:w-64 rounded-full shadow-lg border-4 border-white dark:border-gray-800" src="{{ asset('images/trans.png') }}" alt="Foto Profile" />
        </div>
    </section>

    <section class="bg-white dark:bg-gray-900 py-10">
        <div class="container mx-auto px-4 max-w-3xl">
            <h2 class="text-3xl font-bold text-black dark:text-white mb-4">Hey 👋 I am Fajar Nur Farrijal</h2>

            <p class="text-base text-gray-700 dark:text-gray-300 mb-4">
                Perkenalkan saya Fajar Nur Farrijal, mahasiswa Teknik Informatika di Horizon University Indonesia Karawang. Lahir di Bandung, 26 April 2001. Umur 24 tahun dan saat ini tinggal di Kota Karawang serta berkewarganegaraan Indonesia.
            </p>

            <p class="text-base text-gray-700 dark:text-gray-300 mb-4">
                Saat ini saya sedang menempuh pendidikan di Horizon University Indonesia Karawang semester 5.
            </p>

            <h4 class="text-lg font-semibold text-gray-800 dark:text-gray-200 mt-6 mb-2">Kemampuan Saya Saat Ini:</h4>
            <ul class="list-disc ml-5 text-base text-gray-700 dark:text-gray-300 space-y-1">
                <li>Microsoft Office</li>
                <li>Maintenance Komputer & Printer</li>
                <li>Jaringan Komputer</li>
                <li>Design Grafis (Adobe Illustrator, PSD, Corel Draw)</li>
                <li>Design UI/UX (Figma)</li>
                <li>Pemrograman Web PHP</li>
                <li>Pemrograman Mobile Dart, Flutter</li>
            </ul>

            <h4 class="text-lg font-semibold text-gray-800 dark:text-gray-200 mt-6 mb-2">Ini adalah CV saya:</h4>
            <div class="mt-4 flex flex-col items-center"> {{-- Changed to flex-col and items-center --}}
                <a href="{{ Storage::url('CV_Fajar Nur Farrijal_fixed.pdf') }}" target="_blank"
                   class="relative inline-block group mb-4" {{-- Added mb-4 for margin-bottom --}}
                   id="cv-preview-link">
                    <img src="{{ Storage::url('fajarcv.png') }}" alt="Foto CV" class="rounded-lg shadow-lg max-w-xs border border-gray-300">
                    <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-lg">
                        <span class="text-white text-lg font-semibold">Preview</span>
                    </div>
                </a>

                {{-- Download CV Button --}}
                <a href="{{ Storage::url('CV_Fajar Nur Farrijal_fixed.pdf') }}" download="CV_Fajar_Nur_Farrijal.pdf"
                   class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg shadow-md transition-colors duration-300
                          focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                    Download CV
                </a>
            </div>
        </div>
    </section>
</x-layout>