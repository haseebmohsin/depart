<x-app-layout>
<div class="flex h-screen bg-gray-50" :class="{ 'overflow-hidden': sidebar }">
    <!-- Desktop sidebar -->
    <x-sidebar />
    <!-- Mobile sidebar -->
    <div class="flex flex-col flex-1 w-full" x-data="{ sidebar: false }">
        <x-mob-sidebar />

        <!-- Main content right side -->
        <main class="h-full overflow-y-auto">
            <div class="px-10 pt-2 pb-16 mx-auto grid">
                <h2 class="my-6 text-2xl font-semibold text-gray-700">
                    Dashboard
                </h2>
                <!-- CTA -->
                <span class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-blue-100 bg-blue-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-blue">
                    <div class="flex items-center">
                    </div>
                </span>
                <!-- Cards -->
                <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
                    <!-- Card -->
                    <div class="flex items-center p-4 bg-white rounded-lg shadow-xs">
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
                                1980
                            </p>
                        </div>
                    </div>
                    <!-- Card -->
                    <div class="flex items-center p-4 bg-white rounded-lg shadow-xs">
                        <div class="p-3 mr-4 text-red-500 bg-red-100 rounded-full">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M5 3a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V5a2 2 0 00-2-2H5zm0 2h10v7h-2l-1 2H8l-1-2H5V5z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="mb-2 text-sm font-medium text-gray-600">
                                New Requests
                            </p>
                            <p class="text-lg font-semibold text-gray-700">
                                700
                            </p>
                        </div>
                    </div>
                    <!-- Card -->
                    <div class="flex items-center p-4 bg-white rounded-lg shadow-xs">
                        <div class="p-3 mr-4 text-green-500 bg-green-100 rounded-full">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="mb-2 text-sm font-medium text-gray-600">
                                All Males
                            </p>
                            <p class="text-lg font-semibold text-gray-700">
                                890
                            </p>
                        </div>
                    </div>
                    <!-- Card -->
                    <div class="flex items-center p-4 bg-white rounded-lg shadow-xs">
                        <div class="p-3 mr-4 text-green-500 bg-green-100 rounded-full">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="mb-2 text-sm font-medium text-gray-600">
                                All Females
                            </p>
                            <p class="text-lg font-semibold text-gray-700">
                                1150
                            </p>
                        </div>
                    </div>
                </div>

                <!-- New Table -->
                <div class="w-full overflow-hidden rounded-lg shadow-xs">
                    <div class="w-full overflow-x-auto">
                        <table class="w-full whitespace-no-wrap">
                            <thead>
                                <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50">
                                    <th class="px-4 py-3">All</th>
                                    <th class="px-4 py-3 break-normal">Name and Photo</th>
                                    <th class="px-4 py-3">System ID</th>
                                    <th class="px-4 py-3">Department</th>
                                    <th class="px-4 py-3">Gender</th>
                                    <th class="px-4 py-3">Challan No</th>
                                    <th class="px-4 py-3">Date</th>
                                    <th class="px-4 py-3">Status</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y">
                                <tr class="text-gray-700">
                                    <td class="px-4 py-3 text-sm">
                                        <input type="checkbox" class="form-checkbox h-4 w-4">
                                    </td>
                                    <td class="px-4 py-3">
                                        <div class="flex items-center text-sm">
                                            <!-- Avatar with inset shadow -->
                                            <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                                <img class="object-cover w-full h-full rounded-full" src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ" alt="" loading="lazy" />
                                                <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                                            </div>
                                            <div>
                                                <p class="font-semibold"> David </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        BSSE-22-A-M
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        BSSE
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        Male
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        6/10/2020
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        445335234252
                                    </td>
                                    <td class="px-4 py-3 text-xs">
                                        <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                                            Approved
                                        </span>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                    <div class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400">
                        <span class="flex items-center col-span-3">
                            Showing 21-30 of 100
                        </span>
                        <span class="col-span-2"></span>
                        <!-- Pagination -->
                        <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
                            <nav aria-label="Table navigation">
                                <ul class="inline-flex items-center">
                                    <li>
                                        <button class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-blue" aria-label="Previous">
                                            <svg aria-hidden="true" class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                                <path d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" fill-rule="evenodd"></path>
                                            </svg>
                                        </button>
                                    </li>
                                    <li>
                                        <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-blue">
                                            1
                                        </button>
                                    </li>
                                    <li>
                                        <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-blue">
                                            2
                                        </button>
                                    </li>
                                    <li>
                                        <button class="px-3 py-1 text-white transition-colors duration-150 bg-blue-600 border border-r-0 border-blue-600 rounded-md focus:outline-none focus:shadow-outline-blue">
                                            3
                                        </button>
                                    </li>
                                    <li>
                                        <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-blue">
                                            4
                                        </button>
                                    </li>
                                    <li>
                                        <span class="px-3 py-1">...</span>
                                    </li>
                                    <li>
                                        <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-blue">
                                            8
                                        </button>
                                    </li>
                                    <li>
                                        <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-blue">
                                            9
                                        </button>
                                    </li>
                                    <li>
                                        <button class="px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-blue" aria-label="Next">
                                            <svg class="w-4 h-4 fill-current" aria-hidden="true" viewBox="0 0 20 20">
                                                <path d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" fill-rule="evenodd"></path>
                                            </svg>
                                        </button>
                                    </li>
                                </ul>
                            </nav>
                        </span>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
</x-app-layout>
