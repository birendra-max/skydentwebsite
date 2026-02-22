<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skydent | World-Class Dental Care at Affordable Prices</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <meta name="description" content="Experience premier dental treatments at Skydent. Trusted by patients from the USA, UK, Canada, and Australia for high-quality dental implants, veneers, and smile makeovers. Combine your treatment with a memorable experience.">
    <meta name="keywords" content="skydent, dentist abroad, dental implants abroad, affordable dental care, dental tourism, veneers, smile makeover, best dentist for implants, dental clinic for international patients">
    <meta name="author" content="Skydent">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">

    <!-- Open Graph / Social Media Tags -->
    <meta property="og:title" content="Skydent | Top-Quality Dental Care for International Patients">
    <meta property="og:description" content="Join 100+ patients from the US, UK, Canada & Australia who achieved their perfect smile at Skydent. Get world-class dental work at a fraction of the cost.">
    <meta property="og:image" content="https://darkgoldenrod-rabbit-127353.hostingersite.com/images/og-international-patient.jpg">
    <meta property="og:url" content="https://darkgoldenrod-rabbit-127353.hostingersite.com/">
    <meta property="og:type" content="website">

    <!-- Twitter Card Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Skydent | Dental Care for International Patients">
    <meta name="twitter:description" content="Affordable, high-quality dental implants, veneers, and cosmetic dentistry. Trusted by patients from across the globe.">
    <meta name="twitter:image" content="https://darkgoldenrod-rabbit-127353.hostingersite.com/images/twitter-global-smiles.jpg">

    <!-- Swiper JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


    <!-- Jquery -->
    <script src="js/Jquery.js"></script>

    <style>
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Poppins', sans-serif;
            /* For headings */
        }

        body {
            font-family: 'Poppins', sans-serif;
        }

        .dental-slider-container {
            position: relative;
            border-radius: 1rem;
            overflow: hidden;
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        .swiper-slide {
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 1rem;
            overflow: hidden;
            transition: transform 0.3s ease;
        }

        .swiper-slide:hover {
            transform: scale(1.02);
        }

        .swiper-button-next,
        .swiper-button-prev {
            width: 48px;
            height: 48px;
            color: #2563eb;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 50%;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .swiper-button-next:after,
        .swiper-button-prev:after {
            font-size: 20px;
            font-weight: bold;
        }

        .swiper-button-next:hover,
        .swiper-button-prev:hover {
            background: white;
            transform: scale(1.1);
        }

        .swiper-pagination-bullet {
            width: 12px;
            height: 12px;
            background: rgba(255, 255, 255, 0.8);
            opacity: 0.7;
            transition: all 0.3s ease;
        }

        .swiper-pagination-bullet-active {
            background: #2563eb;
            opacity: 1;
            transform: scale(1.2);
        }

        @media (max-width: 768px) {

            .swiper-button-next,
            .swiper-button-prev {
                display: none;
            }
        }
    </style>

</head>

<body class="flex-grow bg-gradient-to-r from-gray-100 via-sky-200 to-sky-300 hover:from-sky-300 hover:via-sky-200 hover:to-gray-100">

    <!-- Chat Modal -->
    <div id="chatModal"
        class="fixed inset-0 bg-black/50 backdrop-blur-sm hidden flex 
           items-center justify-center 
           lg:items-end lg:justify-end 
           z-50">

        <div class="bg-white w-[95%] max-w-md 
                lg:mr-6 lg:mb-44
                rounded-2xl shadow-2xl overflow-hidden animate-fadeIn">

            <div class="bg-gradient-to-r from-yellow-400 to-amber-500 p-4 flex justify-between items-center">
                <h2 class="font-semibold text-black">Live Chat</h2>
                <button id="closeChat" class="text-black text-2xl font-bold">&times;</button>
            </div>

            <div class="h-80 p-4 overflow-y-auto space-y-3 bg-gray-50">
                <div class="bg-yellow-100 p-3 rounded-xl w-fit">
                    👋 Hi! How can we help you?
                </div>
            </div>

            <div class="p-3 border-t flex gap-2">
                <input type="text" placeholder="Type a message..."
                    class="flex-1 border rounded-full px-4 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-400" id="messagebox" required>
                <button onclick="sendMessage()" class="bg-yellow-400 px-4 py-2 rounded-full font-semibold hover:bg-yellow-500 transition">
                    Send
                </button>
            </div>

        </div>
    </div>

    <header class="text-white body-font bg-gray-900 border-b border-yellow-400/30 shadow-xl fixed w-full z-[999]">
        <div class="max-w-7xl mx-auto px-3 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16 md:h-20">

                <a class="flex title-font font-medium items-center group flex-shrink-0">
                    <div class="relative py-1 px-2 md:px-8">
                        <div class="absolute inset-0 rounded-tr-3xl rounded-bl-3xl rounded-br-xl rounded-tl-xl bg-blue-500 opacity-0 blur-xl transition-all duration-500 group-hover:opacity-30"></div>
                        <img src="img/skydent logo.png" alt="Skydent Logo" class="relative h-10 md:h-12 w-auto drop-shadow-lg">
                    </div>
                </a>

                <div class="flex items-center gap-2 sm:gap-4">
                    <a href="https://skydentclouds.com" class="inline-flex items-center border-2 border-yellow-400 py-1.5 px-3 md:py-2 md:px-6 focus:outline-none hover:bg-yellow-400 hover:text-black rounded-l-lg rounded-tr-lg text-white font-semibold transition-all duration-300 shadow-lg hover:shadow-yellow-400/30 text-xs sm:text-sm md:text-base">
                        <i class="fas fa-sign-in-alt mr-1 md:mr-2"></i>
                        <span class="hidden xs:inline">PORTAL LOGIN</span>
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-3 h-3 md:w-4 md:h-4 ml-1 md:ml-2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </a>

                    <button id="chatBtn"
                        class="inline-flex items-center bg-gradient-to-r from-yellow-400 to-amber-500 border-0 py-1.5 px-3 md:py-2 md:px-5 focus:outline-none hover:from-yellow-500 hover:to-amber-600 rounded-l-full rounded-tr-3xl text-black font-semibold transition-all duration-300 shadow-lg hover:shadow-yellow-400/30 group text-xs sm:text-sm md:text-base">
                        <i class="fab fa-whatsapp text-base md:text-xl mr-1 md:mr-2"></i>
                        <span class="hidden xs:inline">CHAT</span>
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-3 h-3 md:w-4 md:h-4 ml-1 md:ml-2 group-hover:translate-x-1 transition-transform" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <style>
        @media (max-width: 380px) {
            .xs\:inline {
                display: none;
            }

            .gap-2 {
                gap: 0.5rem;
            }

            .px-3 {
                padding-left: 0.6rem;
                padding-right: 0.6rem;
            }
        }

        @media (min-width: 381px) {
            .xs\:inline {
                display: inline;
            }
        }
    </style>

    <main class="py-16 overflow-hidden">

        <!-- Modal -->
        <div id="partnershipModal"
            class="fixed inset-0 z-50 hidden items-center justify-center bg-black/60 px-4 mt-20 lg:mt-0">

            <div class="relative bg-white rounded-2xl shadow-2xl w-full max-w-lg p-8">
                <button id="closeModal"
                    class="absolute top-4 right-4 text-slate-500 hover:text-slate-800 text-xl">
                    &times;
                </button>

                <h2 class="text-xl lg:text-2xl font-semibold text-slate-800 mb-4">
                    Schedule Partnership Call
                </h2>

                <p class="text-slate-600 mb-6">
                    Fill out the form and our senior team will contact you within 24 hours.
                </p>

                <span id="statuscallrequest"></span>

                <form class="space-y-4" id="requestCallForm">

                    <input type="text"
                        placeholder="Full Name"
                        class="w-full border border-slate-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-amber-400" name="full_name" id="full_name" required>

                    <input type="text"
                        placeholder="Phone No"
                        class="w-full border border-slate-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-amber-400" name="phone" id="phone" required>

                    <textarea
                        placeholder="Your Message"
                        rows="4"
                        class="w-full border border-slate-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-amber-400" name="message" id="message"></textarea>

                    <button id="requestCall" type="button"
                        class="w-full bg-amber-500 hover:bg-amber-600 text-black font-semibold py-3 rounded-lg transition">
                        Request Call
                    </button>
                    <div class="w-full flex justify-center items-center">
                        <?php include('spinner.php'); ?>
                    </div>
                </form>
            </div>
        </div>

        <section class="relative overflow-hidden min-h-[720px] flex items-center text-white">
            <div class="absolute inset-0 -z-10">
                <div id="slide1" class="absolute inset-0 transition-opacity duration-1000 opacity-100">
                    <img src="img/4 Units Anterior.png" class="w-full h-full object-cover">
                </div>
                <div id="slide2" class="absolute inset-0 transition-opacity duration-1000 opacity-0">
                    <img src="img/6 Units Anterior.png" class="w-full h-full object-cover">
                </div>
                <div id="slide3" class="absolute inset-0 transition-opacity duration-1000 opacity-0">
                    <img src="img/6 Units crown.png" class="w-full h-full object-cover">
                </div>
                <div id="slide4" class="absolute inset-0 transition-opacity duration-1000 opacity-0">
                    <img src="img/Customized Tray.png" class="w-full h-full object-cover">
                </div>
                <div id="slide5" class="absolute inset-0 transition-opacity duration-1000 opacity-0">
                    <img src="img/DIGITAL DENTAL DESIGNERS (1).jpg" class="w-full h-full object-cover">
                </div>

                <div class="absolute inset-0 bg-black/60"></div>
            </div>

            <div class="relative w-full mx-auto px-5 sm:px-6 lg:px-8 py-16 sm:py-20 lg:py-24 w-full">
                <div class="lg:ml-20 grid lg:grid-cols-2 gap-12 items-center">

                    <div class="w-full space-y-6 sm:space-y-8 text-center lg:text-left">

                        <h1 class="max-w-4xl text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-semibold leading-tight">
                            Your Long Term<br class="hidden sm:block">
                            <span class="text-amber-400">Digital Design Partner</span>
                        </h1>

                        <p class="text-base sm:text-lg lg:text-xl text-white/90 max-w-xl mx-auto lg:mx-0">
                            Built for established labs that need stable overflow coverage and senior oversight on every case.
                        </p>

                        <ul class="space-y-3 text-base sm:text-lg text-white/90 max-w-xl mx-auto lg:mx-0 text-left">

                            <li class="flex items-start gap-3">
                                <span class="mt-2 w-2 h-2 bg-amber-400 rounded-full"></span>
                                Structured 24 hour shift coverage
                            </li>

                            <li class="flex items-start gap-3">
                                <span class="mt-2 w-2 h-2 bg-amber-400 rounded-full"></span>
                                Documented workflow integration
                            </li>

                            <li class="flex items-start gap-3">
                                <span class="mt-2 w-2 h-2 bg-amber-400 rounded-full"></span>
                                Reduced remakes with predictable turnaround
                            </li>

                        </ul>

                        <div class="flex flex-col sm:flex-row gap-4 pt-4 justify-center lg:justify-start">

                            <button id="openModal"
                                class="w-full sm:w-auto px-6 py-3 sm:px-8 sm:py-4 bg-amber-500 hover:bg-amber-600 text-black font-semibold rounded-lg transition">
                                Schedule Partnership Call
                            </button>

                            <a href="" class="w-full sm:w-auto text-center px-6 py-3 sm:px-8 sm:py-4 border border-white/60 hover:bg-white/20 rounded-lg font-semibold transition">
                                Create Account
                            </a>

                        </div>

                        <div class="mt-10">
                            <div class="bg-white/90 backdrop-blur-md border border-slate-200/70 rounded-xl shadow-lg px-6 py-4">

                                <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-between gap-4 text-slate-700 text-sm sm:text-base font-medium text-center sm:text-left">

                                    <span>3Shape Integration</span>
                                    <span class="hidden sm:block h-5 w-px bg-slate-300"></span>

                                    <span>Implant & Full Arch Specialists</span>
                                    <span class="hidden sm:block h-5 w-px bg-slate-300"></span>

                                    <span>24 Hour Structured Coverage</span>

                                </div>

                            </div>
                        </div>

                    </div>

                    <div></div>

                </div>
            </div>

            <div class="absolute bottom-6 sm:bottom-10 left-1/2 -translate-x-1/2 flex gap-3 z-20">
                <button onclick="changeSlide(0)" class="indicator w-3 h-3 rounded-full bg-amber-400"></button>
                <button onclick="changeSlide(1)" class="indicator w-3 h-3 rounded-full bg-white/40"></button>
                <button onclick="changeSlide(2)" class="indicator w-3 h-3 rounded-full bg-white/40"></button>
                <button onclick="changeSlide(3)" class="indicator w-3 h-3 rounded-full bg-white/40"></button>
                <button onclick="changeSlide(4)" class="indicator w-3 h-3 rounded-full bg-white/40"></button>
            </div>

            <script>
                const slides = [
                    document.getElementById('slide1'),
                    document.getElementById('slide2'),
                    document.getElementById('slide3'),
                    document.getElementById('slide4'),
                    document.getElementById('slide5')
                ];

                const indicators = document.querySelectorAll('.indicator');
                let currentSlide = 0;

                function changeSlide(index) {
                    slides.forEach((slide, i) => {
                        slide.classList.remove('opacity-100');
                        slide.classList.add('opacity-0');
                        indicators[i].classList.remove('bg-amber-400');
                        indicators[i].classList.add('bg-white/40');
                    });

                    slides[index].classList.remove('opacity-0');
                    slides[index].classList.add('opacity-100');
                    indicators[index].classList.remove('bg-white/40');
                    indicators[index].classList.add('bg-amber-400');

                    currentSlide = index;
                }

                function nextSlide() {
                    let next = (currentSlide + 1) % slides.length;
                    changeSlide(next);
                }

                setInterval(nextSlide, 5000);
            </script>

            <script>
                const openModalBtn = document.getElementById('openModal');
                const modal = document.getElementById('partnershipModal');
                const closeModalBtn = document.getElementById('closeModal');

                openModalBtn.addEventListener('click', () => {
                    modal.classList.remove('hidden');
                    modal.classList.add('flex');
                    document.body.classList.add('overflow-hidden');
                });

                closeModalBtn.addEventListener('click', () => {
                    modal.classList.add('hidden');
                    modal.classList.remove('flex');
                    document.body.classList.remove('overflow-hidden');
                });

                modal.addEventListener('click', (e) => {
                    if (e.target === modal) {
                        modal.classList.add('hidden');
                        modal.classList.remove('flex');
                        document.body.classList.remove('overflow-hidden');
                    }
                });
            </script>

        </section>

        <section class="relative py-14 sm:py-16 lg:py-20 overflow-hidden">

            <div class="max-w-7xl mx-auto px-5 sm:px-6 lg:px-8">

                <div class="text-center mb-12">
                    <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-semibold text-slate-800 tracking-tight">
                        Our Long Term Partnership Model
                    </h2>
                </div>

                <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-8">

                    <div class="bg-white rounded-2xl shadow-lg border border-slate-200 p-6 sm:p-8 text-center hover:shadow-2xl transition">
                        <h3 class="text-lg sm:text-xl font-semibold text-slate-800 mb-4">
                            Dedicated Design Pod
                        </h3>
                        <div class="w-10 h-px bg-slate-300 mx-auto mb-4"></div>
                        <p class="text-sm sm:text-base text-slate-600">
                            Assigned designers aligned to your lab
                        </p>
                    </div>

                    <div class="bg-white rounded-2xl shadow-lg border border-slate-200 p-6 sm:p-8 text-center hover:shadow-2xl transition">
                        <h3 class="text-lg sm:text-xl font-semibold text-slate-800 mb-4">
                            Documented Preference Library
                        </h3>
                        <div class="w-10 h-px bg-slate-300 mx-auto mb-4"></div>
                        <p class="text-sm sm:text-base text-slate-600">
                            Every margin, contact, and occlusion recorded
                        </p>
                    </div>

                    <div class="bg-white rounded-2xl shadow-lg border border-slate-200 p-6 sm:p-8 text-center hover:shadow-2xl transition">
                        <h3 class="text-lg sm:text-xl font-semibold text-slate-800 mb-4">
                            Senior Case Oversight
                        </h3>
                        <div class="w-10 h-px bg-slate-300 mx-auto mb-4"></div>
                        <p class="text-sm sm:text-base text-slate-600">
                            Implant and complex cases reviewed before delivery
                        </p>
                    </div>

                    <div class="bg-white rounded-2xl shadow-lg border border-slate-200 p-6 sm:p-8 text-center hover:shadow-2xl transition">
                        <h3 class="text-lg sm:text-xl font-semibold text-slate-800 mb-4">
                            Backup & Escalation Protocol
                        </h3>
                        <div class="w-10 h-px bg-slate-300 mx-auto mb-4"></div>
                        <p class="text-sm sm:text-base text-slate-600">
                            No disruption during surge or emergency
                        </p>
                    </div>

                </div>

            </div>

        </section>

        <!-- About us  -->
        <section class="py-16 px-4 max-w-7xl mx-auto">
            <div class="text-center mb-16 md:mb-20">
                <span class="inline-flex items-center text-xs font-semibold text-amber-700 bg-amber-50/80 border border-amber-200/50 px-4 py-2 rounded-full tracking-wider uppercase">
                    <span class="w-1.5 h-1.5 bg-amber-500 rounded-full mr-2"></span>
                    Our Expertise
                </span>
                <h2 class="text-4xl md:text-5xl font-light text-gray-900 tracking-tight mt-6 mb-4">
                    Dedicated Team<span class="text-amber-600">.</span> Precision Work<span class="text-amber-600">.</span>
                </h2>
                <p class="text-lg text-gray-500 max-w-2xl mx-auto leading-relaxed">
                    Meet the specialized professionals and streamlined processes behind every precision restoration.
                </p>
            </div>

            <div class="grid lg:grid-cols-2 gap-16 lg:gap-20 items-center mb-24">
                <div class="relative order-2 lg:order-1">
                    <div class="absolute -top-6 -left-6 w-32 h-32 bg-amber-100/40 rounded-full blur-2xl"></div>
                    <div class="absolute -bottom-6 -right-6 w-40 h-40 bg-blue-100/30 rounded-full blur-2xl"></div>
                    <div class="relative bg-white/50 backdrop-blur-sm border border-gray-100 rounded-3xl p-8 shadow-xl">
                        <div class="flex items-center gap-4 mb-6">
                            <div class="w-16 h-16 bg-gradient-to-br from-amber-400 to-amber-500 rounded-2xl flex items-center justify-center shadow-lg">
                                <i class="fas fa-hand-holding-heart text-white text-2xl"></i>
                            </div>
                            <div>
                                <h3 class="text-2xl font-medium text-gray-900">Four Partners</h3>
                                <p class="text-gray-500">Personally overseeing every shift</p>
                            </div>
                        </div>
                        <p class="text-gray-600 leading-relaxed text-lg mb-6">
                            We are four dedicated partners who personally oversee each shift. Unlike large outsourcing companies, we maintain hands-on involvement with training, workflow, and quality control.
                        </p>
                        <div class="border-t border-gray-100 pt-6 mt-4">
                            <div class="flex items-start gap-3">
                                <i class="fas fa-quote-left text-amber-400 text-xl mt-1"></i>
                                <p class="text-gray-700 italic font-light">
                                    We function as your partner lab — exacting, responsible, and committed to your growth.
                                </p>
                            </div>
                        </div>
                        <div class="flex flex-wrap gap-3 mt-6">
                            <span class="inline-flex items-center px-4 py-2 bg-gray-50 border border-gray-200 rounded-full text-sm font-medium text-gray-700">
                                <i class="fas fa-certificate text-amber-500 mr-2"></i>
                                3Shape Certified
                            </span>
                            <span class="inline-flex items-center px-4 py-2 bg-gray-50 border border-gray-200 rounded-full text-sm font-medium text-gray-700">
                                <i class="fas fa-award text-amber-500 mr-2"></i>
                                Quality Guarantee
                            </span>
                        </div>
                    </div>
                </div>

                <div class="relative order-1 lg:order-2">
                    <div class="grid grid-cols-2 gap-4">
                        <div class="space-y-4">
                            <div class="bg-white border border-gray-100 rounded-2xl p-6 shadow-sm hover:shadow-md transition-all duration-300 hover:-translate-y-1">
                                <div class="w-12 h-12 bg-amber-50 rounded-xl flex items-center justify-center mb-4">
                                    <i class="fas fa-pencil-alt text-amber-600 text-xl"></i>
                                </div>
                                <h4 class="font-semibold text-gray-900 mb-1">Design Team</h4>
                                <p class="text-sm text-gray-500">Certified professionals</p>
                                <div class="mt-4 pt-4 border-t border-gray-50">
                                    <div class="flex justify-between text-sm mb-1">
                                        <span class="text-gray-500">Certification</span>
                                        <span class="font-medium text-gray-900">100%</span>
                                    </div>
                                    <div class="w-full bg-gray-100 rounded-full h-1.5">
                                        <div class="bg-amber-400 h-1.5 rounded-full w-full"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-white border border-gray-100 rounded-2xl p-6 shadow-sm hover:shadow-md transition-all duration-300 hover:-translate-y-1">
                                <div class="w-12 h-12 bg-blue-50 rounded-xl flex items-center justify-center mb-4">
                                    <i class="fas fa-tasks text-blue-600 text-xl"></i>
                                </div>
                                <h4 class="font-semibold text-gray-900 mb-1">Operations</h4>
                                <p class="text-sm text-gray-500 mb-4">Streamlined workflow</p>
                                <div class="flex justify-between">
                                    <div class="text-center">
                                        <i class="fas fa-clock text-blue-500 text-sm"></i>
                                        <span class="text-xs text-gray-500 block mt-1">Tracking</span>
                                    </div>
                                    <div class="text-center">
                                        <i class="fas fa-shipping-fast text-blue-500 text-sm"></i>
                                        <span class="text-xs text-gray-500 block mt-1">Delivery</span>
                                    </div>
                                    <div class="text-center">
                                        <i class="fas fa-chart-line text-blue-500 text-sm"></i>
                                        <span class="text-xs text-gray-500 block mt-1">Workflow</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="space-y-4 mt-8">
                            <div class="bg-white border border-gray-100 rounded-2xl p-6 shadow-sm hover:shadow-md transition-all duration-300 hover:-translate-y-1">
                                <div class="w-12 h-12 bg-purple-50 rounded-xl flex items-center justify-center mb-4">
                                    <i class="fas fa-handshake text-purple-600 text-xl"></i>
                                </div>
                                <h4 class="font-semibold text-gray-900 mb-1">Client Relations</h4>
                                <p class="text-sm text-gray-500 mb-4">Personal account manager</p>
                                <div class="bg-purple-50/50 p-3 rounded-xl">
                                    <p class="text-xs text-purple-700">Dedicated communication for each client</p>
                                </div>
                            </div>
                            <div class="bg-white border border-gray-100 rounded-2xl p-6 shadow-sm hover:shadow-md transition-all duration-300 hover:-translate-y-1">
                                <div class="w-12 h-12 bg-teal-50 rounded-xl flex items-center justify-center mb-4">
                                    <i class="fas fa-globe-americas text-teal-600 text-xl"></i>
                                </div>
                                <h4 class="font-semibold text-gray-900 mb-1">Global Reach</h4>
                                <p class="text-sm text-gray-500 mb-4">Four continents</p>
                                <div class="grid grid-cols-2 gap-2">
                                    <div class="flex items-center"><span class="text-lg mr-1">🇺🇸</span><span class="text-xs text-gray-600">80+</span></div>
                                    <div class="flex items-center"><span class="text-lg mr-1">🇨🇦</span><span class="text-xs text-gray-600">11+</span></div>
                                    <div class="flex items-center"><span class="text-lg mr-1">🇬🇧</span><span class="text-xs text-gray-600">9+</span></div>
                                    <div class="flex items-center"><span class="text-lg mr-1">🇦🇺</span><span class="text-xs text-gray-600">11+</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-24">
                <div class="text-center mb-12">
                    <h3 class="text-3xl font-light text-gray-900 tracking-tight">Shift Leadership</h3>
                    <div class="w-16 h-0.5 bg-amber-200 mx-auto mt-4"></div>
                </div>
                <div class="grid md:grid-cols-3 gap-6">
                    <div class="group bg-white/50 border border-gray-100 rounded-2xl p-8 text-center hover:border-amber-200 transition-all duration-300 hover:shadow-lg">
                        <div class="w-16 h-16 bg-gradient-to-br from-amber-400 to-amber-500 rounded-2xl mx-auto mb-5 flex items-center justify-center shadow-md group-hover:scale-110 transition-transform">
                            <i class="fas fa-sun text-white text-xl"></i>
                        </div>
                        <h4 class="text-xl font-medium text-gray-900 mb-1">Day Shift</h4>
                        <p class="text-amber-600 text-sm font-medium mb-2">Senior Technician</p>
                        <p class="text-sm text-gray-500">Primary design & refinement</p>
                    </div>
                    <div class="group bg-white/50 border border-gray-100 rounded-2xl p-8 text-center hover:border-amber-200 transition-all duration-300 hover:shadow-lg">
                        <div class="w-16 h-16 bg-gradient-to-br from-amber-400 to-amber-500 rounded-2xl mx-auto mb-5 flex items-center justify-center shadow-md group-hover:scale-110 transition-transform">
                            <i class="fas fa-cloud-sun text-white text-xl"></i>
                        </div>
                        <h4 class="text-xl font-medium text-gray-900 mb-1">Evening Shift</h4>
                        <p class="text-amber-600 text-sm font-medium mb-2">Quality Specialist</p>
                        <p class="text-sm text-gray-500">Final review & approval</p>
                    </div>
                    <div class="group bg-white/50 border border-gray-100 rounded-2xl p-8 text-center hover:border-amber-200 transition-all duration-300 hover:shadow-lg">
                        <div class="w-16 h-16 bg-gradient-to-br from-amber-400 to-amber-500 rounded-2xl mx-auto mb-5 flex items-center justify-center shadow-md group-hover:scale-110 transition-transform">
                            <i class="fas fa-moon text-white text-xl"></i>
                        </div>
                        <h4 class="text-xl font-medium text-gray-900 mb-1">Night Shift</h4>
                        <p class="text-amber-600 text-sm font-medium mb-2">Support Manager</p>
                        <p class="text-sm text-gray-500">Client communication</p>
                    </div>
                </div>
            </div>

            <div class="bg-white/70 backdrop-blur-sm border border-gray-100 rounded-3xl p-8 md:p-12 shadow-xl">
                <div class="grid md:grid-cols-2 gap-12 items-center">
                    <div>
                        <h3 class="text-2xl md:text-3xl font-light text-gray-900 tracking-tight mb-6">
                            Case Distribution<span class="text-amber-600">.</span>
                        </h3>
                        <div class="space-y-5">
                            <div>
                                <div class="flex justify-between text-sm mb-1.5">
                                    <span class="text-gray-700">Crowns & Bridges</span>
                                    <span class="font-medium text-gray-900">45%</span>
                                </div>
                                <div class="w-full bg-gray-100 rounded-full h-2">
                                    <div class="bg-amber-400 h-2 rounded-full" style="width: 45%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between text-sm mb-1.5">
                                    <span class="text-gray-700">Implants</span>
                                    <span class="font-medium text-gray-900">20%</span>
                                </div>
                                <div class="w-full bg-gray-100 rounded-full h-2">
                                    <div class="bg-amber-500 h-2 rounded-full" style="width: 20%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between text-sm mb-1.5">
                                    <span class="text-gray-700">Full Arch / All-on-X</span>
                                    <span class="font-medium text-gray-900">8%</span>
                                </div>
                                <div class="w-full bg-gray-100 rounded-full h-2">
                                    <div class="bg-amber-600 h-2 rounded-full" style="width: 8%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between text-sm mb-1.5">
                                    <span class="text-gray-700">Removables</span>
                                    <span class="font-medium text-gray-900">8%</span>
                                </div>
                                <div class="w-full bg-gray-100 rounded-full h-2">
                                    <div class="bg-amber-700 h-2 rounded-full" style="width: 8%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between text-sm mb-1.5">
                                    <span class="text-gray-700">Smile Design</span>
                                    <span class="font-medium text-gray-900">7%</span>
                                </div>
                                <div class="w-full bg-gray-100 rounded-full h-2">
                                    <div class="bg-amber-800 h-2 rounded-full" style="width: 7%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col items-center justify-center text-center">
                        <div class="relative">
                            <div class="absolute inset-0 bg-amber-100/30 rounded-full blur-3xl"></div>
                            <div class="relative">
                                <span class="text-7xl md:text-8xl font-light text-gray-900">100+</span>
                                <span class="block text-xl text-amber-600 font-light mt-2">Labs Worldwide</span>
                            </div>
                        </div>
                        <div class="mt-8 flex items-center gap-3 bg-gray-50 px-6 py-4 rounded-full border border-gray-200">
                            <i class="fas fa-headset text-amber-500"></i>
                            <span class="text-sm text-gray-700">24/7 support across all time zones</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Premium Dental Lab Solutions -->
        <section class="py-8 md:py-16">
            <div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Section Heading -->
                <div class="text-center mb-12">
                    <h2 class="text-3xl sm:text-4xl font-bold mb-4">
                        Premium Dental Lab Solutions
                    </h2>
                    <p class="text-lg sm:text-xl  max-w-3xl mx-auto">
                        Trusted by hundreds of dental labs nationwide for exceptional quality and reliable service.
                    </p>
                </div>

                <div class="flex flex-col lg:flex-row gap-10">
                    <!-- Image Column -->
                    <div class="lg:w-1/2 w-full flex">
                        <div class="bg-white rounded-xl shadow-md overflow-hidden w-full flex">
                            <img
                                src="img/DIGITAL DENTAL DESIGNERS (1).jpg"
                                alt="Dental lab technician working on digital dental design process"
                                title="Digital Dental Design Process"
                                class="w-full object-cover rounded-xl">
                        </div>
                    </div>

                    <!-- Steps Column -->
                    <div class="lg:w-1/2 w-full flex">
                        <div class="bg-gradient-to-br from-blue-900 to-blue-700 rounded-xl shadow-md p-6 sm:p-8 text-white w-full flex flex-col justify-between">
                            <div>
                                <h3 class="text-2xl sm:text-3xl font-bold mb-6 border-b border-blue-500 pb-4">
                                    How to Start & Pay
                                </h3>

                                <!-- Steps -->
                                <div class="space-y-8">
                                    <!-- Step Item -->
                                    <div class="flex items-start">
                                        <div class="flex-shrink-0 mr-5">
                                            <div class="w-12 h-12 bg-white text-blue-700 font-bold rounded-full flex items-center justify-center text-xl">1</div>
                                        </div>
                                        <div>
                                            <h4 class="text-lg font-semibold mb-1">Talk to Us</h4>
                                            <p class="text-blue-100 text-lg sm:text-base">Share your requirements and challenges, and we'll set up your account.</p>
                                        </div>
                                    </div>

                                    <!-- Step Item -->
                                    <div class="flex items-start">
                                        <div class="flex-shrink-0 mr-5">
                                            <div class="w-12 h-12 bg-white text-blue-700 font-bold rounded-full flex items-center justify-center text-xl">2</div>
                                        </div>
                                        <div>
                                            <h4 class="text-lg font-semibold mb-1">Upload Cases</h4>
                                            <p class="text-blue-100 text-lg sm:text-base">Log in and upload your cases. Choose your preferred turnaround time.</p>
                                        </div>
                                    </div>

                                    <!-- Step Item -->
                                    <div class="flex items-start">
                                        <div class="flex-shrink-0 mr-5">
                                            <div class="w-12 h-12 bg-white text-blue-700 font-bold rounded-full flex items-center justify-center text-xl">3</div>
                                        </div>
                                        <div>
                                            <h4 class="text-lg font-semibold mb-1">Preview & Mill</h4>
                                            <p class="text-blue-100 text-lg sm:text-base">Review the completed design or send it straight to milling.</p>
                                        </div>
                                    </div>

                                    <!-- Step Item -->
                                    <div class="flex items-start">
                                        <div class="flex-shrink-0 mr-5">
                                            <div class="w-12 h-12 bg-white text-blue-700 font-bold rounded-full flex items-center justify-center text-xl">4</div>
                                        </div>
                                        <div>
                                            <h4 class="text-lg font-semibold mb-1">Make Payment</h4>
                                            <p class="text-blue-100 text-lg sm:text-base">
                                                Pay securely by credit/debit card, PayPal, or bank transfer. Monthly billing available.
                                            </p>

                                            <!-- Payment Icons -->
                                            <div class="flex mt-3 space-x-3">
                                                <div class="bg-blue-800 p-2 rounded-lg">
                                                    <i class="fab fa-cc-visa text-2xl" title="Visa"></i>
                                                </div>
                                                <div class="bg-blue-800 p-2 rounded-lg">
                                                    <i class="fab fa-cc-mastercard text-2xl" title="MasterCard"></i>
                                                </div>
                                                <div class="bg-blue-800 p-2 rounded-lg">
                                                    <i class="fab fa-cc-amex text-2xl" title="American Express"></i>
                                                </div>
                                                <div class="bg-blue-800 p-2 rounded-lg">
                                                    <i class="fab fa-paypal text-2xl" title="PayPal"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- CTA -->
                            <div class="mt-10 text-center">
                                <a href="#contact" class="whatsapp-float bg-white hover:bg-blue-100 text-blue-700 font-semibold py-3 px-8 rounded-lg shadow-md transition duration-300">
                                    Get Started Today
                                </a>
                                <p class="text-lg text-blue-200 mt-3">No setup fees • Cancel anytime • 30-day satisfaction guarantee</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Why Labs Choose Us -->
        <section class="why-choose-us md:py-16 py-8 relative">
            <div class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')]"></div>

            <div class="container mx-auto px-6 relative z-10 max-w-8xl">
                <div class="text-center mb-16">
                    <h2 class="text-4xl md:text-5xl font-extrabold text-black mb-5 tracking-tight">Why Labs Choose Us</h2>
                    <div class="h-1 w-24 bg-gradient-to-r from-blue-400 to-cyan-400 mx-auto mb-6 rounded-full"></div>
                    <p class="text-lg md:text-xl text-black max-w-3xl mx-auto leading-relaxed">
                        Discover the advantages that make us the preferred partner for dental labs nationwide
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="group bg-white/95 rounded-2xl p-6 flex flex-col h-full border border-blue-100/20 shadow-md 
                  hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                        <div class="flex flex-col items-center text-center mb-4">
                            <div class="w-14 h-14 flex items-center justify-center rounded-full bg-blue-100 text-blue-700 text-xl mb-3">
                                <i class="fas fa-user-tie"></i>
                            </div>
                            <h3 class="text-lg font-semibold text-gray-800">Dedicated Managers</h3>
                        </div>
                        <p class="text-gray-600 text-lg text-center flex-grow">
                            Relationship + Operations Managers ensure every case is tracked and delivered with accountability.
                        </p>
                    </div>

                    <!-- Item 2 -->
                    <div class="group bg-white/95 rounded-2xl p-6 flex flex-col h-full border border-blue-100/20 shadow-md 
                  hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                        <div class="flex flex-col items-center text-center mb-4">
                            <div class="w-14 h-14 flex items-center justify-center rounded-full bg-blue-100 text-blue-700 text-xl mb-3">
                                <i class="fas fa-comments"></i>
                            </div>
                            <h3 class="text-lg font-semibold text-gray-800">Direct Communication</h3>
                        </div>
                        <p class="text-gray-600 text-lg text-center flex-grow">
                            Share cases, preferences, and track progress easily.
                        </p>
                    </div>

                    <!-- Item 3 -->
                    <div class="group bg-white/95 rounded-2xl p-6 flex flex-col h-full border border-blue-100/20 shadow-md 
                  hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                        <div class="flex flex-col items-center text-center mb-4">
                            <div class="w-14 h-14 flex items-center justify-center rounded-full bg-blue-100 text-blue-700 text-xl mb-3">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <h3 class="text-lg font-semibold text-gray-800">Error-Free Results</h3>
                        </div>
                        <p class="text-gray-600 text-lg text-center flex-grow">
                            Margins, occlusion, contacts, and esthetics verified before delivery.
                        </p>
                    </div>

                    <!-- Item 4 -->
                    <div class="group bg-white/95 rounded-2xl p-6 flex flex-col h-full border border-blue-100/20 shadow-md 
                  hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                        <div class="flex flex-col items-center text-center mb-4">
                            <div class="w-14 h-14 flex items-center justify-center rounded-full bg-blue-100 text-blue-700 text-xl mb-3">
                                <i class="fas fa-stopwatch"></i>
                            </div>
                            <h3 class="text-lg font-semibold text-gray-800">Reliable Turnaround</h3>
                        </div>
                        <p class="text-gray-600 text-lg text-center flex-grow">
                            From urgent 30-minute needs to next-day cases.
                        </p>
                    </div>

                    <!-- Item 5 -->
                    <div class="group bg-white/95 rounded-2xl p-6 flex flex-col h-full border border-blue-100/20 shadow-md 
                  hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                        <div class="flex flex-col items-center text-center mb-4">
                            <div class="w-14 h-14 flex items-center justify-center rounded-full bg-blue-100 text-blue-700 text-xl mb-3">
                                <i class="fas fa-award"></i>
                            </div>
                            <h3 class="text-lg font-semibold text-gray-800">Trusted by Professionals</h3>
                        </div>
                        <p class="text-gray-600 text-lg text-center flex-grow">
                            We eliminate common issues: remakes, wasted time, poor esthetics, and missed deadlines.
                        </p>
                    </div>

                    <!-- Item 6 -->
                    <div class="group bg-white/95 rounded-2xl p-6 flex flex-col h-full border border-blue-100/20 shadow-md 
                  hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                        <div class="flex flex-col items-center text-center mb-4">
                            <div class="w-14 h-14 flex items-center justify-center rounded-full bg-blue-100 text-blue-700 text-xl mb-3">
                                <i class="fas fa-clipboard-check"></i>
                            </div>
                            <h3 class="text-lg font-semibold text-gray-800">Clear Communication</h3>
                        </div>
                        <p class="text-gray-600 text-lg text-center flex-grow">
                            Every instruction documented, no details lost.
                        </p>
                    </div>

                    <!-- Item 7 -->
                    <div class="group bg-white/95 rounded-2xl p-6 flex flex-col h-full border border-blue-100/20 shadow-md 
                  hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                        <div class="flex flex-col items-center text-center mb-4">
                            <div class="w-14 h-14 flex items-center justify-center rounded-full bg-blue-100 text-blue-700 text-xl mb-3">
                                <i class="fas fa-tag"></i>
                            </div>
                            <h3 class="text-lg font-semibold text-gray-800">No Hidden Costs</h3>
                        </div>
                        <p class="text-gray-600 text-lg text-center flex-grow">
                            Transparent, predictable pricing.
                        </p>
                    </div>

                    <!-- Item 8 -->
                    <div class="group bg-white/95 rounded-2xl p-6 flex flex-col h-full border border-blue-100/20 shadow-md 
                  hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                        <div class="flex flex-col items-center text-center mb-4">
                            <div class="w-14 h-14 flex items-center justify-center rounded-full bg-blue-100 text-blue-700 text-xl mb-3">
                                <i class="fas fa-credit-card"></i>
                            </div>
                            <h3 class="text-lg font-semibold text-gray-800">Flexible Billing</h3>
                        </div>
                        <p class="text-gray-600 text-lg text-center flex-grow">
                            Convenient payment through bank transfer, credit card, or debit card.
                        </p>
                    </div>

                    <!-- Item 9 -->
                    <div class="group bg-white/95 rounded-2xl p-6 flex flex-col h-full border border-blue-100/20 shadow-md 
                  hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                        <div class="flex flex-col items-center text-center mb-4">
                            <div class="w-14 h-14 flex items-center justify-center rounded-full bg-blue-100 text-blue-700 text-xl mb-3">
                                <i class="fas fa-expand-arrows-alt"></i>
                            </div>
                            <h3 class="text-lg font-semibold text-gray-800">Scalable Support</h3>
                        </div>
                        <p class="text-gray-600 text-lg text-center flex-grow">
                            Supporting boutique labs, mid-size labs, and large operations alike.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Our Process & Workflow -->
        <section class="md:py-16 py-8 md:px-24">
            <div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <!-- Section header -->
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4">Our Process & Workflow</h2>
                    <p class="text-lg">A streamlined approach that ensures precision, quality, and consistency in every case</p>
                </div>

                <!-- Process steps -->
                <div class="grid md:grid-cols-5 gap-8 relative">
                    <!-- Connecting line -->
                    <div class="hidden md:block absolute top-12 left-1/2 transform -translate-x-1/2 w-4/5 h-1 bg-black"></div>

                    <!-- Step 1 -->
                    <div class="relative flex flex-col items-center text-center group">
                        <div class="w-20 h-20 rounded-full bg-white border-4 border-blue-500 flex items-center justify-center mb-6 relative z-10 shadow-lg group-hover:scale-110 transition-transform duration-300">
                            <div class="w-14 h-14 bg-blue-100 rounded-full flex items-center justify-center">
                                <i class="fas fa-cloud-upload-alt text-blue-600 text-2xl"></i>
                            </div>
                        </div>
                        <div class="bg-white p-6 rounded-xl shadow-md border border-gray-100 group-hover:shadow-lg transition-shadow duration-300">
                            <div class="text-blue-600 font-bold text-lg mb-2">Step 1</div>
                            <h3 class="font-semibold text-gray-800 mb-3">Upload Cases</h3>
                            <p class="text-gray-600 text-lg">Through our secure portal or preferred system</p>
                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div class="relative flex flex-col items-center text-center group">
                        <div class="w-20 h-20 rounded-full bg-white border-4 border-purple-500 flex items-center justify-center mb-6 relative z-10 shadow-lg group-hover:scale-110 transition-transform duration-300">
                            <div class="w-14 h-14 bg-purple-100 rounded-full flex items-center justify-center">
                                <i class="fas fa-pencil-alt text-purple-600 text-2xl"></i>
                            </div>
                        </div>
                        <div class="bg-white p-6 rounded-xl shadow-md border border-gray-100 group-hover:shadow-lg transition-shadow duration-300">
                            <div class="text-purple-600 font-bold text-lg mb-2">Step 2</div>
                            <h3 class="font-semibold text-gray-800 mb-3">Design by Experts</h3>
                            <p class="text-gray-600 text-lg">Certified dental designers craft each case</p>
                        </div>
                    </div>

                    <!-- Step 3 -->
                    <div class="relative flex flex-col items-center text-center group">
                        <div class="w-20 h-20 rounded-full bg-white border-4 border-teal-500 flex items-center justify-center mb-6 relative z-10 shadow-lg group-hover:scale-110 transition-transform duration-300">
                            <div class="w-14 h-14 bg-teal-100 rounded-full flex items-center justify-center">
                                <i class="fas fa-search text-teal-600 text-2xl"></i>
                            </div>
                        </div>
                        <div class="bg-white p-6 rounded-xl shadow-md border border-gray-100 group-hover:shadow-lg transition-shadow duration-300">
                            <div class="text-teal-600 font-bold text-lg mb-2">Step 3</div>
                            <h3 class="font-semibold text-gray-800 mb-3">Quality Review</h3>
                            <p class="text-gray-600 text-lg">Senior professionals double-check accuracy</p>
                        </div>
                    </div>

                    <!-- Step 4 -->
                    <div class="relative flex flex-col items-center text-center group">
                        <div class="w-20 h-20 rounded-full bg-white border-4 border-green-500 flex items-center justify-center mb-6 relative z-10 shadow-lg group-hover:scale-110 transition-transform duration-300">
                            <div class="w-14 h-14 bg-green-100 rounded-full flex items-center justify-center">
                                <i class="fas fa-paper-plane text-green-600 text-2xl"></i>
                            </div>
                        </div>
                        <div class="bg-white p-6 rounded-xl shadow-md border border-gray-100 group-hover:shadow-lg transition-shadow duration-300">
                            <div class="text-green-600 font-bold text-lg mb-2">Step 4</div>
                            <h3 class="font-semibold text-gray-800 mb-3">Delivery</h3>
                            <p class="text-gray-600 text-lg">Options from 30 minutes to next-day turnaround</p>
                        </div>
                    </div>

                    <!-- Step 5 -->
                    <div class="relative flex flex-col items-center text-center group">
                        <div class="w-20 h-20 rounded-full bg-white border-4 border-orange-500 flex items-center justify-center mb-6 relative z-10 shadow-lg group-hover:scale-110 transition-transform duration-300">
                            <div class="w-14 h-14 bg-orange-100 rounded-full flex items-center justify-center">
                                <i class="fas fa-sync-alt text-orange-600 text-2xl"></i>
                            </div>
                        </div>
                        <div class="bg-white p-6 rounded-xl shadow-md border border-gray-100 group-hover:shadow-lg transition-shadow duration-300">
                            <div class="text-orange-600 font-bold text-lg mb-2">Step 5</div>
                            <h3 class="font-semibold text-gray-800 mb-3">Feedback Loop</h3>
                            <p class="text-gray-600 text-lg">Managers document your preferences for ongoing consistency</p>
                        </div>
                    </div>
                </div>

                <!-- CTA section -->
                <div class="text-center mt-16">
                    <h3 class="text-xl font-semibold text-black mb-4">Ready to experience our seamless workflow?</h3>
                    <button class="whatsapp-float bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-8 rounded-lg transition duration-300 shadow-md hover:shadow-lg">
                        Start Your First Case
                    </button>
                </div>
            </div>
        </section>

        <section class="md:py-16 py-8">
            <div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-24">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-bold text-black mb-4">Our Products</h2>
                    <p class="text-lg text-black max-w-2xl mx-auto">
                        Explore our specialized dental CAD/CAM services designed to support your lab with precision and speed.
                    </p>
                </div>

                <div class="flex flex-col md:flex-row items-center mb-16 md:mb-24">
                    <div class="md:w-1/2 mb-10 md:mb-0 md:pr-10">
                        <h2 class="text-3xl md:text-4xl font-bold text-black mb-4">Crown & Bridge Designs</h2>
                        <p class="text-lg text-black mb-6">Precision-driven solutions for strength, aesthetics, and long-lasting performance. Our crown and bridge work combines expert craftsmanship with advanced digital technology.</p>
                        <ul class="space-y-3 text-black">
                            <li class="flex items-start">
                                <span class="text-black mr-2 mt-1">•</span>
                                <span>Custom-designed for perfect fit and function</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-black mr-2 mt-1">•</span>
                                <span>Multiple material options available</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-black mr-2 mt-1">•</span>
                                <span>Natural-looking aesthetics</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Right Slider -->
                    <div class="md:w-1/2 w-full relative group h-96 md:h-[28rem]">
                        <div class="crown-slider swiper-container overflow-hidden rounded-xl h-full">
                            <div class="swiper-wrapper h-full">
                                <div class="swiper-slide h-full">
                                    <img src="img/4 Units Anterior.png" alt="4 Units Anterior Crown Design" class="w-full h-full object-contain">
                                </div>
                                <div class="swiper-slide h-full">
                                    <img src="img/6-0 Units crown.png" alt="6-0 Units Crown Design" class="w-full h-full object-contain">
                                </div>
                                <div class="swiper-slide h-full">
                                    <img src="img/6 Units Anterior.png" alt="6 Units Anterior Design" class="w-full h-full object-contain">
                                </div>
                                <div class="swiper-slide h-full">
                                    <img src="img/6 Units crown.png" alt="6 Units Crown Design" class="w-full h-full object-contain">
                                </div>
                                <div class="swiper-slide h-full">
                                    <img src="img/6-1 Units Anterior.png" alt="6-1 Units Anterior Design" class="w-full h-full object-contain">
                                </div>
                            </div>

                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col md:flex-row items-center mb-16 md:mb-24">
                    <div class="md:w-1/2 w-full relative group mb-10 md:mb-0 md:pr-10 order-2 md:order-1 h-96 md:h-[28rem]">
                        <div class="digital-slider swiper-container overflow-hidden rounded-xl h-full">
                            <div class="swiper-wrapper h-full">
                                <div class="swiper-slide h-full">
                                    <img src="img/DW.png" alt="Digital Wax-Up Design" class="w-full h-full object-contain">
                                </div>
                                <div class="swiper-slide h-full">
                                    <img src="img/DW1.png" alt="Digital Wax-Up Example" class="w-full h-full object-contain">
                                </div>
                                <div class="swiper-slide h-full">
                                    <img src="img/DW2.png" alt="Digital Wax-Up Design" class="w-full h-full object-contain">
                                </div>
                                <div class="swiper-slide h-full">
                                    <img src="img/DW MO.png" alt="Digital Wax-Up MO" class="w-full h-full object-contain">
                                </div>
                                <div class="swiper-slide h-full">
                                    <img src="img/DW MO+C.png" alt="Digital Wax-Up MO+C" class="w-full h-full object-contain">
                                </div>
                                <div class="swiper-slide h-full">
                                    <img src="img/DW MO+C2.png" alt="Digital Wax-Up MO+C2" class="w-full h-full object-contain">
                                </div>
                                <div class="swiper-slide h-full">
                                    <img src="img/TEMP.png" alt="Temporary Restoration" class="w-full h-full object-contain">
                                </div>
                            </div>

                            <div class="swiper-pagination"></div>
                        </div>
                    </div>

                    <!-- Right Content -->
                    <div class="md:w-1/2 md:pl-10 order-1 md:order-2">
                        <h2 class="text-3xl md:text-4xl font-bold text-black mb-4">Digital Wax-Ups & Temporaries</h2>
                        <p class="text-lg text-black mb-6">Accurate previews and reliable temporaries for confident treatment planning. Our digital wax-ups allow you to visualize the final result before treatment begins.</p>
                        <ul class="space-y-3 text-black">
                            <li class="flex items-start">
                                <span class="text-black mr-2 mt-1">•</span>
                                <span>Precise digital planning</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-black mr-2 mt-1">•</span>
                                <span>Patient approval before production</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-black mr-2 mt-1">•</span>
                                <span>High-quality temporary restorations</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="flex flex-col md:flex-row items-center mb-16 md:mb-24">
                    <div class="md:w-1/2 mb-10 md:mb-0 md:pr-10">
                        <h2 class="text-3xl md:text-4xl font-bold text-black mb-4">Full Arch & All-on-X Restorations</h2>
                        <p class="text-lg text-black mb-6">Comprehensive solutions for stability, function, and natural esthetics. Our full arch restorations provide patients with a permanent, comfortable solution.</p>
                        <ul class="space-y-3 text-black">
                            <li class="flex items-start">
                                <span class="text-black mr-2 mt-1">•</span>
                                <span>Full-arch implant-supported prosthetics</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-black mr-2 mt-1">•</span>
                                <span>Fixed and removable options</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-black mr-2 mt-1">•</span>
                                <span>Enhanced chewing function and comfort</span>
                            </li>
                        </ul>
                    </div>

                    <div class="md:w-1/2 w-full relative group h-96 md:h-[28rem]">
                        <div class="fullarch-slider swiper-container overflow-hidden rounded-xl h-full">
                            <div class="swiper-wrapper h-full">
                                <div class="swiper-slide h-full">
                                    <img src="img/Gingiva Crown.png" alt="Gingiva Crown Design" class="w-full h-full object-contain">
                                </div>
                                <div class="swiper-slide h-full">
                                    <img src="img/Gingiva Crown1.png" alt="Gingiva Crown Example" class="w-full h-full object-contain">
                                </div>
                                <div class="swiper-slide h-full">
                                    <img src="img/Gingiva Crown1-2.png" alt="Gingiva Crown Design" class="w-full h-full object-contain">
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col md:flex-row items-center mb-16 md:mb-24">
                    <div class="md:w-1/2 w-full relative group mb-10 md:mb-0 md:pr-10 order-2 md:order-1 h-96 md:h-[28rem]">
                        <div class="implant-slider swiper-container overflow-hidden rounded-xl h-full">
                            <div class="swiper-wrapper h-full">
                                <div class="swiper-slide h-full">
                                    <img src="img/Custom Abutment.png" alt="Custom Abutment Design" class="w-full h-full object-contain">
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>

                    <!-- Right Content -->
                    <div class="md:w-1/2 md:pl-10 order-1 md:order-2">
                        <h2 class="text-3xl md:text-4xl font-bold text-black mb-4">Implant Restorations</h2>
                        <p class="text-lg text-black mb-6">Comprehensive solutions for stability, function, and natural esthetics. Our implant restorations are designed to seamlessly integrate with your natural teeth.</p>
                        <ul class="space-y-3 text-black">
                            <li class="flex items-start">
                                <span class="text-black mr-2 mt-1">•</span>
                                <span>Custom abutments for perfect fit</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-black mr-2 mt-1">•</span>
                                <span>Various connection types available</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-black mr-2 mt-1">•</span>
                                <span>Biocompatible materials</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Removable Prosthetics -->
                <div class="flex flex-col md:flex-row items-center">
                    <!-- Left Content -->
                    <div class="md:w-1/2 mb-10 md:mb-0 md:pr-10">
                        <h2 class="text-3xl md:text-4xl font-bold text-black mb-4">Removable Prosthetics</h2>
                        <p class="text-lg text-black mb-6">Comprehensive solutions for stability, function, and natural esthetics. Our removable prosthetics are custom-designed for optimal comfort and function.</p>
                        <ul class="space-y-3 text-black">
                            <li class="flex items-start">
                                <span class="text-black mr-2 mt-1">•</span>
                                <span>Partial and full dentures</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-black mr-2 mt-1">•</span>
                                <span>Custom trays for perfect impressions</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-black mr-2 mt-1">•</span>
                                <span>Precision attachments for enhanced retention</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Right Slider -->
                    <div class="md:w-1/2 w-full relative group h-96 md:h-[28rem]">
                        <div class="removable-slider swiper-container overflow-hidden rounded-xl h-full">
                            <div class="swiper-wrapper h-full">
                                <div class="swiper-slide h-full">
                                    <img src="img/Customized Tray.png" alt="Customized Tray" class="w-full h-full object-contain">
                                </div>
                                <div class="swiper-slide h-full">
                                    <img src="img/Customized Tray1.png" alt="Customized Tray Example" class="w-full h-full object-contain">
                                </div>
                                <div class="swiper-slide h-full">
                                    <img src="img/NG7.png" alt="NG7 Design" class="w-full h-full object-contain">
                                </div>
                                <div class="swiper-slide h-full">
                                    <img src="img/NG_3.png" alt="NG3 Design" class="w-full h-full object-contain">
                                </div>
                                <div class="swiper-slide h-full">
                                    <img src="img/RPD.png" alt="RPD Design" class="w-full h-full object-contain">
                                </div>
                                <div class="swiper-slide h-full">
                                    <img src="img/RPD-2.png" alt="RPD Design Variation" class="w-full h-full object-contain">
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Initialize Swiper -->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Initialize all sliders
                const sliders = [{
                        selector: '.crown-slider',
                        name: 'crown'
                    },
                    {
                        selector: '.digital-slider',
                        name: 'digital'
                    },
                    {
                        selector: '.fullarch-slider',
                        name: 'fullarch'
                    },
                    {
                        selector: '.implant-slider',
                        name: 'implant'
                    },
                    {
                        selector: '.removable-slider',
                        name: 'removable'
                    }
                ];

                sliders.forEach(slider => {
                    new Swiper(slider.selector, {
                        loop: true,
                        spaceBetween: 0,
                        centeredSlides: true,
                        navigation: {
                            nextEl: `.${slider.name}-slider .swiper-button-next`,
                            prevEl: `.${slider.name}-slider .swiper-button-prev`,
                        },
                        pagination: {
                            el: `.${slider.name}-slider .swiper-pagination`,
                            clickable: true,
                        },
                        autoplay: {
                            delay: 4000,
                            disableOnInteraction: false,
                        },
                        breakpoints: {
                            640: {
                                slidesPerView: 1
                            },
                            768: {
                                slidesPerView: 1
                            },
                            1024: {
                                slidesPerView: 1
                            },
                        }
                    });
                });
            });
        </script>

        <!-- Trust & Credentials -->
        <section class="trust-credentials md:py-16 py-10">
            <div class="container mx-auto px-4 max-w-8xl">
                <!-- Certifications Badges -->
                <div class="bg-white rounded-2xl p-6 md:p-10 shadow-lg border border-gray-100">
                    <h3 class="text-2xl md:text-3xl font-bold text-gray-900 mb-6 md:mb-8 text-center">Our Certifications</h3>
                    <p class="text-gray-700 text-lg md:text-base text-center max-w-2xl mx-auto mb-6 md:mb-10 leading-relaxed px-2">
                        We maintain the highest industry standards through our certifications and quality assurance processes.
                    </p>
                    <div class="flex flex-col sm:flex-row flex-wrap justify-center gap-6 md:gap-8">
                        <div class="bg-white p-5 md:p-6 rounded-xl border border-gray-200 shadow-sm hover:shadow-md transition-shadow duration-300 flex items-center w-full sm:w-auto max-w-xs">
                            <div class="w-14 h-14 md:w-16 md:h-16 bg-blue-100 rounded-full flex items-center justify-center mr-4 md:mr-5 flex-shrink-0">
                                <span class="text-blue-700 font-bold text-lg md:text-xl">3S</span>
                            </div>
                            <div>
                                <div class="font-bold text-gray-900 text-base md:text-lg">3Shape Certified</div>
                                <div class="text-md md:text-lg text-gray-600 mt-1">Design Excellence</div>
                            </div>
                        </div>
                        <div class="bg-white p-5 md:p-6 rounded-xl border border-gray-200 shadow-sm hover:shadow-md transition-shadow duration-300 flex items-center w-full sm:w-auto max-w-xs">
                            <div class="w-14 h-14 md:w-16 md:h-16 bg-green-100 rounded-full flex items-center justify-center mr-4 md:mr-5 flex-shrink-0">
                                <span class="text-green-700 font-bold text-lg md:text-xl">ISO</span>
                            </div>
                            <div>
                                <div class="font-bold text-gray-900 text-base md:text-lg">Quality Standards</div>
                                <div class="text-md md:text-lg text-gray-600 mt-1">Process Excellence</div>
                            </div>
                        </div>
                        <div class="bg-white p-5 md:p-6 rounded-xl border border-gray-200 shadow-sm hover:shadow-md transition-shadow duration-300 flex items-center w-full sm:w-auto max-w-xs">
                            <div class="w-14 h-14 md:w-16 md:h-16 bg-purple-100 rounded-full flex items-center justify-center mr-4 md:mr-5 flex-shrink-0">
                                <span class="text-purple-700 font-bold text-lg md:text-xl">CE</span>
                            </div>
                            <div>
                                <div class="font-bold text-gray-900 text-base md:text-lg">EU Compliance</div>
                                <div class="text-md md:text-lg text-gray-600 mt-1">Medical Devices</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Case Studies / Testimonials -->
        <section class="testimonials-section md:py-16 py-8">
            <div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-24">
                <div class="flex flex-col md:flex-row items-center mb-16 md:mb-24">
                    <!-- Left Content -->
                    <div class="md:w-3/5 mb-10 md:mb-0 md:pr-10">
                        <h2 class="text-3xl md:text-7xl font-bold mb-4">Trust & Credentials</h2>
                        <p class="text-lg mb-6">Our commitment to quality and excellence has earned us the trust of dental professionals worldwide.</p>
                    </div>

                    <!-- Right Slider -->
                    <div class="md:w-2/5 w-full relative group h-96 md:h-[20rem]">
                        <div class="testimonial-slider swiper-container overflow-hidden rounded-2xl shadow-xl h-full">
                            <div class="swiper-wrapper h-full">

                                <!-- Testimonial 1 -->
                                <div class="swiper-slide h-full">
                                    <div class="bg-gradient-to-b from-white to-gray-50 rounded-2xl p-8 h-full flex flex-col justify-center shadow-md border border-gray-200">
                                        <div class="flex items-start gap-4">
                                            <i class="fas fa-quote-left text-blue-500 text-3xl opacity-80"></i>
                                            <div>
                                                <p class="text-gray-700 italic leading-relaxed">
                                                    "Before working with them, we struggled with remakes and last-minute stress.
                                                    Now, every case arrives consistent and dependable — it truly feels like we added an in-house team without the overhead."
                                                </p>
                                                <p class="mt-4 font-semibold text-gray-900">– Lab Owner, USA</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Testimonial 2 -->
                                <div class="swiper-slide h-full">
                                    <div class="bg-gradient-to-b from-white to-gray-50 rounded-2xl p-8 h-full flex flex-col justify-center shadow-md border border-gray-200">
                                        <div class="flex items-start gap-4">
                                            <i class="fas fa-quote-left text-green-500 text-3xl opacity-80"></i>
                                            <div>
                                                <p class="text-gray-700 italic leading-relaxed">
                                                    "Their precision and on-time delivery immediately reduced our chairside adjustments.
                                                    It has made a real difference in our daily efficiency."
                                                </p>
                                                <p class="mt-4 font-semibold text-gray-900">– Lab Manager, Canada</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Testimonial 3 -->
                                <div class="swiper-slide h-full">
                                    <div class="bg-gradient-to-b from-gray-900 to-gray-800 rounded-2xl p-8 h-full flex flex-col justify-center shadow-md border border-gray-700">
                                        <div class="flex items-start gap-4">
                                            <i class="fas fa-quote-left text-purple-400 text-3xl opacity-90"></i>
                                            <div>
                                                <p class="text-gray-300 italic leading-relaxed">
                                                    "Complex implant cases were always a headache. With this team, I finally have confidence
                                                    that every design will be accurate and reliable."
                                                </p>
                                                <p class="mt-4 font-semibold text-white">– Lab Owner, UK</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Testimonial 4 -->
                                <div class="swiper-slide h-full">
                                    <div class="bg-gradient-to-b from-gray-900 to-gray-800 rounded-2xl p-8 h-full flex flex-col justify-center shadow-md border border-gray-700">
                                        <div class="flex items-start gap-4">
                                            <i class="fas fa-quote-left text-yellow-400 text-3xl opacity-90"></i>
                                            <div>
                                                <p class="text-gray-300 italic leading-relaxed">
                                                    "The quality is steady, the communication is clear, and we never face surprises.
                                                    It's exactly the reliability we were missing."
                                                </p>
                                                <p class="mt-4 font-semibold text-white">– Lab Owner, Australia</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Testimonial 5 -->
                                <div class="swiper-slide h-full">
                                    <div class="bg-gradient-to-b from-gray-900 to-gray-800 rounded-2xl p-8 h-full flex flex-col justify-center shadow-md border border-gray-700">
                                        <div class="flex items-start gap-4">
                                            <i class="fas fa-quote-left text-red-400 text-3xl opacity-90"></i>
                                            <div>
                                                <p class="text-gray-300 italic leading-relaxed">
                                                    "They don't just deliver designs — they integrate into our process.
                                                    It honestly feels like they are part of our own lab team."
                                                </p>
                                                <p class="mt-4 font-semibold text-white">– Dental Lab</p>
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

        <!-- Initialize Swiper -->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const testimonialSwiper = new Swiper('.testimonial-slider', {
                    loop: true,
                    spaceBetween: 0,
                    centeredSlides: true,
                    navigation: {
                        nextEl: '.testimonial-slider .swiper-button-next',
                        prevEl: '.testimonial-slider .swiper-button-prev',
                    },
                    pagination: {
                        el: '.testimonial-slider .swiper-pagination',
                        clickable: true,
                    },
                    autoplay: {
                        delay: 3000,
                        disableOnInteraction: false,
                    },
                    breakpoints: {
                        640: {
                            slidesPerView: 1
                        },
                        768: {
                            slidesPerView: 1
                        },
                        1024: {
                            slidesPerView: 1
                        },
                    }
                });
            });
        </script>

        <section class="py-20 px-4 max-w-7xl mx-auto" id="contact">
            <div class="grid lg:grid-cols-5 rounded-3xl border border-gray-100/80 shadow-2xl overflow-hidden">

                <div class="lg:col-span-2 bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 text-white relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-64 h-64 bg-amber-500/10 rounded-full blur-3xl"></div>
                    <div class="absolute bottom-0 right-0 w-80 h-80 bg-amber-400/5 rounded-full blur-3xl"></div>

                    <div class="relative h-64 lg:h-[60vh]">
                        <img src="img/Untitled design.jpg" alt="Dental laboratory" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/50 to-transparent"></div>
                    </div>

                    <div class="relative p-8 md:p-10 flex flex-col">
                        <div class="mb-6">
                            <span class="inline-flex items-center text-xs font-semibold text-amber-400 bg-white/5 border border-amber-400/20 px-4 py-2 rounded-full tracking-wider uppercase backdrop-blur-sm">
                                <span class="w-1.5 h-1.5 bg-amber-400 rounded-full mr-2"></span>
                                Your Partner
                            </span>
                        </div>

                        <p class="text-gray-300 text-lg mb-8 leading-relaxed">
                            Digital dental design partner for labs worldwide. Seamless integration, consistent quality.
                        </p>
                    </div>
                </div>

                <div class="lg:col-span-3 bg-white md:p-8 p-6 md:p-10">
                    <div class="max-w-8xl">
                        <div class="mb-8">
                            <h2 class="text-3xl md:text-4xl font-light text-gray-900 tracking-tight mb-3">
                                Contact Us<span class="text-amber-500">.</span>
                            </h2>
                        </div>

                        <form id="c_form" class="space-y-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Full Name *</label>
                                    <input type="text" name="full_nam" class="w-full px-4 py-3.5 bg-gray-50 border border-gray-200 rounded-xl text-gray-900 placeholder-gray-400 focus:bg-white focus:border-amber-400 focus:ring-2 focus:ring-amber-400/20 transition-all duration-200 text-base" placeholder="John Smith" required>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Lab Name *</label>
                                    <input type="text" name="lab_nam" class="w-full px-4 py-3.5 bg-gray-50 border border-gray-200 rounded-xl text-gray-900 placeholder-gray-400 focus:bg-white focus:border-amber-400 focus:ring-2 focus:ring-amber-400/20 transition-all duration-200 text-base" placeholder="Skydent Dental" required>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Email Address *</label>
                                    <input type="email" name="e_ml" class="w-full px-4 py-3.5 bg-gray-50 border border-gray-200 rounded-xl text-gray-900 placeholder-gray-400 focus:bg-white focus:border-amber-400 focus:ring-2 focus:ring-amber-400/20 transition-all duration-200 text-base" placeholder="info@skydentdesigns.com" required>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Phone Number *</label>
                                    <input type="tel" name="pho_n" class="w-full px-4 py-3.5 bg-gray-50 border border-gray-200 rounded-xl text-gray-900 placeholder-gray-400 focus:bg-white focus:border-amber-400 focus:ring-2 focus:ring-amber-400/20 transition-all duration-200 text-base" placeholder="+91 00000 00000" required>
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Request Type *</label>
                                <select name="services_r" id="services" class="w-full px-4 py-3.5 bg-gray-50 border border-gray-200 rounded-xl text-gray-900 focus:bg-white focus:border-amber-400 focus:ring-2 focus:ring-amber-400/20 transition-all duration-200 text-base appearance-none cursor-pointer">
                                    <option disabled selected value="">Select your request</option>
                                    <option value="Get a Quote">Get a Quote</option>
                                    <option value="Schedule a Meeting">Schedule a Meeting</option>
                                    <option value="Try a Free Sample Design">Try a Free Sample Design</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Message</label>
                                <textarea name="message" rows="4" class="w-full px-4 py-3.5 bg-gray-50 border border-gray-200 rounded-xl text-gray-900 placeholder-gray-400 focus:bg-white focus:border-amber-400 focus:ring-2 focus:ring-amber-400/20 transition-all duration-200 text-base resize-none" placeholder="Tell us about your specific requirements..."></textarea>
                            </div>

                            <div class="pt-4">
                                <button id="form_sub" type="button" class="group inline-flex items-center justify-center px-8 py-4 bg-gray-900 hover:bg-gray-800 text-white font-semibold rounded-xl transition-all duration-300 shadow-lg hover:shadow-xl hover:-translate-y-0.5 w-full sm:w-auto text-base">
                                    <span>Send Request</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                    </svg>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 border-b border-yellow-400/30 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <img src="img/skydent logo.png" alt="skydent">
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-4 text-white">Skydent Design</h3>
                    <p class="text-white">Your extended dental lab team providing precision, reliability, and partnership.</p>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-4 text-white">Contact Us</h3>
                    <ul class="space-y-2">
                        <li class="flex items-center">
                            <i class="fas fa-map-marker-alt mr-2 text-white"></i>
                            <a href="https://maps.app.goo.gl/zEPGXghbGuBMQdATA" class="text-white">Noida, Uttar Pradesh, India</a>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-envelope mr-2 text-white"></i>
                            <span class="text-white">skydent@skydentdesigns.com</span>
                        </li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-4 text-white">Connect With Us</h3>
                    <div class="flex space-x-4 text-white">
                        <a href="https://www.facebook.com/profile.php?id=100089996433482" class="text-2xl text-white hover:text-blue-700">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href="https://www.instagram.com/skydentdesigns/" class="text-2xl text-white hover:text-blue-700">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://www.linkedin.com/services/page/40195933a4a8221979/" class="text-2xl text-white hover:text-blue-700">
                            <i class="fab fa-linkedin"></i>
                        </a>
                    </div>
                    <div class="mt-6">
                        <h4 class="font-bold mb-2 text-white">Payment Methods</h4>
                        <div class="flex items-center">
                            <i class="fab fa-cc-paypal text-3xl mr-2 text-white"></i>
                            <span class="text-white">PayPal Accepted</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="border-t border-blue-800 mt-8 pt-8 text-center text-white">
                <p>&copy; <?php echo date('Y'); ?> Skydent Design. All rights reserved.</p>
            </div>
        </div>
    </footer>
    <?php include('flotingwp.php'); ?>
