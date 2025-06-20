<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Innovative Gold Rates Display</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&family=Inter:wght@300;400;500;600&display=swap');

        .gold-rates-container {
            background: linear-gradient(135deg, #1a0826 0%, #2d1b69 25%, #b53fc2 50%, #ff6b6b 75%, #feca57 100%);
            background-size: 400% 400%;
            animation: gradientShift 8s ease-in-out infinite;
            position: relative;
            overflow: hidden;
            border-bottom: 3px solid rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
        }

        @keyframes gradientShift {

            0%,
            100% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }
        }

        .gold-particles {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            overflow: hidden;
        }

        .particle {
            position: absolute;
            width: 4px;
            height: 4px;
            background: radial-gradient(circle, #ffd700, #ffed4e);
            border-radius: 50%;
            animation: floatParticles 6s linear infinite;
            opacity: 0.7;
        }

        @keyframes floatParticles {
            0% {
                transform: translateX(-10px) translateY(0px) rotate(0deg);
                opacity: 0;
            }

            10% {
                opacity: 1;
            }

            90% {
                opacity: 1;
            }

            100% {
                transform: translateX(calc(100vw + 10px)) translateY(-20px) rotate(360deg);
                opacity: 0;
            }
        }

        .rates-header {
            font-family: 'Orbitron', monospace;
            font-weight: 700;
            color: #fff;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 8px 0;
        }

        .pulse-icon {
            animation: pulseGlow 2s ease-in-out infinite;
            filter: drop-shadow(0 0 8px #ffd700);
        }

        @keyframes pulseGlow {

            0%,
            100% {
                transform: scale(1);
                filter: drop-shadow(0 0 8px #ffd700);
            }

            50% {
                transform: scale(1.1);
                filter: drop-shadow(0 0 15px #ffd700);
            }
        }

        .rates-scroll {
            font-family: 'Inter', sans-serif;
            font-weight: 500;
            color: #fff;
            white-space: nowrap;
            animation: modernScroll 25s linear infinite;
            display: flex;
            align-items: center;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
        }

        @keyframes modernScroll {
            0% {
                transform: translateX(100%);
            }

            100% {
                transform: translateX(-100%);
            }
        }

        .rate-item {
            display: inline-flex;
            align-items: center;
            margin-right: 40px;
            padding: 6px 16px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 25px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(5px);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .rate-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s;
        }

        .rate-item:hover::before {
            left: 100%;
        }

        .rate-label {
            font-weight: 600;
            margin-right: 8px;
            color: #ffd700;
            font-size: 0.95rem;
        }

        .rate-value {
            font-family: 'Orbitron', monospace;
            font-weight: 700;
            font-size: 1.1rem;
            color: #fff;
            text-shadow: 0 0 10px rgba(255, 215, 0, 0.5);
        }

        .trend-indicator {
            margin-left: 6px;
            font-size: 0.8rem;
            animation: bounce 1s infinite;
        }

        @keyframes bounce {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-3px);
            }
        }

        .update-badge {
            background: rgba(255, 255, 255, 0.15);
            color: #fff;
            padding: 4px 12px;
            border-radius: 15px;
            font-size: 0.85rem;
            font-weight: 500;
            border: 1px solid rgba(255, 255, 255, 0.3);
            margin-left: 30px;
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }

        .live-dot {
            width: 8px;
            height: 8px;
            background: #00ff88;
            border-radius: 50%;
            animation: livePulse 1.5s ease-in-out infinite;
            box-shadow: 0 0 10px #00ff88;
        }

        @keyframes livePulse {

            0%,
            100% {
                opacity: 1;
                transform: scale(1);
            }

            50% {
                opacity: 0.5;
                transform: scale(1.2);
            }
        }

        .scroll-container {
            overflow: hidden;
            position: relative;
            flex-grow: 1;
            height: 50px;
            display: flex;
            align-items: center;
        }

        /* Mobile Responsive */
        @media (max-width: 768px) {
            .rates-header {
                font-size: 0.9rem;
                gap: 8px;
            }

            .rate-item {
                margin-right: 25px;
                padding: 4px 12px;
            }

            .rate-label {
                font-size: 0.85rem;
            }

            .rate-value {
                font-size: 0.95rem;
            }

            .update-badge {
                font-size: 0.75rem;
                padding: 3px 8px;
                margin-left: 20px;
            }
        }

        @media (max-width: 576px) {
            .gold-rates-container {
                padding: 8px;
            }

            .rates-header {
                font-size: 0.8rem;
                flex-direction: column;
                align-items: flex-start;
                gap: 4px;
            }

            .scroll-container {
                height: 40px;
            }

            .rate-item {
                margin-right: 20px;
                padding: 3px 10px;
            }

            .rates-scroll {
                animation-duration: 30s;
            }
        }

        /* Dark mode enhancement */
        @media (prefers-color-scheme: dark) {
            .gold-rates-container {
                border-bottom-color: rgba(255, 255, 255, 0.3);
            }
        }

        /* High contrast mode */
        @media (prefers-contrast: high) {
            .rate-item {
                background: rgba(255, 255, 255, 0.2);
                border: 2px solid rgba(255, 255, 255, 0.4);
            }
        }

        /* Reduced motion */
        @media (prefers-reduced-motion: reduce) {
            .gold-rates-container {
                animation: none;
            }

            .rates-scroll {
                animation-duration: 60s;
            }

            .particle {
                animation: none;
            }

            .pulse-icon,
            .trend-indicator,
            .live-dot {
                animation: none;
            }
        }
    </style>
</head>

<body>
    <div class="gold-rates-container">
        <!-- Floating Gold Particles -->
        <div class="gold-particles" id="particles"></div>

        <div class="container-fluid d-flex align-items-center py-2">
            <div class="rates-header">
                <i class="bi bi-gem pulse-icon" style="font-size: 1.4rem; color: #ffd700;"></i>
                <span>LIVE GOLD RATES</span>
                <div class="live-dot"></div>
            </div>

            <div class="scroll-container">
                <div class="rates-scroll">
                    <div class="rate-item">
                        <span class="rate-label">24K Gold</span>
                        <span class="rate-value">₹6,120/gm</span>
                        <span class="trend-indicator" style="color: #00ff88;">↗ +2.1%</span>
                    </div>

                    <div class="rate-item">
                        <span class="rate-label">22K Gold</span>
                        <span class="rate-value">₹5,610/gm</span>
                        <span class="trend-indicator" style="color: #00ff88;">↗ +1.8%</span>
                    </div>

                    <div class="rate-item">
                        <span class="rate-label">18K Gold</span>
                        <span class="rate-value">₹4,590/gm</span>
                        <span class="trend-indicator" style="color: #ff6b6b;">↘ -0.5%</span>
                    </div>

                    <div class="rate-item">
                        <span class="rate-label">Silver</span>
                        <span class="rate-value">₹75/gm</span>
                        <span class="trend-indicator" style="color: #00ff88;">↗ +3.2%</span>
                    </div>

                    <div class="rate-item">
                        <span class="rate-label">Platinum</span>
                        <span class="rate-value">₹2,850/gm</span>
                        <span class="trend-indicator" style="color: #feca57;">→ 0.0%</span>
                    </div>

                    <div class="update-badge">
                        <i class="bi bi-clock"></i>
                        Updated: 12 June 2025, 3:45 PM IST
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Create floating particles
        function createParticles() {
            const particlesContainer = document.getElementById('particles');

            function addParticle() {
                const particle = document.createElement('div');
                particle.className = 'particle';
                particle.style.top = Math.random() * 100 + '%';
                particle.style.animationDelay = Math.random() * 6 + 's';
                particle.style.animationDuration = (4 + Math.random() * 4) + 's';
                particlesContainer.appendChild(particle);

                // Remove particle after animation
                setTimeout(() => {
                    if (particle.parentNode) {
                        particle.parentNode.removeChild(particle);
                    }
                }, 8000);
            }

            // Create particles at intervals
            setInterval(addParticle, 800);

            // Initial particles
            for (let i = 0; i < 5; i++) {
                setTimeout(addParticle, i * 200);
            }
        }

        // Simulate real-time updates
        function simulateRateUpdates() {
            const rateValues = document.querySelectorAll('.rate-value');
            const trendIndicators = document.querySelectorAll('.trend-indicator');

            setInterval(() => {
                rateValues.forEach((element, index) => {
                    // Add subtle glow effect on update
                    element.style.textShadow = '0 0 20px rgba(255, 215, 0, 0.8)';
                    setTimeout(() => {
                        element.style.textShadow = '0 0 10px rgba(255, 215, 0, 0.5)';
                    }, 1000);
                });
            }, 15000); // Update every 15 seconds
        }

        // Initialize
        document.addEventListener('DOMContentLoaded', function() {
            createParticles();
            simulateRateUpdates();
        });

        // Pause animations when tab is not visible (performance optimization)
        document.addEventListener('visibilitychange', function() {
            const container = document.querySelector('.gold-rates-container');
            if (document.hidden) {
                container.style.animationPlayState = 'paused';
            } else {
                container.style.animationPlayState = 'running';
            }
        });
    </script>
</body>

</html>