<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Invitations') }}
        </h2>
    </x-slot>
    <div class="py-12">
        
            <div class="flex justify-between m-4">
                <div class="mb-5">
                    <a href="{{route('invitation.create')}}"
                        class="inline-flex items-center gap-2 px-5 py-3
                            bg-indigo-600 hover:bg-indigo-700
                            text-white font-medium
                            rounded-lg shadow-md
                            transition duration-200">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="w-5 h-5"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2"
                                d="M12 4v16m8-8H4"/>
                        </svg>

                        Nueva invitación
                    </a>
                </div>

                @if (session('success'))
                <div class="bg-white rounded-xl shadow-lg border border-gray-200 p-4 max-w-sm">
                    <p class="font-semibold text-green-600">Success</p>
                    <p class="text-sm text-gray-700">
                        {{ session('success') }}
                    </p>
                </div>
                @endif
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6 m-4">
                @forelse($invitations as $invitation)
                <div
                    class="w-full max-w-md
                    flex flex-col items-center text-center
                    bg-gradient-to-b from-white/5 to-white/[0.02]
                    border border-white/10
                    rounded-2xl
                    p-8 mr-4 mb-
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
                        {{$invitation['title']}}
                    </h3>

                    <p class="mt-4 text-gray-300 leading-7">
                        Elige una plantilla y personalízala para crear una invitación
                        única que refleje el estilo de tu celebración.
                    </p>
                </div>
                @empty
                    <p class="mt-6 text-2xl font-semibold text-white">No invitations found.</p>
                @endforelse
            </div>    
    </div>

    <!-- footer -->
    <x-slot name="footer">
        @include('layouts.partials.footer')
    </x-slot>
</x-app-layout>