</body>
<script>
    $(document).ready(function() {
        $('#services').change(function() {
            if ($(this).val() == 'Other') {
                $('#message').show();
            } else {
                $('#message').hide();
            }
        })

        $('#form_sub').click(function() {
            $(this).hide();
            $('#loader').show();
            $.ajax({
                url: "getCdata.php",
                type: "POST",
                data: $("#c_form").serialize(),
                success: function(resp) {
                    if (resp == 'You form submitted successfully!, our team will review your requirements and connect with you within a few hours.') {
                        $('#c_form')[0].reset();
                        $('#loader').hide();
                        $('#form_sub').show();
                        $('#status').show();
                        $('#status').addClass('bg-green-50 text-green-700')
                        $('#status_text').text(resp)
                    }
                },
                error: function(xhr, status, err) {
                    $('#c_form').reset();
                    $('#loader').hide();
                    $('#form_sub').show();
                    $('#status').show();
                    $('#status').addClass('bg-red-50 text-red-700')
                    $('#status_text').text(err)
                }
            })
        })

        $('#requestCall').on('click', function(e) {

            e.preventDefault(); // Prevent form submission if button is inside form

            const btn = $(this);
            const name = $('#full_name').val().trim();
            const phone = $('#phone').val().trim();

            if (name === '' || phone === '') {
                $("#statuscallrequest").text("Please fill in required fields.").addClass('text-red-600 py-4');
                return;
            }

            btn.hide();
            $('#loader').removeClass('hidden').addClass('flex');

            $.ajax({
                url: "requestCall.php",
                type: "POST",
                data: $("#requestCallForm").serialize(),
                success: function(resp) {

                    $('#loader').removeClass('flex').addClass('hidden');
                    btn.show();
                    $('#requestCallForm')[0].reset();

                    $("#statuscallrequest")
                        .removeClass('text-red-600')
                        .addClass('text-green-600 py-4')
                        .text(resp);
                },
                error: function(xhr, status, err) {

                    $('#loader').removeClass('flex').addClass('hidden');
                    btn.show();
                    $('#requestCallForm')[0].reset();

                    $("#statuscallrequest")
                        .removeClass('text-green-600')
                        .addClass('text-red-600 py-4')
                        .text("Something went wrong. Please try again.");
                }
            });

        });
    })
