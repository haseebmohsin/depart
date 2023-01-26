<div class="flex bg-gray-50"">
    <div class=" w-full">
    <div class="h-full md:px-10 xl:px-32">
        <div class="px-10 pt-2 pb-16">
            <div class="flex justify-between mt-4">
                <h2 class="mt-2 mb-2 text-2xl font-semibold text-gray-700">
                    Meter Readings
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
            <div class="mb-8 mt-4">
                <div class="mb-10">
                    <div class="w-full overflow-hidden rounded-lg shadow-xs">
                        <div class="w-full overflow-x-auto">
                            <table class="w-full whitespace-nowrap">
                                <thead>
                                    <tr
                                        class="text-xs font-semibold tracking-wide text-left text-gray-700 uppercase border-t border-b dark:border-gray-700 bg-gray-400">
                                        <th class="px-4 py-3 break-normal"> Out Reading </th>
                                        <th class="px-4 py-3"> In Reading </th>
                                        <th class="px-4 py-3"> Difference </th>
                                        <th class="px-4 py-3"> Bus No </th>
                                        <th class="px-4 py-3"> Date </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y">
                                    @forelse( $readings as $reading )
                                    <tr class="text-gray-700 hover:bg-gray-50">
                                        <td class="px-4 py-3 text-sm @auth 'border-r' @endauth">
                                            {{ $reading->out_reading }} Km
                                        </td>
                                        <td class="px-4 py-3 text-sm @auth 'border-r' @endauth">
                                            {{ $reading->in_reading }} Km
                                        </td>
                                        <td class="px-4 py-3 text-sm @auth 'border-r' @endauth">
                                            {{ $reading->in_reading - $reading->out_reading }} Km
                                        </td>
                                        <td class="px-4 py-3 text-sm @auth 'border-r' @endauth">
                                            {{ $reading->bus_no }}
                                        </td>
                                        <td class="px-4 py-3 text-sm @auth 'border-r' @endauth">
                                            {{ $reading->created_at->format('d/m/y') }}
                                        </td>
                                    </tr>
                                    @empty
                                    <tr class="text-gray-700 hover:bg-gray-50">
                                        <td class="px-4 py-3">
                                            <h3 class="text-lg text-gray-700 font-normal w-full"> No Readings found
                                            </h3>
                                        </td>
                                    </tr>
                                    @endforelse
                                </tbody>

                            </table>
                        </div>
                    </div>
                    <div class="px-4 py-3 text-xs font-semibold text-gray-500 border-t bg-gray-50">
                        {{ $readings->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
