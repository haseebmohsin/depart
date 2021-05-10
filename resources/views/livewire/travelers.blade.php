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
                    <input wire:model="name" type="text"
                        class="p-2 rounded border shadow-sm w-full focus:outline-none focus:ring focus:border-blue-300"
                        placeholder="Full Name" />
                    @error('name') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                </div>
                <div class="flex flex-wrap w-2/5">
                    <input wire:model="system_id" type="text"
                        class="p-2 rounded border shadow-sm w-full focus:outline-none focus:ring focus:border-blue-300"
                        placeholder="System ID" />
                    @error('system_id') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="flex justify-between my-8">
                <div class="flex flex-wrap w-2/5">
                    <input wire:model="department" type="text"
                        class="p-2 rounded border shadow-sm w-full focus:outline-none focus:ring focus:border-blue-300"
                        placeholder="Department" />
                    @error('department') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                </div>
                <div class="flex flex-wrap w-2/5">
                    <input wire:model="challan" type="text"
                        class="p-2 rounded border shadow-sm w-full focus:outline-none focus:ring focus:border-blue-300"
                        placeholder="Challan No" />
                    @error('challan') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="flex justify-between my-8">
                <div class="flex mx-2">
                    <span class="text-gray-700 mr-12">Gender</span>
                    <label class="inline-flex items-center">
                        <input type="radio" class="form-radio focus:ring-white" wire:model="gender" value="Male">
                        <span class="ml-2">Male</span>
                    </label>
                    <label class="inline-flex items-center ml-6">
                        <input type="radio" class="form-radio focus:ring-white" wire:model="gender" value="Female">
                        <span class="ml-2">Female</span>
                    </label>
                </div>

                <div class="flex mx-2">
                    <span class="text-gray-700 mr-12">Shift</span>
                    <label class="inline-flex items-center">
                        <input type="radio" class="form-radio focus:ring-white" wire:model="shift" value="morning">
                        <span class="ml-2">Morning</span>
                    </label>
                    <label class="inline-flex items-center ml-6">
                        <input type="radio" class="form-radio focus:ring-white" wire:model="shift" value="evening">
                        <span class="ml-2">Evening</span>
                    </label>
                </div>
            </div>

            <div class="flex justify-between my-8">
                <div class="w-2/5">
                    <select wire:model="routeNo"
                        class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-gray-100 focus:border-gray-300 sm:text-sm"
                        autocomplete="off">
                        <option value="" selected> Select route number </option>
                        <option value="1"> 1 </option>
                        <option value="2"> 2 </option>
                        <option value="3"> 3 </option>
                        <option value="4"> 4 </option>
                        <option value="5"> 5 </option>
                        <option value="6"> 6 </option>
                        <option value="7"> 7 </option>
                        <option value="8"> 8 </option>
                        <option value="9"> 9 </option>
                        <option value="10"> 10 </option>
                        <option value="11"> 11 </option>
                        <option value="12"> 12 </option>
                        <option value="13"> 13 </option>
                        <option value="14"> 14 </option>
                        <option value="15"> 15 </option>
                        <option value="16"> 16 </option>
                        <option value="17"> 17 </option>
                        <option value="18"> 18 </option>
                        <option value="19"> 19 </option>
                        <option value="20"> 20 </option>
                        <option value="21"> 21 </option>
                        <option value="22"> 22 </option>
                        <option value="23"> 23 </option>
                        <option value="24"> 24 </option>
                        <option value="25"> 25 </option>
                        <option value="26"> 26 </option>
                    </select>
                    <x-jet-input-error class="block w-full mt-1" for="routeNo" />
                    <span for="routeNo" class="block text-xs text-gray-600 mt-2 ml-1">
                        You can check your bus stop <span class="font-bold"> route number </span> on landing page of
                        the website.
                    </span>
                </div>

                <div class="w-2/5">
                    <select wire:model="selectedStop"
                        class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-gray-100 focus:border-gray-300 sm:text-sm"
                        autocomplete="off">
                        <option value="">Select your bus stop</option>
                        @if($stopNames)
                        @foreach($stopNames as $stopName)
                        <option value="{{$stopName}}">{{$stopName}}</option>
                        @endforeach
                        @endif
                    </select>
                    <x-jet-input-error class="block w-full mt-1" for="selectedStop" />
                    <span for="selectedStop" class="block text-xs text-gray-600 mt-2 ml-1">
                        You must select your shift and route number first.
                    </span>
                </div>
            </div>

            <div class="flex my-16">
                @if(! $photo)
                <div class="w-1/3">
                    <label
                        class="flex flex-col items-center px-10 py-2 bg-white text-blue-500 rounded-lg shadow-lg tracking-wide uppercase border border-blue-300 cursor-pointer hover:bg-blue-100 hover:text-blue-500">
                        <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path
                                d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                        </svg>
                        <span class="mt-2 text-base leading-normal">Upload Photo</span>
                        <input type='file' class="hidden" wire:model.lazy="photo" />
                    </label>
                    @error('photo') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                </div>
                @endif
                @if($photo)
                <div>
                    <img src="{{ $photo->temporaryURL() }}" alt="Photo" width="150" height="80">
                </div>
                @endif
            </div>

            <div class="px-10 float-right w-2/5">
                <button type="submit"
                    class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                        <svg class="h-6 w-5 text-indigo-500 group-hover:text-indigo-400" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 12v3c0 1.657 3.134 3 7 3s7-1.343 7-3v-3c0 1.657-3.134 3-7 3s-7-1.343-7-3z">
                            </path>
                            <path d="M3 7v3c0 1.657 3.134 3 7 3s7-1.343 7-3V7c0 1.657-3.134 3-7 3S3 8.657 3 7z"></path>
                            <path d="M17 5c0 1.657-3.134 3-7 3S3 6.657 3 5s3.134-3 7-3 7 1.343 7 3z"></path>
                        </svg>
                    </span>
                    Book Now
                </button>
            </div>
        </form>
    </div>
</div>
