<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Invitation') }}
        </h2>
    </x-slot>
    <div class="py-12">
        @if (session('error'))
            <div class="flex justify-end mb-4 mr-5">
                <div class="bg-white rounded-xl shadow-lg border border-gray-200 p-4 max-w-sm">
                    <p class="font-semibold text-red-600">Error</p>
                    <p class="text-sm text-gray-700">
                        {{ session('error') }}
                    </p>
                </div>
            </div>
        @endif

        <div class="w-[50%] mx-auto p-5 mt-10">
            <div class="p-8 border-2 border-gray-700 rounded-lg">
                <x-title-form>Crear invitación</x-title-form>
                <form method="POST" action="{{ route('invitation.store') }}">
                    @csrf

                    <div>
                        <x-text-input id="template_id" class="block mt-1 w-full" type="hidden" name="template_id" :value="1"/>
                        <x-input-error :messages="$errors->get('template_id')" class="mt-2" />

                        <x-text-input id="slug" class="block mt-1 w-full" type="hidden" name="slug" :value="'cumple'"/>
                        <x-input-error :messages="$errors->get('slug')" class="mt-2" />
                    </div>

                    <!-- Title -->
                    <div class="mt-4">
                        <x-input-label for="title" :value="__('Title')" />
                        <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required autofocus autocomplete="title" />
                        <x-input-error :messages="$errors->get('title')" class="mt-2" />
                    </div>

                    <!-- Event -->
                    <div class="mt-4">
                        <x-input-label for="event" :value="__('Event')" />
                        <x-text-input id="event" class="block mt-1 w-full" type="text" name="event" :value="old('event')" required autocomplete="event" />
                        <x-input-error :messages="$errors->get('event')" class="mt-2" />
                    </div>

                    <!-- Date event -->
                    <div class="mt-4">
                        <x-input-label for="date_event" :value="__('Date event')" />
                        <x-text-input id="date_event" class="block mt-1 w-full" type="datetime-local" name="date_event" :value="old('date_event')" required autocomplete="date_event" step="1" />
                        <x-input-error :messages="$errors->get('date_event')" class="mt-2" />
                    </div>

                    <!-- Address event -->
                    <div class="mt-4">
                        <x-input-label for="address_event" :value="__('Address event')" />
                        <x-text-input id="address_event" class="block mt-1 w-full" type="text" name="address_event" :value="old('address_event')" required autocomplete="address_event" />
                        <x-input-error :messages="$errors->get('address_event')" class="mt-2" />
                    </div>

                    <!-- Place event -->
                    <div class="mt-4">
                        <x-input-label for="place_event" :value="__('Place event')" />
                        <x-text-input id="place_event" class="block mt-1 w-full" type="text" name="place_event" :value="old('place_event')" required autocomplete="place_event" />
                        <x-input-error :messages="$errors->get('place_event')" class="mt-2" />
                    </div>

                    <!-- Ubication event -->
                    <div class="mt-4">
                        <x-input-label for="ubication_event" :value="__('Ubication event')" />
                        <x-text-input id="ubication_event" class="block mt-1 w-full" type="text" name="ubication_event" :value="old('ubication_event')" required autocomplete="ubication_event" />
                        <x-input-error :messages="$errors->get('ubication_event')" class="mt-2" />
                    </div>

                    <!-- Celebrant -->
                    <div class="mt-4">
                        <x-input-label for="celebrant" :value="__('Celebrant')" />
                        <x-text-input id="celebrant" class="block mt-1 w-full" type="text" name="celebrant" :value="old('celebrant')" required autocomplete="celebrant" />
                        <x-input-error :messages="$errors->get('celebrant')" class="mt-2" />
                    </div>

                    <!-- Message hero -->
                    <div class="mt-4">
                        <x-input-label for="message_hero" :value="__('Main Message')" />
                        <x-text-input id="message_hero" class="block mt-1 w-full" type="text" name="message_hero" :value="old('message_hero')" required autocomplete="message_hero" />
                        <x-input-error :messages="$errors->get('message_hero')" class="mt-2" />
                    </div>

                    <!-- Message footer -->
                    <div class="mt-4">
                        <x-input-label for="message_footer" :value="__('End Message')" />
                        <x-text-input id="message_footer" class="block mt-1 w-full" type="text" name="message_footer" :value="old('message_footer')" required autocomplete="message_footer" />
                        <x-input-error :messages="$errors->get('message_footer')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        
                        <x-cancel-button-form class="ms-4" :href="route('invitation.index')">
                            {{ __('Cancel') }}
                        </x-cancel-button-form>
                        <x-primary-button class="ms-4">
                            {{ __('Save') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>

    </div>

    

    <!-- footer -->
    <x-slot name="footer">
        @include('layouts.partials.footer')
    </x-slot>
</x-app-layout>