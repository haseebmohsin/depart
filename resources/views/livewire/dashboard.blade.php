<div class="flex h-screen bg-gray-50" :class="{ 'overflow-hidden': sidebar }">
    <!-- Desktop sidebar -->
    <livewire:sidebar :travelersSidebar="$travelersSidebar" :driversSidebar="$driversSidebar" :newRequestsCount="$newRequestsCount" :allRecordsCount="$allRecordsCount" :allMalesCount="$allMalesCount" :allFemalesCount="$allFemalesCount" />
    <!-- Mobile sidebar -->
    <div class="flex flex-col flex-1 w-full" x-data="{ sidebar: false }">
        <x-mob-sidebar />
        <!-- Main content right side -->
        <main class="h-full lg:ml-64">
            <div class="px-10 pt-6 pb-16 mx-auto grid">
                <div class="flex justify-between">
                    <h2 class="mt-2 mb-4 ml-1 text-2xl font-semibold text-gray-700">
                        @if($newRequests && ! $searchQuery)
                            New Requests
                        @endif
                        @if($allRecords && ! $searchQuery)
                            All Records
                        @endif
                        @if($allMales && ! $searchQuery)
                            All Males
                        @endif
                        @if($allFemales && ! $searchQuery)
                            All Females
                        @endif
                        @if($searchQuery)
                            Search Result From All Records
                        @endif
                    </h2>
                    @if (session()->has('deleteSuccess'))
                    <div class="flex items-center mb-2 px-2 font-medium rounded-md text-red-700 bg-red-100 border border-red-300">
                        <div slot="avatar">
                            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle w-5 h-5 mx-2">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                <polyline points="22 4 12 14.01 9 11.01"></polyline>
                            </svg>
                        </div>
                        <div class="text-xl font-normal max-w-full flex-initial">
                            {{ session('deleteSuccess') }}
                        </div>
                    </div>
                    @endif
                    @if (session()->has('printedStatus'))
                    <div class="flex items-center mb-2 px-2 font-medium rounded-md text-green-700 bg-green-100 border border-green-300">
                        <div slot="avatar">
                            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle w-5 h-5 mx-2">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                <polyline points="22 4 12 14.01 9 11.01"></polyline>
                            </svg>
                        </div>
                        <div class="text-xl font-normal max-w-full flex-initial">
                            {{ session('printedStatus') }}
                        </div>
                    </div>
                    @endif
                </div>
                <!-- CTA -->
                <div class="p-4 mb-8 bg-blue-600 rounded-lg shadow-md">
                </div>
                <!-- Cards -->
                <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
                    <!-- Card -->
                    <div wire:click="newRequests" class="flex items-center p-4 bg-white rounded-lg shadow-xs cursor-pointer">
                        <div class="p-3 mr-4 text-red-500 bg-red-100 rounded-full">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="mb-2 text-sm font-medium text-gray-600">
                                New Requests
                            </p>
                            <p class="text-lg font-semibold text-gray-700">
                                {{ $newRequestsCount }}
                            </p>
                        </div>
                    </div>
                    <!-- Card -->
                    <div wire:click="allRecords" class="flex items-center p-4 bg-white rounded-lg shadow-xs cursor-pointer">
                        <div class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="mb-2 text-sm font-medium text-gray-600">
                                All Records
                            </p>
                            <p class="text-lg font-semibold text-gray-700">
                                {{ $allRecordsCount }}
                            </p>
                        </div>
                    </div>
                    <!-- Card -->
                    <div wire:click="allMales" class="flex items-center p-4 bg-white rounded-lg shadow-xs cursor-pointer">
                        <div class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="mb-2 text-sm font-medium text-gray-600">
                                All Males
                            </p>
                            <p class="text-lg font-semibold text-gray-700">
                                {{ $allMalesCount }}
                            </p>
                        </div>
                    </div>
                    <!-- Card -->
                    <div wire:click="allFemales" class="flex items-center p-4 bg-white rounded-lg shadow-xs cursor-pointer">
                        <div class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="mb-2 text-sm font-medium text-gray-600">
                                All Females
                            </p>
                            <p class="text-lg font-semibold text-gray-700">
                                {{ $allFemalesCount }}
                            </p>
                        </div>
                    </div>
                </div>

                <div class="pt-2 pb-6">
                    <div class="sm:w-1/2 relative text-gray-600">
                        <input wire:model="searchQuery" class="w-full border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-md focus:outline-none" placeholder="Search by Name" autocomplete="off" />
                        <button type="submit" class="absolute right-0 top-0 mt-3 mr-4">
                            <svg class="text-gray-600 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" width="512px" height="512px">
                                <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- New Table -->
                <div class="w-full overflow-hidden rounded-lg shadow-xs">
                    <div class="w-full overflow-x-auto">
                        <table class="table-auto w-full whitespace-nowrap">
                            <thead>
                                <tr class="text-xs font-semibold tracking-wide text-left text-gray-700 uppercase border-t border-b dark:border-gray-700 bg-gray-50">
                                    <th class="px-4 py-3 break-normal">Photo</th>
                                    <th class="px-4 py-3 break-normal">Name</th>
                                    <th class="px-4 py-3">System ID</th>
                                    <th class="px-4 py-3">Department</th>
                                    <th class="px-4 py-3">Gender</th>
                                    <th class="px-4 py-3">Challan No</th>
                                    <th class="px-4 py-3">Date</th>
                                    <th class="px-4 py-3">Actions</th>
                                </tr>
                            </thead>
                            @if ( $travelers->count() )
                            <tbody class="bg-white divide-y">
                                @foreach( $travelers as $traveler )
                                <tr class="text-gray-700">
                                    <td class="px-4 py-3">
                                        <img class="object-cover w-full h-full rounded-full" src="{{ asset('storage/'.$traveler->photo )}}" alt="Photo" style="width: 40px; height: 40px" />
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        {{ $traveler->name }}
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        {{ $traveler->system_id }}
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        {{ $traveler->department }}
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        {{ $traveler->gender }}
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        {{ $traveler->challan }}
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        {{ $traveler->created_at->format('d/m/Y') }}
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        @if ($traveler->is_printed == 0)
                                        <a wire:click="updatePrintStatus({{ $traveler->id }})" class="px-3 py-2 mr-2 cursor-pointer font-semibold text-white bg-blue-500 rounded-md">
                                            Printed
                                        </a>
                                        @else
                                        <a class="px-9 py-2 mr-2 cursor-pointer font-semibold text-white bg-white rounded-md">
                                        </a>
                                        @endif
                                        <a wire:click="delete({{ $traveler->id }})" class="px-3 py-2 cursor-pointer font-semibold text-white bg-red-500 rounded-md">
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            @endif
                            @if( !$travelers->count() )
                            <tbody>
                                <tr>
                                    <td class="px-4 py-3">
                                        <h3 class="text-lg text-gray-700 font-normal w-full"> No Traveler data Found </h3>
                                    </td>
                                </tr>
                            </tbody>
                            @endif
                        </table>
                    </div>
                    <div class="px-4 py-3 text-xs font-semibold text-gray-500 border-t bg-gray-50">
                        <!-- Pagination -->
                        {{ $travelers->links() }}
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>