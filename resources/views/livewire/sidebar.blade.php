<aside class="z-20 hidden w-64 overflow-y-auto bg-white lg:block flex-shrink-0 fixed h-screen">
    <div class="py-6 text-gray-500 dark:text-gray-400">
        @if($travelersSidebar)
        <ul class="mt-2">
            <li class="relative px-6 py-3 hover:bg-blue-100">
                <!-- <span class="absolute inset-y-0 left-0 w-1 bg-blue-600 rounded-tr-lg rounded-br-lg"
                    aria-hidden="true"></span> -->
                <div wire:click="$emitUp('newRequests')"
                    class="inline-flex justify-between items-center w-full text-sm font-semibold transition-colors cursor-pointer duration-150 hover:text-gray-800">
                    <div class="inline-flex">
                        <div class="text-red-500">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <span class="ml-4" style="margin-top:3px">New Requests</span>
                    </div>
                    <div>
                        <span class="ml-4">{{ $newRequestsCount }}</span>
                    </div>
                </div>
            </li>
        </ul>
        <ul>
            <li class="relative px-6 py-3 hover:bg-blue-100">
                <div wire:click="$emitUp('allRecords')"
                    class="inline-flex justify-between items-center w-full text-sm font-semibold text-gray-800 transition-colors cursor-pointer duration-150 hover:text-gray-800">
                    <div class="inline-flex">
                        <div class="text-blue-500">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z">
                                </path>
                            </svg>
                        </div>
                        <span class="ml-4" style="margin-top:3px">All Records</span>
                    </div>
                    <div>
                        <span class="ml-4">{{ $allRecordsCount }}</span>
                    </div>
                </div>
            </li>
            <li class="relative px-6 py-3 hover:bg-blue-100">
                <div wire:click="$emitUp('allMales')"
                    class="inline-flex justify-between items-center w-full text-sm font-semibold transition-colors cursor-pointer duration-150 hover:text-gray-800">
                    <div class="inline-flex">
                        <div class="text-blue-500">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <span class="ml-4" style="margin-top:3px">All Males</span>
                    </div>
                    <div>
                        <span class="ml-4">{{ $allMalesCount }}</span>
                    </div>
                </div>
            </li>
            <li class="relative px-6 py-3 hover:bg-blue-100">
                <div wire:click="$emitUp('allFemales')"
                    class="inline-flex justify-between items-center w-full text-sm font-semibold transition-colors cursor-pointer duration-150 hover:text-gray-800">
                    <div class="inline-flex">
                        <div class="text-blue-500">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <span class="ml-4" style="margin-top:3px">All Females</span>
                    </div>
                    <div>
                        <span class="ml-4">{{ $allFemalesCount }}</span>
                    </div>
                </div>
            </li>
        </ul>
        @endif
        @if($driversSidebar)
        <ul class="mt-2">
            <li class="relative px-6 py-3 hover:bg-blue-100">
                <div wire:click="$emitUp('drivers')"
                    class="inline-flex justify-between items-center w-full text-sm font-semibold transition-colors cursor-pointer duration-150 hover:text-gray-800">
                    <div class="inline-flex">
                        <div class="text-red-500">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <span class="ml-4" style="margin-top:3px"> Drivers </span>
                    </div>
                    <div>
                        <span class="ml-4">{{ $driversCount }}</span>
                    </div>
                </div>
            </li>
        </ul>
        <ul>
            <li class="relative px-6 py-3 hover:bg-blue-100">
                <div wire:click="$emitUp('conductors')"
                    class="inline-flex justify-between items-center w-full text-sm font-semibold text-gray-800 transition-colors cursor-pointer duration-150 hover:text-gray-800">
                    <div class="inline-flex">
                        <div class="text-blue-500">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z">
                                </path>
                            </svg>
                        </div>
                        <span class="ml-4" style="margin-top:3px"> Conductors </span>
                    </div>
                    <div>
                        <span class="ml-4">{{ $conductorsCount }}</span>
                    </div>
                </div>
            </li>
        </ul>
        @endif
    </div>
</aside>
