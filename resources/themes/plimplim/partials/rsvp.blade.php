<section class="relative h-[55vh] overflow-hidden
    bg-gradient-to-b
    from-sky-500
    via-sky-400
    to-sky-300">

    <!-- Nube -->
    <svg class="absolute top-0 left-0 w-full rotate-180"
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

    <!-- Ilumination center -->
    <div class="absolute inset-0
        bg-[radial-gradient(circle_at_center,rgba(255,255,255,0.30)_0%,transparent_70%)]
        pointer-events-none">
    </div>

    <!-- data -->
    <div id="rsvp" data-date="{{ $invitation['date_event'] }}"></div>
    <div id="location" data-location="{{ $invitation['ubication_event'] }}"></div>
    <!-- end data -->

    <div class="relative z-10 flex items-end justify-between h-[100%] pb-1">

        <div class="w-[50%] h-auto">
            
            <div class="flex flex-col gap-2 p-2 w-full max-w-sm mx-auto">
                <h3 class="text-2xl font-extrabold text-blue-800 leading-none m-1">DÓNDE Y CÚANDO?</h3>
    
                <div class="flex flex-col gap-2 w-full text-left">
                    
                    <!-- Date -->
                    <div class="flex items-center gap-4">
                        <!-- Calendar icon -->
                        <div class="w-5 h-5 flex items-center text-blue-600 text-2xl">
                            <i class="fas fa-calendar-alt not-italic"></i>
                        </div>
                        <!-- Text -->
                        <div class="flex flex-col">
                            <span class="text-blue-900 font-extrabold text-base leading-tight" id="rsvp-weekday">Sábado</span>
                            <span class="text-blue-900 font-bold text-sm leading-tight text-opacity-80" id="rsvp-date">20 de Julio 2024</span>
                        </div>
                    </div>

                    <!-- FILA 2: HORA -->
                    <div class="flex items-center gap-4">
                        <!-- Icono de Reloj -->
                        <div class="w-5 h-5 flex items-center justify-center text-red-500 text-2xl">
                            <i class="fas fa-clock not-italic"></i>
                        </div>
                        <!-- Texto -->
                        <div>
                            <span class="text-blue-900 font-extrabold text-base" id="rsvp-time">3:00 PM</span>
                        </div>
                    </div>

                    <!-- FILA 3: LUGAR / DIRECCIÓN -->
                    <div class="flex items-center gap-4">
                        <!-- Icono de Ubicación (Alineado arriba con items-start) -->
                        <div class="w-5 h-5 flex items-center justify-center text-red-500 text-2xl mt-1">
                            <i class="fas fa-map-marker-alt not-italic"></i>
                        </div>
                        <!-- Textos de dirección en bloque vertical -->
                        <div class="flex flex-col">
                            <span class="text-blue-900 font-extrabold text-base leading-tight">{{$invitation['place_event']}}</span>
                            <span class="text-blue-900 font-bold text-sm leading-tight text-opacity-80 mt-1">{{$invitation['address_event']}}</span>
                        </div>
                    </div>

                </div>

                <!-- Btn -->
                <a href="#" class="flex items-center justify-center gap-2 w-[70%] bg-blue-600 hover:bg-blue-700 text-white font-black uppercase text-sm p-2 rounded-full shadow-md tracking-wider transition-colors duration-200 mt-1" id="open-modal-rsvp">
                    <i class="fas fa-map-marker-alt text-xs not-italic"></i>
                    Ver en mapa
                </a>

            </div>
        </div>

        <!-- Friends -->
        <div class="w-[50%] h-auto flex justify-end">
            <img
            src="{{ asset('storage/themes/plimplim/images/friends-rsvp.png') }}"
            alt="Plim Plim"
            class="w-[100%] lg:w-[80%] h-auto ">
        </div>
    </div>
@include('themes::components.modal',['id' => 'modal-map',
    'title' => 'Ubicacion',])
</section>