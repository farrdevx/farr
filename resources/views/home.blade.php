<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/output.css') }}">
    <title>FarrCloud</title>
</head>
<body>
    <header class="fixed top-0 left-0 right-0 z-50
                   w-full py-4 px-6 md:px-10
                   bg-white/20 backdrop-blur-md backdrop-saturate-150
                   border-b border-white/30
                   flex items-center justify-between
                   shadow-lg
                   bg-gradient-to-r from-blue-500/30 via-purple-500/30 to-white/30">

        <div class="flex items-center">
            <a href="#" class="text-white text-2xl font-bold tracking-wide">FarrCloud</a>
        </div>

        <nav class="hidden md:flex space-x-6">
            <a href="#" class="text-white hover:text-gray-200 transition-colors duration-200">Beranda</a>
            <a href="#tentang-kami" class="text-white hover:text-gray-200 transition-colors duration-200">Tentang Kami</a>
            <a href="#layanan" class="text-white hover:text-gray-200 transition-colors duration-200">Layanan</a>
            <a href="#faq" class="text-white hover:text-gray-200 transition-colors duration-200">FAQ</a>
            <a href="#testimoni" class="text-white hover:text-gray-200 transition-colors duration-200">Testimoni</a>
	    <a href="{{ url('manage') }}" class="text-white hover:text-gray-200 transition-colors duration-200">Console Panel</a>
	</nav>

        <button id="mobile-menu-button" class="md:hidden text-white focus:outline-none"
                aria-controls="mobile-menu" aria-expanded="false">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>
    </header>

    <div id="mobile-menu" class="fixed top-16 left-0 w-full
                                  bg-white/20 backdrop-blur-md backdrop-saturate-150
                                  border-b border-white/30
                                  z-30
                                  transform -translate-y-full transition-transform duration-300 ease-in-out
                                  md:hidden flex flex-col py-2 shadow-lg">
                                  <a href="#" class="block text-white text-lg py-2 px-6 hover:text-gray-200 transition-colors duration-200">Beranda</a>
                                  <a href="#tentang-kami" class="block text-white text-lg py-2 px-6 hover:text-gray-200 transition-colors duration-200">Tentang Kami</a>
                                  <a href="#layanan" class="block text-white text-lg py-2 px-6 hover:text-gray-200 transition-colors duration-200">Layanan</a>
                                  <a href="#faq" class="block text-white text-lg py-2 px-6 hover:text-gray-200 transition-colors duration-200">FAQ</a>
                                  <a href="#testimoni" class="block text-white text-lg py-2 px-6 hover:text-gray-200 transition-colors duration-200">Testimoni</a>
    </div>

    <main class="w-full flex-grow">
        <section class="relative h-[500px] md:h-[600px] flex items-center justify-center text-center px-4 overflow-hidden"
        style="background-image: url('{{ asset('img/erasebg-transformed.png')}}');
               background-repeat: no-repeat;
               background-size: cover;
               background-position: center;">

            <div class="absolute inset-0 bg-black opacity-40"></div>

            <div class="relative z-10 text-white max-w-3xl mx-auto">
                <h1 class="text-4xl md:text-6xl font-extrabold leading-tight mb-4 drop-shadow-md">
                    <span id="typed-text"></span><span class="typing-cursor">|</span>
                </h1>
                <p class="text-lg md:text-xl mb-8 drop-shadow-sm">
                    Kami hadir untuk mengubah ide Anda menjadi kenyataan digital yang powerful dan berdampak.
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="#" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-full
                                        transition-colors duration-300 shadow-lg transform hover:scale-105">
                        Mulai Sekarang
                </a>
                </div>
            </div>
        </section>

        <section id="tentang-kami" class="py-16 px-4 bg-gray-900 text-white">
            <div class="max-w-6xl mx-auto text-center">
                <h2 class="text-3xl font-bold mb-4">Tentang Kami</h2>
                <p class="text-lg max-w-3xl mx-auto mb-12">
                    Mengenal lebih dekat dengan FarrCloud dan komitmen kami dalam dunia teknologi.
                </p>
                <div class="grid md:grid-cols-2 gap-8">
                    <div class="glass-card flex flex-col items-center p-6">
                        <svg class="w-16 h-16 mb-4 text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                        <h3 class="text-2xl font-semibold mb-2">Visi Kami</h3>
                        <p class="text-md opacity-90">
                            Menjadi mitra teknologi terdepan yang memberdayakan bisnis di seluruh dunia melalui inovasi digital yang berkelanjutan dan solusi yang transformatif.
                        </p>
                    </div>
                    <div class="glass-card flex flex-col items-center p-6">
                        <svg class="w-16 h-16 mb-4 text-purple-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6H8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9"></path></svg>
                        <h3 class="text-2xl font-semibold mb-2">Misi Kami</h3>
                        <p class="text-md opacity-90">
                            Memberikan solusi teknologi berkualitas tinggi yang disesuaikan dengan kebutuhan klien, membangun hubungan jangka panjang berdasarkan kepercayaan dan keunggulan, serta mendorong pertumbuhan bersama melalui keahlian dan dedikasi tim kami.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section id="layanan" class="py-16 px-4 text-center bg-gray-900 text-white">
            <h2 class="text-3xl font-bold mb-4">Layanan Kami</h2>
            <p class="text-lg max-w-2xl mx-auto">
                Kami menyediakan berbagai layanan pengembangan web dan aplikasi yang inovatif, didukung oleh tim ahli kami.
            </p>

            <div class="mt-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">

                <div class="glass-card flex flex-col items-center p-6">
                    <svg class="w-16 h-16 mb-4 text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                    </svg>
                    <h3 class="text-2xl font-semibold mb-2">Pengembangan Web</h3>
                    <p class="text-md opacity-90">Membangun situs web modern, responsif, dan performa tinggi untuk bisnis Anda.</p>
                </div>

                <div class="glass-card flex flex-col items-center p-6">
                    <svg class="w-16 h-16 mb-4 text-purple-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                    </svg>
                    <h3 class="text-2xl font-semibold mb-2">Aplikasi Mobile</h3>
                    <p class="text-md opacity-90">Menciptakan aplikasi iOS & Android yang inovatif dan mudah digunakan.</p>
                </div>

                <div class="glass-card flex flex-col items-center p-6">
                    <svg class="w-16 h-16 mb-4 text-green-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 10.333v4.334m-6.406-5.836l-1.334 1.334a.806.806 0 000 1.14l9.467 9.467a.806.806 0 001.14 0l1.334-1.334a.806.806 0 000-1.14L9.663 17z"></path>
                    </svg>
                    <h3 class="text-2xl font-semibold mb-2">Desain UI/UX</h3>
                    <p class="text-md opacity-90">Merancang pengalaman pengguna yang intuitif dan antarmuka yang menarik.</p>
                </div>

                <div class="glass-card flex flex-col items-center p-6">
                    <svg class="w-16 h-16 mb-4 text-yellow-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 005-5V7a2 2 0 00-2-2h-2.5a2 2 0 01-1.6-.8l-.8-1.2A2 2 0 0011.5 2H9.5a2 2 0 00-1.6.8l-.8 1.2a2 2 0 01-1.6.8H3a2 2 0 00-2 2v8z"></path>
                    </svg>
                    <h3 class="text-2xl font-semibold mb-2">Cloud Solutions</h3>
                    <p class="text-md opacity-90">Implementasi dan pengelolaan infrastruktur cloud yang skalabel dan aman.</p>
                </div>

                <div class="glass-card flex flex-col items-center p-6">
                    <svg class="w-16 h-16 mb-4 text-red-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                    </svg>
                    <h3 class="text-2xl font-semibold mb-2">Konsultasi IT</h3>
                    <p class="text-md opacity-90">Memberikan saran ahli untuk strategi teknologi dan digitalisasi bisnis Anda.</p>
                </div>

                <div class="glass-card flex flex-col items-center p-6">
                    <svg class="w-16 h-16 mb-4 text-orange-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                    </svg>
                    <h3 class="text-2xl font-semibold mb-2">Keamanan Siber</h3>
                    <p class="text-md opacity-90">Melindungi aset digital Anda dari ancaman siber yang terus berkembang.</p>
                </div>

            </div>
        </section>



        <section id="faq" class="py-16 px-4 bg-gray-900 text-white">
            <h2 class="text-3xl font-bold text-center mb-12">Pertanyaan Umum (FAQ)</h2>
            <div class="max-w-3xl mx-auto">

                <div class="accordion-item">
                    <div class="accordion-header">
                        <span>Apa saja layanan utama yang ditawarkan FarrCloud?</span>
                        <svg class="w-6 h-6 accordion-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </div>
                    <div class="accordion-content">
                        <p>FarrCloud menawarkan berbagai layanan termasuk pengembangan web (frontend & backend), pengembangan aplikasi mobile (iOS & Android), desain UI/UX, solusi cloud, konsultasi IT, dan keamanan siber.</p>
                    </div>
                </div>

                <div class="accordion-item">
                    <div class="accordion-header">
                        <span>Bagaimana proses kerja FarrCloud dari awal hingga akhir proyek?</span>
                        <svg class="w-6 h-6 accordion-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </div>
                    <div class="accordion-content">
                        <p>Proses kami dimulai dengan konsultasi awal untuk memahami kebutuhan Anda, dilanjutkan dengan perencanaan detail, desain, pengembangan, pengujian, deployment, dan dukungan pasca-peluncuran. Kami memastikan komunikasi yang transparan di setiap tahap.</p>
                    </div>
                </div>

                <div class="accordion-item">
                    <div class="accordion-header">
                        <span>Apakah FarrCloud melayani klien dari berbagai skala bisnis?</span>
                        <svg class="w-6 h-6 accordion-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </div>
                    <div class="accordion-content">
                        <p>Ya, FarrCloud bangga melayani berbagai klien, mulai dari startup inovatif hingga perusahaan skala besar. Kami menyesuaikan solusi kami untuk memenuhi kebutuhan dan anggaran unik setiap bisnis.</p>
                    </div>
                </div>

                <div class="accordion-item">
                    <div class="accordion-header">
                        <span>Bagaimana cara mendapatkan penawaran atau konsultasi gratis?</span>
                        <svg class="w-6 h-6 accordion-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </div>
                    <div class="accordion-content">
                        <p>Anda bisa menghubungi kami melalui halaman 'Kontak' kami, mengirim email ke support@farrcloud.store, atau mengisi formulir permintaan konsultasi gratis di website kami. Tim kami akan segera merespons.</p>
                    </div>
                </div>

            </div>
        </section>

        <section id="testimoni" class="py-16 px-4 bg-gray-900 text-white">
            <div class="max-w-6xl mx-auto text-center">
                <h2 class="text-3xl font-bold mb-4">Apa Kata Klien Kami</h2>
                <p class="text-lg max-w-3xl mx-auto mb-12">
                    Kami bangga telah membantu banyak klien mencapai tujuan mereka. Berikut adalah beberapa testimoni dari mereka.
                </p>
                <div class="grid md:grid-cols-1 lg:grid-cols-3 gap-8 text-left">

                    <div class="glass-card p-8 flex flex-col h-full">
                        <p class="text-md opacity-90 mb-6 flex-grow">"Kerja sama dengan FarrCloud sangat luar biasa. Mereka tidak hanya mengerti visi kami, tetapi juga memberikan solusi yang melebihi ekspektasi. Sangat direkomendasikan!"</p>
                        <div class="flex items-center mt-auto">
                            <img class="w-12 h-12 rounded-full mr-4 object-cover" src="https://i.pravatar.cc/150?u=andi" alt="Avatar Andi Pratama">
                            <div>
                                <p class="font-bold">Andi Pratama</p>
                                <p class="text-sm opacity-70">CEO, Startup Maju</p>
                            </div>
                        </div>
                    </div>

                    <div class="glass-card p-8 flex flex-col h-full">
                        <p class="text-md opacity-90 mb-6 flex-grow">"Tim FarrCloud sangat profesional dan responsif. Aplikasi mobile yang mereka kembangkan untuk kami mendapatkan feedback positif dari pengguna. Terima kasih!"</p>
                        <div class="flex items-center mt-auto">
                            <img class="w-12 h-12 rounded-full mr-4 object-cover" src="https://i.pravatar.cc/150?u=siti" alt="Avatar Siti Lestari">
                            <div>
                                <p class="font-bold">Siti Lestari</p>
                                <p class="text-sm opacity-70">Product Manager, Inovasi Digital</p>
                            </div>
                        </div>
                    </div>

                    <div class="glass-card p-8 flex flex-col h-full">
                        <p class="text-md opacity-90 mb-6 flex-grow">"Solusi cloud yang diberikan sangat andal dan skalabel. Tim support mereka juga selalu siap membantu kapan pun kami butuhkan. Layanan yang memuaskan."</p>
                        <div class="flex items-center mt-auto">
                            <img class="w-12 h-12 rounded-full mr-4 object-cover" src="https://i.pravatar.cc/150?u=budi" alt="Avatar Budi Santoso">
                            <div>
                                <p class="font-bold">Budi Santoso</p>
                                <p class="text-sm opacity-70">IT Director, Korporat Sejahtera</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="py-16 px-4 text-center bg-gray-900 text-white">
            <h4 class="text-3xl font-bold mb-4">HOW TO ORDER</h4>
            <hr>
            <p style="margin-top: 10px" class="text-lg max-w-2xl mx-auto">Silahkan chat kami lewat nomor wa atau email yang tersedia di bawah ini</p>
            <div class="order-link" style="align-items: center; display: flex;">
            <div style="width:50%; margin-top: 10px; margin: 15px 15px 15px 0" class="glass-card flex flex-col items-center p-6">
                <a href="">WhatsApp</a>
            </div>
            <div style="width:50%; margin-top: 10px; margin-top: 10px; margin: 15px 15px 15px 0" class="glass-card flex flex-col items-center p-6">
                <a href="">Email</a>
            </div>
            </div>
        </section>
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Mobile menu functionality
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');

            function openMobileMenu() {
                mobileMenu.classList.remove('-translate-y-full');
                mobileMenu.classList.add('translate-y-0');
                mobileMenuButton.setAttribute('aria-expanded', 'true');
            }

            function closeMobileMenu() {
                mobileMenu.classList.remove('translate-y-0');
                mobileMenu.classList.add('-translate-y-full');
                mobileMenuButton.setAttribute('aria-expanded', 'false');
            }

            mobileMenuButton.addEventListener('click', function(event) {
                event.stopPropagation();
                if (mobileMenu.classList.contains('-translate-y-full')) {
                    openMobileMenu();
                } else {
                    closeMobileMenu();
                }
            });

            const mobileMenuItems = mobileMenu.querySelectorAll('a');
            mobileMenuItems.forEach(item => {
                item.addEventListener('click', function() {
                    closeMobileMenu();
                });
            });

            document.addEventListener('click', function(event) {
                const isClickInsideMenu = mobileMenu.contains(event.target);
                const isClickOnButton = mobileMenuButton.contains(event.target);

                if (!isClickInsideMenu && !isClickOnButton && !mobileMenu.classList.contains('-translate-y-full')) {
                    closeMobileMenu();
                }
            });

            // Typing animation functionality
            const typedTextSpan = document.getElementById('typed-text');
            const textToType = "Inovasi Tanpa Batas, Solusi Terdepan";
            let charIndex = 0;
            const typingSpeed = 100; // milliseconds per character

            function typeWriter() {
                if (charIndex < textToType.length) {
                    typedTextSpan.textContent += textToType.charAt(charIndex);
                    charIndex++;
                    setTimeout(typeWriter, typingSpeed);
                } else {
                    // Optionally, you can make the cursor disappear after typing is complete
                    // Or keep it blinking
                    // document.querySelector('.typing-cursor').style.display = 'none';
                }
            }

            // Start the typing animation when the page loads
            typeWriter();


            // Accordion functionality
            const accordionHeaders = document.querySelectorAll('.accordion-header');

            accordionHeaders.forEach(header => {
                header.addEventListener('click', () => {
                    const accordionItem = header.closest('.accordion-item');
                    const accordionContent = accordionItem.querySelector('.accordion-content');

                    // Toggle active class on the item
                    accordionItem.classList.toggle('active');

                    // Adjust max-height for smooth transition
                    if (accordionItem.classList.contains('active')) {
                        // Set max-height to scrollHeight to allow smooth opening
                        accordionContent.style.maxHeight = accordionContent.scrollHeight + "px";
                    } else {
                        // Set max-height back to 0 for smooth closing
                        accordionContent.style.maxHeight = "0";
                    }
                });
            });
        });
    </script>
</body>
</html>
