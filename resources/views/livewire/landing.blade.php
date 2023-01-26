<div class="leading-normal tracking-normal text-white gradient bg-gray-200"
    style="font-family: 'Source Sans Pro', sans-serif;">
    <nav id="header" class="fixed w-full z-30 top-0 text-white">
        <div class="w-full lg:container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">
            <div class="pl-4 flex items-center">
                <a class="toggleColour text-white hover:text-gray-100 no-underline hover:no-underline font-bold text-2xl lg:text-4xl"
                    href="#">
                    Depart
                </a>
            </div>
            <div class="block lg:hidden pr-4">
                <button id="nav-toggle"
                    class="flex items-center p-1 text-pink-800 hover:text-gray-900 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                    <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                    </svg>
                </button>
            </div>
            <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden mt-2 lg:mt-0 bg-blue-400 lg:bg-transparent text-white p-4 lg:p-0 z-20"
                id="nav-content">
                <ul class="list-reset lg:flex justify-end flex-1 items-center">
                    <li class="mr-3">
                        <a href="{{ route('login') }}"
                            class="toggleColour inline-block py-2 px-4 text-white hover:bg-blue-200 hover:text-gray-600 font-bold no-underline border border-gray-300 rounded">
                            Log In
                        </a>
                    </li>
                    <li class="mr-3">
                        <a href="{{ route('travelers') }}"
                            class='toggleColour inline-block py-2 px-4 text-white hover:bg-blue-200 hover:text-gray-600 font-bold no-underline border border-gray-300 rounded'>
                            Book Your Seat
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <hr class="border-b border-gray-100 opacity-25 my-0 py-0" />
    </nav>

    <div class="pt-28 pb-16">
        <div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
            @if (session()->has('success'))
            <div
                class="flex items-center mb-2 px-2 font-medium rounded-md text-green-700 bg-green-100 border border-green-300">
                <div slot="avatar">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-check-circle w-5 h-5 mx-2">
                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                        <polyline points="22 4 12 14.01 9 11.01"></polyline>
                    </svg>
                </div>
                <div class="text-xl font-normal max-w-full flex-initial">
                    {{ session('success') }}
                </div>
            </div>
            @endif

            <div class="flex flex-col w-full md:w-2/5 justify-center items-start text-center md:text-left">
                <h1 class="mb-4 text-4xl font-bold leading-tight">
                    Transportation made easy
                </h1>
                <p class="leading-normal text-white text-xl mb-2">
                    Welcome to Depart! National University of Modern Languages Transport System
                </p>
            </div>
            <div class="w-full md:w-3/5 py-6 text-center">
                <img class="w-full md:w-4/5 z-50" src="images/bus.png" />
            </div>
        </div>
    </div>
    <div class="relative -mt-12 lg:-mt-24">
        <svg viewBox="0 0 1428 174" version="1.1" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink">
            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g transform="translate(-2.000000, 44.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <path
                        d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496"
                        opacity="0.100000001"></path>
                    <path
                        d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z"
                        opacity="0.100000001"></path>
                    <path
                        d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z"
                        id="Path-4" opacity="0.200000003"></path>
                </g>
                <g transform="translate(-4.000000, 76.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <path
                        d="M0.457,34.035 C57.086,53.198 98.208,65.809 123.822,71.865 C181.454,85.495 234.295,90.29 272.033,93.459 C311.355,96.759 396.635,95.801 461.025,91.663 C486.76,90.01 518.727,86.372 556.926,80.752 C595.747,74.596 622.372,70.008 636.799,66.991 C663.913,61.324 712.501,49.503 727.605,46.128 C780.47,34.317 818.839,22.532 856.324,15.904 C922.689,4.169 955.676,2.522 1011.185,0.432 C1060.705,1.477 1097.39,3.129 1121.236,5.387 C1161.703,9.219 1208.621,17.821 1235.4,22.304 C1285.855,30.748 1354.351,47.432 1440.886,72.354 L1441.191,104.352 L1.121,104.031 L0.457,34.035 Z">
                    </path>
                </g>
            </g>
        </svg>
    </div>

    <section class="bg-white border-b pt-20 pb-72 px-6 md:px-10 xl:px-32">
        <h2 class="text-4xl text-gray-900 mb-1">Routes Information</h2>
        <!-- CTA -->
        <div class="flex p-2 mb-10 bg-gray-300 rounded-sm shadow-md"></div>

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
    </section>

    <svg class="wave-top" viewBox="0 0 1439 147" version="1.1" xmlns="http://www.w3.org/2000/svg"
        xmlns:xlink="http://www.w3.org/1999/xlink">
        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g transform="translate(-1.000000, -14.000000)" fill-rule="nonzero">
                <g class="wave" fill="#f8fafc">
                    <path
                        d="M1440,84 C1383.555,64.3 1342.555,51.3 1317,45 C1259.5,30.824 1206.707,25.526 1169,22 C1129.711,18.326 1044.426,18.475 980,22 C954.25,23.409 922.25,26.742 884,32 C845.122,37.787 818.455,42.121 804,45 C776.833,50.41 728.136,61.77 713,65 C660.023,76.309 621.544,87.729 584,94 C517.525,105.104 484.525,106.438 429,108 C379.49,106.484 342.823,104.484 319,102 C278.571,97.783 231.737,88.736 205,84 C154.629,75.076 86.296,57.743 0,32 L0,0 L1440,0 L1440,84 Z">
                    </path>
                </g>
                <g transform="translate(1.000000, 15.000000)" fill="#FFFFFF">
                    <g
                        transform="translate(719.500000, 68.500000) rotate(-180.000000) translate(-719.500000, -68.500000) ">
                        <path
                            d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496"
                            opacity="0.100000001"></path>
                        <path
                            d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z"
                            opacity="0.100000001"></path>
                        <path
                            d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z"
                            opacity="0.200000003"></path>
                    </g>
                </g>
            </g>
        </g>
    </svg>

    <section>
        <x-footer />
    </section>
</div>
