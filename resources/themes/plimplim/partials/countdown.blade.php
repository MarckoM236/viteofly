<section class="relative h-[35vh] overflow-hidden
    bg-gradient-to-b
    from-[#FEE685]
    via-[#FFEFA6]
    to-[#FFF5C7]">

    <div class="relative z-10 flex items-center justify-center h-[100%]">

        <!-- Mailyn -->
        <div class="w-[25%]">
            <img
            src="{{ asset('storage/themes/plimplim/images/mailyn-countdown.png') }}"
            alt="Plim Plim"
            class="w-[80%] h-auto">
        </div>

        <!-- Countdown -->
        <div id="countdown" data-date="{{ $invitation['date_event'] }}"></div>
        <div class="w-[50%] flex flex-col items-center text-center justify-center">
            <h3 class="text-4xl font-extrabold text-blue-800 leading-none m-2">Faltan</h3>
            <div class="grid grid-cols-4 gap-3">
    
                <div class="bg-orange-50 rounded-xl shadow-sm border border-orange-100 p-3 flex flex-col items-center">
                    <i class="fas fa-gift text-2xl text-blue-500 mb-1"></i>
                    <span class="text-2xl md:text-4xl lg:text-4xl font-extrabold text-red-600 leading-none" id="countdown-days">0</span>
                    <span class="text-xs md:text-2xs lg:text-2xs font-bold uppercase text-blue-700 tracking-wide truncate max-w-full">
                        Días
                    </span>
                </div>

                <div class="bg-orange-50 rounded-xl shadow-sm border border-orange-100 p-3 flex flex-col items-center">
                    <i class="fas fa-star text-2xl text-yellow-400 mb-1"></i>
                    <span class="text-2xl md:text-4xl lg:text-4xl font-extrabold text-blue-600 leading-none" id="countdown-hours">0</span>
                    <span class="text-xs md:text-2xs lg:text-2xs font-bold uppercase text-blue-700 tracking-wide truncate max-w-full">
                        Horas
                    </span>
                </div>

                <div class="bg-orange-50 rounded-xl shadow-sm border border-orange-100 p-3 flex flex-col items-center">
                    <i class="fas fa-heart text-2xl text-red-500 mb-1"></i>
                    <span class="text-2xl md:text-4xl lg:text-4xl font-extrabold text-red-600 leading-none" id="countdown-minutes">0</span>
                    <span class="text-xs md:text-2xs lg:text-2xs font-bold uppercase text-blue-700 tracking-wide truncate max-w-full">
                        Minutos
                    </span>
                </div>

                <div class="bg-orange-50 rounded-xl shadow-sm border border-orange-100 p-3 flex flex-col items-center">
                    <i class="fas fa-music text-2xl text-blue-400 mb-1"></i>
                    <span class="text-2xl md:text-4xl lg:text-4xl font-extrabold text-blue-600 leading-none" id="countdown-seconds">0</span>
                    <span class="text-xs md:text-2xs lg:text-2xs font-bold uppercase text-blue-700 tracking-wide truncate max-w-full">
                        Segundos
                    </span>
                </div>

            </div>
        </div>

        <!-- Bam -->
        <div class="w-[25%]">
            <img
            src="{{ asset('storage/themes/plimplim/images/bam-countdown.png') }}"
            alt="Plim Plim"
            class="w-[80%] h-auto">
        </div>
    </div>
    
    
</section> 