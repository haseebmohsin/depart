<div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-3">
    <main class="container mx-auto max-w-screen-lg h-full">
        <form wire:submit.prevent="formSubmit">
            <article aria-label="File Upload Modal" class="flex flex-col bg-white shadow-xl rounded-md">
                <section class="pb-6 h-full overflow-auto px-8 w-full flex flex-col">
                    <div class="mb-4">
                        <img class="mx-auto h-20 w-auto" src="images/depart-logo.png" alt="logo">
                        <h2 class="text-center text-xl font-extrabold text-gray-700">
                            Please fill the following details carefully!
                        </h2>
                    </div>
                    <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-6 sm:col-span-3">
                            <x-jet-label for="user_name" value="{{ __('User Name') }}" />
                            <x-jet-input wire:model.lazy="user_name" class="block w-full mt-1" type="text" />
                            <x-jet-input-error class="block w-full mt-1" for="user_name" />
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <x-jet-label for="cnic" value="{{ __('CNIC') }}" />
                            <x-jet-input wire:model.lazy="cnic" class="block w-full mt-1" type="text" />
                            <x-jet-input-error class="block w-full mt-1" for="cnic" />
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <x-jet-label for="address" value="{{ __('Address') }}" />
                            <x-jet-input wire:model.lazy="address" class="block w-full mt-1" type="text" />
                            <x-jet-input-error class="block w-full mt-1" for="address" />
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <x-jet-label for="contact" value="{{ __('Contact') }}" />
                            <x-jet-input wire:model.lazy="contact" class="block w-full mt-1" type="text" />
                            <x-jet-input-error class="block w-full mt-1" for="contact" />
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <x-jet-label for="password" value="{{ __('Password') }}" />
                            <x-jet-input wire:model.lazy="password" class="block w-full mt-1" type="password" />
                            <x-jet-input-error class="block w-full mt-1" for="password" />
                        </div>
                    </div>

                    <div class="flex justify-between my-6">
                        <div class="flex mx-2">
                            <span class="text-gray-700 mr-12"> Occupation </span>
                            <label class="inline-flex items-center">
                                <input type="radio" class="form-radio focus:ring-white" wire:model="occupation"
                                    value="driver">
                                <span class="ml-2"> Driver </span>
                            </label>
                            <label class="inline-flex items-center ml-6">
                                <input type="radio" class="form-radio focus:ring-white" wire:model="occupation"
                                    value="conductor">
                                <span class="ml-2"> Conductor </span>
                            </label>
                        </div>
                    </div>
                </section>

                <footer class="flex justify-end bg-gray-50 px-4 py-3 sm:px-6">
                    <a href="{{ route('dashboard') }}"
                        class="mr-3 rounded-md px-3 py-1 text-gray-800 hover:bg-gray-300 focus:shadow-outline focus:outline-none">
                        Back
                    </a>
                    <button type="submit"
                        class="rounded-md px-3 py-1 bg-blue-700 hover:bg-blue-500 text-white focus:shadow-outline focus:outline-none">
                        Register
                    </button>
                </footer>
            </article>
        </form>
    </main>
</div>
