<div class="min-h-screen flex items-center justify-center px-4 sm:px-6 lg:px-8 py-4">
    <div class="max-w-3xl w-full space-y-8 px-8 py-6 pt-2 border border-indigo-600 bg-gray-100">
        <div>
            <img class="mx-auto h-26 w-auto" src="images/depart-logo.png" alt="logo">
            <h2 class="text-center text-xl font-extrabold text-gray-700">
                Please fill the following details carefully!
            </h2>
        </div>
        <form class="mt-8 space-y-6" wire:submit.prevent="formSubmit">
            <div class="flex justify-between my-8">
                <div class="flex flex-wrap w-2/5">
                    <input wire:model="name" type="text" class="p-2 rounded border shadow-sm w-full focus:outline-none focus:ring focus:border-blue-300" placeholder="Full Name" />
                    @error('name') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                </div>
                <div class="flex flex-wrap w-2/5">
                    <input wire:model="CNIC" type="text" class="p-2 rounded border shadow-sm w-full focus:outline-none focus:ring focus:border-blue-300" placeholder="CNIC" />
                    @error('CNIC') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="flex justify-between my-8">
                <div class="flex flex-wrap w-2/5">
                    <input wire:model="contact" type="text" class="p-2 rounded border shadow-sm w-full focus:outline-none focus:ring focus:border-blue-300" placeholder="contact" />
                    @error('contact') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                </div>
                <div class="flex flex-wrap w-2/5">
                    <input wire:model="address" type="text" class="p-2 rounded border shadow-sm w-full focus:outline-none focus:ring focus:border-blue-300" placeholder="Address" />
                    @error('address') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="flex my-8 mx-2">
                <span class="text-gray-700 mr-12">Occupation</span>
                <label class="inline-flex items-center">
                    <input type="radio" class="form-radio" wire:model="occupation" value="driver">
                    <span class="ml-2">Driver</span>
                </label>
                <label class="inline-flex items-center ml-6">
                    <input type="radio" class="form-radio" wire:model="occupation" value="conductor">
                    <span class="ml-2">Conductor</span>
                </label>
            </div>

            <div class="px-10 float-right w-2/5">
                <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                        <svg class="h-6 w-5 text-indigo-500 group-hover:text-indigo-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 12v3c0 1.657 3.134 3 7 3s7-1.343 7-3v-3c0 1.657-3.134 3-7 3s-7-1.343-7-3z"></path>
                            <path d="M3 7v3c0 1.657 3.134 3 7 3s7-1.343 7-3V7c0 1.657-3.134 3-7 3S3 8.657 3 7z"></path>
                            <path d="M17 5c0 1.657-3.134 3-7 3S3 6.657 3 5s3.134-3 7-3 7 1.343 7 3z"></path>
                        </svg>
                    </span>
                    Register
                </button>
            </div>
        </form>
    </div>
</div>
