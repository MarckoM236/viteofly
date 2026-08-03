<section class="relative h-[60vh] overflow-hidden
    bg-gradient-to-b
    from-sky-600
    via-sky-500
    to-sky-400">

    <!-- Ilumination center -->
    <div class="absolute inset-0
        bg-[radial-gradient(circle_at_center,rgba(255,255,255,0.30)_0%,transparent_70%)]
        pointer-events-none">
    </div>

    <div class="relative z-10 flex items-center justify-start h-[100%] m-1 flex-col md:flex-row lg:flex:row
    md:justify-between lg:justify-between">

        <div class="w-[80%] h-auto flex p-1 md:w-[40%]  lg:w-[40%] justify-center">
            <img
            src="{{ asset('storage/themes/plimplim/images/plimplim-footer.png') }}"
            alt="Plim Plim"
            class="w-[20%] h-auto md:w-[50%] lg:w-[50%]">
            
            <div class="flex flex-col items-center justify-center w-[40%]">
                <p class="text-1xl font-extrabold text-blue-800 leading-none m-1">
                    ¡Confirma tu asistencia!
                </p>
                <p class="text-1xs text-blue-800 leading-none m-1">
                    {{$invitation['message_hero']}}
                </p>
            </div>
            
        </div>

        <!-- confirm -->
        <div class="w-[80%] h-auto flex justify-end p1 md:w-[60%]  lg:w-[60%]">
            <div class="bg-white rounded-3xl p-2 shadow-md max-w-sm w-full border border-gray-100/50 flex flex-col gap-2 relative mx-auto">
                <form action="{{ route('confirmation.store', $invitation['id']) }}" class="flex flex-col gap-2" method="POST" id="form-confirmation">
                    @csrf
                    <!-- INPUT 1: Name -->
                    <div class="flex items-center gap-3 w-full">
                        <!-- User icon -->
                        <div class="w-4 flex justify-center text-blue-600 text-1xl">
                            <i class="fas fa-user not-italic"></i>
                        </div>
                        <!-- Text field -->
                        <input type="text" 
                            placeholder="Nombre del invitado" 
                            class="w-full px-4 py-2 border border-gray-200 rounded-full text-sm font-medium placeholder-gray-400 focus:outline-none focus:border-blue-500 shadow-[inset_0_2px_4px_rgba(0,0,0,0.03)] bg-gray-50/30"
                            name="name">
                    </div>

                    <!-- INPUT 2: CUÁNTOS ASISTIRÁN -->
                    <div class="flex items-center gap-3 w-full">
                        <!-- Users icon -->
                        <div class="w-4 flex justify-center text-blue-600 text-1xl">
                            <i class="fas fa-users not-italic"></i>
                        </div>
                        <!-- Number field-->
                        <input type="number" 
                            placeholder="¿Cuántos asistirán?" 
                            class="w-full px-4 py-2 border border-gray-200 rounded-full text-sm font-medium placeholder-gray-400 focus:outline-none focus:border-blue-500 shadow-[inset_0_2px_4px_rgba(0,0,0,0.03)] bg-gray-50/30"
                            name="attendees">
                    </div>

                    <!-- INPUT 3: Optional message -->
                    <div class="flex items-center gap-3 w-full">
                        <!-- Book icon -->
                        <div class="w-4 flex justify-center text-blue-600 text-1xl">
                            <i class="fas fa-comment-alt-check not-italic"></i>
                        </div>
                        <!-- Text field -->
                        <input type="text" 
                            placeholder="Escribe tu mensaje (opcional)" 
                            class="w-full px-4 py-2 border border-gray-200 rounded-full text-sm font-medium placeholder-gray-400 focus:outline-none focus:border-blue-500 shadow-[inset_0_2px_4px_rgba(0,0,0,0.03)] bg-gray-50/30"
                            name="message">
                    </div>

                    <!-- Button -->
                    <div class="flex items-center justify-between gap-4 mt-2 w-full">
                        
                        <!-- btn send -->
                        <button type="submit" 
                                class="flex-1 bg-gradient-to-r from-red-500 to-red-600 hover:from-red-600 hover:to-red-700 text-white font-black text-center justify-center uppercase tracking-wide py-2 px-4 rounded-full shadow-md text-base transition-transform duration-150 active:scale-95">
                            Confirmar
                        </button>

                        <!-- Icon -->
                        <div class="flex-shrink-0 relative w-12 h-12 flex items-center justify-center bg-blue-600 rounded-full border-2 border-yellow-400 shadow-md">
                            <!-- heart -->
                            <i class="fas fa-heart text-red-500 text-xl"></i>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</section> 