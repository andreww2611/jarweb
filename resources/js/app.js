import './bootstrap';

// resources/js/app.js

//tombol humburger kanan ya guys
// resources/js/app.js

document.addEventListener('DOMContentLoaded', function () {
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    const closeMobileMenuButton = document.getElementById('close-mobile-menu'); // Ambil tombol tutup

    if (mobileMenuButton && mobileMenu) {
        // Fungsi untuk membuka sidebar
        mobileMenuButton.addEventListener('click', function () {
            mobileMenu.classList.remove('translate-x-full'); // Geser ke dalam layar
            mobileMenu.classList.add('translate-x-0');
        });

        // Fungsi untuk menutup sidebar
        if (closeMobileMenuButton) {
            closeMobileMenuButton.addEventListener('click', function () {
                mobileMenu.classList.remove('translate-x-0'); // Geser ke luar layar
                mobileMenu.classList.add('translate-x-full');
            });
        }

        // Opsional: Tutup sidebar jika mengklik di luar area sidebar (overlay)
        // Anda mungkin ingin menambahkan overlay di belakang sidebar untuk ini
        // Misalnya:
        // const overlay = document.createElement('div');
        // overlay.id = 'mobile-menu-overlay';
        // overlay.classList.add('fixed', 'inset-0', 'bg-black', 'bg-opacity-50', 'z-40', 'hidden');
        // document.body.appendChild(overlay);

        // mobileMenuButton.addEventListener('click', function() {
        //     mobileMenu.classList.remove('translate-x-full');
        //     mobileMenu.classList.add('translate-x-0');
        //     overlay.classList.remove('hidden');
        // });

        // overlay.addEventListener('click', function() {
        //     mobileMenu.classList.remove('translate-x-0');
        //     mobileMenu.classList.add('translate-x-full');
        //     overlay.classList.add('hidden');
        // });

        
    }
});