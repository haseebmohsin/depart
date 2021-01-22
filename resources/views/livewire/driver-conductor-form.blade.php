<x-jet-authentication-card>
    <x-slot name="logo">
        <img src="images\depart-logo.png" alt="Depart-logo" class="mr-5">
    </x-slot>
    <x-jet-validation-errors class="mb-4" />
    <form wire:submit.prevent="formSubmit">
        @csrf
        <div class="mt-4">
            <x-jet-label for="name" value="{{ __('Name') }}" />
            <x-jet-input wire:model="name" id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
        </div>
        <div class="mt-4">
            <x-jet-label for="CNIC" value="{{ __('CNIC') }}" />
            <x-jet-input wire:model="CNIC" id="CNIC" class="block mt-1 w-full" type="text" name="CNIC" :value="old('CNIC')" required />
        </div>
        <div class="mt-4">
            <x-jet-label for="contact" value="{{ __('Contact') }}" />
            <x-jet-input wire:model="contact" id="contact" class="block mt-1 w-full" type="text" name="contact" :value="old('contact')" required />
        </div>
        <div class="mt-4">
            <x-jet-label for="address" value="{{ __('Address') }}" />
            <x-jet-input wire:model="address" id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required />
        </div>
        <div class="mt-4">
            <x-jet-label for="password" value="{{ __('Password') }}" />
            <x-jet-input wire:model="password" id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
        </div>
        <div class="mt-4">
            <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
            <x-jet-input wire:model="password_confirmation" id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
        </div>
        <div class="flex items-center justify-end mt-4">
            <x-jet-button class="ml-4">
                {{ __('Submit') }}
            </x-jet-button>
        </div>
    </form>
</x-jet-authentication-card>
