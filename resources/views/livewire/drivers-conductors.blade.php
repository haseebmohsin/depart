<div class="flex h-screen bg-gray-50" :class="{ 'overflow-hidden': sidebar }">
    <!-- Desktop sidebar -->
    <livewire:sidebar :travelersSidebar="$travelersSidebar" :driversSidebar="$driversSidebar"
        :driversCount="$driversCount" :conductorsCount="$conductorsCount" key="{{ now() }}" />
    <!-- Mobile sidebar -->
    <div class="flex flex-col flex-1 w-full" x-data="{ sidebar: false }">
        <x-mob-sidebar />
        <!-- Main content right side -->
        <main class="h-full overflow-y-auto lg:ml-64">
            <div class="px-10 pt-2 pb-16 mx-auto grid">
                <h2 class="mt-4 mb-2 ml-1 text-2xl font-semibold text-gray-700">
                    @if($drivers && ! $searchQuery)
                    Drivers
                    @endif
                    @if($conductors && ! $searchQuery)
                    Conductors
                    @endif
                    @if($searchQuery)
                    Drivers and Conductors
                    @endif
                </h2>
                <!-- CTA -->
                <div class="flex p-2 mb-2 bg-gray-300 rounded-sm shadow-md"></div>
                <!-- Cards -->
                <div class="grid gap-2 mb-4 md:grid-cols-2 xl:grid-cols-4">
                    <!-- Card -->
                    <div wire:click="drivers"
                        class="flex items-center p-2 pl-4 bg-white rounded-lg shadow-xs cursor-pointer">
                        <div class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="mb-2 text-sm font-medium text-gray-600">
                                Drivers
                            </p>
                            <p class="text-lg font-semibold text-gray-700">
                                {{ $driversCount }}
                            </p>
                        </div>
                    </div>
                    <!-- Card -->
                    <div wire:click="conductors"
                        class="flex items-center p-2 pl-4 bg-white rounded-lg shadow-xs cursor-pointer">
                        <div class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="mb-2 text-sm font-medium text-gray-600">
                                Conductors
                            </p>
                            <p class="text-lg font-semibold text-gray-700">
                                {{ $conductorsCount }}
                            </p>
                        </div>
                    </div>
                </div>

                <div class="flex justify-between pt-2 pb-2">
                    <div class="w-1/2 relative text-gray-600">
                        <input wire:model="searchQuery"
                            class="w-full border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-md focus:outline-none"
                            placeholder="Search by Username" autocomplete="off" />
                        <button type="submit" class="absolute right-0 top-0 mt-3 mr-4">
                            <svg class="text-gray-600 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                                viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;"
                                xml:space="preserve" width="512px" height="512px">
                                <path
                                    d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                            </svg>
                        </button>
                    </div>
                    <div>
                        <a href="{{ route('driverConductorForm') }}"
                            class="float-right border-2 text-white bg-blue-500 rounded-md py-2 px-4 hover:pointer mr-2 ">
                            Add Driver | Conductor
                        </a>
                    </div>
                </div>

                <!-- Table -->
                <div class="w-full overflow-hidden rounded-lg shadow-xs">
                    <div class="w-full overflow-x-auto">
                        <table class="table-auto w-full whitespace-nowrap">
                            <thead>
                                <tr
                                    class="text-xs font-semibold tracking-wide text-left text-gray-700 uppercase border-t border-b dark:border-gray-700 bg-gray-50">
                                    <th class="px-4 py-3 break-normal"> Username </th>
                                    <th class="px-4 py-3">CNIC</th>
                                    <th class="px-4 py-3">Contact</th>
                                    <th class="px-4 py-3">Address</th>
                                    <th class="px-4 py-3">Actions</th>
                                </tr>
                            </thead>
                            @if ( $staffs->count() )
                            <tbody class="bg-white divide-y">
                                @foreach( $staffs as $staff )
                                <tr class="text-gray-700">
                                    <td class="px-4 py-3 text-sm">
                                        {{ $staff->user_name }}
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        {{ $staff->CNIC }}
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        {{ $staff->contact }}
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        {{ $staff->address }}
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        <a wire:click="deleteStaff({{ $staff->id }})"
                                            class="px-3 py-2 cursor-pointer font-semibold text-white bg-red-500 rounded-md">
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            @endif
                            @if( !$staffs->count() )
                            <tbody>
                                <tr>
                                    <td class="px-4 py-3">
                                        <h3 class="text-lg text-gray-700 font-normal w-full">
                                            No Drivers and Conductors Found
                                        </h3>
                                    </td>
                                </tr>
                            </tbody>
                            @endif
                        </table>
                    </div>
                    <div class="px-4 py-3 text-xs font-semibold text-gray-500 border-t bg-gray-50">
                        <!-- Pagination -->
                        {{ $staffs->links() }}
                    </div>
                </div>

            </div>
        </main>
    </div>
</div>
