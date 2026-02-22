<section class="bg-gradient-to-br from-blue-50 to-green-50 flex items-center justify-center" id="flotingwp">
    <!-- WhatsApp Button -->
    <div class="fixed bottom-2 right-6 z-50">
        <button class="whatsapp-float md:w-20 md:h-20 w-12 h-12 bg-green-500 hover:bg-green-600 rounded-full flex items-center justify-center shadow-lg transition-all duration-300 group">
            <i class="fab fa-whatsapp text-white text-2xl md:text-5xl"></i>
            <span class="absolute right-full top-1/2 transform -translate-y-1/2 mr-3 bg-gray-900 text-white text-lg font-medium px-3 py-2 rounded-lg shadow-md transition-opacity duration-300 whitespace-nowrap">
                How may I help you?
            </span>
        </button>
    </div>
</section>

<style>
    @keyframes float-up-down {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-10px);
        }
    }

    @keyframes glow {

        0%,
        100% {
            box-shadow: 0 0 10px rgba(37, 211, 102, 0.6);
        }

        50% {
            box-shadow: 0 0 25px rgba(37, 211, 102, 0.9), 0 0 35px rgba(37, 211, 102, 0.6);
        }
    }

    @keyframes pulse-glow {
        0% {
            transform: scale(1);
            box-shadow: 0 0 0 0 rgba(37, 211, 102, 0.7);
        }

        70% {
            transform: scale(1.05);
            box-shadow: 0 0 0 15px rgba(37, 211, 102, 0);
        }

        100% {
            transform: scale(1);
            box-shadow: 0 0 0 0 rgba(37, 211, 102, 0);
        }
    }


    .whatsapp-float {
        animation: float-up-down 3s ease-in-out infinite;
    }

    .whatsapp-glow {
        animation: glow 3s ease-in-out infinite, pulse-glow 3s ease-in-out infinite;
    }

    /* Reduced motion for accessibility */
    @media (prefers-reduced-motion: reduce) {
        .whatsapp-float {
            animation: none;
        }
    }
</style>