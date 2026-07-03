<x-guest-layout>
    <!-- hero -->
    <section class="relative min-h-screen">

        <!-- Background image -->
        <div class="absolute inset-0">
            <img
                src="{{ asset('images/hero.png') }}"
                alt="Invitación digital"
                class="w-full h-full object-cover">
        </div>

        <!-- darken image -->
        <div class="absolute inset-0 bg-black/40"></div>

        <!-- Content -->
        <div class="relative z-10 max-w-7xl mx-auto px-6 min-h-screen flex items-center">
            <div class="max-w-2xl text-white">
                <div class="flex items-center gap-2 mb-4">
                    <img
                    src="{{ asset('images/logo_only.png') }}"
                    alt="ViteoFly"
                    class="h-12">
                    <p class="text-2xl font-bold">Viteo<span class="bg-gradient-to-r from-blue-500 to-violet-600 bg-clip-text text-transparent font-bold text-2xl">Fly</span></p>
                </div>
                

                <h1 class="text-6xl font-bold leading-tight">
                    Cada gran celebración comienza con una gran invitación.
                </h1>

                <p class="mt-6 text-lg">
                    Diseña invitaciones digitales modernas con confirmación de asistencia,
                    ubicación, cuenta regresiva, galería de fotos y mucho más.
                </p>

                <div class="mt-8 flex gap-4">
                    <a href="{{ route('register') }}"
                    class="inline-flex items-center justify-center px-6 py-3 rounded-lg
                    bg-gradient-to-r from-blue-500 to-violet-600
                    text-white font-semibold
                    shadow-lg shadow-violet-500/25
                    hover:from-blue-600 hover:to-violet-700
                    hover:shadow-xl hover:scale-105
                    transition-all duration-300">

                        Comenzar

                    </a>

                    <a href="#"
                    class="inline-flex items-center justify-center px-6 py-3 rounded-lg
                    bg-blue-500
                    text-white font-semibold
                    shadow-lg shadow-blue-500/20
                    hover:bg-blue-600
                    hover:shadow-xl
                    hover:scale-105
                    transition-all duration-300">

                        Ver ejemplos

                    </a>
                </div>
            </div>
        </div>

    </section>
    <!-- end hero -->

    <!-- features -->
    <section class="py-24">
        <div class="max-w-7xl mx-auto px-6">
            <!-- Section head -->
            <div class="text-center max-w-3xl mx-auto">

                <h2 class="text-4xl lg:text-5xl font-bold text-white">
                    Todo lo que necesitas para una
                    <span class="bg-gradient-to-r from-blue-500 to-violet-600 bg-clip-text text-transparent">
                        invitación inolvidable
                    </span>
                </h2>

                <p class="mt-6 text-lg text-gray-300">
                    Diseña, comparte y gestiona cada detalle de tu evento desde una
                    única invitación digital moderna y elegante.
                </p>

            </div>

            <!-- Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-16">

                <!-- Card 1 -->
                <div
                    class="flex flex-col items-center text-center
                    bg-gradient-to-b from-white/5 to-white/[0.02]
                    border border-white/10
                    rounded-2xl
                    p-8
                    hover:-translate-y-2
                    hover:border-violet-500
                    hover:shadow-xl hover:shadow-violet-500/10
                    transition-all duration-300">

                    <div
                        class="w-16 h-16 rounded-full
                        bg-gradient-to-r from-blue-500 to-violet-600
                        flex items-center justify-center
                        text-3xl">

                        <i class="fas fa-palette text-white"></i>
                    </div>

                    <h3 class="mt-6 text-2xl font-semibold text-white">
                        Diseños personalizables
                    </h3>

                    <p class="mt-4 text-gray-300 leading-7">
                        Elige una plantilla y personalízala para crear una invitación
                        única que refleje el estilo de tu celebración.
                    </p>
                </div>

                <!-- Card 2 -->
                <div
                    class="flex flex-col items-center text-center
                    bg-gradient-to-b from-white/5 to-white/[0.02]
                    border border-white/10
                    rounded-2xl
                    p-8
                    hover:-translate-y-2
                    hover:border-violet-500
                    hover:shadow-xl hover:shadow-violet-500/10
                    transition-all duration-300">

                    <div
                        class="w-16 h-16 rounded-full
                        bg-gradient-to-r from-blue-500 to-violet-600
                        flex items-center justify-center
                        text-3xl">

                        <i class="fas fa-map-pin text-white"></i>
                    </div>

                    <h3 class="mt-6 text-2xl font-semibold text-white">
                        Toda la información del evento
                    </h3>

                    <p class="mt-4 text-gray-300 leading-7">
                        Comparte ubicación, fecha, horario, cuenta regresiva y todos
                        los detalles importantes en un solo lugar.
                    </p>
                </div>

                <!-- Card 3 -->
                <div
                    class="flex flex-col items-center text-center
                    bg-gradient-to-b from-white/5 to-white/[0.02]
                    border border-white/10
                    rounded-2xl
                    p-8
                    hover:-translate-y-2
                    hover:border-violet-500
                    hover:shadow-xl hover:shadow-violet-500/10
                    transition-all duration-300">

                    <div
                        class="w-16 h-16 rounded-full
                        bg-gradient-to-r from-blue-500 to-violet-600
                        flex items-center justify-center
                        text-3xl">

                        <i class="far fa-check-circle text-white"></i>
                    </div>

                    <h3 class="mt-6 text-2xl font-semibold text-white">
                        Confirmación de asistencia
                    </h3>

                    <p class="mt-4 text-gray-300 leading-7">
                        Permite que tus invitados confirmen su asistencia fácilmente
                        y mantén el control de tu evento en tiempo real.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- end features -->

    <!-- CTA -->
    <section class="py-24">
        <div class="max-w-5xl mx-auto px-6">

        <div
            class="rounded-3xl
            bg-gradient-to-r from-blue-500/10 via-violet-500/10 to-blue-500/10
            border border-violet-500/20
            p-12 lg:p-16
            text-center">

            <h2 class="text-4xl lg:text-5xl font-bold text-white">
                ¿Listo para crear una invitación que todos recordarán?
            </h2>

            <p class="mt-6 text-lg text-gray-300 max-w-3xl mx-auto">
                Diseña una invitación elegante, compártela con un solo enlace y
                gestiona la asistencia de tus invitados desde cualquier dispositivo.
            </p>

            <div class="mt-10 flex flex-col sm:flex-row justify-center gap-4">

                <a href="{{ route('register') }}"
                    class="inline-flex items-center justify-center
                    px-8 py-4 rounded-xl
                    bg-gradient-to-r from-blue-500 to-violet-600
                    text-white font-semibold
                    hover:scale-105
                    transition-all duration-300">

                    Crear mi invitación

                </a>

                <a href="#"
                    class="inline-flex items-center justify-center
                    px-8 py-4 rounded-xl
                    border border-violet-500
                    text-violet-400
                    hover:bg-violet-500
                    hover:text-white
                    transition-all duration-300">

                    Ver demostración

                </a>

            </div>

        </div>

    </div>
    </section>
    <!-- end CTA -->

    <!-- footer -->
    <x-slot name="footer">
        @include('layouts.footer')
    </x-slot>
</x-guest-layout>