</script>

<script>
    const chatBtn = document.getElementById("chatBtn");
    const chatModal = document.getElementById("chatModal");
    const closeChat = document.getElementById("closeChat");
    const flotingwp = document.getElementById('flotingwp');

    flotingwp.addEventListener("click", () => {
        chatModal.classList.remove("hidden");
        chatModal.classList.add("flex");
        flotingwp.classList.add('hidden');
    })

    chatBtn.addEventListener("click", () => {
        chatModal.classList.remove("hidden");
        chatModal.classList.add("flex");
        flotingwp.classList.add('hidden');
    });

    closeChat.addEventListener("click", () => {
        chatModal.classList.add("hidden");
        chatModal.classList.remove("flex");
        flotingwp.classList.remove('hidden');
    });

    chatModal.addEventListener("click", (e) => {
        if (e.target === chatModal) {
            chatModal.classList.add("hidden");
            chatModal.classList.remove("flex");
            flotingwp.classList.remove('hidden');
        }
    });


    let socket;

    function connectWebSocket() {
        socket = new WebSocket("wss://yourdomain.com/ws");

        socket.onopen = function() {
            console.log("Connected to WebSocket server ✅");
        };

        socket.onmessage = function(event) {
            console.log("Received:", event.data);
            addMessageToChat(event.data, "server");
        };

        socket.onerror = function(error) {
            console.error("WebSocket error:", error);
        };

        socket.onclose = function() {
            console.log("WebSocket closed ❌");
        };
    }

    window.onload = connectWebSocket;


    function sendMessage() {
        const message = $('#messagebox').val();

        if (!message.trim()) return;

        if (socket && socket.readyState === WebSocket.OPEN) {
            socket.send(JSON.stringify({
                type: "chat",
                message: message
            }));

            addMessageToChat(message, "user");

            $('#messagebox').val("");
        } else {
            console.log("WebSocket not connected");
        }
    }

    function addMessageToChat(message, sender) {
        const chatBody = document.querySelector(".overflow-y-auto");

        const messageDiv = document.createElement("div");

        if (sender === "user") {
            messageDiv.className =
                "bg-yellow-400 text-black p-3 rounded-xl w-fit ml-auto";
        } else {
            messageDiv.className =
                "bg-gray-200 p-3 rounded-xl w-fit";
        }

        messageDiv.innerText = message;
        chatBody.appendChild(messageDiv);

        chatBody.scrollTop = chatBody.scrollHeight;
    }
</script>

</html>