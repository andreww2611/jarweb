
    <x-layout>
    <div class="flex min-h-screen w-full flex-wrap items-stretch bg-white dark:bg-gray-800 max-md:pb-20 max-md:pt-32">
        <div class="grow md:flex md:w-1/2 md:flex-col md:items-center md:justify-center md:py-20">
            <div class="w-full px-4 text-center text-xs lg:w-1/2">
                <h1 class="mb-8 text-2xl font-bold text-gray-800 dark:text-white">Create Your Account</h1> {{-- Judul untuk Register --}}
                <p class="mb-6 text-gray-600 dark:text-gray-400">Join us to unlock amazing features and services.</p>
                <form class="flex flex-col gap-6" novalidate="novalidate" onsubmit="return RegisterForm();"> {{-- Ubah fungsi submit --}}
                    {{-- <input id="plan" type="hidden" value="" name="plan"> Ini biasanya tidak diperlukan untuk register dasar --}}

                    <div class="relative">
                        <label class="flex cursor-pointer items-center gap-2 text-xs font-medium leading-none text-gray-700 dark:text-gray-200 mb-3" for="name">
                            <span class="">Full Name</span> {{-- Input Nama --}}
                        </label>
                        <input id="name" class="block peer w-full px-4 py-3 border border-gray-300 bg-gray-100 text-gray-800 placeholder-gray-500 dark:bg-gray-700 dark:text-white dark:border-gray-600 placeholder-gray-400 transition-colors focus:border-indigo-500 focus:outline-0 focus:ring focus:ring-indigo-200 dark:focus:ring-indigo-500" name="name" value="" type="text" placeholder="Your Full Name">
                    </div>

                    <div class="relative">
                        <label class="flex cursor-pointer items-center gap-2 text-xs font-medium leading-none text-gray-700 dark:text-gray-200 mb-3" for="email">
                            <span class="">Email Address</span>
                        </label>
                        <input id="email" class="block peer w-full px-4 py-3 border border-gray-300 bg-gray-100 text-gray-800 placeholder-gray-500 dark:bg-gray-700 dark:text-white dark:border-gray-600 placeholder-gray-400 transition-colors focus:border-indigo-500 focus:outline-0 focus:ring focus:ring-indigo-200 dark:focus:ring-indigo-500" name="email" value="" type="email" placeholder="you@example.com">
                    </div>

                    <div class="relative">
                        <label class="flex cursor-pointer items-center gap-2 text-xs font-medium leading-none text-gray-700 dark:text-gray-200 mb-3" for="password">
                            <span class="">Password</span>
                        </label>
                        <div class="relative">
                            <input id="password" class="block peer w-full px-4 py-3 border border-gray-300 bg-gray-100 text-gray-800 placeholder-gray-500 dark:bg-gray-700 dark:text-white dark:border-gray-600 placeholder-gray-400 transition-colors focus:border-indigo-500 focus:outline-0 focus:ring focus:ring-indigo-200 dark:focus:ring-indigo-500" name="password" value="" type="password" placeholder="Choose a password">
                            {{-- Button show/hide password (tanpa Alpine.js) --}}
                            {{-- Jika Anda menggunakan Alpine.js, pertahankan :type="type" dan @click="toggleType()" --}}
                            <button class="lqd-show-password absolute right-3 top-1/2 z-10 inline-flex -translate-y-1/2 cursor-pointer items-center justify-center rounded transition-colors hover:bg-gray-200 dark:hover:bg-gray-600" type="button">
                                <svg stroke-width="1.5" class="w-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"></path>
                                    <path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6"></path>
                                </svg>
                                {{-- Jika Anda ingin icon toggle, Anda perlu JS untuk menukar class hidden/block --}}
                                {{-- <svg stroke-width="1.5" class="hidden w-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M10.585 10.587a2 2 0 0 0 2.829 2.828"></path>
                                    <path d="M16.681 16.673a8.717 8.717 0 0 1 -4.681 1.327c-3.6 0 -6.6 -2 -9 -6c1.272 -2.12 2.712 -3.678 4.32 -4.674m2.86 -1.146a9.055 9.055 0 0 1 1.82 -.18c3.6 0 6.6 2 9 6c-.666 1.11 -1.379 2.067 -2.138 2.87"></path>
                                    <path d="M3 3l18 18"></path>
                                </svg> --}}
                            </button>
                        </div>
                    </div>

                    <div class="relative">
                        <label class="flex cursor-pointer items-center gap-2 text-xs font-medium leading-none text-gray-700 dark:text-gray-200 mb-3" for="password_confirmation">
                            <span class="">Confirm Password</span> {{-- Input Konfirmasi Password --}}
                        </label>
                        <input id="password_confirmation" class="block peer w-full px-4 py-3 border border-gray-300 bg-gray-100 text-gray-800 placeholder-gray-500 dark:bg-gray-700 dark:text-white dark:border-gray-600 placeholder-gray-400 transition-colors focus:border-indigo-500 focus:outline-0 focus:ring focus:ring-indigo-200 dark:focus:ring-indigo-500" name="password_confirmation" value="" type="password" placeholder="Confirm your password">
                    </div>

                    <div class="my-2 flex justify-end"> {{-- Biasanya tidak ada remember me atau forgot password di halaman register --}}
                        {{-- <div class="grow">
                            <div class="relative">
                                <label class="flex cursor-pointer items-center gap-2 text-xs font-medium leading-none text-gray-700 dark:text-gray-200" for="remember">
                                    <input id="remember" class="peer rounded border-gray-300 dark:border-gray-600 focus:ring focus:ring-indigo-200 dark:focus:ring-indigo-500" name="remember" type="checkbox">
                                    <span class="">Remember me</span>
                                </label>
                            </div>
                        </div> --}}
                        {{-- <div class="text-right">
                            <a class="text-indigo-600 dark:text-indigo-400" href="/forgot-password">Forgot Password?</a>
                        </div> --}}
                    </div>

                    {{-- <input class="hidden" id="recaptcha" value="0"> Ini opsional, tergantung kebutuhan --}}
                    <button class="lqd-btn group inline-flex items-center justify-center gap-1.5 font-medium rounded-full transition-all hover:-translate-y-0.5 hover:shadow-xl lqd-btn-primary bg-indigo-600 text-white hover:bg-indigo-500 focus-visible:bg-indigo-700 focus-visible:shadow-indigo-300/10 px-5 py-3" id="RegisterFormButton" type="submit"> {{-- Ubah ID dan teks tombol --}}
                        Sign up
                    </button>
                    <div class="text-gray-600 dark:text-gray-400">
                        By proceeding, you acknowledge and accept our
                        <a class="font-medium text-indigo-600 underline" href="/terms" target="_blank">Terms and
                            Conditions</a>
                        and
                        <a class="font-medium text-indigo-600 underline" href="/privacy-policy" target="_blank">Privacy
                            Policy</a>.
                    </div>
                </form>
                <div class="mt-20 text-gray-600 dark:text-gray-400">
                    Already have an account?
                    <a class="font-medium text-indigo-600 underline" href="/login">Sign in</a> {{-- Link ke halaman Login --}}
                </div>
            </div>
        </div>

        <div class="hidden flex-col justify-center overflow-hidden bg-cover bg-center md:flex md:w-1/2"
            style="background-image: url(https://img.freepik.com/free-vector/gray-neural-network-illustration_53876-78764.jpg?size=626&ext=jpg)">
            <img class="translate-x-[27%] rounded-[36px] shadow-[0_24px_88px_rgba(0,0,0,0.55)]" src="https://images.unsplash.com/photo-1566241477600-ac026ad43874?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwyfHxzY3JlZW5zaG90fGVufDB8MHx8fDE3Mjk1MTI1OTB8MA&ixlib=rb-4.0.3&q=80&w=1080" alt="Service Dashboard Mockup">
        </div>
    </div>
</x-layout>

    
