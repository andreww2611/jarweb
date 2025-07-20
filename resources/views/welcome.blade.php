<x-layout>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        
        /* ... (CSS lainnya tidak berubah) ... */

        .genre-badge {
            background: linear-gradient(45deg, #f9f9fa, #8b5cf6);
            animation: pulse 2s infinite;
        }
        
        .hero-bg {
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 50%, #334155 100%);
            position: relative;
            overflow: hidden;
        }
        
        .hero-bg::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="1" fill="%23ffffff" opacity="0.05"/><circle cx="75" cy="75" r="1" fill="%23ffffff" opacity="0.03"/><circle cx="50" cy="10" r="0.5" fill="%23ffffff" opacity="0.08"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
            pointer-events: none;
        }
        
        .floating-animation {
            animation: float 6s ease-in-out infinite;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        
        .spotlight {
            background: radial-gradient(circle at center, rgba(59, 130, 246, 0.3) 0%, transparent 70%);
            position: absolute;
            width: 400px;
            height: 400px;
            border-radius: 50%;
            pointer-events: none;
            animation: spotlight 8s linear infinite;
        }
        
        @keyframes spotlight {
            0% { transform: translate(-50%, -50%) rotate(0deg); }
            100% { transform: translate(-50%, -50%) rotate(360deg); }
        }
        
        .film-strip {
            background: repeating-linear-gradient(
                90deg,
                #374151 0px,
                #374151 20px,
                #1f2937 20px,
                #1f2937 40px
            );
            height: 8px;
        }
        
        .glow-text {
            text-shadow: 0 0 20px rgba(59, 130, 246, 0.5);
            /* Pastikan warna teks default untuk glow-text juga putih jika ada konflik */
            color: white; /* Tambahkan ini jika class Tailwind tidak cukup kuat */
        }
        
        .rating-stars {
            background: linear-gradient(45deg, #fbbf24, #f59e0b);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
    </style>

    <section id="home" class="hero-bg min-h-screen flex items-center justify-center relative">
        <div class="spotlight top-1/4 left-1/4"></div>
        <div class="spotlight top-3/4 right-1/4" style="animation-delay: -4s;"></div>
        
        <div class="text-center z-10 max-w-4xl mx-auto px-6">
            <h1 class="text-7xl font-bold mb-6 glow-text floating-animation **text-white**">
                HIDUP JOKOWIII!!            </h1>
            <p class="text-xl text-gray-300 mb-8 max-w-2xl mx-auto">
                {{---Ini adalah portfolio Fajar Nur Farrijal---}}
            </p>
           <div class="flex flex-wrap justify-center gap-4">
    <a
        class="bg-gradient-to-r from-blue-600 to-purple-600 px-8 py-4 rounded-full font-semibold hover:scale-105 transform transition-all duration-300 shadow-lg hover:shadow-blue-500/25 text-white text-center"
        href="/about" role="button" >
        Get Started
    </a>

</div>
        </div>
        

    </section>

    </x-layout>