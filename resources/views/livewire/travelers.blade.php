<div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-10">
    <main class="container mx-auto max-w-screen-lg h-full">
        <form wire:submit.prevent="submit">
            @csrf
            <article aria-label="File Upload Modal" class="flex flex-col bg-white shadow-xl rounded-md">
                <img class="mx-auto h-20 w-auto" src="images/depart-logo.png" alt="logo">

                @if( $step == 0 )
                <section class="pb-6 h-full overflow-auto px-8 w-full flex flex-col">
                    <header>
                        <div class="mb-8">
                            <span class="font-semibold text-gray-900 block">
                                Please select your stop carefully and than download your bus fee challan.
                            </span>
                            <span class="font-medium text-gray-700">
                                If you have already submitted your fee, please attach your fee challan scanned copy
                                below and proceed.
                            </span>
                        </div>

                        <div class="flex mx-2 mb-1">
                            <span class="text-gray-700 mr-12">Shift</span>
                            <label class="inline-flex items-center">
                                <input type="radio" class="form-radio focus:ring-white" wire:model="shift"
                                    value="morning">
                                <span class="ml-2">Morning</span>
                            </label>
                            <label class="inline-flex items-center ml-6">
                                <input type="radio" class="form-radio focus:ring-white" wire:model="shift"
                                    value="evening">
                                <span class="ml-2">Evening</span>
                            </label>
                        </div>

                        <div class="flex justify-between my-3">
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
                                    You can check your bus stop <span class="font-bold"> route number </span>
                                    on landing page of the website.
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
                    </header>

                    <div class="flex mb-6">
                        @if($selectedStop && !$challan)
                        <span class="font-semibold text-gray-900">
                            Click download button to download your fee challan.
                        </span>
                        <div>
                            <a href="{{ route('downloadChallan') }}"
                                class="ml-4 rounded-md px-2 py-1 bg-blue-600 hover:bg-blue-500 text-white">
                                Download
                            </a>
                        </div>
                        @endif
                    </div>

                    <div class="border-dashed border-2 border-gray-400 py-4">
                        <span class="mb-3 ml-3 font-semibold text-gray-900 flex flex-wrap">
                            Attach your submitted fee challan here!
                        </span>
                        <div class="flex justify-center items-center">
                            <input type='file' wire:model="challan" />
                        </div>
                    </div>
                    <div class="pt-4">
                        @error('challan')
                        <div
                            class="flex justify-center items-center m-1 mt-2 font-medium py-1 px-2 rounded-md text-red-700 bg-red-100 border border-red-300 ">
                            <div slot="avatar">
                                <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-alert-octagon w-5 h-5 mx-2">
                                    <polygon
                                        points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2">
                                    </polygon>
                                    <line x1="12" y1="8" x2="12" y2="12"></line>
                                    <line x1="12" y1="16" x2="12.01" y2="16"></line>
                                </svg>
                            </div>
                            <div class="text-xl font-normal  max-w-full flex-initial">
                                {{ $message }}
                            </div>
                        </div>
                        @enderror
                    </div>
                </section>
                @endif
                @if( $step == 1 )
                <section class="pb-6 h-full overflow-auto px-10 w-full flex flex-col">
                    <h2 class="mb-2 text-center text-xl font-extrabold text-gray-700">
                        Please fill the following details carefully!
                    </h2>
                    <div class="flex space-between my-3 space-x-4">
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
                        <div class="flex flex-wrap w-2/5">
                            <input wire:model="department" type="text"
                                class="p-2 rounded border shadow-sm w-full focus:outline-none focus:ring focus:border-blue-300"
                                placeholder="Department" />
                            @error('department') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="flex justify-between my-3">

                        <div class="flex justify-between my-3">
                            <div class="flex mx-2">
                                <span class="text-gray-700 mr-12">Gender</span>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio focus:ring-white" wire:model="gender"
                                        value="Male">
                                    <span class="ml-2">Male</span>
                                </label>
                                <label class="inline-flex items-center ml-6">
                                    <input type="radio" class="form-radio focus:ring-white" wire:model="gender"
                                        value="Female">
                                    <span class="ml-2">Female</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="flex my-6">
                        @if(! $photo)
                        <div class="w-1/3">
                            <label
                                class="flex flex-col items-center px-10 py-2 bg-white text-blue-500 rounded-lg shadow-lg tracking-wide uppercase border border-blue-300 cursor-pointer hover:bg-blue-100 hover:text-blue-500">
                                <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
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
                </section>
                @endif
                <footer class="flex justify-end bg-gray-50 px-4 py-3 sm:px-6">
                    <div wire:loading wire:target="challan" class="mr-2 mt-1">Uploading...</div>
                    @if($step == 0)
                    <a href="{{ route('landing') }}"
                        class="mr-3 rounded-md px-3 py-1 text-gray-800 hover:bg-gray-300 focus:shadow-outline focus:outline-none">
                        Back
                    </a>
                    @if( $challan )
                    <button type="submit"
                        class="rounded-md px-3 py-1 bg-blue-700 hover:bg-blue-500 text-white focus:shadow-outline focus:outline-none">
                        Next
                    </button>
                    @else
                    <button class="rounded-md px-3 py-1 bg-blue-700 text-white pointer-events-none disabled:opacity-50"
                        disabled>
                        Next
                    </button>
                    @endif

                    @endif
                    @if($step == 1)
                    <button type="button" wire:click="decreaseStep"
                        class="mr-3 rounded-md px-3 py-1 text-gray-800 hover:bg-gray-300 focus:shadow-outline focus:outline-none">
                        Back
                    </button>
                    <button type="submit"
                        class="rounded-md px-3 py-1 bg-blue-700 hover:bg-blue-500 text-white focus:shadow-outline focus:outline-none">
                        Book Now
                    </button>
                    @endif
                </footer>
            </article>
        </form>
    </main>
</div>
