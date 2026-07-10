<section class="relative h-screen overflow-hidden
    bg-gradient-to-b
    from-sky-500
    via-sky-400
    to-sky-300">

    <!-- Ilumination center -->
    <div class="absolute inset-0
        bg-[radial-gradient(circle_at_center,rgba(255,255,255,0.30)_0%,transparent_70%)]
        pointer-events-none">
    </div>

    <!-- Stars -->
    <div class="absolute inset-0 hero-points opacity-20"></div>
    <div class="absolute inset-0 hero-stars opacity-60"></div>
    <div class="absolute inset-0 hero-globo-red opacity-80"></div>
    <div class="absolute inset-0 hero-globo-blue opacity-80"></div>
    <div class="absolute inset-0 hero-globo-yellow opacity-80"></div>
    <div class="absolute inset-0 hero-globo-green opacity-80"></div>

    <!-- Content -->
    <div class="relative z-10 flex items-center justify-center h-screen">

        <!-- Plim Plim -->
        <div class="w-[35%]">
            <img
            src="{{ asset('storage/themes/plimplim/images/plimplin-hero.png') }}"
            alt="Plim Plim"
            class="w-[100%] h-auto">
        </div>
        

        <!-- main content -->
        <div class="flex flex-col items-center text-center justify-center w-[40%]">

            <!-- Icon -->
            <img src="{{ asset('storage/themes/plimplim/images/logo-hero.png') }}"
                alt="Plim Plim"
                class="w-[6rem]">

            <!-- Banner -->
            <div class="relative lg:w-full md:w-full w-[200%] max-w-[280px] sm:max-w-[400px] md:max-w-[560px] h-20 md:h-28 mt-2">

                <img
                    src="{{ asset('storage/themes/plimplim/images/banner-hero.png') }}"
                    class="w-full h-full object-cover"
                    alt="Banner">

                <!-- 3. Texto encima -->
                <span class="absolute inset-0
                            flex items-center justify-center
                            -translate-y-4
                            text-white
                            font-black
                            text-xl
                            uppercase
                            tracking-wide
                            drop-shadow-[0_2px_2px_rgba(0,0,0,.25)]
                            md:text-2xl lg:text-4xl
                            max-w-full break-words
                            md:h-[90%] lg:h-[70%] h-100">
                    ¡ESTÁS INVITADO!
                </span>

            </div>


            <!-- Main text content -->
            <div class="w-full mt-4">
                <!-- Subtitle -->
                <p class="text-blue-900 font-black text-xl sm:text-2xl md:text-4xl uppercase max-w-full break-words tracking-wide">
                    A MI CUMPLEAÑOS
                </p>

                <div class="w-[100%]">
                    <!-- name -->
                    <h1 class="relative font-sans text-4xl sm:text-6xl md:text-7xl lg:text-8xl font-black tracking-wider uppercase select-none 
                    filter drop-shadow-[0_4px_0_#E43B30] md:drop-shadow-[0_10px_0_#E43B30] 
                    max-w-full break-words mt-1 flex items-center justify-center leading-none h-12 sm:h-24">
                        
                        <!-- bg white -->
                        <span class="absolute inset-0 flex items-center justify-center text-transparent font-black leading-none
                                    [-webkit-text-stroke:6px_white] [text-stroke:6px_white]
                                    sm:[-webkit-text-stroke:12px_white] sm:[text-stroke:12px_white]
                                    md:[-webkit-text-stroke:24px_white] md:[text-stroke:24px_white]">
                            Antonella
                        </span>
                        
                        <!-- bg yellow -->
                        <span class="relative text-[#FFD126] font-black leading-none z-10">
                            Antonella
                        </span>
                    </h1>
                </div>
                
            </div>

            <!-- Separator -->
            <div class="flex items-center gap-4 mt-6 w-full justify-center">

                <div class="w-20 md:w-40 h-1 bg-blue-500 rounded-full"></div>

                <img src="{{ asset('storage/themes/plimplim/images/stars_red.svg') }}"
                    class="w-6 md:w-8">

                <div class="w-20 md:w-40 h-1 bg-blue-500 rounded-full"></div>

            </div>

            <!-- Message -->

            <p class="mt-4 md:mt-6 text-blue-900 text-lg sm:text-2xl md:text-4xl font-bold leading-tight max-w-full break-words">
                ¡Ven a celebrar<br class="hidden sm:inline"> un día lleno de diversión!
            </p>

        </div>

        <!-- Acuarela -->
        <div class="w-[25%] self-end mb-12">
            <img
                src="{{ asset('storage/themes/plimplim/images/acuarela-hero.png') }}"
                alt="Acuarela"
                class="w-[100%] h-auto">
         </div>

    </div>

    <!-- Nube -->
    <svg class="absolute bottom-0 left-0 w-full"
         viewBox="0 0 1440 160"
         preserveAspectRatio="none">

        <path fill="#FFFF"
              d="
              M0,90
              C80,20 160,150 240,90
              C320,30 400,140 480,90
              C560,40 640,140 720,90
              C800,30 880,140 960,90
              C1040,20 1120,150 1200,90
              C1280,30 1360,140 1440,90
              L1440,160
              L0,160
              Z">
        </path>
    </svg>

</section>