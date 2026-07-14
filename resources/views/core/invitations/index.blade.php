<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Invitations') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="">
            <a href="{{route('invitation.create')}}">Nueva invitación</a>
        </div>
        
    </div>

    <!-- footer -->
    <x-slot name="footer">
        @include('layouts.partials.footer')
    </x-slot>
</x-app-layout>