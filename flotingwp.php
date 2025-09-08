<section class="flex items-center justify-center">
    <!-- WhatsApp Button -->
    <div class="fixed bottom-6 right-6 z-50">
        <a href="https://wa.me/+918810468697" id="solicalWp" class="w-14 h-14 md:w-16 md:h-16 bg-green-500 hover:bg-green-600 rounded-full flex items-center justify-center shadow-lg transition-all duration-300 transform hover:scale-110 whatsapp-float-glow ">
            <i class="fab fa-whatsapp text-white text-2xl md:text-3xl"></i>
        </a>
    </div>
</section>

<style>
    @keyframes float-left-right {

        0%,
        100% {
            transform: translateX(0);
        }

        50% {
            transform: translateX(10px);
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

    @keyframes multi-float {
        0% {
            transform: translate(0, 0);
        }

        25% {
            transform: translate(8px, -12px);
        }

        50% {
            transform: translate(0, -20px);
        }

        75% {
            transform: translate(-8px, -12px);
        }

        100% {
            transform: translate(0, 0);
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

    @keyframes shake {

        0%,
        100% {
            transform: translateX(0) rotate(0);
        }

        10%,
        30%,
        50%,
        70%,
        90% {
            transform: translateX(-5px) rotate(-5deg);
        }

        20%,
        40%,
        60%,
        80% {
            transform: translateX(5px) rotate(5deg);
        }
    }

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
            box-shadow: 0 0 5px #25d366, 0 0 10px #25d366;
        }

        50% {
            box-shadow: 0 0 20px #25d366, 0 0 30px #25d366;
        }
    }

    .whatsapp-float-updown {
        animation: float-up-down 3s ease-in-out infinite;
    }

    .whatsapp-float-leftright {
        animation: float-left-right 3s ease-in-out infinite;
    }

    .whatsapp-float-glow {
        animation: multi-float 4s ease-in-out infinite, pulse-glow 2s infinite;
    }

    .whatsapp-shake-glow {
        animation: shake 1s ease-in-out infinite, glow 2s ease-in-out infinite;
    }
</style>

<script>
    // Add animation class based on time of day
    document.addEventListener('DOMContentLoaded', function() {
        const whatsappButton = document.querySelector('#solicalWp');

        // Remove any existing animation classes
        whatsappButton.classList.remove(
            'whatsapp-float-updown',
            'whatsapp-float-leftright',
            'whatsapp-float-glow',
            'whatsapp-shake-glow'
        );

        // Add different animations based on time of day
        const hour = new Date().getHours();

        if (hour >= 6 && hour < 12) {
            // Morning - up-down float with glow
            whatsappButton.classList.add('whatsapp-float-updown');
        } else if (hour >= 12 && hour < 18) {
            // Afternoon - left-right float with glow
            whatsappButton.classList.add('whatsapp-float-leftright');
        } else if (hour >= 18 && hour < 24) {
            // Evening - multi-directional float with pulse glow
            whatsappButton.classList.add('whatsapp-float-glow');
        } else {
            // Night - shake with glow
            whatsappButton.classList.add('whatsapp-shake-glow');
        }

        // Change animation on hover
        whatsappButton.addEventListener('mouseenter', function() {
            this.style.animationPlayState = 'paused';
        });

        whatsappButton.addEventListener('mouseleave', function() {
            this.style.animationPlayState = 'running';
        });

        // Cycle through animations every 10 seconds (optional)
        setInterval(() => {
            const animations = [
                'whatsapp-float-updown',
                'whatsapp-float-leftright',
                'whatsapp-float-glow',
                'whatsapp-shake-glow'
            ];

            // Remove current animation
            animations.forEach(anim => whatsappButton.classList.remove(anim));

            // Select a random animation
            const randomAnim = animations[Math.floor(Math.random() * animations.length)];
            whatsappButton.classList.add(randomAnim);
        }, 10000);
    });
</script>
