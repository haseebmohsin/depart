<div class="flex bg-gray-50"">
    <div class=" w-full">
    <div class="h-full md:px-10 xl:px-32">
        <div class="px-10 pt-2 pb-16">
            <div class="flex justify-between mt-4">
                <h2 class="mt-2 mb-2 text-2xl font-semibold text-gray-700">
                    Routes Management
                </h2>
                @if (session()->has('success'))
                <div
                    class="flex items-center mb-2 px-2 font-medium rounded-md text-green-700 bg-green-100 border border-green-300">
                    <div slot="avatar">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-check-circle w-5 h-5 mx-2">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                        </svg>
                    </div>
                    <div class="text-xl font-normal max-w-full flex-initial">
                        {{ session('success') }}
                    </div>
                </div>
                @endif
            </div>
            <!-- CTA -->
            <div class="flex p-2 mb-6 bg-gray-300 rounded-sm shadow-md"></div>
            <div class="flex justify-between pt-2 pb-2">
                <div class="w-1/2 relative text-gray-600">
                    <input wire:model="searchQuery"
                        class="w-full border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-md focus:outline-none"
                        placeholder="Search a bus stop" autocomplete="off" />
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
            </div>

            <!-- Routes -->
            <div class="mb-8 mt-4">
                <livewire:components.routes-table :routeNo="1" />
                <livewire:components.routes-table :routeNo="2" />
                <livewire:components.routes-table :routeNo="3" />
                <livewire:components.routes-table :routeNo="4" />
                <livewire:components.routes-table :routeNo="5" />
                <livewire:components.routes-table :routeNo="6" />
                <livewire:components.routes-table :routeNo="7" />
                <livewire:components.routes-table :routeNo="8" />
                <livewire:components.routes-table :routeNo="9" />
                <livewire:components.routes-table :routeNo="10" />
                <livewire:components.routes-table :routeNo="11" />
                <livewire:components.routes-table :routeNo="12" />
                <livewire:components.routes-table :routeNo="13" />
                <livewire:components.routes-table :routeNo="14" />
                <livewire:components.routes-table :routeNo="15" />
                <livewire:components.routes-table :routeNo="16" />
                <livewire:components.routes-table :routeNo="17" />
                <livewire:components.routes-table :routeNo="18" />
                <livewire:components.routes-table :routeNo="19" />
                <livewire:components.routes-table :routeNo="20" />
                <livewire:components.routes-table :routeNo="21" />
                <livewire:components.routes-table :routeNo="22" />
                <livewire:components.routes-table :routeNo="23" />
                <livewire:components.routes-table :routeNo="24" />
                <livewire:components.routes-table :routeNo="25" />
                <livewire:components.routes-table :routeNo="26" />

            </div>
        </div>
    </div>
</div>
</div>
